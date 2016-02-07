$(document).ready(function(){
	console.log("new user");	
	$(".register").submit(function(){
		event.preventDefault();
		console.log($(this).serialize());
		//alert(new FormData(this));
		$.ajax({
			type : "Post",
			url  : "../controller/functions/addSubscriber.php" ,
			data : 	$(this).serialize() ,
			success : function(data)
					  {
					  		
					  		if(data=="")
					  		{
					  			window.open("../img_uploader");
					  		}	
				      },
			error	: function(data)
					  {
					  		alert(data);
					  }	        
		});
	});
});