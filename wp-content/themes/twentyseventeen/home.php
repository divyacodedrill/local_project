<?php
/* Template Name: Home Template */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
		<div class="toolbar">
            <a href="https://twitter.com/2templegardens" target="_blank" class="action"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/company/2-temple-gardens" target="_blank" class="action"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href="http://www.2tg.co.uk/contact-us" target="_blank" class="action"><i class="fa fa-phone" aria-hidden="true"></i></a>
            <span class="action-toggle"></span>
        </div>
<section id="banner">
	<div class="owl-carousel main_banner owl-theme">
		<div class="item">
			<img alt="" src="<?php echo  get_site_url(); ?>/wp-content/uploads/2019/05/banner.png">
			<?php dynamic_sidebar( 'banner-text' ); ?>
		</div>

		<div class="item">
			<img alt="" src="<?php echo  get_site_url(); ?>/wp-content/uploads/2019/05/banner.png">
			<?php dynamic_sidebar( 'banner-text' ); ?>
		</div>
	</div>
</section>

<section class="date_pick">
	<?php dynamic_sidebar( 'date-picker' ); ?>
</section>

<section class="world_best">
	<div class="container">
		<div class="world_best_text">
			<h2>
				<?php
				$post_96 = get_post( 96 ); 
				echo $post_96->post_title;
				?>
			</h2>

			<div class="desc_best_world">
				<p>
					<?php echo $post_96->post_content; ?>
				</p>
			</div>
		</div>

		<div class="img_gallery">
			<ul>
				<?php dynamic_sidebar( 'image-gallery' ); ?>
			</ul>
		</div>
	</div>
</section>

<section class="offers">
	<div class="container">
		<div class="offer_content">
			<?php dynamic_sidebar( 'heading-one' ); ?>

			<div class="offers_grid_content">
			
				<ul>
					<?php

					global $post;
					$args = array( 'posts_per_page' => 3, 'category' => 8 );

					$myposts = get_posts( $args );
					foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
	

					<li class="offers_grid">
						<div class="offers_img">
							<?php echo the_post_thumbnail(); ?>
						</div>

						<div class="offers_grid_desc">
							<h3>
								<?php echo the_title(); ?>
							</h3>

							
								<?php echo the_excerpt(); ?>
							
							<a href="#" class="site-button-white">BOOK NOW</a>
						</div>
					</li>
					<?php endforeach; 
					wp_reset_postdata();
					?>

				</ul>
			</div>
		</div>
	</div>
</section>

<section class="follow_gallery">
	<?php dynamic_sidebar( 'follow-gallery' ); ?>
</section>

<!-- GALLERY -->

<section class="gallery_slider">

<div class="owl-theme">
		<ul class="owl-carousel gallery">
			<li>
				<div class="item">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/gal1-1.png">
				</div>
			</li>

			<li>
				<div class="item">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/gal2.png">
				</div>
			</li>

			<li>
				<div class="item">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/gal3.png">
				</div>
			</li>

			<li>
				<div class="item">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/gal4.png">
				</div>
			</li>

			<li>
				<div class="item">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/gal5.png">
				</div>
			</li>

			<li>
				<div class="item">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/gal6.png">
				</div>
			</li>
			<li>
				<div class="item">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/gal1-1.png">
				</div>
			</li>

			<li>
				<div class="item">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/gal2.png">
				</div>
			</li>

			<li>
				<div class="item">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/gal3.png">
				</div>
			</li>
			<li>
				<div class="item">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/gal4.png">
				</div>
			</li>

			<li>
				<div class="item">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/gal5.png">
				</div>
			</li>

			<li>
				<div class="item">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/05/gal6.png">
				</div>
			</li>
		</ul>
	</div>
		
</section>

<!-- TESTIMONIALS -->

<section class="testimonials">
	<div class="container">
		<?php dynamic_sidebar( 'testimonial' ); ?>			
	</div>
</section>

<!-- BRANDS LOGO SECTION -->

<section class="brands">
	<div class="brands_content">
		<div class="container">
			<div class="brand_logos">
				<?php dynamic_sidebar( 'heading-two' ); ?>
				
				 <div class="col-md-6 brand_logo_img col-xs-12 col-sm-6 col-lg-6 text-center">
				 	<img src="<?php echo get_site_url();?>/wp-content/uploads/2019/05/brand_logo_screenshot.png" alt="">
				 </div>
				  <div class="col-md-6 brand_logo_img col-xs-12 col-sm-6 col-lg-6 text-center hidden-xs">
				 	<img src="<?php echo get_site_url();?>/wp-content/uploads/2019/05/screen_shot_logo2.png" alt="">
				 </div> 
			</div>
		</div>
	</div>
</section>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
