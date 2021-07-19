<?php
session_start();
include('auth.php');
include('config/dbcon.php');

if(isset($_POST['logout_btn']))
{
  //session_destroy();
  unset($_SESSION['auth']);
  unset($_SESSION['auth_user']);

  $_SESSION['auth_status'] = "Logged out Successfully";
  header("Location: adminlogin.php");
  exit(0);

}

if(isset($_POST['adduser']))
{
  $name = $_POST['name'];
  $image = $_FILES["profile"]['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $confirmpassword = $_POST['confirmpassword'];
  
  

  if($password == $confirmpassword)
  {
    $checkemail = "SELECT email FROM admin WHERE email='$email' ";
    $checkemail_run = mysqli_query($conn, $checkemail);
    if(mysqli_num_rows($checkemail_run) > 0)
    {
      $_SESSION['status'] = "Email Already Exist.";
      header("Location: admin.php");
    }else{
      $user_query = "INSERT INTO admin (image,name,email,phone,password) VALUES('$image','$name','$email','$phone','$password')";
      $user_query_run = mysqli_query($conn, $user_query);

      if($user_query_run)
      {
      move_uploaded_file($_FILES["profile"]["tmp_name"], "upload/".$_FILES["profile"]["name"]);
        $_SESSION['success'] = "Property Added";
        header('Location: admin.php'); 
      }
      else
      {
      $_SESSION['status'] = "User Registration Failed";
      header("Location: admin.php");
      }
    }
  
  }
  else{
    $_SESSION['status'] = "Please enter correct password";
    header("Location: admin.php");
  }

  
}

// Edit User

if(isset($_POST['updateuser']))
{
  $user_id = $_POST['user_id'];
  $image = $_FILES["profile"]['name'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];

  $query = "UPDATE admin SET image='$image', name='$name', email='$email', phone='$phone', password='$password' WHERE id='$user_id'";
  $query_run= mysqli_query($conn, $query);

  if($query_run)
  {
    move_uploaded_file($_FILES["profile"]["tmp_name"], "upload/".$_FILES["profile"]["name"]);
    $_SESSION['success'] = "Property Added";
    header('Location: admin.php');
  }else{
    $_SESSION['status'] = "User Updation Failed";
    header("Location: admin.php");
  }
}
      // Delete User.

if(isset($_POST['deleteuserbtn']))
{
  $user_id =$_POST['delete_id'];
  $query = "DELETE FROM admin WHERE id='$user_id' ";
  $query_run = mysqli_query($conn,$query);

  if($query_run)
  {
    $_SESSION['status'] = "User Deleted Successfully";
    header("Location: admin.php");
  }else{
    $_SESSION['status'] = "User Deletion Failed";
    header("Location: admin.php");
  }
}
?>

<!-- Add Image -->
<?php
if(isset($_POST['addimage']))
{
  $title = $_POST['title'];
  $images1 = $_FILES["prop_img1"]['name'];
  $images2 = $_FILES["prop_img2"]['name'];
  $images3 = $_FILES["prop_img3"]['name'];



    $query = "INSERT INTO prop_image (title,image1,image2,image3) VALUES ('$title','$images1','$images2','$images3')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
      move_uploaded_file($_FILES["prop_img1"]["tmp_name"], "upload/".$_FILES["prop_img1"]["name"]);
      $_SESSION['success'] = "Property Added";
      header('Location: prop-img.php');

      move_uploaded_file($_FILES["prop_img2"]["tmp_name"], "upload/".$_FILES["prop_img2"]["name"]);
      $_SESSION['success'] = "Property Added";
      header('Location: prop-img.php');

      move_uploaded_file($_FILES["prop_img3"]["tmp_name"], "upload/".$_FILES["prop_img3"]["name"]);
      $_SESSION['success'] = "Property Added";
      header('Location: prop-img.php');
    }
    else
    {
      $_SESSION['success'] = "Property Not Added";
      header('Location: prop-img.php');
    }
}


    // Edit Image
    if(isset($_POST['updateimage']))
    {
      $user_id = $_POST['user_id'];
      $title = $_POST['title'];
      $images1 = $_FILES["prop_img1"]['name'];
      $images2 = $_FILES["prop_img2"]['name'];
      $images3 = $_FILES["prop_img3"]['name'];

    
    
      $query = "UPDATE prop_image SET title='$title', image1='$images1', image2='$images2', image3='$images3' WHERE id='$user_id'";
      $query_run= mysqli_query($conn, $query);
    
      if($query_run)
      {
        move_uploaded_file($_FILES["prop_img1"]["tmp_name"], "upload/".$_FILES["prop_img1"]["name"]);
        $_SESSION['success'] = "Property updated successfully";
        header('Location: prop-img.php');

        move_uploaded_file($_FILES["prop_img2"]["tmp_name"], "upload/".$_FILES["prop_img2"]["name"]);
        $_SESSION['success'] = "Property updated successfully";
        header('Location: prop-img.php');

        move_uploaded_file($_FILES["prop_img3"]["tmp_name"], "upload/".$_FILES["prop_img3"]["name"]);
        $_SESSION['success'] = "Property updated successfully";
        header('Location: prop-img.php');
      }
      else
      {
        $_SESSION['success'] = "Property updation failed";
        header('Location: prop-img.php');
      }
    }
  


  // Delete Image. 

if(isset($_POST['delete_btn']))
{
  $user_id =$_POST['delete_id'];
  $query = "DELETE FROM prop_image WHERE id='$user_id' ";
  $query_run = mysqli_query($conn,$query);

  if($query_run)
  {
    $_SESSION['status'] = "Images Deleted Successfully";
    header("Location: prop-img.php");
  }else{
    $_SESSION['status'] = "Images Deletion Failed";
    header("Location: prop-img.php");
  }
}


  // Property Detail



  if(isset($_POST['submit']))
{
  
  $title = $_POST['title'];
  $bedroom = $_POST['bedroom'];
  $hall = $_POST['hall'];
  $kitchen = $_POST['kitchen'];
  $bathroom = $_POST['bathroom'];
  $balcony = $_POST['balcony'];
  $price = $_POST['price'];
  $sqr_price = $_POST['sqr_price'];
  $address = $_POST['address'];
  $video = $_POST['video'];
  $img = $_FILES["image"]['name'];
  $description = $_POST['description'];
  $location = $_POST['location'];
  $property_owner = $_POST['property_owner'];
  $property_type = $_POST['property_type'];
  $lot_size = $_POST['lot_size'];
  $sold = $_POST['sold'];
  $land_area = $_POST['land_area'];


  $query = "INSERT INTO prop_detail (title,bedroom,hall,kitchen,bathroom,balcony,price,sqr_price,address,
            video,image,description,location,property_owner,property_type,lot_size,sold,land_area) 
            VALUES ('$title','$bedroom','$hall','$kitchen','$bathroom','$balcony','$price','$sqr_price','$address',
            '$video','$img','$description','$location','$property_owner','$property_type','$lot_size','$sold','$land_area')";
  
  $query_run = mysqli_query($conn, $query);

      if($query_run)
      {
        move_uploaded_file($_FILES["image"]["tmp_name"], "upload/".$_FILES["image"]["name"]);
        $_SESSION['status'] = "Details Added Successfully";
        header("Location: prop-details.php");
      }
      else  
      {
      $_SESSION['status'] = "Detail insertion Failed";
      header("Location: prop-details.php");
      }
}
  
 // Delete Details. 

 if(isset($_POST['delete_btn']))
{
  $user_id =$_POST['delete_id'];
  $query = "DELETE FROM prop_detail WHERE id='$user_id' ";
  $query_run = mysqli_query($conn,$query);

  if($query_run)
  {
    $_SESSION['status'] = "Details Deleted Successfully";
    header("Location: prop-view.php");
  }else{
    $_SESSION['status'] = "Details Deletion Failed";
    header("Location: prop-view.php");
  }
}
?>
<?php                                   // Add Agent
if(isset($_POST['addagent']))
{
  $name = $_POST['name'];
  $image = $_FILES["profile"]['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

      $user_query = "INSERT INTO agents (name,email,phone,image) VALUES('$name','$email','$phone','$image')";
      $user_query_run = mysqli_query($conn, $user_query);

      if($user_query_run)
      {
      move_uploaded_file($_FILES["profile"]["tmp_name"], "upload/".$_FILES["profile"]["name"]);
        $_SESSION['success'] = "Agent Added Successfully";
        header('Location: agents.php'); 
      }
      else
      {
      $_SESSION['status'] = "Agent addition Failed";
      header("Location: agents.php");
      }
    }
  
  
  else{
    $_SESSION['status'] = "Please enter correct details";
    header("Location: agents.php");
  }


// Edit Agent

if(isset($_POST['updateagent']))
{
  $user_id = $_POST['user_id'];
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $image = $_FILES["profile"]['name'];

  $query = "UPDATE agents SET name='$name', email='$email', phone='$phone',image='$image' WHERE id='$user_id'";
  $query_run= mysqli_query($conn, $query);

  if($query_run)
  {
    move_uploaded_file($_FILES["profile"]["tmp_name"], "upload/".$_FILES["profile"]["name"]);
    $_SESSION['success'] = "Agent Updated";
    header('Location: agents.php');
  }else{
    $_SESSION['status'] = "User Updation Failed";
    header("Location: agents.php");
  }
}
      // Delete User.

if(isset($_POST['deleteuserbtn']))
{
  $user_id =$_POST['delete_id'];
  $query = "DELETE FROM agents WHERE id='$user_id' ";
  $query_run = mysqli_query($conn,$query);

  if($query_run)
  {
    $_SESSION['status'] = "Agent Deleted Successfully";
    header("Location: agents.php");
  }else{
    $_SESSION['status'] = "Agent Deletion Failed";
    header("Location: agents.php");
  }
}
?>


<?php 

if(isset($_POST['replyuser']))
{
  $user_id = $_POST['user_id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $status = $_POST['status'];

  
  

  
      $query = "INSERT INTO contact (status) VALUES($status)";
      $query_run = mysqli_query($conn, $query);

      if($query_run)
      {
        $_SESSION['success'] = "Replied";
        header('Location: message.php'); 
      }
      else
      {
      $_SESSION['status'] = "Replyt sending Failed";
      header("Location: message.php");
      }
    }
  





