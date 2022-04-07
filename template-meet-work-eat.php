<?php /* Template Name: Meet Work Eat*/ get_header(); ?>


<div class="mwe-img-header d-flex shadow-3" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/AdobeStock_128001010.jpeg'); background-repeat: no-repeat; background-position: center; background-size: cover;">

</div>
<main id="primary" class="site-main single-post-main mwe-main pb-6">
  
<div class="container">
		<div class="col-6 offset-6 col-lg-3 offset-lg-9 mwe-background shadow-3" >
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mwe.svg" alt="">
        </div>


</div>
		
		<div class="">
        <div class="container container-sticky">
            

        <div class="col-12 col-lg-8">
            <div class="mwe-box pb-3">
            
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			

			

		endwhile; // End of the loop.
		?>
        </div>
		
       
    </div>
  <div class="sticky-child d-none d-lg-block col-3 offset-1">
  <div class="sticky-contact-form mr-5 md-form mb-0">
  <!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/naked-10_7_dtp.css" rel="stylesheet" type="text/css">

<div id="mc_embed_signup">
<form action="https://Cloudsdale.us7.list-manage.com/subscribe/post?u=06e2ebc5ab56000d2770fc3a5&amp;id=0dcd6e9e9c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<h2 class="page-title-text">JOIN US</h2>
    <h4><span class="text-primary mb-5">Sign up here</span> for event invites.</h4>

<div class="form-outline mb-4 mt-4">
    <input type="text" value="" name="NAME" id="mce-NAME" class="form-control mwe-form" />
    <label class="form-label" for="mce-NAME">Name <span class="asterisk">*</span></label>

</div>
<div class="form-outline mb-4">
    <input type="email" value="" name="EMAIL" id="mce-EMAIL" class="required email form-control mwe-form" />
    <label class="form-label" for="mce-EMAIL">Email<span class="asterisk">*</span></label>
</div>

<div class="form-outline mb-4">
    <input type="number" id="mce-MMERGE3" name="MMERGE3" class="form-control mwe-form" />
    <label class="form-label" for="mce-MMERGE3">Phone </label>
</div>
<div class="form-check d-flex mb-4">
    <input class="form-check-input me-2" type="checkbox" value="1" name="group[83384][1]" id="mce-group[83384]-83384-0"/>
    <label class="form-check-label" for="mce-group[83384]-83384-0">Please also add me to the WhatsApp Group (optional)</label>
  </div>
  

<div class="form-outline mb-4">
    <input type="text" id="mce-MMERGE2" name="MMERGE2" class="form-control mwe-form" />
    <label class="form-label" for="mce-MMERGE2">Your Company</label>
</div>
<div class="form-outline mb-4">
    <input type="text" id="mce-MMERGE4" name="MMERGE4" class="form-control mwe-form" />
    <label class="form-label" for="mce-MMERGE4">Your Role</label>
</div>



	<div id="mce-responses" class="clear foot">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_06e2ebc5ab56000d2770fc3a5_0dcd6e9e9c" tabindex="-1" value=""></div>
        <div class="optionalParent">
            <div class="clear foot">
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
    </div>
    </div>
</div>

	</div>
<!-- Modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-modal d-lg-none shadow-3 mwe-background" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
  <h2>JOIN US</h2>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Join Us</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/naked-10_7_dtp.css" rel="stylesheet" type="text/css">

<div id="mc_embed_signup">
<form action="https://Cloudsdale.us7.list-manage.com/subscribe/post?u=06e2ebc5ab56000d2770fc3a5&amp;id=0dcd6e9e9c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">

    <h4><span class="text-primary mb-5">Sign up here</span> for event invites.</h4>

<div class="form-outline mt-4 mb-4">
    <input type="text" value="" name="NAME" id="mce-NAME" class="form-control mwe-form" />
    <label class="form-label" for="mce-NAME">Name <span class="asterisk">*</span></label>

</div>
<div class="form-outline mb-4">
    <input type="email" value="" name="EMAIL" id="mce-EMAIL" class="required email form-control mwe-form" />
    <label class="form-label" for="mce-EMAIL">Email<span class="asterisk">*</span></label>
</div>

<div class="form-outline mb-4">
    <input type="number" id="mce-MMERGE3" name="MMERGE3" class="form-control mwe-form" />
    <label class="form-label" for="mce-MMERGE3">Phone </label>
</div>
<div class="form-check d-flex mb-4">
    <input class="form-check-input me-2" type="checkbox" value="1" name="group[83384][1]" id="mce-group[83384]-83384-0"/>
    <label class="form-check-label" for="mce-group[83384]-83384-0">Please also add me to the WhatsApp Group (optional)</label>
  </div>
  

<div class="form-outline mb-4">
    <input type="text" id="mce-MMERGE2" name="MMERGE2" class="form-control mwe-form" />
    <label class="form-label" for="mce-MMERGE2">Your Company</label>
</div>
<div class="form-outline mb-4">
    <input type="text" id="mce-MMERGE4" name="MMERGE4" class="form-control mwe-form" />
    <label class="form-label" for="mce-MMERGE4">Your Role</label>
</div>



	<div id="mce-responses" class="clear foot">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_06e2ebc5ab56000d2770fc3a5_0dcd6e9e9c" tabindex="-1" value=""></div>
        <div class="optionalParent">
            <div class="clear foot">
                <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->
      </div>
   
    </div>
  </div>
</div>
<!-- Modal--> 



	</main><!-- #main -->

<?php

get_footer();
