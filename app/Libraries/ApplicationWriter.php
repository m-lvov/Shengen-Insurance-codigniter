<?php

namespace App\Libraries;

use App\Models\InsuranceApplicationModel;
use App\Models\ApplicationTouristModel;
use Config\Database;

class ApplicationWriter
{
    private $db;
    private $applications;
    private $tourists;

    public function __construct()
    {
        $this->db = Database::connect();

        $this->applications = new InsuranceApplicationModel(
            $this->db
        );

        $this->tourists = new ApplicationTouristModel(
            $this->db
        );
    }

    public function save(array $application, array $tourists): string
    {
        $validator = new TouristValidator();
        $tourists = $validator->validateTourists($tourists);

        $requestKey = $application['request_key'] ?? null;
        $requestHash = $application['request_hash'] ?? null;

        if (
            !is_string($requestKey) ||
            !is_string($requestHash) ||
            !preg_match('/^[a-f0-9]{64}$/D', $requestKey) ||
            !preg_match('/^[a-f0-9]{64}$/D', $requestHash)
        ) {
            throw new \InvalidArgumentException(
                'Invalid application request identifiers'
            );
        }

        $existing = $this->findByRequest($requestKey, $requestHash);

        if ($existing !== null) {
            return $existing['reference'];
        }

        $reference = bin2hex(random_bytes(16));

        $application['reference'] = $reference;
        $application['status'] = 'draft';
        $application['currency'] = 'USD';
        $application['travelers_count'] = count($tourists);
        $application['consent_at'] = date('Y-m-d H:i:s');


        if (!$this->db->transBegin()) {
            throw new \RuntimeException(
                'Unable to start saving the application'
            );
        }

        try {
            $applicationId = $this->applications->insert($application);

            if ($applicationId === false) {
                throw new \RuntimeException(
                    'Unable to save the application'
                );
            }

            foreach (array_values($tourists) as $index => $tourist) {
                $touristId = $this->tourists->insert([
                    'application_id' => $applicationId,
                    'position' => $index + 1,
                    'first_name' => trim($tourist['firstName']),
                    'last_name' => trim($tourist['lastName']),
                    'passport' => trim($tourist['passport']),
                    'birth_date' => sprintf(
                        '%04d-%02d-%02d',
                        (int) $tourist['year'],
                        (int) $tourist['month'],
                        (int) $tourist['day']
                    ),
                ]);

                if ($touristId === false) {
                    throw new \RuntimeException(
                        'Unable to save a tourist'
                    );
                }
            }

            if (
                !$this->db->transStatus() ||
                !$this->db->transCommit()
            ) {
                throw new \RuntimeException(
                    'Unable to complete saving the application'
                );
            }
        } catch (\Throwable $error) {
            $this->db->transRollback();
            $this->db->resetTransStatus();

            $existing = $this->findByRequest($requestKey, $requestHash);

            if ($existing !== null) {
                return $existing['reference'];
            }

            throw $error;
        }

        return $reference;
    }

    public function findByRequest(
        string $requestKey,
        string $requestHash
    ): ?array {
        $application = $this->applications
            ->where('request_key', $requestKey)
            ->first();

        if ($application === null) {
            return null;
        }

        if (
            !is_string($application['request_hash']) ||
            !hash_equals($application['request_hash'], $requestHash)
        ) {
            throw new \DomainException(
                'This request key was already used for different data'
            );
        }

        return $application;
    }
}