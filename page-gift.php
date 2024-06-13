<?php
/**
 * Шаблон Цены - Подарочный
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Цены - Подарочный
 */

include 'templates/price.php';
include 'templates/popular-courses.php';
include 'templates/montessori-work.php';

get_header('course'); // подключаем header.php ?>

<?php the_content(); // контент ?>

<style>
    .io-price__sidebar-inner {
        top: 25px;
        margin-top: 4px;
    }

    .io-course-price {
        padding-top: 0px;
    }

    /* @media(max-width: 1199.5px) {
        .io-select-currency {
            top: 90px;
            right: 16px;
        }
    }

    @media(max-width: 991.5px) {
        .io-select-currency {
            top: 82px;
            right: 16px;
        }
    } */

    .hide {
        display: none;
    }
</style>

<main>
    <div class="io-section-first">
        <div class="container-xxl io-container-mw">
            <div class="io-price__sidebar">
                <div class="io-price__sidebar-sticky">
                    <div class="io-price__sidebar-inner">
                        <div class="io-price__detail">
                            <!-- Подарочный -->
                            <div class="io-price__detail-title-wrapper">
                                <p class="io-price__detail-title">
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Ваш заказ'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Your order'; } ?>
                                    <span class="io-purple-main io-fw-semibold">"<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Подарочный сертификат'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Gift card'; } ?>"</span>
                                </p>
                                <div id="ioGiftLessonsList"></div>
                            </div>
                            <!-- Подарочный -->
                            <div class="io-price__detail-item" id="ioGiftCountWrapper">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Количество уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Number of lessons'; } ?></p>
                                <p id="ioGiftCount">3</p>
                            </div>
                            <div class="io-price__detail-item">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Цена урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson price'; } ?></p>
                                <p><span id="ioGiftLessonPrice">3</span> <span class="io-currency__from-select">USD</span></p>
                            </div>
                            <div class="io-price__detail-item" id="ioGiftLessonSaleWrapper">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Скидка'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Discount'; } ?></p>
                                <p class="io-pink-main"><span id="ioGiftLessonSale">3</span> <span class="io-currency__from-select">USD</span></p>
                            </div>
                            <!-- Общий -->
                            <div class="io-price__detail-item io-promo">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Промокод'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Promo code'; } ?></p>
                                <div class="io-promo__inner io-form__item">
                                    <input type="text" spellcheck="false" placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите промокод'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter promo code'; } ?>">
                                    <button class="io-promo__check" onclick="ioPromoInnerCheck(this.parentElement)"></button>
                                    <button class="io-promo__button" onclick="ioPromoInnerToggleClass(this.parentElement)"></button>
                                </div>
                            </div>
                            <!-- Подарочный -->
                            <div class="io-price__detail-item io-last">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'К оплате'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Total'; } ?></p>
                                <p class="io-line-through" id="ioGiftAmountOldWrapper"><span id="ioGiftAmountOld">1</span> <span class="io-currency__from-select">USD</span></p>
                                <p><span id="ioGiftAmount">3</span> <span class="io-currency__from-select">USD</span></p>
                            </div>
                            <!-- Общий -->
                            <div class="io-price__bottom">
                                <button id="lessonButtonDisplay" type="button" class="io-price__button io-button__large">                                    
                                    <picture>
                                        <source srcset="/wp-content/themes/interschooltemplate/images/visamastercard.webp" type="image/webp">
                                        <source srcset="/wp-content/themes/interschooltemplate/images/visamastercard.png" type="image/png">
                                        <img src="/wp-content/themes/interschooltemplate/images/visamastercard.png" alt="">
                                    </picture>
                                </button>
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Подтверждая заказ, я принимаю условия:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'By confirming the order, I accept the terms of:'; } ?></p>
                                <?php if (ICL_LANGUAGE_CODE === 'ru') { echo '<ul><li><a class="io-link" href="' . get_permalink(135)  . '" target="_blank">Публичной оферты</a></li><li><a class="io-link" href="' . get_permalink(137)  . '" target="_blank">Политики конфиденциальности</a></li></ul>'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo '<ul><li><a class="io-link" href="' . get_permalink(135)  . '" target="_blank">Public Offer</a></li><li><a class="io-link" href="' . get_permalink(137)  . '" target="_blank">Privacy Policy</a></li></ul>'; } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="io-price__sidebar-content io-course-price pt-0">
                    <div class="io-flex-between d-flex align-items-center justify-content-between justify-content-sm-start">
                        <h2 class="io-heading-2"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Купить онлайн уроки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Buy Online Lessons'; } ?></h2>
                    </div>
                    <div class="io-price">
                        <div class="io-price__step io-price__first focus">
                            <div class="io-price__heading">
                                <span>1</span>
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Выберите покупку'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Select purchase'; } ?></p>
                            </div>
                            <form autocomplete="off" id="ioTypeRadioCheck">
                                <a href="<?php echo get_permalink(1224); ?>" class="io-price__fake">
                                    <div></div>
                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Абонемент'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Subscription'; } ?></p>
                                </a>
                                <a href="<?php echo get_permalink(1228); ?>" class="io-price__fake">
                                    <div></div>
                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Пробные уроки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Trial lessons'; } ?></p>
                                </a>
                                <a class="io-price__fake active">
                                    <div></div>
                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Подарочный сертификат'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Gift card'; } ?></p>
                                </a>
                            </form>
                        </div>
                        <!-- Подарочный -->
                        <div class="io-price__step">
                            <div class="io-price__heading">
                                <span>2</span>
                                <p class="d-none d-sm-block"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Выберите курс для подарочного сертификата'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Select a course for a gift certificate'; } ?></p>
                                <p class="d-sm-none"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Выберите курс'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Select a course'; } ?></p>
                            </div>
                            <form>
                                <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                                <div class="io-accordion accordion io-price__accordion" id="ioGiftCourseCheck">
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioGiftCourseCheck-headingTwo">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseTwo" aria-expanded="true" aria-controls="ioGiftCourseCheck-collapseTwo">
                                                Музыка
                                            </button>
                                        </h2>
                                        <div id="ioGiftCourseCheck-collapseTwo" class="accordion-collapse collapse" aria-labelledby="ioGiftCourseCheck-headingTwo">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift21" name="checkbox-group">
                                                    <label for="iocheckboxgift21">Фортепиано</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift22" name="checkbox-group">
                                                    <label for="iocheckboxgift22">Вокал</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift23" name="checkbox-group">
                                                    <label for="iocheckboxgift23">Классическая гитара</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift24" name="checkbox-group">
                                                    <label for="iocheckboxgift24">Электрогитара</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift25" name="checkbox-group">
                                                    <label for="iocheckboxgift25">Укулеле</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift26" name="checkbox-group">
                                                    <label for="iocheckboxgift26">Бас-гитара</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift27" name="checkbox-group">
                                                    <label for="iocheckboxgift27">Барабаны</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift28" name="checkbox-group">
                                                    <label for="iocheckboxgift28">Скрипка</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift29" name="checkbox-group">
                                                    <label for="iocheckboxgift29">Саксофон</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift210" name="checkbox-group">
                                                    <label for="iocheckboxgift210">Флейта</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift211" name="checkbox-group">
                                                    <label for="iocheckboxgift211">Блокфлейта</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift212" name="checkbox-group">
                                                    <label for="iocheckboxgift212">Виолончель</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioGiftCourseCheck-headingOne">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseOne" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseOne">
                                                ИЗО
                                            </button>
                                        </h2>
                                        <div id="ioGiftCourseCheck-collapseOne" class="accordion-collapse collapse" aria-labelledby="ioGiftCourseCheck-headingOne">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift11" name="checkbox-group">
                                                    <label for="iocheckboxgift11">Живопись</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift12" name="checkbox-group">
                                                    <label for="iocheckboxgift12">Лепка и скульптура</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift13" name="checkbox-group">
                                                    <label for="iocheckboxgift13">Компьютерная графика</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift14" name="checkbox-group">
                                                    <label for="iocheckboxgift14">Кройка и шитьё</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift15" name="checkbox-group">
                                                    <label for="iocheckboxgift15">Мультипликация</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioGiftCourseCheck-headingFive">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseFive" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseFive">
                                                Танцы
                                            </button>
                                        </h2>
                                        <div id="ioGiftCourseCheck-collapseFive" class="accordion-collapse collapse" aria-labelledby="ioGiftCourseCheck-headingFive">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift51" name="checkbox-group">
                                                    <label for="iocheckboxgift51">Современные танцы</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift52" name="checkbox-group">
                                                    <label for="iocheckboxgift52">Балет</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift53" name="checkbox-group">
                                                    <label for="iocheckboxgift53">Йога</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioGiftCourseCheck-headingFour">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseFour" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseFour">
                                                Школа
                                            </button>
                                        </h2>
                                        <div id="ioGiftCourseCheck-collapseFour" class="accordion-collapse collapse" aria-labelledby="ioGiftCourseCheck-headingFour">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift41" name="checkbox-group">
                                                    <label for="iocheckboxgift41">Математика</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift42" name="checkbox-group">
                                                    <label for="iocheckboxgift42">Алгебра</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift43" name="checkbox-group">
                                                    <label for="iocheckboxgift43">Геометрия</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift44" name="checkbox-group">
                                                    <label for="iocheckboxgift44">Химия</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift45" name="checkbox-group">
                                                    <label for="iocheckboxgift45">Подготовка к школе</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioGiftCourseCheck-headingThree">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseThree" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseThree">
                                                Языки
                                            </button>
                                        </h2>
                                        <div id="ioGiftCourseCheck-collapseThree" class="accordion-collapse collapse" aria-labelledby="ioGiftCourseCheck-headingThree">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift31" name="checkbox-group">
                                                    <label for="iocheckboxgift31">Английский</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift32" name="checkbox-group">
                                                    <label for="iocheckboxgift32">Русский</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift33" name="checkbox-group">
                                                    <label for="iocheckboxgift33">Украинский</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift34" name="checkbox-group">
                                                    <label for="iocheckboxgift34">Испанский</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift35" name="checkbox-group">
                                                    <label for="iocheckboxgift35">Немецкий</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift36" name="checkbox-group">
                                                    <label for="iocheckboxgift36">Японский</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioGiftCourseCheck-headingSix">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseSix" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseSix">
                                                Прочее
                                            </button>
                                        </h2>
                                        <div id="ioGiftCourseCheck-collapseSix" class="accordion-collapse collapse" aria-labelledby="ioGiftCourseCheck-headingSix">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift61" name="checkbox-group">
                                                    <label for="iocheckboxgift61">Уроки логопеда</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                                <div class="io-accordion accordion io-price__accordion" id="ioGiftCourseCheck">
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioGiftCourseCheck-headingTwo">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseTwo" aria-expanded="true" aria-controls="ioGiftCourseCheck-collapseTwo">
                                                Music
                                            </button>
                                        </h2>
                                        <div id="ioGiftCourseCheck-collapseTwo" class="accordion-collapse collapse" aria-labelledby="ioGiftCourseCheck-headingTwo">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift21" name="checkbox-group">
                                                    <label for="iocheckboxgift21">Piano</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift22" name="checkbox-group">
                                                    <label for="iocheckboxgift22">Singing</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift23" name="checkbox-group">
                                                    <label for="iocheckboxgift23">Classical Guitar</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift24" name="checkbox-group">
                                                    <label for="iocheckboxgift24">Electric Guitar</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift25" name="checkbox-group">
                                                    <label for="iocheckboxgift25">Ukulele</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift26" name="checkbox-group">
                                                    <label for="iocheckboxgift26">Bass Guitar</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift27" name="checkbox-group">
                                                    <label for="iocheckboxgift27">Drums</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift28" name="checkbox-group">
                                                    <label for="iocheckboxgift28">Violin</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift29" name="checkbox-group">
                                                    <label for="iocheckboxgift29">Saxophone</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift210" name="checkbox-group">
                                                    <label for="iocheckboxgift210">Flute</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift211" name="checkbox-group">
                                                    <label for="iocheckboxgift211">Recorder</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift212" name="checkbox-group">
                                                    <label for="iocheckboxgift212">Cello</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioGiftCourseCheck-headingOne">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseOne" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseOne">
                                                Art
                                            </button>
                                        </h2>
                                        <div id="ioGiftCourseCheck-collapseOne" class="accordion-collapse collapse" aria-labelledby="ioGiftCourseCheck-headingOne">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift11" name="checkbox-group">
                                                    <label for="iocheckboxgift11">Painting</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift12" name="checkbox-group">
                                                    <label for="iocheckboxgift12">Modeling & Sculpture</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift13" name="checkbox-group">
                                                    <label for="iocheckboxgift13">Computer Graphics</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift14" name="checkbox-group">
                                                    <label for="iocheckboxgift14">Sewing</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift15" name="checkbox-group">
                                                    <label for="iocheckboxgift15">Animation</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioGiftCourseCheck-headingFive">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseFive" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseFive">
                                                Dances
                                            </button>
                                        </h2>
                                        <div id="ioGiftCourseCheck-collapseFive" class="accordion-collapse collapse" aria-labelledby="ioGiftCourseCheck-headingFive">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift51" name="checkbox-group">
                                                    <label for="iocheckboxgift51">Contemporary Dance</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift52" name="checkbox-group">
                                                    <label for="iocheckboxgift52">Ballet</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift53" name="checkbox-group">
                                                    <label for="iocheckboxgift53">Yoga</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioGiftCourseCheck-headingFour">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseFour" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseFour">
                                                School
                                            </button>
                                        </h2>
                                        <div id="ioGiftCourseCheck-collapseFour" class="accordion-collapse collapse" aria-labelledby="ioGiftCourseCheck-headingFour">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift41" name="checkbox-group">
                                                    <label for="iocheckboxgift41">Math</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift42" name="checkbox-group">
                                                    <label for="iocheckboxgift42">Algebra</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift43" name="checkbox-group">
                                                    <label for="iocheckboxgift43">Geometry</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift44" name="checkbox-group">
                                                    <label for="iocheckboxgift44">Chemistry</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift45" name="checkbox-group">
                                                    <label for="iocheckboxgift45">Pre-K & Kindergarten</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioGiftCourseCheck-headingThree">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseThree" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseThree">
                                                Languages
                                            </button>
                                        </h2>
                                        <div id="ioGiftCourseCheck-collapseThree" class="accordion-collapse collapse" aria-labelledby="ioGiftCourseCheck-headingThree">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift31" name="checkbox-group">
                                                    <label for="iocheckboxgift31">English</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift32" name="checkbox-group">
                                                    <label for="iocheckboxgift32">Russian</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift33" name="checkbox-group">
                                                    <label for="iocheckboxgift33">Ukrainian</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift34" name="checkbox-group">
                                                    <label for="iocheckboxgift34">Spanish</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift35" name="checkbox-group">
                                                    <label for="iocheckboxgift35">German</label>
                                                </div>
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift36" name="checkbox-group">
                                                    <label for="iocheckboxgift36">Japanese</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioGiftCourseCheck-headingSix">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseSix" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseSix">
                                                Other
                                            </button>
                                        </h2>
                                        <div id="ioGiftCourseCheck-collapseSix" class="accordion-collapse collapse" aria-labelledby="ioGiftCourseCheck-headingSix">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-radio" type="radio" id="iocheckboxgift61" name="checkbox-group">
                                                    <label for="iocheckboxgift61">Speech Therapy Lessons</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </form>
                        </div>
                        <div class="io-price__step">
                            <div class="io-price__heading">
                                <span>3</span>
                                <p class="d-none d-sm-block"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Выберите количество уроков в подарочном сертификате'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Select the number of lessons for a gift certificate'; } ?></p>
                                <p class="d-sm-none"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Количество уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Number of lessons'; } ?></p>
                            </div>
                            <form>
                                <div class="io-form__item d-sm-none">
                                    <div class="io-form__item-header">
                                        <label><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Уроков в подарочном сертификате'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lessons in a gift certificate'; } ?></label>
                                    </div>
                                    <div class="io-select-gift" id="ioGiftSelect">
                                        <div class="io-selected-gift"><span id="ioGiftDropdownLessonCount">8</span> <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main" id="ioGiftDropdownLessonAmount">112</span> <span class="io-currency__from-select">USD</span></div>
                                        <ul class="io-gift-options" id="ioGiftOptions">
                                            <li data-value="1">4 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">56</span> <span class="io-currency__from-select">USD</span></li>
                                            <li data-value="2">8 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">112</span> <span class="io-currency__from-select">USD</span></li>
                                            <li data-value="3">12 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">168</span> <span class="io-currency__from-select">USD</span></li>
                                            <li data-value="4">16 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">224</span> <span class="io-currency__from-select">USD</span></li>
                                            <li data-value="5">24 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">336</span> <span class="io-currency__from-select">USD</span></li>
                                            <li data-value="6">32 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">448</span> <span class="io-currency__from-select">USD</span></li>
                                            <li data-value="7">80 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-pink-main">1000</span> <span class="io-currency__from-select">USD</span><span class="io-pink-main ms-auto">Скидка</span></li>
                                            <li data-value="8">120 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-pink-main">1380</span> <span class="io-currency__from-select">USD</span><span class="io-pink-main ms-auto">Скидка</span></li>
                                            <li data-value="9">160 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-pink-main">1760</span> <span class="io-currency__from-select">USD</span><span class="io-pink-main ms-auto">Скидка</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="io-range__wrapper d-none d-sm-block">
                                    <div class="io-range__lessons">
                                        <div class="io-range__lesson-gift">4</div>
                                        <div class="io-range__lesson-gift active">8</div>
                                        <div class="io-range__lesson-gift">12</div>
                                        <div class="io-range__lesson-gift">16</div>
                                        <div class="io-range__lesson-gift">24</div>
                                        <div class="io-range__lesson-gift">32</div>
                                        <div class="io-range__lesson-gift">80</div>
                                        <div class="io-range__lesson-gift">120</div>
                                        <div class="io-range__lesson-gift">160</div>
                                    </div>
                                    <div class="io-range__circles">
                                        <div class="io-range__circle-gift active">
                                            <div></div>
                                        </div>
                                        <div class="io-range__circle-gift">
                                            <div></div>
                                        </div>
                                        <div class="io-range__circle-gift">
                                            <div></div>
                                        </div>
                                        <div class="io-range__circle-gift">
                                            <div></div>
                                        </div>
                                        <div class="io-range__circle-gift">
                                            <div></div>
                                        </div>
                                        <div class="io-range__circle-gift">
                                            <div></div>
                                        </div>
                                        <div class="io-range__circle-gift">
                                            <div></div>
                                        </div>
                                        <div class="io-range__circle-gift">
                                            <div></div>
                                        </div>
                                        <div class="io-range__circle-gift">
                                            <div></div>
                                        </div>
                                    </div>
                                    <input class="io-range" type="range" id="ioAmountRangeGift" min="1" max="9" value="2">
                                </div>
                                <div class="io-range__sale d-none d-sm-flex"><span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'скидки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'discounts'; } ?></span></div>
                            </form>
                        </div>
                        <div class="io-price__step">
                            <div class="io-price__heading">
                                <span>4</span>
                                <p class="d-none d-sm-block"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Укажите данные получателя подарочного сертификата'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter the details of the gift certificate recipient'; } ?></p>
                                <p class="d-sm-none"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Данные получателя'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Recipient details'; } ?></p>
                            </div>
                            <form action="" class="io-form">
                                <div class="io-form__item">
                                    <div class="io-form__item-header">
                                        <label><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Имя студента'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Student name'; } ?></label>
                                    </div>
                                    <input id="ioGiftName" onblur="cleanInput(this)" type="text" name="name" required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите имя'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter name'; } ?>">
                                </div>
                                <div class="io-form__item">
                                    <div class="io-form__item-header">
                                        <label><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Фамилия студента'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Student last name'; } ?></label>
                                    </div>
                                    <input id="ioGiftSurname" onblur="cleanInput(this)" type="text" name="name" required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите фамилию'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter last name'; } ?>">
                                </div>
                            </form>
                        </div>
                        <div class="io-price__step">
                            <div class="io-price__heading">
                                <span>5</span>
                                <p class="d-none d-sm-block"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Укажите контактные данные плательщика'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Payer contact details'; } ?></p>
                                <p class="d-sm-none"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Данные плательщика'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Payer details'; } ?></p>
                            </div>
                            <!-- <p class="d-sm-none io-price__surely"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Все поля обязательные'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'All fields are required'; } ?></p> -->
                            <form action="" class="io-form">
                                <div class="io-form__item">
                                    <div class="io-form__item-header">
                                        <label><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Имя и фамилия плательщика'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Payer\'s name and surname'; } ?></label>
                                    </div>
                                    <input id="ioGiftPayer" onblur="cleanInput(this)" type="text" name="name"  required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите имя и фамилию'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter first and last name'; } ?>">
                                </div>
                                <div class="io-grid io-grid-gap-050">
                                    <div class="io-form__item-header">
                                        <label><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Номер телефона'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Phone number'; } ?></label>
                                    </div>
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                                    <div class="custom-select" id="ioGiftPhonelabel">
                                        <div class="select-selected">+0</div>
                                        <input class="custom-input" id="ioGiftPhone" onblur="cleanPhoneInput(this)" name="phone" type="phone" placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите номер телефона'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter phone number'; } ?>">
                                        <div class="select-items">
                                            <input type="text" class="country-search" placeholder="Поиск...">
                                            <div data-value="+1" data-country="US">США<span>+1</span></div>
                                            <div data-value="+375" data-country="BY">Беларусь<span>+375</span></div>
                                            <div data-value="+44" data-country="GB">Великобритания<span>+44</span></div>
                                            <div data-value="+49" data-country="DE">Германия<span>+49</span></div>
                                            <div data-value="+7" data-country="KZ">Казахстан<span>+7</span></div>
                                            <div data-value="+7" data-country="RU">Россия<span>+7</span></div>
                                            <div data-value="+380" data-country="UA">Украина<span>+380</span></div>
                                            <div data-value="+33" data-country="FR">Франция<span>+33</span></div>
                                        </div>
                                    </div>
                                    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                                    <div class="custom-select" id="ioGiftPhonelabel">
                                        <div class="select-selected">+0</div>
                                        <input class="custom-input" id="ioGiftPhone" onblur="cleanPhoneInput(this)" name="phone" type="phone" placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите номер телефона'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter phone number'; } ?>">
                                        <div class="select-items">
                                            <input type="text" class="country-search" placeholder="Search...">
                                            <div data-value="+1" data-country="US">USA<span>+1</span></div>
                                            <div data-value="+375" data-country="BY">Belarus<span>+375</span></div>
                                            <div data-value="+33" data-country="FR">France<span>+33</span></div>
                                            <div data-value="+49" data-country="DE">Germany<span>+49</span></div>
                                            <div data-value="+7" data-country="KZ">Kazakhstan<span>+7</span></div>
                                            <div data-value="+7" data-country="RU">Russia<span>+7</span></div>
                                            <div data-value="+380" data-country="UA">Ukraine<span>+380</span></div>
                                            <div data-value="+44" data-country="GB">United Kingdom<span>+44</span></div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="io-form__item">
                                    <div class="io-form__item-header">
                                        <label>Email</label>
                                    </div>
                                    <input id="ioGiftEmail" onblur="cleanEmailInput(this)" class="io-email-input" type="text" required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите Email'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter your email'; } ?>">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="io-d-desktop">
                        <!-- Подарочный -->
                        <div class="">
                            <div class="io-price__calculation-terms">
                                <p class="io-price__calculation-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Правила для <span class="io-fw-bold io-purple-main">Подарочного сертификата</span>'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo '<span class="io-fw-bold io-purple-main">Gift card</span> rules'; } ?></p>
                                <div class="io-check io-check--start io-check--purple">
                                    <div class="">
                                        <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                                            <div>При покупке 80 и более уроков скидка составляет до <span class="ioArrayToTextElements82">$480</span></div>
                                        <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                                            <div>When purchasing 80 or more lessons, a discount of up to <span class="ioArrayToTextElements82">$480</span> is applied</div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="io-check io-check--start io-check--purple">
                                    <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Купленные уроки не имеют срока использования'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Purchased lessons have no expiration date'; } ?></span>
                                </div>
                                <div class="io-check io-check--start io-check--purple">
                                    <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Все члены семьи могут использовать купленные уроки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'All family members can use the purchased lessons'; } ?></span>
                                </div>
                                <div class="io-check io-check--start io-check--purple">
                                    <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Оплату необходимо вносить минимум за 24 часа до начала урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Payment must be made at least 24 hours before the start of the lesson'; } ?></span>
                                </div>
                                <div class="io-warning io-warning--start">
                                    <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Урок нельзя отменить менее чем за 24 часа до его начала'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'A lesson cannot be canceled less than 24 hours before its start'; } ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="io-d-mobile">
                    <!-- Подарочный -->
                    <div class="">
                        <div class="io-price__calculation-terms">
                            <p class="io-price__calculation-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Правила для <span class="io-fw-bold io-purple-main">Подарочного сертификата</span>'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo '<span class="io-fw-bold io-purple-main">Gift card</span> rules'; } ?></p>
                            <div class="io-check io-check--start io-check--purple">
                                <div class="">
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                                        <div>При покупке 80 и более уроков скидка составляет до <span class="ioArrayToTextElements82">$480</span></div>
                                    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                                        <div>When purchasing 80 or more lessons, a discount of up to <span class="ioArrayToTextElements82">$480</span> is applied</div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="io-check io-check--start io-check--purple">
                                <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Купленные уроки не имеют срока использования'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Purchased lessons have no expiration date'; } ?></span>
                            </div>
                            <div class="io-check io-check--start io-check--purple">
                                <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Все члены семьи могут использовать купленные уроки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'All family members can use the purchased lessons'; } ?></span>
                            </div>
                            <div class="io-check io-check--start io-check--purple">
                                <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Оплату необходимо вносить минимум за 24 часа до начала урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Payment must be made at least 24 hours before the start of the lesson'; } ?></span>
                            </div>
                            <div class="io-warning io-warning--start">
                                <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Урок нельзя отменить менее чем за 24 часа до его начала'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'A lesson cannot be canceled less than 24 hours before its start'; } ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php io_popular_courses(); ?>

    <?php io_montessori_work(); ?>
    
</main>

<?php get_footer(); // подключаем footer.php ?>
<?php io_price(); ?>

<script>
    //Добавляем в историю браузера новую ссылку по нажатию на вкладку на странице
    function tabHistoryHandler(event, clicked_button) {
        
        //Проверяем, это нажатие на кнопку вкладки человеком, или эмуляция через click() функцией выше
        if (clickInitiator == null) {
            window.history.pushState(clicked_button.id, "", document.location);
        }
    }

</script>

<!-- Скрипт связывания меню и страницы подарочного сертификата -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const courseType1Radio = document.getElementById("ioCourseType1");
        const courseType2Radio = document.getElementById("ioCourseType2");
        const courseType3Radio = document.getElementById("ioCourseType3");

        // Функция для установки куки
        function setCookie(name, value) {
            document.cookie = name + "=" + value + "; path=/";
        }

        // Функция для получения значения куки по имени
        function getCookie(name) {
            var match = document.cookie.match(new RegExp(name + '=([^;]+)'));
            return match ? match[1] : undefined;
        }

        // Функция для удаления куки по имени
        function deleteCookie(name) {
            document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/';
        }

        // Проверяем значение куки "ioMenuGiftClicked" и устанавливаем активную радиокнопку
        var ioMenuGiftClickedValue = getCookie("ioMenuGiftClicked");
        if (ioMenuGiftClickedValue === "true") {
            courseType3Radio.checked = true;
        } else if (ioMenuGiftClickedValue === "demo") {
            courseType2Radio.checked = true;
        } else {
            // Если куки не установлено или значение неизвестно, активируем радиокнопку по умолчанию (courseType2Radio)
            courseType1Radio.checked = true;
        }

        // Сбрасываем куки
        deleteCookie("ioMenuGiftClicked");
    });
</script>