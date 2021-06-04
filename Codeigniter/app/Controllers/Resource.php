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
        $resourceModel = new \App\Models\ResourceModel();
        $data = [
            'types' => [],
            'categories' => []
        ];

        // Bring types from database
        $types = $resourceModel->getTypes();
        foreach ($types as $type) {
            $data['types'][$type['id']] = $type['name'];
        };

        // Bring categories from database
        $categorieModel = new \App\Models\CategoryModel();
        $data['categories'] = $categorieModel->getCategories(null);

        return view('Resources/createResource', $data);
    }

    public function receiveData()
    {
        // Validaton Service
        $validation =  \Config\Services::validation();
        // Bring model to the controller
        $resourceModel = new \App\Models\ResourceModel();
        // Request Service
        $request = service('request');

        // Get parametters from http request
        $tipo = $request->getVar('tipo');
        $subscription = $request->getVar('subscription');
        $descargable = $request->getVar('descargable');
        $imagen = $request->getVar('imagen');
        $nombre = $request->getVar('nombre');
        $descripcion = $request->getVar('descripcion');
        $categories = $request->getVar('categories');
        $file = $request->getFile('file');

        // Rules for validation
        $rules = [
            'tipo' => [
                'label' => 'Tipo',
                'rules' => 'required'
            ],

            'nombre' => [
                'label' => 'Nombre',
                'rules' => 'required'
            ],

            'descripcion' => [
                'label' => 'Descripción',
                'rules' => 'required'
            ],

            'imagen' => [
                'label' => 'Imagen',
                'rules' => 'required|valid_url'
            ],

            'categories' => [
                'label' => 'Categorias',
                'rules' => 'required'
            ],

            'file' => [
                'label' => 'File',
                'rules' => 'uploaded[file]'
            ]
        ];

        if($tipo === '2'){
            $rules['file']['rules'] .= '|ext_in[file,mp3]';
            $rules['file']['errors']['ext_in'] = 'Only allowed mp3 files';
        } else {
            $rules['file']['rules'] .= '|ext_in[file,pdf]';
            $rules['file']['errors']['ext_in'] = 'Only allowed pdf files';
        }

        if (!$this->validate($rules)) {

            $data = [
                'errors' => $validation->getErrors(),
                'types' => [],
                'categories' => []
            ];

            // Bring types from database
            $types = $resourceModel->getTypes();
            foreach ($types as $type) {
                $data['types'][$type['id']] = $type['name'];
            };

            // Bring categories from database
            $categorieModel = new \App\Models\CategoryModel();
            $data['categories'] = $categorieModel->getCategories(null);

            return view('Resources/createResource', $data);
        } else {
            // Session Service
            $session = \Config\Services::session();
            $user = $session->get('user');

            if (!$descargable) {
                $descargable = 0;
            } else {
                $descargable = 1;
            }

            if (!$subscription) {
                $subscription = 0;
            } else {
                $subscription = 1;
            }

            // Save file into the uploads folder in the public one if is valid and has not changed
            if ($file->isValid() && !$file->hasMoved()) {
                $file->move('./uploads', $file->getRandomName());
            }

            // Persists the ingressed data into the database
            $resourceModel->insertResource($tipo, $descargable, $imagen, $nombre, $descripcion, $user['id'], $categories, $file->getName(), $subscription);

            $data = [
                'alert' =>
                '<div class="uk-alert-success" uk-alert>
                <p>Recurso creado exitosamente</p>
                <a class="uk-button uk-button-default" href="/">Volver a Home</a>
                 </div>'

            ];
            return view('success', $data);
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

    public function buscar_tipo($idType)
    {
        $resourceModel = new \App\Models\ResourceModel();

        $result = $resourceModel->buscar_tipos($idType);

        return view('Resources/slider_recurso', ['result' => $result]);
    }

    public function buscar_id($idResource)
    {
        $resourceModel = new \App\Models\ResourceModel();

        $result = $resourceModel->buscar_id($idResource);
        $message =  '<i class="fas fa-glasses"></i> Leer Vista Previa';
        if ($result['type'] == 'AudioLibro' || $result['type'] == 'Podcast') {
            $message = '<i class="fas fa-play"></i> Reproducir Muestra';
        }

        $data = [
            'result' => $result,
            'message' => $message
        ];

        return view('Resources/resource_detail', $data);
    }

    public function buscar_autor($idAutor)
    {
        $resourceModel = new \App\Models\ResourceModel();

        $types = $resourceModel->getTypes();

        $result = $resourceModel->buscar_recursos_autor($idAutor);

        $autor = $resourceModel->buscar_autor($idAutor);

        $data = [
            'result' => $result,
            'types' => $types,
            'autor' => $autor
        ];

        return view('Resources/recursos_autor', $data);
    }

    public function buscar_recursos_categoria($idCategory)
    {
        $resourceModel = new \App\Models\ResourceModel();

        $categoryModel = new \App\Models\CategoryModel();

        $types = $resourceModel->getTypes();

        $result = $resourceModel->buscar_recursos_categoria($idCategory);

        $category = $categoryModel->find($idCategory);

        $data = [
            'result' => $result,
            'types' => $types,
            'category' => $category['name']
        ];

        return view('Resources/category_resources', $data);
    }
}
