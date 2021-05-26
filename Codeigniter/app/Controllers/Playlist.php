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

            // Bring model to the controller
            $playlistModel = new \App\Models\PlaylistModel();

            $user = $session->get('user');

            $data = [
                'user_id' => $user['id'],
                'name' => $name
            ];

            $playlistModel->insert($data);

            return redirect('listas_visualizacion');
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

        
        echo 'Agregado recurso exitosamente';
    }

    public function add_favourite($resource_id){
                     
        // Playlist model
        $playlistModel = new \App\Models\playlistModel();

        $playlistModel->insertResourceFavourites($resource_id);

        echo 'Agregado recurso exitosamente';
    }

}
