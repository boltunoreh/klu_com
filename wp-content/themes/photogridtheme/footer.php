<div id="footer">
  <div class="footer_box_cont">
    <?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 1') ) : ?>
    <div class="footer_box">
      <h3 class="footer_box_title">Виджет футера №1</h3>
      <p>Текст виджета в футере
      </p>
    </div>
    <!--//footer_box-->
    <?php endif; ?>
  </div>
  <!--//footer_box_cont-->
  <div class="footer_box_cont">
    <?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 2') ) : ?>
    <div class="footer_box">
      <h3 class="footer_box_title">Виджет футера №1</h3>
      <p>Текст виджета в футере
      </p>
    </div>
    <!--//footer_box-->
    <?php endif; ?>
  </div>
  <!--//footer_box_cont-->
  <div class="footer_box_cont footer_box_cont_last">
    <?php if( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Widget 3') ) : ?>
    <div class="footer_box">
      <h3 class="footer_box_title">Виджет футера №1</h3>
      <p>Текст виджета в футере
      </p>
    </div>
    <!--//footer_box-->
    <?php endif; ?>
  </div>
  <!--//footer_box_cont-->
  <div class="clear">
  </div>
  <div class="footer_text">All rights reserved © 2014.
  </div>
</div>
</div>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/load-more.js" type="text/javascript"></script>
<?php wp_footer(); ?>
</body>
</html>