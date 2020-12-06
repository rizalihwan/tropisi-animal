@extends('layouts.user.app', [
    'title' => 'News',
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
                    <h3>Berita</h3>
                </div>
            </li>
        </ul>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col m3">
                    <img src="{{ asset('asset/ASET/x1/zoe-reeve-9hSejnboeTY-unsplash.png') }}" class="responsive-img materialboxed">
                </div>
                <div class="col m3">
                    <img src="{{ asset('asset/ASET/x1/ronald-gijezen-7h06P9UKhYY-unsplash.png') }}" class="responsive-img materialboxed">
                    <br>
                    <img src="{{ asset('asset/ASET/x1/david-clode-AtCChdVhAmA-unsplash.png') }}" class="responsive-img materialboxed">
                </div>
                <div class="col m6">
                    <h3>10 Hewan Herbivora Yang Berbahaya</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, aperiam. Nemo tenetur illum blanditiis similique eaque earum, ut atque. Aut inventore impedit exercitationem assumenda recusandae? Et vitae sit nostrum excepturi.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque reiciendis dolorem aliquid tempore! Enim fuga nostrum sapiente quis ab odit natus minima, deserunt aperiam quisquam asperiores libero tenetur reprehenderit. Assumenda.</p>
                    <a href="{{ route('news') }}" data-target="slide-out" class="sidenav-trigger waves-effect waves-light btn green">Lihat Selengkapnya &RightArrow;</a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h3>Berita Lainnya</h3>
            <div class="row">
                @foreach ($news as $news)
                <div class="col m4 s12 center">
                    <div class="card" style="overflow: hidden; height: 350px;">
                        <div class="card-image">
                            <img src="{{ asset('thumbnail/news_image/'.$news->news_thumbnail) }}" alt="" style="height: 175px; width: 100%; object-fit: cover;" class="responsive-img materialboxed">
                        </div>
                        <div class="card-content waves-effect waves-dark">
                            <h6>{!! nl2br($news->news_title) !!}</h6>
                            <p class="light grey-text darken-2">{!! nl2br($news->news_description) !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
