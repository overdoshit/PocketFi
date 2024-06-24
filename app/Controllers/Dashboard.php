<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrdersModel;
use App\Models\ProductsModel;
use App\Models\UsersModel;

class Dashboard extends BaseController
{
    protected $orders;
    protected $goal = 100;
    protected $products;
    protected $users;

    public function __construct()
    {
        $this->orders = new OrdersModel();
        $this->products = new ProductsModel();
        $this->users = new UsersModel();
    }

    public function index()
    {
        $ordersThisMonth = $this->orders->getOrdersCountThisMonth();
        $percentageToGoal = ($ordersThisMonth / $this->goal) * 100;
        $percentageToGoal = min(100, $percentageToGoal);

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
            'ordersThisMonth' => $ordersThisMonth,
            'percentageToGoal' => $percentageToGoal,
            'goal' => $this->goal,
        ];

        return view('Admins/dashboard.php', $data);
    }
}
