<?php
  session_start();
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
  $query="select * from txn_within_bank where".$_SESSION['login']."=from_account";
  $result=mysqli_query($link,$query);
  $num=mysqli_num_rows($result);
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
    <table id="view-table">
 <tr>
     <th>FROM ACC</th>
     <th>TO ACC</th>
     <th>DATE </th>
     <th>AMOUNT</th>
          </tr>

<?php
for($i=1;$i<=$num;$i++)
{
    $row=mysqli_fetch_array($result);

?>
<tr>
    <td><?php echo $row['from_account'];?></td>
    <td><?php echo $row['to_account'];?></td>
    <td><?php echo $row['date'];?></td>
    <td><?php echo $row['amount'];?></td>
</tr>

<?php

}

?>

    </table>   


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    
</body>
</html>