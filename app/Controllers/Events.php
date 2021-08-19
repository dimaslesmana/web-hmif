<?php

namespace App\Controllers;

class Events extends BaseController
{
    public function index()
    {
        $data = [
            'title' => "HMIF UMN | Events",
            'events' => $this->eventPostModel->getEvents(),
            'request' => $this->request,
        ];

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

        $data = [
            'title' => "HMIF UMN | Event - {$event['event_title']}",
            'event' => $event,
            'request' => $this->request,
        ];

        return view('events/details', $data);
    }
}
