$(document).ready(function () {
    $("html").children().css("direction","rtl");
	
	$(".change-lang").on("click", function () {
		if( $("body").css("direction") == "rtl" )
		{
			$("html").children().css("direction","ltr");
		} else 
		{
			$("html").children().css("direction","rtl");
		}
	});
});