<?php
session_start();
$conn=mysqli_connect('localhost','root','','bdms');
$email_id=$_SESSION['email_id'];

$name = $_POST['name'];
$address = $_POST['address'];
$age = $_POST['age'];
$bdate = $_POST['bdate'];
$city = $_POST['city'];
$district = $_POST['district'];
$phoneno = $_POST['phoneno'];
$occupation = $_POST['occupation'];
$no_of_donation = $_POST['no_of_donation'];
$last_donation = $_POST['last_donation'];
$cdate=date("y-m-d");
$agec=date_diff(date_create($bdate),date_create($cdate));
$cage=$agec->format('%y');



function dateDiffInDays($cdate,$last_donation){
	$diff=strtotime($last_donation)-strtotime($cdate);
	return abs(round($diff/86400));
}
$donation=dateDiffInDays($cdate,$last_donation);


if ($cage>18&&$cage<60) 
{
	if($age==$cage)
	{
		if($donation>90)
		{
			$conn=mysqli_connect('localhost','root','','bdms');

			$q="update registration set name='$name',address='$address',age='$age',bdate='$bdate',city='$city',district='$district',phoneno='$phoneno',occupation='$occupation',last_donation='$last_donation' where email_id='$email_id' ";
$r=mysqli_query($conn,$q);
if($r){
header('location:registration_dashboard.php');

}


		}
	}
	else{
		echo "<script> alert('Age not matched with your date of birth !')</script>";
	}

}
else{
		echo "<script> alert('Age limit is not matched!')</script>";
	}
?>
