<?php

namespace App\Models;

use CodeIgniter\Model;

class ResourceModel extends Model
{
    // Specifies the database table that this model primarily works with.
    protected $table = 'resources';

    // This is the name of the column that uniquely identifies the records in this table.
    protected $primaryKey = 'id';

    // This setting allows you to define the type of data that is returned.
    protected $returnType = 'array';

    protected $allowedFields = ['type', 'downloadable', 'image', 'name', 'description', 'author'];


    public function buscar_recursos($keywords)
    {
        $result = $this->db->query('SELECT name, author FROM resources WHERE (name LIKE "%' . $keywords . '%" OR author LIKE "%' . $keywords . '%")');

        return $result->getResultArray();
    }
}
