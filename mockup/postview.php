<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Blog Homepage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/style.css" rel="stylesheet" media="screen">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="../assets/js/html5shiv.js"></script>
        <![endif]-->
    </head>
        


    <body>

        <div class="navbar">
            <div class="navbar-inner">
                <div class="container">
                    <div class="nav">
                        <a class="brand" href="index.php"> Our first blog </a>
                        <ul class="nav">
                            <li><a href="index.php">Home</a></li>
                            <li class="active"><a href="index.php">Link to ?</a></li>
                            <li><a href="index.php">Link to ?</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

            <div class="row">
                <div class="span12">
                    <h2 id="caption" align="center">Have no fear of perfection, as you will never reach it!</h2>
                    <img src="img/header.jpg" class="img-polaroid" width="940" height="300">
                </div>
            </div>

            <div class="row">
                <div class="span12">

                    <div class="divpost img-polaroid">
                        
                        <h3 class='post'>Admin dashboard</h2>
                        <p class='lead'></p>
                        <hr/>
                            <form action="" method="" class="form-horizontal">
    							<legend class="post">Insert a new post</legend>
    							
    							<div class="control-group">	
    								
    								<label class="control-label">Post title:</label>
    								
    								<div class="controls">
    									<input type="text" name="" placeholder="> ">
    								</div>
    							
    							</div>

    							<div class="control-group">	
    								
    								<label class="control-label">Post tags:</label>
    								
    								<div class="controls">
    									<input type="text" name="" placeholder="> ">
    								</div>
    							
    							</div>

    							<div class="control-group">

    								<label class="control-label">Post text:</label>
    								
    								<div class="controls">
    									<textarea rows="9" class="input-xxlarge">{{ $post_text_plm }}</textarea>
    								</div>
    								
    							</div>

    								<div class="controls">
    									<button type="submit" class="btn btn-inverse">Publish</button>
    								</div>
    								
    							</div>
    						</form>
                    </div>

                </div>  
            </div>



             
              <div class="footer container">
                <p class="muted credit">Our blog is made by us, doh <a href="#">Copyright®</a> In consectetur mollis dolor vitae cursus. Nulla iaculis, velit quis porta blandit, diam nibh porta ante, et commodo erat eros vitae nibh. Nulla</p>
              </div>
             

        </div>

        <!-- jQuery -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    
    </body>

</html>