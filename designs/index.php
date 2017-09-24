<!DOCTYPE html>
<html  lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Dake Designs Boutique</title>
 			
			<!-- google fonts -->
			<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100">
			<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">
 			<!-- tab icon -->
 			<link rel="icon" href="">
			<!-- bootstrap 3.3.7 cdn css 
			<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
			<!-- bootstrap hosted file css 3.3.7 -->
			<link rel="stylesheet" href="styles/bootstrap.min.css">
			<!-- font awesome 4.7 -->
			<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
			<!-- custom stylesheet -->
			<link rel="stylesheet" type="text/css" href="styles/custom.css">
		</head>

			<body>
				<div id="top"><!-- top strip starts -->
					<div class="container"><!-- container starts -->
						<div class="col-md-6 offer"><!-- offer starts -->
							<a href="#" class="btn btn-success btn-sm">
								Welcome :Guest
							</a>
							<a href="#">
								Shopping Cart Total Price: $100, Total Items 2
							</a>
						</div><!-- offer ends -->
						<div class="col-md-6">
							<ul class="menu"><!-- menu starts -->
								<li>
									<a href="customer_register.php" class="">
										Register
									</a>
								</li>
								<li>
									<a href="checkout.php">
										My Account
									</a>
								</li>
								<li>
									<a href="cart.php">
										Go To Cart
									</a>
								</li>
								<li>
									<a href="checkout.php">
										Login
									</a>
								</li>
							</ul><!-- menu ends -->
						</div>
					</div><!-- container ends -->
				</div><!-- top strip ends -->
				<div class="navbar navbar-default" id="navbar"><!-- navbar start -->
					<div class="container"><!-- container starts -->
						<div class="navbar-header"><!-- navbar header starts -->
							<a href="index.php" class="navbar-brand home"><!-- navbar brand starts -->
								<h2>Dake Designs Boutique</h2>							
<!--								<img src="images/logo1.png" alt="Dake Designs" class="hidden-xs"> when the screen is small the image will be hidden -->
								<img src="images/logo-small.png" alt="Dake Designs" class="visible-xs">
							</a><!-- navbar brand stops -->
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
								<span class="sr-only">Toggle Navigation</span>
								<i class="fa fa-align-justify"></i>
							</button>
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
								<span class="sr-only">Toggle Search</span>
								<i class="fa fa-search"></i>
							</button>
						</div><!-- navbar header stops -->
						<div class="navbar-collapse collapse" id="navigation"><!-- navbar collapse starts -->
							<div class="padding-nav"><!-- padding nav starts -->
								<ul class="nav navbar-nav navbar-left"><!-- left navbar starts -->
									<li class="active">
										<a href="index.php">Home</a>
									</li>
									<li>
										<a href="shop.php">Shop</a>
									</li>
									<li>
										<a href="checkout.php">My Account</a>
									</li>
									<li>
										<a href="cart.php">Shopping Cart</a>
									</li>
									<li>
										<a href="contact.php">Contact Us</a>
									</li>
								</ul><!-- left navbar stops -->
							</div><!-- padding nav stops -->
							<a href="cart.php" class="btn btn-primary navbar-btn right"><!-- anchor button starts -->
								<i class="fa fa-shopping-cart"></i>
								<span>4 items in cart</span>
							</a><!-- anchor button stops -->
							<div class="navbar-collapse collapse right"><!-- navbar collapse right starts -->
								<button class="btn navbar-btn btn-primary" type="button" data-toggle="collapse" data-target="#search">
									<span class="sr-only">Toggle Search</span>
									<i class="fa fa-search"></i>
								</button>
							</div><!-- navbar collapse right stops -->
							<div class="collapse clearfix" id="search"><!-- clearfix starts -->
								<form action="results.php" method="GET" class="navbar-form"><!-- search form starts -->
									<div class="input-group"><!-- form input starts -->
										<input type="text" class="form-control" placeholder="search" name="user_query" required>
										<span class="">
										<button type="submit" value="Search" name="search" class="btn btn-primary indexsearchbtn">
											<i class="fa fa-search"></i>
										</button>
										</span>
									</div><!-- form input stops -->
								</form><!-- search form stops -->
							</div><!-- clearfix stops -->
						</div><!-- navbar collapse stops -->

					</div><!-- container stops -->
				</div><!-- navbar ends -->
				<div class="container" id="slider"><!-- container for slider starts -->
					<div class="col-md-12">
						<div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide starts -->
							<ol class="carousel-indicators"><!-- carousel indicators start -->
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
								<li data-target="#myCarousel" data-slide-to="3"></li>
							</ol><!-- carousel indicators stops -->
							<div class="carousel-inner"><!-- inner carousel starts -->
								<div class="item active">
									<img class="img-responsive" src="admin_area/slides_images/img1.jpeg" alt="">
								</div>
								<div class="item">
									<img class="img-responsive" src="admin_area/slides_images/img2.jpeg" alt="">
								</div>
								<div class="item">
									<img class="img-responsive" src="admin_area/slides_images/img3.jpeg" alt="">
								</div>
								<div class="item">
									<img class="img-responsive" src="admin_area/slides_images/img4.jpeg" alt="">
								</div>
							</div><!-- inner carousel ends -->
							<a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel control -->
								<span class="glyphicon glyphicon-chevron-left"></span>
								<span class="sr-only">Previous</span>
							</a><!-- left carousel control ends -->
							<a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- right carousel control -->
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
							</a><!-- right carousel control ends -->

						</div><!-- carousel ends -->
					</div>
				</div><!-- container for slider ends -->
				<div id="advantages"><!-- advantages starts 3 column call to action -->
					<div class="container"><!-- container starts -->
						<div class="same-height-row"><!-- equal height row starts -->
							<div class="col-sm-4"><!-- left column starts -->
								<div class="box same-height"><!-- left column same height -->
									<div class="icon">
										<i class="fa fa-heart"></i>
									</div>
									<h3><a href="#">We Love Our Customers</a></h3>
									<p>We go to great lengths to show our appreciation! More to come!</p>
								</div><!-- left column same height ends -->	
							</div><!-- left column ends -->
							<div class="col-sm-4"><!-- middle column starts -->
								<div class="box same-height"><!-- middle column same height -->
									<div class="icon">
										<i class="fa fa-tags"></i>
									</div>
									<h3><a href="#">Best Price</a></h3>
									<p>For hand made, we will not be beaten! We can prove it!</p>
								</div><!-- middle column same height ends -->	
							</div><!-- middle column ends -->	
							<div class="col-sm-4"><!-- right column starts -->
								<div class="box same-height"><!-- right column same height -->
									<div class="icon">
										<i class="fa fa-smile-o"></i>
									</div>
									<h3><a href="#">100% Guaranteed Happy</a></h3>
									<p>Free returns on items within 30 days just pay shipping.</p>

								</div><!-- right column same height ends -->	
							</div><!-- right column ends -->
						</div><!-- row ends -->
					</div><!-- container ends -->
				</div><!-- advantages ends -->
				<div id="hot"><!-- hot topic starts -->
					<div class="box"><!-- box ribbon starts -->
						<div class="container"><!-- box container starts -->
							<div class="col-md-12"><!-- 12 column wide starts -->
								<h2>New This Week</h2>
							</div><!-- 12 column wide starts -->
						</div><!-- box container ends -->
					</div><!-- box ends -->
				</div><!-- hot topic ends -->
				<div id="content" class="container"><!-- content container for new items ends -->
					<div class="row"><!-- row starts -->
						<div class="col-sm-4 col-sm-6 single"><!-- far left column starts -->
							<div class="product"><!-- product starts -->
								<a href="details.php">
									<img class="img-responsive" src="admin_area/product_images/image1.jpg" alt="image1">
								</a>
								<div class="text"><!-- text starts -->
									<h3><a href="details.php">Crafty</a></h3><!-- title -->
									<p class="price">$50</p>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View Details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopping-cart"></i> Add to cart
										</a>
									</p>
								</div><!-- text ends -->
							</div><!-- product ends -->
						</div><!-- far left column ends -->
						<div class="col-sm-4 col-sm-6 single"><!-- mid left column starts -->
							<div class="product"><!-- product starts -->
								<a href="details.php">
									<img class="img-responsive" src="admin_area/product_images/image2.jpg" alt="image2">
								</a>
								<div class="text"><!-- text starts -->
									<h3><a href="details.php">Crafty 2</a></h3>
									<p class="price">$135</p>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View Details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopping-cart"></i> Add to cart
										</a>
									</p>
								</div><!-- text ends -->
							</div><!-- product ends -->
						</div><!-- mid left column ends -->
						<div class="col-sm-4 col-sm-6 single"><!-- mid right column starts -->
							<div class="product"><!-- product starts -->
								<a href="details.php">
									<img class="img-responsive" src="admin_area/product_images/image3.jpg" alt="image3">
								</a>
								<div class="text"><!-- text starts -->
									<h3><a href="details.php">Crafty 3</a></h3>
									<p class="price">$999</p>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View Details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopping-cart"></i> Add to cart
										</a>
									</p>
								</div><!-- text ends -->
							</div><!-- product ends -->
						</div><!-- mid right column ends -->	
						<div class="col-sm-4 col-sm-6 single"><!-- far right column starts -->
							<div class="product"><!-- product starts -->
								<a href="details.php">
									<img class="img-responsive" src="admin_area/product_images/image4.jpg" alt="image4">
								</a>
								<div class="text"><!-- text starts -->
									<h3><a href="details.php">Crafty 4</a></h3>
									<p class="price">$150</p>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View Details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopping-cart"></i> Add to cart
										</a>
									</p>
								</div><!-- text ends -->
							</div><!-- product ends -->
						</div><!-- far right column ends -->


				<!-- 		second row of items starts -->					
						<div class="col-sm-4 col-sm-6 single"><!-- far left column starts -->
							<div class="product"><!-- product starts -->
								<a href="details.php">
									<img class="img-responsive" src="admin_area/product_images/image1.jpg" alt="image1">
								</a>
								<div class="text"><!-- text starts -->
									<h3><a href="details.php">Crafty</a></h3><!-- title -->
									<p class="price">$50</p>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View Details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopping-cart"></i> Add to cart
										</a>
									</p>
								</div><!-- text ends -->
							</div><!-- product ends -->
						</div><!-- far left column ends -->
						<div class="col-sm-4 col-sm-6 single"><!-- mid left column starts -->
							<div class="product"><!-- product starts -->
								<a href="details.php">
									<img class="img-responsive" src="admin_area/product_images/image2.jpg" alt="image2">
								</a>
								<div class="text"><!-- text starts -->
									<h3><a href="details.php">Crafty 2</a></h3>
									<p class="price">$135</p>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View Details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopping-cart"></i> Add to cart
										</a>
									</p>
								</div><!-- text ends -->
							</div><!-- product ends -->
						</div><!-- mid left column ends -->
						<div class="col-sm-4 col-sm-6 single"><!-- mid right column starts -->
							<div class="product"><!-- product starts -->
								<a href="details.php">
									<img class="img-responsive" src="admin_area/product_images/image3.jpg" alt="image3">
								</a>
								<div class="text"><!-- text starts -->
									<h3><a href="details.php">Crafty 3</a></h3>
									<p class="price">$999</p>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View Details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopping-cart"></i> Add to cart
										</a>
									</p>
								</div><!-- text ends -->
							</div><!-- product ends -->
						</div><!-- mid right column ends -->	
						<div class="col-sm-4 col-sm-6 single"><!-- far right column starts -->
							<div class="product"><!-- product starts -->
								<a href="details.php">
									<img class="img-responsive" src="admin_area/product_images/image4.jpg" alt="image4">
								</a>
								<div class="text"><!-- text starts -->
									<h3><a href="details.php">Crafty 4</a></h3>
									<p class="price">$150</p>
									<p class="buttons">
										<a href="details.php" class="btn btn-default">View Details</a>
										<a href="details.php" class="btn btn-primary">
											<i class="fa fa-shopping-cart"></i> Add to cart
										</a>
									</p>
								</div><!-- text ends -->
							</div><!-- product ends -->
						</div><!-- far right column ends -->
					</div><!-- row ends -->
				</div><!-- container ends -->
				<!-- footer starts -->
				<?php include("includes/footer.php"); ?>





			    <!-- Jquery CDN 3.2.1
	 			<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script> -->
	 			<!-- jquery hosted file js 3.2.1 -->
	 			<script src="js/jquery.min.js"></script>
	 			<!-- bootstrap 3.3.7 cdn js in case of issues 
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
				<!-- bootstrap hosted file js 3.3.7 -->
				<script src="js/bootstrap.min.js"></script>
				<!-- javascript custom -->
				<script src="js/js1.js" type="text/javascript"></script>
			</body>

</html>
