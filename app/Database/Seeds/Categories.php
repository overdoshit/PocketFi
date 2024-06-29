<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Categories extends Seeder
{
    public function run()
    {
        $data = [
            [
                'category' => 'MIFI Indonesia',
                'imageUrl' => '/assets/images/mifi.png',
            ],
            [
                'category' => 'MIFI International',
                'imageUrl' => '/assets/images/mifi.png',
            ],
            [
                'category' => 'SIM',
                'imageUrl' => '/assets/images/sim.png',
            ],
        ];

        $this->db->table('categories')->insertBatch($data);
    }
}
