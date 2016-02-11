<?php
/**
 * Home Testimonials
 *
 * @package Glass and Beard
 */

  $testimonial = get_field('testimonial');
?>

<div id="home-testimonials" class="home-section">
  <a name="home-testimonials-link" class="scroll-destination"></a>
  <div class="container">
    <div class="row">
      <div class="col-sm-offset-5 col-sm-7">
        <div class="header-container">
          <h2>Testimonials</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-1">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/open-quotes.png">
      </div>
      <div class="col-sm-10">
        <p class="testimonial"><?php echo $testimonial; ?></p>
      </div>
      <div class="col-sm-1 close-quotes-container">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/close-quotes.png" class="close-quotes">
      </div>
    </div>
  </div>
</div>
