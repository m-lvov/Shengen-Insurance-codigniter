<?php

namespace App\Libraries;

class QuoteCalculator
{
    public function calculateBase(int $days, bool $annual): int
    {
        if ($days < 1) {
            throw  new \InvalidArgumentException("Days must be greater than zero");
        }

        if (!$annual && $days >365){
            throw new \InvalidArgumentException(
                'A single trip cannot exceed 365 days'
            );
        }

        if ($annual) {
            return 20000;
        }

        return 2175 * $days;
    }

    public function getCoveragePercent(int $coverage): int
    {
        $rates = [
            35000 => 100,
            100000 => 160,
            500000 => 200,
            1000000 => 240,
        ];

        if (!isset($rates[$coverage])) {
            throw  new \InvalidArgumentException("Unknown coverage amount");
        }
        return $rates[$coverage];
    }

    public function getTripPercent(string $tripType): int
    {
        $rates = [
            'standard' => 100,
            'studying-abroad' => 120,
            'working-abroad' => 140,
            'cruise' => 150,
        ];
        if (!isset($rates[$tripType])) {
            throw  new \InvalidArgumentException("Unknown trip type");
        }
        return $rates[$tripType];
    }

    public function calculateAddons(array $addons): int
    {
    $prices = [
        'visa-cancellation' => 4900,
        'trip-cancellation' => 4900,
        'alcohol-intoxication' => 500,
        'lost-luggage' => 2500,
        'property-protection' => 3200,
        'active-recreation' => 8900,
        'extreme-sports' => 8900,
    ];

        $selected = [];

    foreach ($addons as $addon) {
        if(!is_string($addon) || !isset($prices[$addon])) {
            throw  new \InvalidArgumentException(
                "Unknown add-on"
            );
        }
        $selected[$addon] = $prices[$addon];
    }
    return array_sum($selected);
    }

    public function calculateTotal(
        int $days,
        bool $annual,
        int $coverage,
        string $tripType,
        array $addons,
        int $travelers,
        int $discountPercent = 0
    ): int
    {
        if($travelers < 1 || $travelers > 10){
            throw  new \InvalidArgumentException("The number of travelers must be between 1 and 10");
        };

        if(!in_array($discountPercent, [0, 10], true)){
            throw  new \InvalidArgumentException("Unknown discount");
        }

        $base = $this->calculateBase($days, $annual);
        $coveragePercent = $this->getCoveragePercent($coverage);
        $tripPercent = $this->getTripPercent($tripType);
        $addonsTotal = $this->calculateAddons($addons);

        $baseTotal = $base * $coveragePercent / 100;
        $baseTotal = $baseTotal * $tripPercent / 100;
        $baseTotal = $baseTotal * (100 - $discountPercent) / 100;

        $total = ($baseTotal + $addonsTotal) * $travelers;

        return (int) round($total);
    }

}
