<?php

namespace App\Controllers;

class Contact extends BaseController
{
	public function __construct()
	{
		$this->email = \Config\Services::email();
	}

	public function index()
	{
		$data = [
			'title' => "HMIF UMN | Contact",
			'request' => $this->request,
			'validation' => $this->validation,
		];

		return view('contact', $data);
	}

	public function send()
	{
		$formRules = [
			'name' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'This field is required',
				]
			],
			'email' => [
				'rules' => 'required|valid_email',
				'errors' => [
					'required' => 'This field is required',
					'valid_email' => 'Please enter valid email address',
				]
			],
			'subject' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'This field is required',
				]
			],
			'message' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'This field is required',
				]
			],
		];

		if (!$this->validate($formRules)) {
			return redirect()->to('/contact')->withInput();
		}

		$data = [
			'name' => htmlspecialchars($this->request->getPost('name'), ENT_QUOTES, 'UTF-8'),
			'email' => htmlspecialchars($this->request->getPost('email'), ENT_QUOTES, 'UTF-8'),
			'subject' => htmlspecialchars($this->request->getPost('subject'), ENT_QUOTES, 'UTF-8'),
			'message' => htmlspecialchars($this->request->getPost('message'), ENT_QUOTES, 'UTF-8'),
		];

		$url = getenv('SCRIPT_URL');

		$ch = curl_init();

		$headers = ["Content-Type: application/json"];

		$query = http_build_query($data);

		curl_setopt($ch, CURLOPT_URL, "$url?$query");
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

		$response = curl_exec($ch);

		if ($response !== false) {
			session()->setFlashdata('contact-alert-success', 'Pesan berhasil dikirim.');
		} else {
			session()->setFlashdata('contact-alert-danger', 'Pesan gagal dikirim.');
		}

		curl_close($ch);

		return redirect()->to('/contact');
	}
}
