<?php

namespace App\Controllers;

class Contact extends BaseController
{
	public function index()
	{
		$data = [
			'title' => "HMIF UMN | Contact",
			'request' => $this->request,
		];

		return view('contact', $data);
	}
}
