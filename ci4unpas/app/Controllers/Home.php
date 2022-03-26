<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function coba($nama = '', $umur = 0)
    {
        echo "nama saya $nama dan umur saya $umur";
    }
}
