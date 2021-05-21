<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$session = \Config\Services::session();

        $user = $session->get('user');

		$data = [
			'user' => $user
		];

		return view('home', $data);
	}

	public function planes()
	{
		$session = \Config\Services::session();

        $user = $session->get('user');

		$data = [
			'user' => $user
		];

		return view('planes', $data);
	}
}
