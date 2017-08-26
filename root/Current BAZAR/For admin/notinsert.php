<?php
session_start();
if(isset($_SESSION['mail'])) {
	include 'include/header2.php';
	echo 'This image is not insert ';
	header('refresh:5;fileinsert.php');
}
?>