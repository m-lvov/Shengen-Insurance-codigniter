<?php

    namespace App\Libraries;

    class TripValidator
    {
        public function validateCountries(mixed $countries): array
        {
            if(!is_array($countries) || $countries === []){
                throw new \InvalidArgumentException('Select at least one destination');
            }

            $allowedCountries = config('Destinations')->countries;

            foreach ($countries as $country) {
                if(!is_string($country) || trim($country) === ''){
                    throw new \InvalidArgumentException('Invalid destination');
                }

                if(!in_array($country, $allowedCountries, true)){
                    throw new \InvalidArgumentException('Unknown destination');
                }
            }
            return $countries;
        }

        public function validateDate(mixed $value): \DateTimeImmutable
        {
            if (
                !is_string($value) ||
                !preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/D', $value)
            ) {
                throw new \InvalidArgumentException(
                    'Enter a date in YYYY-MM-DD format'
                );
            }

            $date = \DateTimeImmutable::createFromFormat(
                '!Y-m-d',
                $value
            );

            if ($date === false || $date->format('Y-m-d') !== $value) {
                throw new \InvalidArgumentException(
                    'Enter a valid date'
                );
            }

            return $date;
        }

        public function validatePeriod(
            mixed $startDate,
            mixed $endDate,
            bool $annual
        ): array {
            $start = $this->validateDate($startDate);
            $today = new \DateTimeImmutable('today');

            if ($start < $today) {
                throw new \InvalidArgumentException(
                    'Start date cannot be in the past'
                );
            }

            $end = null;
            $days = 1;

            if (!$annual) {
                $end = $this->validateDate($endDate);

                if ($end < $start) {
                    throw new \InvalidArgumentException(
                        'End date cannot be before the start date'
                    );
                }

                $days = (int) $start->diff($end)->days + 1;

                if ($days > 365) {
                    throw new \InvalidArgumentException(
                        'A single trip cannot exceed 365 days'
                    );
                }
            }

            return [
                'start_date' => $start->format('Y-m-d'),
                'end_date' => $end?->format('Y-m-d'),
                'days' => $days,
            ];
        }
    }