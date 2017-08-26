<?php
if(isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['gmail'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$to = $_POST['gmail'];
	session_start();
	$_SESSION['email'] = $to;
    
   include '../localhost.php';
	    $query = "INSERT INTO `login` (`username`, `pas`, `gmail`, `num`) VALUES ('$username','$password','$to','')";
	    $query_run = mysql_query($query);
		if($query_run) {
              header('location:../home.php');
		}
		

	 else {
		 echo ' you are wrong so you are not resitered sucessfully';
	 }

}

?>