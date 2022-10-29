<!doctype html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/mdb.min.js') }}" defer></script>
    <script src="{{ asset('assets/js/mdb.min.map.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />

    <!-- Styles -->
    <link href="{{ asset('assets/css/mdb.min.css') }}" rel="stylesheet">
{{--    <link href="{{ asset('assets/css/mdb.dark.min.css') }}" rel="stylesheet">--}}
</head>
<body>
    <main class="py-4 container w-25">
        @yield('content')
    </main>
</body>
</html>
