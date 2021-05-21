<?php

namespace App\Controllers;

class Profile extends BaseController
{
	public function index()
	{
		$session = \Config\Services::session();
		helper('form');

		$user = $session->get('user');

		$data = [
			'user' => $user
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
