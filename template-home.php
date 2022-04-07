<?php /* Template Name: Home 1*/ get_header(); ?>

<div class="container ">
    <div class="row screen-height flex-md-row-reverse justify-content-center">

              <div class="col-12 col-md-8 col-lg-6">
                    <div class="d-flex flex-column justify-content-center cloudWorld" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-right">
                    <img id="cloudWorld" src="<?php echo get_template_directory_uri(); ?>/assets/img/cloudWorld.svg" alt="">
                  </div>

              </div>
              <div class="col-10 col-md-4 col-lg-6 d-flex flex-column justify-content-center cloudIntro" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-up">
            
                <h1 class="col-12 page-title-text">FOOD FOCUSED <br>WEB DESIGN <br>& CREATIVITY</h1>





              </div>
              

</div>
 </div>




<main class="container">
<!-- TEXT BOX STICKY-->
<div class="container-sticky">
  <div class="col-12 col-lg-8 mwe-box">
    <?php
    while ( have_posts() ) :
      the_post();
      get_template_part( 'template-parts/content', get_post_type() );
    endwhile; // End of the loop.
    ?>        
  </div>
    <div class="sticky-child d-none d-lg-block col-3 offset-1">
      <div class="sticky-contact-form mr-5 md-form mb-0">
          
          <div class="row">
            <div class="col-12 text-center">
              <a href="web-design">
          <img class="icon-50 shadow-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/web.svg" alt="Web Design">
              <p>Web Design</p></a>
            </div>
        
            <div class="col-12  text-center">
            <a href="photography">
            <img class="icon-50 shadow-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/photo.svg" alt="Web Design">
        
              <p>Photography</p>
        </a>
            </div>
        
            <div class="col-12 text-center">
            <a href="graphic-design">
            <img class="icon-50 shadow-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/design.svg" alt="Web Design">
        
              <p>Graphic Design</p>
        </a>
            </div>
        </div>
          
      </div>
    </div>
</div>

<!-- TEXT BOX STICKY-->

<section class="container pt-5 d-block d-lg-none">
   <div class="row">
    <div class="col-12 col-md-4 text-center">
      <a href="web-design">
  <img class="icon-50 shadow-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/web.svg" alt="Web Design">
      <p>Web Design</p></a>
    </div>

    <div class="col-12 col-md-4 text-center">
    <a href="photography">
    <img class="icon-50 shadow-3" src="<?php echo get_template_directory_uri(); ?>/assets/img/photo.svg" alt="Web Design">

      <p>Photography</p>
</a>
    </div>

    <div class="col-12 col-md-4 text-center">
    <a href="graphic-design">
    <img class="icon-50" src="<?php echo get_template_directory_uri(); ?>/assets/img/design.svg" alt="Web Design">

      <p>Graphic Design</p>
</a>
    </div>
</div>
</section>


 
 
  <section class="pt-6 pb-6 shadow-2 container">
    <div class="row">
  <div class="p-5 mwe-box">
    <div class="text-center">
        <h2 class="underline-heading pt-5 pb-3 mb-5">Websites for food - the blog</h2> 
    </div>


    <div class="blog-post-container">
                <?php $the_query = new WP_Query( 'cat=1&posts_per_page=3' );
                    if ( $the_query->have_posts() ) {
                    while ( $the_query->have_posts() ) { $the_query->the_post();  $category = get_the_category();  ?>		
                       <div class="blog-post-list mb-5"> <a class="text-secondary" href="<?php echo get_permalink() ?>"> 
                            <div class="view overlay hm-white-slight mb-4 thumb-wrapper square-img black-outline" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">
                            </div>
                            <h3 class="font-weight-bold"> <?php the_title(); ?> </h3>
                            <!--<div class="" >  <?php the_excerpt(); ?>  </div>-->
                         
                            </a>  </div>
                <?php $counter++; } /* end while*/ } /* end if */ wp_reset_postdata(); ?>
    </div>
    <div class="text-center">
   <!-- <a href="<?php echo get_home_url(); ?>/articles/"><button type="button" class="btn btn-green">View all articles</button></a> -->
    </div>
              </div></div>
</section>
</main><!-- #main -->



<?php get_footer(); ?>



 