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
        $this->validation = \Config\Services::validation();
        $this->googleClient = new Google_Client();
        $this->googleClient->setClientId(getenv('GOOGLE_CLIENT_ID'));
        $this->googleClient->setClientSecret(getenv('GOOGLE_CLIENT_SECRET'));
        $this->googleClient->setRedirectUri(base_url('auth/google/callback'));

        $this->googleClient->addScope('email');
        $this->googleClient->addScope('profile');
    }

    public function loginPage()
    {
        return view('Templates/login');
    }

    public function login()
    {
        if ($this->request->getMethod() !== 'POST') {
            return redirect()->to('/login')->with('error', 'Invalid request method.');
        }

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $user = $this->users->where('email', $email)->first();

        $this->validation->setRules([
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

        if (!$this->validation->withRequest($this->request)->run()) {
            return redirect()->back()
                ->withInput() // Saved input user
                ->with('errors', $this->validation->getErrors()) // Error text under fields
                ->with('error', 'Login failed.'); // Show toast
        }

        if (!$user) {
            return redirect()->back()
                ->withInput()
                ->with('errors', ['email' => 'Email is not registered.'])
                ->with('error', 'Email is not registered.');
        }

        if (!password_verify($password, $user->password)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', ['password' => 'Wrong password.'])
                ->with('error', 'Wrong password.');
        }

        if (is_null($user->password) && $user->provider !== 'empass') {
            return redirect()->back()
                ->withInput()
                ->with('errors', ['email' => 'This email is registered using Google. Please login using the third-party Google button.'])
                ->with('error', 'Please login using the third-party Google button.');
        }

        if ($user->role !== 'admin') {
            return redirect()->back()
                ->withInput()
                ->with('errors', ['email' => 'Access denied. Only admins can log in.'])
                ->with('error', 'Access denied.');
        }

        $userData = [
            'idUser' => $user->idUser,
            'name' => $user->name,
            'email' => $user->email,
            'imageUrl' => $user->imageUrl,
            'provider' => $user->provider,
            'phone' => $user->phone,
            'address' => $user->address,
            'role' => $user->role,
        ];

        session()->set($userData);
        return redirect()->to('/')
            ->with('success', 'You are now logged in.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')
            ->with('success', 'You are now logged out.');
    }

    public function google()
    {
        return redirect()->to($this->googleClient->createAuthUrl());
    }

    public function googleCallBack()
    {
        if (!$this->request->getVar('code')) {
            return redirect()->to('/login')
                ->with('error', 'Token required.');
        }

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
                $user = $this->users->where('email', $userInfo->email)->first();
            }

            if ($user->role !== 'admin') {
                return redirect()->to('/login')
                    ->with('errors', ['email' => 'Access denied. Only admins can log in.'])
                    ->with('error', 'Access denied.');
            }

            $userData = [
                'idUser' => $user->idUser,
                'name' => $user->name,
                'email' => $user->email,
                'imageUrl' => $user->imageUrl,
                'provider' => $user->provider,
                'phone' => $user->phone,
                'address' => $user->address,
                'role' => $user->role,
            ];

            session()->set($userData);
            return redirect()->to('/')
                ->with('success', 'You are now logged in using Google account.');
        }
    }
}
