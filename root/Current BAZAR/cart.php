
<?php
session_start();
if(!isset($_SESSION['email'])) {
    header('location:login.php');
}
else {
include 'include/header2.php';





include 'localhost.php';





$query3 = "SELECT image_id FROM users";
$query_run3 = mysql_query($query3);
$i=0;
while($row3 = mysql_fetch_array($query_run3)) {
 
$x[$i] = $row3['image_id'];
$i++;
}
$query4 = "SELECT id FROM users";
$query_run4 = mysql_query($query4);
while($row4 = mysql_fetch_array($query_run4)) {
$y = $row4['id'];
}
$query = "SELECT * FROM photo" ;
$query_run = mysql_query($query);
$s=0;
while($row = mysql_fetch_array($query_run)) {
    $p=0;
    if($i >=1) {
    for($w=0;$w<$i;$w++){
        if($x[$w]==$row['ind'])
        {
            $p=0;
            break;
        }
        else {
            $p=1;

        }

    }
    if($p==0){
	$img = '<img style="height:240px;" class="img-responsive thumbnail" src="data:image;base64,'.base64_encode($row['image']).'">';
	echo '<div class="col thumbnail" style="height:370px;"><center style="margin:10px;">'.$img.'<h3>'.$row['image_name'].'<br />'.$row['image_detail'].'<br />Rate- &#8377; '.$row['image_price'].'</h3><a href="cartdelete.php?idr='.$row['ind'].'"><button class="btn btn-danger">REMOVE <span class="glyphicon glyphicon-trash"></span></a></button></center></div><br />';

	echo '<hr><br />';
	
    $s=$s+$row['image_price'];
	
}
}

}
echo '<center><h2>Total PRICE -----   &#8377; '.$s.'</h2></center>';
if ($s > 0) { echo '<center><button class="btn btn-info">Proceed to PAYMENT</button></center>';  }
else {
    echo '<center><h1>your cart empty<br />If you want go home page then press <a href="home.php">ok</a></h1></center>';
    
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
    
    
    	<div class="panel">
    	<br />
        <center>
        <form method="POST" action="suggestion.php">
         <h4 class="primary-info"><font color="#800000"><span class="glyphicon glyphicon-pencil">If you want to give any suggestion about any thing then you can write
         </span></font></h4>
         <br />
         <textarea rows="5" placeholder="any suggestion" name="text" style="width:75%;"></textarea>
         <br />
         <input type="submit" class="btn btn-info" name="sub" value="Submit">
        </form>
        </center>
        <h5 style="margin:5px;"><font color="#800000">&copy;all right are reserved for this site</font></h5>
       <br />
        </div>
    </body>

    </html>