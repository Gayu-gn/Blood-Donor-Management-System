<?php

 $conn = mysqli_connect("localhost","root","","bdms");

 if (isset($_GET['id'])) {
 	$email=$_GET['id'];
	$q = "select * from registration where email_id='$email' ";
	$r = mysqli_query($conn,$q);
	if($r){

    	while ($row=mysqli_fetch_assoc($r)) {
    	$name = $row['name'];
		$address = $row['address'];
		$age = $row['age'];
		$bdate = $row['bdate'];
		$state = $row['state'];
		$district = $row['district'];
		$email_id = $row['email_id'];
		$phoneno = $row['phoneno'];
		$occupation = $row['occupation'];
		$no_of_donation = $row['no_of_donation'];
		$last_donation = $row['last_donation'];
    }
  }
  $q1="select * from registration2 where email_id='$email' ";
  $r1=mysqli_query($conn,$q1);
  if($r1){
  	while ($row=mysqli_fetch_assoc($r1)) {
$email_id1=$row['email_id'];
$que1 = $row['que1'];
$que2 = $row['que2'];
$que3 = $row['que3'];
$que4 = $row['que4'];
$que5 = $row['que5'];
$que6 = $row['que6'];
$que = $row['que'];
$que7 = $row['que7'];
$que8 = $row['que8'];
$que9 = $row['que9'];
$que10 = $row['que10'];
$que11 = $row['que11'];
$que12 = $row['que12'];
$que13 = $row['que13'];
$que14 = $row['que14'];
$que15 = $row['que15'];
$que16 = $row['que16'];
$que17 = $row['que17'];
$que18 = $row['que18'];
$que19 = $row['que19'];
$que20 = $row['que20'];
$que21 = $row['que21'];
$que22 = $row['que22'];
$que23 = $row['que23'];
$que24 = $row['que24'];
$que25 = $row['que25'];
$que26 = $row['que26'];
$que27 = $row['que27'];
$que28 = $row['que28'];
$que29 = $row['que29'];
$que30 = $row['que30'];
  	}
  }
 }
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registraion</title>
  <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <style>
    body 
    {
      background-color: lightgrey;
    }
    @media (min-width: 991.98px)  
    {
    main  
    {
      padding-left: 240px;
    }
    }
    .sidebar 
    {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      padding: 58px 0 0;
      box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
      width: 240px;
      z-index: 600;
    }
    @media (max-width: 991.98px) 
    {
    .sidebar 
    {
      width: 100%;
    }
    }
    .sidebar .active 
    {
      border-radius: 5px;
      box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }
    .sidebar-sticky 
    {
      position: relative;
      top: 0;
      height: calc(100vh - 48px);
      padding-top: 0.5rem;
      overflow-x: hidden;
      overflow-y: auto;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <div class="container-fluid">
      <ul class="navbar-nav">
        <li class="nav-item">
          <span class="text-white"><h1>&nbspBDMS</h1></span>
        </li>
      </ul>
    </div>  
  </nav>
  <header>
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-dark">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-9 mt-4">        &nbsp &nbsp    
      <span class="text-white">&nbsp &nbsp <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
      </svg>&nbsp &nbsp Admin &nbsp &nbsp</span><br><br>
      <a href="admindashboard.php" class="list-group-item list-group-item-action bg-dark p-3"
          ><span class="text-white">&nbsp &nbsp <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16"><path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
          </svg>&nbsp &nbsp Dashboard</a>
      <a href="addbg.html" class="list-group-item list-group-item-action bg-dark p-3">&nbsp &nbsp<span class="text-white"><svg xmlns="http://www.w3.org/2000/svg"    width="20" height="20" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
          <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/></svg></svg>&nbsp &nbsp Add Blood Group</span></a>
      <a href="managebg.php" class="list-group-item list-group-item-action bg-dark p-3"
          >&nbsp &nbsp<span class="text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-droplet-fill" viewBox="0 0 16 16"><path d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6ZM6.646 4.646l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448c.82-1.641 1.717-2.753 2.093-3.13Z"/></svg>&nbsp &nbsp Manage Blood Group</a>
      <a href="userd.php" class="list-group-item list-group-item-action bg-dark p-3">&nbsp &nbsp<span class="text-white"><svg xmlns="http://www.w3.org/2000/svg"    width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"><path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/></svg>&nbsp &nbsp User Details</a>
          <a href="registrations.php" class="list-group-item list-group-item-action bg-dark p-3">&nbsp &nbsp<span class="text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-calendar3" viewBox="0 0 16 16"><path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/><path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>&nbsp &nbsp Registrations</a>
      <a href="report.php" class="list-group-item list-group-item-action bg-dark p-3">&nbsp &nbsp<span class="text-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>&nbsp &nbsp Report</a>
          <a href="adminlogin.html" class="list-group-item list-group-item-action bg-dark p-3"><span class="text-white">
          <i class="fas fa-chart-pie fa-fw me-3"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
  <path d="M7.5 1v7h1V1h-1z"/>
  <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
</svg>&nbsp &nbsp LogOut</a>
      </div>
    </div>
  </nav>
<main>
    <?php

    $con = mysqli_connect("localhost","root","","bdms");
   
    ?>
    
     <div class="text-center p-5"><h1><b>User Details</b></h1></div><br>
     <div class="text-center"><h3><b>Personal Details</b></h3></div>
     <div class="col-lg-12 col-md-12 p-5">
                <div class="card mt-2 shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Name</div>
                            <div class="col-6"><?php echo $name; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Address</div>
                            <div class="col-6"><?php echo $address; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Age</div>
                            <div class="col-6"><?php echo $age; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Birth of date</div>
                            <div class="col-6"><?php echo $bdate; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">State</div>
                            <div class="col-6"><?php echo $name; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">District</div>
                            <div class="col-6"><?php echo $state; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Email ID</div>
                            <div class="col-6"><?php echo $email_id; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Phone number</div>
                            <div class="col-6"><?php echo $phoneno; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Occupation</div>
                            <div class="col-6"><?php echo $occupation; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">No Of donation</div>
                            <div class="col-6"><?php echo $no_of_donation; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Last Donation</div>
                            <div class="col-6"><?php echo $last_donation; ?></div><br>
                        </div>
                    </div>

                </div>
    </div> <br>
    <div class="text-center"><h3><b>Health Details</b></h3></div>
    <div class="col-lg-12 col-md-12 p-5">
                <div class="card mt-2 shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Jaundice within one year</div>
                            <div class="col-6"><?php echo $que1; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Bronchial Asthma</div>
                            <div class="col-6"><?php echo $que2; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Diabetes</div>
                            <div class="col-6"><?php echo $que3; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Hypertensio</div>
                            <div class="col-6"><?php echo $que4; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Are you on any Medication?e</div>
                            <div class="col-6"><?php echo $que5; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">If Yes, what?t</div>
                            <div class="col-6"><?php echo $que6; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Typhoid within 12 months</div>
                            <div class="col-6"><?php echo $que; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Malaria within 6 months</div>
                            <div class="col-6"><?php echo $que7; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Have you taken Alcohol within 24 hrs?</div>
                            <div class="col-6"><?php echo $que8; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Major operations within 12 months</div>
                            <div class="col-6"><?php echo $que9; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Injections within 2 weeks</div>
                            <div class="col-6"><?php echo $que10; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Blood transfusions received within 6 months</div>
                            <div class="col-6"><?php echo $que11; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Have you vaccinated in the past 6 months</div>
                            <div class="col-6"><?php echo $que12; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Have you administered immune globulin in the past 1 year</div>
                            <div class="col-6"><?php echo $que13; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Done Tattoo in the past 6 Months</div>
                            <div class="col-6"><?php echo $que14; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Do you suffer from common cold/viral infection</div>
                            <div class="col-6"><?php echo $que15; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Allergies or Skin Diseases</div>
                            <div class="col-6"><?php echo $que16; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Bleeding tendencies</div>
                            <div class="col-6"><?php echo $que17; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Fits</div>
                            <div class="col-6"><?php echo $que18; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Fainting attacks on seeing bloodn</div>
                            <div class="col-6"><?php echo $que19; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Heart disease</div>
                            <div class="col-6"><?php echo $que20; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Rheumatoid arthritis</div>
                            <div class="col-6"><?php echo $que21; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Tuberculosis</div>
                            <div class="col-6"><?php echo $que22; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">H/o prolonged fever, diarrhoea, weight loss</div>
                            <div class="col-6"><?php echo $que23; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Glandular swellings</div>
                            <div class="col-6"><?php echo $que24; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Blood Group/Rh (If known)</div>
                            <div class="col-6"><?php echo $que25; ?></div><br>
                        </div>
                    </div><div class="card-body">
                        <div class="row">
                            <div class="col-6">Women</div>
                            <div class="col-6"><?php echo $que26; ?></div><br>
                        </div>
                    </div><div class="card-body">
                        <div class="row">
                            <div class="col-6">Menstrual Problems</div>
                            <div class="col-6"><?php echo $que27; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">If yes, what?</div>
                            <div class="col-6"><?php echo $que28; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Abortions within 6 months Child birth in 1 year, Breast feeding within 1 year</div>
                            <div class="col-6"><?php echo $que29; ?></div><br>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">Have you suffered from cancer/Hepatic infection</div>
                            <div class="col-6"><?php echo $que30; ?></div><br>
                        </div>
                    </div>
                </div>
               </div>
    </div><br>
</main>
</body>
</html>
