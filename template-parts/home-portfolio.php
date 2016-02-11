<?php
/**
 * Home Portfolio
 *
 * @package Glass and Beard
 */

  $portfolio_left_image = get_field('portfolio_left_image');

  $pf_photography_image_one = get_field('pf_photography_image_one');
  $pf_photography_image_two = get_field('pf_photography_image_two');
  $pf_photography_image_three = get_field('pf_photography_image_three');
  $pf_photography_image_four = get_field('pf_photography_image_four');

  $pf_logo_image_one = get_field('pf_logo_image_one');
  $pf_logo_image_two = get_field('pf_logo_image_two');
  $pf_logo_image_three = get_field('pf_logo_image_three');
  $pf_logo_image_four = get_field('pf_logo_image_four');

  $pf_website_image_one = get_field('pf_website_image_one');
  $pf_website_image_two = get_field('pf_website_image_two');
  $pf_website_image_three = get_field('pf_website_image_three');
  $pf_website_image_four = get_field('pf_website_image_four');

  $pf_magazine_image_one = get_field('pf_magazine_image_one');
  $pf_magazine_image_two = get_field('pf_magazine_image_two');
  $pf_magazine_image_three = get_field('pf_magazine_image_three');
  $pf_magazine_image_four = get_field('pf_magazine_image_four');

  $pf_typography_image_one = get_field('pf_typography_image_one');
  $pf_typography_image_two = get_field('pf_typography_image_two');
  $pf_typography_image_three = get_field('pf_typography_image_three');
  $pf_typography_image_four = get_field('pf_typography_image_four');
?>

<div id="home-portfolio" class="home-section">
  <a name="home-portfolio-link" class="scroll-destination"></a>
  <div class="container">
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
          <div class="tab-content clearfix">

            <div class="tab-pane active" id="pf_photography">
              <h3>something somehting yada yada yada something somehting yada yada yada something somehting yada yada yada</h3>
            </div>

            <div class="tab-pane active" id="pf_logo">
              <h3>Content's background color is the same for the tab</h3>
            </div>

            <div class="tab-pane" id="pf_website">
              <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
            </div>

            <div class="tab-pane" id="pf_magazine">
              <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
            </div>

            <div class="tab-pane" id="pf_typography">
              <h3>We use css to change the background color of the content to be equal to the tab</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
