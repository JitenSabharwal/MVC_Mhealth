
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<title>mPower</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	  <?php 
	  		include "../MVC/asset/include/link.php";
	  ?>
	</head>
<body id="home">
	<div id="hero">
		<div class="container">
			<h1 class="hero-text animated fadeInDown">
				The best in "health"<br />
				web & mobile apps
			</h1>
			<div class="cta animated fadeInDown">
				<a href="#" class="button-outline" data-target="#login" data-toggle="modal">Login</a>
				<a href="#" class="button-outline" data-target="#register" data-toggle="modal">Register</a>
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
					<img src="/MVC/asset/images/feature1.png" class="img-responsive" alt="feature1" />
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
					<img src="/MVC/asset/images/feature2.png" class="img-responsive" alt="feature2" />
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
							<img src="/MVC/asset/images/slider/slide3.png" alt="slide3" />
						</div>
						<div class="slide">
							<img src="../asset/images/slider/slide4.png" alt="slide4" />
						</div>
						<div class="slide">
							<img src="/MVC/asset/images/slider/slide1.png" alt="slide1" />
						</div>
						<div class="slide">
							<img src="/MVC/asset/images/slider/slide5.png" alt="slide5" />
						</div>
						<div class="slide">
							<img src="/MVC/asset/images/slider/slide2.png" alt="slide2" />
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
						<img src="/MVC/asset/images/patients/sample.jpg">
						<img src="/MVC/asset/images/patients/sample.jpg">
						<img src="/MVC/asset/images/patients/sample.jpg">
						<img src="/MVC/asset/images/patients/sample.jpg">
						<img src="/MVC/asset/images/patients/sample.jpg">
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
	<div id="login"class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          	<h2>Login</h2>
          </div>
          <div class="modal-body">
          	<form id="login_form">
          		<div class="form-group">
          			<label >Username</label>
          			<input type="email" class="form-control" name="username" required placeholder="example@gamil.com">
          		</div>
          		<div class="form-group">
          			<label >Password</label>
          			<input type="password" class="form-control" name="password" required>
          		</div>
          		<div class="form-group col-sm-4 col-sm-offset-3">
          			<input type="submit" class="form-control btn btn-primary btn-block " value="Login">
          		</div>
          	</form>
      	  <hr/>
      	  </div>
    	  <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <div id="register"class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          	<h2>Register</h2>
          </div>
          <div class="modal-body">
          	<form id="register_form">
          		<div class="form-group">
          			<label >Username</label>
          			<input type="text" class="form-control" required name="name" placeholder="example">
          		</div>
          		<div class="form-group">
          			<label >Email</label>
          			<input type="email" class="form-control" required name="email" placeholder="example@gamil.com">
          		</div>
          		<div class="form-group">
          			<label >Contact</label>
          			<input type="contact" class="form-control" required name="contact" placeholder="9999999999">
          		</div>
          		<div class="form-group">
          			<label >Password</label>
          			<input type="password" class="form-control" name="password" required>
          		</div>
          		<div class="form-group col-sm-5 col-sm-offset-3">
          			<input type="submit" class="form-control btn btn-large btn-primary btn-block " value="Register">
          		</div>
          	</form>
          	<div class="form-status">
          	</div>
      	  <hr/>
      	  </div>
    	  <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</body>
<script>
$("#login_form").submit(function(e){
	e.preventDefault();
	var formData = new FormData();
	var email  = $("#login_form [name=username]").val();
	var password= $("#login_form [name=password]").val();
	formData.append("mode","LOGIN");
	formData.append("username",email);
	formData.append("password",password);
	back_call(formData);
});

$("#register_form").submit(function(e){
	e.preventDefault();
	var formData = new FormData();
	var name  = $("#register_form [name=name]").val();
	var email  = $("#register_form [name=email]").val();
	var contact  = $("#register_form [name=contact]").val();
	var password= $("#register_form [name=password]").val();
	formData.append("mode","REGISTER");
	formData.append("name",name);
	formData.append("email",email);
	formData.append("contact",contact);
	formData.append("password",password);
	back_call(formData);
});

function back_call(formData)
{
	$.ajax({
	  url: '/MVC/controller/login/backend.php',
	  type: 'POST',
	  data: formData,
	  cache: false,
	  dataType: 'json',
	  processData: false, // Don't process the file
	  contentType: false, // Set content type to false as jQuery will tell the server its a query string request
	  success: function(json)
	  {
	    var res=$('<div/>').addClass(json.css).html(json.msg);
	    if(json.status==1)
	    { 
	        $('.form-status').empty().html("<div class='alert alert-success'>You have successfully updated your Course Goals! </div>");
	        $("#goal_wrapper_menu div i").removeClass('glyphicon glyphicon-unchecked').removeClass('incomplete').addClass('complete').addClass('glyphicon glyphicon-check');
	        $("#goal_wrapper_menu").attr('status',"1");
	        $("#basic_details_wrapper_menu").attr('status',"-1");
	        $("#goal_wrapper_menu , #basic_details_wrapper_menu").popover('destroy').removeAttr('data-toggle');
	        $(".next").removeClass("hidden");
	        setTimeout(function(){$(".form-status").empty();},5000);
	    }
	    else
	    {
	      var res=$('<div/>').addClass('alert alert-danger').html('<strong>Oh snap!</strong> We couldnt upload the file, please try again!');
	      $('.form-status').empty().append(res);   
	    }
	  },
	  error:function(json)
	  {
	      var res=$('<div/>').addClass('alert alert-danger').html('<strong>Oh snap!</strong> We couldnt upload the file, please try again!');
	      $('.form-status').empty().append(res);
	  }
});
}
</script>
</html>