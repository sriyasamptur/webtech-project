<?php
include('Login.php');
?>
<html>
<head>
<style>
body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
}
</style>
<title>Login Form</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="loginbox">
<img src="avatar.png" class="avtar">
<h1>Sign Up</h1>
	<form align='center' method="post" action="signup.php">
		<?php include("errors.php");?>
		<input type="text" name="username" required placeholder="Username" id="ip"><br><br>
		<input type="password" name="password" required placeholder="Password" id="ip"><br><br>
		<input type="password" name="c_password" required placeholder="Confirm Password" id="ip"><br><br>
		<input type="submit" name="register" value="Sign Up">
		<p>Already have an account?<a href="signin.php">Sign in</a></p>
	</form>
</div>
</body>
</html>