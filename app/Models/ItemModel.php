<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $table = 'item';
    protected $allowedFields = ['nama', 'harga'];

    public function getItems()
    {
        $result = [
            'HSR' => $this->db->table($this->table)->getWhere(['kategori' => 1])->getResultArray(),
            'GI' => $this->db->table($this->table)->getWhere(['kategori' => 2])->getResultArray(),
        ];
        return $result;
    }

    function getKategori($id)
    {
        return $this->db->table('kategori')->getWhere(['id' => $id]);
    }
}
