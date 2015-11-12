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
	
	
});
$(".sputum_test").submit(function(){
		event.preventDefault();
		alert($(this).serialize());
		console.log($(this).serialize());
		$.ajax({
			Type : "Post" ,
			Data : $(this).serialize() ,
			url  : "../controller/functions/lab_sputum.php" ,
			success : function(data){
							if(data == "1")
							{
					  			window.open("../img_uploader");
							}
							else
							{
								alert(data);
							}	
						} ,
			error : function(data){
					alert(data);
				}			
		});
	});
$(".xray_test").submit(function(){
		event.preventDefault();
		console.log($(this).serialize());
		$.ajax({
			Type : "Post" ,
			Data : $(this).serialize() ,
			url  : "../controller/functions/lab_xray.php" ,
			success : function(data){
							if(data == "1")
							{
					  			window.open("../img_uploader");
							}
							else
							{
								alert(data);
							}	
						} ,
			error : function(data){
					alert(data);
				}			
		});
	});
});