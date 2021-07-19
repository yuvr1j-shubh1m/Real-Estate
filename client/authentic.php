<?php

    session_start();
    if(!isset($_SESSION['auth']))
    {
        $_SESSION['status'] = "Please Login.";
        header('Location: login.php');
        exit(0);
    }
?>