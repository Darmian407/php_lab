<?php

namespace App\Controllers;

class Profile extends BaseController
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

		$resourceModel = new \App\Models\ResourceModel();

        $types = $resourceModel->getTypes();

        $result = $resourceModel->getFavourites();

		$data = [
			'user' => $user,
			'result' => $result,
			'types' => $types
		];
		
		return view('profile', $data);
	}

	public function listas_visualizacion()
	{
		$session = \Config\Services::session();

		$user = $session->get('user');

		$data = [
			'user' => $user
		];

		return view('listas_visualizacion', $data);
	}


}
