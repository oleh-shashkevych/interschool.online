<?php
/**
 * Курс Виолончель
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Курс Виолончель
 */

include 'templates/price.php';
include 'templates/popular-courses.php';
include 'templates/montessori-work.php';
include 'templates/news.php';


get_header('course'); // подключаем header.php ?>

<!-- Custom CSS for page template -->
<style>
    html {
        scroll-behavior: auto !important;
    }

    .io-header {
        position: sticky;
        top: 0;
        transition: var(--io-transition);
        padding-bottom: 0;
        height: 74px;
    }

    .io-breadcrumbs__wrapper {
        display: none;
    }

    body {
        opacity: 1;
    }

    #courseAccordion-collapseTen.show>div {
        padding-bottom: 0;
    }

    #courseAccordion-collapseTen.show {
        position: relative;
    }

    #courseAccordion-collapseTen.show::after {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        bottom: -2px;
        height: 2px;
        background-color: #fbfaff;
    }

    /* .io-footer {
        padding-bottom: 115px;
    } */

    @media (max-width: 1199.5px) {
        .io-header {
            padding-bottom: 8px !important;
            height: 66px;
        }

        .io-footer {
            padding-bottom: 0;
        }
    }

    @media (max-width: 991.5px) {
        .io-header {
            height: 58px;
        }
    }

    @media (max-width: 575.5px) {
        /* .scrolldown .io-header,
        .scrolldown2 .io-header {
            top: -58px;
        } */

        .io-tabs-wrapper {
            transition: var(--io-transition);
        }

        /* .scrolldown .io-tabs-wrapper,
        .scrolldown2 .io-tabs-wrapper {
            top: 0;
        } */
    }

</style>
<?php the_content(); // контент ?>


<?php 
    if (ICL_LANGUAGE_CODE === 'ru') {
        $ioTab1 = 'nav-tab-1';
        $ioTab2 = 'kak-prohodyat-uroki';
        $ioTab3 = 'prepodavateli';
        $ioTab4 = 'programma';
        $ioTab5 = 'raspisanie';
        $ioTab6 = 'ceny-i-oplata';
        $ioTab7 = 'otzyvy';
        $ioTab8 = 'faq';
        $ioTab9 = 'poleznye-stati';
        $ioTab10 = 'galereya';

        $contentTab2 = '';
        $contentTab3 = '
            <section class="io-intersection io-course-lectors">
                <h2 class="io-heading-2 io-course-lectors__heading">Преподаватели виолончели</h2>
                <div class="io-course-lectors__text-wrapper io-text-wrapper">
                    <div class="io-check io-check--start">
                        <span>Каждый преподаватель виолончели в Монтессори центре имеет высшее образованием по специальности виолончель.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>Каждый наш педагог имеет большой опыт работы с учащимися всех возрастов и внимательно сопровождает каждого студента в процессе обучения.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>Преподаватели виолончели в нашей школе активно выступают в качестве солистов и в составе оркестров и ансамблей, постоянно совершенствуя свои музыкальные и исполнительские навыки.</span>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            
                            <picture>
                                <source srcset="/wp-content/uploads/2024/04/Юлия-Бугаенко.jpg" type="image/jpeg">
                                <img src="/wp-content/uploads/2024/04/Юлия-Бугаенко.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Юлия Бугаенко</h3>
                            <p class="io-course-lectors__item-header-text-work">Педагог виолончели</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Юлия Бугаенко - педагог виолончели в Монтессори центре. Юлия окончила Национальную музыкальную академию им. П.И.Чайковского и получила диплом бакалавра музыкального искусства, специализация виолончель. Сейчас Юлия продолжает обучение в магистратуре консерватории</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Читать далее
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Юлия имеет опыт преподавания детям и взрослым. На первых уроках виолончели для каждого студента педагог уделяет внимание правильной постановке рук, корпуса, детально показывает всё на собственном примере и с первых уроков учит извлекать звуки на этом замечательном и уникальном музыкальном инструменте. </p>
                            <p>Методические принципы Юлии Бугаенко основываются на лучших мировых школах. В программу входят произведения классической и современной музыки, в том числе из кинофильмов, переложения оркестровых произведений, лучшие образцы виолончельной музыки. Уроки Юлия проводит на русском, украинском и английском языке.</p>
                        </div>
                    </div>
                </div>
            </section>
        ';
        $contentTab4 = '';
        $contentTab5 = '
            <section class="io-intersection io-course-schedule">
                <div class="io-course-schedule__data">
                    <h2 class="io-heading-2">Расписание курса</h2>
                    <div class="io-course-schedule__data-inner">
                        <p>Мы преподаем каждый день, включая выходные</p>
                        <div class="io-day">
                            <div>Пн</div>
                            <div>Вт</div>
                            <div>Ср</div>
                            <div>Чт</div>
                            <div>Пт</div>
                            <div>Сб</div>
                            <div>Вс</div>
                        </div>
                        <span>Чтобы согласовать день недели и время вашего урока - напишите нам и администратор подберет вам удобное расписание!</span>
                    </div>
                    <h2 class="io-contacts__data-heading io-heading-3 mt-4">Написать нам</h2>
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
                </div>
                <div class="io-course-schedule__img">
                    <img src="/wp-content/themes/interschooltemplate/images/schedule.svg" alt="">
                </div>
            </section>
        ';
        $contentTab6 = '';
        $contentTab7 = '
            <section class="io-intersection io-course-feedback">
                <div class="io-flex-between">
                    <h2 class="io-heading-2">Отзывы студентов курса</h2>
                </div>
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
                <div class="io-flex-end">
                    <div class="io-pagination">
                        <div class="io-pagination__count">
                            <span>Страница</span>
                            <span>1/10</span>
                        </div>
                        <div class="io-pagination__arrows">
                            <button class="io-pagination__prev disabled"></button>
                            <button class="io-pagination__next"></button>
                        </div>
                    </div>
                </div>
            </section>
        ';
        $contentTab8 = '';
        $contentTab9 = '
            <section class="io-intersection io-course-blog">
                <div class="io-flex-between">
                    <h2 class="io-heading-2">Полезные статьи</h2>
                </div>
                <div class="io-blog__grid io-blog__grid--three-column">
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
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
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
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
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
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
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-04.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-04.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Piano-04.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Топ-5 упражнений для развития пальцевой техники</h3>
                            <p class="io-blog__content-text">Игра на фортепиано – это искусство, требующее не только музыкального слуха, но и отточенной техники. Одним из ключевых элементов является пальцевая техника...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-05.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-05.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Piano-05.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Как улучшить результаты онлайн уроков фортепиано для вашего ребенка</h3>
                            <p class="io-blog__content-text">Мир музыки полон гармонии, красоты и творчества. Однако, для детей, которые только начинают свое музыкальное путешествие, этот мир может быть загадочным и...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-06.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-06.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Piano-06.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Биология музыки: как обучение фортепиано влияет на развитие мозга ребенка</h3>
                            <p class="io-blog__content-text">Музыкальное образование - это не просто вопрос эстетики или личного удовольствия. Научные исследования показали, что обучение игре на музыкальном инструменте...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-07.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-07.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Piano-07.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Секреты пианистов: как достигаются невероятные результаты в игре на фортепиано</h3>
                            <p class="io-blog__content-text">Фортепиано – это уникальный инструмент, способный создавать великолепные музыкальные произведения. Но за каждым касанием клавиш скрывается огромная работа...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-08.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-08.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Piano-08.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Как поддержать мотивацию ребенка во время онлайн-обучения фортепиано</h3>
                            <p class="io-blog__content-text">Онлайн-обучение открыло новые возможности для многих семей. Однако это также может вызвать проблемы с поддержанием мотивации у детей. В этой статье мы поделим...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-09.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-09.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Piano-09.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Педагогика фортепиано в цифровую эру: руководство для родителей</h3>
                            <p class="io-blog__content-text">В современном мире технологии полностью изменили наш подход к образованию, и обучение игре на фортепиано не является исключением. Новые цифровые ресурсы и инстр...</p>
                        </div>
                    </a>
                </div>
                <div class="io-flex-end">
                    <div class="io-pagination">
                        <div class="io-pagination__count">
                            <span>Страница</span>
                            <span>1/10</span>
                        </div>
                        <div class="io-pagination__arrows">
                            <button class="io-pagination__prev disabled"></button>
                            <button class="io-pagination__next"></button>
                        </div>
                    </div>
                </div>
            </section>
        ';
        $contentTab10 = '';
    } elseif (ICL_LANGUAGE_CODE === 'en') {
        $ioTab1 = 'nav-tab-1';
        $ioTab2 = 'how-are-the-lessons-going';
        $ioTab3 = 'teachers';
        $ioTab4 = 'program';
        $ioTab5 = 'schedule';
        $ioTab6 = 'prices-and-payment';
        $ioTab7 = 'reviews';
        $ioTab8 = 'faq';
        $ioTab9 = 'useful-articles';
        $ioTab10 = 'gallery';

        $contentTab2 = '';
        $contentTab3 = '
            <section class="io-intersection io-course-lectors">
                <h2 class="io-heading-2 io-course-lectors__heading">Cello teachers</h2>
                <div class="io-course-lectors__text-wrapper io-text-wrapper">
                    <div class="io-check io-check--start">
                        <span>Each cello teacher at the Montessori Center holds a bachelor\'s degree specializing in cello.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>Each of our instructors has extensive experience working with students of all ages and provides attentive guidance to each student throughout the learning process.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>Cello teachers at our school actively perform as soloists and in orchestras and ensembles, constantly refining their musical and performance skills.</span>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            
                            <picture>
                                <source srcset="/wp-content/uploads/2024/04/Юлия-Бугаенко.jpg" type="image/jpeg">
                                <img src="/wp-content/uploads/2024/04/Юлия-Бугаенко.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Julia Bugayenko</h3>
                            <p class="io-course-lectors__item-header-text-work">Cello Teacher</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Julia Bugayenko is a cello teacher at the Montessori Center. Julia graduated from the National Music Academy named after P.I. Tchaikovsky and received a Bachelor of Music degree, specializing in cello. Currently, Julia continues her studies in the conservatory\'s master\'s program.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Read more
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Julia has experience teaching both children and adults. In the initial cello lessons, the teacher pays attention to the correct hand and body placement, demonstrating everything in detail and teaching students how to produce sounds on this wonderful and unique musical instrument from the very beginning.</p>
                            <p>Julia Bugayenko\'s teaching principles are based on the best international schools. The curriculum includes classical and contemporary music pieces, including those from movies, arrangements of orchestral works, and the best examples of cello music. Julia conducts lessons in Russian, Ukrainian, and English.</p>
                        </div>
                    </div>
                </div>
            </section>
        ';
        $contentTab4 = '';
        $contentTab5 = '
            <section class="io-intersection io-course-schedule">
                <div class="io-course-schedule__data">
                    <h2 class="io-heading-2">Course Schedule</h2>
                    <div class="io-course-schedule__data-inner">
                        <p>We teach every day, including weekends</p>
                        <div class="io-day">
                            <div>Sun</div>
                            <div>Mon</div>
                            <div>Tue</div>
                            <div>Wed</div>
                            <div>Thu</div>
                            <div>Fri</div>
                            <div>Sat</div>
                        </div>
                        <span>To coordinate the day of the week and the time for your lesson, please write to us, and the administrator will arrange a convenient schedule for you!</span>
                    </div>
                    <h2 class="io-contacts__data-heading io-heading-3 mt-4">Contact Us</h2>
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
                </div>
                <div class="io-course-schedule__img">
                    <img src="/wp-content/themes/interschooltemplate/images/schedule.svg" alt="">
                </div>
            </section>
        ';
        $contentTab6 = '';
        $contentTab7 = '
            <section class="io-intersection io-course-feedback">
                <div class="io-flex-between">
                    <h2 class="io-heading-2">Student Reviews of the Course</h2>
                </div>
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
                <div class="io-flex-end">
                    <div class="io-pagination">
                        <div class="io-pagination__count">
                            <span>Page</span>
                            <span>1/10</span>
                        </div>
                        <div class="io-pagination__arrows">
                            <button class="io-pagination__prev disabled"></button>
                            <button class="io-pagination__next"></button>
                        </div>
                    </div>
                </div>
            </section>
        ';
        $contentTab8 = '';
        $contentTab9 = '
            <section class="io-intersection io-course-blog">
                <div class="io-flex-between">
                    <h2 class="io-heading-2">Useful Articles</h2>
                </div>
                <div class="io-blog__grid io-blog__grid--three-column">
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-01.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-01.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Piano-01.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Proper Hand Placement: The Foundation of Successful Piano Playing</h3>
                            <p class="io-blog__content-text">Playing the piano is an art that requires not only musical ear and creativity but also correct hand placement. Here are some tips to help you master this...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-02.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-02.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Piano-02.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">The History of the Piano: From Harpsichord to Modern Digital Pianos</h3>
                            <p class="io-blog__content-text">The piano is a unique musical instrument with a history that dates back centuries. From ancient harpsichords to modern digital models, the piano has come a...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-03.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-03.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Piano-03.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">How to Choose Suitable Repertoire for a Beginner Pianist</h3>
                            <p class="io-blog__content-text">Choosing repertoire for a beginner pianist is an important step towards musical mastery. Well-selected pieces will not only help develop technical skills but...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-04.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-04.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Piano-04.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Top 5 Exercises for Developing Finger Technique</h3>
                            <p class="io-blog__content-text">Playing the piano is an art that requires not only musical ear but also refined technique. One of the key elements is finger technique, which enables a pianist...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-05.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-05.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Piano-05.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">How to Improve Piano Online Lessons Results for Your Child</h3>
                            <p class="io-blog__content-text">The world of music is full of harmony, beauty, and creativity. However, for children who are just beginning their musical journey, this world can be mysterious...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-06.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-06.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Piano-06.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Biology of Music: How Piano Education Influences Child\'s Brain Development</h3>
                            <p class="io-blog__content-text">Music education is not just about aesthetics or personal enjoyment. Scientific research has shown that learning to play a musical instrument, such as the piano...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-07.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-07.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Piano-07.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Pianist Secrets: How Incredible Results in Piano Playing Are Achieved</h3>
                            <p class="io-blog__content-text">The piano is a unique instrument capable of creating magnificent musical masterpieces. But behind each touch of the keys lies tremendous effort. So, how do pianists...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-08.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-08.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Piano-08.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">How to Support Your Child\'s Motivation During Online Piano Learning</h3>
                            <p class="io-blog__content-text">Online learning has opened up new opportunities for many families. However, it can also present challenges in maintaining children\'s motivation. In this article, we...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-09.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/Piano-09.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Piano-09.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Piano Pedagogy in the Digital Era: A Guide for Parents</h3>
                            <p class="io-blog__content-text">In the modern world, technology has completely transformed our approach to education, and piano learning is no exception. New digital resources and tools make the learning...</p>
                        </div>
                    </a>
                </div>
                <div class="io-flex-end">
                    <div class="io-pagination">
                        <div class="io-pagination__count">
                            <span>Page</span>
                            <span>1/10</span>
                        </div>
                        <div class="io-pagination__arrows">
                            <button class="io-pagination__prev disabled"></button>
                            <button class="io-pagination__next"></button>
                        </div>
                    </div>
                </div>
            </section>
        ';
        $contentTab10 = '';
    } 
?>

<div class="io-section-first io-tabs-wrapper">
    <div class="container-xxl io-container-mw">
        <nav class="io-tabs" id="io-tabs">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button onclick="topFunction(); tabHistoryHandler(event, this); return false" class="nav-link active" data-tab-id="ioTab1" id="<?php echo $ioTab1; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab1; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab1; ?>" aria-selected="true"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Всё о курсе'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'All About the Course'; } ?></button>
                <button onclick="topFunction(); tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab2" id="<?php echo $ioTab2; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab2; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab2; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Как проходят уроки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'How Lessons Work'; } ?></button>
                <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab3" id="<?php echo $ioTab3; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab3; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab3; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Преподаватели'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Teachers'; } ?></button>
                <!-- <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab4" id="<?php echo $ioTab4; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab4; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab4; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Программа'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Curriculum'; } ?></button> -->
                <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab5" id="<?php echo $ioTab5; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab5; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab5; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Расписание'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Schedule'; } ?></button>
                <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab6" id="<?php echo $ioTab6; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab6; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab6; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Цены и оплата'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Prices and Payment'; } ?></button>
                <!-- <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab7" id="<?php echo $ioTab7; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab7; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab7; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Отзывы'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Reviews'; } ?></button> -->
                <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab8" id="<?php echo $ioTab8; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab8; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab8; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'FAQ'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'FAQ'; } ?></button>
                <!-- <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab9" id="<?php echo $ioTab9; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab9; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab9; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Полезные статьи'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Useful Articles'; } ?></button> -->
                <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab10" id="<?php echo $ioTab10; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab10; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab10; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Галерея'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Gallery'; } ?></button>
            </div>
        </nav>
    </div>
</div>

<!-- <div class="io-demo-wrapper-mobile">
    <div class="container-xxl io-container-mw">
        <div class="io-demo-inner-mobile">
            <div class="io-course-passport__bottom-price">
                <span class="ioArrayToTextElementsDemo">$6</span>
            </div>
            <button type="button" class="io-button__large io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">
                <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Записаться на пробный урок'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Sign Up for a Trial Lesson'; } ?>
            </button>
        </div>
    </div>
</div> -->

<div class="io-demo-wrapper-all d-none">
    <div class="container-xxl io-container-mw">
        <div class="io-demo-inner-all">
            <div class="io-course-passport__bottom-price">
                <span class="ioArrayToTextElementsDemo">$6</span>
            </div>
            <button type="button" class="io-button__large io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">
                <span class="d-none d-sm-block"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Записаться на пробный урок'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Sign Up for a Trial Lesson'; } ?></span>
                <span class="d-sm-none"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Пробный урок'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Trial Lesson'; } ?></span>
            </button>
            <button type="button" class="io-button__large io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">
                <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Задать вопрос'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Ask a question'; } ?>
            </button>
        </div>
        <div class="io-demo-inner-all-price">
            <p class="io-price__detail-title">
                <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Ваш заказ:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Your order:'; } ?>
                <span class="ms-2 io-price__detail-title--pocket io-purple-main io-fw-semibold"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Абонемент'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Subscription'; } ?></span>
                <span class="ms-2 io-price__detail-title--demo io-purple-main io-fw-semibold"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Пробные уроки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Trial lessons'; } ?></span>
                <span class="ms-2 io-price__detail-title--gift io-purple-main io-fw-semibold"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Подарочный сертификат'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Gift card'; } ?></span>
            </p>
            <div class="io-price__detail-title">
                <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Сумма к оплате:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Total:'; } ?></p>
                <p id="lessonAmountDisplayPocketBottom" class="ms-2 io-purple-main io-fw-semibold">6 USD</p>
                <p id="lessonAmountDisplayDemoBottom" class="ms-2 io-purple-main io-fw-semibold">6 USD</p>
                <p id="lessonAmountDisplayGiftBottom" class="ms-2 io-purple-main io-fw-semibold">6 USD</p>
            </div>
            
            <button type="button" class="io-price__button io-button__large" style="box-shadow: none; padding-top: 9px; padding-bottom: 9px;">
                
                <picture>
                    <source srcset="/wp-content/themes/interschooltemplate/images/visamastercard.webp" type="image/webp">
                    <source srcset="/wp-content/themes/interschooltemplate/images/visamastercard.png" type="image/png">
                    <img src="/wp-content/themes/interschooltemplate/images/visamastercard.png" alt="">
                </picture>
            </button>
        </div>
    </div>
</div>

<main>
    <div class="io-section" id="ioFullSection">
        <div class="container-xxl io-container-mw">
            <div class="io-sidebar">
                <div class="io-sidebar__sticky">
                    <div class="io-sidebar__inner">
                        <section class="io-course-passport">
                            <div class="io-course-passport__popular">
                                <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Популярный курс'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Popular course'; } ?>
                            </div>
                            <div class="io-course-passport__header">
                                <span class="io-course-passport__header-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Курс виолончели'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Cello course'; } ?></span>
                                <span class="io-course-passport__header-status">Online</span>
                            </div>
                            <div class="io-course-passport__data">
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Возраст:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Age:'; } ?>
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'от 5 лет'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'from 5 years'; } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-type.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Урок:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson type:'; } ?>
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'индивидуальный'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'individual'; } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-clock.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Продолжительность урока:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson duration:'; } ?>
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <?php if (ICL_LANGUAGE_CODE === 'ru') { echo '45 мин'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo '45 minutes'; } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="io-icon-with-desc">
                                    <div class="io-icon-with-desc__img">
                                        <img src="/wp-content/themes/interschooltemplate/images/passport-lang.svg" alt="">
                                    </div>
                                    <div class="io-icon-with-desc__info">
                                        <div class="io-icon-with-desc__info-name">
                                            <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Языки преподавания:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Languages of Instruction:'; } ?>
                                        </div>
                                        <div class="io-icon-with-desc__info-text">
                                            <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'русский,<br>английский'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'russian,<br>english'; } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="io-course-passport__payment">
                                <div class="io-course-passport__payment-img">
                                    <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                </div>
                                <div class="io-course-passport__payment-info">
                                    <div class="io-course-passport__payment-info-data">
                                        <div class="io-course-passport__payment-info-data-name">
                                            <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Цена урока:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson Price:'; } ?>
                                        </div>
                                    </div>
                                    <div class="io-course-passport__payment-info-text">
                                        <div><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'от'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'from'; } ?> <span class="ioArrayToTextElements81">$11</span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="io-course-passport__bottom">
                                <div class="io-course-passport__bottom-price">
                                    <span class="ioArrayToTextElementsDemo">$6</span>
                                </div>
                                <button type="button" class="io-button__large io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Записаться на пробный урок'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Sign Up for a Trial Lesson'; } ?>
                                </button>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="io-sidebar__content">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="<?php echo $ioTab1; ?>" role="tabpanel" aria-labelledby="<?php echo $ioTab1; ?>-tab">
                            <div>
                                <section class="io-intersection io-course-hero">
                                    <h1 class="io-heading-1 io-course-hero__heading"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Уроки<br><span class="io-pink-main">Виолончели</span><br>Oнлайн'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Online<br><span class="io-pink-main">Cello</span><br>Lessons'; } ?></h1>
                                    <p class="io-course-hero__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'На курсе виолончели вы освоите изысканные мелодии и смело выступите перед публикой!'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'During the cello course, you will master exquisite melodies and confidently perform in front of an audience!'; } ?></p>
                                </section>
                                <section class="io-intersection io-course-options">
                                    <div class="io-course-hero__rating io-rating">
                                        <div class="io-rating__header">
                                            <span class="io-rating__header-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Рейтинг курса'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Course Rating'; } ?></span>
                                            <span class="io-rating__header-number">5.0</span>
                                        </div>
                                        <div class="io-rating__stars">
                                            <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                            <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                            <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                            <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                            <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                        </div>
                                        <div class="io-rating__bottom">
                                            <div class="io-rating__bottom-left">
                                                <div class="io-rating__bottom-photos">
                                                    <picture>
                                                        <source srcset="/wp-content/themes/interschooltemplate/images/r-1.webp" type="image/webp">
                                                        <source srcset="/wp-content/themes/interschooltemplate/images/r-1.png" type="image/png">
                                                        <img src="/wp-content/themes/interschooltemplate/images/r-1.png" alt="">
                                                    </picture>
                                                    <picture>
                                                        <source srcset="/wp-content/themes/interschooltemplate/images/r-2.webp" type="image/webp">
                                                        <source srcset="/wp-content/themes/interschooltemplate/images/r-2.png" type="image/png">
                                                        <img src="/wp-content/themes/interschooltemplate/images/r-2.png" alt="">
                                                    </picture>
                                                    <picture>
                                                        <source srcset="/wp-content/themes/interschooltemplate/images/r-3.webp" type="image/webp">
                                                        <source srcset="/wp-content/themes/interschooltemplate/images/r-3.png" type="image/png">
                                                        <img src="/wp-content/themes/interschooltemplate/images/r-3.png" alt="">
                                                    </picture>
                                                </div>
                                                <span>+195 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'отзыва'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'reviews'; } ?></span>
                                            </div>
                                            <div class="io-rating__bottom-right">
                                                <button onclick="topFunction()" class="io-button__link io-rating__link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab7; ?>" data-radio-id-switch="">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Watch'; } ?>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div>
                                <section class="io-course-passport io-course-passport-mobile">
                                    <div class="io-course-passport__header">
                                        <div class="io-course-passport__header-inner">
                                            <span class="io-course-passport__header-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Курс виолончели'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Cello course'; } ?></span>
                                            <div class="io-course-passport__popular"></div>
                                        </div>
                                        <span class="io-course-passport__header-status">Online</span>
                                    </div>
                                    <div class="io-course-passport__data io-course-passport__data--first">
                                        <div class="io-icon-with-desc">
                                            <div class="io-icon-with-desc__img">
                                                <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                                            </div>
                                            <div class="io-icon-with-desc__info">
                                                <div class="io-icon-with-desc__info-name">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Возраст:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Age:'; } ?>
                                                </div>
                                                <div class="io-icon-with-desc__info-text">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'от 5 лет'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'from 5 years'; } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-icon-with-desc">
                                            <div class="io-icon-with-desc__img">
                                                <img src="/wp-content/themes/interschooltemplate/images/passport-type.svg" alt="">
                                            </div>
                                            <div class="io-icon-with-desc__info">
                                                <div class="io-icon-with-desc__info-name">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Урок:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson type:'; } ?>
                                                </div>
                                                <div class="io-icon-with-desc__info-text">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'индивидуальный'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'individual'; } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-icon-with-desc">
                                            <div class="io-icon-with-desc__img">
                                                <img src="/wp-content/themes/interschooltemplate/images/passport-clock.svg" alt="">
                                            </div>
                                            <div class="io-icon-with-desc__info" style="transform: translateY(-10px);">
                                                <div class="io-icon-with-desc__info-name">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Продолжительность<br>урока:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson<br>duration:'; } ?>
                                                </div>
                                                <div class="io-icon-with-desc__info-text">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo '45 мин'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo '45 minutes'; } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-course-passport__data">
                                        <div class="io-icon-with-desc">
                                            <div class="io-icon-with-desc__img">
                                                <img src="/wp-content/themes/interschooltemplate/images/passport-lang.svg" alt="">
                                            </div>
                                            <div class="io-icon-with-desc__info" style="transform: translateY(-10px);">
                                                <div class="io-icon-with-desc__info-name">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Языки<br>преподавания:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Languages of<br>Instruction:'; } ?>
                                                </div>
                                                <div class="io-icon-with-desc__info-text">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'русский,<br>английский'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'russian,<br>english'; } ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-course-passport__payment">
                                        <div class="io-course-passport__payment-img">
                                            <img src="/wp-content/themes/interschooltemplate/images/passport-payment.svg" alt="">
                                        </div>
                                        <div class="io-course-passport__payment-info">
                                            <div class="io-course-passport__payment-info-data">
                                                <div class="io-course-passport__payment-info-data-name">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Цена урока:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson Price:'; } ?>
                                                </div>
                                            </div>
                                            <div class="io-course-passport__payment-info-text">
                                                <div><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'от'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'from'; } ?> <span class="ioArrayToTextElements81">$11</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-course-passport__bottom d-flex d-sm-none d-lg-flex">
                                        <div class="io-course-passport__bottom-price">
                                            <span class="ioArrayToTextElementsDemo">$6</span>
                                        </div>
                                        <button type="button" class="io-button__large io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">
                                            <span class="d-none d-sm-block"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Записаться на пробный урок'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Sign Up for a Trial Lesson'; } ?></span>
                                            <span class="d-sm-none"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Пробный урок'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Trial Lesson'; } ?></span>
                                        </button>
                                    </div>
                                </section>
                                <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                                <section class="io-intersection io-course-accordion">
                                    <div class="io-accordion accordion" id="courseAccordionMain">
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingOne">
                                                <button class="io-accordion__button accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseOne" aria-expanded="true" aria-controls="courseAccordion-collapseOne">
                                                    Цели курса
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseOne" class="accordion-collapse collapse show" aria-labelledby="courseAccordion-headingOne" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body io-course-accordion__target">
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Техника</span>
                                                    </div>
                                                    <div class="io-content">
                                                    овладение техникой и методами звукоизвлечения на виолончели, повышение уровня мастерства в игре на инструменте.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Нотная грамота</span>
                                                    </div>
                                                    <div class="io-content">
                                                    развитие навыков чтения музыкальных нот, что позволит исполнять произведения различной сложности на виолончели.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Мастерство</span>
                                                    </div>
                                                    <div class="io-content">
                                                    развитие способности исполнять широкий спектр музыкальных произведений разных жанров на виолончели.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Сценический опыт</span>
                                                    </div>
                                                    <div class="io-content">
                                                    приобретение практического опыта выступлений на сцене в рамках концертов, музыкальных фестивалей и конкурсов.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingTwo">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseTwo" aria-expanded="false" aria-controls="courseAccordion-collapseTwo">
                                                    Методика обучения
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseTwo" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingTwo" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-content">
                                                    Методика обучения игре на виолончели представляет собой уникальную программу, разработанную Монтессори центром. На начальном этапе каждому ученику ставятся индивидуальные цели, которые он будет достигать в процессе обучения. Основная цель - качественное исполнение музыкальных произведений на виолончели заданной сложности на публичных выступлениях.
                                                    </div>
                                                    <div class="io-fw-semibold io-fs-20 mt-1 mt-sm-0">
                                                        Преимущества нашей методики
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Четкие цели для каждого ученика.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Гибкая продолжительность курса, адаптированная под индивидуальный темп достижения целей.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Оценка навыков через участие в концертах и конкурсах, а не через традиционные экзамены.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Подходит как детям, так и взрослым.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Возможность продолжения обучения для дальнейшего совершенствования навыков после достижения установленных целей.</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingFive">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseFive" aria-expanded="false" aria-controls="courseAccordion-collapseFive">
                                                    Что нужно для обучения
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseFive" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingFive" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body io-grid-gap-150 io-mobile-grid-gap-100">
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/violin-svgrepo-com.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>Виолончель нужного размера</strong> понадобится вам для онлайн уроков виолончели.</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-laptop.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>Гаджет с камерой и микрофоном</strong> будут нужны для онлайн уроков виолончели.</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-headphones.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>Используйте наушники</strong>, они улучшат качество звука.</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-note.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>Ноты</strong> мы вам пришлем заранее. Вам нужно будет их распечатать или открыть на экране вашего устройства.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingTwoB">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseTwoB" aria-expanded="false" aria-controls="courseAccordion-collapseTwoB">
                                                Как правильно выбрать виолончель
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseTwoB" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingTwoB" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-check">
                                                        <span><strong class="me-1">Для детей 8 - 9 лет</strong> подойдет виолончель размером 1/2</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span><strong class="me-1">Для детей 10 - 11 лет</strong> подойдет виолончель размером 3/4</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span><strong class="me-1">Для детей старше 11 лет</strong> подойдет виолончель размером 4/4 (полный размер)</span>
                                                    </div>
                                                    <img class="w-100" src="/wp-content/uploads/2024/04/Benner_cello.jpg" alt="">
                                                    <div class="io-content">
                                                        <p>Важно учитывать индивидуальные особенности ребенка, такие как рост и размер рук, при выборе размера виолончели. Рекомендуем обратиться к преподавателю и провести примерку в музыкальном магазине для подбора подходящего инструмента.</p>
                                                    </div>
                                                    <div class="io-content">
                                                        <p>Осмотрите инструмент: на грифе виолончели не должно быть сколов, трещин, заусенцев. Колки и машинки в бридже должны проворачиваться свободно без усилия, подставка не должна быть изогнута. Осмотрите смычок - достаточно посмотреть одним глазом вдоль него, чтобы убедиться в отсутствии кривизны. Если есть возможность выбрать смычок - то лучше выбирайте белый либо натуральный (конский) волос, черная синтетика допустима только на начальном этапе обучения. В современных новых инструментах смычок обычно идет в комплекте. Также обратите внимание, чтобы в комплект входил чехол или футляр, т.к. без него транспортировка виолончели будет затруднительна.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingSix">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseSix" aria-expanded="false" aria-controls="courseAccordion-collapseSix">
                                                    Затраты времени на обучение
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseSix" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingSix" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-check">
                                                        <div><span><strong>Два урока в неделю с нашим педагогом</strong> - это ключ к успешному и быстрому освоению виолончели.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Регулярные занятия</strong> способствуют глубокому погружению в музыкальный репертуар и улучшению навыков игры.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Самостоятельная практика дома</strong> необходима для всех учащихся старше 8 лет.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Процесс обучения требует времени</strong>, и вам следует быть к этому готовым.</span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingFour">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseFour" aria-expanded="false" aria-controls="courseAccordion-collapseFour">
                                                    Домашние задания
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseFour" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingFour" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body io-grid-gap-150 io-mobile-grid-gap-100">
                                                    <div class="io-icon-with-text io-icon-with-text--start">
                                                        <div class="io-icon-with-text__img io-mobile-hide">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-hometask.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>Повторение пройденного</strong> на уроках материала требует регулярной самостоятельной работы дома.</p>
                                                            <p><strong>Достаточно уделять этому 15-20 минут</strong> каждый день на начальных этапах.</p>
                                                            <p>Такие занятия не только помогут вам лучше освоить инструмент, но и <strong>доставят удовольствие</strong> от достигнутых результатов.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingSeven">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseSeven" aria-expanded="false" aria-controls="courseAccordion-collapseSeven">
                                                    Рекомендации родителям
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseSeven" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingSeven" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-heart">
                                                        <div><span>Ваша поддержка будет очень важна для подготовки ребенка к урокам: убедитесь, что все готово для занятия - гаджеты и наушники работают, звук настроен, и ссылка на онлайн-урок открыта.</span></div>
                                                    </div>
                                                    <div class="io-heart">
                                                        <div><span>Помогите ребенку организовать его домашние занятия.</span></div>
                                                    </div>
                                                    <div class="io-heart">
                                                        <div><span>Будьте терпеливы и поддерживайте ребенка в его усилиях на пути к музыкальному мастерству.</span></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingEight">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseEight" aria-expanded="false" aria-controls="courseAccordion-collapseEight">
                                                    Концерты и конкурсы
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseEight" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingEight" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body io-grid-gap-150 io-mobile-grid-gap-100">
                                                    <div class="io-content">
                                                        <strong>В Монтессори центре студенты не сдают зачеты и экзамены. Вместо этого они выступают на концертах, участвуют в конкурсах и музыкальной олимпиаде.</strong>
                                                    </div>
                                                    <div class="io-content">
                                                        <span class="io-pink-main io-fs-18 io-mobile-fs-16 io-fw-bold">
                                                            “Концерты по субботам”
                                                        </span>
                                                        <div>Небольшие концерты в режиме онлайн, в которых участвуют наши студенты из разных стран мира. На этих концертах студенты сдают подготовленные музыкальные произведения.</div>
                                                    </div>
                                                    <div class="io-content">
                                                        <span class="io-pink-main io-fs-18 io-mobile-fs-16 io-fw-bold">
                                                            “Montessori Stars”
                                                        </span>
                                                        <div>Онлайн конкурс Монтессори центра, на котором студенты не только сдают музыкальные произведения, но и соревнуются за право быть рекомендованным для участия в престижных фортепианных конкурсах.</div>
                                                    </div>
                                                    <div class="io-content">
                                                        <a href="https://holoskrainy.ua/" target="_blank" class="io-link io-link--pink io-fs-18 io-mobile-fs-16 io-fw-bold">
                                                            Всеукраинская музыкальная олимпиада “Голос Країни”
                                                        </a>
                                                        <div>Масштабные музыкальные соревнования, в которых принимают участие наши студенты-победители конкурса “Montessori Stars”, а также учащиеся из других учебных учреждений.</div>
                                                    </div>
                                                    <div class="io-content">
                                                        <a href="https://piano.ua/" target="_blank" class="io-link io-link--pink io-fs-18 io-mobile-fs-16 io-fw-bold">
                                                            Всеукраинский открытый конкурс имени С.С.Прокофьева
                                                        </a>
                                                        <div>Конкурс среди пианистов, который требует высокого уровня подготовки. Наши студенты-победители конкурса “Montessori Stars”, окончившие не менее 4 модулей, могут принять участие в этих соревнованиях.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingNine">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseNine" aria-expanded="false" aria-controls="courseAccordion-collapseNine">
                                                    Грамоты, сертификаты и дипломы
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseNine" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingNine" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body io-grid-gap-200 io-mobile-grid-gap-100">
                                                    <div class="io-icon-with-text io-icon-with-text--start">
                                                        <div class="io-icon-with-text__img io-mobile-hide">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-diploma.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>Грамоты: </strong>студенты награждаются за участие в концертах и конкурсах.</p>
                                                            <p><strong>Сертификаты: </strong>вручаются по окончанию каждого модуля.</p>
                                                            <p><strong>Дипломы: </strong>вручаются по окончанию начального, среднего и продвинутого уровней.</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-course-accordion__diploma">
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            
                                                            <picture>
                                                                
                                                                <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-12-103753.png" type="image/jpeg">
                                                                <img src="/wp-content/uploads/2024/04/Screenshot-2024-04-12-103753.png" alt="">
                                                            </picture>
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            
                                                            <picture>
                                                                
                                                                <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-12-103815.png" type="image/jpeg">
                                                                <img src="/wp-content/uploads/2024/04/Screenshot-2024-04-12-103815.png" alt="">
                                                            </picture>
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            
                                                            <picture>
                                                                
                                                                <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-12-103918.png" type="image/jpeg">
                                                                <img src="/wp-content/uploads/2024/04/Screenshot-2024-04-12-103918.png" alt="">
                                                            </picture>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingNineB">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseNineB" aria-expanded="false" aria-controls="courseAccordion-collapseNineB">
                                                    Стоимость обучения
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseNineB" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingNineB" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body io-grid-gap-200 io-mobile-grid-gap-100">
                                                    <div class="io-grid io-grid-gap-100">
                                                        <div class="io-course-pricing io-block">
                                                            <div class="io-course-pricing__heading">
                                                                <img src="/wp-content/themes/interschooltemplate/images/i-webinar.svg" alt="">
                                                                <h3 class="io-fw-semibold io-fs-20">Пробный урок</h3>
                                                            </div>
                                                            <p>Если вы хотите заказать пробный урок виолончели, вам необходимо <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">записаться и оплатить</a> <span class="io-fw-semibold io-pink-main ioArrayToTextElementsDemo">$6</span>.<br>Пробный урок проходит индивидуально и длится <span class="io-fw-semibold">45 минут</span>.</p>
                                                        </div>
                                                        <div class="io-course-pricing io-block">
                                                            <div class="io-course-pricing__heading">
                                                                <img src="/wp-content/themes/interschooltemplate/images/i-abonement.svg" alt="">
                                                                <h3 class="io-fw-semibold io-fs-20">Абонемент</h3>
                                                            </div>
                                                            <p>Если вам понравился пробный урок, вам необходимо <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">купить абонемент</a>, сделав предоплату минимум за 4 урока.<br>Цена абонемента на <span class="io-fw-semibold">4 урока</span> составляет <span class="io-fw-semibold io-pink-main ioArrayToTextElements03">$56</span> (стоимость одного урока - <span class="ioArrayToTextElements01">$14</span>).<br>Оплату необходимо вносить минимум за 24 часа до начала урока.</p>
                                                        </div>
                                                        <div class="io-course-pricing io-block">
                                                            <div class="io-course-pricing__heading">
                                                                <img src="/wp-content/themes/interschooltemplate/images/i-sales.svg" alt="">
                                                                <h3 class="io-fw-semibold io-fs-20">Скидки</h3>
                                                            </div>
                                                            <p>При покупке от <span class="io-fw-semibold">80</span> и более уроков <span class="io-fw-semibold io-pink-main">скидка</span> составляет до <span class="io-fw-semibold io-pink-main ioArrayToTextElements82">$480</span>.</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-grid io-grid-gap-075">
                                                        <div class="io-heart">
                                                            <span>Приобретенные уроки не ограничены по времени использования.</span>
                                                        </div>
                                                        <div class="io-heart">
                                                            <span>Вы можете использовать приобретенные уроки для любых курсов.</span>
                                                        </div>
                                                        <div class="io-heart">
                                                            <span>Все члены вашей семьи смогут воспользоваться приобретенными уроками.</span>
                                                        </div>
                                                        <div class="io-heart">
                                                            <span>Пожалуйста, предупреждайте нас о необходимости отмены урока не менее чем за 24 часа, иначе урок будет считаться проведенным.</span>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingTen">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseTen" aria-expanded="false" aria-controls="courseAccordion-collapseTen">
                                                    Подробное описание курса
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseTen" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingTen" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body io-grid-gap-200 io-mobile-grid-gap-100">
                                                    <div class="io-grid io-grid-gap-050">
                                                        <div class="io-fs-18 io-fw-bold">
                                                            Содержание
                                                        </div>
                                                        <div class="io-content__list">
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-1" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Обзор курса</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-2" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Описание методики</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-3" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Преимущества методики</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-4" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Уровень “Начальный”</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-5" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Уровень “Средний”</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-6" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Уровень “Продвинутый”</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-7" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Цели курса</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-8" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Польза уроков виолончели</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="io-text-wrapper">
                                                        <h2 id="detailCourseHeading-1">Обзор курса</h2>
                                                        <p>Наша онлайн программа обучения виолончели ориентирована на детей от 8 лет и взрослых студентов любого возраста. В рамках нашего курса виолончели студенты изучают широкий спектр музыкальных жанров, включая классический репертуар и популярные мелодии, а также нотную грамоту. Программа обучения структурирована по уровням сложности, начиная с базового и продвигаясь к более высоким уровням.</p>
                                                        <p>Каждый урок виолончели продолжительностью 45 минут проводится индивидуально. Наши преподаватели владеют как русским, так и английским языками, что позволяет ученикам выбирать язык обучения. График занятий составляется с учетом предпочтений каждого студента, обеспечивая максимальный комфорт обучения.</p>
                                                        <p>Занятия по виолончели проводятся через платформы Google Meet и Zoom. Наши преподаватели обладают высшим музыкальным образованием и обширным опытом преподавания, активно выступают на сцене и являются артистами оркестров.</p>
                                                        <p>Интенсивность занятий регулируется индивидуально, но мы рекомендуем проводить не менее двух уроков в неделю для последовательного прогресса, выполнения домашних заданий и закрепления материала.</p>
                                                        <p>Учителя стимулируют активное участие студентов в конкурсах и музыкальных мероприятиях, что подтверждает их музыкальное развитие. По завершении каждого этапа обучения студенты получают сертификаты, подтверждающие успешное освоение уровня, а по окончании курса — диплом, свидетельствующий о приобретенных знаниях и навыках в области игры на виолончели.</p>
                                                        <h2 id="detailCourseHeading-2">Описание методики</h2>
                                                        <p>Методика обучения игре на виолончели в Монтессори центре — это уникальная программа, разработанная для максимального раскрытия индивидуального потенциала каждого ученика.</p>
                                                        <p>Этот подход включает определение конкретных музыкальных задач для студентов на начальном этапе обучения. Эти задачи включают изучение музыкальных произведений различной сложности. Вместо традиционных экзаменов, успех студентов оценивается на основе их участия в концертах и музыкальных конкурсах, где успешные выступления служат подтверждением их прогресса.</p>
                                                        <h2 id="detailCourseHeading-3">Преимущества методики</h2>
                                                        <p>1. Ясное определение целей: формулировка конкретных музыкальных задач обеспечивает ученикам четкое представление о своих целях и указывает направление для их достижения.</p>
                                                        <p>2. Индивидуальный темп обучения: программа позволяет ученикам двигаться вперед в соответствии с их собственным темпом освоения материала, что способствует глубокому пониманию и усвоению знаний.</p>
                                                        <p>3. Опыт выступлений на сцене: публичные выступления и участие в конкурсах предоставляют студентам ценный опыт и возможность применять свои навыки на практике.</p>
                                                        <p>4. Подходит для всех возрастов: методика доступна как для детей, так и для взрослых, что делает обучение игре на виолончели доступным и универсальным для всех.</p>
                                                        <p>5. Возможности для продолжения образования: после достижения начальных целей студенты могут продолжить свое обучение, стремясь к улучшению и совершенствованию своих навыков игры на виолончели.</p>
                                                        <p>Методика обучения в Монтессори центре предназначена для учеников всех уровней подготовки и предлагает индивидуализированный путь развития для каждого студента, от начинающих до продвинутых музыкантов, желающих достичь высокого мастерства.</p>
                                                        <p>Гибкий и очень индивидуальный подход к обучению делает процесс обучения менее напряженным и более увлекательным, позволяя студентам сконцентрироваться на достижении своих личных музыкальных целей.</p>
                                                        <p>Таким образом, наша методика обучения игре на виолончели акцентирует внимание на значимости индивидуального подхода и создает мотивирующую образовательную среду, обеспечивающую студентам не только мастерство игры на виолончели, но и уверенность в себе, вдохновение и долгосрочный интерес к музыке.</p>

                                                        <h2 id="detailCourseHeading-4">Уровень "Начальный"</h2>
                                                        <p>На начальном этапе обучения студенты овладевают ключевыми аспектами музыкальной грамоты и научатся читать виолончельные партии. Этот этап включает изучение ритма, мелодии и разнообразных музыкальных знаков, необходимых для точного исполнения музыкальных произведений. К концу данного уровня учащиеся способны исполнять элементарные композиции, овладев начальными навыками игры на виолончели.</p>
                                                        <h2 id="detailCourseHeading-5">Уровень "Средний"</h2>
                                                        <p>На среднем уровне учащиеся приобретают важнейшие умения, необходимые для исполнения более сложных виолончельных произведений. Особое внимание уделяется совершенствованию техники игры, выразительности и музыкальной интерпретации, включая умение передавать эмоциональную глубину музыки.</p>
                                                        <h2 id="detailCourseHeading-6">Уровень "Продвинутый"</h2>
                                                        <p>На продвинутом уровне студенты занимаются изучением сложных виолончельных композиций, демонстрируя понимание музыкального стиля и авторского замысла. Студенты осваивают разнообразные техники и приемы игры на виолончели, улучшая свои навыки фразировки и динамики.</p>
                                                        <p>По завершении курса учащиеся способны исполнять сложные музыкальные произведения, глубоко проникая в суть музыкального произведения и воплощая его через свое исполнение. Особое внимание уделяется развитию техники и навыков разнообразных приемов игры.</p>
                                                        <p>В течение всего обучения активно формируются исполнительские навыки. Учащиеся активно принимают участие в концертах и конкурсах, приобретая необходимый опыт публичных выступлений и развивая сценическую уверенность. В итоге, после окончания обучения, студенты обладают всеми необходимыми навыками и знаниями для профессионального исполнения на виолончели.</p>

                                                        <h2 id="detailCourseHeading-7">Цели курса</h2>
                                                        <p>Главной целью курса виолончели является освоение техники игры на этом многогранном и выразительном музыкальном инструменте. Для начинающих виолончелистов это включает в себя развитие ловкости и контроля над смычком, что критически важно для безупречного исполнения сложных музыкальных произведений, сохраняя ритм и точность. Достижение этой цели требует систематических тренировок и постоянного улучшения мастерства.</p>
                                                        <p>Учащиеся также ознакомятся с разнообразными техниками игры на виолончели, которые позволяют адаптировать методы звукоизвлечения в зависимости от музыкального контекста и желаемой эмоциональной выразительности.</p>
                                                        <p>Одной из важных задач обучения является овладение навыком чтения виолончельных партий. Этот навык необходим каждому виолончелисту, позволяя более уверенно ориентироваться в нотном материале и превращать ноты в живое музицирование. После освоения этого навыка студенты смогут самостоятельно анализировать и исполнять композиции, найденные в различных источниках.</p>
                                                        <p>Кроме того, целью курса является овладение исполнением произведений различных музыкальных жанров. Это способствует развитию уверенности на сцене, помогает контролировать волнение перед аудиторией и предоставляет возможность оценить собственный прогресс в сравнении с другими музыкантами. Основная цель уроков заключается не в соперничестве, а в непрерывном развитии и удовольствии от самого процесса музицирования на виолончели.</p>

                                                        <h2 id="detailCourseHeading-8">Польза уроков виолончели</h2>
                                                        <p><strong>Развитие музыкального слуха и чувства ритма:</strong> занятия виолончелью способствуют развитию слухового восприятия и позволяют ученикам лучше понимать музыку и ритмические особенности произведений.</p>
                                                        <p><strong>Улучшение координации и техники:</strong> игра на виолончели требует от учеников усиленной координации движений и развития моторики рук. Постепенное совершенствование техники игры помогает развивать моторику и улучшать эти навыки.</p>
                                                        <p><strong>Эмоциональная выразительность и самовыражение:</strong> виолончель - это мощный инструмент для передачи эмоций и самовыражения. Уроки виолончели позволяют ученикам выражать свои чувства и эмоции через музыку, что способствует развитию эмоционального интеллекта.</p>
                                                        <p><strong>Улучшение памяти и концентрации:</strong> изучение музыкальных произведений на виолончели требует запоминания нот, мелодий и структуры композиции. Это способствует развитию памяти и концентрации, улучшая когнитивные способности учеников.</p>
                                                        <p><strong>Повышение уверенности и самодисциплины:</strong> регулярные занятия на виолончели требуют самодисциплины и выдержки, поскольку для достижения прогресса необходима постоянная практика. Ученики, успешно осваивающие игру на виолончели, приобретают уверенность в собственных способностях и усиливают самоконтроль.</p>
                                                        <p><strong>Развитие творческого мышления:</strong> уроки виолончели способствуют развитию творческого мышления у учеников, поскольку игра на этом инструменте позволяет экспериментировать с музыкальными идеями, создавать собственные аранжировки и импровизировать в рамках музыкальных композиций.</p>
                                                        <p><strong>Повышение социальной адаптации:</strong> участие в музыкальных ансамблях и оркестрах, а также общение с другими учениками и преподавателями на уроках виолончели способствует развитию социальных навыков и умения работать в коллективе.</p>
                                                        <p><strong>Снятие стресса и улучшение настроения:</strong> игра на виолончели может быть эффективным способом снять стресс и поднять настроение. Музыкальное творчество стимулирует выработку эндорфинов, которые улучшают настроение и способствуют общему ощущению благополучия.</p>
                                                        <p><strong>Расширение кругозора и культурного развития:</strong> изучение музыки и музыкальной истории, а также исполнение музыкальных произведений различных эпох и жанров на виолончели, способствует расширению культурного кругозора учеников и развитию их музыкального вкуса.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                                <section class="io-intersection io-course-accordion">
                                    <div class="io-accordion accordion" id="courseAccordionMain">
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingOne">
                                                <button class="io-accordion__button accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseOne" aria-expanded="true" aria-controls="courseAccordion-collapseOne">
                                                    Course Objectives
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseOne" class="accordion-collapse collapse show" aria-labelledby="courseAccordion-headingOne" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body io-course-accordion__target">
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Technique</span>
                                                    </div>
                                                    <div class="io-content">
                                                    Mastery of cello playing techniques and methods, enhancing proficiency in playing the instrument.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Music Literacy</span>
                                                    </div>
                                                    <div class="io-content">
                                                    Development of skills in reading musical notes, enabling the performance of compositions of varying complexity on the cello.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Artistry</span>
                                                    </div>
                                                    <div class="io-content">
                                                    Development of the ability to perform a wide range of musical compositions from different genres on the cello.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Performance Experience</span>
                                                    </div>
                                                    <div class="io-content">
                                                    Acquisition of practical experience in performing on stage at concerts, music festivals, and competitions.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingTwo">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseTwo" aria-expanded="false" aria-controls="courseAccordion-collapseTwo">
                                                    Teaching Methodology
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseTwo" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingTwo" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-content">
                                                    The cello teaching methodology is a unique program developed by the Montessori Center. At the initial stage, individual goals are set for each student, which they will strive to achieve during the learning process. The primary objective is the quality performance of musical compositions on the cello of specified complexity in public performances.
                                                    </div>
                                                    <div class="io-fw-semibold io-fs-20">
                                                        Advantages of Our Methodology
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Clear goals for each student.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Flexible course duration adapted to the individual pace of goal achievement.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Skills assessment through participation in concerts and competitions rather than traditional exams.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Suitable for both children and adults.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Opportunity for continued learning to further improve skills after achieving set goals.</span>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingFive">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseFive" aria-expanded="false" aria-controls="courseAccordion-collapseFive">
                                                What You Need for Learning
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseFive" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingFive" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body io-grid-gap-150 io-mobile-grid-gap-100">
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/violin-svgrepo-com.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>You'll need a cello</strong> of the appropriate size for online cello lessons.</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-laptop.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>A gadget with a camera and microphone</strong> is necessary for online cello lessons.</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-headphones.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>Use headphones</strong> to improve sound quality.</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-note.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>We will send you the sheet music</strong> in advance. You'll need to print it out or open it on your device screen.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingTwoB">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseTwoB" aria-expanded="false" aria-controls="courseAccordion-collapseTwoB">
                                                How to Choose the Right Cello
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseTwoB" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingTwoB" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-check">
                                                        <span><strong class="me-1">For children aged 8-9</strong>, a 1/2 size cello is suitable.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span><strong class="me-1">For children aged 10-11</strong>, a 3/4 size cello is suitable.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span><strong class="me-1">For children older than 11</strong>, a full-size 4/4 cello is suitable.</span>
                                                    </div>
                                                    <img class="w-100" src="/wp-content/uploads/2024/04/Benner_cello.jpg" alt="">
                                                    <div class="io-content">
                                                        <p>It's important to consider the individual characteristics of the child, such as height and hand size, when choosing the size of the cello. We recommend consulting with the teacher and trying out different sizes at a music store to find the right instrument.</p>
                                                    </div>
                                                    <div class="io-content">
                                                        <p>Inspect the instrument: there should be no chips, cracks, or dents on the cello's neck. The pegs and tuning machines should turn freely without effort, and the bridge should not be warped. Check the bow - simply glance along it to ensure it's straight. If possible, choose a bow with white or natural (horse) hair; black synthetic hair is acceptable only at the beginning stage of learning. In modern new instruments, the bow usually comes as part of the set. Also, make sure the set includes a case or cover, as transporting the cello without it will be difficult.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingSix">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseSix" aria-expanded="false" aria-controls="courseAccordion-collapseSix">
                                                    Time Commitment for Learning
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseSix" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingSix" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-check">
                                                        <div><span><strong>Two lessons per week</strong> with our instructor are the key to successful and rapid mastery of the cello.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Regular lessons</strong> contribute to deep immersion in musical repertoire and improvement of playing skills.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Independent practice at home</strong> is necessary for all students over 8 years old.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>The learning process takes time</strong>, and you should be prepared for it.</span></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingFour">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseFour" aria-expanded="false" aria-controls="courseAccordion-collapseFour">
                                                    Homework
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseFour" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingFour" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body io-grid-gap-150 io-mobile-grid-gap-100">
                                                    <div class="io-icon-with-text io-icon-with-text--start">
                                                        <div class="io-icon-with-text__img io-mobile-hide">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-hometask.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>Reviewing the material</strong> covered in lessons requires regular independent work at home.</p>
                                                            <p>It's enough to dedicate <strong>15-20 minutes to this each day</strong> in the initial stages.</p>
                                                            <p>Such practice will not only help you better master the instrument but also <strong>bring pleasure</strong> from the achieved results.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingSeven">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseSeven" aria-expanded="false" aria-controls="courseAccordion-collapseSeven">
                                                    Parental Recommendations
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseSeven" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingSeven" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-heart">
                                                        <div><span>Your support will be crucial in preparing your child for lessons: make sure everything is ready for the lesson - gadgets and headphones are working, the sound is adjusted, and the link to the online lesson is open.</span></div>
                                                    </div>
                                                    <div class="io-heart">
                                                        <div><span>Help your child organize their homework.</span></div>
                                                    </div>
                                                    <div class="io-heart">
                                                        <div><span>Be patient and support your child in their efforts on the path to musical mastery.</span></div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingEight">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseEight" aria-expanded="false" aria-controls="courseAccordion-collapseEight">
                                                    Concerts and Competitions
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseEight" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingEight" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body io-grid-gap-150 io-mobile-grid-gap-100">
                                                    <div class="io-content">
                                                        <strong>At Montessori Center, students do not take exams or tests. Instead, they perform in concerts, participate in competitions, and musical Olympiads.</strong>
                                                    </div>
                                                    <div class="io-content">
                                                        <span class="io-pink-main io-fs-18 io-mobile-fs-16 io-fw-bold">
                                                            “Saturday Concerts”
                                                        </span>
                                                        <div>Small online concerts featuring our students from around the world. During these concerts, students perform prepared musical pieces.</div>
                                                    </div>
                                                    <div class="io-content">
                                                        <span class="io-pink-main io-fs-18 io-mobile-fs-16 io-fw-bold">
                                                            “Montessori Stars”
                                                        </span>
                                                        <div>An online competition held by Montessori Center where students not only perform musical pieces but also compete for the opportunity to be recommended for prestigious piano competitions.</div>
                                                    </div>
                                                    <div class="io-content">
                                                        <a href="https://holoskrainy.ua/en/" target="_blank" class="io-link io-link--pink io-fs-18 io-mobile-fs-16 io-fw-bold">
                                                            All-Ukrainian Music Olympiad "Voice of the Country"
                                                        </a>
                                                        <div>A large-scale music competition where our student winners of the "Montessori Stars" competition, as well as students from other educational institutions, participate.</div>
                                                    </div>
                                                    <div class="io-content">
                                                        <a href="https://piano.ua/" target="_blank" class="io-link io-link--pink io-fs-18 io-mobile-fs-16 io-fw-bold">
                                                            All-Ukrainian Open Competition named after S.S. Prokofiev
                                                        </a>
                                                        <div>A competition among pianists that requires a high level of preparation. Our student winners of the "Montessori Stars" competition who have completed at least 4 modules can participate in these competitions.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingNine">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseNine" aria-expanded="false" aria-controls="courseAccordion-collapseNine">
                                                    Awards, Certificates, and Diplomas
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseNine" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingNine" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body io-grid-gap-200 io-mobile-grid-gap-100">
                                                    <div class="io-icon-with-text io-icon-with-text--start">
                                                        <div class="io-icon-with-text__img io-mobile-hide">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-diploma.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>Awards: </strong>Students are honored for their participation in concerts and competitions.</p>
                                                            <p><strong>Certificates: </strong>Awarded upon completion of each module.</p>
                                                            <p><strong>Diplomas: </strong>Conferred upon completing the elementary, intermediate, and advanced levels.</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-course-accordion__diploma">
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            
                                                            <picture>
                                                                
                                                                <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-12-103753.png" type="image/jpeg">
                                                                <img src="/wp-content/uploads/2024/04/Screenshot-2024-04-12-103753.png" alt="">
                                                            </picture>
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            
                                                            <picture>
                                                                
                                                                <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-12-103815.png" type="image/jpeg">
                                                                <img src="/wp-content/uploads/2024/04/Screenshot-2024-04-12-103815.png" alt="">
                                                            </picture>
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            
                                                            <picture>
                                                                
                                                                <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-12-103918.png" type="image/jpeg">
                                                                <img src="/wp-content/uploads/2024/04/Screenshot-2024-04-12-103918.png" alt="">
                                                            </picture>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingNineB">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseNineB" aria-expanded="false" aria-controls="courseAccordion-collapseNineB">
                                                    The Cost of Tuition
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseNineB" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingNineB" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body io-grid-gap-200 io-mobile-grid-gap-100">
                                                    <div class="io-grid io-grid-gap-100">
                                                        <div class="io-course-pricing io-block">
                                                            <div class="io-course-pricing__heading">
                                                                <img src="/wp-content/themes/interschooltemplate/images/i-webinar.svg" alt="">
                                                                <h3 class="io-fw-semibold io-fs-20">Trial Lesson</h3>
                                                            </div>
                                                            <p>If you would like to book a trial cello lesson, you need <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">to schedule and pay</a> <span class="io-fw-semibold io-pink-main ioArrayToTextElementsDemo">$6</span>.<br>The trial lesson is conducted individually and lasts for <span class="io-fw-semibold">45 minutes</span>.</p>
                                                        </div>
                                                        <div class="io-course-pricing io-block">
                                                            <div class="io-course-pricing__heading">
                                                                <img src="/wp-content/themes/interschooltemplate/images/i-abonement.svg" alt="">
                                                                <h3 class="io-fw-semibold io-fs-20">Subscription</h3>
                                                            </div>
                                                            <p>If you enjoyed the trial lesson, you can <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">purchase a subscription</a> by making a prepayment for at least 4 lessons.<br>The price of a <span class="io-fw-semibold">4-lesson subscription</span> is <span class="io-fw-semibold io-pink-main ioArrayToTextElements03">$56</span> (the cost of one lesson is <span class="ioArrayToTextElements01">$14</span>).<br>Payment must be made at least 24 hours before the lesson's start time.</p>
                                                        </div>
                                                        <div class="io-course-pricing io-block">
                                                            <div class="io-course-pricing__heading">
                                                                <img src="/wp-content/themes/interschooltemplate/images/i-sales.svg" alt="">
                                                                <h3 class="io-fw-semibold io-fs-20">Discounts</h3>
                                                            </div>
                                                            <p>When you purchase <span class="io-fw-semibold">80</span> lessons or more, you can receive a <span class="io-fw-semibold io-pink-main">discount</span> of up to <span class="io-fw-semibold io-pink-main ioArrayToTextElements82">$480</span>.</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-grid io-grid-gap-075">
                                                        <div class="io-heart">
                                                            <span>Purchased lessons have no time limit for use.</span>
                                                        </div>
                                                        <div class="io-heart">
                                                            <span>You can use purchased lessons for any courses.</span>
                                                        </div>
                                                        <div class="io-heart">
                                                            <span>All members of your family will be able to use purchased lessons.</span>
                                                        </div>
                                                        <div class="io-heart">
                                                            <span>Please notify us of the need to cancel a lesson at least 24 hours in advance, otherwise the lesson will be considered conducted.</span>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingTen">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseTen" aria-expanded="false" aria-controls="courseAccordion-collapseTen">
                                                    Detailed Course Description
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseTen" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingTen" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body io-grid-gap-200 io-mobile-grid-gap-100">
                                                    <div class="io-grid io-grid-gap-050">
                                                        <div class="io-fs-18 io-fw-bold">
                                                            Content
                                                        </div>
                                                        <div class="io-content__list">
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-1" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Course Overview</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-2" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Methodology Description</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-3" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Methodology Advantages</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-4" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Beginner Level</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-5" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Intermediate Level</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-6" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Advanced Level</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-7" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Course Objectives</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-8" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">The Benefits of Cello Lessons</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="io-show-button">
                                                        <button onclick="showHiddenBlock(this)" class="io-button__link io-rating__link">
                                                            Read more
                                                        </button>
                                                    </div>
                                                    <div class="io-text-wrapper io-hidden">
                                                        <h2 id="detailCourseHeading-1">Course Overview</h2>
                                                        <p>Our online cello learning program is designed for children aged 8 and above, as well as adult students of any age. Within our cello course, students explore a wide range of musical genres, including classical repertoire and popular melodies, as well as music theory. The curriculum is structured according to levels of difficulty, starting from basic and progressing to more advanced levels.</p>
                                                        <p>Each cello lesson, lasting 45 minutes, is conducted individually. Our instructors are proficient in both Russian and English, allowing students to choose their preferred language of instruction. The lesson schedule is tailored to accommodate the preferences of each student, ensuring maximum comfort during learning.</p>
                                                        <p>Cello lessons are conducted through the Google Meet and Zoom platforms. Our teachers have advanced musical education and extensive teaching experience, actively perform on stage, and are members of orchestras.</p>
                                                        <p>The intensity of lessons is adjusted individually, but we recommend having at least two lessons per week for consistent progress, completion of homework assignments, and reinforcement of material.</p>
                                                        <p>Teachers encourage active participation of students in competitions and musical events, which confirms their musical development. Upon completion of each stage of learning, students receive certificates confirming successful completion of the level, and upon completion of the course, they receive a diploma attesting to the acquired knowledge and skills in cello playing.</p>

                                                        <h2 id="detailCourseHeading-2">Methodology Description</h2>
                                                        <p>The cello playing methodology at the Montessori Center is a unique program designed to maximize the individual potential of each student.</p>
                                                        <p>This approach involves defining specific musical goals for students at the initial stage of learning. These goals include studying musical pieces of varying complexity. Instead of traditional exams, students' success is assessed based on their participation in concerts and music competitions, where successful performances serve as evidence of their progress.</p>

                                                        <h2 id="detailCourseHeading-3">Methodology Advantages</h2>

                                                        <p>1. Clear goal definition: Formulating specific musical tasks provides students with a clear understanding of their objectives and guides them in achieving them.</p>
                                                        <p>2. Individual learning pace: The program allows students to progress at their own pace, promoting deep understanding and assimilation of knowledge.</p>
                                                        <p>3. Stage experience: Public performances and participation in competitions provide students with valuable experience and the opportunity to apply their skills in practice.</p>
                                                        <p>4. Suitable for all ages: The methodology is accessible to both children and adults, making cello playing education available and universal for everyone.</p>
                                                        <p>5. Continuing education opportunities: After achieving initial goals, students can continue their education, striving to improve and refine their cello playing skills.</p>
                                                        <p>The teaching methodology at the Montessori Center is designed for students of all skill levels and offers an individualized path of development for each student, from beginners to advanced musicians seeking to achieve high mastery.</p>
                                                        <p>A flexible and highly individualized approach to education makes the learning process less stressful and more engaging, allowing students to focus on achieving their personal musical goals.</p>
                                                        <p>Thus, our cello playing teaching methodology emphasizes the importance of an individual approach and creates a motivating educational environment, providing students with not only mastery of cello playing but also self-confidence, inspiration, and long-term interest in music.</p>

                                                        <h2 id="detailCourseHeading-4">Beginner Level</h2>
                                                        <p>At the beginner stage of learning, students master key aspects of musical literacy and learn to read cello parts. This stage includes studying rhythm, melody, and various musical symbols necessary for the accurate performance of musical compositions. By the end of this level, students are capable of performing elementary pieces, having acquired basic cello playing skills.</p>
                                                        <h2 id="detailCourseHeading-5">Intermediate Level</h2>
                                                        <p>At the intermediate level, students acquire essential skills required for performing more complex cello pieces. Special attention is given to refining playing techniques, expressiveness, and musical interpretation, including the ability to convey the emotional depth of music.</p>
                                                        <h2 id="detailCourseHeading-6">Advanced Level</h2>
                                                        <p>At the advanced level, students engage in studying complex cello compositions, demonstrating an understanding of musical style and authorial intent. Students master various techniques and methods of cello playing, improving their skills in phrasing and dynamics.</p>
                                                        <p>Upon completion of the course, students are capable of performing complex musical pieces, delving deeply into the essence of the musical composition and embodying it through their performance. Special emphasis is placed on developing techniques and skills in various playing methods.</p>
                                                        <p>Throughout the entire learning process, performance skills are actively developed. Students actively participate in concerts and competitions, gaining the necessary experience in public performances and enhancing their stage confidence. As a result, upon completion of their education, students possess all the necessary skills and knowledge for professional cello performance.</p>


                                                        <h2 id="detailCourseHeading-7">Course Objectives</h2>
                                                        <p>The main objective of the cello course is to master the technique of playing this multifaceted and expressive musical instrument. For beginner cellists, this includes developing agility and control over the bow, which is crucial for flawless execution of complex musical pieces while maintaining rhythm and precision. Achieving this goal requires regular practice and continual improvement of skills.</p>
                                                        <p>Students will also become acquainted with various techniques of cello playing, which allow for adapting sound extraction methods depending on the musical context and desired emotional expressiveness.</p>
                                                        <p>An important aspect of learning is mastering the skill of reading cello parts. This skill is essential for every cellist, enabling them to navigate through musical notation with confidence and turn notes into live music. After mastering this skill, students will be able to independently analyze and perform compositions found in various sources.</p>
                                                        <p>Additionally, the goal of the course is to master the performance of pieces from various musical genres. This contributes to the development of stage confidence, helps manage stage anxiety, and provides an opportunity to assess personal progress compared to other musicians. The primary goal of the lessons is not competition but continuous development and enjoyment of the process of making music on the cello.</p>

                                                        <h2 id="detailCourseHeading-8">The Benefits of Cello Lessons</h2>
                                                        <p><strong>Development of musical ear and sense of rhythm:</strong> Cello lessons contribute to the development of auditory perception, allowing students to better understand music and its rhythmic nuances.</p>
                                                        <p><strong>Improvement of coordination and technique:</strong> Playing the cello requires enhanced coordination of movements and the development of hand motor skills. Gradual refinement of playing technique helps develop motor skills and improve these abilities.</p>
                                                        <p><strong>Emotional expressiveness and self-expression:</strong> The cello is a powerful instrument for conveying emotions and self-expression. Cello lessons enable students to express their feelings and emotions through music, fostering the development of emotional intelligence.</p>
                                                        <p><strong>Enhancement of memory and concentration:</strong> Learning musical pieces on the cello involves memorizing notes, melodies, and composition structures. This enhances memory and concentration, improving students' cognitive abilities.</p>
                                                        <p><strong>Boost in confidence and self-discipline:</strong> Regular cello practice demands self-discipline and perseverance, as consistent practice is necessary for progress. Students who successfully master playing the cello gain confidence in their abilities and strengthen self-control.</p>
                                                        <p><strong>Development of creative thinking:</strong> Cello lessons foster the development of creative thinking as students can experiment with musical ideas, create their own arrangements, and improvise within musical compositions.</p>
                                                        <p><strong>Improvement in social adaptation:</strong> Participation in musical ensembles and orchestras, as well as interaction with other students and teachers during cello lessons, promotes the development of social skills and the ability to work in a group.</p>
                                                        <p><strong>Stress relief and mood enhancement:</strong> Playing the cello can be an effective way to relieve stress and uplift mood. Musical creativity stimulates the release of endorphins, which improve mood and contribute to a sense of well-being.</p>
                                                        <p><strong>Broadening of horizons and cultural development:</strong> Studying music, musical history, and performing compositions from different epochs and genres on the cello contributes to broadening students' cultural horizons and the development of their musical taste.</p>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <?php } ?>
                                <?php io_news(); ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="<?php echo $ioTab2; ?>" role="tabpanel" aria-labelledby="<?php echo $ioTab2; ?>-tab">
                            <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                            <section class="io-intersection io-course-lesson">
                                <h2 class="io-heading-2 io-course-lesson__heading">Как проходят уроки виолончели</h2>
                                <div class="io-video">
                                    <p>Смотреть видео урока</p>
                                    <button class="io-video__lightbox io-video__button" type="button" data-video-id="3TiYGxOQDYw"></button>
                                </div>
                                <div class="io-steps__wrapper">
                                    <div class="io-steps">
                                        <div class="io-steps__number">1</div>
                                        <div class="io-steps__title">Техническая информация</div>
                                        <div class="io-steps__dots">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">Оборудование:</span> для занятий виолончелью вам понадобится виолончель, а также устройство с доступом в Интернет и камерой для видеосвязи — компьютер, планшет или смартфон.</p>
                                            <p><span class="io-fw-semibold">Интернет-соединение:</span> убедитесь в стабильности вашего интернет-подключения. Качественное и быстрое соединение гарантирует бесперебойные уроки.</p>
                                            <p><span class="io-fw-semibold">Видеоконференц-платформа:</span> для проведения онлайн-уроков виолончели мы используем <a href="https://zoom.us/ru/download" target="_blank" class="io-purple-main io-link">Zoom</a> или <a href="https://meet.google.com" target="_blank" class="io-purple-main io-link">Google Meet</a>. Установите необходимое приложение на ваше устройство заранее.</p>
                                            <p><span class="io-fw-semibold">Звук:</span> рекомендуется использовать наушники для улучшения качества звука. Это позволит снизить фоновый шум и улучшить аудиосвязь между вами и вашим педагогом виолончели.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">2</div>
                                        <div class="io-steps__title">Подготовка к уроку</div>
                                        <div class="io-steps__dots">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">Ссылка на занятие</span> будет отправлена вам заранее по электронной почте или через мессенджер.</p>
                                            <p><span class="io-fw-semibold">Ноты для урока</span> будут предоставлены заранее в электронном виде.</p>
                                            <p><span class="io-fw-semibold">Распечатайте ноты</span> перед началом урока или откройте их на экране вашего устройства.</p>
                                            <p><span class="io-fw-semibold">Разместите ваше устройство</span> так, чтобы преподаватель мог видеть не только ваше лицо, но и руки, а также весь инструмент.</p>
                                            <p><span class="io-fw-semibold">Войдите в приложение</span> Zoom или Google Meet по полученной ссылке, убедитесь в работоспособности камеры и микрофона.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">3</div>
                                        <div class="io-steps__title">Во время урока</div>
                                        <div class="io-steps__dots">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">Инструкции и обратная связь:</span> ваш преподаватель по виолончели предоставит подробные рекомендации по правильной технике игры и освоению первых музыкальных произведений.</p>
                                            <p><span class="io-fw-semibold">Задавайте вопросы:</span> не стесняйтесь обращаться к учителю за разъяснениями по любым неясностям.</p>
                                            <p><span class="io-fw-semibold">Практика:</span> основное время урока уделено практическому исполнению. Вы будете играть, а преподаватель будет наблюдать, слушать и демонстрировать примеры на своем инструменте.</p>
                                            <p><span class="io-fw-semibold">Демонстрация игры преподавателем:</span> учитель покажет пример исполнения определённых фрагментов, что поможет вам лучше их понять и освоить.</p>
                                            <p><span class="io-fw-semibold">Завершение урока:</span> по его окончании обсудите с преподавателем изученный материал, домашние задания и планы на будущие занятия.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">4</div>
                                        <div class="io-steps__title">После урока</div>
                                        <div class="io-steps__empty">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p>Преподаватель предоставит материалы для самостоятельных занятий дома: ноты, аудиозаписи, учебные пособия и дополнительные ресурсы для подготовки к следующему уроку.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps io-steps--last">
                                        <div class="io-steps__empty">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p class="io-purple-main io-fs-18 io-fw-semibold">Мы уверены, что онлайн-уроки виолончели обеспечат вам удобство и эффективность обучения. Образовательный процесс в Монтессори центре будет захватывающим и успешным!</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                            <section class="io-intersection io-course-lesson">
                                <h2 class="io-heading-2 io-course-lesson__heading">How Cello Lessons Work</h2>
                                <div class="io-video">
                                    <button class="io-video__lightbox io-video__button io-button__large" type="button" data-video-id="3TiYGxOQDYw">Watch Lesson Video</button>
                                </div>
                                <div class="io-steps__wrapper">
                                    <div class="io-steps">
                                        <div class="io-steps__number">1</div>
                                        <div class="io-steps__title">Technical Information</div>
                                        <div class="io-steps__dots">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">Equipment:</span> For cello lessons, you will need a cello, as well as a device with internet access and a camera for video communication — a computer, tablet, or smartphone.</p>
                                            <p><span class="io-fw-semibold">Internet Connection:</span> Ensure the stability of your internet connection. A high-quality and fast connection ensures uninterrupted lessons.</p>
                                            <p><span class="io-fw-semibold">Video Conferencing Platform:</span> We use <a href="https://zoom.us/download" target="_blank" class="io-purple-main io-link">Zoom</a> or <a href="https://meet.google.com" target="_blank" class="io-purple-main io-link">Google Meet</a> for online lessons. You will need to download and install the respective application if you don't have it already.</p>
                                            <p><span class="io-fw-semibold">Sound:</span> It is recommended to use headphones to improve sound quality. This will reduce background noise and enhance audio communication between you and your cello instructor.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">2</div>
                                        <div class="io-steps__title">Lesson Preparation</div>
                                        <div class="io-steps__dots">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p>You will receive a <span class="io-fw-semibold">link to the lesson</span> will be sent to you in advance via email or messenger.</p>
                                            <p><span class="io-fw-semibold">Lesson notes</span> will be provided electronically in advance.</p>
                                            <p><span class="io-fw-semibold">Print out the notes</span> before the lesson or open them on your device screen.</p>
                                            <p><span class="io-fw-semibold">Position your device</span> so that the instructor can see not only your face but also your hands and the entire instrument.</p>
                                            <p><span class="io-fw-semibold">Log into the Zoom or Google Meet app</span> using the provided link, and ensure that your camera and microphone are working.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">3</div>
                                        <div class="io-steps__title">During the Lesson</div>
                                        <div class="io-steps__dots">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">Instructions and Feedback:</span> Your cello instructor will provide detailed recommendations on proper playing technique and mastering the initial musical pieces.</p>
                                            <p><span class="io-fw-semibold">Ask Questions:</span> Feel free to ask the teacher for explanations on any unclear points.</p>
                                            <p><span class="io-fw-semibold">Practice:</span> The main time of the lesson is devoted to practical performance. You will play while the instructor observes, listens, and demonstrates examples on their instrument.</p>
                                            <p><span class="io-fw-semibold">Demonstration by the Instructor:</span> The teacher will show the execution of specific fragments, helping you better understand and master them.</p>
                                            <p><span class="io-fw-semibold">Conclusion of the Lesson:</span> At the end of the lesson, discuss the material covered, homework assignments, and plans for future sessions with the instructor.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">4</div>
                                        <div class="io-steps__title">After the Lesson</div>
                                        <div class="io-steps__empty">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p>The instructor will provide materials for self-study at home: notes, audio recordings, textbooks, and additional resources to prepare for the next lesson.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps io-steps--last">
                                        <div class="io-steps__empty">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p class="io-purple-main io-fs-18 io-fw-semibold">We are confident that online cello lessons will provide you with convenience and effectiveness in learning. The educational process at the Montessori center will be engaging and successful!</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <?php } ?>
                        </div>
                        <div class="tab-pane fade" id="<?php echo $ioTab3; ?>" role="tabpanel" aria-labelledby="<?php echo $ioTab3; ?>-tab">
                            <!-- Здесь будет контент из $contentTab3 -->
                        </div>
                        <div class="tab-pane fade" id="<?php echo $ioTab4; ?>" role="tabpanel" aria-labelledby="<?php echo $ioTab4; ?>-tab">
                            <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                            <section class="io-intersection io-course-programs">
                                <h2 class="io-heading-2">Программа курса фортепиано</h2>
                                <div class="io-course-programs__grid">
                                    <div class="io-course-programs__title">Уровни</div>
                                    <div class="io-course-programs__title">Модули</div>
                                    <div class="io-course-programs__inner io-course-programs__inner--preschool">
                                        <div class="io-course-programs__data io-course-programs__data--preschool">
                                            <div class="io-course-programs__data-inner">
                                                <div class="io-course-programs__name">
                                                    <img src="/wp-content/themes/interschooltemplate/images/i-c-preschool.svg" alt="">
                                                    <span>Подготовительный</span>
                                                    <span class="d-sm-none">уровень</span>
                                                </div>
                                                <div class="io-content">
                                                    <p>Возраст: 5 - 6 лет</p>
                                                </div>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-none d-sm-flex">
                                                <span>Смотреть диплом</span>
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Pre.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Pre.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Pre.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--preschool">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Модули</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>п1</span>
                                                <p>Первые ноты и простые мелодии</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>п2</span>
                                                <p>Играем и учимся: веселые пьесы на фортепиано</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>п3</span>
                                                <p>Учимся играть двумя руками</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>п4</span>
                                                <p>Мой первый музыкальный концерт</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>Смотреть диплом</span>
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Pre.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Pre.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Pre.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="io-course-programs__inner io-course-programs__inner--light">
                                        <div class="io-course-programs__data io-course-programs__data--light">
                                            <div class="io-course-programs__data-inner">
                                                <div class="io-course-programs__name">
                                                    <img src="/wp-content/themes/interschooltemplate/images/i-c-light.svg" alt="">
                                                    <span>Начальный</span>
                                                    <span class="d-sm-none">уровень</span>
                                                </div>
                                                <div class="io-content">
                                                    <p>Возраст: от 7 лет</p>
                                                </div>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-none d-sm-flex">
                                                <span>Смотреть диплом</span>
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--light">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Модули</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>1</span>
                                                <p>Основы музыкальной грамоты</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>2</span>
                                                <p>Навыки игры и первые мелодии</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>3</span>
                                                <p>Развитие слуха и ритма</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>4</span>
                                                <p>Изучение простых музыкальных произведений</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>5</span>
                                                <p>Изучаем сольные пьесы и в ансамбле с учителем</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>6</span>
                                                <p>Подготовка и проведение первого сольного выступления</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>Смотреть диплом</span>
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="io-course-programs__inner io-course-programs__inner--medium">
                                        <div class="io-course-programs__data io-course-programs__data--medium">
                                            <div class="io-course-programs__data-inner">
                                                <div class="io-course-programs__name">
                                                    <img src="/wp-content/themes/interschooltemplate/images/i-c-medium.svg" alt="">
                                                    <span>Средний</span>
                                                    <span class="d-sm-none">уровень</span>
                                                </div>
                                                <div class="io-content">
                                                    <p>Возраст: от 10 лет</p>
                                                </div>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-none d-sm-flex">
                                                <span>Смотреть диплом</span>
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Intermediate-1.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Intermediate-1.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Intermediate-1.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--medium">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Модули</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>7</span>
                                                <p>Углубленное изучение гармонии</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>8</span>
                                                <p>Сложные технические приёмы и улучшение исполнительских навыков</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>9</span>
                                                <p>Изучение среднего уровня музыкальных произведений</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>10</span>
                                                <p>Подготовка и проведение сольного концерта среднего уровня</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>Смотреть диплом</span>
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Intermediate-1.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Intermediate-1.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Intermediate-1.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="io-course-programs__inner io-course-programs__inner--hard">
                                        <div class="io-course-programs__data io-course-programs__data--hard">
                                            <div class="io-course-programs__data-inner">
                                                <div class="io-course-programs__name">
                                                    <img src="/wp-content/themes/interschooltemplate/images/i-c-hard.svg" alt="">
                                                    <span>Продвинутый</span>
                                                    <span class="d-sm-none">уровень</span>
                                                </div>
                                                <div class="io-content">
                                                    <p>Возраст: от 12 лет</p>
                                                </div>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-none d-sm-flex">
                                                <span>Смотреть диплом</span>
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Advanced-1.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Advanced-1.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Advanced-1.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--hard">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Модули</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>11</span>
                                                <p>Мастерство интерпретации и выразительности</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>12</span>
                                                <p>Изучение сложных музыкальных произведений</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>13</span>
                                                <p>Углубленное изучение стилей и эпох в музыке</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>14</span>
                                                <p>Подготовка и проведение профессионального сольного концерта</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>Смотреть диплом</span>
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Advanced-1.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Advanced-1.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Advanced-1.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="io-text-wrapper">
                                    <p>Программа обучения фортепиано разработана для детей возрастом от 7 лет и взрослых. Программа включает три уровня: начальный, средний и продвинутый, по окончанию которых студенты получают дипломы. Если студент ранее не учился, он начинает обучение с начального уровня. Средний и продвинутый уровни требуют подготовки. Дети возрастом 5 - 6 лет начинают обучение с подготовительного уровня.</p>
                                    <p class="io-purple-main io-fs-18 io-fw-semibold">Начните обучение! Для этого запишитесь на <a type="button" class="io-purple-main io-fw-semibold io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">пробный урок</a>!</p>
                                </div>
                            </section>
                            <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                            <section class="io-intersection io-course-programs">
                                <h2 class="io-heading-2">Piano Course Program</h2>
                                <div class="io-course-programs__grid">
                                    <div class="io-course-programs__title">Levels </div>
                                    <div class="io-course-programs__title">Modules</div>
                                    <div class="io-course-programs__inner io-course-programs__inner--preschool">
                                        <div class="io-course-programs__data io-course-programs__data--preschool">
                                            <div class="io-course-programs__data-inner">
                                                <div class="io-course-programs__name">
                                                    <img src="/wp-content/themes/interschooltemplate/images/i-c-preschool.svg" alt="">
                                                    <span>Preparatory Level</span>
                                                </div>
                                                <div class="io-content">
                                                    <p> Age: 5 - 6 years</p>
                                                </div>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-none d-sm-flex">
                                                <span>View Diploma</span>
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Pre.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Pre.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Pre.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--preschool">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Modules</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>p1</span>
                                                <p>First Notes and Simple Melodies</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>p2</span>
                                                <p>Play and Learn: Fun Piano Pieces</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>p3</span>
                                                <p>Learning to Play with Both Hands</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>p4</span>
                                                <p>My First Musical Concert</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>View Diploma</span>
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Pre.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Pre.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Pre.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="io-course-programs__inner io-course-programs__inner--light">
                                        <div class="io-course-programs__data io-course-programs__data--light">
                                            <div class="io-course-programs__data-inner">
                                                <div class="io-course-programs__name">
                                                    <img src="/wp-content/themes/interschooltemplate/images/i-c-light.svg" alt="">
                                                    <span>Beginner Level</span>
                                                </div>
                                                <div class="io-content">
                                                    <p>Age: 7 years and older</p>
                                                </div>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-none d-sm-flex">
                                                <span>View Diploma</span>
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--light">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Modules</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>1</span>
                                                <p>Fundamentals of Musical Literacy</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>2</span>
                                                <p>Playing Skills and Initial Melodies</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>3</span>
                                                <p>Ear Training and Rhythm Development</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>4</span>
                                                <p>Exploring Simple Musical Compositions</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>5</span>
                                                <p>Solo Pieces and Ensemble with the Teacher</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>6</span>
                                                <p>Preparing and Performing the First Solo Concert</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>View Diploma</span>
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="io-course-programs__inner io-course-programs__inner--medium">
                                        <div class="io-course-programs__data io-course-programs__data--medium">
                                            <div class="io-course-programs__data-inner">
                                                <div class="io-course-programs__name">
                                                    <img src="/wp-content/themes/interschooltemplate/images/i-c-medium.svg" alt="">
                                                    <span>Intermediate Level</span>
                                                </div>
                                                <div class="io-content">
                                                    <p>Age: 10 years and older</p>
                                                </div>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-none d-sm-flex">
                                                <span>View Diploma</span>
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Intermediate-1.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Intermediate-1.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Intermediate-1.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--medium">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Modules</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>7</span>
                                                <p>Advanced Harmony Study</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>8</span>
                                                <p>Complex Technical Techniques and Performance Improvement</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>9</span>
                                                <p>Exploring Intermediate-Level Musical Compositions</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>10</span>
                                                <p>Preparing and Performing an Intermediate-Level Solo Concert</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>View Diploma</span>
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Intermediate-1.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Intermediate-1.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Intermediate-1.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="io-course-programs__inner io-course-programs__inner--hard">
                                        <div class="io-course-programs__data io-course-programs__data--hard">
                                            <div class="io-course-programs__data-inner">
                                                <div class="io-course-programs__name">
                                                    <img src="/wp-content/themes/interschooltemplate/images/i-c-hard.svg" alt="">
                                                    <span>Advanced Level</span>
                                                </div>
                                                <div class="io-content">
                                                    <p>Age: 12 years and older</p>
                                                </div>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-none d-sm-flex">
                                                <span>View Diploma</span>
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Advanced-1.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Advanced-1.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Advanced-1.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--hard">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Modules</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>11</span>
                                                <p>Mastery of Interpretation and Expressiveness</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>12</span>
                                                <p>Studying Complex Musical Compositions</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>13</span>
                                                <p>In-Depth Study of Musical Styles and Eras</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>14</span>
                                                <p>Preparing and Performing a Professional Solo Concert</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>View Diploma</span>
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Advanced-1.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Certificate_Advanced-1.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Advanced-1.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="io-text-wrapper">
                                    <p>The piano education program is designed for children aged 7 and adults. The program comprises three levels: beginner, intermediate, and advanced, with diplomas awarded upon completion. If a student is new to piano lessons, they start at the beginner level. The intermediate and advanced levels require prior preparation. Children aged 5 - 6 begin their education at the preparatory level.</p>
                                    <p class="io-purple-main io-fs-18 io-fw-semibold">Start your learning journey! Sign up for a <a type="button" class="io-purple-main io-fw-semibold io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">trial lesson</a> today!</p>
                                </div>
                            </section>
                            <?php } ?>
                        </div>
                        <div class="tab-pane fade" id="<?php echo $ioTab5; ?>" role="tabpanel" aria-labelledby="<?php echo $ioTab5; ?>-tab">
                            <!-- Здесь будет контент из $contentTab5 -->
                        </div>
                        <div class="tab-pane fade" id="<?php echo $ioTab6; ?>" role="tabpanel" aria-labelledby="<?php echo $ioTab6; ?>-tab">
                            <div class="io-intersection">
                                <div class="io-price__sidebar">
                                    <div class="io-price__sidebar-sticky">
                                        <div class="io-price__sidebar-inner">
                                            <div class="io-price__detail">
                                                <!-- Абонемент -->
                                                <div class="io-price__detail-title-wrapper io-abonement">
                                                    <p class="io-price__detail-title">
                                                        <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Ваш заказ'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Your order'; } ?>
                                                        <span class="io-purple-main io-fw-semibold">"<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Абонемент'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Subscription'; } ?>"</span>
                                                    </p>
                                                    <div><div class="io-warning"><span>Можно использовать на любых курсах</span></div></div>
                                                </div>
                                                <!-- Демо -->
                                                <div class="io-price__detail-title-wrapper io-demo">
                                                    <p class="io-price__detail-title">
                                                        <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Ваш заказ'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Your order'; } ?>
                                                        <span class="io-purple-main io-fw-semibold">"<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Пробные уроки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Demo lessons'; } ?>"</span>
                                                    </p>
                                                    <div id="ioDemoLessonsList"></div>
                                                </div>
                                                <!-- Подарочный -->
                                                <div class="io-price__detail-title-wrapper io-gift">
                                                    <p class="io-price__detail-title">
                                                        <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Ваш заказ'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Your order'; } ?>
                                                        <span class="io-purple-main io-fw-semibold">"<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Подарочный сертификат'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Gift card'; } ?>"</span>
                                                    </p>
                                                    <div id="ioGiftLessonsList"></div>
                                                </div>
                                                <!-- Общий -->
                                                <!-- <div class="io-price__detail-currency">
                                                    <div class="io-price__detail-item">
                                                        <p class="io-purple-main"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Валюта платежа'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Payment currency'; } ?></p>
                                                    </div>
                                                    <div class="io-select-currency">
                                                        <span class="io-selected-currency" id="selectedCurrency">USD</span>
                                                        <ul class="io-currency-options" id="currencyOptions">
                                                            <li data-value="usd">USD</li>
                                                            <li data-value="eur">EUR</li>
                                                        </ul>
                                                    </div>
                                                </div> -->
                                                <!-- Абонемент -->
                                                <div class="io-price__detail-item io-abonement">
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Количество уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Number of lessons'; } ?></p>
                                                    <p id="ioAbonementCount">1</p>
                                                </div>
                                                <div class="io-price__detail-item io-abonement">
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Цена урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson price'; } ?></p>
                                                    <p><span id="ioAbonementLessonPrice">1</span> <span class="io-currency__from-select">USD</span></p>
                                                </div>
                                                <div class="io-price__detail-item io-abonement" id="ioAbonementLessonSaleWrapper">
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Скидка'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Discount'; } ?></p>
                                                    <p class="io-pink-main"><span id="ioAbonementLessonSale">1</span> <span class="io-currency__from-select">USD</span></p>
                                                </div>
                                                <!-- Демо -->
                                                <div class="io-price__detail-item io-demo">
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Количество уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Number of lessons'; } ?></p>
                                                    <p id="ioDemoCount">2</p>
                                                </div>
                                                <div class="io-price__detail-item io-demo">
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Цена урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson price'; } ?></p>
                                                    <p><span id="ioDemoLessonPrice">2</span> <span class="io-currency__from-select">USD</span></p>
                                                </div>
                                                <div class="io-price__detail-item io-demo" id="ioDemoLessonSaleWrapper">
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Скидка'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Discount'; } ?></p>
                                                    <p class="io-pink-main"><span id="ioDemoLessonSale">2</span> <span class="io-currency__from-select">USD</span></p>
                                                </div>
                                                <!-- Подарочный -->
                                                <div class="io-price__detail-item io-gift" id="ioGiftCountWrapper">
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Количество уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Number of lessons'; } ?></p>
                                                    <p id="ioGiftCount">3</p>
                                                </div>
                                                <div class="io-price__detail-item io-gift">
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Цена урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson price'; } ?></p>
                                                    <p><span id="ioGiftLessonPrice">3</span> <span class="io-currency__from-select">USD</span></p>
                                                </div>
                                                <div class="io-price__detail-item io-gift" id="ioGiftLessonSaleWrapper">
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
                                                <!-- Абонемент -->
                                                <div class="io-price__detail-item io-last io-abonement">
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'К оплате'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Total'; } ?></p>
                                                    <p class="io-line-through" id="ioAbonementAmountOldWrapper"><span id="ioAbonementAmountOld">1</span> <span class="io-currency__from-select">USD</span></p>
                                                    <p><span id="ioAbonementAmount">1</span> <span class="io-currency__from-select">USD</span></p>
                                                </div>
                                                <!-- Демо -->
                                                <div class="io-price__detail-item io-last io-demo">
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'К оплате'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Total'; } ?></p>
                                                    <p><span id="ioDemoAmount">2</span> <span class="io-currency__from-select">USD</span></p>
                                                </div>
                                                <!-- Подарочный -->
                                                <div class="io-price__detail-item io-last io-gift">
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
                                    <div class="io-price__sidebar-content io-course-price">
                                        <div class="io-flex-between d-flex align-items-center justify-content-between justify-content-sm-start">
                                            <h2 class="io-heading-2"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Купить онлайн уроки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Buy Online Lessons'; } ?></h2>
                                        </div>
                                        
                                        <div class="io-price">
                                            <div class="io-price__step io-price__first">
                                                <div class="io-price__heading">
                                                    <span>1</span>
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Выберите покупку'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Select purchase'; } ?></p>
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
                                            <div class="io-price__step io-abonement">
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
                                                                        <input class="io-radio" type="radio" id="iocheckboxgift212" name="checkbox-group" checked>
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
                                                                        <input class="io-radio" type="radio" id="iocheckboxgift212" name="checkbox-group" checked>
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
                                            <!-- Демо -->
                                            <div class="io-price__step io-demo">
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
                                                                        <input class="io-checkbox" type="checkbox" id="iocheckbox212" name="checkbox-group" checked>
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
                                                                        <input class="io-checkbox" type="checkbox" id="iocheckbox212" name="checkbox-group" checked>
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
                                            <div class="io-abonement">
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
                                            <!-- Абонемент -->
                                            <div class="io-demo">
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
                                            <!-- Подарочный -->
                                            <div class="io-gift">
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
                                        <!-- Абонемент -->
                                        <div class="io-abonement">
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
                                        <!-- Абонемент -->
                                        <div class="io-demo">
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
                                        <!-- Подарочный -->
                                        <div class="io-gift">
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
                        <div class="tab-pane fade" id="<?php echo $ioTab7; ?>" role="tabpanel" aria-labelledby="<?php echo $ioTab7; ?>-tab">
                            <!-- Здесь будет контент из $contentTab7 -->
                        </div>
                        <div class="tab-pane fade" id="<?php echo $ioTab8; ?>" role="tabpanel" aria-labelledby="<?php echo $ioTab8; ?>-tab">
                            <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                            <section class="io-intersection io-course-faq">
                                <h2 class="io-heading-2 io-course-faq__heading">Ответы на часто задаваемые вопросы</h2>
                                <div class="io-accordion accordion" id="faqAccodrion">
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-1">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-1" aria-expanded="false" aria-controls="faqAccordion-collapse-1">
                                                Как записаться на курс виолончели онлайн?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-1" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-1" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Записаться на пробный урок виолончели и оплатить его можно <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">здесь</a>. После этого наш администратор свяжется с вами и вы согласуете удобное расписание.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-2">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-2" aria-expanded="false" aria-controls="faqAccordion-collapse-2">
                                            С какого возраста можно учиться на онлайн-уроках виолончели?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-2" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Мы приглашаем на онлайн уроки виолончели детей от 8 лет.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-2b">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-2b" aria-expanded="false" aria-controls="faqAccordion-collapse-2b">
                                            Сколько стоит пробный урок виолончели?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-2b" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-2b" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Пробный урок стоит <span class="ioArrayToTextElementsDemo">$6</span>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-3">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-3" aria-expanded="false" aria-controls="faqAccordion-collapse-3">
                                            Сколько стоит дальнейшее обучение? Есть ли скидки?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-3" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    После пробного урока виолончели вы можете купить абонемент минимум на 4 урока за <span class="ioArrayToTextElements03">$56</span>. Выбрать количество уроков можно <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">здесь</a>. При покупке от 80 уроков одним платежом действует <span class="ioArrayToTextElements62">скидка до $120</span>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-4">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-4" aria-expanded="false" aria-controls="faqAccordion-collapse-4">
                                            Как оплатить курс виолончели?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-4" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Вы можете выбрать количество уроков и оплатить на <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">сайте</a>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-5">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-5" aria-expanded="false" aria-controls="faqAccordion-collapse-5">
                                            Сколько раз в неделю проходят уроки виолончели онлайн?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-5" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-5" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Мы рекомендуем заниматься 2 раза в неделю. Также вы можете сами регулировать частоту уроков в зависимости от своей загруженности.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-6">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-6" aria-expanded="false" aria-controls="faqAccordion-collapse-6">
                                            Как составляется расписание?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-6" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Наш администратор согласовывает расписание с каждым студентом индивидуально.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-7">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-7" aria-expanded="false" aria-controls="faqAccordion-collapse-7">
                                            Сколько длится урок виолончели?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-7" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Урок виолончели длится 45 минут.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-8">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-8" aria-expanded="false" aria-controls="faqAccordion-collapse-8">
                                            Можно ли учиться игре на виолончели в группе?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-8" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Нет, уроки виолончели проходят индивидуально. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-9">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-9" aria-expanded="false" aria-controls="faqAccordion-collapse-9">
                                            Я никогда не учился играть на виолончели ранее, я могу записаться? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-9" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-9" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Да, мы начинаем обучение игре на виолончели онлайн с нуля.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-10">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-10" aria-expanded="false" aria-controls="faqAccordion-collapse-10">
                                            Мой ребенок раньше занимался на виолончели, вы сможете определить его уровень?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-10" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-10" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Да, наш педагог определит уровень ученика и подберет соответствующую программу.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-11">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-11" aria-expanded="false" aria-controls="faqAccordion-collapse-11">
                                            Могу ли я заниматься на выходных?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-11" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-11" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Да.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-12">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-12" aria-expanded="false" aria-controls="faqAccordion-collapse-12">
                                            Можно ли переносить урок на другой день?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-12" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-12" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Вы можете пропустить свой урок виолончели или перенести его на другой день, но при этом, чтобы сохранить оплату, предупредите нас минимум за 24 часа до его начала. В противном случае урок будет считаться состоявшимся.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-13">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-13" aria-expanded="false" aria-controls="faqAccordion-collapse-13">
                                            Могу ли я брать перерывы в обучении? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-13" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-13" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Да. Сообщите нам даты ваших каникул заранее, не менее 24 часов до урока.	
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-14">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-14" aria-expanded="false" aria-controls="faqAccordion-collapse-14">
                                            Получит ли мой ребенок диплом? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-14" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-14" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Да, по окончанию курса виолончели каждый студент получает диплом.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-15">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-15" aria-expanded="false" aria-controls="faqAccordion-collapse-15">
                                            Что нужно для первого урока виолончели?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-15" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-15" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Вам необходимо дома иметь виолончель нужного размера, а также гаджет с камерой и наушники. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-16">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-16" aria-expanded="false" aria-controls="faqAccordion-collapse-16">
                                            Будут ли у меня экзамены?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-16" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-16" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Вместо экзаменов вы будете выступать на концертах и конкурсах. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-17">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-17" aria-expanded="false" aria-controls="faqAccordion-collapse-17">
                                            Вы принимаете на курсы виолончели взрослых? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-17" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-17" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Да, в любом возрасте можно учиться играть на виолончели.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-18">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-18" aria-expanded="false" aria-controls="faqAccordion-collapse-18">
                                            Могу ли я выбрать преподавателя на вашем сайте? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-18" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-18" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Да. Важно, чтобы график педагога совпадал с вашими возможностями по расписанию. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-19">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-19" aria-expanded="false" aria-controls="faqAccordion-collapse-19">
                                            Включает ли курс виолончели изучение теории музыки? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-19" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-19" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Да. На уроках виолончели онлайн педагог уделяет внимание теории музыки и сольфеджио.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-20">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-20" aria-expanded="false" aria-controls="faqAccordion-collapse-20">
                                            Есть ли программа курса виолончели?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-20" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-20" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Да, программа опубликована на сайте на странице курса виолончели.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                            <section class="io-intersection io-course-faq">
                                <h2 class="io-heading-2 io-course-faq__heading">Frequently Asked Questions (FAQ)</h2>
                                <div class="io-accordion accordion" id="faqAccodrion">
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-1">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-1" aria-expanded="false" aria-controls="faqAccordion-collapse-1">
                                            How to Sign Up for Online Cello Lessons?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-1" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-1" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                To sign up for a trial cello lesson and pay for it, you can do so <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">here</a>. After that, our administrator will contact you to arrange a convenient schedule.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-2">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-2" aria-expanded="false" aria-controls="faqAccordion-collapse-2">
                                            From what age can one start taking online cello lessons?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-2" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                We invite children aged 8 and older to our online cello lessons.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-2b">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-2b" aria-expanded="false" aria-controls="faqAccordion-collapse-2b">
                                            How much does a trial cello lesson cost?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-2b" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-2b" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                A trial cello lesson costs <span class="ioArrayToTextElementsDemo">$6</span>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-3">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-3" aria-expanded="false" aria-controls="faqAccordion-collapse-3">
                                            What is the cost of further education? Are there any discounts?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-3" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                After the trial cello lesson, you can purchase a subscription for a minimum of 4 lessons for <span class="ioArrayToTextElements03">$56</span>. You can select the number of lessons <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">here</a>. A discount is available for purchases of 80 lessons or more, saving <span class="ioArrayToTextElements62">up to $120</span>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-4">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-4" aria-expanded="false" aria-controls="faqAccordion-collapse-4">
                                            How do I pay for the cello course?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-4" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                You can select the number of lessons and pay on <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">our website</a>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-5">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-5" aria-expanded="false" aria-controls="faqAccordion-collapse-5">
                                            How often are online cello lessons held per week?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-5" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-5" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                We recommend having lessons twice a week. You can also adjust the frequency of lessons based on your schedule.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-6">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-6" aria-expanded="false" aria-controls="faqAccordion-collapse-6">
                                            How is the schedule arranged?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-6" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Our administrator coordinates the schedule with each student individually.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-7">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-7" aria-expanded="false" aria-controls="faqAccordion-collapse-7">
                                            How long does a cello lesson last?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-7" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                A cello lesson lasts for 45 minutes.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-8">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-8" aria-expanded="false" aria-controls="faqAccordion-collapse-8">
                                            Can I learn to play the cello in a group?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-8" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                No, cello lessons are conducted individually.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-9">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-9" aria-expanded="false" aria-controls="faqAccordion-collapse-9">
                                            I have never learned to play the cello before, can I sign up?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-9" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-9" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes, we start teaching cello playing online from scratch.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-10">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-10" aria-expanded="false" aria-controls="faqAccordion-collapse-10">
                                            My child has previously taken cello lessons, can you determine their level?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-10" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-10" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes, our teacher will assess the student's level and select an appropriate program.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-11">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-11" aria-expanded="false" aria-controls="faqAccordion-collapse-11">
                                            Can I have lessons on weekends?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-11" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-11" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-12">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-12" aria-expanded="false" aria-controls="faqAccordion-collapse-12">
                                            Can I reschedule a lesson for another day?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-12" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-12" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                You can skip your cello lesson or reschedule it for another day, but to retain the payment, please notify us at least 24 hours before the lesson starts. Otherwise, the lesson will be considered completed.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-13">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-13" aria-expanded="false" aria-controls="faqAccordion-collapse-13">
                                            Can I take breaks in my studies?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-13" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-13" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes. Please inform us of your vacation dates in advance, at least 24 hours before the lesson.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-14">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-14" aria-expanded="false" aria-controls="faqAccordion-collapse-14">
                                            Will my child receive a diploma?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-14" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-14" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes, upon completion of the cello course, each student receives a diploma.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-15">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-15" aria-expanded="false" aria-controls="faqAccordion-collapse-15">
                                            What do I need for the first cello lesson?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-15" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-15" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                You need to have a cello of the appropriate size at home, as well as a device with a camera and headphones.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-16">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-16" aria-expanded="false" aria-controls="faqAccordion-collapse-16">
                                            Will there be exams?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-16" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-16" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Instead of exams, you will perform at concerts and competitions.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-17">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-17" aria-expanded="false" aria-controls="faqAccordion-collapse-17">
                                            Do you accept adults for cello courses?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-17" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-17" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes, you can learn to play the cello at any age.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-18">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-18" aria-expanded="false" aria-controls="faqAccordion-collapse-18">
                                            Can I choose a teacher on your website?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-18" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-18" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes. It is important that the teacher's schedule aligns with your availability.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-19">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-19" aria-expanded="false" aria-controls="faqAccordion-collapse-19">
                                            Does the cello course include music theory?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-19" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-19" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes. During online cello lessons, the teacher focuses on music theory and solfeggio.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-20">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-20" aria-expanded="false" aria-controls="faqAccordion-collapse-20">
                                            Is there a cello course curriculum?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-20" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-20" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes, the curriculum is published on the cello course page on the website.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <?php } ?>
                        </div>
                        <div class="tab-pane fade" id="<?php echo $ioTab9; ?>" role="tabpanel" aria-labelledby="<?php echo $ioTab9; ?>-tab">
                            <!-- Здесь будет контент из $contentTab9 -->
                        </div>
                        <div class="tab-pane fade" id="<?php echo $ioTab10; ?>" role="tabpanel" aria-labelledby="<?php echo $ioTab10; ?>-tab">
                            <section class="io-intersection io-course-gallery">
                                <h2 class="io-heading-2 io-course-gallery__heading"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Галерея'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Gallery'; } ?></h2>
                                <div class="io-flex-between io-mobile-flex-column">
                                    <ul class="nav nav-pills io-pills" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-photo-tab" data-bs-toggle="pill" data-bs-target="#pills-photo" type="button" role="tab" aria-controls="pills-photo" aria-selected="true"><span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Фото'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Photo'; } ?></span> <span class="io-fw-bold">36</span></button>
                                        </li>
                                        <!-- <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-video-tab" data-bs-toggle="pill" data-bs-target="#pills-video" type="button" role="tab" aria-controls="pills-video" aria-selected="false"><span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Видео'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Video'; } ?></span> <span class="io-fw-bold">24</span></button>
                                        </li> -->
                                    </ul>
                                </div>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-photo" role="tabpanel" aria-labelledby="pills-photo-tab">
                                        <div class="io-gallery">
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/1.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/1.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/2.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/2.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/3.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/3.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/4.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/4.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/5.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/5.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/6.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/6.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/7.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/7.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/8.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/8.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/9.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/9.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/10.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/10.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/11.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/11.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/12.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/12.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/13.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/13.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/14.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/14.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/15.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/15.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/16.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/16.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/17.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/17.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/18.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/18.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/19.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/19.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/20.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/20.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/21.jpg" type="image/jpeg">
                                                    <img src="/wp-content/uploads/2024/04/21.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                                        <div class="io-gallery io-gallery--video">
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="WdE-uakv4Og">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/WdE-uakv4Og.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/WdE-uakv4Og.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/WdE-uakv4Og.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="8WpGo5wR958">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/8WpGo5wR958.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/8WpGo5wR958.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/8WpGo5wR958.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="ULjFfwIDsEU">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/ULjFfwIDsEU.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/ULjFfwIDsEU.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/ULjFfwIDsEU.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="0OBHTBmw7XE">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/0OBHTBmw7XE.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/0OBHTBmw7XE.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/0OBHTBmw7XE.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="vaZbPJYEOAs">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/vaZbPJYEOAs.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/vaZbPJYEOAs.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/vaZbPJYEOAs.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="veVAq-1To3c">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/veVAq-1To3c.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/veVAq-1To3c.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/veVAq-1To3c.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="l3Ez6EKZr5M">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/l3Ez6EKZr5M.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/l3Ez6EKZr5M.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/l3Ez6EKZr5M.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="4-6LbFnVi3U">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/4-6LbFnVi3U.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/4-6LbFnVi3U.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/4-6LbFnVi3U.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="qS0q4RA7b2g">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/qS0q4RA7b2g.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/qS0q4RA7b2g.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/qS0q4RA7b2g.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="_9uLi5PpCpw">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/_9uLi5PpCpw.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/_9uLi5PpCpw.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/_9uLi5PpCpw.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="rJB5-EB2xco">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/rJB5-EB2xco.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/rJB5-EB2xco.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/rJB5-EB2xco.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="boYfnTNhEZs">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/boYfnTNhEZs.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/boYfnTNhEZs.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/boYfnTNhEZs.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="Ne5NaOGBkQc">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Ne5NaOGBkQc.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/Ne5NaOGBkQc.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/Ne5NaOGBkQc.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="ajA3XagAeO0">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/ajA3XagAeO0.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/ajA3XagAeO0.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/ajA3XagAeO0.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="QtK6OfserOs">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/QtK6OfserOs.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/QtK6OfserOs.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/QtK6OfserOs.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="QyrXMSdIHuY">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/QyrXMSdIHuY.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/QyrXMSdIHuY.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/QyrXMSdIHuY.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="py67EJgbfmk">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/py67EJgbfmk.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/py67EJgbfmk.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/py67EJgbfmk.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="hAvQ9RleFP8">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/hAvQ9RleFP8.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/hAvQ9RleFP8.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/hAvQ9RleFP8.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="L9W7lTn0HB8">
                                                
                                                <img src="/wp-content/themes/interschooltemplate/images/L9W7lTn0HB8.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="DsLuEAmvJUg">
                                                
                                                <img src="/wp-content/themes/interschooltemplate/images/DsLuEAmvJUg.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="CXvxC07YF2A">
                                                
                                                <img src="/wp-content/themes/interschooltemplate/images/CXvxC07YF2A.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="io-flex-end">
                                    <div class="io-pagination">
                                        <div class="io-pagination__count">
                                            <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Страница'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Page'; } ?></span>
                                            <span>1/6</span>
                                        </div>
                                        <div class="io-pagination__arrows">
                                            <button class="io-pagination__prev disabled"></button>
                                            <button class="io-pagination__next"></button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php io_popular_courses(); ?>

    <?php io_montessori_work(); ?>
</main>

<!-- Image Lightbox -->
<div class="io-lightbox__container">
    <span class="close-btn">
        <span></span>
        <span></span>
        <span></span>
    </span>
    <div class="io-lightbox__wrapper">
        <img src="" alt="" class="io-lightbox__content">
    </div>
</div>

<!-- Video Lightbox -->
<div class="video-lightbox-container">
    <span class="close-btn">
        <span></span>
        <span></span>
        <span></span>
    </span>
    <div class="video-lightbox-wrapper">
        <div class="video-lightbox-content"></div>
    </div>
</div>

<!-- Gallery Lightbox -->
<div class="io-lb-gallery">
    <button class="io-lb-gallery__close">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <div class="io-lb-gallery__wrapper">
        <img class="io-lb-gallery__image" src="" alt="">
    </div>
    <button class="io-lb-gallery__prev io-pagination__prev"></button>
    <button class="io-lb-gallery__next io-pagination__next"></button>
</div>

<?php get_footer(); // подключаем footer.php ?>
<?php io_price(); ?>



<script>
    //Переназначаем действие события popstate (по нажатию на кнопки вперёд-назад на браузере)
    var clickInitiator = null;
    window.onpopstate = function(event) {
        clickInitiator = "popstate"
        if (!document.location.href.split("/#")[1]) {
            document.getElementById('nav-tab').firstElementChild.click()
        } else {
            document.querySelectorAll('[data-bs-target="#' + document.location.href.split("/#")[1] + '"]')[0].click()
        }
        clickInitiator = null
    };

</script>

<script>
    //Добавляем в историю браузера новую ссылку по нажатию на вкладку на странице
    function tabHistoryHandler(event, clicked_button) {
        
        //Проверяем, это нажатие на кнопку вкладки человеком, или эмуляция через click() функцией выше
        if (clickInitiator == null) {
            window.history.pushState(clicked_button.id, "", document.location);
        }
    }

</script>

<!-- Смена хедера -->
<script>
    var logoElement = document.querySelector('.io-header__logo img');
    var headerNav = document.querySelector('.io-header__list');
    var headerMain = document.querySelector('.io-header');
    var logoLink = document.querySelector('.io-header__logo');

    var scrollImageRu = '/wp-content/uploads/2023/11/Виолончель-Онлайн.svg';
    var scrollImageEn = '/wp-content/uploads/2023/11/Cello-Online.svg';
    var defaultImage = '/wp-content/themes/interschooltemplate/images/header-logo.svg';

    function handleScroll() {
        if (window.pageYOffset > 200) {
            if (window.innerWidth < 991.5) {
                headerNav.style.opacity = '1';
                headerNav.style.pointerEvents = 'auto';
            } else {
                headerNav.style.opacity = '0';
                headerNav.style.pointerEvents = 'none';
            }
            headerMain.style.paddingBottom = '0';
        } else {
            headerNav.style.opacity = '1';
            headerNav.style.pointerEvents = 'auto';
            headerMain.style.paddingBottom = '0';
        }

        if (window.innerWidth >= 576) {
            var languageCode = '<?php echo ICL_LANGUAGE_CODE; ?>';
            var scrollImage = (languageCode === 'ru') ? scrollImageRu : scrollImageEn;

            if (window.pageYOffset > 200) {
                logoElement.src = scrollImage;
                logoLink.href = '#nav-tab-1';
            } else {
                logoElement.src = defaultImage;
                logoLink.href = '/';
            }
        } else {
            logoElement.src = defaultImage;
        }
    }

    window.addEventListener('scroll', handleScroll);
</script>

<!-- Image Lightbox Script -->
<script>
    // Получаем ссылки на элементы
    const lightboxContainer = document.querySelector('.io-lightbox__container');
    const lightboxContent = document.querySelector('.io-lightbox__content');
    const lightboxLinks = document.querySelectorAll('.io-lightbox');

    // Обработчик клика на изображение
    function openLightbox(event) {
        event.preventDefault();
        const imageSrc = this.querySelector('img').src;
        lightboxContent.src = imageSrc;
        lightboxContainer.style.display = 'block';
        document.body.style.overflow = 'hidden';
    }

    // Обработчик клика на кнопку закрытия
    function closeLightbox() {
        lightboxContainer.style.display = 'none';
        document.body.style.overflow = 'auto';
    }

    // Назначаем обработчики событий для всех ссылок с классом "lightbox"
    lightboxLinks.forEach(link => link.addEventListener('click', openLightbox));
    lightboxContainer.addEventListener('click', closeLightbox);

</script>

<!-- Video Lightbox Script -->
<script>
    // Получаем ссылки на элементы
    const videoLightboxContainer = document.querySelector('.video-lightbox-container');
    const videoLightboxContent = document.querySelector('.video-lightbox-content');
    const videoButtons = document.querySelectorAll('.io-video__lightbox');

    // Функция для создания iframe с YouTube видео
    function createYouTubeIframe(videoId) {
        const iframe = document.createElement('iframe');
        iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
        iframe.allow = 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture';
        iframe.allowFullscreen = true;
        iframe.frameborder = '0';
        return iframe;
    }

    // Обработчик клика на кнопку "Смотреть видео"
    function openVideoLightbox(event) {
        const button = event.target;
        const videoId = button.dataset.videoId;
        const videoIframe = createYouTubeIframe(videoId);
        videoLightboxContent.innerHTML = '';
        videoLightboxContent.appendChild(videoIframe);
        videoLightboxContainer.style.display = 'block';
        document.body.style.overflow = 'hidden';

        // Проверяем размер экрана
        if (window.innerWidth > 1200) {
            document.body.style.paddingRight = 'var(--io-size-075)';
        }
    }


    // Обработчик клика на кнопку закрытия
    function closeVideoLightbox() {
        videoLightboxContainer.style.display = 'none';
        videoLightboxContent.innerHTML = '';
        document.body.style.overflow = 'auto';
        document.body.style.paddingRight = '';
    }

    // Назначаем обработчики событий для всех кнопок с видео
    videoButtons.forEach(button => button.addEventListener('click', openVideoLightbox));
    videoLightboxContainer.addEventListener('click', closeVideoLightbox);

</script>

<!-- Gallery Lightbox Script -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const galleryItems = document.querySelectorAll('.io-lb-gallery__item');
        const ioLbGallery = document.querySelector('.io-lb-gallery');
        const ioLbGalleryImage = document.querySelector('.io-lb-gallery__image');
        const ioLbGalleryClose = document.querySelector('.io-lb-gallery__close');
        const ioLbGalleryPrev = document.querySelector('.io-lb-gallery__prev');
        const ioLbGalleryNext = document.querySelector('.io-lb-gallery__next');
        let currentIndex = 0;
        let isLightboxOpen = false;

        let isImageDragging = false;
        let startXImage = 0;
        let currentXImage = 0;

        function showIoLbGallery() {
            ioLbGalleryImage.src = galleryItems[currentIndex].querySelector('img').src;
            ioLbGallery.style.display = 'block';
            isLightboxOpen = true;
            document.body.style.overflow = 'hidden';
            // Check screen size
            if (window.innerWidth > 1200) {
                document.body.style.paddingRight = 'var(--io-size-075)';
            }
        }

        function hideIoLbGallery() {
            ioLbGallery.style.display = 'none';
            isLightboxOpen = false;
            document.body.style.overflow = 'auto';
            document.body.style.paddingRight = '';
        }

        function showPrevImage() {
            currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
            // ioLbGalleryImage.style.opacity = '0';
            setTimeout(function() {
                ioLbGalleryImage.src = galleryItems[currentIndex].querySelector('img').src;
                // ioLbGalleryImage.style.opacity = '1';
            }, 0);
        }

        function showNextImage() {
            currentIndex = (currentIndex + 1) % galleryItems.length;
            // ioLbGalleryImage.style.opacity = '0';
            setTimeout(function() {
                ioLbGalleryImage.src = galleryItems[currentIndex].querySelector('img').src;
                // ioLbGalleryImage.style.opacity = '1';
            }, 0);
        }

        galleryItems.forEach((item, index) => {
            item.addEventListener('click', function() {
                currentIndex = index;
                showIoLbGallery();
            });
        });

        ioLbGalleryClose.addEventListener('click', hideIoLbGallery);
        ioLbGalleryPrev.addEventListener('click', showPrevImage);
        ioLbGalleryNext.addEventListener('click', showNextImage);

        ioLbGallery.addEventListener('click', function(event) {
            if (event.target === ioLbGallery) {
                hideIoLbGallery();
            }
        });

        function handleImageDragStart(event) {
            isImageDragging = true;
            startXImage = event.clientX || event.touches[0].clientX;
            currentXImage = startXImage;
        }

        function handleImageDragMove(event) {
            if (!isImageDragging) return;
            currentXImage = event.clientX || event.touches[0].clientX;
            const deltaX = currentXImage - startXImage;
            if (deltaX > 50) {
                showPrevImage();
                isImageDragging = false;
            } else if (deltaX < -50) {
                showNextImage();
                isImageDragging = false;
            }
        }

        function handleImageDragEnd(event) {
            isImageDragging = false;
        }

        ioLbGalleryImage.addEventListener('mousedown', handleImageDragStart);
        ioLbGalleryImage.addEventListener('touchstart', handleImageDragStart);

        ioLbGalleryImage.addEventListener('mousemove', handleImageDragMove);
        ioLbGalleryImage.addEventListener('touchmove', handleImageDragMove);

        ioLbGalleryImage.addEventListener('mouseup', handleImageDragEnd);
        ioLbGalleryImage.addEventListener('touchend', handleImageDragEnd);
    });

</script>

<!-- Link to anchor -->
<script>
    function smoothScroll(event) {
        event.preventDefault();

        const targetId = this.getAttribute("href");
        const targetElement = document.querySelector(targetId);
        if (!targetElement) return;

        const offset = parseInt(this.getAttribute("data-scroll-offset")) || 0;
        const targetPosition = targetElement.getBoundingClientRect().top;
        const startPosition = window.pageYOffset;
        const distance = targetPosition - offset;
        const duration = 1000;
        let start = null;

        function step(timestamp) {
            if (!start) start = timestamp;
            const progress = timestamp - start;
            window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
            if (progress < duration) {
                window.requestAnimationFrame(step);
            }
        }

        window.requestAnimationFrame(step);
    }

    function isTablet() {
        return window.innerWidth < 992 && window.innerWidth >= 576;
    }

    function isSmartphone() {
        return window.innerWidth < 576;
    }

    function easeInOutCubic(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t * t + b;
        t -= 2;
        return c / 2 * (t * t * t + 2) + b;
    }

    const anchorLinks = document.querySelectorAll("a[href^='#']");
    anchorLinks.forEach(link => link.addEventListener("click", function(event) {
        const isTabletDevice = isTablet();
        const isSmartphoneDevice = isSmartphone();

        if (isTabletDevice || isSmartphoneDevice) {
            const targetId = this.getAttribute("href");
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const offset = isTabletDevice
                    ? parseInt(this.getAttribute("data-tablet-scroll-offset")) || 0
                    : parseInt(this.getAttribute("data-mobile-scroll-offset")) || 0;
                const targetPosition = targetElement.getBoundingClientRect().top;
                const startPosition = window.pageYOffset;
                const distance = targetPosition - offset;
                const duration = 1000;
                let start = null;

                function step(timestamp) {
                    if (!start) start = timestamp;
                    const progress = timestamp - start;
                    window.scrollTo(0, easeInOutCubic(progress, startPosition, distance, duration));
                    if (progress < duration) {
                        window.requestAnimationFrame(step);
                    }
                }

                window.requestAnimationFrame(step);
            }
        } else {
            smoothScroll.call(this, event);
        }
    }));
</script>

<!-- Переход по табам -->
<script>
    function activateTabSwitch(tabIdSwitch, radioIdSwitch) {
        var tabSwitch = document.querySelector(`#${tabIdSwitch}-tab`);
        tabSwitch.click();

        var radioCourseTypeSwitch = document.getElementById(radioIdSwitch);
        radioCourseTypeSwitch.checked = true;

        handleRadioChange();
    }

    document.querySelectorAll('.io-button__tab-switch').forEach(function(button) {
        button.addEventListener('click', function() {
            activateTabSwitch(button.dataset.tabIdSwitch, button.dataset.radioIdSwitch);
        });
    });

</script>


<!-- <script>
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

</script> -->

<!-- Video after Image -->
<!-- <script>
    function showVideo(button) {
        var videoId = button.getAttribute("data-video-id");
        if (videoId) {
            var videoContainer = button.parentNode;
            videoContainer.innerHTML = `<iframe src="https://www.youtube.com/embed/${videoId}?autoplay=1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>`;
        }
    }
</script> -->

<!-- Url for tabs -->
<script defer>
    document.addEventListener('DOMContentLoaded', function() {
        const tabContainer = document.getElementById('nav-tab');
        if (tabContainer) {
            const tabButtons = tabContainer.querySelectorAll('.nav-link');
            let isOtherTabClicked = false;

            tabButtons.forEach((button, index) => {
                button.addEventListener('click', function() {
                    const tabUrl = this.getAttribute('data-bs-target');

                    if (index === 0 && isOtherTabClicked) {
                        window.history.replaceState(null, null, window.location.origin + window.location.pathname);
                    } else {
                        const urlWithTab = window.location.origin + window.location.pathname + tabUrl;
                        window.history.replaceState(null, null, urlWithTab);
                    }

                    if (index !== 0) {
                        isOtherTabClicked = true;
                    }
                });
            });

            const currentUrl = window.location.href;
            const tabUrls = Array.from(tabButtons).map(button => button.getAttribute('data-bs-target'));
            const matchedTab = tabUrls.find(tabUrl => currentUrl.endsWith(tabUrl));

            if (matchedTab) {
                const matchedTabButton = document.querySelector(`[data-bs-target="${matchedTab}"]`);
                if (matchedTabButton) {
                    isOtherTabClicked = true;
                    matchedTabButton.click();
                }
            }
        }
    });
</script>

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
    document.addEventListener("DOMContentLoaded", () => {
        const tabs = document.querySelectorAll(".io-tabs-wrapper .nav-link");
        const ioSidebarSticky = document.querySelector(".io-sidebar__sticky");
        const ioSidebar = document.querySelector(".io-sidebar");

        function handleTabClick(tab) {
            const tabId = tab.id.replace("-tab", "");
            ioSidebarSticky.style.display = (["<?php echo $ioTab6; ?>", "<?php echo $ioTab10; ?>", "<?php echo $ioTab9; ?>"].includes(tabId)) ? "none" : "";
            ioSidebar.style.gridTemplateColumns = (["<?php echo $ioTab6; ?>", "<?php echo $ioTab10; ?>", "<?php echo $ioTab9; ?>"].includes(tabId)) ? "1fr" : "";

            tabs.forEach(t => t.classList.remove("active"));
            tab.classList.add("active");
        }

        tabs.forEach(tab => tab.addEventListener("click", () => handleTabClick(tab)));

        // Проверка якоря в URL при загрузке страницы
        const currentTab = window.location.hash.substring(1);
        const currentTabElement = document.getElementById(`${currentTab}-tab`);

        if (currentTabElement) {
            handleTabClick(currentTabElement);
        }
    });
</script>

<!-- Block Show animation -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const galereyaTab = document.getElementById("<?php echo $ioTab10; ?>-tab");
        const galleryItems = document.querySelectorAll('.io-gallery__item');

        function addShowClassToGallery() {
            galleryItems.forEach(item => item.classList.add('show'));
        }

        function checkHashAndShowGallery() {
            if (window.location.hash === `#${<?php echo $ioTab10; ?>}`) {
                addShowClassToGallery();
            }
        }

        // Проверяем хеш при загрузке страницы
        checkHashAndShowGallery();

        // Добавляем обработчик клика на вкладку
        galereyaTab.addEventListener("click", addShowClassToGallery);
    });
</script>

<!-- Отложенная загрузка табов -->
<script>
    // document.getElementById('<?php echo $ioTab2; ?>-tab').addEventListener('click', function() {
    //     var tabContent = <?php echo json_encode($contentTab2); ?>;
    //     document.getElementById('<?php echo $ioTab2; ?>').innerHTML = tabContent;
    // });

    document.getElementById('<?php echo $ioTab3; ?>-tab').addEventListener('click', function() {
        var tabContent = <?php echo json_encode($contentTab3); ?>;
        document.getElementById('<?php echo $ioTab3; ?>').innerHTML = tabContent;
    });

    // document.getElementById('<?php echo $ioTab4; ?>-tab').addEventListener('click', function() {
    //     var tabContent = <?php echo json_encode($contentTab4); ?>;
    //     document.getElementById('<?php echo $ioTab4; ?>').innerHTML = tabContent;
    // });

    document.getElementById('<?php echo $ioTab5; ?>-tab').addEventListener('click', function() {
        var tabContent = <?php echo json_encode($contentTab5); ?>;
        document.getElementById('<?php echo $ioTab5; ?>').innerHTML = tabContent;
    });

    // document.getElementById('<?php echo $ioTab6; ?>-tab').addEventListener('click', function() {
    //     var tabContent = <?php echo json_encode($contentTab6); ?>;
    //     document.getElementById('<?php echo $ioTab6; ?>').innerHTML = tabContent;
    // });

    document.getElementById('<?php echo $ioTab7; ?>-tab').addEventListener('click', function() {
        var tabContent = <?php echo json_encode($contentTab7); ?>;
        document.getElementById('<?php echo $ioTab7; ?>').innerHTML = tabContent;
    });

    // document.getElementById('<?php echo $ioTab8; ?>-tab').addEventListener('click', function() {
    //     var tabContent = <?php echo json_encode($contentTab8); ?>;
    //     document.getElementById('<?php echo $ioTab8; ?>').innerHTML = tabContent;
    // });

    document.getElementById('<?php echo $ioTab9; ?>-tab').addEventListener('click', function() {
        var tabContent = <?php echo json_encode($contentTab9); ?>;
        document.getElementById('<?php echo $ioTab9; ?>').innerHTML = tabContent;
    });

    // document.getElementById('<?php echo $ioTab10; ?>-tab').addEventListener('click', function() {
    //     var tabContent = <?php echo json_encode($contentTab10); ?>;
    //     document.getElementById('<?php echo $ioTab10; ?>').innerHTML = tabContent;
    // });

</script>



<!-- Выравнивание табов -->
<script>
    // Функция для выравнивания активной кнопки по середине блока
    function alignActiveTabCentered() {
        // Получаем текущую ширину экрана
        var screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

        // Проверяем, если ширина экрана менее 1200px
        if (screenWidth < 1200) {
            // Получаем элемент с классом 'nav-link' и 'active' внутри блока с id 'nav-tab'
            var navTabCentered = document.getElementById('nav-tab');
            var activeTabCentered = navTabCentered.querySelector('.nav-link.active');

            // Проверяем, что элемент найден
            if (activeTabCentered) {
                // Вычисляем ширину видимой части блока
                var visibleWidthCentered = navTabCentered.offsetWidth;

                // Вычисляем новый отступ для центрирования активной кнопки
                var newScrollLeftCentered = activeTabCentered.offsetLeft - (visibleWidthCentered / 2) + (activeTabCentered.offsetWidth / 2);

                // Прокручиваем блок для выравнивания активной кнопки по середине
                navTabCentered.scrollLeft = newScrollLeftCentered;
            }
        }
    }

    // Вызываем функцию при загрузке страницы и изменении размера окна
    window.onload = alignActiveTabCentered;
    window.onresize = alignActiveTabCentered;

    // Добавляем обработчик события для переключения класса 'active'
    var tabsContainerCentered = document.getElementById('nav-tab');
    var tabsCentered = tabsContainerCentered.querySelectorAll('.nav-link');

    tabsCentered.forEach(function(tabCentered) {
        tabCentered.addEventListener('click', function() {
            // Удаляем класс 'active' у всех табов
            tabsCentered.forEach(function(t) {
                t.classList.remove('active');
            });

            // Добавляем класс 'active' к текущему табу
            tabCentered.classList.add('active');

            // Пересчитываем выравнивание активной кнопки
            alignActiveTabCentered();
        });
    });

</script>

<!-- К якорю на мобилке -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var accordionCollapseTenCheck = document.getElementById('courseAccordion-collapseTen');

        if (accordionCollapseTenCheck) {
            accordionCollapseTenCheck.addEventListener('click', function(event) {
                // Находим элемент с классом io-show-button и скрываем его
                var showButton = accordionCollapseTenCheck.querySelector('.io-show-button');

                if (showButton) {
                    showButton.style.display = 'none';
                }

                // Находим элемент с классом io-hidden и устанавливаем ему высоту auto
                var hiddenBlock = accordionCollapseTenCheck.querySelector('.io-hidden');

                if (hiddenBlock) {
                    hiddenBlock.style.height = 'auto';
                }
            });
        }
    });

</script>

<!-- Нижний сайдбар -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var ioFullSection = document.getElementById("ioFullSection");
        var ioDemoWrapperAll = document.querySelector(".io-demo-wrapper-all");
        var ioPassportMobile = document.querySelector(".io-course-passport-mobile");

        function updatePosition() {
            var ioFullSectionRect = ioFullSection.getBoundingClientRect();
            var ioPassportMobileRect = ioPassportMobile.getBoundingClientRect();
            var isVisible = ioFullSectionRect.bottom > 0 && ioFullSectionRect.top < window.innerHeight;
            var isVisibleMobile = ioPassportMobileRect.bottom > 50;
            var isAtBottom = (window.innerHeight + window.scrollY) >= (document.body.offsetHeight - 50);
            var footer = document.querySelector('footer');
            var isAtBottomMobile = (footer.getBoundingClientRect().top <= 0 && footer.getBoundingClientRect().bottom >= 0);
            var ioTopButton = document.querySelector(".io-top-button");

            if (window.innerWidth >= 1200) {
                if (window.location.href.indexOf('ceny-i-oplata') !== -1) {
                    ioDemoWrapperAll.classList.add('d-none');
                    if (isVisible || isAtBottom) {
                        ioDemoWrapperAll.style.bottom = "-120px";
                        ioTopButton.style.bottom = "";
                    } else {
                        ioDemoWrapperAll.style.bottom = "0px";
                        ioTopButton.style.bottom = "var(--io-size-500)";
                    }
                } else if ((window.location.href.indexOf('<?php echo $ioTab9; ?>') !== -1) || (window.location.href.indexOf('<?php echo $ioTab10; ?>') !== -1)) {
                    ioDemoWrapperAll.classList.add('d-none');
                } else {
                    ioDemoWrapperAll.classList.remove('d-none');
                    if (isVisible || isAtBottom) {
                        ioDemoWrapperAll.style.bottom = "-120px";
                        ioTopButton.style.bottom = "";
                    } else {
                        ioDemoWrapperAll.style.bottom = "0px";
                        ioTopButton.style.bottom = "var(--io-size-500)";
                    }
                }
            } else {
                if (window.location.href.indexOf('ceny-i-oplata') !== -1) {
                    ioDemoWrapperAll.classList.add('d-none');
                    if (isVisible || isAtBottom) {
                        ioDemoWrapperAll.style.bottom = "-120px";
                        ioTopButton.style.bottom = "";
                    } else {
                        ioDemoWrapperAll.style.bottom = "0px";
                        ioTopButton.style.bottom = "var(--io-size-500)";
                    }
                } else if ((window.location.href.indexOf('<?php echo $ioTab9; ?>') !== -1) || (window.location.href.indexOf('<?php echo $ioTab10; ?>') !== -1)) {
                    ioDemoWrapperAll.classList.add('d-none');
                } else if ((window.location.href.indexOf('<?php echo $ioTab2; ?>') !== -1) || (window.location.href.indexOf('<?php echo $ioTab3; ?>') !== -1) || (window.location.href.indexOf('<?php echo $ioTab4; ?>') !== -1) || (window.location.href.indexOf('<?php echo $ioTab5; ?>') !== -1) || (window.location.href.indexOf('<?php echo $ioTab7; ?>') !== -1) || (window.location.href.indexOf('<?php echo $ioTab8; ?>') !== -1)) {
                    ioDemoWrapperAll.classList.remove('d-none');
                    if (isAtBottom) {
                        ioDemoWrapperAll.style.bottom = "-120px";
                        ioTopButton.style.bottom = "";
                    } else {
                        if (window.pageYOffset > 50) {
                            ioDemoWrapperAll.style.bottom = "0px";
                            ioTopButton.style.bottom = "var(--io-size-500)";
                        } else {
                            ioDemoWrapperAll.style.bottom = "-120px";
                            ioTopButton.style.bottom = "";
                        }
                    }
                } else {
                    if (window.innerWidth >= 576) {
                        ioDemoWrapperAll.classList.remove('d-none');
                        if (isVisible || isAtBottom) {
                            ioDemoWrapperAll.style.bottom = "-120px";
                            ioTopButton.style.bottom = "";
                        } else {
                            ioDemoWrapperAll.style.bottom = "0px";
                            ioTopButton.style.bottom = "var(--io-size-500)";
                        }
                    } else {
                        ioDemoWrapperAll.classList.remove('d-none');
                        if (isVisibleMobile || isAtBottomMobile) {
                            ioDemoWrapperAll.style.bottom = "-120px";
                            ioTopButton.style.bottom = "";
                        } else {
                            ioDemoWrapperAll.style.bottom = "0px";
                            ioTopButton.style.bottom = "var(--io-size-500)";
                        }
                    }
                }
            }
        }

        // Вызываем функцию при загрузке страницы и при скролле
        window.addEventListener("scroll", updatePosition);
        window.addEventListener("resize", updatePosition);
        updatePosition(); // Вызовем функцию сразу, чтобы установить начальное значение
    });

</script>
<!-- Нижний сайдбар в конце страницы -->
<!-- <script>
    // Находим элемент с классом "io-demo-inner-all"
    var ioDemoInnerAll = document.querySelector('.io-demo-inner-all');

    // Функция, которая будет вызываться при долистывании до низа страницы
    function handleScroll() {
        // Проверяем, достигли ли мы конца страницы
        if (window.innerHeight + window.scrollY >= document.body.offsetHeight) {
            // Добавляем класс "bottom" к элементу
            ioDemoInnerAll.classList.add('bottom');
        } else {
            // Убираем класс "bottom" у элемента
            ioDemoInnerAll.classList.remove('bottom');
        }
    }

    // Назначаем функцию handleScroll на событие прокрутки страницы
    window.addEventListener('scroll', handleScroll);
</script> -->


