<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Wedding 1.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'wedding' ); ?></a>

    <header id="masthead" class="<?php echo is_singular() && wedding_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">

        <div class="site-header-container">

            <div class="site-branding-container">
				<?php get_template_part( 'template-parts/header/site', 'branding-2' ); ?>
            </div><!-- .site-branding-container -->

        </div>

    </header>

	<div id="content" class="site-content">
