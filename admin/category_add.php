<?php
include 'header.php';


if (isset($_POST["submit"])) {  

  $cat_name = $_POST['cat_name'];

  $query = "insert into product_category (cat_name) values ('$cat_name')";
  $row = mysqli_query($conn, $query);
  //print_r($row); exit();
    if($row > 0 )
    {
    //echo "<br/><br/><span>Category Inserted successfully...!!</span>";
    //header("Location:category_view.php");?>
    <script type="text/javascript">
      window.location = "category_view.php";
    </script>
    <?php
  }else{
    echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
  }
}




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
                <h3 class="card-title">Category Add</h3>
              </div>              
              <form action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" id="cat_name" name="cat_name" placeholder="Enter Product Name">
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