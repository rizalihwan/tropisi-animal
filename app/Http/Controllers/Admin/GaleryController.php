<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use \App\Galery;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.galery.index', [
            'galerys' => Galery::latest()->paginate(2)
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
        $this->validate(request(),[
            'galery_thumbnail' => 'required|max:2048|mimes:png,jpg,jpeg,svg,ico'
        ]);

        $nm = request('galery_thumbnail');
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalName();
        $nm->move(public_path().'/thumbnail/gallery_image', $namaFile);
        Galery::create([
            'galery_thumbnail' => $namaFile
        ]);
        session()->flash('success', 'Data Saved Successfully');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galery = Galery::findOrFail($id);
        return view('admin.galery.edit', compact('galery'));
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
        $galery = Galery::findOrFail($id);
        if(request()->file('galery_thumbnail') == "")
        {
            $galery->galery_thumbnail = $galery->galery_thumbnail;
        } else {
            if(request()->hasFile('galery_thumbnail'))
            {
                $file = 'thumbnail/gallery_image/'.$galery->galery_thumbnail;
                if(is_file($file))
                {
                    unlink($file);
                }
                $file = request()->file('galery_thumbnail');
                $filename = time().rand(100,999).".".$file->getClientOriginalName();
                request()->file('galery_thumbnail')->move('thumbnail/gallery_image/', $filename);
                $galery->galery_thumbnail = $filename;
            }
        }
        $galery->save();
        session()->flash('success', 'Data Was Updated Successfully');
        return redirect()->route('admin.galery.galery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galery = Galery::findOrFail($id);
        $thumb = 'thumbnail/gallery_image/'.$galery->galery_thumbnail;
        if(is_file($thumb))
        {
            unlink($thumb);
        }
        $galery->delete();
        session()->flash('success', 'Data Deleted Successfully');
        return back();
    }

    public function show()
    {
        //
    }
}
