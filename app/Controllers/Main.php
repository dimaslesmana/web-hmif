<?php

namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
		$data = [
            'title' => "HMIF UMN",
        ];

		return view('index', $data);
	}
}
