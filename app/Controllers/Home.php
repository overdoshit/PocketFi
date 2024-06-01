<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index() {
        $data = [
            'title' => 'Pocket Fi'
        ];
        return view("Users/home", $data);
    }
}
