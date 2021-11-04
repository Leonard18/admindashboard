<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta http-equiv="X-UA-Compatible" content="IE=7">

	{{-- browser icon --}}
	<link rel="shortcut icon" href="{{ asset('images/oio.png') }}" type="image/png">


	{{-- yield header content... --}}
	@yield('headercontent')

	{{-- CSRF Token --}}
	<meta name="csrf-token" content="{{ csrf_token() }}">

	{{-- styesheet --}}
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	{{-- end of stylesheet --}}

	{{-- Font Awesome --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	{{-- Script --}}
	<script src="{{ asset('js/app.js') }}" defer></script>

	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		body {
			border: 5px solid gold !important;
			border-radius: 1px;
		}
	</style>
	@livewireStyles
</head>
<body class="primary-bg">

	{{-- Naviagtion section --}}
	<div class="flex flex-row" x-data="{ sideNav: false  }">
		
		{{-- Sidebar section --}}
		<div class="primary-gradient flex flex-col md:justify-center lg:justify-center md:items-center lg:items-center md:block lg:block py-5 w-56 md:w-56" x-show="sideNav"
		x-transition:enter="transition ease-in-out duration-500" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-500" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90"
		>

			{{-- logo and site name section --}}
			<div class="flex flex-col space-y-2 items-center justify-center mb-10 text-white px-5">
				{{-- site title --}}
				<img class="h-8 w-auto self-center mb-5" src="{{ asset('img/oio.png') }}" alt="OIO">
				{{-- user icon --}}
				<i class="fa fa-user-circle fa-4x" aria-hidden="true"></i>
				  {{-- user name --}}
				  <h3 class="text-white text-xl">LastName</h3>
			</div>

			{{-- Agency section and links for mobile menu --}}

			<div class="sm:block md:hidden lg:hidden mb-8 flex flex-col items-center justify-center ml-4">

				{{-- Agency Dashboard --}}
				<a href="#" class="text-white bg-black p-1 mb-2 text-center rounded text-xs hover:bg-gray-700" aria-current="page">Agent</a>

				{{-- oioPAY Transfer --}}
				<a href="#" class="text-white bg-black p-3 mb-2 text-center rounded text-xs hover:bg-gray-700" aria-current="page">oioPAY</a>
				
				{{-- <a href="#" class="text-white bg-black p-3 mb-2 text-center rounded text-xs hover:bg-gray-700" aria-current="page">oioPAY Transfer</a> --}}

				{{-- Deposit --}}
				{{-- <a href="#" class="text-white bg-black p-3 mb-2 text-center rounded text-xs hover:bg-gray-700" aria-current="page">oioPAY Deposit</a> --}}

				{{-- Withdrawal --}}
				{{-- <a href="#" class="text-white bg-black p-3 mb-2 text-center rounded text-xs hover:bg-gray-700" aria-current="page">oioPAY WDR</a> --}}

			</div>

			{{-- end of agency section and links for mobile phone --}}

			{{-- Links section --}}

			{{-- My Account --}}
			<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-300  {{ Route::is('dashboard') ? 'bg-gray-200 text-purple-800' : '' }} p-2 ml-2 rounded-bl rounded-tl mb-2">
				<span class="text-xs font-semibold"><i class="fas fa-tachometer-alt"></i></span>
				<span class="text-xs font-semibold"><a href="#">My Account</a></span>
			</div>
			<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-300  {{ Route::is('dashboard') ? 'bg-gray-200 text-purple-800' : 'primary-active' }} p-2 ml-2 rounded-bl rounded-tl mb-2">
				<span class="text-xs font-semibold"><i class="fas fa-tachometer-alt"></i></span>
				<span class="text-xs font-semibold"><a href="#">My OEQTY</a></span>
			</div>

			<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-300 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-gray-800 hover:text-white {{ Route::is('plan.index') ? 'bg-gray-200 text-purple-800' : '' }}">
				<span class="text-xs font-semibold"><i class="fas fa-list-alt"></i></span>
				<span class="text-xs font-semibold"><a href="#">Plans</a></span>
			</div>
			
			<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-300 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-gray-800 hover:text-white {{ Route::is('deposit.index') ? 'bg-gray-200 text-purple-800' : '' }}">
				<span class="text-xs font-semibold"><i class="fas fa-credit-card"></i></span>
				<span class="text-xs font-semibold"><a href="#">Deposit</a></span>
			</div>

			<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-300 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-gray-800 hover:text-white {{ Route::is('deposit.history') ? 'bg-gray-200 text-purple-800' : '' }}">
				<span class="text-xs font-semibold"><i class="fas fa-list"></i></span>
				<span class="text-xs font-semibold"><a href="#">Deposit History</a></span>
			</div>

			<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-300 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-gray-800 hover:text-white {{ Route::is('withdrawal.index') ? 'bg-gray-200 text-purple-800' : '' }}">
				<span class="text-xs font-semibold"><i class="fas fa-wallet"></i></span>
				<span class="text-xs font-semibold"><a href="#">Withdrawal</a></span>
			</div>

			<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-300 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-gray-800 hover:text-white">
				<span class="text-xs font-semibold"><i class="fas fa-chart-line"></i></span>
				<span class="text-xs font-semibold"><a href="#">WDR History</a></span>
			</div>

			<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-300 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-gray-800 hover:text-white {{ Route::is('earning.index') ? 'bg-gray-200 text-purple-800' : '' }}">
				<span class="text-xs font-semibold"><i class="fas fa-hand-holding-usd"></i></span>
				<span class="text-xs font-semibold"><a href="#">Earning History</a></span>
			</div>
			
			{{-- Transfer Fund --}}
			<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-300 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-gray-800 hover:text-white {{ Route::is('user.transfer-fund') ? 'bg-gray-200 text-purple-800' : '' }}">
				<span class="text-xs font-semibold"><i class="fas fa-hand-holding-usd"></i></span>
				<span class="text-xs font-semibold"><a href="#">Transfer Fund</a></span>
			</div>

			{{-- Calculator --}}
			<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-300 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-gray-800 hover:text-white {{ Route::is('calculator.index') ? 'bg-gray-200 text-purple-800' : '' }}">
				<span class="text-xs font-semibold"><i class="fas fa-hand-holding-usd"></i></span>
				<span class="text-xs font-semibold"><a href="#">Calculator</a></span>
			</div>

			<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-300 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-gray-800 hover:text-white {{ Route::is('user.post') ? 'bg-gray-200 text-purple-800' : '' }}">
				<span class="text-xs font-semibold"><i class="fa fa-book"></i></span>
				<span class="text-xs font-semibold"><a href="#">Posts</a></span>
			</div>

			<div class="flex flex-row overflow-x-hidden {{ Route::is('support.index') ? 'bg-gray-200 text-purple-800' : '' }} space-x-3 text-gray-300 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-gray-800 hover:text-white">
				<span class="text-xs font-semibold"><i class="fas fa-info"></i></span>
				<span class="text-xs font-semibold"><a href="#">Support Center</a></span>
			</div>


			{{-- Logout --}}
			<div class="flex flex-row overflow-x-hidden space-x-3 text-red-400 mt-10 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-gray-800 hover:text-white">
				<span class="text-xs font-semibold"><i class="fa fa-sign-out-alt"></i></span>
				<span class="text-xs font-semibold"><a href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">Logout</a></span>
			</div>
			
		
		</div>

		{{-- main content section...  --}}
		<div class="primary-bg flex-grow">
			
			{{-- Top Nav Section for both large and small screens --}}
			<nav class="primary-gradient shadow-2xl sm:left-0">
				<div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
				  <div class="relative flex items-center justify-between h-16">
					<div class="absolute inset-y-0 left-0 flex items-center sm:hidden">

					  <!-- Mobile menu button-->
					  <button @click="sideNav = ! sideNav" type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-100 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
						<span class="sr-only">Open main menu</span>

						{{-- mobile menu toggler for mobile phone --}}
						<i class="fa fa-bars text-xl"></i>

						<svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
						  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
						</svg>
					  </button>
					</div>
					<div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
					  <div class="flex-shrink-0 flex items-center">

						  {{-- toggle icon for large screens --}}
						<div class="hidden lg:block md:block">
							<i @click="sideNav = ! sideNav" class="fa fa-bars text-xl text-white ml-3 mr-5" aria-hidden="true"></i>
						</div>
						{{-- end of toggle icon for large screens --}}

						<img class="block lg:hidden h-8 w-auto" src="{{ asset('img/oio.png') }}" alt="OIO" :class="{ 'md:hidden' : sideNav, 'md:block' : !sideNav }">
						<img class="hidden lg:block h-8 w-auto lg:mr-10" src="{{ asset('img/oio.png') }}" alt="OIO" :class="{ 'lg:hidden' : sideNav, 'lg:block' : !sideNav }">
					  </div>
					  <div class="hidden sm:block sm:ml-6">
						<div class="flex space-x-4 ">

							{{-- top nav menu links for large screen --}}
						 
						  <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">Agent</a>

						  <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">oioPAY</a>
						  
						  {{-- <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">oioPAY Transfer</a> --}}

						  {{-- <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">oioPAY Deposit</a> --}}

						  {{-- <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium" aria-current="page">oioPAY WDR</a> --}}

						  {{-- this section will only show when the side nav is closed... and it will disappear when the side nav ia open... --}}
						  <div class="hidden md:block" :class="{ 'md:block' : !sideNav, 'md:hidden' : sideNav }">
						  <div class="relative hidden md:block inline-block text-left" x-data="{ sideNavMenu: false }">
							<div>
							  <button @click="sideNavMenu = ! sideNavMenu" type="button" class="inline-flex justify-center w-full rounded-md border border-yellow-700 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
								MENU
								<!-- Heroicon name: solid/chevron-down -->
								<svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								  <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
								</svg>
							  </button>
							</div>
						  
							<div x-show="sideNavMenu" @click.away="sideNavMenu = false" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
							  <div class="py-3 px-2" role="none">

								{{-- Dashboard --}}
								<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-700 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-purple-600 hover:text-white {{ Route::is('dashboard') ? 'bg-gray-200 text-purple-800' : '' }}">
									<span class="text-xs font-semibold"> <i class="fas fa-clock"></i></span>
									<span class="text-xs font-semibold"><a href="#">My Account</a></span>
								</div>

								{{-- Plans --}}
								<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-700 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-purple-600 hover:text-white {{ Route::is('plan.index') ? 'bg-gray-200 text-purple-800' : '' }}">
									<span class="text-xs font-semibold"><i class="fas fa-list-alt"></i></span>
									<span class="text-xs font-semibold"><a href="#">Plans</a></span>
								</div>

								{{-- Deposit --}}
								<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-700 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-purple-600 hover:text-white {{ Route::is('deposit.index') ? 'bg-gray-200 text-purple-800' : '' }}">
									<span class="text-xs font-semibold"><i class="fas fa-credit-card"></i></span>
									<span class="text-xs font-semibold"><a href="#">Deposit</a></span>
								</div>

								<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-700 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-purple-600 hover:text-white {{ Route::is('deposit.history') ? 'bg-gray-200 text-purple-800' : '' }}">
									<span class="text-xs font-semibold"><i class="fas fa-list"></i></span>
									<span class="text-xs font-semibold"><a href="#">Deposit History</a></span>
								</div>
					
								<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-700 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-purple-600 hover:text-white {{ Route::is('withdrawal.index') ? 'bg-gray-200 text-purple-800' : '' }}">
									<span class="text-xs font-semibold"><i class="fas fa-wallet"></i></span>
									<span class="text-xs font-semibold"><a href="#">Withdrawal</a></span>
								</div>
					
								<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-700 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-purple-600 hover:text-white {{ Route::is('withdrawal.history') ? 'bg-gray-200 text-purple-800' : '' }}">
									<span class="text-xs font-semibold"><i class="fas fa-chart-line"></i></span>
									<span class="text-xs font-semibold"><a href="#">WDR History</a></span>
								</div>
					
								<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-700 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-purple-600 hover:text-white {{ Route::is('earning.index') ? 'bg-gray-200 text-purple-800' : '' }}">
									<span class="text-xs font-semibold"><i class="fas fa-hand-holding-usd"></i></span>
									<span class="text-xs font-semibold"><a href="#">Earning History</a></span>
								</div>
								
								{{-- Transfer Fund --}}
								<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-700 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-purple-600 hover:text-white {{ Route::is('user.transfer-fund') ? 'bg-gray-200 text-purple-800' : '' }}">
									<span class="text-xs font-semibold"><i class="fas fa-hand-holding-usd"></i></span>
									<span class="text-xs font-semibold"><a href="#">Transfer Fund</a></span>
								</div>
								
								{{-- Calculator --}}
								<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-700 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-purple-600 hover:text-white {{ Route::is('calculator.index') ? 'bg-gray-200 text-purple-800' : '' }}">
									<span class="text-xs font-semibold"><i class="fas fa-hand-holding-usd"></i></span>
									<span class="text-xs font-semibold"><a href="#">Calculator</a></span>
								</div>
					
								<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-700 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-purple-600 hover:text-white {{ Route::is('user.post') ? 'bg-gray-200 text-purple-800' : '' }}">
									<span class="text-xs font-semibold"><i class="fa fa-book"></i></span>
									<span class="text-xs font-semibold"><a href="#">Posts</a></span>
							    </div>
					
								<div class="flex flex-row overflow-x-hidden space-x-3 text-gray-700 p-2 ml-2 rounded-bl rounded-tl mb-2 hover:bg-purple-600 hover:text-white">
									<span class="text-xs font-semibold"><i class="fas fa-info"></i></span>
									<span class="text-xs font-semibold"><a href="#">Support Center</a></span>
								</div>
							  </div>
							</div>
						  </div>
						  </div>
			  
						</div>
					  </div>
					</div>
					<div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

						{{-- Admin Dropdown menu --}}
						<div class="ml-1 mr-2 relative" x-data="{ adminNav: false }">
							<div>
							  <button @click="adminNav = ! adminNav" type="button" class="bg-gray-800 flex text-sm rounded focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white px-2 py-1 text-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
									Admin			
							  </button>
							</div>
	
							<div class="origin-top-right absolute right-0 mt-2 w-48 max-h-96 overflow-y-scroll rounded-md shadow-lg py-4 px-3 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" x-show="adminNav" @click.away="adminNav = false"
							x-transition:enter="transition ease-in-out duration-500" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-500" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90"
							
							
							>
							  <!-- Active: "bg-gray-100", Not Active: "" -->

							  {{-- Admin Dashboard --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5">
								<span><i class="fas fa-tachometer-alt text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a></span>
							</div>
	
							  {{-- Currency --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5">
								  <span><i class="fas fa-pound-sign text-sm"></i></span>
								  <span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Currency</a></span>
							  </div>
	
							  {{-- Interval --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5">
								<span><i class="fa fas fa-clock text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Interval</a></span>
							  </div>
	
							  {{-- Duration --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5">
								<span><i class="fas fa-hourglass-start text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Duration</a></span>
							  </div>
	
							  {{-- Investment Plans --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5">
								<span><i class="fas fa-list-ol text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Plans</a></span>
							  </div>

							  {{-- User roles --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5">
								<span><i class="fas fa-user-lock text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">User Roles</a></span>
							  </div>

							  {{-- Users --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5">
								<span><i class="fa fa-users text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Users</a></span>
							  </div>

							  {{-- Credit/Debit --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5">
								<span><i class="fa fa-credit-card text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Credit-Debit</a></span>
							  </div>
							 
							  {{-- Credit/Debit History --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5">
								<span><i class="fa fa-credit-card text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Credit\Debit History</a></span>
							  </div>

							  {{-- Deposit --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5">
								<span><i class="far fa-credit-card text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Deposit</a></span>
							  </div>
							 
							  {{-- Earning --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5">
								<span><i class="far fa-credit-card text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Earning</a></span>
							  </div>

							  {{-- Transfer --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5">
								<span><i class="fas fa-exchange-alt text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Transfer</a></span>
							  </div>

							  {{-- Withdrawals --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5 {{ Route::is('admin-withdrawal.index') ? 'bg-gray-200 text-purple-800' : '' }}">
								<span><i class="fas fa-wallet text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Withdrawals</a></span>
							  </div>

							  {{-- Withdrawal Delay --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5 {{ Route::is('delay.index') ? 'bg-gray-200 text-purple-800' : '' }}">
								<span><i class="fas fa-calendar-alt text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Withdrawal Delay</a></span>
							  </div>							  
							  
							  {{-- withdrawal charges --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5 {{ Route::is('withdrawal.charge') ? 'bg-gray-200 text-purple-800' : '' }}">
								<span><i class="fas fa-coins text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Withdrawal Charges</a></span>
							  </div>

							  {{-- Exchange rate --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5 {{ Route::is('admin.exchange-rate') ? 'bg-gray-200 text-purple-800' : '' }}">
								<span><i class="fa fa-exchange-alt text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Exchange Rate</a></span>
							  </div>
							 
							  {{-- Country --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5 {{ Route::is('admin.country-index') ? 'bg-gray-200 text-purple-800' : '' }}">
								<span><i class="fa fa-globe text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">All Country</a></span>
							  </div>
							 
							  {{-- All Agents --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5 {{ Route::is('agents.index') ? 'bg-gray-200 text-purple-800' : '' }}">
								<span><i class="fas fa-user-secret text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Agents</a></span>
							  </div>
							 
							  {{-- Site setting --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5 {{ Route::is('admin.site-setting') ? 'bg-gray-200 text-purple-800' : '' }}">
								<span><i class="fas fa-user-secret text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Site Setting</a></span>
							  </div>
							  
							  {{-- Messages --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5 {{ Route::is('admin.message.index') ? 'bg-gray-200 text-purple-800' : '' }}">
								<span><i class="fa fa-comments text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Messages</a></span>
							  </div>

							  {{-- Posts --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5 {{ Route::is('post.index') ? 'bg-gray-200 text-purple-800' : '' }}">
								<span><i class="fas fa-th text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Posts</a></span>
							  </div>

							  {{-- Tag --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5 {{ Route::is('tag.index') ? 'bg-gray-200 text-purple-800' : '' }}">
								<span><i class="fas fa-tasks text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Tags</a></span>
							  </div>

							  {{-- Category --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5 {{ Route::is('category.index') ? 'bg-gray-200 text-purple-800' : '' }}">
								<span><i class="fas fa-thumbtack text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Categories</a></span>
							  </div>
							 
							  {{-- comments --}}
							  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5 {{ Route::is('admin.comments') ? 'bg-gray-200 text-purple-800' : '' }}">
								<span><i class="fas fa-comments text-sm"></i></span>
								<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Comments</a></span>
							  </div>

	
							  
							</div>
						  </div>
						{{-- end of admin dropdown menu --}}
					  
						{{-- Notification icon and dropdown --}}
						<div x-data="{ dropdownOpen: false }" class="bg-gray-900 text-gray-300 p-2 w-8 h-8 rounded-full flex items-center relative">
							{{-- <div @click="dropdownOpen = !dropdownOpen">Notify</div> --}}
							<i @click="dropdownOpen = !dropdownOpen" class="fa fa-bell" aria-hidden="true"></i>
					
							<div x-show="dropdownOpen" @click.away="dropdownOpen = false" class="absolute right-0 mt-2 bg-white rounded-md shadow-lg overflow-hidden z-20 mt-36" style="width:20rem;"
							x-show="userNav" @click.away="userNav = false"
						    x-transition:enter="transition ease-in-out duration-500"     x-transition:enter-start="opacity-0 transform scale-90"     x-transition:enter-end="opacity-100 transform scale-100"     x-transition:leave="transition ease-in duration-500"     x-transition:leave-start="opacity-100 transform scale-100"     x-transition:leave-end="opacity-0 transform scale-90"
							>
								<div class="py-2">
								
									{{-- notification item --}}

									{{-- Only show 5 notifications in this section... --}}

									<div class="mt-64">
										

										{{-- @forelse (auth()->user()->unreadNotifications->take(5) as $notification) --}}

											{{-- User notification section --}}
{{-- 
											<a href="#" class="flex items-center px-4 py-3 hover:bg-gray-100 -mx-2">
												<i class="fa fa-comment" aria-hidden="true"></i>
												<p class="text-gray-600 text-sm mx-2">
													<span class="font-bold">{{ $notification->data['subject'] }} - </span> {{ $notification->created_at->diffForHumans() }}
												</p>
											</a> --}}

										{{-- @empty --}}
											<span>You don't have any notification yet.</span>
										{{-- @endforelse --}}
									</div>

									
								</div>
								<a href="#" class="block bg-gray-800 text-white text-center font-bold py-2">See all notifications</a>
							</div>


						</div>
			  
					  <!-- Profile dropdown -->
					  <div class="ml-2 relative" x-data="{ userNav: false }">
						<div>
						  <button @click="userNav = ! userNav" type="button" class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
							<span class="sr-only">Open user menu</span>
							<img class="h-8 w-8 rounded-full" src="{{ asset('images/oio.png') }}" alt="{{ config('app.name') }} images">
						  </button>
						</div>

						<div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-4 px-3 bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" x-show="userNav" @click.away="userNav = false"
						x-transition:enter="transition ease-in-out duration-500" x-transition:enter-start="opacity-0 transform scale-90" x-transition:enter-end="opacity-100 transform scale-100" x-transition:leave="transition ease-in duration-500" x-transition:leave-start="opacity-100 transform scale-100" x-transition:leave-end="opacity-0 transform scale-90"
						>
						  <!-- Active: "bg-gray-100", Not Active: "" -->

						  {{-- profile --}}
						  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5">
							  <span><i class="fa fa-user-tie text-sm"></i></span>
							  <span class="mt-1"><a href="#" onclick="javascript.void(0)" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">FirstName LastName</a></span>
						  </div>
						  
						  {{-- Dashboard --}}
						  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5">
							  <span><i class="fas fa-tachometer-alt text-sm"></i></span>
							  <span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Dashboard</a></span>
						  </div>

						  {{-- Profile --}}
						  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5 {{ Route::is('profile.index') ? 'bg-gray-200 text-purple-800' : '' }}">
							<span><i class="fa fa-user-tie text-sm"></i></span>
							<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Profile</a></span>
						  </div>

						  {{-- Settings --}}
						  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5 {{ Route::is('account-setting.index') ? 'bg-gray-200 text-purple-800' : '' }}">
							<span><i class="fa fa-cog text-sm"></i></span>
							<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Settings</a></span>
						  </div>

						  {{-- Testinonials --}}
						  <div class="p-1 my-1 flex flex-row hover:bg-gray-100 space-x-5">
							<span><i class="fa fa-star text-sm"></i></span>
							<span class="mt-1"><a href="#" class="block text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Testimonails</a></span>
						  </div>

						  <div class="p-1 mt-5 flex flex-row hover:bg-gray-100 space-x-5">
							<span><i class="fa fa-sign-out-alt text-sm text-red-600"></i></span>
							<span class="mt-1"><a href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();" class="block text-sm text-red-600" role="menuitem" tabindex="-1" id="user-menu-item-0">Logout</a></span>

                            {{-- Logout form --}}
                            <form id="logoutForm" action="{{ route('logout') }}" method="post" style="display: none !important;">
                                @csrf
                            </form>
						  </div>

						  
						</div>
					  </div>
					</div>
				  </div>
				</div>
			  
				<!-- Mobile menu, show/hide based on menu state. -->
				<div class="hidden" id="mobile-menu">
				  <div class="px-2 pt-2 pb-3 space-y-1">
					<!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
					<a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">Fund Manager</a>

					{{-- <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">OIO Transfer</a> --}}
			  
					{{-- <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">OIO Deposit</a> --}}
			  
					{{-- <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium" aria-current="page">OIO Withdrawal</a> --}}

				  </div>
				</div>
			  </nav>

			  {{-- Breadcrumb section --}}
			  <div class="white-bg w-full py-1 px-5 md:px-10">
				<h3 class="text-sm font-semibold md:text-2xl text-gray-600">Dashboard</h3>
				<p class="small-text text-gray-500 ml-1">home > withdrawal</p>
			  </div>
			  {{-- end of breadcrumb section --}}

			{{-- End of top nav section --}}


			{{-- Main content wrapper --}}
			<div class="p-5 white-bg min-h-screen my-5 mr-3 ml-3 md:ml-0 lg:ml-0 rounded-lg" :class="{ 'lg:ml-3 md:ml-3' : !sideNav, 'lg:ml-0 md:ml-0' : sideNav }">

				{{-- Actual page content --}}
				<div class="mt-5">
					
					{{-- error/success section --}}
					{{-- <x-alert /> --}}
					{{-- end of error/success section --}}
					
					{{-- {{ $slot }} --}}

					{{-- this is where your page content should begin... for extending purposes, use a slot here instead. --}}
					Lorem ipsum dolor sit, amet consectetur adipisicing elit. Accusantium eos, porro, in, soluta perspiciatis nam vel iste esse cum odio non rem provident et inventore amet libero. Cupiditate temporibus itaque esse perspiciatis quo at delectus sequi qui quasi. Numquam cupiditate, magni maiores alias quam hic nesciunt non doloremque laboriosam ea nihil quisquam neque labore qui. Eius ratione maxime commodi aliquam nobis vel reprehenderit doloribus officiis, natus nostrum eligendi velit similique nesciunt molestiae, magni incidunt perferendis amet fuga veritatis odit iste quia deleniti hic optio. Vitae culpa ratione nostrum at atque, fuga adipisci quam laboriosam vel quisquam ea inventore error odio porro deleniti consequuntur, unde magnam corporis nulla. In rerum sequi assumenda similique nisi eveniet ducimus earum consequuntur nemo magnam doloremque numquam saepe maxime quibusdam, quae blanditiis qui, ex vel delectus quod porro nobis aliquid. Ad dolorem tempora reprehenderit. Vero nam natus ab est incidunt excepturi. Quo perferendis quibusdam sapiente porro tempore. Dolorem accusantium velit, odit necessitatibus natus enim assumenda molestiae placeat eligendi sapiente debitis laudantium facere est? Rerum sint excepturi eius veniam! Est quos doloremque illo quam tempore, dolorem cumque aliquam magni ipsum quae incidunt officiis, eius aspernatur tempora at molestiae voluptatibus assumenda veritatis iusto similique sit iste! Deserunt, quasi? Ea, repudiandae necessitatibus! Non, itaque labore magni et enim necessitatibus voluptatem obcaecati veniam dolorum voluptatum vero sequi deleniti nam doloremque eum? Cum doloribus nesciunt iure quidem iste. Corporis soluta eveniet exercitationem hic nulla fuga, vero dolor ratione sunt laudantium, beatae tempore fugit nobis. Eligendi perspiciatis a suscipit itaque perferendis et quidem facere, unde ducimus. Saepe error minima eveniet adipisci quaerat odit delectus, inventore, molestiae repellat, molestias illum ipsa dolorum ut voluptate ratione minus cumque asperiores? Recusandae, facilis velit, sequi officia sapiente vitae neque totam molestias nam voluptate, eius culpa soluta ut? Vel facilis quibusdam suscipit illum porro rem minima, atque reiciendis fugit provident deleniti, at iure autem magnam tempora, alias reprehenderit commodi aut maiores quia nesciunt? Accusamus assumenda unde, reprehenderit tempore dolores quam consectetur aut ratione debitis nisi rem. Quaerat cum quos veritatis cumque numquam, consectetur quis quibusdam mollitia dolor fugiat possimus, expedita perferendis. Doloribus quidem suscipit minus modi deleniti numquam rerum maiores amet illo, tempora debitis dolorum ducimus delectus provident labore eveniet aperiam iure exercitationem rem eum. Maiores illo earum aut, officia obcaecati repudiandae voluptatem enim nulla molestiae nam libero pariatur autem sunt quos, odit quo debitis sequi eum eveniet reiciendis neque repellendus eius quas. Doloremque impedit odit alias sed accusamus eligendi at voluptates quo saepe quae? Eos ut accusamus id quidem est perferendis! Sint accusamus veritatis esse expedita, eveniet architecto commodi consequatur optio voluptatem vel delectus. Ab illo facere totam, consectetur dolorem ducimus perferendis amet corporis deleniti nostrum quis suscipit eum maxime voluptate similique quia dolor repellendus! Doloremque commodi adipisci libero a cumque neque modi, nostrum nihil sit! Porro dolore totam, perferendis non quos nobis eius quisquam illo, possimus dolor reiciendis a rem incidunt doloribus eos aliquam iure adipisci asperiores veritatis saepe? Et quisquam architecto reprehenderit maiores dolor repellendus reiciendis, quia voluptate fuga delectus eveniet sunt, id laborum.
					{{-- end of page content --}}

					
				
				</div>
				{{-- End of Actual page content --}}
				
			</div>
			{{-- End of Main content wrapper --}}

		</div>
	</div>
	{{-- End  Naviagtion section --}}

	{{-- footer content --}}
	@yield('footercontent')
	{{-- end of footer content --}}

	

</body>
{{-- Livewire script section --}}
	@livewireScripts
	{{-- end of livewire script --}}

	@stack('scripts')
</html>
