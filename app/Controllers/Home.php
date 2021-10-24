<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$eventsNews = $this->eventNewsModel->getAllEventNews();

		foreach ($eventsNews as $idx => $item) {
			$eventsNews[$idx]['event_photos'] = explode(',', $item['event_photos']);
		}

		$event_news_bph = [];
		$event_news_pr = [];
		$event_news_kesma = [];
		$event_news_humaniora = [];
		$event_news_itdev = [];

		foreach ($eventsNews as $idx => $item) {
			switch ($item['event_division']) {
				case "Badan Pengurus Harian":
					array_push($event_news_bph, $item);
					break;
				case "Public Relation":
					array_push($event_news_pr, $item);
					break;
				case "Kesejahteraan Mahasiswa":
					array_push($event_news_kesma, $item);
					break;
				case "Humaniora":
					array_push($event_news_humaniora, $item);
					break;
				case "IT Development":
					array_push($event_news_itdev, $item);
					break;
			}
		}

		$data = [
			'title' => "HMIF UMN | Home",
			'request' => $this->request,
			'event_news_bph' => $event_news_bph,
			'event_news_pr' => $event_news_pr,
			'event_news_kesma' => $event_news_kesma,
			'event_news_humaniora' => $event_news_humaniora,
			'event_news_itdev' => $event_news_itdev,
		];

		return view('home', $data);
	}
}
