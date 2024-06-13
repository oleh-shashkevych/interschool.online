<?php
/**
 * Шаблон Цены - Демо
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Цены - Демо
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
                            <!-- Демо -->
                            <div class="io-price__detail-title-wrapper ">
                                <p class="io-price__detail-title">
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Ваш заказ'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Your order'; } ?>
                                    <span class="io-purple-main io-fw-semibold">"<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Пробные уроки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Demo lessons'; } ?>"</span>
                                </p>
                                <div id="ioDemoLessonsList"></div>
                            </div>
                            <!-- Демо -->
                            <div class="io-price__detail-item ">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Количество уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Number of lessons'; } ?></p>
                                <p id="ioDemoCount">2</p>
                            </div>
                            <div class="io-price__detail-item ">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Цена урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson price'; } ?></p>
                                <p><span id="ioDemoLessonPrice">2</span> <span class="io-currency__from-select">USD</span></p>
                            </div>
                            <div class="io-price__detail-item " id="ioDemoLessonSaleWrapper">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Скидка'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Discount'; } ?></p>
                                <p class="io-pink-main"><span id="ioDemoLessonSale">2</span> <span class="io-currency__from-select">USD</span></p>
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
                            <!-- Демо -->
                            <div class="io-price__detail-item io-last ">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'К оплате'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Total'; } ?></p>
                                <p><span id="ioDemoAmount">2</span> <span class="io-currency__from-select">USD</span></p>
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
                                <a class="io-price__fake active">
                                    <div></div>
                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Пробные уроки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Trial lessons'; } ?></p>
                                </a>
                                <a href="<?php echo get_permalink(106); ?>" class="io-price__fake">
                                    <div></div>
                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Подарочный сертификат'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Gift card'; } ?></p>
                                </a>
                            </form>
                        </div>
                        <!-- Демо -->
                        <div class="io-price__step ">
                            <div class="io-price__heading">
                                <span>2</span>
                                <p class="d-none d-sm-block"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Запишитесь на пробные уроки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Sign up for trial lessons'; } ?></p>
                                <p class="d-sm-none"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Записаться'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Sign up'; } ?></p>
                                <p class="io-price__heading-choosen d-none d-sm-block"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Выбрано уроков:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lessons selected:'; } ?> <span id="ioDemoCountInner">0</span></p>
                            </div>
                            <div class="io-price__heading-choosen d-sm-none">
                                <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Выбрано уроков:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lessons selected:'; } ?>
                                <div><span class="io-purple-main io-fs-20 io-fw-bold" id="ioDemoCountMobile">1</span></div>
                            </div>
                            <form>
                                <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                                <div class="io-accordion accordion io-price__accordion" id="ioDemoCourseCheck">
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioDemoCourseCheck-headingTwo">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseTwo" aria-expanded="true" aria-controls="ioDemoCourseCheck-collapseTwo">
                                                Музыка
                                            </button>
                                        </h2>
                                        <div id="ioDemoCourseCheck-collapseTwo" class="accordion-collapse collapse" aria-labelledby="ioDemoCourseCheck-headingTwo">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox21" name="checkbox-group">
                                                    <label for="iocheckbox21">Фортепиано</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox22" name="checkbox-group">
                                                    <label for="iocheckbox22">Вокал</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox23" name="checkbox-group">
                                                    <label for="iocheckbox23">Классическая гитара</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox24" name="checkbox-group">
                                                    <label for="iocheckbox24">Электрогитара</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox25" name="checkbox-group">
                                                    <label for="iocheckbox25">Укулеле</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox26" name="checkbox-group">
                                                    <label for="iocheckbox26">Бас-гитара</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox27" name="checkbox-group">
                                                    <label for="iocheckbox27">Барабаны</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox28" name="checkbox-group">
                                                    <label for="iocheckbox28">Скрипка</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox29" name="checkbox-group">
                                                    <label for="iocheckbox29">Саксофон</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox210" name="checkbox-group">
                                                    <label for="iocheckbox210">Флейта</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox211" name="checkbox-group">
                                                    <label for="iocheckbox211">Блокфлейта</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox212" name="checkbox-group">
                                                    <label for="iocheckbox212">Виолончель</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioDemoCourseCheck-headingOne">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseOne" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseOne">
                                                ИЗО
                                            </button>
                                        </h2>
                                        <div id="ioDemoCourseCheck-collapseOne" class="accordion-collapse collapse" aria-labelledby="ioDemoCourseCheck-headingOne">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox11" name="checkbox-group">
                                                    <label for="iocheckbox11">Живопись</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox12" name="checkbox-group">
                                                    <label for="iocheckbox12">Лепка и скульптура</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox13" name="checkbox-group">
                                                    <label for="iocheckbox13">Компьютерная графика</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox14" name="checkbox-group">
                                                    <label for="iocheckbox14">Кройка и шитьё</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox15" name="checkbox-group">
                                                    <label for="iocheckbox15">Мультипликация</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioDemoCourseCheck-headingFive">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseFive" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseFive">
                                                Танцы
                                            </button>
                                        </h2>
                                        <div id="ioDemoCourseCheck-collapseFive" class="accordion-collapse collapse" aria-labelledby="ioDemoCourseCheck-headingFive">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox51" name="checkbox-group">
                                                    <label for="iocheckbox51">Современные танцы</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox52" name="checkbox-group">
                                                    <label for="iocheckbox52">Балет</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox53" name="checkbox-group">
                                                    <label for="iocheckbox53">Йога</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioDemoCourseCheck-headingFour">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseFour" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseFour">
                                                Школа
                                            </button>
                                        </h2>
                                        <div id="ioDemoCourseCheck-collapseFour" class="accordion-collapse collapse" aria-labelledby="ioDemoCourseCheck-headingFour">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox41" name="checkbox-group">
                                                    <label for="iocheckbox41">Математика</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox42" name="checkbox-group">
                                                    <label for="iocheckbox42">Алгебра</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox43" name="checkbox-group">
                                                    <label for="iocheckbox43">Геометрия</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox44" name="checkbox-group">
                                                    <label for="iocheckbox44">Химия</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox45" name="checkbox-group">
                                                    <label for="iocheckbox45">Подготовка к школе</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioDemoCourseCheck-headingThree">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseThree" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseThree">
                                                Языки
                                            </button>
                                        </h2>
                                        <div id="ioDemoCourseCheck-collapseThree" class="accordion-collapse collapse" aria-labelledby="ioDemoCourseCheck-headingThree">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox31" name="checkbox-group">
                                                    <label for="iocheckbox31">Английский</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox32" name="checkbox-group">
                                                    <label for="iocheckbox32">Русский</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox33" name="checkbox-group">
                                                    <label for="iocheckbox33">Украинский</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox34" name="checkbox-group">
                                                    <label for="iocheckbox34">Испанский</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox35" name="checkbox-group">
                                                    <label for="iocheckbox35">Немецкий</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox36" name="checkbox-group">
                                                    <label for="iocheckbox36">Японский</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioDemoCourseCheck-headingSix">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseSix" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseSix">
                                                Прочее
                                            </button>
                                        </h2>
                                        <div id="ioDemoCourseCheck-collapseSix" class="accordion-collapse collapse" aria-labelledby="ioDemoCourseCheck-headingSix">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox61" name="checkbox-group">
                                                    <label for="iocheckbox61">Уроки логопеда</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                                <div class="io-accordion accordion io-price__accordion" id="ioDemoCourseCheck">
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioDemoCourseCheck-headingTwo">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseTwo" aria-expanded="true" aria-controls="ioDemoCourseCheck-collapseTwo">
                                                Music
                                            </button>
                                        </h2>
                                        <div id="ioDemoCourseCheck-collapseTwo" class="accordion-collapse collapse" aria-labelledby="ioDemoCourseCheck-headingTwo">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox21" name="checkbox-group">
                                                    <label for="iocheckbox21">Piano</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox22" name="checkbox-group">
                                                    <label for="iocheckbox22">Singing</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox23" name="checkbox-group">
                                                    <label for="iocheckbox23">Classical Guitar</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox24" name="checkbox-group">
                                                    <label for="iocheckbox24">Electric Guitar</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox25" name="checkbox-group">
                                                    <label for="iocheckbox25">Ukulele</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox26" name="checkbox-group">
                                                    <label for="iocheckbox26">Bass Guitar</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox27" name="checkbox-group">
                                                    <label for="iocheckbox27">Drums</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox28" name="checkbox-group">
                                                    <label for="iocheckbox28">Violin</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox29" name="checkbox-group">
                                                    <label for="iocheckbox29">Saxophone</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox210" name="checkbox-group">
                                                    <label for="iocheckbox210">Flute</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox211" name="checkbox-group">
                                                    <label for="iocheckbox211">Recorder</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox212" name="checkbox-group">
                                                    <label for="iocheckbox212">Cello</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioDemoCourseCheck-headingOne">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseOne" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseOne">
                                                Art
                                            </button>
                                        </h2>
                                        <div id="ioDemoCourseCheck-collapseOne" class="accordion-collapse collapse" aria-labelledby="ioDemoCourseCheck-headingOne">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox11" name="checkbox-group">
                                                    <label for="iocheckbox11">Painting</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox12" name="checkbox-group">
                                                    <label for="iocheckbox12">Modeling & Sculpture</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox13" name="checkbox-group">
                                                    <label for="iocheckbox13">Computer Graphics</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox14" name="checkbox-group">
                                                    <label for="iocheckbox14">Sewing</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox15" name="checkbox-group">
                                                    <label for="iocheckbox15">Animation</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioDemoCourseCheck-headingFive">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseFive" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseFive">
                                                Dances
                                            </button>
                                        </h2>
                                        <div id="ioDemoCourseCheck-collapseFive" class="accordion-collapse collapse" aria-labelledby="ioDemoCourseCheck-headingFive">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox51" name="checkbox-group">
                                                    <label for="iocheckbox51">Contemporary Dance</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox52" name="checkbox-group">
                                                    <label for="iocheckbox52">Ballet</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox53" name="checkbox-group">
                                                    <label for="iocheckbox53">Yoga</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioDemoCourseCheck-headingFour">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseFour" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseFour">
                                                School
                                            </button>
                                        </h2>
                                        <div id="ioDemoCourseCheck-collapseFour" class="accordion-collapse collapse" aria-labelledby="ioDemoCourseCheck-headingFour">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox41" name="checkbox-group">
                                                    <label for="iocheckbox41">Math</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox42" name="checkbox-group">
                                                    <label for="iocheckbox42">Algebra</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox43" name="checkbox-group">
                                                    <label for="iocheckbox43">Geometry</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox44" name="checkbox-group">
                                                    <label for="iocheckbox44">Chemistry</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox45" name="checkbox-group">
                                                    <label for="iocheckbox45">Pre-K & Kindergarten</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioDemoCourseCheck-headingThree">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseThree" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseThree">
                                                Languages
                                            </button>
                                        </h2>
                                        <div id="ioDemoCourseCheck-collapseThree" class="accordion-collapse collapse" aria-labelledby="ioDemoCourseCheck-headingThree">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox31" name="checkbox-group">
                                                    <label for="iocheckbox31">English</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox32" name="checkbox-group">
                                                    <label for="iocheckbox32">Russian</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox33" name="checkbox-group">
                                                    <label for="iocheckbox33">Ukrainian</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox34" name="checkbox-group">
                                                    <label for="iocheckbox34">Spanish</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox35" name="checkbox-group">
                                                    <label for="iocheckbox35">German</label>
                                                </div>
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox36" name="checkbox-group">
                                                    <label for="iocheckbox36">Japanese</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioDemoCourseCheck-headingSix">
                                            <button class="io-accordion__price-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseSix" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseSix">
                                                Other
                                            </button>
                                        </h2>
                                        <div id="ioDemoCourseCheck-collapseSix" class="accordion-collapse collapse" aria-labelledby="ioDemoCourseCheck-headingSix">
                                            <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                <div>
                                                    <input class="io-checkbox" type="checkbox" id="iocheckbox61" name="checkbox-group">
                                                    <label for="iocheckbox61">Speech Therapy Lessons</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </form>
                        </div>
                        <div class="io-price__step ">
                            <div class="io-price__heading">
                                <span>3</span>
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Заполните анкету студента'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Student form'; } ?></p>
                            </div>
                            <!-- <p class="d-sm-none io-price__surely"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Все поля обязательные'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'All fields are required'; } ?></p> -->
                            <form class="io-form">
                                <div class="io-form__item">
                                    <div class="io-form__item-header">
                                        <label><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Имя студента'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Student name'; } ?></label>
                                    </div>
                                    <input id="ioDemoName" onblur="cleanInput(this)" type="text" name="name" required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите имя студента'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter name'; } ?>">
                                    <div class="io-form__item-error">Пример ошибки</div>
                                </div>
                                <div class="io-form__item">
                                    <div class="io-form__item-header">
                                        <label><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Фамилия студента'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Student last name'; } ?></label>
                                    </div>
                                    <input id="ioDemoSurname" onblur="cleanInput(this)" type="text" name="name" required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите фамилию студента'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter last name'; } ?>">
                                </div>
                                <div class="io-form__item">
                                    <div class="io-form__item-header">
                                        <label><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Дата рождения студента'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Student\'s date of birth'; } ?></label>
                                    </div>
                                    <div class="io-form__item-col-3">
                                        <div class="io-select io-thin" id="ioDemoDay">
                                            <select aria-label="День">
                                                <option value="0" selected><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'День'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Day'; } ?></option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                        <div class="io-select io-thin" id="ioDemoMonth">
                                            <select aria-label="Месяц">
                                                <option value="0" selected><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Месяц'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Month'; } ?></option>
                                                <option value="1"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Январь'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'January'; } ?></option>
                                                <option value="2"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Февраль'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'February'; } ?></option>
                                                <option value="3"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Март'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'March'; } ?></option>
                                                <option value="4"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Апрель'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'April'; } ?></option>
                                                <option value="5"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Май'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'May'; } ?></option>
                                                <option value="6"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Июнь'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'June'; } ?></option>
                                                <option value="7"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Июль'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'July'; } ?></option>
                                                <option value="8"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Август'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'August'; } ?></option>
                                                <option value="9"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Сентябрь'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'September'; } ?></option>
                                                <option value="10"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Октябрь'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'October'; } ?></option>
                                                <option value="11"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Ноябрь'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'November'; } ?></option>
                                                <option value="12"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Декабрь'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'December'; } ?></option>
                                            </select>
                                        </div>
                                        <div class="io-select io-thin" id="ioCheckYear">
                                            <select aria-label="Год">
                                                <option value="0" selected=""><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Год'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Year'; } ?></option>
                                                <option value="2021">2021</option>
                                                <option value="2020">2020</option>
                                                <option value="2019">2019</option>
                                                <option value="2018">2018</option>
                                                <option value="2017">2017</option>
                                                <option value="2016">2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option>
                                                <option value="1989">1989</option>
                                                <option value="1988">1988</option>
                                                <option value="1987">1987</option>
                                                <option value="1986">1986</option>
                                                <option value="1985">1985</option>
                                                <option value="1984">1984</option>
                                                <option value="1983">1983</option>
                                                <option value="1982">1982</option>
                                                <option value="1981">1981</option>
                                                <option value="1980">1980</option>
                                                <option value="1979">1979</option>
                                                <option value="1978">1978</option>
                                                <option value="1977">1977</option>
                                                <option value="1976">1976</option>
                                                <option value="1975">1975</option>
                                                <option value="1974">1974</option>
                                                <option value="1973">1973</option>
                                                <option value="1972">1972</option>
                                                <option value="1971">1971</option>
                                                <option value="1970">1970</option>
                                                <option value="1969">1969</option>
                                                <option value="1968">1968</option>
                                                <option value="1967">1967</option>
                                                <option value="1966">1966</option>
                                                <option value="1965">1965</option>
                                                <option value="1964">1964</option>
                                                <option value="1963">1963</option>
                                                <option value="1962">1962</option>
                                                <option value="1961">1961</option>
                                                <option value="1960">1960</option>
                                                <option value="1959">1959</option>
                                                <option value="1958">1958</option>
                                                <option value="1957">1957</option>
                                                <option value="1956">1956</option>
                                                <option value="1955">1955</option>
                                                <option value="1954">1954</option>
                                                <option value="1953">1953</option>
                                                <option value="1952">1952</option>
                                                <option value="1951">1951</option>
                                                <option value="1950">1950</option>
                                                <option value="1949">1949</option>
                                                <option value="1948">1948</option>
                                                <option value="1947">1947</option>
                                                <option value="1946">1946</option>
                                                <option value="1945">1945</option>
                                                <option value="1944">1944</option>
                                                <option value="1943">1943</option>
                                                <option value="1942">1942</option>
                                                <option value="1941">1941</option>
                                                <option value="1940">1940</option>
                                                <option value="1939">1939</option>
                                                <option value="1938">1938</option>
                                                <option value="1937">1937</option>
                                                <option value="1936">1936</option>
                                                <option value="1935">1935</option>
                                                <option value="1934">1934</option>
                                                <option value="1933">1933</option>
                                                <option value="1932">1932</option>
                                                <option value="1931">1931</option>
                                                <option value="1930">1930</option>
                                                <option value="1929">1929</option>
                                                <option value="1928">1928</option>
                                                <option value="1927">1927</option>
                                                <option value="1926">1926</option>
                                                <option value="1925">1925</option>
                                                <option value="1924">1924</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="io-form__item" id="ioCheckParents">
                                    <div class="io-form__item-header">
                                        <label><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Если студенту меньше 18 лет'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'If the student is under 18 years old'; } ?></label>
                                    </div>
                                    <input type="text" id="ioDemoParent" name="name" required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите имя родителя'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter parent\'s name'; } ?>">
                                </div>
                                <div class="io-grid io-grid-gap-050">
                                    <div class="io-form__item-header">
                                        <label><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Номер телефона'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Phone number'; } ?></label>
                                    </div>
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                                    <div class="custom-select" id="iodemophoneValue">
                                        <div class="select-selected">+0</div>
                                        <input class="custom-input" id="iodemophone" onblur="cleanPhoneInput(this)" name="phone" type="phone" placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите номер телефона'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter phone number'; } ?>">
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
                                    <div class="custom-select" id="iodemophoneValue">
                                        <div class="select-selected">+0</div>
                                        <input class="custom-input" id="iodemophone" onblur="cleanPhoneInput(this)" name="phone" type="phone" placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите номер телефона'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter phone number'; } ?>">
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
                                    <input type="text" id="ioDemoEmail" class="io-email-input" onblur="cleanEmailInput(this)" required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите Email'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter your email'; } ?>">
                                </div>
                                <div class="io-form__item">
                                    <div class="io-form__item-header">
                                        <label><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Страна'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Country'; } ?></label>
                                    </div>
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                                    <div class="custom-select" id="ioDemoCountry">
                                        <div class="select-selected">+0</div>
                                        <div class="select-items">
                                            <input type="text" class="country-search" placeholder="Поиск...">
                                            <div data-value="США" data-country="US">США</div>
                                            <div data-value="Беларусь" data-country="BY">Беларусь</div>
                                            <div data-value="Великобритания" data-country="GB">Великобритания</div>
                                            <div data-value="Германия" data-country="DE">Германия</div>
                                            <div data-value="Казахстан" data-country="KZ">Казахстан</div>
                                            <div data-value="Россия" data-country="RU">Россия</div>
                                            <div data-value="Украина" data-country="UA">Украина</div>
                                            <div data-value="Франция" data-country="FR">Франция</div>
                                        </div>
                                    </div>
                                    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                                    <div class="custom-select" id="ioDemoCountry">
                                        <div class="select-selected">+0</div>
                                        <div class="select-items">
                                            <input type="text" class="country-search" placeholder="Search...">
                                            <div data-value="USA" data-country="US">USA</div>
                                            <div data-value="Belarus" data-country="BY">Belarus</div>
                                            <div data-value="France" data-country="FR">France</div>
                                            <div data-value="Germany" data-country="DE">Germany</div>
                                            <div data-value="Kazakhstan" data-country="KZ">Kazakhstan</div>
                                            <div data-value="Russia" data-country="RU">Russia</div>
                                            <div data-value="Ukraine" data-country="UA">Ukraine</div>
                                            <div data-value="United Kingdom" data-country="GB">United Kingdom</div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                <div class="io-form__item">
                                    <div class="io-form__item-header">
                                        <label><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Часовой пояс'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Timezone'; } ?></label>
                                    </div>
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                                    <div class="io-select io-thin" id="ioDemoHour">
                                        <select>
                                            <option value="0" selected>Выберите часовой пояс</option>
                                            <option value="US">America/Indiana/Tell_City</option>
                                            <option value="US">America/New_York</option>
                                            <option value="US">Pacific/Honolulu</option>
                                            <option value="US">America/Yakutat</option>
                                            <option value="US">America/Sitka</option>
                                            <option value="US">America/Phoenix</option>
                                            <option value="US">America/North_Dakota/New_Salem</option>
                                            <option value="US">America/North_Dakota/Center</option>
                                            <option value="US">America/North_Dakota/Beulah</option>
                                            <option value="US">America/Adak</option>
                                            <option value="US">America/Anchorage</option>
                                            <option value="US">America/Boise</option>
                                            <option value="US">America/Chicago</option>
                                            <option value="US">America/Denver</option>
                                            <option value="US">America/Detroit</option>
                                            <option value="US">America/Indiana/Indianapolis</option>
                                            <option value="US">America/Indiana/Knox</option>
                                            <option value="US">America/Indiana/Marengo</option>
                                            <option value="US">America/Indiana/Petersburg</option>
                                            <option value="US">America/Nome</option>
                                            <option value="US">America/Indiana/Vevay</option>
                                            <option value="US">America/Indiana/Vincennes</option>
                                            <option value="US">America/Indiana/Winamac</option>
                                            <option value="US">America/Juneau</option>
                                            <option value="US">America/Kentucky/Louisville</option>
                                            <option value="US">America/Kentucky/Monticello</option>
                                            <option value="US">America/Los_Angeles</option>
                                            <option value="US">America/Menominee</option>
                                            <option value="US">America/Metlakatla</option>
                                            <option value="BY">Europe/Minsk</option>
                                            <option value="GB">Europe/London</option>
                                            <option value="DE">Europe/Berlin</option>
                                            <option value="DE">Europe/Busingen</option>
                                            <option value="KZ">Asia/Almaty</option>
                                            <option value="KZ">Asia/Aqtau</option>
                                            <option value="KZ">Asia/Aqtobe</option>
                                            <option value="KZ">Asia/Atyrau</option>
                                            <option value="KZ">Asia/Oral</option>
                                            <option value="KZ">Asia/Qostanay</option>
                                            <option value="KZ">Asia/Qyzylorda</option>
                                            <option value="RU">Asia/Anadyr</option>
                                            <option value="RU">Asia/Barnaul</option>
                                            <option value="RU">Asia/Chita</option>
                                            <option value="RU">Asia/Irkutsk</option>
                                            <option value="RU">Asia/Kamchatka</option>
                                            <option value="RU">Asia/Khandyga</option>
                                            <option value="RU">Asia/Krasnoyarsk</option>
                                            <option value="RU">Asia/Magadan</option>
                                            <option value="RU">Asia/Novokuznetsk</option>
                                            <option value="RU">Asia/Novosibirsk</option>
                                            <option value="RU">Asia/Omsk</option>
                                            <option value="RU">Asia/Sakhalin</option>
                                            <option value="RU">Asia/Srednekolymsk</option>
                                            <option value="RU">Asia/Tomsk</option>
                                            <option value="RU">Asia/Ust-Nera</option>
                                            <option value="RU">Asia/Vladivostok</option>
                                            <option value="RU">Asia/Yakutsk</option>
                                            <option value="RU">Asia/Yekaterinburg</option>
                                            <option value="RU">Europe/Astrakhan</option>
                                            <option value="RU">Europe/Kaliningrad</option>
                                            <option value="RU">Europe/Kirov</option>
                                            <option value="RU">Europe/Moscow</option>
                                            <option value="RU">Europe/Samara</option>
                                            <option value="RU">Europe/Saratov</option>
                                            <option value="RU">Europe/Ulyanovsk</option>
                                            <option value="RU">Europe/Volgograd</option>
                                            <option value="UA">Europe/Simferopol</option>
                                            <option value="UA">Europe/Kyiv</option>
                                            <option value="FR">Europe/Paris</option>
                                        </select>
                                    </div>
                                    <?php } else if (ICL_LANGUAGE_CODE === 'en') { ?>
                                        <div class="io-select io-thin" id="ioDemoHour">                                            
                                        <select>
                                            <option value="0" selected>Выберите часовой пояс</option>
                                            <option value="US">America/Indiana/Tell_City</option>
                                            <option value="US">America/New_York</option>
                                            <option value="US">Pacific/Honolulu</option>
                                            <option value="US">America/Yakutat</option>
                                            <option value="US">America/Sitka</option>
                                            <option value="US">America/Phoenix</option>
                                            <option value="US">America/North_Dakota/New_Salem</option>
                                            <option value="US">America/North_Dakota/Center</option>
                                            <option value="US">America/North_Dakota/Beulah</option>
                                            <option value="US">America/Adak</option>
                                            <option value="US">America/Anchorage</option>
                                            <option value="US">America/Boise</option>
                                            <option value="US">America/Chicago</option>
                                            <option value="US">America/Denver</option>
                                            <option value="US">America/Detroit</option>
                                            <option value="US">America/Indiana/Indianapolis</option>
                                            <option value="US">America/Indiana/Knox</option>
                                            <option value="US">America/Indiana/Marengo</option>
                                            <option value="US">America/Indiana/Petersburg</option>
                                            <option value="US">America/Nome</option>
                                            <option value="US">America/Indiana/Vevay</option>
                                            <option value="US">America/Indiana/Vincennes</option>
                                            <option value="US">America/Indiana/Winamac</option>
                                            <option value="US">America/Juneau</option>
                                            <option value="US">America/Kentucky/Louisville</option>
                                            <option value="US">America/Kentucky/Monticello</option>
                                            <option value="US">America/Los_Angeles</option>
                                            <option value="US">America/Menominee</option>
                                            <option value="US">America/Metlakatla</option>
                                            <option value="BY">Europe/Minsk</option>
                                            <option value="GB">Europe/London</option>
                                            <option value="DE">Europe/Berlin</option>
                                            <option value="DE">Europe/Busingen</option>
                                            <option value="KZ">Asia/Almaty</option>
                                            <option value="KZ">Asia/Aqtau</option>
                                            <option value="KZ">Asia/Aqtobe</option>
                                            <option value="KZ">Asia/Atyrau</option>
                                            <option value="KZ">Asia/Oral</option>
                                            <option value="KZ">Asia/Qostanay</option>
                                            <option value="KZ">Asia/Qyzylorda</option>
                                            <option value="RU">Asia/Anadyr</option>
                                            <option value="RU">Asia/Barnaul</option>
                                            <option value="RU">Asia/Chita</option>
                                            <option value="RU">Asia/Irkutsk</option>
                                            <option value="RU">Asia/Kamchatka</option>
                                            <option value="RU">Asia/Khandyga</option>
                                            <option value="RU">Asia/Krasnoyarsk</option>
                                            <option value="RU">Asia/Magadan</option>
                                            <option value="RU">Asia/Novokuznetsk</option>
                                            <option value="RU">Asia/Novosibirsk</option>
                                            <option value="RU">Asia/Omsk</option>
                                            <option value="RU">Asia/Sakhalin</option>
                                            <option value="RU">Asia/Srednekolymsk</option>
                                            <option value="RU">Asia/Tomsk</option>
                                            <option value="RU">Asia/Ust-Nera</option>
                                            <option value="RU">Asia/Vladivostok</option>
                                            <option value="RU">Asia/Yakutsk</option>
                                            <option value="RU">Asia/Yekaterinburg</option>
                                            <option value="RU">Europe/Astrakhan</option>
                                            <option value="RU">Europe/Kaliningrad</option>
                                            <option value="RU">Europe/Kirov</option>
                                            <option value="RU">Europe/Moscow</option>
                                            <option value="RU">Europe/Samara</option>
                                            <option value="RU">Europe/Saratov</option>
                                            <option value="RU">Europe/Ulyanovsk</option>
                                            <option value="RU">Europe/Volgograd</option>
                                            <option value="UA">Europe/Simferopol</option>
                                            <option value="UA">Europe/Kyiv</option>
                                            <option value="FR">Europe/Paris</option>
                                        </select>
                                        </div>
                                    <?php } ?>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="io-d-desktop">
                        <!-- Абонемент -->
                        <div class="">
                            <div class="io-price__calculation-terms">
                                <p class="io-price__calculation-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Правила для <span class="io-fw-bold io-purple-main">Пробного урока</span>'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo '<span class="io-fw-bold io-purple-main">Trial lesson</span> rules'; } ?></p>
                                <div class="io-check io-check--start io-check--purple">
                                    <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Пробный урок проходит индивидуально и длится 45 минут'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'The trial lesson is individual and lasts 45 minutes'; } ?></span>
                                </div>
                                <div class="io-check io-check--start io-check--purple">
                                    <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Преподавание ведется на русском и английском языках'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Teaching is conducted in Russian and English languages'; } ?></span>
                                </div>
                                <div class="io-warning io-warning--start">
                                    <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Урок нельзя отменить менее чем за 24 часа до его начала'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson cannot be canceled less than 24 hours before it starts'; } ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="io-d-mobile">
                    <!-- Абонемент -->
                    <div class="">
                        <div class="io-price__calculation-terms">
                            <p class="io-price__calculation-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Правила для <span class="io-fw-bold io-purple-main">Пробного урока</span>'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo '<span class="io-fw-bold io-purple-main">Trial lesson</span> rules'; } ?></p>
                            <div class="io-check io-check--start io-check--purple">
                                <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Пробный урок проходит индивидуально и длится 45 минут'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'The trial lesson is individual and lasts 45 minutes'; } ?></span>
                            </div>
                            <div class="io-check io-check--start io-check--purple">
                                <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Преподавание ведется на русском и английском языках'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Teaching is conducted in Russian and English languages'; } ?></span>
                            </div>
                            <div class="io-warning io-warning--start">
                                <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Урок нельзя отменить менее чем за 24 часа до его начала'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson cannot be canceled less than 24 hours before it starts'; } ?></span>
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