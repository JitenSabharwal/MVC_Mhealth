$(document).ready(function(){
	console.log("search");
	$(".search").submit(function(){
		event.preventDefault(); 
		console.log($(this).serialize());
		$.ajax({
			type : "Post" ,
			url	 : "./functions/search_patient.php" ,
			data : $(this).serialize() ,
			success : function(data)
						{
							alert(data);
							window.open("./show_profile/display.php");
						} ,
			error : function(data)
					{
						alert(data);
					}			 	 	
		});
	});
});