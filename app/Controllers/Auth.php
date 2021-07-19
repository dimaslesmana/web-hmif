<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return redirect()->to('/');
    }

    public function login()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/');
        }

        $data = [
            'title' => "HMIF | Login",
            'validation' => $this->validation,
        ];

        return view('auth/login', $data);
    }

    /**
     * * Handle login request
     */
    public function doLogin()
    {
        $loginRules = [
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Username is required!',
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Password is required!',
                ]
            ],
        ];

        if (!$this->validate($loginRules)) {
            return redirect()->to('/auth/login')->withInput();
        }

        $data = [
            'username' => htmlspecialchars($this->request->getPost('username'), ENT_QUOTES, 'UTF-8'),
            'password' => $this->request->getPost('password'),
        ];

        $user = $this->usersModel->getUserByUsername($data['username']);

        if (is_null($user)) {
            /**
             * TODO: Username not found, alert user (sweetalert2?).
             * Do not explicitly tell username not found,
             * Maybe tell Username or Password invalid?
             */

            return redirect()->to('/auth/login')->withInput();
        }

        if (!password_verify($data['password'], $user['password'])) {
            /**
             * TODO: Password incorrect, alert user (sweetalert2?).
             * Do not explicitly tell password incorrect,
             * Maybe tell Username or Password invalid?
             */

            return redirect()->to('/auth/login')->withInput();
        }

        $sessionData = [
            'logged_in' => true,
            'username' => $user['username'],
        ];

        session()->set($sessionData);

        return redirect()->to('/dashboard');
    }

    /**
     * * Handle logout request
     */
    public function logout()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/auth/login');
        }

        session()->destroy();

        return redirect()->to('/');
    }
}
