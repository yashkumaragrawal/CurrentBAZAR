<?php
if(isset($_GET['password']) && isset($_GET['gmail'])) {
	$password = $_GET['password'];
	$gmail = $_GET['gmail'];
	   session_start();
	    $_SESSION['email'] = $gmail;
		include '../localhost.php';
		
	    $query = "SELECT * FROM login WHERE '$password' = pas AND '$gmail' = gmail";
	    
	    $query_run = mysql_query($query);
	    $num = mysql_num_rows($query_run);
	    if($num > 0) {
		 header('location:../home.php');
	     }
	    else {
		echo 'either you are not resiter or your password and gmail are not matching So press
		<a href="../login.php"> Ok </a>then reenter the Password and Gmail';
	     }
			
	
	
}
?>