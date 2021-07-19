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
          <h1 class="m-0">Agents</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
           
            <li class="breadcrumb-item active">Edit Agent</li>
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
          <h3 class="card-title">Edit Agent
          </h3>
          <a href="registered.php" class="btn btn-danger btn-sm float-right"> Back </a>
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
                        $query= "SELECT * FROM agents WHERE id='$user_id' LIMIT 1 ";
                        $query_run= mysqli_query($conn, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                          foreach ($query_run as $row) {
                            ?>
                              
                              <input type="hidden" name="user_id" value="<?php echo $row['id'] ?>">
                              
                              <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" value="<?php echo $row['name'] ?>" class="form-control" placeholder="Name">
                              </div>
                              <div class="form-group">
                                <label for="">E-mail</label>
                                <input type="emil" name="email" value="<?php echo $row['email'] ?>" class="form-control" placeholder="E-mail">
                              </div>
                              <div class="form-group">
                                <label for="">Phone</label>
                                <input type="tel" name="phone" value="<?php echo $row['phone'] ?>" class="form-control" placeholder="Phone">
                              </div>
                              <div class="form-group">
                                <label for="">Profile Image</label>
                                  <input type="file" name="profile" class="form-control" id="profile" required>
                              </div>
                             
                              <div class="modal-footer">
                                <button type="submit" name="updateagent" class="btn btn-info">Update</button>
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


