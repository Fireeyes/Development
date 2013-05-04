<?php
$loaded =  false;
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Blog Homepage</title>
	<meta name="viewport" content="width=device-width">

	{{ HTML::style('css/bootstrap.min.css') }}
 	{{ HTML::style('css/style.css') }}

	<script src="http://code.jquery.com/jquery.js"></script>
	<script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>

<body>
	<div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <div class="nav">
                        <a class="brand" href="index.php"> Our first blog </a>
                        <ul class="nav">
                            <li class="active"><a href="index.php">Home</a></li>
                            @if(!Auth::check())
	                            <li><a href="#" class="modalLogin" rel="#login">Login</a></li>
	                            <li><a href="#" class="modalRegister" rel="#register">Register</a></li>
	                        @else
	                        	<li>	                       
								{{ HTML::link('create', 'Create Post') }}
								</li>
							  	<li>	                       
								{{ HTML::link('admin', 'Administration') }}
								</li>
								<li>	                       
								{{ HTML::link('logout', 'Logout') }}
								</li>
							@endif
                        </ul>
                    </div>
                    @if(Auth::check())
					    <p class="navbar-text pull-right">Welcome back {{ HTML::link('user', Auth::user()->username) }}</p> 
					@endif

                </div>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="span12">
                    <h2  align="center" class="text-warning">Have no fear of perfection, as you will never reach it!</h2>
                    <img src="img/header.jpg" class="img-polaroid" width="940" height="300">
                </div>
            </div>

            <div class="row">
                <div class="span8">

					@foreach ($posts as $post)
						<div class="divpost img-polaroid">
							<h3 class='post'>{{ HTML::link('view/'.$post->id, $post->title, array('class' => 'text-warning' )) }}</h3>
							<small class='content'>{{$post->created_at}}</small><br>
                       		<small class='content'>by&nbsp;<a href="#">{{User::find($post->user_id)->username}}</a></small>
	                        <p class='lead'></p>
    	                    <hr>

							<p class="content">{{ substr($post->content,0, 120).' [..]' }}</p>
							<p class="content">{{ HTML::link('view/'.$post->id, 'Read more &rarr;') }}</p>

							<p class="tags">Tags: 
								{{ HTML::link('tag/'.$post->tags, $post->tags) }}
	                        </p>
						</div>
					@endforeach

                </div>

                <div class="span44 aside img-polaroid">
                    <h3 class="text-warning"> Categories by tags </h3>
                    <ul class="nav nav-list ">
                        <li><a href="#">tag 1</a></li>
                        <li><a href="#">tag 2</a></li>
                        <li><a href="#">tag 3</a></li>
                        <li><a href="#">tag 4</a></li>
                    </ul>
                </div>
            </div>



             
              <div class="footer container">
                <p class="muted credit">Our blog is made by us, doh <a href="#">Copyright®</a> In consectetur mollis dolor vitae cursus. Nulla iaculis, velit quis porta blandit, diam nibh porta ante, et commodo erat eros vitae nibh. Nulla</p>
              </div>
             

        </div>

        <!-- jQuery -->

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
                                    echo "<p class='text-error'> Incorrect username and password combination. </p>";
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

	<div class="modal-popup" id="register">

	{{ Form::open('register', 'POST', array('class' => 'form-horizontal')) }}

	    <fieldset>
	        
	        <legend> Register now! </legend>
	        
	        <div class="control-group">
	            <label class="control-label" for="inputUser"> Your username </label>
	            <div class="controls">
	                {{Form::text('username','', array('placeholder' => '> '))}}
	                <span class="help-block">{{$errors->first('username')}}</span>
	            </div>
	        </div>

	        <div class="control-group">
	            <label class="control-label" for="inputEmail"> Your e-mail </label>
	            <div class="controls">
	                {{Form::text('email','', array('placeholder' => '> '))}}
	                <span class="help-block">{{$errors->first('email')}}</span>
	            </div>
	        </div>

	        <div class="control-group">
	            <label class="control-label" for="inputPass"> Your password </label>
	            <div class="controls">
	                {{Form::password('password', array('placeholder' => '> '))}}
	                <span class="help-block text-error">{{$errors->first('password')}}</span>
	            </div>
	        </div>

	        <div class="control-group">
	            <label class="control-label" for="inputPass2"> Your password </label>
	            <div class="controls">
	                {{Form::password('retype', array('placeholder' => '> '))}}
	                <span class="help-block">{{$errors->first('retype')}}</span>
	                <button type="submit" class="btn" style="margin-top:10px;">Register me!</button>
	            </div>
	        </div>
	        
	        

	    </fieldset>
	{{ Form::close() }}
	</div>

	<script>
	$(document).ready(function() {


		var triggers = $(".modalLogin").overlay({

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

		});

		var triggers = $(".modalRegister").overlay({

		// some mask tweaks suitable for modal dialogs
		mask: {
			color: '#000',
			loadSpeed: 200,
			opacity: 0.8
		},
		closeOnClick: true,
		@if(Session::get('register_errors') == true)
			load: true,
		@endif

		});

	});
</script>
</body>
</html>
