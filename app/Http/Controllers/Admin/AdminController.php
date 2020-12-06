<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use \App\{User,News,Body,Galery};

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('admin.index', [
            'admin' => User::count(),
            'news' => News::count(),
            'body' => Body::count(),
            'galery' => Galery::count()
        ]);
    }

}
