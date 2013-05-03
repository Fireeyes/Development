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
					<a href="#" class="modalInput" rel="#yesno">Login</a> | <a href="register">Register</a>
				@endif

			</div>
		</div>
	</div>

	<div class="modal-popup" id="yesno">

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
                            @if(Session::get('login_errors') == true) 
                                <?php 
                                    echo "Incorrect username and password combination.";
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

		closeOnClick: false
	});

	var buttons = $("#yesno button").click(function(e) {

		// get user input
		var yes = buttons.index(this) === 0;

		// do something with the answer
		triggers.eq(0).html("You clicked " + (yes ? "yes" : "no"));
	});

	$("#prompt form").submit(function(e) {

	// close the overlay
	triggers.eq(1).overlay().close();

	// get user input
	var input = $("input", this).val();

	// do something with the answer
	triggers.eq(1).html(input);

	// do not submit the form
	return e.preventDefault();
	});
	});
</script>
</body>
</html>
