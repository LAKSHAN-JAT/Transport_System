<?php

namespace App\Controllers;

class Vehicles extends BaseController
{
    public function index()
    {
        return view('vehicle/show');
    }
}