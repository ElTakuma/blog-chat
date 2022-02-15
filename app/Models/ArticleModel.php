<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table = 'article';

    protected $allowedFields = [
        'slug',
        'lang',
        'title',
        'text',
        'created_at',
        'updated_at'
    ];

}