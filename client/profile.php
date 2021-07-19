<?php
  session_start();

  include('php/header.php');
  include('php/nav.php');
?> 
<section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
            <h1 class="mb-3 bread">Profile</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Profile<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>




    <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card shadow">
        <div class="card-body">
           
                <hr>
                    <h3 align="center"> Username: <?= $_SESSION['auth_user']['username']; ?> </h3>
                    <h3 align="center"> Email: <?= $_SESSION['auth_user']['email']; ?> </h3>
                    <h3 align="center"> Phone: <?= $_SESSION['auth_user']['phone']; ?> </h3>
               
            
        </div>
      </div>
    </div>
    </div>
    </div>   


<?php  
	include('php/script.php');
	include('php/footer.php');
?>
   