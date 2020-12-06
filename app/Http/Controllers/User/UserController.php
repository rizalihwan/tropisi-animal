<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use \App\{Profile,Contact,Body,News,Galery};

class UserController extends Controller
{
    public function home()
    {
        return view('user.home',[
            'profile' => Profile::first(),
            'contact' => Contact::first(),
            'bodys' => Body::get(),
            'news' => News::latest()->take(6)->get(),
            'galerys' => Galery::latest()->get()
        ]);
    }

    public function about()
    {
        return view('user.about',[
            'profile' => Profile::first(),
            'contact' => Contact::first()
        ]);
    }

    public function news()
    {
        return view('user.news',[
            'profile' => Profile::first(),
            'contact' => Contact::first(),
            'news' => News::latest()->get()
        ]);
    }

    public function gallery()
    {
        return view('user.gallery',[
            'profile' => Profile::first(),
            'contact' => Contact::first(),
            'galerys' => Galery::latest()->get()
        ]);
    }

    public function contact()
    {
        return view('user.contact',[
            'profile' => Profile::first(),
            'contact' => Contact::first()
        ]);
    }
}
