<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Packagetypes extends Seeder
{
    public function run()
    {
        $data = [
            [
                'packageType' => 'Daily',
                'minimumRentDays' => 1,
            ],
            [
                'packageType' => 'Weekly',
                'minimumRentDays' => 7,
            ],
            [
                'packageType' => 'Monthly',
                'minimumRentDays' => 30,
            ],
        ];

        $this->db->table('packagetypes')->insertBatch($data);
    }
}
