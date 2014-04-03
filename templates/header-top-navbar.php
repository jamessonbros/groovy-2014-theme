<nav class="navbar navbar-default">
    <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
      endif;
    ?>
</nav>
<div class="sub-nav text-center">
    <?php
      if (has_nav_menu('secondary_navigation')) :
        wp_nav_menu(array('theme_location' => 'secondary_navigation', 'menu_class' => ''));
      endif;
    ?>
</div>
<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/teeth.png" class="img-responsive teeth">