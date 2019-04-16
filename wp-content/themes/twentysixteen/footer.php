<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<!-- Footer -->
<div id="footer" class="light">
	<div class="container">
		<div class="twelve columns alpha">
			<div class="region region-footer-first">
				<div id="block-block-1" class="block block-block">
					<div class="content">
						<p class="no-margin">Unauthorized access is prohibited. This site is monitored.<br /></p>
					</div>
				</div>
			</div>
		</div>
		
		<div class="four columns omega">
			<div class="region region-footer-second">
				<div id="block-block-3" class="block block-block">
					<div class="content">
						<p><img src="<?php echo get_template_directory_uri().'/images/logo-bottom.jpg' ?>" /></p>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
<!-- Footer / End -->
<div id="footer-links">
	<div class="container">
		<div class="eleven columns">
			<?php
				wp_nav_menu( array( 
				'theme_location' => 'footer-nav', 
				'container_class' => 'custom-menu-class' ) ); 
			?>
		</div>
		<div class="five columns">
			<p class="center">© 2018 - Northeast Investors Trust</p>
		</div>
	</div>
</div>
<script>
  
jQuery(document).ready(function() {
	jQuery("#mc-embedded-subscribe").click(function() {
		if(jQuery("#mce-EMAIL").val()=="") {
			//jQuery(".email_error").html("Email field can't be blank.");
			alert("Email field can't be blank.");
			return false;
		}	
		else if(!$("#email").val().match('^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9])+$')) {
			//jQuery(".email_error").html("Not a valid email.");
			return false;
		}
		else{
			//jQuery(".email_error").html("");
		}
	});
});
</script>
<?php wp_footer(); ?>

</body>
</html>