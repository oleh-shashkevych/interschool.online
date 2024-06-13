<?php
function io_news() {
    ob_start(); // Start output buffering to capture the HTML content
?>
    <style>
        .io-homereview__slider-wrapper {
            max-width: 880px;
            width: calc(100vw - 64px - 440px);
        }
        @media (max-width: 1199.5px) {
            .io-news-slider {
                display: none;
            }
        }
        @media (max-width: 992px) {
            .io-homereview__slider-wrapper {
                width: calc(100vw - 32px);
            }
            .io-news-slider {
                display: block;
            }
        }
    </style>
    <section class="io-intersection io-news-slider">
        <div class="io-flex-between mb-4">
            <h2 class="io-heading-2">Новости</h2>
            <div class="io-pagination">
                <div class="io-popular__arrows io-pagination__arrows">
                    <button class="io-news__prev io-pagination__prev" aria-label="Предыдущая страница"></button>
                    <button class="io-news__next io-pagination__next" aria-label="следующая страница"></button>
                </div>
            </div>
        </div>
        <div class="io-homereview__slider-wrapper">
            <div id="slider-news" class="keen-slider">
                <div class="keen-slider__slide io-block io-homereview__slide">
                    <a class="io-news__item p-0 border-0" href="<?php echo get_permalink(127); ?>">
                        <div class="io-news__item-img">
                            <img src="/wp-content/themes/interschooltemplate/images/1920x845_summer_rus.jpg" alt="">
                        </div>
                        <div class="io-news__item-data">
                            <div class="io-news__item-data-top">
                                <span class="io-news__item-date">18 октября 2022</span>
                                <h2 class="io-news__item-heading">Летние скидки! -1000 грн на каждые 16 уроков</h2>
                            </div>
                            <p class="io-news__item-text">Дорогие студенты и родители! Мы преподаем онлайн и рады сообщить Вам, что мы добавили несколько новых предметов.</p>
                        </div>
                    </a>
                </div>
                <div class="keen-slider__slide io-block io-homereview__slide">
                    <a class="io-news__item p-0 border-0" href="<?php echo get_permalink(127); ?>">
                        <div class="io-news__item-img">
                            <img src="/wp-content/themes/interschooltemplate/images/io-news-1.jpg" alt="">
                        </div>
                        <div class="io-news__item-data">
                            <div class="io-news__item-data-top">
                                <span class="io-news__item-date">03 июня 2022</span>
                                <h2 class="io-news__item-heading">Приведи друга и получи скидку 15%</h2>
                            </div>
                            <p class="io-news__item-text">Даем скидку за друзей! Приведи друга, пусть он скажет, что пришел по рекомендации от тебя и получи скидку 15%...</p>
                        </div>
                    </a>
                </div>
                <div class="keen-slider__slide io-block io-homereview__slide">
                    <a class="io-news__item p-0 border-0" href="<?php echo get_permalink(127); ?>">
                        <div class="io-news__item-img">
                            <img src="/wp-content/themes/interschooltemplate/images/io-news-1.jpg" alt="">
                        </div>
                        <div class="io-news__item-data">
                            <div class="io-news__item-data-top">
                                <span class="io-news__item-date">03 июня 2022</span>
                                <h2 class="io-news__item-heading">Приведи друга и получи скидку 15%</h2>
                            </div>
                            <p class="io-news__item-text">Даем скидку за друзей! Приведи друга, пусть он скажет, что пришел по рекомендации от тебя и получи скидку 15%...</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php
    $output = ob_get_clean(); // Get the captured HTML content and clean the output buffer
    echo $output; // Output the final HTML
}
?>