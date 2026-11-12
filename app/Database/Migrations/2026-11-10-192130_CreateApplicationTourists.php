<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateApplicationTourists extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INTEGER',
                'auto_increment' => true,
            ],
            'application_id' => ['type' => 'INTEGER'],
            'position' => ['type' => 'INTEGER'],
            'first_name' => ['type' => 'VARCHAR', 'constraint' => 100],
            'last_name' => ['type' => 'VARCHAR', 'constraint' => 100],
            'passport' => ['type' => 'VARCHAR', 'constraint' => 8],
            'birth_date' => ['type' => 'DATE'],
        ]);

        $this->forge->addKey('id', true);

        $this->forge->addUniqueKey([
            'application_id',
            'position',
        ]);

        $this->forge->addForeignKey(
            'application_id',
            'insurance_applications',
            'id',
            'RESTRICT',
            'CASCADE'
        );

        $this->forge->createTable('application_tourists');
    }

    public function down()
    {
        $this->forge->dropTable('application_tourists');
    }
}
