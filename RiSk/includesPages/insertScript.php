<script type="text/javascript" src="assets/js/materialize.min.js"></script>
	<script type="text/javascript" src="assets/js/main.js"></script>
	<script type="text/javascript" src="assets/js/jquery.changethewords.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.parallax').parallax();
			$('.materialboxed').materialbox();

			$("#test").changeWords({
		        time: 2000,
		        animate: "bounce",
		        selector: "span"
		      });
		});		

		$(window).bind('scroll', function () {
		    if ($(window).scrollTop() > 450) {
		        $('.menuHeader').addClass('menuHeaderFixe');
		        $('.logoMenuHeader').addClass('logoMenuHeaderShow animated flipInY');
		    } else {
		        $('.menuHeader').removeClass('menuHeaderFixe');
		        $('.logoMenuHeader').removeClass('logoMenuHeaderShow animated flipInY');
		    }
		});
	</script>