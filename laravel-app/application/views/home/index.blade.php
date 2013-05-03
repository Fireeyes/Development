<?php
$loaded =  false;
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Laravel: A Framework For Web Artisans</title>
	<meta name="viewport" content="width=device-width">

	{{ HTML::style('css/bootstrap.min.css') }}

	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
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
					<a href="#" class="modalInput" rel="#login">Login</a> | <a href="register">Register</a>
				@endif

			</div>
		</div>
	</div>

	<div class="modal-popup" id="login">

	 	{{ Form::open('login', 'POST', array('class' => 'form-horizontal')) }}
            <fieldset>
                
                <legend>Log in</legend>
                
                <div class="control-group">
                    <label class="control-label" for="inputUser"> Username </label>
                    <div class="controls">
                        {{Form::text('username','', array('placeholder' => '> '))}}
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="inputPass"> Your password </label>
                    <div class="controls">
                        {{Form::password('password', array('placeholder' => '> '))}}
                        <span class="help-block">
                            @if(Session::get('login_errors') == true && $loaded == false) 
                                <?php 
                                    echo "Incorrect username and password combination.";
                                    $loaded = true;
                                ?>
                            @endif
                        </span>
                        <button type="submit" class="btn" style="display:block;margin-top:10px;">Log in</button> 
                    </div>
                </div>
                
                

            </fieldset>
        {{ Form::close() }}

        
	</div>
	<script>
	$(document).ready(function() {


		var triggers = $(".modalInput").overlay({

		// some mask tweaks suitable for modal dialogs
		mask: {
			color: '#000',
			loadSpeed: 200,
			opacity: 0.8
		},

		closeOnClick: true,
		@if(Session::get('login_errors') == true) 
			load: true,
		@endif
		onClose: function() {
			<?php $loaded = true ?> 
		}
	});



	});
</script>
</body>
</html>
