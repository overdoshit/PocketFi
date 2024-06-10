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


    public function payment()
    {
        // $idUser = session()->get('idUser');

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        $province = $this->request->getPost('provinceName');
        $city = $this->request->getPost('cityName');
        $district = $this->request->getPost('districtName');
        $subdistrict = $this->request->getPost('subdistrictName');
        $postcode = $this->request->getPost('postcode');
        $address = $this->request->getPost('address');
        $shipping = $this->request->getPost('expedition');
        $shippingPrice = $this->request->getPost('shipping');
        $startDate = $this->request->getPost('startDate');
        $endDate = $this->request->getPost('endDate');
        $durationRent = $this->request->getPost('durationRent');
        $rentCost = $this->request->getPost('rentCost');
        $productName = $this->request->getPost('productName');
        $deposit = $this->request->getPost('deposit');
        $discount = $this->request->getPost('discountValue');
        $promoCode = $this->request->getPost('promoCode');
        $grossAmount = $this->request->getPost('grossAmount');

        log_message('debug', 'name: ' . print_r($name, true));
        log_message('debug', 'email: ' . print_r($email, true));
        log_message('debug', 'phone: ' . print_r($phone, true));
        log_message('debug', 'province: ' . print_r($province, true));
        log_message('debug', 'city: ' . print_r($city, true));
        log_message('debug', 'district: ' . print_r($district, true));
        log_message('debug', 'subdistrict: ' . print_r($subdistrict, true));
        log_message('debug', 'postcode: ' . print_r($postcode, true));
        log_message('debug', 'address: ' . print_r($address, true));
        log_message('debug', 'shipping: ' . print_r($shipping, true));
        log_message('debug', 'shippingPrice: ' . print_r($shippingPrice, true));
        log_message('debug', 'startDate: ' . print_r($startDate, true));
        log_message('debug', 'endDate: ' . print_r($endDate, true));
        log_message('debug', 'durationRent: ' . print_r($durationRent, true));
        log_message('debug', 'productName: ' . print_r($productName, true));
        log_message('debug', 'rentCost: ' . print_r($rentCost, true));
        log_message('debug', 'deposit: ' . print_r($deposit, true));
        log_message('debug', 'discount: ' . print_r($discount, true));
        log_message('debug', 'promoCode: ' . print_r($promoCode, true));
        log_message('debug', 'grossAmount: ' . print_r($grossAmount, true));
    }
}
