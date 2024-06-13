<?php
/**
 * Шаблон Цены - Абонемент
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Цены - Абонемент
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

    .hide {
        display: none;
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
</style>

<main>
    <div class="io-section-first">
        <div class="container-xxl io-container-mw">
            <div class="io-price__sidebar">
                <div class="io-price__sidebar-sticky">
                    <div class="io-price__sidebar-inner">
                        <div class="io-price__detail">
                            <!-- Абонемент -->
                            <div class="io-price__detail-title-wrapper ">
                                <p class="io-price__detail-title">
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Ваш заказ'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Your order'; } ?>
                                    <span class="io-purple-main io-fw-semibold">"<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Абонемент'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Subscription'; } ?>"</span>
                                </p>
                                <div><div class="io-warning"><span>Можно использовать на любых курсах</span></div></div>
                            </div>
                            <!-- Абонемент -->
                            <div class="io-price__detail-item ">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Количество уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Number of lessons'; } ?></p>
                                <p id="ioAbonementCount">1</p>
                            </div>
                            <div class="io-price__detail-item ">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Цена урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson price'; } ?></p>
                                <p><span id="ioAbonementLessonPrice">1</span> <span class="io-currency__from-select">USD</span></p>
                            </div>
                            <div class="io-price__detail-item " id="ioAbonementLessonSaleWrapper">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Скидка'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Discount'; } ?></p>
                                <p class="io-pink-main"><span id="ioAbonementLessonSale">1</span> <span class="io-currency__from-select">USD</span></p>
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
                            <!-- Абонемент -->
                            <div class="io-price__detail-item io-last ">
                                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'К оплате'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Total'; } ?></p>
                                <p class="io-line-through" id="ioAbonementAmountOldWrapper"><span id="ioAbonementAmountOld">1</span> <span class="io-currency__from-select">USD</span></p>
                                <p><span id="ioAbonementAmount">1</span> <span class="io-currency__from-select">USD</span></p>
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
                                <a class="io-price__fake active">
                                    <div></div>
                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Абонемент'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Subscription'; } ?></p>
                                </a>
                                <a href="<?php echo get_permalink(1228); ?>" class="io-price__fake">
                                    <div></div>
                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Пробные уроки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Trial lessons'; } ?></p>
                                </a>
                                <a  href="<?php echo get_permalink(106); ?>" class="io-price__fake">
                                    <div></div>
                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Подарочный сертификат'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Gift card'; } ?></p>
                                </a>
                            </form>
                        </div>
                        <!-- Абонемент -->
                        <div class="io-price__step ">
                            <div class="io-price__heading">
                                <span>2</span>
                                <p class="d-none d-sm-block"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Выберите количество уроков в абонементе'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Choose the number of lessons in the subscription'; } ?></p>
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
                        <div class="io-price__step ">
                            <div class="io-price__heading">
                                <span>3</span>
                                <p class="d-none d-sm-block"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Укажите ваши контактные данные'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Your contact information'; } ?></p>
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
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                                    <div class="custom-select" id="iopocketphonelabel">
                                        <div class="select-selected">+0</div>
                                        <input class="custom-input" id="iopocketphone" onblur="cleanPhoneInput(this)" name="phone" type="phone" placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите номер телефона'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter phone number'; } ?>">
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
                                    <div class="custom-select" id="iopocketphonelabel">
                                        <div class="select-selected">+0</div>
                                        <input class="custom-input" id="iopocketphone" onblur="cleanPhoneInput(this)" name="phone" type="phone" placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите номер телефона'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter phone number'; } ?>">
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
                                    <input id="ioAbonementEmail" onblur="cleanEmailInput(this)" class="io-email-input" type="text" required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите email'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter your email'; } ?>">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="io-d-desktop">
                        <!-- Абонемент -->
                        <div class="">
                            <div class="io-price__calculation-terms">
                                <p class="io-price__calculation-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Правила для <span class="io-fw-bold io-purple-main">Абонемента</span>'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo '<span class="io-fw-bold io-purple-main">Subscription</span> rules'; } ?></p>
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
                    <!-- Абонемент -->
                    <div class="">
                        <div class="io-price__calculation-terms">
                            <p class="io-price__calculation-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Правила для <span class="io-fw-bold io-purple-main">Абонемента</span>'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo '<span class="io-fw-bold io-purple-main">Subscription</span> rules'; } ?></p>
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