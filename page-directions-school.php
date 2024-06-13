<?php
/**
 * Курсы courses.html
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Направление - Другое
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
                    <div class="io-heading-1 io-homedirection__hero-title w-100">Предметы<br><span class="io-purple-main">Средней<br>Школы</span><br>Онлайн</div>
                </div>
                <div class="io-homedirection__hero-img">
                    <img src="/wp-content/uploads/2024/04/School.webp" alt="">
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
            <h2 class="io-heading-2 text-center" style="margin-bottom: var(--io-size-300);">Школьные курсы</h2>
            <div class="io-homecourses__grid">
                <div class="io-popular__item">
                    <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                    <div class="io-popular__item-img">
                        <img src="/wp-content/themes/interschooltemplate/images/pop-5.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Математика</h3>
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
                        <a href="<?php echo get_permalink(94); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item">
                    <div class="io-popular__item-img">
                        <img src="/wp-content/uploads/2024/05/Algebra.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Алгебра</h3>
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
                        <a href="<?php echo get_permalink(96); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item">
                    <div class="io-popular__item-img">
                        <img src="/wp-content/uploads/2024/05/Geometry.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Геометрия</h3>
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
                        <a href="<?php echo get_permalink(98); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item">
                    <div class="io-popular__item-img">
                        <img src="/wp-content/uploads/2024/05/Chemistry.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Химия</h3>
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
                        <a href="<?php echo get_permalink(100); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item">
                    <div class="io-popular__item-img">
                        <img src="/wp-content/uploads/2024/05/School.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Подготовка к школе</h3>
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
                        <a href="<?php echo get_permalink(92); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
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
            <h2 class="io-heading-2 text-center mb-3">Педагоги предметов средней школы</h2>
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

    <section class="io-about-read io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-about-read__heading io-heading-2">О курсах Монтессори центра</h2>
            <div class="io-sidebar io-legal__sidebar">
                <div class="io-sidebar__sticky">
                    <div class="io-sidebar__inner io-sidebar__inner--unset">
                        <div class="io-legal__sidebar-block io-block-shadow">
                            <h2 class="io-sidebar__title io-heading-2">Содержание</h2>
                            <ul class="io-sidebar__list">
                                <li><a class="io-click-open" href="#io-about-text-h3-1">Живопись</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-2">Фортепиано</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-3">Английский язык</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-4">Вокал</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-5">Классическая гитара</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-6">Русский язык</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-7">Украинский язык</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-8">Испанский язык</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-9">Математика</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-10">Компьютерная графика</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-11">Флейта</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-12">Современные танцы</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-13">Скрипка</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-14">Барабаны</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-15">Саксофон</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-16">Уроки логопеда</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="io-sidebar__content">
                    <div class="io-text-wrapper io-about-read__text-wrapper">
                        <p>В Монтессори центре разработано более 30 учебных программ курсов, по которым идет онлайн обучение для детей и взрослых. Курсы предполагают индивидуальные или групповые дистанционные уроки. Расписание уроков согласовывается с каждым студентом. Наши студенты и педагоги учатся и работают в разных странах мира, поэтому при создании расписания мы учитываем часовые пояса учителя и ученика.</p>
                        <p>Очень важным положительным фактором при обучении в Монтессори центре является то, что наши педагоги обсуждают и впоследствии работают над индивидуальной задачей каждого ученика: не каждый студент мечтает стать выдающимся оперным певцом, но у каждого есть своя цель - научиться исполнять любимое музыкальное произведение, свободно общаться на иностранном языке или сдать сложный экзамен по математике.</p>
                        <p>Наши уроки - это не записи видео-курсов и не скучные лекции преподавателей. Мы предлагаем вам живое, динамичное и эмоциональное общение с учителем, которое увлечет вас в атмосферу живого обучения, даже если вы находитесь за тысячи километров от нашей школы. Современные технологии, высококачественные камеры и гаджеты, а также опыт и профессионализм наших преподавателей, делают обучение эффективным и увлекательным.</p>
                        <p>В Монтессори центре проходят онлайн уроки по таким курсам: живопись, лепка и скульптура, мультипликация, компьютерная графика, иностранные языки (в том числе английский, немецкий, испанский, русский, украинский, японский), фортепиано, вокал, классическая гитара, электрогитара, бас-гитара, укулеле, барабаны, флейта, блокфлейта, скрипка, саксофон, виолончель, раннее музыкальное развитие, курсы кроя и шитья, балет, современные танцы, йога, уроки логопеда и предметы средней школы, в том числе математика, алгебра, геометрия и химия.</p>                       
                        <h3 id="io-about-text-h3-1">Живопись</h3>
                        <p>Курс “Живопись” разработан для детей от 5 лет и старше, а также для взрослых без ограничений в возрасте Уроки рисования - одни из самых популярных курсов среди школьников. Уроки живописи онлайн ведут практикующие молодые художники. Наши педагоги сопровождают каждого ученика, как на индивидуальных, так и на групповых уроках. Групповые онлайн уроки рисования проходят в небольших группах по 4 - 5 человек. Здесь ученики приобретают новых друзей по интересам, наблюдают за творчеством и успехами друг друга, что также помогает эффективно овладевать навыками в изобразительном искусстве.</p>
                        <p>Индивидуальные уроки живописи также позволяют детям и взрослым глубже освоить различные техники: от графики до масляной и акварельной живописи. Такие занятия предоставляют уникальную возможность быстро и эффективно научиться создавать натюрморты, рисовать пейзажи и осваивать сложные навыки рисования портретов.</p>
                        <div class="io-show-button io-show-button--desktop">
                            <a onclick="showHiddenBlock(this)" class="io-link io-link--purple ">
                                Читать далее
                            </a>
                        </div>
                        <div class="io-hidden io-hidden--desktop"> 
                            <h3 id="io-about-text-h3-2">Фортепиано</h3>
                            <p>Курс “Фортепиано” создан нашими методистами с учётом возрастных категорий и уровней сложности музыкальных произведений. Наша методика обучения игры на фортепиано разработана для детей от 5 лет и для взрослых без возрастных ограничений. Уроки фортепиано онлайн являются одними из самых популярных в нашей школе. Уроки игры на фортепиано проходят только индивидуально. Наши учителя - молодые действующие пианисты, которые прекрасно играют на инструменте и могут вдохновить к занятиям любого, даже самого требовательного ученика. На первых уроках фортепиано с нуля вы познакомитесь с основами нотной грамоты, научитесь правильно держать руки, начнете играть простые мелодии. Всё, что вам нужно иметь дома - это, конечно же, инструмент - фортепиано, электропианино или синтезатор, всё подойдет!</p>
                            <h3 id="io-about-text-h3-3">Английский язык</h3>
                            <p>Курс “Английский язык” предназначен для детей от 5 лет, а также для взрослых. Уроки английского языка онлайн проходят индивидуально или в небольших группах по 2 - 3 человека одного возраста и уровня подготовки. На первом уроке педагог обязательно тестирует ученика, чтобы определить его уровень знаний. Если учится ребенок, то педагог вместе с родителями определяет главную и промежуточные цели процесса обучения. Методические и учебные материалы полностью предоставляет школа. Если ученику нужно подготовиться к собеседованию в посольстве, экзамену в школе, выучить язык для получения новой работы в какой-либо стране, то педагог адаптирует программу в соответствии с индивидуальными задачами ученика.</p>
                            <h3 id="io-about-text-h3-4">Вокал</h3>
                            <p>Курс “Вокал” разработан нами для возрастных категорий 5 - 6 лет, 7 - 12 лет, 13 - 16 лет, 17 лет и старше. Онлайн уроки вокала для детей и взрослых проходят индивидуально. Если вы любите петь и мечтаете выучить любимые песни - поспешите записаться на пробный урок вокала онлайн. Уроки пения дают невероятный заряд энергии и хорошего настроения. Ведь не зря говорят, что когда всё хорошо, то “душа поёт”!</p>
                            <h3 id="io-about-text-h3-5">Классическая гитара</h3>
                            <p>Курс “Классическая гитара” предполагает индивидуальное обучение. Уроки игры на гитаре объединяют классическую гитару, электрогитару, бас-гитару и укулеле. Наши педагоги владеют методами преподавания на всех видах гитар. Многие годы одним из самых популярных музыкальных инструментов является классическая гитара, на ней мечтают научиться играть и мальчишки, и девчонки, а также взрослые люди. На уроках гитары онлайн вы в полной мере ощутите удовольствие от того, что уже на первых уроках будете извлекать звуки, заниматься постановкой рук и достигать результатов достаточно быстро!</p>
                            <h3 id="io-about-text-h3-6">Русский язык</h3>
                            <p>Курс “Русский язык” рассчитан на студентов от 4 лет и старше. Уроки русского языка как иностранного пользуются популярностью во всём мире. Если ваш ребенок родился или растет в другой стране и вы хотите, чтобы он не забывал русский язык - то занятия русским языком онлайн, даже один раз в неделю, позволит ребенку оставаться в форме, правильно строить свою речь, обогащать словарный запас, учиться читать и писать. Кроме работы на уроке, учитель дает домашнее задание, что тоже мотивирует ученика заниматься и совершенствовать знания.</p>
                            <h3 id="io-about-text-h3-7">Украинский язык</h3>
                            <p>Курс “Украинский язык” преподают носители, профессиональные филологи с высшим образованием. Педагогический опыт наших учителей украинского языка - от 3 и более лет. Непрерывная практика преподавания детям и взрослым, отслеживание новейших учебников и методический материалов, всё это дает конкурентные преимущества нашим учителям. Уроки украинского языка дистанционно - это не только изучение правил и практика разговорного, но и знакомство с культурой и традициями страны.</p>
                            <h3 id="io-about-text-h3-8">Испанский язык</h3>
                            <p>Курс “Испанский язык” разработан для детей от 5 лет и старше, а также для взрослых без ограничений в возрасте. Уроки испанского по Zoom и Google Meet популярны среди студентов, проживающих в США. Наши уроки испанского онлайн проходят на русском, украинском или английском языке. Индивидуальные уроки испанского проходят для студентов разного уровня подготовки. Учебники и методические материалы подбираются индивидуально в зависимости от цели обучения: акцент на разговорный или грамматику, обучение с нуля или для продвинутых учеников - всё это учитывается при выборе учебного плана для каждого нашего студента.</p>
                            <h3 id="io-about-text-h3-9">Математика</h3>
                            <p>Курс “Математика” предполагает индивидуальные уроки математики онлайн, которые проводит наш профессиональный педагог с высшим педагогическим образованием и опытом работы более 10 лет. Родители школьников часто обращаются к нашему учителю математики с такими просьбами, как подтянуть школьные оценки, улучшить и систематизировать знания предмета, подготовить к выпускному или вступительному экзамену. Всё это успешно достигается на уроках математики по Zoom с нашим педагогом.</p>
                            <h3 id="io-about-text-h3-10">Компьютерная графика</h3>
                            <p>Курс “Компьютерная графика” стал популярным среди молодежи. Цифровая иллюстрация и анимация в настоящее время находятся в тренде, а умение создавать на графическом планшете свои авторские аниме и фантастических героев стало отличным творческим хобби среди школьников. Чтобы записаться на курсы компьютерной графики онлайн нужно иметь планшет (обычный или графический), а также стилус (специальный карандаш для рисования на планшете). </p>
                            <h3 id="io-about-text-h3-11">Флейта</h3>
                            <p>Курс “Флейта” разработан для детей от 9 лет и старше. Для детей от 5 до 9 лет лучше всего подойдет курс “Блокфлейта”. Уроки флейты и блокфлейты проводит наш талантливый учитель, действующий музыкант и артист оркестра. Для детей дошкольного возраста мы рекомендуем уроки на блокфлейте - это небольшая дудочка с отверстиями, все вы ее когда-либо видели и многие даже пробовали на ней играть. Флейта, как инструмент, достаточно большая по размеру и играть на ней могут начинать учиться дети постарше - примерно от 9 - 10 лет, когда и размер рук, и сила в легких позволяют извлекать звуки и исполнять простые мелодии.</p>
                            <h3 id="io-about-text-h3-12">Современные танцы</h3>
                            <p>Курс “Современные танцы” проходит онлайн с нашим замечательным тренером, участницей и победительницей хореографических конкурсов и фестивалей. Уроки хореографии онлайн проходят индивидуально или в небольших группах. Взрослые, как правило, предпочитают индивидуальные уроки балета и современных танцев, а детям интереснее заниматься в группах сверстников. Совместные тренировки - это интересно и увлекательно: вместе делать растяжки, разминки, учить танцевальные связки и потом танцевать - это такое удовольствие!</p>
                            <h3 id="io-about-text-h3-13">Скрипка</h3>
                            <p>Курс “Скрипка” создан в Монтессори центре с учетом возраста ученика и уровней сложности музыкального педагогического материала. Уроки скрипки онлайн проходят только индивидуально. Конечно, играть на скрипке непросто, но момент, когда вы выучите и исполните первое произведение - вы не забудете никогда, настолько он будет ярким! Как правильно держать скрипку и смычок, как извлекать звуки на скрипке - всё это покажет и расскажет учитель уже на ваших первых онлайн уроках скрипки!</p>
                            <h3 id="io-about-text-h3-14">Барабаны</h3>
                            <p>Курс “Барабаны” проходит только индивидуально. Уроки барабанов онлайн очень популярны среди подростков. Для уроков ударных онлайн вам необходимо дома иметь барабанную установку (акустическую или электронную) или просто тренировочный пэд и барабанные палочки. Выучить длительности, понять и разобраться с метроритмом поначалу может показаться сложной задачей, но для подростка потребуется всего месяц или два, чтобы начать правильно отбивать простые ритмы и исполнять под “минус” любимую композицию.</p>
                            <h3 id="io-about-text-h3-15">Саксофон</h3>
                            <p>Курс “Саксофон” разработан для детей от 9 лет и старше. Также на саксофоне никогда не поздно начинать учиться и взрослым, наш курс игры на саксофоне включает в себя музыкальный методический материал с учетом того, что могут учиться и взрослые, и дети. Уроки саксофона онлайн очень эффективны. Вы сможете заниматься саксофоном дома, между уроками выполнять советы, задания и рекомендации нашего педагога и прогресс будет достаточно быстрым: вы сначала научитесь играть отдельные ноты, а потом - и мелодии. Остается только лишь купить или взять в аренду саксофон!</p>
                            <h3 id="io-about-text-h3-16">Уроки логопеда</h3>
                            <p>Курс “Уроки логопеда” могут проходить как дети, так и взрослые. Уроки с логопедом онлайн в Монтессори центре - это отличный способ исправить дефекты речи, поправить произношение, не тратя время на дорогу и имея возможность гибкого индивидуального графика. Наш специалист быстро и профессионально определит цели, обсудит их с родителями и после каждого урока будет давать рекомендации для домашних упражнений. Наш логопед работает индивидуально с каждым по Zoom или Google Meet.</p>
                            <p>Онлайн уроки искусства, иностранных языков, хореографии, математики и многого другого стали сегодня обязательной частью образования большой части детей планеты. Стремительная скорость развития прогресса и бесконечные просторы информации требуют от детей широкого круга знаний и интересов.</p>
                            <p>В Монтессори центре предложен большой выбор курсов, что очень облегчает тайм-менеджмент родителей и детей, позволяя в одном учебном учреждении изучать целый комплекс дисциплин!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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