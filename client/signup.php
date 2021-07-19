    <?php
      session_start();
      include('php/header.php');

    ?> 
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
          <div class="overlay-2"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
                    <h1 class="mb-3 bread">Sign Up</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Sign Up <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
                </div>
            </div>
    </section>

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="home.php">INH Real Estate</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
	          
	          <li class="nav-item"><a href="properties.php" class="nav-link">Listing</a></li>
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
			  <li class="nav-item dropdown"><a href="login.php" class="nav-link dropdown-toggle" id ="navbarDropdown"><img src="man.png" width="25px" height="25px"> </a>
			  	<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				
					<a class="dropdown-item" href="login.php">Login</a>  
					
					 
					
				</div>
			  </li>

	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6">
        <div class="alert">
        <?php 
            if(isset($_SESSION['status']))
            {
              ?>
              <div class = "alert alert-success">
              <h4><?= $_SESSION['status']; ?></h4>
              </div>
              <?php
              unset($_SESSION['status']);
            }
          
          ?>
        </div>
          <div class="card shadow">
            <div class="card-body">
            <form action="dbcode.php" method="POST">
              
                <div class="form-group md-8">
                    <label for="">Name</label>
                      <input type="text" name="name" class="form-control" placeholder="Name">
              </div>
              <div class="form-group md-8">
                  <label for="">E-mail</label>
                    <input type="emil" name="email" class="form-control" placeholder="E-mail" required>
              </div>
              <div class="form-group md-8">
                <label for="">Phone</label>
                  <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
              </div>
              <div class="row">
                <div class= "col-md-6">
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                  </div>
                </div>
                <div class= "col-md-6">
                  <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" required>
                  </div>
                </div>
                
                  
                </div>
                <div class="row justify-content-center">
                  <div class="form-group">
                  <button type="submit" name="signup_btn" class="btn btn-primary"> Sign Up </button>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="form-group">
                    <p>Already a Member? <a href="login.php">Login</a>
                  </div>
                </div>
            
          </div>
        </div>
      </div>



    <?php  
      include('php/script.php');
      include('php/footer.php');
    ?>