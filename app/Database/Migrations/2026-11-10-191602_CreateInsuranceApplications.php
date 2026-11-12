<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateInsuranceApplications extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INTEGER',
                'auto_increment' => true,
            ],
            'reference' => ['type' => 'VARCHAR', 'constraint' => 32],
            'status' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
                'default' => 'draft',
            ],
            'countries' => ['type' => 'TEXT'],
            'start_date' => ['type' => 'DATE'],
            'end_date' => ['type' => 'DATE', 'null' => true],
            'annual' => ['type' => 'BOOLEAN'],
            'travelers_count' => ['type' => 'INTEGER'],
            'coverage' => ['type' => 'INTEGER'],
            'trip_type' => ['type' => 'VARCHAR', 'constraint' => 30],
            'addons' => ['type' => 'TEXT'],
            'source' => ['type' => 'VARCHAR', 'constraint' => 20],
            'total_cents' => ['type' => 'INTEGER'],
            'price_before_discount' => ['type' => 'INTEGER'],
            'discount_percent' => ['type' => 'INTEGER'],
            'currency' => [
                'type' => 'VARCHAR',
                'constraint' => 3,
                'default' => 'USD',
            ],
            'email' => ['type' => 'VARCHAR', 'constraint' => 254],
            'phone' => ['type' => 'VARCHAR', 'constraint' => 32],
            'consent_at' => ['type' => 'DATETIME'],
            'created_at' => ['type' => 'DATETIME'],
            'updated_at' => ['type' => 'DATETIME'],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addUniqueKey('reference');
        $this->forge->createTable('insurance_applications');
    }

    public function down()
    {
        $this->forge->dropTable('insurance_applications');
    }
}
