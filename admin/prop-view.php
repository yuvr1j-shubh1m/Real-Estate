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

   <!--Delete User Modal-->
<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Detail</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="code.php" method="post">
        <div class="modal-body">
          <input type="hidden" name="delete_id" class= "delete_user_id">
          <p>
            Are you sure. You want to delete this Detail.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="delete_btn" class="btn btn-primary">Confirm Delete</button>
        </div>
      </form>
    </div>
  </div>
</div>  







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
          <li class="breadcrumb-item active">View</li>
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
          <h3 class="card-title">View
          </h3>
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


            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th hidden>Id</th>
                  <th>Title</th>
                  <th>Bedroom</th>
                  <th>Hall</th>
                  <th>Kitchen</th>
                  <th>Bathroom</th>
                  <th>Carpet Area</th>
                  <th>Price </th>
                  <th>Address</th>
                  <th>Images</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>               
                <?php
                  $query = "SELECT * FROM prop_detail";
                  $query_run = mysqli_query($conn, $query);

                  if(mysqli_num_rows($query_run) > 0)
                  {
                    foreach ($query_run as $row) {
                    

                ?>
                <tr>
                  <td hidden><?php echo $row['id'];?></td>
                  <td><?php echo $row['title'];?></td>
                  <td><?php echo $row['bedroom'];?></td>
                  <td><?php echo $row['hall'];?></td>
                  <td><?php echo $row['kitchen'];?></td>
                  <td><?php echo $row['bathroom'];?></td>
                  <td><?php echo $row['lot_size'];?></td>
                  <td><?php echo $row['price'];?></td>
                  <td><?php echo $row['address'];?></td>
                  <td><?php echo '<img src="upload/'.$row['image'].'"width="100px" height="50px" alt="image">'?></td>
                  <td><button type="button" value="<?php echo $row['id'];?>" class="btn btn-danger btn-sm deletebtn">Delete</button></td>
                  
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







