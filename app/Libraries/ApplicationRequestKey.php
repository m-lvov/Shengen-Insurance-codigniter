<?php

namespace App\Libraries;

class ApplicationRequestKey
{
    public function build(mixed $value): string
    {
        if (
            !is_string($value) ||
            !preg_match('/^[a-f0-9]{32}$/D', $value)
        ) {
            throw new \InvalidArgumentException(
                'Invalid application request key'
            );
        }

        $session = session();
        $secret = $session->get('application_request_secret');

        if (!is_string($secret) || $secret === '') {
            $secret = bin2hex(random_bytes(32));

            $session->set(
                'application_request_secret',
                $secret
            );
        }

        return hash_hmac('sha256', $value, $secret);
    }

    public function fingerprint(
        array $application,
        array $tourists
    ): string {
        ksort($application);

        $people = [];

        foreach (array_values($tourists) as $tourist) {
            $people[] = [
                'first_name' => trim($tourist['firstName']),
                'last_name' => trim($tourist['lastName']),
                'passport' => trim($tourist['passport']),
                'birth_date' => sprintf(
                    '%04d-%02d-%02d',
                    (int) $tourist['year'],
                    (int) $tourist['month'],
                    (int) $tourist['day']
                ),
            ];
        }

        return hash(
            'sha256',
            json_encode(
                [
                    'application' => $application,
                    'tourists' => $people,
                ],
                JSON_THROW_ON_ERROR
            )
        );
    }
}