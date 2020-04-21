<div class="search-box">
			<a href="index.php"><img src="images/logo.png" class="logo"></a>
			<form action="index.php" method="post">
     			<div class="input-group">
     			<input type="text" class="form-control" placeholder="Search" name="search">
     			<div class="input-group-btn">
     			<button class="search_button" type="submit" name="search_btn">
     			<i class="fa fa-search"></i>
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


					
	      <li>
	        <a href="cart.php"> 
	        	<i class="fas fa-shopping-cart"></i> Cart <span  class="badge badge-danger">0</span></a>
	      </li>


					<li><a href="login.php">Log In</a></li>


				<?php
					elseif(isset($_SESSION['username'])):
				?>
					<li><h6 style="font-size:16px; font-weight: bold; color: #fff;">Hello <?php echo $_SESSION['username']; ?></h6>
					</li>
					<li>
	        <a href="cart.php"> 
	        	<i class="fas fa-shopping-cart"></i> Cart <span id="cart-item" 
	        	class="badge badge-danger"></span></a>
	      </li>
					<li><a href="logout.php">Logout</a></li>
				<?php
					endif;
				?>
				
			</ul>
		</div>