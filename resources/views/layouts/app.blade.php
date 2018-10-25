<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <script src="{{ asset('js/app.js') }}"></script>

    <div id="app">
        @include('layouts.partials.navigation')

        @yield('content')
    </div>

    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>