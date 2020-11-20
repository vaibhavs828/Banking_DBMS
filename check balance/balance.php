<?php
  session_start();
  if(array_key_exists("login",$_SESSION) and $_SESSION["login"])
  {
    
  }
  else
  {
    header("location: login.php");
  }
    $link=mysqli_connect("localhost","root","root","banking");
    if(mysqli_connect_error())
    {
        die ('database connection error');
    }
    $string='';
    if(array_key_exists("submit",$_POST))
    {
      $query="select current_balance from balance where ".$_SESSION['login']."=account_number";
      $result=mysqli_query($link,$query);
      $row=mysqli_fetch_array($result);
      $string="<h2>Current balance: ".$row[0]."</h2>";
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

    <title>Check current balance</title>

    <link rel="icon" type="image/png" href="navicon.svg" >
   <!--  External CSS -->
    <link rel="stylesheet" type="text/css" href="balance_style.css">
  </head>
  <body>
  <!--   Navigation bar starts here -->
    <nav class="navbar navbar-dark bg-primary p-3 ">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php" id="nm">
            <img src="navicon.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            Apna Bank
        </a>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home
            </a>
          </li>
          <li class="nav-item dropdown bg-primary">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"  aria-expanded="false">
              My Account
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="deleteAccount.php">Delete Account</a>
            </div>
          </li>
          <li class="nav-item dropdown bg-primary">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"  aria-expanded="false">
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
                <a class="nav-link" href="login.php?logout=1">Log Out</a>
            </li>
        </ul>
      </div>
    </div>
</div>
    </nav>

    <!-- container of our balance -->
    <div class="login_box">
      <div><?php echo $string ?></div>
        <form  method="post">
          <button class="btn btn-outline-primary" name="submit">Click to know Account balance</button>
        </form>
    </div>


    
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>