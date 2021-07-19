<?php

if(!isset($_SESSION['auth']))
{
    $_SESSION['auth_status'] = "Please Login";
    header("Location: adminlogin.php");
}
?>