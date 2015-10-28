$(document).ready(function(){
	$(".test").hide();
	var nikshay_no = prompt("Enter the <b>Nikshay Number</b> of the patient");

	if(nikshay_no != "")
	{
		$.ajax({
				type : "Post" ,
				data : {nikshay_no : nikshay_no} ,
				url  : "./functions/search_patient.php" ,
				success: function(data){
								if(data == "0")
								{
									alert("Enter the correct Nikshay Number....");
								}
					
							},
				error : function()
						{
							alert("data")
							alert("Server 404 error");
							document.write("Server 404 error");
						}			  
		}); 	
	}
	else
	{
		alert("Enter the Nikshay Number!");
	}
	$(".test").submit(function(){
		alert($(this).serialize());
		$.ajax({
			Type : "Post" ,
			Data : $(this).serialize() ,
			url  : "./functions/test.php" ,
			success : function(data){
							if(data == "1")
							{
								alert("Test Results Submitted");
							}
							else
							{
								alert("Server 404 error");
							}	
						} ,
			error : function(){
					alert("Server 404 error");
					document.write("Server 404 error");
				}			
		});
	});
});