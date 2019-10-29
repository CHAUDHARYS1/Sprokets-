<!doctype html>
<html lang="en">

<head>
	<title>Johnny Sprokets <?php echo $webpage; ?></title>
	<meta charset="utf-8">
	<meta property="og:image" content="JS">
	<meta property="og:type" content="website">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Hi my name is Shital and I am a web designer and front-end developer with expertise in creating visually appealing, functional, user-friendly websites and marketing materials. Dedicated to driving innovation through the production of exciting websites utilizing an array of scripting languages and multimedia web tools. Proven knowledge and understanding of continuous development models to contribute to the success of web development projects. ">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="icon" type="image/png" sizes="1080x988" href="images/favicon-01.png">
	<link rel="icon" type="image/png" sizes="1080x988" href="images/favicon-01.png">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="https://use.typekit.net/may4jjf.css">
	<script src="js/modernizr.js"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>

	<script>
		$(document).ready(function() {
			var navbar = document.getElementById('navbar');
			$(window).scroll(function() {
				if ($(this).scrollTop()) {
					$(navbar).css({
						"background-color": "white",
						"-webkit-box-shadow": "0px 2px 22px 0px rgba(245,245,245,1)",
						"-moz-box-shadow": "0px 2px 22px 0px rgba(245,245,245,1)",
						"box-shadow": "0px 2px 22px 0px rgba(245,245,245,1)"
					});

				} else {
					$(navbar).css({
						"background-color": "transparent",
						"-webkit-box-shadow": "none",
						"-moz-box-shadow": "none",
						"box-shadow": "none"
					});
				};

			});
		});

	</script>
	<style>
		#topNav {
			position: absolute;
			right: 0;
			background: #5D2DFF;
		}

	</style>
</head>


<body>

	<div class="container-fluid position-fixed" id="navbar" style="z-index: 999">
		<nav class="navbar navbar-light navbar-expand-lg">
			<a class="navbar-brand font-weight-bold" href="index" class="logo"><img src="images/logo.png" alt="Johnny Sprokets Logo" height="40"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="mainNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#">Popular Items</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="#">Location & Hours</a>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="aboutUsDropmenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About US</a>
						<div class="dropdown-menu" aria-labelledby="aboutUsDropmenu">
							<a class="dropdown-item" href="#">How to Find Us</a>
							<a class="dropdown-item" href="#">Who We Are</a>
							<a class="dropdown-item" href="#">Awards</a>
							<a class="dropdown-item" href="#">About Our Test Rides</a>
							<a class="dropdown-item" href="#">Our Gallery</a>
							<a class="dropdown-item" href="#">FAQ's</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Your Privacy</a>
							<a class="dropdown-item" href="#">Order Policy</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="bikeBrandsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bike Brands</a>
						<div class="dropdown-menu" aria-labelledby="bikeBrandsDropdown">

							<a class="dropdown-item" href="#">Specialized</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Surly</a>
							<a class="dropdown-item" href="#">Niner</a>
							<a class="dropdown-item" href="#">Linus</a>
							<a class="dropdown-item" href="#">All City</a>
							<a class="dropdown-item" href="#">Open Cycles</a>
							<a class="dropdown-item" href="#">Kona</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Service and Repair</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Gallery</a>
					</li>

					<li class="nav-item">
						<a class="nav-link p-0" id="search" href="#"><strong class="material-icons">search</strong></a>
					</li>
					<li class="nav-item">
						<a class="nav-link p-0" href="#"><strong class="material-icons">location_searching</strong></a>
					</li>
					<li class="nav-item" id="cart">
						<a class="nav-link p-0" href="#"><strong class="material-icons">shopping_cart</strong></a>
					</li>

				</ul>
			</div>
		</nav>
		<nav class="navbar navbar-light navbar-expand p-1" id="topNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link p-0 text-right text-white  pl-3" href="login"><i class="material-icons">person</i>Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link p-0  text-white text-right" href="register"><i class="material-icons">person_add</i>Signup</a>
				</li>
			</ul>
		</nav>
	</div>

	<div class="container search-bar">
		<label class="icon-span" for="search"><strong class='material-icons'>search</strong></label><input type="text" placeholder="Search" id="search">
	</div>
	<div class="cart">
		<div class="cart-content mt-5 pt-2 ">

			<div class="cart-header p-2">
				<div class="row">
					<div class="col-md-3">
						<h5 class="shopping-cart-header">SHOPPING<br> CART:</h5>
					</div>

					<div class="col">
						<p class="text-light">We Hope You Found Everything That You Were Looking For. If You Still Require Assistance, Please Don't Hesitate to Contact Us. We Also Love Any Feedback You Have for US! </p>
					</div>
					<div class="closing-x">
						<button><i class="material-icons">close</i></button>
					</div>
				</div>
			</div>
			<div class="cart-body p-2">
				<div class="row">
					<div class="col">
						<img src="images/image-four.png" class="img-fluid" alt="Bike Image">
					</div>
					<div class="col">
						<h5 class="product-name">Bike Number 1</h5>
						<p><span class="product-color">RED</span></p>
						<p><span class="availablity">In Stock</span></p>
						<p><span class="shipping-status">Eligible for FREE Shipping</span></p>
					</div>
					<div class="col">
						<h5 class="product-price">Price:</h5>
						<p><span class="price">$2955</span></p>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col">
						<img src="images/image-four.png" class="img-fluid" alt="Bike Image">
					</div>
					<div class="col">
						<h5 class="product-name">Bike Number 1</h5>
						<p><span class="product-color">RED</span></p>
						<p><span class="availablity">In Stock</span></p>
						<p><span class="shipping-status">Eligible for FREE Shipping</span></p>
					</div>
					<div class="col">
						<h5 class="product-price">Price:</h5>
						<p><span class="price">$2955</span></p>
					</div>
				</div>
			</div>
			<div class="cart-footer p-2">
				<h5 class="subtotal">SUBTOTAL:</h5>
				<p><span class="subtotal-price">$5464</span></p>
			</div>
		</div>
	</div>

	<style>
		.closing-x {}

		.closing-x button {
			border-bottom-left-radius: 50px;
			border-top-left-radius: 50px;
			background: #5C2CFF;
			color: #fff;
			border: none;
		}

		.cart {
			position: fixed;
			width: 30%;
			height: 100%;
			right: 0;
			background: #F7F7F7;
			color: white;
			border-left: 1px solid black;

			display: none;
		}

		.cart-header {
			background: #5C2CFF;

		}

		.shopping-cart-header,
		.subtotal {
			font-weight: bold;
		}

		.cart-body {
			background: white;

		}

		.subtotal-price {
			font-size: 2rem;
			float: right;
			color: #5C2CFF;
			font-weight: bold;
		}

		.cart-footer {
			position: absolute;
			bottom: 0;
			background: black;
			width: 100%;
		}

		.product-name,
		.product-price {
			color: black;
		}

		.product-color,
		.availablity,
		.shipping-status {
			font-size: 1rem;
			letter-spacing: 0;
			line-height: ;
		}

		#navbar a {
			font-family: calibri;
		}

		@media only screen and (max-width: 800px) {
			.cart {
				width: 100%;

			}
		}

	</style>
