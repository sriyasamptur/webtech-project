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
<h1>Login</h1>
	<form align='center' method="post" action="signin.php">
		<?php include("errors.php");?>
		<input type="text" name="username" required placeholder="Username" id="ip"><br><br>
		<input type="password" name="password" required placeholder="Password" id="ip"><br><br>
		<input type="submit" name="login" value="Log In">
		<p>Don't have an account?<a href="signup.php">Sign up</a></p>
	</form>	
</div>
</body>
</html>