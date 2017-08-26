<?php
if(isset($_POST['password']) && isset($_POST['gmail'])) {
	$password = $_POST['password'];
	$gmail = $_POST['gmail'];
	   session_start();
	    $_SESSION['mail'] = $gmail;
		include '../../localhost.php';
		
	    $query = "SELECT pas FROM adminlogin WHERE pas = '$password' AND user_gmail='$gmail'";
	   
	    $query_run = mysql_query($query);
	    $num = mysql_num_rows($query_run);
	    if($num > 0) {
		 header('location:../under.php');
	     }
	    else {
		echo 'either you are not resiter or your password and gmail are not matching So press
		<a href="../login.php"> Ok </a>then reenter the Password and Gmail';
	     }
			
	
	
}
?>