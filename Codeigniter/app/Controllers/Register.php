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
        return view('register');
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

            'password' => [
                'label' => 'Password',
                'rules' => 'required|min_length[8]|matches[confirmPassword]'
            ],

            'confirmPassword' => [
                'label' => 'Confirm Password',
                'rules' => []
            ]
        ];

        if (!$this->validate($rules)) {
            $data = [
                'errors' => $validation->getErrors()
            ];

            return view('register', $data);
        } else {
            // Request Service
            $request = service('request');

            // Session Service
            $session = \Config\Services::session();

            // Get parametters from http request
            $email = $request->getVar('email');
            $name = $request->getVar('name');
            $lastname = $request->getVar('lastName');
            $nick = $request->getVar('nick');
            $password = $request->getVar('password');
            $autor = $request->getVar('autor');

            echo $email, $nick, $name, $lastname, $password, $autor;
        }
    }
}
