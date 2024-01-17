<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $table = 'item';
    protected $allowedFields = ['nama', 'img_path', 'harga'];

    public function getItem(array $where)
    {
        if ($where) return $this->findAll();

        return $this->where($where)->getResultArray();
    }

    function getKategori(array $where)
    {
        return $this->db->table('kategori')->getWhere($where);
    }
}
