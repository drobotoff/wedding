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

get_header('course');
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
                            Каталог видеокурсов
                        </li>
                    </ul>
                    <div style="clear: both;"></div>

                </div>

            </div>

            <header class="entry-header">
                <div class="container">
                    <h1 class="entry-title">Каталог видеокурсов</h1>
                </div>
            </header>


            <div class="portfolio-container">

                <div class="container">

                    <div class="grid">

                        <div class="grid__col-3">

                            <ul>
                                <li>
                                    <a href="#">Все курсы</a>
                                </li>
                                <li>
                                    <a href="#">Рукодельницам</a>
                                </li>
                                <li>
                                    <a href="#">Начинающим мастерам</a>
                                </li>
                                <li class="selected">
                                    <a href="#">Продвинутым мастерам</a>
                                </li>
                            </ul>

                            <div class="price-title">Стоимость обучения</div>

                            <ul>
                                <li>
                                    <label for="filter-price0">
                                        <input id="filter-price0" type="radio" name="price" value="0"/> Платно
                                    </label>
                                </li>
                                <li>
                                    <label for="filter-price1">
                                        <input id="filter-price1" type="radio" name="price" value="1"/> Безплатно
                                    </label>
                                </li>
                                <li>
                                    <label for="filter-price2">
                                        <input id="filter-price2" type="radio" name="price" value="2"/> Любой
                                    </label>
                                </li>
                            </ul>

                            <div class="online-block">
                                Онлайн
                                <span class="online">&nbsp;</span>
                            </div>

                        </div>

                        <div class="grid__col-9">

                            <div class="items">

                                <div class="item-container">

                                    <div class="item">

                                        <div class="grid">

                                            <div class="grid__col-4">
                                                <div class="image">
                                                    <img src="/wp-content/themes/wedding/images/home-img-1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="grid__col-5">
                                                <div class="title">
                                                    Свадебный наряд моей дочери
                                                </div>
                                                <div class="title-sub">
                                                    <div>Видеокурс</div>
                                                    <div><strong>51</strong> урок, <strong>44</strong> часа, <strong>25,5</strong> гб</div>
                                                </div>
                                            </div>
                                            <div class="grid__col-3">
                                                <div class="price-container">
                                                    <span class="price">20 400 ₽</span>
                                                    <span class="price-before">25 600 ₽</span>
                                                    </divclass>
                                                    <div class="date">
                                                        Только до 15 декабря 2020
                                                    </div>
                                                    <div>
                                                        <button class="wd-button-white">Подробнее о курсе</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">

                                        <div class="grid">

                                            <div class="grid__col-4">
                                                <div class="image">
                                                    <img src="/wp-content/themes/wedding/images/home-img-1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="grid__col-5">
                                                <div class="title">
                                                    Свадебный наряд моей дочери
                                                </div>
                                                <div class="title-sub">
                                                    <div>Видеокурс</div>
                                                    <div><strong>51</strong> урок, <strong>44</strong> часа, <strong>25,5</strong> гб</div>
                                                </div>
                                            </div>
                                            <div class="grid__col-3">
                                                <div class="price-container">
                                                    <span class="price">20 400 ₽</span>
                                                    <span class="price-before">25 600 ₽</span>
                                                    </divclass>
                                                    <div class="date">
                                                        Только до 15 декабря 2020
                                                    </div>
                                                    <div>
                                                        <button class="wd-button-white">Подробнее о курсе</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">

                                        <div class="grid">

                                            <div class="grid__col-4">
                                                <div class="image">
                                                    <img src="/wp-content/themes/wedding/images/home-img-1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="grid__col-5">
                                                <div class="title">
                                                    Свадебный наряд моей дочери
                                                </div>
                                                <div class="title-sub">
                                                    <div>Видеокурс</div>
                                                    <div><strong>51</strong> урок, <strong>44</strong> часа, <strong>25,5</strong> гб</div>
                                                </div>
                                            </div>
                                            <div class="grid__col-3">
                                                <div class="price-container">
                                                    <span class="price">20 400 ₽</span>
                                                    <span class="price-before">25 600 ₽</span>
                                                    </divclass>
                                                    <div class="date">
                                                        Только до 15 декабря 2020
                                                    </div>
                                                    <div>
                                                        <button class="wd-button-white">Подробнее о курсе</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">

                                        <div class="grid">

                                            <div class="grid__col-4">
                                                <div class="image">
                                                    <img src="/wp-content/themes/wedding/images/home-img-1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="grid__col-5">
                                                <div class="title">
                                                    Свадебный наряд моей дочери
                                                </div>
                                                <div class="title-sub">
                                                    <div>Видеокурс</div>
                                                    <div><strong>51</strong> урок, <strong>44</strong> часа, <strong>25,5</strong> гб</div>
                                                </div>
                                            </div>
                                            <div class="grid__col-3">
                                                <div class="price-container">
                                                    <span class="price">20 400 ₽</span>
                                                    <span class="price-before">25 600 ₽</span>
                                                    </divclass>
                                                    <div class="date">
                                                        Только до 15 декабря 2020
                                                    </div>
                                                    <div>
                                                        <button class="wd-button-white">Подробнее о курсе</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">

                                        <div class="grid">

                                            <div class="grid__col-4">
                                                <div class="image">
                                                    <img src="/wp-content/themes/wedding/images/home-img-1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="grid__col-5">
                                                <div class="title">
                                                    Свадебный наряд моей дочери
                                                </div>
                                                <div class="title-sub">
                                                    <div>Видеокурс</div>
                                                    <div><strong>51</strong> урок, <strong>44</strong> часа, <strong>25,5</strong> гб</div>
                                                </div>
                                            </div>
                                            <div class="grid__col-3">
                                                <div class="price-container">
                                                    <span class="price">20 400 ₽</span>
                                                    <span class="price-before">25 600 ₽</span>
                                                    </divclass>
                                                    <div class="date">
                                                        Только до 15 декабря 2020
                                                    </div>
                                                    <div>
                                                        <button class="wd-button-white">Подробнее о курсе</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="promo-wrap courses">
                    <div class="description-container">
                        <span class="title">Марафон N 1</span>
                        <span class="subtitle">7.02.2021 - 7.03.2021</span>
                        <img class="h-del" src="<?= get_theme_file_uri('/images/hl-del.svg') ?>" />
                        <div class="description">Принять участие может любой желающий!</div>
                    </div>
                    <div class="right-container">
                        <div id="countdownTimer" class="countdown">
                            <span class="ends-in">До начала марафона осталось</span>
                            <div class="timer">
                                <div class="hours"></div>:<div class="minutes"></div>:<div class="seconds"></div>
                            </div>
                        </div>
                    </div>
                    <button class="wd-button action">Участвовать</button>
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

                <div class="container">

                    <div class="grid">

                        <div class="grid__col-3">
                        </div>

                        <div class="grid__col-9">

                            <div class="items" style="margin-top: 50px;">

                                <div class="item-container">
                                    <div class="item">

                                        <div class="grid">

                                            <div class="grid__col-4">
                                                <div class="image">
                                                    <img src="/wp-content/themes/wedding/images/home-img-1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="grid__col-5">
                                                <div class="title">
                                                    Свадебный наряд моей дочери
                                                </div>
                                                <div class="title-sub">
                                                    <div>Видеокурс</div>
                                                    <div><strong>51</strong> урок, <strong>44</strong> часа, <strong>25,5</strong> гб</div>
                                                </div>
                                            </div>
                                            <div class="grid__col-3">
                                                <div class="price-container">
                                                    <span class="price">20 400 ₽</span>
                                                    <span class="price-before">25 600 ₽</span>
                                                    </divclass>
                                                    <div class="date">
                                                        Только до 15 декабря 2020
                                                    </div>
                                                    <div>
                                                        <button class="wd-button-white">Подробнее о курсе</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">

                                        <div class="grid">

                                            <div class="grid__col-4">
                                                <div class="image">
                                                    <img src="/wp-content/themes/wedding/images/home-img-1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="grid__col-5">
                                                <div class="title">
                                                    Свадебный наряд моей дочери
                                                </div>
                                                <div class="title-sub">
                                                    <div>Видеокурс</div>
                                                    <div><strong>51</strong> урок, <strong>44</strong> часа, <strong>25,5</strong> гб</div>
                                                </div>
                                            </div>
                                            <div class="grid__col-3">
                                                <div class="price-container">
                                                    <span class="price">20 400 ₽</span>
                                                    <span class="price-before">25 600 ₽</span>
                                                    </divclass>
                                                    <div class="date">
                                                        Только до 15 декабря 2020
                                                    </div>
                                                    <div>
                                                        <button class="wd-button-white">Подробнее о курсе</button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
