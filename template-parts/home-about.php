<?php
/**
 * Home About
 *
 * @package Glass and Beard
 */
  $about_photo = get_field('about_photo');

  $welcome_title = get_field('welcome_title');
  $welcome_message = get_field('welcome_message');

  $about_header_one = get_field('about_header_one');
  $about_content_one = get_field('about_content_one');

  $about_header_two = get_field('about_header_two');
  $about_content_two = get_field('about_content_two');

  $about_header_three = get_field('about_header_three');
  $about_content_three = get_field('about_content_three');

  $about_header_four = get_field('about_header_four');
  $about_content_four = get_field('about_content_four');

  $signature_image = get_field('signature_image');
?>

<div id="home-about" class="home-section">
  <a name="home-about-link" class="scroll-destination"></a>
  <div class="row">

    <div class="col-sm-5 left">
      <h2>About</h2>
      <div class="about-photo" style="background-image:url(<?php echo $about_photo['url']; ?>)">
        <div class="lines"></div>
      </div>
    </div>

    <div class="col-sm-7">
      <div class="col-sm-5 middle">
        <h3 class="welcome-title"><?php echo $welcome_title; ?></h3>
        <p class="welcome-message"><?php echo $welcome_message; ?></p>
        <img src="<?php echo $signature_image['url']; ?>">
      </div>
      <div class="col-sm-7 right">
        <div class="one">
          <h4 class="about-header"><?php echo $about_header_one; ?></h4>
          <p class="about-content"><?php echo $about_content_one; ?></p>
        </div>
        <div class="two">
          <h4 class="about-header"><?php echo $about_header_two; ?></h4>
          <p class="about-content"><?php echo $about_content_two; ?></p>
        </div>
        <div class="three">
          <h4 class="about-header"><?php echo $about_header_three; ?></h4>
          <p class="about-content"><?php echo $about_content_three; ?></p>
        </div>
        <div class="four">
          <h4 class="about-header"><?php echo $about_header_four; ?></h4>
          <p class="about-content"><?php echo $about_content_four; ?></p>
        </div>
      </div>
    </div>

  </div>
</div>
