<!DOCTYPE html>
<?php include('session.php');?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Fixed Sidebar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="AdminLTE-3.1.0-rc/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="AdminLTE-3.1.0-rc/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="AdminLTE-3.1.0-rc/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<?php
            $username=$_SESSION['id'];
            if($_SESSION['user']=="Student"){
                $sql = "SELECT * FROM student WHERE studentid = '$username'";
                $result = $db->query($sql);
                $row = mysqli_fetch_array($result,MYSQLI_BOTH);
                    
                    $givenname= $row['givenname'];
                    $familyname=$row['familyname'];
                    $user="Student";
                    $year=$row['yearenrolled'];
                    $contact=$row['studentcontactno'];
                    $identification= $username;
            }
            else if($_SESSION['user']=="Staff" || $_SESSION['user']=="Admin"){
                $sql = "SELECT * FROM lecturer WHERE staffid = '$username'";
                $result = $db->query($sql);
                $row = mysqli_fetch_array($result,MYSQLI_BOTH);
                    
                    $givenname= $row['givenname'];
                    $familyname=$row['familyname'];
                    
                    $year=$row['yearjoined'];
                    $contact=$row['staffcontactno'];
                    $identification= $username;
                    $projectone = $row['project1'];
                    $projecttwo = $row['project2'];
                    if($_SESSION['user']=="Staff"){
                        $user="Staff";
                    }
                    else{
                        $user="Admin";
                    }
            }

            ?>
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="AdminLTE-3.1.0-rc/index3.html" class="nav-link">Home</a>
      </li>
      <!--
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>-->
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">4 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-download mr-2"></i> 4 new software updates
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="AdminLTE-3.1.0-rc/index3.html" class="brand-link">
      <img src="AdminLTE-3.1.0-rc/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/static/images/profile-default.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $givenname . " " . $familyname;?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                About me
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cart-arrow-down"></i>
              <p>
                Softwares
              </p>
            </a>
          </li>


         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>About me</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <!--<li class="breadcrumb-item"><a href="#">Layout</a></li>-->
              <li class="breadcrumb-item active">About me</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
            <!-- Default box -->
    
            
            <div class="col-md-3">
            <?php include("inc/profile.php");?>
        </div>

        <div class="col-md-9">
        <?php
            if($_SESSION['user']=="Staff" || $_SESSION['user']=="Admin" ){

                    $sql2 = "SELECT * FROM project WHERE projectno IN('$projectone' ,'$projecttwo')";
                    $result2 = $db->query($sql2);
                    
                    $aboutname = "project(s)";
                    if ($result2->num_rows > 0) {

                        while($row2 = mysqli_fetch_assoc($result2)) {
            echo "
            <div class='card card-primary'>
              <div class='card-header'>
                <h3 class='card-title'>". $aboutname . "</h3>
              </div>
              <!-- /.card-header -->
              <div class='card-body'>
                <strong><i class='fas fa-book mr-1'></i> Title</strong>

                <p class='text-muted'>"
                    . $row2["title"]."<br/>" . "</p>

                <hr>

                <strong><i class='fas fa-coins mr-1'></i> budget</strong>

                <p class='text-muted'>"."$".$row2["budget"]."<br/>". "</p>

                <hr>

                <strong><i class='far fa-file-alt mr-1'></i> Description </strong>

                <p class='text-muted'>". $row2["shortdesc"]."<br/>".
                "</p>

                <hr>

                <strong><i class='fas fa-building mr-1'></i> Company</strong>

                <p class='text-muted'>". $row2["companyname"]."<br/>" . "</p>

                <hr>

                <strong><i class='far fa-clock mr-1'></i> Hours</strong>

                <p class='text-muted'>". $row2["hours"]." hrs"."<br/>" . "<i class='fas fa-hourglass-start'></i>".$row2["startdate"] .
                "<br/>" . "<i class='fas fa-hourglass-end'></i>".$row2["enddate"] ."</p>
    
              <!-- /.card-body -->
            </div></div>";
                        }
                    }
                    else{
                        echo "No projects";
                    }
            }
            else if($_SESSION['user']=="Student"){
                $sql2 = "SELECT * FROM notebook WHERE studentid='$username'";
                $result2 = $db->query($sql2);
                $row2 = mysqli_fetch_array($result2,MYSQLI_BOTH);
                $aboutname = "Notebook";

                echo "
            <div class='card card-primary'>
              <div class='card-header'>
                <h3 class='card-title'>". $aboutname . "</h3>
              </div>
              <!-- /.card-header -->
              <div class='card-body'>
                <strong><i class='fas fa-laptop mr-1'></i> model </strong>

                <p class='text-muted'>"
                    . $row2["model"]."<br/>" ."Make: ".$row2['make']."</p>

                <hr>

                <strong><i class='fas fa-hdd mr-1'></i> RAM amount</strong>

                <p class='text-muted'>".$row2["ramamount"]."GB"."<br/>". "</p>

                <hr>

                <strong><i class='fab fa-windows mr-1'></i> operating system </strong>

                <p class='text-muted'>". $row2["operatingsystem"]."<br/>".
                "</p>

                <hr>

                <strong><i class='fas fa-barcode mr-1'></i> serial Number</strong>

                <p class='text-muted'>". $row2["serialno"]."<br/>" . "</p>
              <!-- /.card-body -->
            </div></div>";

            }
            ?>


        

          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-rc
    </div>
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="AdminLTE-3.1.0-rc/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="AdminLTE-3.1.0-rc/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="AdminLTE-3.1.0-rc/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="AdminLTE-3.1.0-rc/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="AdminLTE-3.1.0-rc/dist/js/demo.js"></script>
</body>
</html>