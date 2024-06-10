<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Profile extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Profile'
        ];
        return view("Users/profile", $data);
    }

    public function update()
    {
        $usersModel = new UsersModel();
        $idUser = session()->get('idUser');

        $name = $this->request->getPost('name');
        $phone = $this->request->getPost('phone');
        $address = $this->request->getPost('address');

        if (strpos($phone, '+62') !== 0) {
            $phone = '+62' . ltrim($phone, '0');
        }

        $userData = [
            'name' => $name,
            'phone' => $phone,
            'address' => $address,
        ];

        $usersModel->update($idUser, $userData);
        session()->set($userData);

        return redirect()->to('/profile')->with('success', 'Your profile saved.');
    }
}
