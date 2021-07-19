<?php
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $subject = $_POST['subject'];
  $msg = $_POST['msg'];

  #Database Connection.
  $conn = new mysqli('localhost','root','','real estate');
  if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into contact(fname,email,mobile,subject,msg)
    values(?,?,?,?,?)");
    $stmt->bind_param("sssss",$fname,$email,$mobile,$subject,$msg);
    $stmt->execute();
    #echo "Message received successfully...";
    $stmt->close();
    $conn->close();
  }
?>
