<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'username' => 'admin',
			'password' => '$2y$10$oiq6al5caCy2lUydUkQH6OyDlUtr2dACDYmmJLLMU6zp2jqZmyJ2S',
		];

		$this->db->table('users')->insert($data);
	}
}
