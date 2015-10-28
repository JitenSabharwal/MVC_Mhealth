//This file shows the routing for all the clicks
function logout()
{
	alert("wor");
    window.location="./login/";
}

$(document).ready(function(){
	console.log("route");
	//Route to add new user
	$(".addSubscriber").click(function(){
		$(".responseHolder").load("./_subscriber/addSubscriber.html");		
	});
	//Route to Search 
	$(".search_sub").click(function(){
		$(".responseHolder").load("./search/search.php");			
	});
	//Tests
	// ---  Sputum --------
	$(".sputum").click(function(){
		$(".responseHolder").load("./diagnostic_test/sputum_test.html");			
	});
	// -----  Xray -------
	$(".xray").click(function(){
		$(".responseHolder").load("./diagnostic_test/xray_test.html");			
	});
//-------------- Subscriber Page-------------------
	//
	$(".Viewpatient").click(function(){
		alert("working");
		$(".responseHolder").load("./sub_functions/profile.php");			
	});
//------------ Logout ------------------------------	
	$(".logout").click(function(){
		$.ajax({
			type : "post" ,
			url  : "./login/logout.php"	,
			success : function(data)
					  {
					  	if(data == "1")
					  		window.open("./login/index.php","_self");
					  } ,
			error : function(data)
					{
						alert(data);
					}		  
		});		
	});
	
});
