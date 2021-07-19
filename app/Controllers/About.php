<?php

namespace App\Controllers;

class About extends BaseController
{
	public function index()
	{
		$data = [
            'title' => "HMIF UMN | About",
        ];

		return view('about', $data);
	}
}
