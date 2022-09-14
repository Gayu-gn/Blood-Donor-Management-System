<?php
$servername = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'BDMS';

$conn = new mysqli($servername,$username,$pass,$dbname);

$blood_group  = $_POST['blood_group'];
$q = "INSERT INTO bg(blood_group) VALUES('$blood_group')";
$r = mysqli_query($conn,$q);
if($r) {
	header('location:addbg.html');
}	
else{		
	echo "$r->error()";	
}
?>
