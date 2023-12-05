<?php
include 'header.php'; 

//$query = "SELECT * FROM add_to_cart INNER JOIN user WHERE add_to_cart.user_id = user.id";  
$query = "SELECT first_name,last_name,email,add_to_cart.id,add_to_cart.user_id,add_to_cart.product_id,add_to_cart.product_name, add_to_cart.quantity, add_to_cart.product_price, add_to_cart.product_image,add_to_cart.status FROM add_to_cart JOIN user ON user.id = add_to_cart.user_id ";  
$row = mysqli_query($conn, $query);

?>

<?php ?>
<?php include 'sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Cart View</h1>
          </div><!-- /.col -->
           <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
              <!-- <a href="category_add.php" class="btn btn-primary">Add Category</a> -->
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">View Category</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Product Id</th>
                    <th>User Name</th>
                    <th>Product Name</th>
                    <th>Product Quantity</th>
                    <th>Product Price</th>
                    <th>Product Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($row as $data) { //print_r($data)?>
                  <tr>
                     <td><?php echo $data['id']; ?></td>
                     <td><?php echo $data['product_id']; ?></td>
                     <td><?php echo $data['first_name']." " .$data['last_name'] ?></td>
                     <td><?php echo $data['product_name']; ?></td>
                     <td><?php echo $data['quantity']; ?></td>
                     <td><?php echo $data['product_price']; ?></td>
                     <td>
                      <img src="./product_img/<?php echo $data['product_image']; ?>" style="height: 50px;">
                     </td>
                     <td><?php if($data['status'] == "Completed"){ ?>
                        <span class="btn btn-sm btn-success"><?php echo $data['status']; ?></span>
                      <?php } else{ ?>
                        <span class="btn btn-sm btn-warning"><?php echo $data['status']; ?></span>
                      <?php } ?>
                      </td>       
                      <td colspan="2">                        
                        <a href="delete_cart.php?id=<?php echo $data['id']; ?>" onclick="return ConfirmDelete()" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>                   
                    </td> 
                  </tr>
                  <?php } ?>
                 
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Product Id</th>
                    <th>User Name</th>
                    <th>Product Name</th>
                    <th>Product Quantity</th>
                    <th>Product Price</th>
                    <th>Product Image</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>  
          </div>
          
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <script type="text/javascript">
      function ConfirmDelete()
      {
            return confirm("Category Delete...?");
      }
  </script> 
<?php include 'footer.php'; ?>