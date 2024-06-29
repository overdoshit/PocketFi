<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Countries extends Seeder
{
    public function run()
    {
        $data = [
            [
                'country' => 'Argentina',
                'flagUrl' => '/assets/images/flags/Argentina.jpg',
            ],
            [
                'country' => 'Brazil',
                'flagUrl' => '/assets/images/flags/Brazil.jpg',
            ],
            [
                'country' => 'Canada',
                'flagUrl' => '/assets/images/flags/Canada.jpg',
            ],
            [
                'country' => 'China',
                'flagUrl' => '/assets/images/flags/China.jpg',
            ],
            [
                'country' => 'Hongkong',
                'flagUrl' => '/assets/images/flags/Hongkong.jpg',
            ],
            [
                'country' => 'Indonesia',
                'flagUrl' => '/assets/images/flags/Indonesia.jpg',
            ],
            [
                'country' => 'Japan',
                'flagUrl' => '/assets/images/flags/Japan.jpg',
            ],
            [
                'country' => 'Macau',
                'flagUrl' => '/assets/images/flags/Macau.jpg',
            ],
            [
                'country' => 'Qatar',
                'flagUrl' => '/assets/images/flags/Qatar.jpg',
            ],
            [
                'country' => 'Saudia Arabia',
                'flagUrl' => '/assets/images/flags/Saudia-Arabia.jpg',
            ],
            [
                'country' => 'South Korea',
                'flagUrl' => '/assets/images/flags/South-Korea.jpg',
            ],
            [
                'country' => 'United Arab Emirates',
                'flagUrl' => '/assets/images/flags/Arab-Emirates.jpg',
            ],
            [
                'country' => 'USA',
                'flagUrl' => '/assets/images/flags/USA.jpg',
            ],
            [
                'country' => 'US & Canada',
                'flagUrl' => '/assets/images/flags/US-Canada.jpg',
            ],
        ];

        $this->db->table('countries')->insertBatch($data);
    }
}
