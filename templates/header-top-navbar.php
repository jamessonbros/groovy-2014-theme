<nav class="navbar navbar-default">
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
      endif;
    ?>
</nav>
<div class="sub-nav text-center">
  <p class="phone"><a href="tel:+18554766895" alt="(855) 476-6895"><span class="glyphicon glyphicon-earphone"></span> (855) GROOVY-5</a></p>
</div>
<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/teeth.png" class="img-responsive teeth">