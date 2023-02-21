<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class ModelAuth extends Model{
        public function save_register($data){

            $this->db->table('users')->insert($data);
        }

        public function login($email, $passowrd){

            return $this->db->table('users')->where([

                'email' => $email,
                'passowrd' => $passowrd
            ])->get()->getRowArray();

        }
    }


