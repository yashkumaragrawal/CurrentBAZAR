<?php
include '../include/header2.php';
?>
<html> 
<head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script> 
    </head>
    <body>
    	
    </body>

    </html>
<?php 


include '../localhost.php';
$query = "SELECT * FROM photo";
$query_run = mysql_query($query);
while($row = mysql_fetch_array($query_run)) {

    
	$img = '<img style="height:200px;" class="img-responsive thumbnail" src="data:image;base64,'.base64_encode($row['image']).'">';
	echo '<div class="col col-sm-3 thumbnail" style="height:350px;">'.$img.$row['image_name'].'<br />'.$row['image_detail'].'<br />Rate-'.$row['image_price'].'Rupee<br /><button class="button primary-info" style="border-radius:10px;color:brown;">ADD TO CART</button></div>';
	

}
?>