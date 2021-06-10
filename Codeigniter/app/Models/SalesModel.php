<?php

namespace App\Models;

use CodeIgniter\CLI\Console;
use CodeIgniter\Model;

class SalesModel extends Model
{
    // Specifies the database table that this model primarily works with.
    protected $table = 'clients_downloads';

    // This is the name of the column that uniquely identifies the records in this table.
    protected $primaryKey = 'user_id';

    // This setting allows you to define the type of data that is returned.
    protected $returnType = 'array';

    public function getDownloads()
    {
        $session = \Config\Services::session();

        $user = $session->get('user');

        $query = $this->db->query('SELECT COUNT(cd.user_id) AS downloads FROM clients_downloads cd JOIN resources r ON cd.resource_id = r.id WHERE r.author="' . $user['id'] . '" ' );

        return $query->getFirstRow('array');
    }

    public function download($idResurce)
    {
        $session = \Config\Services::session();

        $user = $session->get('user');

        $query = $this->db->query('SELECT user_id, resource_id FROM clients_downloads WHERE resource_id = "' . $idResurce . '" AND user_id = "' . $user['id'] . '"' );

        $validar = $query->getResultArray();
    
        if(empty($validar)){
          $this->db->query('INSERT INTO clients_downloads (resource_id, user_id) VALUES ("' . $idResurce . '","' . $user['id'] . '")');
        }
    }

    public function addView($idResource){
        $query = $this->db->query('SELECT u.user_id AS authorId, u.views FROM resources r JOIN authors u ON r.author=u.user_id WHERE r.id = ("' . $idResource . '") ');

        $result = $query->getFirstRow('array');
        if(!empty($result)){
            $views = $result['views'] +1;
            $query = $this->db->query('UPDATE authors SET VIEWS = ("' . $views . '") WHERE user_id=("' . $result['authorId'] . '")');
        }
    }

    public function getViews(){
        $session = \Config\Services::session();

        $user = $session->get('user');

        $query = $this->db->query('SELECT views FROM authors a WHERE a.user_id="' . $user['id'] . '" ' );

        return $query->getFirstRow('array');
    }

}
