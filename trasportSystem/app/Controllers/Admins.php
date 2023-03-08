<?php

namespace App\Controllers;

class Admins extends BaseController
{
    public function index()
    {
        return view('admins/show');
    }

    public function create(){

        $session = \config\Services::session();
        helper('form');

        if($this->request->getMethod() == 'POST'){
            $input = $this->validate([

                'image' => 'required',
                'firstName' => 'required',
                'lastName' => 'required',
                'emailAddress' => 'required',
                'phoneNumber' => 'required',
                'groups' => 'required',
                'password' => 'required',
                'passwordConfirmation' => 'required',
            ]);
        }



        return view('create-admins/createAdmins');
    }
}
