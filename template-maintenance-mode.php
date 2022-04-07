<?php /* Template Name: Web - old*/ get_header(); ?>

<div class="page-img-header d-flex">

<div class="col-12 d-flex align-items-center container">
<?php the_title( '<h1 class="col-12 page-title-text">', '</h1>' ); ?>


  </div>


</div>
<div class="entry-content container col-12">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wordpress-bootstrap-starter-theme' ),
				'after'  => '</div>',
			)
		);
		?>
	</div><!-- .entry-content -->


<!--Grid row-->
<section class="container-fluid alt-col-grid mt-5 mb-5">
<?php
// The Query
$the_query = new WP_Query( 'cat=3&posts_per_page=24' );
//posts_per_page=5'


// The Loop
		if ( $the_query->have_posts() ) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();
				$category = get_the_category(); 
				?>		


    <!--Grid column-->
  
        <!--Featured image-->
   
       
        <a href="<?php echo get_permalink() ?>" class="">
  <div class="container">
    <div class="row">
        <div class="menu-image-box square col-12 col-lg-6" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
    
      </div>
       
      <div class="menu-content-box grit square col-12 col-lg-6 d-flex align-items-center">
	<header class="entry-header" style="width:100%;">

  <h2 class="m-4">
  <i class="fa fa-edit"></i>&nbsp;<?php the_title(); ?>
        </h2>
        <div class="m-4"><?php the_excerpt(); ?></div>
        
	</header><!-- .entry-header -->




      




      </div>
     
      </div>
  <!--Grid row-->
  </div>
    <!--Grid column-->

  <?php
  
  $counter++;
  } // end while
  } // end if
  ?>

</a>
</section><!-- #main -->


<?php get_footer(); ?>