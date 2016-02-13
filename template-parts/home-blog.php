<?php
/**
 * Home Blog
 *
 * @package Glass and Beard
 */
?>

<div id="home-blog" class="home-section">
  <a name="home-blog-link" class="scroll-destination"></a>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h2>Blog</h2>
        <?#php

          // query_posts('show_posts=2');

          // if ( have_posts() ) :

            /* Start the Loop */
      // while ( have_posts() ) : the_post();

        /*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
        // get_template_part( 'template-parts/content', get_post_format() );

      // endwhile;

      // the_posts_navigation();

    // else :

      // get_template_part( 'template-parts/content', 'none' );

    // endif;

          // $home_query = new WP_Query('showposts=2');

          // if ( $home_query -> have_posts() ) :
            // while ( $home_query -> have_posts() ) :
              // $home_query -> the_post();

              // glass_and_beard_posted_on();

              // if ( is_single() ) {
              //   the_title( '<h3 class="entry-title">', '</h3>' );
              // } else {
                // the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
              // }
            ?>
            <!-- <div class="entry-content">
              <?#php the_excerpt(); ?>
            </div> -->
            <!-- <img src="<?#php echo the_post_thumbnail(); ?>"> -->

          <?php
            // endwhile;
          // endif;

        ?>

      </div>
      <div class="col-sm-6"></div>
    </div>
  </div>
</div>
