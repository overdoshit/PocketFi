<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class Profile extends BaseController
{
    protected $users;

    public function __construct()
    {
        $this->users = new UsersModel();
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

        // Check if user exists
        $user = $this->users->where('email', $idUser)->first();
        if (!$user) {
            return redirect()->to('/profile')->with('error', 'User not found.');
        }

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

        // Check if a profile image is uploaded
        $img = $this->request->getFile('profileImage');
        if ($img && $img->isValid()) {
            // Validate the image
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

            // Generate a new file name
            $newName = 'profile_' . time() . '.' . $img->getExtension();

            // Check and delete old profile image if not default
            if ($user->imageUrl && strpos($user->imageUrl, '/assets/images/users/default.jpg') === false) {
                if (strpos($user->imageUrl, 'https://lh3.googleusercontent.com/') === false) {
                    @unlink('.' . $user->imageUrl);  // Delete the old image
                }
            }

            // Move the new image to the designated folder
            $img->move('./assets/images/users', $newName);
            $userData['imageUrl'] = '/assets/images/users/' . $newName;
        }

        // Update user data in the database
        $this->users->update($user->idUser, $userData);
        session()->set($userData);

        return redirect()->to('/profile')->with('success', 'Your profile saved.');
    }
}
