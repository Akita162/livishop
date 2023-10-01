<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo ('Login/index');
    }

    public function authorize($data)
    {
        if (!$this->validate($data)) {
            session()->set('Logged_in', true);
            $id = model('ModelUser')->getUserId($data['email']);
            session()->set('user_id', $id);
        }
    }
}
