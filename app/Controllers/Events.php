<?php

namespace App\Controllers;

use phpDocumentor\Reflection\Types\Null_;

class Events extends BaseController
{
    public function index()
    {
        setlocale(LC_TIME, 'ID');

        $data = [
            'title' => "HMIF UMN | Events",
            'events' => $this->eventPostModel->getEvents(),
            'request' => $this->request,
        ];

        foreach ($data['events'] as $idx => $item) {
            $startDate = date_create($item['event_start_date']);
            $currentDate = date_create();

            if ($currentDate >= $startDate) {
                $data['events'][$idx]['event_remaining_days'] = "Selesai";
            } else {
                $data['events'][$idx]['event_remaining_days'] = date_diff($currentDate, $startDate)->format("%d hari %h jam %i menit");
            }
        }

        return view('events/index', $data);
    }

    public function details($eventId = null)
    {
        if (empty($eventId)) {
            return redirect()->to('/events');
        }

        $event = $this->eventPostModel->getEventById($eventId);
        if (empty($event)) {
            return redirect()->to('/events');
        }

        setlocale(LC_TIME, 'ID');

        $data = [
            'title' => "HMIF UMN | Event - {$event['event_title']}",
            'event' => $event,
            'request' => $this->request,
        ];

        return view('events/details', $data);
    }
}
