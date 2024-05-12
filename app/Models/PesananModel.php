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

    function getInvoice()
    {
        return $this->select('pesanan.id, uid, region, item.nama')->join('item', 'pesanan.item = item.id')->get()->getResultArray();
    }

    // public function getPesananUser($UserID) {
    //     return $this->where(['UserID' => $UserID])->getResultArray();
    // }
}
