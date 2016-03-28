<?php
/**
 * Home Portfolio
 *
 * @package Glass and Beard
 */

  // $portfolio_left_image_1 = get_field('portfolio_left_image_1');

  $pf_left_images = array(
    'portfolio_left_image_1',
    'portfolio_left_image_2',
    'portfolio_left_image_3',
    'portfolio_left_image_4',
    'portfolio_left_image_5'
  );

  $pf_photography_top_left = get_field('pf_photography_top_left');
  $pf_photography_top_right = get_field('pf_photography_top_right');
  $pf_photography_bottom_left = get_field('pf_photography_bottom_left');
  $pf_photography_bottom_right = get_field('pf_photography_bottom_right');

  $pf_logo_top_left = get_field('pf_logo_top_left');
  $pf_logo_top_right = get_field('pf_logo_top_right');
  $pf_logo_bottom_left = get_field('pf_logo_bottom_left');
  $pf_logo_bottom_right = get_field('pf_logo_bottom_right');

  $pf_website_top_left = get_field('pf_website_top_left');
  $pf_website_top_right = get_field('pf_website_top_right');
  $pf_website_bottom_left = get_field('pf_website_bottom_left');
  $pf_website_bottom_right = get_field('pf_website_bottom_right');

  $pf_magazine_top_left = get_field('pf_magazine_top_left');
  $pf_magazine_top_right = get_field('pf_magazine_top_right');
  $pf_magazine_bottom_left = get_field('pf_magazine_bottom_left');
  $pf_magazine_bottom_right = get_field('pf_magazine_bottom_right');

  $pf_typography_top_left = get_field('pf_typography_top_left');
  $pf_typography_top_right = get_field('pf_typography_top_right');
  $pf_typography_bottom_left = get_field('pf_typography_bottom_left');
  $pf_typography_bottom_right = get_field('pf_typography_bottom_right');

  // $portfolio_left_carousel = get_field('portfolio_left_carousel');
?>

<div id="home-portfolio" class="home-section">
  <a name="home-portfolio-link" class="scroll-destination"></a>
  <div class="row">
    <div class="col-sm-5 portfolio-main-image">   <!-- style="background-image:url(<?#php echo $portfolio_left_image['url']; ?>)" -->
      <div class="portfolio-wrapper">

        <?php
          foreach($pf_left_images as $image) {
            $i = get_field($image);
        ?>

        <div class="image-wrapper">
          <div class="image" style="background-image: url(<?php echo $i['url'] ?>);"></div>
        </div>

        <?php
          }
        ?>
      </div>
    </div>
    <div class="col-sm-7">
      <div class="portfolio">
        <ul class="nav nav-tabs">
          <li role="presentation" class="active"><a href="#pf_photography" data-toggle="tab">Photography</a></li>
          <li role="presentation"><a href="#pf_logo" data-toggle="tab">Logo</a></li>
          <li role="presentation"><a href="#pf_website" data-toggle="tab">Website</a></li>
          <li role="presentation"><a href="#pf_magazine" data-toggle="tab">Magazine</a></li>
          <li role="presentation"><a href="#pf_typography" data-toggle="tab">Typography</a></li>
        </ul>
        <div class="tab-content portfolio-content">

          <div class="tab-pane active" id="pf_photography">
            <a href="#" data-toggle="modal" data-target="#pf_photography_top_left_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_photography_top_left['url']; ?>)"></div></a>
            <a href="#" data-toggle="modal" data-target="#pf_photography_top_right_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_photography_top_right['url']; ?>)"></div></a>
            <a href="#" data-toggle="modal" data-target="#pf_photography_bottom_left_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_photography_bottom_left['url']; ?>)"></div></a>
            <a href="#" data-toggle="modal" data-target="#pf_photography_bottom_right_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_photography_bottom_right['url']; ?>)"></div></a>
          </div>

          <div class="tab-pane" id="pf_logo">
            <a href="#" data-toggle="modal" data-target="#pf_logo_top_left_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_logo_top_left['url']; ?>)"></div></a>
            <a href="#" data-toggle="modal" data-target="#pf_logo_top_right_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_logo_top_right['url']; ?>)"></div></a>
            <a href="#" data-toggle="modal" data-target="#pf_logo_bottom_left_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_logo_bottom_left['url']; ?>)"></div></a>
            <a href="#" data-toggle="modal" data-target="#pf_logo_bottom_right_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_logo_bottom_right['url']; ?>)"></div></a>
          </div>

          <div class="tab-pane" id="pf_website">
            <a href="#" data-toggle="modal" data-target="#pf_website_top_left_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_website_top_left['url']; ?>)"></div></a>
            <a href="#" data-toggle="modal" data-target="#pf_website_top_right_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_website_top_right['url']; ?>)"></div></a>
            <a href="#" data-toggle="modal" data-target="#pf_website_bottom_left_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_website_bottom_left['url']; ?>)"></div></a>
            <a href="#" data-toggle="modal" data-target="#pf_website_bottom_right_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_website_bottom_right['url']; ?>)"></div></a>
          </div>

          <div class="tab-pane" id="pf_magazine">
            <a href="#" data-toggle="modal" data-target="#pf_magazine_top_left_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_magazine_top_left['url']; ?>)"></div></a>
            <a href="#" data-toggle="modal" data-target="#pf_magazine_top_right_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_magazine_top_right['url']; ?>)"></div></a>
            <a href="#" data-toggle="modal" data-target="#pf_magazine_bottom_left_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_magazine_bottom_left['url']; ?>)"></div></a>
            <a href="#" data-toggle="modal" data-target="#pf_magazine_bottom_right_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_magazine_bottom_right['url']; ?>)"></div></a>
          </div>

          <div class="tab-pane" id="pf_typography">
            <a href="#" data-toggle="modal" data-target="#pf_typography_top_left_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_typography_top_left['url']; ?>)"></div></a>
            <a href="#" data-toggle="modal" data-target="#pf_typography_top_right_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_typography_top_right['url']; ?>)"></div></a>
            <a href="#" data-toggle="modal" data-target="#pf_typography_bottom_left_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_typography_bottom_left['url']; ?>)"></div></a>
            <a href="#" data-toggle="modal" data-target="#pf_typography_bottom_right_carousel-modal" class="modal-toggle"><div class="portfolio-image" style="background-image:url(<?php echo $pf_typography_bottom_right['url']; ?>)"></div></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
