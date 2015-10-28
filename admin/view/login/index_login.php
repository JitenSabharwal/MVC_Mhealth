<!DOCTYPE html>
<html>
<head>
	<title>SRM mHealth Login</title>

	<!-- css files -->
	<link rel="stylesheet" type="text/css" href="../css/index.css">
	<link rel="stylesheet" type="text/css" href="../css/input.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">

	<!-- js files -->
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/js_built_in.js"></script>
	<script type="text/javascript" src="../js/login.js"></script>
	
	<script>
		
	</script>
</head>
<body>
	<div id='wrapper'>
		<div id='container'>
			<div id='loginWrapper' class='containerChild'>
				<div id='loginFormContainer'>
					<div id='loginErr' class='err'></div>
					<form name='adminLoginForm' id="loginform" method="post">
						<table border="0px" cellspacing="25px">
							<tr>
								<th>
									Enter Admin Id
								</th>
								<td>
									<input type='text' name='loginUserId' maxlength="10" class='userId text input' placeholder='Admin ID' required>
								</td>
							</tr>
							<tr>
								<th>
									Enter Password
								</th>
								<td>
									<input type='password' name='loginPassword' maxlength="15" class='password text input' placeholder='Password'>
								</td>
							</tr>
							<tr>
								<td colspan="2" class='submitBtnHolder'>
									<input type='submit' name='adminLoginSubmit' value='LOG IN' class='login btn'>
								</td>
							</tr>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
	
</html>
