<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('Categories');
        $this->call('Countries');
        $this->call('Packagetypes');
        $this->call('Products');
        $this->call('Reviews');
    }
}
