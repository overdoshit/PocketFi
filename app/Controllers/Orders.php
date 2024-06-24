<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrdersModel;

class Orders extends BaseController
{
    protected $orders;

    public function __construct()
    {
        $this->orders = new OrdersModel();
    }


    public function index()
    {
        $data = [
            'title' => 'Admin Orders · Pocket Fi',
            'pageTitle' => 'Orders',
            'orders' => $this->orders->findAll(),
        ];

        return view('Admins/orders', $data);
    }
}
