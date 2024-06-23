<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductsModel;

class Products extends BaseController
{
    protected $products;

    public function __construct()
    {
        $this->products = new ProductsModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Admin Products · Pocket Fi',
            'pageTitle' => 'Products',
            'products' => $this->products->findAll(),
        ];

        return view('Admins/products.php', $data);
    }
}
