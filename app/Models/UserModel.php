<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['username', 'email', 'password', 'last_login'];

    public function getUser(array $where)
    {
        if ($where) return $this->findAll();

        return $this->where($where)->getResultArray();
    }
}
