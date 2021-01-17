<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta name="referrer" content="strict-origin" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @include('resources.style')
    @yield('style')
    <title>Sistem Rekomendasi Laptop @yield('title')</title>
</head>

<body>
    <!-- <h1>Hello, world!</h1> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layout.nav')
    @yield('container')

</body>
@include('resources.script')
@yield('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
</html>