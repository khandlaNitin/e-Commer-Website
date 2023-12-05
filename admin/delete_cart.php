<?php 
include '../conection.php';

$id = $_GET['id']; 
#print_r($id);
$query = "DELETE FROM add_to_cart WHERE id = '$id'"; 

$result = mysqli_query($conn, $query);
if($result > 0 )
{
	echo "<br/><br/><span>Category Deleted Successfully...!!</span>";
	header("Location:cart_view.php");
}else{
	echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
?>