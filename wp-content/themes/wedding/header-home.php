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

<?php get_template_part( 'template-parts/header/site', 'menu' ); ?>

<div id="page-home" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'wedding' ); ?></a>

    <header id="masthead" class="<?php echo is_singular() && wedding_can_show_post_thumbnail() ? 'site-header featured-image' : 'site-header'; ?>">

        <div class="site-header-container">

            <div class="site-branding-container">
				<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>
            </div><!-- .site-branding-container -->

            <div class="home-nav-curses">

                <div class="home-nav-curses-conteiner">

                    <div class="left-arrow">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 12L7.05 10.95L2.85 6.75L12 6.75V5.25L2.85 5.25L7.05 1.05L6 -9.53674e-07L-9.53674e-07 6L6 12Z" fill="white"/>
                        </svg>
                    </div>

                    <div class="right-arrow" style="">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6 0L4.95 1.05L9.15 5.25L0 5.25L0 6.75L9.15 6.75L4.95 10.95L6 12L12 6L6 0Z" fill="white"/>
                        </svg>
                    </div>

                    <div class="items">
                        <div class="items-bg"></div>
                        <div class="item-container">
                             <div class="item">
                                 <div class="grid">

                                     <div class="grid__col-4">
                                         <div class="image">
                                            <img src="/wp-content/themes/wedding/images/home-img-1.png" alt="">
                                         </div>
                                     </div>
                                     <div class="grid__col-5">
                                         <div class="title-sub">
                                             Видеокурс 51 урок, 44 часа, 25,5 гб
                                         </div>
                                         <div class="title">
                                             Свадебный наряд моей дочери
                                         </div>
                                     </div>
                                     <div class="grid__col-3">
                                         <div class="price-container">
                                             <span class="price-before">25 600 ₽</span>
                                             <span class="price">20 400 ₽</span>
                                         </divclass>
                                         <div class="date">
                                             до 15 декабря 2020
                                         </div>
                                         <div>
                                             <button class="wd-button">Подробнее</button>
                                         </div>
                                     </div>

                                 </div>
                             </div>
                        </div>
                    </div>

                </div>

            </div>

<!--            <div class="home-slider-top">-->
<!---->
<!--                <div class="container">-->
<!---->
<!--                    <div class="items">-->
<!--                        <div class="item">dfhdfghdfg</div>-->
<!--                        <div class="item">dfhdfghdfg2</div>-->
<!--                        <div class="item">dfhdfghdfg3</div>-->
<!--                        <div class="item">dfhdfghdfg4</div>-->
<!--                    </div>-->
<!---->
<!--                </div>-->
<!---->
<!--            </div>-->

        </div>

    </header><!-- #masthead -->

    <div id="content" class="site-content">
