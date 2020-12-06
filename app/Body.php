<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Body extends Model
{
    protected $fillable = [
        'body_title',
        'slug',
        'body_desc'
    ];
}
