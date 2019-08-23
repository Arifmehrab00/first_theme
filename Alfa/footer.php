<!-- footer start -->
<div class="footer">
	<div class="footerone">
		<?php
if(is_active_sidebar("footer-1")){

	dynamic_sidebar("footer-1");
}
		 ?>
	</div>
	<div class="footertwo">
		<?php
if(is_active_sidebar("footer-2")){

	dynamic_sidebar("footer-2");
}
		 ?>

	</div>
	<!--footer menu show start--->
<?php 
wp_nav_menu(
         array(
        'theme_location' => 'footermenu',
        'menu_id'        => 'footer-id',
        'menu_class'     =>  'footer-class',
         )
       );
?>
<!-- footer menu show end -->
</div>

<!-- footer end -->
<?php wp_footer(); ?>
</body>

</html>


