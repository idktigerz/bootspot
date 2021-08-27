<?php
    include 'db_connection.php';
     
    if (mysqli_connect_error()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }else{
        echo "Connected Successfully";
    }
    
    mysqli_close($conn);
?>