<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
	      <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta name="description" content="{{ $siteMeta ?? "" }} | {{ config('app.name') }}" />

        @yield('headercontent')

        {{-- browser icon --}}
	    <link rel="shortcut icon" href="{{ asset('img/oeqty.png') }}" type="image/png">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        
        {{-- Font Awesome --}}
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
		{{-- end of stylesheet --}}

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="overflow-x-hidden white-bg" style="border: 5px solid gold;">

        {{-- bg-gradient-to-tl from-yellow-900 via-purple-900 to-purple-900 --}}

        {{-- Top navigation section --}}
        <nav class="primary-gradient" x-data="{ showMobileNav: false }">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
              <div class="relative flex items-center justify-between h-16">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                  <!-- Mobile menu button-->
                  <button @click="showMobileNav = ! showMobileNav" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>

                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                  </button>
                </div>
                <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                  <div class="flex-shrink-0 flex items-center">
                    <img class="block lg:hidden h-12 w-auto" src="{{ asset('img/oeqty.png') }}" alt="{{ config('app.name') }} logo">
                    <img class="hidden lg:block h-12 w-auto" src="{{ asset('img/oeqty.png') }}" alt="{{ config('app.name') }} logo">
                  </div>
                  
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
				<div class="hidden sm:block sm:ml-6 md:ml-20">
					<div class="flex space-x-4">
						
						<a href="#" class="text-sm font-medium px-3 py-2 white-text {{ Route::is('home.page') ? 'primary-active rounded-3xl' : 'white-hover-bg rounded-3xl' }}" aria-current="page">Home</a>

						<a href="#" class="text-sm font-medium px-3 py-2 white-text {{ Route::is('oio-wallet.index') ? 'primary-active rounded-3xl' : 'white-hover-bg rounded-3xl' }}" aria-current="page">Wallets</a>
			
						<a href="#" class="white-text px-3 py-2 rounded-md text-sm font-medium {{ Route::is('login') ? 'primary-active rounded-3xl' : 'white-hover-bg rounded-3xl' }}" aria-current="{{ Route::is('login') ? 'page' : '' }}">Login</a>

						<a href="#" class="white-text px-3 py-2 rounded-md text-sm font-medium {{ Route::is('register') ? 'primary-active rounded-3xl' : 'white-hover-bg rounded-3xl' }}" aria-current="{{ Route::is('register') ? 'page' : '' }}">Register</a>

						<a href="#" class="white-text px-3 py-2 rounded-md text-sm font-medium {{ Route::is('calculator.index') ? 'primary-active rounded-3xl' : 'white-hover-bg rounded-3xl' }}" aria-current="{{ Route::is('calculator.index') ? 'page' : '' }}">Calculator</a>

					</div>
					</div>
                  	<!-- Profile dropdown -->
                  <div class="ml-3 relative" x-data="{ showProfile: false }">
                    <div>
                      <button type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true" @click="showProfile = ! showProfile">
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full" src="{{ asset('img/avatar.png') }}" alt="{{ config('app.name') }} logo">
                      </button>
                    </div>

                    <div x-show="showProfile" @click.away="showProfile = false" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1"
                    x-transition:enter="transition ease-in-out duration-500" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-500" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90"
                    >

                      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-purple-900" role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a>

                      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-purple-900" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>

                      <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-purple-900" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>

                      <a href="#" class="block px-4 py-2 text-sm text-red-500 hover:bg-gray-100 hover:text-red-600" role="menuitem" tabindex="-1" id="user-menu-item-2" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Sign out</a>

                      {{-- logout form --}}
                      <form id="logoutForm" action="{{ route('logout') }}" method="post" style="display: none !important;">
                        @csrf
                      </form>
                      {{-- end of logout form --}}
                    </div>
					
                  </div>
                </div>
              </div>
            </div>
          
            <!-- Mobile menu, show/hide based on menu state. -->
            <div x-show="showMobileNav" @click.away="showMobileNav = false" class="sm:hidden" id="mobile-menu"
            x-transition:enter="transition ease-in-out duration-500" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-500" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90"
            >
              <div class="px-2 pt-2 pb-3 space-y-1">

                <a href="#" class="white-text block px-3 py-2 rounded-md text-base font-medium {{ Route::is('home.page') ? 'primary-active' : 'white-hover-bg' }}" aria-current="{{ Route::is('home.page') ? 'page' : '' }}">Home</a> 

                <a href="#" class="white-text block px-3 py-2 rounded-md text-base font-medium {{ Route::is('oio-wallet.index') ? 'primary-active' : 'white-hover-bg' }}" aria-current="{{ Route::is('oio-wallet.index') ? 'page' : '' }}">OEQTY Wallets</a>

                <a href="#" class="white-text block px-3 py-2 rounded-md text-base font-medium {{ Route::is('login') ? 'primary-active' : 'white-hover-bg' }}" aria-current="{{ Route::is('login') ? 'page' : '' }}">Login</a>

                <a href="#" class="white-text block px-3 py-2 rounded-md text-base font-medium {{ Route::is('register') ? 'primary-active' : 'white-hover-bg' }}" aria-current="{{ Route::is('register') ? 'page' : '' }}">Register</a> 
                
                <a href="#" class="white-text block px-3 py-2 rounded-md text-base font-medium {{ Route::is('calculator.index') ? 'primary-active' : 'white-hover-bg' }}" aria-current="{{ Route::is('calculator.index') ? 'page' : '' }}">Calculator</a>

              </div>
            </div>
          </nav>
        {{-- end of top navigation section --}}

        {{-- page header section --}}
          @if (! Route::is('home.page'))
            <div class="w-full py-1 px-10 bg-gray-100">
                <h1 class="text-xl md:text-2xl font-semibold text-gray-600">Home</h1>
                <p class="small-text text-gray-500 ml-1">Home</p>
                {{-- <h1 class="text-2xl text-gray-500">{{ $header }}</h1> --}}
            </div>
          @endif
        {{-- end of page header section --}}


        <div class="font-sans h-full pb-20">
            {{-- {{ $slot }} --}}
			Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt possimus aperiam beatae repudiandae ipsa vel numquam reprehenderit modi facilis quidem! Incidunt, reiciendis. Tempore adipisci praesentium alias repellat nesciunt voluptate aliquam.
        </div>


        {{-- footer section --}}
        {{-- <x-footer /> --}}
        {{-- end of footer section --}}

        @stack('scripts')


    </body>
</html>
