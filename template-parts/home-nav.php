<?php
/**
 * Home Navbar
 *
 * @package Top_PE_Firms
 */
?>

<nav class="navbar" id="home-nav">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <!-- <a class="navbar-brand" href="#"><img src="<?#php bloginfo('stylesheet_directory'); ?>/img/top-50.png" alt="Top 50 Nav Logo"></a> -->
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/nav-logo.png" class="pull-left">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home-about-link" class="smooth-scroll">About</a></li>
        <li><a href="#home-portfolio-link" class="smooth-scroll">Portfolio</a></li>
        <li><a href="#home-testimonials-link" class="smooth-scroll">Testimonials</a></li>
        <li><a href="#home-blog-link" class="smooth-scroll">Blog</a></li>
        <li><a href="#home-contact-link" class="smooth-scroll">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
