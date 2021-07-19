<?php
  session_start();
 
  include('includes/header.php');
  include('includes/topbar.php');
  include('includes/sidebar.php');
  include('config/dbcon.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">



  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        
        <div class="col-sm-6">
        <div class="col-md-12">
           
          </div>
          <h1 class="m-0">Messages</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item active">Messages</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  
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
                  <th>Message</th>
                  <th>status</th>
                
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $query = "SELECT * FROM contact";
                  $query_run = mysqli_query($conn, $query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                    foreach ($query_run as $row) {

                ?>
                <tr>
                  <td hidden><?php echo $row['id'];?></td>
                  <td><?php echo $row['fname'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['mobile'];?></td>
                  <td><?php echo $row['msg'];?></td>
                  <td><?php echo $row['status'];?></td>
                  
                  
                  <td>
                  <button type="submit" name="replyuser" class="btn btn-info btn-sm">Reply</button>
                  </td>
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
</div>

<?php include('includes/script.php'); ?>
<?php include('includes/footer.php'); ?>
