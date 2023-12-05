<?php
ob_start();
include 'header.php';

$query = "SELECT * FROM product_category";  
$row = mysqli_query($conn, $query);


if (isset($_POST["submit"])) {

  $product_img =$_FILES["product_image"]["name"];
  $temp_file =$_FILES["product_image"]["tmp_name"];
  $folder = "product_img/".$product_img;
  //echo $folder; if($temp_file !== false) {
    move_uploaded_file($temp_file, $folder);  

  $product_name = $_POST['product_name'];
  $product_price = $_POST['product_price'];
  $product_sku = $_POST['product_sku'];
  $product_desc = $_POST['product_desc'];
  $product_cat = $_POST['product_cat'];
  $product_image = $product_img;
  $status = $_POST['status'];

$product_query = "insert into product (product_name,product_price,product_sku,product_desc,product_cat,product_image,status) values ('$product_name','$product_price','$product_sku','$product_desc','$product_cat','$product_image','$status')";
  //print_r($product_query); exit();
  $product_row = mysqli_query($conn, $product_query);
    if($product_row > 0 )
    {
    //echo "<br/><br/><span>Product Inserted successfully...!!</span>";
    //header("Location:product_view.php");?>
    <script type="text/javascript">
      window.location = "product_view.php";
    </script>
    <?php
  }else{
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
  }
}


ob_end_flush(); 
?>

<?php include 'sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-3"></div>
          <div class="col-6">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Product Add</h3>
              </div>              
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter Product Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Price</label>
                    <input type="number" class="form-control" id="product_price" name="product_price" placeholder="Enter Product Price">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Product SKU</label>
                    <input type="text" class="form-control" id="product_sku" name="product_sku" placeholder="Enter Product SKU">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Product Description</label>
                    <textarea class="form-control" id="product_desc" name="product_desc" rows="4" placeholder="Enter Product SKU"></textarea>
                  </div>
                  <div class="form-group">
                        <label>Product Category</label>
                        <select class="form-control" id="product_cat" name="product_cat">
                          <option>---SELECT---</option>
                          <?php foreach ($row as $data) { ?>
                          <option value="<?php echo $data['id'] ?>"><?php echo $data['cat_name'] ?></option>
                        <?php } ?>
                        </select>
                      </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Product Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                      <input type="file" class="custom-file-input" id="product_image" name="product_image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <!-- <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div> -->
                    </div>
                  </div>
                   <div class="form-group">
                        <label>Product Status</label>
                        <select class="form-control" id="status" name="status">
                          <option>---SELECT---</option>                          
                          <option value="Active">Active</option>
                          <option value="In-Active">In-Active</option>
                       
                        </select>
                      </div>                 
                </div>

                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
          <div class="col-3"></div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php include 'footer.php'; ?>