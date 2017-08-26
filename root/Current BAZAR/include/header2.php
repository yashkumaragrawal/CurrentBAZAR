
<html> 
<head>
<link rel="stylesheet" href="../css/bootstrap.min.css">
        <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>

<body> 
<div class="navbar navbar-inverse">
         <div class="container-fluid">
             <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar"> 
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
                <a href="home.php" class="navbar-brand">CurrentBAZAR.in</a><img src="images/logo.png" style="max-width: 40px;margin-top: 7px;float: left;">
                <form action="search.php" method="POST" style="margin: 11px;float: right;">
               <input type="search" placeholder="search" name="sea"><input type="submit" value="search">
              
                </form>
                
             </div>
             <div class="collapse navbar-collapse" id="mainNavBar">
             
             <ul class="nav navbar-nav navbar-right">
             <li><a href="#" data-toggle="dropdown" class="dropdown-toggle"> Select price
                 <span class="caret"></span></a>
                 <ul class="dropdown-menu">
                  <li><a href="price.php?id=1">&#8377-1-999</a></li>
                  <li class="divider"></li>
                  <li><a href="price.php?id=2">&#8377-1000-9999</a></li>
                                    <li class="divider"></li>
                  <li><a href="price.php?id=3">&#8377-10000-99999</a></li>
                                    <li class="divider"></li>
                  <li><a href="price.php?id=4">&#8377-100000-999999</a></li>
                                    <li class="divider"></li>
                  <li><a href="price.php?id=5">above &#8377-1000000</a></li>
                                    <li class="divider"></li>
                 
                  </ul>
                 </li>


                 <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                 <li><a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-cog"></span> Setting
                 <span class="caret"></span></a>
                 <ul class="dropdown-menu">
                  <li><a href="profile.php"><span class="glyphicon glyphicon-bishop"></span> Update profile</a></li>
                  <li class="divider"></li>
                  <li><a href="password.php"><span class="glyphicon glyphicon-gbp"></span> Change a password</a></li>
                  <li class="divider"></li>
                  <li><a href="contact.php"><span class="glyphicon glyphicon-modal-window"></span> Contact Us</a></li>
                  </ul>
                 </li>
                 <li><a href="index2.php"><span class="glyphicon glyphicon-log-out"></span> log out</a></li>
              </ul>    
       </div>
         </div>
      </div>
  </body>
</html>
