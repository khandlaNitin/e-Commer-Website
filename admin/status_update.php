<?php include '../conection.php';


$id = $_GET['id']; 
//print_r($id); exit();
	$status="Completed";
	$sqll = "UPDATE `order_data` SET `status`='$status' WHERE id='$id'";
	$data = mysqli_query($conn, $sqll);
	if($data > 0 ){	    			    	
    ?>
     <script type="text/javascript">
      window.location = "order_view.php";
     </script>
    <?php
	}else{
		echo "<p>status not update</p>";
	}	    			    	



?>