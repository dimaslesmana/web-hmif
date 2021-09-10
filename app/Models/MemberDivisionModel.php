<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberDivisionModel extends Model
{
    protected $table = 'member_division';
    protected $allowedFields = ['division_name'];

    public function getAllDivisi()
    {
        return $this->findAll();
    }
}
