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
		$resourceModel = new \App\Models\ResourceModel();

		$salesModel = new \App\Models\SalesModel();

        $types = $resourceModel->getTypes();

        $result = $resourceModel->getFavourites();

		$downloads = $salesModel->getDownloads();

		$views = $salesModel->getViews();

		$profit = $downloads['downloads']*0.05 + $views['views']*0.01;

		$data = [
			'result' => $result,
			'types' => $types,
			'profit' => $profit,
		];
		
		return view('profile', $data);
	}

	public function listas_visualizacion()
	{	
		$session = \Config\Services::session();

		$user = $session->get('user');

		// Playlist model
		$playlistModel = new \App\Models\playlistModel();
  
		$lists = $playlistModel->getPlaylists($user['id']);

		$data = [
			'user' => $user,
			'playlists' => $lists,
			'message' => 'Mis Listas'

		];
		foreach($data['playlists'] as $key => $val){
			$data['playlists'][$key]['resources'] = $playlistModel->getResourceFromPlaylist($val['id']);
		}
		
		return view('listas_visualizacion', $data);
	}

	public function listas_other_user($user_id){
		
		// Playlist model
		$playlistModel = new \App\Models\playlistModel();

		// User model
		$userModel = new \App\Models\UserModel();
  
		$lists = $playlistModel->getPublicPlaylists($user_id);

		$data = [
			'playlists' => $lists,
			'message' => 'Listas de ' . $userModel->getUser($user_id)['nick']
		];
		foreach($data['playlists'] as $key => $val){
			$data['playlists'][$key]['resources'] = $playlistModel->getResourceFromPlaylist($val['id']);
		}
		
		return view('listas_visualizacion', $data);

	}

	public function download($idResource) {
		// Sales Model
		$salesModel = new \App\Models\SalesModel();

		$salesModel->download($idResource);
	}



}
