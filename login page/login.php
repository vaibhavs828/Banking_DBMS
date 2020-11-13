<?php
	session_start();
	if(array_key_exists("logout",$_GET))
	{
		session_destroy();
		header("location: login.php");
		
	}
	else if((array_key_exists("login", $_SESSION) and $_SESSION["login"]))
	{
		header("location: loggedinpage.php");
	}
	$link=mysqli_connect("localhost","root","root","banking");
	if(mysqli_connect_error())
	{
		die ('database connection error');
	}
	
	$string='';
	if(array_key_exists("submit", $_POST))
	{
		if(!$_POST['login'] or !$_POST['password'])
		{
			$string='<div class="alert alert-danger" role="alert">
  						Fill the form correctly!!.</div>';
		}
		else
		{
			$query="select count(*) from personal_info where ".$_POST['login']."=account_number";
			if($result=mysqli_query($link,$query))
			{
				$row=mysqli_fetch_array($result);
				if($row[0]==0)
				{
					$string='<div class="alert alert-danger" role="alert">
  						Incorrect LoginID or Password</div>';
				}
				else
				{
					$query="select password from personal_info where ".$_POST['login']."=account_number";
					if($result=mysqli_query($link,$query))
					{
						$row=mysqli_fetch_array($result);
						if($row[0]==$_POST['password'])
						{
							// $string='<div class="alert alert-success" role="alert">
  					// 	Welcome back!! You are successfully logged in.</div>';
							$_SESSION['login']=$_POST['login'];
							header("location: loggedinpage.php");

						}
						else
						{
							$string='<div class="alert alert-danger" role="alert">
  						Incorrect LoginID or Password</div>';

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
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/png" href="navicon.svg">
</head>
<body>
	<!-- Image and text for navbar-->
    <nav class="navbar navbar-dark bg-primary p-3">
        <a class="navbar-brand" href="#" id="nm">
            <img src="navicon.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            Apna Bank
        </a>
    </nav>
	<!--<div class="name">
			<h1>Apna Bank</h1>
		</div>-->
	<div class="container" ><?php echo $string?></div>

	<form class="box" method="post">
		<h1>LOGIN</h1>
		<input type="text" name="login" placeholder="LoginID">
		<input type="password" name="password" placeholder="Password">
		<input type="submit" name="submit" value="Sign In">
		<div class="links">
				<a href="">Forgot LoginID / Password?</a>
			</div>
			<br>
			<br>
			<br/>
			<div class="links">
				<a href="">Create Account</a>
			</div>
	</form>

</body>
</html>