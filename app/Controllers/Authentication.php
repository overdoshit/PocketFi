<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use Google_Client;

class Authentication extends BaseController
{
    protected $googleClient;
    protected $users;

    public function __construct()
    {
        $this->users = new UsersModel();
        $this->googleClient = new Google_Client();
        $this->googleClient->setClientId(getenv('GOOGLE_CLIENT_ID'));
        $this->googleClient->setClientSecret(getenv('GOOGLE_CLIENT_SECRET'));
        $this->googleClient->setRedirectUri('http://localhost:8080/auth/google/callback');

        $this->googleClient->addScope('email');
        $this->googleClient->addScope('profile');
    }

    public function login()
    {
        $usersModel = new UsersModel();
        $validation = \Config\Services::validation();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $user = $usersModel->where('email', $email)->first();

        $validation->setRules([
            'email' => 'required|valid_email',
            'password' => 'required|min_length[8]',
        ], [
            'email' => [
                'required' => 'Email is required.',
                'valid_email' => 'Please enter a valid email address.'
            ],
            'password' => [
                'required' => 'Password is required.',
                'min_length' => 'Password must be at least 8 characters in length.'
            ],
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            $modal = $this->request->getPost('modal') ?: 'login';
            session()->setFlashdata('error', 'Login failed.');
            return redirect()->back()->withInput()->with('errors', $validation->getErrors())->with('modal', $modal);
        }

        if (!$user) {
            session()->setFlashdata('error', 'Email is not registered.');
            return redirect()->back()->withInput()->with('errors', ['email' => 'Email is not registered.'])->with('modal', 'login');
        }

        if (!password_verify($password, $user->password)) {
            session()->setFlashdata('error', 'Wrong password.');
            return redirect()->back()->withInput()->with('errors', ['password' => 'Wrong password.'])->with('modal', 'login');
        }

        if (is_null($user->password) && $user->provider !== 'empass') {
            session()->setFlashdata('error', 'This email is registered using Google. Please log in using Google.');
            return redirect()->back()->withInput()->with('errors', ['email' => 'This email is registered using Google. Please log in using the third-party Google button.'])->with('modal', 'login');
        }

        $userData = [
            'id' => $user->idUser,
            'name' => $user->name,
            'email' => $user->email,
            'imageUrl' => $user->imageUrl,
            'provider' => $user->provider,
        ];

        session()->set($userData);
        session()->setFlashdata('success', 'You are now logged in.');
        return redirect()->to('/profile');
    }

    public function register()
    {
        $usersModel = new UsersModel();
        $validation = \Config\Services::validation();

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('newEmail');
        $password = $this->request->getPost('newPassword');
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $validation->setRules([
            'name' => 'required|min_length[3]',
            'newEmail' => 'required|valid_email|is_unique[users.email]',
            'newPassword' => 'required|min_length[8]',
            'confirmPassword' => 'required|matches[newPassword]'
        ], [
            'name' => [
                'required' => 'Name is required.',
                'min_length' => 'Name must be at least 3 characters in length.'
            ],
            'newEmail' => [
                'required' => 'Email is required.',
                'valid_email' => 'Please enter a valid email address.',
                'is_unique' => 'Email address is already registered.'
            ],
            'newPassword' => [
                'required' => 'Password is required.',
                'min_length' => 'Password must be at least 8 characters in length.'
            ],
            'confirmPassword' => [
                'required' => 'Confirm password is required.',
                'matches' => 'Password does not match.'
            ]
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            $modal = $this->request->getPost('modal') ?: 'register';
            session()->setFlashdata('error', 'Account registration failed.');
            return redirect()->back()->withInput()->with('errors', $validation->getErrors())->with('modal', $modal);
        }

        $usersModel->save([
            'name' => $name,
            'email' => $email,
            'password' => $hashedPassword,
            'imageUrl' => '/assets/images/default.jpg',
            'provider' => 'empass',
        ]);

        session()->setFlashdata('success', 'Registration successful.');
        return redirect()->to('/');
    }

    public function google()
    {
        return redirect()->to($this->googleClient->createAuthUrl());
    }

    public function googleCallBack()
    {
        $token = $this->googleClient->fetchAccessTokenWithAuthCode($this->request->getVar('code'));
        if (!isset($token['error'])) {
            $this->googleClient->setAccessToken($token['access_token']);
            $googleService = new \Google_Service_Oauth2($this->googleClient);
            $userInfo = $googleService->userinfo->get();

            $dataUser = [
                'name' => $userInfo['name'],
                'email' => $userInfo['email'],
                'imageUrl' => $userInfo['picture'],
                'provider' => 'google',
                'oauthId' => $userInfo['id'],
            ];

            $user = $this->users->where('email', $userInfo->email)->first();
            if (!$user) {
                $this->users->insert($dataUser);
            }

            $userData = [
                'id' => $user->idUser,
                'name' => $user->name,
                'email' => $user->email,
                'imageUrl' => $user->imageUrl,
                'provider' => $user->provider,
            ];

            session()->set($userData);
            session()->setFlashdata('success', 'You are now logged in using your Google account.');
            return redirect()->to('/profile');
        }
    }

    public function Logout()
    {
        session()->setFlashdata('success', 'You are now logged out.');
        session()->destroy();
        return redirect()->to('/');
    }
}
