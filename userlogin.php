<?php

session_start();

$conn = mysqli_connect("localhost","root","","bdms");

if(isset($_POST['submit'])){

$email_id = $_POST['email_id'];
$password = $_POST['password'];

$_SESSION['email_id']= $email_id;
$_SESSION['password']= $password;


$a="select * from signup where email_id='$email_id' and password='$password'";
$r=mysqli_query($conn,$a);

if(mysqli_num_rows($r)===1)
{
	$row=mysqli_fetch_assoc($r);
	if($row['email_id']===$email_id && $row['password']===$password)
	{
		header('location:userdashboard.html');
	}
	else
	{
		echo "<script> alert('failed to login') </script>";
		header('location:userdashboard.html');
	}
}
else
{
	echo "<script> alert('unable to login') </script>";
}	
}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>User Login</title>
	<style>
		body{
			margin: 0;
			padding: 0;
			background: linear-gradient(to top , rgb(3, 252, 248),rgb(3, 103, 252));
			}
		.model-content{
			background-color: light;
			border-radius: 20px;
			padding: 20px;
		}
		.user-img img{
			height: 120px;
			width: 120px;
		}
		.user-img{
			margin-bottom: 25px;
		}
		.form-group{
			margin-bottom: 40px;
		}
		.form-group input{
			height: 42px;
			border-radius: 20px;
			border: 0;
			font-size: 18px;
			letter-spacing: 2px;
		}
		.forget a{
			color :white;
			font-size: 20px;
		}
		.heading{
			margin-bottom: 40px;
			letter-spacing: 2px;
			font-size: 40px;
		}
	</style>
</head>
<body> 
	<div class="model-dialog text-center">
		<div class="row" style="margin:2.8rem 33rem">
			<div class="col-lg-12 main-section">
				<div class="model-content shadow-lg">
					<div class="col-12 user-img">
							<img src="avatar.png">
					</div>
					<h2 style="color: white;" class="heading">Login</h2>
					<div class="form-input">
						<form method="POST">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Enter Email_Id" id="email_id" name="email_id" required >					
							</div>
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Enter Password" id="password" name="password" required>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-lg btn-block button" name="submit">Login</button>
							</div><hr>
							<div class="col-12 forget">
								<h4>Not a member?</h4>
								<a href="signup.php" class="text-primary" style="text-decoration: none;">Create account</a>
							</div></br>
							<div class="col-12 forget">
								<a href="index.php" class="text-primary" style="text-decoration: none;">Back to home page</a>
							</div>
						</form>
					</div>
				</div> 
			</div>
		</div>
	</div>
</body>
</html>
