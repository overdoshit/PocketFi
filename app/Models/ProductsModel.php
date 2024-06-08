<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductsModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'idProduct';
    protected $allowedFields = [
        'nameProduct',
        'country',
        'batteryHours',
        'sharedDevices',
        'deposit',
        'maxDownloadSpeed',
        'maxUploadSpeed',
        'dataUsage',
        'network',
        'price',
        'packageType',
        'minimumRentDays',
        'imageUrl',
        'countryFlagUrl',
        'category',
        'notes',
        'bestSeller',
    ];
}
