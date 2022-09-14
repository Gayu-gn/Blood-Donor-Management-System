<?php

 $con = mysqli_connect("localhost","root","","bdms");

 if (isset($_GET['deleteid'])) {
 	$sno=$_GET['deleteid'];

 	$q="DELETE FROM signup WHERE sno=$sno";
 	$r=mysqli_query($con,$q);
 	if ($r) {
 		header('location:userd.php');
 	} else {
 		die(mysqli_error($con));
 	}
 	
 }

?>
