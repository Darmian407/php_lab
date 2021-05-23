<?php

namespace App\Models;

use CodeIgniter\Model;

class ResourceModel extends Model
{
    // Specifies the database table that this model primarily works with.
    protected $table = 'recurso';

    // This is the name of the column that uniquely identifies the records in this table.
    protected $primaryKey = 'numero';

    // This setting allows you to define the type of data that is returned.
    protected $returnType = 'array';

    protected $allowedFields = ['tipo', 'descargable', 'imagen', 'nombre', 'descripcion', 'autor'];


    public function buscar_recursos($keywords){

        $result = $this->db->query('SELECT nombre, autor FROM recurso WHERE (nombre LIKE "%' . $keywords . '%" OR autor LIKE "%' . $keywords . '%")');
        

        return $result->getResultArray();

    }
}
