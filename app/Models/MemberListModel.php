<?php

namespace App\Models;

use CodeIgniter\Model;

class MemberListModel extends Model
{
    protected $table = 'member_list';
    protected $allowedFields = ['member_name', 'member_major', 'member_year', 'member_position', 'member_type', 'member_division', 'member_email', 'member_line', 'member_image'];
    protected $useTimestamps = true;

    public function insertNewAnggota($data)
    {
        $this->save($data);
    }

    public function updateMember($data)
    {
        $this->save($data);
    }

    public function deleteMember($id)
    {
        $this->delete($id);
    }

    public function getAllAnggota()
    {
        /**
         * SELECT ml.*, md.division_name
         * FROM member_list ml
         * INNER JOIN member_division md ON ml.member_division = md.id;
         */
        return $this->select('member_list.*, member_division.division_name')
            ->join('member_division', 'member_list.member_division = member_division.id')
            ->findAll();
    }

    public function getMemberById($id)
    {
        return $this->select('member_list.*, member_division.division_name')
            ->join('member_division', 'member_list.member_division = member_division.id')
            ->where(['member_list.id' => $id])
            ->first();
    }
}
