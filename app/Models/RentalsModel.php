<?php

namespace App\Models;

use CodeIgniter\Model;

class RentalsModel extends Model
{
    protected $table            = 'rentals';
    protected $primaryKey       = 'idOrder';
    protected $useAutoIncrement = false;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'idProduct',
        'status',
        'name',
        'email',
        'phone',
        'province',
        'city',
        'district',
        'subdistrict',
        'postcode',
        'shippingAddress',
        'expedition',
        'shippingPrice',
        'startDate',
        'endDate',
        'durationRent',
        'rentCost',
        'productName',
        'deposit',
        'discount',
        'promoCode',
        'grossAmount',
        'token',
    ];

    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'createdAt';
    protected $updatedField  = 'updatedAt';
    protected $deletedField  = 'deletedAt';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
