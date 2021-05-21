<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function __construct()
    {
        helper('form');
    }

    public function index()
    {
        $session = \Config\Services::session();

        $user = $session->get('user');

        if (!$user) {
            return view('register');
        } else {
            return redirect('home');
        }
    }

    public function receiveData()
    {
        // Validaton Service
        $validation =  \Config\Services::validation();

        $rules = [
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[usuario.email,{email}]'
            ],

            'nick' => [
                'label' => 'Nick',
                'rules' => 'required|is_unique[usuario.nick,{nick}]'
            ],

            'name' => [
                'label' => 'Name',
                'rules' => 'required|alpha_numeric_space'
            ],

            'lastName' => [
                'label' => 'Lastname',
                'rules' => 'required|alpha_numeric_space'
            ],

            'birthDate' => [
                'label' => 'Birth Date',
                'rules' => 'required|valid_date|validate_birthDate',
                'errors' => [
                    'validate_birthDate' => 'Ingressed Birth Date must be less than today date'
                ]
            ],

            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[8]'
            ],

            'confirmPassword' => [
                'label' => 'Confirm Password',
                'rules' => 'required|matches[password]'
            ]
        ];

        if (!$this->validate($rules)) {

            $data = [
                'errors' => $validation->getErrors()
            ];

            return view('register', $data);
        } else {

            // Session Service
            $session = \Config\Services::session();

            // Request Service
            $request = service('request');

            // Get parametters from http request
            $email = $request->getVar('email');
            $name = $request->getVar('name');
            $lastName = $request->getVar('lastName');

            $birthDateInput = date_create($request->getVar('birthDate'));
            $birthDate =  date_format($birthDateInput, 'Y-m-d');

            $nick = $request->getVar('nick');
            $password = $request->getVar('password');
            $autor = $request->getVar('autor');

            // Bring model to the controller
            $userModel = new \App\Models\UserModel();

            $userModel->insert_user($email, $name, $lastName, $nick, $password, $autor, $birthDate);

            $data = [
                'user' => [
                    'email' => $email,
                    'name' => $name,
                    'lastName' => $lastName,
                    'nick' => $nick,
                    'birthDate' => $birthDate,
                    'DTYPE' => ($autor ? 'Autor' : 'Cliente')
                ],
                'loged' => true
            ];

            $session->set($data);
            return redirect('home');
        }
    }
}
