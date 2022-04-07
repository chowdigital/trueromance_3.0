<?php /* Template Name: Photo*/ get_header(); ?>



<main class="container">
<section class="page-img-header d-flex">

<div class="col-12 d-flex align-items-center">
<?php the_title('<h1 class="pt-6 col-12 page-title-text">', '</h1>'); ?>
</div>

</section>



<section class="entry-content col-12 pb-6" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-right">
		<?php
        the_content();

        wp_link_pages(
            array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'wordpress-bootstrap-starter-theme'),
                'after'  => '</div>',
            )
        );
        ?>
</section><!-- .entry-content -->
          
       
<!-- Photo Gallery -->
<section class="section pt-6 pb-6"    
  data-mdb-toggle="animation"
  data-mdb-animation-start="onLoad"
  data-mdb-animation="fade-in-up">
    <a class="gallery-link" href="food-drink">
      <div class="row row-of-squares" data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="pulse">
        <div class="square clipped col-12 col-md-6 bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/grid/food-wide.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;"> </div>
        <div class="clipped col-12 col-md-6 col-lg-3 photo-link d-flex flex-column justify-content-center bg-pink">
            <h2>Food / Drink</h2>
        </div>
        <div class="clipped d-none d-lg-block col-lg-3 bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/grid/food-square.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;"></div>
      </div>
    </a>
    <a class="gallery-link" href="spaces">
    <div class="row row-of-squares" data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="pulse">
    <div class="order-2 order-md-1 order-lg-1 clipped col-12 col-md-6 col-lg-3 photo-link d-flex flex-column justify-content-center bg-orange">
          <h2>Spaces</h2>
      </div>

      <div class="order-1 order-md-2 order-lg-2 square clipped col-12 col-md-6 col-lg-9 bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/grid/location-wide.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;"></div>
    </div>
    </a>
    <a class="gallery-link" href="people">
    <div class="row row-of-squares" data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="pulse">
      <div class="order-lg-1 clipped d-none d-lg-block col-lg-3 bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/grid/people-square.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;"></div>
      <div class="order-2 order-lg-2 clipped col-12 col-md-6 col-lg-3 photo-link d-flex flex-column justify-content-center bg-yellow">
          <h2>People</h2>
      </div>      
      <div class="order-1 order-lg-3 square clipped col-12 col-md-6 bg-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/grid/people-wide.jpg'); background-repeat: no-repeat; background-position: center; background-size: cover;"></div>

    </div>
    </a>
    <a class="gallery-link" href="motion">
    <div class="row row-of-squares" data-mdb-toggle="animation" data-mdb-animation-start="onHover" data-mdb-animation-reset="true" data-mdb-animation="pulse">
      <div class="no-auto-pad order-md-2 order-lg-1 clipped col-12 col-md-6 col-lg-9 bg-image" >
              <video class="d-lg-none wide-video clipped " loop muted autoplay poster="https://s3.amazonaws.com/coverr-public/poster/Evening_breeze.jpg">
              <source src="<?php echo get_template_directory_uri(); ?>/assets/img/video/DSC_1805_square.mp4" type="video/mp4">
              </video>
              <video class="d-none d-lg-block wide-video clipped" loop muted autoplay poster="https://s3.amazonaws.com/coverr-public/poster/Evening_breeze.jpg">
              <source src="<?php echo get_template_directory_uri(); ?>/assets/img/video/DSC_1805_wide.mp4" type="video/mp4">
              </video>
      </div>
      <div class="order-md-1 order-lg-2 clipped col-12 col-md-6 col-lg-3 photo-link d-flex flex-column justify-content-center bg-red">
          <h2>Motion</h2>
      </div>
    </div>
      </a>

</section>

<!-- END ** Photo Gallery -->




<!-- Pricing -->
  </main>

<?php get_footer(); ?>