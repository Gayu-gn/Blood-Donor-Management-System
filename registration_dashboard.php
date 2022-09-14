<?php

session_start();

?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Dashboard</title>
  <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <style>
    body 
    {
        background-color: lightgrey;
    }
    @media (min-width: 991.98px) {
    main {
      padding-left: 240px;
    }
    }

    /* Sidebar */
    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      padding: 58px 0 0; /* Height of navbar */
      box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
      width: 240px;
      z-index: 600;
    }

    @media (max-width: 991.98px) {
      .sidebar {
        width: 100%;
      }
    }
    .sidebar .active {
      border-radius: 5px;
      box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }

    .sidebar-sticky {
      position: relative;
      top: 0;
      height: calc(100vh - 48px);
      padding-top: 0.5rem;
      overflow-x: hidden;
      overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <div class="container-fluid">
      <!--links-->
      <ul class="navbar-nav">
        <li class="nav-item">
          <span class="text-white"><h1>&nbspBDMS</h1></span>
        </li>
      </ul>
    </div>  
  </nav>
  <!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-dark">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-9 mt-4">        &nbsp &nbsp    
      <span class="text-white">&nbsp &nbsp <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
      <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
      </svg>&nbsp &nbsp User-Administrator &nbsp &nbsp</span><br><br>

      <a href="userdashboard.html" class="list-group-item list-group-item-action bg-dark p-3"
          ><span class="text-white">&nbsp &nbsp <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
  <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
</svg>&nbsp &nbsp Dashboard</a>
<a href="registration_dashboard.php" class="list-group-item list-group-item-action bg-dark p-3"><span class="text-white">&nbsp &nbsp <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-in-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M3.5 6a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5v-8a.5.5 0 0 0-.5-.5h-2a.5.5 0 0 1 0-1h2A1.5 1.5 0 0 1 14 6.5v8a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 14.5v-8A1.5 1.5 0 0 1 3.5 5h2a.5.5 0 0 1 0 1h-2z"/>
  <path fill-rule="evenodd" d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
</svg>&nbsp &nbsp Registration</a>
<a href="health_dashboard.php" class="list-group-item list-group-item-action bg-dark p-3"><span class="text-white">&nbsp &nbsp <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-card-checklist" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
</svg>&nbsp &nbsp Health Details</a>
        <a href="user_profile.php" class="list-group-item list-group-item-action bg-dark p-3"
          ><span class="text-white"><i class="fas fa-lock fa-fw me-3"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>&nbsp &nbsp Profile</span></a>
        <a href="user_change_pwd.php" class="list-group-item list-group-item-action bg-dark p-3"
          ><span class="text-white"><i class="fas fa-chart-line fa-fw me-3"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
</svg>&nbsp &nbsp Change Password</a>
        <a href="userlogin.php" class="list-group-item list-group-item-action bg-dark p-3"><span class="text-white">
          <i class="fas fa-chart-pie fa-fw me-3"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-power" viewBox="0 0 16 16">
  <path d="M7.5 1v7h1V1h-1z"/>
  <path d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z"/>
</svg>&nbsp &nbsp LogOut</a>
        </a>
      </div>
    </div>
  </nav>
  <!-- Sidebar -->
  <main>
    <div class="text-center p-3"><h1><b>Update Registeration</b></h1></div>
    <div class="model-dialog">
    <div class="row" style="margin:3rem 17rem">
      <div class="col-sm-12 main-section">
        <div class="model-content shadow-lg  bg-light">        
          <div class="col-12 form-input">
<?php

 $conn = mysqli_connect("localhost","root","","bdms");

 $email_id=$_SESSION['email_id'];

 $q= "SELECT * FROM registration where email_id='$email_id' ";
 $r = mysqli_query($conn, $q);
 if($r)
 {       
    while ($row=mysqli_fetch_assoc($r)) {
      $name = $row['name'];
      $address = $row['address'];
      $cdate = $row['cdate'];
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
?>
<div class="col-12 form-input p-3">
            <form action="update_registration.php" method="POST" class="form-signin">
                      <div class="row">
                        <div class="col">
                          <div class="form-label-group">
                            <label>Name<span style="color: #FF0000">*</span></label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" required>
                        </div> <br/>
                        </div>
                        <div class="col">
                          <div class="form-label-group">
                            <label>Door No. & Street<span style="color: #FF0000">*</span></label>
                            <input type="text" name="address"class="form-control" value="<?php echo $address; ?>" required>
                        </div> <br/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <label>D.O. Birth<span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <input type="date" name="bdate" class="form-control" value="<?php echo $bdate; ?>" required>
                        </div><br/>
                        </div>
                        <div class="col">
                          <label>Age<span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <input type="number" name="age" class="form-control" value="<?php echo $age; ?>" required>
                        </div><br/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                           <label>District<span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <input type="text" name="district" class="form-control" value="<?php echo $district; ?>" required>
                        </div><br/>
                        </div>
                        <div class="col">
                          <label>State<span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <input type="text" name="state" class="form-control" value="<?php echo $state; ?>" required>
                        </div><br/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <label>Phone No.<span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <input type="number" name="phoneno" class="form-control" value="<?php echo $phoneno; ?>" required>
                        </div><br/>
                        </div>
                        <div class="col">
                          <label>Occupation<span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <input type="text" name="occupation" class="form-control" value="<?php echo $occupation; ?>" required>
                        </div><br/>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <label>No.of Donation<span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <input type="number" name="no_of_donation" class="form-control" value="<?php echo $no_of_donation; ?>" required>
                        </div><br/>
                        </div>
                        <div class="col">
                          <label>Last Donation<span style="color: #FF0000">*</span></label>
                        <div class="form-label-group">
                            <input type="date" name="last_donation" class="form-control" value="<?php echo $last_donation; ?>" required>
                        </div><br/>
                        </div><br>
                      </div>
              <div>&nbsp
                <button type="submit" class="btn btn-primary btn-lg button" value="submit">Update</button>
              </div><br>

</body>
</html>

