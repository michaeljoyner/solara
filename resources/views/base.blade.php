<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
@section('title')
<title>Solara asia</title>
@show
	<script src="{{ asset('js/modernizr-new.js') }}"></script>
    <link href="{{ elixir("css/app.css") }}" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
@section('head')

@show
</head>
<body>
    <div class="site-wrap">
		<nav class="toggled-nav">
			<div class="menu-image-holder"><img src="images/solara_logo_wh2.png" alt="" width="200" height="80"></div>
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/services">Services</a></li>
				<li><a href="/products">Products</a></li>
				<li><a href="/quote">Quote</a></li>
				<li><a href="/contact">Contact</a></li>
			</ul>
			<h1 class="nav-close-button"><i class="fa fa-close nav-toggler"></i></h1>
		</nav>
		<div class="push-wrap">
			<div class="side-nav">
				@include('partials.sidenav')
			</div>
			<div class="content">
				@yield('content')
			</div>
		</div>
	</div>

	<script src="{{ elixir('js/all.js') }}"></script>
@yield('bodyscripts')
</body>
</html>