<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use \App\Body;

class BodyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.body.index', [
            'bodys' => Body::latest()->paginate(2),
            'countBody' => Body::get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $count = Body::count();
        if($count >= 4){
            session()->flash('warning', 'Content Maximum!');
            return back();
        }else{
            $attr = $this->validateReq();
            $attr['slug'] = \Str::slug(request('body_title').\Str::random(10));
            Body::create($attr);
            session()->flash('success', 'Data Saved Successfully');
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Body $body)
    {
        return view('admin.body.edit', compact('body'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Body $body)
    {
        $attr = $this->validateReq();
        $body->update($attr);
        session()->flash('success', 'Data Was Updated Successfully');
        return redirect()->route('admin.body.body');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Body $body)
    {
        $body->delete();
        session()->flash('success', 'Data Deleted Successfully');
        return back();
    }

    public function validateReq()
    {
        return $this->validate(request(),[
            'body_title'    => 'required|max:25|min:2',
            'body_desc'     => 'required|min:5'
        ]);
    }
}
