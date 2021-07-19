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
          <h1 class="m-0">Registered Users</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">Registered Users</li>
            <li class="breadcrumb-item active">Home</li>
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
      <?php
        if(isset($_SESSION['status']))
        {
          echo "<h5>".$_SESSION['status']."</h5>";
          unset($_SESSION['status']);
        }
      ?>
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Registered Users
          </h3>
         
        </div>
  <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th hidden>Id</th>
                  
                  <th>Name</th>
                  <th>E-mail</th>
                  <th>Phone</th>
                  
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $query = "SELECT * FROM users";
                  $query_run = mysqli_query($conn, $query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                    foreach ($query_run as $row) {

                ?>
                <tr>
                  <td hidden><?php echo $row['id'];?></td>
                  
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['phone'];?></td>
                  <td><?php echo $row['vstatus'];?></td>
                  
                </tr>
                <?php
                    }
                  }
                  else{
                ?>
                <tr>
                  <td>NO RECORD FOUND</td>
                </tr>

                <?php
                  }
                ?>


              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('includes/script.php'); ?>


<?php include('includes/footer.php'); ?>







