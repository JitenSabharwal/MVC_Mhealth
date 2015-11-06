$(document).ready(function(){
	$("#loginform").submit(function(event){
		event.preventDefault();
		alert($(this).serialize());
		$.ajax({
			type: "post",
			url: "../controller/login/login_verify.php",
			data: $(this).serialize(),
			success: function(data){ 
						console.log(data);
						switch(data)
						{
							case "lab" : window.open("../index/index_lab.php","_self");
											break;
							case "sub" :window.open("../index/index_sub.php","_self");
										break;
							case "admin":window.open("../index/index.php","_self");

							default: alert("Incoorect username and password");			 				
						}
							//alert("Enter Correct username & password");
					} ,
			error: function(){
				alert("Error");
			}
		});
		return false;
	});	
});

