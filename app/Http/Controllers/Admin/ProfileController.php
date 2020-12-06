<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use \App\Profile;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::first();
        return view('admin.profile.index', compact('profile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $attr = $this->validateReq();
        $attr['slug'] = \Str::slug(request('title_company') . \Str::random(10));
        $nm = request('logo_thumbnail');
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalName();
        $attr['logo_thumbnail'] = $namaFile;
        $nm->move(public_path().'/thumbnail/logo_image', $namaFile);
        Profile::create($attr);
        session()->flash('success', 'Data Saved Successfully');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        return view('admin.profile.detail', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('admin.profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $profile = Profile::where('id', $id)->first();
        $profile->title_company = request('title_company');
        $profile->desc_company = request('desc_company');
        $profile->about_title = request('about_title');
        $profile->about_desc = request('about_desc');
        $profile->about_visi = request('about_visi');
        $profile->about_misi = request('about_misi');
        $profile->company_body = request('company_body');
        $profile->company_news = request('company_news');
        $profile->company_galery = request('company_galery');
        $profile->updated_at = now();
        if(request()->file('logo_thumbnail') == "")
        {
            $profile->logo_thumbnail = $profile->logo_thumbnail;
        } else {
            if(request()->hasFile('logo_thumbnail'))
            {
                $file = 'thumbnail/logo_image/'.$profile->logo_thumbnail;
                if(is_file($file))
                {
                    unlink($file);
                }
                $file = request()->file('logo_thumbnail');
                $filename = time().rand(100,999).".".$file->getClientOriginalName();
                request()->file('logo_thumbnail')->move('thumbnail/logo_image/', $filename);
                $profile->logo_thumbnail = $filename;
            }
        }
        $profile->save();
        session()->flash('success', 'Data Was Updated Successfully');
        return redirect()->route('admin.profile.profile');
    }

    public function validateReq()
    {
        return $this->validate(request(),[
            'logo_thumbnail'    => 'required|mimes:png,jpg,svg,ico,jpeg',
            'title_company'     => 'required|max:25|min:2',
            'desc_company'      => 'required',
            'about_title'       => 'required|max:25|min:2',
            'about_desc'        => 'required',
            'about_visi'        => 'required',
            'about_misi'        => 'required',
            'company_body'      => 'required|max:25|min:2',
            'company_news'      => 'required|max:25|min:2',
            'company_galery'    => 'required|max:25|min:2'
        ]);
    }
}
