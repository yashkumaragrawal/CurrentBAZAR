<?php
session_start();
if(isset($_SESSION['mail'])) {

if(isset($_POST['old']) && isset($_POST['new']) && isset($_POST['confirm'])) {
  $old = $_POST['old'];
    $new = $_POST['new'];
    $confirm = $_POST['confirm'];
        include '../../localhost.php';
           $query = "UPDATE adminlogin SET pas = '$new' WHERE pas = '$old'";
           $query_run = mysql_query($query);
       if($query_run) {
                header('location:../under.php');
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
