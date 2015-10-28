$(document).ready(function(){
	$("#loginform").submit(function(event){
		event.preventDefault();
		alert($(this).serialize());
		$.ajax({
			type: "post",
			url: "./login_verify.php",
			data: $(this).serialize(),
			success: function(data){ 
						
						switch(data)
						{
							case "lab" : window.open("../index_lab.php","_self");
											break;
							case "sub" :window.open("../index_sub.php","_self");
										break;
							case "admin":window.open("./index.php","_self")			 				
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

