<?php
include 'include/header.php';
?>
<html> 
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<style>
body {

	background-image: url("images/maxresdefault.jpg");
}

#p1 {
    border-radius: 50px;
}
</style>
<body>
<div class="primary-info">
   <h3 style="color:#800080;"><marquee>Here, you can create your account for registering this site</marquee>
   </h3>
</div>
<div id="p1" class="panel panel-primary col-sm-offset-3 col-sm-6">
  <div id="p1" class="panel-heading">
    <h1><span class="glyphicon glyphicon-user"></span> Sign Up Page</h1>
  </div>
       <form id="p1" action="scripts/register_script.php" method="POST">
        <br>
        USERNAME
        <br />
        <input id="p1" type="text" name="username" class="form-control" required>
        <br />
        GMAIL:
        <br />
        <input id="p1" type="email" name="gmail" class="form-control" required>
        <br />
        PASSWORD:
        <br />
        <input id="p1" type="password" name="password" class="form-control" required>
        <br />
        <input id="p1" type="submit" value="SUBMIT" class="form-control btn btn-info">
        <br />
      </form>
</div>

</body>
</html>
