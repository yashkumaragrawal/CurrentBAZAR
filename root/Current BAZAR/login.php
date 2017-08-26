<?php
include 'include/header.php';
?>
<html> 
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <style>
body {

    background-image: url("images/maxresdefault.jpg");
}


#p1 {
    border-radius: 50px;
} 

</style>  
</head>
<body> 
<div class="primary-info">
<h3 style="color:#800080;"><marquee>If you are already registerd then you can directly log in. Else Create a account</marquee></h3>
</div>
<div id="p1" class="panel panel-primary col-sm-offset-3 col-sm-6">
 <div id="p1" class="panel-heading">
 <h1><span class="glyphicon glyphicon-log-in"></span> Log In Page</h1>
 </div>
     <form id="p1" action="scripts/login_script.php" method="GET">
     <h1><span class="glyphicon glyphicon-log-in"></span> Log In Page</h1>
     <br>
     GMAIL:
     <br>
     <input id="p1" type="gmail" name="gmail" class="form-control" required>
     <br>
     PASSWORD:
     <br>
     <input id="p1" type="password" name="password" class="form-control" required>
     <br>
     <input id="p1" type="submit" value="SUBMIT" name="mit" class="form-control btn btn-info">
     </form>
</div>
<h3 style="color:#800000;"><marquee>For Continue the shopping,you must login.</marquee></h3>

</body>
</html>