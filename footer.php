<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress-bootstrap-starter-theme
 */

?>
<!-- Footer -->

<footer id="footer" class="page-footer font-small mt-5 pt-5">
     <div class="container">
  


    


<!--Section: Contact v.2-->
        <!--Section: Contact v.2-->
        <section class="section pb-5">

            <!--Section heading-->
           
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                <h2 class="pt-5 pb-3 text-primary">Need a better website for your food business? Let's talk. </h2>

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
 


               
  <div class="center-on-small-only row p-3">
                      
  <a class="btn btn-primary col-md-3" onclick="validateForm()">Send</a>
  <div class="status col-md-5 offset-md-1" id="status"></div>

                    </div> 
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 offset-md-2 ">
                <div class="row">
                <h2 class="pb-3">Sean Cloudsdale</h2>

                     <div class="col-1 text-center"><i class="fa fa-phone fa-lg"></i></div>
                     <div class="offset-1 col-10"><p> 07525 144056</p></div>
                   </div>
                   <div class="row">
                     <div class="col-1 text-center"><i class="fa fa-envelope fa-lg"></i></div>
                     <div class="offset-1 col-10"> <p>sean@cloudsdale.co.uk</p></div>
                   </div>
                   <div class="row">
                     <div class="col-1 text-center"><i class="fas fa-map-pin fa-lg"></i></div>
                     <div class="offset-1 col-10"><p>1st Floor Studio <br> 33 Aybrook St, Marylebone <br> London, W1U 4AP</p></div>
                   </div>
                   <div class="row">
                     <div class="col-1 text-center"> <i class="fab fa-instagram fa-lg"></i></div>
                     <div class="offset-1 col-10">@seancloudsdale</div>
                   </div>

                  
                       

             
                </div>
                <!--Grid column-->

            </div>

        </section>
        <!--Section: Contact v.2-->



	
</div>

</footer>



<?php wp_footer(); ?>

</body>
</html>
