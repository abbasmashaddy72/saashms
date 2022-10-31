@props([
    'right_button_direct' => false,
    'right_button_wire' => false,
    'container_top' => false,
])
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
            @if ($container_top)
                <div class="flex items-center justify-between mt-20 lg:mt-8">
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
                    @if ($right_button_direct)
                        <div class="sm:w-auto sm:mt-0">
                            <a href="{{ $top_right_url }}"
                                class="mr-2 shadow-md btn btn-primary">{{ $top_right_text }}</a>
                        </div>
                    @endif
                    @if ($right_button_wire)
                        {{ $right_button_wire }}
                    @endif
                </div>
            @else
                <div class="mt-8"></div>
            @endif

            {{ $slot }}
        </div>

    </div>
    {{-- modalwidth comment for tailwind purge, used widths: sm:max-w-sm sm:max-w-md sm:max-w-lg sm:max-w-xl sm:max-w-2xl sm:max-w-3xl sm:max-w-4xl sm:max-w-5xl sm:max-w-6xl sm:max-w-7xl md:max-w-sm md:max-w-md md:max-w-lg md:max-w-xl md:max-w-2xl md:max-w-3xl md:max-w-4xl md:max-w-5xl md:max-w-6xl md:max-w-7xl lg:max-w-sm lg:max-w-md lg:max-w-lg lg:max-w-xl lg:max-w-2xl lg:max-w-3xl lg:max-w-4xl lg:max-w-5xl lg:max-w-6xl lg:max-w-7xl xl:max-w-sm xl:max-w-md xl:max-w-lg xl:max-w-xl xl:max-w-2xl xl:max-w-3xl xl:max-w-4xl xl:max-w-5xl xl:max-w-6xl xl:max-w-7xl 2xl:max-w-sm 2xl:max-w-md 2xl:max-w-lg 2xl:max-w-xl 2xl:max-w-2xl 2xl:max-w-3xl 2xl:max-w-4xl 2xl:max-w-5xl 2xl:max-w-6xl 2xl:max-w-7xl --}}
    @livewireScripts
    @livewire('livewire-ui-modal')
    <wireui:scripts />
    @stack('scripts')
</body>

</html>
