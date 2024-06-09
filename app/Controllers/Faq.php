<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Faq extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'FAQ · Pocket Fi'
        ];
        return view("Users/faq", $data);
    }
}
