<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Wedding 1.0
 */

get_header();
wp_enqueue_script('wedding-countdown', get_theme_file_uri('/js/countdown.min.js'), array('jquery'), false, true);

?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <div class="bread-crumbs-container">

                <div class="container">

                    <ul>
                        <li>
                            <a href="/">Главная</a>
                        </li>
                        <li>
                            Портфолио
                        </li>
                    </ul>
                    <div style="clear: both;"></div>

                </div>

            </div>

            <header class="entry-header">
                <div class="container">
                    <h1 class="entry-title">Портфолио</h1>
                </div>
            </header>

    </div>

    <div class="promo-wrap">
        <div class="description-container">
            <span class="title">Хочешь стать успешным мастером?</span>
            <img class="h-del" src="<?= get_theme_file_uri('/images/h-del.svg') ?>" />
            <div class="description">Только до конца февраля на курс действует выгодное предложение</div>
        </div>
        <div class="right-container">
            <div class="price-container">
                <span class="price-before">25 600</span>
                <span class="price">20 400 ₽</span>
            </div>
            <div id="countdownTimer" class="countdown">
                <span class="ends-in">до конца акции осталось</span>
                <div class="timer">
                    <div class="hours"></div>:<div class="minutes"></div>:<div class="seconds"></div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <button class="wd-button action">Купить</button>
    </div>
    <script>
        const now = new Date();
        const twoHoursLater = now.setHours(now.getHours() + 2);
        jQuery(document).ready(function($) {
            $('#countdownTimer').countdown(twoHoursLater, function(event) {
                this.querySelector('.hours').textContent = event.strftime('%H');
                this.querySelector('.minutes').textContent = event.strftime('%M');
                this.querySelector('.seconds').textContent = event.strftime('%S');
            });
        });
    </script>

    </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
