
<?php
session_start();
if(!isset($_SESSION['email'])) {
    header('location:login.php');
}
else {
include 'include/header2.php';


echo '<div class="container well">
           <h2 class="panel panel-heading">CurrentBAZAR.in</h2>
           <h4 class="panel panel-body">There are available many products.You can buy any ITEM from this site,If this item is not available then you will get as soon as possible.And you can write in suggestion about the product.</h4>
      </div>';


include 'localhost.php';
$query = "SELECT * FROM photo";
$query_run = mysql_query($query);
while($row = mysql_fetch_array($query_run)) {

    
	$img = '<img style="height:200px;" class="img-responsive thumbnail" src="data:image;base64,'.base64_encode($row['image']).'">';
	echo '<div class="col col-sm-3 thumbnail" style="height:390px;">'.$img.$row['image_name'].'<br />'.$row['image_detail'].'<br />Rate- &#8377; '.$row['image_price'].'<br /><button class="button btn btn-info" style="border-radius:10px;color:brown;"><a href="cart_script.php?id='.$row['ind'].'">ADD TO CART</a></button></div>';
	 
}

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
        <center style="margin:10px;">
       <form action="suggestion.php" method="POST">
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