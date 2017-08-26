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
    	background-color: #C0C0C0;
    }
   #j1 {
    width: 100%;
    height: 330px;
   }
   #button {
   	background-color : #33FFFF;
   
   	border-radius: 10px;
   }
   #button:hover {
   background-color : #FFA500;

   }
    </style>
  
</head>
<body> 
<h3><marquee><font color=" #00FF7F">Here you can buy many products.To continue shopping click on SHOP NOW</font></marquee></h3>
<div id="myCarousel" class="container carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
   
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img id="j1" src="images/walking-2635038_960_720.jpg" alt="Walkig Style">
      
    </div>

    <div class="item">
      <img id="j1" src="images/joy-2483926_960_720.jpg" alt="Joyness">
     
    </div>

    <div class="item">
      <img id="j1" src="images/magnifying-glass-2598507__340.jpg" alt="magnifying-glass">
      
    </div>
    <div class="item">
      <img id="j1" src="images/men-2425121_960_720.jpg" alt="Dresses">
      
    </div>
    <div class="item">
      <img id="j1" src="images/bulldozer-2195329_960_720.jpg" alt="Bulldozer">
      
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<center><button class="button" id="button" style="height: 80px; width: 200px;"><font color="#990000"><h3><a href="login.php">SHOP NOW</a></h3></font></button></center>
<div class="container">

<div class="well" style="margin: 10px;float:left;">
<div class="panel">
<h4>   <span class=".glyphicon glyphicon-option-vertical">  available all categories</span></h4>
</div>
<div class="panel-body">
<div style="float:left;">
<img style="float:bottom;border:solid black 1px;height:140px;width: 130px;margin: 20px;" src="images/Classic-Music.jpg">
<p>
electronics item
</p>
</div>
<div>
<img style="float:bottom;border:solid black 1px;height:140px;width: 130px;margin: 10px;" src="images/pexels-photo-322207.jpeg">
<p>
fashion's design
</p>
</div>
<div style="float:left;">
<img style="float:bottom;border:solid black 1px;height:140px;width: 130px;margin: 10px;margin: 20px;" src="images/pexels-photo-439227.jpeg">
<p>
Home's item
</p>
</div>
<div>
<img style="float:bottom;border:solid black 1px;height:140px;width: 130px;margin: 10px;" src="images/personal.jpg">
<p>
personal item
</p>
</div>
<div>
<button><h4><a href="login.php">For all categories</a></h4></button>
</div>
</div> 

</div>
<div class="well" style="margin:10px;">
<div class="panel panel-heading">
<h2>India's Online Store</h2>
</div>
<br />
<br />
<div >

<h3><span class="glyphicon glyphicon-star"></span> 100% ORIGINAL PRODUCTS</h3>
<br />
<h3><span class="glyphicon glyphicon-star"></span> ALL PRODUCTS ARE AVAILABLE</h3>
<br />
<h3><span class="glyphicon glyphicon-star"></span> 100% SAFE PRODUCTS</h3>
<br />
</div>
</div>
<div class="well" style="margin:20px;">
<div class="panel panel-heading">
<h3>CurrentBAZAR.in</h3>
</div>
<div class="panel panel-heading">
<h4>This site is available for all.Here you can Buy many Products.Here also available easy method of payment.</h4>
</div>
</div>
<div class="well" style="margin:20px;">
      <br />
        <center>
        <form method="POST" action="suggestion2.php">
         <h4 class="primary-info"><font color="#800000"><span class="glyphicon glyphicon-pencil">If you want to give any suggestion about This Site
         </span></font></h4>
         <br />
         <textarea rows="5" placeholder="any suggestion" name="text" style="width:75%;"></textarea>
         <br />
         <input type="submit" class="btn btn-info" name="sub" value="Submit">
        </form>
        </center>
        <h5><font color="#800000">&copy;all right are reserved for this site</font></h5>
       <br />
        </div>
</div>
<br /><br />
</body>
</html>