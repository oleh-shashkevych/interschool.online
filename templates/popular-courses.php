<?php
function io_popular_courses() {
    ob_start(); // Start output buffering to capture the HTML content
?>
    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
    <section class="io-section io-popular">
        <div class="container-xxl io-container-mw">
            <div class="io-popular__heading io-flex-between">
                <h2 class="io-heading-2">Популярные курсы</h2>
                <div class="io-pagination">
                    <div class="io-popular__arrows io-pagination__arrows">
                        <button class="io-popular__prev io-pagination__prev" aria-label="Предыдущая страница"></button>
                        <button class="io-popular__next io-pagination__next" aria-label="следующая страница"></button>
                    </div>
                </div>
            </div>
            <div id="slider-popular" class="keen-slider io-popular__slider">
                <div class="keen-slider__slide io-popular__slide">
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
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Цена урока:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>от <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(54); ?>" class="io-button">Подробнее</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
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
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Цена урока:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>от <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(26); ?>" class="io-button">Подробнее</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
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
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Цена урока:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>от <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(28); ?>" class="io-button">Подробнее</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
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
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Цена урока:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>от <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(30); ?>" class="io-button">Подробнее</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
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
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Цена урока:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>от <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(94); ?>" class="io-button">Подробнее</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
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
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Цена урока:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>от <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(62); ?>" class="io-button">Подробнее</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
                        <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                        <div class="io-popular__item-img">
                            <img src="/wp-content/themes/interschooltemplate/images/pop-7.svg" alt="">
                        </div>
                        <div class="io-popular__item-data">
                            <h3 class="io-popular__item-title">Современные танцы</h3>
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
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Цена урока:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>от <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(68); ?>" class="io-button">Подробнее</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
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
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Цена урока:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>от <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(56); ?>" class="io-button">Подробнее</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
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
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Цена урока:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>от <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(84); ?>" class="io-button">Подробнее</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
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
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Цена урока:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>от <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(88); ?>" class="io-button">Подробнее</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
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
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Цена урока:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>от <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(78); ?>" class="io-button">Подробнее</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
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
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Цена урока:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>от <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(86); ?>" class="io-button">Подробнее</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
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
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Цена урока:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>от <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(82); ?>" class="io-button">Подробнее</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
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
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Цена урока:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>от <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(80); ?>" class="io-button">Подробнее</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
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
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Цена урока:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>от <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(44); ?>" class="io-button">Подробнее</a>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
    <section class="io-section io-popular">
        <div class="container-xxl io-container-mw">
            <div class="io-popular__heading io-flex-between">
                <h2 class="io-heading-2">Popular Courses</h2>
                <div class="io-pagination">
                    <div class="io-popular__arrows io-pagination__arrows">
                        <button class="io-popular__prev io-pagination__prev" aria-label="Предыдущая страница"></button>
                        <button class="io-popular__next io-pagination__next" aria-label="следующая страница"></button>
                    </div>
                </div>
            </div>
            <div id="slider-popular" class="keen-slider io-popular__slider">
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
                        <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                        <div class="io-popular__item-img">
                            <img src="/wp-content/themes/interschooltemplate/images/pop-1.svg" alt="">
                        </div>
                        <div class="io-popular__item-data">
                            <h3 class="io-popular__item-title">Painting</h3>
                            <div class="io-popular__item-data-inner">
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Age:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            from 5 years
                                        </div>
                                    </div>
                                </div>
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Lesson price:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>from <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(54); ?>" class="io-button">Learn More</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
                        <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                        <div class="io-popular__item-img">
                            <img src="/wp-content/themes/interschooltemplate/images/pop-2.svg" alt="">
                        </div>
                        <div class="io-popular__item-data">
                            <h3 class="io-popular__item-title">Piano</h3>
                            <div class="io-popular__item-data-inner">
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Age:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            from 5 years
                                        </div>
                                    </div>
                                </div>
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Lesson price:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>from <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(26); ?>" class="io-button">Learn More</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
                        <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                        <div class="io-popular__item-img">
                            <img src="/wp-content/themes/interschooltemplate/images/pop-3.svg" alt="">
                        </div>
                        <div class="io-popular__item-data">
                            <h3 class="io-popular__item-title">Singing</h3>
                            <div class="io-popular__item-data-inner">
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Age:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            from 5 years
                                        </div>
                                    </div>
                                </div>
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Lesson price:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>from <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(28); ?>" class="io-button">Learn More</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
                        <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                        <div class="io-popular__item-img">
                            <img src="/wp-content/themes/interschooltemplate/images/pop-4.svg" alt="">
                        </div>
                        <div class="io-popular__item-data">
                            <h3 class="io-popular__item-title">Classical Guitar</h3>
                            <div class="io-popular__item-data-inner">
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Age:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            from 6 years
                                        </div>
                                    </div>
                                </div>
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Lesson price:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>from <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(30); ?>" class="io-button">Learn More</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
                        <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                        <div class="io-popular__item-img">
                            <img src="/wp-content/themes/interschooltemplate/images/pop-5.svg" alt="">
                        </div>
                        <div class="io-popular__item-data">
                            <h3 class="io-popular__item-title">Math</h3>
                            <div class="io-popular__item-data-inner">
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Age:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            from 7 years
                                        </div>
                                    </div>
                                </div>
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Lesson price:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>from <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(94); ?>" class="io-button">Learn More</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
                        <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                        <div class="io-popular__item-img">
                            <img src="/wp-content/themes/interschooltemplate/images/pop-6.svg" alt="">
                        </div>
                        <div class="io-popular__item-data">
                            <h3 class="io-popular__item-title">Computer Graphics</h3>
                            <div class="io-popular__item-data-inner">
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Age:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            from 8 years
                                        </div>
                                    </div>
                                </div>
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Lesson price:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>from <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(62); ?>" class="io-button">Learn More</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
                        <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                        <div class="io-popular__item-img">
                            <img src="/wp-content/themes/interschooltemplate/images/pop-7.svg" alt="">
                        </div>
                        <div class="io-popular__item-data">
                            <h3 class="io-popular__item-title">Contemporary Dance</h3>
                            <div class="io-popular__item-data-inner">
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Age:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            from 5 years
                                        </div>
                                    </div>
                                </div>
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Lesson price:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>from <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(68); ?>" class="io-button">Learn More</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
                        <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                        <div class="io-popular__item-img">
                            <img src="/wp-content/themes/interschooltemplate/images/pop-8.svg" alt="">
                        </div>
                        <div class="io-popular__item-data">
                            <h3 class="io-popular__item-title">Modeling and Sculpture</h3>
                            <div class="io-popular__item-data-inner">
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Age:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            from 5 years
                                        </div>
                                    </div>
                                </div>
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Lesson price:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>from <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(56); ?>" class="io-button">Learn More</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
                        <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                        <div class="io-popular__item-img">
                            <img src="/wp-content/themes/interschooltemplate/images/pop-9.svg" alt="">
                        </div>
                        <div class="io-popular__item-data">
                            <h3 class="io-popular__item-title">Japanese language</h3>
                            <div class="io-popular__item-data-inner">
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Age:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            from 7 years
                                        </div>
                                    </div>
                                </div>
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Lesson price:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>from <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(84); ?>" class="io-button">Learn More</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
                        <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                        <div class="io-popular__item-img">
                            <img src="/wp-content/themes/interschooltemplate/images/pop-10.svg" alt="">
                        </div>
                        <div class="io-popular__item-data">
                            <h3 class="io-popular__item-title">Spanish language</h3>
                            <div class="io-popular__item-data-inner">
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Age:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            from 5 years
                                        </div>
                                    </div>
                                </div>
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Lesson price:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>from <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(88); ?>" class="io-button">Learn More</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
                        <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                        <div class="io-popular__item-img">
                            <img src="/wp-content/themes/interschooltemplate/images/pop-11.svg" alt="">
                        </div>
                        <div class="io-popular__item-data">
                            <h3 class="io-popular__item-title">English language</h3>
                            <div class="io-popular__item-data-inner">
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Age:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            from 5 years
                                        </div>
                                    </div>
                                </div>
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Lesson price:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>from <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(78); ?>" class="io-button">Learn More</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
                        <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                        <div class="io-popular__item-img">
                            <img src="/wp-content/themes/interschooltemplate/images/pop-12.svg" alt="">
                        </div>
                        <div class="io-popular__item-data">
                            <h3 class="io-popular__item-title">German language</h3>
                            <div class="io-popular__item-data-inner">
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Age:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            from 5 years
                                        </div>
                                    </div>
                                </div>
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Lesson price:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>from <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(86); ?>" class="io-button">Learn More</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
                        <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                        <div class="io-popular__item-img">
                            <img src="/wp-content/themes/interschooltemplate/images/pop-13.svg" alt="">
                        </div>
                        <div class="io-popular__item-data">
                            <h3 class="io-popular__item-title">Ukrainian language</h3>
                            <div class="io-popular__item-data-inner">
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Age:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            from 5 years
                                        </div>
                                    </div>
                                </div>
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Lesson price:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>from <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(82); ?>" class="io-button">Learn More</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
                        <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                        <div class="io-popular__item-img">
                            <img src="/wp-content/themes/interschooltemplate/images/pop-14.svg" alt="">
                        </div>
                        <div class="io-popular__item-data">
                            <h3 class="io-popular__item-title">Russian language</h3>
                            <div class="io-popular__item-data-inner">
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Age:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            from 5 years
                                        </div>
                                    </div>
                                </div>
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Lesson price:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>from <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(80); ?>" class="io-button">Learn More</a>
                        </div>                        
                    </div>
                </div>
                <div class="keen-slider__slide io-popular__slide">
                    <div class="io-popular__item">
                        <div class="io-popular__item-dash io-tooltip"><span class="io-tooltip__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { ?>Популярный курс<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>Popular course<?php } ?></span></div>
                        <div class="io-popular__item-img">
                            <img src="/wp-content/themes/interschooltemplate/images/pop-15.svg" alt="">
                        </div>
                        <div class="io-popular__item-data">
                            <h3 class="io-popular__item-title">Flute</h3>
                            <div class="io-popular__item-data-inner">
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Age:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            from 7 years
                                        </div>
                                    </div>
                                </div>
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            Lesson price:
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <div>from <span class="ioArrayToTextElements81">$11</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="io-popular__item-button">
                            <a href="<?php echo get_permalink(44); ?>" class="io-button">Learn More</a>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
<?php
    $output = ob_get_clean(); // Get the captured HTML content and clean the output buffer
    echo $output; // Output the final HTML
}
?>