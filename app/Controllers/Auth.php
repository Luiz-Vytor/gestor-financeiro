<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function LoginScreen()
    {
        echo view('auth/login.php');
    }
    public function registrationScreen()
    {
        echo view('auth/register-user.php');
    }
    public function firstLoginScreen()
    {
        echo view('auth/first-login.php');
    }
    public function registerUser()
    {
        try {
            $data['username'] = $this->request->getPost('user');
            $data['password'] = $this->request->getPost('password');

            $userModel = new UsersModel();
            $userExists = $userModel->where('username', $data['username'])->findAll();

            if ($userExists) {
                return redirect()->to('registration');
            }

            $userModel->insert($data);

            return redirect()->to('/first-login');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function loginSubmit()
    {
        try {
            $data['username'] = $this->request->getPost('user');
            $data['password'] = $this->request->getPost('password');

            $userModel = new UsersModel();
            $userExists = $userModel->where('username', $data['username'])->where('password', $data['password'])->first();

            if (empty($userExists)) {
                return redirect()->to('/login');
            }

            $dataForSession = [
                'id' => $userExists['id'],
                'username' => $userExists['username'],
            ];

            $session = session()->set($dataForSession);

            return redirect()->to('/transactions');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->to('/login');
        }
    }
    public function logout()
    {
        try {
            session()->destroy();

            return redirect()->to('/login');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
