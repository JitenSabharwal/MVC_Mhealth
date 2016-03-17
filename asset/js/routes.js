//This file shows the routing for all the clicks

$(document).ready(function(){
	console.log("route");
	//Route to Home
	$(".home").click(function(){
		$(".responseHolder").addClass("hidden");
	});
	//Route to add new user
	$(".addSubscriber").click(function(){
		$(".responseHolder").addClass("hidden");
		$(".subscriber_wrapper").removeClass("hidden");		
	});
	//Route to Search 
	$(".search_sub").click(function(){
		$(".responseHolder").load("../search/search.php");			
	});
	//Tests
	// ---  Sputum --------
	$(".sputum_test").click(function(){
		$(".responseHolder").addClass("hidden");
		$(".sputum_test_wrapper").removeClass("hidden");
	});
	$(".xray_test").click(function(){
		$(".responseHolder").addClass("hidden");
		$(".xray_test_wrapper").removeClass("hidden");
	});
	// $(".sputum").click(function(){
	// 	$(".responseHolder").load("../diagnostic_test/sputum_test.php");			
	// });
	// // -----  Xray -------
	// $(".xray").click(function(){
	// 	$(".responseHolder").load("../diagnostic_test/xray_test.php");			
	// });
//-------------- Subscriber Page-------------------
	//
	$(".Viewpatient").click(function(){
		alert("working");
		$(".responseHolder").load("../sub_functions/profile.php");			
	});

	$(".home").click(function(){
		$(".responseHolder").addClass("hidden");
	});
	
//------------ Logout ------------------------------	

	$(".logout").click(function(){
		$.ajax({
			type : "POST" ,
			url  : "/MVC_Mhealth/controller/login/backend.php"	,
			data :{mode:"logout"},
			cache: false,
			dataType: 'json',
			processData: false, // Don't process the file
			contentType: false, // Set content type to false as jQuery will tell the server its a query string request
			success : function(json)
					  {
						window.open("/MVC_Mhealth/index.php","_self");
					  } ,
			error : function(data)
					{
						alert(data);
					}		  
		});		
	});
	
});
