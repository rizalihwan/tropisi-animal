<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'logo_thumbnail',
        'title_company',
        'slug',
        'desc_company',
        'about_title',
        'about_desc',
        'about_visi',
        'about_misi',
        'company_body',
        'company_news',
        'company_galery'
    ];
}
