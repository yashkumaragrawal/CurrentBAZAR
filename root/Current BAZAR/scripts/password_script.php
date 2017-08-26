<?php
session_start();
if(isset($_SESSION['email'])) {
include 'include/header2.php';
if(isset($_POST['old']) && isset($_POST['new']) && isset($_POST['confirm'])) {
  $old = $_POST['old'];
    $new = $_POST['new'];
    $confirm = $_POST['confirm'];
        include '../localhost.php';
           $query = "UPDATE login SET pas = '$new' WHERE pas = '$old'";
           $query_run = mysql_query($query);
       if($query_run) {
                header('location:../home.php');
       }
          
      } 
  
      
   else {
      echo 'Your confirm and new are not same';
   }
 }
 
 else {

  header('location:../login.php');
 }

  
?>
