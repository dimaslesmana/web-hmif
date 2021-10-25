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

	public function sendEmail()
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

		$senderName = htmlspecialchars($this->request->getPost('name'), ENT_QUOTES, 'UTF-8');
		$senderEmail = htmlspecialchars($this->request->getPost('email'), ENT_QUOTES, 'UTF-8');
		$emailSubject = htmlspecialchars($this->request->getPost('subject'), ENT_QUOTES, 'UTF-8');
		$emailMessage = htmlspecialchars($this->request->getPost('message'), ENT_QUOTES, 'UTF-8');

		$email = getenv('MAIL_SMTPUser');

		$emailConfig = [
			'protocol' => getenv('MAIL_PROTOCOL'),
			'SMTPHost' => getenv('MAIL_SMTPHost'),
			'SMTPUser' => getenv('MAIL_SMTPUser'),
			'SMTPPass' => getenv('MAIL_SMTPPass'),
			'SMTPPort' => getenv('MAIL_SMTPPort'),
			'SMTPCrypto' => getenv('MAIL_SMTPCrypto'),
			'mailType' => 'text',
			'validate' => true,
		];

		$this->email->initialize($emailConfig);

		$this->email->setFrom($email, $senderName);
		$this->email->setTo($email);

		$this->email->setSubject("$emailSubject | $senderName");
		$this->email->setMessage($emailMessage);

		if ($this->email->send()) {
			session()->setFlashdata('email-alert-success', 'Email berhasil dikirim.');
		} else {
			session()->setFlashdata('email-alert-danger', 'Email gagal dikirim.');

			// $data = $this->email->printDebugger(['headers']);
			// print_r($data);
		}

		// $to_email = $email;
		// $subject = "$emailSubject | $senderName";
		// $body = $emailMessage;
		// $headers = "From: $senderName <$email>";

		// if (mail($to_email, $subject, $body, $headers)) {
		// 	session()->setFlashdata('email-alert-success', 'Email berhasil dikirim.');
		// } else {
		// 	session()->setFlashdata('email-alert-danger', 'Email gagal dikirim.');
		// }

		// d($senderName);
		// d($senderEmail);
		// d($emailSubject);
		// d($emailMessage);
		// d($targetEmail);

		return redirect()->to('/contact');
	}
}
