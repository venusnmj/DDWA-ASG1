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
                    $studentproj=$row['projectno'];
            }
            elseif($_SESSION['user']=="Staff" || $_SESSION['user']=="Admin"){
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
               if($_SESSION['user']=="Student" || $_SESSION['user']=="Staff"){
              echo "'<li class='nav-item'>
            <a href='welcome.php' class='nav-link'>
              <i class='nav-icon fas fa-user-circle'></i>
              <p>
                About me
              </p>
            </a>
          </li>

          <li class='nav-item'>
            <a href='software.php' class='nav-link active'>
              <i class='nav-icon fas fa-cart-arrow-down'></i>
              <p>
                Softwares
              </p>
            </a>
          </li>";
               }
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
                <a href='software.php' class='nav-link active'>
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
            <h1>Softwares</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <!--<li class="breadcrumb-item"><a href="#">Layout</a></li>-->
              <li class="breadcrumb-item active">Softwares</li>
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





            <?php if($_SESSION['user']=="Admin"){ ?>

             <div class="card">
              <div class="card-header">
                <h3 class="card-title">Software Table</h3>

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
                      <th>Student ID</th>
                      <th>User</th>
                      <th>Notebook Serial No.</th>
                      <th>XD</th>
                      <th>PS</th>
                      <th>Ai</th>
                      <th>AE</th>
                      <th>Maya</th>
                      <th>Premiere</th>
                      <th><i class="fab fa-unity"></i></th>
                      <th><i class="far fa-file-powerpoint"></i></th>
                      <th><i class="fab fa-invision"></i></th>
                      <th><i class="fab fa-android"></i></th>
                    </tr>
                  </thead>
                  <tbody>

<?php $sql2 = "SELECT notebook.studentid, student.givenname, student.familyname, notebook.serialno, notebook.xdno, notebook.psno, notebook.aino, notebook.aeno, notebook.mayano, notebook.ppno, notebook.unityno, notebook.pptno, notebook.inno, notebook.androidno FROM notebook INNER JOIN student ON notebook.studentid= student.studentid ORDER BY studentid";
$result2 = $db->query($sql2);
if ($result2->num_rows > 0) { 
    while($row2 = mysqli_fetch_assoc($result2)) { 
        if($row2['xdno']!=null){
            $checkedxd = "<i class='fas fa-check'></i>";
        }
        else{
            $checkedxd = "<i class='fas fa-times'></i>";
        }
        if($row2['psno']!=null){
            $checkedps = "<i class='fas fa-check'></i>";
        }
        else{
            $checkedps = "<i class='fas fa-times'></i>";
        }
        if($row2['aino']!=null){
            $checkedai = "<i class='fas fa-check'></i>";
        }
        else{
            $checkedai = "<i class='fas fa-times'></i>";
        }
        if($row2['aeno']!=null){
            $checkedae = "<i class='fas fa-check'></i>";
        }
        else{
            $checkedae = "<i class='fas fa-times'></i>";
        }
        if($row2['mayano']!=null){
            $checkedmaya = "<i class='fas fa-check'></i>";
        }
        else{
            $checkedmaya = "<i class='fas fa-times'></i>";
        }
        if($row2['ppno']!=null){
            $checkedpp = "<i class='fas fa-check'></i>";
        }
        else{
            $checkedpp = "<i class='fas fa-times'></i>";
        }
        if($row2['unityno']!=null){
            $checkedunity = "<i class='fas fa-check'></i>";
        }
        else{
            $checkedunity = "<i class='fas fa-times'></i>";
        }
        if($row2['pptno']!=null){
            $checkedppt = "<i class='fas fa-check'></i>";
        }
        else{
            $checkedppt = "<i class='fas fa-times'></i>";
        }
        if($row2['inno']!=null){
            $checkedinV = "<i class='fas fa-check'></i>";
        }
        else{
            $checkedinV = "<i class='fas fa-times'></i>";
        }
        if($row2['androidno']!=null){
            $checkedAndroid = "<i class='fas fa-check'></i>";
        }
        else{
            $checkedAndroid = "<i class='fas fa-times'></i>";
        }
        
        echo "<tr>
        <td>". $row2['studentid']."</td>
        <td>" . $row2['givenname'] . " ".$row2['familyname']."</td>
        <td>". $row2['serialno']. "</td>
        <td>". $checkedxd ."</td>
        <td>". $checkedps ."</td>
        <td>". $checkedai ."</td>
        <td>". $checkedae ."</td>
        <td>". $checkedmaya ."</td>
        <td>". $checkedpp ."</td>
        <td>". $checkedunity ."</td>
        <td>". $checkedppt ."</td>
        <td>". $checkedinV ."</td>
        <td>". $checkedAndroid ."</td>
      </tr>";
        
    }
}
	
}
elseif ($_SESSION['user']=="Student"){?>
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Software Table</h3>

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
$sql2 = "SELECT * FROM project WHERE projectno ='$studentproj'";
$result2 = $db->query($sql2);
if ($result2->num_rows > 0) { 
    while($row2 = mysqli_fetch_assoc($result2)) { 
        if($row2['sw1']=="Android Studio"){
            $software1= "<i class='fab fa-android'></i>";
        }
        elseif($row2['sw1']=="InVision"){
            $software1= "<i class='fab fa-invision'></i>";
        }
        else{
            $software1=$row2['sw1'];
        }
        if($row2['sw2']=="Unity"){
            $software2= "<i class='fab fa-unity'></i>";
        }
        elseif($row2['sw2']=="Powerpoint"){
            $software2= "<i class='far fa-file-powerpoint'></i>";
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
      </tr>";
    }
}
} 
elseif ($_SESSION['user']=="Staff"){?>
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Software Table</h3>

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
$sql2 = "SELECT * FROM project WHERE projectno IN('$projectone','$projecttwo')";
$result2 = $db->query($sql2);
if ($result2->num_rows > 0) { 
    while($row2 = mysqli_fetch_assoc($result2)) { 
        if($row2['sw1']=="Android Studio"){
            $software1= "<i class='fab fa-android'></i>";
        }
        elseif($row2['sw1']=="InVision"){
            $software1= "<i class='fab fa-invision'></i>";
        }
        else{
            $software1=$row2['sw1'];
        }
        if($row2['sw2']=="Unity"){
            $software2= "<i class='fab fa-unity'></i>";
        }
        elseif($row2['sw2']=="Powerpoint"){
            $software2= "<i class='far fa-file-powerpoint'></i>";
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
      </tr>";
    }
}
} ?>
                    <!--<tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>219</td>
                      <td>Alexander Pierce</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-warning">Pending</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>657</td>
                      <td>Bob Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-primary">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>175</td>
                      <td>Mike Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-danger">Denied</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>134</td>
                      <td>Jim Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-success">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>494</td>
                      <td>Victoria Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-warning">Pending</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>832</td>
                      <td>Michael Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-primary">Approved</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>
                    <tr>
                      <td>982</td>
                      <td>Rocky Doe</td>
                      <td>11-7-2014</td>
                      <td><span class="tag tag-danger">Denied</span></td>
                      <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                    </tr>-->
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>




            <?php if($_SESSION['user']=="Admin"){?>
    <div class="card">
              <div class="card-header">
                <h3 class="card-title">Software Table</h3>

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
$sql2 = "SELECT * FROM project WHERE projectno IN('$projectone','$projecttwo')";
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
}
} ?>
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