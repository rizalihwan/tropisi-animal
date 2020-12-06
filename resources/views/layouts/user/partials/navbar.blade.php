<!-- navbar -->
<div class="navbar-fixed">
    <nav class="teal accent-4">
      <div class="container">
          <div class="nav-wrapper">
                <a href="{{ route('home') }}" class="brand-logo"><img src="{{ $logo ?? asset('asset/ASET/x1/Tropisianimal.png') }}" width="150px"></a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">more_vert</i></a>
                <ul class="right hide-on-med-and-down navs">
                    <li><a href="{{ route('home') }}">HOME</a></li>
                    <li><a href="{{ route('about') }}">TENTANG</a></li>
                    <li><a href="{{ route('news') }}">BERITA</a></li>
                    <li><a href="{{ route('gallery') }}">GALERI</a></li>
                    <li><a href="{{ route('contact') }}">KONTAK</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
