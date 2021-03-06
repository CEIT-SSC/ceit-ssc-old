$(document).ready(function () {
	
    $("html").children().css("direction","rtl");
	
	$(".change-lang").on("click", function () 
	{
		if( $("body").css("direction") == "rtl" )
		{
			$("html").children().css("direction","ltr");
			$("div>a").css("float","left");
		} else 
		{
			$("html").children().css("direction","rtl");
			$("div>a").css("float","right");
		}
	});
});