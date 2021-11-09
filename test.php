<?php
session_start();
 $captcha = $_POST['cName'];

 if($_SESSION['CODE']==$captcha){
     header('location:touch.php');
 }
 else{
    ?>
    <script>
        window.location.href = 'index.html';
        alert("Please enter correct captcha code !!");
    </script>
    <?php
 }
?>