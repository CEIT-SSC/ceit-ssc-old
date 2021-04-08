$(document).ready(function(){
				var message_class = "message"
				var browser_name = Object.keys(jQuery.browser)[0];	
				if ( browser_name == "chrome" )
					 $(message_class).css("display", "none");
}); 
