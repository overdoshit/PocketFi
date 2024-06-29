<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Promo extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idPromo' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'auto_increment' => true,
            ],
            'code' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
            ],
            'discount' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'maxDiscountAmount' => [
                'type'       => 'INT',
                'constraint' => 10,
            ],
            'maxUsage' => [
                'type'       => 'INT',
                'constraint' => 10,
            ],
            'usedCount' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => true,
                'default'    => 0,
            ],
            'startDate' => [
                'type' => 'DATE',
            ],
            'endDate' => [
                'type' => 'DATE',
            ],
        ]);

        $this->forge->addKey('idPromo', true);
        $this->forge->addUniqueKey('code');
        $this->forge->createTable('promo');

        $db = \Config\Database::connect();
        $db->query("
            ALTER TABLE `promo`
            ADD `createdAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            ADD `updatedAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            ADD `deletedAt` TIMESTAMP NULL DEFAULT NULL;
        ");
    }

    public function down()
    {
        $this->forge->dropTable('promo');
    }
}
