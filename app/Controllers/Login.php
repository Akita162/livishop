<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function authorize($data)
    {
        $data = [];
        if (!$this->validate([
            'username' => 'alphanum',
        ], $data)) {
            session()->set('Logged_in', true);
            $id = model('ModelUser')->getUserId($data['email']);
            session()->set('user_id', $id);
        }
    }
}
