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
<div class="sub-nav text-center">
  <p class="phone"><a href="tel:+18554766895" alt="(855) 476-6895"><span class="glyphicon glyphicon-earphone"></span> (855) GROOVY-5</a></p>
</div>
<img src="/wp-content/themes/groovy-2014-theme/assets/img/teeth.png" class="img-responsive teeth">