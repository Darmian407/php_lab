<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$resourceModel = new \App\Models\ResourceModel();

		$result = $resourceModel->buscar_todo();

		$types = $resourceModel->getTypes();

		$data = [
			'result' => $result,
			'types' => $types
		];

		return view('home', $data);
	}

	public function planes()
	{
		return view('planes');
	}

	public function success()
	{
		return view('paypal/success');
	}

	public function onCancel()
	{
		return view('paypal/onCancel');
	}
}
