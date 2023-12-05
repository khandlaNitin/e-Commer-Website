<?php 
include '../conection.php';

$id = $_GET['id']; 
#print_r($id);
$query = "DELETE FROM product WHERE id = '$id'"; 

$result = mysqli_query($conn, $query);
if($result > 0 )
{
	echo "<br/><br/><span>Product Deleted Successfully...!!</span>";
	header("Location:product_view.php");
}else{
	echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
?>