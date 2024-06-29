<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categories extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idCategory' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'auto_increment' => true,
            ],
            'category' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'imageUrl' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('idCategory', true);
        $this->forge->addUniqueKey('category');
        $this->forge->createTable('categories');

        $db = \Config\Database::connect();
        $db->query("
            ALTER TABLE `categories`
            ADD `createdAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            ADD `updatedAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            ADD `deletedAt` TIMESTAMP NULL DEFAULT NULL;
        ");
    }

    public function down()
    {
        $this->forge->dropTable('categories');
    }
}
