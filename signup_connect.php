<?php
session_start();

$firstname = $_POST['firstname']; 
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$bgroup = $_POST['bgroup'];
$email_id = $_POST['email_id'];
$phoneno = $_POST['phoneno'];
$state = $_POST['state'];
$city = $_POST['city'];
$password = $_POST['password'];
$conn = new mysqli('localhost','root','','bdms');

$q ="INSERT INTO signup (firstname,lastname,gender,bgroup,email_id,phoneno,state,city,password) VALUES('$firstname','$lastname','$gender','$bgroup','$email_id','$phoneno','$state','$city', '$password')";                               

$r =mysqli_query($conn,$q);

if ($r) 
{
	header('location:userlogin.php');	
}
else
{
	echo 'not stored';
}
?>
