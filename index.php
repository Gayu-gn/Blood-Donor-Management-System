<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BDMS</title>
	<link href=https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<style>
		a:link{
			font-size: 20px;
		}
		.foot{
			padding: 10px 20px;
		}
		.table tbody tr:nth-of-type(even){
			background-color: lightgrey;
		}
        .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
}
.navbar-nav  li a:hover {
    color: #f5ce42 !important;
}

	</style>
</head>
<body>
<!--header start-->
<nav class="navbar sticky-top navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand text-white p-2" href="#"><h3><b>BDMS</b></h3></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item p-2">
			<a class="nav-link text-white" href="index.php">Home</a>
		</li>
		<li class="nav-item p-2">
			<a class="nav-link text-white" href="userlogin.php">User</a>
		</li>
		<li class="nav-item p-2">
			<a class="nav-link text-white" href="adminlogin.html">Admin</a>
		</li>
		<li class="nav-item p-2">
			<a class="nav-link border border-light rounded-pill text-white" href="#section1">Search Data</a>
		</li>
      </ul>
    </div>
  </div>
</nav>
<!--<nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <p class="navbar-brand">BDMS</p>
      </div>
        <ul class="nav navbar-nav navbar-right">

          <li id="home"><a href="index.php">HOME</a></li>
          <li id="about"><a href="userlogin.php">ABOUT US</a></li>
          <li id="contact"><a href="adminlogin.html">CONTACT US</a></li>
          <li id="contact"><a href="adminlogin.html">CONTACT</a></li>
        </ul>
    </div>
  </nav> -->
<!--header end-->
	<!--body-->
	<div>
		<img class="img-fluid" src="img1.jpg" width="1800" height="300">
	</div>
	
	<section id="section1">
		<div class="text-center">
		<h1 style="font-size: 70px; padding-top: 50px;"><b>Search Blood Donor Now</b></h1>		
	</div>
	<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4 shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search Blood group / State / City Name" autocomplete="off">
                                        <button type="submit" class="btn btn-lg btn-warning">Search Donor</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-md-12">
                <div class="card mt-4 shadow">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <th>
                                <tr class="bg-warning">
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Contact No</th>
                                    <th>Blood Group</th>
                                    <th>State</th>
                                    <th>City</th>
                                    <th>Message</th>
                                </tr>
                            <tbody>
                                <?php 
                                    $conn = mysqli_connect("localhost","root","","bdms");
                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "select * from signup where status='Active' intersect SELECT * FROM signup WHERE CONCAT(bgroup,state,city) LIKE '%$filtervalues%'";

                                        $query_run = mysqli_query($conn, $query);
                                        //union  SELECT * FROM signup WHERE CONCAT(bgroup,state,city) LIKE '%$filtervalues%' 
                                        //select * from signup where status='Active' 
                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            //$q="SELECT * FROM signup WHERE CONCAT(bgroup,state,city) LIKE '%$filtervalues%' ";
                                            //$r = mysqli_query($conn, $q);
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                    <td><?= $items['sno']; ?></td>
                                                    <td><?= $items['firstname']; ?></td>
                                                    <td><?= $items['lastname']; ?></td>
                                                    <td><?= $items['email_id']; ?></td>
                                                    <td><?= $items['phoneno']; ?></td>
                                                    <td><?= $items['bgroup']; ?></td>
                                                    <td><?= $items['state']; ?></td> 
                                                    <td><?= $items['city']; ?></td>    
                                                    <td><a href="sms.php" class="btn btn-sm btn-primary" style="text-decoration: none; ">Message</a></td>
                                                </tr>
                                                <?php
                                            }
                                        
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="foot border border-dark  bg-dark text-white text-center">
        &copy;Blood Donor Management System 2022
</div>	
</section>
</body>
</html>
