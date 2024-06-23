<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Products extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin Products · Pocket Fi',
            'pageTitle' => 'Products',
        ];

        return view('Admins/products.php', $data);
    }
}
