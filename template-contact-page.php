<?php /* Template Name: Contact Page 4 */

get_header();
?>


		<main id="primary" class="site-main container  pt-6 pb-6">
        <div class="container">
                <div id="contact_form">
                <!-- Form contact -->

  <form id="custom-validate-form" action="<?php echo get_template_directory_uri(); ?>/mail.php" method="POST" class="needs-validation"
  novalidate>
  <h2>Contact us</h2>

  <!-- Name input -->
  <div class="form-outline mb-4">
    <input type="text" id="name" name="name" class="form-control" />
    <label class="form-label" for="name">Name</label>
    <div class="invalid-feedback">
      Please provide your name.
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="email" name="email" class="form-control" />
    <label class="form-label" for="email">Email address</label>
    <div class="invalid-feedback">
      Please provide your email.
    </div>
  </div>

  <!-- Subject input -->
  <div class="form-outline mb-4">
    <input type="text" id="subject" name="subject" class="form-control" />
    <label class="form-label" for="subject">Subject</label>
    <div class="invalid-feedback">
      Please provide mail subject.
    </div>
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="message" name="message" rows="4"></textarea>
    <label class="form-label" for="message">Message</label>
    <div class="invalid-feedback">
      Please provide a message text.
    </div>
  </div>

  <!-- Submit button -->
  <button id="custom-validation-button" type="submit" class="btn btn-primary btn-block mb-4">
    Send
  </button>

  <!-- Status message -->
  <div id="status"></div>
</form>
  <!-- Form contact -->
                        
                </div>



		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			

			

		endwhile; // End of the loop.
		?>
</div>
	</main><!-- #main -->

<?php

get_footer();
