<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Sina RashidiAzar</title>
    <script src="https://kit.fontawesome.com/2cc1bf26dc.js" crossorigin="anonymous"></script>
</head>
<body class="bg-slate-800 text-neutral-50">
    @include('layouts.nav')
    <header>
        {{-- Header Section --}}
        @include('layouts.header')
    </header>
    <div>
        {{-- Header Section --}}
        @yield('content')
    </div>
    <footer>
        {{-- Footer Section --}}
        @include('layouts.footer')
    </footer>
</body>
</html>