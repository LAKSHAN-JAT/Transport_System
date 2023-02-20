<?php

namespace App\Controllers;

use App\Models\ModelAuth;

class Auth extends BaseController
{

    public function index(){
       //
    }

    public function login()
    {
       return view('auth/login');
    }

    public function __construct()
    {
        helper('form');
       $this->ModelAuth = new ModelAuth();
    }

    public function register()
    {
        $data = array(
            'title' => 'Register',

        );
        return view('auth/register', $data);
    }

    public function save_register(){

        if($this->validate([
            'name_user' =>[
                'label' => 'Name User',
                'rules' =>'required',
                'errors' =>[
                     'required' => 'Name User is required'
                ]

                ],
                 'email' =>[
                'label' => 'E-Mail',
                'rules' =>'required',
                'errors' =>[
                     'required' => 'User Email  is required'
                ]

                ],
                 'tel_no' =>[
                'label' => 'Mobile Number',
                'rules' =>'required',
                'errors' =>[
                     'required' => 'Mobile number  is required'
                ]
                ],

                  'passowrd' =>[
                'label' => 'Password',
                'rules' =>'required',
                'errors' =>[
                     'required' => 'Password  is required'
                ]
                ],

                  'repassword' =>[
                'label' => 'Retype Password',
                'rules' =>'required|matches[passowrd]',
                'errors' =>[
                     'required' => 'Retype Password  is required',
                     'matches' => 'Confirm Password is invalid!!'
                ]
                ],
        ])){
            $data  = array(
                'name_user'=> $this->request->getPost('name_user'),
                'email'=> $this->request->getPost('email'),
                'tel_no'=> $this->request->getPost('tel_no'),
                'passowrd'=> $this->request->getPost('passowrd'),
                'level'=> 3
            );
            $this->ModelAuth->save_register($data);
            session()->setFlashdata('message', 'Registration successful!!');
            return redirect()->to(base_url('/register'));

        }else{

            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->back();
        }

    }


}
