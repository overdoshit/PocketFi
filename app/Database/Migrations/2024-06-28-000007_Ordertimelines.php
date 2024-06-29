<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ordertimelines extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idTimelines' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'auto_increment' => true
            ],
            'idOrder' => [
                'type'       => 'VARCHAR',
                'constraint' => '25',
                'null'       => false,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'description' => [
                'type' => 'TEXT',
                'null' => false,
            ],
        ]);

        $this->forge->addKey('idTimelines', true);
        $this->forge->addKey('idOrder');
        $this->forge->addForeignKey('idOrder', 'orders', 'idOrder', 'CASCADE', 'CASCADE');
        $this->forge->createTable('ordertimelines');

        $db = \Config\Database::connect();
        $db->query("
            ALTER TABLE `ordertimelines`
            ADD `createdAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            ADD `updatedAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            ADD `deletedAt` TIMESTAMP NULL DEFAULT NULL;
        ");
    }

    public function down()
    {
        $this->forge->dropTable('ordertimelines');
    }
}
