<?php

namespace App\Controllers;

use function PHPSTORM_META\type;

class Resource extends BaseController
{
    public function __construct()
    {
        helper('form');
        helper('url');
    }

    public function index()
    {
    }

    public function createResource()
    {
        return view('Resources/createResource');
    }

    public function receiveData()
    {
        // Validaton Service
        $validation =  \Config\Services::validation();

        $rules = [
            'tipo' => [
                'label' => 'Tipo',
                'rules' => 'required'
            ],

            // 'imagen' => [
            //     'label' => 'Imagen',
            //     'rules' => 'required|valid_url'
            // ],

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
        } else {
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

            if (!$descargable) {
                $descargable = false;
            }

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

    public function buscar_recurso()
    {
        $request = service('request');

        $keywords = $request->getVar('keywords');

        $resourceModel = new \App\Models\ResourceModel();

        $result = $resourceModel->buscar_recursos($keywords);

        return view('busqueda', ['result' => $result]);
    }

    public function buscar_tipo()
    {
        $request = service('request');

        $tvar = $request->getVar('tvar');

        $resourceModel = new \App\Models\ResourceModel();

        $result = $resourceModel->buscar_tipos($tvar);

        return view('Resources/slider_recurso', ['result' => $result,'type' => $result[0]['type']]);
    }

    public function resource()
    {
        $request = service('request');

        $nvar = $request->getVar('nvar');

        $resourceModel = new \App\Models\ResourceModel();

        $result = $resourceModel->resource_i($nvar);
        
        return view('Resources/resource_detail', ['result' => $result[0]]);
    }

}
