<?php

namespace App\Models;

use CodeIgniter\CLI\Console;
use CodeIgniter\Model;

class CategoryModel extends Model
{
    // Specifies the database table that this model primarily works with.
    protected $table = 'categories';

    // This is the name of the column that uniquely identifies the records in this table.
    protected $primaryKey = 'id';

    // This setting allows you to define the type of data that is returned.
    protected $returnType = 'array';


    public function getCategories($father)
    {
        if ($father) {
            $query = 'SELECT * FROM `categories` WHERE father = ("' . $father . '")';
        } else {
            $query = 'SELECT * FROM `categories` WHERE father is NULL';
        }
        
        $result = $this->db->query($query)->getResultArray();

        foreach ($result as $key => $category) {
            $result[$key]['child'] = $this->getCategories($category['name']);
        }

        return $result;
    }
}
