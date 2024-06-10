<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'idProduct';
    protected $allowedFields = [
        'category',
        'country',
        'packageType',
        'dataUsage',
        'deposit',
        'dailyPrice',
        'stock',
        'minimumRentDays',
        'maxDownloadSpeed',
        'maxUploadSpeed',
        'batteryHours',
        'sharedDevices',
        'network',
        'countryFlagUrl',
        'imageUrl',
        'notes',
        'bestSeller',
    ];
}
