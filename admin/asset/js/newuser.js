$(document).ready(function(){
	console.log("new user");	
	$(".register").submit(function(){
		event.preventDefault();
		console.log($(this).serialize());
		//alert(new FormData(this));
		$.ajax({
			type : "Post",
			url  : "./functions/addSubscriber.php" ,
			data : 	$(this).serialize() ,
			success : function(data)
					  {
					  		alert(data);
					  		//condition to be placed here
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