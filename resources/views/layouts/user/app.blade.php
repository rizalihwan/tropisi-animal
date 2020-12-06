<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/icon/dino.png') }}">
    <title>{{ 'Tropisianimal | ' . $title ?? 'Tropisianimal' }} </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/materialize.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    {{-- navbar --}}
    @include('layouts.user.partials.navbar')
    {{-- navbar --}}
    @include('layouts.user.partials.sidebar')
        {{-- content --}}
            @yield('content')
        {{-- End Content --}}
    {{-- footer --}}
     @include('layouts.user.partials.footer')

    {{-- JS Script --}}
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
