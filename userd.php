<?php
$conn = mysqli_connect("localhost","root","","bdms");
$q="select a_email_id from login_admin";
$r=mysqli_query($conn,$q);
if($r){
  while($row=mysqli_fetch_assoc($r)){
    $a_email_id=$row['a_email_id'];
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css rel="stylesheet">
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
      </svg>&nbsp &nbsp Admin<center> 
      <?php echo $a_email_id; ?></center> &nbsp &nbsp</span><br><br>
      <a href="admindashboard.php" class="list-group-item list-group-item-action bg-dark p-3"
          ><span class="text-white">&nbsp &nbsp <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16"><path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
          </svg>&nbsp &nbsp Dashboard</a>
      <a href="addbg.php" class="list-group-item list-group-item-action bg-dark p-3">&nbsp &nbsp<span class="text-white"><svg xmlns="http://www.w3.org/2000/svg"    width="20" height="20" fill="currentColor" class="bi bi-droplet" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10a5 5 0 0 0 10 0c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z"/>
          <path fill-rule="evenodd" d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z"/></svg></svg>&nbsp &nbsp Add Blood Group</span></a>
      <a href="managebg.php" class="list-group-item list-group-item-action bg-dark p-3"
          >&nbsp &nbsp<span class="text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-droplet-fill" viewBox="0 0 16 16"><path d="M8 16a6 6 0 0 0 6-6c0-1.655-1.122-2.904-2.432-4.362C10.254 4.176 8.75 2.503 8 0c0 0-6 5.686-6 10a6 6 0 0 0 6 6ZM6.646 4.646l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448c.82-1.641 1.717-2.753 2.093-3.13Z"/></svg>&nbsp &nbsp Manage Blood Group</a>
      <a href="userd.php" class="list-group-item list-group-item-action bg-dark p-3">&nbsp &nbsp<span class="text-white"><svg xmlns="http://www.w3.org/2000/svg"    width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16"><path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/></svg>&nbsp &nbsp User Details</a>
    
      <a href="report.php" class="list-group-item list-group-item-action bg-dark p-3">&nbsp &nbsp<span class="text-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>&nbsp &nbsp Report</a>
          <a href="admin_change_pwd.php" class="list-group-item list-group-item-action bg-dark p-3"
          ><span class="text-white"><i class="fas fa-chart-line fa-fw me-3"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
</svg>&nbsp &nbsp Change Password</a>
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
    
     <div class="text-center p-5"><h1><b>User Details</b></h1></div>
     <div class="col-md-12">
                <div class="card mt-4 shadow">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <th>
                                <tr class="bg-warning">
                                    <th>ID</th>
                                    <th>Name</th>
                                   
                                    <th>Email</th>
                                    <th>Contact No</th>
                                    <th>Blood Group</th>
                                    <th>State</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            <tbody>
                                <?php
                                        $query = "SELECT sno,firstname,lastname,email_id,phoneno,bgroup,state,status FROM signup order by sno asc ";
                                        $query_run = mysqli_query($con, $query);

                                        if($query_run)
                                            {       
                                              while ($row=mysqli_fetch_assoc($query_run)) {
                                                $sno = $row['sno'];
                                                $firstname = $row['firstname']; 
                                                $lasttname = $row['lastname'];
                                                $email_id = $row['email_id'];
                                                $phoneno = $row['phoneno'];
                                                $bgroup = $row['bgroup'];
                                                $state = $row['state'];
                                                $status = $row['status'];


                                                echo '<tr>
                                                <td scope="row">'.$sno.'</td>
                                                <td>'.$firstname.' '.$lasttname.'</td>
                                                <td>'.$email_id.'</td>
                                                <td>'.$phoneno.'</td>
                                                <td>'.$bgroup.'</td>
                                                <td>'.$state.'</td>
                                                <td>'.$status.'</td>
                                                <td>
                                                <button class="btn btn-primary"><a href="u.php?id='.$email_id.'" class="text-light" style="text-decoration: none;">VIEW</a></button>
                                                <button class="btn btn-primary"><a href="delete1.php?deleteid='.$sno.'" class="text-light" style="text-decoration: none;">DELETE</a></button>
                                                </td>
                                                
                                                </tr>';
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
                                    
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
