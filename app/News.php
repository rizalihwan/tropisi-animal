<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'news_thumbnail',
        'news_title',
        'slug',
        'news_description'
    ];
}
