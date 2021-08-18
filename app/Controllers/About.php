<?php

namespace App\Controllers;

class About extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "HMIF UMN | About",
			'request' => $this->request,
		];

		return view('about', $data);
	}
}
