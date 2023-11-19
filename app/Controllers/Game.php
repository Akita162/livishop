<?php

namespace App\Controllers;

class Game extends BaseController
{
    public function index(): string
    {
        return view('home/main');
    }

    public function hsr()
    {
        return view('home/honkaisr');
    }
    public function gi()
    {
        return view('home/genshin');
    }
}
