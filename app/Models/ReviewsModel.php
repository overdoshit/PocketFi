<?php

namespace App\Models;

use CodeIgniter\Model;

class ReviewsModel extends Model
{
    protected $table = 'reviews';
    protected $primaryKey = 'idReview';
    protected $allowedFields = ['email', 'imageUrl', 'name', 'rating', 'comment'];
    protected $returnType = 'array';

    public function getRandomReviews($limit = 10)
    {
        return $this->orderBy('RAND()')->findAll($limit);
    }
}
