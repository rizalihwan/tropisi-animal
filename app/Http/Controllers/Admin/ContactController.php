<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use \App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contact.index',
        [
            'contact' => Contact::first()
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $attr = $this->validateReq();
        $attr['slug'] = \Str::slug(request('email') . \Str::random(10));
        Contact::create($attr);
        session()->flash('success', 'Data Was Created Successfully');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('admin.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Contact $contact)
    {
        $attr = $this->validateReq();
        $contact->update($attr);
        session()->flash('success', 'Data Was Updated Successfully');
        return redirect()->route('admin.contact.contact');
    }

    public function validateReq()
    {
        return $this->validate(request(),[
            'email'    => 'required',
            'phone'     => 'required',
            'address'     => 'required'
        ]);
    }
}
