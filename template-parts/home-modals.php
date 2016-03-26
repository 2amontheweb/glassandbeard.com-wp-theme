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
  <div class="modal fade active" id="<?php echo $c ?>-modal" tabindex="-1" role="dialog" aria-labelledby="<?php echo $c ?>-modal-label" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-header">
        <button type="button" class="modal-close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
      </div>
      <div class="modal-body">
        <?php $pf_photography_top_left_carousel = get_field($c); ?>
        <?php echo $pf_photography_top_left_carousel; ?>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
<?php
  }
?>
