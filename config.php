<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'venus');
   define('DB_PASSWORD', 'password');
   define('DB_DATABASE', 'DDWA_asg1');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>