<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MobileWifi extends BaseController
{
    public function Indonesia() {
        $data = [
            'title' => 'Mobile Wifi Indonesia'
        ];
        return view('Users/mobile_wifi_indonesia', $data);
    }

    public function International() {
        $data = [
            'title' => 'Mobile Wifi International'
        ];
        return view('Users/mobile_wifi_international', $data);
    }
}
