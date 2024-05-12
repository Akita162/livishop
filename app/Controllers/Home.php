<?php

namespace App\Controllers;

use App\Models\ItemModel;

use function PHPSTORM_META\map;

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
        $data = [];
        return view('inbox', $data);
    }
}
