<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<!-- FOOTER -->

<footer class="footer">
	<div class="container">
		<div class="footer_content">
			<div class="footer_wrapper">
				<div class="col-md-2 col-sm-2 rooms_foot footer_lists">
					<h3>ROOMS</h3>
					<ul>
						<?php wp_nav_menu( array( 'menu' => 'footer_rooms' ) ); ?>
					</ul>
				</div>
				<div class="col-md-3 col-sm-3 experience_foot footer_lists">
					<h3>EXPERIENCES</h3>
					<ul>
						<?php wp_nav_menu( array( 'menu' => 'footer_experiences' ) ); ?>
					</ul>
				</div>
				<div class="col-md-2 col-sm-2 media_foot footer_lists">
					<h3>MEDIA</h3>
					<ul>
						<?php wp_nav_menu( array( 'menu' => 'footer_media' ) ); ?>
					</ul>
				</div>
				<div class="col-md-2 s col-sm-2 itemap_foot footer_lists">
					<h3>SITEMAP</h3>
					<ul>
					<?php wp_nav_menu( array( 'menu' => 'footer_sitemap' ) ); ?>
					</ul>
				</div>
				<div class="col-md-3 col-sm-3 social_foot footer_lists">
					<h3>SOCIAL</h3>
					<ul class="social_icons">
						<li class=""><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li class=""><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li class=""><a href="#"><i class="fa fa-facebook"></i></a></li>
					</ul>
					<h3>BOOKINGS</h3>
					<ul>
						<?php wp_nav_menu( array( 'menu' => 'footer_bookings' ) ); ?>
					</ul>
				</div>	
				<div class="clearfix"></div>
			</div>
			<div class="footer_logo text-center">
				<a href="#"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/mylogo.png" /></a>
			</div>
			
			<?php dynamic_sidebar( 'sidebar-3' ); ?>
		</div>
	</div>
</footer>
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
