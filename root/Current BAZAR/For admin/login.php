<?php
include 'include/header.php';
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Day 001 Login Form</title>
  
  
  

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  <div class="login-wrap">
           
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
		<form action="scripts/login_script.php" method="POST">
			<div class="sign-in-htm">
			
				<div class="group">
					<label for="user" class="label">Gmail</label>
					<input id="user" type="gmail" class="input" name="gmail" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="password" required>
				</div>
				
				<div class="group">
					<input type="submit" class="button" value="Sign In">
				</div>
				<div class="hr"></div>
				<h3><font color="#FFF">If you have already account,Else create a account</font></h3>
			</div>
			</form>
			<form action="scripts/signup_script.php" method="POST">
			<div class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input" name="username" required>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password" name="password" required>
				</div>
				<div class="group">
					<label for="gmail" class="label">Gmail</label>
					<input id="gmail" type="gmail" class="input" data-type="gmail" name="gmail" required>
				</div>
				
				<div class="group">
					<input type="submit" class="button" value="Sign Up">
				</div>
				<div class="hr"></div>
				<h3><font color="#FFF">For New Users Only</font></h3>
			</div>
			</form>
		</div>
	</div>
</div>
  
  
</body>
</html>
