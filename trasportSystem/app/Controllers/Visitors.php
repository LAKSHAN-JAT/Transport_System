<?php

namespace App\Controllers;

class Visitors extends BaseController
{
    public function index()
    {
        return view('visitors/show');
    }
}