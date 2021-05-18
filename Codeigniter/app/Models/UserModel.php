<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    // Specifies the database table that this model primarily works with.
    protected $table = 'usuario';

    // This is the name of the column that uniquely identifies the records in this table.
    protected $primaryKey = 'email';

    // This setting allows you to define the type of data that is returned.
    protected $returnType = 'array';

    public function insert_user($email, $name, $lastname, $nick, $password, $autor, $birthDate){
        
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $this->db->query('INSERT INTO usuario (email, nick, nombre, apellido, nacimiento, password, dtype) VALUES ("' . $email . '","' . $nick . '","' . $name . '","' . $lastname . '","' . $birthDate . '","' . $hash . '"' . (($autor) ? ',"Autor")' : ',"Cliente")'));
        
        if($autor){
            $this->db->query('INSERT INTO autores (nick) VALUES ("' . $nick . '")');
        } else {
            $this->db->query('INSERT INTO cliente (nick) VALUES ("' . $nick . '")');
        }

    }
}