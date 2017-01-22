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
        <div class="text-center">
            <a href="mailto:hello@ereuse.org">
                <h3>Contact us</h3>
                <p>Send us an e-mail</p>
            </a>
        </div>
        <div class="text-center">
            <?php wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'list-inline',
                'walker' => new BootstrapBasicMyWalkerNavMenu()
            )); ?>
        </div>

        <div class="text-center">
            <p class="text-center">
                eReuse.org is a community and project under <a href="https://www.pangea.org">Pangea</a>. <a href="https://pangea.org/aviso/">Legal</a>.<br>
                The head picture of the site is from <a href="http://www.solidanca.cat">Solidança</a> –we are thankful for letting us use it.
            </p>
        </div>
        <div id="footer-row" class="row site-footer ">
            <div class="col-md-6 footer-right text-right">
                <?php dynamic_sidebar('footer-right'); ?>
            </div>
        </div>
        <ul class="list-inline text-center">
            <li><img src="<?php print get_stylesheet_directory_uri() . '/images/logo-chest.png' ?>" class="picture-sm">
            </li>
            <li><img src="<?php print get_stylesheet_directory_uri() . '/images/txt-logo.svg' ?>" class="picture-sm">
            </li>
            <li><img src="<?php print get_stylesheet_directory_uri() . '/images/eu-logo.png' ?>" class="picture-sm">
            </li>
            <li><img src="<?php print get_stylesheet_directory_uri() . '/images/logo-diputacio.jpg' ?>"
                     class="picture-sm"></li>
            <li><img src="<?php print get_stylesheet_directory_uri() . '/images/logo-fundacio.png' ?>"
                     class="picture-sm">
            </li>
            <li><img src="<?php print get_stylesheet_directory_uri() . '/images/barcelona-activa-logo.png' ?>"
                     class="picture-sm"></li>
            <li><img src="<?php print get_stylesheet_directory_uri() . '/images/upc-logo.svg' ?>" class="picture-sm">
            </li>
            <li><img src="<?php print get_stylesheet_directory_uri() . '/images/pangea-logo.png' ?>" class="picture-sm">
            </li>
        </ul>
        <div class="text-center">
            <a href="/">
                <img src="<?php print get_stylesheet_directory_uri() . '/images/ereuse-logo.svg' ?>" class="picture-md"
            </a>
        </div>
    </div>
</footer>
<!--wordpress footer-->
<?php wp_footer(); ?>
</body>
</html>
