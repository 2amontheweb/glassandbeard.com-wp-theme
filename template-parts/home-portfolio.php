<?php
/**
 * Home Portfolio
 *
 * @package Glass and Beard
 */

  $portfolio_left_image = get_field('portfolio_left_image');

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
?>

<div id="home-portfolio" class="home-section">
  <a name="home-portfolio-link" class="scroll-destination"></a>
  <div class="row">
    <div class="col-sm-5 portfolio-main-image" style="background-image:url(<?php echo $portfolio_left_image['url']; ?>)">
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
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_photography_top_left['url']; ?>)"></div>
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_photography_top_right['url']; ?>)"></div>
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_photography_bottom_left['url']; ?>)"></div>
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_photography_bottom_right['url']; ?>)"></div>
          </div>

          <div class="tab-pane" id="pf_logo">
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_logo_top_left['url']; ?>)"></div>
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_logo_top_right['url']; ?>)"></div>
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_logo_bottom_left['url']; ?>)"></div>
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_logo_bottom_right['url']; ?>)"></div>
          </div>

          <div class="tab-pane" id="pf_website">
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_website_top_left['url']; ?>)"></div>
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_website_top_right['url']; ?>)"></div>
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_website_bottom_left['url']; ?>)"></div>
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_website_bottom_right['url']; ?>)"></div>
          </div>

          <div class="tab-pane" id="pf_magazine">
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_magazine_top_left['url']; ?>)"></div>
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_magazine_top_right['url']; ?>)"></div>
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_magazine_bottom_left['url']; ?>)"></div>
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_magazine_bottom_right['url']; ?>)"></div>
          </div>

          <div class="tab-pane" id="pf_typography">
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_typography_top_left['url']; ?>)"></div>
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_typography_top_right['url']; ?>)"></div>
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_typography_bottom_left['url']; ?>)"></div>
            <div class="portfolio-image" style="background-image:url(<?php echo $pf_typography_bottom_right['url']; ?>)"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
