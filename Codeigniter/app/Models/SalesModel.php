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

}
