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
        return view("Users/contact", $data);
    }
}
