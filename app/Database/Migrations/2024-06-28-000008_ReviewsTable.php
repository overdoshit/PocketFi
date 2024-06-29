<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class ReviewsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'idReview' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'imageUrl' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'default'    => '/assets/images/users/default.jpg',
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
                'default'    => 'Guest',
            ],
            'rating' => [
                'type'       => 'INT',
                'constraint' => 1,
                'default'    => 5,
            ],
            'comment' => [
                'type'       => 'TEXT',
            ],
        ]);

        $this->forge->addKey('idReview', true);
        $this->forge->addKey('email');
        $this->forge->createTable('reviews');

        $db = \Config\Database::connect();
        $db->query("
            ALTER TABLE `reviews`
            ADD `createdAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
            ADD `updatedAt` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            ADD `deletedAt` TIMESTAMP NULL DEFAULT NULL;
        ");
    }

    public function down()
    {
        $this->forge->dropTable('reviews');
    }
}
