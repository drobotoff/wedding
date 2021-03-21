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
                            О нас
                        </li>
                    </ul>
                    <div style="clear: both;"></div>

                </div>

            </div>

            <header class="entry-header">
                <div class="container">
                    <h1 class="entry-title">О нас</h1>
                </div>
            </header>

            <div class="welcome-container container">

                <div class="sign1"></div>

                <div class="grid">

                    <div class="grid__col-4">

                        <div class="image-with-borders">
                            <img src="/wp-content/themes/wedding/images/image1.svg" alt="">
                        </div>

                    </div>

                    <div class="grid__col-8">

                        <div class="title">Добро пожаловать!</div>

                        <div class="desc1">
                            Меня зовут Юлия Трофимова. Я практикующий мастер по пошиву свадебных платьев, а так же основатель проекта «Академия Свадебного Платья», который объединяет творческих людей, желающих достигнуть мастерства и профессионализма в изготовлении свадебных платьев.
                        </div>

                        <div class="desc2">
                            <p>Вы любите и  умеет шить? Хотите реализовать свою мечту и создавать свадебные платья на профессиональном уровне? А быть может Вы желаеете повысить квалификацию и превритить свое любимое дело в прибыльный бизнес?</p>
                            <p>У Вас появится возможность познакомиться с моими авторскими методиками, которые помогли тысячам рукодельницам стать Мастерами и позволили им организоват свой успешный свадебный бизнес!</p>
                        </div>

                        <div class="button-container">

                            <button class="wd-button">Все курсы</button>
                            <button class="wd-button-white">Примеры работ</button>

                        </div>

                    </div>

                </div>

            </div>

    </div>

    </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
