<?php
/**
 * Курсы courses.html
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Направление - Музыка
 */

include 'templates/price.php';
include 'templates/directions.php';
include 'templates/popular-courses.php';
include 'templates/montessori-work.php';

get_header(); // подключаем header.php ?>
<main>
<style>
    .io-breadcrumbs__wrapper {
        display: none;
    }
</style>

    <section class="io-homedirection__hero">
        <div class="io-homepage__hero-container container-xxl io-container-mw">
            <div class="io-homedirection__hero-inner">
                <div class="io-homedirection__hero-left">
                    <div class="io-heading-1 io-homedirection__hero-title w-100">Уроки<br><span class="io-pink-main">Музыки</span><br>Онлайн</div>
                </div>
                <div class="io-homedirection__hero-img">
                    <img src="/wp-content/uploads/2024/04/Music.webp" alt="">
                </div>
            </div>
            <div class="io-block io-homepage__hero-list no-animation">
                <div class="io-homepage__hero-list-item">
                    <img src="/wp-content/uploads/2024/04/online-study-1.svg">
                    <span>Занятия в прямом эфире</span>
                </div>
                <div class="io-homepage__hero-list-line"></div>
                <div class="io-homepage__hero-list-item">
                    <img src="/wp-content/uploads/2024/04/promotion-1.svg">
                    <span>Учителя мирового уровня</span>
                </div>
                <div class="io-homepage__hero-list-line"></div>
                <div class="io-homepage__hero-list-item">
                    <img src="/wp-content/uploads/2024/04/time-schedule-1.svg">
                    <span>Гибкий график</span>
                </div>
                <div class="io-homepage__hero-list-line"></div>
                <div class="io-homepage__hero-list-item">
                    <img src="/wp-content/uploads/2024/04/group-1-1.svg">
                    <span>От 5 до 99 лет</span>
                </div>
            </div>
        </div>
    </section>

    <section class="io-homecourses io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-heading-2 text-center">Музыкальные курсы</h2>
            <div class="io-chooses" data-chooses-id="chooses">
                <button class="io-choose active" data-choose-id="all">Все направления</button>
                <button class="io-choose" data-choose-id="klav">Фортепиано</button>
                <button class="io-choose" data-choose-id="vocal">Вокал</button>
                <button class="io-choose" data-choose-id="strun">Гитара</button>
                <button class="io-choose" data-choose-id="udar">Ударные</button>
                <button class="io-choose" data-choose-id="skrip">Струнные</button>
                <button class="io-choose" data-choose-id="duhov">Духовые</button>
            </div>
            <div class="io-homecourses__grid" data-chooses="chooses">
                <div class="io-popular__item" data-choose="klav">
                    <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                    <div class="io-popular__item-img">
                        <img src="/wp-content/themes/interschooltemplate/images/pop-2.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Фортепиано</h3>
                        <div class="io-popular__item-data-inner">
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Возраст:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от 5 лет
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-clock.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Продолжительность:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        45 мин
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Цена урока:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от <span class="ioArrayToTextElements81">$11</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="io-popular__item-button">
                        <a href="<?php echo get_permalink(26); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item" data-choose="vocal">
                    <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                    <div class="io-popular__item-img">
                        <img src="/wp-content/themes/interschooltemplate/images/pop-3.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Вокал</h3>
                        <div class="io-popular__item-data-inner">
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Возраст:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от 5 лет
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-clock.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Продолжительность:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        45 мин
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Цена урока:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от <span class="ioArrayToTextElements81">$11</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="io-popular__item-button">
                        <a href="<?php echo get_permalink(28); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item" data-choose="strun">
                    <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                    <div class="io-popular__item-img">
                        <img src="/wp-content/themes/interschooltemplate/images/pop-4.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Классическая гитара</h3>
                        <div class="io-popular__item-data-inner">
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Возраст:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от 6 лет
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-clock.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Продолжительность:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        45 мин
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Цена урока:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от <span class="ioArrayToTextElements81">$11</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="io-popular__item-button">
                        <a href="<?php echo get_permalink(30); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item" data-choose="duhov">
                    <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                    <div class="io-popular__item-img">
                        <img src="/wp-content/themes/interschooltemplate/images/pop-15.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Флейта</h3>
                        <div class="io-popular__item-data-inner">
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Возраст:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от 7 лет
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-clock.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Продолжительность:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        45 мин
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Цена урока:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от <span class="ioArrayToTextElements81">$11</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="io-popular__item-button">
                        <a href="<?php echo get_permalink(44); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item" data-choose="strun">
                    <div class="io-popular__item-img">
                        <img src="/wp-content/uploads/2024/05/e-guitar.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Электрогитара</h3>
                        <div class="io-popular__item-data-inner">
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Возраст:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от 5 лет
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-clock.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Продолжительность:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        45 мин
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Цена урока:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от <span class="ioArrayToTextElements81">$11</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="io-popular__item-button">
                        <a href="<?php echo get_permalink(32); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item" data-choose="strun">
                    <div class="io-popular__item-img">
                        <img src="/wp-content/uploads/2024/05/Ukulele.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Укулеле</h3>
                        <div class="io-popular__item-data-inner">
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Возраст:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от 5 лет
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-clock.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Продолжительность:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        45 мин
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Цена урока:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от <span class="ioArrayToTextElements81">$11</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="io-popular__item-button">
                        <a href="<?php echo get_permalink(36); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item" data-choose="strun">
                    <div class="io-popular__item-img">
                        <img src="/wp-content/uploads/2024/05/Bass-guitar.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Бас-гитара</h3>
                        <div class="io-popular__item-data-inner">
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Возраст:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от 5 лет
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-clock.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Продолжительность:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        45 мин
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Цена урока:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от <span class="ioArrayToTextElements81">$11</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="io-popular__item-button">
                        <a href="<?php echo get_permalink(34); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item" data-choose="udar">
                    <div class="io-popular__item-img">
                        <img src="/wp-content/uploads/2024/05/Drum.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Барабаны</h3>
                        <div class="io-popular__item-data-inner">
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Возраст:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от 5 лет
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-clock.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Продолжительность:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        45 мин
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Цена урока:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от <span class="ioArrayToTextElements81">$11</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="io-popular__item-button">
                        <a href="<?php echo get_permalink(38); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item" data-choose="skrip">
                    <div class="io-popular__item-img">
                        <img src="/wp-content/uploads/2024/05/Violin.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Скрипка</h3>
                        <div class="io-popular__item-data-inner">
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Возраст:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от 5 лет
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-clock.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Продолжительность:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        45 мин
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Цена урока:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от <span class="ioArrayToTextElements81">$11</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="io-popular__item-button">
                        <a href="<?php echo get_permalink(40); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item" data-choose="duhov">
                    <div class="io-popular__item-img">
                        <img src="/wp-content/uploads/2024/05/Saxophone.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Саксофон</h3>
                        <div class="io-popular__item-data-inner">
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Возраст:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от 5 лет
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-clock.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Продолжительность:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        45 мин
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Цена урока:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от <span class="ioArrayToTextElements81">$11</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="io-popular__item-button">
                        <a href="<?php echo get_permalink(42); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item" data-choose="duhov">
                    <div class="io-popular__item-img">
                        <img src="/wp-content/uploads/2024/05/Block-flute.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Блокфлейта</h3>
                        <div class="io-popular__item-data-inner">
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Возраст:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от 5 лет
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-clock.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Продолжительность:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        45 мин
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Цена урока:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от <span class="ioArrayToTextElements81">$11</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="io-popular__item-button">
                        <a href="<?php echo get_permalink(46); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item" data-choose="skrip">
                    <div class="io-popular__item-img">
                        <img src="/wp-content/uploads/2024/05/Cello.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Виолончель</h3>
                        <div class="io-popular__item-data-inner">
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Возраст:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от 5 лет
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-clock.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Продолжительность:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        45 мин
                                    </div>
                                </div>
                            </div>
                            <div class="io-icon-with-desc">
                                <div class="io-icon-with-desc__img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                </div>
                                <div class="io-icon-with-desc__info">
                                    <div class="io-icon-with-desc__info-name">
                                        Цена урока:
                                    </div>
                                    <div class="io-icon-with-desc__info-text">
                                        от <span class="ioArrayToTextElements81">$11</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="io-popular__item-button">
                        <a href="<?php echo get_permalink(48); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
            </div>
        </div>
    </section>

    <section class="io-homereview io-section">
        <div class="container-xxl io-container-mw">
            <div class="io-homereview__slider-wrapper">
                <button class="io-reviews__prev io-pagination__prev" aria-label="Предыдущая страница"></button>
                <div id="slider-reviews" class="keen-slider io-homereview__slider">
                    <div class="keen-slider__slide io-homereview__slide">
                        <div class="io-feedback__item io-block">
                            <div class="io-feedback__item-fio">
                                <img src="/wp-content/themes/interschooltemplate/images/teach-maximova.webp" alt="">
                            </div>
                            <div class="w-100">
                                <div class="io-feedback__item-heading mb-2">
                                    <h3 class="io-feedback__item-name">Ulysses Nightingale</h3>
                                </div>
                                <div class="io-feedback__item-text-wrapper io-text-wrapper mb-2">
                                    <p>Fantastic piano lessons! My kid looks forward to them every week.</p>
                                </div>
                                <div class="io-rating__stars io-feedback__item-stars justify-content-start">
                                    <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                    <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                    <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                    <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                    <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
                <button class="io-reviews__next io-pagination__next" aria-label="следующая страница"></button>
            </div>
        </div>
    </section>

    <section class="io-hometeachers io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-heading-2 text-center mb-3">Педагоги музыки</h2>
            <p class="text-center mb-5 io-subheading">Наши учителя имеют высшее образование, большой опыт и терпение</p>
            <div class="io-hometeachers__slider-wrapper">
                <button class="io-teachers__prev io-pagination__prev" aria-label="Предыдущая страница"></button>
                <div id="slider-teachers" class="keen-slider io-hometeachers__slider">
                    <div class="keen-slider__slide io-hometeachers__item">
                        <img src="/wp-content/themes/interschooltemplate/images/teach-stupak.webp" alt="">
                        <div class="io-block">
                            <h3 class="name">Елена Ступак</h3>
                            <p class="skill">Педагог живописи, лепки и скульптуры, компьютерной графики</p>
                        </div>
                    </div>
                    <div class="keen-slider__slide io-hometeachers__item">
                        <img src="https://artstudio.kiev.ua/wp-content/themes/interschooltemplate/images/teach-soroka.webp" alt="">
                        <div class="io-block">
                            <h3 class="name">Владимир Сорока</h3>
                            <p class="skill">Педагог гитары</p>
                        </div>
                    </div>
                    <div class="keen-slider__slide io-hometeachers__item">
                        <img src="https://artstudio.kiev.ua/wp-content/themes/interschooltemplate/images/teach-dimitrova.webp" alt="">
                        <div class="io-block">
                            <h3 class="name">Татьяна Димитрова</h3>
                            <p class="skill">Педагог вокала</p>
                        </div>
                    </div>
                    <div class="keen-slider__slide io-hometeachers__item">
                        <img src="https://artstudio.kiev.ua/wp-content/themes/interschooltemplate/images/teach-mamchich.webp" alt="">
                        <div class="io-block">
                            <h3 class="name">Снежана Мамчич</h3>
                            <p class="skill">Педагог фортепиано</p>
                        </div>
                    </div>
                    <div class="keen-slider__slide io-hometeachers__item">
                        <img src="/wp-content/themes/interschooltemplate/images/teach-stupak.webp" alt="">
                        <div class="io-block">
                            <h3 class="name">Елена Ступак</h3>
                            <p class="skill">Педагог живописи, лепки и скульптуры, компьютерной графики</p>
                        </div>
                    </div>
                    <div class="keen-slider__slide io-hometeachers__item">
                        <img src="https://artstudio.kiev.ua/wp-content/themes/interschooltemplate/images/teach-soroka.webp" alt="">
                        <div class="io-block">
                            <h3 class="name">Владимир Сорока</h3>
                            <p class="skill">Педагог гитары</p>
                        </div>
                    </div>
                    <div class="keen-slider__slide io-hometeachers__item">
                        <img src="https://artstudio.kiev.ua/wp-content/themes/interschooltemplate/images/teach-dimitrova.webp" alt="">
                        <div class="io-block">
                            <h3 class="name">Татьяна Димитрова</h3>
                            <p class="skill">Педагог вокала</p>
                        </div>
                    </div>
                    <div class="keen-slider__slide io-hometeachers__item">
                        <img src="https://artstudio.kiev.ua/wp-content/themes/interschooltemplate/images/teach-mamchich.webp" alt="">
                        <div class="io-block">
                            <h3 class="name">Снежана Мамчич</h3>
                            <p class="skill">Педагог фортепиано</p>
                        </div>
                    </div>
                </div>
                <button class="io-teachers__next io-pagination__next" aria-label="следующая страница"></button>
            </div>
        </div>
    </section>

    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
    <section class="io-homecourse io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-heading-2 io-homecourse__heading">Направления обучения</h2>
            <p class="io-subheading">Ваши дети могут заниматься по нескольким учебным направлениям</p>
            <div class="io-homecourse__grid">
                <div class="io-homecourse__list">
                    <a href="<?php echo get_permalink(52); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/palette-1.svg" alt="">
                        </div>
                        <h3 class="io-homecourse__element-title">Изобразительное<br>искусство</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(24); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/musical-note-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">Музыкальное<br>искусство</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(76); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/translator-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">Иностранные языки</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(90); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/stationery-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">Средняя школа</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(64); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/dancing-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">Хореография и танцы</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(74); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/talking-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">Логопед</h3>                        
                    </a>
                </div>
                <div class="io-homecourse__video">
                    <video autoplay="" muted="" loop="">
                        <source src="/wp-content/uploads/2024/05/3d1e-4df5-b4b7-226bfe8847e6.mp4" type="video/mp4">
                        Ваш браузер не поддерживает тег video.
                    </video>
                </div>
            </div>
        </div>
    </section>
    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
    <section class="io-homecourse io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-heading-2 io-homecourse__heading">Educational Programs</h2>
            <p class="io-subheading">Your children can engage in multiple educational tracks.</p>
            <div class="io-homecourse__grid">
                <div class="io-homecourse__list">
                    <a href="<?php echo get_permalink(52); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/palette-1.svg" alt="">
                        </div>
                        <h3 class="io-homecourse__element-title">Art</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(24); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/musical-note-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">Music</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(76); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/translator-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">Languages</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(90); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/stationery-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">School Subjects</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(64); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/dancing-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">Dance</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(74); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/talking-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">Speech Therapy</h3>                        
                    </a>
                </div>
                <div class="io-homecourse__video">
                    <video autoplay="" muted="" loop="">
                        <source src="/wp-content/uploads/2024/05/3d1e-4df5-b4b7-226bfe8847e6.mp4" type="video/mp4">
                        Ваш браузер не поддерживает тег video.
                    </video>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <?php io_montessori_work(); ?>

    <section class="io-homecta io-section">
        <div class="container-xxl io-container-mw">
            <div class="io-homecta__block io-block io-block--purple">
                <div class="io-homecta__img">
                    <img alt="" src="/wp-content/uploads/2024/04/Piano_discount.png">
                </div>
                <div class="io-homecta__data">
                    <h1 class="io-heading-2">Скидка 20% на курс фортепиано онлайн</h1>
                    <p>Запишись на пробный урок до 1 мая 2024 года!</p>
                    <div>
                        <a href="<?php echo get_permalink(26); ?>#ceny-i-oplata" class="io-button__large ioCookieSingleCourseDemo">Записаться на пробный урок</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
    <section class="io-about-read io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-about-read__heading io-heading-2">Добро пожаловать в нашу музыкальную онлайн школу!</h2>
            <div class="io-sidebar io-legal__sidebar">
                <div class="io-sidebar__sticky">
                    <div class="io-sidebar__inner io-sidebar__inner--unset">
                        <div class="io-legal__sidebar-block io-block-shadow">
                            <h2 class="io-sidebar__title io-heading-2">Содержание</h2>
                            <ul class="io-sidebar__list">
                                <li><a class="io-click-open" href="#io-about-text-h3-1">Наши преподаватели</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-2">Как проходят онлайн уроки музыки</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-3">Успехи наших студентов</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-4">Программа обучения</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="io-sidebar__content">
                    <div class="io-text-wrapper io-about-read__text-wrapper">
                        <p>Мы рады предложить вам уникальные онлайн уроки по игре на фортепиано, классической гитаре, бас-гитаре, электрогитаре, укулеле, барабанах, скрипке, виолончели, флейте, саксофоне и вокалу. В нашей школе вы найдете опытных преподавателей, увлекательные методы обучения и гибкий график занятий, который позволит вам учиться музыке в удобное для вас время. Уроки в нашей музыкальной онлайн-школе могут проходить на русском, украинском или английском языке.</p>
                        <h3 id="io-about-text-h3-1">Наши преподаватели</h3>
                        <p>Наши преподаватели – это высококвалифицированные музыканты с многолетним опытом работы и страстью к обучению. Они не только мастера своего дела, но и вдохновляющие наставники, которые помогут вам раскрыть ваш музыкальный потенциал.</p>
                        <div class="io-show-button io-show-button--desktop">
                            <a onclick="showHiddenBlock(this)" class="io-link io-link--purple ">
                                Читать далее
                            </a>
                        </div>
                        <div class="io-hidden io-hidden--desktop"> 
                            <p>Фортепиано: наши преподаватели по фортепиано – профессиональные пианисты и педагоги, имеющие опыт выступлений на международных конкурсах и фестивалях.</p>
                            <p>Классическая гитара: наши гитаристы обучают как основам игры, так и сложным техническим приемам, используя современную методику, адаптированную для онлайн-формата.</p>
                            <p>Бас-гитара и электрогитара: наши преподаватели – опытные музыканты, играющие в известных группах и имеющие богатый опыт студийной работы.</p>
                            <p>Укулеле: наши учителя помогут вам освоить этот инструмент с нуля или улучшить уже имеющиеся навыки, делая процесс обучения увлекательным и непринужденным.</p>
                            <p>Барабаны: наши барабанщики обучают студентов разнообразным стилям и техникам игры на ударных, включая рок, джаз и поп-музыку.</p>
                            <p>Скрипка и виолончель: наши преподаватели по скрипке и виолончели – профессиональные музыканты, выступающие в оркестрах и ансамблях, которые помогут вам достичь высокого уровня мастерства.</p>
                            <p>Флейта и саксофон: наши преподаватели – виртуозы своего дела, обучающие игре на духовых инструментах с учетом всех нюансов и тонкостей.</p>
                            <p>Вокал: наши вокальные педагоги – это опытные певцы и преподаватели, которые помогут вам раскрыть голосовой потенциал и научат петь в разных стилях.</p>
                            <h3 id="io-about-text-h3-2">Как проходят онлайн уроки музыки</h3>
                            <p>Каждый урок в нашей школе тщательно спланирован и адаптирован под онлайн-формат, чтобы обеспечить максимально эффективное обучение.</p>
                            <p><strong>Фортепиано</strong></p>
                            <p>Уроки фортепиано проходят в формате видеоконференций, где преподаватель и ученик могут видеть и слышать друг друга. Преподаватель демонстрирует технику игры на клавишах, объясняет теорию музыки и помогает разбирать произведения. Ученик получает домашние задания и учитель регулярно контролирует прогресс, что позволяет следить за успехами и корректировать программу обучения.</p>
                            <p><strong>Классическая гитара</strong></p>
                            <p>Занятия по классической гитаре включают в себя изучение аккордов, нотной грамоты, техники пальцев и музыкальных произведений. Преподаватель подробно объясняет и показывает каждое упражнение, а ученик выполняет его в реальном времени, получая мгновенную обратную связь.</p>
                            <p><strong>Бас-гитара и электрогитара</strong></p>
                            <p>Уроки по бас-гитаре и электрогитаре направлены на развитие техники игры, изучение стилей и импровизации. Преподаватели используют интерактивные методы обучения, такие как игра вместе с музыкальными треками и анализ популярных композиций. Особое внимание уделяется постановке рук и звукоизвлечению.</p>
                            <p><strong>Укулеле</strong></p>
                            <p>Уроки укулеле проходят в формате веселых и динамичных занятий, где преподаватель учит аккордам, ритмике и популярным мелодиям. Этот инструмент особенно популярен среди начинающих музыкантов, и наши преподаватели делают обучение легким и увлекательным.</p>
                            <p><strong>Барабаны</strong></p>
                            <p>Занятия по барабанам включают в себя изучение ритмов, техники игры и координации движений. Преподаватели используют видеоуроки и специальные программы для тренировки, которые помогают ученикам развивать чувство ритма и скорость игры.</p>
                            <p><strong>Скрипка и виолончель</strong></p>
                            <p>Уроки скрипки и виолончели проводятся с учетом уровня подготовки ученика. Преподаватель объясняет основы игры, постановку рук, технику ведения смычка и работу с нотами. Важно уделять внимание каждой детали, чтобы добиться чистого и красивого звука.</p>
                            <p><strong>Флейта и саксофон</strong></p>
                            <p>Уроки по духовым инструментам включают в себя изучение дыхательной техники, звукоизвлечения и музыкальных произведений. Преподаватель помогает ученику развивать дыхательную систему, правильную постановку рук и губ, а также обучает игре на инструменте в разных жанрах.</p>
                            <p><strong>Вокал</strong></p>
                            <p>Занятия вокалом направлены на развитие голосового аппарата, техники дыхания, артикуляции и интонирования. Преподаватели работают над расширением диапазона голоса, постановкой голоса и сценическим образом. Ученик получает рекомендации по репертуару и технике исполнения.</p>
                            <h3 id="io-about-text-h3-3">Успехи наших студентов</h3>
                            <p>В нашей музыкальной онлайн школе успехи студентов говорят сами за себя. Мы гордимся достижениями наших учеников и стремимся создавать все условия для их роста и развития. Вот несколько примеров того, как наши студенты добиваются успехов благодаря занятиям в нашей школе.</p>
                            <p><strong>Вдохновляющие Истории</strong></p>
                            <p>Анна, 14 лет - когда Анна начала заниматься на фортепиано, она едва могла сыграть простую мелодию. Спустя два года регулярных онлайн-уроков с нашими опытными преподавателями, Анна стала победительницей международного конкурса юных пианистов. Сегодня она выступает на сценах известных концертных залов и готовится к поступлению в музыкальную академию.</p>
                            <p>Михаил, 35 лет - Михаил всегда мечтал научиться играть на электрогитаре, но не знал, с чего начать. В нашей школе он нашел не только вдохновение, но и поддержку. Благодаря индивидуальному подходу и четкой программе обучения, уже через год Михаил смог создать свою рок-группу, с которой теперь регулярно выступает на местных фестивалях.</p>
                            <p>София, 10 лет - София пришла к нам на занятия по скрипке без каких-либо навыков. Сегодня она играет в школьном оркестре и планирует продолжить музыкальное образование в колледже. Ее успехи стали возможны благодаря методике обучения, которая сочетает в себе традиционные и современные подходы.</p>
                            <p><strong>Участие в конкурсах и концертах</strong></p>
                            <p>Мы поощряем наших учеников участвовать в различных музыкальных конкурсах, концертах и фестивалях. Это не только отличная возможность продемонстрировать свои навыки, но и важный опыт выступления перед публикой. Многие наши студенты становились лауреатами и призерами региональных, национальных и международных конкурсов:</p>
                            <p>Международный конкурс юных исполнителей - наши ученики заняли призовые места в категориях фортепиано и классической гитары.</p>
                            <p>Национальный конкурс вокалистов - студенты нашей школы завоевали первое место в нескольких возрастных категориях.</p>
                            <p>Фестиваль джазовой музыки - наши бас-гитаристы и саксофонисты получили высокие оценки от жюри и публики.</p>
                            <p>Мы гордимся тем, что многие из наших студентов получили признание и награды за свои достижения:</p>
                            <p>Стипендии - несколько наших учеников получили стипендии для обучения в престижных музыкальных учреждениях за рубежом.</p>
                            <p>Номинации и Победы в Телевизионных Шоу - некоторые из наших студентов успешно участвовали в телевизионных музыкальных шоу и конкурсах, таких как "Голос Дети" и "Круче всех".</p>
                            <p><strong>Профессиональный Рост и Карьера</strong></p>
                            <p>Для тех, кто стремится к профессиональной карьере в музыке, наши преподаватели предоставляют ценные советы и рекомендации. Многие наши выпускники продолжают свою карьеру как профессиональные музыканты, преподаватели, музыкальные продюсеры и композиторы. Вот несколько примеров:</p>
                            <p>Екатерина, 28 лет - после окончания нашей школы по классу вокала, Екатерина поступила в консерваторию и сейчас успешно выступает на оперных сценах Европы.</p>
                            <p>Дмитрий, 22 года - Выпускник нашей школы по классу барабанов, Дмитрий стал востребованным сессионным музыкантом и сотрудничает с известными артистами в студиях и на концертах.</p>
                            <p><strong>Вдохновение и Мотивация</strong></p>
                            <p>Наши преподаватели не только обучают, но и вдохновляют. Каждый успех наших студентов – это результат совместных усилий, поддержки и неустанного труда. Мы верим, что музыка может изменить жизнь каждого человека, и гордимся тем, что можем способствовать этому.</p>
                            <p><strong>Онлайн концерты и конкурсы</strong></p>
                            <p>Мы регулярно проводим онлайн концерты и конкурсы, где наши студенты могут продемонстрировать свои навыки и получить обратную связь от профессионалов. Это отличная возможность для учеников испытать свои силы и почувствовать себя настоящими музыкантами.</p>
                            <p><strong>Концерты</strong></p>
                            <p>Наши онлайн концерты собирают учеников и их родителей со всего мира. Каждый студент может выступить перед широкой аудиторией, что помогает преодолевать страх сцены и развивать уверенность в себе.</p>
                            <p><strong>Конкурсы</strong></p>
                            <p>Участие в конкурсах стимулирует учеников к постоянному развитию. Мы организуем внутренние конкурсы и поощряем участие в международных соревнованиях. Победители получают дипломы и ценные призы, что является дополнительной мотивацией для дальнейшего роста.</p>
                            <h3 id="io-about-text-h3-4">Программа обучения</h3>
                            <p>Наша программа обучения разработана таким образом, чтобы максимально эффективно развивать музыкальные способности каждого ученика. Мы используем комплексный подход, который включает в себя:</p>
                            <p><strong>Основы музыки</strong></p>
                            <p>Изучение нотной грамоты, теории музыки и ритмики. Это фундаментальные знания, необходимые для любого музыканта.</p>
                            <p><strong>Техника игры</strong></p>
                            <p>Практические упражнения для развития техники игры на инструменте. Преподаватели показывают и объясняют правильную постановку рук, использование различных приемов и техник.</p>
                            <p><strong>Исполнение произведений</strong></p>
                            <p>Разучивание музыкальных произведений разных жанров и стилей. Ученик учится интерпретировать музыку, выражать эмоции через игру и пение.</p>
                            <p><strong>Импровизация</strong></p>
                            <p>Развитие навыков импровизации, что особенно важно для гитаристов, пианистов и вокалистов. Студент учится создавать музыку на ходу, экспериментировать с мелодиями и аккордами.</p>
                            <p><strong>Регулярная практика</strong></p>
                            <p>Домашние задания и регулярные отчеты о проделанной работе. Преподаватели следят за прогрессом ученика и корректируют программу обучения в зависимости от его успехов.</p>
                            <p>Наши учебные программы разрабатываются ведущими специалистами в области музыкального образования и регулярно обновляются для соответствия современным требованиям и технологиям. Каждый курс включает комплексный подход к обучению: от основ инструмента и теории музыки до современных технических приемов исполнения и композиции. Мы также предлагаем модули по подготовке к выступлениям и музыкальным конкурсам, что особенно важно для тех учеников, которые стремятся к профессиональной карьере музыкантов.</p>
                            <p>Особое внимание уделяется индивидуальным занятиям, что позволяет учитывать личные предпочтения и скорость обучения каждого ученика. Наши программы поддерживаются цифровыми ресурсами, включая доступ к онлайн-библиотекам нот и обучающим видео, что делает процесс обучения еще более гибким и доступным.</p>
                            <p>Наша школа создает все условия для того, чтобы каждый студент мог не просто научиться играть на музыкальном инструменте, но и глубоко понять музыку, раскрыть свой творческий потенциал и достичь значимых успехов!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
    <section class="io-about-read io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-about-read__heading io-heading-2">Welcome to our online music school!</h2>
            <div class="io-sidebar io-legal__sidebar">
                <div class="io-sidebar__sticky">
                    <div class="io-sidebar__inner io-sidebar__inner--unset">
                        <div class="io-legal__sidebar-block io-block-shadow">
                            <h2 class="io-sidebar__title io-heading-2">Content</h2>
                            <ul class="io-sidebar__list">
                                <li><a class="io-click-open" href="#io-about-text-h3-1">Our Teachers</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-2">How Online Music Lessons Work</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-3">Student Achievements</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-4">Training Program</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="io-sidebar__content">
                    <div class="io-text-wrapper io-about-read__text-wrapper">
                        <p>We are pleased to offer unique online lessons in piano, classical guitar, bass guitar, electric guitar, ukulele, drums, violin, cello, flute, saxophone, and vocals. In our school, you will find experienced teachers, engaging teaching methods, and a flexible schedule that allows you to learn music at your convenience. Lessons in our online music school can be conducted in Russian, Ukrainian, or English.</p>
                        <h3 id="io-about-text-h3-1">Our Teachers</h3>
                        <p>Our teachers are highly qualified musicians with many years of experience and a passion for teaching. They are not only masters of their craft but also inspiring mentors who will help you unlock your musical potential.</p>
                        <div class="io-show-button io-show-button--desktop">
                            <a onclick="showHiddenBlock(this)" class="io-link io-link--purple ">
                                Read More
                            </a>
                        </div>
                        <div class="io-hidden io-hidden--desktop"> 
                            <p>Piano: Our piano teachers are professional pianists and educators with experience performing at international competitions and festivals.</p>
                            <p>Classical Guitar: Our guitarists teach both the basics and advanced techniques, using modern methodologies adapted for online learning.</p>
                            <p>Bass Guitar and Electric Guitar: Our instructors are experienced musicians who play in well-known bands and have extensive studio experience.</p>
                            <p>Ukulele: Our teachers will help you master this instrument from scratch or improve your existing skills, making the learning process fun and easy.</p>
                            <p>Drums: Our drummers teach students various styles and techniques, including rock, jazz, and pop music.</p>
                            <p>Violin and Cello: Our violin and cello teachers are professional musicians performing in orchestras and ensembles who will help you achieve a high level of mastery.</p>
                            <p>Flute and Saxophone: Our teachers are virtuosos in their field, teaching wind instruments with all the nuances and subtleties.</p>
                            <p>Vocals: Our vocal coaches are experienced singers and teachers who will help you unlock your vocal potential and learn to sing in different styles.</p>
                            <h3 id="io-about-text-h3-2">How Online Music Lessons Work</h3>
                            <p>Every lesson in our school is carefully planned and adapted for the online format to ensure the most effective learning experience.</p>
                            <p><strong>Piano</strong></p>
                            <p>Piano lessons are conducted via video conferences, where the teacher and student can see and hear each other. The teacher demonstrates keyboard techniques, explains music theory, and helps dissect pieces. The student receives homework assignments, and the teacher regularly monitors progress, allowing for adjustments to the learning program.</p>
                            <p><strong>Classical Guitar</strong></p>
                            <p>Classical guitar lessons include studying chords, music notation, finger techniques, and musical pieces. The teacher thoroughly explains and demonstrates each exercise, and the student performs it in real-time, receiving instant feedback.</p>
                            <p><strong>Bass Guitar and Electric Guitar</strong></p>
                            <p>Bass and electric guitar lessons focus on developing playing techniques, studying styles, and improvisation. Teachers use interactive teaching methods, such as playing along with tracks and analyzing popular compositions. Special attention is given to hand positioning and sound production.</p>
                            <p><strong>Ukulele</strong></p>
                            <p>Ukulele lessons are fun and dynamic, where the teacher teaches chords, rhythm, and popular melodies. This instrument is especially popular among beginners, and our teachers make learning easy and enjoyable.</p>
                            <p><strong>Drums</strong></p>
                            <p>Drum lessons include studying rhythms, playing techniques, and coordination. Teachers use video lessons and special training programs that help students develop a sense of rhythm and playing speed.</p>
                            <p><strong>Violin and Cello</strong></p>
                            <p>Violin and cello lessons are tailored to the student's level. The teacher explains the basics of playing, hand positioning, bowing techniques, and working with music notation. Attention to detail is crucial to achieving a clear and beautiful sound.</p>
                            <p><strong>Flute and Saxophone</strong></p>
                            <p>Wind instrument lessons include studying breathing techniques, sound production, and musical pieces. The teacher helps the student develop their breathing system, proper hand and lip positioning, and teaches playing in different genres.</p>
                            <p><strong>Vocals</strong></p>
                            <p>Vocal lessons focus on developing the vocal apparatus, breathing techniques, articulation, and intonation. Teachers work on expanding vocal range, voice placement, and stage presence. The student receives repertoire and performance technique recommendations.</p>
                            <h3 id="io-about-text-h3-3">Student Achievements</h3>
                            <p>The achievements of our students speak for themselves. We are proud of the accomplishments of our students and strive to create all conditions for their growth and development. Here are some examples of how our students succeed thanks to our school's lessons.</p>
                            <p><strong>Inspiring Stories</strong></p>
                            <p>Anna, 14 years old - When Anna started piano lessons, she could barely play a simple melody. After two years of regular online lessons with our experienced teachers, Anna won first prize in an international young pianists competition. Today, she performs on prestigious concert hall stages and is preparing to enter a music academy.</p>
                            <p>Mikhail, 35 years old - Mikhail always dreamed of learning to play the electric guitar but didn't know where to start. In our school, he found not only inspiration but also support. Thanks to an individual approach and a clear learning program, he formed his rock band within a year and now regularly performs at local festivals.</p>
                            <p>Sofia, 10 years old - Sofia came to us for violin lessons with no prior skills. Today, she plays in her school orchestra and plans to continue her music education in college. Her successes are due to our teaching method, which combines traditional and modern approaches.</p>
                            <p><strong>Participation in Competitions and Concerts</strong></p>
                            <p>We encourage our students to participate in various music competitions, concerts, and festivals. This is not only a great opportunity to showcase their skills but also an important experience of performing in front of an audience. Many of our students have become laureates and prize-winners of regional, national, and international competitions:</p>
                            <p>International Young Performers Competition - Our students won prizes in piano and classical guitar categories.</p>
                            <p>National Vocalists Competition - Our students took first place in several age categories.</p>
                            <p>Jazz Music Festival - Our bass guitarists and saxophonists received high marks from the jury and the audience.</p>
                            <p><strong>Recognition and Awards</strong></p>
                            <p>Many of our students have received prestigious scholarships and awards for their achievements. This recognition confirms the high level of our teaching and motivates us to continue developing.</p>
                            <p>Scholarships - Several of our students have received scholarships to study at prestigious music institutions abroad.</p>
                            <p>Nominations and Victories in TV Shows - Some of our students have successfully participated in TV music shows and competitions such as "The Voice Kids" and "Better Than Everyone."</p>
                            <p><strong>Professional Growth and Career</strong></p>
                            <p>For those aspiring to a professional career in music, our teachers provide valuable advice and recommendations. Many of our graduates continue their careers as professional musicians, teachers, music producers, and composers. Here are a few examples:</p>
                            <p>Ekaterina, 28 years old - After graduating from our vocal class, Ekaterina entered the conservatory and now successfully performs on opera stages in Europe.</p>
                            <p>Dmitry, 22 years old - A graduate of our drum class, Dmitry became a sought-after session musician and collaborates with well-known artists in studios and concerts.</p>
                            <p><strong>Inspiration and Motivation</strong></p>
                            <p>Our teachers not only teach but also inspire. Every success of our students is the result of joint efforts, support, and relentless work. We believe that music can change lives, and we are proud to contribute to this.</p>
                            <p><strong>Online Concerts and Competitions</strong></p>
                            <p>We regularly hold online concerts and competitions where our students can showcase their skills and receive feedback from professionals. This is an excellent opportunity for students to test their abilities and feel like real musicians.</p>
                            <p><strong>Concerts</strong></p>
                            <p>Our online concerts gather students and their parents from all over the world. Each student can perform in front of a large audience, helping to overcome stage fright and develop self-confidence.</p>
                            <p><strong>Competitions</strong></p>
                            <p>Participation in competitions encourages students to continuously develop. We organize internal competitions and encourage participation in international contests. Winners receive diplomas and valuable prizes, providing additional motivation for further growth.</p>
                            <h3 id="io-about-text-h3-4">Training Program</h3>
                            <p>Our training program is designed to develop the musical abilities of each student as effectively as possible. We use a comprehensive approach that includes:</p>
                            <p><strong>Basics of Music</strong></p>
                            <p>Studying music notation, music theory, and rhythm. These are fundamental skills necessary for any musician.</p>
                            <p><strong>Playing Techniques</strong></p>
                            <p>Practical exercises to develop playing techniques on the instrument. Teachers show and explain the correct hand positioning and use of various techniques.</p>
                            <p><strong>Performing Pieces</strong></p>
                            <p>Learning musical pieces of different genres and styles. The student learns to interpret music and express emotions through playing and singing.</p>
                            <p><strong>Improvisation</strong></p>
                            <p>Developing improvisation skills, which are especially important for guitarists, pianists, and vocalists. The student learns to create music on the spot, experimenting with melodies and chords.</p>
                            <p><strong>Regular Practice</strong></p>
                            <p>Homework assignments and regular progress reports. Teachers monitor the student's progress and adjust the learning program according to their achievements.</p>
                            <p>Our curricula are developed by leading specialists in music education and are regularly updated to meet modern requirements and technologies. Each course includes a comprehensive approach to learning: from the basics of the instrument and music theory to modern performance techniques and composition. We also offer modules for preparing for performances and music competitions, which is especially important for students aiming for a professional music career.</p>
                            <p>Particular attention is paid to individual lessons, which allow for consideration of personal preferences and learning pace for each student. Our programs are supported by digital resources, including access to online libraries of sheet music and instructional videos, making the learning process even more flexible and accessible.</p>
                            <p>Our school creates all the conditions for each student to not only learn to play a musical instrument but also deeply understand music, unleash their creative potential, and achieve significant success!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <section class="io-section io-course-blog">
        <div class="container-xxl io-container-mw">
            <div class="io-flex-between" style="margin-bottom: var(--io-size-300);">
                <h2 class="io-heading-2">Полезные статьи</h2>
                <div class="io-pagination">
                    <div class="io-ourse-blog__arrows io-pagination__arrows">
                        <button class="io-course-blog__prev io-pagination__prev" aria-label="Предыдущая страница"></button>
                        <button class="io-course-blog__next io-pagination__next" aria-label="следующая страница"></button>
                    </div>
                </div>
            </div>
            <div id="slider-blog" class="keen-slider pb-3">
                <div class="keen-slider__slide" style="overflow: unset;">
                    <a target="_blank" href="<?php echo get_permalink(123); ?>" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-01.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-01.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Piano-01.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Правильная постановка рук: основа успешной игры на фортепиано</h3>
                            <p class="io-blog__content-text">Игра на фортепиано – это искусство, требующее не только музыкального слуха и творческого подхода. Одним из ключевых элементов успешной игры на фортепиано...</p>
                        </div>
                    </a>
                </div>
                <div class="keen-slider__slide" style="overflow: unset;">
                    <a target="_blank" href="<?php echo get_permalink(123); ?>" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-02.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-02.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Piano-02.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">История фортепиано: от клавесина до современных цифровых фортепиано</h3>
                            <p class="io-blog__content-text">Фортепиано – это уникальный музыкальный инструмент, история которого уходит вглубь веков. От старинных клавесинов до современных цифровых моделей, фортепи...</p>
                        </div>
                    </a>
                </div>
                <div class="keen-slider__slide" style="overflow: unset;">
                    <a target="_blank" href="<?php echo get_permalink(123); ?>" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-03.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-03.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Piano-03.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Как выбрать подходящий репертуар для начинающего пианиста</h3>
                            <p class="io-blog__content-text">Выбор репертуара для начинающего пианиста – это важный шаг на пути к музыкальному мастерству. Правильно подобранные произведения помогут не только развить...</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); // подключаем footer.php ?>


<!-- Show hidden block -->
<script>
    function showHiddenBlock(button) {
        var parentBlock = button.parentElement;
        var hiddenBlock = parentBlock.nextElementSibling;

        hiddenBlock.style.height = 'auto';
        button.style.display = 'none';
    }
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var ioHiddenElement = document.querySelector('.io-hidden');
        var ioShowButton = document.querySelector('.io-show-button');
        var ioLinks = document.querySelectorAll('.io-click-open');

        ioLinks.forEach(function (link) {
            link.addEventListener('click', function (event) {
                event.preventDefault();

                // Переключаем классы для анимации
                ioHiddenElement.style.height = 'auto';
                ioShowButton.style.display = 'none';

                // Задержка перед переходом по ссылке
                setTimeout(function () {
                    window.location.href = link.href;
                }, 100);
            });
        });
    });
</script>

<script>
    // Функция для удаления куки
    function deleteCookie(cname) {
        document.cookie = cname + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
    }

    // Вызов функции для удаления куки с именем 'currentTab'
    deleteCookie('currentTab');
</script>
<!-- Полезные статьи Слайдер -->
<script>
    var sliderBlog = new KeenSlider(
        "#slider-blog", {
            loop: true,
            slides: {
                perView: 1,
                spacing: 20
            },
            breakpoints: {
                "(min-width: 576px)": {
                    slides: {
                        perView: 1,
                        spacing: 20,
                    },
                },
                "(min-width: 992px)": {
                    slides: {
                        perView: 2,
                        spacing: 20,
                    },
                },
                "(min-width: 1200px)": {
                    slides: {
                        perView: 3,
                        spacing: 20,
                    },
                },
            },
        },
        [
            (sliderBlog) => {
                let timeout
                let mouseOver = false

                function clearNextTimeout() {
                    clearTimeout(timeout)
                }

                function nextTimeout() {
                    clearTimeout(timeout)
                    if (mouseOver) return
                    timeout = setTimeout(() => {
                        sliderBlog.next()
                    }, 6000)
                }
                sliderBlog.on("created", () => {
                    sliderBlog.container.addEventListener("mouseover", () => {
                        mouseOver = true
                        clearNextTimeout()
                    })
                    sliderBlog.container.addEventListener("mouseout", () => {
                        mouseOver = false
                        nextTimeout()
                    })
                    nextTimeout()
                })
                sliderBlog.on("dragStarted", clearNextTimeout)
                sliderBlog.on("animationEnded", nextTimeout)
                sliderBlog.on("updated", nextTimeout)
            },
        ]
    )

    // Добавляем обработчики событий для кнопок "Назад" и "Вперед"
    const prevButtonBlog = document.querySelector(".io-course-blog__prev");
    const nextButtonBlog = document.querySelector(".io-course-blog__next");

    prevButtonBlog.addEventListener("click", () => {
        sliderBlog.prev();
    });

    nextButtonBlog.addEventListener("click", () => {
        sliderBlog.next();
    });
</script>

<?php io_price(); ?>