<?php

namespace App\Controllers;

class Perfil extends BaseController
{
	public function index()
	{
		return view('perfil_usuario');
	}

    public function listas_visualizacion()
    {
        return view('listas_visualizacion');
    }
}
