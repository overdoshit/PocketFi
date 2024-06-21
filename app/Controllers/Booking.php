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

    public function payment()
    {
        $idOrder = date('ymd') . mt_rand(100000, 999999);
        $idProduct = $this->request->getPost('idProduct');
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $phone = $this->request->getPost('phone');
        $province = $this->request->getPost('provinceName');
        $city = $this->request->getPost('cityName');
        $district = $this->request->getPost('districtName');
        $subdistrict = $this->request->getPost('subdistrictName');
        $postcode = $this->request->getPost('postcode');
        $address = $this->request->getPost('address');
        $shippingAddress = $address . ', ' . $subdistrict . ', ' . $district . ', ' . $city . ', ' . $province . ' ' . $postcode;
        $expedition = $this->request->getPost('expedition');
        $shippingPrice = $this->request->getPost('shipping');
        $startDate = $this->request->getPost('startDate');
        $endDate = $this->request->getPost('endDate');
        $startDate = \DateTime::createFromFormat('d-m-Y', $startDate)->format('Y-m-d');
        $endDate = \DateTime::createFromFormat('d-m-Y', $endDate)->format('Y-m-d');
        $durationRent = $this->request->getPost('durationRent');
        $rentCost = $this->request->getPost('rentCost');
        $productName = $this->request->getPost('productName');
        $deposit = $this->request->getPost('deposit');
        $discount = $this->request->getPost('discountValue');
        $promoCode = $this->request->getPost('promoCode');
        $grossAmount = $this->request->getPost('grossAmount');

        // log_message('debug', 'idOrder: ' . print_r($idOrder, true));
        // log_message('debug', 'idProduct: ' . print_r($idProduct, true));
        // log_message('debug', 'name: ' . print_r($name, true));
        // log_message('debug', 'email: ' . print_r($email, true));
        // log_message('debug', 'phone: ' . print_r($phone, true));
        // log_message('debug', 'province: ' . print_r($province, true));
        // log_message('debug', 'city: ' . print_r($city, true));
        // log_message('debug', 'district: ' . print_r($district, true));
        // log_message('debug', 'subdistrict: ' . print_r($subdistrict, true));
        // log_message('debug', 'postcode: ' . print_r($postcode, true));
        // log_message('debug', 'address: ' . print_r($address, true));
        // log_message('debug', 'fullAddress: ' . print_r($shippingAddress, true));
        // log_message('debug', 'expedition: ' . print_r($expedition, true));
        // log_message('debug', 'shippingPrice: ' . print_r($shippingPrice, true));
        // log_message('debug', 'startDate: ' . print_r($startDate, true));
        // log_message('debug', 'endDate: ' . print_r($endDate, true));
        // log_message('debug', 'durationRent: ' . print_r($durationRent, true));
        // log_message('debug', 'rentCost: ' . print_r($rentCost, true));
        // log_message('debug', 'productName: ' . print_r($productName, true));
        // log_message('debug', 'deposit: ' . print_r($deposit, true));
        // log_message('debug', 'discount: ' . print_r($discount, true));
        // log_message('debug', 'promoCode: ' . print_r($promoCode, true));
        // log_message('debug', 'grossAmount: ' . print_r($grossAmount, true));

        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = getenv('SERVER_KEY');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = [
            'transaction_details' => [
                'order_id' => $idOrder,
                'gross_amount' => $grossAmount,
            ],
            'item_details' => [
                [
                    'id' => $idProduct,
                    'price' => $rentCost,
                    'quantity' => 1,
                    'name' => $productName,
                ],
                [
                    'id' => 0,
                    'price' => $deposit,
                    'quantity' => 1,
                    'name' => 'Depostit',
                ],
                [
                    'id' => 0,
                    'price' => $shippingPrice,
                    'quantity' => 1,
                    'name' => 'Shipping',
                ],
                [
                    'id' => 0,
                    'price' => -$discount,
                    'quantity' => 1,
                    'name' => 'Discount',
                ]
            ],
            'customer_details' => [
                'first_name' => $name,
                'last_name' => '',
                'email' => $email,
                'phone' => $phone,
                'shipping_address' => [
                    'first_name' => $name,
                    'last_name' => '',
                    'email' => $email,
                    'phone' => $phone,
                    'address' => $shippingAddress,
                    'country_code' => 'IDN',
                ]
            ],
            'callbacks' => [
                'finish' => getenv('app.baseURL') . 'booking/success',
                'error' => getenv('app.baseURL') . '#products',
            ]
        ];

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        $redirectUrl = "https://app.sandbox.midtrans.com/snap/v2/vtweb/" . $snapToken;

        $rentalData = [
            'idOrder' => $idOrder,
            'status' => 'Menunggu Pembayaran',
            'idProduct' => $idProduct,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'province' => $province,
            'city' => $city,
            'district' => $district,
            'subdistrict' => $subdistrict,
            'postcode' => $postcode,
            'shippingAddress' => $shippingAddress,
            'expedition' => $expedition,
            'shippingPrice' => $shippingPrice,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'durationRent' => $durationRent,
            'rentCost' => $rentCost,
            'productName' => $productName,
            'deposit' => $deposit,
            'discount' => $discount,
            'promoCode' => $promoCode,
            'grossAmount' => $grossAmount,
            'token' => $snapToken,
        ];

        $this->rentals->save($rentalData);
        return redirect()->to($redirectUrl);
    }

    public function success()
    {
        $order_id = $this->request->getGet('order_id');
        $status_code = $this->request->getGet('status_code');
        $transaction_status = $this->request->getGet('transaction_status');

        if ($order_id && $status_code == 200 && $transaction_status == 'settlement') {
            $rentalData = [
                'status' => 'Menunggu Pengiriman',
            ];

            $order = $this->rentals->where('idOrder', $order_id)->first();
            if ($order) {
                // Update status order
                $this->rentals->update($order->idOrder, $rentalData);

                // Kurangi stok produk
                $product = $this->products->find($order->idProduct);
                if ($product && $product->stock > 0) {
                    $this->products->update($order->idProduct, ['stock' => $product->stock - 1]);
                } else {
                    return redirect()->to('/orders')->with('error', 'Product out of stock.');
                }

                // Tambahkan jumlah penggunaan promo
                if (!empty($order->promoCode)) {
                    $promo = $this->promo->where('code', $order->promoCode)->first();
                    if ($promo) {
                        $this->promo->update($promo->idPromo, ['usedCount' => $promo->usedCount + 1]);
                    }
                }

                return redirect()->to('/orders')->with('success', 'Your order has been placed successfully!');
            } else {
                return redirect()->to('/orders')->with('error', 'Order not found.');
            }
        } else {
            return redirect()->to('/orders')->with('error', 'Invalid request.');
        }
    }
}
