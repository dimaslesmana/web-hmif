<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'HMIF - Dashboard',
            'sidebar_title' => 'HMIF',
            'request' => $this->request,
        ];

		return view('dashboard/index', $data);
	}

    public function eventsView()
    {
        $data = [
            'title' => 'HMIF - Daftar Event',
            'sidebar_title' => 'HMIF',
            'events' => $this->eventPostModel->getEvents(),
            'request' => $this->request,
        ];

        return view('dashboard/events', $data);
    }

    public function addEventsView()
    {
        $data = [
            'title' => 'HMIF - Tambah Event',
            'sidebar_title' => 'HMIF',
            'validation' => $this->validation,
            'event_categories' => $this->eventCategoryModel->getCategories(),
            'request' => $this->request,
            'custom_js' => [
				view('custom-js/ckeditor'),
			],
        ];

        return view('dashboard/events-new', $data);
    }

    /**
     * * Handle add new event request
     */
    public function addEvent()
    {
        $formRules = [
            'event_title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field is required',
                ]
            ],
            'event_categories' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field is required',
                ]
            ],
            'event_body' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field is required',
                ]
            ],
            'event_start_date' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field is required',
                ]
            ],
            'event_end_date' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field is required',
                ]
            ],
            'event_form_link' => [
                'rules' => 'required|valid_url',
                'errors' => [
                    'required' => 'This field is required',
                    'valid_url' => 'Please enter a valid url',
                ]
            ],
            'event_poster' => [
                'rules' => 'max_size[event_poster,3072]|is_image[event_poster]|mime_in[event_poster,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'max_size' => 'Image size is too large. Max 3 MB',
					'is_image' => 'Please choose an image',
					'mime_in' => 'Please choose an image',
                ]
            ],
        ];

        if (!$this->validate($formRules)) {
			return redirect()->to('/dashboard/events/add')->withInput();
		}

        // Handle poster image
        $image = $this->request->getFile('event_poster');

        if ($image->getError() == 4) {
            // no image uploaded
            $imageName = 'placeholder.png';
        } else {
            $imageName = $image->getRandomName();
            $image->move('assets/images/event-poster', $imageName);
        }

        // Data
        $data = [
            'event_id' => random_string('numeric', 5),
            'event_title' => htmlspecialchars($this->request->getPost('event_title'), ENT_QUOTES, 'UTF-8'),
            'event_category' => htmlspecialchars($this->request->getPost('event_categories'), ENT_QUOTES, 'UTF-8'),
            'event_body' => htmlspecialchars($this->request->getPost('event_body'), ENT_QUOTES, 'UTF-8'),
            'event_start_date' => htmlspecialchars($this->request->getPost('event_start_date'), ENT_QUOTES, 'UTF-8'),
            'event_end_date' => htmlspecialchars($this->request->getPost('event_end_date'), ENT_QUOTES, 'UTF-8'),
            'event_form_link' => htmlspecialchars($this->request->getPost('event_form_link'), ENT_QUOTES, 'UTF-8'),
            'event_poster' => $imageName,
        ];

        $this->eventPostModel->insertNewPost($data);

        return redirect()->to('/dashboard/events');
    }
}
