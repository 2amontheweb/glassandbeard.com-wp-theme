<?php
/**
 * Home Contact
 *
 * @package Glass and Beard
 */

  $contact_form = get_field('contact_form');
?>

<div id="home-contact" class="home-section">
  <a name="home-contact-link" class="scroll-destination"></a>
  <div class="container">
    <h2>Contact</h2>
    <?php echo $contact_form ?>
    <?#php the_content(); ?>
  </div>
</div>
