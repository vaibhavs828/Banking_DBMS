<?php
	session_start();
	
if (!isset($_SESSION['count'])) {
	$_SESSION['count'] = 0;
  } 
  
  if($_SESSION['count']<3)
  {
	  $var='<input type="submit" name="submit" value="Sign In">';
	  
  }
  if($_SESSION['count'] >= 3)
  {
	  // echo 'Your session is locked for 30 minutes.';
	  $var2='<div class="alert alert-danger" role="alert">
	  Your session is locked for 30 seconds.</div>';
	  $var='<input type="submit" name="submit" value="Sign In"  disabled>';
	  
	  
  
	  if(!$_SESSION['timeout']) 
	  {
		  $_SESSION['timeout'] = time();
	  }
	  $st = $_SESSION['timeout'] + 30; 
	  // echo $st;//session time is 30 minutes
	  // echo time();
	 
	  if(time() >= $st) {
		 $str='<div class="alert alert-danger" role="alert">
					   Your session is unlocked, Try now!</div>';
	   $var='<input type="submit" name="submit" value="Sign In">';
		  
		  session_destroy("count");
		  session_destroy("timeout");
		  unset($_SESSION['count']);
		  unset($_SESSION['timeout']);
	  }
  
  }
  
	if(array_key_exists("logout",$_GET))
	{
		session_destroy();
		header("location: index.php");
		
	}
	else if((array_key_exists("login", $_SESSION) and $_SESSION["login"]))
	{
		header("location: index.php");
	}
	$link=mysqli_connect("remotemysql.com","IyUUdMcJn4","XU1HaiAhXC","IyUUdMcJn4");
	if(mysqli_connect_error())
	{
		die ('database connection error');
	}
	
	$string='';
	$email='';
	$account_number='';
	$name='';
	if(array_key_exists("submit", $_POST))
	{
		if(!$_POST['login'] or !$_POST['password'])
		{
			$string='<div class="alert alert-danger" role="alert">
  						Fill the form correctly!!.</div>';
		}
		else
		{
			$email=$_POST['login'];
			$query="SELECT account_number,full_name from personal_info where '".$email."'=email";
			if($result=mysqli_query($link,$query))
			{
				$row=mysqli_fetch_array($result);
				if(!isset($row))
				{
					$string='<div class="alert alert-danger" role="alert">
  						Incorrect LoginID or Password</div>';
				}
				else
				{
					$account_number=$row[0];
					$name=$row[1];
					$query="SELECT password from personal_info where ".$account_number."=account_number";
					if($result=mysqli_query($link,$query))
					{
						$row=mysqli_fetch_array($result);
						if($row[0]==$_POST['password'])
						{
							// $string='<div class="alert alert-success" role="alert">
  					// 	Welcome back!! You are successfully logged in.</div>';
							$_SESSION['login']=$account_number;
							$_SESSION['name']=$name;
							$_SESSION['start']= time(); // Taking now logged in time.
							// // Ending a session in 30 minutes from the starting time.
							$_SESSION['expire'] = $_SESSION['start'] + (10 * 60);
							// header("location: index.php");
							header("location: index.php");

						}
						else
						{
							$string='<div class="alert alert-danger" role="alert">
						  Incorrect LoginID or Password</div>';
						  $_SESSION['count']++;

						}
					}


				}
			}

		}

	}
	









?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<meta charset="utf-8">
	<!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="login_style.css">
	<link rel="icon" type="image/png" href="navicon.svg">

</head>
<body>
	<!-- Image and text for navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary p-3 ">
            <!--<div class="container-fluid">-->
                <a class="navbar-brand" href="index.php" id="nm">
                    <img src="navicon.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                    Apna Bank
                </a>
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home 
                            </a>
                        </li>
                        <li class="nav-item dropdown bg-primary">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="transaction.php">Send Money to own bank</a>
                                <a class="dropdown-item" href="tootherbank.php">Send Money to other bank</a>
                                <a class="dropdown-item" href="balance.php">current balance</a>
                                <a class="dropdown-item" href="#">Raise a Complaint</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">My Account</a>
                        </li>
                        
                        
                    </ul>
                </div>
            <!--</div>-->
            </div>
        </nav>
	<!--<div class="name">
			<h1>Apna Bank</h1>
		</div>-->
	
	<div class="container" ><?php 
	if(empty($str))
{
	if(empty($var2))
	{echo $string;}
	else
	{echo $var2;}
}
else
echo $str;
	
	?></div>

	<form class="box" method="post">
	
	<?php

if ($_GET['msg'])
{
  // echo '<div class="success_message"></p> <p></div>' ;
   echo '<div><h6 style="color:red; font-weight:600;" >Session Expired, please login again!<h6></div>';
}

?> 
		<h1>LOGIN</h1>
		<input type="text" name="login" placeholder="Enter Email">
		<input type="password" name="password" placeholder="Enter Password">
		<!-- <input type="submit" name="submit" value="Sign In"> -->
		<?php echo $var?>
		<div class="links">
				<a href="forgotpassword.php">Forgot Password?</a>
			</div>
			<br>
			<br>
			<br/>
			<div class="links">
				<a href="newAccount.php">Create Account</a>
			</div>
	</form>

</body>
</html>