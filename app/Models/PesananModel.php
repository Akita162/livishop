<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = 'pesanan';

    public function getPesanan(array $where)
    {
        if ($where) return $this->findAll();

        return $this->where($where)->getResultArray();
    }
}
