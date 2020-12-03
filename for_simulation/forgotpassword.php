<?php
    session_start();
    $_SESSION['action']='';
    
    if(array_key_exists("login",$_SESSION) and $_SESSION["login"])
    {
        
        header("location: index.php");   
    }
    $string='';
    if(array_key_exists("submit",$_POST))
    {
        $string='<div class="alert alert-primary" role="alert">
                        Our executive will contact you!!</div>';
    }




?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">

    <!--External CSS-->
    <link rel="stylesheet" href="fpstyle.css">
    <title>Transaction</title>
    <link rel="icon" type="image/png" href="navicon.svg">


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <!--External JS-->


</head>

<body>
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
                <li class="nav-item dropdown bg-primary">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="transaction.php">Transfer Money to own bank</a>
                        <a class="dropdown-item" href="tootherbank.php">Transfer Money to other bank</a>
                        <a class="dropdown-item" href="balance.php">current balance</a>
                        <a class="dropdown-item" href="feedback.php">Raise a Complaint</a>
                    </div>
                </li>

                <li class="nav-item dropdown bg-primary">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        Account
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profile.php">Profile</a>

                        <a class="dropdown-item" href="transactionsummary.php">Transction details</a>
                        <a class="dropdown-item" href="deleteAccount.php">Delete Account</a>

                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">About</a>
                </li>



            </ul>
        </div>
        <!--</div>-->
        </div>
    </nav>
    <!--  end of navbar -->

    <!--
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Forgot Password Forms</strong></h1>                            
                        </div>
                    </div>
                        <div class="col-sm-6 col-sm-offset-3 text">                        	
                        	<div class="form-box">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Forgot Password</h3>
	                            		<p>Enter email address to get password:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
				                        	<input type="text" name="form-username" placeholder="Username or email" class="form-username form-control" id="form-username">
				                        </div>				                        
                                            <button type="submit" class="btn col-sm-5">Submit</button>
                                            <br><br>
                                            <a class="btn btn-primary" href="index.html">Sign In</a>
                                            <a class="btn btn-primary" href="register.html" style="float:right;">Sign Up</a>
				                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>        
    -->
    <!--  alert if any -->

    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="confused.png" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <!--				<div class="d-flex justify-content-center form_container">
					<form method="post" name="form1" action="#">
						<div class="input-group mb-2">
							
                            <p class="apology">Enter your email to continue</p>
                            
							
						</div>
						<div class="input-group col-md-12 mb-2" id="email">
							<input type="text" name="text1" class="form-control input_pass" value="" placeholder="abc@xyz.com"  >
						</div>
						
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<button type="submit" id="button" name="submit" class="btn login_btn">Confirm</button>
				   </div>
					</form>
				</div>
-->

                <div class="d-flex justify-content-center form_container">

                    <form name="form1" method="post">

                        <div class="input-group mb-2">

                            <p class="apology">Enter your email to continue</p>


                        </div>
                        <div class="input-group col-md-12 mb-2" id="email">
                            <input type="text" name="text1" class="form-control input_pass" value=""
                                placeholder="abc@xyz.com">
                        </div>

                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button class="btn login_btn" type="submit" name="Validate" value="Validate"
                                onclick="ValidateEmail(document.form1.text1)">SUBMIT</button></div>
                    </form>
                </div>
                <div class="mt-4">
                    <div class="d-flex justify-content-center links ">
                        <center>
                            Write to us at <br> <span id="companyMail"> apnabankcc@gmail.com </span> <br> or <br>
                            <span><a href="newAccount.php" id="createNew" class="text-white">Create a new
                                    Account</a></span>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <?php echo $string ?>
    </div>

    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script>
        function ValidateEmail(inputText) {
            var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            if (inputText.value.match(mailformat)) {
                alert("our executive will contact you!");
                return true;
            }
            else {
                alert("You have entered an invalid email address!");
                document.form1.text1.focus();
                return false;
            }
        }

    </script>
</body>

</html>