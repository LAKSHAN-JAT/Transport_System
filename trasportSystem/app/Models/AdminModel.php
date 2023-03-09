<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminModel extends Model {

    protected $table = 'admins';
    protected $allowedFields = ['image','firstName', 'lastName', 'email', 'phone', 'group','Status', 'pass', 'cpass', 'Date'];


    public function  getAdmins() {

        return $this->orderBy('id', 'DESC')->findAll();
}

   
}
?>