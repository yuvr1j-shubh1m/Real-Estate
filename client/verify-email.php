<?php
    session_start();
    include('../admin/config/dbcon.php');

    if(isset($_GET['token']))
    {
        $token1 = $_GET['token'];
        $token = "SELECT token,vstatus FROM users WHERE token='$token1' LIMIT 1";
        $token_run = mysqli_query($conn,$token);

        if(mysqli_num_rows($token_run) > 0)
        {
            $row = mysqli_fetch_array($token_run);
            if($row['vstatus'] == "0")
            {
                $click_token = $row['token'];
                $update_query = "UPDATE users SET vstatus='1' WHERE token='$click_token' LIMIT 1";
                $update_query_run = mysqli_query($conn, $update_query);

                if($update_query_run)
                {
                    $_SESSION['status'] = "Your account has been verified.";
                    header("Location: login.php");
                    exit(0);
                }
                else
                {
                    $_SESSION['status'] = "Verification Failed.";
                    header("Location: login.php");
                    exit(0);
                }
            }
            else
            {
                $_SESSION['status'] = "Email already verified. Please Login.";
                header("Location: login.php");
                exit(0);
            }
        }
        else
        {
            $_SESSION['status'] = "This token dose not exist.";
            header("Location: login.php");
        }
    }
    else
    {
        $_SESSION['status'] = "Please verify your Email first.";
        header("Location: login.php");
    }

?>
