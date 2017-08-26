<?php
session_start();
if(!isset($_SESSION['email'])) {
    header('location:login.php');
}
else {
  include 'include/header2.php';
}
?>
<html> 
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
     
     body {
      background-image : url("images/maxresdefault (1).jpg");
     }
    </style>
    </head>
<body> 
<div class="well container col-sm-offset-3 col-sm-6">
<div class="panel panel-heading">
<h2>Change Your Profile</h2>
</div>
<div class="panel panel-body">
<form action="scripts/profile_script.php" method="POST">
<h3> Name</h3>
<input type="text" value="<?php $tkl = $_SESSION['email']; $host = 'localhost'; $user = 'root'; $pass = ''; $mysql_db = 'imgdata';
        mysql_connect($host,$user,$pass); 
        mysql_select_db($mysql_db);
        $query = "SELECT username FROM login WHERE gmail='$tkl'";
       $query_run = mysql_query($query);
       
    $num = mysql_num_rows($query_run);
    if($num > 0) {
      $row = mysql_fetch_assoc($query_run);
     echo $row['username'];
    }
?>" name="username" required>
<br>
<h3> Gmail</h3>
<input type="email" value="<?php
  
  echo $_SESSION['email'];

?>" name="gmail" required>
<br>

<br>
    <input type="submit" class="primary-info" value="Upload" name="submit">
    <br>
</form>
</div>
</div>
</body>
</html>