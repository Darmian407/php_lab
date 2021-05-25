<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$session = \Config\Services::session();

        $user = $session->get('user');

		$resourceModel = new \App\Models\ResourceModel();

        $result = $resourceModel->buscar_todo();

		$types = $resourceModel->getTypes();

		$data = [
			'user' => $user,
			'result' => $result,
			'types' => $types
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

	public function success()
	{
		$session = \Config\Services::session();

        $user = $session->get('user');

		$data = [
			'user' => $user
		];

		return view('paypal/success', $data);
	}

	public function onCancel()
	{
		$session = \Config\Services::session();

        $user = $session->get('user');

		$data = [
			'user' => $user
		];

		return view('paypal/onCancel', $data);
	}
}
