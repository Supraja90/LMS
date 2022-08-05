<?php include 'connection.php';
require 'session.php';
confirm_logged_in();
  ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CBIT LMS</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top" style="background-image: linear-gradient();">

      <a class="navbar-brand mr-1" href="homepage.php">CBIT LMS</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

    
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        
      </form>

      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <div class="dropdown-divider"></div>
           
            <a class="dropdown-item" href="logout.php"  data-target="#logoutModal">Logout</a>
            
          </div>
        </li>
      </ul>

    </nav>


    <div id="wrapper">

  
      <ul class="sidebar navbar-nav" style="background-image: linear-gradient();">
        <li class="nav-item">
          <a class="nav-link" href="homepage.php">
            <i class="fas fa-fw fa-home"></i>
            <span>HOMEPAGE</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="userstudent.php">
            <i class="fa fa-info"></i>
            <span>My Info</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userjava.php">
            <i class="fa fa-coffee"></i>
            <span>Java Programming</span></a>
        </li>
        
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userdlca.php">
            <i class="fa fa-object-group"></i>
            <span>Digital Logic and Computer Architecture</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userdcst.php">
            <i class="fas fa-fw fa-route   "></i>
            <span>DC circuits,Sensors and Transducers</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="usercsbox.php">
            <i class="fas fa-fw fa-comment-alt   "></i>
            <span>Suggestion Box</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

           <div class="col-lg-12">

            <div>
            <h1> Student Record</h1>
           <br> </br>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="daaTable" width="100%" cellspacing="0">
                                <thead>
                                <tr>
                                <th>Roll No.</th>
                                        <th>Name</th>
                                        <th>Gender</th>
                                        <th>Branch</th>
                                        <th>Sem</th>
                                        <th>Mobile No.</th>
                                        <th>Email</th>
                                        <th>Guardian Name</th>
                                        <th>Guardian No.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $query = "SELECT * FROM admin Where id='".$_SESSION['MEMBER_ID']."'" ;
                    $result = mysqli_query($db, $query);
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                          echo '<tr>';
                            echo '<td>'. $row['rnum'].'</td>';
                            echo '<td>'. $row['name'].'</td>';
                            echo '<td>'. $row['program'].'</td>';
                            echo '<td>'. $row['branch'].'</td>';
                            echo '<td>'. $row['sem'].'</td>';
                            echo '<td>'. $row['mobilenum'].'</td>';
                            echo '<td>'. $row['user'].'</td>';
                            echo '<td>'. $row['pname'].'</td>';
                            echo '<td>'. $row['pnum'].'</td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
<?php include 'footer.php'; ?>