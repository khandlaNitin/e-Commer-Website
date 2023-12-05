<?php
include 'header.php';


$id = $_GET['id']; 
#print_r($id);
$query = "SELECT * FROM product_category WHERE id = '$id'"; 

$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $cat_name = $_POST['cat_name'];  

  $cat_query = "UPDATE `product_category` SET cat_name='".$cat_name."' where id='".$id."' "; 
//print_r($cat_query); exit();
  $cat_row = mysqli_query($conn, $cat_query);
 
  if($cat_row > 0 )
  {
   /* echo "<br/><br/><span>Category Updated Successfully...!!</span>";
    header("Location:category_view.php");*/?>
    <script type="text/javascript">
      window.location = "category_view.php";
    </script>
    <?php
  }else{
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
  }
      
}



?>

<?php  ?>
<?php include 'sidebar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Category Update</h1>
          </div><!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div> -->
        </div>
      </div>
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
                <h3 class="card-title">Category Update</h3>
              </div>              
              <form action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Enter Product Name" value="<?php echo $row['cat_name'] ?>">
                  </div>                  
                </div>
                <div class="card-footer">
                  <button type="submit" name="submit" class="btn btn-primary">Edit</button>
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