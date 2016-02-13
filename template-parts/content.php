<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Glass_and_Beard
 */
?>

<article class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <div class="entry-meta">
      <?php glass_and_beard_posted_on(); ?>
    </div><!-- .entry-meta -->


  <header class="entry-header">

    <?php
    if ( is_single() ) {
      the_title( '<h3 class="entry-title">', '</h3>' );
    } else {
      the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
    } ?>

  </header>

  <div class="entry-content">
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
    </div><!-- .entry-content -->





    <footer class="entry-footer">
      <?php glass_and_beard_entry_footer(); ?>
    </footer><!-- .entry-footer -->
  </article><!-- #post-## -->
