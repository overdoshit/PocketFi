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
            'products' => $model->where('category', 'Indonesia')->findAll()
        ];
        return view('Users/mobile_wifi_indonesia', $data);
    }

    public function international()
    {
        $data = [
            'title' => 'Mobile Wifi International'
        ];
        return view('Users/mobile_wifi_international', $data);
    }
}
