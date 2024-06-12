<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReviewsModel;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pocket Fi'
        ];

        $reviewsModel = new ReviewsModel();
        $data['reviews'] = $reviewsModel->getRandomReviews(7);

        return view("Users/home", $data);
    }
}
