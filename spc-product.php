<?php

	include 'server.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> E- Commerce Website Single Product </title>
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

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


<section class="single-product">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
					<div id="product-slider" class="carousel slide carousel-fade" data-ride="carousel">
  						<div class="carousel-inner">
    						<div class="carousel-item active">
      						<img src="images\spc-product-1.jpg" class="d-block">
    						</div>
    						<div class="carousel-item">
      						<img src="images\spc-product-2.jpg" class="d-block">
    						</div>
      						<div class="carousel-item">
      						<img src="images\spc-product-3.jpg" class="d-block">
      						</div>
      						<div class="carousel-item">
      						<img src="images\spc-product-4.jpg" class="d-block">
      						</div>
      						<div class="carousel-item">
      						<img src="images\spc-product-5.jpg" class="d-block">
      						</div>
      						<a class="carousel-control-prev" href="#product-slider" role="button" data-slide="prev">
    						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    						<span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#product-slider" role="button" data-slide="next">
							 <span class="carousel-control-next-icon" aria-hidden="true"></span>
							 <span class="sr-only">Next</span>
							 </a>
						</div>
					</div>
			</div>
				<div class="col-md-7">
					<p class="new-arrival text-center"> NEW </p>
					<h2> White Strip top with Black Bottoms</h2>
					<p> Product Code: EBY2020_001</p>

					<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
					<p class="price"> <i class="fa fa-inr"></i> 999 </p>
					<p><b> Availability: </b> In Stock </p>
					<p><b> Brand: </b> Marks & Spencer</p>
					<label>Quantity</label>
					<input type="text" value="1">
					<button type="button" class="btn btn-primary"> Add To Cart</button>

				</div>
		
		</div>	
	</div>
</section>

<section class="product-description">
	<div class="container">
	<h6>Product Desciption</h6>
	<p> Charcoal grey solid single-breasted woven formal blazer, has a notched lapel, long sleeves, button closure, two flap pockets, attached lining</p>

	<hr>
	</div>
	<div class="container">
			<div class="title-box">
				<h2> See Similar </h2>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="product-top">
						<img src="images/download2.jpg">
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class ="fa fa-eye">
							</i>	
							</button>
							<button type="button" class="btn btn-secondary" title="Add to Wishlist">
							<i class ="fa fa-heart-o">
							</i>	
							</button>
							<button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class ="fa fa-shopping-cart">
							</i>	
							</button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
						<h4>Product Title</h4>
						<h6><i class="fa fa-inr">1200</i></h6>
					</div>
				</div>
				<div class="col-md-3">
					<div class="product-top">
						<img src="images/download5.jpg">
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class ="fa fa-eye">
							</i>	
							</button>
							<button type="button" class="btn btn-secondary" title="Add to Wishlist">
							<i class ="fa fa-heart-o">
							</i>	
							</button>
							<button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class ="fa fa-shopping-cart">
							</i>	
							</button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<h4>Product Title</h4>
						<h6><i class="fa fa-inr"></i>500 </h6>
					</div>
				</div>
				<div class="col-md-3">
					<div class="product-top">
						<img src="images/download.jpg">
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class ="fa fa-eye">
							</i>	
							</button>
							<button type="button" class="btn btn-secondary" title="Add to Wishlist">
							<i class ="fa fa-heart-o">
							</i>	
							</button>
							<button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class ="fa fa-shopping-cart">
							</i>	
							</button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
						<h4>Product Title</h4>
						<h6><i class="fa fa-inr"></i>1850 </h6>
					</div>
				</div>
				<div class="col-md-3">
					<div class="product-top">
						<img src="images/download3.jpg">
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class ="fa fa-eye">
							</i>	
							</button>
							<button type="button" class="btn btn-secondary" title="Add to Wishlist">
							<i class ="fa fa-heart-o">
							</i>	
							</button>
							<button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class ="fa fa-shopping-cart">
							</i>	
							</button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<h4>Product Title</h4>
						<h6><i class="fa fa-inr"></i> 940</h6>
					</div>
				</div>
				<div class="col-md-3">
					<div class="product-top">
						<img src="images/download1.jpg">
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class ="fa fa-eye">
							</i>	
							</button>
							<button type="button" class="btn btn-secondary" title="Add to Wishlist">
							<i class ="fa fa-heart-o">
							</i>	
							</button>
							<button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class ="fa fa-shopping-cart">
							</i>	
							</button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<h4>Product Title</h4>
						<h6><i class="fa fa-inr"></i> 2999 </h6>
					</div>
				</div>
				<div class="col-md-3">
					<div class="product-top">
						<img src="images/download1.jpg">
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class ="fa fa-eye">
							</i>	
							</button>
							<button type="button" class="btn btn-secondary" title="Add to Wishlist">
							<i class ="fa fa-heart-o">
							</i>	
							</button>
							<button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class ="fa fa-shopping-cart">
							</i>	
							</button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>
						<h4>Product Title</h4>
						<h6><i class="fa fa-inr"></i> 1399</h6>
					</div>
				</div>
				<div class="col-md-3">
					<div class="product-top">
						<img src="images/download6.jpg">
						<div class="overlay-right">
							<button type="button" class="btn btn-secondary" title="Quick Shop">
							<i class ="fa fa-eye">
							</i>	
							</button>
							<button type="button" class="btn btn-secondary" title="Add to Wishlist">
							<i class ="fa fa-heart-o">
							</i>	
							</button>
							<button type="button" class="btn btn-secondary" title="Add to Cart">
							<i class ="fa fa-shopping-cart">
							</i>	
							</button>
						</div>
					</div>
					<div class="product-bottom text-center">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-half-o"></i>

						<h4>Product Title</h4>
						<h6><i class="fa fa-inr"></i> 3500 </h6>
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
				<p><i class="fa fa-facebook-official"></i>Facebook</p>
				<p><i class="fa fa-instagram"></i>Instagram</p>
				<p><i class="fa fa-twitter"></i>Twitter</p>
			</div>
		</div>
	</div>

</section>
</body>
</html>