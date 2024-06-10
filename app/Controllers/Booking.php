<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductsModel;
use App\Models\PromoModel;

class Booking extends BaseController
{
    public function index()
    {
        $ProductsModel = new ProductsModel();
        $idProduct = $this->request->getVar('idProduct');
        $startDate = $this->request->getVar('startDate');
        $endDate = $this->request->getVar('endDate');
        $productName = $this->request->getVar('productName');

        if (!$idProduct) {
            return redirect()->to('/#products')
                ->with('error', 'Please select the product first!');
        }

        $product = $ProductsModel->where('idProduct', $idProduct)->first();
        if (!$product) {
            return redirect()->to('/#products')
                ->with('error', 'Product not found!');
        }

        $durationRent = (strtotime($endDate) - strtotime($startDate)) / (60 * 60 * 24);
        if ($durationRent < $product['minimumRentDays']) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Please select the correct End Date!');
        }

        $rentCost = $product['dailyPrice'] * $durationRent;

        $data = [
            'title' => 'Booking · Pocket Fi',
            'startDate' => date('d-m-Y', strtotime($startDate)),
            'endDate' => date('d-m-Y', strtotime($endDate)),
            'durationRent' => $durationRent,
            'productName' => $productName,
            'rentCost' => $rentCost,
            'deposit' => $product['deposit'],
        ];
        return view("Users/booking", $data);
    }

    public function redeemPromo()
    {
        $PromoModel = new PromoModel();
        $promoCode = $this->request->getPost('promoCode');
        $rentCost = $this->request->getPost('rentCost');

        $promo = $PromoModel->where('code', $promoCode)->first();
        if (!$promo) {
            return $this->response->setJSON(['success' => false, 'message' => 'Invalid promo code!']);
        }

        $discount = $rentCost * ($promo['discount'] / 100);
        $discount = min($discount, $promo['maxDiscountAmount']);

        return $this->response->setJSON(['success' => true, 'discount' => $discount, 'message' => 'Promo code redeemed successfully! Discount: IDR ' . number_format($discount, 0, ',', '.')]);
    }
}
