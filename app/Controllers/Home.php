<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "HMIF UMN | Home",
			'request' => $this->request,
		];

		return view('home', $data);
	}
}
