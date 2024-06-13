<?php
/**
 * Контакты contacts.html
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Контакты
 */

include 'templates/price.php';
include 'templates/popular-courses.php';
include 'templates/montessori-work.php';

get_header(); // подключаем header.php ?>
<main>
    <!-- <?php the_content(); // контент ?> -->  
    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>  
    <section class="io-contacts io-section-first">
        <div class="container-xxl io-container-mw">
            <div class="io-contacts__block io-block-shadow">
                <div class="io-contacts__data-item">
                    <h1 class="io-contacts__data-heading io-heading-3">Чат с Монтессори центром</h1>
                    <div class="io-contacts__data-inner">
                        <div class="io-social">
                            <a class="io-social__whatsapp io-tooltip" href="https://wa.me/+380507753353" target="_blank">
                                <img src="/wp-content/themes/interschooltemplate/images/io-whatsapp.png" alt="">
                                <span class="io-tooltip__text">WhatsApp</span>
                            </a>
                            <a class="io-social__facebook io-tooltip" href="https://www.messenger.com/t/montessori.ua" target="_blank">
                                <img src="/wp-content/themes/interschooltemplate/images/io-messenger.png" alt="">
                                <span class="io-tooltip__text">Facebook Messenger</span>
                            </a>
                            <a class="io-social__telegram io-tooltip" href="https://telegram.me/+380507753353" target="_blank">
                                <img src="/wp-content/themes/interschooltemplate/images/io-telegram.png" alt="">
                                <span class="io-tooltip__text">Telegram</span>
                            </a>
                            <a class="io-social__viber io-tooltip" href="viber://chat?number=%2B380507753337" target="_blank">
                                <img src="/wp-content/themes/interschooltemplate/images/io-viber.png" alt="">
                                <span class="io-tooltip__text">Viber</span>
                            </a>
                            <a class="io-social__instagram io-tooltip" href="https://www.instagram.com/montessoriua/" target="_blank">
                                <img src="/wp-content/themes/interschooltemplate/images/io-instagram.png" alt="">
                                <span class="io-tooltip__text">Instagram</span>
                            </a>
                        </div>
                        <div class="io-contacts__mail">
                            <a href="mailto:info@interschool.online" class="io-link io-link--purple ">info@interschool.online</a>
                        </div>
                    </div>
                </div>
                <div class="io-contacts__data">
                    <div class="io-contacts__data-item">
                        <h2 class="io-contacts__data-heading io-heading-3">Телефоны</h2>
                        <div class="io-contacts__data-inner">
                            <div class="io-contacts__phones">
                                <a href="tel:+1 (210) 756-7188" class="io-link io-contacts__link">+1 (210) 756-7188</a>
                                <span class="io-contacts__country">США</span>
                                <a href="tel:+44 (204) 577-16-47" class="io-link io-contacts__link">+44 (204) 577-16-47</a>
                                <span class="io-contacts__country">Великобритания</span>
                                <a href="tel:+972 (33) 760-3334" class="io-link io-contacts__link">+972 (33) 760-3334</a>
                                <span class="io-contacts__country">Израиль</span>
                                <a href="tel:+380 (50) 775-33-53" class="io-link io-contacts__link">+380 (50) 775-33-53</a>
                                <span class="io-contacts__country">Украина</span>
                            </div>
                        </div>
                    </div>
                    <div class="io-contacts__data-item">
                        <h2 class="io-contacts__data-heading io-heading-3">Почтовый адрес</h2>
                        <p>19179 Blanco Rd<br>Ste 105 PMB 1017<br>San Antonio, TX 78258<br>United States</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
    <section class="io-contacts io-section-first">
        <div class="container-xxl io-container-mw">
            <div class="io-contacts__block io-block-shadow">
                <div class="io-contacts__data-item">
                    <h1 class="io-contacts__data-heading io-heading-3">Chat with Montessori Center</h1>
                    <div class="io-contacts__data-inner">
                        <div class="io-social">
                            <a class="io-social__whatsapp io-tooltip" href="#" target="_blank">
                                <img src="/wp-content/themes/interschooltemplate/images/io-whatsapp.png" alt="">
                                <span class="io-tooltip__text">WhatsApp</span>
                            </a>
                            <a class="io-social__facebook io-tooltip" href="https://www.messenger.com/t/montessori.ua" target="_blank">
                            <img src="/wp-content/themes/interschooltemplate/images/io-messenger.png" alt="">
                            <span class="io-tooltip__text">Facebook Messenger</span>
                        </a>
                            <a class="io-social__telegram io-tooltip" href="#" target="_blank">
                                <img src="/wp-content/themes/interschooltemplate/images/io-telegram.png" alt="">
                                <span class="io-tooltip__text">Telegram</span>
                            </a>
                            <a class="io-social__viber io-tooltip" href="#" target="_blank">
                                <img src="/wp-content/themes/interschooltemplate/images/io-viber.png" alt="">
                                <span class="io-tooltip__text">Viber</span>
                            </a>
                            <a class="io-social__instagram io-tooltip" href="https://www.instagram.com/montessoriua/" target="_blank">
                                <img src="/wp-content/themes/interschooltemplate/images/io-instagram.png" alt="">
                                <span class="io-tooltip__text">Instagram</span>
                            </a>
                        </div>
                        <div class="io-contacts__mail">
                            <a href="mailto:info@interschool.online" class="io-link io-link--purple ">info@interschool.online</a>
                        </div>
                    </div>
                </div>
                <div class="io-contacts__data">
                    <div class="io-contacts__data-item">
                        <h2 class="io-contacts__data-heading io-heading-3">Phones</h2>
                        <div class="io-contacts__data-inner">
                            <div class="io-contacts__phones">
                                <a href="tel:+1 (210) 756-7188" class="io-link io-contacts__link">+1 (210) 756-7188</a>
                                <span class="io-contacts__country">USA</span>
                                <a href="tel:+44 (204) 577-16-47" class="io-link io-contacts__link">+44 (204) 577-16-47</a>
                                <span class="io-contacts__country">United Kingdom</span>
                                <a href="tel:+972 (33) 760-3334" class="io-link io-contacts__link">+972 (33) 760-3334</a>
                                <span class="io-contacts__country">Israel</span>
                                <a href="tel:+380 (50) 775-33-53" class="io-link io-contacts__link">+380 (50) 775-33-53</a>
                                <span class="io-contacts__country">Ukraine</span>
                            </div>
                        </div>
                    </div>
                    <div class="io-contacts__data-item">
                        <h2 class="io-contacts__data-heading io-heading-3">Mailing address</h2>
                        <p>19179 Blanco Rd<br>Ste 105 PMB 1017<br>San Antonio, TX 78258<br>United States</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <?php io_popular_courses(); ?>

    <?php io_montessori_work(); ?>

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