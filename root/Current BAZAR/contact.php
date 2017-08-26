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
    #p1 {
      width: 35%;
      height:50%;
      border: 2px solid #FFF;
    }
    #p2 {
      background-image: url("images/iphone 007.jpg");
    }
    

    </style>
</head>
<body> 
<div id="p3" class="panel panel-primary col-sm-offset-3 col-sm-6">
      <div class="panel-heading">
      <h1 class="primary-info"><font color="00FF00">Information about the Developer</font></h1>
      </div>
      <div id="p2" class="panel-body">
      <h3><font color="#FFFFFF"><span class="glyphicon glyphicon-phone-alt"></span> Contact No.</font></h3>
      <div><font color="#FFFFFF">9982546262</font></div>
      <h3><font color="#FFFFFF"> Creator Name</font></h3>
      <h4><u><font color="#FFFFFF">YASH KUMAR AGRAWAL</font></u></h4>
      <center><div><img id="p1" class="img-responsive img-circle" src="images/IMG_20170823_103506.jpg"></div></center>
      <h3><font color="#FFFFFF"> My Gmail</font></h3>
      <h5><font color="#FFFFFF">16ucs220@lnmiit.ac.in</font></h5>
      <h3><font color="#FFFFFF"> SKILLS </font></h3>
      <h5><font color="#FFFFFF">HTML,CSS,PHP,MYSQL,BOOTSTRAP,XAMPP SERVER</font></h5>
      <h5><font color="#FFFFFF">C LANGUAGE,DATA STRUCTURE AND ALGORITHM,JAVA</font></h5>
      </div>
</div>
</body>
</html>