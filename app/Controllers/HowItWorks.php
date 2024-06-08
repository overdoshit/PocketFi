<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class HowItWorks extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'How It Works · Pocket Fi'
        ];
        echo view("Users/how_it_works", $data);
    }
}
