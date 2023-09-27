<?php

namespace App\Models;

use CodeIgniter\Model;

class OrderModel extends Model
{
    protected $table = 'order';

    public function getOrder(array $where)
    {
        if ($where) return $this->findAll();

        return $this->where($where)->getResultArray();
    }
}
