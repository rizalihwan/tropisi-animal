
    <footer class="grey darken-4 white-text">
        <div class="container">
        <div class="row">
            <div class="col m3 offset-m1">
                <h6>Tropisianimal</h6>
                <p class="light grey-text darken-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus laborum, deleniti cumque error tenetur nihil. Aspernatur magnam minima dicta ipsam dolorum iste fugit quam adipisci culpa? Soluta architecto voluptatum eius.</p>
                <img src="{{ asset('asset/ASET/x1/001-facebook.png') }}" alt="">
                <img src="{{ asset('asset/ASET/x1/002-twitter.png') }}" alt="">
            </div>

            <div class="col m2">
                <h6>Useful links</h6>
                <ul class="list">
                    <li><a href=""><strong class="white-text">Blog</strong></a></li>
                    <li><a href=""><strong class="white-text">Hewan</strong></a></li>
                    <li><a href=""><strong class="white-text">Galeri</strong></a></li>
                    <li><a href=""><strong class="white-text">Testimonial</strong></a></li>
                </ul>
            </div>
            <div class="col m2">
            <h6>Privacy</h6>
            <ul class="list">
                    <li><a href=""><strong class="white-text">Karir</strong></a></li>
                    <li><a href=""><strong class="white-text">Tentang Kami</strong></a></li>
                    <li><a href=""><strong class="white-text">Kontak Kami</strong></a></li>
                    <li><a href=""><strong class="white-text">Servis</strong></a></li>
                </ul>
            </div>
            <div class="col m3">
                <h6>Contact</h6>
                <ul class="list">
                    <li><a href="https://mailto:rizalihwan94@gmail.com" target="_blank"><i class="material-icons left white-text" style="font-size : large">email <strong style="font-size : medium">{{ $email ?? 'notfound' }}</strong></i></a></li>
                    <li><a href="https://wa.me/+6285770254568" target="_blank"><i class="material-icons left white-text" style="font-size : large">phone <strong style="font-size : medium">{{ $phone ?? 'notfound' }}</strong></i></a></li>
                    <li><a href="https://www.google.com/maps/place/6%C2%B042'05.8%22S+106%C2%B049'18.2%22E/@-6.7016021,106.8195206,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d-6.7016021!4d106.8217093?hl=en" target="_blank"><i class="material-icons left white-text" style="font-size : large">place <strong style="font-size : medium">{{ $addr ?? 'notfound' }}</strong></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row center">
            <div class="col m12">
                <strong>Copyright 2020 All rights reserved</strong>
            </div>

        </div>
        </div>
    </footer>
