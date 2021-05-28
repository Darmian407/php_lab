<?php

namespace App\Models;

use CodeIgniter\CLI\Console;
use CodeIgniter\Model;

class PlaylistModel extends Model
{
    // Specifies the database table that this model primarily works with.
    protected $table = 'playlist';

    // This is the name of the column that uniquely identifies the records in this table.
    protected $primaryKey = 'id';

    // This setting allows you to define the type of data that is returned.
    protected $returnType = 'array';

    protected $allowedFields = ['user_id', 'name', 'public'];

    public function getPlaylists($user_id){

        $result = $this->db->query('SELECT id , name FROM playlist WHERE user_id = ("' . $user_id . '")');

        return $result->getResultArray();
    }

    public function getPublicPlaylists($user_id){

        $result = $this->db->query('SELECT id , name FROM playlist WHERE user_id = ("' . $user_id . '") AND public = true');

        return $result->getResultArray();
    }

    public function getResourceFromPlaylist($playlist_id){

        $result = $this->db->query ( 'SELECT * FROM resources r JOIN playlist_resource p ON p.resource_id = r.id WHERE p.playlist_id = ("' . $playlist_id . '")');

        return $result->getResultArray();
    }

    public function insertResourceList($playlist_id, $resource_id)
    {
        $query = $this->db->query('SELECT resource_id FROM playlist_resource p WHERE p.playlist_id = ("' . $playlist_id . '") AND p.resource_id = ("' . $resource_id . '") ');

        $validar = $query->getResultArray();

        if(empty($validar)){
        $this->db->query('INSERT INTO playlist_resource (playlist_id, resource_id) VALUES ("' . $playlist_id . '","' . $resource_id . '")');
        }
    }
    
    public function insertResourceFavourites($resource_id)
    {
        $session = \Config\Services::session();

        $user = $session->get('user');

        $query = $this->db->query('SELECT resource_id, user_id FROM favourites WHERE user_id = "' . $user['id'] . '" AND resource_id = "' . $resource_id . '"');

        $validar = $query->getResultArray();
    
        if(empty($validar)){
            $this->db->query('INSERT INTO favourites (user_id, resource_id) VALUES ("' . $user['id'] . '","' . $resource_id . '")');
        }
        
    }

}
