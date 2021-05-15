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
            echo view('templates/head');

            echo view('login');

            echo view('templates/footer');
        } else {
            return redirect('home');
        }
    }

    public function receiveData()
    {
        $request = service('request');
        $session = \Config\Services::session();

        // Get parametters from http request
        $email = $request->getVar('email');
        $password = $request->getVar('password');

        // Bring model to the controller
        $userModel = model('App\Models\UserModel');

        $result = $userModel->find($email);

        if ($result) {

            if ($result['pass'] == $password) {

                $data = [
                    'message' => 'Loged Succesfuly!!!',
                    'type' => 'success',
                    'user' => $result['email'],
                    'nick' => $result['nick'],
                    'loged' => true
                ];

                $session->set($data);
                return redirect('home');
            } else {
                return redirect('login');
            }
        } else {
            return redirect('login');
        }
    }
}
