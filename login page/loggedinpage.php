<?php
	
	session_start();
	if(array_key_exists("login",$_SESSION))
	{
		echo '<p>You are successfully logged in!!.<a href="login.php?logout=1">Log out</a></p>';
	}
	else
	{
		header("location: login.php");
	}
	

	




?>