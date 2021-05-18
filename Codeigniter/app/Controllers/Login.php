<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
        helper('url');
    }

    public function index()
    {
        $session = \Config\Services::session();

        $user = $session->get('user');

        if (!$user) {
            return view('login');
        } else {
            return redirect('home');
        }
    }

    public function receiveData()
    {
        // Services
        $validation =  \Config\Services::validation();
        $session = \Config\Services::session();

        $userModel = new \App\Models\UserModel();

        $rules = [
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email|is_not_unique[usuario.email,{email}]',
                'errors' => [
                    'is_not_unique' => 'Ingressed Email does not exist'
                ]
            ],

            'password' => [
                'label' => 'Password',
                'rules' => 'required|validate_password',
                'errors' => [
                    'validate_password' => 'Invalid Password'
                ]
            ],
        ];

        if (!$this->validate($rules)) {
            $data = [
                'errors' => $validation->getErrors()
            ];

            return view('login', $data);
        } else {
            $request = \Config\Services::request();

            $user = $userModel->find($request->getVar('email'));

            $data = [
                'user' => [
                    'email' => $user['email'],
                    'name' => $user['nombre'],
                    'lastName' => $user['apellido'],
                    'nick' => $user['nick'],
                    'DTYPE' => $user['DTYPE']
                ],
                'loged' => true
            ];

            $session->set($data);
            return redirect('home');
        }
    }
}
