<?php

function component1($productname, $productprice, $productimg1, $productimg2, $productimg3, $productimg4, $productid){
	$element="

	<div class=\"row\">
			<div class=\"col-md-5\">
					<div id=\"product-slider\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
  						<div class=\"carousel-inner\">
    						<div class=\"carousel-item active\">
      						<img src=\"$productimg1\" class=\"d-block\">
    						</div>
    						<div class=\"carousel-item\">
      						<img src=\"$productimg2\" class=\"d-block\">
    						</div>
      						<div class=\"carousel-item\">
      						<img src=\"$productimg3\" class=\"d-block\">
      						</div>
      						<div class=\"carousel-item\">
      						<img src=\"$productimg4\" class=\"d-block\">
      						</div>
      						<a class=\"carousel-control-prev\" href=\"#product-slider\" role=\"button\" data-slide=\"prev\">
    						<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
    						<span class=\"sr-only\">Previous</span>
							</a>
							<a class=\"carousel-control-next\" href=\"#product-slider\" role=\"button\" data-slide=\"next\">
							 <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
							 <span class=\"sr-only\">Next</span>
							 </a>
						</div>
					</div>
			</div>
				<div class=\"col-md-7\">
					<p class=\"new-arrival text-center\"> NEW </p>
					<h2>$productname</h2>
					<p> Product Code: EBY2020_001</p>


					<p class=\"price\"> <i class=\"fa fa-inr\"></i>$productprice</p>
					<p><b> Availability: </b> In Stock </p>
					<p><b> Brand: </b> Marks & Spencer</p>
					


				<form action=\"product.php\" method=\"post\">
					<button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart<i class=\"fa fa-shopping-cart\"></i></button>
				<input type='hidden' name='product_id' value='$productid'>		
				</form>
					
			</div>

		</div>
	";
	echo $element;
}

function cartElement1($productimg, $productname, $productprice, $productid){

    $element = "

    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">

                    <div class=\"border rounded\">

                        <div class=\"row bg-white\">

                            <div class=\"col-md-3 pl-0\">

                                <img src=$productimg alt=\"Image1\" class=\"img-fluid\">

                            </div>

                            <div class=\"col-md-6\">

                                <h5 class=\"pt-2\">$productname</h5>

                                <small class=\"text-secondary\">Seller: Marks and Spensers</small>

                                <h5 class=\"pt-2\">$$productprice</h5>

                                <button type=\"submit\" class=\"btn btn-warning\">Save for Later</button>

                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>

                            </div>

                            <div class=\"col-md-3 py-5\">

                                <div>

                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-minus\"></i></button>

                                    <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">

                                    <button type=\"button\" class=\"btn bg-light border rounded-circle\"><i class=\"fas fa-plus\"></i></button>

                                </div>

                            </div>

                        </div>

                    </div>

                </form>

    

    ";

    echo  $element;

}