<!-- <footer>
	
<div id="copyright_container">
			<p class="p1"> Gjithë të drejtat e rezervuara &copy;<?php //echo date("Y"); echo " "; bloginfo('name'); ?> </p>
			<a href="http://www.thekeygraphics.com">thekey</a>
		</div>

</footer> -->

<!-- madhesia slider -->
<script src="js/rang-slider.js"></script>
<!-- madhesia slider -->

  <script>
$( ".touggle-menu" ).click(function() {
  $( ".left-nav" ).toggle();
});
</script>

<script>
jQuery(document).ready(function(){
    jQuery(".selection-container").click(function(){
        jQuery(this).toggleClass("aktive");
        jQuery('.selection-container').not(jQuery(this)).removeClass('aktive');
    });
});
</script>

<script>
	 jQuery('.tab-forward').click(function(){
  jQuery('.nav-tabs > .active').next('li').find('a').trigger('click');
});
</script>

<script>
	jQuery('#myTabs a').click(function (e) {
  e.preventDefault()
  jQuery(this).tab('show')
})
</script>

<script>
	jQuery(function () {
  jQuery('[data-toggle="tooltip"]').tooltip()
})
</script>

	<!-- bootstrap implimentation -->
    <script src="js/bootstrap.min.js"></script>
    <!-- bootstrap imp end -->
        <script src="js/navbar.js"></script>

</body>

</html>