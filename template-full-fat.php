<?php /* Template Name: Full-Fat*/ get_header(); ?>

<div class="container ">
	<div class="row screen-height flex-md-row-reverse justify-content-center">

		<div class="col-12 col-md-8 col-lg-8">
      <div class="d-flex flex-column justify-content-center cloudWorld" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-right">
      <img id="cloudWorld" src="<?php echo get_template_directory_uri(); ?>/assets/img/cloudWorld.svg" alt="">
      </div>

		</div>
    <div class="col-10 col-md-4 col-lg-6 d-flex flex-column justify-content-center cloudIntro" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-up">
  
		  <h1 class="col-12 page-title-text">WEBSITE HEAVEN <br>FOR INDEPENDENT <br>RESTAURANTS</h1>
    
		</div>
		



	</div>


</div>
  


<!--Grid column-->
<div class="container-sticky container">
  <div class="sticky-child d-none d-lg-block col-4">
  <div class="sticky-contact-form mr-5 md-form mb-0">
  
  <!-- Begin Mailchimp Signup Form -->
  <div>

<form action="https://jukebox-gin.us6.list-manage.com/subscribe/post?u=2429f9b681e6f56c5bb45030b&amp;id=f77ffef259" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
      <div class="row">
            <div class="md-form mb-0">
           
          <input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">
          <label for="mce-EMAIL" class="mdbInput fc-wide">Email <span class="asterisk">*</span></label>
          </div>
      </div>
<div class="row">
  <div class="col-md-6">
        <div class="md-form mb-0">
        <input type="text" value="" name="FNAME" class="required form-control" id="mce-FNAME">
              <label for="mce-FNAME" class="mdbInput">First Name  <span class="asterisk">*</span></label>
           
            </div>
  </div>
  <div class="col-md-6">
  <div class="form-outline">
  <input ype="text" value="" name="LNAME" class="form-control" id="mce-LNAME">
  <label class="form-label" for="typeText" class="mdbInput">Last Name</label>
</div>


      
  </div>
</div>





  <div class="">

    <div class="row datefield">
      <div class="col-md-6">
      <div class="md-form mb-0">

        <input class="birthday " type="text" pattern="[0-9]*" value="" size="2" maxlength="2" name="BIRTHDAY[day]" id="mce-BIRTHDAY-day" class="form-control">
        <label for="mce-BIRTHDAY-day" class="mdbInput">dd </label>
  </div>
    </div>
  <div class="col-md-6">
  <div class="md-form mb-0">

      <input class="birthday " type="text" pattern="[0-9]*" value="" size="2" maxlength="2" name="BIRTHDAY[month]" id="mce-BIRTHDAY-month" class="form-control">
      <label for="mce-BIRTHDAY-month" class="mdbInput">mm</label>
  </div>
  </div>
  <p class="">Birthday</p>
    </div>
  </div>	<div id="mce-responses" class="clear">
      <div class="response" id="mce-error-response" style="display:none"></div>
      <div class="response" id="mce-success-response" style="display:none"></div>
    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_64ab03f3af339dfeb72f5e5fe_12fa2e0fcf" tabindex="-1" value=""></div>
      <div class="clear">
        <input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="button "></div>
      </div>
  </form>
  </div>

    <!--End mc_embed_signup-->

    <!--End mc_embed_signup-->  
  </div>

  </div>
  <div class="entry-content col-10 col-lg-6 full-fat-content">
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
  
</div>


<?php get_footer(); ?>