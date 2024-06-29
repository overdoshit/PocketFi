<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Packagetypes extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idPackage' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'auto_increment' => true
            ],
            'packageType' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'minimumRentDays' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('idPackage', true);
        $this->forge->addUniqueKey('packageType');
        $this->forge->createTable('packagetypes');

        $db = \Config\Database::connect();
        $db->query("
            ALTER TABLE `packagetypes`
            ADD `createdAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            ADD `updatedAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            ADD `deletedAt` TIMESTAMP NULL DEFAULT NULL;
        ");
    }

    public function down()
    {
        $this->forge->dropTable('packagetypes');
    }
}
