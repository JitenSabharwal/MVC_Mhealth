<!DOCTYPE html>
<html>
<head>
	<title>SRM mHealth Login</title>

	<!-- css files -->
	
	<?php 
		include "../include/link.php";
	?>
	<script type="text/javascript" src="../asset/js/login.js"></script>
	
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
							    		<input type="text" name='loginUserId' maxlength="10" class="form-control userId" 
							    		 required placeholder="Enter your username."/>
							  		</div>
							  		<div class="form-group">
							    		<label for="password">Password</label>
							    		<input type='password' name='loginPassword' maxlength="15"  class="form-control"  placeholder="Enter your password." />
							  		</div>
							  		<div class="submit">
							  			<a href="index.html" class="button-clear">
								  			<span>Sign in </span>
								  		</a>
							  		</div>
								</form>
							</div>
						</div>						
					</div>
				</div>
				
			</div>
		</div>
	</div>
</body>
	
</html>
