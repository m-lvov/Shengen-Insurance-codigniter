<?php

namespace App\Libraries;

use DateTimeImmutable;
use DateTimeZone;
use Dompdf\Dompdf;
use IntlDateFormatter;
use NumberFormatter;

class DemoPolicyPdf
{
    public function render(array $application, array $tourists, string $locale): string
    {
        $countryLabels = lang('SiteClient.countries', [], $locale);
        $countryLabels = is_array($countryLabels) ? $countryLabels : [];
        $countries = json_decode($application['countries'], true, 512, JSON_THROW_ON_ERROR);
        $countryNames = array_map(
            static fn (string $country): string => $countryLabels[$country] ?? $country,
            $countries
        );

        $dates = new IntlDateFormatter($locale, IntlDateFormatter::MEDIUM, IntlDateFormatter::NONE, 'UTC');
        $timezone = new DateTimeZone('UTC');
        $start = $dates->format(new DateTimeImmutable($application['start_date'], $timezone));
        $end = $application['end_date'] === null
            ? null
            : $dates->format(new DateTimeImmutable($application['end_date'], $timezone));

        $numbers = new NumberFormatter($locale, NumberFormatter::DECIMAL);
        $money = new NumberFormatter($locale, NumberFormatter::CURRENCY);

        $html = view('pdf/demo_policy', [
            'locale' => $locale,
            'reference' => $application['reference'],
            'countries' => implode(', ', $countryNames),
            'start' => $start,
            'end' => $end,
            'annual' => (bool) $application['annual'],
            'coverage' => $numbers->format((int) $application['coverage']) . ' EUR',
            'total' => $money->formatCurrency((int) $application['total_cents'] / 100, $application['currency']),
            'tourists' => $tourists,
        ]);

        $pdf = new Dompdf();
        $pdf->loadHtml($html, 'UTF-8');
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();

        return $pdf->output();
    }
}
