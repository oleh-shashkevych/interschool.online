<?php
/**
 * Отзывы reviews.html
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Отзывы
 */

include 'templates/price.php';
get_header(); // подключаем header.php ?>
<main>
    <!-- <?php the_content(); // контент ?> -->
    <section class="io-feedback io-section-first">
        <div class="container-xxl io-container-mw">
            <div class="io-feedback__block io-block io-block--purple">
                <div class="io-feedback__data">
                    <h1 class="io-heading-2"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Отзывы о Монтессори центре'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Reviews about Montessori Center'; } ?></h1>
                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Нам доверяют, нас рекомендуют!'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'We are trusted and recommended!'; } ?></p>
                </div>
                <div class="io-feedback__img">
                    <img src="/wp-content/themes/interschooltemplate/images/feedback.svg" alt="">
                </div>
            </div>
            <div class="io-container-inner">
                <div class="io-feedback__grid">
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">ТС</div>
                                <h3 class="io-feedback__item-name">Татьяна С.</h3>
                            </div>
                            <div class="io-rating__stars io-feedback__item-stars">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                            </div>
                        </div>
                        <div class="io-feedback__item-text-wrapper io-text-wrapper">
                            <p>Еще раз хочу сказать, что Наташа бежит к пианино утром первым делом, как только встает с кровати! Она повторяет все мелодии, тренирует гаммы, пока всё не доиграет, даже не идет завтракать. Мы очень довольны, а может она будет пианисткой! Спасибо учительнице Снежане за терпение и любовь. </p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">UN</div>
                                <h3 class="io-feedback__item-name">Ulysses Nightingale</h3>
                            </div>
                            <div class="io-rating__stars io-feedback__item-stars">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                            </div>
                        </div>
                        <div class="io-feedback__item-text-wrapper io-text-wrapper">
                            <p>Fantastic piano lessons! My kid looks forward to them every week.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">Е</div>
                                <h3 class="io-feedback__item-name">Екатерина</h3>
                            </div>
                            <div class="io-rating__stars io-feedback__item-stars">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                            </div>
                        </div>
                        <div class="io-feedback__item-text-wrapper io-text-wrapper">
                            <p>Мы довольны, занимаемся полгода, уже знаем ноты и сын весело играет мелодии. Записала второго ребенка помладше, посмотрим, может тоже получится.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">MT</div>
                                <h3 class="io-feedback__item-name">Mark T.</h3>
                            </div>
                            <div class="io-rating__stars io-feedback__item-stars">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                            </div>
                        </div>
                        <div class="io-feedback__item-text-wrapper io-text-wrapper">
                            <p>We have seen our daughter grow, not just as a pianist, but also as an individual. She\'s more confident, patient, and self-assured. She has learned to appreciate the beauty of music and has found a means of self-expression that she loves. As parents, seeing our child develop a passion while learning valuable skills has been incredibly fulfilling.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">АК</div>
                                <h3 class="io-feedback__item-name">Алексей Купатов</h3>
                            </div>
                            <div class="io-rating__stars io-feedback__item-stars">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                            </div>
                        </div>
                        <div class="io-feedback__item-text-wrapper io-text-wrapper">
                            <p>За несколько недель мой сын столько всего освоил на фортепиано. Ваши педагоги супер!</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">ИТ</div>
                                <h3 class="io-feedback__item-name">Иван Туревич</h3>
                            </div>
                            <div class="io-rating__stars io-feedback__item-stars">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                            </div>
                        </div>
                        <div class="io-feedback__item-text-wrapper io-text-wrapper">
                            <p>Удивительные уроки фортепиано! Спасибо вам!</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">VI</div>
                                <h3 class="io-feedback__item-name">Valentia Ironwood</h3>
                            </div>
                            <div class="io-rating__stars io-feedback__item-stars">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                            </div>
                        </div>
                        <div class="io-feedback__item-text-wrapper io-text-wrapper">
                            <p>As a parent, it is an absolute joy to write this review about our experience with the Montessori Center. Our daughter has been attending piano lessons at the institution for over a year now, and the progress she has made is nothing short of astounding. We highly recommend the Montessori Center to any parent looking to instil a love of music and the arts in their children.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">AZ</div>
                                <h3 class="io-feedback__item-name">Amadeo Zaragoza</h3>
                            </div>
                            <div class="io-rating__stars io-feedback__item-stars">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                            </div>
                        </div>
                        <div class="io-feedback__item-text-wrapper io-text-wrapper">
                            <p>La metodología Montessori realmente funciona. Mi hija no solo ha mejorado en su juego, sino que también ha ganado confianza.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">ТК</div>
                                <h3 class="io-feedback__item-name">Таня и Сергей Кулишовы</h3>
                            </div>
                            <div class="io-rating__stars io-feedback__item-stars">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                            </div>
                        </div>
                        <div class="io-feedback__item-text-wrapper io-text-wrapper">
                            <p>Дочка занимается фортепиано, сын - на гитаре. Пока раз в неделю, на каникулах добавим по два раза в неделю. Учителя хорошие, добрые, как у них столько терпения хватает, мальчик у нас иногда балуется. Дети играют с удовольствием, мы довольны!</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">BP</div>
                                <h3 class="io-feedback__item-name">Beatriz Palomares</h3>
                            </div>
                            <div class="io-rating__stars io-feedback__item-stars">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                            </div>
                        </div>
                        <div class="io-feedback__item-text-wrapper io-text-wrapper">
                            <p>Las lecciones de piano en línea en el Centro Montessori valen cada centavo. Mi hijo está muy impresionado.</p>
                        </div>
                    </div>
                </div>
                <div class="io-feedback__bottom-wrapper io-flex-end">
                    <div class="io-pagination">
                        <div class="io-pagination__count">
                            <span class="io-black-main-op-60">Страница</span>
                            <span>1/10</span>
                        </div>
                        <div class="io-pagination__arrows">
                            <button class="io-pagination__prev disabled"></button>
                            <button class="io-pagination__next"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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