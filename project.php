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
                <a href='category.php' class='nav-link'>
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
                <a href='project.php' class='nav-link active'>
                  <i class='nav-icon fas fa-tasks'></i>
                  <p>
                    Project
                  </p>
                </a>
              </li>

              ";

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
            <h1>Project</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <!--<li class="breadcrumb-item"><a href="#">Layout</a></li>-->
              <li class="breadcrumb-item active">Project</li>
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
                <h3 class="card-title">Project &amp; Lecturer Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Project No</th>
                      <th>Project title</th>
                      <th>Lecturer Contact No</th>
                      <th>Lecturer name</th>
                      <th>Year Enrolled</th>
                      <th>Hours</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                    </tr>
                  </thead>
                  <tbody>

<?php $sql2 = "SELECT lecturer.staffid, lecturer.givenname, lecturer.familyname, lecturer.staffcontactno, 
lecturer.datejoined, lecturer.yearjoined, project.title, project.hours, project.startdate, project.enddate,
project.projectno,lecturer.project1,lecturer.project2
FROM project
INNER JOIN lecturer 
ON project.projectno IN(lecturer.project1,lecturer.project2)
ORDER BY project.projectno";
$result2 = $db->query($sql2);
if ($result2->num_rows > 0) { 
    while($row2 = mysqli_fetch_assoc($result2)) { 
        echo "<tr>
        <td>". $row2['projectno']."</td>
        <td>" .$row2['title']."</td>
        <td>". $row2['staffcontactno']. "</td>
        <td>". $row2['givenname'] . " ".$row2['familyname']."</td>
        <td>". $row2['yearjoined'] ."</td>
        <td>". $row2['hours'] ."</td>
        <td>". $row2['startdate'] ."</td>
        <td>". $row2['enddate'] ."</td>
      </tr>";
    }
}
	

?>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>











            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Project &amp; Software Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                  <tr>
                      <th>Project no</th>
                      <th>Project title</th>
                      <th>Software 1</th>
                      <th>Software 2</th>
                      <th>Software 3</th>
                    </tr>
                  </thead>
                  <tbody>

                  <?php
$sql2 = "SELECT * FROM project";
$result2 = $db->query($sql2);
if ($result2->num_rows > 0) { 
    while($row2 = mysqli_fetch_assoc($result2)) { 
        if($row2['sw1']=="Android Studio"){
            $software1= "<i class='fab fa-android fa-lg'></i>";
        }
        elseif($row2['sw1']=="InVision"){
            $software1= "<i class='fab fa-invision fa-lg'></i>";
        }
        else{
            $software1=$row2['sw1'];
        }
        if($row2['sw2']=="Unity"){
            $software2= "<i class='fab fa-unity fa-lg'></i>";
        }
        elseif($row2['sw2']=="Powerpoint"){
            $software2= "<i class='far fa-file-powerpoint fa-lg'></i>";
        }
        else{
            $software2=$row2['sw2'];
        }

        echo "<tr>
        <td>". $row2['projectno']."</td>
        <td>" . $row2['title'] . "</td>
        <td>". $software1. "</td>
        <td>". $software2 ."</td>
        <td>". $row2['sw3'] ."</td>
      </tr>
      ";
    }

} ?>
            
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>








            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Project &amp; Students Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>Project No</th>
                      <th>Project title</th>
                      <th>Student Contact No</th>
                      <th>Student name</th>
                      <th>Company Name</th>
                      <th>Hours</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                    </tr>
                  </thead>
                  <tbody>

<?php $sql2 = "SELECT student.givenname, student.familyname, student.studentcontactno, 
student.studentid, student.projectno, project.projectno, project.title, project.companyname,
project.hours, project.startdate, project.enddate
FROM student
INNER JOIN project
ON project.projectno = student.projectno
ORDER BY project.projectno";
$result2 = $db->query($sql2);
if ($result2->num_rows > 0) { 
    while($row2 = mysqli_fetch_assoc($result2)) { 
        echo "<tr>
        <td>". $row2['projectno']."</td>
        <td>" .$row2['title']."</td>
        <td>". $row2['studentcontactno']. "</td>
        <td>". $row2['givenname'] . " ".$row2['familyname']."</td>
        <td>". $row2['companyname'] ."</td>
        <td>". $row2['hours'] ."</td>
        <td>". $row2['startdate'] ."</td>
        <td>". $row2['enddate'] ."</td>
      </tr>";
    }
}
	

?>
                    
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