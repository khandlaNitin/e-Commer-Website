<?php
include 'header.php'; 

//$query = "SELECT * FROM order_data INNER JOIN user WHERE order_data.user_id = user.id";  
$query = "SELECT first_name,last_name,order_data.id,order_data.user_id,order_data.product_id,order_data.product_name, order_data.product_price,order_data.name,order_data.gender,order_data.email,order_data.pincode,order_data.city,order_data.address,order_data.mono,order_data.status FROM order_data JOIN user WHERE order_data.user_id = user.id ";  
$row = mysqli_query($conn, $query);


//JOIN product ON product.id = order_data.product_id
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
            <h1 class="m-0">Order View</h1>
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
                <h3 class="card-title">Order Category</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Product Id</th>
                    <th>User Name</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Eamil</th>
                    <th>Pincode</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Mo No</th>
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
                     <td><?php echo $data['product_price']; ?></td>
                     <td><?php echo $data['name']; ?></td>
                     <td><?php echo $data['gender']; ?></td>
                     <td><?php echo $data['email']; ?></td>
                     <td><?php echo $data['pincode']; ?></td>
                     <td><?php echo $data['city']; ?></td>
                     <td><?php echo $data['address']; ?></td>
                     <td><?php echo $data['mono']; ?></td>                     
                      <td><?php if($data['status'] == "Completed"){ ?>
                        <span class="btn btn-sm btn-success"><?php echo $data['status']; ?></span>
                      <?php } else{ ?>
                        <span class="btn btn-sm btn-warning"><?php echo $data['status']; ?></span>
                      <?php } ?>
                      </td>                       
                      <td colspan="2">                        
                         <a href="status_update.php?id=<?php echo $data['id']; ?>" onclick="return ConfirmUpdate()" class="btn btn-success btn-sm"><i class="fa-solid fa-check"></i></a>                   
                        <!-- <a href="delete_cart.php?id=<?php echo $data['id']; ?>" onclick="return ConfirmDelete()" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>  --> 
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
                    <th>Product Price</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Eamil</th>
                    <th>Pincode</th>
                    <th>City</th>
                    <th>Address</th>
                    <th>Mo No</th>
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
  
      function ConfirmUpdate(){
        return confirm("Order Pending Status to Completed...?");
      }
      function ConfirmDelete()
      {
            return confirm("Category Delete...?");
      }
  </script> 
<?php include 'footer.php'; ?>