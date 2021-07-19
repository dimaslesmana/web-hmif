<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
            'title' => "HMIF UMN | Home",
        ];

		return view('home', $data);
	}
}
