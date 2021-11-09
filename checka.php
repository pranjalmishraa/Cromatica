<?php
session_start();
 $captcha = $_POST['cName'];



 $_SESSION["name"] = $_POST['name'];
 $name = $_POST['name'];

 $_SESSION['email']=  $_POST['email'];
 $email =  $_POST['email'];

  $_SESSION["number"] =  $_POST['number'];
  $number =  $_POST['number'];

  $prop = $_POST['prop'];
 
 if($_SESSION['CODE']==$captcha){
     include 'info.php';
 }
 else{
    echo '<script>alert("Please Enter Correct captcha code")</script>';
    ?>
    <script>
           window.location.href = 'index.php';
        
       </script>
       <?php 
 }

?>