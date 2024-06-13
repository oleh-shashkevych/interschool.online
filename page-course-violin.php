<?php
/**
 * Курс Скрипка
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Курс Скрипка
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
        position: -webkit-sticky;
        position: sticky;
        top: 0;
        -webkit-transition: var(--io-transition);
        -o-transition: var(--io-transition);
        transition: var(--io-transition);
        padding-bottom: 0;
        height: 74px;
    }

    .io-breadcrumbs__wrapper {
        display: none;
    }

    /* body {
        opacity: 1;
    } */

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
            -webkit-transition: var(--io-transition);
            -o-transition: var(--io-transition);
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
                <h2 class="io-heading-2 io-course-lectors__heading">Преподаватели скрипки</h2>
                <div class="io-course-lectors__text-wrapper io-text-wrapper">
                    <div class="io-check io-check--start">
                        <span>Каждый преподаватель скрипки в Монтессори центре обладает высшим образованием по специальности “Скрипка”.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>Наши учителя скрипки обучают не только классическому репертуару, но и современным композициям, уделяя внимание разнообразию музыкальных стилей.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>Педагоги имеют большой опыт преподавания онлайн уроков скрипки как детям, так и взрослым, подходя к образовательному процессу каждого студента с индивидуальной заботой и вниманием.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>Преподаватели скрипки в нашей школе - действующие музыканты. Они регулярно участвуют в музыкальных конкурсах и выступлениях, являются артистами оркестров и ансамблей, что позволяет им не только делиться собственным исполнительским опытом, но и постоянно развивать свои профессиональные навыки.</span>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/t-rusanova.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/t-rusanova.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Диана Русанова</h3>
                            <p class="io-course-lectors__item-header-text-work">Педагог скрипки</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Диана Русанова - педагог скрипки в Монтессори центре. Окончила Херсонский государственный университет по специальности "Музыкальное искусство". Диана является артисткой Государственного академического эстрадно-симфонического оркестра Украины, а также приглашенной артисткой других престижных оркестров и коллективов.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Читать далее
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden"> 
                            <p>Диана преподает уроки скрипки онлайн для детей и взрослых, уроки ведет на английском, русском или украинском языке. У Дианы учатся дети даже в 5 лет и делают прекрасные результаты. Педагог применяет на своих уроках элементы лучших методик мира - Сузуки, Орфа, Монтессори. У Дианы профессионально составлен педагогический репертуар, она чутко контролирует уровень сложности программы для каждого своего студента. </p>
                            <p>Ученики Дианы достигают высоких результатов на онлайн уроках скрипки в том числе и потому, что их педагог является прекрасной исполнительницей и на своем примере показывает цель и демонстрирует эталонное звучание каждого произведения, вдохновляя ученика к совершенствованию своего исполнения.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/t-gerber.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/t-gerber.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Светлана Гербер</h3>
                            <p class="io-course-lectors__item-header-text-work">Педагог скрипки</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Светлана Гербер - педагог скрипки в Монтессори центре. Светлана окончила Харьковский государственный университет искусств им. И.П.Котляревского и получила полное высшее образование по специальности "Музыкальное искусство", получила квалификацию артиста оркестра, артиста камерного ансамбля, преподавателя (скрипка).</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Читать далее
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>С 2022 года совмещает работу в Национальной радиокомпании Украины на должности артиста оркестра и в нашей школе на должности преподавателя скрипки.</p>
                            <p>В классе Светланы учатся и дети, и взрослые. Каждый ее ученик знает - это лучший педагог: чуткая, внимательная и профессиональная, всегда поддержит и вдохновит!</p>
                            <p>На уроках скрипки в Монтессори центре вы не только сами научитесь играть, но и услышите мировые шедевры скрипичной музыки в исполнении педагога.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/t-klymuk.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/t-klymuk.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Надежда Клымюк</h3>
                            <p class="io-course-lectors__item-header-text-work">Педагог скрипки</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Надежда Клымюк - педагог скрипки в Монтессори центре. Надежда окончила Национальную музыкальную академию Украины им. П. И. Чайковского по классу скрипки и получила профессиональную квалификацию артист-солист-инструменталист, артист оркестра, артист ансамбля, педагог (специализация скрипка).</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Читать далее
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Надежда ведет активную исполнительскую деятельность, принимает участие в концертах, выступает на гастролях в странах Европы, является артисткой оркестров и ансамблей. </p>
                            <p>В классе Надежды учатся дети и взрослые, каждый из них увлечен процессом и вдохновляется музыкальными шедеврами для скрипки в исполнении своего преподавателя. На уроках скрипки онлайн Надежда использует методики известных скрипачей, методики для маленьких учеников до 6 лет, а также европейские и американские методики. Академическое высшее образование Надежды Клымюк позволяет ей анализировать и синтезировать лучшие мировые методики, что делает процесс успешным и интересным для каждого ученика!</p>
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
                                <div class="io-feedback__item-fio">А</div>
                                <h3 class="io-feedback__item-name">Анна </h3>
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
                            <p>Отличные уроки скрипки в Монтессори центре! Преподаватели очень терпеливы и знают, как мотивировать учеников. Рекомендую!</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">ДИ</div>
                                <h3 class="io-feedback__item-name">Дмитрий И.
                                </h3>
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
                            <p>Хотелось бы поделиться своим восторгом от уроков скрипки в Монтессори центре! Я начал заниматься музыкой в зрелом возрасте, и мне очень важно было найти опытного и терпеливого преподавателя. В Монтессори центре я нашел именно то, что искал. Профессиональные преподаватели не только помогают мне развивать технические навыки игры на скрипке, но и вдохновляют на творчество и самовыражение. Уроки онлайн позволяют мне заниматься в удобное для меня время, а гибкость в расписании – это просто невероятно удобно. Я видел, как мой навык игры на скрипке растет с каждым уроком, и это мотивирует меня продолжать обучение. Спасибо вам за вашу работу и за то, что делаете музыку такой доступной даже для взрослых!
                            </p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">NH</div>
                                <h3 class="io-feedback__item-name">Noah Harris</h3>
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
                            <p>Montessori Center\'s online violin lessons have been a game-changer for me. The instructors are experienced professionals who provide personalized feedback and support. The online platform is easy to navigate, and I appreciate the flexibility it offers. I\'ve made considerable progress since starting my lessons and couldn\'t be happier with my experience.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">MP</div>
                                <h3 class="io-feedback__item-name">Mia Perez</h3>
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
                            <p>Montessori Center\'s online violin lessons are fantastic! The instructors are knowledgeable and supportive, and I\'m seeing improvement every week.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">LG</div>
                                <h3 class="io-feedback__item-name">Lucía Gómez</h3>
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
                            <p>Las clases de violín en línea en el Centro Montessori son una experiencia educativa excepcional. Los instructores son increíblemente talentosos y están dedicados a ayudar a cada estudiante a alcanzar su máximo potencial. Además, el ambiente de apoyo y camaradería entre los estudiantes crea un entorno de aprendizaje enriquecedor. Estoy agradecida por la oportunidad de formar parte de esta comunidad musical y espero seguir creciendo como violinista con su orientación experta.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">МС</div>
                                <h3 class="io-feedback__item-name">Михаил С.</h3>
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
                            <p>Мы с женой очень довольны уроками скрипки для нашего сына в Монтессори центре. Преподаватели здесь – это настоящие профессионалы, которые умеют заинтересовать детей музыкой и помочь им развить свой талант. Уроки онлайн организованы очень удобно, и это позволяет нам заниматься, не выходя из дома. Мы видим, как наш сын развивается с каждым занятием, и это нас очень радует. Спасибо за ваш труд и за возможность делиться музыкой с детьми!/p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">ОС</div>
                                <h3 class="io-feedback__item-name">Ольга Смирнова</h3>
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
                            <p>Моя дочь счастлива посещать уроки скрипки в Монтессори центре. Уроки онлайн очень удобны, а преподаватели замечательные.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">ВИ</div>
                                <h3 class="io-feedback__item-name">Владислав Иванов</h3>
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
                            <p>Очень доволен уроками скрипки в Монтессори центре. Профессиональные преподаватели и интересная программа обучения.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">ET</div>
                                <h3 class="io-feedback__item-name">Emma Thompson</h3>
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
                            <p>I\'ve been taking online violin lessons with Montessori Center for a few months now, and I\'ve been incredibly impressed with the quality of instruction. The instructors are knowledgeable, patient, and supportive, and the curriculum is comprehensive and engaging. Whether you\'re a beginner or an experienced player, Montessori Center has something to offer. Thanks to their guidance, I\'ve made significant progress in my playing and have developed a deeper appreciation for music. I highly recommend Montessori Center to anyone looking to learn the violin."</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">OD</div>
                                <h3 class="io-feedback__item-name">Olivia Davis</h3>
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
                            <p>I\'m so glad I found Montessori Center\'s online violin lessons. The instructors are patient and knowledgeable, and I\'ve learned a lot in a short time.</p>
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
                                
                                <source srcset="/wp-content/themes/interschooltemplate/images/Violin-01.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Violin-01.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Настройка успеха: как подготовиться к онлайн урокам скрипки</h3>
                            <p class="io-blog__content-text">В эпоху цифровых технологий уроки скрипки онлайн становятся все более популярными среди студентов всех возрастов. Благодаря доступности и гибкости, музыкальные школы...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                
                                <source srcset="/wp-content/themes/interschooltemplate/images/Violin-02.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Violin-02.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Смычковые секреты: улучшение техники игры</h3>
                            <p class="io-blog__content-text">Освоение игры на скрипке требует развития множества навыков, но особенно важно совершенствование техники смычка. Смычок – это душа скрипки, превращающая...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                
                                <source srcset="/wp-content/themes/interschooltemplate/images/Violin-03.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Violin-03.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">От нот до выступлений: стратегия эффективных занятий</h3>
                            <p class="io-blog__content-text">Мастерство игры на скрипке через онлайн-уроки открывает новое измерение в музыкальном образовании, позволяя ученикам двигаться от освоения нот до...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                
                                <source srcset="/wp-content/themes/interschooltemplate/images/Violin-04.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Violin-04.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Понимание музыкальных терминов</h3>
                            <p class="io-blog__content-text">Освоение любого музыкального инструмента, включая скрипку, начинается не только с практических навыков, но и с глубокого понимания музыкальной теории и...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                
                                <source srcset="/wp-content/themes/interschooltemplate/images/Violin-05.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Violin-05.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Постановка целей и достижение успеха в игре на скрипке</h3>
                            <p class="io-blog__content-text">Игра на скрипке – это не только удивительное искусство, требующее терпения и усидчивости, но и замечательный способ достижения личного роста и самовыражения...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                
                                <source srcset="/wp-content/themes/interschooltemplate/images/Violin-06.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Violin-06.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Как музыкальные произведения формируют мастерство</h3>
                            <p class="io-blog__content-text">Мастерство игры на музыкальных инструментах, таких как скрипка, не приходит мгновенно. Это результат длительного и целенаправленного обучения, где важную...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                
                                <source srcset="/wp-content/themes/interschooltemplate/images/Violin-07.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Violin-07.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Скрипичные технологии: использование приложений и программ для обучения</h3>
                            <p class="io-blog__content-text">В современном мире технологии тесно переплетаются с образованием, открывая новые горизонты в изучении музыки. Особенно это касается инструментов, требующих...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                
                                <source srcset="/wp-content/themes/interschooltemplate/images/Violin-08.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Violin-08.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Смычковые сюжеты: интересные факты о скрипке</h3>
                            <p class="io-blog__content-text">Скрипка – один из самых волшебных и загадочных музыкальных инструментов, история которого насчитывает сотни лет. Сегодня, благодаря урокам скрипки онлайн в...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                
                                <source srcset="/wp-content/themes/interschooltemplate/images/Violin-09.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Violin-09.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Скрипичный репертуар для начинающих: лучшие произведения для старта</h3>
                            <p class="io-blog__content-text">Выбор репертуара для начинающих скрипачей играет ключевую роль в мотивации и развитии музыкальных навыков. Онлайн уроки скрипки предлагают уникальную...</p>
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
                <h2 class="io-heading-2 io-course-lectors__heading">Violin Teachers</h2>
                <div class="io-course-lectors__text-wrapper io-text-wrapper">
                    <div class="io-check io-check--start">
                        <span>Every violin teacher at the Montessori Center possesses a higher education degree in violin.</span>
                    </div>

                    <div class="io-check io-check--start">
                        <span>Our violin teachers instruct not only in classical repertoire but also in contemporary compositions, focusing on a variety of musical styles.</span>
                    </div>

                    <div class="io-check io-check--start">
                        <span>The educators have extensive experience in teaching violin lessons online to both children and adults, approaching the educational process of each student with individual care and attention.</span>
                    </div>

                    <div class="io-check io-check--start">
                        <span>The violin teachers at our school are active musicians. They regularly participate in musical competitions and performances, and are members of orchestras and ensembles. This allows them not only to share their own performance experience but also to continuously develop their professional skills.</span>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/t-rusanova.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/t-rusanova.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Diana Rusanova</h3>
                            <p class="io-course-lectors__item-header-text-work">Педагог скрипки</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Diana Rusanova is a violin teacher at the Montessori Center. She graduated from the Kherson State University with a degree in "Musical Art". Diana is a performer of the State Academic Variety Symphony Orchestra of Ukraine and is also an invited artist of other prestigious orchestras and ensembles.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Read more
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden"> 
                            <p>Diana teaches online violin lessons for children and adults, conducting lessons in English, Russian, or Ukrainian. Diana\'s students are as young as 5 years old and achieve wonderful results. The teacher applies elements of the best world methods - Suzuki, Orff, Montessori - in her lessons. Diana has a professionally compiled pedagogical repertoire, she sensitively controls the level of complexity of the program for each of her students.</p>
                            <p>Diana\'s students achieve high results in online violin lessons, even because their teacher is an excellent performer and, by her own example, shows the goal and demonstrates the benchmark sound of each piece, inspiring the student to improve his performance.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/t-gerber.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/t-gerber.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Svetlana Gerber</h3>
                            <p class="io-course-lectors__item-header-text-work">Violin teacher</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Svetlana Gerber is a violin teacher at the Montessori Center. She graduated from the Kharkiv State University of Arts named after I.P. Kotlyarevsky, obtaining a full higher education in "Musical Art" with qualifications as an orchestra artist, chamber ensemble artist, and teacher (violin).</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Read more
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Since 2022, she has been combining her role as an orchestra artist at the National Radio Company of Ukraine with her position as a violin teacher at our school.</p>
                            <p>Svetlana teaches both children and adults. Each of her students knows she is the best teacher: sensitive, attentive, and professional, always ready to support and inspire!</p>
                            <p>In violin lessons at the Montessori Center, you will not only learn to play yourself but also experience the world masterpieces of violin music performed by the teacher.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/t-klymuk.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/t-klymuk.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Nadiia Klymiuk</h3>
                            <p class="io-course-lectors__item-header-text-work">Violin Teacher</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Nadiia Klymiuk - violin teacher at the Montessori Center. Nadezhda graduated from the National Music Academy of Ukraine named after P. I. Tchaikovsky with a degree in violin and obtained professional qualifications as a soloist-instrumentalist, orchestra artist, ensemble artist, and educator (specializing in violin).</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Read more
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Nadezhda leads an active performing career, participates in concerts, tours in European countries, and is a performer in orchestras and ensembles.</p>
                            <p>In Nadezhda\'s class, both children and adults study, each of them passionate about the process and inspired by violin masterpieces performed by their teacher. In her online violin lessons, Nadezhda employs techniques from renowned violinists, methods for young learners up to 6 years old, as well as European and American methodologies. Nadezhda Klymyuk\'s academic higher education allows her to analyze and synthesize the best global methodologies, making the learning process successful and interesting for every student!</p>
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
                                <div class="io-feedback__item-fio">А</div>
                                <h3 class="io-feedback__item-name">Анна </h3>
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
                            <p>Отличные уроки скрипки в Монтессори центре! Преподаватели очень терпеливы и знают, как мотивировать учеников. Рекомендую!</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">ДИ</div>
                                <h3 class="io-feedback__item-name">Дмитрий И.
                                </h3>
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
                            <p>Хотелось бы поделиться своим восторгом от уроков скрипки в Монтессори центре! Я начал заниматься музыкой в зрелом возрасте, и мне очень важно было найти опытного и терпеливого преподавателя. В Монтессори центре я нашел именно то, что искал. Профессиональные преподаватели не только помогают мне развивать технические навыки игры на скрипке, но и вдохновляют на творчество и самовыражение. Уроки онлайн позволяют мне заниматься в удобное для меня время, а гибкость в расписании – это просто невероятно удобно. Я видел, как мой навык игры на скрипке растет с каждым уроком, и это мотивирует меня продолжать обучение. Спасибо вам за вашу работу и за то, что делаете музыку такой доступной даже для взрослых!
                            </p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">NH</div>
                                <h3 class="io-feedback__item-name">Noah Harris</h3>
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
                            <p>Montessori Center\'s online violin lessons have been a game-changer for me. The instructors are experienced professionals who provide personalized feedback and support. The online platform is easy to navigate, and I appreciate the flexibility it offers. I\'ve made considerable progress since starting my lessons and couldn\'t be happier with my experience.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">MP</div>
                                <h3 class="io-feedback__item-name">Mia Perez</h3>
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
                            <p>Montessori Center\'s online violin lessons are fantastic! The instructors are knowledgeable and supportive, and I\'m seeing improvement every week.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">LG</div>
                                <h3 class="io-feedback__item-name">Lucía Gómez</h3>
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
                            <p>Las clases de violín en línea en el Centro Montessori son una experiencia educativa excepcional. Los instructores son increíblemente talentosos y están dedicados a ayudar a cada estudiante a alcanzar su máximo potencial. Además, el ambiente de apoyo y camaradería entre los estudiantes crea un entorno de aprendizaje enriquecedor. Estoy agradecida por la oportunidad de formar parte de esta comunidad musical y espero seguir creciendo como violinista con su orientación experta.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">МС</div>
                                <h3 class="io-feedback__item-name">Михаил С.</h3>
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
                            <p>Мы с женой очень довольны уроками скрипки для нашего сына в Монтессори центре. Преподаватели здесь – это настоящие профессионалы, которые умеют заинтересовать детей музыкой и помочь им развить свой талант. Уроки онлайн организованы очень удобно, и это позволяет нам заниматься, не выходя из дома. Мы видим, как наш сын развивается с каждым занятием, и это нас очень радует. Спасибо за ваш труд и за возможность делиться музыкой с детьми!/p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">ОС</div>
                                <h3 class="io-feedback__item-name">Ольга Смирнова</h3>
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
                            <p>Моя дочь счастлива посещать уроки скрипки в Монтессори центре. Уроки онлайн очень удобны, а преподаватели замечательные.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">ВИ</div>
                                <h3 class="io-feedback__item-name">Владислав Иванов</h3>
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
                            <p>Очень доволен уроками скрипки в Монтессори центре. Профессиональные преподаватели и интересная программа обучения.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">ET</div>
                                <h3 class="io-feedback__item-name">Emma Thompson</h3>
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
                            <p>I\'ve been taking online violin lessons with Montessori Center for a few months now, and I\'ve been incredibly impressed with the quality of instruction. The instructors are knowledgeable, patient, and supportive, and the curriculum is comprehensive and engaging. Whether you\'re a beginner or an experienced player, Montessori Center has something to offer. Thanks to their guidance, I\'ve made significant progress in my playing and have developed a deeper appreciation for music. I highly recommend Montessori Center to anyone looking to learn the violin."</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">OD</div>
                                <h3 class="io-feedback__item-name">Olivia Davis</h3>
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
                            <p>I\'m so glad I found Montessori Center\'s online violin lessons. The instructors are patient and knowledgeable, and I\'ve learned a lot in a short time.</p>
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
                                
                                <source srcset="/wp-content/themes/interschooltemplate/images/Violin-01.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Violin-01.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Tuning for Success: How to Prepare for Online Violin Lessons</h3>
                            <p class="io-blog__content-text">In the digital age, online violin lessons are becoming increasingly popular among students of all ages. Thanks to their accessibility and flexibility, online music schools offer a unique...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                
                                <source srcset="/wp-content/themes/interschooltemplate/images/Violin-02.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Violin-02.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Bow Secrets: Improving Your Playing Technique</h3>
                            <p class="io-blog__content-text">Mastering the violin requires the development of numerous skills, but perfecting bow technique is particularly crucial. The bow is the soul of the violin, transforming strings and...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                
                                <source srcset="/wp-content/themes/interschooltemplate/images/Violin-03.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Violin-03.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">From Notes to Performances: Strategies for Effective Lessons</h3>
                            <p class="io-blog__content-text">Mastering the violin through online lessons opens up a new dimension in musical education, allowing students of all ages to progress from reading notes to public performances. Online...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                
                                <source srcset="/wp-content/themes/interschooltemplate/images/Violin-04.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Violin-04.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Understanding Musical Terms</h3>
                            <p class="io-blog__content-text">Mastering any musical instrument, including the violin, starts not only with practical skills but also with a deep understanding of musical theory and terminology. In the world of online...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                
                                <source srcset="/wp-content/themes/interschooltemplate/images/Violin-05.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Violin-05.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Setting Goals and Achieving Success in Violin Playing</h3>
                            <p class="io-blog__content-text">Playing the violin is not only a fascinating art requiring patience and diligence but also a remarkable way to achieve personal growth and self-expression. An important aspect of...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                
                                <source srcset="/wp-content/themes/interschooltemplate/images/Violin-06.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Violin-06.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">How Musical Works Shape Mastery</h3>
                            <p class="io-blog__content-text">Mastering musical instruments, such as the violin, doesn\'t happen overnight. It\'s the result of lengthy, directed learning, where musical compositions play a crucial role. Online violin...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                
                                <source srcset="/wp-content/themes/interschooltemplate/images/Violin-07.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Violin-07.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Violin Technologies: Using Apps and Programs for Learning</h3>
                            <p class="io-blog__content-text">In today\'s world, technology is closely intertwined with education, opening new horizons in music learning. This is especially true for instruments that require high precision and...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                
                                <source srcset="/wp-content/themes/interschooltemplate/images/Violin-08.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Violin-08.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Violin Tales: Fascinating Facts About the Violin</h3>
                            <p class="io-blog__content-text">The violin is one of the most magical and mysterious musical instruments, with a history spanning hundreds of years. Today, thanks to online violin lessons in online music schools...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            
                            <picture>
                                
                                <source srcset="/wp-content/themes/interschooltemplate/images/Violin-09.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Violin-09.jpg" alt="">
                            </picture>
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Violin Repertoire for Beginners: The Best Pieces to Start With</h3>
                            <p class="io-blog__content-text">Choosing the right repertoire for beginner violinists plays a crucial role in motivation and the development of musical skills. Online violin lessons offer a unique opportunity to explore a...</p>
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
                <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab4" id="<?php echo $ioTab4; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab4; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab4; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Программа'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Curriculum'; } ?></button>
                <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab5" id="<?php echo $ioTab5; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab5; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab5; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Расписание'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Schedule'; } ?></button>
                <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab6" id="<?php echo $ioTab6; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab6; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab6; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Цены и оплата'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Prices and Payment'; } ?></button>
                <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab7" id="<?php echo $ioTab7; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab7; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab7; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Отзывы'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Reviews'; } ?></button>
                <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab8" id="<?php echo $ioTab8; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab8; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab8; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'FAQ'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'FAQ'; } ?></button>
                <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab9" id="<?php echo $ioTab9; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab9; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab9; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Полезные статьи'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Useful Articles'; } ?></button>
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
                                <span class="io-course-passport__header-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Курс скрипки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Violin course'; } ?></span>
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
                                    <h1 class="io-heading-1 io-course-hero__heading"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Уроки<br><span class="io-pink-main">Скрипки</span><br>Oнлайн'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Online<br><span class="io-pink-main">Violin</span><br>Lessons'; } ?></h1>
                                    <p class="io-course-hero__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'На курсе скрипки вы научитесь играть великолепные мелодии и с уверенностью выступать на концертах!'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'On our violin course, you\'ll learn to play magnificent melodies and perform with confidence at concerts!'; } ?></p>
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
                                                <span>+195 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'отзывов'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'reviews'; } ?></span>
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
                                            <span class="io-course-passport__header-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Курс скрипки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Violin course'; } ?></span>
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
                                                    освоение техники и методов звукоизвлечения на скрипке, повышение уровня мастерства игры на скрипке.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Нотная грамота</span>
                                                    </div>
                                                    <div class="io-content">
                                                    овладение навыками чтения музыкальных нот, что позволит исполнять произведения на скрипке различной степени сложности.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Мастерство</span>
                                                    </div>
                                                    <div class="io-content">
                                                    развитие способности исполнять на скрипке широкий спектр музыкальных произведений разнообразных жанров.
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
                                                    Методика обучения игре на скрипке представляет собой уникальную программу, разработанную Монтессори центром. На старте курса перед каждым учеником ставятся индивидуальные задачи, которые он будет выполнять в процессе обучения. Ключевая цель - качественное исполнение музыкального произведения на скрипке заданной сложности на публичном мероприятии.
                                                    </div>
                                                    <div class="io-fw-semibold io-fs-20 mt-1 mt-sm-0">
                                                        Преимущества нашей методики
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Ясные цели для каждого ученика.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Продолжительность курса адаптируется под индивидуальный темп достижения целей.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Оценка навыков происходит через выступления на концертах и конкурсах, вместо традиционных экзаменов.</span>
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
                                                            <p><strong>Скрипка нужного размера</strong> понадобится вам для онлайн уроков скрипки.</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-laptop.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>Гаджет с камерой и микрофоном</strong> будут нужны для онлайн уроков скрипки.</p>
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
                                                            <p><strong>Ноты</strong>  мы вам пришлем до урока. Вам нужно будет их распечатать или открыть на экране устройства.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingTwoB">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseTwoB" aria-expanded="false" aria-controls="courseAccordion-collapseTwoB">
                                                Как правильно выбрать скрипку
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseTwoB" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingTwoB" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-check">
                                                        <span><strong class="me-1">Для детей 3-5 лет</strong> подойдет скрипка размером 1/16.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span><strong class="me-1">Для детей 4-5 лет</strong> подойдет скрипка размером 1/10.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span><strong class="me-1">Для детей 4-6 лет</strong> подойдет скрипка размером 1/8.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span><strong class="me-1">Для детей 5-7 лет</strong> подойдет скрипка размером 1/4.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span><strong class="me-1">Для детей 7-9 лет</strong> подойдет скрипка размером 1/2.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span><strong class="me-1">Для детей 9-12 лет</strong> подойдет скрипка размером 3/4.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span><strong class="me-1">Для детей старше 11 лет</strong> подойдет скрипка размером 7/8.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span><strong class="me-1">Для детей старше 11 - 12 лет</strong> и для взрослых подойдет скрипка размером 4/4 (полный размер).</span>
                                                    </div>
                                                    <img class="w-100" src="/wp-content/themes/interschooltemplate/images/Banner_violin.jpg" alt="">
                                                    <div class="io-content">
                                                        <p>Однако, помимо возраста, следует учитывать индивидуальные особенности ребенка, такие как рост и размер рук. Простой способ проверить подходит ли размер скрипки – ребенок должен вытянуть левую руку вперед и попытаться обхватить головку (завиток) скрипки ладонью. Если скрипка подходит, головка скрипки окажется в центре ладони без напряжения.</p>
                                                    </div>
                                                    <div class="io-content">
                                                        <p>Выбор смычка также важен и должен соответствовать размеру скрипки и руки ребенка. Неправильный выбор смычка может привести к дискомфорту и неправильной постановке руки.</p>
                                                    </div>
                                                    <div class="io-content">
                                                        <p>При выборе скрипки важно обратиться за советом к преподавателю и провести примерку в музыкальном магазине, чтобы гарантировать, что инструмент подходит ребенку. Обратите внимание, что иногда возможно использование скрипок промежуточных размеров, например 7/8, для детей или взрослых миниатюрного роста или с особенностями строения руки.</p>
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
                                                    <div class="io-check"><span><strong>Два занятия в неделю</strong> с нашим преподавателем - это ключ к успешному и быстрому освоению скрипки.</span></div>
                                                    <div class="io-check"><span><strong>Регулярные уроки</strong> способствуют глубокому пониманию музыкального репертуара и улучшению навыков игры.</span></div>
                                                    <div class="io-check"><span><strong>Самостоятельная практика дома</strong> обязательна для всех учеников старше 7 лет.</span></div>
                                                    <div class="io-check"><span><strong>Процесс обучения потребует времени,</strong> к этому вам следует подготовиться.</span></div>
                                                    
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
                                                            <p><strong>Закрепление пройденного</strong> на уроках материала требует регулярных домашних занятий.</p>
                                                            <p><strong>Достаточно заниматься самостоятельно по 15-20 минут</strong> каждый день на начальных этапах.</p>
                                                            <p>Такие занятия дома не только помогут вам лучше освоить инструмент, но и <strong>принесут удовольствие от достигнутых результатов</strong>.</p>
                                                            
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
                                                        <div><span>Ваша помощь будет незаменима для подготовки ребенка к урокам: убедитесь, что все необходимое для занятия готово — гаджет и наушники работают, звук проверен, и ссылка на онлайн-урок открыта.</span></div>
                                                    </div>
                                                    <div class="io-heart">
                                                        <div><span>Поддержите ребенка в организации его самостоятельных занятий дома.</span></div>
                                                    </div>
                                                    <div class="io-heart">
                                                        <div><span>Будьте терпеливы и поддерживайте его усилия на пути к музыкальному мастерству.</span></div>
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
                                                                
                                                                <source srcset="/wp-content/themes/interschooltemplate/images/violin-1.jpg" type="image/jpeg">
                                                                <img src="/wp-content/themes/interschooltemplate/images/violin-1.jpg" alt="">
                                                            </picture>
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            
                                                            <picture>
                                                                
                                                                <source srcset="/wp-content/themes/interschooltemplate/images/violin-2.jpg" type="image/jpeg">
                                                                <img src="/wp-content/themes/interschooltemplate/images/violin-2.jpg" alt="">
                                                            </picture>
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            
                                                            <picture>
                                                                
                                                                <source srcset="/wp-content/themes/interschooltemplate/images/violin-3.jpg" type="image/jpeg">
                                                                <img src="/wp-content/themes/interschooltemplate/images/violin-3.jpg" alt="">
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
                                                            <p>Если вы хотите заказать пробный урок скрипки, вам необходимо <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">записаться и оплатить</a> <span class="io-fw-semibold io-pink-main ioArrayToTextElementsDemo">$6</span>.<br>Пробный урок проходит индивидуально и длится <span class="io-fw-semibold">45 минут</span>.</p>
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
                                                        <div class="io-heart"><span>Купленные уроки не имеют срока использования.</span></div>
                                                        <div class="io-heart"><span>Вы можете учиться на любых курсах, используя купленные уроки.</span></div>
                                                        <div class="io-heart"><span>Все члены семьи смогут пользоваться купленными уроками.</span></div>
                                                        <div class="io-heart"><span>Предупреждайте нас об отмене урока минимум за 24 часа, иначе урок будет считаться состоявшимся.</span></div>
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
                                                                <a class="io-link" href="#detailCourseHeading-4" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Уровень “Подготовительный”</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-5" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Уровень “Начальный”</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-6" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Уровень “Средний”</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-7" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Уровень “Продвинутый”</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-8" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Цели курса</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-9" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Польза уроков скрипки</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="io-text-wrapper">
                                                        <h2 id="detailCourseHeading-1">Обзор курса</h2>
                                                        <p>Онлайн-программа обучения игре на скрипке ориентирована как на юных учеников с пятилетнего возраста, так и на взрослых студентов без ограничений по возрасту. В рамках нашего курса скрипки студенты овладеют исполнением произведений классического репертуара, джазовых мелодий и популярных композиций, а также научатся нотной грамоте. Образовательная программа структурирована по уровням сложности: от начального до продвинутого, с отдельным подготовительным уровнем для детей 5-6 лет.</p>
                                                        <p>Каждый урок скрипки, длительностью 45 минут, проводится на индивидуальной основе. Наши преподаватели обладают знаниями русского и английского языков, предоставляя ученикам выбор языка уроков. График занятий подбирается с учетом индивидуальных предпочтений каждого студента, что делает обучение максимально удобным.</p>
                                                        <p>Занятия по скрипке осуществляются через платформы Google Meet и Zoom. Наши педагоги имеют высшее музыкальное образование, обширный опыт преподавания, активно выступают на сцене, являются артистами оркестров.</p>
                                                        <p>Интенсивность занятий определяется индивидуально, однако мы советуем проводить не менее двух уроков в неделю для достижения последовательного прогресса, освоения домашних заданий и усвоения материала предыдущих уроков.</p>
                                                        <p>Активное участие студентов в конкурсах и музыкальных мероприятиях стимулируется и подтверждается сертификатами, отражающими их музыкальное развитие. По завершении каждого этапа обучения студенты получают сертификаты, подтверждающие успешное освоение уровня, а после полного прохождения курса – диплом, свидетельствующий о приобретенных знаниях и умениях в области игры на скрипке.</p>

                                                        <h2 id="detailCourseHeading-2">Описание методики</h2>
                                                        <p>Методика обучения игре на скрипке в Монтессори центре — это уникальная программа, разработанная с целью максимального развития индивидуального потенциала каждого ученика.</p>
                                                        <p>Этот подход предусматривает определение конкретных музыкальных задач для студентов на начальном этапе их обучения. Эти задачи включают в себя изучение музыкальных произведений разной степени сложности, которые студенты стремятся освоить. Вместо классических экзаменов, оценка успехов студентов осуществляется на основе их участия в концертах и скрипичных конкурсах, где успешное выступление и есть доказательством их прогресса.</p>


                                                        <h2 id="detailCourseHeading-3">Преимущества методики</h2>
                                                        <p>1. Четкое определение целей: формулировка специфических музыкальных задач дает ученикам четкое понимание их целей и предоставляет направление для их достижения.</p>
                                                        <p>2. Индивидуальный темп обучения: программа позволяет учащимся продвигаться в соответствии с их личным темпом освоения материала, что способствует более глубокому пониманию и усвоению знаний.</p>
                                                        <p>3. Опыт выступления на сцене: публичные выступления и участие в конкурсах дают студентам ценный опыт и возможность применять свои навыки в реальных условиях.</p>
                                                        <p>4. Подходит для всех возрастов: методика доступна как для младших учеников, так и для взрослых, делая обучение игре на скрипке универсальным и доступным для каждого.</p>
                                                        <p>5. Возможности для продолжения образования: после достижения начальных целей ученики могут продолжить свое обучение, стремясь к улучшению и совершенствованию своих навыков игры на скрипке.</p>
                                                        <p>Методика обучения в Монтессори центре предназначена для учеников всех уровней подготовки и предлагает каждому студенту индивидуализированный путь развития, от начинающих до продвинутых музыкантов, желающих достичь высокого уровня мастерства.</p>
                                                        <p>Гибкий и очень индивидуальный подход к обучению делает процесс обучения менее стрессовым и более увлекательным, позволяя студентам сосредоточиться на достижении личных музыкальных целей.</p>
                                                        <p>В результате, наша методика обучения игре на скрипке акцентирует внимание на важности индивидуального подхода и создает мотивирующую образовательную среду, обеспечивающую студентам не только мастерство игры на скрипке, но и уверенность в себе, вдохновение и долгосрочный интерес к музыке.</p>

                                                        <h2 id="detailCourseHeading-4">Уровень "Подготовительный"</h2>
                                                        <p>Обучающая программа подготовительного уровня для скрипки рассчитана на детей от 5 до 6 лет. На этапе знакомства с инструментом малыши усваивают базовые принципы звукоизвлечения, осваивают правильное положение рук и делают первые шаги в игре на скрипке. Закладывание фундаментальных навыков и поэтапное овладение элементарными навыками игры на скрипке крайне важны для дальнейшего развития музыкальных способностей ребенка.</p>
                                                        <h2 id="detailCourseHeading-5">Уровень "Начальный"</h2>
                                                        <p>На начальном этапе обучения студенты овладевают ключевыми аспектами музыкальной грамоты и научатся читать скрипичные партии. Этот этап включает изучение ритма, мелодии и разнообразных музыкальных знаков, необходимых для точного исполнения музыкальных произведений. К окончанию данного уровня учащиеся способны исполнять элементарные классические и современные композиции, овладев начальными навыками игры на скрипке.</p>
                                                        <h2 id="detailCourseHeading-6">Уровень "Средний"</h2>
                                                        <p>На среднем этапе учащиеся приобретают важнейшие умения, нужные для исполнения более сложных скрипичных произведений. Особое внимание уделяется совершенствованию техники игры, выразительности и музыкальной интерпретации, включая умение передавать эмоциональную глубину музыки.</p>
                                                        <h2 id="detailCourseHeading-7">Уровень "Продвинутый"</h2>
                                                        <p>На продвинутом этапе студенты занимаются изучением сложных скрипичных композиций, демонстрируя понимание музыкального стиля и авторского замысла. Студенты осваивают разнообразные техники и приемы игры на скрипке, улучшают свои навыки фразировки и динамики.</p>
                                                        <p>По завершении курса учащиеся способны исполнять сложные музыкальные произведения, глубоко проникая в суть музыкального произведения, воплощая его через свое исполнение. Особое внимание уделяется развитию технике и навыкам разнообразных приемов игры.</p>
                                                        <p>В течение всего обучения активно формируются исполнительские навыки. Учащиеся активно принимают участие в концертах и конкурсах, приобретая необходимый опыт публичных выступлений и развивая сценическую уверенность. В итоге, после окончания обучения, студенты обладают всеми необходимыми навыками и знаниями для профессионального исполнения на скрипке.</p>

                                                        <h2 id="detailCourseHeading-8">Цели курса</h2>
                                                        <p>Основная задача курса по скрипке - это овладение техникой игры на этом инструменте, ведь скрипка - это выразительный и многогранный музыкальный инструмент. Для начинающих скрипачей это предполагает развитие ловкости и контроля смычка, критически важных для исполнения сложных музыкальных произведений без потери ритма или точности. Достижение этой цели требует регулярных тренировок и постоянного улучшения своего мастерства.</p>
                                                        <p>Также учащиеся знакомятся с разнообразными техниками игры на скрипке, которые позволяют модифицировать методы извлечения звука в соответствии с музыкальным содержанием и желаемым эмоциональным впечатлением.</p>
                                                        <p>Другой существенной частью обучения является научиться читать скрипичные партии. Это навык, необходимый каждому скрипачу, позволяющий более свободно ориентироваться в музыкальных произведениях и трансформировать ноты в живое исполнение. После освоения этой задачи студенты могут самостоятельно анализировать и исполнять композиции, найденные в интернете или других источниках.</p>
                                                        <p>Кроме того, одной из целей курса является научиться исполнять произведения разнообразных жанров. Это способствует развитию исполнительской уверенности, помогает управлять волнением перед публикой и дает возможность оценить личный прогресс в сравнении с исполнением других музыкантов. Главная цель занятий - это не соревнование, а бесконечное совершенствование и удовольствие от процесса игры на скрипке.</p>


                                                        <h2 id="detailCourseHeading-9">Польза уроков скрипки</h2>
                                                        <p>Игра на скрипке — это не просто мастерство, но и особенный способ выразить себя. Многие начинают играть в детстве, продолжают увлекаться музыкой во взрослой жизни или выбирают профессиональное обучение. Занятия на скрипке приносят пользу не только для музыкальных навыков, но и обогащают внутренний мир человека. Давайте рассмотрим основные преимущества таких занятий.</p>
                                                        <p><strong>Укрепление моторики.</strong> Игра на скрипке способствует развитию мелкой моторики рук. Точные и сложные движения пальцев при игре улучшают координацию и гибкость.</p>
                                                        <p><strong>Развитие музыкального слуха.</strong> Занятия скрипкой уделяют большое внимание точности звукоизвлечения и музыкальной интерпретации, что способствует совершенствованию музыкального слуха.</p>
                                                        <p><strong>Уменьшение стресса.</strong> Игра на таком музыкальном инструменте, как скрипка, помогает снизить уровень стресса, предоставляя возможность для релаксации и самовыражения.</p>
                                                        <p><strong>Самоорганизация и ответственность.</strong> Регулярные тренировки и домашние задания требуют организованности и дисциплины, что положительно сказывается на личностных качествах.</p>
                                                        <p><strong>Социальная активность.</strong> Участие в оркестрах и ансамблях открывает возможности для встречи с единомышленниками и развития коммуникативных навыков.</p>
                                                        <p><strong>Повышение самооценки.</strong> Достижение успехов в игре на скрипке вдохновляет и придает уверенность в своих силах.</p>
                                                        <p><strong>Стимулирование креативности.</strong> Исследование различных музыкальных жанров и стилей в процессе обучения способствует творческому развитию личности.</p>
                                                        <p>В итоге, уроки игры на скрипке открывают широкие возможности не только для мастерства, но и для личностного роста. Они позволяют раскрыть музыкальный потенциал, улучшить физическое и психологическое состояние, а также обрести новых друзей среди музыкантов.</p>
                                                        <p>Независимо от того, целью является профессиональная карьера скрипача или просто желание наслаждаться музыкой, занятия скрипкой принесут радость и пользу. Откройте для себя мир скрипки уже сегодня!</p>

                                                        
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
                                                    Mastering violin sound production techniques and methods, enhancing playing skills and proficiency.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Music Literacy</span>
                                                    </div>
                                                    <div class="io-content">
                                                    Acquiring the ability to read musical notes, enabling the performance of compositions on the violin of varying complexity.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Mastery</span>
                                                    </div>
                                                    <div class="io-content">
                                                    Developing the capability to perform a broad spectrum of musical pieces across diverse genres on the violin.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Stage Experience</span>
                                                    </div>
                                                    <div class="io-content">
                                                    Gaining practical performance experience on stage through concerts, music festivals, and competitions.
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
                                                    Our violin teaching methodology is a unique program developed by the Montessori Center. At the beginning of the course, individual tasks are set for each student, which they aim to achieve throughout their training. The primary goal is to perform a violin piece of a given complexity proficiently at a public event.
                                                    </div>
                                                    <div class="io-fw-semibold io-fs-20">
                                                        Advantages of Our Methodology
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Clear objectives for each student.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Course duration is tailored to the individual pace of achieving goals.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Skill assessment through performances at concerts and competitions, instead of traditional exams.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Suitable for both children and adults.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Opportunity for continued learning to further refine skills after achieving set goals.</span>
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
                                                            <p><strong>A violin of the appropriate size </strong>for online violin lessons. Image of a violin here</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-laptop.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>A gadget with a camera and microphone</strong> is necessary for online violin lessons.</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-headphones.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>Use headphones</strong> to improve sound quality. Image of headphones here</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-note.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>We will send you the sheet music</strong> before the lesson. You will need to print it out or open it on your device screen.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingTwoB">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseTwoB" aria-expanded="false" aria-controls="courseAccordion-collapseTwoB">
                                                How to Choose the Right Violin
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseTwoB" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingTwoB" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-check">
                                                        <span><strong class="me-1">For children aged 3-5 years</strong>, a 1/16 size violin is suitable.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span><strong class="me-1">For children aged 4-5 years</strong>, a 1/10 size violin is suitable.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span><strong class="me-1">For children aged 4-6 years</strong>, a 1/8 size violin is suitable.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span><strong class="me-1">For children aged 5-7 years</strong>, a 1/4 size violin is suitable.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span><strong class="me-1">For children aged 7-9 years</strong>, a 1/2 size violin is suitable.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span><strong class="me-1">For children aged 9-12 years</strong>, a 3/4 size violin is suitable.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span><strong class="me-1">For children older than 11 years</strong>, a 7/8 size violin is suitable.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span><strong class="me-1">For children older than 11 - 12 years and adults</strong>, a 4/4 size violin (full size) is suitable.</span>
                                                    </div>
                                                    <img class="w-100" src="/wp-content/themes/interschooltemplate/images/Banner_violin.jpg" alt="">
                                                    <div class="io-content">
                                                        <p>However, besides age, consider the child's individual features, such as height and hand size. A simple way to check if the violin size is appropriate is to have the child extend their left arm forward and try to wrap their hand around the violin's scroll. If the violin is the right size, the scroll should fit in the palm's center without strain.</p>
                                                    </div>
                                                    <div class="io-content">
                                                        <p>Choosing the right bow is also important and should match the size of the violin and the child's hand. An incorrect bow choice can lead to discomfort and improper hand positioning.</p>
                                                    </div>
                                                    <div class="io-content">
                                                        <p>When selecting a violin, it's important to seek advice from a teacher and try the instrument in a music store to ensure it fits the child properly. Note that sometimes intermediate sizes, such as 7/8, may be used for children or adults of petite stature or with specific hand structures.</p>
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
                                                        <div><span><strong>Two lessons per week</strong> with our instructor are the key to successful and swift violin mastery.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Regular lessons</strong> contribute to a profound understanding of the musical repertoire and improvement in playing skills.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Independent practice</strong> at home is mandatory for all students over the age of 7.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span>Be prepared that the learning process<strong> will take time.</strong></span></div>
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
                                                            <p>Reinforcing the material covered in lessons requires<strong> regular homework practice.</strong></p>
                                                            <p>Initially, <strong>15-20 minutes</strong> of daily individual practice is sufficient.</p>
                                                            <p>Such home practice not only aids in mastering the instrument but also <strong>brings joy</strong> from the achievements made.</p>
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
                                                        <div><span>Your assistance is invaluable in preparing your child for lessons: ensure that everything needed for the class is ready — the gadget and headphones are working, the sound is checked, and the link to the online lesson is open.</span></div>
                                                    </div>
                                                    <div class="io-heart">
                                                        <div><span>Support your child in organizing their independent study at home.</span></div>
                                                    </div>
                                                    <div class="io-heart">
                                                        <div><span>Be patient and supportive of their efforts towards musical proficiency.</span></div>
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
                                                                
                                                                <source srcset="/wp-content/themes/interschooltemplate/images/violin-1.jpg" type="image/jpeg">
                                                                <img src="/wp-content/themes/interschooltemplate/images/violin-1.jpg" alt="">
                                                            </picture>
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            
                                                            <picture>
                                                                
                                                                <source srcset="/wp-content/themes/interschooltemplate/images/violin-2.jpg" type="image/jpeg">
                                                                <img src="/wp-content/themes/interschooltemplate/images/violin-2.jpg" alt="">
                                                            </picture>
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            
                                                            <picture>
                                                                
                                                                <source srcset="/wp-content/themes/interschooltemplate/images/violin-3.jpg" type="image/jpeg">
                                                                <img src="/wp-content/themes/interschooltemplate/images/violin-3.jpg" alt="">
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
                                                            <p>If you would like to book a trial violin lesson, you need <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">to schedule and pay</a> <span class="io-fw-semibold io-pink-main ioArrayToTextElementsDemo">$6</span>.<br>The trial lesson is conducted individually and lasts for <span class="io-fw-semibold">45 minutes</span>.</p>
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
                                                            <span>Purchased lessons have no expiration date.</span>
                                                        </div>
                                                        <div class="io-heart">
                                                            <span>You can learn on any courses using the purchased lessons.</span>
                                                        </div>
                                                        <div class="io-heart">
                                                            <span>All family members can utilize the purchased lessons.</span>
                                                        </div>
                                                        <div class="io-heart">
                                                            <span>Please notify us of lesson cancellation at least 24 hours in advance, otherwise, the lesson will be considered as completed.</span>
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
                                                                <a class="io-link" href="#detailCourseHeading-3" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Advantages of the Methodology</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-4" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Preparatory Level</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-5" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Beginner Level</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-6" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Intermediate Level</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-7" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Advanced Level</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-8" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Course Objectives</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-9" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Benefits of Violin Lessons</a>
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
                                                    <p>The online violin course is designed for young learners from the age of five and for adults with no age restrictions. Throughout our violin course, students will master the performance of classical repertoire, jazz melodies, and popular compositions, as well as learn music literacy. The educational program is structured by levels of difficulty: from beginner to advanced, with a separate preparatory level for children aged 5-6 years.</p>
                                                    <p>Each 45-minute violin lesson is conducted on an individual basis. Our instructors are proficient in both Russian and English, offering students a choice of language for the lessons. The schedule of classes is tailored to the individual preferences of each student, making the learning process as convenient as possible.</p>
                                                    <p>Violin lessons are conducted through Google Meet and Zoom platforms. Our teachers possess higher musical education, extensive teaching experience, actively perform on stage, and are orchestra artists.</p>
                                                    <p>The intensity of the classes is determined individually, however, we recommend having no less than two lessons per week to achieve consistent progress, complete homework assignments, and assimilate the material from previous lessons.</p>
                                                    <p>Active participation of students in competitions and musical events is encouraged and recognized by certificates reflecting their musical development. Upon completing each stage of the course, students receive certificates confirming successful level completion, and after completing the entire course – a diploma evidencing the knowledge and skills acquired in violin playing.</p>

                                                    <h2 id="detailCourseHeading-2">Description of Methodology</h2>
                                                    <p>The violin teaching methodology at the Montessori Center is a unique program designed to maximize the individual potential of each student.</p>
                                                    <p>This approach involves setting specific musical tasks for students at the beginning of their learning journey. These tasks include the study of musical pieces of varying complexity that students aim to master. Instead of traditional exams, student progress is assessed based on their participation in concerts and violin competitions, where successful performance is evidence of their advancement.</p>
                                                    <h2 id="detailCourseHeading-3">Advantages of the Methodology</h2>
                                                    <p>1. Clear Goal Setting: Defining specific musical tasks gives students a clear understanding of their objectives and provides direction for achieving them.</p>
                                                    2. Individual Learning Pace: The program allows students to progress at their own pace, fostering a deeper understanding and absorption of knowledge.
                                                    3. Stage Performance Experience: Public performances and participation in competitions offer students valuable experience and the opportunity to apply their skills in real-world settings.
                                                    4. Suitable for All Ages: The methodology is accessible to younger students and adults alike, making violin learning universal and available to everyone.
                                                    5. Opportunities for Continuing Education: After reaching initial goals, students can continue their education, aiming for improvement and mastery of violin playing.
                                                    <p>The Montessori Center's teaching methodology is designed for students of all levels of preparation and offers each student a personalized path of development, from beginners to advanced musicians seeking to achieve a high level of proficiency.</p>
                                                    <p>A flexible and highly individualized approach to learning makes the educational process less stressful and more engaging, allowing students to focus on achieving their personal musical goals.</p>
                                                    <p>As a result, our violin teaching methodology emphasizes the importance of an individual approach and creates a motivating educational environment that provides students not only with violin mastery but also with confidence, inspiration, and a long-term interest in music.</p>

                                                    <h2 id="detailCourseHeading-4">Preparatory Level</h2>
                                                    <p>The preparatory program for violin is designed for children aged 5 to 6 years. At this introductory stage, children grasp the basic principles of sound production, learn the correct hand position, and take their first steps in playing the violin. Laying fundamental skills and gradually mastering the elementary techniques of violin playing are crucial for the further development of a child's musical abilities.</p>
                                                    <h2 id="detailCourseHeading-5">Beginner Level</h2>
                                                    <p>At the beginner stage, students master key aspects of musical literacy and learn to read violin scores. This phase includes the study of rhythm, melody, and various musical symbols necessary for the accurate performance of musical pieces. By the end of this level, students are able to perform simple classical and contemporary compositions, possessing basic violin playing skills.</p>
                                                    <h2 id="detailCourseHeading-6">Intermediate Level</h2>
                                                    <p>At the intermediate stage, students acquire essential skills needed to perform more complex violin works. Special attention is given to improving playing technique, expressiveness, and musical interpretation, including the ability to convey the emotional depth of the music.</p>
                                                    <h2 id="detailCourseHeading-7">Advanced Level</h2>
                                                    <p>At the advanced stage, students engage in studying complex violin compositions, demonstrating an understanding of musical style and the composer's intent. Students learn various techniques and methods of playing the violin, enhancing their skills in phrasing and dynamics.</p>
                                                    <p>Upon completing the course, students are capable of performing complex musical works, deeply penetrating the essence of the musical piece and embodying it through their performance. Special focus is given to developing technique and diverse playing methods.</p>
                                                    <p>Throughout the training, performance skills are actively developed. Students actively participate in concerts and competitions, gaining the necessary experience for public performances and developing stage confidence. Ultimately, after completing the training, students possess all the necessary skills and knowledge for professional violin performance.</p>

                                                    <h2 id="detailCourseHeading-8">Course Objectives</h2>
                                                    <p>The primary goal of the violin course is to master playing techniques on this instrument, as the violin is a highly expressive and multifaceted musical tool. For beginners, this involves developing agility and bow control, critically important for performing complex musical pieces without losing rhythm or precision. Achieving this goal requires regular practice and continual skill improvement.</p>
                                                    <p>Students are also introduced to various violin playing techniques, allowing for sound extraction methods to be modified in line with the musical content and desired emotional impact.</p>
                                                    <p>Another significant part of training is learning to read violin scores. This skill, essential for every violinist, enables a more free navigation through musical works and the transformation of notes into live performance. Upon mastering this task, students can independently analyze and perform compositions found online or from other sources.</p>
                                                    <p>Additionally, one of the course objectives is to learn to perform works from various genres. This fosters performance confidence, helps manage public performance anxiety, and allows for personal progress evaluation in comparison to other musicians. The main goal of the lessons is not competition but continuous improvement and enjoyment of the violin playing process.</p>

                                                    <h2 id="detailCourseHeading-9">The Benefits of Violin Lessons</h2>
                                                    <p>Playing the violin is not just a skill, but a unique way to express oneself. Many start in childhood, continue to engage with music in adulthood, or opt for professional training. Violin lessons benefit not only musical skills but also enrich the individual's inner world. Let's explore the main advantages of such lessons.</p>
                                                    <p>Motor Skills Development. Playing the violin fosters the development of fine motor skills in the hands. Precise and complex finger movements during play improve coordination and flexibility.</p>
                                                    <p>Musical Ear Training. Violin lessons pay great attention to the accuracy of sound production and musical interpretation, enhancing musical hearing.</p>
                                                    <p>Stress Reduction. Playing an instrument like the violin helps lower stress levels, providing an opportunity for relaxation and self-expression.</p>
                                                    <p>Self-organization and Responsibility. Regular practice and homework require organization and discipline, positively affecting personal qualities.</p>
                                                    <p>Social Activity. Participating in orchestras and ensembles opens opportunities to meet like-minded individuals and develop communicative skills.</p>
                                                    <p>Self-esteem Boost. Achievements in playing the violin inspire and boost confidence in one's abilities.</p>
                                                    <p>Creativity Stimulation. Exploring various musical genres and styles during training promotes creative personal development.</p>
                                                    <p>Ultimately, violin lessons open wide opportunities not only for mastery but also for personal growth. They allow uncovering musical potential, improving physical and psychological well-being, and making new friends among musicians.</p>
                                                    <p>Whether the goal is a professional violinist career or simply the desire to enjoy music, violin lessons will bring joy and benefit. Discover the world of the violin today!</p>

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
                                <h2 class="io-heading-2 io-course-lesson__heading">Как проходят уроки скрипки</h2>
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
                                            <p><span class="io-fw-semibold">Оборудование:</span> для занятий вам потребуется скрипка, а также устройство с доступом в Интернет и камерой для видеосвязи — компьютер, планшет или смартфон.</p>
                                            <p><span class="io-fw-semibold">Интернет-соединение:</span> проверьте стабильность вашего интернет-соединения. Качественный и быстрый интернет обеспечит бесперебойность урока.</p>
                                            <p><span class="io-fw-semibold">Видеоконференц-платформа:</span> мы используем <a href="https://zoom.us/ru/download" target="_blank" class="io-purple-main io-link">Zoom</a> или <a href="https://meet.google.com" target="_blank" class="io-purple-main io-link">Google Meet</a> для проведения уроков онлайн. Вам нужно будет загрузить и установить соответствующее приложение, если у вас его еще нет.</p>
                                            <p><span class="io-fw-semibold">Звук:</span> рекомендуем использовать наушники для улучшения звучания. Это снизит уровень фонового шума и повысит качество аудиосвязи между вами и вашим педагогом.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">2</div>
                                        <div class="io-steps__title">Подготовка к уроку</div>
                                        <div class="io-steps__dots">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">Ссылка на урок</span> будет отправлена вам заблаговременно по электронной почте или через мессенджер.</p>
                                            <p><span class="io-fw-semibold">Ноты для урока</span> предоставляются заранее в электронном виде.</p>

                                            <p><span class="io-fw-semibold">Распечатайте ноты</span> перед началом урока или откройте их на экране вашего устройства.</p>

                                            <p><span class="io-fw-semibold">Разместите ваше устройство</span> так, чтобы преподаватель мог видеть не только ваше лицо, но и руки, а также весь корпус.</p>

                                            <p><span class="io-fw-semibold">Войдите в приложение Zoom или Google Meet</span> по полученной ссылке, проверьте работоспособность камеры и микрофона.</p>

                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">3</div>
                                        <div class="io-steps__title">Во время урока</div>
                                        <div class="io-steps__dots">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">Инструкции и обратная связь:</span> ваш преподаватель по скрипке предоставит детальные рекомендации по правильной технике игры, освоению первых музыкальных произведений.</p>
                                            <p><span class="io-fw-semibold">Вопросы:</span> не колеблитесь обращаться к учителю за разъяснениями по любым неясным моментам.</p>
                                            <p><span class="io-fw-semibold">Практика:</span> основное время урока уделено практическому исполнению. Вы будете играть, а преподаватель будет наблюдать, слушать и демонстрировать примеры на своем инструменте.</p>
                                            <p><span class="io-fw-semibold">Демонстрация игры преподавателем:</span> учитель покажет выполнение определённых фрагментов, что поможет вам лучше их понять и освоить.</p>
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
                                            <p class="io-purple-main io-fs-18 io-fw-semibold">Мы уверены, что онлайн-уроки скрипки обеспечат вам удобство и эффективность обучения. Образовательный процесс в Монтессори центре будет для вас захватывающим и успешным!</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                            <section class="io-intersection io-course-lesson">
                                <h2 class="io-heading-2 io-course-lesson__heading">How Violin Lessons Are Conducted</h2>
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
                                            <p><span class="io-fw-semibold">Equipment:</span> For your lessons, you will need a violin and a device with Internet access and a camera for video communication — a computer, tablet, or smartphone.</p>
                                            <p><span class="io-fw-semibold">Internet Connection:</span> Ensure your internet connection is stable. A high-quality and fast internet will ensure a smooth lesson experience.</p>
                                            <p><span class="io-fw-semibold">Video Conferencing Platform:</span> We use <a href="https://zoom.us/download" target="_blank" class="io-purple-main io-link">Zoom</a> or <a href="https://meet.google.com" target="_blank" class="io-purple-main io-link">Google Meet</a> for online lessons. You will need to download and install the respective application if you don't have it already.</p>
                                            <p><span class="io-fw-semibold">Sound:</span> We recommend using headphones to enhance audio quality. This will reduce background noise and improve the audio communication between you and your instructor.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">2</div>
                                        <div class="io-steps__title">Preparation for the Lesson</div>
                                        <div class="io-steps__dots">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">The link to the lesson</span> will be sent to you well in advance via email or messenger.</p>

                                            <p><span class="io-fw-semibold">The sheet music</span> for the lesson will be provided in advance in digital format.</p>

                                            <p><span class="io-fw-semibold">Print out the sheet music</span> before the lesson starts or open it on your device's screen.</p>

                                            <p><span class="io-fw-semibold">Position your device</span> so that the teacher can see not only your face but also your hands and your entire body.</p>

                                            <p><span class="io-fw-semibold">Log into the Zoom or Google Meet</span> app using the provided link before the lesson starts to check your camera and microphone are working correctly.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">3</div>
                                        <div class="io-steps__title">During the Lesson</div>
                                        <div class="io-steps__dots">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">Instructions and Feedback:</span> Your violin instructor will provide detailed guidance on proper playing technique and mastering the first musical pieces.</p>

                                            <p><span class="io-fw-semibold">Ask Questions:</span> Feel free to ask your teacher about anything unclear.</p>

                                            <p><span class="io-fw-semibold">Practice:</span> The majority of the lesson will be devoted to practical performance. You will play, and the teacher will observe, listen, and demonstrate on their own instrument.</p>

                                            <p><span class="io-fw-semibold">Instructor's Performance Demonstration:</span> Your teacher will show how certain passages should be played, helping you understand and master them better.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">4</div>
                                        <div class="io-steps__title">After the Lesson</div>
                                        <div class="io-steps__empty">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p>The instructor will provide materials for independent practice at home: sheet music, audio recordings, textbooks, and other resources to help you prepare for the next lesson.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps io-steps--last">
                                        <div class="io-steps__empty">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p class="io-purple-main io-fs-18 io-fw-semibold">We are confident that online violin lessons will provide you with convenience and effective learning. The educational process at the Montessori center will be exciting and fruitful for you!</p>
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
                                <h2 class="io-heading-2">Программа курса скрипки</h2>
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
                                                    
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/cert_violin_pre.jpg" type="image/jpeg">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert_violin_pre.jpg" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--preschool">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Модули</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>п1</span>
                                                <p>Изучение основ звукоизвлечения и постановка рук</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>п2</span>
                                                <p>Игра на открытых струнах, исполнение простых мелодий</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>Смотреть диплом</span>
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/cert_violin_pre.jpg" type="image/jpeg">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert_violin_pre.jpg" alt="">
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
                                                    
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/cert_violin_beg.jpg" type="image/jpeg">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert_violin_beg.jpg" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--light">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Модули</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>1</span>
                                                <p>Постановка рук и корпуса. Изучение
                                                 упражнений для координации и звукоизвлечения.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>2</span>
                                                <p>Изучение простых мелодий и упражнений для развития 
                                                координации и слуха.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>3</span>
                                                <p>Приобретение большей свободы движений и 
                                                 навыков. Изучение гамм и простых мелодий.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>4</span>
                                                <p>Изучение упражнений для развития техники и артикуляции, 
                                                 работа над штрихами. Изучение простых пьес.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>5</span>
                                                <p>Изучение простых классических произведений.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>6</span>
                                                <p>Подготовка и выступление на концерте.</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>Смотреть диплом</span>
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/cert_violin_beg.jpg" type="image/jpeg">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert_violin_beg.jpg" alt="">
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
                                                    
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/cert_violin_med.jpg" type="image/jpeg">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert_violin_med.jpg" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--medium">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Модули</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>7</span>
                                                <p>Приобретение навыков самостоятельного разбора произведений</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>8</span>
                                                <p>Изучение произведений разных стилей и эпох</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>9</span>
                                                <p>Изучение более сложных технических упражнений и 
                                               этюдов. Работа над развитием техники</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>10</span>
                                                <p>Подготовка и выступление на концерте или конкурсе</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>Смотреть диплом</span>
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/cert_violin_med.jpg" type="image/jpeg">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert_violin_med.jpg" alt="">
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
                                                    
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/cert_violin_adv.jpg" type="image/jpeg">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert_violin_adv.jpg" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--hard">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Модули</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>11</span>
                                                <p>Приобретение навыков ансамблевой игры</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>12</span>
                                                <p>Выступление на концерте или конкурсе сольно или в ансамбле</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>13</span>
                                                <p>Работа над развитием беглости. Изучение и исполнение 
                                                произведений со сложным сочетанием штрихов</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>14</span>
                                                <p>Подготовка концертной программы и выступления, учитывая 
                                               стилевое разнообразие репертуара</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>Смотреть диплом</span>
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/cert_violin_adv.jpg" type="image/jpeg">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert_violin_adv.jpg" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="io-text-wrapper">
                                    <p>Программа обучения курса скрипки разработана для учащихся начиная с 5 лет и для взрослых без возрастных ограничений. Курс охватывает три уровня сложности: начальный, средний и продвинутый. По успешному завершении каждого уровня ученики получают сертификат. Начинающие, которые никогда ранее не играли на скрипке, стартуют с начального уровня. Для перехода на средний и продвинутый уровни требуются определенные умения и знания. Для детей от 5 лет мы разработали программу подготовительного уровня обучение игре на скрипке.</p>
                                    <p class="io-purple-main io-fs-18 io-fw-semibold">Запишитесь на <a type="button" class="io-purple-main io-fw-semibold io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">пробный урок</a> игры на скрипке уже сегодня!</p>
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
                                                    
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/cert_violin_pre.jpg" type="image/jpeg">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert_violin_pre.jpg" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--preschool">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Modules</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>p1</span>
                                                <p>Introduction to the basics of sound production and hand positioning</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>p2</span>
                                                <p>Playing on open strings, performing simple melodies</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>View Diploma</span>
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/cert_violin_pre.jpg" type="image/jpeg">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert_violin_pre.jpg" alt="">
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
                                                    
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/cert_violin_beg.jpg" type="image/jpeg">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert_violin_beg.jpg" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--light">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Modules</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>1</span>
                                                <p>Hand and body positioning. Learning exercises for  
                                         coordination and sound production</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>2</span>
                                                <p>Learning simple melodies and exercises to develop 
                                        coordination and musical ear</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>3</span>
                                                <p>Gaining more freedom of movement and skills. Studying 
                                        scales and simple melodies</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>4</span>
                                                <p>Learning exercises to develop technique and articulation, 
                                        working on bowing techniques. Studying simple pieces</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>5</span>
                                                <p>Learning simple classical works</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>6</span>
                                                <p>Preparation and performance at a concert</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>View Diploma</span>
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/cert_violin_beg.jpg" type="image/jpeg">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert_violin_beg.jpg" alt="">
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
                                                    
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/cert_violin_med.jpg" type="image/jpeg">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert_violin_med.jpg" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--medium">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Modules</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>7</span>
                                                <p>Acquiring skills for independent analysis of works</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>8</span>
                                                <p>Studying works of various styles and epochs</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>9</span>
                                                <p>Learning more complex technical exercises and studies. Working on technique development</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>10</span>
                                                <p>Preparation and performance at a concert or competition</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>View Diploma</span>
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/cert_violin_med.jpg" type="image/jpeg">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert_violin_med.jpg" alt="">
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
                                                    
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/cert_violin_adv.jpg" type="image/jpeg">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert_violin_adv.jpg" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--hard">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Modules</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>11</span>
                                                <p>Acquiring ensemble playing skills</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>12</span>
                                                <p>Performance at a concert or competition, solo or in an ensemble</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>13</span>
                                                <p>Working on developing fluency. Learning and performing works with complex combinations of bowing techniques</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>14</span>
                                                <p>Preparing a concert program and performing, considering the stylistic diversity of the repertoire</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>View Diploma</span>
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/cert_violin_adv.jpg" type="image/jpeg">
                                                    <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert_violin_adv.jpg" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="io-text-wrapper">
                                    <p>The violin course program is designed for students from the age of 5 and for adults with no age restrictions. The course encompasses three levels of difficulty: beginner, intermediate, and advanced. Upon successful completion of each level, students receive a certificate. Beginners, who have never played the violin before, start at the beginner level. To progress to the intermediate and advanced levels, certain skills and knowledge are required. For children from 5 years old, we have developed a preparatory level program for learning to play the violin.</p>
                                    <p class="io-purple-main io-fs-18 io-fw-semibold">Sign up for a <a type="button" class="io-purple-main io-fw-semibold io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">trial violin lesson</a> today!</p>
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
                                            <div class="io-price__step io-price__first focus">
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
                                                                        <input class="io-radio" type="radio" id="iocheckboxgift28" name="checkbox-group" checked>
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
                                                                        <input class="io-radio" type="radio" id="iocheckboxgift28" name="checkbox-group" checked>
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
                                                                        <input class="io-checkbox" type="checkbox" id="iocheckbox28" name="checkbox-group" checked>
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
                                                                        <input class="io-checkbox" type="checkbox" id="iocheckbox28" name="checkbox-group" checked>
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
                                            Как записаться на курс скрипки онлайн?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-1" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-1" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Записаться на пробный урок скрипки и оплатить его можно <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">здесь</a>. После этого наш администратор свяжется с вами и вы согласуете удобное расписание.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-2">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-2" aria-expanded="false" aria-controls="faqAccordion-collapse-2">
                                            С какого возраста можно учиться на онлайн-уроках скрипки?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-2" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Мы приглашаем на онлайн уроки скрипки детей от 5 лет.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-2b">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-2b" aria-expanded="false" aria-controls="faqAccordion-collapse-2b">
                                            Сколько стоит пробный урок скрипки?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-2b" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-2b" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Пробный урок скрипки стоит <span class="ioArrayToTextElementsDemo">$6</span>.
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
                                                После пробного урока скрипки вы можете купить абонемент минимум на 4 урока за <span class="ioArrayToTextElements03">$56</span>. Выбрать количество уроков можно <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">здесь</a>. При покупке от 80 уроков одним платежом действует скидка до <span class="ioArrayToTextElements62">$120</span>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-4">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-4" aria-expanded="false" aria-controls="faqAccordion-collapse-4">
                                            Как оплатить курс скрипки?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-4" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Вы можете выбрать количество уроков и оплатить на <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">нашем сайте</a>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-5">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-5" aria-expanded="false" aria-controls="faqAccordion-collapse-5">
                                            Сколько раз в неделю проходят уроки скрипки онлайн?
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
                                            Сколько длится урок скрипки? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-7" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Урок скрипки длится 45 минут.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-8">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-8" aria-expanded="false" aria-controls="faqAccordion-collapse-8">
                                            Можно ли учиться игре на скрипке в группе?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-8" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Нет, уроки скрипки проходят индивидуально.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-9">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-9" aria-expanded="false" aria-controls="faqAccordion-collapse-9">
                                            Я никогда не учился играть на скрипке ранее, я могу записаться? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-9" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-9" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Да, мы начинаем обучение игре на скрипке онлайн с нуля.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-10">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-10" aria-expanded="false" aria-controls="faqAccordion-collapse-10">
                                            Мой ребенок раньше занимался на скрипке, вы сможете определить его уровень?
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
                                                Вы можете пропустить свой урок или перенести его на другой день, но при этом, чтобы сохранить оплату, предупредите нас минимум за 24 часа до его начала. В противном случае урок будет считаться состоявшимся.
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
                                                Да, по окончанию курса каждый студент получает диплом.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-15">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-15" aria-expanded="false" aria-controls="faqAccordion-collapse-15">
                                            Что нужно для первого урока скрипки?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-15" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-15" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Вам необходимо дома иметь скрипку нужного размера, а также гаджет с камерой и наушники.
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
                                            Вы принимаете на курсы скрипки взрослых? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-17" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-17" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Да, в любом возрасте можно учиться играть на скрипке.
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
                                            Включает ли курс скрипки изучение теории музыки?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-19" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-19" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Да. На уроках скрипки онлайн педагог уделяет внимание теории музыки и сольфеджио.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-20">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-20" aria-expanded="false" aria-controls="faqAccordion-collapse-20">
                                            Есть ли программа курса скрипки?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-20" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-20" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Да, программа опубликована на сайте на странице курса скрипки.
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
                                            How to Enroll in Online Violin Lessons?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-1" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-1" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                You can sign up for a trial violin lesson and make the payment <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">here</a>. Afterward, our administrator will contact you to arrange a convenient schedule.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-2">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-2" aria-expanded="false" aria-controls="faqAccordion-collapse-2">
                                            At What Age Can You Start Online Violin Lessons?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-2" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                We welcome children from the age of 5 for online violin lessons.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-2b">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-2b" aria-expanded="false" aria-controls="faqAccordion-collapse-2b">
                                            How Much Does a Trial Violin Lesson Cost?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-2b" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-2b" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                A trial violin lesson costs <span class="ioArrayToTextElementsDemo">$6</span>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-3">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-3" aria-expanded="false" aria-controls="faqAccordion-collapse-3">
                                            What Are the Costs for Further Learning? Are There Any Discounts?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-3" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                After the trial lesson, you can purchase a subscription for at least 4 lessons for <span class="ioArrayToTextElements03">$56</span>. You can select the number of lessons <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">here</a>. A discount is available for purchases of 80 lessons or more, saving up to <span class="ioArrayToTextElements62">$120</span>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-4">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-4" aria-expanded="false" aria-controls="faqAccordion-collapse-4">
                                            How to Pay for the Violin Course?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-4" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                You can select the number of lessons and make a payment on <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">our website</a>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-5">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-5" aria-expanded="false" aria-controls="faqAccordion-collapse-5">
                                            How Often Do Online Violin Lessons Occur?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-5" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-5" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                We recommend practicing twice a week, but you can adjust the frequency of lessons based on your schedule.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-6">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-6" aria-expanded="false" aria-controls="faqAccordion-collapse-6">
                                            How Is the Schedule Arranged?
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
                                            How Long Does a Violin Lesson Last?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-7" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Each violin lesson lasts 45 minutes.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-8">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-8" aria-expanded="false" aria-controls="faqAccordion-collapse-8">
                                            Can I Learn Violin in a Group?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-8" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                No, violin lessons are conducted individually.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-9">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-9" aria-expanded="false" aria-controls="faqAccordion-collapse-9">
                                            I’ve Never Learned to Play the Violin Before, Can I Enroll?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-9" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-9" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes, we start teaching the violin online from scratch.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-10">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-10" aria-expanded="false" aria-controls="faqAccordion-collapse-10">
                                            My Child Has Previously Played the Violin, Can You Assess Their Level?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-10" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-10" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes, our teacher will determine the student's level and select an appropriate program.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-11">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-11" aria-expanded="false" aria-controls="faqAccordion-collapse-11">
                                            Can I Have Lessons on Weekends?
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
                                            If I miss my lesson, can I reschedule without extra charge?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-12" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-12" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                You can miss a lesson, but to retain your payment, notify us at least 24 hours before the lesson starts. Otherwise, the lesson will be considered as taken.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-13">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-13" aria-expanded="false" aria-controls="faqAccordion-collapse-13">
                                            Can I Reschedule a Lesson?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-13" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-13" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                You can skip your lesson or reschedule it, but please inform us at least 24 hours in advance to retain your payment. Otherwise, the lesson will be considered as completed.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-14">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-14" aria-expanded="false" aria-controls="faqAccordion-collapse-14">
                                            Can I Take Breaks in My Learning?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-14" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-14" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes. Please inform us of your vacation dates at least 24 hours before the lesson.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-15">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-15" aria-expanded="false" aria-controls="faqAccordion-collapse-15">
                                            Will My Child Receive a Diploma?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-15" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-15" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes, upon completing the course, each student receives a diploma.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-16">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-16" aria-expanded="false" aria-controls="faqAccordion-collapse-16">
                                            What Do I Need for the First Violin Lesson?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-16" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-16" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                You will need a violin of the appropriate size at home, as well as a gadget with a camera and headphones.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-17">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-17" aria-expanded="false" aria-controls="faqAccordion-collapse-17">
                                            Will There Be Exams?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-17" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-17" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Instead of exams, you will perform at concerts and competitions.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-18">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-18" aria-expanded="false" aria-controls="faqAccordion-collapse-18">
                                            Do You Accept Adults for Violin Courses?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-18" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-18" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes, you can learn to play the violin at any age.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-19">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-19" aria-expanded="false" aria-controls="faqAccordion-collapse-19">
                                            Can I Choose a Teacher on Your Website?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-19" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-19" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes. It’s important that the teacher’s schedule matches your availability.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-20">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-20" aria-expanded="false" aria-controls="faqAccordion-collapse-20">
                                            Does the Violin Course Include Music Theory?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-20" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-20" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes. During online violin lessons, the teacher focuses on music theory and solfège.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-21">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-21" aria-expanded="false" aria-controls="faqAccordion-collapse-21">
                                            Is There a Program for the Violin Course?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-21" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-21" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes, the program is published on the website on the violin course page.
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
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-1.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-1.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-1.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-2.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-2.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-2.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-3.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-3.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-3.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-4.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-4.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-4.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-5.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-5.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-5.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-6.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-6.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-6.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-7.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-7.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-7.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-8.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-8.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-8.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-9.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-9.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-9.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-10.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-10.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-10.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-11.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-11.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-11.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-12.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-12.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-12.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-13.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-13.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-13.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-14.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-14.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-14.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-15.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-15.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-15.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-16.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-16.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-16.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-17.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-17.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-17.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-18.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-18.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-18.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-19.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-19.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-19.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-20.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-20.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-20.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <!-- <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-21.webp" type="image/webp"> -->
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-violin-21.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-violin-21.jpg" alt="">
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

    var scrollImageRu = '/wp-content/uploads/2023/11/Скрипка-Онлайн.svg';
    var scrollImageEn = '/wp-content/uploads/2023/11/Violin-Online.svg';
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

