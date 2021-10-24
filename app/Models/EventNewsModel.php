<?php

namespace App\Models;

use CodeIgniter\Model;

class EventNewsModel extends Model
{
    protected $table = 'event_news';
    protected $allowedFields = ['event_news_id', 'event_name', 'event_description', 'event_date', 'event_division', 'event_photo'];
    protected $useTimestamps = true;

    public function insertNewsBatch($data)
    {
        return $this->insertBatch($data);
    }

    public function getAllEventNews()
    {
        return $this->select('event_news.id, event_news.event_news_id, event_news.event_name, event_news.event_description, event_news.event_date, member_division.division_name AS event_division, GROUP_CONCAT(event_news.event_photo) AS `event_photos`, event_news.created_at, event_news.updated_at')
            ->join('member_division', 'event_news.event_division = member_division.id')
            ->groupBy('event_news_id')
            ->findAll();
    }

    public function getEventNewsById($eventNewsId)
    {
        return $this->select('event_news.id, event_news.event_news_id, event_news.event_name, event_news.event_description, event_news.event_date, member_division.division_name AS event_division, GROUP_CONCAT(event_news.event_photo) AS `event_photos`, event_news.created_at, event_news.updated_at')
            ->join('member_division', 'event_news.event_division = member_division.id')
            ->where(['event_news_id' => $eventNewsId])
            ->first();
    }

    public function deleteEventNewsById($eventNewsId)
    {
        $this->where('event_news_id', $eventNewsId)->delete();
    }
}
