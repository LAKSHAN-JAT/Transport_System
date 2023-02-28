<?php

namespace App\Controllers;

class Admins extends BaseController
{
    public function index()
    {
        return view('admins/show');
    }

    public function create(){
        return view('create-admins/createAdmins');
    }
}
