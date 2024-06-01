<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use Google_Client;

class Authentication extends BaseController
{
    protected $googleClient;
    protected $users;

    public function __construct() {
        $this->users = new UsersModel();
        $this->googleClient = new Google_Client();
        $this->googleClient->setClientId(getenv('GOOGLE_CLIENT_ID'));
        $this->googleClient->setClientSecret(getenv('GOOGLE_CLIENT_SECRET'));
        $this->googleClient->setRedirectUri('http://localhost:8080/auth/google/callback');

        $this->googleClient->addScope('email');
        $this->googleClient->addScope('profile');

    }

    public function index() {
        echo 'Authentication';
    }

    public function login() {
        $session = session();
        
        $validation = \Config\Services::validation();
        
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
            return redirect()->back()->withInput()->with('errors', $validation->getErrors())->with('modal', $modal);
        }

        $usersModel = new UsersModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $usersModel->where('email', $email)->first();

        if (!$user) {
            $session->setFlashdata('error', 'Email is not registered.');
            return redirect()->back()->withInput()->with('errors', ['email' => 'Email is not registered.'])->with('modal', 'login');
        }
    
        if (!password_verify($password, $user->password)) {
            $session->setFlashdata('error', 'Invalid email or password.');
            return redirect()->back()->withInput()->with('errors', ['password' => 'Wrong password.'])->with('modal', 'login');
        }

        $userData = [
            'id' => $user->idUser,
            'name' => $user->name,
            'email' => $user->email,
            'imageUrl' => $user->imageUrl,
        ];

        $session->set($userData);

        return redirect()->to('/contact');
    }


    public function register() {
        $session = session();
        $usersModel = new UsersModel();
        
        $validation = \Config\Services::validation();
        
        $validation->setRules([
            'name' => 'required|min_length[3]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]',
            'confirmPassword' => 'required|matches[password]'
        ], [
            'name' => [
                'required' => 'Name is required.',
                'min_length' => 'Name must be at least 3 characters in length.'
            ],
            'email' => [
                'required' => 'Email is required.',
                'valid_email' => 'Please enter a valid email address.',
                'is_unique' => 'Email address is already registered.'
            ],
            'password' => [
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
            return redirect()->back()->withInput()->with('errors', $validation->getErrors())->with('modal', $modal);
        }

        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $usersModel->save([
            'name' => $name,
            'email' => $email,
            'password' => $hashedPassword,
            'imageUrl' => 'default.jpg',
            'provider' => 'empass',
        ]);

        $session->setFlashdata('success', 'Registration successful!');
        return redirect()->to('/contact');
    }

    public function google() {
        return redirect()->to($this->googleClient->createAuthUrl());
    }

    public function googleCallBack() {
        $token = $this->googleClient->fetchAccessTokenWithAuthCode($this->request->getVar('code'));
        if (!isset($token['error'])) {
            $this->googleClient->setAccessToken($token['access_token']);
            $googleService = new \Google_Service_Oauth2($this->googleClient);
            $userInfo = $googleService->userinfo->get();

            $usersData = [
                'name' => $userInfo['name'],
                'email' => $userInfo['email'],
                'imageUrl' => $userInfo['picture'],
                'provider' => 'google',
                'oauthId' => $userInfo['id'],
            ];

            $user = $this->users->where('email', $userInfo->email)->first();
            if (!$user) {
                $this->users->insert($usersData);
            }

            session()->set($usersData);

            $data = [
                'title' => 'Registered | Pocket Fi'
            ];
            return view('/Users/berhasil', $data);
        }
    }

    public function Logout() {
        session()->destroy();
        return redirect()->to('/');
    }
}
