<?php

namespace App\Controllers;

use App\Models\ItemModel;
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
        if (isset($_POST['paymethod'])) {
            $order = new PesananModel();
            $data = [
                'uid' => $_POST['uid'],
                'region' => $_POST['region'],
                'item' => $_POST['item'],
            ];
            $order->insert($data);
            switch ($_POST['paymethod']) {
                case 'dana':
                    return view('payment/dana');
                case 'gopay':
                    return view('payment/gopay');
                case 'bca':
                    return view('payment/bca');
                default:
                    return redirect()->back();
            }
        } else {
            $itemModel = new ItemModel();
            helper('number');
            $data = [
                'item' => $itemModel->itemInfo($_POST['item']),
            ];
            return view('payment/method', $data);
        }
    }
}
