<?php

namespace App\Controllers;

use App\Models\ReviewsModel;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pocket Fi'
        ];

        $reviewsModel = new ReviewsModel();
        $data['reviews'] = $reviewsModel->getRandomReviews(10);

        return view("Users/home", $data);
    }
}
