<?php

namespace App\Controllers;

class Followers extends BaseController
{
    public function index()
    {

    }

    public function follow($authorId)
    {
        $userModel = new \App\Models\UserModel();

        $userModel->follow($authorId);

    }

    public function followers(){

        $userModel = new \App\Models\UserModel();

        $data = $userModel->followers();

        return view('followers', ['data' => $data]);

    }

}