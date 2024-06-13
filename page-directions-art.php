<?php
/**
 * Курсы courses.html
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Направление - ИЗО
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
                    <div class="io-heading-1 io-homedirection__hero-title w-100 d-none d-sm-block">Уроки<br><span class="io-pink-main">Изобразительного<br>Искусства</span><br>Онлайн</div>
                    <div class="io-heading-1 io-homedirection__hero-title w-100 d-sm-none">Уроки<br><span class="io-pink-main">ИЗО</span><br>Онлайн</div>
                </div>
                <div class="io-homedirection__hero-img">
                    <img src="/wp-content/uploads/2024/04/Painting.webp" alt="">
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
            <h2 class="io-heading-2 text-center" style="margin-bottom: var(--io-size-300);">ИЗО курсы</h2>
            <div class="io-homecourses__grid">
                <div class="io-popular__item">
                    <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                    <div class="io-popular__item-img">
                        <img src="/wp-content/themes/interschooltemplate/images/pop-1.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Живопись</h3>
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
                        <a href="<?php echo get_permalink(54); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item">
                    <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                    <div class="io-popular__item-img">
                        <img src="/wp-content/themes/interschooltemplate/images/pop-8.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Лепка и скульптура</h3>
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
                        <a href="<?php echo get_permalink(56); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item">
                    <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                    <div class="io-popular__item-img">
                        <img src="/wp-content/themes/interschooltemplate/images/pop-6.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Компьютерная графика</h3>
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
                                        от 8 лет
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
                        <a href="<?php echo get_permalink(62); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item">
                    <div class="io-popular__item-img">
                        <img src="/wp-content/uploads/2024/05/Sewing.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Кройка и шитьё</h3>
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
                                        от 8 лет
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
                        <a href="<?php echo get_permalink(60); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item">
                    <div class="io-popular__item-img">
                        <img src="/wp-content/uploads/2024/05/Animation.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Мультипликация</h3>
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
                                        от 8 лет
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
                        <a href="<?php echo get_permalink(58); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
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
            <h2 class="io-heading-2 text-center mb-3">Педагоги ИЗО</h2>
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
            <h2 class="io-about-read__heading io-heading-2">Добро пожаловать в онлайн-школу изобразительного искусства!</h2>
            <div class="io-sidebar io-legal__sidebar">
                <div class="io-sidebar__sticky">
                    <div class="io-sidebar__inner io-sidebar__inner--unset">
                        <div class="io-legal__sidebar-block io-block-shadow">
                            <h2 class="io-sidebar__title io-heading-2">Содержание</h2>
                            <ul class="io-sidebar__list">
                                <li><a class="io-click-open" href="#io-about-text-h3-1">Программа обучения</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-2">Педагоги ИЗО</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-3">Студенты и их достижения</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-4">Как проходят онлайн-уроки</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-5">Заключение</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="io-sidebar__content">
                    <div class="io-text-wrapper io-about-read__text-wrapper">
                        <p>Современные технологии открыли новые горизонты в образовании, в том числе и в сфере изобразительного искусства. Сегодня уроки живописи, лепки, компьютерной графики, мультипликации, кройки и шитья доступны онлайн для студентов со всего мира. В этой статье мы рассмотрим, как проходят такие уроки в нашей онлайн-школе, кто их проводит и какие достижения у наших учеников.</p>
                        <h3 id="io-about-text-h3-1">Программа обучения</h3>
                        <p>Наша онлайн-школа изобразительного искусства предлагает обширные и разнообразные программы обучения, которые охватывают различные аспекты творчества и искусства. Вот основные направления:</p>
                        <p><strong>Живопись</strong></p>
                        <p>Уроки живописи включают изучение различных техник и стилей, таких как акварель, масло, акрил и гуашь. Студенты учатся основам композиции, цветовой теории и развивают навыки работы с кистью и палитрой. В программу также входят мастер-классы по созданию натюрмортов, пейзажей и портретов.</p>
                        <div class="io-show-button io-show-button--desktop">
                            <a onclick="showHiddenBlock(this)" class="io-link io-link--purple ">
                                Читать далее
                            </a>
                        </div>
                        <div class="io-hidden io-hidden--desktop"> 
                            <p><strong>Лепка</strong></p>
                            <p>На занятиях по лепке студенты работают с различными материалами, такими как глина, пластилин и полимерная глина. Они осваивают основы моделирования, учатся создавать скульптуры с правильными пропорциями и разнообразными текстурами. Лепка способствует развитию творческого мышления и улучшает мелкую моторику.</p>
                            <p><strong>Компьютерная графика</strong></p>
                            <p>Курсы компьютерной графики охватывают использование современных программ для создания цифровых иллюстраций, анимации и 3D-моделирования. Ученики изучают основы работы в графических редакторах. Программа включает в себя создание цифровых картин, рекламных материалов и персонажей для игр и мультфильмов.</p>
                            <p><strong>Мультипликация</strong></p>
                            <p>Уроки мультипликации знакомят учеников с основами анимации с помощью современных цифровых технологий. Студенты создают собственные короткометражные мультфильмы, изучая процесс создания анимации от идеи до финального монтажа.</p>
                            <p><strong>Кройка и шитьё</strong></p>
                            <p>Курсы кройки и шитья включают в себя основы работы с тканью, создание выкроек и пошив одежды. Ученики учатся различным техникам шитья, разработке дизайна одежды и работе с различными видами ткани. Программа предусматривает создание как базовых, так и сложных предметов гардероба.</p>
                            <h3 id="io-about-text-h3-2">Педагоги ИЗО</h3>
                            <p>В нашей онлайн-школе изобразительного искусства работают выдающиеся преподаватели, каждый из которых обладает уникальным опытом и профессиональными достижениями. Их страсть к искусству и преподаванию вдохновляет учеников и помогает им достигать высоких результатов. Давайте познакомимся с некоторыми из них поближе:</p>
                            <p>Педагоги по живописи — это не только опытные художники, но и активные участники международного художественного сообщества. Например, Виктория Григорьева, преподаватель живописи, проводит мастер-классы в Европе, а её работы украшают коллекции частных галерей в Нью-Йорке и Лондоне. Елена Ступак, специалист по масляной живописи, является автором нескольких работ по технике живописи, а также постоянным участником биеннале современного искусства.</p>
                            <p>Преподаватели лепки — это признанные мастера, чьи работы выставляются в известных музеях и галереях. Один из преподавателей, Анастасия Олейникова, создаёт монументальные скульптуры, которые можно увидеть в театрах столицы. Ее ученики часто участвуют в выставках и побеждают на конкурсах, благодаря уникальной методике преподавания, основанной на глубоком понимании материала и формы.</p>
                            <p>Педагоги по компьютерной графике и анимации — это профессионалы, работающие в ведущих студиях мира. Елена Ступак, ведущий аниматор и иллюстратор, Екатерина Романюк, специалист по 3D-моделированию, участвовала в создании спецэффектов и делится своими знаниями и опытом со студентами, помогая им овладеть самыми современными технологиями.</p>
                            <p>Преподаватели по кройке и шитью — это настоящие гуру моды и дизайна. Наталья Дрогоман, дизайнер одежды. Её ученики не только учатся шить, но и разрабатывают свои собственные коллекции, которые часто становятся победителями в конкурсах молодых дизайнеров. Диана Коваль, специалист по костюмному дизайну, ее опыт помогает студентам создавать не только модную, но и функциональную одежду.</p>
                            <p>Преподаватели мультипликации — это люди, влюблённые в анимацию и творчество. Елена Ступак, аниматор с огромным стажем. Она активно участвует в международных анимационных фестивалях и проводит мастер-классы по всему миру. Её методика преподавания основывается на сочетании классических и современных техник, что позволяет ученикам развивать уникальный стиль и творческое мышление.</p>
                            <p>Эти талантливые и преданные своему делу педагоги делают уроки изобразительного искусства не только полезными, но и вдохновляющими. Они помогают студентам раскрыть свой потенциал и достигать новых высот в мире искусства.</p>

                            <h3 id="io-about-text-h3-3">Студенты и их достижения</h3>
                            <p>Наши студенты – это талантливые и увлеченные люди со всего мира, объединенные стремлением к самовыражению через искусство. Благодаря разнообразию национальностей и культур, мы создаем уникальное сообщество, где каждый ученик вносит свой вклад в творческую атмосферу школы.</p>
                            <p><strong>Индивидуальные успехи</strong></p>
                            <p>Многие наши студенты уже добились значительных успехов. Одни из них публикуют свои работы в международных журналах и участвуют в выставках, другие выигрывают конкурсы и гранты на дальнейшее обучение. Например, одна из наших студенток, Анна из Украины, победила в международном конкурсе иллюстраций, а её работы были представлены на выставке в Париже. Дмитрий из США получил грант на обучение в престижной академии искусств в Нью-Йорке после завершения курса по компьютерной графике в нашей школе.</p>
                            <p><strong>Групповые проекты</strong></p>
                            <p>Кроме индивидуальных достижений, студенты активно участвуют в групповых проектах. Совместные работы по созданию мультфильмов, иллюстрированных книг и цифровых арт-галерей помогают развивать навыки командной работы и учат эффективно взаимодействовать с другими художниками. Один из таких проектов, анимационный фильм "Сказки народов мира", был создан международной группой студентов и получил положительные отзывы на нескольких фестивалях.</p>
                            <p><strong>Отзывы студентов</strong></p>
                            <p>Многие студенты отмечают, что обучение в нашей школе стало для них важным этапом в профессиональном и личностном росте. Они делятся своими успехами и впечатлениями, подчеркивая, что занятия помогают им не только развивать навыки, но и находить новые источники вдохновения. "Я никогда не думала, что смогу создать что-то настолько впечатляющее," – делится Мария из Испании, студентка курса живописи. "Каждый урок – это новое открытие и возможность научиться чему-то удивительному."</p>
                            <p><strong>Сообщество и поддержка</strong></p>
                            <p>Важной частью нашей школы является сообщество студентов, которое оказывает огромную поддержку друг другу. Взаимные советы, обсуждение работ и критика способствуют улучшению навыков и развитию профессиональных связей. У нас регулярно проводятся онлайн-выставки студенческих работ, где каждый может продемонстрировать свои достижения и получить обратную связь не только от сокурсников, но и от преподавателей и приглашенных экспертов.</p>
                            <p><strong>Долгосрочные успехи</strong></p>
                            <p>Некоторые наши выпускники открывают собственные студии и школы, передавая полученные знания и опыт новым поколениям художников. Другие находят работу в крупных компаниях и издательствах, занимаясь профессиональной деятельностью в области изобразительного искусства, анимации и дизайна. Например, наш выпускник Алексей из США сейчас работает ведущим дизайнером в известной игровой студии и активно применяет навыки, полученные в нашей школе.</p>

                            <h3 id="io-about-text-h3-4">Как проходят онлайн-уроки</h3>
                            <p>Уроки в онлайн-школе изобразительного искусства проходят в интерактивном формате. Ученики имеют возможность учиться на русском, английском и украинском языках, что делает обучение доступным для людей из разных стран.</p>
                            <p><strong>Живые вебинары</strong></p>
                            <p>Уроки проводятся в формате живых вебинаров, где преподаватель объясняет материал, демонстрирует техники и отвечает на вопросы студентов. Записи вебинаров доступны для повторного просмотра, что позволяет ученикам учиться в удобное для них время.</p>
                            <p><strong>Индивидуальные консультации</strong></p>
                            <p>Ученики могут получать индивидуальные консультации от преподавателей, которые помогают разбирать сложные темы и исправлять ошибки. Это особенно важно для тех, кто хочет получить персональные рекомендации и улучшить свои навыки.</p>
                            <p><strong>Интерактивные задания</strong></p>
                            <p>Курсы включают интерактивные задания и проекты, которые студенты выполняют самостоятельно. Работы проверяются преподавателями, которые дают подробные комментарии и советы по улучшению.</p>
                            <p><strong>Сообщество учеников</strong></p>
                            <p>Онлайн-школа создает сообщества учеников, где можно обмениваться опытом, задавать вопросы и получать поддержку. Это помогает создать атмосферу взаимопомощи и мотивации, что особенно важно для творческого обучения.</p>
                            <p><strong>Гибкость расписания</strong></p>
                            <p>Онлайн-уроки позволяют ученикам выбирать удобное для них время занятий. Это особенно полезно для тех, кто совмещает обучение с работой или другими обязанностями.</p>
                            
                            <h3 id="io-about-text-h3-5">Заключение</h3>
                            <p>Наша онлайн-школа изобразительного искусства предлагает уникальные возможности для творческого развития. Мы стремимся создать максимально удобные и эффективные условия для наших учеников, независимо от их возраста и уровня подготовки. Вот несколько ключевых преимуществ нашей школы:</p>
                            <p>1. Индивидуальный подход: мы понимаем, что каждый ученик уникален, поэтому наши педагоги разрабатывают индивидуальные учебные планы, учитывающие потребности и интересы каждого студента.</p>
                            <p>2. Высококвалифицированные педагоги: наши преподаватели — это не только опытные специалисты, но и настоящие энтузиасты своего дела. Они постоянно совершенствуют свои методики, чтобы сделать обучение интересным и увлекательным.</p>
                            <p>3. Широкий выбор курсов: в нашей школе представлены различные направления изобразительного искусства: живопись, лепка, компьютерная графика, мультипликация, кройка и шитье. Это позволяет каждому ученику найти что-то по душе и развивать свои таланты в разных областях.</p>
                            <p>4. Гибкость обучения: онлайн-формат позволяет учиться в любое удобное время и из любой точки мира. Наши уроки доступны 24/7, что особенно удобно для занятых людей и тех, кто живет в разных часовых поясах.</p>
                            <p>5. Современные технологии: мы активно используем современные образовательные технологии, чтобы сделать процесс обучения максимально интерактивным и увлекательным. Виртуальные мастер-классы, вебинары, интерактивные задания и видеоматериалы помогают лучше усваивать материал и сразу применять знания на практике.</p>
                            <p>6. Сообщество единомышленников: наша школа — это не только место для обучения, но и площадка для общения и обмена опытом. Участие в форумах, группах и совместных проектах помогает ученикам находить новых друзей, делиться идеями и получать поддержку.</p>
                            <p>7. Доступная стоимость: мы предлагаем конкурентоспособные цены на все наши курсы, а также регулярно проводим акции и предоставляем скидки. Это делает качественное образование доступным для большего числа людей.</p>
                            <p>8. Портфолио и сертификаты: по окончании курсов наши ученики получают сертификаты, подтверждающие их навыки и знания. Также мы помогаем создавать портфолио, которое может быть полезным при поступлении в творческие вузы или при поиске работы.</p>
                            <p>9. Постоянное развитие: мы регулярно обновляем и дополняем наши программы, чтобы соответствовать современным тенденциям и требованиям. Наши ученики всегда получают актуальные знания и навыки, которые можно применять на практике.</p>
                            <p>10. Поддержка и обратная связь: мы ценим мнение наших учеников и всегда готовы помочь в решении любых вопросов. Обратная связь и поддержка со стороны педагогов и администрации школы помогают быстро преодолевать трудности и достигать поставленных целей.</p>
                            <p>Присоединяйтесь к нашей онлайн-школе изобразительного искусства и откройте для себя мир творчества без границ. Независимо от того, хотите ли вы стать профессиональным художником или просто ищете способ самовыражения, мы поможем вам реализовать ваши мечты.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
    <section class="io-about-read io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-about-read__heading io-heading-2">Welcome to Our Online School of Visual Arts!</h2>
            <div class="io-sidebar io-legal__sidebar">
                <div class="io-sidebar__sticky">
                    <div class="io-sidebar__inner io-sidebar__inner--unset">
                        <div class="io-legal__sidebar-block io-block-shadow">
                            <h2 class="io-sidebar__title io-heading-2">Content</h2>
                            <ul class="io-sidebar__list">
                                <li><a class="io-click-open" href="#io-about-text-h3-1">Curriculum</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-2">Art Instructors</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-3">Students and Their Achievements</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-4">How Online Lessons Work</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-5">Conclusion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="io-sidebar__content">
                    <div class="io-text-wrapper io-about-read__text-wrapper">
                        <p>Modern technology has opened new horizons in education, including in the field of visual arts. Today, lessons in painting, sculpting, computer graphics, animation, and sewing are available online for students worldwide. In this article, we will explore how such lessons are conducted in our online school, who teaches them, and the achievements of our students.</p>
                        <h3 id="io-about-text-h3-1">Curriculum</h3>
                        <p>Our online school of visual arts offers extensive and diverse programs that cover various aspects of creativity and art. Here are the main directions:</p>
                        <p><strong>Painting</strong></p>
                        <p>Painting lessons include studying various techniques and styles such as watercolor, oil, acrylic, and gouache. Students learn the basics of composition, color theory, and develop skills in working with brushes and palettes. The program also includes master classes on creating still lifes, landscapes, and portraits.</p>
                        <div class="io-show-button io-show-button--desktop">
                            <a onclick="showHiddenBlock(this)" class="io-link io-link--purple ">
                                Read more
                            </a>
                        </div>
                        <div class="io-hidden io-hidden--desktop"> 
                            <p><strong>Sculpting</strong></p>
                            <p>In sculpting classes, students work with various materials such as clay, plasticine, and polymer clay. They learn the basics of modeling, how to create sculptures with proper proportions and diverse textures. Sculpting enhances creative thinking and improves fine motor skills.</p>
                            <p><strong>Computer Graphics</strong></p>
                            <p>Courses in computer graphics cover the use of modern programs for creating digital illustrations, animations, and 3D modeling. Students learn the basics of working with graphic editors. The program includes creating digital paintings, advertising materials, and characters for games and cartoons.</p>
                            <p><strong>Animation</strong></p>
                            <p>Animation lessons introduce students to the basics of animation using modern digital technologies. Students create their own short animated films, learning the animation process from concept to final editing.</p>
                            <p><strong>Sewing</strong></p>
                            <p>Sewing courses include the basics of working with fabric, creating patterns, and sewing clothes. Students learn various sewing techniques, clothing design, and working with different types of fabric. The program includes creating both basic and complex wardrobe items.</p>
                            <h3 id="io-about-text-h3-2">Art Instructors</h3>
                            <p>Our online school of visual arts boasts outstanding instructors, each with unique experience and professional achievements. Their passion for art and teaching inspires students and helps them achieve high results. Let's get to know some of them better:</p>
                            <p>Painting Instructors: These are experienced artists and active members of the international art community. For example, Victoria Grigorieva conducts master classes in Europe, and her works adorn private gallery collections in New York and London. Elena Stupak, a specialist in oil painting, is the author of several works on painting techniques and a regular participant in contemporary art biennales.</p>
                            <p>Sculpting Instructors: These are recognized masters whose works are exhibited in well-known museums and galleries. Anastasia Oleynikova creates monumental sculptures featured in capital city theaters. Her students often participate in exhibitions and win competitions thanks to her unique teaching methodology based on a deep understanding of material and form.</p>
                            <p>Computer Graphics and Animation Instructors: These professionals work in leading studios worldwide. Elena Stupak is a leading animator and illustrator, while Ekaterina Romanyuk, a 3D modeling specialist, participated in creating special effects and shares her knowledge and experience with students, helping them master the most modern technologies.</p>
                            <p>Sewing and Tailoring Instructors: These are true fashion and design gurus. Natalia Drogoman, a clothing designer, helps her students not only learn to sew but also develop their own collections, which often win young designer contests. Diana Koval, a costume design specialist, helps students create both fashionable and functional clothing.</p>
                            <p>Animation Instructors: These are people passionate about animation and creativity. Elena Stupak, an experienced animator, actively participates in international animation festivals and conducts master classes worldwide. Her teaching methodology combines classical and modern techniques, allowing students to develop a unique style and creative thinking.</p>
                            <p>These talented and dedicated instructors make art lessons not only educational but also inspiring. They help students unlock their potential and reach new heights in the world of art.</p>
                            <h3 id="io-about-text-h3-3">Students and Their Achievements</h3>
                            <p>Our students are talented and passionate individuals from all over the world, united by a desire for self-expression through art. Thanks to the diversity of nationalities and cultures, we create a unique community where each student contributes to the school's creative atmosphere.</p>
                            <p><strong>Individual Successes</strong></p>
                            <p>Many of our students have already achieved significant success. Some of them publish their works in international magazines and participate in exhibitions, while others win competitions and grants for further education. For example, one of our students, Anna from Ukraine, won an international illustration contest, and her works were exhibited in Paris. Dmitry from the USA received a grant to study at a prestigious art academy in New York after completing a computer graphics course at our school.</p>
                            <p><strong>Group Projects</strong></p>
                            <p>In addition to individual achievements, students actively participate in group projects. Collaborative works on creating animated films, illustrated books, and digital art galleries help develop teamwork skills and teach effective interaction with other artists. One such project, the animated film "Tales of the World," was created by an international group of students and received positive reviews at several festivals.</p>
                            <p><strong>Student Feedback</strong></p>
                            <p>Many students note that studying at our school has been a significant step in their professional and personal growth. They share their successes and impressions, emphasizing that the lessons help them not only develop skills but also find new sources of inspiration. "I never thought I could create something so impressive," shares Maria from Spain, a painting course student. "Every lesson is a new discovery and an opportunity to learn something amazing."</p>
                            <p><strong>Community and Support</strong></p>
                            <p>A crucial part of our school is the student community, which provides significant support to each other. Mutual advice, discussion of works, and constructive criticism contribute to skill improvement and professional connections. We regularly hold online exhibitions of student works where everyone can showcase their achievements and receive feedback not only from classmates but also from teachers and invited experts.</p>
                            <p><strong>Long-term Successes</strong></p>
                            <p>Some of our graduates open their own studios and schools, passing on the knowledge and experience to new generations of artists. Others find work in major companies and publishing houses, pursuing professional activities in visual arts, animation, and design. For example, our graduate Alexey from the USA now works as a lead designer at a renowned game studio and actively applies the skills acquired in our school.</p>
                            <h3 id="io-about-text-h3-4">How Online Lessons Work</h3>
                            <p>Lessons at the online school of visual arts are conducted interactively. Students can learn in Russian, English, and Ukrainian, making education accessible to people from different countries.</p>
                            <p><strong>Live Webinars</strong></p>
                            <p>Lessons are conducted in the format of live webinars, where the instructor explains the material, demonstrates techniques, and answers students' questions. Webinar recordings are available for re-watching, allowing students to learn at their own pace.</p>
                            <p><strong>Individual Consultations</strong></p>
                            <p>Students can receive individual consultations from instructors who help clarify complex topics and correct mistakes. This is especially important for those who want personalized recommendations and skill improvement.</p>
                            <p><strong>Interactive Assignments</strong></p>
                            <p>Courses include interactive assignments and projects that students complete independently. The works are checked by instructors who provide detailed comments and suggestions for improvement.</p>
                            <p><strong>Student Community</strong></p>
                            <p>The online school creates student communities where they can share experiences, ask questions, and receive support. This helps create an atmosphere of mutual assistance and motivation, which is especially important for creative learning.</p>
                            <p><strong>Flexible Scheduling</strong></p>
                            <p>Online lessons allow students to choose convenient times for their classes. This is particularly useful for those who combine studies with work or other responsibilities.</p>
                            <h3 id="io-about-text-h3-5">Conclusion</h3>
                            <p>Our online school of visual arts offers unique opportunities for creative development. We strive to create the most convenient and effective conditions for our students, regardless of their age and skill level. Here are some key advantages of our school:</p>
                            <p>Individual Approach: We understand that each student is unique, so our instructors develop individual learning plans that take into account the needs and interests of each student.</p>
                            <p>Highly Qualified Instructors: Our instructors are not only experienced professionals but also true enthusiasts of their craft. They continually refine their methods to make learning interesting and engaging.</p>
                            <p>Wide Range of Courses: Our school offers various visual art directions: painting, sculpting, computer graphics, animation, sewing, and tailoring. This allows each student to find something they love and develop their talents in different areas.</p>
                            <p>Flexible Learning: The online format allows you to study at any convenient time and from any location. Our lessons are available 24/7, which is particularly convenient for busy individuals and those living in different time zones.</p>
                            <p>Modern Technologies: We actively use modern educational technologies to make the learning process as interactive and engaging as possible. Virtual master classes, webinars, interactive assignments, and video materials help better assimilate the material and immediately apply the knowledge in practice.</p>
                            <p>Community of Like-minded People: Our school is not only a place for learning but also a platform for communication and experience exchange. Participation in forums, groups, and joint projects helps students find new friends, share ideas, and receive support.</p>
                            <p>Affordable Costs: We offer competitive prices for all our courses and regularly hold promotions and provide discounts. This makes quality education accessible to more people.</p>
                            <p>Portfolio and Certificates: Upon completing courses, our students receive certificates that confirm their skills and knowledge. We also help create portfolios, which can be useful when applying to creative universities or looking for a job.</p>
                            <p>Continuous Development: We regularly update and supplement our programs to meet modern trends and requirements. Our students always receive up-to-date knowledge and skills that can be applied in practice.</p>
                            <p>Support and Feedback: We value our students' opinions and are always ready to help with any questions. Feedback and support from instructors and school administration help quickly overcome difficulties and achieve set goals.</p>
                            <p>Join our online school of visual arts and discover a world of creativity without borders. Whether you want to become a professional artist or simply seek a way to express yourself, we will help you achieve your dreams.</p>
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