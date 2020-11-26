<?php
	session_start();
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
							header("location: index.php");

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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<meta charset="utf-8">
		<!--Google Font-->
		<link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">
	<title>Login Page</title>
	<link rel="stylesheet" href="login_style.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	
	<link rel="icon" type="image/png" href="navicon.svg">
</head>

<body>
	<!-- Image and text for navbar-->
	<!--<nav class="navbar navbar-dark bg-primary p-3">
		<a class="navbar-brand" href="index.php" id="nm">
			<img src="navicon.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
			Apna Bank
		</a>
	</nav>-->

	<div><?php echo $string?></div>
	<div class="container">
		<header>LOGIN</header>
		<form method="post">
			<div class="input-field">
				<input type="text" name="login" required>
				<label>Enter Email</label>
			</div>
			<div class="input-field">
				<input class="pswrd" type="password" name="password" required>
				<span class="show">SHOW</span>
				<label>Enter Password</label>
			</div>
			<div class="button" name="submit">
				<div class="inner">
				</div>
				<button type="submit" formaction="index.php">SIGN IN</button>
			</div>
		</form>

		<div class="signup">
			<a href="forgotpassword.php">Forgot Password?</a>
			<br><br><br><br>
			<a href="newAccount.php">Create an account</a>
		</div>
	</div>
	<script>
		var input = document.querySelector('.pswrd');
		var show = document.querySelector('.show');
		show.addEventListener('click', active);
		function active() {
			if (input.type === "password") {
				input.type = "text";
				show.style.color = "#1DA1F2";
				show.textContent = "HIDE";
			} else {
				input.type = "password";
				show.textContent = "SHOW";
				show.style.color = "#111";
			}
		}
	</script>

</body>

</html>