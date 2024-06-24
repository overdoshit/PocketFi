<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\OrdersModel;
use App\Models\ProductsModel;
use App\Models\UsersModel;

class Dashboard extends BaseController
{
    protected $orders;
    protected $goalOrders = 100;
    protected $goalValues = 100000000;
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
        $percentageToGoal = ($ordersThisMonth / $this->goalOrders) * 100;
        $percentageToGoal = min(100, $percentageToGoal);

        $averageOrderValue = $this->orders->getAverageOrderValueThisMonth();

        $mifiInternationalCount = $this->products->getProductCountByCategory('MIFI International');
        $mifiIndonesiaCount = $this->products->getProductCountByCategory('MIFI Indonesia');
        $simCount = $this->products->getProductCountByCategory('SIM');

        $totalProducts = $mifiInternationalCount + $mifiIndonesiaCount + $simCount;

        $mifiInternationalPercentage = ($mifiInternationalCount / $totalProducts) * 100;
        $mifiIndonesiaPercentage = ($mifiIndonesiaCount / $totalProducts) * 100;
        $simPercentage = ($simCount / $totalProducts) * 100;

        $users = $this->users->getAllUsers();

        $totalSalesThisMonth = $this->orders->getTotalSalesThisMonth();

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
            'goalOrders' => $this->goalOrders,
            'averageOrderValue' => $averageOrderValue,
            'totalSalesThisMonth' => $totalSalesThisMonth,
            'goalValues' => $this->goalValues,
        ];

        return view('Admins/dashboard', $data);
    }
}
