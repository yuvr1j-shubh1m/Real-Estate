<?php
 
  include('php/header.php');
  include('php/nav.php');
  include('../admin/config/dbcon.php');
  include('authentic.php');
?> 




    <div class="hero-wrap" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
	  
        <div class="row no-gutters slider-text justify-content-center align-items-center">
          <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-end">
          	<div class="text text-center w-100">
			  <h3> <?php
							if(isset($_SESSION['status']))
							{
								?>
								<div class="alert alert-danger">
									<h5><?= $_SESSION['status']; ?></h5>
								</div>
								<?php
								unset($_SESSION['status']);
							}?> 

	            <h1 class="mb-4">Find Properties <br>At The Reasonable Rate</h1>
	            <p><a href="#" class="btn btn-primary py-3 px-4">Search Properties</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="mouse">
				<a href="#" class="mouse-icon">
					<div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
				</a>
			</div>
    </div>


    <section class="ftco-section ftco-no-pb">
    	<div class="container">
	    	<div class="row">
					<div class="col-md-12">

						
						
						<div class="search-wrap-1 ftco-animate">
							<form action="dbcode.php" method="POST" class="search-property-1">
		        		<div class="row">
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Loaction</label>
		        					<div class="form-field">
									<div class="select-wrap">
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="city" id="city" class="form-control">
		                      	<option value="">City</option>
		                        <option value="">Agra</option>
		                        <option value="">Ahmedabad</option>
								<option value="">Ajmer</option>
								<option value="">Ambala</option>
		                        <option value="">Amritsar</option>
		                        <option value="">Aurangabad</option>
		                        <option value="">Bangalore</option>
		                        <option value="">Bareilly</option>
								<option value="">Bhilai</option>
								<option value="">Bhopal</option>
								<option value="">Bhubaneshwar</option>
								<option value="">Bodhgaya</option>
								<option value="">Calicut</option>
								<option value="">Chandigarh</option>
								<option value="">Chennai</option>
								<option value="">Chitrakoot</option>
								<option value="">Coimbatore</option>
								<option value="">Dalhousie</option>
								<option value="">Darjeeling</option>
								<option value="">Dehradun</option>
								<option value="">Dharamshala</option>
								<option value="">Durgapur</option>
								<option value="">Dwarka</option>
								<option value="">Gandhinagar</option>
								<option value="">Ghaziabad</option>
								<option value="">Goa</option>
								<option value="">Greater Noida</option>
								<option value="">Gurugram</option>
								<option value="">Gwalior</option>
								<option value="">Hubli</option>
								<option value="">Hyderabad</option>
								<option value="">Imphal</option>
								<option value="">Indore</option>
								<option value="">Jabalpur</option>
								<option value="">Jaipur</option>
								<option value="">Jalandhar</option>
								<option value="">Jamshedpur</option>
								<option value="">Jhansi</option>
								<option value="">Jodhpur</option>
								<option value="">Kanpur</option>
								<option value="">Karnal</option>
								<option value="">Kedarnath</option>
								<option value="">Khajuraho</option>
								<option value="">Kodaikanal</option>
								<option value="">Kolkata</option>
								<option value="">Kota</option>
								<option value="">Lucknow</option>
								<option value="">Ludhiana</option>
								<option value="">Madurai</option>
								<option value="">Manglore</option>
								<option value="">Mohali</option>
								<option value="">Mumbai </option>
								<option value="">Mussoorie</option>
								<option value="">Mysore</option>
								<option value="">Nagpur</option>
								<option value="">Nainital</option>
								<option value="">Nasik</option>
								<option value="">Navi Mumbai</option>
								<option value="">New Delhi</option>
								<option value="">Noida</option>
								<option value="">Panchkula</option>
								<option value="">Patiala</option>
								<option value="">Patna</option>
								<option value="">Pune</option>
								<option value="">Puri</option>
								<option value="">Rai Bareilly</option>
								<option value="">Raipur</option>
								<option value="">Rajkot</option>
								<option value="">Ranchi</option>
								<option value="">Rishikesh</option>
								<option value="">Shimla</option>
								<option value="">Surat</option>
								<option value="">Udaipur</option>
								<option value="">Ujjain</option>
								<option value="">Vadodara</option>
								<option value="">Vapi</option>
								<option value="">Varanasi</option>
								<option value="">Vellore</option>
								<option value="">Vijaywada</option>
								<option value="">Vishakapatnam</option>
								<option value="">Wayanad</option>

		                      </select>
		                    </div>
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Property Type</label>
		        					<div class="form-field">
		          					<div class="select-wrap">
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="type" id="type" class="form-control">
		                      	<option value="">Type</option>
		                        <option value="">Commercial</option>
		                        <option value="">Office</option>
		                        <option value="">Residential</option>
		                        <option value="">Villa</option>
		                        <option value="">Condominium</option>
		                        <option value="">Apartment</option>
		                      </select>
		                    </div>
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Property Status</label>
		        					<div class="form-field">
		          					<div class="select-wrap">
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="stat" id="stat" class="form-control">
		                      	<option value="">Status</option>
		                        <option value="">Rent</option>
		                        <option value="">Sale</option>
		                      </select>
		                    </div>
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-items-end">
		        				<div class="form-group">
		        					<label for="#">Price Limit</label>
		        					<div class="form-field">
		          					<div class="select-wrap">
		                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
		                      <select name="price" id="price" class="form-control">
		                        <option value="">Price</option>
								<option value="">Rs.5,000</option>
		                        <option value="">Rs.10,000</option>
								<option value="">Rs.20,000</option>
		                        <option value="">Rs.50,000</option>
		                        <option value="">Rs.100,000</option>
		                        <option value="">Rs.200,000</option>
		                        <option value="">Rs.300,000</option>
		                        <option value="">Rs.400,000</option>
		                        <option value="">Rs.500,000</option>
		                        <option value="">Rs.600,000</option>
		                        <option value="">Rs.700,000</option>
		                        <option value="">Rs.800,000</option>
		                        <option value="">Rs.900,000</option>
		                        <option value="">Rs.1,000,000</option>
		                        <option value="">Rs.2,000,000</option>
		                      </select>
		                    </div>
				              </div>
			              </div>
		        			</div>
		        			<div class="col-lg align-self-end">
		        				<div class="form-group">
		        					<div class="form-field">
				                <input type="submit" name="srch_prop" value="Search Property" class="form-control btn btn-primary">
				              </div>
			              </div>
		        			</div>
		        		</div>
		        	</form>
		        </div>
					</div>
	    	</div>
	    </div>
    </section>

    <section class="ftco-section goto-here">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">What we offer</span>
            <h2 class="mb-2">Exclusive Offer For You</h2>
          </div>
        </div>
        <div class="row" >
		

		
		<?php
                  $query = "SELECT * FROM prop_detail";
                  $query_run = mysqli_query($conn, $query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                    foreach ($query_run as $row) {
                    

        ?>
		
        	<div class="col-md-4">
				<div class="property-wrap ftco-animate">
        				<div class="img d-flex align-items-center justify-content-center"  > 
						<a href="properties-single.html">
						<?php echo '<img src="../admin/upload/'.$row['image'].'"width="380px" height="250px" alt="image">'?>
        					</a>
        				<div class="list-agent d-flex align-items-center">
        					<a href="#" class="agent-info d-flex align-items-center">
        						<div class="img-2 rounded-circle" style="background-image: url(images/person_1.jpg);"></div>
        						<h3 class="mb-0 ml-2">Raj Keshri</h3>
        					</a>
        					<div class="tooltip-wrap d-flex">
        						<a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Bookmark">
        							<span class="ion-ios-heart"><i class="sr-only">Bookmark</i></span>
        						</a>
        						<a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Compare">
        							<span class="ion-ios-eye"><i class="sr-only">Compare</i></span>
        						</a>
        					</div>
        				</div>
        			</div>
        			<div class="text">
        				<p class="price mb-3"><span class="old-price">₹ 8,000</span><span class="orig-price">₹<?php echo $row['price'];?><small>/mo</small></span></p>
        				<h3 class="mb-0"><a href="properties-single.html"><?php echo $row['title'];?></a></h3>
        				<span class="location d-inline-block mb-3"><i class="ion-ios-pin mr-2"></i><?php echo $row['address'];?></span>
        				<ul class="property_list">
        					<li><span class="flaticon-bed"></span><?php echo $row['bedroom'];?></li>
        					<li><span class="flaticon-bathtub"></span><?php echo $row['bathroom'];?></li>
        					<li><span class="flaticon-floor-plan"></span><?php echo $row['lot_size'];?></li>
        				</ul>
        			</div>
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
    </section>

    <section class="ftco-section ftco-fullwidth">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Services</span>
            <h2 class="mb-2">Why Choose Us?</h2>
          </div>
        </div>
    	</div>
    	<div class="container-fluid px-0">
    		<div class="row d-md-flex text-wrapper align-items-stretch">
					<div class="one-half mb-md-0 mb-4 img d-flex align-self-stretch" style="background-image: url('images/about.jpg');"></div>
					<div class="one-half half-text d-flex justify-content-end align-items-center">
						<div class="text-inner pl-md-5">
							<div class="row d-flex">
			          <div class="col-md-12 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services-wrap d-flex">
			            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-piggy-bank"></span></div>
			              <div class="media-body pl-4">
			                <h3>No Downpayment</h3>
			                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			              </div>
			            </div>
			          </div>
			          <div class="col-md-12 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services-wrap d-flex">
			            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-wallet"></span></div>
			              <div class="media-body pl-4">
			                <h3>All Cash Offer</h3>
			                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			              </div>
			            </div>
			          </div>
			          <div class="col-md-12 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services-wrap d-flex">
			            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-file"></span></div>
			              <div class="media-body pl-4">
			                <h3>Experts in Your Corner</h3>
			                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			              </div>
			            </div>
			          </div>
			          <div class="col-md-12 d-flex align-self-stretch ftco-animate">
			            <div class="media block-6 services-wrap d-flex">
			            	<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-locked"></span></div>
			              <div class="media-body pl-4">
			                <h3>Locked in Pricing</h3>
			                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
			              </div>
			            </div>
			          </div>
			        </div>
            </div>
					</div>
    		</div>
    	</div>
    </section>

		<section class="ftco-counter ftco-section img" id="section-counter">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="305">0</strong>
                <span>Area <br>Population</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="1090">0</strong>
                <span>Total <br>Properties</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="209">0</strong>
                <span>Average <br>House</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="67">0</strong>
                <span>Total <br>Branches</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Find Properties</span>
            <h2 class="mb-2">Find Properties In Your City</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4">
        		<div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(images/listing-1.jpg);">
        			<div class="location">
        				<span class="rounded">Mumbai, India</span>
        			</div>
        			<div class="text">
        				<h3><a href="#">100 Property Listing</a></h3>
        				<a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(images/listing-2.jpg);">
        			<div class="location">
        				<span class="rounded">Delhi, India</span>
        			</div>
        			<div class="text">
        				<h3><a href="#">100 Property Listing</a></h3>
        				<a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(images/listing-3.jpg);">
        			<div class="location">
        				<span class="rounded">Kolkata, India</span>
        			</div>
        			<div class="text">
        				<h3><a href="#">100 Property Listing</a></h3>
        				<a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(images/listing-4.jpg);">
        			<div class="location">
        				<span class="rounded">Bhopal, India</span>
        			</div>
        			<div class="text">
        				<h3><a href="#">100 Property Listing</a></h3>
        				<a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(images/listing-5.jpg);">
        			<div class="location">
        				<span class="rounded">Banglore, India</span>
        			</div>
        			<div class="text">
        				<h3><a href="#">100 Property Listing</a></h3>
        				<a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
        			</div>
        		</div>
        	</div>
        	<div class="col-md-4">
        		<div class="listing-wrap img rounded d-flex align-items-end" style="background-image: url(images/listing-6.jpg);">
        			<div class="location">
        				<span class="rounded">Ranchi, India</span>
        			</div>
        			<div class="text">
        				<h3><a href="#">100 Property Listing</a></h3>
        				<a href="#" class="btn-link">See All Listing <span class="ion-ios-arrow-round-forward"></span></a>
        			</div>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Vishal Sharma</p>
		                    <span class="position">Founder & Director</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Raj Keshri</p>
		                    <span class="position">Co-Founder & CEO</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Sauhard Mishra</p>
		                    <span class="position">Co-Founder & Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Arpit Dhakad</p>
		                    <span class="position">C.T.O</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
                    	<div class="pl-3">
		                    <p class="name">Priyank Patidar</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-agent">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<span class="subheading">Agents</span>
            <h2 class="mb-4">Our Agents</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3 ftco-animate">
        		<div class="agent">
    					<div class="img">
		    				<img src="images/team-1.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a href="properties.html">Arpit Dhakad</a></h3>
								<p class="h-info"><span class="ion-ios-filing icon"></span> <span class="details">43 Properties</span></p>
	    				</div>
    				</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="agent">
    					<div class="img">
		    				<img src="images/team-2.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a href="properties.html">Raj Keshri</a></h3>
								<p class="h-info"><span class="ion-ios-filing icon"></span> <span class="details">28 Properties</span></p>
	    				</div>
    				</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="agent">
    					<div class="img">
		    				<img src="images/team-3.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a href="properties.html">Disha Khandelwal</a></h3>
								<p class="h-info"><span class="ion-ios-filing icon"></span> <span class="details">30 Properties</span></p>
	    				</div>
    				</div>
        	</div>
        	<div class="col-md-3 ftco-animate">
        		<div class="agent">
    					<div class="img">
		    				<img src="images/team-4.jpg" class="img-fluid" alt="Colorlib Template">
	    				</div>
	    				<div class="desc">
	    					<h3><a href="properties.html">Priya Malhotra</a></h3>
								<p class="h-info"><span class="ion-ios-filing icon"></span> <span class="details">25 Properties</span></p>
	    				</div>
    				</div>
        	</div>
        </div>
    	</div>
    </section>


    <section class="ftco-section ftco-no-pt">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text">
              	<a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_1.jpg');">
	              </a>
                <h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta mb-3">
                  <div><a href="www.inetworkhub.com">December 17, 2020</a></div>
                  <div><a href="www.inetworkhub.com">Admin</a></div>
                  <div><a href="www.inetworkhub.com" class="meta-chat"><span class="icon-chat"></span> 9</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text">
              	<a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_2.jpg');">
	              </a>
                <h3 class="heading"><a href="www.inetworkhub.com">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta mb-3">
                  <div><a href="www.inetworkhub.com">December 17, 2020</a></div>
                  <div><a href="www.inetworkhub.com">Admin</a></div>
                  <div><a href="www.inetworkhub.com" class="meta-chat"><span class="icon-chat"></span> 5</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text">
              	<a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_3.jpg');">
	              </a>
                <h3 class="heading"><a href="www.inetworkhub.com">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta mb-3">
                  <div><a href="www.inetworkhub.com">December 20, 2020</a></div>
                  <div><a href="www.inetworkhub.com">Admin</a></div>
                  <div><a href="www.inetworkhub.com" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <div class="text">
              	<a href="blog-single.html" class="block-20 img" style="background-image: url('images/image_4.jpg');">
	              </a>
                <h3 class="heading"><a href="www.inetworkhub.com">Why Lead Generation is Key for Business Growth</a></h3>
                <div class="meta mb-3">
                  <div><a href="www.inetworkhub.com">December 25, 2020</a></div>
                  <div><a href="www.inetworkhub.com">Admin</a></div>
                  <div><a href="www.inetworkhub.com" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
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