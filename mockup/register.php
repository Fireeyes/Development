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

        <form class="form-horizontal" action="" method="">
            <fieldset>
                
                <legend> Register now! </legend>
                
                <div class="control-group">
                    <label class="control-label" for="inputUser"> Your username </label>
                    <div class="controls">
                        <input type="text" id="inputUser" placeholder="> " name="username">
                        <span class="help-block">Should be between 4-12 characters</span>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="inputEmail"> Your e-mail </label>
                    <div class="controls">
                        <input type="text" id="inputEmail" placeholder="> " name="e-mail">
                        <span class="help-block">Your primary e-mail address</span>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="inputPass"> Your password </label>
                    <div class="controls">
                        <input type="password" id="inputPass" placeholder="> " name="password">
                        <span class="help-block">Choose a complex password</span>
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="inputPass2"> Your password </label>
                    <div class="controls">
                        <input type="password" id="inputPass2" placeholder="> " name="repassword">
                        <span class="help-block">Retype your password</span>
                        <button type="submit" class="btn" style="margin-top:10px;">Register me!</button>
                    </div>
                </div>
                
                

            </fieldset>
        </form>


        <!-- jQuery -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>

</html>