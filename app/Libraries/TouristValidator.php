<?php

    namespace App\Libraries;

    class TouristValidator
    {
        public function validateTourists(mixed $tourists): array
        {
            if(!is_array($tourists) || $tourists === []){
                throw new \InvalidArgumentException('Add at least one tourist');
            }

            if(count($tourists) > 10){
                throw new \InvalidArgumentException(
                    'A maximum of 10 tourists is allowed'
                );
            }

            $today = new \DateTimeImmutable('today');

            foreach(array_values($tourists) as $index => $tourist){
                if(!is_array($tourist)){
                    throw new \InvalidArgumentException('Invalid tourist data');
                }

                foreach(['firstName', 'lastName'] as $field){
                    $value = $tourist[$field] ?? null;

                    if(
                        !is_string($value) ||
                        !preg_match("/^[A-Za-z]+(?:[ '-][A-Za-z]+)*$/D", trim($value))
                    ) {
                        throw new \InvalidArgumentException('Enter a valid first and last name');
                    }
                }

                $passport = $tourist['passport'] ?? null;

                if(
                    !is_string($passport) ||
                    !preg_match('/^[A-Z]{2}[0-9]{6}$/D', trim($passport))
                ) {
                    throw new \InvalidArgumentException('Enter a passport number: AA123456');
                }

                $month = $tourist['month'] ?? null;
                $day = $tourist['day'] ?? null;
                $year = $tourist['year'] ?? null;

                if(
                    !is_string($month) ||
                    !is_string($day) ||
                    !is_string($year) ||
                    !preg_match('/^[0-9]{1,2}$/D', $month) ||
                    !preg_match('/^[0-9]{1,2}$/D', $day) ||
                    !preg_match('/^[0-9]{4}$/D', $year)
                ){
                    throw new \InvalidArgumentException(
                        'Enter a valid date of birth'
                    );
                }

                if(!checkdate((int) $month, (int) $day, (int) $year)){
                    throw new \InvalidArgumentException(
                        'Enter a valid date of birth'
                    );
                }

                $birthDate = \DateTimeImmutable::createFromFormat(
                    '!Y-m-d',
                    sprintf('%04d-%02d-%02d', (int) $year, (int) $month, (int) $day)
                );

                if($birthDate === false || $birthDate > $today){
                    throw new \InvalidArgumentException(
                        'Date of birth cannot be in the future'
                    );
                }

                $age = $birthDate->diff($today)->y;

                if($age > 90) {
                    throw new \InvalidArgumentException(
                        'Tourists must be no older than 90 years'
                    );
                }

                if ($index === 0 && $age < 16){
                    throw new \InvalidArgumentException(
                        'The main tourist must be at least 16 years old'
                    );
                }
            }
            return $tourists;
        }

        public function validateEmail(mixed $email): string
        {
            if(!is_string($email)){
                throw new \InvalidArgumentException(
                    'Enter a valid email'
                );
            }

            $email = trim($email);

            if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                throw new \InvalidArgumentException(
                    'Enter a valid email'
                );
            }
            return $email;
        }

        public function validatePhone(mixed $phone): string
        {
            if(!is_string($phone)){
                throw new \InvalidArgumentException(
                    'Enter a valid phone number'
                );
            }
            $phone = trim($phone);

            if(!preg_match('/^\+380 [0-9]{2} [0-9]{3} [0-9]{2} [0-9]{2}$/D', $phone)){
                throw new \InvalidArgumentException(
                    'Enter a phone number: +380 99 777 77 77'
                );
            }

            return $phone;
        }

        public function validateConsent(mixed $consent): void
        {
            if($consent !== 'on'){
                throw new \InvalidArgumentException(
                    'Please agree to the Terms & Conditions and Privacy Policy'
                );
            }
        }
    }