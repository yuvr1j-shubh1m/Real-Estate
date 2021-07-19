

<?php 
    include('../admin/config/dbcon.php');

    if(isset($_POST['srch_prop']))
    {
        $city = $_POST['city'];
        $type = $_POST['type'];
        $stat = $_POST['stat'];
        $price = $_POST['price'];

        $query = "INSERT INTO home(city,type,stat,price) VALUES('$city','$type','$stat','$price')";
        $query_run = mysqli_query($conn,$query);

        if($query_run)
        {
            $_SESSION['status'] = "Here are the Search results.";
            header("Location: home.php");
        }
        else
        {
            $_SESSION['status'] = "Can't Search results.";
            header("Location: home.php");
        }
    }



                            #Message Section

if(isset($_POST['contact']))
    {
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $subject = $_POST['subject'];
        $msg = $_POST['msg'];

        $query = "INSERT INTO contact(fname,email,mobile,subject,msg)
        VALUES('$fname','$email','$mobile','$subject','$msg')";
        $query_run = mysqli_query($conn,$query);

        if($query_run)
        {
            $_SESSION['status'] = "Message sent Successfully.";
            header("Location: home.php");
        }
        else{
            $_SESSION['status'] = "Message sending Failed.";
            header("Location: conatact.php");
        }
    }

?>
<?php                 // SignUp and Email Verification.

session_start();
include('../admin/config/dbcon.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function sendmail_verify($name,$email,$token)
{
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->SMTPAuth   = true;

  $mail->Host       = 'smtp.gmail.com';
  $mail->Username   = 'yuvrajenter21@gmail.com';
  $mail->Password   = 'yuvr1j21';
  
  $mail->SMTPSecure = "tls";         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
  $mail->Port       = 587; 

  $mail->setFrom('yuvrajenter21@gmail.com', 'Mailer');
  $mail->addAddress($email);

  $mail->isHTML(true);
  $mail->Subject = 'Email verification from INH Real Estate';

  $email_template = "
    <h3> You have registered with INH Real Estate.</h3>
    <h5> Please verify your Email with the below link. </h5>
    <br/><br/>
    <a href='http://localhost/Live/client/verify-email.php?token=$token'> Click Here </a>
    ";

    $mail->Body = $email_template;
    $mail->send();
    // echo 'Message has been sent';

}
        // Sign Up

if(isset($_POST['signup_btn']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  $token = bin2hex(random_bytes(15));
  

  if($password == $cpassword)
  {
    $checkemail = "SELECT email FROM users WHERE email='$email' ";
    $checkemail_run = mysqli_query($conn, $checkemail);
    if(mysqli_num_rows($checkemail_run) > 0)
    {
      $_SESSION['status'] = "Email Already Exist.";
      header("Location: signup.php");
    }else{
      $user_query = "INSERT INTO users (name,email,phone,password,token,status) 
      VALUES('$name','$email','$phone','$password','$token')";
      $user_query_run = mysqli_query($conn, $user_query);

      if($user_query_run)
      {
        sendmail_verify("$name","$email","$token");
        $_SESSION['success'] = "User Registered Successfully. Please verify your Email.";
        header('Location: home.php'); 
      }
      else
      {
      $_SESSION['status'] = "User Registration Failed";
      header("Location: signup.php");
      }
    }
  
  }
  else{
    $_SESSION['status'] = "Please enter correct password";
    header("Location: signup.php");
  }

  
}
?>



<?php         //Login

session_start();
include('../admin/config/dbcon.php');

if(isset($_POST['login_btn']))
{
  if(!empty(trim($_POST['email'])) && !empty(trim($_POST['password'])))
  {
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
    $login_query_run = mysqli_query($conn,$login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
      $row = mysqli_fetch_array($login_query_run);
      
      if($row['vstatus'] == "1")
      {
        $_SESSION['auth'] = TRUE;
        $_SESSION['auth_user'] = [
          'username' => $row['name'],
          'email' => $row['email'],
          'phone' => $row['phone'],
        ];
        $_SESSION['status'] = "You are Logged In successfully.";
        header("Location: home.php");
        exit(0);
      }
      else
      {
        $_SESSION['status'] = "Please verify your email to Login.";
        header("Location: login.php");
        exit(0);
      }
    }
    else
    {
      $_SESSION['status'] = "Invalid Email or Password.";
      header("Location: login.php");
      exit(0);
    }
  }
  else
  {
    $_SESSION['status'] = "All fields are Mandatory";
    header("Location: login.php");
    exit(0);
  }
}

?>
