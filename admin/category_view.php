<?php
include 'header.php'; 

$query = "SELECT * FROM product_category";  
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
            <h1 class="m-0">Category</h1>
          </div><!-- /.col -->
           <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
              <a href="category_add.php" class="btn btn-primary">Add Category</a>
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
                    <th>Category Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($row as $data) { ?>
                  <tr>
                     <td><?php echo $data['id']; ?></td>
                     <td><?php echo $data['cat_name']; ?></td>
                      <td colspan="2">
                        <a href="category_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a> 
                        <a href="category_delete.php?id=<?php echo $data['id']; ?>" onclick="return ConfirmDelete()" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a> 
                   
                    </td> 
                  </tr>
                  <?php } ?>
                 
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Category Name</th>
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