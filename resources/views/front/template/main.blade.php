<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Home') | MiBlog</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/font-awesome-4.5.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/estilo.css') }}">
</head>
<body>
	<br>
	@include('front.template.partials.header')

	<div class="container">
		@yield('content')
	</div>
	
	@include('front.template.partials.footer')

	<script src="{{ asset('plugins/jquery/js/jquery.js') }}"></script>
</body>
</html>