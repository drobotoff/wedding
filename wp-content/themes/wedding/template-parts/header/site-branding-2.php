<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Wedding 1.0
 */
?>

<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
    <div class="container">
        <nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'wedding' ); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_class'     => 'main-menu',
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                )
            );
            ?>
        </nav><!-- #site-navigation -->
    </div>
<?php endif; ?>
