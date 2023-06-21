<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('title')
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.png') }}" type="image/x-icon">
    {{-- cdn format date  --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    {{-- css  --}}
    <link rel="stylesheet" href="{{ asset('assets/css/styleProfile.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/reponsiveProfile.css') }}">
    <!-- Styles -->
    @vite(['resources/js/app.js'])

</head>

<body class="container-fluid bg-white">

    @yield('content')

    @yield('scripts')
</body>

</html>
