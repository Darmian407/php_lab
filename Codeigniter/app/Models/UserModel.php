<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    // Specifies the database table that this model primarily works with.
    protected $table = 'users';

    // This is the name of the column that uniquely identifies the records in this table.
    protected $primaryKey = 'email';

    // This setting allows you to define the type of data that is returned.
    protected $returnType = 'array';

    public function insert_user($email, $name, $lastname, $nick, $password, $autor, $birthDate)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $this->db->query('INSERT INTO users (email, nick, name, lastname, birthdate, password, DTYPE) VALUES ("' . $email . '","' . $nick . '","' . $name . '","' . $lastname . '","' . $birthDate . '","' . $hash . '"' . (($autor) ? ',"Autor")' : ',"Cliente")'));
        $result = $this->find($email);

        if ($autor) {
            $this->db->query('INSERT INTO authors (user_id) VALUES ("' . $result['id'] . '")');
        } else {
            $this->db->query('INSERT INTO clients (user_id) VALUES ("' . $result['id'] . '")');
        }

        return $result;
    }

    public function subscribe()
    {
        $session = \Config\Services::session();

        $user = $session->get('user');

        $this->db->query('UPDATE clients c SET subscribed=1 WHERE c.user_id = "' . $user['id'] . '" ');
     
    }

    public function follow($authorId){

        $session = \Config\Services::session();

        $user = $session->get('user');

        $query = $this->db->query('SELECT author_id, client_id FROM author_client WHERE author_id = "' . $authorId . '" AND client_id = "' . $user['id'] . '"' );

        $validar = $query->getResultArray();
    
        if(empty($validar)){
          $this->db->query('INSERT INTO author_client (author_id, client_id) VALUES ("' . $authorId . '","' . $user['id'] . '")');
        }

    }
}
