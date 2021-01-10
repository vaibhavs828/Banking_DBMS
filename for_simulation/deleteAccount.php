<?php
    session_start();
    $_SESSION['action']='';
    
    if(array_key_exists("login",$_SESSION) and $_SESSION["login"])
    {
    
    }
    else
    {
        header("location: index.php");
    }
    $link=mysqli_connect("remotemysql.com","IyUUdMcJn4","XU1HaiAhXC","IyUUdMcJn4");
    if(mysqli_connect_error())
    {
        die ('database connection error');
    }
    $string='';
    $password='';
    $account_number='';
    if(array_key_exists("submit",$_POST))
    {   
        $password=$_POST['password'];
        $account_number=$_SESSION['login'];
        $query="SELECT password from personal_info where '".$account_number."'=account_number";
        $result=mysqli_query($link,$query);
        $row=mysqli_fetch_array($result);
        if($row[0]==$password)
        {
            $query="DELETE from personal_info where '".$account_number."'=account_number";
            $result=mysqli_query($link,$query);
            header("location: login.php?logout=1");
        }
        else
        {
            $string='<div class="alert alert-danger" role="alert">
                        Wrong password!!</div>';
        }
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Mulish&display=swap" rel="stylesheet">

    <!--External CSS-->
    <link rel="stylesheet" href="deleteAccountStyle.css">
    <title>Delete your Account</title>
    <link rel="icon" type="image/png" href="navicon.svg">


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
</head>

<body>

    
        <nav class="navdel bg-primary">
            <a class="navbar-brand" href="index.php">
                <img src="navicon.svg" width="50" height="50" alt="" loading="lazy" id="navimg">
                Apna Bank
            </a>
        </nav>
    

    <div>
        <?php echo $string ?>
    </div>

    <!--copy-->
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card " style="margin-top:100px;">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="sad_emoji.png" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <div class="d-flex justify-content-center form_container">
                    <form  method="POST">
                        <div class="input-group mb-3">
                            
                            <p class="apology">We are sorry to let you down</p>
                            
                        </div>
                        <div class="input-group col-md-10 mb-2">
                            <input type="password" name="password" class="form-control input_pass" value="" placeholder="Confirm Password">
                        </div>
                        
                            <div class="d-flex justify-content-center mt-3 login_container">
                    <button id="button" type="submit" name="submit" class="btn login_btn">DELETE</button>
                   </div>
                    </form>
                </div>
        
                <div class="mt-4">
                    <div class="d-flex justify-content-center links">
                        <center>
                        Write to us at <br> <span id="companyMail"> apnabankcc@gmail.com </span>
                    </center>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>