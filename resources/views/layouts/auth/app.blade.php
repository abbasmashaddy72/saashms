<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon" type="image/svg+xml">

    <title>{{ $title . ' | ' ?? '' }}{{ config('app.name', 'Laravel') }}</title>

    @vite(['resources/css/backend/app.css', 'resources/js/backend/app.js'])
    @stack('styles')
</head>

<body class="login">

    {{ $slot }}

    @stack('scripts')
</body>

</html>
