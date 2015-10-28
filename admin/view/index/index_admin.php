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
	 <?php 
	  		include "../include/link.php";
	  ?>
	<title>Admin Panel | SRM mHealth</title>

	<!-- css files -->
	  
	<!-- js files to be included -->
	<script type="text/javascript" src="./js/routes.js"></script>


	<!-- inline js scripting -->
	</head>
<body>
	<?php 
		include "../header/header.php";
	 ?>
	
	<div id='wrapper'>
		<div id='container' >
			<div id='admin_panel_wrapper'>
				<div id='admin_panel_container'>
					
					<div id='admin_panel_contentholder'>

							<div id='_subscriber' class='contentHolder'>
									<div class='contentSideMenu'>
										<div>
											<ul>
												<li class="addSubscriber btn btn-primary">Add Subscriber</li>
												<li class='addLabtech btn btn-primary'>Add Lab Techinician</li>
												<li class="search_sub btn btn-primary">View Subscriber</li>
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