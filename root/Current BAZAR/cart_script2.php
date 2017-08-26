
<?php
session_start();
if(!isset($_SESSION['email'])) {
    header('location:../login.php');
}
else {
include '../include/header2.php';


echo '<div class="container well">
           <h2 class="panel panel-heading">CurrentBAZAR.in</h2>
           <h4 class="panel panel-body">There are available many products.You can buy any ITEM from this site,If this item is not available then you will get as soon as possible.</h4>
      </div>';
     $yer = $_GET['ide'];

include '../localhost.php';
$query2 = "SELECT * FROM photo";
$query3 = "SELECT image_id FROM users WHERE usr_id= '$yer'";
$query_run2 = mysql_query($query2);
$query_run3 = mysql_query($query3);
$query4 = "SELECT id FROM users";
$query_run4 = mysql_query($query4);
while($row4 = mysql_fetch_array($query_run4)) {
$y = $row4['id'];
}
 $i=0;
while($row3 = mysql_fetch_array($query_run3)) {
 
$x[$i] = $row3['image_id'];
$i++;
}


while($row2 = mysql_fetch_array($query_run2)) {
    
    
	$img = '<img style="height:200px;" class="img-responsive thumbnail" src="data:image;base64,'.base64_encode($row2['image']).'">';
    for($r=0;$r<$i;$r++){
        if($x[$r]==$row2['ind'])
        {
            $p=0;
            break;
        }
        else {
            $p=1;

        }

    }
    if($p==1) {
	echo '<div class="col col-sm-3 thumbnail" style="height:390px;">'.$img.$row2['image_name'].'<br />'.
    $row2['image_detail'].'<br />Rate- &#8377; '.$row2['image_price'].'<br /><button class="button btn btn-info" style="border-radius:10px;color:brown;"><a href="cart_script.php?id='.$row2['ind'].'">ADD TO CART</a></button></div>';
}
else {
echo '<div class="col col-sm-3 thumbnail" style="height:390px;">'.$img.$row2['image_name'].'<br />'.
    $row2['image_detail'].'<br />Rate- &#8377; '.$row2['image_price'].'<br /><button class="button btn btn-info" style="border-radius:10px;color:brown;"><a href="cart_script.php?id='.$row2['ind'].'">ADDED TO CART</a></button></div>';
}
	 
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