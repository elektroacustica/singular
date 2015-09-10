<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> ngular</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ asset('css/vendor/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/vendor/animate.css') }}">
	@yield('link')
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="{{ route('profile', \Auth::user()->name) }}"><img src="{{ asset('img/logo.png') }}" width="100px" /></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<!--<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Tour <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href=""><i class="fa fa-heart"></i> ligue</a></li>
							<li><a href="{{ url('/logout') }}"> <i class="fa fa-thumbs-o-up"></i> VIP</a></li>
							<li><a href=""><i class="fa fa-heart"></i> suerte</a></li>
							<li><a href=""><i class="fa fa-heart"></i> recomendar</a></li>
							<li><a href=""><i class="fa fa-heart"></i> links</a></li>
						</ul>
					</li>
					-->
					<li>
						<a href="{{ route('like.list') }}">
							<i class="fa fa-male fa-lg"></i><i class="fa fa-female fa-lg"></i>
						</a>
					</li>
					<li>
						<a href="{{ route('chat.index') }}">
							<i class="fa fa-weixin fa-lg"></i> chat
						</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="{{ route('user.config') }}"><i class="fa fa-cog"></i> configurar</a></li>
							<li><a href="{{ url('/logout') }}"> <i class="fa fa-sign-out"></i> salir</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	@yield('content')

	<script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	@yield('script')

	<footer>
	<!-- creditos <a href="http://www.freepik.com">Designed by Freepik</a> -->
	</footer>
</body>
</html>