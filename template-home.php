<?php /* Template Name: Home 1*/ get_header(); ?>

<!-- The video -->

<video autoplay muted playsinline loop id="myVideo" poster="<?php echo get_template_directory_uri(); ?>/assets/img/poster.png">
  <source src="<?php echo get_template_directory_uri(); ?>/assets/img/video/sky.mp4" type="video/mp4">
</video>

          <div class="d-lg-none"> 
             <div class="row screen-height flex-md-row-reverse d-flex justify-content-center" >
               <div class="collage-sun delay-1" data-mdb-toggle="animation" data-mdb-animation-start="onLoad"  data-mdb-animation="fade-in-down">
                    <img class="floaty" src="<?php echo get_template_directory_uri(); ?>/assets/img/sun400.png" alt="">
                  </div>
                  <div class="collage-tree delay-2" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-left">
                    <img class="floaty" src="<?php echo get_template_directory_uri(); ?>/assets/img/tree400.png" alt="">
                  </div>
                    <div class="collage-car" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="zoom-in">
                    <img id="cloudWorld" src="<?php echo get_template_directory_uri(); ?>/assets/img/car400.png" alt="">
                  </div>
                  <div class="collage-showing" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-down">
                    <img id="cloudWorld2" src="<?php echo get_template_directory_uri(); ?>/assets/img/showing400.png" alt="">
                  </div>
                
                  <div class="collage-glasses" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-right">
                    <img  src="<?php echo get_template_directory_uri(); ?>/assets/img/glasses400.png" alt="">
                  </div>

              </div>
            </div>

            <div class="container d-none d-lg-block"> 
             <div class="row screen-height flex-md-row-reverse d-flex justify-content-center" >
               <div class="collage-sun delay-1" data-mdb-toggle="animation" data-mdb-animation-start="onLoad"  data-mdb-animation="fade-in-down">
                    <img class="floaty" src="<?php echo get_template_directory_uri(); ?>/assets/img/sun.png" alt="">
                  </div>
                  <div class="collage-tree delay-2" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-left">
                    <img class="floaty" src="<?php echo get_template_directory_uri(); ?>/assets/img/tree.png" alt="">
                  </div>
                    <div class="collage-car" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="zoom-in">
                    <img id="cloudWorld" src="<?php echo get_template_directory_uri(); ?>/assets/img/car.png" alt="">
                  </div>
                  <div class="collage-showing" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-down">
                    <img id="cloudWorld2" src="<?php echo get_template_directory_uri(); ?>/assets/img/showing.png" alt="">
                  </div>
                
                  <div class="collage-glasses" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-right">
                    <img id="cloudWorld2" src="<?php echo get_template_directory_uri(); ?>/assets/img/glasses.png" alt="">
                  </div>

              </div>
            </div>







<?php get_footer(); ?>



 