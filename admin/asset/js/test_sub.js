$(document).ready(function(){
$(".test").click(function(){
	var nikshay_no = prompt("Enter the <b>Nikshay Number</b> of the patient");

	if(nikshay_no != "")
	{
		$.ajax({
				type : "Post" ,
				data : {nikshay_no : nikshay_no} ,
				url  : "../controller/functions/search_patient.php" ,
				success: function(data){
								if(data == "0")
								{
									alert("Enter the correct Nikshay Number....");
								}
								else
									alert(data);
					
							},
				error : function(data)
						{
							alert(data);
						}			  
		}); 	
	}
	else
	{
		alert("Enter the Nikshay Number!");
	}
	
	$(".submittest").submit(function(){
		alert($(this).serialize());
		$.ajax({
			Type : "Post" ,
			Data : $(this).serialize() ,
			url  : "../controller/functions/test.php" ,
			success : function(data){
							if(data == "1")
							{
								alert("Test Results Submitted");
							}
							else
							{
								alert(data);
							}	
						} ,
			error : function(data){
					alert(data);
					//document.write("Server 404 error");
				}			
		});
	});
});
});