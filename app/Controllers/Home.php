<?php

namespace App\Controllers;

use App\Models\ItemModel;
use App\Models\PesananModel;

class Home extends BaseController
{
    public function index(): string
    {
        helper('number');
        $item = new ItemModel();
        $data['items'] = $item->getItems();
        return view('home', $data);
    }

    public function inbox()
    {
        $pesanan = new PesananModel();
        if ($this->request->getPost('IDP') !== null) {
            $delete = $this->request->getPost('IDP');
            foreach ($delete as $id) {
                if (is_numeric($id)) $pesanan->delete($id);
            }
            return redirect()->to('/');
        }

        $data['pesanan'] = $pesanan->getInvoice();
        return view('inbox', $data);
    }
}
