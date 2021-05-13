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
        echo view('templates/head');

        echo view('register');
        
        echo view('templates/footer');
    }

    public function receiveData()
    {
        $request = service('request');

        // Get parametters from http request
        $email = $request->getVar('email');
        $name = $request->getVar('name');
        $lastname = $request->getVar('lastname');
        $nick = $request->getVar('nick');
        $password = $request->getVar('password');

        // Bring model to the controller
        $userModel = model('App\Models\UserModel');

        $result = $userModel->find($email);

        if (!$result) {

            $data = [
                'nombre' => $name,
                'email' => $email,
                'apellido' => $lastname,
                'pass' => $password,
                'nick' => $nick
            ];

            $userModel->insert($data);
            
        } else {
            return view('register', [ 'message' => 'Exists a user with that email' ]);
        }
    }
}
