<!doctype html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>АИС диспетчера отдела аварийной службы ГУП ЖХ</title>

	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

	<!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
	<div class="wrapper d-flex flex-column" style="height: 100vh;">
		
		@include('home.header')
		<!-- /.sidebar -->

		@yield('content')
		<!-- /.content -->
		
	</div>

	@include('includes.footer')
	<!-- /.bk-footer -->
</body>


</html>