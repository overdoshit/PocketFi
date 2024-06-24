<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductsModel;
use App\Models\CategoryModel;
use App\Models\CountryModel;
use App\Models\PackageTypeModel;

class Product extends BaseController
{
    protected $products;
    protected $categories;
    protected $countries;
    protected $packagetypes;

    public function __construct()
    {
        $this->products = new ProductsModel();
        $this->categories = new CategoryModel();
        $this->countries = new CountryModel();
        $this->packagetypes = new PackageTypeModel();
    }

    public function add()
    {
        $categories = $this->categories->findAll();
        $countries = $this->countries->findAll();
        $packagetypes = $this->packagetypes->findAll();

        $data = [
            'title' => 'Admin Product · Pocket Fi',
            'pageTitle' => 'Add Product',
            'categories' => $categories,
            'countries' => $countries,
            'packagetypes' => $packagetypes,
        ];

        return view('Admins/add_product', $data);
    }

    public function addProduct()
    {
        $category = $this->request->getVar('category');
        $country = strtoupper($this->request->getVar('country'));
        $packageType = strtoupper($this->request->getVar('packageType'));
        $dailyPrice = $this->request->getVar('dailyPrice');
        $deposit = $this->request->getVar('deposit');
        $stock = $this->request->getVar('stock');
        $minimumRentDays = $this->request->getVar('minimumRentDays');
        $dataUsage = $this->request->getVar('dataUsage');
        $maxDownloadSpeed = $this->request->getVar('maxDownloadSpeed');
        $maxUploadSpeed = $this->request->getVar('maxUploadSpeed');
        $batteryHours = $this->request->getVar('batteryHours');
        $sharedDevices = $this->request->getVar('sharedDevices');
        $network = $this->request->getVar('network');
        $imageUrl = $this->categories->getImageUrlByCategory($category);
        $countryFlagUrl = $this->countries->getFlagUrlByCountry($country);
        $notes = $this->request->getVar('notes');

        // log_message('debug', 'category: ' . print_r($category, true));
        // log_message('debug', 'country: ' . print_r($country, true));
        // log_message('debug', 'packageType: ' . print_r($packageType, true));
        // log_message('debug', 'dailyPrice: ' . print_r($dailyPrice, true));
        // log_message('debug', 'deposit: ' . print_r($deposit, true));
        // log_message('debug', 'stock: ' . print_r($stock, true));
        // log_message('debug', 'minimumRentDays: ' . print_r($minimumRentDays, true));
        // log_message('debug', 'dataUsage: ' . print_r($dataUsage, true));
        // log_message('debug', 'maxDownloadSpeed: ' . print_r($maxDownloadSpeed, true));
        // log_message('debug', 'maxUploadSpeed: ' . print_r($maxUploadSpeed, true));
        // log_message('debug', 'batteryHours: ' . print_r($batteryHours, true));
        // log_message('debug', 'sharedDevices: ' . print_r($sharedDevices, true));
        // log_message('debug', 'network: ' . print_r($network, true));
        // log_message('debug', 'imageUrl: ' . print_r($imageUrl, true));
        // log_message('debug', 'countryFlagUrl: ' . print_r($countryFlagUrl, true));
        // log_message('debug', 'notes: ' . print_r($notes, true));

        $this->products->save([
            'category' => $category,
            'country' => $country,
            'packageType' => $packageType,
            'dataUsage' => $dataUsage,
            'deposit' => $deposit,
            'dailyPrice' => $dailyPrice,
            'stock' => $stock,
            'minimumRentDays' => $minimumRentDays,
            'maxDownloadSpeed' => $maxDownloadSpeed,
            'maxUploadSpeed' => $maxUploadSpeed,
            'batteryHours' => $batteryHours,
            'sharedDevices' => $sharedDevices,
            'network' => $network,
            'countryFlagUrl' => $countryFlagUrl,
            'imageUrl' => $imageUrl,
            'notes' => $notes,
        ]);

        return redirect()->to('/products')
            ->with('success', 'Product added successfully.');
    }
}
