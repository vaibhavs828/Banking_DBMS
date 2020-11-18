<?php
$password = $_POST['password'];
if(!empty($password))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "root";
    $dbName = "banking";

    //Create Connection

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    if (mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
       } else{
        $sql = "DELETE FROM personal_info WHERE password = $password";
        $retval = mysqli_query($conn,$sql);
            
            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
            }
            
            echo "Deleted data successfully\n";
            
            $conn->close();
            
    }

}

?>