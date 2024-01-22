<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = 'pesanan';
    protected $allowedFields = ['uid', 'region', 'item'];

    public function getPesanan(array $where)
    {
        if ($where)
            return $this->findAll();

        return $this->where($where)->getResultArray();
    }

    protected function setPesanan(array $data)
    {
        return $this->insert($data);
    }
}
