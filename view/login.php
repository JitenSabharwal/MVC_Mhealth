<!DOCTYPE html>
<html>
<head>
	<title>SRM mHealth Login</title>
	<?php 
	  		include_once("../../MVC_Mhealth/asset/include/link.php");
	?>
</head>
<body id="signup">
	<div class="container">
		<div class="row header">
			<div class="col-md-12">
				<h3 class="logo">
					<a href="index.html">mPower</a>
				</h3>
				<h4>Sign in to your account.</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper clearfix">
					<div class="formy">
						<div class="row">
							<div class="col-md-12">
								<form role="form" name='adminLoginForm' id="loginform" method="post">
							  		<div class="form-group">
							    		<label for="email">Username</label>
							    		<input type="text" name='username' maxlength="10" class="form-control userId" 
							    		 required placeholder="Enter your username."/>
							  		</div>
							  		<div class="form-group">
							    		<label for="password">Password</label>
							    		<input type='password' name='password' maxlength="15"  class="form-control" required placeholder="Enter your password." />
							  		</div>
							  		<div class="submit">
							  			<input type="submit" class="btn btn-primary">
							  		</div>
								</form>
								<div id="loginform-status"></div>
							</div>
						</div>						
					</div>
				</div>
				
			</div>
		</div>
	</div>
</body>
	<script type="text/javascript" src="/MVC_Mhealth/asset/js/login.js"></script>
</html>
