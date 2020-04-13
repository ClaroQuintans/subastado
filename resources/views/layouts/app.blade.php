<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>{{ config('app.name', 'Subastado') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png" sizes="16x16">

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css?v=1.0.0') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        @include('layouts.navbar')

       {{-- @include('partials.side_left') --}}
        <div class="main-content">
            <div id="inner-content" class="container">

                @yield('content')

            </div>
        </div>


    </div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js?v=1.0.0') }}" defer></script>
    <script src="{{ asset('js/navbar.js?v=1.0.1') }}" defer></script>

    @yield('scripts')

</body>
</html>