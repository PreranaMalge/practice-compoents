<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-overlayscrollbars-initialize>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('site/images/media/cropped-kalpraj_logo-removebg-192x192.png') }}">
    <title>@yield('title')</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@300;400;500;600;700;900&display=swap" />


    <!-- page css -->
    @stack('custom_css_plugins')

    @vite(['resources/css/app.css'])
    @vite(['resources/scss/app.scss'])

    <!-- Custom css -->
    @stack('custom_css')

</head>

<body data-spy="scroll" data-target="header" data-offset="80" data-overlayscrollbars-initialize>


    {{-- @include('layouts.header') --}}

    @yield('content')

    {{ $slot ?? '' }} {{-- Livewire Slot for direct view from route --}}

    {{-- @include('layouts.footer') --}}

    {{-- @include('layouts.image') --}}

    @stack('custom_js_plugins')

    @vite(['resources/js/app.js'])

    <!-- Custom JS -->
    @stack('custom_js')

</body>

</html>
