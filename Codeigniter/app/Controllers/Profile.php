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

		$sales = $salesModel->getDownloads();

		$data = [
			'result' => $result,
			'types' => $types,
			'sales' => $sales
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



}
