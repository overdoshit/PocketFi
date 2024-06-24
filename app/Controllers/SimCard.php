<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductsModel;

class SimCard extends BaseController
{
    public function index()
    {
        $model = new ProductsModel();
        $data = [
            'title' => 'SIM Card & E-SIM',
            'products' => $model->where('category', 'SIM')->findAll()
        ];
        return view('Users/sim_card', $data);
    }
}
