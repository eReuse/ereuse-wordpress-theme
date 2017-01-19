<?php
/**
 * The theme footer
 *
 * @package bootstrap-basic
 */
?>
</div> <!-- main -->
<footer id="site-footer" role="contentinfo">
  <div class="container">
    <p class="text-center">
      eReuse.org is a project under Pangea
    </p>
	  <?php wp_nav_menu( array(
		  'theme_location' => 'footer-menu',
		  'container'      => false,
		  'menu_class'     => 'nav navbar-nav',
		  'walker'         => new BootstrapBasicMyWalkerNavMenu()
	  ) ); ?>
    <div id="footer-row" class="row site-footer ">
      <div class="col-md-6 footer-right text-right">
		  <?php dynamic_sidebar( 'footer-right' ); ?>
      </div>
    </div>
    <ul class="list-inline text-center">
      <li><img src="<?php print get_stylesheet_directory_uri() . '/images/logo-chest.png' ?>" class="picture-sm"></li>
      <li><img src="<?php print get_stylesheet_directory_uri() . '/images/txt-logo.svg' ?>" class="picture-sm"></li>
      <li><img src="<?php print get_stylesheet_directory_uri() . '/images/eu-logo.png' ?>" class="picture-sm"></li>
      <li><img src="<?php print get_stylesheet_directory_uri() . '/images/logo-diputacio.jpg' ?>" class="picture-sm"></li>
      <li><img src="<?php print get_stylesheet_directory_uri() . '/images/logo-fundacio.png' ?>" class="picture-sm">
      </li>
      <li><img src="<?php print get_stylesheet_directory_uri() . '/images/barcelona-activa-logo.png' ?>" class="picture-sm"></li>
      <li><img src="<?php print get_stylesheet_directory_uri() . '/images/upc-logo.svg' ?>" class="picture-sm"></li>
      <li><img src="<?php print get_stylesheet_directory_uri() . '/images/pangea-logo.png' ?>" class="picture-sm"></li>
    </ul>
    <div class="text-center">
      <img src="<?php print get_stylesheet_directory_uri() . '/images/ereuse-logo.svg' ?>" class="picture-md"
    </div>
  </div>
</footer>
<!--wordpress footer-->
<?php wp_footer(); ?>
</body>
</html>
