<?php
$a_email_id = $_POST['a_email_id'];
$a_password = $_POST['a_password'];
$conn = new mysqli('localhost','root','','bdms');
$a="select * from login_admin where a_email_id='$a_email_id' and a_password='$a_password'";
$r=mysqli_query($conn,$a);
if(mysqli_num_rows($r)===1)
{
	$row=mysqli_fetch_assoc($r);
	if($row['a_email_id']===$a_email_id && $row['a_password']===$a_password)
	{
		header('location:admindashboard.php');
	}
	else
	{
		echo "Not get login";	
	}
}
else{

}
?>
