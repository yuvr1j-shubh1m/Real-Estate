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

  <!-- Usser Modal -->
<div class="modal fade" id="addusermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
        <form action="code.php" method="post" enctype="multipart/form-data">
          <div class="modal-body">
          <div class="form-group">
              <label for="">Profile Image</label>
                <input type="file" name="profile" class="form-control" id="profile" >
            </div>
            <div class="form-group">
                <label for="">Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Name">
          </div>
          <div class="form-group">
              <label for="">E-mail</label>
                <input type="emil" name="email" class="form-control" placeholder="E-mail" required>
          </div>
          <div class="form-group">
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
                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="adduser" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


  <!--Delete User Modal-->
<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="code.php" method="post">
        <div class="modal-body">
          <input type="hidden" name="delete_id" class= "delete_user_id">
          <p>
            Are you sure. You want to delete this User.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="deleteuserbtn" class="btn btn-primary">Confirm Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>  







  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Admin</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">Admin</li>
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
          <h3 class="card-title">Admin
          </h3>
          <a href="#" data-toggle="modal" data-target="#addusermodal" class="btn btn-primary btn-sm float-right"> Add User </a>
        </div>
  <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th hidden>Id</th>
                  <th>Profile Image</th>
                  <th>Name</th>
                  <th>E-mail</th>
                  <th>Phone</th>
                  
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $query = "SELECT * FROM admin";
                  $query_run = mysqli_query($conn, $query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                    foreach ($query_run as $row) {

                ?>
                <tr>
                  <td hidden><?php echo $row['id'];?></td>
                  <td><?php echo '<img src="upload/'.$row['image'].'"width="70px" height="70px" alt="image">'?></td>
                  <td><?php echo $row['name'];?></td>
                  <td><?php echo $row['email'];?></td>
                  <td><?php echo $row['phone'];?></td>
                  
                  <td>
                    <a href="registered-edit.php?user_id=<?php echo $row['id'];?>" class="btn btn-info btn-sm">Edit</a>
                    <button type="button" value="<?php echo $row['id'];?>" class="btn btn-danger btn-sm deletebtn">Delete</button>
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

<?php include('includes/script.php'); ?>
<script>
  $(document).ready(function(){
    $('.deletebtn').click(function (e) {
      e.preventDefault();

      var user_id= $(this).val();
      $('.delete_user_id').val(user_id);
      $('#DeleteModal').modal('show')
    });
  })
</script>

<?php include('includes/footer.php'); ?>







