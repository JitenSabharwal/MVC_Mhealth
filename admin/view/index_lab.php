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
<html>
<head>
	<title>LabTechnician Panel | SRM mHealth</title>

	<!-- css files -->
	<link rel="stylesheet" type="text/css" href="./css/input.css">
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
  
	<!-- js files to be included -->
	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript" src="./js/routes.js"></script>
	<script type="text/javascript" src="./js/_subscriber.js"></script>


	<!-- inline js scripting -->
	<script type="text/javascript">
		$(document).ready(function(){
			var xml=createAjaxObj();
			xml.open("get","./checkLoginStatus.php",true);
			xml.send();
			xml.onreadystatechange=function()
			{
				if(xml.readyState==4 && xml.status==200)
				{
					if(xml.responseText=="0")
					//	window.location="./login";
					console.log(xml.responseText);
				}
			}
		});
	</script>
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
												<li class="addSubscriber btn btn-primary">Add Subscriber</li>
												<li class="sputum btn btn-primary">Sputum Test</li>
												<li class="xray btn btn-primary">Xray Test</li>
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