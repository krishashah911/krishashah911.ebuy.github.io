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
<h1>Sign Up</h1>
</div>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="login-form">
  	  <h3>Username</h3>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	
  	  <h3>Email</h3>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	
  	  <h3>Password</h3>
  	  <input type="password" name="password_1">
  	
  	  <h3>Confirm password</h3>
  	  <input type="password" name="password_2">

  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</div>
</body>
</html>