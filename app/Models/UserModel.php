<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';

    public function getUser(array $where)
    {
        if ($where) return $this->findAll();

        return $this->where($where)->getResultArray();
    }
}
