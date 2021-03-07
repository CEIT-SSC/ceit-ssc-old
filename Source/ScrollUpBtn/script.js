<script>
	jQuery(document).ready( function($) {
		$("button.scrollbtn").on("click", e => {
			if ($("button.scrollbtn").hasClass("show")) 
			{
				$('html, body').animate({
                    scrollTop: $('body').offset().top}, 1500);
			}
		});

		$(window).on("scroll", e => {
			if ($(window).scrollTop() > 300) 
			{
				$("button.scrollbtn").addClass("show");
			} else 
			{
				$("button.scrollbtn").removeClass("show");
			}
		});
	});
</script>