<?php
/**
 * Новости news.html
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Новости
 */

include 'templates/price.php';
get_header(); // подключаем header.php ?>
<main>
    <!-- <?php the_content(); // контент ?> -->
    <section class="io-news io-section-first">
        <div class="container-xxl io-container-mw">
            <div class="io-news__heading-wrapper io-flex-between">
                <h1 class="io-news__heading io-heading-2">Новости</h1>
            </div>
            <div class="io-sidebar io-news__sidebar">
                <div class="io-sidebar__sticky io-news__sidebar-sticky">
                    <div class="io-sidebar__inner io-sidebar__inner--unset">
                        <div class="io-sidebar__banner">
                            <picture>
                                <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/advo4.webp" width="300" height="180">
                                <img decoding="async" src="/wp-content/themes/interschooltemplate/images/advo4.jpg" alt="" width="300" height="180">
                            </picture>
                            <div>
                                <div>
                                    <span>НЕ ЗАРЫВАЙ</span>
                                </div>
                                <div>
                                    <span>ТАЛАНТ </span>
                                </div>
                                <div>
                                    <span>УЧИСЬ </span>
                                </div>
                                <div>
                                    <span>ОНЛАЙН!</span>
                                </div>
                            </div>
                            <a href="<?php echo get_permalink(22); ?>">Выбрать курс</a>
                        </div>
                        <div class="io-filter__empty"></div>
                    </div>
                </div>
                <div class="io-sidebar__content">
                    <div class="io-news__grid">
                        <a class="io-news__item" href="<?php echo get_permalink(127); ?>">
                            <div class="io-news__item-img">
                                <img src="/wp-content/themes/interschooltemplate/images/1920x845_summer_rus.jpg" alt="">
                            </div>
                            <div class="io-news__item-data">
                                <div class="io-news__item-data-top">
                                    <span class="io-news__item-date">18 октября 2022</span>
                                    <h2 class="io-news__item-heading">Летние скидки! -1000 грн на каждые 16 уроков</h2>
                                </div>
                                <p class="io-news__item-text">Дорогие студенты и родители! Мы преподаем онлайн и рады сообщить Вам, что мы добавили несколько новых предметов.</p>
                            </div>
                        </a>
                        <a class="io-news__item" href="<?php echo get_permalink(127); ?>">
                            <div class="io-news__item-img">
                                <img src="/wp-content/themes/interschooltemplate/images/io-news-1.jpg" alt="">
                            </div>
                            <div class="io-news__item-data">
                                <div class="io-news__item-data-top">
                                    <span class="io-news__item-date">03 июня 2022</span>
                                    <h2 class="io-news__item-heading">Приведи друга и получи скидку 15%</h2>
                                </div>
                                <p class="io-news__item-text">Даем скидку за друзей! Приведи друга, пусть он скажет, что пришел по рекомендации от тебя и получи скидку 15%...</p>
                            </div>
                        </a>
                        <a class="io-news__item" href="<?php echo get_permalink(127); ?>">
                            <div class="io-news__item-img">
                                <img src="/wp-content/themes/interschooltemplate/images/io-news-2.jpg" alt="">
                            </div>
                            <div class="io-news__item-data">
                                <div class="io-news__item-data-top">
                                    <span class="io-news__item-date">02 июня 2022</span>
                                    <h2 class="io-news__item-heading">Мы преподаем онлайн</h2>
                                </div>
                                <p class="io-news__item-text">Дорогие студенты и родители! Мы преподаем онлайн и рады сообщить Вам, что мы добавили несколько новых предметов.</p>
                            </div>
                        </a>
                        <a class="io-news__item" href="<?php echo get_permalink(127); ?>">
                            <div class="io-news__item-img">
                                <img src="/wp-content/themes/interschooltemplate/images/io-news-3.jpg" alt="">
                            </div>
                            <div class="io-news__item-data">
                                <div class="io-news__item-data-top">
                                    <span class="io-news__item-date">01 июня 2022</span>
                                    <h2 class="io-news__item-heading">У нас появился логопед</h2>
                                </div>
                                <p class="io-news__item-text">Дорогие друзья, рады Вам сообщить, что у нас в штате появился логопед. Если Вы хотите исправить дикцию, развивать...</p>
                            </div>
                        </a>
                        <a class="io-news__item" href="<?php echo get_permalink(127); ?>">
                            <div class="io-news__item-img">
                                <img src="/wp-content/themes/interschooltemplate/images/io-news-4.jpg" alt="">
                            </div>
                            <div class="io-news__item-data">
                                <div class="io-news__item-data-top">
                                    <span class="io-news__item-date">23 января 2022</span>
                                    <h2 class="io-news__item-heading">Музыкальный конкурс MONTESSORI STARS ONLINE</h2>
                                </div>
                                <p class="io-news__item-text">Дорогие студенты, мы приглашаем вас к участию в онлайн конкурсе для учащихся музыкальных классов MONTESSORI STARS ONLINE.</p>
                            </div>
                        </a>
                        <a class="io-news__item" href="<?php echo get_permalink(127); ?>">
                            <div class="io-news__item-img">
                                <img src="/wp-content/themes/interschooltemplate/images/io-news-5.jpg" alt="">
                            </div>
                            <div class="io-news__item-data">
                                <div class="io-news__item-data-top">
                                    <span class="io-news__item-date">22 января 2022</span>
                                    <h2 class="io-news__item-heading">Концерт студентов и преподавателей состоится 30 января 2022!</h2>
                                </div>
                                <p class="io-news__item-text">Дорогие студенты и родители! 30 января мы встретимся на яркой сцене 32 Джаз клуб по адресу ул. Воздвиженская, 32.</p>
                            </div>
                        </a>
                        <a class="io-news__item" href="<?php echo get_permalink(127); ?>">
                            <div class="io-news__item-img">
                                <img src="/wp-content/themes/interschooltemplate/images/io-news-6.jpg" alt="">
                            </div>
                            <div class="io-news__item-data">
                                <div class="io-news__item-data-top">
                                    <span class="io-news__item-date">21 января 2022</span>
                                    <h2 class="io-news__item-heading">Бесплатный мастер-класс по крою и шитью!</h2>
                                </div>
                                <p class="io-news__item-text">Дорогие девушки и мамы! Приглашаем Вас на бесплатный мастер-класс по крою и шитью! Ограниченное предложение – всего 30 мест!</p>
                            </div>
                        </a>
                        <a class="io-news__item" href="<?php echo get_permalink(127); ?>">
                            <div class="io-news__item-img">
                                <img src="/wp-content/themes/interschooltemplate/images/io-news-7.png" alt="">
                            </div>
                            <div class="io-news__item-data">
                                <div class="io-news__item-data-top">
                                    <span class="io-news__item-date">09 января 2022</span>
                                    <h2 class="io-news__item-heading">Скидка 500 грн. на первый абонемент для новичков!</h2>
                                </div>
                                <p class="io-news__item-text">Чтобы полностью погрузиться в искусство – сначала нужно попробовать! И мы дарим 500 грн. каждому новому студенты на первый...</p>
                            </div>
                        </a>
                        <a class="io-news__item" href="<?php echo get_permalink(127); ?>">
                            <div class="io-news__item-img">
                                <img src="/wp-content/themes/interschooltemplate/images/io-news-8.png" alt="">
                            </div>
                            <div class="io-news__item-data">
                                <div class="io-news__item-data-top">
                                    <span class="io-news__item-date">01 января 2022</span>
                                    <h2 class="io-news__item-heading">Акция на абонементы продлена до 9 января 2022!</h2>
                                </div>
                                <p class="io-news__item-text">С Новым годом наших студентов и родителей! Желаем вашим семьям счастья, пусть каждый будет здоров!! Успехов в учебе нашим...</p>
                            </div>
                        </a>
                        <a class="io-news__item" href="<?php echo get_permalink(127); ?>">
                            <div class="io-news__item-img">
                                <img src="/wp-content/themes/interschooltemplate/images/io-news-9.jpg" alt="">
                            </div>
                            <div class="io-news__item-data">
                                <div class="io-news__item-data-top">
                                    <span class="io-news__item-date">26 декабря 2021</span>
                                    <h2 class="io-news__item-heading">Акция продлена до 31 декабря!!</h2>
                                </div>
                                <p class="io-news__item-text">Дорогие друзья! По Вашим многочисленным просьбам мы продлеваем Новогодние скидки до 31 декабря!!</p>
                            </div>
                        </a>
                    </div>
                    <div class="io-news__bottom-wrapper io-flex-end">
                        <div class="io-pagination">
                            <div class="io-pagination__count">
                                <span class="io-black-main-op-60">Страница</span>
                                <span>1/10</span>
                            </div>
                            <div class="io-pagination__arrows">
                                <button class="io-pagination__prev disabled"></button>
                                <button class="io-pagination__next"></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); // подключаем footer.php ?>
<script>
    // Функция для удаления куки
    function deleteCookie(cname) {
        document.cookie = cname + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
    }

    // Вызов функции для удаления куки с именем 'currentTab'
    deleteCookie('currentTab');
</script>
<?php io_price(); ?>