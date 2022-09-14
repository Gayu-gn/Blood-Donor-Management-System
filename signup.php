<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Signup page</title>
	<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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
			height: 110px;
			width: 110px;
		}
		.user-img{
			margin-bottom: 25px;
		}
	</style>
</head>
<body>
	<div class="model-dialog text-center">
		<div class="row" style="margin:3rem 22rem">
			<div class="col-sm-12 main-section">
				<div class="model-content shadow-lg">
					<div class="col-12 user-img">
							<img src="avatar.png">
					</div>
					<h1 style="color: white;" class="heading">Sign Up</h1></br>
					<div class="col-12 form-input">
						<form action="signup_connect.php" method="POST">
							<div class="form-group">
								<div class="row">
									<div class="col">
										<input type="text" class="form-control" placeholder="Enter Your First Name" name="firstname" required >					
									</div>	
									<div class="col">
										<input type="text" class="form-control" placeholder="Enter Your Last Name" name="lastname" required >					
									</div>
								</div>
							</div></br>
							<div class="form-group">
								<div class="row">
									<div class="col">
										<select class="form-select" name="gender">
											<option selected>Select Gender</option>
											<option value="m">Male</option>
											<option value="f">Female</option>
											<option value="o">Others</option>
										</select>
									</div>	

									<div class="col">
										<select class="form-select" name="bgroup">
										<option selected>Select Blood Group</option>
									<?php

									$con = mysqli_connect("localhost","root","","bdms");

                                        $query = "SELECT * FROM bg";
                                        $query_run = mysqli_query($con,$query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                               
	                                                
															<option><?= $items['blood_group']; ?></option>

												
												<?php
                                            }
                                        }
									?>

														</select>				
													</div>




									
							<div></br>
							<div class="form-group">
								<div class="row">
									<div class="col">
										<input type="email" class="form-control" placeholder="Enter Your Email Id" name="email_id" required >					
									</div>	
									<div class="col">
										<input type="number" class="form-control" placeholder="Enter Your Contact Number" name="phoneno" required >					
									</div>
								</div>
							</div></br>
							<div class="form-group">
								<div class="row">
									<div class="col">
										<input type="text" class="form-control" placeholder="Enter Your State" name="state" required >					
									</div>	
									<div class="col">
										<input type="text" class="form-control" placeholder="Enter Your City" name="city" required >					
									</div>
								</div>
							</div></br>
							<div class="form-group">
								<div class="row">
									<div class="col">
										<input type="password" class="form-control" placeholder="Enter Your Password" name="password"required >					
									</div>	
									<div class="col">
										<input type="password" class="form-control" placeholder="Enter Your Confirm Password" name="passwordc" required >					
									</div>
								</div>
							</div>
							</br>
							<div>
								<button type="submit" class="btn btn-primary btn-lg button">Sign Up</button>
							</div>
							<hr>
							<div class="col-12 forget">
								<h4>Already a member?</h4>
								<a href="userlogin.html" class="text-primary" style="text-decoration: none; font-size: 25px;">Login here</a>
							</div></br>
						</form>
					</div>
				</div> 
			</div>
		</div>
	</div>
</body>
</html>
