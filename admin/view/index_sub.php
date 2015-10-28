<?php
session_start();
if(isset($_SESSION['param1']))
{
	
}	
else
{
	header("location:login/index.php");
	$_SESSION['param1']=nil;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel | SRM mHealth</title>

	<!-- css files -->
	<link rel="stylesheet" type="text/css" href="./css/input.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  
	<!-- js files to be included -->
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/routes.js"></script>


	<!-- inline js scripting -->
	</head>
<body>
	<div id='wrapper'>
		<div id='container' >
			<div id='admin_panel_wrapper'>
				<div id='admin_panel_container'>
					
					<div id='admin_panel_contentholder'>

							<div id='_subscriber' class='contentHolder'>
									<div class='contentSideMenu'>
										<div>
											<ul>
												<li class="Viewpatient btn btn-primary">View Details</li>
												<li class='ContactDoc btn btn-primary'>Contact Docter</li>
												<li class="ViewReport btn btn-primary">View Reports</li>
												<li class="logout btn btn-primary">Logout</li>
											</ul>
										</div>
									</div>
									<div class='responseHolder'>
										
									</div>
							</div>
							
					</div>

				</div>
			</div>
		</div>
	</div>
</body>
</html>