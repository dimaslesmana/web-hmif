<?php

namespace App\Models;

use CodeIgniter\Model;

class EventPostModel extends Model
{
    protected $table = 'event_posts';
    protected $allowedFields = ['event_id', 'event_title', 'event_category', 'event_body', 'event_start_date', 'event_end_date', 'event_form_link', 'event_poster'];
    protected $useTimestamps = true;

    public function insertNewPost($data)
    {
        return $this->save($data);
    }

    public function updatePost($data)
    {
        $this->save($data);
    }

    public function deleteEvent($idPrimaryKey)
    {
        $this->delete($idPrimaryKey);
    }

    public function getEvents()
    {
        /**
         * SELECT ep.id, ep.event_id, event_title, ec.id AS event_category_id, ec.category_name, event_body, event_start_date, event_end_date, event_form_link, event_poster, updated_at
         * FROM event_posts ep
         * INNER JOIN event_categories ec ON ep.event_category = ec.id;
         */
        return $this->select('event_posts.id, event_posts.event_id, event_title, event_categories.id AS event_category_id, event_categories.category_name, event_body, event_start_date, event_end_date, event_form_link, event_poster, updated_at')
            ->join('event_categories', 'event_posts.event_category = event_categories.id')
            ->findAll();
    }

    public function getEventById($eventId)
    {
        return $this->select('event_posts.id, event_posts.event_id, event_title, event_categories.id AS event_category_id, event_categories.category_name, event_body, event_start_date, event_end_date, event_form_link, event_poster, updated_at')
            ->join('event_categories', 'event_posts.event_category = event_categories.id')
            ->where(['event_id' => $eventId])
            ->first();
    }
}
