<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Orders extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idOrder' => [
                'type'       => 'VARCHAR',
                'constraint' => '25',
                'null'       => false,
            ],
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null'       => false,
            ],
            'idProduct' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => false,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'phone' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
                'null'       => false,
            ],
            'province' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'city' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'district' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'subdistrict' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'postcode' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
                'null'       => false,
            ],
            'shippingAddress' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'expedition' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'trackNumber' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null'       => true,
                'default'    => null,
            ],
            'shippingPrice' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => false,
            ],
            'startDate' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'endDate' => [
                'type' => 'DATE',
                'null' => false,
            ],
            'durationRent' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => false,
            ],
            'rentCost' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => false,
            ],
            'productName' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => false,
            ],
            'deposit' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => false,
            ],
            'discount' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => true,
                'default'    => '0',
            ],
            'promoCode' => [
                'type'       => 'VARCHAR',
                'constraint' => '50',
                'null'       => true,
                'default'    => null,
            ],
            'grossAmount' => [
                'type'       => 'INT',
                'constraint' => 10,
                'null'       => false,
            ],
            'token' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'returnExpedition' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'null'       => true,
                'default'    => null,
            ],
            'returnTrackNumber' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
                'null'       => true,
                'default'    => null,
            ],
        ]);

        $this->forge->addKey('idOrder', true);
        $this->forge->addKey('idProduct');
        $this->forge->addKey('email');
        $this->forge->addKey('promoCode');
        $this->forge->addForeignKey('idProduct', 'products', 'idProduct', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('email', 'users', 'email', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('promoCode', 'promo', 'code', 'CASCADE', 'CASCADE');
        $this->forge->createTable('orders');

        $db = \Config\Database::connect();
        $db->query("
            ALTER TABLE `orders`
            ADD `createdAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            ADD `updatedAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            ADD `deletedAt` TIMESTAMP NULL DEFAULT NULL;
        ");
    }

    public function down()
    {
        $this->forge->dropTable('orders');
    }
}
