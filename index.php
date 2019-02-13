<!DOCTYPE html>
<html>
<head>
	<title>Sidee's</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- font_awesome used for icons to social networks -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- jquery sources-->
	<script
		src="http://code.jquery.com/jquery-3.3.1.js"
		integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
		crossorigin="anonymous"></script>
	<link rel="stylesheet" href="dist/css/bootstrap.min.css" />
	<script src="dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
	<nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark">

		<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="collapse_target">
			<a style="padding-right: 10em;" class="navbar-brand"><img src="img/logo.png" style="max-width: 60px; max-height: 80px; background-color: #fff;" ></a>

			<ul class="navbar-nav">
				<li>
					<a class="nav-link active" href="#">Home</a>
				</li>
				<li>
					<a class="nav-link" href="#">About</a>
				</li>
				<li>
					<a class="nav-link" href="#contact">Contact Us</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">
						Join Us
						<span class="caret"></span>
					</a>
					<div class="dropdown-menu" aria-labelledby="dropdown_target">
						<a class="dropdown-item">Register</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item">Login</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item">Recieve our newsletter</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>


	<div id="home">
		<div class="landing-text">
			<h1>SIDEE'S BOOK STORE</h1>
			<h3 style="color: #fff; font-family: lucida calligraphy;">Blossom in the fountain of knowledge...</h3>
		</div>
	</div>

	<div class="padding">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<img src="img/signinimage.jpg" class="img-responsive">
				</div>
				<div class="col-sm-6 text-center">
					<h2>All about the store</h2>
					<p class="lead">This bookstore web application is a development in the development of marketing strategies and is aimed at improving accessibility of customers to the products offered at a cheaper cost.</p>
					<p class="lead">It's not restricted just to books, because recommendations can be made and topics discussed. Sales and supply are achieved effectively and with minimum to no delay.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<h4>Built with Sande</h4>
					<p>This bookstore web application is a development in the development of marketing strategies and is aimed at improving accessibility of customers to the products offered at a cheaper cost.</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<img src="img/homeimage.jpg" class="img-responsive">
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<h4>No boundaries</h4>
					<p>It's not restricted just to books, because recommendations can be made and topics discussed. Sales and supply are achieved effectively and with minimum to no delay.</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
					<img src="img/signupimage.jpg" class="img-responsive">
				</div>
			</div>
		</div>
	</div>

	<div id="fixed"></div>

	<div class="padding">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<h4>Here's the cool thing about the store</h4>
					<p>This bookstore web application is a development in the development of marketing strategies and is aimed at improving accessibility of customers to the products offered at a cheaper cost.</p>
					<p>It's not restricted just to books, because recommendations can be made and topics discussed. Sales and supply are achieved effectively and with minimum to no delay.</p>
				</div>
				<div class="col-sm-6">
					<img width="100%;" height="100%;" src="img/signinimage.jpg" class="img-responsive">
				</div>
			</div>
		</div>
	</div>

	<footer class="container-fluid text-center">
		<div class="row">
			<div class="col-sm-4">
				<h3>Contact Us</h3>
				<br>
				<h4>Our address and contact info Here...</h4>
			</div>
			<div class="col-sm-4">
				<h3 id="contact">Connect:</h3>
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-twitter"></a>
				<a href="#" class="fa fa-instagram"></a>
				<a href="#" class="fa fa-google"></a>
				<a href="#" class="fa fa-youtube"></a>
			</div>
			<div class="col-sm-4">
				<img width="100%" height="100%" src="img/logo.png" class="icon">
			</div>
		</div>
	</footer>
</body>
</html>