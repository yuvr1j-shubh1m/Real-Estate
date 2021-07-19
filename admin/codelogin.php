<?php
    session_start();
    include('auth.php');
    include('config/dbcon.php');
    
    if(isset($_POST['login_btn']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $log_query = "SELECT * FROM admin WHERE email='$email'AND password='$password' LIMIT 1 ";
        $log_query_run = mysqli_query($conn, $log_query);

        if(mysqli_num_rows($log_query_run) > 0)
        {
            foreach($log_query_run as $row){
                $user_id = $row['id'];
                $user_name = $row['name'];
                $user_email = $row['email'];
                $user_phone = $row['phone'];
                $role_as = $row['role_as'];
            }
            $_SESSION['auth'] = "$role_as";
            $_SESSION['auth_user'] = [
                'user_id'=>$user_id,
                'user_name'=>$user_name,
                'user_email'=>$user_email,
                'user_phone'=>$user_phone
            ];
            $_SESSION['status'] = "LoggedIn Successfully";
            header('location: dash.php');
            
        }
        else
            {
                $_SESSION['auth_status'] = "Invalid Username or Password";
                header('location: adminlogin.php');
                
            }

        }
        else
            {
                $_SESSION['auth_status'] = "Access Denied";
                header('location: adminlogin.php');
            }