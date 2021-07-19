<?php
  session_start();
  include('auth.php');
  include('includes/header.php');
  include('includes/topbar.php');
  include('includes/sidebar.php');
  include('config/dbcon.php');
  
?>
  


     <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1 class="m-0">Properties</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Properties</li>
            <li class="breadcrumb-item active">Details</li>
            </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->  
    <div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php
        if(isset($_SESSION['status']))
        {
          echo "<h5>".$_SESSION['status']."</h5>";
          unset($_SESSION['status']);
        }
      ?>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Details</h3>
        </div>
  <!-- /.card-header -->
          <div class="card-body">
            <?php
              if(isset($_SESSION['success']) && $_SESSION['success'] !='')
              {
                echo '<h3 class="bg-primary text-white"> '.$_SESSION['success'].' </h3>';
                unset($_SESSION['success']);
              }
              if(isset($_SESSION['status']) && $_SESSION['status'] !='')
              {
                echo '<h3 class="bg-danger text-white"> '.$_SESSION['status'].' </h3>';
                unset($_SESSION['status']);
              }
            ?>              
                    
                    <div class="body">
                        <form method="post" action="code.php" enctype="multipart/form-data">
                            <div class="row clearfix">

                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input required type="text" name="title" class="form-control" placeholder="Property Title">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input required type="text" name="property_owner" class="form-control" placeholder="Property Owner">
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input required type="text" name="property_type" class="form-control" placeholder="Property Type">
                                            
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input required type="text" name="lot_size" class="form-control" placeholder="Plot Size (in sq.ft)">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input required type="text" name="purpose" class="form-control" placeholder="Purpose : Rent/Sell">
                                            
                                        </div>
                                    </div>
                                </div>

                               

                                     

                                        <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                            <div class="form-group form-float">
                                                <div class="form-line">
                                                    <input required type="text" name="land_area" class="form-control" placeholder="Carpet Area (/sq.Ft)">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    
                                    
                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="price" class="form-control" placeholder="Price(₹)">
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="sqr_price" class="form-control" placeholder="Price(₹)/Sq. feet">
                                                
                                            </div>
                                        </div>
                                    </div>

                                    
                                    

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" name="address" class="form-control" placeholder="Address">
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <textarea required name="description" class="form-control" placeholder="Description"></textarea>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" required name="video" placeholder="Add Video Link">
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" required name="location" placeholder="Add Location Link">
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="custom-file">
                                            <label class="form-label">Add Property Image</label>
                                            <input name="image"  type="file" multiple />
                                    
                                        </div>            
                                    </div>
                                    

                                    <div class="col-md-12" style="text-align: center;">
                                       
                                
                                
                           
                                            
                               </div></br>

                            
                                <div class="card-header" style="text-align: center;" >
                                    <h3 class="card-title" >Features</h3>
                                </div>                 
                               



                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6"></br>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="kitchen" class="form-control" placeholder="Kitchen">
                                               
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6"></br>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="hall" class="form-control" placeholder="Dining Hall">
                                                
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="bedroom" class="form-control" placeholder="Bedroom">
                                                
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="bathroom" class="form-control" placeholder="Bathroom">
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-3 col-sm-3 col-xs-6">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input required type="number" name="balcony" class="form-control" placeholder="Balcony">
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12" style="text-align: center;">
                             
                                     
                                        <input type="submit" name="submit" class="btn btn-primary btn-lg m-l-15 waves-effect" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('includes/script.php'); ?>
<?php include('includes/footer.php'); ?>
