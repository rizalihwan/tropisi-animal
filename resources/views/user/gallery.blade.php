@extends('layouts.user.app', [
    'title' => 'Gallery',
    'logo' => asset('thumbnail/logo_image/'.$profile->logo_thumbnail),
    'email' => $contact->email ?? 'NotFound',
    'phone' => $contact->phone ?? 'NotFound',
    'addr' => $contact->address ?? 'NotFound'
])
@section('content')
<style>
section,
footer{
    padding : 50px 0px;
}

.slides img{
        filter : brightness(50%)
    }
</style>
<div class="slider" id="home">
        <ul class="slides">
            <li>
                <img src="{{ asset('asset/ASET/x1/pascal-muller-iSz0IMtulos-unsplash.png') }}">
                <div class="caption left-align">
                    <h3>Galeri</h3>
                </div>
            </li>
        </ul>
    </div>

    <section>

    <div class="container">
        <div class="row">
            <div class="col m12">
                <img src="{{ asset('asset/ASET/x1/Group 77.png') }}" class="responsive-img materialboxed">
            </div>
        </div>
        <div class="row">
            @foreach ($galerys as $galery)
                <div class="col m3">
                    <img src="{{ asset('thumbnail/gallery_image/'.$galery->galery_thumbnail) }}" style="width: 250px; height: 150px; object-fit: cover; margin-bottom: 5px;"  class="responsive-img materialboxed">
                </div>
            @endforeach
        </div>
    </div>
    </section>
    <script>
        let slider1 = document.querySelector('.slider1');
        M.Slider.init(slider1,{

        });
    </script>
@endsection
