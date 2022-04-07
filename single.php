<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Wordpress-bootstrap-starter-theme
 */

get_header();
?>
<div class="container">
<div class="page-img-header d-flex shadow-3">
                    <img id="cloudWorld" src="<?php echo get_template_directory_uri(); ?>/assets/img/cloudWorld.svg" alt="">
          
				
</div>
</div>
<main id="primary" class="site-main single-post-main container pt-5 pb-6">

		<div class="post-thumb shadow-5" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;"></div>


		<div class="">
		
		<div class="default-content-box overlap-post shadow-3">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			

			

		endwhile; // End of the loop.
		?>
		

</div>

	</div>

	</main><!-- #main -->

<?php

get_footer();
