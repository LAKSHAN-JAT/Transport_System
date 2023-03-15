<?php

namespace App\Controllers;

class Drivers extends BaseController
{
    public function index()
    {
        return view('driver/show');
    }
}