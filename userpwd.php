<?php

session_start();

$conn = mysqli_connect("localhost","root","","bdms");

$cpassword = $_POST['cpassword'];
$passwordnew = $_POST['passwordnew'];
$passwordc = $_POST['passwordc'];
$p=$_SESSION['password'];

if($cpassword == $p) {
	if ($passwordnew == $passwordc) {
		$n=$_SESSION['password'];
		//$q="UPDATE signup set $passwordnew where password = $n"; 
		//update table_name set value where f_n=value
		//$r=mysqli_query($conn,$q);

		//$query="SELECT * FROM signup WHERE password=$n";
		//$r=mysqli_query($conn,$query);
		//if(mysqli_num_rows($r)===1)
		//{
			//$q="UPDATE signup set password = $passwordnew WHERE password=$n ";
			$q="update signup set password='$passwordnew' where password='$n' ";
			mysqli_query($conn,$q);
			header('location:user_change_pwd.php');
		//}
	}
} else {
	echo 'wrng';
}
?>
