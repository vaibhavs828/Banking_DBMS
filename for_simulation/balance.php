<?php
  session_start();
  $_SESSION['action']='';

  if(array_key_exists("login",$_SESSION) and $_SESSION["login"])
  {
    $now=time();
    if($now>$_SESSION['expire'])
    {
      session_destroy();
      // header("location: login.php");
      header('Location: login.php?msg=' . urlencode(base64_encode("You have been successfully logged out!")));
    }
  }
  else
  {
    header("location: login.php");
  }
    $link=mysqli_connect("remotemysql.com","IyUUdMcJn4","XU1HaiAhXC","IyUUdMcJn4");
  if(mysqli_connect_error())
  {
    die ('database connection error');
  }
    $string='';
    
    
      $query="select current_balance from balance where ".$_SESSION['login']."=account_number";
      $query1="select full_name from personal_info where ".$_SESSION['login']."=account_number";
      $query2="select account_number from balance where ".$_SESSION['login']."=account_number";
      $result=mysqli_query($link,$query);
      $row=mysqli_fetch_array($result);
      $result1=mysqli_query($link,$query1);
      $row1=mysqli_fetch_array($result1);
      $result2=mysqli_query($link,$query2);
      $row2=mysqli_fetch_array($result2);
      $string="<h2>Current balance: ".$row[0]."</h2>";
    $string1='';
    $string1="<h2>Customer Name: ".$row1[0]."</h2>"; 
    $string2="<h2>Account Number: ".$row2[0]."</h2>";  
    
  






?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--Google Font-->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Check current balance</title>

    <link rel="icon" type="image/png" href="navicon.svg" >
   <!--  External CSS -->
    <link rel="stylesheet" type="text/css" href="balancestyle.css">
  </head>
  
  <body>
  <!--   Navigation bar starts here -->
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
   


<div class="login_box container" style="overflow-x:auto;">
        <h4 class="title"> YOUR CURRENT BALANCE IS AS FOLLOWS:</h4>
        <table class="table table-hover">
            
            <tbody>
              <tr>
                <div class="ml-2"><th scope="row">Current balance</th></div>
                <td><?php echo $row[0]?></td>
                
              </tr>
              <tr>
                <th scope="row">Customer Name</th>
                <td><?php echo $row1[0]?></td>
              
              </tr>
              <tr>
                <th scope="row">Account Number</th>
                <td><?php echo $row2[0]?></td>
                
               
              </tr>
             
             
            </tbody>
            
        
          </table>
          <div class="color2 text-center"><a href="transactionsummary.php">click to know transactions details</a></div>
    </div>

   









<footer class="page-footer font-small ">


   <!-- Footer Links -->
   <div style="background-color:#1C2331;">


    <div  style="background-color:#3F729B;">
        <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0 text-white">
                    <h6 class="mb-0">Get connected with us on social networks!</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right  " >

                    <!-- Facebook -->
                    <a class="fb-ic text-white" href="https://www.facebook.com/">
                        <i class="fab fa-facebook-f white-text mr-4"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic text-white" href="https://twitter.com/">
                        <i class="fab fa-twitter white-text mr-4"> </i>
                    </a>
                    <!-- Google +-->
                    <!-- <a class="gplus-ic">
                    <i class="fab fa-google-plus-g white-text mr-4"> </i>
                </a>-->
                    <!--Linkedin -->
                    <a class="li-ic text-white" href="https://in.linkedin.com/">
                        <i class="fab fa-linkedin-in white-text mr-4"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic text-white" href="https://www.instagram.com/">
                        <i class="fab fa-instagram white-text"> </i>
                    </a>

                </div>
                
                <!-- Grid column -->

            </div>
            <!-- Grid row-->
            <!-- rahul  -->
           
             <hr>
        </div>
    </div>
    
    <div class="container text-center text-md-left mt-5 " style="bac"  >

        <!-- Grid row -->
        <div class="row mt-3 text-white">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold text-white">Apna Bank</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>Please do not believe any entity using Apna Bank logos & branding to request the public for
                    money
                    in exchange for opening a Customer Service Point.</p>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <!--<h6 class="text-uppercase font-weight-bold">OUR OFFERINGS</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
                <a class="dark-grey-text" href="#!">Savings Account</a>
            </p>
            <p>
                <a class="dark-grey-text" href="#!">Current Account</a>
            </p>-->
                <!-- <p>
                <a class="dark-grey-text" href="#!">BrandFlow</a>
            </p> -->
                <!-- <p>
                <a class="dark-grey-text" href="#!">Bootstrap Angular</a>
            </p> -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <!--<h6 class="text-uppercase font-weight-bold">Useful links</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
                <a class="dark-grey-text" href="#!">Your Account</a>
            </p>-->
                <!-- <p>
                <a class="dark-grey-text" href="#!">Become an Affiliate</a>
            </p> -->
                <!-- <p>
                <a class="dark-grey-text" href="#!">Shipping Rates</a>
            </p> -->
                <!--<p>
                <a class="dark-grey-text" href="#!">Help</a>
            </p>-->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold">Contact</h6>
                <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fas fa-home mr-3"></i>Kumarswamy layout, Bengaluru ,India</p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                <p>
                    <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                <p>
                    <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
   </div>

  <!-- Footer Links -->

  <!-- Copyright -->
    <!-- <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;"> -->

   <div class="footer-copyright text-center text-white py-3 " style="background-color:#1C2331;">© 2020 Copyright:
    Apna Bank
    <!--<a  style="color:white;" href="https://mdbootstrap.com/"> ApnaBank.com</a>-->
  </div>
    <!-- Copyright -->

</footer>
    
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>