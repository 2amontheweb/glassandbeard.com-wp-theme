<?php
/**
 * Home Blog
 *
 * @package Glass and Beard
 */
?>

<div id="home-blog" class="home-section">
  <div class="stripes"></div>
  <a name="home-blog-link" class="scroll-destination"></a>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h2>Blog</h2>

        <?php $args = array(
          'posts_per_page'   => 2,
          'offset'           => 0,
          'category'         => '',
          'category_name'    => '',
          'orderby'          => 'date',
          'order'            => 'DESC',
          'include'          => '',
          'exclude'          => '',
          'meta_key'         => '',
          'meta_value'       => '',
          'post_type'        => 'post',
          'post_mime_type'   => '',
          'post_parent'      => '',
          'author'     => '',
          'post_status'      => 'publish',
          'suppress_filters' => true
        );

        $latest_posts = get_posts( $args );
        foreach ( $latest_posts as $post ) :
          setup_postdata( $post ); ?>

          <div class="post">
            <div class="featured-image" style="background-image:url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>)">
              <div class="date"><?php echo the_date('d/m'); ?></div>
            </div>
            <div class="info">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php the_excerpt(); ?></p>
            </div>
          </div>
        <?php endforeach;
        wp_reset_postdata(); ?>

      </div>
      <div class="col-sm-6"></div>
    </div>
    <a href="/blog" class="read-more-link">Read More</a>
  </div>
</div>
