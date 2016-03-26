<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Glass_and_Beard
 */

?>

      <footer id="footer-main" class="site-footer" role="contentinfo">
        <div class="container">
          <img class="logo" src="<?php bloginfo('stylesheet_directory'); ?>/img/footer-logo-2.png">
          <div class="info">Phone: <a href="tel:5125853070">512.585.3070</a></div>
          <div class="info">Email: <a href="mailto:ianfriedel@gmail.com">ianfriedel@gmail.com</a></div>
          <div class="border"></div>
          <div class="copyright">Glass &amp; Beard Media Copyright <?php echo date("Y") ?></div>
        </div>
      </footer><!-- #colophon -->
      <?php wp_footer(); ?>
    </div><!-- #page -->

    <!-- Bootstrap core JavaScript & jQuery
    ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/slick/slick.min.js"></script>
    <script src="<?php bloginfo('template_directory') ?>/js/bundled.js"></script>

  </body>
</html>
