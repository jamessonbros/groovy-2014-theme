<footer class="content-info" role="contentinfo">

	<div class="logo-container">
	  <a href="<?php echo home_url() ?>" title="<?php bloginfo('name') ?>" class="logo-link">
	    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo.png" alt="<?php bloginfo('name') ?>" class="img-responsive center-block">
	  </a>
	</div>

  <div class="container text-center">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>

<?php wp_footer(); ?>