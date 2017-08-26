<?php
session_start();
if(!isset($_SESSION['mail'])) {
    header('location:login.php');
}
else {

  include 'include/header2.php';
}
?>
<html> 
<head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <style>
    body {
      background-image: url("images/black-dark-trees-wallpaper.jpg");
      width: 100%;
    }
    
    </style>
</head>
<body> 
      <br>
<center><div>
       <div class="panel-heading">
      <h2><font color="#FFF">Here you can change your password</font></h2>
       </div>
<div class="panel-body">
<form action="scripts/password_script.php" method="POST">
<h3><font color="#FFF">Old Pasword</font></h3>
<input type="password" name="old" required>
<br>
<h3><font color="#FFF">New Pasword</font></h3>
<input type="password" name="new" required>
<br>
<h3><font color="#FFF">Confirm Pasword</font></h3>
<input type="password" name="confirm" required>
<br />
<br />
<input type="submit" value="Submit" class="primary-sucess">
</form>
</div>
</div></center>
</body>
</html>