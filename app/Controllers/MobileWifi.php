<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductsModel;

class MobileWifi extends BaseController
{
    public function indonesia()
    {
        $model = new ProductsModel();
        $data = [
            'title' => 'Mobile Wifi Indonesia',
            'products' => $model->where('category', 'MIFI Indonesia')->findAll()
        ];
        return view('Users/mobile_wifi_indonesia', $data);
    }

    public function international()
    {
        $model = new ProductsModel();
        $data = [
            'title' => 'Mobile Wifi International',
            'products' => $model->where('category', 'MIFI International')->findAll()
        ];
        return view('Users/mobile_wifi_international', $data);
    }
}
