<?php
/**
 * Курс Укулеле
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Курс Укулеле
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
                <h2 class="io-heading-2 io-course-lectors__heading">Преподаватели укулеле</h2>
                <div class="io-course-lectors__text-wrapper io-text-wrapper">
                    <div class="io-check io-check--start">
                        <span>Каждый педагог укулеле в Монтессори центре имеет высшее образование по специальности гитары.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>Наши мастера не просто передают навыки игры на укулеле, но также обучают игре на электрогитаре, классической гитаре и бас-гитаре.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>Наш коллектив обладает обширным опытом проведения онлайн-курсов по укулеле для обучающихся различных возрастов, проявляя особое внимание к учебному процессу каждого ученика.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>Педагоги укулеле в нашем образовательном центре активно выступают на публике. Они принимают участие в многочисленных музыкальных проектах и выступлениях, постоянно развивая и совершенствуя свои исполнительские умения.</span>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-bilyi.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Илья Билый</h3>
                            <p class="io-course-lectors__item-header-text-work">Педагог гитары</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Илья Билый - педагог классической гитары, электрогитары, бас-гитары и укулеле в Монтессори центре. Окончил Киевскую муниципальную академию музыки им. Р.М.Глиэра по классу гитары и получает образование магистра музыкального искусства в Киевском университете имени Бориса Гринченко по специальности звукорежиссера.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Читать далее
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Илья преподает все виды гитар, а также дает уроки на ударной установке онлайн. Педагог активно принимает участие в концертах и фестивалях, выступает в составе группы и показывает пример своим ученикам на личном исполнении. На уроках гитары онлайн Илья работает индивидуально с детьми и со взрослыми. Педагогический репертуар включает и академические гитарные школы для классической гитары, и современные школы для электрогитары и баса.</p>
                            <p>Студенты Ильи принимают участие в конкурсах и концертах, получают призовые места и становятся настоящими музыкантами, играют на сцене для слушателей или дома для родных и друзей, потому что гитара становится неотъемлемой частью их жизни. Илья преподает на русском, украинском или английском языках.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-udod.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Анжелика Удод</h3>
                            <p class="io-course-lectors__item-header-text-work">Педагог гитары</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Анжелика - педагог классической гитары, электрогитары, бас-гитары и укулеле в Монтессори центре. Окончила Сумской профессиональный колледж искусств и культуры имени Д.С. Бортнянского по классу гитары. Получает второе образование по специальности “Звукорежиссура” в Киевском университете имени Бориса Гринченко.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Читать далее
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Анжелика профессионально владеет всеми видами гитар, обучает на онлайн уроках и взрослых, и детей. Педагогический репертуар Анжелики очень обширный - от классики к джазу и современной музыке. </p>
                            <p>Студенты Анжелики со всего мира являются победителями музыкальных конкурсов, обладателями гран-при и званий лауреатов. Некоторые студенты пользуются уникальной мульти-инструментальностью Анжелики и изучают несколько видов гитар, переходя от классической гитары к электрогитаре и басу, а также изучают особенности игры на укулеле, оставаясь при этом со своим учителем. Анжелика ведет уроки на русском, украинском или английском языках.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-savin.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Александр Савин</h3>
                            <p class="io-course-lectors__item-header-text-work">Педагог гитары</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Александр Савин – педагог классической гитары, электрогитары, бас-гитары и укулеле в Монтессори центре. Окончил Киевскую муниципальную академию музыки им. Р. М. Глиэра по специальности "Музыкальное искусство".</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Читать далее
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Александр преподает детям и взрослым. На своих индивидуальных уроках гитары применяет главный метод М.Монтессори – это вдохновить и научить студента учиться, ведь в музыкальном искусстве обязательным является самостоятельная практика дома без учителя.</p>
                            <p>Александр действующий музыкант, активно занимается исполнительской деятельностью, дает концерты в составе нескольких коллективов, является лидером и фронтменом своей группы, записывает песни и выпускает альбомы.</p>
                            <p>Студенты Александра побеждают в онлайн конкурсах, выступают на концертах и делают большие успехи, стремясь подражать своему учителю. Александр ведет уроки на русском, украинском или английском языках.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-ostroverh.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Артем Островерх</h3>
                            <p class="io-course-lectors__item-header-text-work">Педагог гитары</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Артем Островерх - педагог гитары в Монтессори центре. Артем - магистр кафедры музыкального искусства Харьковской государственной академии культуры.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Читать далее
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Артем преподает игру на всех видах гитар - классической гитаре, электрогитаре, бас-гитаре и укулеле. На своих уроках часто играет в ансамбле с учениками, показывает на своем примере приемы исполнения, технические секреты и посвящает время на уроках для изучения теории музыки. </p>
                            <p>Ученики Артема исполняют разнообразную музыку. Начинается обучение с простых мелодий, а дальше все зависит от музыкального вкуса студента - педагог обучает исполнению различных стилей музыки.</p>
                            <p>Артем является действующим музыкантом и регулярно практикует выступления на сцене как сольно, так и в группе музыкантов. Уроки проходят на русском, украинском и английском языках.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-soroka.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Владимир Сорока</h3>
                            <p class="io-course-lectors__item-header-text-work">Педагог гитары</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Владимир Сорока – педагог классической гитары, электрогитары, бас-гитары и укулеле в Монтессори центре с 2015 года. Окончил Киевскую муниципальную академию музыки им. Р. М. Глиэра, эстрадно джазовый отдел, специальность гитара.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Читать далее
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Владимир преподает детям и взрослым все виды гитар и сам является виртуозным исполнителем. Его ученики играют в группах, приобретают навыки игры не только на классической гитаре, но и на электрогитаре, басу и укулеле. Владимир - мультимузыкант, кроме гитары, он прекрасно владеет и ударной установкой, и клавишами, поэтому может играть сопровождение своим ученикам на другом инструменте и проводить репетиции ансамбля.</p>
                            <p>На уроках гитары у Владимира звучит различная по жанрам музыка - от классики до современного рока. Студенты Владимира являются победителями конкурсов, участниками концертов и фестивалей.</p>
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
                <h2 class="io-heading-2 io-course-lectors__heading">Ukulele Teachers</h2>
                <div class="io-course-lectors__text-wrapper io-text-wrapper">
                    <div class="io-check io-check--start">
                        <span>Every ukulele teacher at the Montessori Center holds an advanced degree in guitar studies.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>Our experts do not merely impart skills for playing the ukulele but also teach playing the electric guitar, classical guitar, and bass guitar.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>Our team possesses extensive experience in conducting online ukulele courses for students of various ages, paying special attention to the educational process of each student.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>Ukulele educators at our educational center actively perform in public. They participate in numerous musical projects and performances, continuously evolving and perfecting their performance skills.</span>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-bilyi.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Ilya Bily</h3>
                            <p class="io-course-lectors__item-header-text-work">Guitar Teacher</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Ilya Bily is a teacher of classical guitar, electric guitar, bass guitar, and ukulele at the Montessori Center. He graduated from the R.M. Gliere Kiev Municipal Academy of Music in the guitar class and is pursuing a master\'s degree in musical arts with a specialization in sound engineering at the Boris Grinchenko University in Kiev.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Read more
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Ilya teaches all types of guitars, as well as provides online drum set lessons. He actively participates in concerts and festivals, performs as part of a band, and sets an example for his students through personal performances. In his online guitar lessons, Ilya works individually with children and adults. His pedagogical repertoire includes both academic guitar schools for classical guitar and modern schools for electric guitar and bass.</p>
                            <p>Ilya\'s students participate in competitions and concerts, win prizes, and become real musicians, playing on stage for audiences or at home for family and friends, as the guitar becomes an integral part of their lives. Ilya teaches in Russian, Ukrainian, or English.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-udod.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Anzhelika Udod</h3>
                            <p class="io-course-lectors__item-header-text-work">Guitar teacher</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Anzhelika is a teacher of classical guitar, electric guitar, bass guitar, and ukulele at the Montessori center. She graduated from the Sumy Professional College of Arts and Culture named after D.S. Bortnyansky specializing in guitar. She is currently pursuing a second degree in "Sound Directing" at the Kyiv University named after Boris Grinchenko.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Read more
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Anzhelika is professionally proficient in all types of guitars and teaches both adults and children in online classes. Anzhelika\'s teaching repertoire is very broad - from classics to jazz and contemporary music.</p>
                            <p>Anzhelika\'s students from all over the world are winners of music competitions, holders of grand prix and laureates. Some students take advantage of Anzhelika\'s unique multi-instrumentality and study several types of guitars, transitioning from classical guitar to electric guitar and bass, as well as learning the specifics of playing the ukulele, while still remaining with their teacher. Angelika conducts lessons in Russian, Ukrainian, or English.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-savin.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Alexander Savin</h3>
                            <p class="io-course-lectors__item-header-text-work">Guitar teacher</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Guitar teacher
                        Alexander Savin is a teacher of classical guitar, electric guitar, bass guitar, and ukulele at the Montessori Center. He graduated from the R. M. Glière Kiev Municipal Academy of Music with a degree in "Musical Art".</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Read more
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Alexander teaches both children and adults. In his individual guitar lessons, he applies the main method of M. Montessori - to inspire and teach the student to learn, because in musical art, independent practice at home without a teacher is essential.</p>
                            <p>Alexander is an active musician, actively engaged in performing activities, gives concerts as part of several ensembles, is the leader and frontman of his own group, records songs, and releases albums.</p>
                            <p>Alexander\'s students win online competitions, perform at concerts, and achieve great success, striving to emulate their teacher. Alexander teaches lessons in Russian, Ukrainian or English.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-ostroverh.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Artem Ostroverkh</h3>
                            <p class="io-course-lectors__item-header-text-work">Guitar Teacher</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Artem Ostroverkh is a guitar teacher at the Montessori Center. Artem holds a master\'s degree from the Department of Musical Arts at the Kharkiv State Academy of Culture.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Read more
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Artem teaches playing all types of guitars - classical guitar, electric guitar, bass guitar, and ukulele. In his lessons, he often plays in an ensemble with students, demonstrating techniques, technical secrets, and devotes time to studying music theory.</p>
                            <p>Artem\'s students perform a diverse range of music. The instruction begins with simple melodies, and then progresses based on the student\'s musical tastes - Artem teaches various music styles.</p>
                            <p>Artem is an active musician and regularly performs on stage, both solo and with a group of musicians. His lessons are conducted in Russian, Ukrainian, and English.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-soroka.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Vladimir Soroka</h3>
                            <p class="io-course-lectors__item-header-text-work">Guitar Teacher</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Vladimir Soroka has been a teacher of classical guitar, electric guitar, bass guitar, and ukulele at the Montessori center since 2015. He graduated from the R. M. Gliere Kyiv Municipal Academy of Music, the pop-jazz department, with a specialty in guitar.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Read more
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Vladimir teaches all types of guitars to both children and adults and is a virtuoso performer himself. His students play in bands, acquiring skills not only on classical guitar but also on electric guitar, bass, and ukulele. Vladimir is a multi-instrumentalist, proficient in both drums and keyboards, so he can accompany his students on another instrument and conduct ensemble rehearsals.</p>
                            <p>In Vladimir\'s guitar lessons, music of various genres is heard - from classical to modern rock. Vladimir\'s students are winners of competitions, participants in concerts, and festivals. </p>
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
                <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab4" id="<?php echo $ioTab4; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab4; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab4; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Программа'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Curriculum'; } ?></button>
                <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab5" id="<?php echo $ioTab5; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab5; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab5; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Расписание'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Schedule'; } ?></button>
                <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab6" id="<?php echo $ioTab6; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab6; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab6; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Цены и оплата'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Prices and Payment'; } ?></button>
                <!-- <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab7" id="<?php echo $ioTab7; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab7; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab7; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Отзывы'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Reviews'; } ?></button> -->
                <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab8" id="<?php echo $ioTab8; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab8; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab8; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'FAQ'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'FAQ'; } ?></button>
                <!-- <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab9" id="<?php echo $ioTab9; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab9; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab9; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Полезные статьи'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Useful Articles'; } ?></button> -->
                <!-- <button onclick="topFunction() ; tabHistoryHandler(event, this); return false" class="nav-link" data-tab-id="ioTab10" id="<?php echo $ioTab10; ?>-tab" data-bs-toggle="tab" data-bs-target="#<?php echo $ioTab10; ?>" type="button" role="tab" aria-controls="<?php echo $ioTab10; ?>" aria-selected="false"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Галерея'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Gallery'; } ?></button> -->
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
                                <span class="io-course-passport__header-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Курс укулеле'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Ukulele course'; } ?></span>
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
                                    <h1 class="io-heading-1 io-course-hero__heading"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Уроки<br><span class="io-pink-main">Укулеле</span><br>Oнлайн'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Online<br><span class="io-pink-main">Ukulele</span><br>Lessons'; } ?></h1>
                                    <p class="io-course-hero__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'На курсе гавайской гитары укулеле вы освоите искусство исполнения популярных мелодий, научитесь гармонично взаимодействовать в дуэтах и ансамблях, а также с уверенностью выступать перед аудиторией!'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'In this ukulele course, you will master the art of performing popular melodies, learn to harmoniously interact in duets and ensembles, and confidently perform in front of an audience!'; } ?></p>
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
                                                <span>+145 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'отзывов'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'reviews'; } ?></span>
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
                                            <span class="io-course-passport__header-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Курс укулеле'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Ukulele course'; } ?></span>
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
                                                        Освоить базовые и продвинутые приемы игры на укулеле, изучить правильную технику расположения рук и пальцев, усовершенствовать исполнительское мастерство.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Нотная грамота и табулатуры</span>
                                                    </div>
                                                    <div class="io-content">
                                                        Научиться читать ноты и табулатуры для укулеле, разобраться в музыкальных символах и терминологии.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Мастерство</span>
                                                    </div>
                                                    <div class="io-content">
                                                        Овладеть исполнением различных жанров и стилей, применяемых в музыке для укулеле, повысить технические навыки и приемы выразительности.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Сценический опыт</span>
                                                    </div>
                                                    <div class="io-content">
                                                        Приобрести опыт выступлений на культурных мероприятиях и конкурсах, развить уверенность на сцене и умения публичных выступлений, научиться выступать в ансамбле с другими музыкантами.
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
                                                        Методика обучения игре на укулеле основана на уникальных разработках нашей школы. Основной принцип — постановка конкретных целей на начало курса, каждая из которых достигается через последовательное обучение. Главная цель — мастерское исполнение мелодий на мероприятиях школы.
                                                    </div>
                                                    <div class="io-fw-semibold io-fs-20 mt-1 mt-sm-0">
                                                        Преимущества нашей методики
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Учащиеся знают конкретные цели, к которым они стремятся.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Продолжительность обучения зависит от индивидуального темпа освоения заданных целей, а не от строгих временных рамок.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Вместо экзаменов учащиеся демонстрируют свои навыки на музыкальных выступлениях.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Методика подходит как для начинающих, так и для опытных музыкантов.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>После достижения первоначальных целей учащиеся могут продолжить обучение для дальнейшего углубления своих умений.</span>
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
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-guitar.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>Укулеле понадобится вам для онлайн-уроков.</strong></p>
                                                        </div>
                                                    </div>
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-laptop.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>Гаджет с камерой и микрофоном</strong> будут нужны для онлайн уроков укулеле.</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-headphones.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>Используйте наушники,</strong> чтобы улучшить качество звука во время урока.</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-note.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>Ноты и другие учебные материалы,</strong> если они понадобятся, мы вам пришлем заранее. Вам нужно будет их распечатать до урока или открыть на экране своего устройства.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingTwoB">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseTwoB" aria-expanded="false" aria-controls="courseAccordion-collapseTwoB">
                                                    Как правильно выбрать укулеле
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseTwoB" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingTwoB" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-content">
                                                        <strong>Выбор типа укулеле важен, так как различные размеры и формы инструмента имеют разные звучания и удобство игры. Основные типы укулеле включают:</strong>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Сопрано</strong> - это самый маленький и традиционный размер укулеле, который часто ассоциируется с классическим гавайским звучанием. Идеален для детей и начинающих из-за своего маленького размера и легкости в игре. Звук сопрано яркий и веселый.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Концерт</strong> - немного больше сопрано, концертное укулеле предлагает более громкое и полное звучание. Этот размер также предоставляет больше места для пальцев, что удобно для взрослых начинающих.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Тенор</strong> - укулеле тенор еще больше и обеспечивает более богатый и глубокий звук. Благодаря большему размеру, тенор позволяет исполнителям с более крупными руками чувствовать себя комфортнее. Теноры часто выбирают профессиональные музыканты.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Баритон</strong> - самый большой тип укулеле, баритон имеет глубокий, насыщенный тон, который больше напоминает звучание гитары. Настройка такого укулеле отличается от других типов, она соответствует четырем последним струнам классической гитары.</div></div>
                                                    </div>
                                                    <img class="w-100" src="/wp-content/uploads/2024/04/Banner_ukulele-01.jpg" alt="">
                                                    <div class="io-content">
                                                        Выбор типа укулеле зависит от музыкальных предпочтений, размера рук, и желаемого звучания. Для детей лучше всего начинать обучение с укулеле сопрано.
                                                    </div>
                                                    <div class="io-content">
                                                        Кроме перечисленных выше типов, существует укулеле с пьезозвукоснимателем: инструмент, оборудованный электронной системой, позволяющей усиливать звук через усилитель. Эта особенность делает такие укулеле идеальным выбором для музыкантов, которые планируют выступать перед аудиторией, участвовать в концертах или фестивалях.
                                                    </div>
                                                    <div class="io-content">
                                                        <strong>Особенности укулеле с пьезозвукоснимателем:</strong>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Усиление звука:</strong> пьезозвукосниматель, размещённый обычно под мостиком, преобразует вибрации струн в электрический сигнал, который затем может быть усилен через усилитель. Это позволяет укулеле звучать громче без потери качества звука.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Контроль звука:</strong> большинство электроукулеле оснащены предусилителем с регуляторами громкости и тона, позволяя музыканту адаптировать звучание инструмента под конкретное выступление или жанр музыки.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Возможность записи:</strong> с помощью пьезозвукоснимателя укулеле можно подключить непосредственно к различным устройствам для записи, что делает его отличным выбором для музыкантов, желающих записывать свою музыку в студии или дома.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Универсальность:</strong> электроукулеле может использоваться как в акустическом, так и в усиленном режиме, что предоставляет музыкантам гибкость в выборе стиля игры и условий выступления.</div></div>
                                                    </div>
                                                    <div class="io-content">
                                                        <strong>Для кого подходит укулеле с пьезозвукоснимателем:</strong>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Профессиональные музыканты:</strong> тем, кто регулярно выступает на сцене, будет полезна возможность легко подключаться к усилителям и PA системам.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Студийные артисты:</strong> музыканты, занимающиеся записью музыки, оценят чистый и управляемый вывод звука.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Любители экспериментов:</strong> музыканты, желающие экспериментировать с различными эффектами и звуковыми обработками, найдут в таком инструменте идеального помощника.</div></div>
                                                    </div>
                                                    <div class="io-content">
                                                        Выбор укулеле с пьезозвукоснимателем — это отличный способ расширить возможности музыкальной выразительности и удобство выступлений. Это делает инструмент универсальным выбором для музыкантов, стремящихся максимально использовать свои творческие и профессиональные возможности.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingThreeB">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseThreeB" aria-expanded="false" aria-controls="courseAccordion-collapseThreeB">
                                                    Как настроить укулеле
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseThreeB" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingThreeB" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-content">
                                                        <strong>Настройка укулеле критически важна для качества звучания. Используйте следующие шаги для настройки с помощью электронного тюнера или мобильного приложения:</strong>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Включите тюнер</strong> и установите его на режим "Uke" если таковой имеется.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Щипните струну</strong> и дайте тюнеру определить её ноту.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Настройте каждую струну</strong> в соответствии с стандартной настройкой для вашего типа укулеле (обычно это G-C-E-A для сопрано, концерта, и тенора).</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Повторяйте,</strong> пока каждая струна не будет точно настроена.</div></div>
                                                    </div>
                                                    <div class="io-content">
                                                        Регулярная проверка настройки перед игрой поможет поддерживать правильное звучание инструмента.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingThreeC">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseThreeC" aria-expanded="false" aria-controls="courseAccordion-collapseThreeC">
                                                    Уход за укулеле
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseThreeC" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingThreeC" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-content">
                                                        <strong>Чтобы ваше укулеле служило долго и надежно, следуйте этим советам по уходу:</strong>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Чистка:</strong> регулярно протирайте укулеле мягкой сухой тканью, чтобы убрать пыль и отпечатки пальцев. Используйте специальные средства для чистки инструментов, если это необходимо.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Хранение:</strong> храните укулеле в кейсе или мягком чехле, чтобы защитить его от пыли и повреждений. Избегайте оставлять инструмент в местах с прямыми солнечными лучами или рядом с источниками тепла.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Избегание экстремальных условий:</strong> не оставляйте укулеле в очень влажных или сухих условиях. Использование увлажнителя в сухом климате может помочь предотвратить растрескивание дерева.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Регулярная проверка:</strong> периодически проверяйте состояние струн, бриджа, и грифа на предмет повреждений или износа и заменяйте струны по мере необходимости.</div></div>
                                                    </div>
                                                    <div class="io-content">
                                                        Тщательный уход позволит вашей укулеле оставаться в отличном состоянии и сохранять прекрасное звучание на многие годы.
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
                                                        <div><span><strong>2 урока в неделю</strong> необходимо для достижения быстрых и хороших результатов.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Регулярные уроки без перерывов</strong> способствуют быстрому освоению материала и развитию исполнительских умений на укулеле.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Необходимость самостоятельной практики дома и выполнения заданий учителя</strong> является обязательным для всех учеников.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Обучение требует длительного времени</strong> и важно быть к этому готовым.</span></div>
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
                                                            <p><strong>Домашние упражнения</strong> критически важны для закрепления того, что было изучено во время уроков.</p>
                                                            <p><strong>Рекомендуется ежедневно уделять практике на укулеле не менее 20 минут,</strong> особенно в начале обучения.</p>
                                                            <p><strong>Регулярные самостоятельные занятия не только доставляют удовольствие, но и помогают достичь высоких результатов в игре.</strong></p>
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
                                                        <div><span>Для успешного начала онлайн-урока подготовьте устройство (ноутбук или планшет), подключите наушники и проверьте связь и качество звука. Помогите вашему ребенку в подключении укулеле, если оно оснащено электронными компонентами.</span></div>
                                                    </div>
                                                    <div class="io-heart">
                                                        <div><span>Поддерживайте регулярность и систематичность в домашних занятиях вашего ребенка.</span></div>
                                                    </div>
                                                    <div class="io-heart">
                                                        <div><span>Будьте терпеливы и поддерживайте стремления ребенка к мастерству в игре на укулеле.</span></div>
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
                                                                
                                                                <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-22-144023.png" type="image/jpeg">
                                                                <img src="/wp-content/uploads/2024/04/Screenshot-2024-04-22-144023.png" alt="">
                                                            </picture>
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            
                                                            <picture>
                                                                
                                                                <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-22-144005.png" type="image/jpeg">
                                                                <img src="/wp-content/uploads/2024/04/Screenshot-2024-04-22-144005.png" alt="">
                                                            </picture>
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            
                                                            <picture>
                                                                
                                                                <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-22-143952.png" type="image/jpeg">
                                                                <img src="/wp-content/uploads/2024/04/Screenshot-2024-04-22-143952.png" alt="">
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
                                                            <p>Если вы хотите заказать пробный урок фортепиано, вам необходимо <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">записаться и оплатить</a> <span class="io-fw-semibold io-pink-main ioArrayToTextElementsDemo">$6</span>.<br>Пробный урок проходит индивидуально и длится <span class="io-fw-semibold">45 минут</span>.</p>
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
                                                            <span>Сроки использования купленных занятий не ограничены.</span>
                                                        </div> 
                                                        <div class="io-heart">
                                                            <span>Их можно использовать для любых доступных курсов. </span>
                                                        </div>
                                                        <div class="io-heart">
                                                            <span>Уроками могут пользоваться разные члены вашей семьи. </span>
                                                        </div>
                                                        <div class="io-heart">
                                                            <span>Обязательно уведомляйте нас о необходимости отмены занятия за 24 часа до его начала, иначе оно будет считаться проведенным.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="io-accordion__item accordion-item">
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
                                                                <a class="io-link" href="#detailCourseHeading-9" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Польза уроков фортепиано</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="io-text-wrapper">
                                                        <h2 id="detailCourseHeading-1">Обзор курса</h2>
                                                        <p>Курс фортепиано проходит онлайн и рассчитан для детей от 5 лет и старше, а также для взрослых без ограничения в возрасте. На нашем курсе фортепиано Вы научитесь играть классические, джазовые и современные фортепианные произведения, а также читать ноты любой сложности. Мы разработали программу курса по уровням сложности: начальный, средний и продвинутый. Для детей 5 - 6 лет предусмотрен подготовительный уровень.</p>
                                                        <p>Урок фортепиано длится 45 минут и проходит индивидуально. Педагоги говорят на русском и английском языке - студент может выбрать язык обучения. Что касается расписания уроков фортепиано онлайн, то администратор школы чутко и профессионально согласовывает с каждым студентом все пожелания и ограничения, в итоге график является удобным и гибким для каждого нашего ученика.</p>
                                                        <p>Мы преподаем онлайн уроки фортепиано на платформах Google Meet и Zoom. Педагоги фортепиано имеют высшее образование по специальности, большой опыт работы и многие из них являются действующими исполнителями.</p>
                                                        <p>Частота посещения уроков фортепиано онлайн согласовывается с каждым студентом. Мы рекомендуем посещать два урока в неделю. При таком посещении прогресс идет с достаточно быстрой скоростью, студент успевает сделать домашнее задание и не забывает материал предыдущего урока. </p>
                                                        <p>Участие студентов в конкурсах и концертах оценивается и поощряется наградами в виде грамот. Эти грамоты служат подтверждением их творческого развития. По завершению каждого модуля студент получает сертификат. Этот документ подтверждает, что студент успешно освоил и прошел определенный объем программы, показав при этом надлежащий уровень понимания и навыков. По окончанию каждого уровня студент получает диплом. Диплом свидетельствует о том, что студент обладает всеми необходимыми навыками и знаниями для игры на фортепиано, полученными в процессе обучения. </p>
                                                        <h2 id="detailCourseHeading-2">Описание методики</h2>
                                                        <p>Методика обучения игре на фортепиано является уникальной разработкой Монтессори центра, которая акцентируется на индивидуальных целях каждого студента.</p>
                                                        <p>В основе этого подхода лежит принцип установления конкретных целей для каждого студента в начале обучения. Эти цели представляют собой музыкальные произведения определенного уровня сложности, которые студент стремится научиться исполнять. Прогресс измеряется не традиционными экзаменами, а участием в концертах и музыкальных конкурсах. Это означает, что успешное исполнение музыкального произведения на концерте или конкурсе является важным элементом в обучении.</p>
                                                        <h2 id="detailCourseHeading-3">Преимущества методики</h2>
                                                        <p>Преимущества нашей методики включают следующее:</p>
                                                        <p>1. Ясные и понятные цели: установление конкретных целей помогает студентам понять, чего они стремятся достичь и дает им четкий путь к достижению этих целей.</p>
                                                        <p>2. Индивидуализированная продолжительность обучения: вместо того, чтобы устанавливать сроки, наша методика позволяет студентам продвигаться в обучении в своем темпе в зависимости от того, как быстро они достигают своих целей.</p>
                                                        <p>3. Практический опыт вместо экзаменов: участие в концертах и музыкальных конкурсах предлагает студентам возможность применять свои навыки на сцене, вместо того, чтобы просто сдавать экзамены. </p>
                                                        <p>4. Доступно для всех возрастов: наша методика подходит как для детей, так и для взрослых, делая обучение музыке доступным для всех.</p>
                                                        <p>5. Возможности для дальнейшего обучения: после достижения своих целей, студенты могут продолжать обучение и улучшать свои навыки, постоянно совершенствуя свое мастерство.</p>
                                                        <p>Одним из основных достоинств нашей методики является то, что она подходит для любого студента, независимо от его предыдущего опыта, возраста или музыкальных амбиций. Это делает ее идеальной как для новичков, которые только начинают свой путь в музыке, так и для опытных музыкантов, которые хотят углубить свое мастерство.</p>
                                                        <p>Подобный гибкий подход к обучению также облегчает процесс обучения, делая его более интересным и менее стрессовым. Вместо того, чтобы ощущать давление от необходимости проходить экзамены или придерживаться строгого расписания, студенты могут наслаждаться своим обучением, просто стараясь достичь своих целей.</p>
                                                        <p>В итоге, наша методика обучения игре на фортепиано подчеркивает важность индивидуального подхода и создает положительный и стимулирующий образовательный опыт. Она обеспечивает студентам не только навыки игры на фортепиано, но и уверенность, вдохновение и любовь к музыке, которые они смогут сохранить на всю жизнь.</p>
                                                        <h2 id="detailCourseHeading-4">Уровень “Подготовительный”</h2>
                                                        <p>Программа подготовительного уровня разработана для детей 5 - 6 лет. В таком раннем возрасте на уроках фортепиано онлайн студенты знакомятся с элементами нотной грамоты, инструментом, а самое главное - учатся играть уже с первых уроков. Правильная постановка рук и постепенное овладение навыками звукоизвлечения являются базовыми и важными в фортепианном исполнительстве. Чем раньше ребенок начнет учиться играть на фортепиано, тем больше времени у него будет, чтобы достичь высокого мастерства!</p>
                                                        <h2 id="detailCourseHeading-5">Уровень “Начальный”</h2>
                                                        <p>На начальном уровне студент полностью осваивает нотную грамоту и учится читать ноты, что является базовым элементом музыкального образования. Этот этап включает в себя понимание как ритма и мелодии, так и различных музыкальных символов, необходимых для точного воспроизведения музыкальных произведений. К концу курса студенты могут играть несложные классические и современные произведения, владея базовыми техническими навыками игры на фортепиано и справляясь с нотным текстом низкой и средней степени сложности.</p>
                                                        <h2 id="detailCourseHeading-6">Уровень “Средний”</h2>
                                                        <p>На среднем уровне курса студент приобретает все основные навыки игры на фортепиано, которые необходимы для исполнения более сложных произведений. Беглость, уверенность и музыкальность становятся ключевыми аспектами обучения на этом этапе. Уверенность в игре выражается в способности исполнителя контролировать каждое движение, что важно для достижения точности исполнения. Музыкальность включает в себя способность выразить эмоциональное содержание произведения, что делает исполнение более привлекательным и впечатляющим.</p>
                                                        <h2 id="detailCourseHeading-7">Уровень “Продвинутый”</h2>
                                                        <p>На продвинутом уровне студенты учатся играть сложные произведения, передавая замысел композитора, стиль и эпоху с помощью различных средств выразительности. В этом случае студенты изучают сложные виды техники, осваивают разнообразные приемы звукоизвлечения, а также приобретают навыки грамотной фразировки и динамики.</p>
                                                        <p>Так, к концу курса фортепиано, студенты уже могут играть сложные произведения, в полной мере передавая замысел композитора, стиль и эпоху. Они обладают способностью глубоко проникать в содержание произведения и воплощать его через своё исполнение, используя для этого все изученные технические приемы. В их распоряжении мощные средства выразительности - фразировка, широкий диапазон динамики, различные приемы звукоизвлечения и артикуляции пальцев.</p>
                                                        <p>За несколько лет обучения также происходит формирование глубокого понимания музыкальной теории и истории. Это дает возможность профессионально воспринимать и интерпретировать музыкальные произведения, учитывая контекст их создания. Важно отметить, что на этом уровне обучения студенты также учатся работать с музыкальной литературой, анализировать сложные нотные тексты, что важно для понимания и освоения сложного музыкального материала.</p>
                                                        <p>Наконец, на протяжении всего курса активно развиваются исполнительские навыки. Студенты становятся участниками различных концертов и конкурсов, где приобретают необходимый опыт публичных выступлений. Это способствует развитию сценической уверенности, умению контролировать волнение и адаптироваться к различным условиям исполнения. В итоге, после завершения обучения, студенты обладают всеми необходимыми навыками и знаниями для профессионального музицирования на фортепиано.</p>
                                                        <h2 id="detailCourseHeading-8">Цели курса </h2>
                                                        <p>Одной из ключевых целей является овладение техникой игры на фортепиано, замечательном музыкальном инструменте. Для начинающего музыканта она включает в себя развитие беглости пальцев, важнейшей составляющей, позволяющей играть сложные музыкальные произведения без замедления темпа или ошибок. Это требует тренировок и постоянного совершенствования. Кроме того, студенты учатся разнообразным приемам звукоизвлечения, которые дают возможность изменять звучание инструмента в зависимости от музыкального контекста и желаемого эффекта.</p>
                                                        <p>Еще одна важная задача обучения состоит в том, чтобы научиться читать ноты любой сложности. Это незаменимый навык для любого пианиста, позволяющий свободно взаимодействовать с музыкальной литературой и превращать нотный текст в звучание. При достижении этой цели наши студенты читают ноты любимых произведений и уже без учителя могут разобрать понравившуюся мелодию из просторов интернета! </p>
                                                        <p>Одна из целей обучения игре на фортепиано — это научиться исполнять произведения разных стилей, начиная от классических сонат и заканчивая джазовыми стандартами или эстрадными хитами. Также перед студентом ставится цель: научиться исполнять произведения разных стилей, начиная от классических сонат и заканчивая джазовыми стандартами или эстрадными хитами. Это помогает формированию исполнительской уверенности, учит управлять волнением и позволяет оценить свой прогресс в контексте других музыкантов. Конечно, цель не в соревновании, а в постоянном улучшении и радости от музицирования.</p>
                                                        <h2 id="detailCourseHeading-9">Польза уроков фортепиано</h2>
                                                        <p>Игра на фортепиано - это искусство, которое не только развивает музыкальные навыки, но и обогащает эмоциональный мир, стимулирует умственные процессы и способствует улучшению координации и моторики. Вот несколько интересных фактов об уроках фортепиано:</p>
                                                        <p><strong>Уроки фортепиано помогают развивать память:</strong><br>При игре на фортепиано активно используется память, особенно когда музыканту требуется запомнить длинные музыкальные произведения. Это тренирует мозг и помогает улучшить память не только в музыкальной деятельности, но и в других областях жизни.</p>
                                                        <p><strong>Обучение фортепиано может улучшить математические навыки:</strong><br>Исследования показывают, что музыкальное образование может улучшить математические навыки. Ноты, ритмы - все это требует основательного понимания математики.</p>
                                                        <p><strong>Уроки фортепиано развивают навыки мультизадачности:</strong><br>Игра на фортепиано требует одновременного выполнения нескольких действий - чтения нот, контроля за пальцами, слушания звука, следования за ритмом и так далее. Это тренирует мозг выполнять несколько задач одновременно.</p>
                                                        <p><strong>Уроки фортепиано могут быть терапевтическими:</strong><br>Музыка имеет глубокое воздействие на наше эмоциональное состояние. Игра на фортепиано может помочь в борьбе со стрессом, улучшении настроения и развитии эмоционального интеллекта.</p>
                                                        <p><strong>Фортепиано - один из немногих инструментов, который может играть мелодию и гармонию одновременно:</strong><br>Это делает его идеальным инструментом для соло-игры, а также для сопровождения других музыкантов и певцов.</p>
                                                        <p><strong>Уроки фортепиано могут улучшить социальные навыки:</strong><br>Само обучение игре на фортепиано может быть довольно индивидуальным процессом, однако по мере развития умения играть в ансамбле, дуэтах или оркестре требуют от студента умения работать в команде и понимания других.</p>
                                                        <p><strong>Уроки фортепиано онлайн поддерживают творческое мышление:</strong><br>От студентов требуется не только понимание музыки, но и интерпретация и творческое выражение. Они учатся воплощать свои эмоции и идеи через музыку.</p>
                                                        <p><strong>Игра на фортепиано может помочь улучшить координацию рук и глаз:</strong><br>Это требует слаженных действий рук и глаз при чтении музыкальной партитуры и одновременном игре на фортепиано. Это упражнение способствует улучшению моторики и координации.</p>
                                                        <p><strong>Уроки фортепиано развивают дисциплину и упорство:</strong><br>Обучение игре на фортепиано требует регулярной практики и упорства. Студенты учатся терпению и дисциплине, стремясь совершенствовать свои навыки.</p>
                                                        <p><strong>Обучение фортепиано прививает любовь к искусству:</strong><br>Уроки фортепиано не просто учат студентов играть на инструменте. Ученики знакомятся с историей музыки, жизнью знаменитых композиторов и обучаются восприятию музыки. Это может привести к глубокому уважению и любви к искусству в целом.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </section>
                                <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                                <section class="io-intersection io-course-accordion">
                                    <div class="io-accordion accordion" id="courseAccordionMain">
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingOne">
                                                <button class="io-accordion__button accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseOne" aria-expanded="true" aria-controls="courseAccordion-collapseOne">
                                                    Course Goals
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseOne" class="accordion-collapse collapse show" aria-labelledby="courseAccordion-headingOne" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body io-course-accordion__target">
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Technique</span>
                                                    </div>
                                                    <div class="io-content">
                                                        Master both basic and advanced ukulele playing techniques, learn the correct hand and finger positioning, and refine your performance skills.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Music Reading and Tablature</span>
                                                    </div>
                                                    <div class="io-content">
                                                        Learn to read music sheets and ukulele tablature, and understand musical symbols and terminology.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Mastery</span>
                                                    </div>
                                                    <div class="io-content">
                                                        Excel in performing various genres and styles used in ukulele music, enhance your technical skills and expressive techniques.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Stage Experience</span>
                                                    </div>
                                                    <div class="io-content">
                                                        Gain experience performing at cultural events and competitions, develop stage confidence and public performance skills, and learn to perform in an ensemble with other musicians.
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
                                                        Our ukulele teaching approach is based on unique developments from our school. The core principle is setting specific goals at the beginning of the course, each of which is achieved through sequential learning. The primary goal is to expertly perform melodies at school events.
                                                    </div>
                                                    <div class="io-fw-semibold io-fs-20 mt-1 mt-sm-0">
                                                        Advantages of Our Methodology
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Students are aware of the specific goals they are aiming for.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>The duration of the course depends on the individual pace of achieving set goals, not on strict time frames.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Instead of exams, students demonstrate their skills at musical performances.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Our methodology is suitable for both beginners and experienced musicians.</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>After achieving initial goals, students can continue their education to further deepen their skills.</span>
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
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-guitar.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>A ukulele</strong> is necessary for online lessons.</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-laptop.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>A device with a camera and microphone</strong> is required for online ukulele classes.</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-headphones.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>Use headphones</strong> to improve sound quality during the lesson.</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-note.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>We will send you music sheets and other learning materials in advance if needed.</strong> You will need to print them before the class or open them on your device's screen.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingTwoB">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseTwoB" aria-expanded="false" aria-controls="courseAccordion-collapseTwoB">
                                                    How to Choose the Right Ukulele
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseTwoB" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingTwoB" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-content">
                                                        <strong>Choosing the type of ukulele is important, as different sizes and shapes of the instrument produce various sounds and offer different levels of playability. The main types of ukuleles include:</strong>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Soprano</strong> - this is the smallest and most traditional size of ukulele, often associated with the classic Hawaiian sound. It is ideal for children and beginners due to its small size and ease of play. The soprano has a bright and cheerful sound.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Concert</strong> - slightly larger than the soprano, the concert ukulele offers a louder and fuller sound. This size also provides more finger space, which is convenient for adult beginners.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Tenor</strong> - the tenor ukulele is even larger and produces a richer and deeper sound. Thanks to its larger size, it allows performers with larger hands to feel more comfortable. Tenors are often chosen by professional musicians.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Baritone</strong> - the largest type of ukulele, the baritone has a deep, rich tone that is more reminiscent of a guitar's sound. The tuning of this ukulele is different from other types, matching the last four strings of a classical guitar.</div></div>
                                                    </div>
                                                    <div class="io-content">
                                                        Choosing the type of ukulele depends on musical preferences, hand size, and desired sound. For children, it is best to start learning with a soprano ukulele.
                                                    </div>
                                                    <div class="io-content">
                                                        In addition to the types mentioned above, there are ukuleles equipped with piezo pickups: an instrument with an electronic system that allows the sound to be amplified through an amplifier. This feature makes such ukuleles an ideal choice for musicians who plan to perform in front of an audience, participate in concerts, or festivals.
                                                    </div>
                                                    <div class="io-content">
                                                        <strong>Features of ukuleles with piezo pickups:</strong>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Sound amplification:</strong> The piezo pickup, usually placed under the bridge, converts the string vibrations into an electrical signal, which can then be amplified through an amplifier. This allows the ukulele to sound louder without losing sound quality.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Sound control:</strong> Most electric ukuleles are equipped with a preamplifier with volume and tone controls, allowing the musician to adapt the sound of the instrument to a specific performance or music genre.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Recording capability:</strong> With a piezo pickup, the ukulele can be directly connected to various recording devices, making it an excellent choice for musicians who want to record their music in a studio or at home.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Versatility:</strong> An electric ukulele can be used in both acoustic and amplified modes, giving musicians flexibility in choosing their playing style and performance conditions.</div></div>
                                                    </div>
                                                    <div class="io-content">
                                                        <strong>Who is the ukulele with piezo pickup suitable for:</strong>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Professional musicians:</strong> Those who regularly perform on stage will benefit from the ability to easily connect to amplifiers and PA systems.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Studio artists:</strong> Musicians involved in recording music will appreciate the clean and controllable sound output.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Experiment lovers:</strong> Musicians who want to experiment with different effects and sound processing will find this instrument to be an ideal helper.</div></div>
                                                    </div>
                                                    <div class="io-content">
                                                        Choosing a ukulele with a piezo pickup is a great way to expand the possibilities of musical expression and the convenience of performances. This makes the instrument a versatile choice for musicians looking to maximize their creative and professional opportunities.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingThreeB">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseThreeB" aria-expanded="false" aria-controls="courseAccordion-collapseThreeB">
                                                    Tuning your ukulele
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseThreeB" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingThreeB" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-content">
                                                        <strong>Tuning your ukulele is critical for ensuring good sound quality. Use the following steps to tune your instrument using an electronic tuner or mobile app:</strong>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Turn on the tuner</strong> and set it to "Uke" mode if available.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Pluck the string</strong> and allow the tuner to detect its pitch.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Adjust each string</strong> according to the standard tuning for your type of ukulele (typically G-C-E-A for soprano, concert, and tenor).</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Repeat</strong> until each string is precisely tuned.</div></div>
                                                    </div>
                                                    <div class="io-content">
                                                        Regularly checking the tuning before playing will help maintain the correct sound of your instrument.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingThreeC">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseThreeC" aria-expanded="false" aria-controls="courseAccordion-collapseThreeC">
                                                    Caring for your ukulele
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseThreeC" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingThreeC" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-content">
                                                        <strong>To ensure your ukulele lasts long and remains reliable, follow these care tips:</strong>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Cleaning:</strong> Regularly wipe your ukulele with a soft dry cloth to remove dust and fingerprints. Use special instrument cleaning products if necessary.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Storage:</strong> Store your ukulele in a case or soft cover to protect it from dust and damage. Avoid leaving the instrument in places with direct sunlight or near heat sources.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Avoid extreme conditions:</strong> Do not leave your ukulele in very humid or dry conditions. Using a humidifier in a dry climate can help prevent the wood from cracking.</div></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><div><strong>Regular checks:</strong> Periodically inspect the condition of the strings, bridge, and neck for damage or wear and replace the strings as necessary.</div></div>
                                                    </div>
                                                    <div class="io-content">
                                                        Thorough care will keep your ukulele in excellent condition and preserve its beautiful sound for many years.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingSix">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseSix" aria-expanded="false" aria-controls="courseAccordion-collapseSix">
                                                    Time investment for learning
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseSix" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingSix" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-check">
                                                        <div><span><strong>2 lessons per week</strong> are recommended to achieve fast and good results.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Regular lessons without breaks</strong> contribute to quick mastery of the material and development of performance skills on the ukulele.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>The need for independent practice at home and completion of teacher assignments</strong> is mandatory for all students.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Learning requires a long time</strong> and it is important to be prepared for this.</span></div>
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
                                                            <p><strong>Home exercises</strong> are critical for reinforcing what has been learned during the lessons.</p>
                                                            <p><strong>It is recommended to practice the ukulele daily for at least 20 minutes,</strong> especially at the beginning of your training.</p>
                                                            <p><strong>Regular individual practice is not only enjoyable but also aids in achieving high performance levels in playing.</strong></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingSeven">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseSeven" aria-expanded="false" aria-controls="courseAccordion-collapseSeven">
                                                    Parental Guidance
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseSeven" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingSeven" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-heart">
                                                        <div><span>To ensure a successful start to an online lesson, prepare the device (laptop or tablet), connect headphones, and check the connection and sound quality. Assist your child in connecting the ukulele, especially if it has electronic components.</span></div>
                                                    </div>
                                                    <div class="io-heart">
                                                        <div><span>Maintain regularity and systematization in your child’s home studies.</span></div>
                                                    </div>
                                                    <div class="io-heart">
                                                        <div><span>Be patient and support your child’s aspirations to master playing the ukulele.</span></div>
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
                                                                
                                                                <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-22-144023.png" type="image/jpeg">
                                                                <img src="/wp-content/uploads/2024/04/Screenshot-2024-04-22-144023.png" alt="">
                                                            </picture>
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            
                                                            <picture>
                                                                
                                                                <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-22-144005.png" type="image/jpeg">
                                                                <img src="/wp-content/uploads/2024/04/Screenshot-2024-04-22-144005.png" alt="">
                                                            </picture>
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            
                                                            <picture>
                                                                
                                                                <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-22-143952.png" type="image/jpeg">
                                                                <img src="/wp-content/uploads/2024/04/Screenshot-2024-04-22-143952.png" alt="">
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
                                                            <p>If you would like to book a trial piano lesson, you need <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">to schedule and pay</a> <span class="io-fw-semibold io-pink-main ioArrayToTextElementsDemo">$6</span>.<br>The trial lesson is conducted individually and lasts for <span class="io-fw-semibold">45 minutes</span>.</p>
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
                                                            <span>The validity of the purchased lessons is unlimited.</span>
                                                        </div>
                                                        <div class="io-heart">
                                                            <span>They can be used for any available courses.</span>
                                                        </div>
                                                        <div class="io-heart">
                                                            <span>Different family members can use the lessons.</span>
                                                        </div>
                                                        <div class="io-heart">
                                                            <span>Please notify us 24 hours before the start of a lesson if you need to cancel, otherwise, it will be considered conducted.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="io-accordion__item accordion-item">
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
                                                                <a class="io-link" href="#detailCourseHeading-9" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Benefits of Piano Lessons</a>
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
                                                        <p>This piano course is conducted online and is designed for children aged 5 and above, as well as adults of all ages. In our piano course, you will learn to play classical, jazz, and contemporary piano pieces, as well as read sheet music of any complexity. We have developed a structured program with three levels of difficulty: Beginner, Intermediate, and Advanced. For children aged 5-6, we offer a preparatory level.</p>
                                                        <p>Each piano lesson lasts 45 minutes and is conducted one-on-one. Our instructors are fluent in both Russian and English, allowing students to choose their preferred language of instruction. As for the scheduling of online piano lessons, our school's administrators work closely and professionally with each student to accommodate their preferences and constraints, resulting in a convenient and flexible schedule for every learner.</p>
                                                        <p>We provide online piano lessons through platforms like Google Meet and Zoom. Our piano instructors hold advanced degrees in their field, possess extensive teaching experience, and many are active performers.</p>
                                                        <p>The frequency of online piano lesson attendance is tailored to each student's needs. We recommend attending two lessons per week, as this pace ensures steady progress, allows students to complete their homework, and reinforces the material covered in previous lessons.</p>
                                                        <p>Student participation in competitions and concerts is encouraged and rewarded with certificates and awards. These certificates serve as recognition of their creative development. Upon completion of each module, students receive a certificate confirming their successful mastery of a specific program segment, demonstrating a proper level of understanding and skill. At the end of each level, students are awarded a diploma, signifying their possession of all the necessary skills and knowledge for piano playing acquired during their course of study.</p>
                                                        <h2 id="detailCourseHeading-2">Methodology Description</h2>
                                                        <p>The piano teaching methodology employed by the Montessori Center is a unique approach that focuses on the individual goals of each student.</p>
                                                        <p>At the core of this approach is the principle of setting specific goals for each student at the beginning of their learning journey. These goals take the form of musical pieces of varying levels of complexity that the student aspires to master. Progress is measured not through traditional exams but by participating in concerts and music competitions. This means that successfully performing a musical piece in a concert or competition is a crucial element of the learning process.</p>
                                                        <h2 id="detailCourseHeading-3">Advantages of the Methodology</h2>
                                                        <p>The advantages of our methodology include the following:</p>
                                                        <p>1. Clear and Understandable Goals: Establishing specific goals helps students understand what they are aiming to achieve and provides them with a clear path to reaching those goals.</p>
                                                        <p>2. Individualized Learning Duration: Instead of imposing fixed timelines, our methodology allows students to progress at their own pace, depending on how quickly they achieve their goals.</p>
                                                        <p>3. Practical Experience Instead of Exams: Participating in concerts and music competitions offers students the opportunity to apply their skills on stage, rather than just taking exams.</p>
                                                        <p>4. Suitable for All Ages: Our methodology is suitable for both children and adults, making music education accessible to everyone.</p>
                                                        <p>5. Opportunities for Further Learning: After achieving their initial goals, students can continue their education and improve their skills, constantly refining their mastery.</p>
                                                        <p>One of the key strengths of our methodology is its adaptability to any student, regardless of their prior experience, age, or musical ambitions. This makes it ideal for beginners who are just starting their musical journey and for experienced musicians looking to deepen their expertise.</p>
                                                        <p>Such a flexible approach to learning also eases the learning process, making it more enjoyable and less stressful. Instead of feeling pressured to pass exams or adhere to a strict schedule, students can relish their learning experience, simply striving to achieve their goals.</p>
                                                        <p>Ultimately, our piano teaching methodology emphasizes the importance of an individualized approach and creates a positive and stimulating educational experience. It equips students not only with piano-playing skills but also with confidence, inspiration, and a love for music that they can carry with them throughout their lives.</p>
                                                        <h2 id="detailCourseHeading-4">Preparatory Level</h2>
                                                        <p>The preparatory level program is designed for children aged 5-6. At such an early age in online piano lessons, students become acquainted with the fundamentals of music notation, the instrument itself, and most importantly, they begin playing from the very first lessons. Proper hand placement and gradual mastery of sound production techniques are the foundational and vital aspects of piano performance. The earlier a child starts learning to play the piano, the more time they have to achieve a high level of mastery!</p>
                                                        <h2 id="detailCourseHeading-5">Beginner Level</h2>
                                                        <p>At the beginner level, students fully grasp music notation and learn to read sheet music, which is a fundamental element of musical education. This stage encompasses an understanding of rhythm, melody, and various musical symbols essential for accurately reproducing musical compositions. By the end of this course, students can play uncomplicated classical and contemporary pieces, equipped with basic technical piano-playing skills and the ability to handle sheet music of low to moderate complexity.</p>
                                                        <h2 id="detailCourseHeading-6">Intermediate Level</h2>
                                                        <p>At the intermediate level of the course, students acquire all the core piano-playing skills necessary for performing more complex pieces. Fluency, confidence, and musicality become key aspects of their learning journey. Confidence in playing is expressed through the performer's ability to control every movement, which is vital for achieving precision in performance. Musicality involves the ability to express the emotional content of a piece, making the performance more engaging and impressive.</p>
                                                        <h2 id="detailCourseHeading-7">Advanced Level</h2>
                                                        <p>At the advanced level, students learn to play complex compositions, conveying the composer's intentions, style, and era through various expressive techniques. During this stage, students study advanced techniques, master various sound-producing methods, and acquire skills in proper phrasing and dynamics.</p>
                                                        <p>By the end of the piano course, students can perform complex pieces, fully conveying the composer's intentions, style, and era. They possess the ability to deeply delve into the content of a composition and embody it through their performance, utilizing all the technical techniques they have learned. They have at their disposal powerful means of expression, including phrasing, a wide dynamic range, various finger articulations, and more.</p>
                                                        <p>Over the course of several years, students also develop a profound understanding of music theory and history. This enables them to professionally perceive and interpret musical compositions, considering the context of their creation. It's important to note that at this level of education, students also learn to work with musical literature and analyze complex sheet music, which is crucial for comprehending and mastering challenging musical material.</p>
                                                        <p>Finally, throughout the course, performance skills are actively developed. Students participate in various concerts and competitions, gaining the necessary experience in public performance. This contributes to the development of stage confidence, the ability to control nervousness, and adaptability to different performance conditions. Ultimately, upon completion of their education, students possess all the necessary skills and knowledge for professional piano performance.</p>
                                                        <h2 id="detailCourseHeading-8">Course Objectives</h2>
                                                        <p>One of the key objectives is to master the technique of playing the piano, a wonderful musical instrument. For a beginner musician, this includes developing finger agility, a crucial component that allows for the performance of complex musical compositions without slowing down the tempo or making mistakes. This requires practice and continuous refinement. In addition, students learn various sound-producing techniques, which enable them to alter the instrument's sound according to the musical context and desired effect.</p>
                                                        <p>Another important goal of the course is to teach students to read sheet music of any complexity. This indispensable skill for any pianist enables them to interact freely with musical literature and transform the written notes into music. Upon achieving this goal, our students can read the notes of their favorite compositions and independently decipher melodies they come across on the internet, even without a teacher!</p>
                                                        <p>One of the goals of learning to play the piano is to become proficient in performing works of various styles, ranging from classical sonatas to jazz standards or popular hits. Students are also challenged to explore and perform pieces of different styles, starting from classical sonatas and culminating in jazz standards or popular hits. This helps in building performance confidence, teaches how to manage stage anxiety, and allows students to assess their progress in the context of other musicians. Of course, the goal is not competition but continuous improvement and the joy of making music.</p>
                                                        <h2 id="detailCourseHeading-9">Benefits of Piano Lessons</h2>
                                                        <p>Playing the piano is an art form that not only develops musical skills but also enriches one's emotional world, stimulates mental processes, and contributes to improved coordination and motor skills. Here are some interesting facts about piano lessons:</p>
                                                        <p><strong>Piano lessons help develop memory:</strong><br>Playing the piano actively engages memory, especially when musicians need to memorize lengthy musical compositions. This trains the brain and enhances memory, not only in musical activities but also in other areas of life.</p>
                                                        <p><strong>Piano education can enhance mathematical skills:</strong><br>Research shows that musical education can improve mathematical skills. Notes and rhythms all require a fundamental understanding of mathematics.</p>
                                                        <p><strong>Piano lessons develop multitasking skills:</strong><br>Playing the piano requires simultaneous actions like reading music, finger control, listening to the sound, keeping the rhythm, and more. This trains the brain to perform multiple tasks at once.</p>
                                                        <p><strong>Piano lessons can be therapeutic:</strong><br>Music has a profound impact on our emotional state. Playing the piano can help combat stress, improve mood, and enhance emotional intelligence.</p>
                                                        <p><strong>Piano is one of the few instruments that can play melody and harmony simultaneously:</strong><br>This makes it an ideal instrument for solo performance as well as accompaniment for other musicians and singers.</p>
                                                        <p><strong>Piano lessons improve social skills:</strong><br>While learning to play the piano can be an individual process, as students progress, they often have opportunities to play in ensembles, duets, or orchestras. This teaches teamwork and empathy.</p>
                                                        <p><strong>Online piano lessons support creative thinking:</strong><br>Students are not only required to understand music but also to interpret and express themselves creatively through it.</p>
                                                        <p><strong>Playing the piano can improve hand-eye coordination:</strong><br>It involves coordinated hand and eye movements when reading sheet music and playing the piano simultaneously, which can enhance motor skills and coordination.</p>
                                                        <p><strong>Piano lessons develop discipline and perseverance:</strong><br>Learning to play the piano demands regular practice and persistence. Students learn patience and discipline while striving to improve their skills.</p>
                                                        <p><strong>Piano education fosters a love for the arts:</strong><br>Piano lessons not only teach students to play an instrument but also introduce them to the history of music, the lives of famous composers, and an appreciation for the art form as a whole. This can lead to a deep respect and love for the arts in general.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> -->
                                    </div>
                                </section>
                                <?php } ?>
                                <?php io_news(); ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="<?php echo $ioTab2; ?>" role="tabpanel" aria-labelledby="<?php echo $ioTab2; ?>-tab">
                            <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                            <section class="io-intersection io-course-lesson">
                                <h2 class="io-heading-2 io-course-lesson__heading">Как проходят уроки укулеле</h2>
                                <div class="io-video">
                                    <p>Смотреть видео урока</p>
                                    <button class="io-video__lightbox io-video__button" type="button" data-video-id="3TiYGxOQDYw"></button>
                                </div>
                                <div class="io-steps__wrapper">
                                    <div class="io-steps">
                                        <div class="io-steps__number">1</div>
                                        <div class="io-steps__title">Техническая информация</div>
                                        <div class="io-steps__dots"></div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">Оборудование:</span> вам понадобится укулеле, а также компьютер, планшет или смартфон с доступом в интернет и камерой для видеозвонков.</p>
                                            <p><span class="io-fw-semibold">Интернет-соединение:</span> убедитесь, что ваше интернет-соединение стабильно и быстро, так как это важно для качества видеоурока.</p>
                                            <p><span class="io-fw-semibold">Видеоконференц-платформа:</span> мы используем для проведения онлайн уроков укулеле <a href="https://zoom.us/ru/download" target="_blank" class="io-purple-main io-link">Zoom</a> или <a href="https://meet.google.com" target="_blank" class="io-purple-main io-link">Google Meet</a>. Пожалуйста, загрузите и установите необходимое приложение на ваше устройство, если оно у вас еще не установлено.</p>
                                            <p><span class="io-fw-semibold">Звук:</span> используйте наушники для лучшего качества звука. Это поможет уменьшить фоновый шум и улучшить коммуникацию с вашим преподавателем.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">2</div>
                                        <div class="io-steps__title">Подготовка к уроку</div>
                                        <div class="io-steps__dots"></div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">Ссылка на урок</span> будет отправлена вам заранее по электронной почте или через мессенджер.</p>
                                            <p><span class="io-fw-semibold">Ноты для урока,</span> если они необходимы, также будут отправлены вам заранее. Распечатайте ноты до начала урока.</p>
                                            <p><span class="io-fw-semibold">Установите ваше устройство</span> таким образом, чтобы преподаватель мог видеть не только ваше лицо, но и руки и инструмент.</p>
                                            <p><span class="io-fw-semibold">Войдите в приложение</span> Zoom или Google Meet по ссылке на урок за несколько минут до его начала, чтобы у вас была возможность решить технические неполадки, если они возникнут.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">3</div>
                                        <div class="io-steps__title">Во время урока</div>
                                        <div class="io-steps__dots"></div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">Инструкции и обратная связь:</span> ваш преподаватель по укулеле даст вам конкретные указания по правильной посадке, выполнению упражнений и освоению первых музыкальных мелодий.</p>
                                            <p><span class="io-fw-semibold">Вопросы:</span> не стесняйтесь задавать вопросы вашему учителю в любой момент урока, если что-то вам непонятно.</p>
                                            <p><span class="io-fw-semibold">Практика:</span> большая часть урока будет посвящена практическому исполнению. Вы будете играть, а преподаватель будет наблюдать за вами, слушать и демонстрировать на собственном примере.</p>
                                            <p><span class="io-fw-semibold">Демонстрация игры преподавателем:</span> ваш преподаватель будет демонстрировать определенные фрагменты, помогая вам лучше понять, как их нужно исполнять.</p>
                                            <p><span class="io-fw-semibold">Завершение урока:</span> к концу урока вы и ваш преподаватель обсудите пройденный материал, домашнее задание и план на следующий урок.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">4</div>
                                        <div class="io-steps__title">После урока</div>
                                        <div class="io-steps__empty">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p>Учитель предоставит вам учебные материалы для самостоятельной работы дома: ноты, записи, учебники, ссылки и прочее, что поможет вам практиковаться до следующего урока.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps io-steps--last">
                                        <div class="io-steps__empty">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p class="io-purple-main io-fs-18 io-fw-semibold">Мы гарантируем, что онлайн-уроки укулеле удобны и эффективны. Обучение в Монтессори центре будет захватывающим и продуктивным!</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                            <section class="io-intersection io-course-lesson">
                                <h2 class="io-heading-2 io-course-lesson__heading">How Ukulele Lessons Are Conducted</h2>
                                <div class="io-video">
                                    <button class="io-video__lightbox io-video__button io-button__large" type="button" data-video-id="3TiYGxOQDYw">Watch Lesson Video</button>
                                </div>
                                <div class="io-steps__wrapper">
                                    <div class="io-steps">
                                        <div class="io-steps__number">1</div>
                                        <div class="io-steps__title">Technical Information</div>
                                        <div class="io-steps__dots"></div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">Equipment:</span> You will need a ukulele as well as a computer, tablet, or smartphone with internet access and a camera for video calls.</p>
                                            <p><span class="io-fw-semibold">Internet Connection:</span> Ensure your internet connection is stable and fast, as this is crucial for the quality of the video lesson.</p>
                                            <p><span class="io-fw-semibold">Video Conference Platform:</span> We use Zoom or Google Meet for conducting online ukulele lessons. Please download and install the necessary app on your device if it's not already installed.</p>
                                            <p><span class="io-fw-semibold">Sound:</span> Use headphones for better sound quality. This will help minimize background noise and improve communication with your instructor.</p>
                                        </div>
                                    </div>

                                    <div class="io-steps">
                                        <div class="io-steps__number">2</div>
                                        <div class="io-steps__title">Preparation for the Lesson</div>
                                        <div class="io-steps__dots"></div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p>The link to the lesson will be sent to you in advance via email or messenger.</p>
                                            <p>Sheet music for the lesson, if needed, will also be sent to you beforehand.</p>
                                            <p>Print out the sheet music before the lesson begins.</p>
                                            <p>Set up your device so that the instructor can see not only your face but also your hands and the instrument.</p>
                                            <p>Log into the Zoom or Google Meet app using the lesson link a few minutes before the start time to address any technical issues that might arise.</p>
                                        </div>
                                    </div>

                                    <div class="io-steps">
                                        <div class="io-steps__number">3</div>
                                        <div class="io-steps__title">During the Lesson</div>
                                        <div class="io-steps__dots"></div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">Instructions and Feedback:</span> Your ukulele instructor will give you specific directions on proper posture, executing exercises, and mastering initial musical melodies.</p>
                                            <p><span class="io-fw-semibold">Questions:</span> Feel free to ask your teacher any questions at any time during the lesson if something is unclear.</p>
                                            <p><span class="io-fw-semibold">Practice:</span> A major part of the lesson will be dedicated to practical playing. You will play while the instructor observes you, listens, and demonstrates by example.</p>
                                            <p><span class="io-fw-semibold">Instructor Demonstration:</span> Your teacher will demonstrate specific segments, helping you better understand how they should be performed.</p>
                                            <p><span class="io-fw-semibold">Lesson Conclusion:</span> At the end of the lesson, you and your teacher will discuss the material covered, homework assignments, and plans for the next lesson.</p>
                                        </div>
                                    </div>

                                    <div class="io-steps">
                                        <div class="io-steps__number">4</div>
                                        <div class="io-steps__title">After the Lesson</div>
                                        <div class="io-steps__empty">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p>Your teacher will provide you with study materials for independent practice at home: sheet music, recordings, textbooks, links, and other resources that will help you prepare for your next lesson.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps io-steps--last">
                                        <div class="io-steps__empty">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p class="io-purple-main io-fs-18 io-fw-semibold">We guarantee that online ukulele lessons are convenient and effective. Learning at the Montessori Center will be exciting and productive!</p>
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
                                <h2 class="io-heading-2">Программа курса укулеле</h2>
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
                                                    <p>Возраст: от 5 лет</p>
                                                </div>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-none d-sm-flex">
                                                <span>Смотреть диплом</span>
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123729.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123729.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--preschool">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Модули</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>п1</span>
                                                <p>Овладение приёмами звукоизвлечения. Исполнение первых простых мелодий.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>п2</span>
                                                <p>Приобретение навыков ритмичной игры и техник аккомпанемента.</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>Смотреть диплом</span>
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123729.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123729.png" alt="">
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
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123741.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123741.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--light">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Модули</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>1</span>
                                                <p>Работа над постановкой рук и изучение приемов звукоизвлечения. </p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>2</span>
                                                <p>Приобретение и развитие ритмических навыков и техник аккомпанемента.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>3</span>
                                                <p>Изучение нотной грамоты (с 8 лет - тональности, гармония, аккорды). Исполнение простых мелодий.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>4</span>
                                                <p>Исполнение композиций различных стилей музыки на укулеле.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>5</span>
                                                <p>Овладение упражнениями на скорость и чистоту звучания.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>6</span>
                                                <p>Подготовка и выступление на концерте.</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>Смотреть диплом</span>
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123741.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123741.png" alt="">
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
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123754.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123754.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--medium">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Модули</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>7</span>
                                                <p>Развитие навыков интерпретации музыкальных произведений.</p>    
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>8</span>
                                                <p>Изучение произведений средней сложности.</p>    
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>9</span>
                                                <p>Игра в ансамбле и сопровождение. Исполнение ансамблевых композиций. </p>    
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>10</span>
                                                <p>Изучение и исполнение сольных и ансамблевых пьес на концерте или конкурсе.</p>    
                                            </div>
                                            
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>Смотреть диплом</span>
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123754.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123754.png" alt="">
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
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123807.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123807.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--hard">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Модули</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>11</span>
                                                <p>Овладение упражнениями на скорость и чистоту звучания.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>12</span>
                                                <p>Исполнение сложных мелодий и песен.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>13</span>
                                                <p>Приобретение навыков импровизации. Игра в ансамбле и сопровождение. </p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>14</span>
                                                <p>Подготовка к концертному выступлению, репетиции и финальный концерт.</p>
                                            </div>
                                            
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>Смотреть диплом</span>
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123807.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123807.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="io-text-wrapper">
                                    <p>Курс обучения игре на укулеле создан для учеников начиная с 5 лет и не предполагает верхнего возрастного предела для начинающих. Обучение структурировано на три основных уровня: для новичков, для продолжающих и для продвинутых исполнителей. После завершения любого из этих этапов обучения учеником выдается соответствующий сертификат. Новички приступают к занятиям без предварительных навыков, осваивая азы с самого начала. Для перехода к занятиям среднего и продвинутого уровня требуется наличие базового опыта игры. Младшие школьники, с 5 лет, могут начинать обучение с подготовительного курса, цель которого - заложить фундаментальные основы музыкальности и техники игры на укулеле.</p>
                                    <p class="io-purple-main io-fs-18 io-fw-semibold">Начните обучение! Для этого запишитесь на <a type="button" class="io-purple-main io-fw-semibold io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">пробный урок</a>!</p>
                                </div>
                            </section>
                            <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                            <section class="io-intersection io-course-programs">
                                <h2 class="io-heading-2">Ukulele Course Program</h2>
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
                                                    <p> Age: 5 years and older</p>
                                                </div>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-none d-sm-flex">
                                                <span>View Diploma</span>
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123729.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123729.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--preschool">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Modules</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>p1</span>
                                                <p>Mastering sound production techniques. Playing first simple melodies.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>p2</span>
                                                <p>Acquiring skills in rhythmic playing and accompaniment techniques.</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>View Diploma</span>
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123729.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123729.png" alt="">
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
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123741.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123741.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--light">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Modules</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>1</span>
                                                <p>Working on hand positioning and learning sound production techniques.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>2</span>
                                                <p>Acquiring and developing rhythmic skills and accompaniment techniques.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>3</span>
                                                <p>Studying musical notation (from 8 years old - scales, harmony, chords). Playing simple melodies.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>4</span>
                                                <p>Performing pieces from various music styles on the ukulele.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>5</span>
                                                <p>Mastering exercises for speed and clarity of sound.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>6</span>
                                                <p>Preparing and performing in a concert.</p>
                                            </div>
                                            
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>View Diploma</span>
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123741.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123741.png" alt="">
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
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123754.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123754.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--medium">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Modules</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>7</span>
                                                <p>Developing skills in interpreting musical works.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>8</span>
                                                <p>Studying pieces of intermediate complexity.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>9</span>
                                                <p>Ensemble playing and accompaniment. Performing ensemble compositions.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>10</span>
                                                <p>Studying and performing solo and ensemble pieces at concerts or competitions.</p>
                                            </div>
                                            
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>View Diploma</span>
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123754.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123754.png" alt="">
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
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123807.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123807.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--hard">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Modules</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>11</span>
                                                <p>Mastering exercises for speed and clarity of sound.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>12</span>
                                                <p>Performing complex melodies and songs.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>13</span>
                                                <p>Acquiring improvisation skills. Ensemble playing and accompaniment.</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>14</span>
                                                <p>Preparing for a concert performance, rehearsals, and the final concert.</p>
                                            </div>
                                            
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>View Diploma</span>
                                                <picture>
                                                    
                                                    <source srcset="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123807.png" type="image/png">
                                                    <img class="d-none" src="/wp-content/uploads/2024/04/Screenshot-2024-04-14-123807.png" alt="">
                                                </picture>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="io-text-wrapper">
                                    <p>The ukulele learning course is designed for students starting at the age of 5, with no upper age limit for beginners. The training is structured across three main levels: beginner, intermediate, and advanced. Upon completing any of these stages, students receive the corresponding certificate. Beginners start with no prior skills, learning the basics from the ground up. Advancing to the intermediate and advanced levels requires some foundational experience. Young learners, starting from 5 years old, may begin with a preparatory course aimed at laying down the fundamental principles of musicality and ukulele playing technique.</p>
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
                                                                        <input class="io-radio" type="radio" id="iocheckboxgift25" name="checkbox-group" checked>
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
                                                                        <input class="io-radio" type="radio" id="iocheckboxgift25" name="checkbox-group" checked>
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
                                                                        <input class="io-checkbox" type="checkbox" id="iocheckbox25" name="checkbox-group" checked>
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
                                                                        <input class="io-checkbox" type="checkbox" id="iocheckbox25" name="checkbox-group" checked>
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
                                                Как записаться на курс укулеле онлайн? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-1" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-1" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Записаться на пробный урок укулеле и оплатить его можно <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">здесь</a>. После этого наш администратор свяжется с вами и согласует расписание. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-2">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-2" aria-expanded="false" aria-controls="faqAccordion-collapse-2">
                                                С какого возраста можно учиться детям на курсе укулеле онлайн? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-2" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Мы приглашаем детей от 5 лет.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-2b">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-2b" aria-expanded="false" aria-controls="faqAccordion-collapse-2b">
                                                Сколько стоит пробный урок укулеле?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-2b" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-2b" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Пробный урок укулеле стоит <span class="ioArrayToTextElementsDemo">$6</span>. Стоимость пробных уроков на все курсы одинаковая.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-3">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-3" aria-expanded="false" aria-controls="faqAccordion-collapse-3">
                                                Сколько стоит обучение на укулеле? Есть ли скидки?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-3" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Вам необходимо купить абонемент минимум на 4 урока. Такой абонемент стоит <span class="ioArrayToTextElements03">$56</span>. Выбрать количество уроков вы можете <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">здесь</a>. При покупке от 80 уроков одним платежом действует скидка от <span class="ioArrayToTextElements62">$120</span>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-4">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-4" aria-expanded="false" aria-controls="faqAccordion-collapse-4">
                                                Как оплатить курс укулеле?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-4" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Вы можете выбрать количество уроков и оплатить картой на нашем <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">сайте</a>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-5">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-5" aria-expanded="false" aria-controls="faqAccordion-collapse-5">
                                                Сколько раз в неделю проходят уроки укулеле онлайн? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-5" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-5" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Мы рекомендуем заниматься от 2 раз в неделю или даже чаще. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-6">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-6" aria-expanded="false" aria-controls="faqAccordion-collapse-6">
                                                Как составляется расписание уроков?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-6" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Расписание уроков согласовывается с каждым студентом персонально.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-7">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-7" aria-expanded="false" aria-controls="faqAccordion-collapse-7">
                                                Сколько длится урок укулеле? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-7" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Урок укулеле длится 45 минут.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-8">
                                        <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-8" aria-expanded="false" aria-controls="faqAccordion-collapse-8">
                                                Можно ли учиться в группе для новичков?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-8" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Нет, уроки укулеле проходят только индивидуально. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-21">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-21" aria-expanded="false" aria-controls="faqAccordion-collapse-21">
                                                Я никогда не учился ранее играть на укулеле, я могу записаться к вам? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-21" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-21" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Да, мы начинаем обучение игре на укулеле с нуля.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-22">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-22" aria-expanded="false" aria-controls="faqAccordion-collapse-22">
                                                Мой ребенок раньше занимался, вы сможете определить его уровень?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-22" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-22" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Да, наш педагог укулеле определит уровень знаний и подберет программу соответствующего уровня сложности. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-23">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-23" aria-expanded="false" aria-controls="faqAccordion-collapse-23">
                                                Можно ли заниматься с вашим учителем на выходных? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-23" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-23" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Можно, мы работаем каждый день, включая выходные. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-24">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-24" aria-expanded="false" aria-controls="faqAccordion-collapse-24">
                                                В случае, если я пропустил урок, оплата переносится или сгорает?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-24" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-24" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Чтобы сохранить оплату, вам необходимо предупредить нас о вашем отсутствии на уроке минимум за 24 часа до его начала. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-25">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-25" aria-expanded="false" aria-controls="faqAccordion-collapse-25">
                                                Ребенок заболел и мы не могли отменить урок заранее, в таком случае оплата тоже сгорает?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-25" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-25" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    К сожалению, да. В случае несвоевременного сообщения об отсутствии, урок будет считаться состоявшимся и педагог получит оплату за него.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-26">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-26" aria-expanded="false" aria-controls="faqAccordion-collapse-26">
                                                Могу ли я приостановить абонемент и пойти на каникулы? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-26" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-26" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Да, можно приостановить абонемент на любой период, сообщите нашему администратору даты ваших каникул.	
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-27">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-27" aria-expanded="false" aria-controls="faqAccordion-collapse-27">
                                                Есть ли срок использования моих купленных уроков? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-27" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-27" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Нет, вы можете использовать уроки в течение любого периода. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-28">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-28" aria-expanded="false" aria-controls="faqAccordion-collapse-28">
                                                Получит ли мой ребенок диплом об окончании курса укулеле? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-28" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-28" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Да, в конце каждого модуля студент получает сертификат, а в конце каждого уровня - диплом.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-29">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-29" aria-expanded="false" aria-controls="faqAccordion-collapse-29">
                                                Как нужно подготовиться к урокам укулеле?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-29" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-29" data-bs-parent="#faqAccodrion">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-block io-block--grey io-course-faq__item">
                                                        Вам необходимо дома иметь укулеле, гаджет с камерой и желательно наушники. Загрузите на ваше устройство приложение Zoom и Google Meet, проверьте работу камеры и звука.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-216">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-216" aria-expanded="false" aria-controls="faqAccordion-collapse-216">
                                                Будет ли мой ребенок сдавать экзамены? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-216" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-216" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    В Монтессори центре вместо экзаменов студенты выступают на концертах и принимают участие в онлайн конкурсах.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-217">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-217" aria-expanded="false" aria-controls="faqAccordion-collapse-217">
                                                Вы принимаете взрослых? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-217" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-217" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Да, мы обучаем взрослых в любом возрасте.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-218">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-218" aria-expanded="false" aria-controls="faqAccordion-collapse-218">
                                                Могу ли я сам выбрать преподавателя укулеле на вашем сайте? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-218" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-218" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Да. При этом важно, чтобы ваши пожелания по расписанию совпали с рабочим графиком этого учителя укулеле. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-219">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-219" aria-expanded="false" aria-controls="faqAccordion-collapse-219">
                                                Включает ли курс укулеле изучение теории музыки? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-219" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-219" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Да, включает. На уроках укулеле педагог обязательно уделяет внимание теории музыки. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-220">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-220" aria-expanded="false" aria-controls="faqAccordion-collapse-220">
                                                Есть ли программа курса укулеле и можно ли ее посмотреть?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-220" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-220" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Да, программа курса укулеле онлайн опубликована на сайте на странице курса.
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
                                                How to Sign Up for an Online Ukulele Course?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-1" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-1" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    You can register for a trial ukulele lesson and make a payment <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">here</a>. Afterward, our administrator will contact you to arrange a schedule. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-2">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-2" aria-expanded="false" aria-controls="faqAccordion-collapse-2">
                                                What is the Minimum Age for Children to Join the Online Ukulele Course?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-2" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    We welcome children from the age of 5.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-3">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-3" aria-expanded="false" aria-controls="faqAccordion-collapse-3">
                                                How Much Does a Trial Ukulele Lesson Cost?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-3" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    The trial ukulele lesson costs <span class="ioArrayToTextElementsDemo">$6</span>. The cost for trial lessons is the same across all courses.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-4">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-4" aria-expanded="false" aria-controls="faqAccordion-collapse-4">
                                                What are the Fees for Ukulele Lessons? Are There Any Discounts?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-4" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    You need to purchase a subscription for at least 4 lessons, which costs <span class="ioArrayToTextElements03">$56</span>. You can select the number of lessons <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">here</a>. A discount starting from <span class="ioArrayToTextElements62">$120</span> applies when purchasing 80 lessons in one payment.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-5">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-5" aria-expanded="false" aria-controls="faqAccordion-collapse-5">
                                                How to Pay for the Ukulele Course?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-5" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-5" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    You can select the number of lessons and pay with a card on our <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">website</a>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-6">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-6" aria-expanded="false" aria-controls="faqAccordion-collapse-6">
                                                How Often Do Online Ukulele Lessons Occur?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-6" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    We recommend practicing from 2 times a week or even more frequently. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-7">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-7" aria-expanded="false" aria-controls="faqAccordion-collapse-7">
                                                How is the Lesson Schedule Determined?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-7" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    The lesson schedule is personally arranged with each student.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-21">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-21" aria-expanded="false" aria-controls="faqAccordion-collapse-21">
                                                How Long Does a Ukulele Lesson Last?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-21" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-21" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Each ukulele lesson lasts for 45 minutes.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-22">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-22" aria-expanded="false" aria-controls="faqAccordion-collapse-22">
                                                Can I Learn in a Group for Beginners?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-22" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-22" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    No, ukulele lessons are conducted on an individual basis only.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-23">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-23" aria-expanded="false" aria-controls="faqAccordion-collapse-23">
                                                I Have Never Learned to Play the Ukulele Before. Can I Sign Up?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-23" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-23" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes, we start teaching the ukulele from scratch.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-24">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-24" aria-expanded="false" aria-controls="faqAccordion-collapse-24">
                                                My Child Has Taken Lessons Before. Can You Assess Their Level?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-24" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-24" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes, our ukulele teacher will assess the student's level of knowledge and select an appropriately challenging program.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-25">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-25" aria-expanded="false" aria-controls="faqAccordion-collapse-25">
                                                Can I Have Lessons with Your Teacher Over the Weekend?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-25" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-25" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes, we operate every day, including weekends.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-26">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-26" aria-expanded="false" aria-controls="faqAccordion-collapse-26">
                                                What Happens if I Miss a Lesson? Is the Payment Transferred or Forfeited?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-26" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-26" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    To retain your payment, you must notify us of your absence at least 24 hours before the lesson starts.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-27">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-27" aria-expanded="false" aria-controls="faqAccordion-collapse-27">
                                                My Child Fell Ill and We Couldn't Cancel the Lesson in Advance. Is the Payment Forfeited in This Case?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-27" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-27" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Unfortunately, yes. If we are not notified in time about the absence, the lesson is considered to have taken place, and the teacher will be paid for it.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-28">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-28" aria-expanded="false" aria-controls="faqAccordion-collapse-28">
                                                Can I Pause My Subscription and Take a Break?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-28" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-28" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes, you can pause your subscription for any period; just inform our administrator of your holiday dates.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-31">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-31" aria-expanded="false" aria-controls="faqAccordion-collapse-31">
                                                Is There an Expiration Date for the Lessons I’ve Purchased?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-31" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-31" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    No, you can use the lessons over any period.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-32">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-32" aria-expanded="false" aria-controls="faqAccordion-collapse-32">
                                                Will My Child Receive a Diploma Upon Completion of the Ukulele Course?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-32" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-32" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes, at the end of each module, the student receives a certificate, and at the end of each level, a diploma.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-33">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-33" aria-expanded="false" aria-controls="faqAccordion-collapse-33">
                                                How Should I Prepare for Ukulele Lessons?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-33" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-33" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    You need to have a ukulele at home, a gadget with a camera, and preferably headphones. Download the Zoom and Google Meet applications on your device, and check the camera and sound are working.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-34">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-34" aria-expanded="false" aria-controls="faqAccordion-collapse-34">
                                                Will My Child Have to Take Exams?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-34" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-34" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    In our Montessori center, instead of exams, students perform in concerts and participate in online competitions.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-35">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-35" aria-expanded="false" aria-controls="faqAccordion-collapse-35">
                                                Do You Teach Adults?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-35" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-35" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes, we teach adults of any age.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-36">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-36" aria-expanded="false" aria-controls="faqAccordion-collapse-36">
                                                Can I Choose a Ukulele Teacher on Your Website?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-36" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-36" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes. It is important that your schedule preferences match the working hours of the chosen ukulele teacher.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-37">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-37" aria-expanded="false" aria-controls="faqAccordion-collapse-37">
                                                Does the Ukulele Course Include Music Theory?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-37" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-37" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes, it does. Music theory is an essential part of the ukulele lessons.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-38">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-38" aria-expanded="false" aria-controls="faqAccordion-collapse-38">
                                                Is There a Curriculum for the Ukulele Course Available for Review?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-38" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-38" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes, the online ukulele course curriculum is published on the course page on our website.
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
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-video-tab" data-bs-toggle="pill" data-bs-target="#pills-video" type="button" role="tab" aria-controls="pills-video" aria-selected="false"><span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Видео'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Video'; } ?></span> <span class="io-fw-bold">24</span></button>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-photo" role="tabpanel" aria-labelledby="pills-photo-tab">
                                        <div class="io-gallery">
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-1.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-1.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-1.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-2.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-2.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-2.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-3.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-3.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-3.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-4.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-4.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-4.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-5.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-5.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-5.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-6.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-6.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-6.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-7.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-7.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-7.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-8.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-8.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-8.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-9.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-9.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-9.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-10.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-10.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-10.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-11.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-11.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-11.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-12.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-12.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-12.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-13.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-13.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-13.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-14.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-14.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-14.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-15.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-15.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-15.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-16.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-16.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-16.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-17.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-17.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-17.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-18.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-18.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-18.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-19.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-19.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-19.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-20.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-20.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-20.jpg" alt="">
                                                </picture>
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                
                                                <picture>
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-21.webp" type="image/webp">
                                                    <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-21.jpg" type="image/jpeg">
                                                    <img src="/wp-content/themes/interschooltemplate/images/io-gallery-21.jpg" alt="">
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

    var scrollImageRu = '/wp-content/uploads/2023/11/Укулеле-Онлайн.svg';
    var scrollImageEn = '/wp-content/uploads/2023/11/Ukulele-Online.svg';
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


