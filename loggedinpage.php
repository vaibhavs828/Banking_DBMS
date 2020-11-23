<?php
	
	session_start();
	$string='';
	if(array_key_exists("login",$_SESSION) and $_SESSION["login"])
	{
		$string="<h1>Welcome ".$_SESSION['name']."</h1";
	    
	}
	else
	{
		header("location: login.php");
	}
	

	




?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>function provided</title>
	<link rel="icon" type="image/png" href="navicon.svg">
    <style type="text/css">
    	.container{
    		margin:50px;
    		position: relative;
    	}
    </style>
  </head>
  <body>
  	<div class="contaner text-center">
  		<?php echo $string ?>
  	</div>

    <div class="container btn-group">
    	<a class="btn btn-primary" href="transaction.php" role="button">same bank transfer</a>
    
    	<a class="btn btn-primary" href="tootherbank.php" role="button">other bank transfer</a>
    
    	<a class="btn btn-primary" href="balance.php" role="button">current balance</a>
   
    	<a class="btn btn-primary" href="aboutus.php" role="button">about</a>

    	<a class="btn btn-primary" href="deleteAccount.php" role="button">delete account</a>

    	<a class="btn btn-primary" href="login.php?logout=1" role="button">logout</a>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>