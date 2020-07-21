<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>bienvenidos</title>




<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/estilos.css')}}">


    <link rel="stylesheet" href="{{asset('css/main.css') }}">


</head>
<body>
	@if(Session::has('message'))
		@include('store.partials.message')
	@endif

	@include('store.partials.nav')
     @yield('content')
	@include('store.partials.footer')




<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
<script  src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>	

<script  src="{{asset('js/jquery-3.3.1.slim.min.js')}}"></script>	

<script  src="{{asset('js/bootstrap.min.js')}}"></script>

	<script src="{{ asset('js/pinterest_grid.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>	
</body>
</html>






