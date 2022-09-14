<?php

 $conn = mysqli_connect("localhost","root","","bdms");

 if (isset($_GET['deleteid'])) {
 	$sno=$_GET['deleteid'];

 	$q="DELETE FROM bg WHERE sno=$sno";
 	$r=mysqli_query($con,$q);
 	if ($r) {
 		header('location:managebg.php');
 	} else {
 		die(mysqli_error($conn));
 	}
 	
 }

?>
