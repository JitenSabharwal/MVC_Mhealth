var g_url = "http://mhealthsrm.org";
$("#loginform").submit(function(e){
		e.preventDefault();
		$("#loginform-status").empty();
		var username = $("#loginform [name=username]").val();
		var password = $("#loginform [name=password]").val();
		var formData = new FormData();

		formData.append("mode","login");
		formData.append("username",username);
		formData.append("password",password);
		$.ajax({
			url: g_url+"controller/login/backend.php",
			type: 'POST',
			data: formData,
			cache: false,
			dataType: 'json',
			processData: false, // Don't process the file
			contentType: false, // Set content type to false as jQuery will tell the server its a query string request
			success: function(json){ 
						if(json.status == 1)
						{	
							switch(json.user_type)
							{
								case "lab" : window.open(g_url+"view/index_lab.php","_self");
												break;
								case "sub" :window.open(g_url+"view/index_sub.php","_self");
												break;
								case "admin" :window.open(g_url+"view/index_admin.php","_self");
												break;
							}
						}
						else
						{
							$("#loginform-status").empty().html("<div class='alert alert-danger'>Wrong Username and Password</div>");
						}
					} ,
			error:  function()
					{
							$("#loginform-status").empty().html("<div class='alert alert-danger'>Wrong Username and Password</div>");
					}
		});
		return false;
});	

