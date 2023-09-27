<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $table = 'item';

    public function getItem(array $where)
    {
        if ($where) return $this->findAll();

        return $this->where($where)->getResultArray();
    }
}
