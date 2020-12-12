<?php
    if(isset($_GET['submit'])){
        $myusername = mysqli_real_escape_string($db,$_POST['username']);
        $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
        ?>
        <h4>
            
        <?php echo $mypassword.$myusername;
        //header("location: welcome.php");?>
        </h4>

        <?php
    }
    ?>