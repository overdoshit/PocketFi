<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Profile extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Profile'
        ];
        return view("Users/profile", $data);
    }
}
