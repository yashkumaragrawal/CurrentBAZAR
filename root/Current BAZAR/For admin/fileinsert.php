<?php
include 'include/header2.php';
?>
<html>
<head>
     <link rel="../stylesheet" href="css/bootstrap.min.css">
     <script src="../js/jquery.js"></script>
     <script src="../js/bootstrap.min.js"></script>

    <style>
    body{
    	background-image: url("images/asd.jpg");
    }

    </style>
</head>
<body>
<center class="panel col-sm-offset-3 col-sm-6">
<div class="panel panel-heading">Fill up the information about the product</div>
<div class="panel panel-body">
<form action="scripts/fileinsert_script.php" method="POST" enctype="multipart/form-data">
<h3>Image</h3>
<input type="file" name="igm" class="form-control" required>
<h3>Image Name</h3>
<input type="text" name="nam" class="form-control" required>
<h3>Details about the image</h3>
<textarea name="text" cols="40" rows="6" placeholder="Say something about this image..." class="form-control" required></textarea>
<h3>price</h3>
<input type="text" name="price" class="form-control" required>
<br />
<br />
<input type="submit" class="btn btn-info" value="UPLOAD" name="upload">

</form>
</div>
</center>
</body>
</html>