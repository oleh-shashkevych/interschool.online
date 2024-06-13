<?php
/**
 * Шаблон Теста
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Шаблон Теста
 */

include 'templates/cta.php';
include 'templates/popular-courses.php';
include 'templates/montessori-work.php';
require_once 'merchant/paypal/config.php';

get_header(); // подключаем header.php ?>

<?php the_content(); // контент ?>

<style>
    .io-price__sidebar-inner {
        top: 25px;
    }
    
    .io-d-desktop {
        display: block;
    }
    
    .io-d-mobile {
        display: none;
    }

    @media(max-width: 1199.5px) {
        .io-price__sidebar-sticky {
            height: unset;
            overflow: unset;
            margin: unset;
            order: 2;
        }

        .io-pocket-options li *,
        .io-gift-options li * {
            pointer-events: none;
        }
    
        .io-d-desktop {
            display: none;
        }
        
        .io-d-mobile {
            display: block;
            order: 3;
            margin-top: var(--io-size-300);
        }

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
    }
</style>

<main>
    <div class="io-section-first">
        <div class="container-xxl io-container-mw">
            <div class="io-price__sidebar">
                <div class="io-price__sidebar-sticky">
                    <div class="io-price__sidebar-inner">
                        <div class="io-price__detail">
                            <!-- Абонемент -->
                            <div class="io-price__detail-title-wrapper io-abonement">
                                <p class="io-price__detail-title">
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Ваш заказ:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Your order:'; } ?>
                                    <span class="io-purple-main io-fw-semibold"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Абонемент'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Subscription'; } ?></span>
                                </p>
                            </div>
                            <!-- Демо -->
                            <div class="io-price__detail-title-wrapper io-demo">
                                <p class="io-price__detail-title">
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Ваш заказ:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Your order:'; } ?>
                                    <span class="io-purple-main io-fw-semibold" id="ioDemoLessonsListButton"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Пробные уроки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Demo lessons'; } ?></span>
                                </p>
                                <div id="ioDemoLessonsList"></div>
                            </div>
                            <!-- Подарочный -->
                            <div class="io-price__detail-title-wrapper io-gift">
                                <p class="io-price__detail-title">
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Ваш заказ:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Your order:'; } ?>
                                    <span class="io-purple-main io-fw-semibold"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Подарочный сертификат'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Gift card'; } ?></span>
                                </p>
                            </div>
                            <!-- Общий -->
                            <div class="io-price__detail-currency">
                                <div class="io-price__detail-item">
                                    <p class="io-purple-main"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Валюта платежа:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Payment currency:'; } ?></p>
                                </div>
                                <div class="io-select-currency">
                                    <span class="io-selected-currency" id="selectedCurrency">USD</span>
                                    <ul class="io-currency-options" id="currencyOptions">
                                        <li data-value="usd">USD</li>
                                        <li data-value="eur">EUR</li>
                                        <li data-value="uah">UAH</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Абонемент -->
                            <div class="io-price__detail-item io-abonement">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Количество уроков:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Number of lessons:'; } ?></p>
                                <p id="ioAbonementCount">1</p>
                            </div>
                            <div class="io-price__detail-item io-abonement">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Цена урока:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson price:'; } ?></p>
                                <p><span id="ioAbonementLessonPrice">1</span> <span class="io-currency__from-select">USD</span></p>
                            </div>
                            <div class="io-price__detail-item io-abonement" id="ioAbonementLessonSaleWrapper">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Сумма скидки:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Discount:'; } ?></p>
                                <p class="io-pink-main"><span id="ioAbonementLessonSale">1</span> <span class="io-currency__from-select">USD</span></p>
                            </div>
                            <!-- Демо -->
                            <div class="io-price__detail-item io-demo">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Количество уроков:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Number of lessons:'; } ?></p>
                                <p id="ioDemoCount">2</p>
                            </div>
                            <div class="io-price__detail-item io-demo">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Цена урока:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson price:'; } ?></p>
                                <p><span id="ioDemoLessonPrice">2</span> <span class="io-currency__from-select">USD</span></p>
                            </div>
                            <div class="io-price__detail-item io-demo" id="ioDemoLessonSaleWrapper">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Сумма скидки:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Discount:'; } ?></p>
                                <p class="io-pink-main"><span id="ioDemoLessonSale">2</span> <span class="io-currency__from-select">USD</span></p>
                            </div>
                            <!-- Подарочный -->
                            <div class="io-price__detail-item io-gift">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Количество уроков:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Number of lessons:'; } ?></p>
                                <p id="ioGiftCount">3</p>
                            </div>
                            <div class="io-price__detail-item io-gift">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Цена урока:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson price:'; } ?></p>
                                <p><span id="ioGiftLessonPrice">3</span> <span class="io-currency__from-select">USD</span></p>
                            </div>
                            <div class="io-price__detail-item io-gift" id="ioGiftLessonSaleWrapper">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Сумма скидки:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Discount:'; } ?></p>
                                <p class="io-pink-main"><span id="ioGiftLessonSale">3</span> <span class="io-currency__from-select">USD</span></p>
                            </div>
                            <!-- Общий -->
                            <div class="io-price__detail-item io-promo">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Промокод:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Promo code:'; } ?></p>
                                <div class="io-promo__inner io-form__item">
                                    <input type="text" spellcheck="false" placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите промокод'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter promo code'; } ?>">
                                    <button class="io-promo__check" onclick="ioPromoInnerCheck(this.parentElement)"></button>
                                    <button class="io-promo__button" onclick="ioPromoInnerToggleClass(this.parentElement)"></button>
                                </div>
                            </div>
                            <!-- Абонемент -->
                            <div class="io-price__detail-item io-last io-abonement">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Сумма к оплате:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Total:'; } ?></p>
                                <p><span id="ioAbonementAmount">1</span> <span class="io-currency__from-select">USD</span></p>
                            </div>
                            <!-- Демо -->
                            <div class="io-price__detail-item io-last io-demo">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Сумма к оплате:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Total:'; } ?></p>
                                <p><span id="ioDemoAmount">2</span> <span class="io-currency__from-select">USD</span></p>
                            </div>
                            <!-- Подарочный -->
                            <div class="io-price__detail-item io-last io-gift">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Сумма к оплате:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Total:'; } ?></p>
                                <p><span id="ioGiftAmount">3</span> <span class="io-currency__from-select">USD</span></p>
                            </div>
                            <!-- Общий -->
                            <div class="io-price__bottom">
                                <button type="button" class="io-price__button io-button__large" style="background-color: #FFC43A; border-color: #FFC43A; padding-top: 9px; padding-bottom: 9px;">                                    
                                    <picture>
                                        <source srcset="/wp-content/themes/interschooltemplate/images/io-paypal.webp" type="image/webp">
                                        <source srcset="/wp-content/themes/interschooltemplate/images/io-paypal.png" type="image/png">
                                        <img src="/wp-content/themes/interschooltemplate/images/io-paypal.png" alt="">
                                    </picture>
                                </button>
                                <button id="lessonButtonDisplay" type="button" class="io-price__button io-button__large">                                    
                                    <picture>
                                        <source srcset="/wp-content/themes/interschooltemplate/images/visamastercard.webp" type="image/webp">
                                        <source srcset="/wp-content/themes/interschooltemplate/images/visamastercard.png" type="image/png">
                                        <img src="/wp-content/themes/interschooltemplate/images/visamastercard.png" alt="">
                                    </picture>
                                </button>
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Подтверждая заказ, я принимаю условия:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'By confirming the order, I accept the terms of:'; } ?><br>
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo '<a class="io-link" href="/politika-konfidencialnosti/" target="_blank">Политики конфиденциальности</a> и <a class="io-link" href="/publichnaya-oferta/" target="_blank">Публичной оферты</a>'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo '<a class="io-link" href="/en/privacy-policy/" target="_blank">Privacy Policy</a> and <a class="io-link" href="/en/public-offer/" target="_blank">Public Offer</a>'; } ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="io-price__sidebar-content io-course-price pt-0">
                    <div class="io-flex-between d-flex align-items-center justify-content-between justify-content-sm-start">
                        <h2 class="io-heading-2"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Купить онлайн уроки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Buy Online Lessons'; } ?></h2>
                    </div>
                    <div class="io-warning io-warning--large">
                        <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Купленные уроки можно использовать для обучения на любых курсах'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Purchased lessons can be used for learning on any courses'; } ?></span>
                    </div>
                    <div class="io-price">
                        <div class="io-price__step io-price__first">
                            <div class="io-price__heading">
                                <span>1</span>
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Выбрать покупку'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Select purchase'; } ?></p>
                            </div>
                            <form autocomplete="off" id="ioTypeRadioCheck">
                                <div>
                                    <input class="io-radio" type="radio" id="ioCourseType1" name="radio-group" checked>
                                    <label for="ioCourseType1"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Абонемент'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Subscription'; } ?></label>
                                </div>
                                <div>
                                    <input class="io-radio" type="radio" id="ioCourseType2" name="radio-group">
                                    <label for="ioCourseType2"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Пробные уроки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Trial lessons'; } ?></label>
                                </div>
                                <div>
                                    <input class="io-radio" type="radio" id="ioCourseType3" name="radio-group">
                                    <label for="ioCourseType3"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Подарочный сертификат'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Gift card'; } ?></label>
                                </div>
                            </form>
                        </div>
                        <!-- Абонемент -->
                        <div class="io-price__step io-abonement">
                            <div class="io-price__heading">
                                <span>2</span>
                                <p class="d-none d-sm-block"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Выбрать количество уроков в абонементе'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Choose the number of lessons in the subscription'; } ?></p>
                                <p class="d-sm-none"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Количество уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Number of lessons'; } ?></p>
                            </div>
                            <form>
                                <div class="io-form__item d-sm-none">
                                    <div class="io-form__item-header">
                                        <label><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Уроков в абонементе'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lessons in the subscription'; } ?></label>
                                    </div>
                                    <div class="io-select-pocket" id="ioAbonementSelect">
                                        <div class="io-selected-pocket"><span id="ioAbonementDropdownLessonCount">8</span> <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main" id="ioAbonementDropdownLessonAmount">112</span> <span class="io-currency__from-select">USD</span></div>
                                        <ul class="io-pocket-options" id="ioAbonementOptions">
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
                                        <div class="io-range__lesson">4</div>
                                        <div class="io-range__lesson active">8</div>
                                        <div class="io-range__lesson">12</div>
                                        <div class="io-range__lesson">16</div>
                                        <div class="io-range__lesson">24</div>
                                        <div class="io-range__lesson">32</div>
                                        <div class="io-range__lesson">80</div>
                                        <div class="io-range__lesson">120</div>
                                        <div class="io-range__lesson">160</div>
                                    </div>
                                    <div class="io-range__circles">
                                        <div class="io-range__circle active">
                                            <div></div>
                                        </div>
                                        <div class="io-range__circle">
                                            <div></div>
                                        </div>
                                        <div class="io-range__circle">
                                            <div></div>
                                        </div>
                                        <div class="io-range__circle">
                                            <div></div>
                                        </div>
                                        <div class="io-range__circle">
                                            <div></div>
                                        </div>
                                        <div class="io-range__circle">
                                            <div></div>
                                        </div>
                                        <div class="io-range__circle">
                                            <div></div>
                                        </div>
                                        <div class="io-range__circle">
                                            <div></div>
                                        </div>
                                        <div class="io-range__circle">
                                            <div></div>
                                        </div>
                                    </div>
                                    <input class="io-range" type="range" id="ioAmountRange" min="1" max="9" value="2">
                                </div>
                                <div class="io-range__sale d-none d-sm-flex"><span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'скидки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'discounts'; } ?></span></div>
                            </form>
                        </div>
                        <div class="io-price__step io-abonement">
                            <div class="io-price__heading">
                                <span>3</span>
                                <p class="d-none d-sm-block"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Ваши контактные данные'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Your contact information'; } ?></p>
                                <p class="d-sm-none"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Контактные данные'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Contact information'; } ?></p>
                                <p></p>
                            </div>
                            <form action="" class="io-form">
                                <div class="io-form__item">
                                    <div class="io-form__item-header">
                                        <label><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Имя и фамилия студента'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Student\'s first and last name'; } ?></label>
                                    </div>
                                    <input id="ioAbonementName" name="name" onblur="cleanInput(this)" type="text" required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите имя и фамилию'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter first and last name'; } ?>">
                                </div>
                                <div class="io-grid io-grid-gap-050">
                                    <div class="io-form__item-header">
                                        <label><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Номер телефона'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Phone number'; } ?></label>
                                    </div>
                                    <div class="custom-select" id="iopocketphonelabel">
                                        <div class="select-selected">+0</div>
                                        <input class="custom-input" id="iopocketphone" onblur="cleanPhoneInput(this)" name="phone" type="phone" placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите номер телефона'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter phone number'; } ?>">
                                        <div class="select-items">
                                            <input type="text" class="country-search" placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Поиск...'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Search...'; } ?>">
                                            <div data-value="+1" data-country="US"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'США'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'USA'; } ?> <span>+1</span></div>
                                            <div data-value="+380" data-country="UA"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Украина'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Ukraine'; } ?> <span>+380</span></div>
                                            <div data-value="+7" data-country="RU"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Россия'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Russia'; } ?> <span>+7</span></div>
                                            <div data-value="+7" data-country="KZ"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Казахстан'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Kazakhstan'; } ?> <span>+7</span></div>
                                            <div data-value="+375" data-country="BY"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Беларусь'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Belarus'; } ?> <span>+375</span></div>

                                            <div data-value="+44" data-country="GB"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Великобритания'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'United Kingdom'; } ?> <span>+44</span></div>
                                            <div data-value="+49" data-country="DE"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Германия'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Germany'; } ?> <span>+49</span></div>
                                            <div data-value="+33" data-country="FR"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Франция'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'France'; } ?> <span>+33</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="io-form__item">
                                    <div class="io-form__item-header">
                                        <label>Email</label>
                                    </div>
                                    <input id="ioAbonementEmail" onblur="cleanEmailInput(this)" class="io-email-input" type="text" required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите email'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter your email'; } ?>">
                                </div>
                            </form>
                        </div>
                        <!-- Демо -->
                        <div class="io-price__step io-demo">
                            <div class="io-price__heading">
                                <span>2</span>
                                <p class="d-none d-sm-block"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Записаться на пробные уроки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Sign up for trial lessons'; } ?></p>
                                <p class="d-sm-none"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Записаться'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Sign up'; } ?></p>
                                <p class="io-price__heading-choosen d-none d-sm-block"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Выбрано:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Selected:'; } ?> <span id="ioDemoCountInner">0</span></p>
                            </div>
                            <div class="io-price__heading-choosen d-sm-none">
                                <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Выбрано:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Selected:'; } ?>
                                <div><span id="ioDemoCountMobile">1</span> <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'урок'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lesson'; } ?> / <span class="io-purple-main" id="ioDemoAmountMobile">6</span> <span class="io-currency__from-select">USD</span></div>
                            </div>
                            <form>
                                <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                                <div class="io-accordion accordion io-price__accordion" id="ioDemoCourseCheck">
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="ioDemoCourseCheck-headingTwo">
                                            <button class="io-accordion__price-button accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseTwo" aria-expanded="true" aria-controls="ioDemoCourseCheck-collapseTwo">
                                                Музыка
                                            </button>
                                        </h2>
                                        <div id="ioDemoCourseCheck-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="ioDemoCourseCheck-headingTwo">
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
                                            <button class="io-accordion__price-button accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseTwo" aria-expanded="true" aria-controls="ioDemoCourseCheck-collapseTwo">
                                                Music
                                            </button>
                                        </h2>
                                        <div id="ioDemoCourseCheck-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="ioDemoCourseCheck-headingTwo">
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
                        <div class="io-price__step io-demo">
                            <div class="io-price__heading">
                                <span>3</span>
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Анкета студента'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Student form'; } ?></p>
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
                                    <div class="custom-select" id="iodemophoneValue">
                                        <div class="select-selected">+0</div>
                                        <input class="custom-input" id="iodemophone" onblur="cleanPhoneInput(this)" name="phone" type="phone" placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите номер телефона'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter phone number'; } ?>">
                                        <div class="select-items">
                                            <input type="text" class="country-search" placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Поиск...'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Search...'; } ?>">
                                            <div data-value="+1" data-country="US"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'США'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'USA'; } ?> <span>+1</span></div>
                                            <div data-value="+380" data-country="UA"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Украина'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Ukraine'; } ?> <span>+380</span></div>
                                            <div data-value="+7" data-country="RU"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Россия'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Russia'; } ?> <span>+7</span></div>
                                            <div data-value="+7" data-country="KZ"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Казахстан'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Kazakhstan'; } ?> <span>+7</span></div>
                                            <div data-value="+375" data-country="BY"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Беларусь'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Belarus'; } ?> <span>+375</span></div>

                                            <div data-value="+44" data-country="GB"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Великобритания'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'United Kingdom'; } ?> <span>+44</span></div>
                                            <div data-value="+49" data-country="DE"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Германия'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Germany'; } ?> <span>+49</span></div>
                                            <div data-value="+33" data-country="FR"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Франция'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'France'; } ?> <span>+33</span></div>
                                            <!-- Добавьте сюда больше стран по вашему выбору -->
                                        </div>
                                    </div>
                                </div>
                                <div class="io-form__item">
                                    <div class="io-form__item-header">
                                        <label>Email</label>
                                    </div>
                                    <input type="text" id="ioDemoEmail" class="io-email-input" onblur="cleanEmailInput(this)" required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите Email'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter your email'; } ?>">
                                </div>
                                <div class="io-form__item">
                                    <div class="io-form__item-header">
                                        <label><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Часовой пояс'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Timezone'; } ?></label>
                                    </div>
                                    <div class="io-select io-thin" id="ioDemoHour">
                                        <select>
                                            <option value="0" selected><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Выберите часовой пояс'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Select time zone'; } ?></option>
                                            <option value="Antarctica/Macquarie">Antarctica/Macquarie</option>
                                            <option value="Australia/Adelaide">Australia/Adelaide</option>
                                            <option value="Australia/Brisbane">Australia/Brisbane</option>
                                            <option value="Australia/Broken_Hill">Australia/Broken_Hill</option>
                                            <option value="Australia/Darwin">Australia/Darwin</option>
                                            <option value="Australia/Eucla">Australia/Eucla</option>
                                            <option value="Australia/Hobart">Australia/Hobart</option>
                                            <option value="Australia/Lindeman">Australia/Lindeman</option>
                                            <option value="Australia/Lord_Howe">Australia/Lord_Howe</option>
                                            <option value="Australia/Melbourne">Australia/Melbourne</option>
                                            <option value="Australia/Perth">Australia/Perth</option>
                                            <option value="Australia/Sydney">Australia/Sydney</option>
                                            <option value="Europe/Vienna">Europe/Vienna</option>
                                            <option value="Asia/Baku">Asia/Baku</option>
                                            <option value="Europe/Tirane">Europe/Tirane</option>
                                            <option value="Africa/Algiers">Africa/Algiers</option>
                                            <option value="Pacific/Pago_Pago">Pacific/Pago_Pago</option>
                                            <option value="America/Anguilla">America/Anguilla</option>
                                            <option value="Africa/Luanda">Africa/Luanda</option>
                                            <option value="Europe/Andorra">Europe/Andorra</option>
                                            <option value="Antarctica/Casey">Antarctica/Casey</option>
                                            <option value="Antarctica/Davis">Antarctica/Davis</option>
                                            <option value="Antarctica/DumontDUrville">Antarctica/DumontDUrville</option>
                                            <option value="Antarctica/Mawson">Antarctica/Mawson</option>
                                            <option value="Antarctica/McMurdo">Antarctica/McMurdo</option>
                                            <option value="Antarctica/Palmer">Antarctica/Palmer</option>
                                            <option value="Antarctica/Rothera">Antarctica/Rothera</option>
                                            <option value="Antarctica/Syowa">Antarctica/Syowa</option>
                                            <option value="Antarctica/Troll">Antarctica/Troll</option>
                                            <option value="Antarctica/Vostok">Antarctica/Vostok</option>
                                            <option value="America/Antigua">America/Antigua</option>
                                            <option value="America/Argentina/Buenos_Aires">America/Argentina/Buenos_Aires</option>
                                            <option value="America/Argentina/Catamarca">America/Argentina/Catamarca</option>
                                            <option value="America/Argentina/Cordoba">America/Argentina/Cordoba</option>
                                            <option value="America/Argentina/Jujuy">America/Argentina/Jujuy</option>
                                            <option value="America/Argentina/La_Rioja">America/Argentina/La_Rioja</option>
                                            <option value="America/Argentina/Mendoza">America/Argentina/Mendoza</option>
                                            <option value="America/Argentina/Rio_Gallegos">America/Argentina/Rio_Gallegos</option>
                                            <option value="America/Argentina/Salta">America/Argentina/Salta</option>
                                            <option value="America/Argentina/San_Juan">America/Argentina/San_Juan</option>
                                            <option value="America/Argentina/San_Luis">America/Argentina/San_Luis</option>
                                            <option value="America/Argentina/Tucuman">America/Argentina/Tucuman</option>
                                            <option value="America/Argentina/Ushuaia">America/Argentina/Ushuaia</option>
                                            <option value="Asia/Yerevan">Asia/Yerevan</option>
                                            <option value="America/Aruba">America/Aruba</option>
                                            <option value="Asia/Kabul">Asia/Kabul</option>
                                            <option value="America/Nassau">America/Nassau</option>
                                            <option value="Asia/Dhaka">Asia/Dhaka</option>
                                            <option value="America/Barbados">America/Barbados</option>
                                            <option value="Asia/Bahrain">Asia/Bahrain</option>
                                            <option value="Europe/Minsk">Europe/Minsk</option>
                                            <option value="America/Belize">America/Belize</option>
                                            <option value="Europe/Brussels">Europe/Brussels</option>
                                            <option value="Africa/Porto-Novo">Africa/Porto-Novo</option>
                                            <option value="Atlantic/Bermuda">Atlantic/Bermuda</option>
                                            <option value="Europe/Sofia">Europe/Sofia</option>
                                            <option value="America/La_Paz">America/La_Paz</option>
                                            <option value="America/Kralendijk">America/Kralendijk</option>
                                            <option value="Europe/Sarajevo">Europe/Sarajevo</option>
                                            <option value="Africa/Gaborone">Africa/Gaborone</option>
                                            <option value="America/Araguaina">America/Araguaina</option>
                                            <option value="America/Bahia">America/Bahia</option>
                                            <option value="America/Belem">America/Belem</option>
                                            <option value="America/Boa_Vista">America/Boa_Vista</option>
                                            <option value="America/Campo_Grande">America/Campo_Grande</option>
                                            <option value="America/Cuiaba">America/Cuiaba</option>
                                            <option value="America/Eirunepe">America/Eirunepe</option>
                                            <option value="America/Fortaleza">America/Fortaleza</option>
                                            <option value="America/Maceio">America/Maceio</option>
                                            <option value="America/Manaus">America/Manaus</option>
                                            <option value="America/Noronha">America/Noronha</option>
                                            <option value="America/Porto_Velho">America/Porto_Velho</option>
                                            <option value="America/Recife">America/Recife</option>
                                            <option value="America/Rio_Branco">America/Rio_Branco</option>
                                            <option value="America/Santarem">America/Santarem</option>
                                            <option value="America/Sao_Paulo">America/Sao_Paulo</option>
                                            <option value="Indian/Chagos">Indian/Chagos</option>
                                            <option value="Asia/Brunei">Asia/Brunei</option>
                                            <option value="Africa/Ouagadougou">Africa/Ouagadougou</option>
                                            <option value="Africa/Bujumbura">Africa/Bujumbura</option>
                                            <option value="Asia/Thimphu">Asia/Thimphu</option>
                                            <option value="Pacific/Efate">Pacific/Efate</option>
                                            <option value="Europe/Budapest">Europe/Budapest</option>
                                            <option value="America/Caracas">America/Caracas</option>
                                            <option value="America/Tortola">America/Tortola</option>
                                            <option value="America/St_Thomas">America/St_Thomas</option>
                                            <option value="Asia/Ho_Chi_Minh">Asia/Ho_Chi_Minh</option>
                                            <option value="Africa/Libreville">Africa/Libreville</option>
                                            <option value="America/Port-au-Prince">America/Port-au-Prince</option>
                                            <option value="America/Guyana">America/Guyana</option>
                                            <option value="Africa/Banjul">Africa/Banjul</option>
                                            <option value="Africa/Accra">Africa/Accra</option>
                                            <option value="America/Guadeloupe">America/Guadeloupe</option>
                                            <option value="America/Guatemala">America/Guatemala</option>
                                            <option value="Africa/Conakry">Africa/Conakry</option>
                                            <option value="Africa/Bissau">Africa/Bissau</option>
                                            <option value="Europe/Berlin">Europe/Berlin</option>
                                            <option value="Europe/Busingen">Europe/Busingen</option>
                                            <option value="Europe/Guernsey">Europe/Guernsey</option>
                                            <option value="Europe/Gibraltar">Europe/Gibraltar</option>
                                            <option value="America/Tegucigalpa">America/Tegucigalpa</option>
                                            <option value="Asia/Hong_Kong">Asia/Hong_Kong</option>
                                            <option value="America/Grenada">America/Grenada</option>
                                            <option value="America/Danmarkshavn">America/Danmarkshavn</option>
                                            <option value="America/Nuuk">America/Nuuk</option>
                                            <option value="America/Scoresbysund">America/Scoresbysund</option>
                                            <option value="America/Thule">America/Thule</option>
                                            <option value="Europe/Athens">Europe/Athens</option>
                                            <option value="Asia/Tbilisi">Asia/Tbilisi</option>
                                            <option value="Pacific/Guam">Pacific/Guam</option>
                                            <option value="Europe/Copenhagen">Europe/Copenhagen</option>
                                            <option value="Europe/Jersey">Europe/Jersey</option>
                                            <option value="Africa/Djibouti">Africa/Djibouti</option>
                                            <option value="America/Dominica">America/Dominica</option>
                                            <option value="America/Santo_Domingo">America/Santo_Domingo</option>
                                            <option value="Africa/Cairo">Africa/Cairo</option>
                                            <option value="Africa/Lusaka">Africa/Lusaka</option>
                                            <option value="Africa/Harare">Africa/Harare</option>
                                            <option value="Asia/Jerusalem">Asia/Jerusalem</option>
                                            <option value="Asia/Kolkata">Asia/Kolkata</option>
                                            <option value="Asia/Jakarta">Asia/Jakarta</option>
                                            <option value="Asia/Jayapura">Asia/Jayapura</option>
                                            <option value="Asia/Makassar">Asia/Makassar</option>
                                            <option value="Asia/Pontianak">Asia/Pontianak</option>
                                            <option value="Asia/Amman">Asia/Amman</option>
                                            <option value="Asia/Baghdad">Asia/Baghdad</option>
                                            <option value="Asia/Tehran">Asia/Tehran</option>
                                            <option value="Europe/Dublin">Europe/Dublin</option>
                                            <option value="Atlantic/Reykjavik">Atlantic/Reykjavik</option>
                                            <option value="Africa/Ceuta">Africa/Ceuta</option>
                                            <option value="Atlantic/Canary">Atlantic/Canary</option>
                                            <option value="Europe/Madrid">Europe/Madrid</option>
                                            <option value="Europe/Rome">Europe/Rome</option>
                                            <option value="Asia/Aden">Asia/Aden</option>
                                            <option value="Atlantic/Cape_Verde">Atlantic/Cape_Verde</option>
                                            <option value="Asia/Almaty">Asia/Almaty</option>
                                            <option value="Asia/Aqtau">Asia/Aqtau</option>
                                            <option value="Asia/Aqtobe">Asia/Aqtobe</option>
                                            <option value="Asia/Atyrau">Asia/Atyrau</option>
                                            <option value="Asia/Oral">Asia/Oral</option>
                                            <option value="Asia/Qostanay">Asia/Qostanay</option>
                                            <option value="Asia/Qyzylorda">Asia/Qyzylorda</option>
                                            <option value="Asia/Phnom_Penh">Asia/Phnom_Penh</option>
                                            <option value="Africa/Douala">Africa/Douala</option>
                                            <option value="America/Atikokan">America/Atikokan</option>
                                            <option value="America/Blanc-Sablon">America/Blanc-Sablon</option>
                                            <option value="America/Cambridge_Bay">America/Cambridge_Bay</option>
                                            <option value="America/Creston">America/Creston</option>
                                            <option value="America/Dawson">America/Dawson</option>
                                            <option value="America/Dawson_Creek">America/Dawson_Creek</option>
                                            <option value="America/Edmonton">America/Edmonton</option>
                                            <option value="America/Fort_Nelson">America/Fort_Nelson</option>
                                            <option value="America/Glace_Bay">America/Glace_Bay</option>
                                            <option value="America/Goose_Bay">America/Goose_Bay</option>
                                            <option value="America/Halifax">America/Halifax</option>
                                            <option value="America/Inuvik">America/Inuvik</option>
                                            <option value="America/Iqaluit">America/Iqaluit</option>
                                            <option value="America/Moncton">America/Moncton</option>
                                            <option value="America/Pangnirtung">America/Pangnirtung</option>
                                            <option value="America/Rankin_Inlet">America/Rankin_Inlet</option>
                                            <option value="America/Regina">America/Regina</option>
                                            <option value="America/Resolute">America/Resolute</option>
                                            <option value="America/St_Johns">America/St_Johns</option>
                                            <option value="America/Swift_Current">America/Swift_Current</option>
                                            <option value="America/Toronto">America/Toronto</option>
                                            <option value="America/Vancouver">America/Vancouver</option>
                                            <option value="America/Whitehorse">America/Whitehorse</option>
                                            <option value="America/Winnipeg">America/Winnipeg</option>
                                            <option value="America/Yellowknife">America/Yellowknife</option>
                                            <option value="Asia/Qatar">Asia/Qatar</option>
                                            <option value="Africa/Nairobi">Africa/Nairobi</option>
                                            <option value="Asia/Famagusta">Asia/Famagusta</option>
                                            <option value="Asia/Nicosia">Asia/Nicosia</option>
                                            <option value="Asia/Bishkek">Asia/Bishkek</option>
                                            <option value="Pacific/Kiritimati">Pacific/Kiritimati</option>
                                            <option value="Pacific/Tarawa">Pacific/Tarawa</option>
                                            <option value="Pacific/Kanton">Pacific/Kanton</option>
                                            <option value="Asia/Shanghai">Asia/Shanghai</option>
                                            <option value="Asia/Urumqi">Asia/Urumqi</option>
                                            <option value="Indian/Cocos">Indian/Cocos</option>
                                            <option value="America/Bogota">America/Bogota</option>
                                            <option value="Indian/Comoro">Indian/Comoro</option>
                                            <option value="Africa/Brazzaville">Africa/Brazzaville</option>
                                            <option value="Africa/Kinshasa">Africa/Kinshasa</option>
                                            <option value="Africa/Lubumbashi">Africa/Lubumbashi</option>
                                            <option value="Asia/Pyongyang">Asia/Pyongyang</option>
                                            <option value="Asia/Seoul">Asia/Seoul</option>
                                            <option value="America/Costa_Rica">America/Costa_Rica</option>
                                            <option value="Africa/Abidjan">Africa/Abidjan</option>
                                            <option value="America/Havana">America/Havana</option>
                                            <option value="Asia/Kuwait">Asia/Kuwait</option>
                                            <option value="America/Curacao">America/Curacao</option>
                                            <option value="Asia/Vientiane">Asia/Vientiane</option>
                                            <option value="Europe/Riga">Europe/Riga</option>
                                            <option value="Africa/Maseru">Africa/Maseru</option>
                                            <option value="Africa/Monrovia">Africa/Monrovia</option>
                                            <option value="Asia/Beirut">Asia/Beirut</option>
                                            <option value="Africa/Tripoli">Africa/Tripoli</option>
                                            <option value="Europe/Vilnius">Europe/Vilnius</option>
                                            <option value="Europe/Vaduz">Europe/Vaduz</option>
                                            <option value="Europe/Luxembourg">Europe/Luxembourg</option>
                                            <option value="Indian/Mauritius">Indian/Mauritius</option>
                                            <option value="Africa/Nouakchott">Africa/Nouakchott</option>
                                            <option value="Indian/Antananarivo">Indian/Antananarivo</option>
                                            <option value="Indian/Mayotte">Indian/Mayotte</option>
                                            <option value="Asia/Macau">Asia/Macau</option>
                                            <option value="Africa/Blantyre">Africa/Blantyre</option>
                                            <option value="Asia/Kuala_Lumpur">Asia/Kuala_Lumpur</option>
                                            <option value="Asia/Kuching">Asia/Kuching</option>
                                            <option value="Africa/Bamako">Africa/Bamako</option>
                                            <option value="Pacific/Wake">Pacific/Wake</option>
                                            <option value="Pacific/Midway">Pacific/Midway</option>
                                            <option value="Indian/Maldives">Indian/Maldives</option>
                                            <option value="Europe/Malta">Europe/Malta</option>
                                            <option value="Africa/Casablanca">Africa/Casablanca</option>
                                            <option value="Africa/El_Aaiun">Africa/El_Aaiun</option>
                                            <option value="America/Martinique">America/Martinique</option>
                                            <option value="Pacific/Kwajalein">Pacific/Kwajalein</option>
                                            <option value="Pacific/Majuro">Pacific/Majuro</option>
                                            <option value="America/Bahia_Banderas">America/Bahia_Banderas</option>
                                            <option value="America/Cancun">America/Cancun</option>
                                            <option value="America/Chihuahua">America/Chihuahua</option>
                                            <option value="America/Hermosillo">America/Hermosillo</option>
                                            <option value="America/Matamoros">America/Matamoros</option>
                                            <option value="America/Mazatlan">America/Mazatlan</option>
                                            <option value="America/Merida">America/Merida</option>
                                            <option value="America/Mexico_City">America/Mexico_City</option>
                                            <option value="America/Monterrey">America/Monterrey</option>
                                            <option value="America/Ojinaga">America/Ojinaga</option>
                                            <option value="America/Tijuana">America/Tijuana</option>
                                            <option value="Pacific/Chuuk">Pacific/Chuuk</option>
                                            <option value="Pacific/Kosrae">Pacific/Kosrae</option>
                                            <option value="Pacific/Pohnpei">Pacific/Pohnpei</option>
                                            <option value="Africa/Maputo">Africa/Maputo</option>
                                            <option value="Europe/Chisinau">Europe/Chisinau</option>
                                            <option value="Europe/Monaco">Europe/Monaco</option>
                                            <option value="Asia/Choibalsan">Asia/Choibalsan</option>
                                            <option value="Asia/Hovd">Asia/Hovd</option>
                                            <option value="Asia/Ulaanbaatar">Asia/Ulaanbaatar</option>
                                            <option value="America/Montserrat">America/Montserrat</option>
                                            <option value="Asia/Yangon">Asia/Yangon</option>
                                            <option value="Africa/Windhoek">Africa/Windhoek</option>
                                            <option value="Pacific/Nauru">Pacific/Nauru</option>
                                            <option value="Asia/Kathmandu">Asia/Kathmandu</option>
                                            <option value="Africa/Niamey">Africa/Niamey</option>
                                            <option value="Africa/Lagos">Africa/Lagos</option>
                                            <option value="Europe/Amsterdam">Europe/Amsterdam</option>
                                            <option value="America/Managua">America/Managua</option>
                                            <option value="Pacific/Niue">Pacific/Niue</option>
                                            <option value="Pacific/Auckland">Pacific/Auckland</option>
                                            <option value="Pacific/Chatham">Pacific/Chatham</option>
                                            <option value="Pacific/Noumea">Pacific/Noumea</option>
                                            <option value="Europe/Oslo">Europe/Oslo</option>
                                            <option value="Asia/Dubai">Asia/Dubai</option>
                                            <option value="Asia/Muscat">Asia/Muscat</option>
                                            <option value="Europe/Isle_of_Man">Europe/Isle_of_Man</option>
                                            <option value="Pacific/Norfolk">Pacific/Norfolk</option>
                                            <option value="Indian/Christmas">Indian/Christmas</option>
                                            <option value="America/Cayman">America/Cayman</option>
                                            <option value="Pacific/Rarotonga">Pacific/Rarotonga</option>
                                            <option value="America/Grand_Turk">America/Grand_Turk</option>
                                            <option value="Asia/Karachi">Asia/Karachi</option>
                                            <option value="Pacific/Palau">Pacific/Palau</option>
                                            <option value="Asia/Gaza">Asia/Gaza</option>
                                            <option value="Asia/Hebron">Asia/Hebron</option>
                                            <option value="America/Panama">America/Panama</option>
                                            <option value="Europe/Vatican">Europe/Vatican</option>
                                            <option value="Pacific/Bougainville">Pacific/Bougainville</option>
                                            <option value="Pacific/Port_Moresby">Pacific/Port_Moresby</option>
                                            <option value="America/Asuncion">America/Asuncion</option>
                                            <option value="America/Lima">America/Lima</option>
                                            <option value="Pacific/Pitcairn">Pacific/Pitcairn</option>
                                            <option value="Europe/Warsaw">Europe/Warsaw</option>
                                            <option value="Atlantic/Azores">Atlantic/Azores</option>
                                            <option value="Atlantic/Madeira">Atlantic/Madeira</option>
                                            <option value="Europe/Lisbon">Europe/Lisbon</option>
                                            <option value="America/Puerto_Rico">America/Puerto_Rico</option>
                                            <option value="Indian/Reunion">Indian/Reunion</option>
                                            <option value="Asia/Anadyr">Asia/Anadyr</option>
                                            <option value="Asia/Barnaul">Asia/Barnaul</option>
                                            <option value="Asia/Chita">Asia/Chita</option>
                                            <option value="Asia/Irkutsk">Asia/Irkutsk</option>
                                            <option value="Asia/Kamchatka">Asia/Kamchatka</option>
                                            <option value="Asia/Khandyga">Asia/Khandyga</option>
                                            <option value="Asia/Krasnoyarsk">Asia/Krasnoyarsk</option>
                                            <option value="Asia/Magadan">Asia/Magadan</option>
                                            <option value="Asia/Novokuznetsk">Asia/Novokuznetsk</option>
                                            <option value="Asia/Novosibirsk">Asia/Novosibirsk</option>
                                            <option value="Asia/Omsk">Asia/Omsk</option>
                                            <option value="Asia/Sakhalin">Asia/Sakhalin</option>
                                            <option value="Asia/Srednekolymsk">Asia/Srednekolymsk</option>
                                            <option value="Asia/Tomsk">Asia/Tomsk</option>
                                            <option value="Asia/Ust-Nera">Asia/Ust-Nera</option>
                                            <option value="Asia/Vladivostok">Asia/Vladivostok</option>
                                            <option value="Asia/Yakutsk">Asia/Yakutsk</option>
                                            <option value="Asia/Yekaterinburg">Asia/Yekaterinburg</option>
                                            <option value="Europe/Astrakhan">Europe/Astrakhan</option>
                                            <option value="Europe/Kaliningrad">Europe/Kaliningrad</option>
                                            <option value="Europe/Kirov">Europe/Kirov</option>
                                            <option value="Europe/Moscow">Europe/Moscow</option>
                                            <option value="Europe/Samara">Europe/Samara</option>
                                            <option value="Europe/Saratov">Europe/Saratov</option>
                                            <option value="Europe/Ulyanovsk">Europe/Ulyanovsk</option>
                                            <option value="Europe/Volgograd">Europe/Volgograd</option>
                                            <option value="Europe/Simferopol">Europe/Simferopol</option>
                                            <option value="Africa/Kigali">Africa/Kigali</option>
                                            <option value="Europe/Bucharest">Europe/Bucharest</option>
                                            <option value="Pacific/Apia">Pacific/Apia</option>
                                            <option value="Europe/San_Marino">Europe/San_Marino</option>
                                            <option value="Africa/Sao_Tome">Africa/Sao_Tome</option>
                                            <option value="Asia/Riyadh">Asia/Riyadh</option>
                                            <option value="Atlantic/St_Helena">Atlantic/St_Helena</option>
                                            <option value="Europe/Skopje">Europe/Skopje</option>
                                            <option value="Pacific/Saipan">Pacific/Saipan</option>
                                            <option value="Indian/Mahe">Indian/Mahe</option>
                                            <option value="America/St_Barthelemy">America/St_Barthelemy</option>
                                            <option value="America/Lower_Princes">America/Lower_Princes</option>
                                            <option value="America/Marigot">America/Marigot</option>
                                            <option value="America/Miquelon">America/Miquelon</option>
                                            <option value="Africa/Dakar">Africa/Dakar</option>
                                            <option value="America/St_Vincent">America/St_Vincent</option>
                                            <option value="America/St_Kitts">America/St_Kitts</option>
                                            <option value="America/St_Lucia">America/St_Lucia</option>
                                            <option value="Europe/Belgrade">Europe/Belgrade</option>
                                            <option value="Asia/Singapore">Asia/Singapore</option>
                                            <option value="Asia/Damascus">Asia/Damascus</option>
                                            <option value="Europe/Bratislava">Europe/Bratislava</option>
                                            <option value="Europe/Ljubljana">Europe/Ljubljana</option>
                                            <option value="Europe/London">Europe/London</option>
                                            <option value="America/Detroit">America/Detroit</option>
                                            <option value="America/Los_Angeles">America/Los_Angeles</option>
                                            <option value="America/Kentucky/Louisville">America/Kentucky/Louisville</option>
                                            <option value="America/Metlakatla">America/Metlakatla</option>
                                            <option value="America/Menominee">America/Menominee</option>
                                            <option value="America/New_York">America/New_York</option>
                                            <option value="America/Kentucky/Monticello">America/Kentucky/Monticello</option>
                                            <option value="America/Nome">America/Nome</option>
                                            <option value="Pacific/Honolulu">Pacific/Honolulu</option>
                                            <option value="America/Yakutat">America/Yakutat</option>
                                            <option value="America/Sitka">America/Sitka</option>
                                            <option value="America/Phoenix">America/Phoenix</option>
                                            <option value="America/North_Dakota/New_Salem">America/North_Dakota/New_Salem</option>
                                            <option value="America/North_Dakota/Center">America/North_Dakota/Center</option>
                                            <option value="America/Adak">America/Adak</option>
                                            <option value="America/Anchorage">America/Anchorage</option>
                                            <option value="America/Boise">America/Boise</option>
                                            <option value="America/Chicago">America/Chicago</option>
                                            <option value="America/Denver">America/Denver</option>
                                            <option value="America/North_Dakota/Beulah">America/North_Dakota/Beulah</option>
                                            <option value="America/Indiana/Indianapolis">America/Indiana/Indianapolis</option>
                                            <option value="America/Indiana/Knox">America/Indiana/Knox</option>
                                            <option value="America/Indiana/Marengo">America/Indiana/Marengo</option>
                                            <option value="America/Indiana/Petersburg">America/Indiana/Petersburg</option>
                                            <option value="America/Indiana/Tell_City">America/Indiana/Tell_City</option>
                                            <option value="America/Indiana/Vevay">America/Indiana/Vevay</option>
                                            <option value="America/Indiana/Vincennes">America/Indiana/Vincennes</option>
                                            <option value="America/Indiana/Winamac">America/Indiana/Winamac</option>
                                            <option value="America/Juneau">America/Juneau</option>
                                            <option value="Pacific/Guadalcanal">Pacific/Guadalcanal</option>
                                            <option value="Africa/Mogadishu">Africa/Mogadishu</option>
                                            <option value="Africa/Khartoum">Africa/Khartoum</option>
                                            <option value="America/Paramaribo">America/Paramaribo</option>
                                            <option value="Africa/Freetown">Africa/Freetown</option>
                                            <option value="Asia/Dushanbe">Asia/Dushanbe</option>
                                            <option value="Asia/Bangkok">Asia/Bangkok</option>
                                            <option value="Asia/Taipei">Asia/Taipei</option>
                                            <option value="Africa/Dar_es_Salaam">Africa/Dar_es_Salaam</option>
                                            <option value="Asia/Dili">Asia/Dili</option>
                                            <option value="Africa/Lome">Africa/Lome</option>
                                            <option value="Pacific/Fakaofo">Pacific/Fakaofo</option>
                                            <option value="Pacific/Tongatapu">Pacific/Tongatapu</option>
                                            <option value="America/Port_of_Spain">America/Port_of_Spain</option>
                                            <option value="Pacific/Funafuti">Pacific/Funafuti</option>
                                            <option value="Africa/Tunis">Africa/Tunis</option>
                                            <option value="Asia/Ashgabat">Asia/Ashgabat</option>
                                            <option value="Europe/Istanbul">Europe/Istanbul</option>
                                            <option value="Africa/Kampala">Africa/Kampala</option>
                                            <option value="Asia/Samarkand">Asia/Samarkand</option>
                                            <option value="Asia/Tashkent">Asia/Tashkent</option>
                                            <option value="Europe/Kyiv">Europe/Kyiv</option>
                                            <option value="Pacific/Wallis">Pacific/Wallis</option>
                                            <option value="America/Montevideo">America/Montevideo</option>
                                            <option value="Atlantic/Faroe">Atlantic/Faroe</option>
                                            <option value="Pacific/Fiji">Pacific/Fiji</option>
                                            <option value="Asia/Manila">Asia/Manila</option>
                                            <option value="Europe/Helsinki">Europe/Helsinki</option>
                                            <option value="Atlantic/Stanley">Atlantic/Stanley</option>
                                            <option value="Europe/Paris">Europe/Paris</option>
                                            <option value="America/Cayenne">America/Cayenne</option>
                                            <option value="Pacific/Gambier">Pacific/Gambier</option>
                                            <option value="Pacific/Marquesas">Pacific/Marquesas</option>
                                            <option value="Pacific/Tahiti">Pacific/Tahiti</option>
                                            <option value="Indian/Kerguelen">Indian/Kerguelen</option>
                                            <option value="Europe/Zagreb">Europe/Zagreb</option>
                                            <option value="Africa/Bangui">Africa/Bangui</option>
                                            <option value="Africa/Ndjamena">Africa/Ndjamena</option>
                                            <option value="Europe/Podgorica">Europe/Podgorica</option>
                                            <option value="Europe/Prague">Europe/Prague</option>
                                            <option value="America/Punta_Arenas">America/Punta_Arenas</option>
                                            <option value="America/Santiago">America/Santiago</option>
                                            <option value="Pacific/Easter">Pacific/Easter</option>
                                            <option value="Europe/Zurich">Europe/Zurich</option>
                                            <option value="Europe/Stockholm">Europe/Stockholm</option>
                                            <option value="Arctic/Longyearbyen">Arctic/Longyearbyen</option>
                                            <option value="Asia/Colombo">Asia/Colombo</option>
                                            <option value="America/Guayaquil">America/Guayaquil</option>
                                            <option value="Pacific/Galapagos">Pacific/Galapagos</option>
                                            <option value="Africa/Malabo">Africa/Malabo</option>
                                            <option value="Europe/Mariehamn">Europe/Mariehamn</option>
                                            <option value="America/El_Salvador">America/El_Salvador</option>
                                            <option value="Africa/Asmara">Africa/Asmara</option>
                                            <option value="Africa/Mbabane">Africa/Mbabane</option>
                                            <option value="Europe/Tallinn">Europe/Tallinn</option>
                                            <option value="Africa/Addis_Ababa">Africa/Addis_Ababa</option>
                                            <option value="Africa/Johannesburg">Africa/Johannesburg</option>
                                            <option value="Atlantic/South_Georgia">Atlantic/South_Georgia</option>
                                            <option value="Africa/Juba">Africa/Juba</option>
                                            <option value="America/Jamaica">America/Jamaica</option>
                                            <option value="Asia/Tokyo">Asia/Tokyo</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Подарочный -->
                        <div class="io-price__step io-gift">
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
                                            <button class="io-accordion__price-button accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseTwo" aria-expanded="true" aria-controls="ioGiftCourseCheck-collapseTwo">
                                                Музыка
                                            </button>
                                        </h2>
                                        <div id="ioGiftCourseCheck-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="ioGiftCourseCheck-headingTwo">
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
                                            <button class="io-accordion__price-button accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseTwo" aria-expanded="true" aria-controls="ioGiftCourseCheck-collapseTwo">
                                                Music
                                            </button>
                                        </h2>
                                        <div id="ioGiftCourseCheck-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="ioGiftCourseCheck-headingTwo">
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
                        <div class="io-price__step io-gift">
                            <div class="io-price__heading">
                                <span>3</span>
                                <p class="d-none d-sm-block"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Выбрать количество уроков для подарочного сертификата'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Select the number of lessons for a gift certificate'; } ?></p>
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
                        <div class="io-price__step io-gift">
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
                        <div class="io-price__step io-gift">
                            <div class="io-price__heading">
                                <span>5</span>
                                <p class="d-none d-sm-block"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Контактные данные плательщика'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Payer contact details'; } ?></p>
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
                                    <div class="custom-select" id="ioGiftPhonelabel">
                                        <div class="select-selected">+0</div>
                                        <input class="custom-input" id="ioGiftPhone" onblur="cleanPhoneInput(this)" name="phone" type="phone" placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите номер телефона'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter phone number'; } ?>">
                                        <div class="select-items">
                                            <input type="text" class="country-search" placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Поиск...'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Search...'; } ?>">
                                            <div data-value="+1" data-country="US"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'США'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'USA'; } ?> <span>+1</span></div>
                                            <div data-value="+380" data-country="UA"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Украина'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Ukraine'; } ?> <span>+380</span></div>
                                            <div data-value="+7" data-country="RU"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Россия'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Russia'; } ?> <span>+7</span></div>
                                            <div data-value="+7" data-country="KZ"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Казахстан'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Kazakhstan'; } ?> <span>+7</span></div>
                                            <div data-value="+375" data-country="BY"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Беларусь'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Belarus'; } ?> <span>+375</span></div>

                                            <div data-value="+44" data-country="GB"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Великобритания'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'United Kingdom'; } ?> <span>+44</span></div>
                                            <div data-value="+49" data-country="DE"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Германия'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Germany'; } ?> <span>+49</span></div>
                                            <div data-value="+33" data-country="FR"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Франция'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'France'; } ?> <span>+33</span></div>
                                            <!-- Добавьте сюда больше стран по вашему выбору -->
                                        </div>
                                    </div>
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
                        <!-- Абонемент -->
                        <div class="io-abonement">
                            <div class="io-price__calculation-terms">
                                <p class="io-price__calculation-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Правила <span class="io-fw-bold io-purple-main">Абонемента</span>'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo '<span class="io-fw-bold io-purple-main">Subscription</span> rules'; } ?></p>
                                <div class="io-check io-check--start io-check--purple">
                                    <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'При покупке 80 и более уроков скидка составляет до $480'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'When purchasing 80 or more lessons, a discount of up to $480 is applied'; } ?></span>
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
                        <!-- Абонемент -->
                        <div class="io-demo">
                            <div class="io-price__calculation-terms">
                                <p class="io-price__calculation-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Правила <span class="io-fw-bold io-purple-main">Пробного урока</span>'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo '<span class="io-fw-bold io-purple-main">Trial lesson</span> rules'; } ?></p>
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
                        <!-- Подарочный -->
                        <div class="io-gift">
                            <div class="io-price__calculation-terms">
                                <p class="io-price__calculation-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Правила <span class="io-fw-bold io-purple-main">Подарочного сертификата</span>'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo '<span class="io-fw-bold io-purple-main">Gift card</span> rules'; } ?></p>
                                <div class="io-check io-check--start io-check--purple">
                                    <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'При покупке 80 и более уроков скидка составляет до $480'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'When purchasing 80 or more lessons, a discount of up to $480 is applied'; } ?></span>
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
                    <!-- Абонемент -->
                    <div class="io-abonement">
                        <div class="io-price__calculation-terms">
                            <p class="io-price__calculation-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Правила <span class="io-fw-bold io-purple-main">Абонемента</span>'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo '<span class="io-fw-bold io-purple-main">Subscription</span> rules'; } ?></p>
                            <div class="io-check io-check--start io-check--purple">
                                <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'При покупке 80 и более уроков скидка составляет до $480'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'When purchasing 80 or more lessons, a discount of up to $480 is applied'; } ?></span>
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
                    <!-- Абонемент -->
                    <div class="io-demo">
                        <div class="io-price__calculation-terms">
                            <p class="io-price__calculation-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Правила <span class="io-fw-bold io-purple-main">Пробного урока</span>'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo '<span class="io-fw-bold io-purple-main">Trial lesson</span> rules'; } ?></p>
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
                    <!-- Подарочный -->
                    <div class="io-gift">
                        <div class="io-price__calculation-terms">
                            <p class="io-price__calculation-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Правила <span class="io-fw-bold io-purple-main">Подарочного сертификата</span>'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo '<span class="io-fw-bold io-purple-main">Gift card</span> rules'; } ?></p>
                            <div class="io-check io-check--start io-check--purple">
                                <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'При покупке 80 и более уроков скидка составляет до $480'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'When purchasing 80 or more lessons, a discount of up to $480 is applied'; } ?></span>
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
</main>

<?php get_footer(); // подключаем footer.php ?>

<!-- <script src="https://www.paypal.com/sdk/js?client-id=<?php echo PAYPAL_SANDBOX?PAYPAL_SANDBOX_CLIENT_ID:PAYPAL_PROD_CLIENT_ID; ?>&currency=<?php echo $currency; ?>&disable-funding=credit,card"></script> -->

<!-- Скрипт бегунка Input Range -->
<script>
    function handleRangeInput(rangeInput, lessonElements, circleElements, activeIndex) {
        lessonElements.forEach((lesson, index) => {
            lesson.classList.toggle('active', index === activeIndex);
            lesson.classList.toggle('alt', activeIndex >= 6 && index === activeIndex);
        });

        circleElements.forEach((circle, index) => {
            circle.classList.toggle('active', index < activeIndex);
        });
    }

    const rangeInput = document.getElementById('ioAmountRange');
    const lessonElements = document.querySelectorAll('.io-range__lesson');
    const circleElements = document.querySelectorAll('.io-range__circle');

    rangeInput.addEventListener('input', () => {
        const activeIndex = parseInt(rangeInput.value) - 1;
        handleRangeInput(rangeInput, lessonElements, circleElements, activeIndex);
    });

    const rangeInputGift = document.getElementById('ioAmountRangeGift');
    const lessonElementsGift = document.querySelectorAll('.io-range__lesson-gift');
    const circleElementsGift = document.querySelectorAll('.io-range__circle-gift');

    rangeInputGift.addEventListener('input', () => {
        const activeIndexGift = parseInt(rangeInputGift.value) - 1;
        handleRangeInput(rangeInputGift, lessonElementsGift, circleElementsGift, activeIndexGift);
    });

    // Добавляем обработчик для выпадающего списка
    var ioAbonementOptions = document.getElementById('ioAbonementOptions');
    ioAbonementOptions.addEventListener('click', function (event) {
        var selectedValue = event.target.dataset.value;
        if (selectedValue) {
            var activeIndex = parseInt(selectedValue) - 1;
            handleRangeInput(rangeInput, lessonElements, circleElements, activeIndex);
        }
    });

    // Добавляем обработчик для выпадающего списка
    var ioGiftOptions = document.getElementById('ioGiftOptions');
    ioGiftOptions.addEventListener('click', function (event) {
        var selectedValue = event.target.dataset.value;
        if (selectedValue) {
            var activeIndex = parseInt(selectedValue) - 1;
            handleRangeInput(rangeInputGift, lessonElementsGift, circleElementsGift, activeIndex);
        }
    });
</script>

<!-- Скрипты для инпутов, селектов и т.п. -->
<script>
    // Функция для проверки и добавления класса
    function checkYearAndAddClass() {
        var ioCheckYearSelected = document.querySelector("#ioCheckYear .io-select__selected");
        var ioCheckParentsDiv = document.getElementById("ioCheckParents");

        // Получаем текущий год
        var currentYear = new Date().getFullYear();

        // Получаем выбранный год из элемента .io-select__selected
        var selectedYear = parseInt(ioCheckYearSelected.textContent);

        // Проверяем разницу между текущим годом и выбранным годом
        if (currentYear - selectedYear < 18) {
            ioCheckParentsDiv.classList.add("show");
        } else {
            ioCheckParentsDiv.classList.remove("show");
        }
    }

    // Вызываем функцию при загрузке страницы
    checkYearAndAddClass();

    // Добавляем обработчик события input для реагирования на изменение текстового содержимого
    var ioCheckYearSelected = document.querySelector("#ioCheckYear .io-select__selected");
    ioCheckYearSelected.addEventListener("input", checkYearAndAddClass);

    // Добавляем обработчик события click для реагирования на клик
    var ioSelectItems = document.querySelector("#ioCheckYear .io-select__select-items");
    ioSelectItems.addEventListener("click", checkYearAndAddClass);

</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Получаем все элементы с классом "io-select__label"
        var labelElements = document.querySelectorAll(".io-select__label");

        // Функция для проверки и обновления классов
        function checkAndToggleClass(labelElement, selectElement) {
            if (selectElement.classList.contains("io-select__option--default")) {
                labelElement.classList.remove("hide"); // Добавляем класс hide к label
            } else {
                labelElement.classList.add("hide"); // Удаляем класс hide у label
            }
        }

        // Проходим по всем элементам и настраиваем MutationObserver для каждой пары label-select
        labelElements.forEach(function(labelElement) {
            var selectElement = labelElement.nextElementSibling;

            // Начинаем следить за изменениями в классах selectElement
            var observer = new MutationObserver(function() {
                checkAndToggleClass(labelElement, selectElement);
            });

            observer.observe(selectElement, {
                attributes: true,
                attributeFilter: ['class']
            });

            // Вызываем функцию проверки и обновления классов при инициализации страницы
            checkAndToggleClass(labelElement, selectElement);
        });
    });

</script>
<script>
    function initializeCustomSelect(select) {
        const selectItems = select.querySelector('.select-items');
        const searchInput = select.querySelector('.country-search');
        const selectSelected = select.querySelector('.select-selected');
        const inputField = select.querySelector('.custom-input');

        let isSearching = false;
        const defaultCountryCode = "+1";
        selectSelected.innerText = defaultCountryCode;

        select.addEventListener('click', function(e) {
            if (e.target.classList.contains('select-selected')) {
                selectItems.style.display = selectItems.style.display === 'block' ? 'none' : 'block';

                if (selectItems.style.display === 'block') {
                    select.classList.add('open');
                } else {
                    select.classList.remove('open');
                }

                if (!isSearching) {
                    searchInput.value = '';
                    resetSearch();
                }
            }
        });

        selectItems.addEventListener('click', function(e) {
            if (e.target.getAttribute('data-value')) {
                const selectedValue = e.target.getAttribute('data-value');
                const selectedText = e.target.innerText;
                selectSelected.innerText = selectedValue;
                selectItems.style.display = 'none';
                select.classList.remove('open');

                searchInput.value = '';
                resetSearch();
            }
        });

        searchInput.addEventListener('input', function() {
            const searchTerm = searchInput.value.toLowerCase();
            const items = selectItems.querySelectorAll('div[data-value]');

            items.forEach(function(item) {
                const itemText = item.innerText.toLowerCase();
                if (itemText.includes(searchTerm)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });

            selectItems.style.display = 'block';

            if (selectItems.style.display === 'block') {
                select.classList.add('open');
                isSearching = searchTerm.length > 0;
            }
        });

        document.addEventListener('click', function(e) {
            if (!select.contains(e.target)) {
                selectItems.style.display = 'none';
                select.classList.remove('open');

                searchInput.value = '';
                resetSearch();
            }
        });

        inputField.addEventListener('focus', function() {
            selectItems.style.display = 'none'; // Скрыть select-items при фокусировке
            select.classList.remove('open');
        });

        function resetSearch() {
            const items = selectItems.querySelectorAll('div[data-value]');
            items.forEach(function(item) {
                item.style.display = 'flex';
            });
            isSearching = false;
        }
    }

    const customSelects = document.querySelectorAll('.custom-select');
    customSelects.forEach(initializeCustomSelect);
</script>
<script>
    // Получаем все элементы с классом .custom-select
    var customSelectsFocus = document.querySelectorAll('.custom-select');

    // Добавляем обработчик событий для каждого .custom-select
    customSelectsFocus.forEach(function(customSelect) {
        // Получаем элемент .custom-input внутри текущего .custom-select
        var customInput = customSelect.querySelector('.custom-input');

        // Добавляем обработчик события фокусировки
        customInput.addEventListener('focus', function() {
            // Добавляем класс "focus" к родительскому .custom-select
            customSelect.classList.add('focus');
        });

        // Добавляем обработчик события потери фокуса
        customInput.addEventListener('blur', function() {
            // Удаляем класс "focus" у родительского .custom-select
            customSelect.classList.remove('focus');
        });
    });
</script>

<!-- Проверка страны для выбора кода -->
<script>
    // Функция для получения информации о стране по IP-адресу с использованием бесплатного API
    function getCountryFromIP() {
        fetch('https://ipinfo.io/json?token=824ed7b94d266a')
            .then(response => response.json())
            .then(data => {
                // Извлекаем название страны из данных
                const country = data.country || 'Неизвестно';

                // Находим все элементы с атрибутом data-country
                const countrySelectItems = document.querySelectorAll('[data-country]');

                // Проходимся по всем элементам с атрибутом data-country
                countrySelectItems.forEach(item => {
                    const itemCountry = item.getAttribute('data-country');
                    if (itemCountry === country) {
                        // Выбираем эту страну
                        item.click();
                    }
                });
            })
            .catch(error => {
                console.error('Ошибка при получении данных о стране:', error);
            });
    }

    // Вызываем функцию для определения страны при загрузке страницы
    getCountryFromIP();

    // Обработчик выбора страны
    const countrySelectItems = document.querySelectorAll('[data-country]');
    countrySelectItems.forEach(item => {
        item.addEventListener('click', function() {
            const countryCode = item.getAttribute('data-value');
        });
    });

</script>

<!-- Очистка символов в инпутах -->
<script>
    function cleanInput(inputElement) {
        var inputValue = inputElement.value;

        // Очищаем введенные данные
        var cleanedValue = inputValue.replace(/[^a-zA-Zа-яА-ЯёЁ\s-]/g, '');

        // Записываем очищенное значение обратно в инпут
        inputElement.value = cleanedValue;
    }

    function cleanEmailInput(inputElement) {
        var inputValue = inputElement.value;

        // Очищаем введенные данные
        var cleanedValue = inputValue.replace(/[^a-zA-Z0-9@._-]/g, '');

        // Записываем очищенное значение обратно в инпут
        inputElement.value = cleanedValue;
    }

    function cleanPhoneInput(inputElement) {
        var inputValue = inputElement.value;

        // Очищаем введенные данные (оставляем только цифры)
        var cleanedValue = inputValue.replace(/\D/g, '');

        // Записываем очищенное значение обратно в инпут
        inputElement.value = cleanedValue;
    }

</script>

<!-- Проверка форм при клике на кнопки -->
<script>
    function validateForm() {
        var abonementNameValue = document.getElementById("ioAbonementName").value;
        var pocketphoneValue = document.getElementById("iopocketphone").value;
        var abonementEmailValue = document.getElementById("ioAbonementEmail").value;
        var emailPattern = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

        var abonementName = document.getElementById("ioAbonementName");
        var pocketphone = document.getElementById("iopocketphonelabel");
        var abonementEmail = document.getElementById("ioAbonementEmail");

        if (abonementNameValue === "") {
            abonementName.classList.add('error');
        } else {
            abonementName.classList.remove('error');
        }

        if (pocketphoneValue === "") {
            pocketphone.classList.add('error');
        } else {
            pocketphone.classList.remove('error');
        }

        if (abonementEmailValue === "" || !emailPattern.test(abonementEmailValue)) {
            abonementEmail.classList.add('error');
        } else {
            abonementEmail.classList.remove('error');
        }
    }
    
    function validateDemoForm() {
        // Определение элементов
        var demoNameValue = document.getElementById("ioDemoName").value;
        var demoSurnameValue = document.getElementById("ioDemoSurname").value;
        var demoPhoneValue = document.getElementById("iodemophone").value;
        var demoEmailValue = document.getElementById("ioDemoEmail").value;
        var emailPattern = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

        var demoName = document.getElementById("ioDemoName");
        var demoSurname = document.getElementById("ioDemoSurname");
        var demoPhoneLabel = document.getElementById("iodemophoneValue");
        var demoEmail = document.getElementById("ioDemoEmail");

        // Проверка для ioDemoParent
        var ioDemoParent = document.getElementById("ioDemoParent");
        var ioDemoParentValue = ioDemoParent.value;

        // Проверка каждого элемента отдельно
        if (demoNameValue === "") {
            demoName.classList.add('error');
        } else {
            demoName.classList.remove('error');
        }

        if (demoSurnameValue === "") {
            demoSurname.classList.add('error');
        } else {
            demoSurname.classList.remove('error');
        }

        if (demoPhoneValue === "") {
            demoPhoneLabel.classList.add('error');
        } else {
            demoPhoneLabel.classList.remove('error');
        }

        if (demoEmailValue === "" || !emailPattern.test(demoEmailValue)) {
            demoEmail.classList.add('error');
        } else {
            demoEmail.classList.remove('error');
        }

        var ioDemoDayBlock = document.getElementById("ioDemoDay");
        var ioDemoDaySelectedElement = ioDemoDayBlock.querySelector(".io-select__selected");
        var ioDemoDayHasDefaultOptionClass = ioDemoDaySelectedElement && ioDemoDaySelectedElement.classList.contains("io-select__option--default");

        if (ioDemoDayHasDefaultOptionClass) {
            ioDemoDaySelectedElement.classList.add("error");
        } else {
            ioDemoDaySelectedElement.classList.remove("error");
        }

        var ioDemoMonthBlock = document.getElementById("ioDemoMonth");
        var ioDemoMonthSelectedElement = ioDemoMonthBlock.querySelector(".io-select__selected");
        var ioDemoMonthHasDefaultOptionClass = ioDemoMonthSelectedElement && ioDemoMonthSelectedElement.classList.contains("io-select__option--default");

        if (ioDemoMonthHasDefaultOptionClass) {
            ioDemoMonthSelectedElement.classList.add("error");
        } else {
            ioDemoMonthSelectedElement.classList.remove("error");
        }

        var ioDemoYearBlock = document.getElementById("ioCheckYear");
        var ioDemoYearSelectedElement = ioDemoYearBlock.querySelector(".io-select__selected");
        var ioDemoYearHasDefaultOptionClass = ioDemoYearSelectedElement && ioDemoYearSelectedElement.classList.contains("io-select__option--default");

        if (ioDemoYearHasDefaultOptionClass) {
            ioDemoYearSelectedElement.classList.add("error");
        } else {
            ioDemoYearSelectedElement.classList.remove("error");
        }

        // Проверка для ioDemoParent
        if (ioDemoParentValue === "" && ioCheckParents.classList.contains("show")) {
            ioDemoParent.classList.add('error');
        } else {
            ioDemoParent.classList.remove('error');
        }

        var ioDemoHourBlock = document.getElementById("ioDemoHour");
        var ioDemoHourSelectedElement = ioDemoHourBlock.querySelector(".io-select__selected");
        var ioDemoHourHasDefaultOptionClass = ioDemoHourSelectedElement && ioDemoHourSelectedElement.classList.contains("io-select__option--default");

        if (ioDemoHourHasDefaultOptionClass) {
            ioDemoHourSelectedElement.classList.add("error");
        } else {
            ioDemoHourSelectedElement.classList.remove("error");
        }
    }

    function validateGiftForm() {
        var ioGiftNameValue = document.getElementById("ioGiftName").value;
        var ioGiftSurnameValue = document.getElementById("ioGiftSurname").value;
        var ioGiftPayerValue = document.getElementById("ioGiftPayer").value;
        var ioGiftPhoneValue = document.getElementById("ioGiftPhone").value;
        var ioGiftEmailValue = document.getElementById("ioGiftEmail").value;
        var emailPattern = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

        var ioGiftName = document.getElementById("ioGiftName");
        var ioGiftSurname = document.getElementById("ioGiftSurname");
        var ioGiftPayer = document.getElementById("ioGiftPayer");
        var ioGiftPhone = document.getElementById("ioGiftPhonelabel");
        var ioGiftEmail = document.getElementById("ioGiftEmail");

        if (ioGiftNameValue === "") {
            ioGiftName.classList.add('error');
        } else {
            ioGiftName.classList.remove('error');
        }

        if (ioGiftSurnameValue === "") {
            ioGiftSurname.classList.add('error');
        } else {
            ioGiftSurname.classList.remove('error');
        }

        if (ioGiftPayerValue === "") {
            ioGiftPayer.classList.add('error');
        } else {
            ioGiftPayer.classList.remove('error');
        }

        if (ioGiftPhoneValue === "") {
            ioGiftPhone.classList.add('error');
        } else {
            ioGiftPhone.classList.remove('error');
        }

        if (ioGiftEmailValue === "" || !emailPattern.test(ioGiftEmailValue)) {
            ioGiftEmail.classList.add('error');
        } else {
            ioGiftEmail.classList.remove('error');
        }
    }

    // Привязываем функцию к событию клика на кнопке
    var lessonButtonDisplay = document.getElementById("lessonButtonDisplay");
    lessonButtonDisplay.addEventListener("click", validateForm);
    lessonButtonDisplay.addEventListener("click", validateDemoForm);
    lessonButtonDisplay.addEventListener("click", validateGiftForm);

</script>

<!-- Радиокнопки из чекбокса -->
<script>
    // Находим все блоки с классом 'io-checkbox-group'
    const ioGiftCourseCheck = document.getElementById('ioGiftCourseCheck');
    const ioGiftCourseCheckboxes = ioGiftCourseCheck.querySelectorAll('.io-checkbox');

    ioGiftCourseCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            if (checkbox.checked) {
                // Если выбран новый чекбокс, снимаем выбор с предыдущих в этой группе
                ioGiftCourseCheckboxes.forEach(otherCheckbox => {
                    if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                    }
                });
            }
        });
    });

</script>

<!-- Промокод -->
<script>
    function ioPromoInnerToggleClass(element) {
        var parentElement = element.closest('.io-promo');
        var inputElement = element.querySelector('input');

        // Проверяем наличие класса 'active' у родительского элемента
        if (parentElement.classList.contains('active')) {
            element.classList.remove('active', 'add', 'error');

            // Очистка проверок и заполнения инпута
            inputElement.value = '';

            // Восстановление оригинального placeholder
            if (inputElement.dataset.defaultPlaceholder) {
                inputElement.placeholder = inputElement.dataset.defaultPlaceholder;
                delete inputElement.dataset.defaultPlaceholder;
            }

            // Удаление класса 'active' у родительского элемента
            parentElement.classList.remove('active');
        } else {
            // Старый функционал для случая, когда нет класса 'active'
            element.classList.toggle('active');
            element.classList.remove('add');

            // Добавляем класс 'active' к родительскому элементу, если 'io-promo__inner' имеет класс 'active'
            if (element.classList.contains('active')) {
                parentElement.classList.add('active');

                // Устанавливаем фокус на инпут
                inputElement.focus();
            } else {
                parentElement.classList.remove('active');
            }
        }
    }


    function ioPromoInnerCheck(element) {
        var inputElement = element.querySelector('input');
        var inputValue = inputElement.value.trim();

        if (inputValue !== '') {
            element.classList.add('add');

            // Удаляем класс 'error', если он был добавлен ранее
            element.classList.remove('error');

            // Восстанавливаем оригинальный placeholder, если он был изменен
            if (inputElement.dataset.defaultPlaceholder) {
                inputElement.placeholder = inputElement.dataset.defaultPlaceholder;
                delete inputElement.dataset.defaultPlaceholder;
            }

            // Добавляем класс 'active' к родительскому элементу
            var parentElement = element.closest('.io-promo');
            parentElement.classList.add('active');
        } else {
            // Если значение пустое, добавляем класс 'error'
            element.classList.add('error');

            // Сохраняем текущий placeholder перед изменением
            inputElement.dataset.defaultPlaceholder = inputElement.placeholder;

            // Устанавливаем новый placeholder
            inputElement.placeholder = "<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Неверный промокод'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Invalid coupon code'; } ?>";

            // Удаляем класс 'add', если он был добавлен ранее
            element.classList.remove('add');

            // Добавляем класс 'active' к родительскому элементу (по вашему выбору)
            var parentElement = element.closest('.io-promo');
            parentElement.classList.add('active');
        }
    }

</script>

<!-- Фокус активной цены и оплаты -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ioPriceStepElements = document.querySelectorAll('.io-price__step');
        var ioRangeWrappers = document.querySelectorAll('.io-range__wrapper');

        // Функция для добавления класса focus и прокрутки к выбранному блоку
        function addFocusClassAndScroll(event) {
            var ioPriceStep = event.target.closest('.io-price__step');
            
            if (!ioPriceStep || ioPriceStep.classList.contains('focus')) {
                return;
            }

            // Убираем класс focus у всех элементов перед добавлением на текущий
            ioPriceStepElements.forEach(function(element) {
                element.classList.remove('focus');
            });

            // Добавляем класс focus
            ioPriceStep.classList.add('focus');

            // Прокручиваем к выбранному блоку с отступом от верха на 160px
            if (window.innerWidth >= 1200) {
                var scrollOffset = ioPriceStep.getBoundingClientRect().top + window.scrollY - 160;
                window.scrollTo({
                    top: scrollOffset,
                    behavior: 'smooth'
                });
            }
        }

        // Функция для удаления класса focus
        function removeFocusClass() {
            this.classList.remove('focus');
        }

        // Обработчик события для элементов с классом io-price__step
        ioPriceStepElements.forEach(function(element) {
            if (window.innerWidth >= 1200) {
                element.addEventListener('mouseup', addFocusClassAndScroll);
            } else {
                element.addEventListener('touchstart', addFocusClassAndScroll);
            }
        });

        // Обработчик события для клика вне элементов
        document.addEventListener('click', function(event) {
            if (window.innerWidth < 1200) {
                closeFocus(event);
            }
        });

        // Добавлен обработчик для io-range__wrapper
        ioRangeWrappers.forEach(function(ioRangeWrapper) {
            ioRangeWrapper.addEventListener('touchstart', addFocusClassAndScroll);

            var ioRangeElements = ioRangeWrapper.querySelectorAll('*');
            ioRangeElements.forEach(function(element) {
                element.addEventListener('touchstart', addFocusClassAndScroll);
            });
        });

        document.addEventListener('touchend', function(event) {
            if (window.innerWidth < 1200) {
                closeFocus(event);
            }
        });

        // Обработчик события для касания вне элементов
        document.addEventListener('touchend', function(event) {
            // Проверяем, является ли цель касания элементом внутри формы данных блоков
            if (window.innerWidth < 1200 && !event.target.closest('.io-price__step')) {
                closeFocus(event);
            }
        });

        // Функция для закрытия фокуса при клике или касании вне элементов
        function closeFocus(event) {
            var isClickInsideIoPriceStep = false;

            // Проверяем, является ли цель клика элементом с классом io-price__step или его потомком
            ioPriceStepElements.forEach(function(element) {
                if (element.contains(event.target)) {
                    isClickInsideIoPriceStep = true;
                }
            });

            // Если клик или касание были вне элементов, убираем класс focus
            if (!isClickInsideIoPriceStep) {
                ioPriceStepElements.forEach(function(element) {
                    element.classList.remove('focus');
                });
            }
        }
    });
</script>

<!-- Убрать проверку -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Получаем все элементы input на странице
        var inputElements = document.querySelectorAll('input[type="text"]');

        // Устанавливаем атрибут spellcheck в значение false для каждого элемента
        inputElements.forEach(function(input) {
            input.setAttribute('spellcheck', 'false');
        });
    });

</script>

<!-- Смена placeholder -->
<script>
    function updatePlaceholder() {
        if (window.innerWidth < 576) {
            document.getElementById('iopocketphone').setAttribute('placeholder', '<?php echo (ICL_LANGUAGE_CODE === 'en') ? 'Enter number' : 'Введите номер'; ?>');
        } else {
            document.getElementById('iopocketphone').setAttribute('placeholder', '<?php echo (ICL_LANGUAGE_CODE === 'en') ? 'Enter phone number' : 'Введите номер телефона'; ?>');
        }
    }

    document.addEventListener('DOMContentLoaded', updatePlaceholder);
    window.addEventListener('resize', updatePlaceholder);

</script>
<!-- Скрытие меню при скролле -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var body = document.body;
        var lastScrollTop = 0;
        var isSecondScriptActive = false;

        window.addEventListener('scroll', function() {
            var currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            if (!isSecondScriptActive) {
                if (currentScroll > lastScrollTop && window.innerWidth <= 576) {
                    // Скролл вниз
                    document.querySelector('.io-header').style.top = '-58px';
                    document.querySelector('.io-tabs-wrapper').style.top = '0';
                } else {
                    // Скролл вверх или стоит на месте
                    document.querySelector('.io-header').style.top = '0';
                    if (window.innerWidth <= 576) {
                        document.querySelector('.io-tabs-wrapper').style.top = '58px';
                    } else {
                        document.querySelector('.io-tabs-wrapper').style.top = '';
                    }
                }
            }

            lastScrollTop = currentScroll;
        });

        const accordionButtons = document.querySelectorAll('.io-accordion__button');

        accordionButtons.forEach(button => {
            button.addEventListener('click', () => {
                if (!button.classList.contains('collapsed')) {
                    const parentItem = button.closest('.io-accordion__item');

                    if (parentItem) {
                        parentItem.addEventListener('shown.bs.collapse', () => {
                            let itemOffsetTop;

                            if (window.innerWidth >= 1200) {
                                itemOffsetTop = parentItem.offsetTop - 110;
                            } else if (window.innerWidth >= 992 && window.innerWidth < 1200) {
                                itemOffsetTop = parentItem.offsetTop - 114;
                            } else if (window.innerWidth >= 576 && window.innerWidth < 992) {
                                itemOffsetTop = parentItem.offsetTop - 106;
                            } else {
                                itemOffsetTop = parentItem.offsetTop - 48;
                                lastScrollTop = 0;
                                isSecondScriptActive = true;

                                // Устанавливаем задержку перед сбросом флага
                                setTimeout(() => {
                                    isSecondScriptActive = false;
                                }, 1000); // 2 секунды задержки

                                document.querySelector('.io-header').style.top = '-58px';
                                document.querySelector('.io-tabs-wrapper').style.top = '0';
                            }

                            window.scrollTo({
                                top: itemOffsetTop,
                                behavior: 'smooth'
                            });
                        });
                    }
                }
            });
        });

        const accordionButtons3 = document.querySelectorAll('.io-accordion__price-button');

        accordionButtons3.forEach(button => {
            button.addEventListener('click', () => {
                if (!button.classList.contains('collapsed')) {
                    const parentItem = button.closest('.io-accordion__item');

                    if (parentItem) {
                        parentItem.addEventListener('shown.bs.collapse', () => {
                            let itemOffsetTop;

                            if (window.innerWidth >= 1200) {
                                itemOffsetTop = parentItem.offsetTop + 455;
                            } else if (window.innerWidth >= 992 && window.innerWidth < 1200) {
                                itemOffsetTop = parentItem.offsetTop + 400;
                            } else if (window.innerWidth >= 576 && window.innerWidth < 992) {
                                itemOffsetTop = parentItem.offsetTop + 480;
                            } else {
                                if (window.innerWidth >= 394 && window.innerWidth < 576) {
                                    itemOffsetTop = parentItem.offsetTop + 490;
                                } else {
                                    itemOffsetTop = parentItem.offsetTop + 514;
                                }
                            }

                            window.scrollTo({
                                top: itemOffsetTop,
                                behavior: 'smooth'
                            });
                        });
                    }
                }
            });
        });
    });
</script>
<script>
    // Получаем ссылки на все кнопки аккордиона
    const accordionButtons2 = document.querySelectorAll('.io-popular-video__accordion-button');

    // Добавляем обработчик события для каждой кнопки
    accordionButtons2.forEach(button => {
        button.addEventListener('click', () => {
            // Проверяем, является ли открываемый пункт активным
            if (!button.classList.contains('collapsed')) {
                // Находим родительский элемент io-accordion__item
                const parentItem = button.closest('.io-popular-video__accordion-item');

                // Проверяем, что у нас есть родительский элемент io-accordion__item
                if (parentItem) {
                    // Добавляем обработчик события shown.bs.collapse, чтобы прокрутить страницу после завершения анимации открытия/закрытия панели аккордиона
                    parentItem.addEventListener('shown.bs.collapse', () => {
                        // Устанавливаем значение отступа в зависимости от ширины экрана
                        let itemOffsetTop;
                        if (window.innerWidth >= 992) {
                            itemOffsetTop = parentItem.parentElement.offsetTop - 130;
                        } else if (window.innerWidth >= 576 && window.innerWidth < 992) {
                            itemOffsetTop = parentItem.offsetTop - 115;
                        } else {
                            itemOffsetTop = parentItem.offsetTop - 57;
                            isSecondScriptActive = true;

                            // Устанавливаем задержку перед сбросом флага
                            setTimeout(() => {
                                isSecondScriptActive = false;
                            }, 1000); // 2 секунды задержки

                            document.querySelector('.io-header').style.top = '-58px';
                            document.querySelector('.io-tabs-wrapper').style.top = '0';
                        }

                        window.scrollTo({
                            top: itemOffsetTop,
                            behavior: 'smooth'
                        });
                    });
                }
            }
        });
    });

</script>

<!-- ============================================ Выбор валюты ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var selectedCurrency = document.getElementById('selectedCurrency');
        var currencyOptions = document.getElementById('currencyOptions');
        var currencyFromSelectList = document.querySelectorAll('.io-currency__from-select');

        // При клике на выбранный элемент, показываем/скрываем список
        selectedCurrency.addEventListener('click', function () {
            if (currencyOptions.style.display === 'block') {
                currencyOptions.style.display = 'none';
            } else {
                currencyOptions.style.display = 'block';
            }
        });

        // При клике на элемент списка, устанавливаем его значение в выбранный элемент и скрываем список
        currencyOptions.addEventListener('click', function (event) {
            if (event.target.tagName === 'LI') {
                var selectedValue = event.target.dataset.value;
                selectedCurrency.textContent = selectedValue;
                currencyOptions.style.display = 'none';

                // Устанавливаем выбранную валюту в каждый элемент с классом "io-currency__from-select"
                currencyFromSelectList.forEach(function (currencyFromSelect) {
                    currencyFromSelect.textContent = selectedValue;
                });
            }
        });

        // Закрыть список, если клик был вне списка
        document.addEventListener('click', function (event) {
            if (!event.target.closest('.io-select-currency')) {
                currencyOptions.style.display = 'none';
            }
        });
    });
</script>

<!-- ============================================ Переключение типа урока ============================================ -->
<style>
    .io-abonement.active,
    .io-demo.active,
    .io-gift.active {
        display: flex;
    }

    .io-abonement,
    .io-demo,
    .io-gift {
        display: none;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Получаем форму
        var form = document.getElementById('ioTypeRadioCheck');

        // Получаем все радиокнопки внутри формы
        var radioButtons = form.querySelectorAll('.io-radio');

        // Получаем все блоки с классоми
        var abonementBlocks = document.querySelectorAll('.io-abonement');
        var demoBlocks = document.querySelectorAll('.io-demo');
        var giftBlocks = document.querySelectorAll('.io-gift');

        // Проверяем, если радиокнопка отмечена при загрузке страницы
        if (radioButtons[0].checked) {
            abonementBlocks.forEach(function(abonementBlock) {
                abonementBlock.classList.add('active');
            });
            demoBlocks.forEach(function(demoBlock) {
                demoBlock.classList.remove('active');
            });
            giftBlocks.forEach(function(giftBlock) {
                giftBlock.classList.remove('active');
            });
        } else if (radioButtons[1].checked) {
            abonementBlocks.forEach(function(abonementBlock) {
                abonementBlock.classList.remove('active');
            });
            demoBlocks.forEach(function(demoBlock) {
                demoBlock.classList.add('active');
            });
            giftBlocks.forEach(function(giftBlock) {
                giftBlock.classList.remove('active');
            });
        } else {
            abonementBlocks.forEach(function(abonementBlock) {
                abonementBlock.classList.remove('active');
            });
            demoBlocks.forEach(function(demoBlock) {
                demoBlock.classList.remove('active');
            });
            giftBlocks.forEach(function(giftBlock) {
                giftBlock.classList.add('active');
            });
        }

        // Добавляем обработчик события для изменения состояния формы
        form.addEventListener('change', function() {
            abonementBlocks.forEach(function(abonementBlock) {
                abonementBlock.classList.remove('active');
            });
            demoBlocks.forEach(function(demoBlock) {
                demoBlock.classList.remove('active');
            });
            demoBlocks.forEach(function(demoBlock) {
                demoBlock.classList.remove('active');
            });

            // Проверяем, если радиокнопка отмечена
            if (radioButtons[0].checked) {
                abonementBlocks.forEach(function(abonementBlock) {
                    abonementBlock.classList.add('active');
                });
                demoBlocks.forEach(function(demoBlock) {
                    demoBlock.classList.remove('active');
                });
                giftBlocks.forEach(function(giftBlock) {
                    giftBlock.classList.remove('active');
                });
            } else if (radioButtons[1].checked) {
                abonementBlocks.forEach(function(abonementBlock) {
                    abonementBlock.classList.remove('active');
                });
                demoBlocks.forEach(function(demoBlock) {
                    demoBlock.classList.add('active');
                });
                giftBlocks.forEach(function(giftBlock) {
                    giftBlock.classList.remove('active');
                });
            } else {
                abonementBlocks.forEach(function(abonementBlock) {
                    abonementBlock.classList.remove('active');
                });
                demoBlocks.forEach(function(demoBlock) {
                    demoBlock.classList.remove('active');
                });
                giftBlocks.forEach(function(giftBlock) {
                    giftBlock.classList.add('active');
                });
            }
        });
    });
</script>

<!-- ============================================ Абонемент цены ============================================ -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Получаем элементы DOM для первого скрипта
        var ioAmountRange = document.getElementById("ioAmountRange");
        var ioAbonementCount = document.getElementById("ioAbonementCount");
        var ioAbonementLessonPrice = document.getElementById("ioAbonementLessonPrice");
        var ioAbonementLessonSaleWrapper = document.getElementById("ioAbonementLessonSaleWrapper");
        var ioAbonementLessonSale = document.getElementById("ioAbonementLessonSale");
        var ioAbonementAmount = document.getElementById("ioAbonementAmount");

        // Получаем элементы DOM для второго скрипта
        var ioAbonementSelect = document.getElementById("ioAbonementSelect");
        var ioAbonementOptions = document.getElementById("ioAbonementOptions");
        var ioAbonementDropdownLessonCount = document.getElementById("ioAbonementDropdownLessonCount");
        var ioAbonementDropdownLessonAmount = document.getElementById("ioAbonementDropdownLessonAmount");

        // Значения массива для каждого индекса
        var valuesArray = [
            [4, 14, 0, 56],
            [8, 14, 0, 112],
            [12, 14, 0, 168],
            [16, 14, 0, 224],
            [24, 14, 0, 336],
            [32, 14, 0, 448],
            [80, 12.50, 120, 1000],
            [120, 11.50, 300, 1380],
            [160, 11, 480, 1760]
        ];

        // Функция для форматирования числа с двумя знаками после запятой, если они есть
        function formatNumber(number) {
            return Number.isInteger(number) ? number : number.toFixed(2);
        }

        // Функция для обновления значений для первого скрипта
        function updateValues(index) {
            var selectedValues = valuesArray[index];
            ioAbonementCount.textContent = selectedValues[0];
            ioAbonementLessonPrice.textContent = formatNumber(selectedValues[1]);
            ioAbonementLessonSale.textContent = formatNumber(selectedValues[2]);
            // Проверяем, если третий элемент массива равен 0, скрываем элемент
            if (selectedValues[2] === 0) {
                ioAbonementLessonSaleWrapper.style.display = "none";
            } else {
                ioAbonementLessonSaleWrapper.style.display = "flex";
            }
            ioAbonementAmount.textContent = formatNumber(selectedValues[3]);

            // Обновляем значения для второго скрипта
            updateValuesFromList(index + 1);
        }

        // Обработчик события изменения значения input range
        ioAmountRange.addEventListener("input", function () {
            var index = ioAmountRange.value - 1; // Индекс массива начинается с 0
            updateValues(index);
        });

        // Вызов функции для установки значений первого скрипта при загрузке страницы
        updateValues(ioAmountRange.value - 1);

        // Функция для обновления значений для второго скрипта
        function updateValuesFromList(selectedValue) {
            var selectedArray = valuesArray[selectedValue - 1];
            ioAbonementDropdownLessonCount.textContent = selectedArray[0];
            ioAbonementDropdownLessonAmount.textContent = formatNumber(selectedArray[3]);
        }

        // Обработчик клика по элементу списка для второго скрипта
        ioAbonementOptions.addEventListener("click", function (event) {
            var selectedValue = event.target.dataset.value;
            if (selectedValue) {
                updateValuesFromList(selectedValue);
                ioAmountRange.value = selectedValue;
                updateValues(selectedValue - 1);
            }
        });

        // Обработчик клика по основному элементу для второго скрипта
        ioAbonementSelect.addEventListener("click", function () {
            // Переключаем видимость списка
            ioAbonementOptions.style.display = ioAbonementOptions.style.display === "block" ? "none" : "block";
        });
    });
</script>

<!-- ============================================ Подарочный сертификат цены ============================================ -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Получаем элементы DOM
        var ioAmountRangeGift = document.getElementById("ioAmountRangeGift");
        var ioGiftCount = document.getElementById("ioGiftCount");
        var ioGiftLessonPrice = document.getElementById("ioGiftLessonPrice");
        var ioGiftLessonSaleWrapper = document.getElementById("ioGiftLessonSaleWrapper");
        var ioGiftLessonSale = document.getElementById("ioGiftLessonSale");
        var ioGiftAmount = document.getElementById("ioGiftAmount");

        // Получаем элементы DOM для второго скрипта
        var ioGiftSelect = document.getElementById("ioGiftSelect");
        var ioGiftOptions = document.getElementById("ioGiftOptions");
        var ioGiftDropdownLessonCount = document.getElementById("ioGiftDropdownLessonCount");
        var ioGiftDropdownLessonAmount = document.getElementById("ioGiftDropdownLessonAmount");

        // Значения массива для каждого индекса
        var valuesArray = [
            [4, 14, 0, 56],
            [8, 14, 0, 112],
            [12, 14, 0, 168],
            [16, 14, 0, 224],
            [24, 14, 0, 336],
            [32, 14, 0, 448],
            [80, 12.50, 120, 1000],
            [120, 11.50, 300, 1380],
            [160, 11, 480, 1760]
        ];

        // Функция для форматирования числа с двумя знаками после запятой, если они есть
        function formatNumber(number) {
            return Number.isInteger(number) ? number : number.toFixed(2);
        }

        // Функция для обновления значений
        function updateValues(index) {
            var selectedValues = valuesArray[index];
            ioGiftCount.textContent = selectedValues[0];
            ioGiftLessonPrice.textContent = formatNumber(selectedValues[1]);
            ioGiftLessonSale.textContent = formatNumber(selectedValues[2]);
            // Проверяем, если третий элемент массива равен 0, скрываем элемент
            if (selectedValues[2] === 0) {
                ioGiftLessonSaleWrapper.style.display = "none";
            } else {
                ioGiftLessonSaleWrapper.style.display = "flex";
            }
            ioGiftAmount.textContent = formatNumber(selectedValues[3]);

            // Обновляем значения для второго скрипта
            updateValuesFromList(index + 1);
        }

        // Функция для обновления значений для второго скрипта
        function updateValuesFromList(selectedValue) {
            var selectedArray = valuesArray[selectedValue - 1];
            ioGiftDropdownLessonCount.textContent = selectedArray[0];
            ioGiftDropdownLessonAmount.textContent = formatNumber(selectedArray[3]);

            // Устанавливаем значение input range
            ioAmountRangeGift.value = selectedValue;
        }

        // Обработчик события изменения значения input
        ioAmountRangeGift.addEventListener("input", function () {
            var index = ioAmountRangeGift.value - 1; // Индекс массива начинается с 0
            updateValues(index);
        });

        // Вызов функции для установки значений при загрузке страницы
        updateValues(ioAmountRangeGift.value - 1);

        // Обработчик клика по элементу списка для второго скрипта
        ioGiftOptions.addEventListener("click", function (event) {
            var selectedValue = event.target.dataset.value;
            if (selectedValue) {
                updateValuesFromList(selectedValue);
                updateValues(selectedValue - 1);
            }
        });

        // Обработчик клика по основному элементу для второго скрипта
        ioGiftSelect.addEventListener("click", function () {
            // Переключаем видимость списка
            ioGiftOptions.style.display = ioGiftOptions.style.display === "block" ? "none" : "block";
        });
    });
</script>

<!-- ============================================ Демо цены ============================================ -->
<style>
    #ioDemoLessonsListButton {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        gap: var(--io-size-050);
        cursor: pointer;
    }

    #ioDemoLessonsListButton::after {
        content: '';
        display: block;
        width: var(--io-size-200);
        height: var(--io-size-200);
        border-radius: var(--io-size-025);
        background-color: var(--io-purple-secondary);
        background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M18.9999 8.99997H11V0.999936C11 0.448058 10.552 0 9.99991 0C9.44803 0 8.99997 0.448058 8.99997 0.999936V8.99997H0.999936C0.448058 8.99997 0 9.44803 0 9.99991C0 10.552 0.448058 11 0.999936 11H8.99997V18.9999C8.99997 19.5519 9.44803 20 9.99991 20C10.552 20 11 19.5519 11 18.9999V11H18.9999C19.5519 11 20 10.552 20 9.99991C20 9.44803 19.5519 8.99997 18.9999 8.99997Z' fill='%237A61FF'/%3E%3C/svg%3E%0A");
        background-position: center;
        background-size: var(--io-size-100) var(--io-size-100);
        background-repeat: no-repeat;
        border: 1px solid transparent;
        -webkit-transition: var(--io-transition);
        -o-transition: var(--io-transition);
        transition: var(--io-transition);
    }

    #ioDemoLessonsListButton.active::after {
        background-image: url("data:image/svg+xml,%3Csvg width='20' height='2' viewBox='0 0 20 2' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1 1H19' stroke='%237A61FF' stroke-width='2' stroke-linecap='round'/%3E%3C/svg%3E%0A");
        -webkit-transform: none;
        -ms-transform: none;
        transform: none;
    }

    #ioDemoLessonsList {
        display: none;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        gap: var(--io-size-050);
        -webkit-transition: var(--io-transition);
        -o-transition: var(--io-transition);
        transition: var(--io-transition);
    }

    #ioDemoLessonsList.active {
        display: flex;
    }

    #ioDemoLessonsList>div {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        gap: var(--io-size-050);
    }

    #ioDemoLessonsList>div button {
        width: var(--io-size-125);
        height: var(--io-size-125);
        background-position: center;
        background-size: 12px 12px;
        background-repeat: no-repeat;
        background-color: transparent;
        background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M18.9999 8.99997H11V0.999936C11 0.448058 10.552 0 9.99991 0C9.44803 0 8.99997 0.448058 8.99997 0.999936V8.99997H0.999936C0.448058 8.99997 0 9.44803 0 9.99991C0 10.552 0.448058 11 0.999936 11H8.99997V18.9999C8.99997 19.5519 9.44803 20 9.99991 20C10.552 20 11 19.5519 11 18.9999V11H18.9999C19.5519 11 20 10.552 20 9.99991C20 9.44803 19.5519 8.99997 18.9999 8.99997Z' fill='%23ee292d'/%3E%3C/svg%3E%0A");
        border: 2px solid #ee292d;
        border-radius: 50%;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    #ioDemoLessonsList>div button::before {
        display: none;
    }
</style>
<script>
    // Получаем элементы
    var ioDemoCourseCheck = document.getElementById('ioDemoCourseCheck');
    var ioDemoCountInner = document.getElementById('ioDemoCountInner');
    var ioDemoCount = document.getElementById('ioDemoCount');
    var ioDemoCountMobile = document.getElementById('ioDemoCountMobile');
    var ioDemoLessonPrice = document.getElementById('ioDemoLessonPrice');
    var ioDemoLessonSale = document.getElementById('ioDemoLessonSale');
    var ioDemoAmount = document.getElementById('ioDemoAmount');
    var ioDemoAmountMobile = document.getElementById('ioDemoAmountMobile');
    var lessonsListBlock = document.getElementById('ioDemoLessonsList');
    var lessonsListButton = document.getElementById('ioDemoLessonsListButton');

    // Устанавливаем обработчик события для изменения состояния чекбоксов
    ioDemoCourseCheck.addEventListener('change', updateValues);

    // Вызываем функцию для установки начальных значений
    updateValues();

    // Получаем блок для вывода лейблов выбранных чекбоксов
    lessonsListButton.addEventListener('click', function() {
        // Проверяем, есть ли у ioDemoLessonsList дочерние элементы
        var hasChildren = lessonsListBlock.hasChildNodes();

        // Если у ioDemoLessonsList нет дочерних элементов, не обрабатываем событие
        if (!hasChildren) {
            return;
        }

        // Получаем элемент ioDemoLessonsList
        var isListActive = lessonsListBlock.classList.contains('active');

        // Если класс есть, убираем его, иначе добавляем
        if (isListActive) {
            lessonsListBlock.classList.remove('active');
            lessonsListButton.classList.remove('active');
        } else {
            lessonsListBlock.classList.add('active');
            lessonsListButton.classList.add('active');
        }
    });

    function updateValues() {
        // Получаем отмеченные чекбоксы
        var checkedCheckboxes = document.querySelectorAll('.io-checkbox:checked');
        
        // Количество отмеченных чекбоксов
        var count = checkedCheckboxes.length;
        
        // Обновляем значения в соответствующих блоках
        ioDemoCountInner.textContent = count;
        ioDemoCount.textContent = count;
        ioDemoCountMobile.textContent = count;
        ioDemoLessonPrice.textContent = 14;
        ioDemoLessonSale.textContent = 8 * count;
        ioDemoAmount.textContent = (14 - 8) * count;
        ioDemoAmountMobile.textContent = (14 - 8) * count;

        // Получаем блок для вывода лейблов выбранных чекбоксов
        lessonsListBlock.innerHTML = ''; // Очищаем блок перед добавлением новых значений

        // Добавляем лейблы выбранных чекбоксов в блок
        checkedCheckboxes.forEach(function(checkbox) {
            var label = document.querySelector('label[for="' + checkbox.id + '"]');
            if (label) {
                var lessonDiv = document.createElement('div');
                lessonDiv.className = 'io-check';

                var lessonLabel = document.createElement('span');
                lessonLabel.className = 'io-fw-semibold io-purple-main';
                lessonLabel.textContent = label.textContent;

                var button = document.createElement('button');
                button.addEventListener('click', function() {
                    // Обработчик события для клика по кнопке
                    lessonDiv.remove(); // Убираем div с лейблом из ioDemoLessonsList
                    checkbox.checked = false; // Снимаем соответствующий чекбокс
                    updateValues(); // Пересчитываем значения
                    clearLessonsList(); // Убираем активность у кнопки и блока, если не осталось дочерних элементов
                });

                lessonDiv.appendChild(lessonLabel);
                lessonDiv.appendChild(button);

                lessonsListBlock.appendChild(lessonDiv);
            }
        });
    }

    // Функция для удаления дочерних элементов из ioDemoLessonsList
    function clearLessonsList() {
        // Проверяем, есть ли у элемента ioDemoLessonsList дочерние элементы
        var hasChildren = lessonsListBlock.hasChildNodes();

        // Если у ioDemoLessonsList нет дочерних элементов, убираем активность у кнопки и блока
        if (!hasChildren) {
            lessonsListBlock.classList.remove('active');
            lessonsListButton.classList.remove('active');
        }
    }

    // Пример вызова функции clearLessonsList()
    // clearLessonsList();
</script>