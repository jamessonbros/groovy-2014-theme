<footer class="content-info" role="contentinfo">

	<div class="text-center payment-list">
		<img class="img-responsive center-block" alt="Web design since 1997" title="Web design since 1997" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/web-design-since-1997.png">
		
		<h3>Accepted payment methods</h3>
		<img width="70" alt="American Express accepted" title="American Express accepted" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/american-express.png">
		<img width="70" alt="Bitcoin accepted" title="Bitcoin accepted" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/bitcoin.png">
		<img width="70" alt="Checks &amp; money orders accepted" title="Checks &amp; money orders accepted" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/check-money-order.png">
		<img width="70" alt="Discover Card accepted" title="Discover Card accepted" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/discover.png">
		<img width="70" alt="Mastercard accepted" title="Mastercard accepted" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/mastercard.png">
		<img width="70" alt="PayPal accepted" title="PayPal accepted" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/paypal.png">
		<img width="70" alt="Visa accepted" title="Visa accepted" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/visa.png">
		<img width="70" alt="Western Union accepted" title="Western Union accepted" src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/western-union.png">
	</div>

	<div class="logo-container">
	  <a href="<?php echo home_url() ?>" title="<?php bloginfo('name') ?>" class="logo-link">
	    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/img/logo.png" alt="<?php bloginfo('name') ?>" class="img-responsive center-block">
	  </a>
	</div>

  <div class="container text-center">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
    <p><span class="glyphicon glyphicon-heart"></span> <a href="/credit/">Credits</a></p>
  </div>
</footer>

<?php wp_footer(); ?>