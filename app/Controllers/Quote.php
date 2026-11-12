<?php
namespace App\Controllers;

use App\Libraries\TouristValidator;
use App\Libraries\QuotePreparer;
use App\Libraries\ApplicationWriter;
use App\Libraries\ApplicationRequestKey;

class Quote extends BaseController
{
    public function index(): string
    {
        session();

        return view('quote');
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
}