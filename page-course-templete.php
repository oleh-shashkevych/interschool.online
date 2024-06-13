<?php
/**
 * Шаблон Курса
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Шаблон Курса
 */

include 'templates/cta.php';
include 'templates/popular-courses.php';
include 'templates/montessori-work.php';
require_once 'merchant/paypal/config.php';

get_header(); // подключаем header.php ?>

<!-- Custom CSS for page template -->
<style>
    html {
        scroll-behavior: auto !important;
    }
    
    .io-header {
        position: sticky;
        top: 0;
    }

    .io-breadcrumbs__wrapper {
        display: none;
    }

    body {
        opacity: 0;
    }

    #courseAccordion-collapseTen.show > div {
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

    .io-footer {
        padding-bottom: 115px;
    }

    @media (max-width: 1199.5px) {
        .io-header {
            padding-bottom: var(--io-size-075) !important;
        }
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
                <h2 class="io-heading-2 io-course-lectors__heading">Преподаватели фортепиано</h2>
                <div class="io-course-lectors__text-wrapper io-text-wrapper">
                    <div class="io-check io-check--start">
                        <span>Каждый педагог фортепиано в Монтессори центре имеет высшее образование по специальности фортепиано.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>Все наши учителя имеют большой опыт работы с детьми и взрослыми и чутко сопровождают учебный процесс каждого студента.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>Педагоги фортепиано в нашей школе являются действующими пианистами, принимают участие в концертах и совершенствуют свое мастерство.</span>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-mamchich.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Снежана Мамчич</h3>
                            <p class="io-course-lectors__item-header-text-work">Педагог фортепиано</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Снежана Мамчич - педагог фортепиано в Монтессори центре с 2018 года. Окончила Киевскую муниципальную академию музыки им. Р. М. Глиэра по классу фортепиано. Имеет опыт не только педагога фортепиано, но и куратора музыкальных концертов и конкурсов в Монтессори центре. </p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Читать далее
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Ученики Снежаны принимают участие и побеждают в конкурсах и фестивалях, активно участвуют в творческих мероприятиях и концертной деятельности. На онлайн уроках фортепиано Снежана профессионально подбирает педагогический материал для каждого ученика.</p>
                            <p>Для новичков возрастом от 5 до 7 лет у педагога подобраны мелодии про сказочных героев и персонажей мультфильмов. Для детей от 8 до 15 лет Снежана предложит модные песни из популярных аниме или трендовые мелодии из кино, а также яркие образцы классической музыки. Для студентов 16 лет и старше подобраны мировые хиты, шедевры классической музыки в легком переложении и в оригинале.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-maximova.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Дарья Максимова</h3>
                            <p class="io-course-lectors__item-header-text-work">Педагог фортепиано</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Дарья Максимова - педагог фортепиано в Монтессори центре. Окончила Национальную музыкальную Академию Украины им. П.И.Чайковского по классу фортепиано и продолжает обучение в консерватории в Мадриде (Испания). </p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Читать далее
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Дарья является действующей пианисткой, принимает участие международных конкурсах и фестивалях, является обладательницей званий лауреата. Ее международная практика выступлений и участие в мастер-классах выдающихся пианистов дает прекрасный опыт объединения лучших методик и применения их в своей педагогической практике.</p>
                            <p>Дарья преподает на английском, русском и украинском языках. Ее уроки фортепиано онлайн проходят индивидуально как для детей, так и для взрослых. В методическом плане Дарьи очень интересный подбор репертуара: и классика, и джазовые миниатюры, и детский материал для детей младшего возраста, и современные мировые хиты в переложении для фортепиано. </p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-fedorova.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Мария Федорова</h3>
                            <p class="io-course-lectors__item-header-text-work">Педагог фортепиано</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Мария Федорова - педагог фортепиано в Монтессори центре. Окончила Киевскую муниципальную академию музыки им. Р. М. Глиэра по классу фортепиано. Успешно преподает уроки фортепиано детям и взрослым. </p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Читать далее
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>На своих уроках Мария чутко подбирает программу в соответствии с уровнем сложности для каждого студента. Для детей дошкольного возраста Мария применяет детские методики, основанные на игровой форме. Уже с первых уроков дети играют легкие мелодии и с удовольствием знакомятся с нотной грамотой. Уроки для взрослых проходят в дружеской атмосфере. Музыкальные произведения подбираются по вкусу - будь то джаз или классические шедевры. </p>
                            <p>Мария является действующей пианисткой и активно принимает участие в концертах, мастер-классах, выступает как концертмейстер и как солистка. На уроках педагог всегда показывает на своем примере исполнение музыкальных произведений, это очень вдохновляет и мотивирует студентов к занятиям. </p>
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
            </section>
        ';
        $contentTab4 = '';
        $contentTab5 = '
            <section class="io-intersection io-course-schedule">
                <div class="io-course-schedule__data">
                    <h2 class="io-heading-2">Расписание курса</h2>
                    <div class="io-course-schedule__data-inner">
                        <p>Мы преподаем каждый день, включая выходные.</p>
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
                    <a href="#" class="io-button io-course-schedule__button">Написать нам</a>
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
                        <div class="d-flex align-items-center justify-content-between">
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
                        <div class="d-flex align-items-center justify-content-between">
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
                        <div class="d-flex align-items-center justify-content-between">
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
                        <div class="d-flex align-items-center justify-content-between">
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
                        <div class="d-flex align-items-center justify-content-between">
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
                        <div class="d-flex align-items-center justify-content-between">
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
                        <div class="d-flex align-items-center justify-content-between">
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
                        <div class="d-flex align-items-center justify-content-between">
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
                        <div class="d-flex align-items-center justify-content-between">
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
                        <div class="d-flex align-items-center justify-content-between">
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
                    <a href="/vliyanie-urokov-fortepiano-na-disciplinu-rebenka-mladshego-shkolnogo-vozrasta" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/Piano-01.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Правильная постановка рук: основа успешной игры на фортепиано</h3>
                            <p class="io-blog__content-text">Игра на фортепиано – это искусство, требующее не только музыкального слуха и творческого подхода. Одним из ключевых элементов успешной игры на фортепиано...</p>
                        </div>
                    </a>
                    <a href="/vliyanie-urokov-fortepiano-na-disciplinu-rebenka-mladshego-shkolnogo-vozrasta" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/Piano-02.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">История фортепиано: от клавесина до современных цифровых фортепиано</h3>
                            <p class="io-blog__content-text">Фортепиано – это уникальный музыкальный инструмент, история которого уходит вглубь веков. От старинных клавесинов до современных цифровых моделей, фортепи...</p>
                        </div>
                    </a>
                    <a href="/vliyanie-urokov-fortepiano-na-disciplinu-rebenka-mladshego-shkolnogo-vozrasta" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/Piano-03.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Как выбрать подходящий репертуар для начинающего пианиста</h3>
                            <p class="io-blog__content-text">Выбор репертуара для начинающего пианиста – это важный шаг на пути к музыкальному мастерству. Правильно подобранные произведения помогут не только развить...</p>
                        </div>
                    </a>
                    <a href="/vliyanie-urokov-fortepiano-na-disciplinu-rebenka-mladshego-shkolnogo-vozrasta" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/Piano-04.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Топ-5 упражнений для развития пальцевой техники</h3>
                            <p class="io-blog__content-text">Игра на фортепиано – это искусство, требующее не только музыкального слуха, но и отточенной техники. Одним из ключевых элементов является пальцевая техника...</p>
                        </div>
                    </a>
                    <a href="/vliyanie-urokov-fortepiano-na-disciplinu-rebenka-mladshego-shkolnogo-vozrasta" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/Piano-05.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Как улучшить результаты онлайн уроков фортепиано для вашего ребенка</h3>
                            <p class="io-blog__content-text">Мир музыки полон гармонии, красоты и творчества. Однако, для детей, которые только начинают свое музыкальное путешествие, этот мир может быть загадочным и...</p>
                        </div>
                    </a>
                    <a href="/vliyanie-urokov-fortepiano-na-disciplinu-rebenka-mladshego-shkolnogo-vozrasta" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/Piano-06.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Биология музыки: как обучение фортепиано влияет на развитие мозга ребенка</h3>
                            <p class="io-blog__content-text">Музыкальное образование - это не просто вопрос эстетики или личного удовольствия. Научные исследования показали, что обучение игре на музыкальном инструменте...</p>
                        </div>
                    </a>
                    <a href="/vliyanie-urokov-fortepiano-na-disciplinu-rebenka-mladshego-shkolnogo-vozrasta" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/Piano-07.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Секреты пианистов: как достигаются невероятные результаты в игре на фортепиано</h3>
                            <p class="io-blog__content-text">Фортепиано – это уникальный инструмент, способный создавать великолепные музыкальные произведения. Но за каждым касанием клавиш скрывается огромная работа...</p>
                        </div>
                    </a>
                    <a href="/vliyanie-urokov-fortepiano-na-disciplinu-rebenka-mladshego-shkolnogo-vozrasta" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/Piano-08.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Как поддержать мотивацию ребенка во время онлайн-обучения фортепиано</h3>
                            <p class="io-blog__content-text">Онлайн-обучение открыло новые возможности для многих семей. Однако это также может вызвать проблемы с поддержанием мотивации у детей. В этой статье мы поделим...</p>
                        </div>
                    </a>
                    <a href="/vliyanie-urokov-fortepiano-na-disciplinu-rebenka-mladshego-shkolnogo-vozrasta" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/Piano-09.jpg" alt="">
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
                <h2 class="io-heading-2 io-course-lectors__heading">Piano teachers</h2>
                <div class="io-course-lectors__text-wrapper io-text-wrapper">
                    <div class="io-check io-check--start">
                        <span>Every piano teacher at Montessori Center holds a higher education degree in piano performance.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>All our teachers have extensive experience working with both children and adults, providing attentive support for each student throughout their learning journey.</span>
                    </div>
                    <div class="io-check io-check--start">
                        <span>Our piano teachers at our school are active pianists who take part in concerts, continuously honing their skills.</span>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-mamchich.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Snezhana Mamchich</h3>
                            <p class="io-course-lectors__item-header-text-work">Piano Teacher</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Snezhana Mamchich has been a piano teacher at the Montessori center since 2018. She graduated from the R. M. Gliere Kiev Municipal Academy of Music, specializing in piano. She has experience not only as a piano teacher, but also as a curator of music concerts and competitions in the Montessori center.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Read more
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Snezhana\'s students participate and win in competitions and festivals, actively participate in creative events and concert activities. During online piano lessons, Snezhana professionally selects pedagogical material for each student.</p>
                            <p>For beginners aged 5 to 7 years, the teacher has selected melodies about fairy-tale characters and cartoon characters. For children from 8 to 15 years old, Snezhana will offer trendy songs from popular anime or hit melodies from films, as well as bright examples of classical music. For students aged 16 years and older, world hits, masterpieces of classical music in a light arrangement and in the original version have been selected.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-maximova.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Daria Maximova</h3>
                            <p class="io-course-lectors__item-header-text-work">Piano Teacher</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Daria Maximova is a piano teacher at the Montessori Center. She graduated from the P.I.Tchaikovsky National Music Academy of Ukraine in the piano department and is continuing her studies at a conservatory in Madrid, Spain.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Read more
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>Daria is an active pianist, participating in international competitions and festivals and holds laureate titles. Her international performance practice and participation in masterclasses from outstanding pianists provide a great experience of combining the best methodologies and applying them in her pedagogical practice.</p>
                            <p>Daria teaches in English, Russian, and Ukrainian. Her online piano lessons are held individually for both children and adults. Daria\'s methodological plan includes a very interesting selection of repertoire: classics, jazz miniatures, children\'s material for younger children, and contemporary world hits arranged for piano.</p>
                        </div>
                    </div>
                </div>
                <div class="io-course-lectors__item io-block">
                    <div class="io-course-lectors__item-header">
                        <div class="io-course-lectors__item-header-photo">
                            <img src="/wp-content/themes/interschooltemplate/images/teach-fedorova.jpg" alt="">
                        </div>
                        <div class="io-course-lectors__item-header-text">
                            <h3 class="io-course-lectors__item-header-text-name">Maria Fedorova</h3>
                            <p class="io-course-lectors__item-header-text-work">Piano Teacher</p>
                        </div>
                    </div>
                    <div class="io-course-lectors__text-wrapper io-text-wrapper">
                        <p>Maria Fedorova is a piano teacher at the Montessori Center. She graduated from the R. M. Glière Kyiv Municipal Academy of Music, majoring in piano. Maria successfully teaches piano lessons to both children and adults.</p>
                        <div class="io-show-button">
                            <button onclick="showHiddenBlock(this)" class="io-button__link">
                                Read more
                            </button>
                        </div>
                        <div class="io-text-wrapper io-hidden">
                            <p>In her lessons, Maria carefully selects the program according to the level of complexity for each student. For preschool-age children, Maria uses children\'s methodologies based on a game form. From the very first lessons, children play simple melodies and enthusiastically familiarize themselves with music literacy. Adult lessons are conducted in a friendly atmosphere. Musical pieces are chosen according to taste - whether it\'s jazz or classical masterpieces.</p>
                            <p>Maria is an active pianist and actively participates in concerts, masterclasses, performs as an accompanist and as a soloist. During the lessons, the teacher always demonstrates the performance of musical pieces by her own example, which greatly inspires and motivates students to practice.</p>
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
            </section>
        ';
        $contentTab4 = '';
        $contentTab5 = '
            <section class="io-intersection io-course-schedule">
                <div class="io-course-schedule__data">
                    <h2 class="io-heading-2">Course Schedule</h2>
                    <div class="io-course-schedule__data-inner">
                        <p>We teach every day, including weekends.</p>
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
                    <a href="#" class="io-button io-course-schedule__button">Contact Us</a>
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
                        <div class="d-flex align-items-center justify-content-between">
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
                        <div class="d-flex align-items-center justify-content-between">
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
                        <div class="d-flex align-items-center justify-content-between">
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
                        <div class="d-flex align-items-center justify-content-between">
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
                        <div class="d-flex align-items-center justify-content-between">
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
                        <div class="d-flex align-items-center justify-content-between">
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
                        <div class="d-flex align-items-center justify-content-between">
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
                        <div class="d-flex align-items-center justify-content-between">
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
                        <div class="d-flex align-items-center justify-content-between">
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
                        <div class="d-flex align-items-center justify-content-between">
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
                    <a href="/vliyanie-urokov-fortepiano-na-disciplinu-rebenka-mladshego-shkolnogo-vozrasta" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/Piano-01.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Proper Hand Placement: The Foundation of Successful Piano Playing</h3>
                            <p class="io-blog__content-text">Playing the piano is an art that requires not only musical ear and creativity but also correct hand placement. Here are some tips to help you master this...</p>
                        </div>
                    </a>
                    <a href="/vliyanie-urokov-fortepiano-na-disciplinu-rebenka-mladshego-shkolnogo-vozrasta" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/Piano-02.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">The History of the Piano: From Harpsichord to Modern Digital Pianos</h3>
                            <p class="io-blog__content-text">The piano is a unique musical instrument with a history that dates back centuries. From ancient harpsichords to modern digital models, the piano has come a...</p>
                        </div>
                    </a>
                    <a href="/vliyanie-urokov-fortepiano-na-disciplinu-rebenka-mladshego-shkolnogo-vozrasta" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/Piano-03.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">How to Choose Suitable Repertoire for a Beginner Pianist</h3>
                            <p class="io-blog__content-text">Choosing repertoire for a beginner pianist is an important step towards musical mastery. Well-selected pieces will not only help develop technical skills but...</p>
                        </div>
                    </a>
                    <a href="/vliyanie-urokov-fortepiano-na-disciplinu-rebenka-mladshego-shkolnogo-vozrasta" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/Piano-04.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Top 5 Exercises for Developing Finger Technique</h3>
                            <p class="io-blog__content-text">Playing the piano is an art that requires not only musical ear but also refined technique. One of the key elements is finger technique, which enables a pianist...</p>
                        </div>
                    </a>
                    <a href="/vliyanie-urokov-fortepiano-na-disciplinu-rebenka-mladshego-shkolnogo-vozrasta" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/Piano-05.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">How to Improve Piano Online Lessons Results for Your Child</h3>
                            <p class="io-blog__content-text">The world of music is full of harmony, beauty, and creativity. However, for children who are just beginning their musical journey, this world can be mysterious...</p>
                        </div>
                    </a>
                    <a href="/vliyanie-urokov-fortepiano-na-disciplinu-rebenka-mladshego-shkolnogo-vozrasta" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/Piano-06.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Biology of Music: How Piano Education Influences Child\'s Brain Development</h3>
                            <p class="io-blog__content-text">Music education is not just about aesthetics or personal enjoyment. Scientific research has shown that learning to play a musical instrument, such as the piano...</p>
                        </div>
                    </a>
                    <a href="/vliyanie-urokov-fortepiano-na-disciplinu-rebenka-mladshego-shkolnogo-vozrasta" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/Piano-07.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">Pianist Secrets: How Incredible Results in Piano Playing Are Achieved</h3>
                            <p class="io-blog__content-text">The piano is a unique instrument capable of creating magnificent musical masterpieces. But behind each touch of the keys lies tremendous effort. So, how do pianists...</p>
                        </div>
                    </a>
                    <a href="/vliyanie-urokov-fortepiano-na-disciplinu-rebenka-mladshego-shkolnogo-vozrasta" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/Piano-08.jpg" alt="">
                        </div>
                        <div class="io-blog__content">
                            <h3 class="io-blog__content-title">How to Support Your Child\'s Motivation During Online Piano Learning</h3>
                            <p class="io-blog__content-text">Online learning has opened up new opportunities for many families. However, it can also present challenges in maintaining children\'s motivation. In this article, we...</p>
                        </div>
                    </a>
                    <a href="/vliyanie-urokov-fortepiano-na-disciplinu-rebenka-mladshego-shkolnogo-vozrasta" class="io-blog__item">
                        <div class="io-blog__img">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/Piano-09.jpg" alt="">
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
        <nav class="io-tabs">
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
                $6
            </div>
            <button type="button" class="io-button__large io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">
                <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Записаться на пробный урок'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Sign Up for a Trial Lesson'; } ?>
            </button>
        </div>
    </div>
</div> -->

<div class="io-demo-wrapper-all">
    <div class="container-xxl io-container-mw">
        <div class="io-demo-inner-all">
            <div class="io-course-passport__bottom-price">
                $6
            </div>
            <button type="button" class="io-button__large io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">
                <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Записаться на пробный урок'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Sign Up for a Trial Lesson'; } ?>
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
            <button type="button" class="io-price__button io-button__large" style="background-color: #FFC43A; border-color: #FFC43A; padding-top: 9px; padding-bottom: 9px;">
                <img src="/wp-content/themes/interschooltemplate/images/io-paypal.png" alt="">
            </button>
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
                                <span class="io-course-passport__header-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Курс фортепиано'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Piano course'; } ?></span>
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
                                            <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Цена урока от:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson Price from:'; } ?>
                                        </div>
                                    </div>
                                    <div class="io-course-passport__payment-info-text">
                                        $11
                                    </div>
                                </div>
                            </div>
                            <div class="io-course-passport__bottom">
                                <div class="io-course-passport__bottom-price">
                                    $6
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
                                    <h1 class="io-heading-1 io-course-hero__heading"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Уроки<br><span class="io-pink-main">Фортепиано</span><br>Oнлайн'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Online<br><span class="io-pink-main">Piano</span><br>Lessons'; } ?></h1>
                                    <p class="io-course-hero__text"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'На курсе фортепиано вы научитесь играть десятки классических, джазовых и эстрадных произведений. Будете выступать на концертах и конкурсах'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'In our piano course, you will learn to play dozens of classical, jazz, and popular compositions. You will also have the opportunity to perform in concerts and competitions.'; } ?></p>
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
                                                <span>+84 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'отзывов'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'reviews'; } ?></span>
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
                                            <span class="io-course-passport__header-title"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Курс фортепиано'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Piano course'; } ?></span>
                                            <div class="io-course-passport__popular"></div>
                                        </div>
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
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Цена урока от:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson Price from:'; } ?>
                                                </div>
                                            </div>
                                            <div class="io-course-passport__payment-info-text">
                                                $11
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-course-passport__bottom d-none d-lg-flex">
                                        <div class="io-course-passport__bottom-price">
                                            $6
                                        </div>
                                        <button type="button" class="io-button__large io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">
                                            <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Записаться на пробный урок'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Sign Up for a Trial Lesson'; } ?>
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
                                                        развить беглость пальцев, научиться разнообразным приёмам звукоизвлечения.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Нотная грамота</span>
                                                    </div>
                                                    <div class="io-content">
                                                        научиться читать ноты любой сложности для фортепиано.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Мастерство</span>
                                                    </div>
                                                    <div class="io-content">
                                                        научиться исполнять произведения разных стилей: классические сонаты, джазовые стандарты, эстрадные хиты.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Сценический опыт</span>
                                                    </div>
                                                    <div class="io-content">
                                                        приобрести опыт выступлений на концертах и конкурсах.
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
                                                        Методика обучения игре на фортепиано - уникальная разработка Монтессори центра. Перед каждым студентом в начале обучения ставятся цели (уровни), которые он последовательно достигнет за период учёбы в Монтессори центре. Конкретной целью является успешное исполнение музыкального произведения определенного уровня сложности на концерте или конкурсе.
                                                    </div>
                                                    <div class="io-fw-semibold io-fs-20">
                                                        Преимущества нашей методики
                                                    </div>
                                                    <div class="io-check">
                                                        <span>студент легко понимает поставленные цели</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>продолжительность обучения определяется не календарными периодами, а скоростью достижения поставленных целей</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>студент не сдает экзамены, их заменяют концерты и музыкальные конкурсы</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>по этой методике могут обучаться и дети, и взрослые</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>после достижения поставленных целей, студент может продолжить обучение, совершенствуя свое мастерство</span>
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
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-piano.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>Пианино или синтезатор</strong> понадобятся дома для обучения игре на фортепиано.</p>
                                                        </div>
                                                    </div>
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
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-note.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>Ноты</strong> мы вам пришлем заранее по Email. Вам нужно будет их распечатать или открыть на экране монитора.</p>
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
                                                        <div><span><strong>2 урока в неделю</strong> с нашим педагогом позволят вам быстро достигать цели.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Регулярные занятия</strong> с учителем позволят быстро осваивать музыкальные произведения.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Самостоятельные занятия дома и выполнение домашних заданий</strong> рекомендуются всем ученикам старше 7 лет.</span></div>
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
                                                            <p><strong>Самостоятельная работа</strong> дома закрепит материалы школьных уроков.</p>
                                                            <p><strong>Вам достаточно заниматься 15-20 минут</strong> ежедневно на начальном этапе.</p>
                                                            <p><strong>Вы получите удовольствие</strong> от домашних занятий музыкой, достигнув результат.</p>
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
                                                        <div><span>Помочь подготовиться к уроку: распечатать ноты, включить гаджет и перейти по ссылке на онлайн урок.</span></div>
                                                    </div>
                                                    <div class="io-heart">
                                                        <div><span>Проследить и помочь ребёнку в выполнении домашних заданий.</span></div>
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
                                                    <div class="io-show-button">
                                                        <button onclick="showHiddenBlock(this)" class="io-course-programs__diploma">
                                                            <span>Смотреть сертификаты</span>
                                                            <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.png" alt="">
                                                        </button>
                                                    </div>
                                                    <div class="io-course-accordion__diploma io-hidden">
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            <img src="/wp-content/themes/interschooltemplate/images/crft-1.jpg" alt="">
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            <img src="/wp-content/themes/interschooltemplate/images/crft-2.jpg" alt="">
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            <img src="/wp-content/themes/interschooltemplate/images/crft-3.jpg" alt="">
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
                                                            <p>Если вы хотите заказать пробный урок фортепиано, вам необходимо <a href="#" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">записаться и оплатить</a> <span class="io-fw-semibold io-pink-main">$6</span>.<br>Пробный урок проходит индивидуально и длится <span class="io-fw-semibold">45 минут</span>.</p>
                                                        </div>
                                                        <div class="io-course-pricing io-block">
                                                            <div class="io-course-pricing__heading">
                                                                <img src="/wp-content/themes/interschooltemplate/images/i-abonement.svg" alt="">
                                                                <h3 class="io-fw-semibold io-fs-20">Абонемент</h3>
                                                            </div>
                                                            <p>Если вам понравился пробный урок, вам необходимо <a href="#" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">купить абонемент</a>, сделав предоплату минимум за 4 урока.<br>Цена абонемента на <span class="io-fw-semibold">4 урока</span> составляет <span class="io-fw-semibold io-pink-main">$56</span> (стоимость одного урока - $14).<br>Оплату необходимо вносить минимум за 24 часа до начала урока.</p>
                                                        </div>
                                                        <div class="io-course-pricing io-block">
                                                            <div class="io-course-pricing__heading">
                                                                <img src="/wp-content/themes/interschooltemplate/images/i-sales.svg" alt="">
                                                                <h3 class="io-fw-semibold io-fs-20">Скидки</h3>
                                                            </div>
                                                            <p>При покупке от <span class="io-fw-semibold">80</span> и более уроков <span class="io-fw-semibold io-pink-main">скидка</span> составляет до <span class="io-fw-semibold io-pink-main">$480</span>.</p>
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
                                                                <a class="io-link" href="#detailCourseHeading-1" data-scroll-offset="130" data-mobile-scroll-offset="200">Обзор курса</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-2" data-scroll-offset="130" data-mobile-scroll-offset="200">Описание методики</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-3" data-scroll-offset="130" data-mobile-scroll-offset="200">Преимущества методики</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-4" data-scroll-offset="130" data-mobile-scroll-offset="200">Уровень “Подготовительный”</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-5" data-scroll-offset="130" data-mobile-scroll-offset="200">Уровень “Начальный”</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-6" data-scroll-offset="130" data-mobile-scroll-offset="200">Уровень “Средний”</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-7" data-scroll-offset="130" data-mobile-scroll-offset="200">Уровень “Продвинутый”</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-8" data-scroll-offset="130" data-mobile-scroll-offset="200">Цели курса</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-9" data-scroll-offset="130" data-mobile-scroll-offset="200">Польза уроков фортепиано</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="io-show-button">
                                                        <button onclick="showHiddenBlock(this)" class="io-button__link io-rating__link">
                                                            Читать далее
                                                        </button>
                                                    </div>
                                                    <div class="io-text-wrapper io-hidden">
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
                                                        Develop finger dexterity and learn various sound extraction techniques.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Music Literacy</span>
                                                    </div>
                                                    <div class="io-content">
                                                        Learn to read piano music of any complexity.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Mastery</span>
                                                    </div>
                                                    <div class="io-content">
                                                        Learn to perform pieces of different styles, including classical sonatas, jazz standards, and popular hits.
                                                    </div>
                                                    <div class="io-check">
                                                        <span class="io-fw-semibold">Stage Experience</span>
                                                    </div>
                                                    <div class="io-content">
                                                        Gain experience performing in concerts and competitions.
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
                                                        The methodology for teaching piano at the Montessori Center is a unique development. At the beginning of each student's education, specific goals (levels) are set, which they will progressively achieve during their studies at the Montessori Center. The ultimate goal is the successful performance of a musical piece of a certain level of complexity at a concert or competition.
                                                    </div>
                                                    <div class="io-fw-semibold io-fs-20">
                                                        Advantages of Our Methodology
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Students easily understand the set goals</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>The duration of education is determined by the speed of achieving the set goals, not by calendar periods</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>Students do not take traditional exams; instead, concerts and music competitions replace them</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>This methodology is suitable for both children and adults</span>
                                                    </div>
                                                    <div class="io-check">
                                                        <span>After reaching their goals, students can continue their education, further refining their skills</span>
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
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-piano.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p>You will need <strong>a piano or synthesizer</strong> at home for piano lessons.</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-laptop.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p><strong>A device with a camera and microphone</strong> will be required for online lessons.</p>
                                                        </div>
                                                    </div>
                                                    <div class="io-icon-with-text">
                                                        <div class="io-icon-with-text__img">
                                                            <img src="/wp-content/themes/interschooltemplate/images/i-c-note.svg" alt="">
                                                        </div>
                                                        <div class="io-icon-with-text__content">
                                                            <p>We will send you <strong>sheet music</strong> in advance via email. You will need to either print it or open it on your monitor screen.</p>
                                                        </div>
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
                                                        <div><span><strong>Having 2 lessons per week</strong> with our teacher will allow you to progress rapidly.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Regular lessons</strong> with a teacher will help you quickly master musical compositions.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span><strong>Independent practice at home and completing assignments</strong> are recommended for all students over 7 years old.</span></div>
                                                    </div>
                                                    <div class="io-check">
                                                        <div><span>Please be prepared for<strong>a substantial time commitment</strong> as learning will be an ongoing process.</span></div>
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
                                                            <p><strong>Independent practice at home</strong> will reinforce the materials covered in lessons.</p>
                                                            <p>At the initial stage, dedicating <strong>15-20 minutes daily</strong> is sufficient.</p>
                                                            <p><strong>You will find joy</strong> in practicing music at home and will achieve results.</p>
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
                                                        <div><span>Help prepare for the lesson: print sheet music, set up the device, and click on the link for the online lesson</span></div>
                                                    </div>
                                                    <div class="io-heart">
                                                        <div><span>Monitor and assist your child in completing homework assignments</span></div>
                                                    </div>
                                                    <div class="io-heart">
                                                        <div><span>Be patient</span></div>
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
                                                    <div class="io-show-button">
                                                        <button onclick="showHiddenBlock(this)" class="io-course-programs__diploma">
                                                            <span>Watch certificates</span>
                                                            <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.png" alt="">
                                                        </button>
                                                    </div>
                                                    <div class="io-course-accordion__diploma io-hidden">
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            <img src="/wp-content/themes/interschooltemplate/images/crft-1.jpg" alt="">
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            <img src="/wp-content/themes/interschooltemplate/images/crft-2.jpg" alt="">
                                                        </a>
                                                        <a href="#" target="_blank" class="io-lightbox">
                                                            <img src="/wp-content/themes/interschooltemplate/images/crft-3.jpg" alt="">
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
                                                            <p>If you would like to book a trial piano lesson, you need <a href="#" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">to schedule and pay</a> <span class="io-fw-semibold io-pink-main">$6</span>.<br>The trial lesson is conducted individually and lasts for <span class="io-fw-semibold">45 minutes</span>.</p>
                                                        </div>
                                                        <div class="io-course-pricing io-block">
                                                            <div class="io-course-pricing__heading">
                                                                <img src="/wp-content/themes/interschooltemplate/images/i-abonement.svg" alt="">
                                                                <h3 class="io-fw-semibold io-fs-20">Subscription</h3>
                                                            </div>
                                                            <p>If you enjoyed the trial lesson, you can <a href="#" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">purchase a subscription</a> by making a prepayment for at least 4 lessons.<br>The price of a <span class="io-fw-semibold">4-lesson subscription</span> is <span class="io-fw-semibold io-pink-main">$56</span> (the cost of one lesson is $14).<br>Payment must be made at least 24 hours before the lesson's start time.</p>
                                                        </div>
                                                        <div class="io-course-pricing io-block">
                                                            <div class="io-course-pricing__heading">
                                                                <img src="/wp-content/themes/interschooltemplate/images/i-sales.svg" alt="">
                                                                <h3 class="io-fw-semibold io-fs-20">Discounts</h3>
                                                            </div>
                                                            <p>When you purchase <span class="io-fw-semibold">80</span> lessons or more, you can receive a <span class="io-fw-semibold io-pink-main">discount</span> of up to <span class="io-fw-semibold io-pink-main">$480</span>.</p>
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
                                                                <a class="io-link" href="#detailCourseHeading-1" data-scroll-offset="130" data-mobile-scroll-offset="200">Course Overview</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-2" data-scroll-offset="130" data-mobile-scroll-offset="200">Methodology Description</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-3" data-scroll-offset="130" data-mobile-scroll-offset="200">Advantages of the Methodology</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-4" data-scroll-offset="130" data-mobile-scroll-offset="200">Preparatory Level</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-5" data-scroll-offset="130" data-mobile-scroll-offset="200">Beginner Level</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-6" data-scroll-offset="130" data-mobile-scroll-offset="200">Intermediate Level</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-7" data-scroll-offset="130" data-mobile-scroll-offset="200">Advanced Level</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-8" data-scroll-offset="130" data-mobile-scroll-offset="200">Course Objectives</a>
                                                            </div>
                                                            <div>
                                                                <a class="io-link" href="#detailCourseHeading-9" data-scroll-offset="130" data-mobile-scroll-offset="200">Benefits of Piano Lessons</a>
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
                                <h2 class="io-heading-2 io-course-lesson__heading">Как проходят уроки фортепиано</h2>
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
                                            <p><span class="io-fw-semibold">Оборудование:</span> вам понадобится фортепиано или цифровое пианино, а также компьютер, планшет или смартфон с доступом в интернет и камерой для видео звонков.</p>
                                            <p><span class="io-fw-semibold">Интернет-соединение:</span> убедитесь, что ваше интернет-соединение стабильно. Чем быстрее и надежнее ваш интернет, тем более гладким будет урок.</p>
                                            <p><span class="io-fw-semibold">Видеоконференц-платформа:</span> мы используем <a href="https://zoom.us/ru/download" class="io-purple-main io-link">Zoom</a> или <a href="https://meet.google.com" class="io-purple-main io-link">Google Meet</a> для проведения уроков онлайн. Вам нужно будет загрузить и установить соответствующее приложение, если у вас его еще нет.</p>
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
                                            <p><span class="io-fw-semibold">Распечатайте ноты</span> до начала урока.</p>
                                            <p><span class="io-fw-semibold">Установите гаджет</span> для онлайн урока справа от студента, на уровне клавиш или немного выше, чтобы учитель видел клавиатуру, руки и лицо ученика.</p>
                                            <p><span class="io-fw-semibold">Войдите в приложение</span> Zoom или Google Meet по ссылке на урок немного заранее, чтобы у вас было время на решение возможных технических проблем.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">3</div>
                                        <div class="io-steps__title">Во время урока</div>
                                        <div class="io-steps__dots">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">Инструкции и обратная связь:</span> ваш преподаватель будет давать вам конкретные инструкции по выполнению упражнений, освоению новых композиций и улучшению вашей техники игры.</p>
                                            <p><span class="io-fw-semibold">Вопросы:</span> в любой момент урока вы можете задать вопросы. Не стесняйтесь спрашивать о том, что непонятно.</p>
                                            <p><span class="io-fw-semibold">Практика:</span> большая часть урока будет посвящена практическому исполнению. Вы будете играть, а преподаватель будет наблюдать, слушать и давать советы.</p>
                                            <p><span class="io-fw-semibold">Демонстрация игры преподавателем:</span> ваш преподаватель может также продемонстрировать определенные фрагменты, позволяя вам лучше понять, как они должны звучать.</p>
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
                                            <p class="io-purple-main io-fs-18 io-fw-semibold">Обучение в Монтессори центре будет приятным и продуктивным!<br>Мы гарантируем, что онлайн уроки фортепиано - это удобно и эффективно.</p>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                            <section class="io-intersection io-course-lesson">
                                <h2 class="io-heading-2 io-course-lesson__heading">How Piano Lessons Are Conducted</h2>
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
                                            <p><span class="io-fw-semibold">Equipment:</span> You will need a piano or digital keyboard, as well as a computer, tablet, or smartphone with internet access and a camera for video calls.</p>
                                            <p><span class="io-fw-semibold">Internet Connection:</span> Ensure that your internet connection is stable. The faster and more reliable your internet, the smoother the lesson will be.</p>
                                            <p><span class="io-fw-semibold">Video Conferencing Platform:</span> We use <a href="https://zoom.us/download" class="io-purple-main io-link">Zoom</a> or <a href="https://meet.google.com" class="io-purple-main io-link">Google Meet</a> for online lessons. You will need to download and install the respective application if you don't have it already.</p>
                                            <p><span class="io-fw-semibold">Audio:</span> Use headphones for better sound quality. This will help reduce background noise and improve communication between you and the teacher.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">2</div>
                                        <div class="io-steps__title">Preparation for the Lesson</div>
                                        <div class="io-steps__dots">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p>You will receive a <span class="io-fw-semibold">link to the lesson</span> in advance via email.</p>
                                            <p><span class="io-fw-semibold">Print out the sheet music</span> before the lesson begins.</p>
                                            <p><span class="io-fw-semibold">Set up your device</span> for the online lesson to the right of the student, at the keyboard level or slightly higher, so that the teacher can see the keyboard, your hands, and your face.</p>
                                            <p><span class="io-fw-semibold">Log into the Zoom or Google Meet</span> application using the lesson link a little earlier to give yourself time to address any potential technical issues.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">3</div>
                                        <div class="io-steps__title">During the Lesson</div>
                                        <div class="io-steps__dots">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p><span class="io-fw-semibold">Instructions and Feedback:</span> Your teacher will provide specific instructions for exercises, mastering new compositions, and improving your playing technique.</p>
                                            <p><span class="io-fw-semibold">Questions:</span> At any point during the lesson, feel free to ask questions. Don't hesitate to inquire about anything that isn't clear.</p>
                                            <p><span class="io-fw-semibold">Practice:</span> The majority of the lesson will focus on practical performance. You will play while the teacher observes, listens, and offers guidance.</p>
                                            <p><span class="io-fw-semibold">Teacher's Gameplay Demonstration:</span> Your teacher may also demonstrate specific segments, helping you better understand how they should sound.</p>
                                            <p><span class="io-fw-semibold">Lesson Conclusion:</span> By the end of the lesson, you and your teacher will discuss the material covered and plan for the next lesson.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps">
                                        <div class="io-steps__number">4</div>
                                        <div class="io-steps__title">After the Lesson</div>
                                        <div class="io-steps__empty">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p>Materials for independent practice at home, including sheet music and recordings, will be provided to you. These resources will assist you in practicing until the next lesson.</p>
                                        </div>
                                    </div>
                                    <div class="io-steps io-steps--last">
                                        <div class="io-steps__empty">

                                        </div>
                                        <div class="io-steps__text io-text-wrapper">
                                            <p class="io-purple-main io-fs-18 io-fw-semibold">Learning at Montessori Center will be enjoyable and productive!<br>We guarantee that online piano lessons are convenient and effective.</p>
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
                                                    <span class="d-xl-none">уровень</span>
                                                </div>
                                                <div class="io-content">
                                                    <p>Возраст: 5 - 6 лет</p>
                                                </div>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-none d-xl-flex">
                                                <span>Смотреть диплом</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.png" alt="">
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
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-xl-none">
                                                <span>Смотреть диплом</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="io-course-programs__inner io-course-programs__inner--light">
                                        <div class="io-course-programs__data io-course-programs__data--light">
                                            <div class="io-course-programs__data-inner">
                                                <div class="io-course-programs__name">
                                                    <img src="/wp-content/themes/interschooltemplate/images/i-c-light.svg" alt="">
                                                    <span>Начальный</span>
                                                    <span class="d-xl-none">уровень</span>
                                                </div>
                                                <div class="io-content">
                                                    <p>Возраст: от 7 лет</p>
                                                </div>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-none d-xl-flex">
                                                <span>Смотреть диплом</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.png" alt="">
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
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-xl-none">
                                                <span>Смотреть диплом</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="io-course-programs__inner io-course-programs__inner--medium">
                                        <div class="io-course-programs__data io-course-programs__data--medium">
                                            <div class="io-course-programs__data-inner">
                                                <div class="io-course-programs__name">
                                                    <img src="/wp-content/themes/interschooltemplate/images/i-c-medium.svg" alt="">
                                                    <span>Средний</span>
                                                    <span class="d-xl-none">уровень</span>
                                                </div>
                                                <div class="io-content">
                                                    <p>Возраст: от 10 лет</p>
                                                </div>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-none d-xl-flex">
                                                <span>Смотреть диплом</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Intermediate-1.png" alt="">
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
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-xl-none">
                                                <span>Смотреть диплом</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Intermediate-1.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="io-course-programs__inner io-course-programs__inner--hard">
                                        <div class="io-course-programs__data io-course-programs__data--hard">
                                            <div class="io-course-programs__data-inner">
                                                <div class="io-course-programs__name">
                                                    <img src="/wp-content/themes/interschooltemplate/images/i-c-hard.svg" alt="">
                                                    <span>Продвинутый</span>
                                                    <span class="d-xl-none">уровень</span>
                                                </div>
                                                <div class="io-content">
                                                    <p>Возраст: от 12 лет</p>
                                                </div>
                                            </div>
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-none d-xl-flex">
                                                <span>Смотреть диплом</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Advanced-1.png" alt="">
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
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-xl-none">
                                                <span>Смотреть диплом</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Advanced-1.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="io-text-wrapper">
                                    <p>Программа обучения фортепиано разработана для детей возрастом от 7 лет и взрослых. Программа включает три уровня: начальный, средний и продвинутый, по окончанию которых студенты получают дипломы. Если студент ранее не учился, он начинает обучение с начального уровня. Средний и продвинутый уровни требуют подготовки. Дети возрастом 5 - 6 лет начинают обучение с подготовительного уровня.</p>
                                    <p class="io-purple-main io-fs-18 io-fw-semibold">Начните обучение! Для этого запишитесь на <a href="#" class="io-purple-main io-fw-semibold io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">пробный урок</a>!</p>
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
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-none d-xl-flex">
                                                <span>View Diploma</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.png" alt="">
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
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-xl-none">
                                                <span>View Diploma</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.png" alt="">
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
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-none d-xl-flex">
                                                <span>View Diploma</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.png" alt="">
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
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-xl-none">
                                                <span>View Diploma</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Beginner-1.png" alt="">
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
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-none d-xl-flex">
                                                <span>View Diploma</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Intermediate-1.png" alt="">
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
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-xl-none">
                                                <span>View Diploma</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Intermediate-1.png" alt="">
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
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-none d-xl-flex">
                                                <span>View Diploma</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Advanced-1.png" alt="">
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
                                            <a href="#" target="_blank" class="io-course-programs__diploma io-lightbox d-xl-none">
                                                <span>View Diploma</span>
                                                <img class="d-none" src="/wp-content/themes/interschooltemplate/images/Certificate_Advanced-1.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="io-text-wrapper">
                                    <p>The piano education program is designed for children aged 7 and adults. The program comprises three levels: beginner, intermediate, and advanced, with diplomas awarded upon completion. If a student is new to piano lessons, they start at the beginner level. The intermediate and advanced levels require prior preparation. Children aged 5 - 6 begin their education at the preparatory level.</p>
                                    <p class="io-purple-main io-fs-18 io-fw-semibold">Start your learning journey! Sign up for a <a href="#" class="io-purple-main io-fw-semibold io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">trial lesson</a> today!</p>
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
                                                <div class="io-price__detail-title-wrapper">
                                                    <p class="io-price__detail-title">
                                                        <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Ваш заказ:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Your order:'; } ?>
                                                        <span class="io-price__detail-title--pocket io-purple-main io-fw-semibold"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Абонемент'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Subscription'; } ?></span>
                                                        <span class="io-price__detail-title--demo io-purple-main io-fw-semibold" onclick="toggleLessonDisplay(this)"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Пробные уроки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Trial lessons'; } ?></span>
                                                        <span class="io-price__detail-title--gift io-purple-main io-fw-semibold"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Подарочный сертификат'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Gift card'; } ?></span>
                                                    </p>
                                                    <div id="lessonDisplayDemo">
                                                        <div>
                                                            <div class="io-check"><span class="io-fw-semibold io-purple-main">Фортепиано</span></div><button></button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="io-price__detail-currency">
                                                    <div class="io-price__detail-item">
                                                        <p class="io-purple-main"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Валюта платежа:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Payment currency:'; } ?></p>
                                                    </div>
                                                    <div class="io-select-currency">
                                                        <span class="io-selected-currency">USD</span>
                                                        <ul class="io-currency-options">
                                                            <li data-value="usd">USD</li>
                                                            <li data-value="eur">EUR</li>
                                                            <li data-value="uah">UAH</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="io-price__detail-item">
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Количество уроков:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Number of lessons:'; } ?></p>
                                                    <p id="lessonCountDisplayPocket">1</p>
                                                    <p id="lessonCountLessonsDemo">1</p>
                                                    <p id="lessonCountLessonsGift">42</p>
                                                </div>
                                                <div class="io-price__detail-item">
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Цена урока:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Lesson price:'; } ?></p>
                                                    <p id="lessonPriceDisplayPocket">6 USD</p>
                                                    <p id="lessonOnePriceDemo">14 USD</p>
                                                    <p id="lessonOnePriceGift">14 USD</p>
                                                </div>
                                                <div class="io-price__detail-item" id="lessonSaleWrapper">
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Сумма скидки:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Discount:'; } ?></p>
                                                    <p id="lessonSaleDisplayPocket" class="io-pink-main">8 USD</p>
                                                    <p id="lessonSalePriceDemo" class="io-pink-main">8 USD</p>
                                                    <p id="lessonSalePriceGift" class="io-pink-main">8 USD</p>
                                                </div>
                                                <div class="io-price__detail-item io-promo">
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Промокод'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Promo code'; } ?></p>
                                                    <div class="io-promo__inner io-form__item">
                                                        <input type="text" spellcheck="false" placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите промокод'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter promo code'; } ?>">
                                                        <button class="io-promo__check" onclick="ioPromoInnerCheck()"></button>
                                                        <button class="io-promo__button" onclick="ioPromoInnerToggleClass()"></button>
                                                    </div>
                                                </div>
                                                <div class="io-price__detail-item io-last">
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Сумма к оплате:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Total:'; } ?></p>
                                                    <p id="lessonAmountDisplayPocket">6 USD</p>
                                                    <p id="lessonAmountDisplayDemo">6 USD</p>
                                                    <p id="lessonAmountDisplayGift">6 USD</p>
                                                </div>
                                                <div class="io-price__bottom">
                                                    <div class="panel d-none">

                                                        <div class="overlay hidden">
                                                            <div class="overlay-content"></div>
                                                        </div>


                                                        <div class="panel-body">
                                                            <div id="paymentResponse" class="hidden"></div>
                                                            <div id="paypal-button-container"></div>
                                                        </div>
                                                    </div>
                                                    <button type="button" class="io-price__button io-button__large" style="background-color: #FFC43A; border-color: #FFC43A; padding-top: 9px; padding-bottom: 9px;">
                                                        <img src="/wp-content/themes/interschooltemplate/images/io-paypal.png" alt="">
                                                    </button>
                                                    <button id="lessonButtonDisplayPocket" type="button" class="io-price__button io-button__large">
                                                        <img src="/wp-content/themes/interschooltemplate/images/visamastercard.png" alt="">
                                                    </button>
                                                    <button id="lessonButtonDisplayDemo" type="button" class="io-price__button io-button__large">
                                                        <img src="/wp-content/themes/interschooltemplate/images/visamastercard.png" alt="">
                                                    </button>
                                                    <button id="lessonButtonDisplayGift" type="button" class="io-price__button io-button__large">
                                                        <img src="/wp-content/themes/interschooltemplate/images/visamastercard.png" alt="">
                                                    </button>
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Подтверждая заказ, я принимаю условия:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'By confirming the order, I accept the terms of:'; } ?><br>
                                                        <?php if (ICL_LANGUAGE_CODE === 'ru') { echo '<a class="io-link" href="/politika-konfidencialnosti/" target="_blank">Политики конфиденциальности</a> и <a class="io-link" href="/publichnaya-oferta/" target="_blank">Публичной оферты</a>'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo '<a class="io-link" href="/en/privacy-policy/" target="_blank">Privacy Policy</a> and <a class="io-link" href="/en/public-offer/" target="_blank">Public Offer</a>'; } ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-price__sidebar-content io-course-price">
                                        <div class="io-flex-between d-flex align-items-center justify-content-between justify-content-sm-start">
                                            <h2 class="io-heading-2"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Купить онлайн уроки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Buy Online Lessons'; } ?></h2>
                                            <div class="io-select-currency-mobile d-xl-none">
                                                <span class="io-selected-currency-mobile">USD</span>
                                                <ul class="io-currency-mobile-options">
                                                    <li data-value="usd">USD</li>
                                                    <li data-value="eur">EUR</li>
                                                    <li data-value="uah">UAH</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="io-warning io-warning--large">
                                            <span><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Купленные уроки можно использовать для обучения на любых курсах'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Purchased lessons can be used for learning on any courses'; } ?></span>
                                        </div>
                                        <div class="io-price">
                                            <div class="io-price__step io-price__first io-block">
                                                <div class="io-price__heading">
                                                    <span>1</span>
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Выбрать покупку'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Select purchase'; } ?></p>
                                                </div>
                                                <form>
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
                                            <div class="io-price__step io-price__pocket2 io-block">
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
                                                        <div class="io-select-pocket">
                                                            <div class="io-selected-pocket">4 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">56 USD</span></div>
                                                            <ul class="io-pocket-options">
                                                                <li data-value="4">4 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">56 USD</span></li>
                                                                <li data-value="8">8 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">112 USD</span></li>
                                                                <li data-value="12">12 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">168 USD</span></li>
                                                                <li data-value="16">16 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">224 USD</span></li>
                                                                <li data-value="24">24 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">336 USD</span></li>
                                                                <li data-value="32">32 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">448 USD</span></li>
                                                                <li data-value="80">80 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-pink-main">970 USD</span><span class="io-pink-main ms-auto">Скидка</span></li>
                                                                <li data-value="120">120 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-pink-main">1220 USD</span><span class="io-pink-main ms-auto">Скидка</span></li>
                                                                <li data-value="160">160 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-pink-main">1620 USD</span><span class="io-pink-main ms-auto">Скидка</span></li>
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
                                            <div class="io-price__step io-price__pocket io-block">
                                                <div class="io-price__heading">
                                                    <span>3</span>
                                                    <p class="d-none d-sm-block"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Ваши контактные данные'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Your contact information'; } ?></p>
                                                    <p class="d-sm-none"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Контактные данные'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Contact information'; } ?></p>
                                                    <p></p>
                                                </div>
                                                <!-- <p class="d-sm-none io-price__surely"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Все поля обязательные'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'All fields are required'; } ?></p> -->
                                                <form action="" class="io-form">
                                                    <div class="io-form__item">
                                                        <div class="io-form__item-header">
                                                            <label><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Имя и фамилия студента'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Student\'s first and last name'; } ?></label>
                                                        </div>
                                                        <input id="ioAbonementName" onblur="cleanInput(this)" type="text" required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите имя и фамилию'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter first and last name'; } ?>">
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
                                                        <input id="ioAbonementEmail" onblur="cleanEmailInput(this)" class="io-email-input" type="text" required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите email'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter your email'; } ?>">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="io-price__step io-price__demo2 io-block">
                                                <div class="io-price__heading">
                                                    <span>2</span>
                                                    <p class="d-none d-sm-block"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Записаться на пробные уроки'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Sign up for trial lessons'; } ?></p>
                                                    <p class="d-sm-none"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Записаться'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Sign up'; } ?></p>
                                                    <p class="io-price__heading-choosen d-none d-xl-block"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Выбрано:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Selected:'; } ?> <span id="lessonCountLessonsDemo2">1</span></p>
                                                </div>
                                                <div class="io-price__heading-choosen d-xl-none">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Выбрано:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Selected:'; } ?>
                                                    <div id="lessonCountLessonsDemoMobile">1 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'урок'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lesson'; } ?> / <span class="io-purple-main">6 USD</span></div>
                                                </div>
                                                <form>
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                                                    <div class="io-accordion accordion io-price__accordion" id="ioDemoCourseCheck">
                                                        <div class="io-accordion__item accordion-item">
                                                            <h2 class="io-accordion__header accordion-header" id="ioDemoCourseCheck-headingTwo">
                                                                <button class="io-accordion__button accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseTwo" aria-expanded="true" aria-controls="ioDemoCourseCheck-collapseTwo">
                                                                    Музыка
                                                                </button>
                                                            </h2>
                                                            <div id="ioDemoCourseCheck-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="ioDemoCourseCheck-headingTwo">
                                                                <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                                    <div>
                                                                        <input class="io-checkbox" type="checkbox" id="iocheckbox21" name="checkbox-group" checked>
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseOne" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseOne">
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseFive" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseFive">
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseFour" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseFour">
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseThree" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseThree">
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseSix" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseSix">
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
                                                                <button class="io-accordion__button accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseTwo" aria-expanded="true" aria-controls="ioDemoCourseCheck-collapseTwo">
                                                                    Music
                                                                </button>
                                                            </h2>
                                                            <div id="ioDemoCourseCheck-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="ioDemoCourseCheck-headingTwo">
                                                                <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                                    <div>
                                                                        <input class="io-checkbox" type="checkbox" id="iocheckbox21" name="checkbox-group" checked>
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseOne" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseOne">
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseFive" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseFive">
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseFour" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseFour">
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseThree" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseThree">
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioDemoCourseCheck-collapseSix" aria-expanded="false" aria-controls="ioDemoCourseCheck-collapseSix">
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
                                            <div class="io-price__step io-price__gift io-block">
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
                                                                <button class="io-accordion__button accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseTwo" aria-expanded="true" aria-controls="ioGiftCourseCheck-collapseTwo">
                                                                    Музыка
                                                                </button>
                                                            </h2>
                                                            <div id="ioGiftCourseCheck-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="ioGiftCourseCheck-headingTwo">
                                                                <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                                    <div>
                                                                        <input class="io-radio" type="radio" id="iocheckboxgift21" name="checkbox-group" checked>
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseOne" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseOne">
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseFive" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseFive">
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseFour" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseFour">
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseThree" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseThree">
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseSix" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseSix">
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
                                                                <button class="io-accordion__button accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseTwo" aria-expanded="true" aria-controls="ioGiftCourseCheck-collapseTwo">
                                                                    Music
                                                                </button>
                                                            </h2>
                                                            <div id="ioGiftCourseCheck-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="ioGiftCourseCheck-headingTwo">
                                                                <div class="io-block io-block--grey io-accordion__body accordion-body">
                                                                    <div>
                                                                        <input class="io-radio" type="radio" id="iocheckboxgift21" name="checkbox-group" checked>
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseOne" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseOne">
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseFive" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseFive">
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseFour" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseFour">
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseThree" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseThree">
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
                                                                <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ioGiftCourseCheck-collapseSix" aria-expanded="false" aria-controls="ioGiftCourseCheck-collapseSix">
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
                                            <div class="io-price__step io-price__gift2 io-block">
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
                                                        <div class="io-select-gift">
                                                            <div class="io-selected-gift">4 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">56 USD</span></div>
                                                            <ul class="io-gift-options">
                                                                <li data-value="4">4 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">56 USD</span></li>
                                                                <li data-value="8">8 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">112 USD</span></li>
                                                                <li data-value="12">12 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">168 USD</span></li>
                                                                <li data-value="16">16 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">224 USD</span></li>
                                                                <li data-value="24">24 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">336 USD</span></li>
                                                                <li data-value="32">32 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'урока'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-purple-main">448 USD</span></li>
                                                                <li data-value="80">80 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-pink-main">970 USD</span><span class="io-pink-main ms-auto">Скидка</span></li>
                                                                <li data-value="120">120 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-pink-main">1220 USD</span><span class="io-pink-main ms-auto">Скидка</span></li>
                                                                <li data-value="160">160 <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'уроков'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'lessons'; } ?> / <span class="io-pink-main">1620 USD</span><span class="io-pink-main ms-auto">Скидка</span></li>
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
                                            <div class="io-price__step io-price__gift3 io-block">
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
                                                        <input id="ioGiftName" onblur="cleanInput(this)" type="text" required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите имя'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter name'; } ?>">
                                                    </div>
                                                    <div class="io-form__item">
                                                        <div class="io-form__item-header">
                                                            <label><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Фамилия студента'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Student last name'; } ?></label>
                                                        </div>
                                                        <input id="ioGiftSurname" onblur="cleanInput(this)" type="text" required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите фамилию'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter last name'; } ?>">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="io-price__step io-price__gift4 io-block">
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
                                                        <input id="ioGiftPayer" onblur="cleanInput(this)" type="text" required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите имя и фамилию'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter first and last name'; } ?>">
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
                                            <div class="io-price__step io-price__demo io-block">
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
                                                        <input id="ioDemoName" onblur="cleanInput(this)" type="text" required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите имя студента'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter name'; } ?>">
                                                        <div class="io-form__item-error">Пример ошибки</div>
                                                    </div>
                                                    <div class="io-form__item">
                                                        <div class="io-form__item-header">
                                                            <label><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Фамилия студента'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Student last name'; } ?></label>
                                                        </div>
                                                        <input id="ioDemoSurname" onblur="cleanInput(this)" type="text" required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите фамилию студента'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter last name'; } ?>">
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
                                                        <input type="text" id="ioDemoParent" required placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите имя родителя'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter parent\'s name'; } ?>">
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
                                            <div class="io-price__step d-xl-none io-block">
                                                <div class="io-price__detail-item io-promo">
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Промокод'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Promo code'; } ?></p>
                                                    <div class="io-promo__inner io-form__item">
                                                        <input type="text" spellcheck="false" placeholder="<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Введите промокод'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Enter promo code'; } ?>">
                                                        <button class="io-promo__check" onclick="ioPromoInnerCheck()"></button>
                                                        <button class="io-promo__button" onclick="ioPromoInnerToggleClass()"></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="io-price__step d-xl-none io-block">
                                                <div class="io-price__detail-item d-sm-none">
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Сумма к оплате:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Total:'; } ?></p>
                                                    <p id="ioMobilePocketPrice">56 USD</p>
                                                    <p id="ioMobileDemoPrice">6 USD</p>
                                                    <p id="ioMobileGiftPrice">56 USD</p>
                                                </div>
                                                <div class="io-price__detail-item d-none d-sm-flex">
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Сумма к оплате:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Total:'; } ?></p>
                                                    <p id="ioTabletPocketPrice">56 USD</p>
                                                    <p id="ioTabletDemoPrice">6 USD</p>
                                                    <p id="ioTabletGiftPrice">56 USD</p>
                                                </div>
                                                <div class="io-price__bottom">
                                                    <button type="button" class="io-price__button io-button__large" style="background-color: #FFC43A; border-color: #FFC43A;">
                                                        <img src="/wp-content/themes/interschooltemplate/images/io-paypal.png" alt="">
                                                    </button>
                                                    <button type="button" class="io-price__button io-button__large">
                                                        <img src="/wp-content/themes/interschooltemplate/images/visamastercard.png" alt="">
                                                    </button>
                                                    <p><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Подтверждая заказ, я принимаю условия:'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'By confirming the order, I accept the terms of:'; } ?><br class="d-sm-none">
                                                        <?php if (ICL_LANGUAGE_CODE === 'ru') { echo '<a class="io-link" href="/politika-konfidencialnosti/" target="_blank">Политики конфиденциальности</a> и <a class="io-link" href="/publichnaya-oferta/" target="_blank">Публичной оферты</a>'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo '<a class="io-link" href="/en/privacy-policy/" target="_blank">Privacy Policy</a> and <a class="io-link" href="/en/public-offer/" target="_blank">Public Offer</a>'; } ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="io-price__step io-price__pocket3">
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
                                        <div class="io-price__step io-price__demo3">
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
                                        <div class="io-price__step io-price__gift5">
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
                                                Как записаться на курс фортепиано онлайн?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-1" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-1" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Записаться на пробный урок и оплатить его можно <a href="#" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">здесь</a>. После этого наш администратор свяжется с вами и согласует расписание.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-2">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-2" aria-expanded="false" aria-controls="faqAccordion-collapse-2">
                                                С какого возраста можно учиться детям на курсе фортепиано онлайн?
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
                                                Сколько стоит пробный урок?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-2b" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-2b" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Пробный урок стоит $6. Стоимость пробных уроков на все курсы одинаковая.
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
                                                    Вам необходимо купить абонемент минимум на 4 урока. Такой абонемент стоит $56. Выбрать количество уроков вы можете <a href="#" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">здесь</a>. При покупке от 80 уроков одним платежом действует скидка от $120.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-4">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-4" aria-expanded="false" aria-controls="faqAccordion-collapse-4">
                                                Как оплатить курс?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-4" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Вы можете выбрать количество уроков и оплатить картой на нашем <a href="#" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">сайте</a>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-5">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-5" aria-expanded="false" aria-controls="faqAccordion-collapse-5">
                                                Сколько раз в неделю проходят уроки?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-5" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-5" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Мы рекомендуем заниматься от 2 раз в неделю.
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
                                                    Расписание уроков согласовывается с каждым студентом.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-7">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-7" aria-expanded="false" aria-controls="faqAccordion-collapse-7">
                                                Сколько длится урок?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-7" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Урок длится 45 минут.
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
                                                    Нет, уроки фортепиано проходят только индивидуально.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-9">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-9" aria-expanded="false" aria-controls="faqAccordion-collapse-9">
                                                Я никогда не учился ранее, я могу записаться к вам?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-9" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-9" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Да, мы начинаем обучение с нуля.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-10">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-10" aria-expanded="false" aria-controls="faqAccordion-collapse-10">
                                                Мой ребенок раньше занимался, вы определите его уровень?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-10" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-10" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Да, наш педагог определит уровень знаний и подберет программу соответствующего уровня сложности.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-11">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-11" aria-expanded="false" aria-controls="faqAccordion-collapse-11">
                                                Можно ли заниматься на выходных?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-11" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-11" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Да, мы работаем каждый день, включая выходные.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-12">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-12" aria-expanded="false" aria-controls="faqAccordion-collapse-12">
                                                В случае пропуска урока, оплата переносится или сгорает?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-12" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-12" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Чтобы сохранить оплату, вам необходимо предупредить нас об отсутствии на уроке минимум за 24 часа до его начала.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-13">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-13" aria-expanded="false" aria-controls="faqAccordion-collapse-13">
                                                Можно ли приостанавливать абонемент?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-13" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-13" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Да, можно приостановить уроки на любой период, сообщите нашему администратору даты ваших каникул.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-14">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-14" aria-expanded="false" aria-controls="faqAccordion-collapse-14">
                                                Получит ли мой ребенок диплом об окончании курса?
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
                                                Как нужно подготовиться к урокам?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-15" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-15" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Вам необходимо дома иметь пианино или синтезатор, гаджет с камерой и желательно наушники. Загрузите на ваше устройство приложение Zoom и Google Meet, проверьте работу камеры и звука.
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
                                                    Да. При этом важно, чтобы ваши пожелания по расписанию совпали с рабочим графиком этого педагога.
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
                                                    Да, включает. На уроках фортепиано педагог обязательно уделяет внимание теории музыки и сольфеджио.
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
                                                    Да, <a href="#" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab4; ?>" data-radio-id-switch="">программа курса фортепиано</a> опубликована на сайте на странице курса.
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
                                                How to Enroll in Online Piano Lessons?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-1" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-1" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    If you're interested in taking piano lessons online, you can sign up for a trial lesson and make the payment <a href="#" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType2">here</a>. Our administrator will then get in touch with you to work out a schedule that suits you.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-2">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-2" aria-expanded="false" aria-controls="faqAccordion-collapse-2">
                                                What's the Minimum Age for Kids to Start Piano Lessons Online?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-2" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-2" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    We welcome children as young as 5 years old to join our online piano courses.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-2b">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-2b" aria-expanded="false" aria-controls="faqAccordion-collapse-2b">
                                                How Much Does a Trial Lesson Cost?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-2b" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-2b" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    A trial lesson is priced at $6, and this rate applies to all our courses.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-3">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-3" aria-expanded="false" aria-controls="faqAccordion-collapse-3">
                                                What's the Cost of the Full Course, and Are There Any Discounts Available?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-3" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-3" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    To get started, you'll need to purchase a subscription for a minimum of 4 lessons, which costs $56. You can select the number of lessons you want to buy <a href="#" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">here</a>. If you purchase 80 or more lessons in a single payment, you'll receive a discount of $120.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-4">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-4" aria-expanded="false" aria-controls="faqAccordion-collapse-4">
                                                How Can I Make a Payment for the Course?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-4" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-4" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    You can choose the number of lessons and complete your payment securely using your card on our <a href="#" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab6; ?>" data-radio-id-switch="ioCourseType1">website</a>.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-5">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-5" aria-expanded="false" aria-controls="faqAccordion-collapse-5">
                                                How Often Are the Lessons Held Each Week?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-5" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-5" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    We recommend scheduling lessons at least twice a week for the best results.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-6">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-6" aria-expanded="false" aria-controls="faqAccordion-collapse-6">
                                                How Is the Lesson Schedule Determined?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-6" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-6" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    The lesson schedule will be tailored to accommodate your availability and preferences.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-7">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-7" aria-expanded="false" aria-controls="faqAccordion-collapse-7">
                                                What Is the Duration of Each Lesson?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-7" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-7" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Each lesson is 45 minutes long.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-8">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-8" aria-expanded="false" aria-controls="faqAccordion-collapse-8">
                                                Can I Take Group Lessons?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-8" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-8" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    No, piano lessons are offered only on an individual basis.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-9">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-9" aria-expanded="false" aria-controls="faqAccordion-collapse-9">
                                                I've Never Studied Before, Can I Enroll with You?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-9" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-9" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes, we start teaching from scratch.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-10">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-10" aria-expanded="false" aria-controls="faqAccordion-collapse-10">
                                                My Child Has Had Previous Lessons. Will You Assess Their Level?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-10" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-10" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes, our instructor will assess their knowledge level and design a program that matches their skill level.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-11">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-11" aria-expanded="false" aria-controls="faqAccordion-collapse-11">
                                                Can I Schedule Lessons on the Weekends?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-11" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-11" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes, we operate every day, including weekends.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-12">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-12" aria-expanded="false" aria-controls="faqAccordion-collapse-12">
                                                What Happens If I Miss a Lesson? Can I Reschedule or Will the Payment Be Lost?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-12" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-12" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    To retain your payment, please notify us of your absence at least 24 hours before the lesson's scheduled start time.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-13">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-13" aria-expanded="false" aria-controls="faqAccordion-collapse-13">
                                                Is It Possible to Pause My Subscription?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-13" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-13" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes, you can suspend lessons for any period; just inform our administrator of your vacation dates.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-14">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-14" aria-expanded="false" aria-controls="faqAccordion-collapse-14">
                                                Will My Child Receive a Diploma upon Course Completion?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-14" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-14" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes, at the end of each module, students receive a certificate, and upon completing each level, they receive a diploma.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-15">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-15" aria-expanded="false" aria-controls="faqAccordion-collapse-15">
                                                How Should I Prepare for the Lessons?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-15" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-15" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    You should have a piano or keyboard at home, a device with a camera, and preferably headphones. Download the Zoom and Google Meet apps on your device, and ensure your camera and audio are functioning.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-16">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-16" aria-expanded="false" aria-controls="faqAccordion-collapse-16">
                                                Will My Child Take Exams?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-16" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-16" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    In the Montessori Center, students participate in concerts and competitions instead of exams.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-17">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-17" aria-expanded="false" aria-controls="faqAccordion-collapse-17">
                                                Do You Accept Adults?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-17" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-17" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes, we teach adults as well.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-18">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-18" aria-expanded="false" aria-controls="faqAccordion-collapse-18">
                                                Can I Choose a Teacher from Your Website?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-18" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-18" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes, you can. It's essential to ensure that your schedule preferences align with the teacher's availability.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-19">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-19" aria-expanded="false" aria-controls="faqAccordion-collapse-19">
                                                Does the Course Include Music Theory and Solfege?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-19" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-19" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes, it does. Music theory and solfege are an integral part of piano lessons.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="io-accordion__item accordion-item">
                                        <h2 class="io-accordion__header accordion-header" id="faqAccordion-heading-20">
                                            <button class="io-accordion__button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqAccordion-collapse-20" aria-expanded="false" aria-controls="faqAccordion-collapse-20">
                                                Is There a Course Curriculum, and Can I View It?
                                            </button>
                                        </h2>
                                        <div id="faqAccordion-collapse-20" class="accordion-collapse collapse" aria-labelledby="faqAccordion-heading-20" data-bs-parent="#faqAccodrion">
                                            <div class="io-accordion__body accordion-body">
                                                <div class="io-block io-block--grey io-course-faq__item">
                                                    Yes, <a href="#" class="io-link io-button__tab-switch" data-tab-id-switch="<?php echo $ioTab4; ?>" data-radio-id-switch="">the piano course</a> curriculum is available on the course page of our website.
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
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-1.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-2.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-3.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-4.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-5.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-6.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-7.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-8.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-9.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-10.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-11.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-12.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-13.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-14.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-15.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-16.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-17.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-18.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-19.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-20.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                            <div class="io-gallery__item io-lb-gallery__item">
                                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-21.jpg" alt="">
                                                <button class="io-gallery__item-button io-button__link io-rating__link">
                                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Смотреть'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'View'; } ?>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                                        <div class="io-gallery io-gallery--video">
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="WdE-uakv4Og">
                                                <img src="/wp-content/themes/interschooltemplate/images/WdE-uakv4Og.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="8WpGo5wR958">
                                                <img src="/wp-content/themes/interschooltemplate/images/8WpGo5wR958.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="ULjFfwIDsEU">
                                                <img src="/wp-content/themes/interschooltemplate/images/ULjFfwIDsEU.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="0OBHTBmw7XE">
                                                <img src="/wp-content/themes/interschooltemplate/images/0OBHTBmw7XE.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="vaZbPJYEOAs">
                                                <img src="/wp-content/themes/interschooltemplate/images/vaZbPJYEOAs.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="veVAq-1To3c">
                                                <img src="/wp-content/themes/interschooltemplate/images/veVAq-1To3c.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="l3Ez6EKZr5M">
                                                <img src="/wp-content/themes/interschooltemplate/images/l3Ez6EKZr5M.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="4-6LbFnVi3U">
                                                <img src="/wp-content/themes/interschooltemplate/images/4-6LbFnVi3U.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="qS0q4RA7b2g">
                                                <img src="/wp-content/themes/interschooltemplate/images/qS0q4RA7b2g.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="_9uLi5PpCpw">
                                                <img src="/wp-content/themes/interschooltemplate/images/_9uLi5PpCpw.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="rJB5-EB2xco">
                                                <img src="/wp-content/themes/interschooltemplate/images/rJB5-EB2xco.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="boYfnTNhEZs">
                                                <img src="/wp-content/themes/interschooltemplate/images/boYfnTNhEZs.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="Ne5NaOGBkQc">
                                                <img src="/wp-content/themes/interschooltemplate/images/Ne5NaOGBkQc.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="ajA3XagAeO0">
                                                <img src="/wp-content/themes/interschooltemplate/images/ajA3XagAeO0.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="QtK6OfserOs">
                                                <img src="/wp-content/themes/interschooltemplate/images/QtK6OfserOs.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="QyrXMSdIHuY">
                                                <img src="/wp-content/themes/interschooltemplate/images/QyrXMSdIHuY.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="py67EJgbfmk">
                                                <img src="/wp-content/themes/interschooltemplate/images/py67EJgbfmk.jpg" alt="">
                                                <button class="io-gallery__item-button io-video__button"></button>
                                            </div>
                                            <div class="io-gallery__item io-video__lightbox" type="button" data-video-id="hAvQ9RleFP8">
                                                <img src="/wp-content/themes/interschooltemplate/images/hAvQ9RleFP8.jpg" alt="">
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

    <!-- <?php io_cta(); ?> -->

    <?php io_popular_courses(); ?>

    <?php io_montessori_work(); ?>
</main>

<!-- Image Lightbox -->
<div class="io-lightbox__container">
    <span class="close-btn">&times;</span>
    <img src="" alt="" class="io-lightbox__content">
</div>

<!-- Video Lightbox -->
<div class="video-lightbox-container">
    <span class="close-btn">&times;</span>
    <div class="video-lightbox-content"></div>
</div>

<!-- Gallery Lightbox -->
<div class="io-lb-gallery">
    <div class="io-lb-gallery__wrapper">
        <button class="io-lb-gallery__close">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <img class="io-lb-gallery__image" src="" alt="">
        <div class="io-lb-gallery__thumbs-wrapper">
            <button class="io-lb-gallery__thumbs-prev io-pagination__prev"></button>
            <div class="io-lb-gallery__thumbs"></div>
            <button class="io-lb-gallery__thumbs-next io-pagination__next"></button>
        </div>
        <button class="io-lb-gallery__prev io-pagination__prev"></button>
        <button class="io-lb-gallery__next io-pagination__next"></button>
    </div>
</div>

<?php get_footer(); // подключаем footer.php ?>

<script src="https://www.paypal.com/sdk/js?client-id=<?php echo PAYPAL_SANDBOX?PAYPAL_SANDBOX_CLIENT_ID:PAYPAL_PROD_CLIENT_ID; ?>&currency=<?php echo $currency; ?>&disable-funding=credit,card"></script>

<script>
//    Переназначаем действие события popstate (по нажатию на кнопки вперёд-назад на браузере)
    window.onpopstate = function(event) {
        if (!document.location.href.split("/#")[1]) {
            document.getElementById('nav-tab').firstElementChild.click()
        } else{
            document.querySelectorAll('[data-bs-target="#' + document.location.href.split("/#")[1] + '"]')[0].click()
        }
    };

</script>

<script>
    //Добавляем в историю браузера новую ссылку по нажатию на вкладку на странице
    function tabHistoryHandler(event, clicked_button) {
        //Проверяем, это нажатие на кнопку вкладки человеком, или эмуляция через click() функцией выше
        if (event.isTrusted) {
            window.history.pushState(clicked_button.id, "", document.location);
        }
    }

</script>

<!-- Telephone numbers in modal -->
<script>
    var inputPhone1 = document.querySelector("#phone1");
    window.intlTelInput(inputPhone1, {
        separateDialCode: true,
        onlyCountries: ["gb", "ru", "ua", "es"],
        preferredCountries: false,
    });

    var inputPhone2 = document.querySelector("#phone2");
    window.intlTelInput(inputPhone2, {
        separateDialCode: true,
        onlyCountries: ["gb", "ru", "ua", "es"],
        preferredCountries: false,
    });

    var inputPhone3 = document.querySelector("#phone3");
    window.intlTelInput(inputPhone3, {
        separateDialCode: true,
        onlyCountries: ["gb", "ru", "ua", "es"],
        preferredCountries: false,
    });

</script>

<!-- Header Changes after scroll and logo change on click -->
<?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
<script>
    // Получаем ссылку на элемент
    var logoElement = document.querySelector('.io-header__logo');
    var headerNav = document.querySelector('.io-header__list');
    var headerMain = document.querySelector('.io-header');

    // Получаем ссылку на изображение, которое будет использовано при скролле
    var scrollImage = 'url(/wp-content/themes/interschooltemplate/images/header-logo-piano.svg)';

    // Получаем ссылку на изображение, которое будет использовано по умолчанию
    var defaultImage = 'url(/wp-content/themes/interschooltemplate/images/header-logo.svg)';

    // Функция для обработки события прокрутки
    function handleScroll() {
        // Если текущая прокрутка больше 0, применяем изображение при скролле
        if (window.pageYOffset > 0) {
            if (window.innerWidth < 1199.5) {
                headerNav.style.opacity = '1';
                headerNav.style.pointerEvents = 'auto';
            } else {
                headerNav.style.opacity = '0';
                headerNav.style.pointerEvents = 'none';
            }
            headerMain.style.paddingBottom = 'var(--io-size-050)';
        } else {
            // В противном случае возвращаем изображение по умолчанию
            headerNav.style.opacity = '1';
            headerNav.style.pointerEvents = 'auto';
            headerMain.style.paddingBottom = 'var(--io-size-150)';
        }
        // Если текущая прокрутка больше 500, применяем изображение при скролле
        if (window.pageYOffset > 200) {
            logoElement.style.backgroundImage = scrollImage;
        } else {
            // В противном случае возвращаем изображение по умолчанию
            logoElement.style.backgroundImage = defaultImage;
        }
    }

    // Добавляем обработчик события прокрутки страницы
    window.addEventListener('scroll', handleScroll);

</script>
<?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
<script>
    // Получаем ссылку на элемент
    var logoElement = document.querySelector('.io-header__logo');
    var headerNav = document.querySelector('.io-header__list');
    var headerMain = document.querySelector('.io-header');

    // Получаем ссылку на изображение, которое будет использовано при скролле
    var scrollImage = 'url(/wp-content/themes/interschooltemplate/images/header-logo-piano-en.svg)';

    // Получаем ссылку на изображение, которое будет использовано по умолчанию
    var defaultImage = 'url(/wp-content/themes/interschooltemplate/images/header-logo.svg)';

    // Функция для обработки события прокрутки
    function handleScroll() {
        // Если текущая прокрутка больше 0, применяем изображение при скролле
        if (window.pageYOffset > 0) {
            if (window.innerWidth < 1199.5) {
                headerNav.style.opacity = '1';
                headerNav.style.pointerEvents = 'auto';
            } else {
                headerNav.style.opacity = '0';
                headerNav.style.pointerEvents = 'none';
            }
            headerMain.style.paddingBottom = 'var(--io-size-050)';
        } else {
            // В противном случае возвращаем изображение по умолчанию
            headerNav.style.opacity = '1';
            headerNav.style.pointerEvents = 'auto';
            headerMain.style.paddingBottom = 'var(--io-size-150)';
        }
        // Если текущая прокрутка больше 500, применяем изображение при скролле
        if (window.pageYOffset > 375) {
            logoElement.style.backgroundImage = scrollImage;
            logoElement.style.backgroundSize = 'auto 23px';
        } else {
            // В противном случае возвращаем изображение по умолчанию
            logoElement.style.backgroundImage = defaultImage;
            logoElement.style.backgroundSize = 'contain';
        }
    }

    // Добавляем обработчик события прокрутки страницы
    window.addEventListener('scroll', handleScroll);

</script>
<?php } ?>

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
        document.body.style.paddingRight = 'var(--io-size-075)';
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
        const ioLbGalleryThumbs = document.querySelector('.io-lb-gallery__thumbs');
        const ioLbGalleryThumbsWrapper = document.querySelector('.io-lb-gallery__thumbs-wrapper');
        const ioLbGalleryThumbsPrev = document.querySelector('.io-lb-gallery__thumbs-prev');
        const ioLbGalleryThumbsNext = document.querySelector('.io-lb-gallery__thumbs-next');
        let currentIndex = 0;
        let isLightboxOpen = false;

        let isImageDragging = false;
        let startXImage = 0;
        let currentXImage = 0;

        let isThumbsDragging = false;
        let startXThumbs = 0;
        let currentXThumbs = 0;

        let activeThumbIndex = 0;

        function showIoLbGallery() {
            ioLbGalleryImage.src = galleryItems[currentIndex].querySelector('img').src;
            ioLbGallery.style.display = 'block';
            isLightboxOpen = true;
            document.body.style.overflow = 'hidden';

            // Установим значение activeThumbIndex равным текущему currentIndex
            activeThumbIndex = currentIndex;

            updateThumbs();
        }

        function hideIoLbGallery() {
            ioLbGallery.style.display = 'none';
            isLightboxOpen = false;
            document.body.style.overflow = 'auto';
        }

        function showPrevImage() {
            currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
            ioLbGalleryImage.style.opacity = '0'; // Скрываем изображение с помощью прозрачности перед сменой источника
            setTimeout(function() {
                ioLbGalleryImage.src = galleryItems[currentIndex].querySelector('img').src;
                ioLbGalleryImage.style.opacity = '1'; // Отображаем изображение с новым источником снова с помощью прозрачности
                updateThumbs();
            }, 150); // Задержка 150 мс (значение совпадает с временем перехода в CSS)
        }

        function showNextImage() {
            currentIndex = (currentIndex + 1) % galleryItems.length;
            ioLbGalleryImage.style.opacity = '0'; // Скрываем изображение с помощью прозрачности перед сменой источника
            setTimeout(function() {
                ioLbGalleryImage.src = galleryItems[currentIndex].querySelector('img').src;
                ioLbGalleryImage.style.opacity = '1'; // Отображаем изображение с новым источником снова с помощью прозрачности
                updateThumbs();
            }, 150); // Задержка 150 мс (значение совпадает с временем перехода в CSS)
        }

        function showPrevThumbs() {
            currentIndex = (currentIndex - 1 + galleryItems.length) % galleryItems.length;
            updateThumbs();
        }

        function showNextThumbs() {
            currentIndex = (currentIndex + 1) % galleryItems.length;
            updateThumbs();
        }

        function updateThumbs() {
            ioLbGalleryThumbs.innerHTML = '';
            for (let i = 0; i < 6; i++) {
                const thumbItem = document.createElement('div');
                thumbItem.classList.add('io-lb-gallery__thumb');
                // Если thumb с текущим индексом i совпадает с активным индексом, добавим класс "active"
                if ((currentIndex + i) % galleryItems.length === activeThumbIndex) {
                    thumbItem.classList.add('active');
                }
                const thumbImage = document.createElement('img');
                thumbImage.src = galleryItems[(currentIndex + i) % galleryItems.length].querySelector('img').src;
                thumbImage.alt = '';
                thumbItem.appendChild(thumbImage);
                ioLbGalleryThumbs.appendChild(thumbItem);

                thumbItem.addEventListener('click', function() {
                    currentIndex = (currentIndex + i) % galleryItems.length;
                    showIoLbGallery();
                });
            }
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

        ioLbGalleryThumbsPrev.addEventListener('click', showPrevThumbs);
        ioLbGalleryThumbsNext.addEventListener('click', showNextThumbs);

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

        function handleThumbsDragStart(event) {
            isThumbsDragging = true;
            startXThumbs = event.clientX || event.touches[0].clientX;
            currentXThumbs = startXThumbs;
        }

        function handleThumbsDragMove(event) {
            if (!isThumbsDragging) return;
            currentXThumbs = event.clientX || event.touches[0].clientX;
            const deltaX = currentXThumbs - startXThumbs;
            if (deltaX > 50) {
                showPrevThumbs();
                isThumbsDragging = false;
            } else if (deltaX < -50) {
                showNextThumbs();
                isThumbsDragging = false;
            }
        }

        function handleThumbsDragEnd(event) {
            isThumbsDragging = false;
        }

        ioLbGalleryThumbs.addEventListener('mousedown', handleThumbsDragStart);
        ioLbGalleryThumbs.addEventListener('touchstart', handleThumbsDragStart);

        ioLbGalleryThumbs.addEventListener('mousemove', handleThumbsDragMove);
        ioLbGalleryThumbs.addEventListener('touchmove', handleThumbsDragMove);

        ioLbGalleryThumbs.addEventListener('mouseup', handleThumbsDragEnd);
        ioLbGalleryThumbs.addEventListener('touchend', handleThumbsDragEnd);
    });

</script>

<!-- Link to anchor -->
<script>
    // Функция для плавной прокрутки к якорю с учетом высоты фиксированного хедера
    function smoothScroll(event) {
        event.preventDefault();

        const targetId = this.getAttribute("href");
        const targetElement = document.querySelector(targetId);
        if (!targetElement) return;

        const offset = parseInt(this.getAttribute("data-scroll-offset")) || 0;
        const targetPosition = targetElement.getBoundingClientRect().top;
        const startPosition = window.pageYOffset;
        const distance = targetPosition - offset;
        const duration = 300;
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

    function easeInOutCubic(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t * t + b;
        t -= 2;
        return c / 2 * (t * t * t + 2) + b;
    }

    function isMobile() {
        return window.innerWidth < 576;
    }

    const anchorLinks = document.querySelectorAll("a[href^='#']");
    anchorLinks.forEach(link => link.addEventListener("click", function (event) {
        if (isMobile()) {
            const targetId = this.getAttribute("href");
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                const offset = parseInt(this.getAttribute("data-mobile-scroll-offset")) || 0;
                const targetPosition = targetElement.getBoundingClientRect().top;
                const startPosition = window.pageYOffset;
                const distance = targetPosition - offset;
                const duration = 300;
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

<!-- Accordion Top Scroll -->
<script>
    // Получаем ссылки на все кнопки аккордиона
    const accordionButtons = document.querySelectorAll('.io-accordion__button');

    // Добавляем обработчик события для каждой кнопки
    accordionButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Проверяем, является ли открываемый пункт активным
            if (!button.classList.contains('collapsed')) {
                // Находим родительский элемент io-accordion__item
                const parentItem = button.closest('.io-accordion__item');

                // Проверяем, что у нас есть родительский элемент io-accordion__item
                if (parentItem) {
                    // Добавляем обработчик события shown.bs.collapse, чтобы прокрутить страницу после завершения анимации открытия/закрытия панели аккордиона
                    parentItem.addEventListener('shown.bs.collapse', () => {
                        // Устанавливаем значение отступа в зависимости от ширины экрана
                        const itemOffsetTop = window.innerWidth >= 1200 ?
                            parentItem.offsetTop - 110 :
                            parentItem.offsetTop - 140;

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

<!-- Video after Image -->
<script>
    function showVideo(button) {
        var videoId = button.getAttribute("data-video-id");
        var videoContainer = button.parentNode;
        videoContainer.innerHTML = '<iframe src="https://www.youtube.com/embed/' + videoId + '?autoplay=1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>';
    }

</script>

<!-- Url for tabs -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Обработка клика на табы
        const tabContainer = document.getElementById('nav-tab'); // Get the tab container
        if (tabContainer) {
            const tabButtons = tabContainer.querySelectorAll('.nav-link');
            let isOtherTabClicked = false; // Флаг для отслеживания, был ли клик на другом табе

            tabButtons.forEach((button, index) => {
                button.addEventListener('click', function(event) {
                    const tabId = this.getAttribute('aria-controls');
                    const tabUrl = this.getAttribute('data-bs-target');

                    // Если кликнули на первый таб и урл уже содержит другой таб, убираем фрагмент из URL
                    if (index === 0 && isOtherTabClicked) {
                        window.history.replaceState(null, null, window.location.origin + window.location.pathname);
                    } else {
                        const urlWithTab = window.location.origin + window.location.pathname + tabUrl;
                        window.history.replaceState(null, null, urlWithTab); // Добавляем URL таба к URL сайта
                    }

                    // Устанавливаем флаг isOtherTabClicked, если кликнули на другом табе
                    if (index !== 0) {
                        isOtherTabClicked = true;
                    }
                });
            });

            // Проверяем URL при загрузке страницы
            const currentUrl = window.location.href;
            const tabUrls = Array.from(tabButtons).map(button => button.getAttribute('data-bs-target'));
            const matchedTab = tabUrls.find(tabUrl => currentUrl.endsWith(tabUrl));
            if (matchedTab) {
                const matchedTabButton = document.querySelector(`[data-bs-target="${matchedTab}"]`);
                if (matchedTabButton) {
                    isOtherTabClicked = true;
                    matchedTabButton.click(); // Активируем таб, если URL содержит URL таба
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
    document.addEventListener("DOMContentLoaded", function() {
        var tabs = document.querySelectorAll(".io-tabs-wrapper .nav-link");
        var ioSidebarSticky = document.querySelector(".io-sidebar__sticky");
        var ioSidebar = document.querySelector(".io-sidebar");

        function handleTabClick(tab) {
            if (tab.id === "<?php echo $ioTab6; ?>-tab") {
                ioSidebarSticky.style.display = "none";
                ioSidebar.style.gridTemplateColumns = "1fr";
            } else if (tab.id === "<?php echo $ioTab10; ?>-tab") {
                ioSidebarSticky.style.display = "none";
                ioSidebar.style.gridTemplateColumns = "1fr";
            } else if (tab.id === "<?php echo $ioTab9; ?>-tab") {
                ioSidebarSticky.style.display = "none";
                ioSidebar.style.gridTemplateColumns = "1fr";
            } else {
                ioSidebarSticky.style.display = "";
                ioSidebar.style.gridTemplateColumns = "";
            }

            tabs.forEach((t) => {
                t.classList.remove("active");
            });
            tab.classList.add("active");
        }

        tabs.forEach((tab) => {
            tab.addEventListener("click", function() {
                handleTabClick(tab);
            });
        });

        // Проверка якоря в URL при загрузке страницы
        var currentTab = window.location.hash.substring(1);
        var galleryTab = document.getElementById("<?php echo $ioTab6; ?>-tab");
        var priceTab = document.getElementById("<?php echo $ioTab10; ?>-tab");
        var blogTab = document.getElementById("<?php echo $ioTab9; ?>-tab");

        if (currentTab === galleryTab.getAttribute("aria-controls")) {
            handleTabClick(galleryTab);
        } else if (currentTab === priceTab.getAttribute("aria-controls")) {
            handleTabClick(priceTab);
        } else if (currentTab === blogTab.getAttribute("aria-controls")) {
            handleTabClick(blogTab);
        }
    });

</script>

<!-- Block Show animation -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var galereyaTab = document.getElementById("<?php echo $ioTab10; ?>-tab");
        var galleryItems = document.querySelectorAll('.io-gallery__item');

        function addShowClassToGallery() {
            galleryItems.forEach(function(item) {
                item.classList.add('show');
            });
        }

        // Проверяем хеш при загрузке страницы
        if (window.location.hash === "#<?php echo $ioTab10; ?>") {
            addShowClassToGallery();
        }

        // Добавляем обработчик клика на вкладку
        galereyaTab.addEventListener("click", function() {
            addShowClassToGallery();
        });
    });

</script>

<!-- Range Script -->
<script>
    const rangeInput = document.getElementById('ioAmountRange');
    const lessonElements = document.querySelectorAll('.io-range__lesson');
    const circleElements = document.querySelectorAll('.io-range__circle');

    rangeInput.addEventListener('input', function() {
        const activeIndex = parseInt(this.value) - 1;

        lessonElements.forEach((lesson, index) => {
            if (index === activeIndex) {
                lesson.classList.add('active');
            } else {
                lesson.classList.remove('active');
            }

            if (activeIndex >= 6) {
                if (index === activeIndex) {
                    lesson.classList.add('alt');
                } else {
                    lesson.classList.remove('alt');
                }
            }
        });

        circleElements.forEach((circle, index) => {
            if (index < activeIndex) {
                circle.classList.add('active');
            } else {
                circle.classList.remove('active');
            }
        });
    });

</script>

<script>
    const inputRangePocket = document.getElementById('ioAmountRange');
    const selectOptionPocket = document.getElementById('ioAmountSelect');

    // Связывание инпута и селекта
    inputRangePocket.addEventListener('input', () => {
        selectOptionPocket.value = inputRangePocket.value;
    });

    selectOptionPocket.addEventListener('change', () => {
        inputRangePocket.value = selectOptionPocket.value;

        // Ваш код для обновления классов active и alt
        const activeIndex = parseInt(inputRangePocket.value) - 1;

        lessonElements.forEach((lesson, index) => {
            if (index === activeIndex) {
                lesson.classList.add('active');
            } else {
                lesson.classList.remove('active');
            }

            if (activeIndex >= 6) {
                if (index === activeIndex) {
                    lesson.classList.add('alt');
                } else {
                    lesson.classList.remove('alt');
                }
            }
        });

        circleElements.forEach((circle, index) => {
            if (index < activeIndex) {
                circle.classList.add('active');
            } else {
                circle.classList.remove('active');
            }
        });
    });

</script>

<!-- Range Script Gift -->
<script>
    const rangeInputGift = document.getElementById('ioAmountRangeGift');
    const lessonElementsGift = document.querySelectorAll('.io-range__lesson-gift');
    const circleElementsGift = document.querySelectorAll('.io-range__circle-gift');

    rangeInputGift.addEventListener('input', function() {
        const activeIndex = parseInt(this.value) - 1;

        lessonElementsGift.forEach((lesson, index) => {
            if (index === activeIndex) {
                lesson.classList.add('active');
            } else {
                lesson.classList.remove('active');
            }

            if (activeIndex >= 6) {
                if (index === activeIndex) {
                    lesson.classList.add('alt');
                } else {
                    lesson.classList.remove('alt');
                }
            }
        });

        circleElementsGift.forEach((circle, index) => {
            if (index < activeIndex) {
                circle.classList.add('active');
            } else {
                circle.classList.remove('active');
            }
        });
    });

</script>

<script>
    const inputRangePocket = document.getElementById('ioAmountRangeGift');
    const selectOptionPocket = document.getElementById('ioAmountSelect');

    // Связывание инпута и селекта
    inputRangePocket.addEventListener('input', () => {
        selectOptionPocket.value = inputRangePocket.value;
    });

    selectOptionPocket.addEventListener('change', () => {
        inputRangePocket.value = selectOptionPocket.value;

        // Ваш код для обновления классов active и alt
        const activeIndex = parseInt(inputRangePocket.value) - 1;

        lessonElementsGift.forEach((lesson, index) => {
            if (index === activeIndex) {
                lesson.classList.add('active');
            } else {
                lesson.classList.remove('active');
            }

            if (activeIndex >= 6) {
                if (index === activeIndex) {
                    lesson.classList.add('alt');
                } else {
                    lesson.classList.remove('alt');
                }
            }
        });

        circleElementsGift.forEach((circle, index) => {
            if (index < activeIndex) {
                circle.classList.add('active');
            } else {
                circle.classList.remove('active');
            }
        });
    });

</script>

<!-- Change range for radiobutton -->
<script>
    // Получаем элементы радио-кнопок и блоков
    const courseType1Radio = document.getElementById("ioCourseType1");
    const courseType2Radio = document.getElementById("ioCourseType2");
    const courseType3Radio = document.getElementById("ioCourseType3");

    const pocketBlock = document.querySelector(".io-price__pocket");
    const pocketBlock2 = document.querySelector(".io-price__pocket2");
    const pocketBlock3 = document.querySelector(".io-price__pocket3");
    const pocketPrice = document.getElementById("ioMobilePocketPrice");
    const pocketPriceTab = document.getElementById("ioTabletPocketPrice");

    const demoBlock = document.querySelector(".io-price__demo");
    const demoBlock2 = document.querySelector(".io-price__demo2");
    const demoBlock3 = document.querySelector(".io-price__demo3");
    const demoPrice = document.getElementById("ioMobileDemoPrice");
    const demoPriceTab = document.getElementById("ioTabletDemoPrice");

    const giftBlock = document.querySelector(".io-price__gift");
    const giftBlock2 = document.querySelector(".io-price__gift2");
    const giftBlock3 = document.querySelector(".io-price__gift3");
    const giftBlock4 = document.querySelector(".io-price__gift4");
    const giftBlock5 = document.querySelector(".io-price__gift5");
    const giftPrice = document.getElementById("ioMobileGiftPrice");
    const giftPriceTab = document.getElementById("ioTabletGiftPrice");

    const ioPriceDetail = document.querySelector(".io-price__detail");
    const ioInnerAllPrice = document.querySelector(".io-demo-inner-all-price");

    // Обработчик события изменения состояния радио-кнопок
    function handleRadioChange() {
        if (courseType1Radio.checked) {
            pocketBlock.style.display = "flex";
            pocketBlock2.style.display = "flex";
            pocketBlock3.style.display = "flex";
            pocketPrice.style.display = "block";
            pocketPriceTab.style.display = "block";
            //            <?php 
            //                if (ICL_LANGUAGE_CODE === 'ru') {
            //                    $itemNumber = 10001;
            //                    $itemName = "Абонемент Interschool.online";
            //                } elseif (ICL_LANGUAGE_CODE === 'en') {
            //                    $itemNumber = 10002;
            //                    $itemName = "Subscription Interschool.online";
            //                } 
            //            ?>

            demoBlock.style.display = "none";
            demoBlock2.style.display = "none";
            demoBlock3.style.display = "none";
            demoPrice.style.display = "none";
            demoPriceTab.style.display = "none";

            giftBlock.style.display = "none";
            giftBlock2.style.display = "none";
            giftBlock3.style.display = "none";
            giftBlock4.style.display = "none";
            giftBlock5.style.display = "none";
            giftPrice.style.display = "none";
            giftPriceTab.style.display = "none";

            ioPriceDetail.classList.add('io-price__detail--pocket');
            ioPriceDetail.classList.remove('io-price__detail--demo');
            ioPriceDetail.classList.remove('io-price__detail--gift');

            ioInnerAllPrice.classList.add('io-price__detail--pocket');
            ioInnerAllPrice.classList.remove('io-price__detail--demo');
            ioInnerAllPrice.classList.remove('io-price__detail--gift');
        } else if (courseType2Radio.checked) {
            pocketBlock.style.display = "none";
            pocketBlock2.style.display = "none";
            pocketBlock3.style.display = "none";
            pocketPrice.style.display = "none";
            pocketPriceTab.style.display = "none";
            //            <?php 
            //                if (ICL_LANGUAGE_CODE === 'ru') {
            //                    $itemNumber = 10001;
            //                    $itemName = "Пробный урок Interschool.online";
            //                } elseif (ICL_LANGUAGE_CODE === 'en') {
            //                    $itemNumber = 10002;
            //                    $itemName = "Trial lesson Interschool.online";
            //                } 
            //            ?>

            demoBlock.style.display = "flex";
            demoBlock2.style.display = "flex";
            demoBlock3.style.display = "flex";
            demoPrice.style.display = "block";
            demoPriceTab.style.display = "block";

            giftBlock.style.display = "none";
            giftBlock2.style.display = "none";
            giftBlock3.style.display = "none";
            giftBlock4.style.display = "none";
            giftBlock5.style.display = "none";
            giftPrice.style.display = "none";
            giftPriceTab.style.display = "none";

            ioPriceDetail.classList.remove('io-price__detail--pocket');
            ioPriceDetail.classList.add('io-price__detail--demo');
            ioPriceDetail.classList.remove('io-price__detail--gift');

            ioInnerAllPrice.classList.remove('io-price__detail--pocket');
            ioInnerAllPrice.classList.add('io-price__detail--demo');
            ioInnerAllPrice.classList.remove('io-price__detail--gift');
        } else if (courseType3Radio.checked) {
            pocketBlock.style.display = "none";
            pocketBlock2.style.display = "none";
            pocketBlock3.style.display = "none";
            pocketPrice.style.display = "none";
            pocketPriceTab.style.display = "none";
            //            <?php 
            //                if (ICL_LANGUAGE_CODE === 'ru') {
            //                    $itemNumber = 10001;
            //                    $itemName = "Пробный урок Interschool.online";
            //                } elseif (ICL_LANGUAGE_CODE === 'en') {
            //                    $itemNumber = 10002;
            //                    $itemName = "Trial lesson Interschool.online";
            //                } 
            //            ?>

            demoBlock.style.display = "none";
            demoBlock2.style.display = "none";
            demoBlock3.style.display = "none";
            demoPrice.style.display = "none";
            demoPriceTab.style.display = "none";

            giftBlock.style.display = "flex";
            giftBlock2.style.display = "flex";
            giftBlock3.style.display = "flex";
            giftBlock4.style.display = "flex";
            giftBlock5.style.display = "flex";
            giftPrice.style.display = "block";
            giftPriceTab.style.display = "block";

            ioPriceDetail.classList.remove('io-price__detail--pocket');
            ioPriceDetail.classList.remove('io-price__detail--demo');
            ioPriceDetail.classList.add('io-price__detail--gift');

            ioInnerAllPrice.classList.remove('io-price__detail--pocket');
            ioInnerAllPrice.classList.remove('io-price__detail--demo');
            ioInnerAllPrice.classList.add('io-price__detail--gift');
        }
    }

    // Назначаем обработчик на событие изменения состояния радио-кнопок
    courseType1Radio.addEventListener("change", handleRadioChange);
    courseType2Radio.addEventListener("change", handleRadioChange);
    courseType3Radio.addEventListener("change", handleRadioChange);

    // Вызываем функцию для начального состояния блоков
    handleRadioChange();

</script>

<!-- Payment Data Mobile -->
<script>
    const ioSelectCurrencyMobile = document.querySelector('.io-select-currency-mobile');
    const ioSelectedCurrencyMobile = ioSelectCurrencyMobile.querySelector('.io-selected-currency-mobile');
    const ioCurrencyMobileOptions = ioSelectCurrencyMobile.querySelector('.io-currency-mobile-options');
    const ioCurrencyMobileItems = ioCurrencyMobileOptions.querySelectorAll('li');

    ioSelectCurrencyMobile.addEventListener('click', () => {
        ioCurrencyMobileOptions.style.display = ioCurrencyMobileOptions.style.display === 'block' ? 'none' : 'block';
    });

    ioCurrencyMobileItems.forEach((item) => {
        item.addEventListener('click', () => {
            ioSelectedCurrencyMobile.textContent = item.textContent;
            ioCurrencyMobileOptions.style.display = 'none';
            // Вы можете выполнить другие действия здесь, например, отправить выбранное значение на сервер или выполнить какую-то логику.
        });
    });

    // Отключаем закрытие списка опций при клике внутри списка
    ioCurrencyMobileOptions.addEventListener('click', (event) => {
        event.stopPropagation();
    });

    // Закрываем список опций при клике в любом месте документа, кроме селекта
    document.addEventListener('click', (event) => {
        if (!ioSelectCurrencyMobile.contains(event.target)) {
            ioCurrencyMobileOptions.style.display = 'none';
        }
    });

</script>

<!-- Pocket Select -->
<script>
    const ioSelectPocket = document.querySelector('.io-select-pocket');
    const ioSelectedPocket = ioSelectPocket.querySelector('.io-selected-pocket');
    const ioPocketOptions = ioSelectPocket.querySelector('.io-pocket-options');
    const ioPocketItems = ioPocketOptions.querySelectorAll('li');
    const ioMobilePocketPrice = document.getElementById('ioMobilePocketPrice');

    ioSelectPocket.addEventListener('click', () => {
        ioPocketOptions.style.display = ioPocketOptions.style.display === 'block' ? 'none' : 'block';
    });

    ioPocketItems.forEach((item) => {
        item.addEventListener('click', () => {
            const selectedValue = item.dataset.value;
            let price;

            switch (selectedValue) {
                case "4":
                    price = "56 USD";
                    break;
                case "8":
                    price = "112 USD";
                    break;
                case "12":
                    price = "168 USD";
                    break;
                case "16":
                    price = "224 USD";
                    break;
                case "24":
                    price = "336 USD";
                    break;
                case "32":
                    price = "448 USD";
                    break;
                case "80":
                    price = "970 USD";
                    break;
                case "120":
                    price = "1220 USD";
                    break;
                case "160":
                    price = "1620 USD";
                    break;
                default:
                    price = "Unknown";
            }

            ioSelectedPocket.innerHTML = item.innerHTML;
            ioMobilePocketPrice.textContent = price;
            ioPocketOptions.style.display = 'none';
            // Вы можете выполнить другие действия здесь, например, отправить выбранное значение на сервер или выполнить какую-то логику.
        });
    });

    // Отключаем закрытие списка опций при клике внутри списка
    ioPocketOptions.addEventListener('click', (event) => {
        event.stopPropagation();
    });

    // Закрываем список опций при клике в любом месте документа, кроме селекта
    document.addEventListener('click', (event) => {
        if (!ioSelectPocket.contains(event.target)) {
            ioPocketOptions.style.display = 'none';
        }
    });

</script>

<!-- Gift Select -->
<script>
    const ioSelectGift = document.querySelector('.io-select-gift');
    const ioSelectedGift = ioSelectGift.querySelector('.io-selected-gift');
    const ioGiftOptions = ioSelectGift.querySelector('.io-gift-options');
    const ioGiftItems = ioGiftOptions.querySelectorAll('li');
    const ioMobileGiftPrice = document.getElementById('ioMobileGiftPrice');

    ioSelectGift.addEventListener('click', () => {
        ioGiftOptions.style.display = ioGiftOptions.style.display === 'block' ? 'none' : 'block';
    });

    ioGiftItems.forEach((item) => {
        item.addEventListener('click', () => {
            const selectedValue = item.dataset.value;
            let price;

            switch (selectedValue) {
                case "4":
                    price = "56 USD";
                    break;
                case "8":
                    price = "112 USD";
                    break;
                case "12":
                    price = "168 USD";
                    break;
                case "16":
                    price = "224 USD";
                    break;
                case "24":
                    price = "336 USD";
                    break;
                case "32":
                    price = "448 USD";
                    break;
                case "80":
                    price = "970 USD";
                    break;
                case "120":
                    price = "1220 USD";
                    break;
                case "160":
                    price = "1620 USD";
                    break;
                default:
                    price = "Unknown";
            }

            ioSelectedGift.innerHTML = item.innerHTML;
            ioMobileGiftPrice.textContent = price;
            ioGiftOptions.style.display = 'none';
            // Вы можете выполнить другие действия здесь, например, отправить выбранное значение на сервер или выполнить какую-то логику.
        });
    });

    // Отключаем закрытие списка опций при клике внутри списка
    ioGiftOptions.addEventListener('click', (event) => {
        event.stopPropagation();
    });

    // Закрываем список опций при клике в любом месте документа, кроме селекта
    document.addEventListener('click', (event) => {
        if (!ioSelectGift.contains(event.target)) {
            ioGiftOptions.style.display = 'none';
        }
    });

</script>

<!-- Payment Data -->
<script>
    const ioSelectCurrency = document.querySelector('.io-select-currency');
    const ioSelectedCurrency = ioSelectCurrency.querySelector('.io-selected-currency');
    const ioCurrencyOptions = ioSelectCurrency.querySelector('.io-currency-options');
    const ioCurrencyItems = ioCurrencyOptions.querySelectorAll('li');

    ioSelectCurrency.addEventListener('click', () => {
        ioCurrencyOptions.style.display = ioCurrencyOptions.style.display === 'block' ? 'none' : 'block';
    });

    ioCurrencyItems.forEach((item) => {
        item.addEventListener('click', () => {
            ioSelectedCurrency.textContent = item.textContent;
            ioCurrencyOptions.style.display = 'none';
            // Вы можете выполнить другие действия здесь, например, отправить выбранное значение на сервер или выполнить какую-то логику.
        });
    });

    // Отключаем закрытие списка опций при клике внутри списка
    ioCurrencyOptions.addEventListener('click', (event) => {
        event.stopPropagation();
    });

    // Закрываем список опций при клике в любом месте документа, кроме селекта
    document.addEventListener('click', (event) => {
        if (!ioSelectCurrency.contains(event.target)) {
            ioCurrencyOptions.style.display = 'none';
        }
    });

</script>
<script>
    // Создаем объект соответствия значений инпута и соответствующих значений
    const inputToValueMapping = {
        1: 4,
        2: 8,
        3: 12,
        4: 16,
        5: 24,
        6: 32,
        7: 80,
        8: 120,
        9: 160,
    };
    const saleToValueMapping = {
        1: 0,
        2: 0,
        3: 0,
        4: 0,
        5: 0,
        6: 0,
        7: 120,
        8: 300,
        9: 480,
    };

    // Добавьте ссылку на элемент <select> и создайте объект соответствия валюты к символу
    const currencySelect = document.querySelector('.io-select-currency');
    const currencyOptions = currencySelect.querySelectorAll('.io-currency-options li');
    const currencySymbols = {
        usd: "USD",
        eur: "EUR",
        uah: "UAH",
    };

    // Получаем ссылки на элементы
    const lessonCountInputPocket = document.getElementById("ioAmountRange");
    const lessonCountDisplayPocket = document.getElementById("lessonCountDisplayPocket");
    const lessonPriceDisplayPocket = document.getElementById("lessonPriceDisplayPocket");
    const lessonSaleDisplayPocket = document.getElementById("lessonSaleDisplayPocket");
    const lessonAmountDisplayPocket = document.getElementById("lessonAmountDisplayPocket");
    const lessonAmountDisplayPocketBottom = document.getElementById("lessonAmountDisplayPocketBottom");
    const lessonButtonDisplayPocket = document.getElementById("lessonButtonDisplayPocket");
    const lessonSaleWrapper = document.getElementById("lessonSaleWrapper");
    const ioTabletPocketPrice = document.getElementById('ioTabletPocketPrice');

    // Добавьте обработчик события для выбора валюты
    currencyOptions.forEach((option) => {
        option.addEventListener('click', () => {
            const selectedCurrency = option.getAttribute('data-value');
            currencySelect.querySelector('.io-selected-currency').textContent = selectedCurrency.toUpperCase();
            updateDisplay(selectedCurrency); // Обновление первой части данных
            updateLessonInfo(selectedCurrency); // Обновление второй части данных
            updateGiftDisplay(selectedCurrency); // Обновление данных для подарка
        });
    });

    // Функция для обновления отображаемых данных
    function updateDisplay(selectedCurrency) {
        const lessonCountInputValuePocket = lessonCountInputPocket.value;

        // Получите символ валюты на основе выбранной валюты
        const currencySymbol = currencySymbols[selectedCurrency];

        // Получаем значение из объектов на основе значения инпута
        const inputValue = inputToValueMapping[lessonCountInputValuePocket];
        const saleValue = saleToValueMapping[lessonCountInputValuePocket];
        const lessonCountInputSumPocket = inputValue * 14;

        lessonCountDisplayPocket.textContent = inputValue;
        lessonSaleDisplayPocket.textContent = saleValue + ' ' + currencySymbol;
        // lessonAmountDisplayPocket.textContent = (lessonCountInputSumPocket - saleValue) + ' ' + currencySymbol;

        const priceValue = (lessonCountInputSumPocket - saleValue) / inputValue;
        const formattedPrice = priceValue % 1 === 0 ? priceValue.toFixed(0) : priceValue.toFixed(2);

        if (formattedPrice < 14) {
            lessonAmountDisplayPocket.innerHTML = '<span class="io-pink-main text-decoration-line-through">' + lessonCountInputSumPocket + ' ' + currencySymbol + '</span> ' + (lessonCountInputSumPocket - saleValue) + ' ' + currencySymbol;
            lessonAmountDisplayPocketBottom.innerHTML = '<span class="io-pink-main text-decoration-line-through">' + lessonCountInputSumPocket + ' ' + currencySymbol + '</span> ' + (lessonCountInputSumPocket - saleValue) + ' ' + currencySymbol;
            ioTabletPocketPrice.innerHTML = '<span class="io-pink-main text-decoration-line-through">' + lessonCountInputSumPocket + ' USD</span> ' + (lessonCountInputSumPocket - saleValue) + ' USD';
        } else {
            lessonAmountDisplayPocket.innerHTML = (lessonCountInputSumPocket - saleValue) + ' ' + currencySymbol;
            lessonAmountDisplayPocketBottom.innerHTML = (lessonCountInputSumPocket - saleValue) + ' ' + currencySymbol;
            ioTabletPocketPrice.innerHTML = (lessonCountInputSumPocket - saleValue) + ' USD';
        }

        if (saleValue == 0) {
            lessonSaleWrapper.classList.add('io-hide-pocket');
        } else {
            lessonSaleWrapper.classList.remove('io-hide-pocket');
        }

        lessonPriceDisplayPocket.textContent = formattedPrice + ' ' + currencySymbol;

        // Определяем правильное склонение слова "урок"
        let lessonText = "урок";
        if (lessonCountInputValuePocket == 1 || lessonCountInputValuePocket == 5 || lessonCountInputValuePocket == 6) {
            lessonText = "урока";
        } else {
            lessonText = "уроков";
        }

        // Устанавливаем текст кнопки с учетом склонения
        // lessonButtonDisplayPocket.textContent = `Купить ${inputValue} ${lessonText}`;
    }

    // Добавьте обработчик события "input" к инпуту
    lessonCountInputPocket.addEventListener("input", () => {
        const selectedCurrency = currencySelect.querySelector('.io-selected-currency').textContent.toLowerCase();
        updateDisplay(selectedCurrency);
    });

    // Добавьте обработчик события для выбора валюты
    currencyOptions.forEach((option) => {
        option.addEventListener('click', () => {
            const selectedCurrency = option.getAttribute('data-value');
            currencySelect.querySelector('.io-selected-currency').textContent = selectedCurrency.toUpperCase();
            updateDisplay(selectedCurrency);
        });
    });

    // Инициализируем отображение при загрузке страницы
    const defaultCurrencyOption = currencySelect.querySelector('.io-currency-options li[data-value="usd"]');
    const defaultCurrency = defaultCurrencyOption.getAttribute('data-value');
    updateDisplay(defaultCurrency);

    // Функция для обновления текста и состояния чекбокса
    function updateLessonInfo(selectedCurrency) {
        var demoCourseCheck = document.getElementById('ioDemoCourseCheck'); // Получаем элемент, внутри которого находятся чекбоксы
        var checkboxes = demoCourseCheck.querySelectorAll('.io-checkbox');
        var selectedLessons = [];

        checkboxes.forEach(function(checkbox) {
            if (checkbox.checked) {
                var label = document.querySelector('label[for="' + checkbox.id + '"]');
                var lessonName = label.textContent;
                selectedLessons.push({
                    name: lessonName,
                    checkbox: checkbox
                });
            }
        });

        var lessonDisplay = document.getElementById('lessonDisplayDemo');
        lessonDisplay.innerHTML = '';

        selectedLessons.forEach(function(lesson) {
            var lessonDiv = document.createElement('div');
            var innerHtml = '<div class="io-check"><span class="io-fw-semibold io-purple-main">' + lesson.name + '</span></div>';
            var button = document.createElement('button');
            button.textContent = '';
            button.addEventListener('click', function() {
                lessonDiv.remove(); // Удаляем див при клике на кнопку
                lesson.checkbox.checked = false; // Снимаем чек с чекбокса
                updateLessonInfo(selectedCurrency); // Обновляем отображение уроков
            });
            lessonDiv.innerHTML = innerHtml;
            lessonDiv.appendChild(button);
            lessonDisplay.appendChild(lessonDiv);
        });

        // Обновляем сумму в зависимости от количества выбранных уроков и выбранной валюты
        var lessonCountLessonsDemo = document.getElementById('lessonCountLessonsDemo');
        var lessonCountLessonsDemo2 = document.getElementById('lessonCountLessonsDemo2');
        var lessonCountLessonsDemoMobile = document.getElementById('lessonCountLessonsDemoMobile');
        var lessonSalePriceDemo = document.getElementById('lessonSalePriceDemo');
        var lessonAmountDisplayDemo = document.getElementById('lessonAmountDisplayDemo');
        var lessonAmountDisplayDemoBottom = document.getElementById('lessonAmountDisplayDemoBottom');
        var ioMobileDemoPrice = document.getElementById('ioMobileDemoPrice');
        var ioTabletDemoPrice = document.getElementById('ioTabletDemoPrice');
        var lessonOnePriceDemo = document.getElementById('lessonOnePriceDemo'); // Добавили элемент для цены урока

        var pricePerLessonUSD = 6; // Цена урока в USD
        var discountPerLessonUSD = 8;
        var currencySymbol = 'USD'; // Символ валюты по умолчанию

        // Определяем символ валюты на основе выбранной опции в выпадающем списке
        if (selectedCurrency === 'eur') {
            pricePerLessonUSD = 5; // Цена урока в EUR
            discountPerLessonUSD = 7;
            currencySymbol = 'EUR';
        } else if (selectedCurrency === 'uah') {
            pricePerLessonUSD = 150; // Цена урока в UAH
            discountPerLessonUSD = 200;
            currencySymbol = 'UAH';
        }

        var totalLessons = selectedLessons.length;
        var totalAmount = totalLessons * pricePerLessonUSD;
        var totalDiscount = totalLessons * discountPerLessonUSD;
        var totalPrice = totalLessons * (pricePerLessonUSD + discountPerLessonUSD);

        lessonCountLessonsDemo.textContent = totalLessons;
        lessonCountLessonsDemo2.textContent = totalLessons;
        if (totalLessons == 1) {
            lessonCountLessonsDemoMobile.innerHTML = totalLessons + ' урок / <span class="io-purple-main">' + totalAmount + ' USD</span>';
        } else if ((totalLessons > 1) && (totalLessons < 5)) {
            lessonCountLessonsDemoMobile.innerHTML = totalLessons + ' урока / <span class="io-purple-main">' + totalAmount + ' USD</span>';
        } else {
            lessonCountLessonsDemoMobile.innerHTML = totalLessons + ' уроков / <span class="io-purple-main">' + totalAmount + ' USD</span>';
        }
        lessonSalePriceDemo.textContent = totalDiscount + ' ' + currencySymbol;
        lessonAmountDisplayDemo.innerHTML = '<span class="io-pink-main text-decoration-line-through">' + totalPrice + ' ' + currencySymbol + '</span> ' + totalAmount + ' ' + currencySymbol;
        lessonAmountDisplayDemoBottom.innerHTML = '<span class="io-pink-main text-decoration-line-through">' + totalPrice + ' ' + currencySymbol + '</span> ' + totalAmount + ' ' + currencySymbol;
        ioMobileDemoPrice.innerHTML = totalAmount + ' USD';
        ioTabletDemoPrice.innerHTML = totalAmount + ' USD';
        lessonOnePriceDemo.textContent = '14' + ' ' + currencySymbol; // Фиксированная цена урока

        if (totalDiscount == 0) {
            lessonSaleWrapper.classList.add('io-hide-demo');
        } else {
            lessonSaleWrapper.classList.remove('io-hide-demo');
        }
    }

    // Вызывается после загрузки страницы
    window.onload = function() {
        // Вызываем функцию для обновления отображения уроков
        const selectedCurrency = currencySelect.querySelector('.io-selected-currency').textContent.toLowerCase();
        updateLessonInfo(selectedCurrency);
    }

    // Обработчики событий для чекбоксов
    var demoCourseCheck = document.getElementById('ioDemoCourseCheck'); // Получаем элемент, внутри которого находятся чекбоксы
    var checkboxes = demoCourseCheck.querySelectorAll('.io-checkbox'); // Выбираем чекбоксы только внутри ioDemoCourseCheck
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', () => {
            const selectedCurrency = currencySelect.querySelector('.io-selected-currency').textContent.toLowerCase();
            updateLessonInfo(selectedCurrency);
        });
    });

    // ... Код из второго скрипта ...

    const inputGift = document.getElementById('ioAmountRangeGift');
    const lessonCountElementGift = document.getElementById('lessonCountLessonsGift');
    const lessonSalePriceElementGift = document.getElementById('lessonSalePriceGift');
    const lessonOnePriceElementGift = document.getElementById('lessonOnePriceGift');
    const lessonAmountDisplayElementGift = document.getElementById('lessonAmountDisplayGift'); // Добавляем элемент
    const lessonAmountDisplayElementGiftBottom = document.getElementById('lessonAmountDisplayGiftBottom'); // Добавляем элемент
    const ioTabletGiftPrice = document.getElementById('ioTabletGiftPrice');

    // Объект, содержащий соответствия значений диапазона и значений для lessonCountLessonsGift
    const valueMappingsGift = {
        1: {
            count: 4,
            price: 0
        },
        2: {
            count: 8,
            price: 0
        },
        3: {
            count: 12,
            price: 0
        },
        4: {
            count: 16,
            price: 0
        },
        5: {
            count: 24,
            price: 0
        },
        6: {
            count: 32,
            price: 0
        },
        7: {
            count: 80,
            price: 120
        },
        8: {
            count: 120,
            price: 300
        },
        9: {
            count: 160,
            price: 480
        }
    };

    // Функция для форматирования числа, скрывая нули после запятой
    function formatNumber(number) {
        return number % 1 === 0 ? number.toFixed(0) : number.toFixed(2);
    }

    // Функция обновления значения в элементах lessonCountLessonsGift, lessonSalePriceGift, lessonOnePriceGift и lessonAmountDisplayGift
    function updateGiftDisplay(selectedCurrency) {
        const selectedValue = parseInt(inputGift.value);
        const {
            count,
            price
        } = valueMappingsGift[selectedValue];
        lessonCountElementGift.textContent = count;
        lessonSalePriceElementGift.textContent = price + ' ' + currencySymbols[selectedCurrency];

        // Высчитываем значение для lessonOnePriceGift и форматируем его
        const lessonOnePrice = (count * 14 - price) / count;
        lessonOnePriceElementGift.textContent = formatNumber(lessonOnePrice) + ' ' + currencySymbols[selectedCurrency];

        // Высчитываем значение для lessonAmountDisplayGift
        const lessonAmount = count * 14 - price;
        // lessonAmountDisplayElementGift.textContent = formatNumber(lessonAmount) + ' ' + currencySymbols[selectedCurrency];

        // Добавляем класс io-oldprice, если значение lessonOnePrice менее 14
        if (lessonOnePrice < 14) {
            lessonAmountDisplayElementGift.innerHTML = '<span class="io-pink-main text-decoration-line-through">' + formatNumber(count * 14) + ' ' + currencySymbols[selectedCurrency] + '</span> ' + formatNumber(lessonAmount) + ' ' + currencySymbols[selectedCurrency];
            lessonAmountDisplayElementGiftBottom.innerHTML = '<span class="io-pink-main text-decoration-line-through">' + formatNumber(count * 14) + ' ' + currencySymbols[selectedCurrency] + '</span> ' + formatNumber(lessonAmount) + ' ' + currencySymbols[selectedCurrency];
            ioTabletGiftPrice.innerHTML = '<span class="io-pink-main text-decoration-line-through">' + formatNumber(count * 14) + ' USD</span> ' + formatNumber(lessonAmount) + ' USD';
        } else {
            lessonAmountDisplayElementGift.innerHTML = formatNumber(lessonAmount) + ' ' + currencySymbols[selectedCurrency];
            lessonAmountDisplayElementGiftBottom.innerHTML = formatNumber(lessonAmount) + ' ' + currencySymbols[selectedCurrency];
            ioTabletGiftPrice.innerHTML = formatNumber(lessonAmount) + ' USD';
        }

        if (price == 0) {
            lessonSaleWrapper.classList.add('io-hide-gift');
        } else {
            lessonSaleWrapper.classList.remove('io-hide-gift');
        }
    }

    // Добавление обработчика события для обновления значения
    inputGift.addEventListener('input', () => {
        const selectedCurrency = currencySelect.querySelector('.io-selected-currency').textContent.toLowerCase();
        updateGiftDisplay(selectedCurrency);
    });

    // Инициализация при загрузке страницы
    updateGiftDisplay(defaultCurrency);

</script>

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
    // Функция для инициализации каждого экземпляра кастомного селекта
    function initializeCustomSelect(select) {
        const selectItems = select.querySelector('.select-items');
        const searchInput = select.querySelector('.country-search');
        const selectSelected = select.querySelector('.select-selected');

        // Флаг для отслеживания состояния поиска
        let isSearching = false;

        // Автоматически выбираем страну по умолчанию
        const defaultCountryCode = "+1"; // США (+1)
        selectSelected.innerText = defaultCountryCode;

        // Показать/скрыть селект
        select.addEventListener('click', function(e) {
            if (e.target.classList.contains('select-selected')) {
                selectItems.style.display = selectItems.style.display === 'block' ? 'none' : 'block';

                // Добавляем класс "open" при открытии списка
                if (selectItems.style.display === 'block') {
                    select.classList.add('open');
                } else {
                    select.classList.remove('open');
                }

                // Если список закрывается и пользователь вводил текст в поиск, сбросить поиск
                if (!isSearching) {
                    searchInput.value = '';
                    resetSearch();
                }
            }
        });

        // Обработчик клика по элементу селекта
        selectItems.addEventListener('click', function(e) {
            if (e.target.getAttribute('data-value')) {
                const selectedValue = e.target.getAttribute('data-value');
                const selectedText = e.target.innerText;
                selectSelected.innerText = selectedValue; // Переносим код страны
                selectItems.style.display = 'none';
                select.classList.remove('open'); // Убираем класс "open" при закрытии списка

                // Сброс поиска при выборе страны
                searchInput.value = '';
                resetSearch();
            }
        });

        // Обработчик ввода в поле поиска
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

            // Показать селект после ввода текста
            selectItems.style.display = 'block';

            // Добавляем класс "open" при открытом списке и обновляем флаг состояния поиска
            if (selectItems.style.display === 'block') {
                select.classList.add('open');
                isSearching = searchTerm.length > 0;
            }
        });

        // Закрыть селект, если клик вне него
        document.addEventListener('click', function(e) {
            if (!select.contains(e.target)) {
                selectItems.style.display = 'none';
                select.classList.remove('open'); // Убираем класс "open" при закрытии списка

                // В любом случае сбросить поиск при закрытии списка
                searchInput.value = '';
                resetSearch();
            }
        });

        // Функция сброса поиска и отображения всех элементов списка
        function resetSearch() {
            const items = selectItems.querySelectorAll('div[data-value]');
            items.forEach(function(item) {
                item.style.display = 'flex';
            });
            isSearching = false;
        }
    }

    // Найти все экземпляры кастомных селектов на странице и инициализировать их
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

<!-- Country check -->
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

<!-- Abonement Button Click -->
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

    // Привязываем функцию к событию клика на кнопке
    var pocketButton = document.getElementById("lessonButtonDisplayPocket");
    pocketButton.addEventListener("click", validateForm);

</script>

<!-- Demo Button Click -->
<script>
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

    // Привязываем функцию к событию клика на кнопке
    var demoButton = document.getElementById("lessonButtonDisplayDemo");
    demoButton.addEventListener("click", validateDemoForm);

</script>

<!-- Gift Button Click -->
<script>
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
    var giftButton = document.getElementById("lessonButtonDisplayGift");
    giftButton.addEventListener("click", validateGiftForm);

</script>

<!-- Прогрузка страницы при переключении языка -->
<script>
    // Устанавливаем начальное значение opacity в 0
    document.body.style.opacity = 0;

    // Ждем 0.5 секунды (500 миллисекунд) и изменяем opacity на 1
    setTimeout(function() {
        document.body.style.opacity = 1;
    }, 500);

</script>

<script>
    function toggleLessonDisplay(element) {
        var lessonDisplayDemo = document.getElementById('lessonDisplayDemo');
        if (lessonDisplayDemo.style.height === '0px' || lessonDisplayDemo.style.height === '') {
            lessonDisplayDemo.style.height = 'auto'; // Устанавливаем высоту равной контенту
            lessonDisplayDemo.style.marginTop = '0'; // Скрываем элемент
            element.classList.add('active'); // Добавляем класс 'active'
        } else {
            lessonDisplayDemo.style.height = '0'; // Скрываем элемент
            lessonDisplayDemo.style.marginTop = '-20px'; // Скрываем элемент
            element.classList.remove('active'); // Убираем класс 'active'
        }
    }

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
    function ioPromoInnerToggleClass() {
        var elements = document.getElementsByClassName('io-promo__inner');
        for (var i = 0; i < elements.length; i++) {
            elements[i].classList.toggle('active');
            elements[i].classList.remove('add');

            // Добавляем класс 'active' к родительскому элементу, если 'io-promo__inner' имеет класс 'active'
            var parentElement = elements[i].closest('.io-promo');
            if (elements[i].classList.contains('active')) {
                parentElement.classList.add('active');
            } else {
                parentElement.classList.remove('active');
            }
        }
    }

    function ioPromoInnerCheck() {
        var elements = document.getElementsByClassName('io-promo__inner');
        for (var i = 0; i < elements.length; i++) {
            elements[i].classList.add('add');

            // Добавляем класс 'active' к родительскому элементу
            var parentElement = elements[i].closest('.io-promo');
            parentElement.classList.add('active');
        }
    }

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

<!-- Оставаться на табе при смене языка -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Функция для установки куки
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        // Функция для получения значения куки
        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        // Функция для сохранения текущего таба в куки при клике
        function setTabCookie(tabId) {
            setCookie('currentTab', tabId, 1); // Здесь 1 - это срок действия куки в днях
        }

        // Функция для восстановления активного таба из куки
        function restoreActiveTab() {
            var currentTab = getCookie('currentTab');
            if (currentTab !== "") {
                var activeTab = document.querySelector('.io-tabs-wrapper .nav-link[data-tab-id="' + currentTab + '"]');
                if (activeTab) {
                    activeTab.click();
                    // Установка класса active
                    activeTab.classList.add('active');
                }
            }
        }

        // Добавление обработчика клика для каждой вкладки внутри .io-tabs-wrapper
        var tabs = document.querySelectorAll('.io-tabs-wrapper .nav-link');
        tabs.forEach(function(tab) {
            tab.addEventListener('click', function() {
                var tabId = this.getAttribute('data-tab-id');
                setTabCookie(tabId);
            });
        });

        // Восстановление активного таба при загрузке страницы
        restoreActiveTab();


        setTimeout(function() {
            window.addEventListener('scroll', preventScroll);
        }, 0);

        setTimeout(function() {
            window.removeEventListener('scroll', preventScroll);
        }, 500);

        function preventScroll() {
            window.scrollTo(0, 0);
        }
    });
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

<!-- Закрыть аккордеон на таблетах -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (window.innerWidth < 1200) {
            // Добавляем класс collapsed к кнопке
            var button = document.getElementById('courseAccordion-headingOne').querySelector('button');
            button.classList.add('collapsed');

            // Убираем класс show у элемента
            var collapseOne = document.getElementById('courseAccordion-collapseOne');
            collapseOne.classList.remove('show');
        }
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

        function updatePosition() {
            var ioFullSectionRect = ioFullSection.getBoundingClientRect();
            var isVisible = ioFullSectionRect.bottom > 0 && ioFullSectionRect.top < window.innerHeight;

            if (window.location.href.indexOf('ceny-i-oplata') !== -1) {
                ioDemoWrapperAll.classList.add('d-none');
                if (isVisible) {
                    ioDemoWrapperAll.style.bottom = "-120px";
                } else {
                    ioDemoWrapperAll.style.bottom = "0px";
                }
            } else if ((window.location.href.indexOf('<?php echo $ioTab9; ?>') !== -1) || (window.location.href.indexOf('<?php echo $ioTab10; ?>') !== -1)) {
                ioDemoWrapperAll.classList.add('d-none');
                // ioDemoWrapperAll.classList.remove('d-none');
                // ioDemoWrapperAll.style.bottom = '0';
            } else {
                ioDemoWrapperAll.classList.remove('d-none');
                if (isVisible) {
                    ioDemoWrapperAll.style.bottom = "-120px";
                } else {
                    ioDemoWrapperAll.style.bottom = "0px";
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

<script>
    paypal.Buttons({
        style: {
            layout: 'vertical',
            color: 'blue',
            shape: 'pill',
            label: 'paypal'
        },
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
            console.log("order")
            return actions.order.create({
                "purchase_units": [{
                    "custom_id": "<?php echo $itemNumber; ?>",
                    "description": "<?php echo $itemName; ?>",
                    "amount": {
                        "currency_code": "<?php echo $currency; ?>",
                        "value": <?php echo $itemPrice; ?>,
                        "breakdown": {
                            "item_total": {
                                "currency_code": "<?php echo $currency; ?>",
                                "value": <?php echo $itemPrice; ?>
                            }
                        }
                    },
                    "items": [{
                        "name": "<?php echo $itemName; ?>",
                        "description": "<?php echo $itemName; ?>",
                        "unit_amount": {
                            "currency_code": "<?php echo $currency; ?>",
                            "value": <?php echo $itemPrice; ?>
                        },
                        "quantity": "1",
                        "category": "DIGITAL_GOODS"
                    }, ]
                }]
            });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
            console.log("approve")
            return actions.order.capture().then(function(orderData) {
                setProcessing(true);

                var postData = {
                    paypal_order_check: 1,
                    order_id: orderData.id
                };
                fetch('merchant/paypal/paypal_checkout_validate.php', {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json'
                        },
                        body: encodeFormData(postData)
                    })
                    .then((response) => response.json())
                    .then((result) => {
                        if (result.status == 1) {
                            window.location.href = "merchant/paypal/payment-status.php?checkout_ref_id=" + result.ref_id;
                        } else {
                            const messageContainer = document.querySelector("#paymentResponse");
                            messageContainer.classList.remove("hidden");
                            messageContainer.textContent = result.msg;

                            setTimeout(function() {
                                messageContainer.classList.add("hidden");
                                messageText.textContent = "";
                            }, 5000);
                        }
                        setProcessing(false);
                    })
                    .catch(error => console.log(error));
            });
            console.log("approved2")
        }
    }).render('#paypal-button-container');

    const encodeFormData = (data) => {
        var form_data = new FormData();

        for (var key in data) {
            form_data.append(key, data[key]);
        }
        return form_data;
    }

    // Show a loader on payment form processing
    const setProcessing = (isProcessing) => {
        if (isProcessing) {
            document.querySelector(".overlay").classList.remove("hidden");
        } else {
            document.querySelector(".overlay").classList.add("hidden");
        }
    }

</script>
