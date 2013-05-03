<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Registration form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->
    </head>
        


    <body>

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


        <!-- jQuery -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>

</html>