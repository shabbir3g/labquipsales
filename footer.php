<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package labquipsales
 */

?>

<div id="WebSiteFooter" class="GC40 WebSiteFooter">


	<?php 

	wp_nav_menu([
		'theme_location'		=> 'footer-menu',
		'menu_class'			=> 'footer-menu',
		'fallback_cb'			=> 'footer_menu',
	]);


	 ?>
	<!--<ul class="footer-menu">
		<li><a href="#">About</a></li>
		<li><a href="#">Brands</a></li>
		<li><a href="#">Checkout</a></li>
		<li><a href="#">Favourites</a></li>
		<li><a href="#">Privacy</a></li>
		<li><a href="#">Terms</a></li>
		<li><a href="#">Contact Us</a></li>
		
	</ul> --> 
</div>

<?php $footer_log = get_field('footer_logo','options'); 
	if( $footer_log): ?>
<div class="LayoutObject" id="AppLogo" style="background-image:url(<?php echo $footer_log['url']; ?>);">

	<?php $footer_link = get_field('footer_link','options'); 
	if( $footer_link): ?>
	<a id="LinkSF" rel="nofollow" href="<?php echo $footer_link['url']; ?>" title="<?php echo $footer_link['title']; ?>" target="_blank"><span><?php echo $footer_link['title']; ?></span></a>
	<?php endif; ?>

</div>
<?php endif; ?>

</div>


	<?php wp_footer(); ?>
</body>
</html>