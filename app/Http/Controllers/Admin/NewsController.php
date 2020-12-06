<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index', [
            'newss' => News::latest()->paginate('2')
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
        $attr = $this->validateReq();
        $attr['slug'] = \Str::slug(request('news_title') . \Str::random(10));
        $nm = request('news_thumbnail');
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalName();
        $attr['news_thumbnail'] = $namaFile;
        $nm->move(public_path().'/thumbnail/news_image', $namaFile);
        News::create($attr);
        session()->flash('success', 'Data Saved Successfully');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
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
        $news = News::where('id', $id)->first();
        $news->news_title = request('news_title');
        $news->news_description = request('news_description');
        if(request()->file('news_thumbnail') == "")
        {
            $news->news_thumbnail = $news->news_thumbnail;
        } else {
            if(request()->hasFile('news_thumbnail'))
            {
                $file = 'thumbnail/news_image/'.$news->news_thumbnail;
                if(is_file($file))
                {
                    unlink($file);
                }
                $file = request()->file('news_thumbnail');
                $filename = time().rand(100,999).".".$file->getClientOriginalName();
                request()->file('news_thumbnail')->move('thumbnail/news_image/', $filename);
                $news->news_thumbnail = $filename;
            }
        }
        $news->save();
        session()->flash('success', 'Data Was Updated Successfully');
        return redirect()->route('admin.news.news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $thumb = 'thumbnail/news_image/'.$news->news_thumbnail;
        if(is_file($thumb))
        {
            unlink($thumb);
        }
        $news->delete();
        session()->flash('success', 'Data Deleted Successfully');
        return back();
    }

    public function validateReq()
    {
        return $this->validate(request(),[
            'news_thumbnail'    => 'required|mimes:png,jpg,svg,ico,jpeg',
            'news_title'        => 'required|max:25|min:2',
            'news_description'  => 'required'
        ]);
    }
}
