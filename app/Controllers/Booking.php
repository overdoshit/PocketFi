<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductsModel;
use App\Models\PromoModel;
use App\Models\RentalsModel;

class Booking extends BaseController
{
    protected $products;
    protected $rentals;
    protected $promo;

    public function __construct()
    {
        $this->products = new ProductsModel();
        $this->rentals = new RentalsModel();
        $this->promo = new PromoModel();
    }

    public function index()
    {
        $idProduct = $this->request->getVar('idProduct');
        $productName = $this->request->getVar('productName');
        $startDate = $this->request->getVar('startDate');
        $endDate = $this->request->getVar('endDate');

        if (!$idProduct) {
            return redirect()->to('/#products')
                ->with('error', 'Please select the product first!');
        }

        $product = $this->products->where('idProduct', $idProduct)->first();
        if (!$product) {
            return redirect()->to('/#products')
                ->with('error', 'Product not found!');
        }

        if ($product->stock <= 0) {
            return redirect()->back()
                ->with('error', 'Sorry, this product is currently out of stock!');
        }

        $durationRent = (strtotime($endDate) - strtotime($startDate)) / (60 * 60 * 24);
        if ($durationRent < $product->minimumRentDays) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Please select the correct End Date!');
        }

        $rentCost = $product->dailyPrice * $durationRent;

        $data = [
            'title' => 'Booking · ' . $productName,
            'startDate' => date('d-m-Y', strtotime($startDate)),
            'endDate' => date('d-m-Y', strtotime($endDate)),
            'durationRent' => $durationRent,
            'idProduct' => $idProduct,
            'productName' => $productName,
            'rentCost' => $rentCost,
            'deposit' => $product->deposit,
        ];

        return view("Users/booking", $data);
    }

    public function redeemPromo()
    {
        $promoCode = $this->request->getPost('promoCode');
        $rentCost = $this->request->getPost('rentCost');

        $promo = $this->promo->where('code', $promoCode)->first();
        if (!$promo) {
            return $this->response->setJSON(['success' => false, 'message' => 'Invalid promo code!']);
        }

        if ($promo->usedCount >= $promo->maxUsage) {
            return $this->response->setJSON(['success' => false, 'message' => 'Promo code has reached its maximum usage!']);
        }

        $today = date('Y-m-d');
        if ($today < $promo->startDate) {
            return $this->response->setJSON(['success' => false, 'message' => 'Promo code is not valid yet!']);
        }

        if ($today > $promo->endDate) {
            return $this->response->setJSON(['success' => false, 'message' => 'Promo code is expired!']);
        }

        $discount = $rentCost * ($promo->discount / 100);
        $discount = min($discount, $promo->maxDiscountAmount);

        return $this->response->setJSON(['success' => true, 'discount' => $discount, 'message' => 'Promo code redeemed successfully! Discount: IDR ' . number_format($discount, 0, ',', '.')]);
    }
}
