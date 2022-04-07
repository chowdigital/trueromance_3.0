<?php /* Template Name: Contact MDB */

get_header();
?>
       
		<main id="primary" class="site-main container  pt-6 pb-6">
     <div class="container">
  


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
          

<!--Section: Contact v.2-->
        <!--Section: Contact v.2-->
        <section class="section">

            <!--Section heading-->
           
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <form id ="contact-form" name="contact-form" action="<?php echo get_template_directory_uri(); ?>/mail.php" method="POST"  onsubmit="return validateForm()" >

  <!-- Name input -->
  <div class="form-outline mb-4">
    <input type="text" id="name" name="name" class="form-control" />
    <label class="form-label" for="name">Name</label>

  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="email" name="email" class="form-control" />
    <label class="form-label" for="email">Email address</label>
 
  </div>

  <!-- Subject input -->
  <div class="form-outline mb-4">
    <input type="text" id="subject" name="subject" class="form-control" />
    <label class="form-label" for="subject">Subject</label>

  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="message" name="message" rows="4"></textarea>
    <label class="form-label" for="message">Message</label>
  
  </div>
  </form>
 


               
  <div class="center-on-small-only row">
                      
  <a class="btn btn-primary col-md-3 offset-md-1" onclick="validateForm()">Send</a>
  <div class="status col-md-5 offset-md-1" id="status"></div>

                    </div> 
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 col-xl-3">
                    <ul class="contact-icons">
                        <li><i class="fa fa-map-marker fa-2x"></i>
                            <p>San Francisco, CA 94126, USA</p>
                        </li>

                        <li><i class="fa fa-phone fa-2x"></i>
                            <p>+ 01 234 567 89</p>
                        </li>

                        <li><i class="fa fa-envelope fa-2x"></i>
                            <p>contact@mdbootstrap.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

            </div>

        </section>
        <!--Section: Contact v.2-->



	
</div>
	</main><!-- #main -->



<?php

get_footer();
