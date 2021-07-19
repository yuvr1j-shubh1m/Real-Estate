<?php
  
  include('php/header.php');
  include('php/nav.php');
  include('authentic.php');
  include('../admin/config/dbcon.php');
?> 

    
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
            <h1 class="mb-3 bread">Properties Details</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Properties Details<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

	<?php
                  $query = "SELECT * FROM prop_detail";
                  $query_run = mysqli_query($conn, $query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                    foreach ($query_run as $row) {
                    

    ?>

    <section class="ftco-section ftco-property-details">
      <div class="container">
      	<div class="row justify-content-center">
      		<div class="col-md-12">
      			<div class="property-details">
      				<div class="img rounded"> <?php echo '<img src="../admin/upload/'.$row['image'].'"width="1220px" height="640px" alt="image">'?></div>
      				<div class="text">
      					<h2><?php echo $row['title'];?></h2>
      					<span class="subheading"><?php echo $row['address'];?></span>
      				</div>
      			</div>
      		</div>
      	</div>
      	<div class="row">
      		<div class="col-md-12 pills">
						<div class="bd-example bd-example-tabs">
							<div class="d-flex">
							  <ul class="nav nav-pills mb-2" id="pills-tab" role="tablist">

							    <li class="nav-item">
							      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Features</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Description</a>
							    </li>
							    
							  </ul>
							</div>

						  <div class="tab-content" id="pills-tabContent">
						    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
						    	<div class="row">
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark-circle"></span>Lot Area:<?php echo $row['lot_size'];?></li>
											<li class="check"><span class="ion-ios-checkmark-circle"></span>Carpet Area: <?php echo $row['land_area'];?></li>
						    				<li class="check"><span class="ion-ios-checkmark-circle"></span>Bed Rooms: <?php echo $row['bedroom'];?></li>
						    				<li class="check"><span class="ion-ios-checkmark-circle"></span>Bath Rooms: <?php echo $row['bathroom'];?></li>
						    				<li class="check"><span class="ion-ios-checkmark-circle"></span>Dinning Hall: <?php echo $row['hall'];?> </li>
						    				
						    			</ul>			
						    		</div>
						    		<div class="col-md-4">			
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark-circle"></span>Kitchen: <?php echo $row['kitchen'];?></li>
						    				<li class="check"><span class="ion-ios-checkmark-circle"></span>Year Build: <?php echo $row['balcony'];?></li>
						    				<li class="check"><span class="ion-ios-checkmark-circle"></span>Water</li>
						    				<li class="check"><span class="ion-ios-checkmark-circle"></span>Stories: 2</li>
						    				<li class="check"><span class="ion-ios-checkmark-circle"></span>Roofing: New</li>
						    			</ul>
						    		</div>
						    		
						    	</div>
						    </div>

							

						    <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
						      <p><?php echo $row['description'];?></p>
						    </div>

							<?php
                    }
                  }
                  else{
                ?>

				<?php
                  }
                ?>	

						    
						  </div>
						</div>
		      </div>
				</div>
      </div>
    </section>
		

<?php  
  include('php/script.php');
  include('php/footer.php');
?>