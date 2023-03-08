<?php

namespace App\Controllers;

class Admins extends BaseController
{
    public function index()
    {
        return view('admins/show');
    }

    public function create(){

        $session = \Config\Services::session();
        helper('form');

        $data = [];

        if($this->request->getMethod() == 'post'){
            $input = $this->validate([

                
                'firstName' => 'required',
            ]);
            if($input == true){
                //success
            }else{
                //error
                $data['validation'] = $this->validator;
            }
        }



        return view('create-admins/createAdmins', $data);
    }
}
