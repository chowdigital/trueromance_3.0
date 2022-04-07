<?php /* Template Name: Pricing*/ get_header(); ?>
<div class="page-img-header d-flex shadow-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

<div class="mask gradient-custom" style="width: 100%; height: 100%;">

  </div>
</div>


<main id="primary" class="site-main container  pt-6 pb-6">
<div class="shadow-3">
  <div class="menu-content-box col-12">

  <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
  <!--Grid row-->
  <div class="row wow fadeIn">
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
        <div class="col-lg-3 col-md-6 col-sm-12 mb-4 d-flex flex-column">
     

            <!--Featured image-->
            <div class="view overlay hm-white-slight rounded shadow-2 mb-4 thumb-wrapper" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

             
</div>

            <div>
            <h4 class="mb-3 font-weight-bold">
                <strong><?php the_title(); ?></strong>
            </h4>
          
          
            <p class="grey-text"><?php the_content(); ?></p>
            </div>
           
        </div>
        <!--Grid column-->

      <?php
      
      $counter++;
      } // end while
      } // end if
      wp_reset_postdata(); 
      ?>
     </div>
    <!--Grid row-->
 
    </div>
    </div>
    <!-- Pricing info -->
<section class="section container pt-6 pb-6">
      <h1 class="page-title-text">Pricing</h1>
      <h2>Sign up for regular photography sessions and pay less. </h2>
      <p>Vegan glossier normcore hexagon intelligentsia swag trust fund occupy. Umami williamsburg mumblecore, food truck bitters semiotics franzen thundercats intelligentsia jianbing biodiesel copper mug distillery. Offal austin adaptogen, glossier tofu kinfolk bushwick pok pok you probably haven't heard of them. Meditation tattooed vice, everyday carry glossier cronut wolf tacos man braid master cleanse bicycle rights. Stumptown photo booth PBR&B bespoke williamsburg. Fixie cloud bread mixtape pickled fingerstache pabst vinyl godard thundercats ramps stumptown selvage.</p>
      <p><i class="fas fa-check"></i> Save up to 45%</p>
      <p><i class="fas fa-check"></i> Build a great relationship with the same photographer</p>
      <p><i class="fas fa-check"></i> Get your ongoing photography budget signed off</p>
      <p><i class="fas fa-check"></i> Priority booking</p>
  </section>



<!-- Section: Pricing table -->
<section id="one" class="pricing-table d-flex align-items-center section pt-6 pb-6">



    <div class="row">
       <!-- Single Tier -->
       <div class="col-md-6 col-lg-3">
        <div class="card mb-5 mb-lg-0 card-body-dark">
          <div class="card-body card-body-inner-dark">
          <h5 class="text-center">Single Shoot</h5>
     

     <h6 class="card-price text-center">£100<span class="term">/hour</span></h6>

     <h5 class="card-title grey-text text-center">£400 /half day</h5>

            <hr class="my-4">   
            <ul class="fa-ul">      
              <li class="grey-text"><span class="fa-li"><i class="fas fa-times"></i></span>Subscription</li>
            </ul>

            <hr class="my-4">   

            <p class="card-title grey-text text-center">no monthly fee</p>

            <a href="#" class="btn btn-block btn-primary shadow-0 btn-rounded my-2"><i class="fas fa-paper-plane"></i>&nbspBook a shoot</a>
          </div>
        </div>
      </div>
      <!-- 6month Tier -->
      <div class="col-md-6 col-lg-3">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
          <h5 class="text-center">Two Seasons</h5>
     

            <h6 class="card-price text-center">£75<span class="term">/hour</span></h6>

            <h5 class="card-title grey-text text-center">£300 /half day</h5>

            <hr class="my-4">

            <ul class="fa-ul">      
              <li><span class="fa-li"><i class="fas fa-camera-retro"></i></span><strong>Subscription:</strong></li>
              <li><span class="fa-li"><i class="fas fa-calendar-alt"></i></span>2 shoots per year</li>
              <li><span class="fa-li"><i class="fas fa-clock"></i></span>Half-day (4 hours) per shoot</li>
              <li><span class="fa-li"><i class="fas fa-plus"></i></span>book more photos at same low rate</li>

            </ul>
            <hr class="my-4">

            <p class="card-title blue-text text-center">£50 /month</p>


            <a href="#" class="btn btn-block btn-primary shadow-0 btn-rounded my-2"><i class="fas fa-paper-plane"></i>&nbspregister interest</a>

          </div>
        </div>

      </div>
      <!-- 4month Tier -->
      <div class="col-md-6 col-lg-3">

        <div class="card mb-5 mb-lg-0 card-highlight">
          <div class="card-body ">
          <h5 class="text-center">Four Seasons</h5>


            <h6 class="card-price text-center">£60<span class="term">/hour</span></h6>

            <h5 class="card-title grey-text text-center">£240 /half day</h5>

            <hr class="my-4">
            <ul class="fa-ul">      
            <li><span class="fa-li"><i class="fas fa-camera-retro"></i></span><strong>Subscription:</strong></li>
            <li><span class="fa-li"><i class="fas fa-calendar-alt"></i></span>4 shoots per year</li>
              <li><span class="fa-li"><i class="fas fa-clock"></i></span>Half-day (4 hours) per shoot</li>
              <li><span class="fa-li"><i class="fas fa-plus"></i></span>book more photos at same low rate</li>


            </ul>
            <hr class="my-4">
            <p class="card-title blue-text text-center">£80 /month</p>

            <a href="#" class="btn btn-block btn-primary shadow-0 btn-rounded my-2"><i class="fas fa-paper-plane"></i>&nbspregister interest</a>
          </div>
        </div>
      <h2 class="text-center pt-2 ">Most popular</h2>
      <p class="text-center pb-5 "><i class="fas fa-seedling"></i>&nbspfor seasonal menus</p>


       
      </div>
       <!-- 2month Tier -->
       <div class="col-md-6 col-lg-3">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
          <h5 class="text-center">Bimonthly</h5>


            <h6 class="card-price text-center">£55<span class="term">/hour</span></h6>

            <h5 class="card-title grey-text text-center">£220 /half day</h5>

            <hr class="my-4">
            <ul class="fa-ul">      
            <li><span class="fa-li"><i class="fas fa-camera-retro"></i></span><strong>&nbspSubscription:</strong></li>
            <li><span class="fa-li"><i class="fas fa-calendar-alt"></i></span>6 shoots per year</li>
              <li><span class="fa-li"><i class="fas fa-clock"></i></span>Half-day (4 hours) per shoot</li>
              <li><span class="fa-li"><i class="fas fa-plus"></i></span>book more photos at same low rate</li>

            </ul>
            <hr class="my-4">

            <p class="card-title blue-text text-center">£105 /month</p>

            <a href="#" class="btn btn-block btn-primary shadow-0 btn-rounded my-2"><i class="fas fa-paper-plane"></i>&nbspregister interest</a>
          </div>
        </div>
        <p class="text-center pt-2 pb-5"><i class="fa fa-store" aria-hidden="true"></i>&nbsp<i class="fa fa-store" aria-hidden="true"></i>&nbspuse across multiple sites </p>


      </div>
      
    </div>


</section>
<!-- Section: Pricing table -->
</main>
<?php get_template_part( 'template-parts/banner', 'page' ); ?>
<?php get_footer(); ?>