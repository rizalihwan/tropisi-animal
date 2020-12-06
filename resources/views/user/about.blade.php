@extends('layouts.user.app', [
    'title' => 'About',
    'logo' => asset('thumbnail/logo_image/'.$profile->logo_thumbnail),
    'email' => $contact->email ?? 'NotFound',
    'phone' => $contact->phone ?? 'NotFound',
    'addr' => $contact->address ?? 'NotFound'
])
@section('content')
<style>
    section,footer{
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
                        <h3>Tentang Kami</h3>
                    </div>
            </li>
        </ul>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col m6">
                                    <h3>Tropisianimal</h3>
                                    <p>{!! nl2br($profile->about_desc) !!}</p>
                                </div>
                                <div class="col m3">
                                    <br>
                                    <img src="{{ asset('asset/ASET/x1/kyaw-tun-_YIX48_4hgs-unsplash.png') }}" class="responsive-img materialboxed">
                                </div>
                                <div class="col m3">
                                    <br>
                                    <img src="{{ asset('asset/ASET/x1/dawn-armfield-84n7c9cLEKM-unsplash.png') }}" class="responsive-img materialboxed">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col m6 offset-m6">
                                    <br>
                                    <img src="{{ asset('asset/ASET/x1/smit-patel-dGMcpbzcq1I-unsplash.png') }}" class="responsive-img materialboxed">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <h3>Visi</h3>
                <p>{!! nl2br($profile->about_visi) !!}</p>
            </div>
            <div class="row">
                <h3>Misi</h3>
                <p>{!! nl2br($profile->about_misi) !!}</p>
            </div>
        </div>
    </section>
@endsection
