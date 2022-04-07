<?php /* Template Name: Web*/ get_header(); ?>
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
<!-- Website cards -->
     <section>  
     


<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-5" data-mdb-toggle="animation" data-mdb-animation-start="onLoad" data-mdb-animation="fade-in-up">
 
  <!-- one card START -->
  <div class="col">
    <div class="card web-card">
    <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web/stable.jpg" class="w-100" />
  <a href="https://stablepizza.com" target="_blank">
    <div class="mask" style="background-color: rgba(57, 192, 237, 0.2)"></div>
  </a>
</div>

      <div class="card-body p-4">
        <h3 class="card-title">The Stable</h3>
        <p class="card-text">
          A modern multi-location website.
        </p>
        <p class="text-primary"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Web Design</p>
        <p class="text-primary"> <i class="fas fa-camera-retro"></i>&nbsp;&nbsp;Photography</p>
       

      </div>
    </div>

  </div>
  <!-- one card END -->
    <!-- one card START -->
  <div class="col">
    <div class="card web-card">
    <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web/lostboys.jpg" class="w-100" />
  <a href="https://lostboyspizza.com/" target="_blank">
    <div class="mask" style="background-color: rgba(57, 192, 237, 0.2)"></div>
  </a>
</div>

      <div class="card-body p-4">
        <h3 class="card-title">Lost Boys Pizza</h3>
        <p class="card-text">
          A retro 80's glitchy horror website, to suit this unique vampire themed pizzaria.
        </p>
        <p class="text-primary"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Web Design</p>
        <p class="text-primary"> <i class="fas fa-camera-retro"></i>&nbsp;&nbsp;Photography</p>
        <p class="text-primary"><i class="fas fa-clock"></i>&nbsp;&nbsp;Animation</p>

      </div>
    </div>

  </div>
  <!-- one card END -->
   <!-- one card START -->
   <div class="col">
    <div class="card web-card">
    <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web/gun.jpg" class="w-100" />
  <a href="https://gunmakershouse.co.uk/" target="_blank">
    <div class="mask" style="background-color: rgba(57, 192, 237, 0.2)"></div>
  </a>
</div>

      <div class="card-body p-4">
        <h3 class="card-title">Gunmakers</h3>
        <p class="card-text">
        A proper London pub, Marylebone W1
        </p>
        <p class="text-primary"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Web Design</p>
        <p class="text-primary"> <i class="fas fa-camera-retro"></i>&nbsp;&nbsp;Photography</p>
        <p class="text-primary"><i class="fas fa-pencil-ruler"></i>&nbsp;&nbsp;Logo</p>
        <p class="text-primary"><i class="fas fa-rocket"></i>&nbsp;&nbsp;Branding</p>

      </div>
    </div>

  </div>
  <!-- one card END -->
    <!-- one card START -->
    <div class="col">
    <div class="card web-card">
    <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web/cav.jpg" class="w-100" />
  <a href="https://35newcavendish.co.uk/" target="_blank">
    <div class="mask" style="background-color: rgba(57, 192, 237, 0.2)"></div>
  </a>
</div>

      <div class="card-body p-4">
        <h3 class="card-title">The Cavendish</h3>
        <p class="card-text">
          A slick and understated website for an elegent Marylebone bar and dining room.
        </p>
        <p class="text-primary"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Web Design</p>
        <p class="text-primary"> <i class="fas fa-camera-retro"></i>&nbsp;&nbsp;Photography</p>
  

      </div>
    </div>

  </div>
  <!-- one card END -->
      <!-- one card START -->
      <div class="col">
    <div class="card web-card">
    <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web/g2g.jpg" class="w-100" />
  <a href="https://graintogrape.co.uk/" target="_blank">
    <div class="mask" style="background-color: rgba(57, 192, 237, 0.2)"></div>
  </a>
</div>

      <div class="card-body p-4">
        <h3 class="card-title">Grain to Grape</h3>
        <p class="card-text">
        Wine training consultancy with a relaxed and informal approach to wine.
        </p>
        <p class="text-primary"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Web Design</p>
  

      </div>
    </div>

  </div>
  <!-- one card END -->
      <!-- one card START -->
      <div class="col">
    <div class="card web-card">
    <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web/trade.jpg" class="w-100" />
  <a href="https://www.tradehospitality.co.uk/" target="_blank"> 
    <div class="mask" style="background-color: rgba(57, 192, 237, 0.2)"></div>
  </a>
</div>

      <div class="card-body p-4">
        <h3 class="card-title">Trade Hospitaity</h3>
        <p class="card-text">
          The Trade App offers perks and discounts to the hospitality community.
        </p>
        <p class="text-primary"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Web Design</p>
        <p class="text-primary"><i class="fas fa-video"></i>&nbsp;&nbsp;Video</p>
      </div>
    </div>

  </div>
  <!-- one card END -->
    
      <!-- one card START -->
      <div class="col">
    <div class="card web-card">
    <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web/ob.jpg" class="w-100" />
  <a href="https://oldbrompton.co.uk/" target="_blank">
    <div class="mask" style="background-color: rgba(57, 192, 237, 0.2)"></div>
  </a>
</div>

      <div class="card-body p-4">
        <h3 class="card-title">Old Brompton</h3>
        <p class="card-text">
        Wines, cheese and charcuterie in the heart of Kensington, London. 

        </p>
        <p class="text-primary"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Web Design</p>
        <p class="text-primary"> <i class="fas fa-camera-retro"></i>&nbsp;&nbsp;Photography</p>



      </div>
    </div>

  </div>
  <!-- one card END -->
      <!-- one card START -->
      <div class="col">
    <div class="card web-card">
    <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web/lockes.jpg" class="w-100" />
  <a href="https://lockes.co.uk/" target="_blank">
    <div class="mask" style="background-color: rgba(57, 192, 237, 0.2)"></div>
  </a>
</div>

      <div class="card-body p-4">
        <h3 class="card-title">Lockes</h3>
        <p class="card-text">
          Busy central London bar.
        </p>
        <p class="text-primary"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Web Design</p>


      </div>
    </div>

  </div>
  <!-- one card END -->
    <!-- one card START -->
    <div class="col">
    <div class="card web-card">
    <div class="bg-image hover-overlay hover-zoom hover-shadow ripple">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/web/bb.jpg" class="w-100" />
  <a href="https://blackbooksoho.co.uk/" target="_blank">
    <div class="mask" style="background-color: rgba(57, 192, 237, 0.2)"></div>
  </a>
</div>

      <div class="card-body p-4">
        <h3 class="card-title">Black Book</h3>
        <p class="card-text">
        A boutique basement wine bar and kitchen in Central Soho.
        </p>
        <p class="text-primary"><i class="fas fa-desktop"></i>&nbsp;&nbsp;Web Design</p>
        <p class="text-primary"><i class="fas fa-video"></i>&nbsp;&nbsp;Video</p>



      </div>
    </div>

  </div>
  <!-- one card END -->
</div>
     </section>

<!-- Website Cards END --> 
<!-- Pricing -->
  </main>

<?php get_footer(); ?>


