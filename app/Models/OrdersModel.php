<?php

namespace App\Models;

use CodeIgniter\Model;

class OrdersModel extends Model
{
    protected $table            = 'orders';
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
        'trackNumber',
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
        'returnExpedition',
        'returnTrackNumber',
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

    public function getOrdersByEmail($email)
    {
        return $this->where('email', $email)
            ->orderBy('createdAt', 'DESC')
            ->findAll();
    }

    public function getOrdersCountThisMonth()
    {
        $thisMonthStart = date('Y-m-01');
        $thisMonthEnd = date('Y-m-t');

        return $this->where('createdAt >=', $thisMonthStart)
            ->where('createdAt <=', $thisMonthEnd)
            ->countAllResults();
    }

    public function getAverageOrderValueThisMonth()
    {
        $thisMonthStart = date('Y-m-01');
        $thisMonthEnd = date('Y-m-t');

        return $this->selectAvg('rentCost')
            ->where('createdAt >=', $thisMonthStart)
            ->where('createdAt <=', $thisMonthEnd)
            ->get()
            ->getRow()
            ->rentCost;
    }

    public function getTotalSalesThisMonth()
    {
        $thisMonthStart = date('Y-m-01');
        $thisMonthEnd = date('Y-m-t');

        return $this->selectSum('rentCost')
            ->where('createdAt >=', $thisMonthStart)
            ->where('createdAt <=', $thisMonthEnd)
            ->get()
            ->getRow()
            ->rentCost;
    }
}
