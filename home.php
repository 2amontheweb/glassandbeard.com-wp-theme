<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Top_PE_Firms
 */

get_header(); ?>

<div id="home-page">
  <!-- HEADER
       Placed here because this specific navbar is only appropriate for home page.
       ============ -->
  <header id="masthead" class="site-header" role="banner">
    <?php get_template_part( 'template-parts/home', 'top' ); ?>
    <?php get_template_part( 'template-parts/home', 'nav' ); ?>
  </header><!-- #masthead -->

  <div id="primary" class="content">
    <main id="main" role="main">
      <h3>Home Page</h3>
      <?#php get_template_part( 'template-parts/home', 'nominate' ); ?>
      <?#php get_template_part( 'template-parts/home', 'sponsor' ); ?>
      <?#php get_template_part( 'template-parts/home', 'meet' ); ?>
      <?#php get_template_part( 'template-parts/home', 'contact' ); ?>
    </main><!-- #main -->
  </div><!-- #primary -->
</div>
<?php get_footer(); ?>
