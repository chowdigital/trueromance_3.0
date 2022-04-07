<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress-bootstrap-starter-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<header id="masthead" class="site-header">
<nav class="navbar fixed-top navbar-expand-lg navbar-dark navbar-scroll" role="navigation">
  <div class="container">
	<!-- Brand and toggle get grouped for better mobile display -->
	<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cloudsdale_logo.svg" alt="Cloudsdale Logo" style>

		</a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

	<!-- Collapsible wrapper -->
  <div class="collapse navbar-collapse text-right " id="navbarSupportedContent">
     
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-end text-right ">
        <li class="nav-item">
          <a class="nav-link" href="web-design/">Web Design</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Photography">Photography</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#footer">Let's Talk</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

	
      
		
		
    </div>
</nav>
		

		<!--Navbar-->


	</header><!-- #masthead -->

  