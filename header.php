<?php
/**
 * The theme header
 *
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes"/>
    <!--wordpress head-->
	  <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <!--[if lt IE 8]>
    <p class="ancient-browser-alert">You are using an <strong>outdated</strong> browser. Please
      <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a>.</p>
    <![endif]-->
    <div class="main">
      <header>
		  <?php do_action( 'before' ); ?>
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <a href="/">
                <img id="main-logo"
                     alt="Brand"
                     src="<?php print get_stylesheet_directory_uri() . '/images/ereuse-logo.svg' ?>">
              </a>
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
                <span class="sr-only"><?php _e( 'Toggle navigation', 'bootstrap-basic' ); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div class="collapse navbar-collapse navbar-primary-collapse">
				<div class="container">
					<?php wp_nav_menu( array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'nav navbar-nav',
						'walker'         => new BootstrapBasicMyWalkerNavMenu()
					) ); ?>
					<?php dynamic_sidebar( 'navbar-right' ); ?>
				</div>
            </div><!--.navbar-collapse-->
          </div>
        </nav>
      </header>
