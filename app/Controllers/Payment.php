<?php

namespace App\Controllers;

use App\Models\PesananModel;

class Payment extends BaseController
{
    private $pesananModel;

    public function __construct()
    {
        $this->pesananModel = new PesananModel();
    }

    public function index()
    {
        $data = [
            'uid' => $_POST['uid'],
            'region' => $_POST['region'],
            'item' => $_POST['item'],
        ];

        switch ($_POST['paymethod']) {
            case 'dana':
                $this->pesananModel->setPesanan($data);
                return view('payment/dana');
            case 'gopay':
                $this->pesananModel->setPesanan($data);
                return view('payment/gopay');
            case 'bca':
                $this->pesananModel->setPesanan($data);
                return view('payment/bca');
            default:
                return view('payment/method');
        }
    }
}
