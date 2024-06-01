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
