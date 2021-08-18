<?php

namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "HMIF UMN",
			'request' => $this->request,
		];

		return view('index', $data);
	}
}
