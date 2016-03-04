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
 * @package Glass_and_Beard
 */

get_header(); ?>

  <header id="masthead" class="site-header" role="banner">
    <?php get_template_part( 'template-parts/nav', 'main' ); ?>
  </header><!-- #masthead -->

  <div id="index-page" class="content-area blog-page">
    <main id="main" class="site-main" role="main">
      <div class="container">

        <?php
        if ( have_posts() ) :
          while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/content', get_post_format() );

          endwhile;

          $args = array(
              'prev_text'          => __( 'Next Page' ),
              'next_text'          => __( 'Previous Page' ),
              'screen_reader_text' => __( 'Posts navigation' )
          );
          the_posts_navigation($args);

        else :
          get_template_part( 'template-parts/content', 'none' );
        endif; ?>
      </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
