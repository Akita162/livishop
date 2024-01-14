<?php

namespace App\Controllers;

use App\Models\PesananModel;

class Pay extends BaseController
{
    public function __construct()
    {
        $this->pesananModel = new PesananModel;
    }

    public function index()
    {
        $data = [
            'uid' => $this->request->getPost('uid'),
            'region' => $this->request->getPost('region'),
        ];
        // $this->pesananModel->setPesanan($data);

        switch ($_GET['paymethod']) {
            case 'dana':
                return view('pay/expressdana');
            case 'gopay':
                return;
            case 'bca':
                return;
            default:
                return redirect()->back();
        }
    }

}