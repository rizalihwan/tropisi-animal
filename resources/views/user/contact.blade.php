@extends('layouts.user.app', [
    'title' => 'Contact',
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
                    <h3>Kontak Kami</h3>
                </div>
            </li>
        </ul>
    </div>

<section>
    <div class="container">
        <div class="row">
            <div class="col m12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.557361973617!2d106.81953351477175!3d-6.7016110951549255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNDInMDUuOCJTIDEwNsKwNDknMTguMiJF!5e0!3m2!1sen!2sid!4v1604645867948!5m2!1sen!2sid" width="1000" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</section>
<section>
        <div class="container">
            <h3>Kontak Kami</h3>
            <div class="row">
                <form action="">
                <div class="col m6 s12">
                <div class="card-panel" style="height: 305px;">
                    <div class="input-field">
                        <textarea name="messagge" id="messagge" class="materialize-textarea validate" required></textarea>
                        <label for="messagge">Message</label>
                    </div>
                </div>
                </div>
                <div class="col m6 s12">
                        <div class="card-panel">
                            <div class="input-field">
                                <input type="text" name="name" id="name" required class="validate">
                                <label for="name">Name</label>
                            </div>
                            <div class="input-field">
                                <input type="email" name="email" id="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="text" name="phone" id="phone" class="validate" required>
                                <label for="phone">Phone</label>
                            </div>

                            <button class="btn green darken-2" style="width: 100%;">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
