<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function send()
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
}