<?php

namespace App\Libraries;

class QuotePreparer
{
    public function validateOptions(array $data): array
    {
        $annual = $data['annual'] ?? null;
        $coverage = $data['coverage'] ?? null;
        $source = $data['source'] ?? 'hero';
        $tripType = $data['tripType'] ?? null;
        $addons = $data['addons'] ?? [];

        if (!in_array($annual, ['0', '1'], true)) {
            throw new \InvalidArgumentException(
                'Invalid insurance data'
            );
        }

        if (!in_array(
            $coverage,
            ['35000', '100000', '500000', '1000000'],
            true
        )) {
            throw new \InvalidArgumentException(
                'Invalid coverage amount'
            );
        }

        if (!in_array($source, ['hero', 'visa-check'], true)) {
            throw new \InvalidArgumentException(
                'Invalid quote source'
            );
        }

        if(!is_string($tripType)) {
            throw new \InvalidArgumentException(
                'Invalid trip type'
            );
        }

        if (!is_array($addons)) {
            throw new \InvalidArgumentException(
                'Invalid add-ons format'
            );
        }

        $calculator = new QuoteCalculator();

        $calculator->getTripPercent($tripType);
        $calculator->calculateAddons($addons);

        return [
            'annual' => $annual === '1',
            'coverage' => (int) $coverage,
            'source' => $source,
            'trip_type' => $tripType,
            'addons' => array_values(array_unique($addons)),
        ];
    }

    public function prepare(array $data, int $travelers): array
    {
        $options = $this->validateOptions($data);

        $validator = new TripValidator();

        $countries = $validator->validateCountries(
            $data['countries'] ?? null
        );

        $period = $validator->validatePeriod(
            $data['startDate'] ?? null,
            $data['endDate'] ?? null,
            $options['annual']
        );

        $discountPercent = $options['source'] === 'visa-check' ? 10 : 0;

        $calculator = new QuoteCalculator();

        $totalCents = $calculator->calculateTotal(
            $period['days'],
            $options['annual'],
            $options['coverage'],
            $options['trip_type'],
            $options['addons'],
            $travelers,
            $discountPercent
        );

        $priceBeforeDiscount = $calculator->calculateTotal(
            $period['days'],
            $options['annual'],
            $options['coverage'],
            $options['trip_type'],
            $options['addons'],
            $travelers
        );

        return [
            'days' => $period['days'],
            'application' => [
                'countries' => json_encode(
                    array_values(array_unique($countries)),
                    JSON_THROW_ON_ERROR
                ),
                'start_date' => $period['start_date'],
                'end_date' => $period['end_date'],
                'annual' => $options['annual'],
                'travelers_count' => $travelers,
                'coverage' => $options['coverage'],
                'trip_type' => $options['trip_type'],
                'addons' => json_encode(
                    $options['addons'],
                    JSON_THROW_ON_ERROR
                ),
                'source' => $options['source'],
                'total_cents' => $totalCents,
                'price_before_discount' => $priceBeforeDiscount,
                'discount_percent' => $discountPercent,
            ],
        ];
    }
}