<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Page User',
        ];
        return view('user/index');

        // manggilnya pake session ( helper yang ada di myth auth)
    }
}
