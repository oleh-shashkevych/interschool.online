<?php
/**
 * Цены и оплата prices.html
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Цены и оплата
 */

include 'templates/directions.php'; // подключаем directions.php

get_header(); // подключаем header.php ?>
<main>
    <?php the_content(); // контент ?>
    <section class="mc-about-choose-section mc-section">
        <div class="container-xxl mc-container-mw">
            <h2 class="mc-heading-t">
                <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                    Все курсы
                <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                    All courses
                <?php } ?>
            </h2>
            <?php io_directions(); // направления и курсы ?>
        </div>
    </section>
</main>
<?php get_footer(); // подключаем footer.php ?>
<script>    
    dselect(document.querySelector('#mc-price-section-currency'))
    dselect(document.querySelector('#mc-price-section-type'))
</script>
<script>
    // Функция для удаления куки
    function deleteCookie(cname) {
        document.cookie = cname + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
    }

    // Вызов функции для удаления куки с именем 'currentTab'
    deleteCookie('currentTab');
</script>