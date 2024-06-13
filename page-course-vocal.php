<?php
/**
 * Курс Вокал
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Курс Вокал
 */

include 'templates/price.php';
include 'templates/popular-courses.php';
include 'templates/montessori-work.php';
include 'templates/news.php';


get_header(); // подключаем header.php ?>

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

    @media (max-width: 1219.5px) {
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
                <h2 class="io-heading-2 io-course-lectors__heading">Преподаватели вокала</h2>
                <div class="io-course-lectors__text-wrapper io-text-wrapper">
                    <div class="io-check io-check--start">
                        <span>Каждый педагог вокала в Монтессори центре имеет высшее образование по специальности эстрадного или оперного пения.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>Все наши учителя имеют большой опыт преподавания детям и взрослым и внимательно относятся к процессу обучения каждого студента.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>Педагоги вокала в нашей школе - действующие артисты вокалисты, которые выступают на сценах и непрерывно совершенствует свое исполнительское мастерство.</span>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-dimitrova.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Татьяна Димитрова</h3>
                            <p class="io-course-lectors__item-header-text-work">Педагог вокала</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Татьяна Димитрова - педагог вокала в Монтессори центре с 2011 года. С отличием окончила Национальную музыкальную академию им. П.И.Чайковского. Имеет большой педагогический опыт работы с детьми и взрослыми. </p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Читать далее
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Татьяна преподает эстрадный вокал онлайн для детей и для взрослых. Уроки вокала в Zoom и Google Meet проходят индивидуально. На первых уроках педагог показывает приемы звукоизвлечения на личном примере, обсуждает репертуар, выбирает вместе с учеником песни для разучивания. </p>
                            <p>Методические наработки Татьяны очень глубокие и профессиональные, педагогический репертуар - безграничен. Для ученика любого возраста Татьяна имеет, что предложить: песни на разных языках, мировые хиты, обработки классических произведений, саундтреки из мультфильмов и кино. Студенты Татьяны являются участниками и победителями престижных Международных конкурсов и фестивалей.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-glinskaya.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Мария Глинская</h3>
                            <p class="io-course-lectors__item-header-text-work">Педагог вокала</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Мария Глинская - педагог вокала в Монтессори центре. Окончила Киевский национальный университет культуры и искусств по классу вокала. Студенты Марии побеждают на конкурсах и фестивалях, принимают активное участие в выступлениях и непрерывно развивают свои исполнительские навыки.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Читать далее
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Мария преподает уроки вокала онлайн для детей и взрослых. Ее уроки эстрадного вокала в Zoom и Google Meet проходят индивидуально. Педагог подбирает интересный репертуар, с каждым учеником обсуждает его музыкальные вкусы и предпочтения: для детей часто - это песни из мультфильмов и сказок, трендовые хиты любимых певцов. Для взрослых подобраны коллекции мировых шлягеров, яркие образцы эстрадных песен, ставшие классикой. </p>
                            <p>Педагогический репертуар Марии подобран на нескольких языках. Мария использует приемы постановки голоса, работы над интонацией и сценическим образом, используя методические наработки более, чем за 10 лет своего педагогического опыта.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-hita.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Богдана Хита</h3>
                            <p class="io-course-lectors__item-header-text-work">Педагог вокала</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Богдана Хита – педагог вокала в Монтессори центре. Окончила Национальную музыкальную академию им. П.И.Чайковского по классу вокала. Продолжает обучение в консерватории в Мадриде (Испания).</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Читать далее
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Богдана преподает академический вокал и эстрадный вокал для детей и взрослых. На онлайн уроках вокала Богдана уделяет время правильной постановке голосового аппарата, работает над дикцией и произношением, чистотой интонирования. Для каждого своего студента Богдана очень аккуратно и индивидуально предложит педагогический репертуар, обсудит произведение с точки зрения сложности исполнения и проработает каждую деталь, чтобы голос студента звучал красиво.</p>
                            <p>Ученики Богданы показывают высокие результаты на онлайн конкурсах и концертах, быстро пополняют свой репертуар и учатся с удовольствием!</p>
                            <p>Богдана преподает на английском и украинском языках.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-zhuravel.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Наталья Журавель</h3>
                            <p class="io-course-lectors__item-header-text-work">Педагог вокала и фортепиано</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Наталья Журавель - педагог вокала и фортепиано в Монтессори центре. Окончила Киевский Национальный университет культуры и искусств, получила квалификацию магистра музыкального искусства. </p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Читать далее
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Студенты Натальи - дети от 5 лет и взрослые без ограничений в возрасте. Наталья преподает уроки эстрадного вокала онлайн, уроки академического вокала в Zoom и Google Meet, уроки народного вокала, а также уроки фортепиано для взрослых и детей. Каждый музыкальный стиль имеет свои особенности и отличия, в зависимости от выбора манеры исполнения, Наталья профессионально ставит дыхание и учит чисто и правильно петь каждого ученика.</p>
                            <p>На уроках фортепиано онлайн Наталья уделяет внимание постановке рук, развитию технических навыков и предлагает своим студентам интересный репертуар. Ученики Натальи - вокалисты и пианисты - принимают участие в конкурсах и концертах, побеждают и всегда достигают высоких результатов. </p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-demedenko.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Татьяна Демеденко</h3>
                            <p class="io-course-lectors__item-header-text-work">Педагог вокала</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Татьяна Демеденко - педагог вокала в Монтессори центре. С отличием окончила Киевскую муниципальную академию музыки им. Р. М. Глиэра.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Читать далее
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Татьяна преподает уроки вокала онлайн и детям, и взрослым. Уроки проходят индивидуально. Татьяна посещает мастер-классы знаменитых вокальных тренеров, непрерывно обогащая свои методики новыми приемами и педагогическими навыками. На уроках пения в Zoom и Google Meet педагог профессионально занимается постановкой дыхания, голосового аппарата и учит мастерски владеть своим голосом.</p>
                            <p>Студенты Татьяны принимают участие в конкурсах, концертах, получают призовые места и с успехом совершенствуют свои сценические навыки. В классе Татьяны все ученики посещают уроки пения регулярно и продолжительное время, что еще раз говорит о педагогическом мастерстве учителя и умении вдохновить каждого своего студента к получению вокального образования. </p>
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
                                <div class="io-feedback__item-fio">DK</div>
                                <h3 class="io-feedback__item-name">Daria Kononova</h3>
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
                            <p>У меня ребенок почти год занимается блокфлейтой и вокалом, летом еще лепили и шили! Отличные результаты, тоже участвовал ребенок в музыкальном онлайн конкурсе, стал лауреатом по духовым инструментам. А еще педагоги по вокалу и блокфлейте, да и Анна Росенко руку приложила как координатор и аккомпаниатор для учебных записей, подготовили совместно с местным педагогом по фортепиано потрясающий и очень сложный музыкальный вокально-инструментальный ансамбль, в котором пели и играли на разных инструментах дети от 6 до 16 лет. Потрясающий опыт и огромный труд педагогов в течение полугода! Педагоги Монтессори центра столько души вложили во всё это… И всё получилось в итоге!</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">EA</div>
                                <h3 class="io-feedback__item-name">Elena A.</h3>
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
                            <p>Кате очень понравилось заниматься с Богданой. Катя сказала, что у неё самый красивый голос в мире и она хочет научиться петь так же!</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">ES</div>
                                <h3 class="io-feedback__item-name">Emma Stevens</h3>
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
                            <p>The instructors are not only incredibly talented but also friendly and supportive. The lessons are tailored to your individual needs, making learning enjoyable.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">MB</div>
                                <h3 class="io-feedback__item-name">Max Bennett</h3>
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
                            <p>I\'m amazed at how much my vocal range has expanded with these lessons. The instructors provide valuable feedback and guidance, making each session impactful.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">FM</div>
                                <h3 class="io-feedback__item-name">Felipe Martínez</h3>
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
                            <p>No tenía experiencia previa en canto, pero las clases me hicieron sentir bienvenido y cómodo. Ahora puedo decir que soy un cantante en desarrollo. ¡Gracias!</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">LT</div>
                                <h3 class="io-feedback__item-name">Laura Thompson</h3>
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
                            <p>As a parent, it\'s an honor to express my utmost appreciation for the online vocal lessons provided by the Montessori Center. My son has been virtually attending these lessons for the past nine months, and his vocal prowess has blossomed significantly. He eagerly awaits his lessons, always excited about what he\'ll learn next.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">ЕВ</div>
                                <h3 class="io-feedback__item-name">Евгений Волков</h3>
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
                            <p>Моя дочка берет несколько классов здесь - вокал, фортепиано и рисование. Занимаемся утром на выходных, дочке нравится. На фортепиано дома она играет и сама, без учителя, мы с женой иногда просим. Очень удобно, что можно поменять расписание - это гибко и индивидуально и это никак не отражается на оплате, абонемент переносится на следующий месяц, когда мы едем путешествовать, мне это тоже нравится. Дочь довольна, радуется результатам, мы видим прогресс, что еще нужно! Рекомендую всем своим друзьям!</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">ЛП</div>
                                <h3 class="io-feedback__item-name">Лариса П.</h3>
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
                            <p>Мои дети начали заниматься вокалом в Монтессори центре, и мне нравятся результаты. Преподаватели замечательные, а уроки онлайн проходят на ура!</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">PG</div>
                                <h3 class="io-feedback__item-name">Pedro García</h3>
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
                            <p>Mi voz ha cambiado para mejor desde que comencé estas clases. Me siento más confiado en mi capacidad vocal y he ampliado mi repertorio.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">CM</div>
                                <h3 class="io-feedback__item-name">Camila Morales</h3>
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
                            <p>Estoy impresionada por el enfoque personalizado de estas lecciones. Cada clase se adapta a mis necesidades y objetivos individuales.</p>
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
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-vocal-1.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Что нужно для онлайн уроков вокала?</h3>
                            <p class="io-blog__content-text">Современные технологии предоставляют невероятные возможности для тех, кто хочет изучать различные искусства, не выходя из дома. Одно из таких направлений...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-vocal-2.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Уроки пения через Zoom: создаем мини-студию вокала дома</h3>
                            <p class="io-blog__content-text">Цифровая эра сделала занятия и увлечения невероятно удобными для людей, не выходя из дома. Zoom и Google Meet, популярные инструменты для видеоконференций...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-vocal-3.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Как научиться петь: путь от начинающего к профессионалу</h3>
                            <p class="io-blog__content-text">Пение – одно из древнейших искусств, которое позволяет нам выразить свои чувства и эмоции. Но как начать свой путь в этом мире и достичь высот профессион...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-vocal-4.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Выбираем педагога по вокалу: что важно знать маме?</h3>
                            <p class="io-blog__content-text">Когда ваш ребенок проявляет интерес к пению, первым вопросом, который возникает у мамы, становится: «Как выбрать правильного педагога по вокалу?». Правильный...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-vocal-5.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Семейные дуэты: как научиться петь вместе с ребёнком</h3>
                            <p class="io-blog__content-text">Музыка объединяет сердца, а совместное пение в семье становится незабываемым и теплым способом проведения времени. Семейные дуэты — это не только прекрасный...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-vocal-6.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Вокальные упражнения и игры: делаем процесс обучения увлекательным!</h3>
                            <p class="io-blog__content-text">Обучение вокалу может быть не только полезным и обогащающим, но и увлекательным. Через игру дети лучше усваивают информацию и охотнее принимаются...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-vocal-7.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Секреты мастерства: как правильно дышать при пении</h3>
                            <p class="io-blog__content-text">Пение – это искусство, требующее не только голосовых навыков, но и глубокого понимания механизмов дыхания. Ведь дыхание – основа красивого и яркого звучания...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-vocal-8.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Эстрадный или академический вокал: какой путь выбрать на старте музыкального путешествия?</h3>
                            <p class="io-blog__content-text">Каждый, кто решает начать обучение вокалу, сталкивается с выбором стиля пения: эстрадного или академического. Этот выбор может определить направление вашего...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-vocal-9.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Вокал для подростков: особенности, советы и рекомендации</h3>
                            <p class="io-blog__content-text">Подростковый возраст – это период интенсивных изменений, как физиологических, так и психологических. В этот момент жизни уроки вокала могут стать не только...</p>
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
                <h2 class="io-heading-2 io-course-lectors__heading">Vocal Teachers</h2>
                <div class="io-course-lectors__text-wrapper io-text-wrapper">
                    <div class="io-check io-check--start">
                        <span>Every vocal teacher at the Montessori Center holds a higher education degree in either pop or opera singing.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>All our teachers have extensive experience in teaching both children and adults, and they approach each student\'s learning process with care.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>The vocal teachers at our school are active vocal artists who perform on stages and continuously refine their performance skills.</span>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-dimitrova.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Tatyana Dimitrova</h3>
                            <p class="io-course-lectors__item-header-text-work">Vocal Coach</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Tatyana Dimitrova has been a vocal coach at the Montessori Center since 2011. She graduated with honors from the P. I. Tchaikovsky National Music Academy. She has extensive teaching experience with both children and adults.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Read more
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Tatyana teaches pop vocal online for children and adults. Vocal lessons on Zoom and Google Meet are held individually. During the first lesson, the teacher demonstrates vocal production techniques using herself as an example, discusses the repertoire, and chooses songs to learn together with the student.</p>
                            <p>Tatyana\'s methodological developments are very profound and professional, her pedagogical repertoire is limitless. For students of any age, Tatyana has something to offer: songs in different languages, world hits, arrangements of classical pieces, soundtracks from cartoons and movies. Tatyana\'s students are participants and winners of prestigious international competitions and festivals.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-glinskaya.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Maria Glinskaya</h3>
                            <p class="io-course-lectors__item-header-text-work">Vocal Teacher</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Maria Glinskaya is a vocal teacher at the Montessori Center. She graduated from the Kyiv National University of Culture and Arts in the vocal class. Maria\'s students win at contests and festivals, actively participate in performances and continuously develop their performance skills.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Read more
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Maria teaches online vocal lessons for both children and adults. Her pop vocal lessons on Zoom and Google Meet are conducted individually. The teacher selects an interesting repertoire, discusses each student\'s musical tastes and preferences: for children it is often songs from cartoons and fairy tales, trendy hits from their favorite singers. For adults, collections of world hits, bright examples of pop songs that have become classics, are selected.</p>
                            <p>Maria\'s pedagogical repertoire is selected in several languages. Maria uses voice placement techniques, works on intonation and stage image, using methodical developments from more than 10 years of her teaching experience.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-hita.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Bohdana Khita</h3>
                            <p class="io-course-lectors__item-header-text-work">Vocal teacher</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Bohdana Khita is a vocal teacher at the Montessori Center. She graduated from the P.I. Tchaikovsky National Music Academy, majoring in vocals. She continues her studies at the conservatory in Madrid, Spain.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Read more
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Bohdana teaches both academic and pop vocals for children and adults. During her online vocal lessons, Bohdana dedicates time to the correct setting of the vocal apparatus, works on diction and pronunciation, and purity of intonation. For each of her students, Bohdana very carefully and individually suggests pedagogical repertoire, discusses the piece in terms of performance complexity, and works through every detail so that the student\'s voice sounds beautiful.</p>
                            <p>Bohdana\'s students show high results in online competitions and concerts, quickly expand their repertoire and enjoy learning!</p>
                            <p>Bohdana teaches in English and Ukrainian.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-zhuravel.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Natalia Zhuravel</h3>
                            <p class="io-course-lectors__item-header-text-work">Vocal and Piano Teacher</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Natalia Zhuravel is a vocal and piano teacher at the Montessori Center. She graduated from the Kyiv National University of Culture and Arts and obtained a Master\'s degree in Music</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Read more
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Natalia\'s students are children from the age of 5 and adults with no age restrictions. Natalia teaches pop vocal lessons online, academic vocal lessons on Zoom and Google Meet, folk vocal lessons, as well as piano lessons for adults and children. Each musical style has its own characteristics and differences, depending on the choice of performance style, Natalia professionally sets the breathing and teaches each student to sing cleanly and correctly.</p>
                            <p>In online piano lessons, Natalia pays attention to hand positioning, development of technical skills, and offers her students an interesting repertoire. Natalia\'s students - vocalists and pianists - participate in competitions and concerts, win and always achieve high results.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-demedenko.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Tatyana Demedenko</h3>
                            <p class="io-course-lectors__item-header-text-work">Vocal Teacher</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Tatyana Demedenko is a vocal teacher at the Montessori Center. She graduated with honors from the R. M. Glier Kyiv Municipal Academy of Music.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Read more
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Tatyana teaches vocal lessons online to both children and adults. The lessons are individual. Tatyana attends master classes of famous vocal coaches, continuously enriching her methods with new techniques and teaching skills. In singing lessons on Zoom and Google Meet, the teacher professionally works on breath control, vocal apparatus, and teaches how to masterfully control one\'s voice.</p>
                            <p>Tatyana\'s students participate in competitions and concerts, win prizes, and successfully improve their stage skills. In Tatyana\'s class, all students regularly attend singing lessons for a long time, which once again speaks of the teacher\'s pedagogical skill and ability to inspire each of her students to receive vocal education.</p>
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
                                <div class="io-feedback__item-fio">DK</div>
                                <h3 class="io-feedback__item-name">Daria Kononova</h3>
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
                            <p>У меня ребенок почти год занимается блокфлейтой и вокалом, летом еще лепили и шили! Отличные результаты, тоже участвовал ребенок в музыкальном онлайн конкурсе, стал лауреатом по духовым инструментам. А еще педагоги по вокалу и блокфлейте, да и Анна Росенко руку приложила как координатор и аккомпаниатор для учебных записей, подготовили совместно с местным педагогом по фортепиано потрясающий и очень сложный музыкальный вокально-инструментальный ансамбль, в котором пели и играли на разных инструментах дети от 6 до 16 лет. Потрясающий опыт и огромный труд педагогов в течение полугода! Педагоги Монтессори центра столько души вложили во всё это… И всё получилось в итоге!</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">EA</div>
                                <h3 class="io-feedback__item-name">Elena A.</h3>
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
                            <p>Кате очень понравилось заниматься с Богданой. Катя сказала, что у неё самый красивый голос в мире и она хочет научиться петь так же!</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">ES</div>
                                <h3 class="io-feedback__item-name">Emma Stevens</h3>
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
                            <p>The instructors are not only incredibly talented but also friendly and supportive. The lessons are tailored to your individual needs, making learning enjoyable.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">MB</div>
                                <h3 class="io-feedback__item-name">Max Bennett</h3>
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
                            <p>I\'m amazed at how much my vocal range has expanded with these lessons. The instructors provide valuable feedback and guidance, making each session impactful.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">FM</div>
                                <h3 class="io-feedback__item-name">Felipe Martínez</h3>
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
                            <p>No tenía experiencia previa en canto, pero las clases me hicieron sentir bienvenido y cómodo. Ahora puedo decir que soy un cantante en desarrollo. ¡Gracias!</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">LT</div>
                                <h3 class="io-feedback__item-name">Laura Thompson</h3>
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
                            <p>As a parent, it\'s an honor to express my utmost appreciation for the online vocal lessons provided by the Montessori Center. My son has been virtually attending these lessons for the past nine months, and his vocal prowess has blossomed significantly. He eagerly awaits his lessons, always excited about what he\'ll learn next.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">ЕВ</div>
                                <h3 class="io-feedback__item-name">Евгений Волков</h3>
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
                            <p>Моя дочка берет несколько классов здесь - вокал, фортепиано и рисование. Занимаемся утром на выходных, дочке нравится. На фортепиано дома она играет и сама, без учителя, мы с женой иногда просим. Очень удобно, что можно поменять расписание - это гибко и индивидуально и это никак не отражается на оплате, абонемент переносится на следующий месяц, когда мы едем путешествовать, мне это тоже нравится. Дочь довольна, радуется результатам, мы видим прогресс, что еще нужно! Рекомендую всем своим друзьям!</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">ЛП</div>
                                <h3 class="io-feedback__item-name">Лариса П.</h3>
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
                            <p>Мои дети начали заниматься вокалом в Монтессори центре, и мне нравятся результаты. Преподаватели замечательные, а уроки онлайн проходят на ура!</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">PG</div>
                                <h3 class="io-feedback__item-name">Pedro García</h3>
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
                            <p>Mi voz ha cambiado para mejor desde que comencé estas clases. Me siento más confiado en mi capacidad vocal y he ampliado mi repertorio.</p>
                        </div>
                    </div>
                    <div class="io-feedback__item io-block">
                        <div class="d-flex flex-column flex-sm-row align-items-sm-center justify-content-sm-between">
                            <div class="io-feedback__item-heading">
                                <div class="io-feedback__item-fio">CM</div>
                                <h3 class="io-feedback__item-name">Camila Morales</h3>
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
                            <p>Estoy impresionada por el enfoque personalizado de estas lecciones. Cada clase se adapta a mis necesidades y objetivos individuales.</p>
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
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-vocal-1.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">What is needed for online vocal lessons?</h3>
                            <p class="io-blog__content-text">Modern technology offers incredible opportunities for those who want to study various arts without leaving home. One such direction is online vocal lessons...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-vocal-2.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Singing Lessons via Zoom: Creating a Mini Vocal Studio at Home</h3>
                            <p class="io-blog__content-text">The digital era has made pursuits and hobbies incredibly convenient for people without leaving their homes. Zoom and Google Meet, popular video conferencing...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-vocal-3.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">How to Learn to Sing: From Beginner to Professional</h3>
                            <p class="io-blog__content-text">Singing is one of the oldest arts that allow us to express our feelings and emotions. But how to start your journey in this world and achieve professional...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-vocal-4.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Choosing a Vocal Coach: What Moms Need to Know?</h3>
                            <p class="io-blog__content-text">When your child shows an interest in singing, the first question that comes to a mom\'s mind is, "How do I choose the right vocal coach?". Making the right...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-vocal-5.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Family Duets: How to Learn to Sing Together with Your Child</h3>
                            <p class="io-blog__content-text">Music unites hearts, and singing together as a family becomes a memorable and warm way to spend time. Family duets are not only a delightful form of entert...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-vocal-6.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Vocal Exercises and Games: Making the Learning Process Fun!</h3>
                            <p class="io-blog__content-text">Learning to sing can be not only beneficial and enriching but also engaging. Through play, kids absorb information better and are more eager to do exercises...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-vocal-7.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Secrets of Mastery: How to Breathe Properly While Singing</h3>
                            <p class="io-blog__content-text">Singing is an art that requires not only vocal skills but also a deep understanding of breathing mechanisms. After all, breathing is the foundation of a...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-vocal-8.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Pop or Classical Vocals: Which Path to Choose at the Start of Your Musical Journey?</h3>
                            <p class="io-blog__content-text">Anyone deciding to start vocal training faces the choice of singing style: pop or classical. This choice can determine the direction of your musical development...</p>
                        </div>
                    </a>
                    <a href="' . get_permalink(123)  . '" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-vocal-9.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Vocal Lessons for Teens: Features, Tips, and Recommendations</h3>
                            <p class="io-blog__content-text">The teenage years are a period of intense physiological and psychological changes. At this stage, vocal lessons can serve not only as a hobby but also as a means...</p>
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

<div class="io-demo-wrapper-all">
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
                <img src="/wp-content/themes/interschooltemplate/images/visamastercard.png" alt="">
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
                                <span class="io-course-passport__header-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Курс вокала'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Singing course'; } ?></span>
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
                                    <h1 class="io-heading-1 io-course-hero__heading"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Уроки<br><span class="io-pink-main">Вокала</span><br>Oнлайн'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Online<br><span class="io-pink-main">Singing</span><br>Lessons'; } ?></h1>
                                    <p class="io-course-hero__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'На курсе вокала вы научитесь красиво петь любимые песни. Вы будете выступать на концертах, конкурсах и чувствовать себя уверенно на сцене!'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'In this singing course, you\'ll learn to beautifully sing your favorite songs. You\'ll perform at concerts, competitions, and feel confident on stage!'; } ?></p>
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
                                                    <img src="/wp-content/themes/interschooltemplate/images/r-1.png" alt="">
                                                    <img src="/wp-content/themes/interschooltemplate/images/r-2.png" alt="">
                                                    <img src="/wp-content/themes/interschooltemplate/images/r-3.png" alt="">
                                                </div>
                                                <span>+183 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'отзыва'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'reviews'; } ?></span>
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
                                    <!-- <div class="io-course-passport__header">
                                        <div class="io-course-passport__header-inner">
                                            <span class="io-course-passport__header-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Курс вокала'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Singing course'; } ?></span>
                                            <div class="io-course-passport__popular"></div>
                                        </div>
                                        <span class="io-course-passport__header-status">Online</span>
                                    </div> -->
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
                                                         развить голосовые навыки, научиться правильному дыханию и звукоизвлечению.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Нотная грамота</span>
                                                    </div>
                                                    <div class="io-content">
                                                        научиться читать ноты для вокала разной сложности.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Мастерство</span>
                                                    </div>
                                                    <div class="io-content">
                                                        научиться исполнять вокальные произведения разных жанров.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Сценический опыт</span>
                                                    </div>
                                                    <div class="io-content">
                                                        приобрести опыт выступлений на концертах, фестивалях и конкурсах.
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
                                                        Методика обучения вокалу - уникальная разработка Монтессори центра. Перед каждым студентом в начале курса ставятся цели (уровни), которые он последовательно достигнет за период обучения в Монтессори центре. Конкретной целью является успешное исполнение вокального произведения определенного уровня сложности на концерте или конкурсе.
                                                    </div>
                                                    <div class="io-fw-semibold io-fs-20 mt-1 mt-sm-0">
                                                        Преимущества нашей методики
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Студенту понятны поставленные перед ним цели</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Продолжительность курса обучения определяется скоростью достижения поставленных целей, а не календарными периодами</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Вместо экзаменов студент выступает на концертах и музыкальных конкурсах</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Эта методика подходит как для детей, так и для взрослых</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Чтобы усовершенствовать свое мастерство, студент может продолжать обучение даже после достижения целей</span>
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
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-laptop.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>Гаджет с камерой и микрофоном</strong> будут нужны для онлайн уроков.</p>
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
                                                            <p><strong>Подготовьте список песен</strong>, которые вам нравятся и вы хотели бы учить.</p>
                                                        </div>
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
                                                        <div><span><strong>2 урока в неделю</strong> с нашим учителем позволят вам легко и быстро достигать цели.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Регулярные занятия</strong> без длительных перерывов позволят вам быстро осваивать музыкальный репертуар и приобретать вокальные навыки.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Самостоятельная практика</strong> дома и выполнение рекомендаций учителя  необходимы всем ученикам старше 7 лет.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Обучение будет продолжительным</strong> и вам нужно быть к этому готовым.</span></div>
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
                                                            <p><strong>Самостоятельная работа дома</strong> закрепит материалы уроков.</p>
                                                            <p><strong>Вам достаточно практиковаться самостоятельно 15-20</strong> минут ежедневно на начальном этапе.</p>
                                                            <p><strong>Вы получите удовольствие</strong> от самостоятельных занятий дома, достигнув результат.</p>
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
                                                        <div><span>Помочь подготовиться к уроку: включить гаджет и наушники, проверить звук, перейти по ссылке на онлайн урок</span></div>
                                                    </div>
                                                    <div class="io-heart">
                                                        <div><span>Проследить и помочь ребенку организовать самостоятельную работу дома.</span></div>
                                                    </div>
                                                    <div class="io-heart">
                                                        <div><span>Набраться терпения.</span></div>
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
                                                            <img src="/wp-content/uploads/2023/12/1-1.png" alt="">
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            <img src="/wp-content/uploads/2023/12/2-1.png" alt="">
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            <img src="/wp-content/uploads/2023/12/3-1.png" alt="">
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
                                                            <p>Если вы хотите заказать пробный урок вокала, вам необходимо <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">записаться и оплатить</a> <span class="io-fw-semibold io-pink-main ioArrayToTextElementsDemo">$6</span>.<br>Пробный урок проходит индивидуально и длится <span class="io-fw-semibold">45 минут</span>.</p>
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
                                                            <span>Купленные уроки не имеют срока использования.</span>
                                                        </div>
                                                        <div class="io-heart">
                                                            <span>Вы можете использовать купленные уроки для обучения на любых курсах.</span>
                                                        </div>
                                                        <div class="io-heart">
                                                            <span>Все члены семьи могут использовать купленные уроки.</span>
                                                        </div>
                                                        <div class="io-heart">
                                                            <span>Необходимо предупредить нас об отмене урока минимум за 24 часа, иначе урок будет считаться состоявшимся.</span>
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
                                                                <a class="io-link" href="#detailCourseHeading-9" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Польза уроков вокала</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="io-text-wrapper">
                                                        <h2 id="detailCourseHeading-1">Обзор курса</h2>
                                                        <p>Курс вокала проводится онлайн и предназначен для детей от 5 лет и старше, а также для взрослых любого возраста. На нашем курсе вокала вы научитесь петь классические арии, джазовые и современные песни, а также освоите чтение нот. Мы разработали программу обучения с разделением на уровни: начальный, средний и продвинутый. Для детей 5 - 6 лет предусмотрен подготовительный уровень.</p>
                                                        <p>Урок вокала длится 45 минут и проводится индивидуально. Наши педагоги владеют русским и английским языками, предоставляя возможность выбора языка обучения студенту. Вопросы расписания уроков вокала онлайн решаются гибко и с учетом пожеланий каждого студента, благодаря чему график остается удобным для каждого учащегося.</p>
                                                        <p>Онлайн уроки вокала мы проводим через платформы Google Meet и Zoom. Преподаватели вокала имеют высшее музыкальное образование, обладают обширным педагогическим опытом и многие являются активными исполнителями.</p>
                                                        <p>Частота уроков вокала онлайн подбирается индивидуально для каждого студента. Рекомендуется посещать не менее двух занятий в неделю для обеспечения стабильного прогресса, выполнения домашних заданий и закрепления материала предыдущих уроков.</p>
                                                        <p>Участие студентов в музыкальных конкурсах и концертах поощряется грамотами, подтверждающими их творческое развитие. По завершении каждого модуля студент получает сертификат, подтверждающий успешное освоение программы и демонстрацию соответствующего уровня знаний и навыков. По окончании каждого уровня студент награждается дипломом, свидетельствующим о владении необходимыми навыками и знаниями в области вокала, приобретенными в ходе курса.</p>
                                                        <h2 id="detailCourseHeading-2">Описание методики</h2>
                                                        Методика обучения вокалу — это авторская программа Монтессори центра, нацеленная на индивидуальные достижения каждого ученика.
                                                        Этот подход основывается на установлении конкретных музыкальных целей для учеников на старте их обучения. Эти цели представляют собой музыкальные композиции различного уровня сложности, освоение которых является задачей учащегося. Вместо стандартных экзаменов, оценка прогресса производится через выступления на концертах и участие в вокальных конкурсах, где успешное выступление становится ключевым элементом обучения.
                                                        <h2 id="detailCourseHeading-3">Преимущества методики</h2>
                                                        <p>1. Ясная цель: установление конкретных задач позволяет ученикам понимать, к чему они стремятся, и предоставляет четкий ориентир для достижения этих задач.</p>
                                                        <p>2. Гибкость в продолжительности обучения: наша программа позволяет учащимся двигаться вперед с индивидуальной скоростью, в зависимости от того, насколько быстро они достигают своих целей.</p>
                                                        <p>3. Реальный сценический опыт: выступления и конкурсы предоставляют практический опыт и возможность применять навыки на сцене, что более предпочтительно, чем сдача экзаменов.</p>
                                                        <p>4. Доступность для любого возраста: наша методика обучения подходит как детям, так и взрослым, обеспечивая универсальность и доступность музыкального образования.</p>
                                                        <p>5. Возможность продолжения обучения: после достижения всех целей ученики могут продолжать развивать свои вокальные умения, постоянно повышая свой уровень исполнения.</p>
                                                        <p>Наша методика обучения вокалу подходит для студентов всех уровней подготовки и предполагает индивидуальный путь развития, от начинающих до опытных певцов, стремящихся к совершенствованию своего мастерства.</p>
                                                        <p>Этот гибкий и ориентированный на студента подход к обучению делает процесс более динамичным и менее напряженным. Учащиеся могут наслаждаться музыкальным образованием, фокусируясь на достижении своих личных целей.</p>
                                                        <p>В итоге, наша методика обучения вокалу подчеркивает важность индивидуального подхода и создает мотивирующую образовательную среду. Она обеспечивает студентам комплексные вокальные навыки, уверенность, вдохновение и интерес к пению, которые они сохранят на долгие годы.</p>
                                                        <h2 id="detailCourseHeading-4">Уровень “Подготовительный”</h2>
                                                        <p>Программа подготовительного уровня вокала предназначена для детей в возрасте 5-6 лет. В этом раннем возрасте на уроках вокала онлайн учащиеся знакомятся с основами музыкальной грамотности, правильным дыханием и, самое главное, начинают петь с первых занятий. Установление правильного дыхания и постепенное освоение навыков артикуляции голоса являются основой и важными элементами вокального мастерства. Чем раньше ребенок начнет обучение вокалу, тем больше у него будет времени для достижения высокого уровня исполнения!</p>
                                                        <h2 id="detailCourseHeading-5">Уровень “Начальный”</h2>
                                                        <p>На начальном уровне ученики полностью осваивают основы музыкальной грамотности и учатся читать вокальные партии, что является фундаментом музыкального образования. В этот период включается изучение ритма, мелодии и различных музыкальных символов, необходимых для точного исполнения музыкальных произведений. К концу курса учащиеся могут исполнять простые классические и современные песни, владея базовыми техниками вокала и справляясь с партиями начального и среднего уровня сложности.</p>
                                                        <h2 id="detailCourseHeading-6">Уровень “Средний”</h2>
                                                        <p>На среднем уровне учащиеся приобретают все ключевые навыки, необходимые для исполнения более сложных вокальных произведений. Основное внимание уделяется развитию вокальной гибкости, уверенности и музыкальности. Уверенность в исполнении проявляется в способности контролировать голос, что важно для достижения чистоты звучания. Музыкальность охватывает способность выражать эмоциональный смысл произведения, делая исполнение более эмоциональным и запоминающимся.</p>
                                                        <h2 id="detailCourseHeading-7">Уровень “Продвинутый”</h2>
                                                        <p>На продвинутом уровне ученики изучают сложные вокальные произведения, передавая замысел автора и стиль музыки. Учащиеся изучают различные техники пения, овладевают разнообразными вокальными приемами и приобретают навыки фразировки и динамики.</p>
                                                        <p>К завершению вокального курса ученики способны исполнять сложные композиции, полноценно передавая замысел автора и музыкальный стиль. Они могут глубоко проникать в суть вокального произведения и воплощать его через свое исполнение, применяя все изученные технические и выразительные средства. У учеников развиты широкий диапазон, разнообразные приемы и техники пения.</p>
                                                        <p>За годы обучения также формируется глубокое понимание музыкальной теории и гармонии, что позволяет учащимся профессионально анализировать и интерпретировать вокальные произведения. Внимание уделяется работе с музыкальным оборудованием: микрофоном, колонками, возможностями обработки голоса на микшерном пульте.</p>
                                                        <p>И, наконец, на протяжении всего курса активно развиваются исполнительские навыки. Ученики становятся активными участниками концертов и конкурсов, где приобретают необходимый опыт публичных выступлений, что способствует их сценической уверенности и умению управлять волнением перед аудиторией. В результате завершения обучения ученики обладают всеми необходимыми навыками и знаниями для профессионального вокального исполнения.</p>
                                                        <h2 id="detailCourseHeading-8">Цели курса </h2>
                                                        <p>Одной из ключевых целей курса вокала является освоение техники пения, ведь голос — это исключительный и уникальный музыкальный инструмент. Для начинающего певца это включает в себя развитие вокальной гибкости и контроля дыхания, критически важных для исполнения сложных музыкальных произведений без потери ритма или точности. Это требует постоянных тренировок и усовершенствования своего мастерства.</p>
                                                        <p>Кроме того, учащиеся обучаются различным вокальным техникам, которые позволяют изменять приемы звукоизвлечения в соответствии с музыкальным контекстом и желаемым эмоциональным эффектом.</p>
                                                        <p>Еще одна важная задача обучения заключается в том, чтобы научиться читать вокальные партии. Это незаменимый навык для каждого певца, позволяющий более свободно ориентироваться в музыкальных произведениях и превращать нотные записи в полноценное исполнение. После достижения этой цели наши студенты могут самостоятельно анализировать и исполнять произведения, найденные в интернете или любом другом источнике.</p>
                                                        <p>Одна из целей курса — это научиться исполнять произведения различных жанров. Это способствует развитию исполнительской уверенности, учит управлять волнением перед аудиторией и позволяет оценивать личный прогресс в контексте исполнения других вокалистов. Цель занятий — не соревнование, а непрерывное совершенствование и наслаждение процессом пения.</p>
                                                        <h2 id="detailCourseHeading-9">Польза уроков вокала</h2>
                                                        <p>Вокал — это не только искусство, но и уникальный способ самовыражения. Многие из нас пели в детстве, некоторые продолжают петь во взрослом возрасте, а некоторые решают пройти профессиональное обучение. Уроки вокала могут принести пользу не только для вашего голоса, но и для всего организма в целом. Рассмотрим ключевые преимущества таких уроков.</p>
                                                        <p>Улучшение дыхательной системы. Вокальные упражнения тренируют дыхательные мышцы. Когда мы пытаемся выдержать длинную ноту или петь высокие звуки, это стимулирует работу легких и улучшает общее состояние дыхательной системы.</p>
                                                        <p><strong>Развитие слуха.</strong> На уроках вокала основное внимание уделяется правильному интонированию и выразительности. Ученик учится слышать разные ноты и оттенки, что развивает музыкальный слух.</p>
                                                        <p><strong>Снижение стресса.</strong> Пение — это отличный способ расслабиться и отвлечься от повседневных проблем. Научные исследования показали, что во время пения в организме вырабатывается эндорфин — гормон счастья, который помогает бороться со стрессом и депрессией.</p>
                                                        <p><strong>Самодисциплина и ответственность.</strong> Регулярные уроки требуют дисциплины. Постоянные занятия и упражнения помогут развить усидчивость и ответственное отношение к своим обязанностям.</p>
                                                        <p><strong>Социализация.</strong> На уроках или в хоре вы можете завести новых друзей, которые разделяют ваш интерес к музыке. Общение с единомышленниками способствует улучшению социальных навыков и расширению кругозора.</p>
                                                        <p><strong>Укрепление самооценки.</strong> Приобретение новых навыков и умений, таких как пение, может значительно повысить вашу уверенность в себе. Каждый новый достигнутый этап или пройденный уровень прибавляет уверенности и чувство достижения результата.</p>
                                                        <p><strong>Развитие креативности.</strong> Пение помогает развивать творческий потенциал. Вы начинаете экспериментировать с разными стилями и техниками, ищете свой уникальный стиль и звучание.</p>
                                                        <p><strong>В заключение,</strong> уроки вокала — это не только возможность научиться петь красиво, но и способ улучшить свою жизнь в целом. Благодаря этим урокам, вы можете стать более уверенным в себе, научиться справляться со стрессом, развить свои творческие способности и даже улучшить физическое состояние своего организма.</p>
                                                        <p>Независимо от того, стремитесь ли вы стать профессиональным певцом или просто хотите получать удовольствие от пения, уроки вокала будут вам полезны. Начните свое музыкальное путешествие уже сегодня!</p>
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
                                                        Develop vocal skills, learn proper breathing and sound production.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Music Literacy</span>
                                                    </div>
                                                    <div class="io-content">
                                                        Learn to read music notes of varying complexity for vocals.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Artistry</span>
                                                    </div>
                                                    <div class="io-content">
                                                        Learn to perform vocal works from different genres.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Stage Experience</span>
                                                    </div>
                                                    <div class="io-content">
                                                        Gain experience performing at concerts, festivals, and competitions.
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
                                                        The vocal training methodology is a unique development of the Montessori center. At the beginning of the course, objectives (levels) are set for each student, which they will sequentially achieve during their study at the Montessori center. A specific goal is the successful performance of a vocal piece of a certain level of complexity at a concert or competition.
                                                    </div>
                                                    <div class="io-fw-semibold io-fs-20">
                                                        Advantages of Our Methodology
                                                    </div>
                                                    <div class="io-check">
                                                        <span>The student understands the objectives set before them</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>The duration of the course is determined by the speed of achieving the set objectives, not by fixed calendar periods</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Instead of exams, the student performs at concerts and music competitions</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>This method is suitable for both children and adults</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>To further refine their skills, students can continue their education even after achieving their initial goals</span>
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
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-laptop.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>A gadget with a camera and microphone</strong> will be needed for online lessons.</p>
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
                                                            <p><strong>Prepare a list of songs</strong> you like and would like to learn.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingSix">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseSix" aria-expanded="false" aria-controls="courseAccordion-collapseSix">
                                                    Time Investment for Learning
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseSix" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingSix" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-check">
                                                        <div><span><strong>Two lessons per week</strong> with our teacher will allow you to reach your goals easily and quickly.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Regular practice</strong> without long breaks will enable you to swiftly master the musical repertoire and acquire vocal skills.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Independent practice at home</strong> and following the teacher's recommendations are necessary for all students over the age of 7.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Be prepared for the learning</strong> to be extensive and ongoing.</span></div>
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
                                                            <p><strong>Independent work at home</strong> will reinforce the materials covered in lessons.</p>
                                                            <p>At the beginning stage, it is sufficient to practice independently <strong>for 15-20 minutes daily</strong>.</p>
                                                            <p><strong>You will enjoy</strong> your independent practice sessions at home as you see your progress.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingSeven">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseSeven" aria-expanded="false" aria-controls="courseAccordion-collapseSeven">
                                                    Recommendations for Parents
                                                </button>
                                            </h2>
                                            <div id="courseAccordion-collapseSeven" class="accordion-collapse collapse" aria-labelledby="courseAccordion-headingSeven" data-bs-parent="#courseAccordionMain">
                                                <div class="io-accordion__body accordion-body">
                                                    <div class="io-heart">
                                                        <div><span>Help prepare for the lesson: turn on the gadget and headphones, check the sound, go to the link for the online lesson.</span></div>
                                                    </div>
                                                    <div class="io-heart">
                                                        <div><span>Ensure and assist your child in organizing their independent work at home.</span></div>
                                                    </div>
                                                    <div class="io-heart">
                                                        <div><span>Be patient.</span></div>
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
                                                            <img src="/wp-content/uploads/2023/12/1-1.png" alt="">
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            <img src="/wp-content/uploads/2023/12/2-1.png" alt="">
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            <img src="/wp-content/uploads/2023/12/3-1.png" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-accordion__item accordion-item">
                                            <h2 class="io-accordion__header accordion-header" id="courseAccordion-headingNineB">
                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#courseAccordion-collapseNineB" aria-expanded="false" aria-controls="courseAccordion-collapseNineB">
                                                Cost of Education
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
                                                            <p>If you would like to book a trial vocal lesson, you need <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">to schedule and pay</a> <span class="io-fw-semibold io-pink-main ioArrayToTextElementsDemo">$6</span>.<br>The trial lesson is conducted individually and lasts for <span class="io-fw-semibold">45 minutes</span>.</p>
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
                                                            <span>You can use purchased lessons for any courses.</span>
                                                        </div>
                                                        <div class="io-heart">
                                                            <span>All family members can use purchased lessons.</span>
                                                        </div>
                                                        <div class="io-heart">
                                                            <span>Please notify us of lesson cancellations at least 24 hours in advance; otherwise, the lesson will be considered as conducted.</span>
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
                                                                <a class="io-link" href="#detailCourseHeading-2" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">Description of Methodology</a>
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
                                                                <a class="io-link" href="#detailCourseHeading-9" data-scroll-offset="130" data-tablet-scroll-offset="120" data-mobile-scroll-offset="62">The Benefits of Vocal Lessons</a>
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
                                                        <p>The vocal course is conducted online and is designed for children from the age of 5 and up, as well as adults of any age. In our vocal course, you will learn to sing classical arias, jazz, and contemporary songs, as well as master note reading. We have developed a training program divided into levels: beginner, intermediate, and advanced. A preparatory level is available for children aged 5 - 6 years.</p>
                                                        <p>Each vocal lesson lasts 45 minutes and is conducted individually. Our teachers are proficient in Russian and English, offering students the choice of language for their education. The scheduling of online vocal lessons is flexible and takes into account the wishes of each student, ensuring that the timetable is convenient for every learner.</p>
                                                        <p>We conduct online vocal lessons through platforms such as Google Meet and Zoom. Our vocal teachers have higher musical education, extensive pedagogical experience, and many are active performers.</p>
                                                        <p>The frequency of online vocal lessons is tailored to each student individually. It is recommended to attend at least two sessions per week to ensure steady progress, completion of homework, and reinforcement of material from previous lessons.</p>
                                                        <p>Student participation in music competitions and concerts is encouraged and recognized with certificates that confirm their creative development. Upon completion of each module, students receive a certificate confirming the successful mastery of the program and demonstration of the appropriate level of knowledge and skills. At the end of each level, students are awarded a diploma, certifying the possession of the necessary skills and knowledge in the field of vocals, acquired during the course.</p>
                                                        <h2 id="detailCourseHeading-2">Description of Methodology</h2>
                                                        <p>The vocal training methodology is a proprietary program of the Montessori center, aimed at the individual achievements of each student.</p>
                                                        <p>This approach is based on setting specific musical goals for students at the start of their training. These goals consist of musical compositions of varying levels of complexity, the mastery of which is the task of the student. Instead of standard exams, progress is assessed through performances at concerts and participation in vocal competitions, where a successful performance becomes a key element of the training.</p>
                                                        <h2 id="detailCourseHeading-3">Advantages of the Methodology</h2>
                                                        <p>The advantages of our methodology include the following:</p>
                                                        <p>1. Clear Objective: Setting specific tasks allows students to understand their goals and provides a clear benchmark for achieving them.</p>
                                                        <p>2. Flexible Duration of Learning: Our program allows students to progress at their individual pace, depending on how quickly they reach their goals.</p>
                                                        <p>3. Real Stage Experience: Performances and competitions offer practical experience and the opportunity to apply skills on stage, which is more advantageous than taking exams.</p>
                                                        <p>4. Accessibility for All Ages: Our teaching methodology is suitable for both children and adults, ensuring universality and accessibility of music education.</p>
                                                        <p>5. tunity for Continued Learning: After achieving all their objectives, students can continue to develop their vocal skills, constantly elevating their level of performance.</p>
                                                        <p>Our vocal training methodology is suitable for students of all levels of preparation and assumes an individualized path of development, from beginners to experienced singers aiming to perfect their craft.</p>
                                                        <p>This flexible and student-oriented approach to learning makes the process more dynamic and less stressful. Students can enjoy their musical education, focusing on achieving their personal goals.</p>
                                                        <p>Ultimately, our vocal training methodology emphasizes the importance of an individual approach and creates a motivating educational environment. It equips students with comprehensive vocal skills, confidence, inspiration, and a passion for singing that they will retain for many years.</p>
                                                        <h2 id="detailCourseHeading-4">Preparatory Level</h2>
                                                        <p>The preparatory vocal program is designed for children aged 5-6 years. At this early age, during online vocal lessons, students are introduced to the basics of music literacy, proper breathing, and most importantly, they start singing from the very first lessons. Establishing proper breathing techniques and gradually mastering voice articulation skills are foundational and crucial elements of vocal expertise. The earlier a child begins vocal training, the more time they will have to achieve a high level of performance.</p>
                                                        <h2 id="detailCourseHeading-5">Beginner Level</h2>
                                                        <p>At the beginner level, students fully grasp the basics of music literacy and learn to read vocal scores, which form the foundation of musical education. This stage includes studying rhythm, melody, and various musical symbols necessary for the accurate performance of musical pieces. By the end of the course, students can perform simple classical and contemporary songs, possessing basic vocal techniques and managing parts of beginner and intermediate difficulty.</p>
                                                        <h2 id="detailCourseHeading-6">Intermediate Level</h2>
                                                        <p>At the intermediate level, students acquire all the key skills needed to perform more complex vocal works. Focus is placed on developing vocal flexibility, confidence, and musicality. Confidence in performance is reflected in the ability to control the voice, which is crucial for achieving a pure sound. Musicality encompasses the ability to convey the emotional meaning of the piece, making the performance more heartfelt and memorable.</p>
                                                        <h2 id="detailCourseHeading-7">Advanced Level</h2>
                                                        <p>At the advanced level, students learn to perform complex vocal compositions, conveying the composer's intent and the style of the music. Students explore various singing techniques, master diverse vocal practices, and acquire skills in phrasing and dynamics.</p>
                                                        <p>By the end of the vocal course, students are capable of performing complex compositions, fully conveying the composer's intent and musical style. They can deeply penetrate the essence of a vocal work and express it through their performance, using all the technical and expressive tools they have learned. The students have a broad range and various techniques and practices of singing.</p>
                                                        <p>Over the years of training, a deep understanding of musical theory and harmony is also formed, enabling students to professionally analyze and interpret vocal works. Attention is given to working with musical equipment: microphones, speakers, and voice processing capabilities on a mixing console.</p>
                                                        <p>Finally, throughout the course, performance skills are actively developed. Students become active participants in concerts and competitions, where they gain the necessary experience for public performances, contributing to their stage confidence and ability to manage stage fright. Upon completion of the training, students possess all the necessary skills and knowledge for professional vocal performance.</p>
                                                        <h2 id="detailCourseHeading-8">Course Objectives</h2>
                                                        <p>One of the key objectives of the vocal course is to master singing techniques, as the voice is an exceptional and unique musical instrument. For the beginner singer, this includes developing vocal flexibility and breath control, which are critically important for performing complex musical pieces without losing rhythm or precision. This requires constant practice and refinement of one's craft.</p>
                                                        <p>Additionally, students are trained in various vocal techniques that allow them to alter sound production methods in accordance with the musical context and desired emotional effect.</p>
                                                        <p>Another important goal of the training is to learn how to read vocal scores. This is an indispensable skill for every singer, allowing for greater freedom in navigating musical works and transforming written music into full-fledged performance. After achieving this goal, our students are able to independently analyze and perform pieces found on the internet or from any other source.</p>
                                                        <p>One of the course's objectives is to learn to perform works from various genres. This helps to develop performance confidence, teaches how to manage stage fright in front of an audience, and allows personal progress to be gauged in the context of other vocalists' performances. The aim of the lessons is not competition, but continuous improvement and enjoyment of the singing process.</p>
                                                        <h2 id="detailCourseHeading-9">The Benefits of Vocal Lessons</h2>
                                                        <p>Vocals are not just an art form, but also a unique means of self-expression. Many of us sang as children, some continue to sing in adulthood, while others decide to undergo professional training. Vocal lessons can be beneficial not just for your voice, but for your entire body as a whole. Let's consider the key advantages of such lessons.</p>
                                                        <p><strong>Improved respiratory system.</strong> Vocal exercises strengthen the respiratory muscles. When we try to hold a long note or sing high pitches, it stimulates lung function and enhances the overall health of the respiratory system.</p>
                                                        <p><strong>Development of musical ear.</strong> In vocal lessons, the main focus is on proper intonation and expressiveness. Students learn to hear various notes and tones, which cultivates their musical ear.</p>
                                                        <p><strong>Stress reduction.</strong> Singing is an excellent way to relax and take a break from daily problems. Scientific research has shown that during singing, the body releases endorphins - the "happiness hormone", which helps combat stress and depression.</p>
                                                        <p><strong>Self-discipline and responsibility.</strong> Regular lessons demand discipline. Consistent practice and exercises help develop perseverance and a responsible attitude towards one's duties.</p>
                                                        <p><strong>Socialization.</strong> In lessons or in a choir, you can make new friends who share your interest in music. Interacting with like-minded individuals fosters improved social skills and broadens one’s horizons.</p>
                                                        <p><strong>Strengthened self-esteem. </strong> Acquiring new skills and abilities, such as singing, can greatly boost your self-confidence. Every new milestone or level passed adds to confidence and a sense of accomplishment.</p>
                                                        <p><strong>Boosted creativity.</strong> Singing aids in cultivating creative potential. You begin to experiment with various styles and techniques, searching for your unique style and sound.</p>
                                                        <p><strong>In conclusion,</strong> vocal lessons are not just an opportunity to learn to sing beautifully but also a way to enhance your life as a whole. Thanks to these lessons, you can become more self-assured, learn to cope with stress, develop your creative abilities, and even improve the physical condition of your body.</p>
                                                        <p>Whether you aim to become a professional singer or simply want to enjoy singing, vocal lessons will be beneficial to you. Start your musical journey today!</p>
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
                                <h2 class="io-heading-2 io-course-lesson__heading">Как проходят уроки вокала</h2>
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
                                            <p><span class="io-fw-semibold">Оборудование:</span> вам понадобится компьютер, планшет или смартфон с доступом в интернет и камерой для видео звонков.</p>
                                            <p><span class="io-fw-semibold">Интернет-соединение:</span> убедитесь, что ваше интернет-соединение стабильно. Чем быстрее и надежнее ваш интернет, тем более гладким будет урок.</p>
                                            <p><span class="io-fw-semibold">Видеоконференц-платформа:</span> мы используем <a href="https://zoom.us/ru/download" target="_blank" class="io-purple-main io-link">Zoom</a> или <a href="https://meet.google.com" target="_blank" class="io-purple-main io-link">Google Meet</a> для проведения уроков онлайн. Вам нужно будет загрузить и установить соответствующее приложение, если у вас его еще нет.</p>
                                            <p><span class="io-fw-semibold">Звук:</span> используйте наушники для лучшего качества звука. Это поможет уменьшить фоновый шум и улучшит взаимопонимание между вами и преподавателем.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">2</div>
                                        <div class="io-steps__title">Подготовка к уроку</div>
                                        <div class="io-steps__dots">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">Ссылка на урок</span> вам придет заранее по электронной почте.</p>
                                            <p><span class="io-fw-semibold">Пришлите нам ссылки на песни</span>, которые бы вы хотели разучить с учителем. Список ваших любимых песен поможет педагогу подобрать для вас репертуар.</p>
                                            <p><span class="io-fw-semibold">Установите гаджет</span> для онлайн урока напротив студента, чтобы учитель видел лицо ученика.</p>
                                            <p><span class="io-fw-semibold">Войдите в приложение</span> Zoom или Google Meet по ссылке на урок немного заранее, чтобы у вас было время на решение возможных технических проблем.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">3</div>
                                        <div class="io-steps__title">Во время урока</div>
                                        <div class="io-steps__dots">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">Инструкции и обратная связь:</span> ваш преподаватель будет давать вам конкретные инструкции по выполнению упражнений, освоению новых песен и улучшению ваших вокальных навыков.</p>
                                            <p><span class="io-fw-semibold">Вопросы:</span> в любой момент урока вы можете задать вопросы. Не стесняйтесь спрашивать о том, что непонятно.</p>
                                            <p><span class="io-fw-semibold">Практика:</span> большая часть урока будет посвящена практическому исполнению. Вы будете петь, преподаватель будет показывать на своем примере, слушать и давать советы.</p>
                                            <p><span class="io-fw-semibold">Демонстрация преподавателем:</span> ваш преподаватель будет демонстрировать определенные приемы пения и фрагменты песен, позволяя вам лучше понять, как они должны звучать.</p>
                                            <p><span class="io-fw-semibold">Завершение урока:</span> к концу урока вы и ваш преподаватель обсудите пройденный материал и план на следующий урок.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">4</div>
                                        <div class="io-steps__title">После урока</div>
                                        <div class="io-steps__empty">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p>Вам будут предоставлены материалы для самостоятельной работы дома, включая ноты и записи, которые помогут вам практиковаться до следующего урока.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps io-steps--last">
                                        <div class="io-steps__empty">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p class="io-purple-main io-fs-18 io-fw-semibold">Мы гарантируем, что онлайн уроки вокала - это удобно и эффективно.<br>Обучение в Монтессори центре будет приятным и продуктивным!</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                            <section class="io-intersection io-course-lesson">
                                <h2 class="io-heading-2 io-course-lesson__heading">How Vocal Lessons Are Conducted</h2>
                                <div class="io-video">
                                    <p>Watch Lesson Video</p>
                                    <button class="io-video__lightbox io-video__button" type="button" data-video-id="3TiYGxOQDYw"></button>
                                </div>
                                <div class="io-steps__wrapper">
                                    <div class="io-steps">
                                        <div class="io-steps__number">1</div>
                                        <div class="io-steps__title">Technical Information</div>
                                        <div class="io-steps__dots">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">Equipment:</span> You will need a computer, tablet, or smartphone with internet access and a camera for video calls.</p>
                                            <p><span class="io-fw-semibold">Internet Connection:</span> Ensure that your internet connection is stable. The faster and more reliable your internet is, the smoother the lesson will be.</p>
                                            <p><span class="io-fw-semibold">Video Conferencing Platform:</span> We use <a href="https://zoom.us/download" target="_blank" class="io-purple-main io-link">Zoom</a> or <a href="https://meet.google.com" target="_blank" class="io-purple-main io-link">Google Meet</a> for online lessons. You'll need to download and install the respective application if you don't have it yet.</p>
                                            <p><span class="io-fw-semibold">Sound:</span> Use headphones for better sound quality. It will help reduce background noise and improve understanding between you and the teacher.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">2</div>
                                        <div class="io-steps__title">Preparation for the Lesson</div>
                                        <div class="io-steps__dots">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">You will receive a link</span> to the lesson in advance by email.</p>
                                            <p><span class="io-fw-semibold">Send us links to the songs</span> you'd like to learn with the teacher. A list of your favorite songs will help the instructor choose a repertoire for you.</p>
                                            <p><span class="io-fw-semibold">Set up your device</span> for the online lesson facing the student so the teacher can see the student's face.</p>
                                            <p><span class="io-fw-semibold">Log into the Zoom or Google Meet</span> app via the lesson link a bit in advance to give you time to solve any potential technical issues.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">3</div>
                                        <div class="io-steps__title">During the Lesson</div>
                                        <div class="io-steps__dots">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">Instructions and Feedback:</span> Your teacher will give you specific instructions on exercises, learning new songs, and improving your vocal skills.</p>
                                            <p><span class="io-fw-semibold">Questions:</span> At any point during the lesson, you can ask questions. Don't hesitate to ask about anything unclear.</p>
                                            <p><span class="io-fw-semibold">Practice:</span> A large portion of the lesson will be dedicated to practical performance. You will sing, the teacher will demonstrate, listen, and give advice.</p>
                                            <p><span class="io-fw-semibold">Teacher's Demonstration:</span> Your teacher will demonstrate specific singing techniques and song excerpts, allowing you to better understand how they should sound.</p>
                                            <p><span class="io-fw-semibold">End of the Lesson:</span> By the end of the lesson, you and your teacher will discuss the covered material and the plan for the next lesson.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">4</div>
                                        <div class="io-steps__title">After the Lesson</div>
                                        <div class="io-steps__empty">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p>You will be provided with materials for independent work at home, including sheet music and recordings, to help you practice before the next lesson.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps io-steps--last">
                                        <div class="io-steps__empty">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p class="io-purple-main io-fs-18 io-fw-semibold">We guarantee that online vocal lessons are convenient and effective.<br>Training at the Montessori Center will be enjoyable and productive!</p>
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
                                <h2 class="io-heading-2">Программа курса вокала</h2>
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
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert-sing-1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--preschool">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Модули</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>п1</span>
                                                <p>Первые упражнения для голоса и дыхания</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>п2</span>
                                                <p>Учимся петь детские песни</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>п3</span>
                                                <p>Работа над интонированием и дикцией</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>п4</span>
                                                <p>Подготовка и выступление на концерте</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>Смотреть диплом</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert-sing-1.png" alt="">
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
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert-sing-2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--light">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Модули</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>1</span>
                                                <p>Работа над постановкой голосового аппарата</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>2</span>
                                                <p>Изучение песен с небольшим вокальным диапазоном</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>3</span>
                                                <p>Развитие слуха, ритма, вокального диапазона</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>4</span>
                                                <p>Освоение работы с микрофоном и музыкальным оборудованием</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>5</span>
                                                <p>Изучение сольных песен разного характера</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>6</span>
                                                <p>Подготовка и выступление на концерте</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>Смотреть диплом</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert-sing-2.png" alt="">
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
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert-sing-3.png" alt="">
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--medium">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Модули</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>7</span>
                                                <p>Упражнения на расширение вокального диапазона</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>8</span>
                                                <p>Работа над индивидуальностью голоса</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>9</span>
                                                <p>Изучение репертуара среднего уровня сложности</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>10</span>
                                                <p>Работа над выразительностью и сценическим образом. Концерт.</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>Смотреть диплом</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert-sing-3.png" alt="">
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
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert-sing-4.png" alt="">
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--hard">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Модули</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>11</span>
                                                <p>Изучение различных техник пения (а капелла, рок, джаз)</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>12</span>
                                                <p>Работа над сложными вокальными произведениями</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>13</span>
                                                <p>Работа над собственным стилем пения</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>14</span>
                                                <p>Исполнение песен на разных языках на концертах и конкурсах</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>Смотреть диплом</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert-sing-4.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="io-text-wrapper">
                                    <p>Программа обучения курса вокала разработана для детей возрастом от 7 лет и взрослых. Программа включает три уровня: начальный, средний и продвинутый, по окончанию которых студенты получают дипломы. Если студент ранее не учился, он начинает обучение с начального уровня. Средний и продвинутый уровни требуют подготовки. Дети возрастом 5 - 6 лет начинают обучение с подготовительного уровня.</p>
                                    <p class="io-purple-main io-fs-18 io-fw-semibold">Начните обучение! Для этого запишитесь на <a type="button" class="io-purple-main io-fw-semibold io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">пробный урок</a>!</p>
                                </div>
                            </section>
                            <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                            <section class="io-intersection io-course-programs">
                                <h2 class="io-heading-2">Vocal Course Program</h2>
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
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert-sing-1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--preschool">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Modules</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>p1</span>
                                                <p>Initial exercises for voice and breathing</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>p2</span>
                                                <p>Learning to sing children's songs</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>p3</span>
                                                <p>Working on intonation and diction</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>p4</span>
                                                <p>Preparing and performing in a concert</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>View Diploma</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert-sing-1.png" alt="">
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
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert-sing-2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--light">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Modules</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>1</span>
                                                <p>Voice placement training</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>2</span>
                                                <p>Studying songs with a limited vocal range</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>3</span>
                                                <p>Working on intonation, rhythm, and vocal range</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>4</span>
                                                <p>Mastering the use of microphones and musical equipment</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>5</span>
                                                <p>Studying solo songs of various natures</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>6</span>
                                                <p>Preparing and performing in a concert</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>View Diploma</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert-sing-2.png" alt="">
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
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert-sing-3.png" alt="">
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--medium">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Modules</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>7</span>
                                                <p>Exercises to expand vocal range</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>8</span>
                                                <p>Working on voice uniqueness</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>9</span>
                                                <p>Studying mid-level difficulty repertoire</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>10</span>
                                                <p>Working on expressiveness and stage persona. Concert</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>View Diploma</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert-sing-3.png" alt="">
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
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert-sing-4.png" alt="">
                                            </a>
                                        </div>
                                        <div class="io-course-programs__content io-course-programs__content--hard">
                                            <div class="io-course-programs__item d-xl-none">
                                                <p class="io-fw-semibold">Modules</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>11</span>
                                                <p>Studying various singing techniques (a cappella, rock, jazz)</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>12</span>
                                                <p>Working on complex vocal pieces</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>13</span>
                                                <p>Developing one's own singing style</p>
                                            </div>
                                            <div class="io-course-programs__item">
                                                <span>14</span>
                                                <p>Performing songs in different languages at concerts and competitions</p>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-sm-none">
                                                <span>View Diploma</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/cert-sing-4.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="io-text-wrapper">
                                    <p>The vocal course curriculum is designed for children aged 7 and above as well as for adults. The program consists of three levels: beginner, intermediate, and advanced. Upon completion, students receive diplomas. If a student hasn't taken lessons before, they will start at the beginner level. The intermediate and advanced levels require prior preparation. Children aged 5-6 years begin with a preparatory level.</p>
                                    <p class="io-purple-main io-fs-18 io-fw-semibold">Start learning now! To do so, sign up for a <a type="button" class="io-purple-main io-fw-semibold io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">trial lesson</a>!</p>
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
                                                                        <input class="io-radio" type="radio" id="iocheckboxgift22" name="checkbox-group" checked>
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
                                                                        <input class="io-radio" type="radio" id="iocheckboxgift22" name="checkbox-group" checked>
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
                                                                        <input class="io-checkbox" type="checkbox" id="iocheckbox22" name="checkbox-group" checked>
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
                                                                        <input class="io-checkbox" type="checkbox" id="iocheckbox22" name="checkbox-group" checked>
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
                                                Как записаться на курс вокала онлайн?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-1" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-1" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Записаться на пробный урок вокала и оплатить его можно <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">здесь</a>. После этого наш администратор свяжется с вами и согласует расписание.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-2">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-2" aria-expanded="false" aria-controls="faqAccordion-collapse-2">
                                            С какого возраста можно учиться детям на курсе вокала онлайн?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-2" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Мы приглашаем на онлайн уроки вокала детей от 5 лет.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-2b">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-2b" aria-expanded="false" aria-controls="faqAccordion-collapse-2b">
                                                Сколько стоит пробный урок?
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
                                                Сколько стоит обучение? Есть ли скидки?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-3" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Вам необходимо купить абонемент минимум на 4 урока. Такой абонемент стоит <span class="ioArrayToTextElements03">$56</span>. Выбрать количество уроков можно <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">здесь</a>. При покупке от 80 уроков одним платежом действует скидка от <span class="ioArrayToTextElements62">$120</span>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-4">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-4" aria-expanded="false" aria-controls="faqAccordion-collapse-4">
                                            Как оплатить курс вокала?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-4" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Вы можете выбрать количество уроков и оплатить картой на <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">сайте</a>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-5">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-5" aria-expanded="false" aria-controls="faqAccordion-collapse-5">
                                                Сколько раз в неделю проходят уроки вокала?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-5" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-5" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Мы рекомендуем заниматься 2 раза в неделю. Частоту уроков Вы можете регулировать сами.
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
                                                Расписание уроков согласовывает наш администратор с каждым студентом.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-7">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-7" aria-expanded="false" aria-controls="faqAccordion-collapse-7">
                                            Сколько длится урок вокала?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-7" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Урок вокала длится 45 минут.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-8">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-8" aria-expanded="false" aria-controls="faqAccordion-collapse-8">
                                                Можно ли учиться в группе?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-8" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Нет, уроки вокала проходят индивидуально.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-9">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-9" aria-expanded="false" aria-controls="faqAccordion-collapse-9">
                                            Я никогда не учился вокалу ранее, я могу записаться к вам? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-9" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-9" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Да, мы начинаем обучение вокалу с нуля.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-10">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-10" aria-expanded="false" aria-controls="faqAccordion-collapse-10">
                                                Мой ребенок раньше занимался, вы определите его навыки?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-10" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-10" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Да, наш педагог определит навыки и подберет репертуар, подходящий Вашему ребенку.
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
                                                Да, можно заниматься и на выходных. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-12">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-12" aria-expanded="false" aria-controls="faqAccordion-collapse-12">
                                            Если я пропустил урок, оплата переносится или сгорает?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-12" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-12" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Вы можете пропускать уроки, но чтобы сохранить оплату, вам необходимо предупредить нас об отсутствии минимум за 24 часа до его начала. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-13">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-13" aria-expanded="false" aria-controls="faqAccordion-collapse-13">
                                            Могу ли я приостанавливать абонемент?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-13" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-13" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Да, вы можете приостановить уроки на любой период, сообщите нашему администратору даты ваших каникул.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-14">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-14" aria-expanded="false" aria-controls="faqAccordion-collapse-14">
                                            Получит ли мой ребенок диплом или сертификат об окончании курса? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-14" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-14" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Да, в конце каждого модуля студент получает сертификат, а в конце каждого уровня - диплом.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-15">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-15" aria-expanded="false" aria-controls="faqAccordion-collapse-15">
                                            Как нужно подготовиться к первому уроку вокала?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-15" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-15" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Вам необходимо дома иметь гаджет с камерой и желательно наушники. Загрузите на ваше устройство приложение Zoom и Google Meet, проверьте работу камеры и звука.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-16">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-16" aria-expanded="false" aria-controls="faqAccordion-collapse-16">
                                            Будет ли мой ребенок сдавать экзамены?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-16" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-16" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                В Монтессори центре вместо экзаменов студенты выступают на концертах и принимают участие в конкурсах. 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-17">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-17" aria-expanded="false" aria-controls="faqAccordion-collapse-17">
                                                Вы принимаете взрослых?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-17" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-17" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Да, мы обучаем взрослых.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-18">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-18" aria-expanded="false" aria-controls="faqAccordion-collapse-18">
                                            Могу ли я сам выбрать преподавателя на вашем сайте? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-18" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-18" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Да. При этом важно, чтобы ваши пожелания по расписанию совпали с графиком этого педагога.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-19">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-19" aria-expanded="false" aria-controls="faqAccordion-collapse-19">
                                            Включает ли курс изучение теории и сольфеджио? 
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-19" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-19" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Да, включает. На уроках вокала педагог обязательно уделяет время теории музыки и сольфеджио.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-20">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-20" aria-expanded="false" aria-controls="faqAccordion-collapse-20">
                                                Есть ли программа курса и можно ли ее посмотреть?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-20" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-20" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Да, <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab4; ?>" data-radio-id-switch="">программа курса вокала</a> опубликована на сайте на странице курса.
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
                                            How to Enroll in Online Vocal Course?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-1" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-1" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                To enroll in our online vocal course, sign up for a trial lesson and make payment <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">on our website</a>. Following that, our administrator will contact you to schedule your lessons.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-2">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-2" aria-expanded="false" aria-controls="faqAccordion-collapse-2">
                                            What is the minimum age to participate in your online vocal course?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-2" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                We welcome children as young as 5 years old to enroll in our online singing courses.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-2b">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-2b" aria-expanded="false" aria-controls="faqAccordion-collapse-2b">
                                            How much does the trial lesson cost?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-2b" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-2b" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                The trial session fee is <span class="ioArrayToTextElementsDemo">$6</span>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-3">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-3" aria-expanded="false" aria-controls="faqAccordion-collapse-3">
                                            What is the total course fee, and are there any concessions provided?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-3" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                You must purchase a minimum of 4 classes, which amounts to <span class="ioArrayToTextElements03">$56</span>. You can customize the number of courses to purchase from <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">this link</a>. When buying 80 vocal lessons in a single payment, you will get a discount of <span class="ioArrayToTextElements62">$120</span>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-4">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-4" aria-expanded="false" aria-controls="faqAccordion-collapse-4">
                                            How can I pay for the vocal course?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-4" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Go to <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">our website</a>where you can choose the number of lessons and make payment with a credit card.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-5">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-5" aria-expanded="false" aria-controls="faqAccordion-collapse-5">
                                            How frequently are vocal lessons held per week?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-5" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-5" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                We suggest taking lessons twice a week, but you have the option to adjust lesson frequency yourself.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-6">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-6" aria-expanded="false" aria-controls="faqAccordion-collapse-6">
                                            How are lesson schedules determined?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-6" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                The administrator will coordinate with each student in setting the schedule.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-7">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-7" aria-expanded="false" aria-controls="faqAccordion-collapse-7">
                                            What is the length of a vocal lesson?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-7" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                A vocal lesson lasts for 45 minutes.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-8">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-8" aria-expanded="false" aria-controls="faqAccordion-collapse-8">
                                            Can I enroll in a group class?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-8" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                No, vocal lessons are conducted on an individual basis.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-9">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-9" aria-expanded="false" aria-controls="faqAccordion-collapse-9">
                                            I have never studied vocal before; can I enroll with you?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-9" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-9" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes, we start vocal training from scratch.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-10">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-10" aria-expanded="false" aria-controls="faqAccordion-collapse-10">
                                            My child has previously taken vocal lessons; will you assess their skills?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-10" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-10" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes, our teacher will assess your child's skills and choose appropriate repertoire for them.
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
                                                Yes, you can have lessons on weekends.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-12">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-12" aria-expanded="false" aria-controls="faqAccordion-collapse-12">
                                            If I miss a lesson, will the payment be rescheduled or forfeited?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-12" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-12" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                You can miss lessons, but to retain your payment, you need to notify us of your absence at least 24 hours before the lesson begins.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-13">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-13" aria-expanded="false" aria-controls="faqAccordion-collapse-13">
                                            Can I pause my subscription?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-13" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-13" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes, you can suspend lessons for any period; please inform our administrator of your vacation dates.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-14">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-14" aria-expanded="false" aria-controls="faqAccordion-collapse-14">
                                            Will my child receive a diploma or certificate upon completing the course?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-14" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-14" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes, at the end of each module, the student receives a certificate, and at the end of each level, they receive a diploma.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-15">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-15" aria-expanded="false" aria-controls="faqAccordion-collapse-15">
                                            How should I prepare for the first vocal lesson?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-15" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-15" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                You need to have a device with a camera and preferably headphones at home. Download the Zoom and Google Meet apps to your device, and ensure your camera and audio are functioning.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-16">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-16" aria-expanded="false" aria-controls="faqAccordion-collapse-16">
                                            Will my child take exams?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-16" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-16" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                In Montessori Center, instead of exams, students perform at concerts and participate in contests.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-17">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-17" aria-expanded="false" aria-controls="faqAccordion-collapse-17">
                                            Do you accept adults?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-17" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-17" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes, we teach adults.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-18">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-18" aria-expanded="false" aria-controls="faqAccordion-collapse-18">
                                            Can I choose my own teacher on your website?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-18" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-18" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes, you can. However, it's essential to ensure that your scheduling preferences align with the teacher's availability.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-19">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-19" aria-expanded="false" aria-controls="faqAccordion-collapse-19">
                                            Does the course include music theory and solfeggio?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-19" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-19" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                Yes, it does. During vocal lessons, the instructor dedicates time to music theory and solfeggio.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-20">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-20" aria-expanded="false" aria-controls="faqAccordion-collapse-20">
                                            Is there a course program, and can I view it?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-20" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-20" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes, <a type="button" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab4; ?>" data-radio-id-switch="">the vocal course</a> program is published on the course page of our website.
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
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-1.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-2.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-3.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-4.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-5.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-6.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-7.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-8.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-9.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-10.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-11.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-12.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-13.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-14.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-15.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-16.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-17.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-18.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-19.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-20.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-vocal-21.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                                        <div class="io-gallery io-gallery--video">
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="NuRfzXKvtpU">
                                                <img src="/wp-content/themes/interschooltemplate/images/NuRfzXKvtpU.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="HKL4hnwIpdw">
                                                <img src="/wp-content/themes/interschooltemplate/images/HKL4hnwIpdw.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="N9aEiqhjx6U">
                                                <img src="/wp-content/themes/interschooltemplate/images/N9aEiqhjx6U.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="kZhNvdYdCH0">
                                                <img src="/wp-content/themes/interschooltemplate/images/kZhNvdYdCH0.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="XXZjdEAEXoQ">
                                                <img src="/wp-content/themes/interschooltemplate/images/XXZjdEAEXoQ.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="n07tQF9w83A">
                                                <img src="/wp-content/themes/interschooltemplate/images/n07tQF9w83A.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="B64_FmPjlms">
                                                <img src="/wp-content/themes/interschooltemplate/images/B64_FmPjlms.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="CUaqxp-bZco">
                                                <img src="/wp-content/themes/interschooltemplate/images/CUaqxp-bZco.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="Vbma6NAUp1M">
                                                <img src="/wp-content/themes/interschooltemplate/images/Vbma6NAUp1M.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="Rx_ZKcSUebU">
                                                <img src="/wp-content/themes/interschooltemplate/images/Rx_ZKcSUebU.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="gVtj0wIdX4U">
                                                <img src="/wp-content/themes/interschooltemplate/images/gVtj0wIdX4U.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="yaTQpAwFJ8A">
                                                <img src="/wp-content/themes/interschooltemplate/images/yaTQpAwFJ8A.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="ybA6lpCmTVY">
                                                <img src="/wp-content/themes/interschooltemplate/images/ybA6lpCmTVY.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="-fxNfFaostk">
                                                <img src="/wp-content/themes/interschooltemplate/images/-fxNfFaostk.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="Iq6vr1u7Sr4">
                                                <img src="/wp-content/themes/interschooltemplate/images/Iq6vr1u7Sr4.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="xGhm1vqnQT0">
                                                <img src="/wp-content/themes/interschooltemplate/images/xGhm1vqnQT0.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="mNk_uU1Px3U">
                                                <img src="/wp-content/themes/interschooltemplate/images/mNk_uU1Px3U.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="ygZNyMgTOyA">
                                                <img src="/wp-content/themes/interschooltemplate/images/ygZNyMgTOyA.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="425lHpJFoGg">
                                                <img src="/wp-content/themes/interschooltemplate/images/425lHpJFoGg.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="t-N-J8_pUr8">
                                                <img src="/wp-content/themes/interschooltemplate/images/t-N-J8_pUr8.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="0_nIfF-4ewY">
                                                <img src="/wp-content/themes/interschooltemplate/images/0_nIfF-4ewY.jpg" alt="">
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
        <div class="io-lb-gallery__thumbs-wrapper">
            <button class="io-lb-gallery__thumbs-prev io-pagination__prev"></button>
            <div class="io-lb-gallery__thumbs"></div>
            <button class="io-lb-gallery__thumbs-next io-pagination__next"></button>
        </div>
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

    var scrollImageRu = '/wp-content/uploads/2023/11/Вокал-Онлайн.svg';
    var scrollImageEn = '/wp-content/uploads/2023/11/Singing-Online.svg';
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

