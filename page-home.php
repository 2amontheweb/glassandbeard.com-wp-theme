<?php
/**
 * Template Name: Home
 */

get_header(); ?>

<div id="home-page">
  <!-- HEADER
       Placed here because this specific navbar is only appropriate for home page.
       ============ -->
  <header id="masthead" class="site-header" role="banner">
    <?php get_template_part( 'template-parts/home', 'top' ); ?>
    <?php get_template_part( 'template-parts/nav', 'home' ); ?>
  </header><!-- #masthead -->

  <div id="home-content" class="content">
    <main id="main" role="main">
      <?php get_template_part( 'template-parts/home', 'about' ); ?>
      <?php get_template_part( 'template-parts/home', 'portfolio' ); ?>
      <?php get_template_part( 'template-parts/home', 'testimonials' ); ?>
      <?php get_template_part( 'template-parts/home', 'blog' ); ?>
      <?php get_template_part( 'template-parts/home', 'contact' ); ?>
    </main><!-- #main -->
  </div><!-- #primary -->
</div>
<?php get_footer(); ?>
