<?php
session_start();
error_reporting(-1);
 $captcha = $_POST['cName'];



 $_SESSION["name"] = $_POST['name'];
 $name = $_POST['name'];

 $_SESSION['email']=  $_POST['email'];
 $email =  $_POST['email'];

  $_SESSION["number"] =  $_POST['number'];
  $number =  $_POST['number'];

  $_SESSION["prop"] =  $_POST['prop'];
  $prop =  $_POST['prop'];
 
 if($_SESSION['CODE']==$captcha){
     include 'info.php';
 }
 else{

    <script>
        alert("Please Enter Correct captcha code");
           window.location.href = 'index.html';
        
       </script>
       <?php 
 }

?>