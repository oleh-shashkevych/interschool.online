<?php
/**
 * Курсы courses.html
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Направление - Языки
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
                    <div class="io-heading-1 io-homedirection__hero-title w-100">Уроки<br><span class="io-purple-main">Иностранных<br>Языков</span><br>Онлайн</div>
                </div>
                <div class="io-homedirection__hero-img">
                    <img src="/wp-content/uploads/2024/04/Language-2.webp" alt="">
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
            <h2 class="io-heading-2 text-center" style="margin-bottom: var(--io-size-300);">Языковые курсы</h2>
            <div class="io-homecourses__grid">
                <div class="io-popular__item">
                    <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                    <div class="io-popular__item-img">
                        <img src="/wp-content/themes/interschooltemplate/images/pop-11.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Английский язык</h3>
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
                        <a href="<?php echo get_permalink(78); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item">
                    <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                    <div class="io-popular__item-img">
                        <img src="/wp-content/themes/interschooltemplate/images/pop-14.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Русский язык</h3>
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
                        <a href="<?php echo get_permalink(80); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item">
                    <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                    <div class="io-popular__item-img">
                        <img src="/wp-content/themes/interschooltemplate/images/pop-13.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Украинский язык</h3>
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
                        <a href="<?php echo get_permalink(82); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item">
                    <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                    <div class="io-popular__item-img">
                        <img src="/wp-content/themes/interschooltemplate/images/pop-10.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Испанский язык</h3>
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
                        <a href="<?php echo get_permalink(88); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item">
                    <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                    <div class="io-popular__item-img">
                        <img src="/wp-content/themes/interschooltemplate/images/pop-12.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Немецкий язык</h3>
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
                        <a href="<?php echo get_permalink(86); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
                    </div>                        
                </div>
                <div class="io-popular__item">
                    <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                    <div class="io-popular__item-img">
                        <img src="/wp-content/themes/interschooltemplate/images/pop-9.svg" alt="">
                    </div>
                    <div class="io-popular__item-data">
                        <h3 class="io-popular__item-title">Японский язык</h3>
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
                        <a href="<?php echo get_permalink(84); ?>#ceny-i-oplata" class="io-button ioCookieSingleCourseDemo">Пробный урок</a>
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
            <h2 class="io-heading-2 text-center mb-3">Педагоги иностранных языков</h2>
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
            <h2 class="io-about-read__heading io-heading-2">Добро пожаловать в онлайн-школу иностранных языков!</h2>
            <div class="io-sidebar io-legal__sidebar">
                <div class="io-sidebar__sticky">
                    <div class="io-sidebar__inner io-sidebar__inner--unset">
                        <div class="io-legal__sidebar-block io-block-shadow">
                            <h2 class="io-sidebar__title io-heading-2">Содержание</h2>
                            <ul class="io-sidebar__list">
                                <li><a class="io-click-open" href="#io-about-text-h3-1">Педагоги</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-2">Программа обучения</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-3">Как проходят уроки</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-4">Успехи учеников</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-5">Интересные факты и советы для родителей</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-6">Поддержка и обратная связь</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-7">Заключение</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="io-sidebar__content">
                    <div class="io-text-wrapper io-about-read__text-wrapper">
                        <p>В современном мире, где глобализация и цифровые технологии играют ключевую роль, владение иностранными языками становится не только преимуществом, но и необходимостью. Наша онлайн-школа иностранных языков предоставляет уникальную возможность изучать английский, немецкий, испанский, русский, украинский и японский языки в удобной и эффективной форме. Уроки проводятся на английском, русском и украинском языках, что позволяет каждому ученику выбрать наиболее комфортный для себя вариант обучения. В этой статье мы подробно расскажем о наших педагогах, программах обучения, формате уроков и успехах наших учеников.</p>
                        <h3 id="io-about-text-h3-1">Педагоги</h3>
                        <p>Одним из ключевых факторов успеха в изучении иностранного языка является квалификация и опыт преподавателей. В нашей онлайн-школе работают высококвалифицированные педагоги с многолетним опытом преподавания и международными сертификатами. Наши преподаватели не только владеют глубокими знаниями в своих областях, но и умеют вдохновлять и мотивировать учеников на достижения.</p>
                        <div class="io-show-button io-show-button--desktop">
                            <a onclick="showHiddenBlock(this)" class="io-link io-link--purple ">
                                Читать далее
                            </a>
                        </div>
                        <div class="io-hidden io-hidden--desktop">    
                            <p><strong>Английский язык:</strong></p>
                            <p>Лилия Ярмоленко: преподаватель с более чем 10-летним опытом работы, сертифицированный эксперт, магистр. Лилия использует коммуникативный подход, что позволяет студентам быстро адаптироваться к реальным жизненным ситуациям.</p>
                            <p>Неля Кузьменко: имеет степень магистра в области лингвистики. Неля активно использует интерактивные методы обучения и современные технологии для улучшения языковых навыков учеников.</p>                        
                            <p>Лариса Пасечник: имеет опыт более 10 лет преподавания английского языка как иностранного. Лариса использует интегрированный подход, сочетая традиционные методы с новейшими технологиями. Она активно применяет проектные задания и ролевые игры для улучшения коммуникативных навыков студентов.</p>
                            <p>Лилия Губа: более 10 лет преподавания, включая работу в языковых школах и университетах. Лилия делает акцент на практическое использование языка и активно включает в уроки современные средства обучения, такие как подкасты, видеоматериалы и онлайн-платформы. Ее подход направлен на развитие уверенности в устной и письменной речи.</p>
                            <p><strong>Немецкий язык:</strong></p>
                            <p>Артем Стадник: преподаватель с более чем 15-летним опытом работы в школах Германии и Украины. Артем использует индивидуальный подход к каждому ученику и сочетает традиционные и современные методики преподавания.</p>
                            <p><strong>Испанский язык:</strong></p>
                            <p>Алина Иванченко: преподаватель с 12-летним опытом работы, имеет диплом магистра. Алина разработала уникальную методику обучения, которая включает элементы игры с применением современных технологий.</p>
                            <p>Лилия Ярмоленко: имеет опыт более 9 лет преподавания испанского языка как иностранного. Лилия использует коммуникативный подход, уделяя особое внимание развитию разговорных навыков. Она активно включает в уроки культурные аспекты и аутентичные материалы, такие как испанская литература, музыка и кино. Лилия имеет опыт работы с учениками разных возрастов, от детей до взрослых, и специализируется на подготовке к экзаменам.</p>
                            <p><strong>Русский язык:</strong></p>
                            <p>Ирина Звершховская: преподаватель русского языка как иностранного с более чем 20-летним опытом работы. Ирина использует современные учебные материалы и методы, адаптированные под цели и задачи иностранных студентов.</p>
                            <p>Ольга Фиалковская: Специалист по методике РКИ (Русский как иностранный), имеет диплом магистра. Ольга помогает студентам не только овладеть языком, но и понять культуру и традиции русскоговорящих стран.</p>
                            <p>Лилия Ярмоленко: степень магистра по филологии, опыт более 9 лет преподавания русского языка как иностранного.Лилия применяет интегрированный подход, сочетая традиционные учебные материалы с современными интерактивными платформами. Она активно использует игровые методики и проектные задания для развития всех языковых навыков.</p>
                            <p><strong>Украинский язык:</strong></p>
                            <p>Юлия Маркварт: преподаватель с 10-летним опытом работы, носитель языка. Юлия использует интегрированный подход, сочетая языковую практику с изучением украинской культуры.</p>
                            <p>Лилия Ярмоленко: более 9 лет преподавания украинского языка как иностранного.</p>
                            <p>Лилия использует коммуникативный подход и уделяет особое внимание культурным аспектам. Она активно включает в уроки аутентичные материалы, такие как украинская литература, народные песни и современная музыка. Лилия имеет опыт работы как с детьми, так и со взрослыми. Она также специализируется на подготовке студентов к украинским государственным экзаменам и имеет успешный опыт работы с учениками, которые хотят улучшить свои академические навыки на украинском языке.</p>
                            <p><strong>Японский язык:</strong></p>
                            <p>Лилия Ярмоленко: преподаватель японского языка с более чем 9-летним опытом работы. Лилия активно внедряет мультимедийные технологии в учебный процесс, что делает уроки более увлекательными и эффективными.</p>
                            <h3 id="io-about-text-h3-2">Программа обучения</h3>
                            <p>Программа обучения в нашей онлайн-школе разработана с учётом различных уровней подготовки и возрастных категорий. Мы предлагаем курсы для детей, подростков и взрослых, которые хотят улучшить свои языковые навыки для различных целей: академические успехи, карьерный рост, путешествия или личное развитие.</p>
                            <p><strong>Детские языковые курсы:</strong></p>
                            <p>Для самых маленьких мы разработали специальные программы, которые включают в себя игровые элементы, мультфильмы, песни и сказки. Это помогает детям легко и с интересом погружаться в изучение нового языка. На начальном этапе обучение проходит в формате интерактивных игр, что позволяет детям учиться весело и эффективно.</p>
                            <p><strong>Курсы иностранных языков для подростков:</strong></p>
                            <p>Подростки изучают язык через разнообразные задания, которые помогают развивать все аспекты владения языком: чтение, письмо, аудирование и говорение. Мы включаем в программу актуальные темы, которые интересны подросткам, такие как музыка, кино, технологии и спорт.</p>
                            <p><strong>Курсы иностранных языков для взрослых:</strong></p>
                            <p>Программа для взрослых ориентирована на практическое использование языка в повседневной жизни и профессиональной деятельности. В зависимости от целей студента, курсы могут включать деловой язык, подготовку к международным экзаменам или углубленное изучение грамматики и лексики.</p>
                            <h3 id="io-about-text-h3-3">Как проходят уроки</h3>
                            <p>Онлайн-уроки в нашей школе проходят в удобном формате видеоконференций. Мы используем современные платформы, которые обеспечивают высокое качество связи и позволяют интерактивно взаимодействовать с преподавателем и другими учениками.</p>
                            <p><strong>Формат уроков:</strong></p>
                            <p>Индивидуальные занятия: один-на-один с преподавателем, что позволяет максимально учитывать личные задачи, цели и предпочтения ученика. Преподаватель может сосредоточиться на слабых местах студента и разработать индивидуальный план обучения.</p>
                            <p>Интерактивные методы: на занятиях используются разнообразные методы и материалы: презентации, видео и аудиозаписи, интерактивные упражнения и тесты. Преподаватели активно используют геймификацию и элементы игрового обучения, что делает процесс обучения более увлекательным и мотивирующим.</p>
                            <p>Домашние задания: для закрепления изученного материала ученики получают домашние задания, которые включают в себя чтение, письмо, выполнение грамматических упражнений и просмотр видео. Преподаватели проверяют задания и дают подробную обратную связь, что помогает ученикам совершенствоваться и достигать лучших результатов.</p>
                            <h3 id="io-about-text-h3-4">Успехи учеников</h3>
                            <p>Наши ученики достигают впечатляющих результатов в изучении иностранных языков. Многие из них успешно сдают международные экзамены, такие как TOEFL, IELTS, DELE и другие. Некоторые ученики продолжают своё обучение за рубежом, поступают в престижные университеты и строят успешную карьеру.</p>
                            <p><strong>Примеры успехов:</strong></p>
                            <p>Мария И.: Начала изучать английский язык с нуля и через два года успешно сдала экзамен TOEFL с высоким баллом. Сейчас она учится в университете в США.</p>
                            <p>Александр П.: Успешно завершил курс немецкого языка и получил сертификат Goethe-Zertifikat B2. Благодаря этому он смог устроиться на работу в немецкую компанию и переехать в Берлин.</p>
                            <p>Екатерина С.: Пройдя курс испанского языка, она смогла поехать на стажировку в Испанию и получить незабываемый опыт общения с носителями языка.</p>
                            <h3 id="io-about-text-h3-5">Интересные факты и советы для родителей</h3>
                            <p>Для родителей, которые хотят, чтобы их дети изучали иностранные языки, мы подготовили несколько интересных фактов и полезных советов.</p>
                            <p><strong>Факты:</strong></p>
                            <p>Раннее изучение языков: исследования показывают, что дети, которые начинают изучать иностранные языки в раннем возрасте, легче усваивают новую информацию и лучше развивают когнитивные навыки. Они становятся более креативными и гибкими в мышлении.</p>
                            <p>Многоязычие и успех в учебе: дети, которые свободно владеют несколькими языками, часто демонстрируют лучшие результаты в учебе по сравнению с одноязычными сверстниками. Это связано с улучшенной памятью, концентрацией внимания и способностью к многозадачности.</p>
                            <p>Культурное обогащение: изучение иностранного языка помогает детям лучше понимать и уважать другие культуры. Это развивает их толерантность и открытость к новому, что является важными качествами в современном мире.</p>
                            <p>Здоровье мозга: изучение языков стимулирует мозг и способствует его здоровью. Многоязычные люди имеют меньший риск развития заболеваний, связанных с когнитивными нарушениями, таких как деменция и болезнь Альцгеймера.</p>
                            <p><strong>Советы:</strong></p>
                            <p>Создайте языковую среду: окружите ребенка языковым материалом. Читайте книги на изучаемом языке, смотрите мультфильмы и слушайте песни. Это поможет создать естественную языковую среду и сделает процесс изучения более интересным.</p>
                            <p>Используйте игры и приложения: современные технологии предлагают множество образовательных игр и приложений, которые делают изучение языка увлекательным. Приложения, такие как Duolingo и Lingokids, предлагают игровые задания, которые помогают закрепить новые знания.</p>
                            <p>Установите регулярный график занятий: регулярность — ключ к успешному изучению языка. Установите определенное время для занятий и придерживайтесь этого расписания. Это поможет создать привычку и сделать обучение частью повседневной жизни.</p>
                            <p>Поддерживайте интерес: учитывайте интересы вашего ребенка при выборе материалов для обучения. Если ребенок любит животных, найдите книги и видео на изучаемом языке на эту тему. Это поможет поддерживать интерес и мотивацию к обучению.</p>
                            <p>Поощряйте и мотивируйте: важно поддерживать и поощрять ребенка за его усилия. Хвалите за успехи и отмечайте достижения. Можно использовать систему небольших наград за выполнение заданий и достижения новых уровней в обучении.</p>
                            <p>Общайтесь с носителями языка: организуйте общение с носителями языка. Это может быть участие в языковых обменах, скайп-уроках с носителями или просто общение в онлайн-клубах. Живая практика помогает быстрее освоить язык и почувствовать его реальное использование.</p>
                            <p>Будьте примером: если у вас есть возможность, изучайте язык вместе с ребенком. Совместное обучение не только укрепит ваши отношения, но и покажет ребенку, что изучение языка — это ценный и полезный навык.</p>
                            <h3 id="io-about-text-h3-6">Поддержка и обратная связь</h3>
                            <p>Одним из ключевых преимуществ нашей языковой онлайн-школы является высокий уровень поддержки и обратной связи, который мы предоставляем каждому ученику. Мы понимаем, насколько важна помощь и вовлеченность в процессе изучения языка, и стараемся создать для наших учеников максимально комфортные условия.</p>
                            <p><strong>Индивидуальное сопровождение</strong></p>
                            <p>Каждый ученик нашей школы получает индивидуальное сопровождение на протяжении всего курса обучения. Мы понимаем, что у каждого студента свои цели и потребности, поэтому наши преподаватели и кураторы разрабатывают персонализированные учебные планы, учитывая уровень знаний, предпочтения и цели ученика. Регулярные консультации с преподавателями позволяют корректировать программу обучения, чтобы она максимально соответствовала ожиданиям и потребностям ученика.</p>
                            <p><strong>Гибкий график и доступность</strong></p>
                            <p>Мы предлагаем гибкий график занятий, что особенно важно для людей с плотным расписанием. Уроки можно планировать в удобное время, что позволяет совмещать обучение с работой, учебой или другими обязанностями. Наши преподаватели доступны в разные часы, что делает возможным обучение в любое время суток, независимо от часового пояса.</p>
                            <p><strong>Скидки и программы лояльности</strong></p>
                            <p>Мы ценим наших учеников и предлагаем разнообразные скидки и программы лояльности. Новые ученики могут воспользоваться скидками на пробные уроки, а для постоянных клиентов действуют специальные предложения и бонусы. Мы также предлагаем семейные и групповые скидки, что делает обучение доступным для всех членов семьи или группы друзей.</p>
                            <p><strong>Профессиональное администрирование</strong></p>
                            <p>Наш административный отдел всегда готов помочь с любыми вопросами, касающимися расписания, оплаты или технической стороны обучения. Мы стремимся обеспечить оперативную и качественную поддержку, чтобы наши ученики могли полностью сосредоточиться на изучении языка.</p>
                            <p><strong>Техническая поддержка</strong></p>
                            <p>Мы используем современные платформы для проведения онлайн-уроков, что обеспечивает стабильность и высокое качество связи. Наша техническая поддержка готова помочь в случае любых технических трудностей, чтобы обучение проходило без задержек и неприятных сюрпризов.</p>
                            <p><strong>Обратная связь и мотивация</strong></p>
                            <p>Регулярная обратная связь от преподавателей позволяет ученикам видеть свои достижения и понимать, над чем еще нужно работать. Мы активно поощряем успехи наших учеников, что помогает поддерживать высокий уровень мотивации. Преподаватели не только оценивают успехи, но и дают ценные советы и рекомендации, которые помогают ученикам расти и развиваться.</p>
                            <h3 id="io-about-text-h3-7">Заключение</h3>
                            <p>Онлайн-школа иностранных языков предоставляет уникальные возможности для изучения английского, немецкого, испанского, русского, украинского и японского языков. Квалифицированные преподаватели, продуманная программа обучения, интерактивные методы и гибкий график занятий делают процесс обучения эффективным и увлекательным. Наши ученики достигают впечатляющих успехов и уверенно двигаются к своим целям. Присоединяйтесь к нашей школе и откройте мир возможностей через изучение иностранных языков!</p>
                            <p>Квалифицированные преподаватели: все наши учителя имеют богатый опыт и высокую квалификацию в преподавании иностранных языков. Каждый преподаватель не только владеет языком на высоком уровне, но и имеет глубокие знания методики обучения, что позволяет эффективно и интересно подавать материал.</p>
                            <p>Индивидуальный подход: мы понимаем, что у каждого ученика свои цели и потребности. Наша программа обучения адаптируется под каждого студента, что позволяет достичь максимальных результатов. Учителя учитывают уровень знаний, интересы и цели учеников, создавая персонализированные учебные планы.</p>
                            <p>Гибкость: онлайн-уроки дают возможность заниматься в удобное для вас время и из любого места. Это особенно важно для занятых людей, у которых плотный график или которые проживают в разных часовых поясах.</p>
                            <p>Разнообразие методов обучения: мы используем широкий спектр методов и материалов: интерактивные платформы, видеоматериалы, игровые методики, аутентичные ресурсы (литература, музыка, кино), что делает процесс обучения интересным и увлекательным.</p>
                            <p>Поддержка и мотивация: наши преподаватели не только учат, но и мотивируют своих учеников, поддерживают их на пути к достижению языковых целей, помогают преодолевать трудности и сохранять интерес к изучению.</p>
                            <p>Доступ к разнообразным ресурсам: мы предлагаем нашим ученикам доступ к множеству образовательных материалов, включая электронные книги, аудио и видеоконтент, интерактивные упражнения и многое другое. Это позволяет студентам учиться не только на уроках, но и самостоятельно углублять свои знания.</p>
                            <p>Развитие всех языковых навыков: в нашей школе большое внимание уделяется всестороннему развитию языковых навыков: говорение, аудирование, чтение и письмо. Это помогает ученикам уверенно использовать язык в разных ситуациях.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
    <section class="io-about-read io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-about-read__heading io-heading-2">Welcome to the Online School of Foreign Languages!</h2>
            <div class="io-sidebar io-legal__sidebar">
                <div class="io-sidebar__sticky">
                    <div class="io-sidebar__inner io-sidebar__inner--unset">
                        <div class="io-legal__sidebar-block io-block-shadow">
                            <h2 class="io-sidebar__title io-heading-2">Содержание</h2>
                            <ul class="io-sidebar__list">
                                <li><a class="io-click-open" href="#io-about-text-h3-1">Teachers</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-2">Curriculum</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-3">Lesson Format</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-4">Student Achievements</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-5">Interesting Facts and Tips for Parents</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-6">Support and Feedback</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-7">Conclusion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="io-sidebar__content">
                    <div class="io-text-wrapper io-about-read__text-wrapper">
                        <p>In today's world, where globalization and digital technologies play a key role, proficiency in foreign languages is not only an advantage but a necessity. Our online school of foreign languages offers a unique opportunity to learn English, German, Spanish, Russian, Ukrainian, and Japanese in a convenient and effective manner. Lessons are conducted in English, Russian, and Ukrainian, allowing each student to choose the most comfortable learning option. In this article, we will provide detailed information about our teachers, curricula, lesson formats, and the achievements of our students.</p>
                        <h3 id="io-about-text-h3-1">Teachers</h3>
                        <p>One of the key factors in successfully learning a foreign language is the qualification and experience of the teachers. Our online school employs highly qualified teachers with many years of teaching experience and international certifications. Our teachers not only possess deep knowledge in their fields but also know how to inspire and motivate students to achieve their goals.</p>
                        <div class="io-show-button io-show-button--desktop">
                            <a onclick="showHiddenBlock(this)" class="io-link io-link--purple ">
                                Read more
                            </a>
                        </div>
                        <div class="io-hidden io-hidden--desktop">
                            <p><strong>English:</strong></p>
                            <p>Liliya Yarmolenko: A teacher with over 10 years of experience, certified expert, and master's degree holder. Liliya uses a communicative approach that allows students to quickly adapt to real-life situations.</p>
                            <p>Nelya Kuzmenko: Holds a master's degree in linguistics. Nelya actively uses interactive teaching methods and modern technologies to enhance students' language skills.</p>
                            <p>Larisa Pasechnik: Over 10 years of experience teaching English as a foreign language. Larisa uses an integrated approach, combining traditional methods with the latest technologies. She actively applies project-based tasks and role-playing games to improve students' communication skills.</p>
                            <p>Liliya Guba: Over 10 years of teaching experience, including work in language schools and universities. Liliya focuses on practical language use and actively incorporates modern teaching tools such as podcasts, videos, and online platforms into her lessons. Her approach is aimed at developing confidence in speaking and writing.</p>
                            <p><strong>German:</strong></p>
                            <p>Artem Stadnik: A teacher with over 15 years of experience working in schools in Germany and Ukraine. Artem uses an individual approach to each student and combines traditional and modern teaching methods.</p>
                            <p><strong>Spanish:</strong></p>
                            <p>Alina Ivanchenko: A teacher with 12 years of experience, holds a master's degree. Alina has developed a unique teaching method that includes game elements and modern technologies.</p>
                            <p>Liliya Yarmolenko: Over 9 years of experience teaching Spanish as a foreign language. Liliya uses a communicative approach, focusing on developing speaking skills. She actively includes cultural aspects and authentic materials such as Spanish literature, music, and films in her lessons. Liliya has experience working with students of various ages, from children to adults, and specializes in exam preparation.</p>
                            <p><strong>Russian:</strong></p>
                            <p>Irina Zvershkhovskaya: A teacher of Russian as a foreign language with over 20 years of experience. Irina uses modern teaching materials and methods adapted to the goals and needs of foreign students.</p>
                            <p>Olga Fialkovskaya: A specialist in the methodology of Russian as a Foreign Language (RFL), holds a master's degree. Olga helps students not only master the language but also understand the culture and traditions of Russian-speaking countries.</p>
                            <p>Liliya Yarmolenko: Holds a master's degree in philology, with over 9 years of experience teaching Russian as a foreign language. Liliya employs an integrated approach, combining traditional teaching materials with modern interactive platforms. She actively uses game methods and project tasks to develop all language skills.</p>
                            <p><strong>Ukrainian:</strong></p>
                            <p>Yulia Markvart: A teacher with 10 years of experience, native speaker. Yulia uses an integrated approach, combining language practice with the study of Ukrainian culture.</p>
                            <p>Liliya Yarmolenko: Over 9 years of experience teaching Ukrainian as a foreign language. Liliya uses a communicative approach and pays special attention to cultural aspects. She actively incorporates authentic materials such as Ukrainian literature, folk songs, and modern music into her lessons. Liliya has experience working with both children and adults and specializes in preparing students for Ukrainian state exams and improving academic skills in Ukrainian.</p>
                            <p><strong>Japanese:</strong></p>
                            <p>Liliya Yarmolenko: A teacher of Japanese with over 9 years of experience. Liliya actively integrates multimedia technologies into the educational process, making lessons more engaging and effective.</p>
                            <h3 id="io-about-text-h3-2">Curriculum</h3>
                            <p>The curriculum at our online school is designed to accommodate various levels of proficiency and age groups. We offer courses for children, teenagers, and adults who wish to improve their language skills for various purposes: academic success, career advancement, travel, or personal development.</p>
                            <p><strong>Children's Language Courses:</strong></p>
                            <p>For the youngest learners, we have developed special programs that include game elements, cartoons, songs, and fairy tales. This helps children easily and interestingly immerse themselves in learning a new language. At the initial stage, learning takes place in the format of interactive games, making the process fun and effective.</p>
                            <p><strong>Language Courses for Teenagers:</strong></p>
                            <p>Teenagers learn the language through a variety of tasks that help develop all aspects of language proficiency: reading, writing, listening, and speaking. We include current topics of interest to teenagers in the curriculum, such as music, movies, technology, and sports.</p>
                            <p><strong>Language Courses for Adults:</strong></p>
                            <p>The adult program focuses on the practical use of the language in everyday life and professional activities. Depending on the student's goals, the courses may include business language, preparation for international exams, or in-depth study of grammar and vocabulary.</p>
                            <h3 id="io-about-text-h3-3">How Lessons are Conducted</h3>
                            <p>Online lessons at our school are held in a convenient videoconferencing format. We use modern platforms that ensure high-quality communication and allow for interactive interaction with the teacher and other students.</p>
                            <p><strong>Lesson Format:</strong></p>
                            <p>Individual Lessons: One-on-one with a teacher, which allows for a personalized approach to the student's goals, objectives, and preferences. The teacher can focus on the student's weak points and develop a customized learning plan.</p>
                            <p>Interactive Methods: Lessons use a variety of methods and materials, including presentations, videos, audio recordings, interactive exercises, and tests. Teachers actively use gamification and game-based learning elements, making the learning process more engaging and motivating.</p>
                            <p>Homework: To reinforce the material covered, students receive homework that includes reading, writing, grammar exercises, and watching videos. Teachers review the assignments and provide detailed feedback, helping students improve and achieve better results.</p>
                            <h3 id="io-about-text-h3-4">Student Achievements</h3>
                            <p>Our students achieve impressive results in learning foreign languages. Many of them successfully pass international exams such as TOEFL, IELTS, DELE, and others. Some students continue their education abroad, enroll in prestigious universities, and build successful careers.</p>
                            <p><strong>Examples of Success:</strong></p>
                            <p>Maria I.: Started learning English from scratch and passed the TOEFL exam with a high score after two years. She is now studying at a university in the USA.</p>
                            <p>Alexander P.: Successfully completed a German course and received the Goethe-Zertifikat B2. Thanks to this, he was able to get a job at a German company and move to Berlin.</p>
                            <p>Ekaterina S.: After completing a Spanish course, she was able to go on an internship in Spain and gain invaluable experience communicating with native speakers.</p>
                            <h3 id="io-about-text-h3-5">Interesting Facts and Tips for Parents</h3>
                            <p>For parents who want their children to learn foreign languages, we have prepared some interesting facts and useful tips.</p>
                            <p><strong>Facts:</strong></p>
                            <p>Early Language Learning: Studies show that children who start learning foreign languages at an early age absorb new information more easily and develop better cognitive skills. They become more creative and flexible in their thinking.</p>
                            <p>Multilingualism and Academic Success: Children who are fluent in multiple languages often perform better academically compared to their monolingual peers. This is due to improved memory, concentration, and multitasking abilities.</p>
                            <p>Cultural Enrichment: Learning a foreign language helps children better understand and respect other cultures. It develops their tolerance and openness to new experiences, which are important qualities in today's world.</p>
                            <p>Brain Health: Learning languages stimulates the brain and contributes to its health. Multilingual people have a lower risk of developing cognitive-related diseases, such as dementia and Alzheimer's.</p>
                            <p><strong>Tips:</strong></p>
                            <p>Create a Language Environment: Surround your child with language material. Read books, watch cartoons, and listen to songs in the target language. This helps create a natural language environment and makes the learning process more interesting.</p>
                            <p>Use Games and Apps: Modern technology offers many educational games and apps that make language learning fun. Apps like Duolingo and Lingokids provide game-based tasks that help reinforce new knowledge.</p>
                            <p>Establish a Regular Schedule: Consistency is key to successful language learning. Set a specific time for lessons and stick to this schedule. This helps create a habit and makes learning a part of everyday life.</p>
                            <p>Maintain Interest: Consider your child's interests when choosing learning materials. If your child loves animals, find books and videos on that topic in the target language. This helps maintain interest and motivation.</p>
                            <p>Encourage and Motivate: It's important to support and encourage your child's efforts. Praise their successes and recognize their achievements. You can use a system of small rewards for completing tasks and reaching new learning levels.</p>
                            <p>Communicate with Native Speakers: Arrange interactions with native speakers. This can be through language exchanges, Skype lessons with native speakers, or simply communicating in online clubs. Live practice helps quickly master the language and feel its real use.</p>
                            <p>Be a Role Model: If possible, learn the language together with your child. Joint learning not only strengthens your relationship but also shows your child that learning a language is a valuable and useful skill.</p>
                            <h3 id="io-about-text-h3-6">Support and Feedback</h3>
                            <p>One of the key advantages of our online language school is the high level of support and feedback we provide to each student. We understand how important assistance and engagement are in the language learning process, and we strive to create the most comfortable conditions for our students.</p>
                            <p><strong>Individual Guidance</strong></p>
                            <p>Every student at our school receives individual guidance throughout their course of study. We recognize that each student has unique goals and needs, so our teachers and tutors develop personalized learning plans that take into account the student’s level of knowledge, preferences, and objectives. Regular consultations with teachers allow for adjustments to the learning program to ensure it meets the student’s expectations and needs.</p>
                            <p><strong>Flexible Schedule and Accessibility</strong></p>
                            <p>We offer a flexible schedule, which is especially important for people with busy routines. Lessons can be scheduled at convenient times, allowing students to balance learning with work, school, or other responsibilities. Our teachers are available at different hours, making it possible to study at any time of day, regardless of time zone.</p>
                            <p><strong>Discounts and Loyalty Programs</strong></p>
                            <p>We value our students and offer various discounts and loyalty programs. New students can take advantage of discounts on trial lessons, while regular clients enjoy special offers and bonuses. We also offer family and group discounts, making education accessible for all family members or groups of friends.</p>
                            <p><strong>Professional Administration</strong></p>
                            <p>Our administrative department is always ready to assist with any questions regarding scheduling, payment, or technical aspects of learning. We strive to provide prompt and high-quality support so that our students can focus entirely on their language studies.</p>
                            <h3 id="io-about-text-h3-7">Technical Support</h3>
                            <p>We use modern platforms for conducting online lessons, ensuring stability and high-quality communication. Our technical support is available to help with any technical difficulties, ensuring that learning proceeds without delays or unpleasant surprises.</p>
                            <p><strong>Feedback and Motivation</strong></p>
                            <p>Regular feedback from teachers allows students to see their progress and understand areas that need improvement. We actively encourage our students' successes, helping to maintain a high level of motivation. Teachers not only assess achievements but also provide valuable advice and recommendations to help students grow and develop.</p>
                            <p><strong>Conclusion</strong></p>
                            <p>Our online language school offers unique opportunities to learn English, German, Spanish, Russian, Ukrainian, and Japanese. Qualified teachers, a well-thought-out curriculum, interactive methods, and a flexible schedule make the learning process effective and enjoyable. Our students achieve impressive results and confidently move towards their goals. Join our school and discover a world of possibilities through language learning!</p>
                            <p>Qualified Teachers: All our teachers have extensive experience and high qualifications in teaching foreign languages. Each teacher not only has a high level of language proficiency but also deep knowledge of teaching methodology, enabling them to present material effectively and engagingly.</p>
                            <p>Individual Approach: We understand that each student has their own goals and needs. Our learning program adapts to each student, allowing for maximum results. Teachers take into account students' knowledge levels, interests, and goals, creating personalized learning plans.</p>
                            <p>Flexibility: Online lessons allow you to study at a convenient time and from any location. This is especially important for busy individuals with tight schedules or those living in different time zones.</p>
                            <p>Variety of Teaching Methods: We use a wide range of methods and materials: interactive platforms, video materials, game-based learning techniques, and authentic resources (literature, music, cinema), making the learning process interesting and engaging.</p>
                            <p>Support and Motivation: Our teachers not only teach but also motivate their students, supporting them on their path to achieving language goals, helping them overcome difficulties, and maintaining their interest in learning.</p>
                            <p>Access to Diverse Resources: We offer our students access to numerous educational materials, including e-books, audio and video content, interactive exercises, and more. This allows students to learn not only during lessons but also to deepen their knowledge independently.</p>
                            <p>Development of All Language Skills: Our school pays great attention to the comprehensive development of language skills: speaking, listening, reading, and writing. This helps students confidently use the language in various situations.</p>
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