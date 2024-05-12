<?php

namespace App\Models;

use CodeIgniter\Model;

class PesananModel extends Model
{
    protected $table = 'pesanan';
    protected $allowedFields = ['uid', 'region', 'item'];

    public function getPesanan()
    {
        return $this->findAll();
    }

    // public function getPesananUser($UserID) {
    //     return $this->where(['UserID' => $UserID])->getResultArray();
    // }
}
