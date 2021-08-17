<?php

namespace App\Models;

use CodeIgniter\Model;

class EventCategoryModel extends Model
{
    protected $table = 'event_categories';
    protected $allowedFields = ['category_name'];

    public function getCategories()
    {
        return $this->findAll();
    }
}
