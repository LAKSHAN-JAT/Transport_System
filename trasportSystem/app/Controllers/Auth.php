<?php

namespace App\Controllers;
use App\Models\Model_Auth;

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
       $this->Model_Auth = new Model_Auth();
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
            'name-user' =>[
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

                  'password' =>[
                'label' => 'Password',
                'rules' =>'required',
                'errors' =>[
                     'required' => 'Password  is required'
                ]
                ],

                  'repassword' =>[
                'label' => 'Retype Password',
                'rules' =>'required|matches[Password]',
                'errors' =>[
                     'required' => 'Retype Password  is required',
                     'matches' => 'Confirm Password is invalid!!'
                ]
                ],
        ])){

        }else{

            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->back();
        }

    }


}
