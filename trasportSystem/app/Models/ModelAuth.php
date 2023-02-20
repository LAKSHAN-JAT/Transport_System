<?php

    namespace App\Models;

    use CodeIgniter\Model;

    class ModelAuth extends Model{
        public function save_register($data){

            $this->db->table('users')->insert($data);
        }
    }


