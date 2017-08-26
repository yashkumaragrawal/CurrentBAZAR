<?php
session_start();
if(!isset($_SESSION['mail'])) {
        header('location:../login.php');
}
else {
if(isset($_POST['upload'])) {
	
	
	$host = 'localhost';
        $user = 'root';
        $pass = '';
        $mysql_db = 'imgdata';
        mysql_connect($host,$user,$pass); 
        mysql_select_db($mysql_db);
        $image = addslashes(file_get_contents
        ($_FILES['igm']['tmp_name']));
        $text = $_POST['text'];
        $price = $_POST['price'];
        $nam = $_POST['nam'];
        $query = "INSERT INTO photo (image, image_name, image_detail,image_price) VALUES ('$image','$nam','$text','$price')";
      
        $query_run = mysql_query($query);
        if($query_run){
                header('location:../under.php');
        }
        else{
                header('location:../notinsert.php');
        }
 
}
}
?>