@extends('layouts.user.app', [
    'title' => 'Home',
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
.parallax img,
.slides img{
    filter : brightness(80%)
}
.carousel-item img{
    width : auto;
    height : 300px;
}
</style>
    <div class="slider" id="home">
        <ul class="slides">
            <li>
                <img src="{{ asset('asset/ASET/x1/pascal-muller-iSz0IMtulos-unsplash.png') }}">
                <div class="caption left-align">
                    <div class="row">
                        <div class="col m5">
                            <h3>{!! nl2br($profile->title_company) !!}</h3>
                            <p>{!! nl2br($profile->desc_company) !!}</p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <!-- about us -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col m6">
                    <strong class="green-text">TENTANG KAMI</strong>
                    <h3>{!! nl2br($profile->about_title) !!}</h3>
                    <p>{!! nl2br($profile->about_desc) !!}</p>
                    <a href="{{ route('about') }}" class="sidenav-trigger waves-effect waves-light btn green darken-2 button">Baca Selengkapnya &rightarrow;</a>
                </div>
                <div class="col m3 light">
                    <br>
                    <img src="{{ asset('asset/ASET/x1/alessandro-desantis-9_9hzZVjV8s-unsplash.png') }}" alt="" class="responsive-img materialboxed">
                </div>
                <div class="col m3">
                    <br>
                    <img src="{{ asset('asset/ASET/x1/joshua-j-cotten-VCzNXhMoyBw-unsplash.png') }}" alt="" class="responsive-img materialboxed">
                </div>
                <div class="row">
                    <div class="col m6">
                        <br>
                        <img src="{{ asset('asset/ASET/x1/kyle-nieber-3ryX0ShTMWg-unsplash.png') }}" alt="" class="responsive-img materialboxed">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Clients -->
    <section>
        <div class="parallax-container">
            <div class="parallax"><img src="{{ asset('asset/ASET/x1/juliana-castro-LdEZjO3wjqQ-unsplash.png') }}"></div>
            <div class="container">
                <h3 class="white-text">{!! nl2br($profile->company_body) !!}</h3>
                <div class="row">
                    @foreach ($bodys as $body)
                        <div class="col m3 s12 center">
                            <div class="card-panel center waves-effect waves-dark" style="width: 220px; height: 250px; overflow: hidden;">
                                <i class="material-icons medium green-text">pets</i>

                                <h6>{!! nl2br($body->body_title) !!}</h6>
                                <p class="grey-text">{!! nl2br($body->body_desc) !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <!-- PortFolio -->
    <section>
        <div class="container">
            <strong class="green-text">BERITA</strong>
            <h3 class="">{!! nl2br($profile->company_news) !!}</h3>
            <div class="row">
                @foreach ($news as $news)
                <div class="col m4 s12 center">
                    <div class="card">
                        <div class="card-image">
                            <img src="{{ asset('thumbnail/news_image/'.$news->news_thumbnail) }}" alt="" style="height: 175px; width: 100%; object-fit: cover;" class="responsive-img materialboxed">
                        </div>
                        <a href="{{ route('news') }}" style="color: #000000;">
                            <div class="card-content waves-effect waves-dark">
                                <h6>{!! Str::limit(nl2br($news->news_title), 15, '...') !!}</h6>
                                <p class="light grey-text darken-2">{!! Str::limit(nl2br($news->news_description), 15, '...') !!}</p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="container-fluid">
            <div class="row">
                <div class="col m11 offset-m1">
                    <strong class="green-text">GALERI</strong>
                    <h3>{!! nl2br($profile->company_galery) !!}</h3>
                </div>
                <div class="carousel" style="margin-bottom: -30px;">
                    <div class="col m10 offset-2">
                        <a class="carousel-item" href="{{ route('gallery') }}"><img src="{{ asset('asset/ASET/x1/kyaw-tun-_YIX48_4hgs-unsplash.png') }}" style="object-fit: cover;" class="responsive-img"></a>
                        <a class="carousel-item" href="{{ route('gallery') }}"><img src="{{ asset('asset/ASET/x1/dawn-armfield-84n7c9cLEKM-unsplash.png') }}" style="object-fit: cover;" class="responsive-img"></a>
                        <a class="carousel-item" href="{{ route('gallery') }}"><img src="{{ asset('asset/ASET/x1/oscar-merchant-sCt1TLNIxFw-unsplash.png') }}" style="object-fit: cover;"></a>
                        <a class="carousel-item" href="{{ route('gallery') }}"><img src="{{ asset('asset/ASET/x1/david-clode-0lwa8Dprrzs-unsplash.png') }}" style="object-fit: cover;" class="responsive-img"></a>
                        <a class="carousel-item" href="{{ route('gallery') }}"><img src="{{ asset('asset/ASET/x1/alessandro-desantis-9_9hzZVjV8s-unsplash.png') }}" style="object-fit: cover;" class="responsive-img"></a>
                        <a class="carousel-item" href="{{ route('gallery') }}"><img src="{{ asset('asset/ASET/x1/david-clode-AtCChdVhAmA-unsplash.png') }}" style="object-fit: cover;" class="responsive-img"></a>
                        <a class="carousel-item" href="{{ route('gallery') }}"><img src="{{ asset('asset/ASET/x1/hans-veth-o33FMDaXJS8-unsplash.png') }}" style="object-fit: cover;" class="responsive-img"></a>
                        <a class="carousel-item" href="{{ route('gallery') }}"><img src="{{ asset('asset/ASET/x1/joshua-j-cotten-VCzNXhMoyBw-unsplash.png') }}" style="object-fit: cover;" class="responsive-img"></a>
                        <a class="carousel-item" href="{{ route('gallery') }}"><img src="{{ asset('asset/ASET/x1/mathew-schwartz-OjQgsR1oyEw-unsplash.png') }}" style="object-fit: cover;" class="responsive-img"></a>
                        <a class="carousel-item" href="{{ route('gallery') }}"><img src="{{ asset('asset/ASET/x1/rick-l-037fCBgZB10-unsplash.png') }}" style="object-fit: cover;" class="responsive-img"></a>
                        <a class="carousel-item" href="{{ route('gallery') }}"><img src="{{ asset('asset/ASET/x1/kyaw-tun-_YIX48_4hgs-unsplash.png') }}" style="object-fit: cover;" class="responsive-img"></a>
                        <a class="carousel-item" href="{{ route('gallery') }}"><img src="{{ asset('asset/ASET/x1/dawn-armfield-84n7c9cLEKM-unsplash.png') }}" style="object-fit: cover;" class="responsive-img"></a>
                        <a class="carousel-item" href="{{ route('gallery') }}"><img src="{{ asset('asset/ASET/x1/oscar-merchant-sCt1TLNIxFw-unsplash.png') }}" style="object-fit: cover;" class="responsive-img"></a>
                    </div>
                </div>
            </div>
        </div>
    <!-- Contact -->

@endsection
