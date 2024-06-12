<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use App\Models\RentalsModel;

class Profile extends BaseController
{
    protected $users;
    protected $rentals;

    public function __construct()
    {
        $this->users = new UsersModel();
        $this->rentals = new RentalsModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Profile'
        ];
        return view("Users/profile", $data);
    }

    public function update()
    {
        $idUser = session()->get('email');

        $user = $this->users->where('email', $idUser)->first();
        if (!$user) {
            return redirect()->to('/profile')->with('error', 'User not found.');
        }

        $name = $this->request->getPost('name');
        $phone = $this->request->getPost('phone');
        $address = $this->request->getPost('address');

        $userData = [
            'name' => $name,
            'phone' => $phone,
            'address' => $address,
        ];

        $img = $this->request->getFile('profileImage');
        if ($img && $img->isValid()) {
            $validationRule = [
                'profileImage' => [
                    'uploaded[profileImage]',
                    'mime_in[profileImage,image/jpg,image/jpeg,image/png,image/gif]',
                    'max_size[profileImage,3072]',
                    'max_dims[profileImage,5000,5000]',
                ],
            ];

            if (!$this->validate($validationRule)) {
                return redirect()->to('/profile')->with('error', $this->validator->getError('profileImage'));
            }

            $newName = 'profile_' . time() . '.' . $img->getExtension();

            if ($user->imageUrl && strpos($user->imageUrl, '/assets/images/users/default.jpg') === false) {
                if (strpos($user->imageUrl, 'https://lh3.googleusercontent.com/') === false) {
                    @unlink('.' . $user->imageUrl);
                }
            }

            $img->move('./assets/images/users', $newName);
            $userData['imageUrl'] = '/assets/images/users/' . $newName;
        }

        $this->users->update($user->idUser, $userData);
        session()->set($userData);

        return redirect()->to('/profile')->with('success', 'Your profile saved.');
    }

    public function deletePhoto()
    {
        $idUser = session()->get('email');

        $user = $this->users->where('email', $idUser)->first();
        if (!$user) {
            return redirect()->to('/profile')->with('error', 'User not found.');
        }

        $imageUrl = $user->imageUrl;
        if ($imageUrl === '/assets/images/users/default.jpg') {
            return redirect()->to('/profile')->with('error', 'Cannot delete default photo.');
        }

        if (strpos($imageUrl, 'https://lh3.googleusercontent.com/') !== false) {
            $this->users->update($user->idUser, ['imageUrl' => '/assets/images/users/default.jpg']);
            session()->set('imageUrl', '/assets/images/users/default.jpg');
        } else {
            @unlink('.' . $imageUrl);
            $this->users->update($user->idUser, ['imageUrl' => '/assets/images/users/default.jpg']);
            session()->set('imageUrl', '/assets/images/users/default.jpg');
        }

        return redirect()->to('/profile')->with('success', 'Profile photo deleted.');
    }

    public function orders()
    {
        $session = session();
        $email = $session->get('email');

        // Dapatkan data pesanan berdasarkan email
        $orders = $this->rentals->where('email', $email)->findAll();

        $data = [
            'title' => 'Orders',
            'orders' => $orders,
            'session' => $session,
        ];

        return view('Users/orders', $data);
    }
}
