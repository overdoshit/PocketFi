<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Products extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idProduct' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'auto_increment' => true,
            ],
            'category' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'country' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'packageType' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'dataUsage' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'deposit' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => false,
            ],
            'dailyPrice' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => false,
            ],
            'stock' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => false,
            ],
            'minimumRentDays' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => false,
            ],
            'maxDownloadSpeed' => [
                'type'       => 'DECIMAL',
                'constraint' => '5,2',
                'null'       => false,
            ],
            'maxUploadSpeed' => [
                'type'       => 'DECIMAL',
                'constraint' => '5,2',
                'null'       => false,
            ],
            'batteryHours' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => false,
            ],
            'sharedDevices' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => false,
            ],
            'network' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'countryFlagUrl' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'imageUrl' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'notes' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'bestSeller' => [
                'type'       => 'ENUM',
                'constraint' => ['Y', 'N'],
                'default'    => 'N',
                'null'       => false,
            ],
        ]);

        $this->forge->addKey('idProduct', true);
        $this->forge->addKey('category');
        $this->forge->addKey('country');
        $this->forge->addKey('packageType');
        $this->forge->addForeignKey('category', 'categories', 'category', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('country', 'countries', 'country', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('packageType', 'packagetypes', 'packageType', 'CASCADE', 'CASCADE');
        $this->forge->createTable('products');

        $db = \Config\Database::connect();
        $db->query("
            ALTER TABLE `products`
            ADD `createdAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            ADD `updatedAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            ADD `deletedAt` TIMESTAMP NULL DEFAULT NULL;
        ");
    }

    public function down()
    {
        $this->forge->dropTable('products');
    }
}
