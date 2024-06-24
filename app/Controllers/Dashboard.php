<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductsModel;
use App\Models\UsersModel;

class Dashboard extends BaseController
{
    protected $products;
    protected $users;

    public function __construct()
    {
        $this->products = new ProductsModel();
        $this->users = new UsersModel();
    }

    public function index()
    {

        $mifiInternationalCount = $this->products->getProductCountByCategory('MIFI International');
        $mifiIndonesiaCount = $this->products->getProductCountByCategory('MIFI Indonesia');
        $simCount = $this->products->getProductCountByCategory('SIM');

        $totalProducts = $mifiInternationalCount + $mifiIndonesiaCount + $simCount;

        $mifiInternationalPercentage = ($mifiInternationalCount / $totalProducts) * 100;
        $mifiIndonesiaPercentage = ($mifiIndonesiaCount / $totalProducts) * 100;
        $simPercentage = ($simCount / $totalProducts) * 100;

        $users = $this->users->getAllUsers();

        $data = [
            'title' => 'Admin Dashboard · Pocket Fi',
            'pageTitle' => 'Dashboard',
            'mifiInternationalCount' => $mifiInternationalCount,
            'mifiIndonesiaCount' => $mifiIndonesiaCount,
            'simCount' => $simCount,
            'mifiInternationalPercentage' => $mifiInternationalPercentage,
            'mifiIndonesiaPercentage' => $mifiIndonesiaPercentage,
            'simPercentage' => $simPercentage,
            'users' => $users,
        ];

        return view('Admins/dashboard.php', $data);
    }
}
