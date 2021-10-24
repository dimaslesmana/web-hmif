<?php

namespace App\Controllers;

class Main extends BaseController
{
	public function index()
	{
		setlocale(LC_TIME, 'ID');

		$data = [
			'title' => "HMIF UMN",
			'request' => $this->request,
			'events' => $this->eventPostModel->getEvents(),
		];

		return view('index', $data);
	}
}
