<?php

	include 'server.php';

?>
<html>
<head>
<title> E- Commerce Website </title>
<link rel="stylesheet" href="style3.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
<meta name="viewreport" content="width=device-width", intial-scale=1>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="top-nav-bar">
		<div class="search-box">
			<img src="images/logo.png" class="logo">
			<form>
     			<div class="input-group">
     			<input type="text" class="form-control" placeholder="Search" name="search">
     			<div class="input-group-btn">
     			<button class="btn btn-default" type="submit">
     			<i class="glyphicon glyphicon-search"></i>
     			</button>
    			</div>
   				</div>
   			</form>
   		</div>
		
			<div class="menu-bar">
			<ul>
				<?php
					
					if (!isset($_SESSION['username'])):
				?>
					<li><a href="register.php">Sign Up</a></li>
					<li><a href="#">Cart</a></li>
					<li><a href="login.php">Log In</a></li>


				<?php
					elseif(isset($_SESSION['username'])):
				?>
					<li><h6 style="font-size:16px; font-weight: bold; color: #fff;">Hello <?php echo $_SESSION['username']; ?></h6>
					</li>
					<li><a href="#">cart</a></li>
					<li><a href="logout.php">logout</a></li>
				<?php
					endif;
				?>
				
			</ul>
		</div>
	</div>
	</body>
</html>