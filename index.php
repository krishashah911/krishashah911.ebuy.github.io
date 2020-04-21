<?php

	include 'server.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

<title> E- Commerce Website </title>
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<!--Font Awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" />

	<!--Bootstrap CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="style.css">


	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	

</head>
<body>


<div class="top-nav-bar">
		<?php

		include("include/nav-bar.php")
		?>
	</div>

	<section class="header">
		<div class="side-menu">
			<?php
			include("include/side-menu.php")
			?>
		</div>
<div class="slider">
			<div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
  				<div class="carousel-inner">
    				<div class="carousel-item active">
      					<img src="images\try5.jpg">
    				</div>
    				<div class="carousel-item">
      					<img src="images\try1.jpg">
    				</div>
      				<div class="carousel-item">
      					<img src="images\try99.jpg">
      				</div>
      				<div class="carousel-item">
      					<img src="images\try6.jpg">
      				</div>
      				<div class="carousel-item">
      					<img src="images\try2.jpg">
      				</div>
      				
  				</div>
  				<ol class="carousel-indicators">
    				<li data-target="#slider" data-slide-to="0" class="active"></li>
    				<li data-target="#slider" data-slide-to="1"></li>
    				<li data-target="#slider" data-slide-to="2"></li>
    				<li data-target="#slider" data-slide-to="3"></li>
    				<li data-target="#slider" data-slide-to="4"></li>
    			
    				
    			</ol>	
  
			</div>


		</div>
	</section>


<br>
<br>

<?php

   				if(!ISSET($_POST['search_btn'])){

   					?>
   					<div class="title-box">
						<h3> On Sale </h3>
					</div>


<?php
		}
?>


<?php

   				if(ISSET($_POST['search_btn'])){
   					$search=$_POST['search'];
   					?>
   					<div class="title-box">
						<h3> Search Results for <?php echo $search ?> </h3>
					</div>

<?php
		}
	?>



<div class="container">
		<div id="message">
			
		</div>
		<div class="row mt-2 pb-3">
			<?php 
				include 'config.php';

			?>

			<?php
				
				if(!ISSET($_POST['search_btn'])){
				$stmt = $conn->prepare("SELECT * FROM product");
				
			}
			?>
			<?php
				
				if(ISSET($_POST['search_btn'])){
				$search=$_POST['search'];
				$stmt = $conn->prepare("SELECT * FROM product WHERE product_name LIKE '%$search%' OR product_desc LIKE '%$search%' OR product_keywords LIKE '%$search%'");
				

			}
			?>
			<?php

				$stmt->execute();
				$result = $stmt->get_result();
				while($row = $result->fetch_assoc()):
			?>
			
			<div class="col-sm-6 col-md-4 col-lg- mb-2">
				<div class="card-deck">
					<div class="card p-2 border-secondary mb-2">
						<a href="product.php"><img src="<?= $row['product_image']?>" class="card-img-top" height="425"></a>
						<div class="card-body p-1">
							<h4 class="card-title text-center text-info"><?= $row['product_name'] ?></h4>
							<h5 class="card-text text-center text-danger"><i class="fas fa-rupee-sign"></i>&nbsp;<?= number_format($row['product_price'],2) ?></h5>
						</div>
						<div class="card-footer p-1">
							<form action="" class="form-submit">
								<input type="hidden" class="pid" value="<?= $row['id'] ?>">
								<input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
								<input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
								<input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
								<input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
								<button class="btn btn-info btn-block addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Add to Cart</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
		</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".addItemBtn").click(function(e){
				e.preventDefault();
				var $form = $(this).closest(".form-submit");
				var pid = $form.find(".pid").val();
				var pname = $form.find(".pname").val();
				var pprice = $form.find(".pprice").val();
				var pimage = $form.find(".pimage").val();
				var pcode = $form.find(".pcode").val();

				$.ajax({
					url: 'action.php',
					method: 'post',
					data: {pid:pid , pname:pname , pprice:pprice , pimage:pimage , pcode:pcode},
					success:function(response){
						$("#message").html(response);
						window.scrollTo(0,0);
						load_cart_item_number();
					}
				});
			});

			load_cart_item_number();

			function load_cart_item_number(){
				$.ajax({
					url: 'action.php',
					method: 'get',
					data: {cartItem:"cart_item"},
					success:function(response){
						$("#cart-item").html(response);
					}
				});
			}
		});
	</script>



	<section class="website-features">
		<div class="container">
			<div class="row">
				<div class="col-md-3 feature-box">
					<img src="images/feature-1.png">
					<div class="feature-text">
						<p><b>100% Orignal items are </b>available</p>
					</div>
				</div>
				<div class="col-md-3 feature-box">
					<img src="images/feature-2.png">
					<div class="feature-text">
						<p><b>Get a special package</b> made just for you</p>
					</div>
				</div>
				<div class="col-md-3 feature-box">
					<img src="images/feature-3.png">
					<div class="feature-text">
						<p><b>Easy returns</b> from your doorstep</p>
					</div>
				</div>
				<div class="col-md-3 feature-box">
					<img src="images/feature-4.png">
					<div class="feature-text">
						<p><b>Get personalized </b>recommendations</p>
					</div>
				</div>
			</div>
		</div>
	</section>


<section class="footer"> 
	<div class="container tex-center">
		<div class="row">
			<div class="col-md-3">
				<h1>Useful links</h1>
				<p>Privacy Policy</p>
				<p>Terms and Conditions</p>
				<p>Return Policy</p>
			</div>
			<div class="col-md-3">
				<h1>Company</h1>
				<p>About Us</p>
				<p>Careers</p>
				<p>Contact Us</p>
			</div>
			<div class="col-md-3">
				<h1>Follow Us On</h1>
				<p><a href="https://www.facebook.com/krisha.shah.7798" target="_blank" ><i class="fa fa-facebook-official"></i>Facebook</a></p>
				<a href="https://instagram.com/niisshhiittaa?igshid=12um553i6bakw" target="_blank"><p><i class="fa fa-instagram"></i>Instagram</p></a>
				<p></i>Twitter</p>
			</div>
		</div>
	</div>

</section>

</body>
</html>
