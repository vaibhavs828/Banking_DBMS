<?php
  session_start();
  if(!array_key_exists('reason',$_GET) or $_SESSION['action']!=1)
  {
    header("location:login.php?logout=1");
  }
  if(array_key_exists("login",$_SESSION) and $_SESSION["login"])
  {
    
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
  $string='<div class="container ">
    <div class="alert alert-primary" role="alert">
      <strong>Authentication</strong>
    </div>
    <form method="post">
      <div class="form-group">
        <input class="form-control"type="text" name="txn_password" placeholder="Transaction Password">
      </div>
      <div class="form-group">
        <input class="form-control"type="text" name="otp" placeholder="Enter OTP">
      </div>
      <div class="form-group" >
        <button class="btn btn-primary" type="submit" name="submit">Confirm</button>
      </div>
    </form>
  </div>';
  if(array_key_exists('submit',$_POST))
  {
    $_SESSION['action']='';
    if($_GET['reason']==1)
    {
        $query="SELECT txn_password,otp FROM personal_info WHERE ".$_SESSION['login']."=account_number";
        $result=mysqli_query($link,$query);
        $row=mysqli_fetch_array($result);
         if($row[0]==md5(md5($_SESSION['email']).$_POST['txn_password']) 
           and $row[1]==md5(md5($_SESSION['email']).$_POST['otp']) )
        { 
          $from_account=$_SESSION['login'];
          $to_account=$_SESSION['to_account'];
          $date=date("Y-m-d");
          $amount=$_SESSION['amount'];
          $query="INSERT INTO txn_within_bank(from_account, to_account,date_of_txn,amount) values('$from_account','$to_account','$date','$amount')";
                if(mysqli_query($link,$query))
                {

                   $query="SELECT current_balance FROM balance WHERE ".$from_account."=account_number";
                                     $result=mysqli_query($link,$query);
                                     $row=mysqli_fetch_array($result);
                                     $sender=$row[0];
                                     $query="SELECT current_balance FROM balance WHERE ".$to_account."=account_number";
                                     $result=mysqli_query($link,$query);
                                     $row=mysqli_fetch_array($result);
                                     $receiver=$row[0];
                                     $sender=$sender-$amount;
                                     $receiver=$receiver+$amount;
                                     $query="UPDATE balance set current_balance='$sender' WHERE ".$from_account."=account_number";
                                     mysqli_query($link,$query);
                                     $query="UPDATE balance set current_balance='$receiver' WHERE ".$to_account."=account_number";
                                     mysqli_query($link,$query);
                                     $string='<div class="container card text-white bg-success mb-3" style="max-width: 30rem;">
  <div class="card-header"><b>Success</b></div>
  <div class="card-body">
    <h5 class="card-title">Transfer Successful</h5>
    <p class="card-text">Ruppes '.$amount.' has been debited from your account.</p>
  </div>
</div>';
                                     
                } 

        }
        else
        {
          $string='<div class="container card text-white bg-danger mb-3" style="max-width: 30rem;">
            <div class="card-header"><h1><b>Transfer Failed</b></h1></div>
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"><h2>Authentication Failed.</h2></p>
            </div>
          </div>';
        }
        $_SESSION['amount']='';
        $_SESSION['to_account']='';
      }

    }
  
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>verify otp</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/png" href="navicon.svg">
   

    <style>
      .table_container{
       width: 800px;
        margin: 5em auto;
        padding: 2em;
        background-color: #fdfdff;
        border-radius: 0.5em;
        box-shadow: 2px 3px 7px 2px rgba(0,0,0,0.02);
      }
          #nm{
  padding-left: 0px;
    letter-spacing: 3px;
}
.nav-link{
  padding-top: 10px;
  letter-spacing: 3px;
}
.dropdown-menu{
  background-color: #007bff;
  border: none !important;
}
.dropdown-item{
  color: #70abff !important;
  letter-spacing: 2px;
}
.dropdown>.dropdown-menu>a:hover {
  color: #cce5ff !important;
  background-color: transparent;
}
.h1 , h1{
    margin-top: 40px;
}
.pb-5, .py-5{
    margin-top: -60px;
    padding-bottom: 0rem!important;
}
 body{
            font-family: 'Mulish', sans-serif;
            margin: 0;
            padding: 0;
        }
        #nm {
            letter-spacing: 3px;
        }

        .very {
            border-radius: 50%;
            height: 50%
        }

        .fuggy {
            color: rgb(17, 2, 77);
        }
        .page{

background-color: whitesmoke;
        }


/table style stats/
.login_box {
    /*text-align: center;
      margin: 5em auto;
      padding: 5em;
      background-color: #fdfdff;
      border-radius: 0.5em;
      box-shadow: 5px 10px 10px #005b74; */
      /* max-width: 800px; */
  /* height: auto; */
  width: 100px;
  margin: 50px auto;
  background: #ffffffd9;
  padding: 20px 40px 30px;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
  border-radius: 10px;
  box-shadow: 5px 10px 10px #181827;
      }
      .container{
        position: relative;
        text-align: center;
        margin:2em auto;
        max-width: 18rem;
        background-color: #fdfdff;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 5px 10px 10px #181827;

      }
      
body{
  font-family: 'Mulish', sans-serif;
  background: url(blue.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  margin: 0;
  padding: 0;
}

.title{
  color: #124a92;
  font-size: 2em;
  text-align: center;
  text-transform: uppercase;
  font-weight: 600;
  margin-bottom: 20px;
}

#view-table{
    border-style: solid;
    border-color: black;
    width: 600px;
    position: absolute;
    top: 200px;
    left: 100px;
}
    </style>
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
<!-- table starts here -->
  <div>
    <?php echo $string ?>
  </div>


  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    
</body>
</html>