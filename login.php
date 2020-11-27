<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
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

	<div></div>
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