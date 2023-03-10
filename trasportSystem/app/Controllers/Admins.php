<?php

namespace App\Controllers;
use App\Models\AdminModel;

class Admins extends BaseController
{
    public function index()
    {
        $session = \Config\Services::session();
        $data['session'] = $session;

        $model = new AdminModel();
        $adminsArray= $model -> getAdmins();

        $data['admins'] = $adminsArray;
        return view('admins/show', $data);
    }

    public function create(){

        $session = \Config\Services::session();
        helper('form');

        $data = [];

        if($this->request->getMethod() == 'post'){
            $input = $this->validate([

                
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required',
                'phone'=> 'required',
                'address' => 'required',
                'pass' => 'required',
                'cpass' => 'required',
               // 'image' => 'required',
                'groups' => 'required',
                
            ]);

            if($input == true){
                //success
                $model = new AdminModel();
                
             
                $model->save([
                    'firstName' => $this->request->getPost('firstName'),
                    'lastName' => $this->request->getPost('lastName'),
                    'email' => $this->request->getPost('email'),
                    'phone' => $this->request->getPost('phone'),
                    'address' => $this->request->getPost('address'),
                    'pass'=>$this->request->getPost('pass'),
                    'cpass'=>$this->request->getPost('cpass'),
                   // 'image' => $this->request->getPost('image'),
                    'groups' => $this->request->getPost('groups'),

                ]);

               session()->setFlashdata('status_text', 'Admin data has been added successfully');

                return redirect()->back()
                ->with('status_icon', 'success')
                ->with('status', 'New admin Added Successfully!!');
            }else{
                //error
                $data['validation'] = $this->validator;
            }
        }



        return view('create-admins/createAdmins', $data);
    }


    

    public function delete($id = null){


        $admin = new AdminModel();
        $admin ->delete($id);
        $data = [

            'status' =>"Delete Successfully",
            'status_text' =>'Admin data has been deleted successfully',
            'status_icon' =>'success'

        ];

        return $this->response->setJSON($data);

    }
}
