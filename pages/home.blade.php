@extends('layouts.guest')

@section('headercontent')
	<meta name="description" content="EverGreenFx">
	<title>Home - {{ env('APP_NAME') }}</title>
@endsection

@section('content')
	
	<div class="container jumbotron">
		<h1>Welcome to {{ env('APP_NAME') }}</h1>
	</div>

@endsection