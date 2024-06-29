<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Countries extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idCountry' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'auto_increment' => true,
            ],
            'country' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'flagUrl' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('idCountry', true);
        $this->forge->addUniqueKey('country');
        $this->forge->createTable('countries');

        $db = \Config\Database::connect();
        $db->query("
            ALTER TABLE `countries`
            ADD `createdAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            ADD `updatedAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            ADD `deletedAt` TIMESTAMP NULL DEFAULT NULL;
        ");
    }

    public function down()
    {
        $this->forge->dropTable('countries');
    }
}
