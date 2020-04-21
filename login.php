<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
  <link href='login.css' rel='stylesheet' type='text/css'>
</head>
<body>
  <div class="login">
    <br>
    <br>
<div class="login-header">
<h1>Login</h1>
</div>	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="login-form">
  		<h3>Username</h3>
  		<input type="text" name="username" >
  		<h3>Password</h3>
  		<input type="password" name="password">
  		<button type="submit" class="login-button" name="login_user">Login</button>
  	<p>
  		Not yet a member?
      <a href="register.php">Sign Up!</a>
      </p>
    </div>
  </form>

</div>
</body>
</html>