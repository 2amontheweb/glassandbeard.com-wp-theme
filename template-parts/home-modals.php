<?php
  $carousels = array(
    'pf_photography_top_left_carousel',
    'pf_photography_top_right_carousel',
    'pf_photography_bottom_left_carousel',
    'pf_photography_bottom_right_carousel',
    'pf_logo_top_left_carousel',
    'pf_logo_top_right_carousel',
    'pf_logo_bottom_left_carousel',
    'pf_logo_bottom_right_carousel',
    'pf_website_top_left_carousel',
    'pf_website_top_right_carousel',
    'pf_website_bottom_left_carousel',
    'pf_website_bottom_right_carousel',
    'pf_magazine_top_left_carousel',
    'pf_magazine_top_right_carousel',
    'pf_magazine_bottom_left_carousel',
    'pf_magazine_bottom_right_carousel',
    'pf_typography_top_left_carousel',
    'pf_typography_top_right_carousel',
    'pf_typography_bottom_left_carousel',
    'pf_typography_bottom_right_carousel',
  );

  foreach($carousels as $c) {

?>
  <div class="modal active" id="<?php echo $c ?>-modal" tabindex="-1" role="dialog" aria-labelledby="<?php echo $c ?>-modal-label">
    <div class="modal-dialog">
      <div class="modal-header">
        <button type="button" class="modal-close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="portfolio-wrapper">

          <?php

            $post_object = get_field($c);

            if( $post_object ):

              // override $post
              $post = $post_object;
              setup_postdata( $post );

              $image1 = get_field('carousel_image_1', $post_object->ID);
              $image2 = get_field('carousel_image_2', $post_object->ID);
              $image3 = get_field('carousel_image_3', $post_object->ID);
              $image4 = get_field('carousel_image_4', $post_object->ID);

              ?>

                <div class="image" style="background-image: url(<?php echo $image1['url'] ?>);"></div>
                <div class="image" style="background-image: url(<?php echo $image2['url'] ?>);"></div>
                <div class="image" style="background-image: url(<?php echo $image3['url'] ?>);"></div>
                <div class="image" style="background-image: url(<?php echo $image4['url'] ?>);"></div>
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
          <?php endif; ?>

        </div>

      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
<?php
  }
?>
