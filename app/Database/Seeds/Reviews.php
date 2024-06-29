<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Reviews extends Seeder
{
    public function run()
    {
        $data = [
            [
                'email' => 'walterwhite@test.test',
                'imageUrl' => '/assets/images/users/demo_profile_1718155001.jpg',
                'name' => 'Walter White',
                'rating' => 5,
                'comment' => 'Pocket Fi provides outstanding connectivity. It’s a remarkable product that keeps me connected no matter where I am. Highly recommended!',
            ],
            [
                'email' => 'heisenberg@test.test',
                'imageUrl' => '/assets/images/users/demo_profile_1718155002.jpg',
                'name' => 'Heisenberg',
                'rating' => 5,
                'comment' => 'As a frequent traveler, dependable internet is crucial. Pocket Fi consistently delivers a reliable service, though there is always room for improvement.',
            ],
            [
                'email' => 'jessepinkman@test.test',
                'imageUrl' => '/assets/images/users/demo_profile_1718155003.jpg',
                'name' => 'Jesse Pinkman',
                'rating' => 4,
                'comment' => 'Pocket Fi offers an exceptional service that has revolutionized my travel experience. It\'s incredibly reliable and truly addictive in the best way possible.',
            ],
            [
                'email' => 'saulgoodman@test.test',
                'imageUrl' => '/assets/images/users/demo_profile_1718155004.jpg',
                'name' => 'Saul Goodman',
                'rating' => 4,
                'comment' => 'You want a great WiFi connection without any legal trouble? Pocket Fi is your best bet. Stay connected, stay out of jail!',
            ],
            [
                'email' => 'skylerwhite@test.test',
                'imageUrl' => '/assets/images/users/demo_profile_1718155005.jpg',
                'name' => 'Skyler White',
                'rating' => 4,
                'comment' => 'Having Pocket Fi during our family trips has been a lifesaver. Safe and reliable, just what a family needs',
            ],
            [
                'email' => 'gustafo@test.test',
                'imageUrl' => '/assets/images/users/demo_profile_1718155006.jpg',
                'name' => 'Gus Fring',
                'rating' => 5,
                'comment' => 'Efficiency is paramount in business and travel. Pocket Fi offers unparalleled service that meets the highest standards.',
            ],
            [
                'email' => 'mikeehrmantraut@test.test',
                'imageUrl' => '/assets/images/users/demo_profile_1718155007.jpg',
                'name' => 'Mike Ehrmantraut',
                'rating' => 4,
                'comment' => 'I don\'t like complications. Pocket Fi is straightforward and reliable. No nonsense, just good service.',
            ],
            [
                'email' => 'hankschrade@test.test',
                'imageUrl' => '/assets/images/users/demo_profile_1718155008.jpg',
                'name' => 'Hank Schrader',
                'rating' => 5,
                'comment' => 'Even when I\'m out hunting rocks, Pocket Fi keeps me connected. It’s rock-solid dependable',
            ],
            [
                'email' => 'toddalquist@test.test',
                'imageUrl' => '/assets/images/users/demo_profile_1718155009.jpg',
                'name' => 'Todd Alquist',
                'rating' => 5,
                'comment' => 'I like things that work well. Pocket Fi works very well. Keeps me connected, no matter what.',
            ],
            [
                'email' => 'tucosalamanca@test.test',
                'imageUrl' => '/assets/images/users/demo_profile_1718155010.jpg',
                'name' => 'Tuco Salamanca',
                'rating' => 4,
                'comment' => 'Traveling frequently means needing reliable internet. Pocket Fi delivers, though I do expect perfection every time.',
            ],
        ];

        $this->db->table('reviews')->insertBatch($data);
    }
}
