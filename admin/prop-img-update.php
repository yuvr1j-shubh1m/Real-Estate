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
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
           
            <li class="breadcrumb-item active">Edit Property</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->


<!-- Main content -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Edit Property
          </h3>
          <a href="prop-img.php" class="btn btn-danger btn-sm float-right"> Back </a>
          </div>
  <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <form action="code.php" method="post" enctype="multipart/form-data">
                  <div class="modal-body">
                    <?php
                      if(isset($_GET['user_id']))
                      {
                        $user_id= $_GET['user_id'];
                        $query= "SELECT * FROM prop_image WHERE id='$user_id' LIMIT 1 ";
                        $query_run= mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                          foreach ($query_run as $row) {
                            ?>
                            
                            <input type="hidden" name="user_id" value="<?php echo $row['id'] ?>">
                              <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title" value="<?php echo $row['title'] ?>" class="form-control" placeholder="Title">
                              </div>
                              <div class="form-group">
                                <label for="">Image1</label>
                                <input type="file" name="prop_img1" value="<?php echo $row['image1'] ?>" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="">Image2</label>
                                <input type="file" name="prop_img2" value="<?php echo $row['image2'] ?>" class="form-control">
                              </div>
                              <div class="form-group">
                                <label for="">Image3</label>
                                <input type="file" name="prop_img3" value="<?php echo $row['image3'] ?>" class="form-control">
                              </div>
                              <div class="modal-footer">
                                <button type="submit" name="updateimage" class="btn btn-info">Update</button>
                              </div>

                            <?php
                          }
                        }else{
                          echo "<h4> No Record Found!!!</h4>";
                        }
                      }

                    ?>

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


