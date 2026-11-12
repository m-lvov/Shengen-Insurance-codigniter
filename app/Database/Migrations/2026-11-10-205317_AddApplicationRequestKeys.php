<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddApplicationRequestKeys extends Migration
{
    public function up()
    {
        $this->forge->addColumn('insurance_applications', [
            'request_key' => [
                'type' => 'VARCHAR',
                'constraint' => 64,
                'null' => true,
            ],
            'request_hash' => [
                'type' => 'VARCHAR',
                'constraint' => 64,
                'null' => true,
            ],
        ]);

        $this->forge->addUniqueKey(
            'request_key',
            'insurance_applications_request_key_unique'
        );

        $this->forge->processIndexes('insurance_applications');
    }

    public function down()
    {
        $this->forge->dropKey(
            'insurance_applications',
            'insurance_applications_request_key_unique'
        );

        $this->db->query(
            'ALTER TABLE insurance_applications DROP COLUMN request_key'
        );

        $this->db->query(
            'ALTER TABLE insurance_applications DROP COLUMN request_hash'
        );
    }
}
