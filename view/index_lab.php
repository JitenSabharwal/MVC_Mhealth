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
 <?php 
        include "../../MVC_Mhealth/asset/include/link.php";
	  ?>
<head>
	<title>LabTechnician Panel | SRM mHealth</title>

		
</head>
<body>
	<header class="navbar navbar-inverse hero" role="banner" style="background:indigo" >
  		<div class="container" >
    		<div class="navbar-header">
		      	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
      			<a href="index.html" class="navbar-brand">mPower</a>
    		</div>
    		<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      			<ul class="nav navbar-nav navbar-right">
      				<li class="dropdown">
        				<a href="#">Home</a>
        			</li>
        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          					Subscriber <b class="caret"></b>
          				</a>
          				<ul class="dropdown-menu">
							<li><a class="addSubscriber" href="#">Add Subscriber</a></li>
							<li><a class="search_sub" href="#">View Subscriber</a></li>
				        </ul>
        			</li>
        			<li class="dropdown">
          				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          					Test<b class="caret"></b>
          				</a>
          				<ul class="dropdown-menu">
							<li><a class="sputum">Lab Sputum Test</a></li>
							<li><a class="xray">Lab Xray Test</a></li>
				        </ul>
        			</li>
        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          					More<b class="caret"></b>
          				</a>
          				<ul class="dropdown-menu">
							<li><a class="support.html">Support</a></li>
							<li><a class="contactus.html">Contact us</a></li>
				        </ul>
        			</li>
        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          						<?php if(isset($_SESSION['user'])) 
          								echo $_SESSION['username']; 
          							  else 
          						  		echo "No User"; 
          						 ?>
          						<b class="caret"></b>
          				</a>
          				<ul class="dropdown-menu">
							<li><a href="#dropdown1" data-toggle="tab">Profile</a></li>
							<li><a href="#dropdown3" data-toggle="tab">Settings</a></li>
      						<li class="divider"></li>
    						<li><a class="logout" href="#" data-toggle="tab"><i class="fa fa-fw fa-power-off"></i>Log Out</a></li>


				        </ul>
        			</li>
      			</ul>
    		</nav>
  		</div>
	</header>
<!-- This where everything get loaded -->
  <div class='responseHolder container'>
  	
  </div>

</body>
</html>