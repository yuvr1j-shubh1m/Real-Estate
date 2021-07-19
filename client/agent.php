<?php
  
  include('php/header.php');
  include('php/nav.php');
  include('../admin/config/dbcon.php');
  include('authentic.php');
?> 

    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
            <h1 class="mb-3 bread">Agents</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="home.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Agents <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>



    <section class="ftco-section ftco-agent">
    	<div class="container">
        <div class="row">

		<?php
                  $query = "SELECT * FROM agents";
                  $query_run = mysqli_query($conn, $query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                    foreach ($query_run as $row) {
                    

        ?>
        	<div class="col-md-3 ftco-animate">
            <div class="img d-flex align-items-center justify-content-center"  >
        		
    				
						<?php echo '<img src="../admin/upload/'.$row['image'].'"width="350px" height="380px" alt="image">'?>
	    				</div>
	    				<div class="desc">
	    					<h3><?php echo $row['name'];?></h3>
								<p class="h-info"><span class="ion-ios-filing icon"></span> <span class="details">43 Properties</span></p>
	    				</div>
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
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	
    </section>

<?php  
  include('php/script.php');
  include('php/footer.php');
?>