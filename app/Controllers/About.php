<?php

namespace App\Controllers;

class About extends BaseController
{
	public function index()
	{
		$members = $this->memberListModel->getAllAnggota();

		$data = [
			'title' => "HMIF UMN | About",
			'request' => $this->request,
			'anggota_hmif' => array_filter($members, function ($m) {
				return $m['member_type'] === 'HMIF';
			}),
			'anggota_serum' => array_filter($members, function ($m) {
				return $m['member_type'] === 'SERUM';
			}),
		];

		return view('about', $data);
	}
}
