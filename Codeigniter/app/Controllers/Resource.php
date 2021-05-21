<?php

namespace App\Controllers;

class Resource extends BaseController {
    public function index() {
        
    }

    public function createResource() {
        return view('Resources/createResource');
    }

    public function receiveData() {
        // Validaton Service
        $validation =  \Config\Services::validation();

        $rules = [
            'tipo' => [
                'label' => 'Tipo',
                'rules' => 'required'
            ],

            'descargable' => [
                'label' => 'Descargable',
            ],

            'imagen' => [
                'label' => 'Imagen',
                'rules' => 'required|valid_url'
            ],

            'nombre' => [
                'label' => 'Nombre',
                'rules' => 'required|alpha_numeric_space'
            ],

            'descripcion' => [
                'label' => 'Descripción',
                'rules' => 'required|alpha_numeric_space'
            ],

        ];

        if (!$this->validate($rules)) {

            $data = [
                'errors' => $validation->getErrors()
            ];

            return view('Resources/createResource', $data);

        }else {
             // Session Service
             $session = \Config\Services::session();
             $user = $session->get('user');


             // Request Service
             $request = service('request');
 
             // Get parametters from http request
             $tipo = $request->getVar('tipo');
             $descargable = $request->getVar('descargable');
             $imagen = $request->getVar('imagen');
             $nombre = $request->getVar('nombre');
             $descripcion = $request->getVar('descripcion');

             // Bring model to the controller
            $resourceModel = new \App\Models\ResourceModel();

            $data = [
                'tipo' => $tipo,
                'descargable' => $descargable,
                'imagen' => $imagen,
                'nombre' => $nombre,
                'descripcion' => $descripcion,
                'autor' => $user['nick']
            ]; 

            $resourceModel->insert($data);
        }
    }

}