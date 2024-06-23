<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderTimelinesModel extends Model
{
    protected $table            = 'ordertimelines';
    protected $primaryKey       = 'idTimelines';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'idOrder',
        'status',
        'description',
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

    public function getTimelinesByidOrder($idOrder)
    {
        // return $this->where('idOrder', $idOrder)->orderBy('createdAt', 'DESC')->findAll();
        return $this->where('idOrder', $idOrder)
            ->orderBy('createdAt', 'DESC')
            ->orderBy('idTimelines', 'DESC')
            ->get()
            ->getResult();
    }
}
