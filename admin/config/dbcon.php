<?php

    #Connection.
    $conn = new mysqli('localhost','root','','real estate');

    #Check Connection.
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
      //echo "<h1>Database Connected!!!</h1>";
    }
?>
