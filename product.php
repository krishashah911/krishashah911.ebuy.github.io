<?php

	include 'server.php';

require_once('./CreateDb1.php');

require_once('./component1.php');

$database = new CreateDb1("Productdb1", "Producttb1");

if (isset($_POST['add'])){

    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){

            echo "<script>alert('Product is already added in the cart..!')</script>";

            echo "<script>window.location = 'product.php'</script>";

        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;


        }

    }else{

        $item_array = array(

                'product_id' => $_POST['product_id']

        );
        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
  		}
  	}
  	?>
<html>
<head>
<title> E- Commerce Website Single Product </title>
<link rel="stylesheet" href="style2.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
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
		<?php

                $result = $database->getData1();

                while ($row = mysqli_fetch_assoc($result)){

                component1($row['product_name'], $row['product_price'], $row['product_image1'],$row['product_image2'], $row['product_image3'],$row['product_image4'],$row['id']);

                }

        ?>   

	</div>	
	
</section>

<section class="product-description">
	<div class="container">
	<h6>Product Desciption</h6>
	<p> Charcoal grey solid single-breasted woven formal blazer, has a notched lapel, long sleeves, button closure, two flap pockets, attached lining</p>
	<hr>
	</div>
</section>


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