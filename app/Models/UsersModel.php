<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password'];

    public function insertNewUser($user)
    {
        $this->save([
            'username' => $user['email'],
            'password' => $user['password'],
        ]);
    }

    public function getUserByUsername($username)
    {
        return $this->where(['username' => $username])->first();
    }
}
