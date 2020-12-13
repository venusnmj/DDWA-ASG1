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
            if($_SESSION['user']=="Admin"){
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
        $user = $_SESSION['user'];

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
        <a href="welcome.php" class="nav-link">Home</a>
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
          <span class="badge badge-warning navbar-badge">4</span>
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
    <a href="welcome.php" class="brand-link">
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
<?php
               if($_SESSION['user']=="Admin"){
                echo "'<li class='nav-item'>
                <a href='welcome.php' class='nav-link'>
                  <i class='nav-icon fas fa-user-circle'></i>
                  <p>
                    About me
                  </p>
                </a>
              </li>
    
              <li class='nav-item'>
                <a href='software.php' class='nav-link'>
                  <i class='nav-icon fas fa-cart-arrow-down'></i>
                  <p>
                    Softwares
                  </p>
                </a>
              </li>
              
              <li class='nav-item'>
                <a href='category.php' class='nav-link active'>
                  <i class='nav-icon fas fa-tags'></i>
                  <p>
                    Category
                  </p>
                </a>
              </li>

              <li class='nav-item'>
                <a href='students.php' class='nav-link'>
                  <i class='nav-icon fas fa-user-graduate'></i>
                  <p>
                    Students
                  </p>
                </a>
              </li>

              <li class='nav-item'>
                <a href='lecturers.php' class='nav-link'>
                  <i class='nav-icon fas fa-chalkboard-teacher'></i>
                  <p>
                    Lecturers
                  </p>
                </a>
              </li>

              <li class='nav-item'>
                <a href='project.php' class='nav-link'>
                  <i class='nav-icon fas fa-tasks'></i>
                  <p>
                    Project
                  </p>
                </a>
              </li>

              ";
               }
          ?>
         
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
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <!--<li class="breadcrumb-item"><a href="#">Layout</a></li>-->
              <li class="breadcrumb-item active">Category</li>
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
    
            
            <div class="col-12">




            <div class="card">
        <div class="card-header">
          <h3 class="card-title">Category</h3>

        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Category Name
                      </th>
                      <th style="width: 30%">
                          Softwares
                      </th>
                      <th>

                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                  </tr>
              </thead>
              
            <tbody>

            <?php 
            /*$sql2 = "SELECT DISTINCT category.categoryname,category.categoryno ,software.softwaretitle
FROM software
INNER JOIN category
ON category.categoryno IN(cat1, cat2)
ORDER BY category.categorynod";
            $result2 = $db->query($sql2);*/
            for($i=1; $i<6; $i++){
                $sql3 = "SELECT DISTINCT category.categoryname,category.categoryno ,software.softwaretitle
    FROM software
    INNER JOIN category
    ON category.categoryno IN(cat1, cat2)
    WHERE category.categoryno= '$i'";
    $result3 = $db->query($sql3);
    $result2= $db->query($sql3);
    $row2 = mysqli_fetch_array($result2,MYSQLI_BOTH);

    //if ($result3->num_rows > 0) { 
    ?>
    <tr>
                      <td>
                          #<?php echo $row2['categoryno'];?>
                      </td>
                      <td>
                          <a>
                          <?php echo $row2['categoryname'];?>
                          </a>
                      </td>
                      <td>
                          <ul class="list-inline">
<?php
    while($row3 = mysqli_fetch_assoc($result3)) { 
        if($row3['softwaretitle']=="Unity"){
            $symbolapp="<i class='fab fa-unity fa-2x'></i>";
        }
        elseif($row3['softwaretitle']=="Android Studio"){
            $symbolapp="<i class='fab fa-android fa-2x'></i>";
        }
        elseif($row3['softwaretitle']=="InVision"){
            $symbolapp="<i class='fab fa-invision fa-2x'></i>";
        }
        elseif($row3['softwaretitle']=="Powerpoint"){
            $symbolapp="<i class='far fa-file-powerpoint fa-2x'></i>";
        }
        elseif($row3['softwaretitle']=="After Effects"){
            $symbolapp="<img alt='Avatar' class='table-avatar' src='assets/static/images/ae.png'>";
        }
        elseif($row3['softwaretitle']=="Maya"){
            $symbolapp="<img alt='Avatar' class='table-avatar' src='assets/static/images/maya.png'>";
        }
        elseif($row3['softwaretitle']=="Illustrator"){
            $symbolapp="<img alt='Avatar' class='table-avatar' src='assets/static/images/adobe-illustrator.png'>";
        }
        elseif($row3['softwaretitle']=="Photoshop"){
            $symbolapp="<img alt='Avatar' class='table-avatar' src='assets/static/images/adobe-photoshop.png'>";
        }
        elseif($row3['softwaretitle']=="Premiere Pro"){
            $symbolapp="<img alt='Avatar' class='table-avatar' src='assets/static/images/pp.png'>";
        }
        elseif($row3['softwaretitle']=="XD"){
            $symbolapp="<img alt='Avatar' class='table-avatar' src='assets/static/images/xd.png'>";
        }
        ?>
        <li class="list-inline-item">
            <?php echo $symbolapp;?>
        </li>
    <?php
    }
    echo "</ul></td><td>
</td>
    <td> Sem 2.2 </td>
</tr>";

}     
        ?>





                  <!--
                              <li class="list-inline-item">
                                  
                                  <img alt="Avatar" class="table-avatar" src="AdminLTE-3.1.0-rc/dist/img/avatar.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="AdminLTE-3.1.0-rc/dist/img/avatar2.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="AdminLTE-3.1.0-rc/dist/img/avatar3.png">
                              </li>
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="AdminLTE-3.1.0-rc/dist/img/avatar4.png">
                              </li>-->
                          
                  
                  
                  

                  
                  
              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>




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