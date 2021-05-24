<?php

namespace App\Models;

use CodeIgniter\CLI\Console;
use CodeIgniter\Model;

class UserModel extends Model
{
    // Specifies the database table that this model primarily works with.
    protected $table = 'clients';

    // This is the name of the column that uniquely identifies the records in this table.
    protected $primaryKey = 'user_id';

    // This setting allows you to define the type of data that is returned.
    protected $returnType = 'array';

    
}
