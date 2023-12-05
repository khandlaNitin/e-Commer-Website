<?php
include 'header.php'; 

//$query = "SELECT * FROM product JOIN product_category WHERE product.product_cat = product_category.id AND status ='Active'";  
$query = "SELECT * FROM product JOIN product_category WHERE product.product_cat = product_category.id ";

//$contact = "SELECT * FROM form JOIN contact WHERE form.id = contact.user_id AND form.id='$id'"; 
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
            <h1 class="m-0">Product</h1>
          </div><!-- /.col -->
           <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
              <a href="product_add.php" class="btn btn-primary">Add Product</a>
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
                <h3 class="card-title">Product View</h3>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product SKU</th>
                    <th>Product Description</th>
                    <th>Product Image</th>
                    <th>Product Category</th>
                    <th>Product Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($row as $data) { //print_r($data) ?>
                  <tr>
                     <td><?php echo $data['id']; ?></td>
                     <td><?php echo $data['product_name']; ?></td>
                     <td><?php echo $data['product_price']; ?></td>
                     <td><?php echo $data['product_sku']; ?></td>
                     <td><?php echo $data['product_desc']; ?></td>
                     <td>                      
                      <img src="./product_img/<?php echo $data['product_image']; ?>" style="height: 50px;">
                     </td>
                      <td><?php echo $data['cat_name']; ?></td>
                     <td><?php if($data['status'] == "Active"){ ?>
                        <span class="btn btn-sm btn-success"><?php echo $data['status']; ?></span>
                      <?php } else{ ?>
                        <span class="btn btn-sm btn-danger"><?php echo $data['status']; ?></span>
                      <?php } ?>
                      </td>     
                     <td colspan="2">
                        <a href="product_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-sm btn-success"><i class="fa-solid fa-pen-to-square"></i></a> 
                        <a href="product_delete.php?id=<?php echo $data['id']; ?>" onclick="return ConfirmDelete()" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash"></i></a> 
                   
                    </td> 
                  </tr>
                  <?php } ?>
                 
                  
                  </tbody>
                  <tfoot>
                  <tr>
                   <th>Id</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product SKU</th>
                    <th>Product Description</th>
                    <th>Product Image</th>
                    <th>Product Category</th>
                    <th>Product Status</th>
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
            return confirm("Product Delete...?");
      }
  </script> 
<?php include 'footer.php'; ?>