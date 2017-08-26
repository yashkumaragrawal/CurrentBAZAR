<?php
session_start();
if(!isset($_SESSION['email'])) { 
  header('location:../login.php');
}
else {
  include '../include/header2.php';
if(isset($_POST['username']) && isset($_POST['gmail'])) {
  $username = $_POST['username'];
  $gmail = $_POST['gmail'];
  include '../localhost.php';
      
      $query = "UPDATE login SET username = '$username',gmail = '$gmail' WHERE gmail = '$gmail'";
      if($query_run = mysql_query($query)) {
       echo '<html>
         <head>
         <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
         </head>
          <body>
          <div class=" container well">
          <h3>Name  :   </h3><h2>'.$username.'</h2>
           <h3>gmail  :   </h3><h2>'.$gmail.'</h2>
          
          </div>
          <div class="primary-info container"><h4><i><span class="glyphicon glyphicon-star"></span>
          If you want to change your profile then press<a href="../profile.php"> Change profile</a></i></h4></div>
          <div class="primary-sucess container"><h4><i><span class="glyphicon glyphicon-star"></span>
          If you want to go on Home Page then press<a href="../home.php"> OK</a></i></h4></div>
          </body>
           </html>';
    }  
  } 
  else {
    echo 'please fill all the option.';
  }
}

?>