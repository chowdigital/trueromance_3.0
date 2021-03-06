<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Wordpress-bootstrap-starter-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<header class="entry-header pb-4">

			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="">', '</h1>' );
			else :
				the_title( '<h2 class=""><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				
			<?php endif; ?>

</header><!-- .entry-header -->


		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wordpress-bootstrap-starter-theme' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wordpress-bootstrap-starter-theme' ),
				'after'  => '</div>',
			)
		);
		?>
<!-- 
	<footer class="entry-footer">
		<?php wordpress_bootstrap_starter_theme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
