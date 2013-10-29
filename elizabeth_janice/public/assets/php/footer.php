<?php
/*$page = "$_SERVER[REQUEST_URI]";
if ($page=="/elizabethjanice/portfolio.php" || $page=="/elizabethjanice/portfolio.php#"){
	echo "
				
				elseif($page=="/elizabethjanice/"){
	echo "
		}"
*/
?>
		<!-- jQuery -->
	<hr />
	<div class="centered ten columns">
		<p>&copy 2013 Elizabeth Janice</p>
	</div>		
	</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="public/assets/js/libs/jquery-1.9.1.min.js"><\/script>')</script>
		<script type="text/javascript" src="<?php echo $URL; ?>public/assets/js/jQuery/Nivo/jquery.nivo.slider.pack.js"></script>
		<script type="text/javascript" src="<?php echo $URL; ?>public/assets/js/jQuery/Nivo/jquery.nivo.slider.js"></script>
		<script src="public/assets/js/libs/gumby.js"></script>
		<script type="text/javascript" src="<?php echo $URL; ?>public/assets/js/jQuery/Accordian/accordian.js"></script>
		<script type="text/javascript" src="public/assets/js/jQuery/fancybox/source/jquery.fancybox.pack.js"></script>

	<script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider();
		});
	</script>
	
	<script type="text/javascript">
		$(function() {
			$( '#accordion' ).accordion();
		});
	</script>
				
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox();
		});
	</script>
     </body>
</html>
