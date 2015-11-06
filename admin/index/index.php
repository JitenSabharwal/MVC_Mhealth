
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<title>mPower</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	  <?php 
	  		include "../include/link.php";
	  ?>
	</head>
<body id="home">
	<div id="hero">
		<div class="container">
			<h1 class="hero-text animated fadeInDown">
				The best in "health"<br />
				web & mobile apps
			</h1>
			<p class="sub-text animated fadeInDown">
				Get a great health with our website and apps. This is exclusively for the TB patients.
			</p>
			<div class="cta animated fadeInDown">
				<a href="login.php" class="button-outline ">Login</a>
			</div>
			<div class="img"></div>
		</div>
	</div>

	<div id="features">
		<div class="container">
			<div class="row header">
				<div class="col-md-12">
					<h2>Who are we?</h2>
					<p>We are the people who care for your health.</p>
				</div>
			</div>
			<div class="row feature">
				<div class="col-md-6 info">
					<h4>You don't need to have great technical experience to use our product.</h4>
					<p>
						Whether you want to take care of yourself or your loves ones. Don't worry, this place
						is perfect to take care of the health - mHealth has a complete solution for you.
					</p>
				</div>
				<div class="col-md-6 image">
					<img src="../asset/images/feature1.png" class="img-responsive" alt="feature1" />
				</div>
			</div>
			<div class="divider"></div>
			<div class="row feature backwards">
				<div class="col-md-6 info">
					<h4>A fully featured app/website that takes care of your health.</h4>
					<p>
						You have complete control over your health, we offer the best quality so you
						take of your health and of youe loved ones.<br />
						Write some text here to explain the features of the site or application, it
						has lots of uses.
					</p>
				</div>
				<div class="col-md-6 image">
					<img src="../asset/images/feature2.png" class="img-responsive" alt="feature2" />
				</div>
			</div>
		</div>		
	</div>


	<div id="slider">
		<div class="container">
			<div class="row header">
				<div class="col-md-12">
					<h3>Our Preview</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 slide-wrapper">
					<div class="slideshow">
						<div class="btn-nav prev"></div>
						<div class="btn-nav next"></div>
						<div class="slide active">
							<img src="../asset/images/slider/slide3.png" alt="slide3" />
						</div>
						<div class="slide">
							<img src="../asset/images/slider/slide4.png" alt="slide4" />
						</div>
						<div class="slide">
							<img src="../asset/images/slider/slide1.png" alt="slide1" />
						</div>
						<div class="slide">
							<img src="../asset/images/slider/slide5.png" alt="slide5" />
						</div>
						<div class="slide">
							<img src="../asset/images/slider/slide2.png" alt="slide2" />
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>



	<div id="clients">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h3>Our Patients</h3>
					<p>
						These are some of our patients who are leading a happy and healthy life.
					</p>
					<div class="logos" style="display:inline-block;">
						<img src="../asset/images/patients/sample.jpg">
						<img src="../asset/images/patients/sample.jpg">
						<img src="../asset/images/patients/sample.jpg">
						<img src="../asset/images/patients/sample.jpg">
						<img src="../asset/images/patients/sample.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="footer-white">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 menu">
					<h3>Overview</h3>
					<ul>
	      				<li>
	          				<a href="features.html">Add Subscriber</a>
	        			</li>
	        			<li>
	        				<a href="services.html">View Subscriber</a>
	        			</li>
	        			<li>
	          				<a href="pricing.html">Lab Sputum Test</a>
	        			</li>
	        			<li>
	          				<a href="support.html">Lab Xray Test</a>
	        			</li>
	        			<li>
	          				<a href="blog.html">Other Tests</a>
	        			</li>
	      			</ul>
				</div>
				<div class="col-sm-3 menu">
					<h3>Menu</h3>
					<ul>
	      				<li>
	          				<a href="features.html">About us</a>
	        			</li>
	        			<li>
	        				<a href="services.html">Contact us</a>
	        			</li>
	        			<li>
	          				<a href="aboutus.html">Coming Soon</a>
	          				<a href="#" class="hiring">
	          					launch!
	          				</a>
	        			</li>
	        			<li>
	          				<a href="support.html">Gallery</a>
	        			</li>
	        			<li>
	          				<a href="blog.html">Support</a>
	        			</li>
	      			</ul>
				</div>
				<div class="col-sm-2 menu">
					<h3>Social</h3>
					<ul>
	      				<li>
	          				<a href="features.html">Youtube</a>
	        			</li>
	        			<li>
	        				<a href="services.html">Facebook</a>
	        			</li>
	        			<li>
	          				<a href="pricing.html">Twitter</a>
	        			</li>
	      			</ul>
				</div>
				<div class="col-sm-4 newsletter">
					<div class="signup clearfix">
						<p>
							Sign up for the newsletter and we'll inform you of updates, offers and more.
						</p>
						<form>
							<input type="text" name="email" class="form-control" placeholder="Your email address" />
							<input type="submit" value="Sign up" />
						</form>
					</div>
					<a href="#">
						<img src="../asset/images/social-tw.png" alt="twitter" />
					</a>
					<a href="#">
						<img src="../asset/images/social-dbl.png" alt="dribbble" />
					</a>
				</div>
			</div>
			<div class="row credits">
				<div class="col-md-12">
					Copyright © 2014. mPower. All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
</body>
</html>