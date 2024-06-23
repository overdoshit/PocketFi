<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Admin Dashboard · Pocket Fi',
            'pageTitle' => 'Dashboard',
        ];

        return view('Admins/dashboard.php', $data);
    }
}
