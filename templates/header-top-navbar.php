<nav class="navbar navbar-default navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Menu</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" role="navigation">
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
    </div>
  </div>
</nav>

<header class="banner">
  <div class="container">
    <div class="logo-container">
      <a href="<?php echo home_url() ?>" title="<?php bloginfo('name') ?>" class="logo-link">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo.png" alt="<?php bloginfo('name') ?>" class="img-responsive">
      </a>
    </div>
  </div>
</header>