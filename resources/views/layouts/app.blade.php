<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Sina RashidiAzar</title>
</head>
<body class="bg-gradient-to-r from-gray-100 to-gray-200">
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