<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
	public function index()
	{
        $data = [
            'title' => 'HMIF - Dashboard',
            'sidebar_title' => 'HMIF',
        ];

		return view('dashboard/index', $data);
	}
}
