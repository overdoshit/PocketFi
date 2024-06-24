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

    public function edit($idProduct)
    {
        $product = $this->products->find($idProduct);
        $categories = $this->categories->findAll();
        $countries = $this->countries->findAll();
        $packagetypes = $this->packagetypes->findAll();

        $data = [
            'title' => 'Admin Product · Pocket Fi',
            'pageTitle' => 'Edit Product',
            'product' => $product,
            'categories' => $categories,
            'countries' => $countries,
            'packagetypes' => $packagetypes,
        ];

        return view('Admins/edit_product', $data);
    }

    public function updateProduct()
    {
        $idProduct = $this->request->getVar('idProduct');
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

        $this->products->update($idProduct, [
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
            ->with('success', 'Product updated successfully.');
    }

    public function delete($idProduct)
    {
        $this->products->delete($idProduct);

        return redirect()->to('/products')
            ->with('success', 'Product deleted successfully.');
    }
}
