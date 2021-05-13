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

    // This array should be updated with the field names that can be set during save, insert, or update methods.
    protected $allowedFields = ['nombre', 'email', 'apellido', 'pass', 'nick'];
}