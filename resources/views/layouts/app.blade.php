<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Scripts and css -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @yield('css')
</head>

<body class="">
    @include('layouts.sidebar')

    <div class="flex p-5">
        <main class="w-full ml-0 md:ml-80 pl-5">
            @include('layouts.header')

            <div class="mt-5">
                @yield('breadcumb')

                <div class="mt-5">
                    @yield('content')
                </div>
            </div>
        </main>
    </div>

    <x-toast />
    <x-dark-mode-toggle />

    {{-- JAVASCRIPT --}}
    @yield('js')
    @stack('script')
</body>

</html>
