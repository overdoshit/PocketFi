<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Contact · Pocket Fi'
        ];
        echo view("Users/contact", $data);
    }
}
