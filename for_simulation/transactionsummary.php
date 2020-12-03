<?php
  session_start();
  $_SESSION['action']='';

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
  $string='';
  $accountnumber=$_SESSION['login'];
  $query="SELECT * from txn_within_bank where $accountnumber=txn_within_bank.from_account OR $accountnumber     =txn_within_bank.to_account
        union all
        SELECT * from txn_other_bank where $accountnumber=txn_other_bank.from_account 
        order by date_of_txn desc   limit 10";
        $result=mysqli_query($link,$query);

        while($row=mysqli_fetch_array($result))
        {
          $string=$string.'<tr>
            <th scope="row">'.$row[0].'</th>
            <td>'.$row[1].'</td>
            <td>'.$row[2].'</td>
            <td>'.$row[3].'</td>
          </tr>';
        }
 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Balance summary</title>
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
         /* width: 800px;
    text-align: center;
      margin: 5em auto;
      padding: 5em;
      background-color: #fdfdff;
      border-radius: 0.5em;
      box-shadow: 5px 10px 10px #005b74; */
      /* max-width: 800px; */
  /* height: auto; */
  margin: 50px auto;
  background: #ffffffd9;
  padding: 20px 40px 30px;
  border-bottom-left-radius: 5px;
  border-bottom-right-radius: 5px;
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
  <div class="table_container">
      <div class="alert alert-info" role="alert">
        <h1 class="text-center">Transaction Summary</h1>

      </div>
      <table class="table table-hover">
        <thead class="bg-info">
          <tr>
            <th scope="col">From account</th>
            <th scope="col">To account</th>
            <th scope="col">Date of transaction</th>
            <th scope="col">Amount</th>
          </tr>
      </thead>
      <tbody>
          <?php echo $string ?>
      </tbody>
    </table>
    </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    
</body>
</html>