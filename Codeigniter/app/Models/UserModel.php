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

    public function insert_user($email, $name, $lastname, $nick, $password, $autor, $birthDate, $image, $biography)
    {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $this->db->query('INSERT INTO users (email, nick, name, lastname, birthdate, password, image, DTYPE) VALUES ("' . $email . '","' . $nick . '","' . $name . '","' . $lastname . '","' . $birthDate . '","' . $hash . '","' . $image . '"' .(($autor) ? ',"Autor")' : ',"Cliente")'));
        $result = $this->find($email);

        if ($autor) {
            $this->db->query('INSERT INTO authors (user_id, biography) VALUES ("' . $result['id'] . '","' . $biography . '")');
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

    public function followers(){

        $session = \Config\Services::session();

        $user = $session->get('user');

        $query = $this->db->query('SELECT u.birthdate, u.nick, u.name, u.lastname, u.image, u.id, u.email FROM users u JOIN author_client ac ON u.id=ac.client_id WHERE ac.author_id="' . $user['id'] . '"');

        return $query->getResultArray();
    }

    public function getUser($user_id){

        $query = $this->db->query('SELECT nick FROM users WHERE id = "' . $user_id . '"');

        return $query->getFirstRow('array');
    }
}
