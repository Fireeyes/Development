<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Registration form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap -->  

        {{ HTML::style('css/bootstrap.min.css') }}

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->
    </head>
        


    <body>
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
                        <span class="help-block">{{$errors->first('password')}}</span>
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


        <!-- jQuery -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>

</html>