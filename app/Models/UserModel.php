<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user_level';
    protected $primaryKey = 'user_id';
    // protected $allowedFields = [
    //     'username', 'avatar', 'password', 'salt', 'created_date', 'created_by', 'updated_date', 'updated_by'
    // ];
    protected $returnType = 'array';
    protected $useTimestamps = false;
}
