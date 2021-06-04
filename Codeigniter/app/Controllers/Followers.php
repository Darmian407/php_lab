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

        $session = \Config\Services::session();

        $user = $session->get('user');

        $data = [
            'alert' => 
            '<div class="uk-alert-success" uk-alert>
            <p>Autor seguido exitosamente</p>
            <a class="uk-button uk-button-default" href="/followed_authors/'.$user['id'].'">Ver autores seguidos</a>
             </div>'
            
        ];
        return view('success', $data);

    }

    public function unfollow($authorId)
    {
        $userModel = new \App\Models\UserModel();

        $userModel->unfollow($authorId);

        $session = \Config\Services::session();

        $user = $session->get('user');

        $data = [
            'alert' => 
            '<div class="uk-alert-success" uk-alert>
            <p>Dejo de seguir al autor exitosamente</p>
            <a class="uk-button uk-button-default" href="/followed_authors/'.$user['id'].'">Ver autores seguidos</a>
             </div>'
            
        ];
        return view('success', $data);
    }

    public function followers(){

        $userModel = new \App\Models\UserModel();

        $data = $userModel->followers();

        return view('followers', ['data' => $data]);

    }

    public function followed_authors(){

        $userModel = new \App\Models\UserModel();

        $data = $userModel->followed_authors();

        return view('autores_seguidos', ['data' => $data]);
    }

}