<?php

    include 'server.php';

?>
<html>
<head>
	<title>Specialized Packages</title>
	<style>
        html {
            font-family: sans-serif
        }

        body {
            margin: 0
        }

        header,
        nav,
        section {
            display: block
        }

        a {
            background-color: transparent
        }

        b {
            font-weight: 700
        }

        h1 {
            margin: .67em 0;
            font-size: 2em
        }

        img {
            border: 0
        }

        button,
        input {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            font-style: inherit;
            font-variant: inherit;
            font-weight: inherit;
            line-height: inherit;
            color: inherit
        }

        button {
            overflow: visible
        }

        button {
            text-transform: none
        }

        button {
            -webkit-appearance: button
        }

        input {
            line-height: normal
        }

        * {
            box-sizing: border-box
        }

        ::after,
        ::before {
            box-sizing: border-box
        }

        html {
            font-size: 10px
        }

        body {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: rgb(51, 51, 51);
            background-color: rgb(255, 255, 255)
        }

        button,
        input {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        a {
            color: rgb(51, 122, 183);
            text-decoration: none
        }

        img {
            vertical-align: middle
        }

        h1,
        h2,
        h3 {
            font-family: inherit;
            font-weight: 500;
            line-height: 1.1;
            color: inherit
        }

        h1,
        h2,
        h3 {
            margin-top: 20px;
            margin-bottom: 10px
        }

        h1 {
            font-size: 36px
        }

        h2 {
            font-size: 30px
        }

        h3 {
            font-size: 24px
        }

        .text-center {
            text-align: center
        }

        ul {
            margin-top: 0;
            margin-bottom: 10px
        }

        .container {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        @media (min-width:768px) {
            .container {
                width: 750px
            }
        }

        @media (min-width:992px) {
            .container {
                width: 970px
            }
        }

        @media (min-width:1200px) {
            .container {
                width: 1170px
            }
        }

        .container-fluid {
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto
        }

        .row {
            margin-right: -15px;
            margin-left: -15px
        }

        .col-md-1,
        .col-md-2,
        .col-md-3,
        .col-md-4,
        .col-md-7,
        .col-md-8,
        .col-md-9,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-7,
        .col-xs-12,
        .col-xs-2,
        .col-xs-3,
        .col-xs-7 {
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px
        }

        .col-xs-12,
        .col-xs-2,
        .col-xs-3,
        .col-xs-7 {
            float: left
        }

        .col-xs-12 {
            width: 100%
        }

        .col-xs-7 {
            width: 58.33333333%
        }

        .col-xs-3 {
            width: 25%
        }

        .col-xs-2 {
            width: 16.66666667%
        }

        @media (min-width:768px) {

            .col-sm-12,
            .col-sm-2,
            .col-sm-3,
            .col-sm-7 {
                float: left
            }

            .col-sm-12 {
                width: 100%
            }

            .col-sm-7 {
                width: 58.33333333%
            }

            .col-sm-3 {
                width: 25%
            }

            .col-sm-2 {
                width: 16.66666667%
            }
        }

        @media (min-width:992px) {

            .col-md-1,
            .col-md-2,
            .col-md-3,
            .col-md-4,
            .col-md-7,
            .col-md-8,
            .col-md-9 {
                float: left
            }

            .col-md-9 {
                width: 75%
            }

            .col-md-8 {
                width: 66.66666667%
            }

            .col-md-7 {
                width: 58.33333333%
            }

            .col-md-4 {
                width: 33.33333333%
            }

            .col-md-3 {
                width: 25%
            }

            .col-md-2 {
                width: 16.66666667%
            }

            .col-md-1 {
                width: 8.33333333%
            }
        }

        label {
            display: inline-block;
            max-width: 100%;
            margin-bottom: 5px;
            font-weight: 700
        }

        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: rgb(85, 85, 85);
            background-color: rgb(255, 255, 255);
            background-image: none;
            border: 1px solid rgb(204, 204, 204);
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 4px;
            -webkit-box-shadow: rgba(0, 0, 0, .0745098) 0 1px 1px inset;
            box-shadow: rgba(0, 0, 0, .0745098) 0 1px 1px inset
        }

        .form-control::-webkit-input-placeholder {
            color: rgb(153, 153, 153)
        }

        .form-group {
            margin-bottom: 15px
        }

        .fade {
            opacity: 0
        }

        .collapse {
            display: none
        }

        .dropdown {
            position: relative
        }

        .dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1000;
            display: none;
            float: left;
            min-width: 160px;
            padding: 5px 0;
            margin: 2px 0 0;
            font-size: 14px;
            text-align: left;
            list-style: none;
            background-color: rgb(255, 255, 255);
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .14902);
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 4px;
            -webkit-box-shadow: rgba(0, 0, 0, .172549) 0 6px 12px;
            box-shadow: rgba(0, 0, 0, .172549) 0 6px 12px
        }

        .nav {
            padding-left: 0;
            margin-bottom: 0;
            list-style: none
        }

        .nav>li {
            position: relative;
            display: block
        }

        .nav>li>a {
            position: relative;
            display: block;
            padding: 10px 15px
        }

        @media (min-width:768px) {
            .navbar-header {
                float: left
            }
        }

        .navbar-collapse {
            padding-right: 15px;
            padding-left: 15px;
            overflow-x: visible;
            border-top-width: 1px;
            border-top-style: solid;
            border-top-color: transparent;
            -webkit-box-shadow: rgba(255, 255, 255, .0980392) 0 1px 0 inset;
            box-shadow: rgba(255, 255, 255, .0980392) 0 1px 0 inset
        }

        @media (min-width:768px) {
            .navbar-collapse {
                width: auto;
                border-top-width: 0;
                -webkit-box-shadow: none;
                box-shadow: none
            }

            .navbar-collapse.collapse {
                padding-bottom: 0;
                display: block !important;
                height: auto !important;
                overflow: visible !important
            }
        }

        .navbar-brand {
            float: left;
            height: 50px;
            padding: 15px;
            font-size: 18px;
            line-height: 20px
        }

        .navbar-brand>img {
            display: block
        }

        .navbar-toggle {
            position: relative;
            float: right;
            padding: 9px 10px;
            margin-top: 8px;
            margin-right: 15px;
            margin-bottom: 8px;
            background-color: transparent;
            background-image: none;
            border: 1px solid transparent;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
            border-bottom-left-radius: 4px
        }

        @media (min-width:768px) {
            .navbar-toggle {
                display: none
            }
        }

        .navbar-nav {
            margin: 7.5px -15px
        }

        .navbar-nav>li>a {
            padding-top: 10px;
            padding-bottom: 10px;
            line-height: 20px
        }

        @media (min-width:768px) {
            .navbar-nav {
                float: left;
                margin: 0
            }

            .navbar-nav>li {
                float: left
            }

            .navbar-nav>li>a {
                padding-top: 15px;
                padding-bottom: 15px
            }
        }

        @media (min-width:768px) {
            .navbar-right {
                margin-right: -15px;
                float: right !important
            }
        }

        .close {
            float: right;
            font-size: 21px;
            font-weight: 700;
            line-height: 1;
            color: rgb(0, 0, 0);
            text-shadow: rgb(255, 255, 255) 0 1px 0;
            opacity: .2
        }

        button.close {
            -webkit-appearance: none;
            padding: 0;
            border: 0;
            background-position: 0 0;
            background-repeat: initial initial
        }

        .modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1050;
            display: none;
            overflow: hidden;
            outline: rgb(0, 0, 0)
        }

        .modal.fade .modal-dialog {
            -webkit-transform: translate(0, -25%)
        }

        .modal-dialog {
            position: relative;
            width: auto;
            margin: 10px
        }

        .modal-content {
            position: relative;
            background-color: rgb(255, 255, 255);
            -webkit-background-clip: padding-box;
            background-clip: padding-box;
            border: 1px solid rgba(0, 0, 0, .2);
            border-top-left-radius: 6px;
            border-top-right-radius: 6px;
            border-bottom-right-radius: 6px;
            border-bottom-left-radius: 6px;
            outline: rgb(0, 0, 0);
            -webkit-box-shadow: rgba(0, 0, 0, .498039) 0 3px 9px;
            box-shadow: rgba(0, 0, 0, .498039) 0 3px 9px
        }

        .modal-body {
            position: relative;
            padding: 15px
        }

        .modal-footer {
            padding: 15px;
            text-align: right;
            border-top-width: 1px;
            border-top-style: solid;
            border-top-color: rgb(229, 229, 229)
        }

        @media (min-width:768px) {
            .modal-dialog {
                width: 600px;
                margin: 30px auto
            }

            .modal-content {
                -webkit-box-shadow: rgba(0, 0, 0, .498039) 0 5px 15px;
                box-shadow: rgba(0, 0, 0, .498039) 0 5px 15px
            }

            .modal-sm {
                width: 300px
            }
        }

        .container-fluid::after,
        .container-fluid::before,
        .container::after,
        .container::before,
        .modal-footer::after,
        .modal-footer::before,
        .nav::after,
        .nav::before,
        .navbar-collapse::after,
        .navbar-collapse::before,
        .navbar-header::after,
        .navbar-header::before,
        .row::after,
        .row::before {
            display: table;
            content: ' '
        }

        .container-fluid::after,
        .container::after,
        .modal-footer::after,
        .nav::after,
        .navbar-collapse::after,
        .navbar-header::after,
        .row::after {
            clear: both
        }

        .hide {
            display: none !important
        }

        @media (max-width:991px) and (min-width:768px) {
            .hidden-sm {
                display: none !important
            }
        }

    </style>

    <style type="text/css">
        .form-group .message,
        .form-group label.error {
            font-size: 80% !important;
        }

        #intercom-container {
            display: none;
        }

        .navbar-toggle {
            display: block;

        }

        .wizard-progress-condition {
            display: none;
        }

        @media (max-width:768px) {
        .wizard-progress-condition{             
        }
        .section-shadow {
            box-shadow: 0px 7px 20px 0px rgba(0, 0, 0, 0.2) !important;
             /*margin-top: 75px; */
            }
        }

    </style>


    </script>

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
	<section class="header">
	<div class="side-menu">
            <?php
            include("include/side-menu.php")
            ?>
        </div>
</section>

<section class="on-sale">
		<div class="container">
			<div class="title-box">
				<h2> Specialized </h2>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="product-top">
						<img src="images/sp1.jpg">
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
						<h4>Black Tank top with Bottom Skirt</h4>
						<h6> <i class="fa fa-inr"></i>2300</h6>
					</div>
				</div>
				<div class="col-md-3">
					<div class="product-top">
						<a href="spc-product.php"><img src="images/sp2.jpg"></a>
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
						<h4>White Strip top with Black Bottoms</h4>
						<h6> <i class="fa fa-inr"></i>2999 </h6>
					</div>
				</div>
				<div class="col-md-3">
					<div class="product-top">
						<img src="images/sp3.jpg">
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
						<h4>White Frill top with Black Bottoms</h4>
						<h6> <i class="fa fa-inr"></i>1399</h6>
					</div>
				</div>
				
			</div>
		</div>
	</section>


<section id="section-works" class="section section-shadow section-works" style="background-color: rgba(19,215,146, .1);">
	<br>
<div class="container">
<div class="title-section text-center">
<h1 class="title"><span>How it Works</span></h1>
</div>
<div class="row hidden-xs hidden-sm">
<div class="col-md-3 col-sm-12 col-xs-12">
<div class="box">
<h3 class="subtitle">We get to know you</h3>
<div class="img-wrp">
<img src="https://www.stylecracker.com/assets/images/scbox/how-it-works-1.png" alt="">
</div>
<div class="desc">
To get started, you'll need to fill out a simple online form. This helps us decode your
style preferences. Once this is done, the stylist will get to work to curate your box.
</div>
</div>
</div>
<div class="col-md-3 col-sm-12 col-xs-12">
<div class="box">
<h3 class="subtitle">WE SEND YOU THE BOX</h3>
<div class="img-wrp">
<img src="https://www.stylecracker.com/assets/images/scbox/how-it-works-2.png" alt="">
</div>
<div class="desc">
Once our stylist has curated the box keeping in mind your likes, dislikes, body shape and
budget we put it all together and ship you, your box of style. Shipping is absolutely free
and it gets delivered straight to your doorstep.
</div>
</div>
</div>
<div class="col-md-3 col-sm-12 col-xs-12">
<div class="box">
<h3 class="subtitle">Keep only what you like</h3>
<div class="img-wrp">
<img src="https://www.stylecracker.com/assets/images/scbox/how-it-works-3.png" alt="">
</div>
<div class="desc">
When you receive the box, check out the selection we've sent you. Try it on for size and to
see how it works for you. Keep everything you like. If there's something that doesn't suit
you, send it back to us & we can exchange it. No questions asked.
</div>
</div>
</div>
<div class="col-md-3 col-sm-12 col-xs-12">
<div class="box">
<h3 class="subtitle">Give us your feedback</h3>
<div class="img-wrp">
<img src="https://www.stylecracker.com/assets/images/scbox/how-it-works-4.png" alt="">
</div>
<div class="desc">
Our goal is to ensure that you, and every other <b>user</b>, loves every item curated
personally for you. Your constant feedback is most valuable to make sure we get even
better. So please take a couple of minutes to tell us what you liked and what you didn't.
</div>
</div>
</div>
</div>

</div>
</div>

</div>
<br>
</section>

<input type='hidden' id="scbox-page" name="scbox-page" value="scbox" />
<input type='hidden' id="scbox-package" name="scbox-package" value="" />
<input type='hidden' id="scbox-price" name="scbox-price" value="" />
<input type='hidden' id="scbox-objectid" name="scbox-objectid" value="" />
<input type='hidden' id="scbox-productid" name="scbox-productid" value="" />

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
				<p><a href="https://www.facebook.com/krisha.shah.7798" target="_blank"><i class="fa fa-facebook-official"></i>Facebook</a></p>
				<a href="https://instagram.com/niisshhiittaa?igshid=12um553i6bakw" target="_blank"><p><i class="fa fa-instagram"></i>Instagram</p></a>
				<p></i>Twitter</p>
			</div>
		</div>
	</div>

</section>


</body>
</html>