<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=7">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="{{ env('APP_NAME') }} Investment Official. Invest, Earn, Reinvest, Cash out easily, Global Investment platform, #1 rated investment company, Financial Fund Management Company, US, UK, and China most trusted investment platform.">

	{{-- Section for generated site additional header content --}}
	@yield('headercontent')
	{{-- End of Section for generated site header content --}}

	{{-- Site Icon in browser tab... --}}
	{{-- <link rel="icon" type="image/png" href="assets/.png"/> --}}
	{{-- End of Site Icon in browser tab --}}

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

	{{-- Site main bootstrap file from compiled --}}
	<script src="{{ mix('js/app.js') }}" defer></script>

	<!-- Import Font Library -->
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800,900" rel="stylesheet">
	<!-- End Font Library -->

	{{-- Custom CSS file --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	{{-- End of custom CSS class --}}

	{{-- Font Awesome style --}}
	<link rel="stylesheet" href="{{ asset('js/all.css') }}">
	{{-- Enf of Font Awesome --}}

	{{-- Livewire style section --}}
	@livewireStyles
	{{-- End of Livewire style --}}
</head>
<body class="admin-overlay-scrollbar">

	{{-- User top navbar --}}
	<x-user-top-navigation />
	{{-- end ofr user top navbar --}}

	{{-- <!-- user sidebar --> --}}
	<x-user-sidebar-navigation />
	{{-- <!-- end of user sidebar --> --}}

	{{-- <!-- main page content --> --}}
	<div class="admin-wrapper pl-4">
		
		@yield('content')
		
	</div>
	{{-- <!-- end main page content --> --}}


	{{-- <!-- import script --> --}}
	<script src="{{ asset('js/index.js') }}"></script>
	<script src="{{ asset('js/all.js') }}" defer></script>
	{{-- End of inport scripts --}}

	{{-- Section for additional footer content --}}
	@yield('footercontent')
	{{-- End of Section for additional footer content --}}

	{{-- Livewire scripts --}}
	@livewireScripts
	{{-- End of livewire scripts --}}

	{{-- modal stack section --}}
    @stack('modals')
    {{-- end of modal stack --}}

    {{-- Stack section --}}
    @stack('scripts')
    {{-- End of stack section --}}


	
</body>
</html>