<?php

namespace App\Controllers;

use function PHPSTORM_META\type;

class Playlist extends BaseController
{
    public function __construct()
    {
        helper('form');
        helper('url');
    }

    public function index()
    {
    }

    public function agregar_lista()
    {
        // Validaton Service
        $validation =  \Config\Services::validation();

        $rules = [
            'name' => [
                'label' => 'Name',
                'rules' => 'required|alpha_numeric_space'
            ]
        ];

        if (!$this->validate($rules)) {

            $data = [
                'errors' => $validation->getErrors()
            ];

            return view('listas_visualizacion', $data);
        } else {

            // Session Service
            $session = \Config\Services::session();

            // Request Service
            $request = service('request');

            // Get parametters from http request
            $name = $request->getVar('name');
            $public = $request->getVar('public');

            // Bring model to the controller
            $playlistModel = new \App\Models\PlaylistModel();

            $user = $session->get('user');

            if($public){
                $public = true;
            }else{
                $public = false;
            }

            $data = [
                'user_id' => $user['id'],
                'name' => $name,
                'public' => $public
            ];

            $playlistModel->insert($data);

            $lists = $playlistModel->getPlaylists($user['id']);

            $data = [
                'alert' => 
                '<div class="uk-alert-success" uk-alert>
                <p>Lista '.$name.' agregada exitosamente </p>
                <a class="uk-button uk-button-default" href="/listas_visualizacion">Volver</a>
                 </div>'
                
            ];
            
            return view('success', $data);
        }
    }

    public function agregar_RecursoLista($resource_id){
                     
        // Playlist model
        $playlistModel = new \App\Models\playlistModel();

        // Request Service
        $request = service('request');

        // Get parametters from http request
        $playlist = $request->getVar('listas');

        $playlistModel->insertResourceList($playlist,$resource_id);

        $data = [
            'alert' => 
            '<div class="uk-alert-success" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>Recurso agregado a la lista '.$playlist.' exitosamente</p>
            <a class="uk-button uk-button-default" href="/buscar_id/'.$resource_id.'">Volver</a>
             </div>'
            
        ];
        return view('success', $data);

    }

    public function add_favourite($resource_id){
                     
        // Playlist model
        $playlistModel = new \App\Models\playlistModel();

        $playlistModel->insertResourceFavourites($resource_id);

        $data = [
            'alert' => 
            '<div class="uk-alert-success" uk-alert>
            <p>Recurso agregado a favoritos exitosamente</p>
            <a class="uk-button uk-button-default" href="/buscar_id/'.$resource_id.'">Volver</a>
             </div>'
            
        ];
        return view('success', $data);    
    }

}
