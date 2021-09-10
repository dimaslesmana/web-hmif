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
            'title' => 'HMIF - Dashboard | Daftar Event',
            'sidebar_title' => 'HMIF',
            'events' => $this->eventPostModel->getEvents(),
            'request' => $this->request,
        ];

        return view('dashboard/events', $data);
    }

    public function addEventsView()
    {
        $data = [
            'title' => 'HMIF - Dashboard | Tambah Event',
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

    public function editEventsView($eventId = null)
    {
        if (empty($eventId)) {
            return redirect()->to('/dashboard/events');
        }

        $event = $this->eventPostModel->getEventById($eventId);
        if (empty($event)) {
            return redirect()->to('/dashboard/events');
        }

        $data = [
            'title' => 'HMIF - Dashboard | Edit Event',
            'sidebar_title' => 'HMIF',
            'validation' => $this->validation,
            'event' => $event,
            'event_categories' => $this->eventCategoryModel->getCategories(),
            'request' => $this->request,
            'custom_js' => [
                view('custom-js/ckeditor'),
            ],
        ];

        return view('dashboard/events-edit', $data);
    }

    /**
     * * Handle add new event request
     */
    public function insertEvent()
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

    /**
     * * Handle edit event request
     */
    public function updateEvent()
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

        $eventId = htmlspecialchars($this->request->getPost('event_id'), ENT_QUOTES, 'UTF-8');

        if (!$this->validate($formRules)) {
            return redirect()->to('/dashboard/events/edit/' . $eventId)->withInput();
        }

        $event = $this->eventPostModel->getEventById($eventId);

        if (is_null($event)) {
            return redirect()->to('/dashboard/events');
        }

        // Handle poster image
        $image = $this->request->getFile('event_poster');
        $oldImage = $this->request->getPost('old_poster_image');

        if ($image->getError() == 4) {
            // no image uploaded
            $imageName = $oldImage;
        } else {
            $imageName = $image->getRandomName();
            $image->move('assets/images/event-poster', $imageName);

            if (strpos($oldImage, 'placeholder') === false) {
                // delete image if not using placeholder
                unlink('assets/images/event-poster/' . $oldImage);
            }
        }

        // Data
        $data = [
            'id' => $event['id'],
            'event_id' => $eventId,
            'event_title' => htmlspecialchars($this->request->getPost('event_title'), ENT_QUOTES, 'UTF-8'),
            'event_category' => htmlspecialchars($this->request->getPost('event_categories'), ENT_QUOTES, 'UTF-8'),
            'event_body' => htmlspecialchars($this->request->getPost('event_body'), ENT_QUOTES, 'UTF-8'),
            'event_start_date' => htmlspecialchars($this->request->getPost('event_start_date'), ENT_QUOTES, 'UTF-8'),
            'event_end_date' => htmlspecialchars($this->request->getPost('event_end_date'), ENT_QUOTES, 'UTF-8'),
            'event_form_link' => htmlspecialchars($this->request->getPost('event_form_link'), ENT_QUOTES, 'UTF-8'),
            'event_poster' => $imageName,
        ];

        $this->eventPostModel->updatePost($data);

        return redirect()->to('/dashboard/events');
    }

    /**
     * * Handle delete event request
     */
    public function deleteEvent($eventId = null)
    {
        if (empty($eventId)) {
            return redirect()->to('/dashboard/events');
        }

        $event = $this->eventPostModel->getEventById($eventId);

        if (is_null($event)) {
            return redirect()->to('/dashboard/events');
        }

        if (strpos($event['event_poster'], 'placeholder') === false) {
            // delete image if not using placeholder
            unlink('assets/images/event-poster/' . $event['event_poster']);
        }

        $this->eventPostModel->deleteEvent($event['id']);

        return redirect()->to('/dashboard/events');
    }

    public function memberView()
    {
        $data = [
            'title' => 'HMIF - Dashboard | Daftar Anggota',
            'sidebar_title' => 'HMIF',
            'request' => $this->request,
            'members' => $this->memberListModel->getAllAnggota(),
        ];

        return view('dashboard/member-list', $data);
    }

    public function addMemberView()
    {
        $data = [
            'title' => 'HMIF - Dashboard | Tambah Anggota',
            'sidebar_title' => 'HMIF',
            'validation' => $this->validation,
            'request' => $this->request,
            'divisions' => $this->memberDivisionModel->getAllDivisi(),
            'list_major' => ['Informatika'],
            'list_year' => ['2018', '2019', '2020', '2021'],
        ];

        return view('dashboard/member-new', $data);
    }

    public function editMemberView($id = null)
    {
        if (empty($id)) {
            return redirect()->to('/dashboard/member');
        }

        $member = $this->memberListModel->getMemberById($id);
        if (empty($member)) {
            return redirect()->to('/dashboard/member');
        }

        $data = [
            'title' => 'HMIF - Dashboard | Edit Anggota',
            'sidebar_title' => 'HMIF',
            'validation' => $this->validation,
            'request' => $this->request,
            'divisions' => $this->memberDivisionModel->getAllDivisi(),
            'member' => $member,
            'list_major' => ['Informatika'],
            'list_year' => ['2018', '2019', '2020', '2021'],
        ];

        return view('dashboard/member-edit', $data);
    }

    /**
     * * Handle new member request
     */
    public function insertMember()
    {
        $formRules = [
            'member_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field is required',
                ]
            ],
            'member_major' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field is required',
                ]
            ],
            'member_year' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field is required',
                ]
            ],
            'member_position' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field is required',
                ]
            ],
            'member_type' => [
                'rules' => 'required|in_list[HMIF,SERUM]',
                'errors' => [
                    'required' => 'This field is required',
                    'in_list' => 'Choose HMIF/SERUM',
                ]
            ],
            'member_division' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field is required',
                ]
            ],
            'member_email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'This field is required',
                    'valid_email' => 'Please enter a valid email',
                ]
            ],
            'member_image' => [
                'rules' => 'max_size[member_image,3072]|is_image[member_image]|mime_in[member_image,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'max_size' => 'Image size is too large. Max 3 MB',
                    'is_image' => 'Please choose an image',
                    'mime_in' => 'Please choose an image',
                ]
            ],
        ];

        if (!$this->validate($formRules)) {
            return redirect()->to('/dashboard/member/add')->withInput();
        }

        // Handle member image
        $image = $this->request->getFile('member_image');

        if ($image->getError() == 4) {
            // no image uploaded
            $imageName = 'avatar-placeholder.png';
        } else {
            $imageName = $image->getRandomName();
            $image->move('assets/images/anggota', $imageName);
        }

        // Data
        $data = [
            'member_name' => htmlspecialchars($this->request->getPost('member_name'), ENT_QUOTES, 'UTF-8'),
            'member_major' => htmlspecialchars($this->request->getPost('member_major'), ENT_QUOTES, 'UTF-8'),
            'member_year' => htmlspecialchars($this->request->getPost('member_year'), ENT_QUOTES, 'UTF-8'),
            'member_position' => htmlspecialchars($this->request->getPost('member_position'), ENT_QUOTES, 'UTF-8'),
            'member_type' => htmlspecialchars($this->request->getPost('member_type'), ENT_QUOTES, 'UTF-8'),
            'member_division' => htmlspecialchars($this->request->getPost('member_division'), ENT_QUOTES, 'UTF-8'),
            'member_email' => htmlspecialchars($this->request->getPost('member_email'), ENT_QUOTES, 'UTF-8'),
            'member_line' => htmlspecialchars($this->request->getPost('member_line'), ENT_QUOTES, 'UTF-8'),
            'member_image' => $imageName,
        ];

        $this->memberListModel->insertNewAnggota($data);

        return redirect()->to('/dashboard/member');
    }

    /**
     * * Handle edit member request
     */
    public function updateMember()
    {
        $formRules = [
            'member_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field is required',
                ]
            ],
            'member_major' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field is required',
                ]
            ],
            'member_year' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field is required',
                ]
            ],
            'member_position' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field is required',
                ]
            ],
            'member_type' => [
                'rules' => 'required|in_list[HMIF,SERUM]',
                'errors' => [
                    'required' => 'This field is required',
                    'in_list' => 'Choose HMIF/SERUM',
                ]
            ],
            'member_division' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'This field is required',
                ]
            ],
            'member_email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => 'This field is required',
                    'valid_email' => 'Please enter a valid email',
                ]
            ],
            'member_image' => [
                'rules' => 'max_size[member_image,3072]|is_image[member_image]|mime_in[member_image,image/png,image/jpg,image/jpeg]',
                'errors' => [
                    'max_size' => 'Image size is too large. Max 3 MB',
                    'is_image' => 'Please choose an image',
                    'mime_in' => 'Please choose an image',
                ]
            ],
        ];

        $memberId = htmlspecialchars($this->request->getPost('member_id'), ENT_QUOTES, 'UTF-8');

        if (!$this->validate($formRules)) {
            return redirect()->to('/dashboard/member/edit/' . $memberId)->withInput();
        }

        $member = $this->memberListModel->getMemberById($memberId);
        if (is_null($member)) {
            return redirect()->to('/dashboard/member');
        }

        // Handle member image
        $image = $this->request->getFile('member_image');
        $oldImage = $this->request->getPost('old_member_image');

        if ($image->getError() == 4) {
            // no image uploaded
            $imageName = $oldImage;
        } else {
            $imageName = $image->getRandomName();
            $image->move('assets/images/anggota', $imageName);

            if (strpos($oldImage, 'placeholder') === false) {
                // delete image if not using placeholder
                unlink('assets/images/anggota/' . $oldImage);
            }
        }

        // Data
        $data = [
            'id' => $member['id'],
            'member_name' => htmlspecialchars($this->request->getPost('member_name'), ENT_QUOTES, 'UTF-8'),
            'member_major' => htmlspecialchars($this->request->getPost('member_major'), ENT_QUOTES, 'UTF-8'),
            'member_year' => htmlspecialchars($this->request->getPost('member_year'), ENT_QUOTES, 'UTF-8'),
            'member_position' => htmlspecialchars($this->request->getPost('member_position'), ENT_QUOTES, 'UTF-8'),
            'member_type' => htmlspecialchars($this->request->getPost('member_type'), ENT_QUOTES, 'UTF-8'),
            'member_division' => htmlspecialchars($this->request->getPost('member_division'), ENT_QUOTES, 'UTF-8'),
            'member_email' => htmlspecialchars($this->request->getPost('member_email'), ENT_QUOTES, 'UTF-8'),
            'member_line' => htmlspecialchars($this->request->getPost('member_line'), ENT_QUOTES, 'UTF-8'),
            'member_image' => $imageName,
        ];

        $this->memberListModel->updateMember($data);

        return redirect()->to('/dashboard/member');
    }

    /**
     * * Handle delete member request
     */
    public function deleteMember($id = null)
    {
        if (empty($id)) {
            return redirect()->to('/dashboard/member');
        }

        $member = $this->memberListModel->getMemberById($id);
        if (empty($member)) {
            return redirect()->to('/dashboard/member');
        }

        if (strpos($member['member_image'], 'placeholder') === false) {
            // delete image if not using placeholder
            unlink('assets/images/anggota/' . $member['member_image']);
        }

        $this->memberListModel->deleteMember($member['id']);

        return redirect()->to('/dashboard/member');
    }
}
