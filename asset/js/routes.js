//This file shows the routing for all the clicks
function _switch(t)
{
	$(".menu").removeClass('active');
	t.addClass('active');
	var _form = t.attr("value");
	$(".container").find('form').addClass("hidden");
	$("#"+_form).removeClass("hidden");

}
// var g_url = "http://mhealthsrm.org/MVC_Mhealth/";
var g_url = "/MVC/";
