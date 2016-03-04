<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Glass_and_Beard
 */

get_header(); ?>

<header id="masthead" class="site-header" role="banner">
  <?php get_template_part( 'template-parts/nav', 'main' ); ?>
</header><!-- #masthead -->

<div id="single-page" class="content-area blog-page">
  <main id="main" class="site-main" role="main">
    <div class="container">

    <?php while ( have_posts() ) : the_post(); ?>
      <div class="row">
        <div class="col-sm-3 col-md-4">

          <div class="blog-date">
            <?php the_weekday(); ?> <?php the_date('m.j.y'); ?>
          </div>
          <div class="posted-by">
            posted by Ian Friedel
          </div>

        </div>
        <div class="col-sm-9 col-md-8">

          <div class="entry-content">
            <div class="content">
              <?php
                the_content( sprintf(
                  /* translators: %s: Name of current post. */
                  wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'glass-and-beard' ), array( 'span' => array( 'class' => array() ) ) ),
                  the_title( '<span class="screen-reader-text">"', '"</span>', false )
                  ) );

                wp_link_pages( array(
                  'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'glass-and-beard' ),
                  'after'  => '</div>',
                ) );
              ?>
            </div>
            <img class="featured-image" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>">
          </div>
        </div>
      </div>
      <?php
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;

        endwhile; // End of the loop.
      ?>
    </div>
  </main>
</div>
<?php get_footer(); ?>
