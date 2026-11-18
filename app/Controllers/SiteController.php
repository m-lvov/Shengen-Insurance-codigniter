<?php

namespace App\Controllers;

use App\Libraries\TouristValidator;
use App\Libraries\QuotePreparer;
use App\Libraries\ApplicationWriter;
use App\Libraries\ApplicationRequestKey;
use App\Libraries\DemoPolicyPdf;
use App\Models\ApplicationTouristModel;
use App\Models\InsuranceApplicationModel;
use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\ResponseInterface;

class SiteController extends BaseController
{
    public function index(): string
    {
        session();
        return view('home');
    }

    public function about(): string
    {
        session();
        return view('about');
    }

    public function careers(): string
    {
        session();
        return view('careers');
    }

    public function quote(): string
    {
        session();
        return view('quote');
    }

    public function sendContact()
    {
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        $questionType = $this->request->getPost('questionType');

        session()->setFlashData('contact_old', [
            'name' => is_string($name) ? $name : '',
            'email' => is_string($email) ? $email : '',
            'phone' => is_string($phone) ? $phone : '',
            'questionType' => is_string($questionType) ? $questionType : '',
        ]);

        if(!is_string($name) || trim($name) === ""){
            return redirect()
                ->to('/#contact', 303)
                ->with('contact_error', lang('SiteCopy.please_enter_your_name'));
        }
        $name = trim($name);
        if(!preg_match("/^[a-z]+(?:[ '-][a-z]+)*$/i", $name)){
            return redirect()
                ->to('/#contact', 303)
                ->with(
                    'contact_error',
                    lang('SiteCopy.use_latin_letters_spaces_hyphens_or_apostrophe')
                );
        }
        if(!is_string($email) || !filter_var(trim($email), FILTER_VALIDATE_EMAIL)){
            return redirect()
                ->to('/#contact', 303)
                ->with('contact_error', lang('SiteCopy.please_enter_a_valid_email_address'));
        }
        $email = trim($email);

        if(!is_string($phone) || !preg_match('/^\+380 \d{2} \d{3} \d{2} \d{2}$/', trim($phone))){
            return redirect()
                ->to('/#contact', 303)
                ->with('contact_error', lang('SiteCopy.please_enter_your_phone_number_as_380_xx_xxx_x'));
        }
        $phone = trim($phone);

        $allowedQuestions = [
            'choosing-insurance',
            'insurance-requirement',
            'policy-coverage',
            'visa-refusal-refund',
            'partnership',
        ];

        if (!in_array($questionType, $allowedQuestions, true)) {
            return redirect()
                ->to('/#contact', 303)
                ->with('contact_error', lang('SiteCopy.please_select_a_question_type'));
        }
        session()->remove('contact_old');

        return redirect()
            ->to('/#contact', 303)
            ->with('contact_success', lang('SiteCopy.details_checked_your_message_has_not_been_sent')
            );
    }

    public function calculate()
    {
        $this->response->setHeader('X-CSRF-Hash', csrf_hash());

        $travelers = filter_var(
            $this->request->getPost('travelers'),
            FILTER_VALIDATE_INT,
            ['options' => ['min_range' => 1, 'max_range' => 10]]
        );

        if ($travelers === false) {
            return $this->response
                ->setStatusCode(422)
                ->setJSON([
                    'error' => 'The number of travelers must be between 1 and 10',
                ]);
        }

        try {
            $preparer = new QuotePreparer();

            $prepared = $preparer->prepare(
                $this->request->getPost(),
                $travelers
            );
        } catch (\InvalidArgumentException $error) {
            return $this->response
                ->setStatusCode(422)
                ->setJSON([
                    'error' => $error->getMessage(),
                ]);
        }

        $application = $prepared['application'];

        return $this->response->setJSON([
            'totalCents' => $application['total_cents'],
            'days' => $prepared['days'],
            'discountPercent' => $application['discount_percent'],
            'priceBeforeDiscount' => $application['price_before_discount'],
        ]);
    }

    public function validateTourists()
    {
        $this->response->setHeader('X-CSRF-Hash', csrf_hash());

        $validator = new TouristValidator();

        try {
            $tourists = $validator->validateTourists(
                $this->request->getPost('tourists')
            );

            $validator->validateEmail(
                $this->request->getPost('email')
            );

            $validator->validatePhone(
                $this->request->getPost('phone')
            );

            $validator->validateConsent(
                $this->request->getPost('consent')
            );
        } catch (\InvalidArgumentException $error) {
            return $this->response
                ->setStatusCode(422)
                ->setJSON([
                    'error' => $error->getMessage(),
                ]);
        }
        return $this->response->setJSON([
            'valid' => true,
            'travelersCount' => count($tourists),
        ]);
    }

    public function saveApplication()
    {
        $this->response->setHeader('X-CSRF-Hash', csrf_hash());

        try {
            $validator = new TouristValidator();

            $tourists = $validator->validateTourists(
                $this->request->getPost('tourists')
            );

            $email = $validator->validateEmail(
                $this->request->getPost('email')
            );

            $phone = $validator->validatePhone(
                $this->request->getPost('phone')
            );

            $validator->validateConsent(
                $this->request->getPost('consent')
            );

            $preparer = new QuotePreparer();

            $prepared = $preparer->prepare(
                $this->request->getPost(),
                count($tourists)
            );

            $application = $prepared['application'];
            $application['email'] = $email;
            $application['phone'] = $phone;

            $requestKeys = new ApplicationRequestKey();
            $requestKey = $requestKeys->build(
                $this->request->getPost('requestKey')
            );
            $requestHash = $requestKeys->fingerprint($application, $tourists);
            $application['request_key'] = $requestKey;
            $application['request_hash'] = $requestHash;

            $writer = new ApplicationWriter();
            $reference = $writer->save($application, $tourists);
        } catch (\InvalidArgumentException $error) {
            return $this->response
                ->setStatusCode(422)
                ->setJSON([
                    'error' => $error->getMessage(),
                ]);
        } catch (\DomainException $error) {
            return $this->response
                ->setStatusCode(409)
                ->setJSON(['error' => $error->getMessage()]);
        } catch (\Throwable $error) {
            log_message('error', 'Unable to save insurance application');

            return $this->response
                ->setStatusCode(500)
                ->setJSON([
                    'error' => 'Unable to save your application. Please try again',
                ]);
        }

        $session = session();
        $checkoutApplications = $session->get('checkoutApplications') ?? [];
        $checkoutApplications[$reference] = true;
        $session->set('checkoutApplications', $checkoutApplications);

        return $this->response
            ->setStatusCode(201)
            ->setJSON([
                'reference' => $reference,
                'travelersCount' => count($tourists),
                'totalCents' => $application['total_cents'],
                'priceBeforeDiscount' => $application['price_before_discount'],
                'discountPercent' => $application['discount_percent'],
            ]);
    }

    public function completeDemoPayment(): ResponseInterface
    {
        $this->response->setHeader('X-CSRF-Hash', csrf_hash());
        $reference = $this->request->getPost('reference');
        $applications = model(InsuranceApplicationModel::class);
        $application = $this->checkoutApplication($applications, $reference);

        if ($application === null) {
            return $this->response->setStatusCode(404)->setJSON([
                'error' => lang('DemoPolicy.applicationUnavailable'),
            ]);
        }

        if ($application['status'] === 'draft') {
            $updated = $applications->where('status', 'draft')->update(
                $application['id'],
                ['status' => InsuranceApplicationModel::DEMO_COMPLETED]
            );
            if (!$updated) {
                return $this->response->setStatusCode(500)->setJSON([
                    'error' => lang('DemoPolicy.confirmationFailed'),
                ]);
            }
        } elseif ($application['status'] !== InsuranceApplicationModel::DEMO_COMPLETED) {
            return $this->response->setStatusCode(409)->setJSON([
                'error' => lang('DemoPolicy.applicationUnavailable'),
            ]);
        }

        return $this->response->setJSON([
            'downloadUrl' => url_to('demo-policy', $application['reference']),
        ]);
    }

    public function downloadDemoPolicy(string $reference): ResponseInterface
    {
        $application = $this->checkoutApplication(model(InsuranceApplicationModel::class), $reference);
        if ($application === null || $application['status'] !== InsuranceApplicationModel::DEMO_COMPLETED) {
            throw PageNotFoundException::forPageNotFound();
        }

        $tourists = model(ApplicationTouristModel::class)
            ->select('first_name, last_name')
            ->where('application_id', $application['id'])
            ->orderBy('position')
            ->findAll();

        $pdf = (new DemoPolicyPdf())->render($application, $tourists, $this->request->getLocale());

        return $this->response
            ->download('demo-policy-' . $reference . '.pdf', $pdf, true)
            ->setHeader('Cache-Control', 'private, no-store');
    }

    private function checkoutApplication(InsuranceApplicationModel $applications, mixed $reference): ?array
    {
        if (!is_string($reference) || !preg_match('/\A[a-f0-9]{32}\z/', $reference)) {
            return null;
        }

        $checkoutApplications = session()->get('checkoutApplications') ?? [];
        if (!isset($checkoutApplications[$reference])) {
            return null;
        }

        return $applications->where('reference', $reference)->first();
    }
}
