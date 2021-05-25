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

    protected $allowedFields = ['user_id', 'name'];

    public function getPlaylists($user_id){

        $result = $this->db->query('SELECT id , name FROM playlist WHERE user_id = ("' . $user_id . '")');

        return $result->getResultArray();
    }

    public function insertResourceList($playlist_id, $resource_id)
    {
        
        $this->db->query('INSERT INTO playlist_resource (playlist_id, resource_id) VALUES ("' . $playlist_id . '","' . $resource_id . '")');
    }
    
}
