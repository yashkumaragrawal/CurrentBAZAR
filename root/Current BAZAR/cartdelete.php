
<?php
session_start();
if(!isset($_SESSION['email'])) {
    header('location:login.php');
}
else {






include 'localhost.php';






$dfg = $_GET['idr'];
$query2 = "DELETE FROM users WHERE image_id=$dfg";

$query_run2 = mysql_query($query2);

    header('location:cart.php');

}
?>
