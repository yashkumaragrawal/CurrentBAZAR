<?php
session_start();
if(isset($_SESSION['email'])) {
if($_GET['id'] == 1) {
include 'include/header2.php';

include 'localhost.php';

$query = "SELECT * FROM photo WHERE image_price >= 0 AND image_price <= 999 ";

$query_run = mysql_query($query); 
while($row = mysql_fetch_array($query_run)) {

    
	$img = '<img style="height:200px;" class="img-responsive thumbnail" src="data:image;base64,'.base64_encode($row['image']).'">';
	echo '<div class="col col-sm-3 thumbnail" style="height:350px;">'.$img.$row['image_name'].'<br />'.$row['image_detail'].'<br />Rate- &#8377; '.$row['image_price'].'<br /><button class="button btn btn-info" style="border-radius:10px;color:brown;"><a href="cart_script.php?id='.$row['ind'].'">ADD TO CART</a></button></div>';
	

}
echo '<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />';
include 'suggestion.php'; 
}
else if($_GET['id'] == 2) {
include 'include/header2.php';

include 'localhost.php';

$query = "SELECT * FROM photo WHERE image_price >= 1000 AND image_price <= 9999 ";

$query_run = mysql_query($query); 
while($row = mysql_fetch_array($query_run)) {

    
    $img = '<img style="height:200px;" class="img-responsive thumbnail" src="data:image;base64,'.base64_encode($row['image']).'">';
    echo '<div class="col col-sm-3 thumbnail" style="height:350px;">'.$img.$row['image_name'].'<br />'.$row['image_detail'].'<br />Rate- &#8377; '.$row['image_price'].'<br /><button class="button btn btn-info" style="border-radius:10px;color:brown;"><a href="cart_script.php?id='.$row['ind'].'">ADD TO CART</a></button></div>';
    

}
echo '<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />';
include 'suggestion.php'; 
}
else if($_GET['id'] == 3) {
include 'include/header2.php';

include 'localhost.php';

$query = "SELECT * FROM photo WHERE image_price >= 10000 AND image_price <= 99999 ";

$query_run = mysql_query($query); 
while($row = mysql_fetch_array($query_run)) {

    
    $img = '<img style="height:200px;" class="img-responsive thumbnail" src="data:image;base64,'.base64_encode($row['image']).'">';
    echo '<div class="col col-sm-3 thumbnail" style="height:350px;">'.$img.$row['image_name'].'<br />'.$row['image_detail'].'<br />Rate- &#8377; '.$row['image_price'].'<br /><button class="button btn btn-info" style="border-radius:10px;color:brown;"><a href="cart_script.php?id='.$row['ind'].'">ADD TO CART</a></button></div>';
    

}
echo '<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />';
include 'suggestion.php'; 
}else if($_GET['id'] == 4) {
include 'include/header2.php';

include 'localhost.php';

$query = "SELECT * FROM photo WHERE image_price >=100000 AND image_price <= 999999 ";

$query_run = mysql_query($query); 
while($row = mysql_fetch_array($query_run)) {

    
    $img = '<img style="height:200px;" class="img-responsive thumbnail" src="data:image;base64,'.base64_encode($row['image']).'">';
    echo '<div class="col col-sm-3 thumbnail" style="height:350px;">'.$img.$row['image_name'].'<br />'.$row['image_detail'].'<br />Rate- &#8377; '.$row['image_price'].'<br /><button class="button btn btn-info" style="border-radius:10px;color:brown;"><a href="cart_script.php?id='.$row['ind'].'">ADD TO CART</a></button></div>';
    

}
echo '<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />';
include 'suggestion.php'; 
}else if($_GET['id'] == 5) {
include 'include/header2.php';

include 'localhost.php';

$query = "SELECT * FROM photo WHERE image_price >= 1000000 ";

$query_run = mysql_query($query); 
while($row = mysql_fetch_array($query_run)) {

    
    $img = '<img style="height:200px;" class="img-responsive thumbnail" src="data:image;base64,'.base64_encode($row['image']).'">';
    echo '<div class="col col-sm-3 thumbnail" style="height:350px;">'.$img.$row['image_name'].'<br />'.$row['image_detail'].'<br />Rate- &#8377; '.$row['image_price'].'<br /><button class="button btn btn-info" style="border-radius:10px;color:brown;"><a href="cart_script.php?id='.$row['ind'].'">ADD TO CART</a></button></div>';
    

}
echo '<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />';
include 'suggestion.php'; 
}
else
{
    header('location:home.php');
}
}
else
{
	header('location:login.php');
}
?>
<html> 
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script> 
    </head>
    <body>
    <br />
    <br />
    
    	<div class="well" style="margin:10px;">
    	<br />
        <center style="margin:10px;>
        <form method="POST" action="suggestion.php">
         <h4 class="primary-info"><font color="#800000"><span class="glyphicon glyphicon-pencil">If you want to give any suggestion about any thing then you can write
         </span></font></h4>
         <br />
         <textarea rows="5" placeholder="any suggestion" name="text" style="width:75%;"></textarea>
         <br />
         <input type="submit" class="btn btn-info" name="sub" value="Submit">
        </form>
        </center>
        <h5 style="margin:10px;><font color="#800000">&copy;all right are reserved for this site</font></h5>
       <br />
        </div>
    </body>

    </html>