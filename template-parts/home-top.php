<?php
/**
 * Home Top
 *
 * @package Glass and Beard
 */

  $top_background_image = get_field('top_background_image');
  $top_logo = get_field('top_logo');

?>

<div id="home-top" class="home-section" style="background-image:url(<?php echo $top_background_image['url']; ?>)">
  <div class="overlay">
    <div class="row">
      <div class="col-xs-5 left">
        <div class="stripes">
          <ul class="nav">
            <li><a href="#home-about-link" class="smooth-scroll">About</a></li>
            <li><a href="#home-portfolio-link" class="smooth-scroll">Portfolio</a></li>
            <li><a href="#home-testimonials-link" class="smooth-scroll">Testimonials</a></li>
            <li><a href="#home-blog-link" class="smooth-scroll">Blog</a></li>
            <li><a href="#home-contact-link" class="smooth-scroll">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="col-xs-7 right">
        <div class="logo-container">
          <img src="<?php echo $top_logo['url'] ?>" class="logo">
        </div>
      </div>
    </div>
  </div>
</div>
