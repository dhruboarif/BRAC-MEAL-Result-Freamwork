<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'BRAC Archiving System') }}: @yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'BRAC Archiving System') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('assets/images/icon.png') }}" type="icon.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/incss/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/incss/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <script src="{{ asset('assets/injs/modernizr.js') }}"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" rel="stylesheet"/> <link href="https://cdn.jsdelivr.net/sweetalert2/6.4.3/sweetalert2.min.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> <script src="https://cdn.jsdelivr.net/sweetalert2/latest/sweetalert2.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>

    @yield('style')
</head>
<body>
@yield('content')

<div class="brk-by"><a href="http://www.brac.net">www.brac.net</a></div>
</body>

<script src="{{ asset('assets/injs/jquery-2.1.4.js')}}"></script>
<script src="{{ asset('assets/injs/main.js')}}"></script>

@yield('script')
</html>
