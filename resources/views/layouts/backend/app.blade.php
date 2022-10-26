<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon" type="image/svg+xml">

    <title>
        @if (getRouteAction() == 'create')
            {{ __('Create') . ' ' . $title . ' | ' ?? '' }}
        @elseif(getRouteAction() == 'edit')
            {{ __('Edit') . ' ' . $title . ' | ' ?? '' }}
        @elseif(getRouteAction() == 'show')
            {{ __('Show') . ' ' . $title . ' | ' ?? '' }}
        @else
            {{ $title . ' | ' ?? '' }}
        @endif
        {{ config('app.name', 'Laravel') }}
    </title>

    @vite(['resources/css/backend/app.css', 'resources/js/backend/app.js'])
    @stack('styles')
    @livewireStyles
</head>

<body class="py-5">
    @if ($agent->isMobile())
        <!-- BEGIN: Mobile Menu -->
        @include('layouts.backend.partials.mobile-menu')
        <!-- END: Mobile Menu -->
    @endif
    <div class="flex">
        @if (!$agent->isMobile() || $agent->isTablet())
            <!-- BEGIN: Side Menu -->
            @include('layouts.backend.partials.side-menu')
            <!-- END: Side Menu -->
        @endif
        <div class="content">
            <!-- BEGIN: Top Bar -->
            @include('layouts.backend.partials.tool-bar')
            <!-- END: Top Bar -->
            <div class="flex items-center justify-between mt-20 lg:mt-8 intro-y">
                <div class="mr-auto text-lg font-medium">
                    @if (getRouteAction() == 'create')
                        {{ __('Create') }} {{ $title }}
                    @elseif(getRouteAction() == 'edit')
                        {{ __('Edit') }} {{ $title }}
                    @elseif(getRouteAction() == 'show')
                        {{ __('Show') }} {{ $title }}
                    @else
                        {{ $title }}
                    @endif
                </div>
                @if (Route::currentRouteName() != 'dashboard')
                    <div class="sm:w-auto sm:mt-0">
                        <a href="{{ $top_right_url ?? url()->previous() }}"
                            class="mr-2 shadow-md btn btn-primary">{{ $top_right_text ?? __('Back') }}</a>
                    </div>
                @endif
            </div>

            {{ $slot }}
        </div>

    </div>
    @livewireScripts
    @stack('scripts')
</body>

</html>
