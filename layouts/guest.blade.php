<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- header section --!>
	    @yield('headercontent')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">

        {{-- Top bar for contact info --}}
        <x-top-header />

        {{-- <Main page navigation --}}
        <x-guest-navigation />

        {{-- Individual page name --}}
        {{-- <x-page-header>
            @slot('pagename')
                Home
            @endslot
        </x-page-header> --}}

        {{-- page header section --}}
        @yield('pageheader')
        
        @yield('content')



	    @yield('footercontent')
    </body>
</html>