<?php

$conn=mysqli_connect('localhost','root','','bdms');

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$bgroup=$_POST['bgroup'];
$email_id=$_POST['email_id'];
$phoneno=$_POST['phoneno'];
$state=$_POST['state'];
$city=$_POST['city'];

$q="update signup set firstname='$firstname',lastname='$lastname',bgroup='$bgroup',email_id='$email_id',phoneno='$phoneno',state='$state',city='$city' where email_id='$email_id' ";
$r=mysqli_query($conn,$q);
if($r){
	header('location:user_profile.php');
}

?>
