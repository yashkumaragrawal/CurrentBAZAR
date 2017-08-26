<?php
include 'localhost.php';
session_start();

if(isset($_SESSION['email'])) { 
	include 'include/header2.php';
   $jkl = $_GET['id'];
   $ter = $_SESSION['email'];
   $query = "SELECT user_id FROM login WHERE gmail = '$ter'";
   
   $query_run = mysql_query($query);
   while($row = mysql_fetch_assoc($query_run)) {
     $yer = $row['user_id'];

   }
   $query2 = "INSERT INTO users (id,usr_id,image_id) VALUES ('','$yer','$jkl')";
   $query_run2 = mysql_query($query2);
   
   echo '<center>are you want actually this thing in add to cart then press <a class="btn btn-info" href="cart2.php?ide='.$yer.'">ok</a></center>';
}
else {

	header('location:login.php');
}
?>
<html> 
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    </head>
    <body> </body></html>