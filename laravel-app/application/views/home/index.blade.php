<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: A Framework For Web Artisans</title>
	<meta name="viewport" content="width=device-width">
	{{ HTML::style('laravel/css/style.css') }}
</head>
<body>
	<div class="wrapper">
		<header>
			<h1>Lavarel</h1>
			<h2>By bastani, for bastani</h2>

			<p class="intro-text" style="margin-top: 45px;">
			</p>
		</header>
		<div role="main" class="main">
			<div class="home">
				
				@if(Auth::check())
					<span>Welcome back, {{Auth::user()->username;}}</span><br>
					<span><a href="logout">Logout</a></span>
				@else
					<a href="login">Login</a> | <a href="register">Register</a>
				@endif

			</div>
		</div>
	</div>
</body>
</html>
