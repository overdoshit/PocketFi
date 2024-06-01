<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function index() {
        $data = [
            'title' => 'Contact · Pocket Fi'
        ];
        echo view("Users/contact", $data);
    }
}
