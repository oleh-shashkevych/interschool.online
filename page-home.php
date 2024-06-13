<?php
/**
 * Главная home.html
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Главная
 */

include 'templates/price.php';
include 'templates/directions.php';
include 'templates/popular-courses.php';
include 'templates/montessori-work.php';

get_header(); // подключаем header.php ?>
<main>
    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
    <section class="io-homepage__hero">
        <div class="io-homepage__hero-container container-xxl io-container-mw">
            <div class="io-homepage__hero-inner">
                <div class="io-homepage__hero-left">
                    <div class="io-heading-1 io-homepage__hero-title w-100">
                        Стань 
                        <div class="io-homepage__hero-skills">
                            художником!
                            <ul class="io-homepage__hero-skill">
                                <li class="io-pink-main">художником!</li>
                                <li class="io-purple-main">пианистом!</li>
                                <li class="io-purple-main">полиглотом!</li>
                                <li class="io-pink-main">певцом!</li>
                                <li class="io-purple-main">гитаристом!</li>
                            </ul>
                        </div>
                    </div>
                    <p class="pe-5">В Монтессори центре вы научитесь играть на музыкальных инструментах, петь и танцевать. Станете полиглотом, будете рисовать. Мы подтянем ваши знания по школьным предметам. И всё это будет проходить онлайн!</p>
                    <div class="pe-5">
                        <a href="<?php echo get_permalink(22); ?>" class="io-button__large">Все курсы</a>
                    </div>
                </div>
                <div class="io-homepage__hero-img">
                    <a href="<?php echo get_permalink(54); ?>" style="background-image: url(/wp-content/uploads/2024/04/Paint-1.webp); opacity: 1; z-index: 1;" data-title="link" width="500" height="500">Ссылка</a>
                    <a href="<?php echo get_permalink(26); ?>" style="background-image: url(/wp-content/uploads/2024/04/Piano-1.webp);" data-title="link" width="500" height="500">Ссылка</a>
                    <a href="<?php echo get_permalink(78); ?>" style="background-image: url(/wp-content/uploads/2024/04/Language-1.webp);" data-title="link" width="500" height="500">Ссылка</a>
                    <a href="<?php echo get_permalink(28); ?>" style="background-image: url(/wp-content/uploads/2024/04/Sing-1.webp);" data-title="link" width="500" height="500">Ссылка</a>
                    <a href="<?php echo get_permalink(30); ?>" style="background-image: url(/wp-content/uploads/2024/04/Guitar-1.webp);" data-title="link" width="500" height="500">Ссылка</a>
                </div>
            </div>
            <div class="io-block io-block--orange io-homepage__hero-list">
                <div class="io-homepage__hero-list-item">
                    <img src="/wp-content/uploads/2024/04/online-study-1.svg">
                    <span>Занятия в прямом эфире</span>
                </div>
                <div class="io-homepage__hero-list-line"></div>
                <div class="io-homepage__hero-list-item">
                    <img src="/wp-content/uploads/2024/04/promotion-1.svg">
                    <span>Учителя мирового уровня</span>
                </div>
                <div class="io-homepage__hero-list-line"></div>
                <div class="io-homepage__hero-list-item">
                    <img src="/wp-content/uploads/2024/04/time-schedule-1.svg">
                    <span>Гибкий график</span>
                </div>
                <div class="io-homepage__hero-list-line"></div>
                <div class="io-homepage__hero-list-item">
                    <img src="/wp-content/uploads/2024/04/group-1-1.svg">
                    <span>От 5 до 99 лет</span>
                </div>
            </div>
        </div>
    </section>
    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
    <section class="io-homepage__hero">
        <div class="io-homepage__hero-container container-xxl io-container-mw">
            <div class="io-homepage__hero-inner">
                <div class="io-homepage__hero-left">
                    <div class="io-heading-1 io-homepage__hero-title w-100">
                        Become 
                        <div class="io-homepage__hero-skills">
                            an Guitarist!
                            <ul class="io-homepage__hero-skill">
                                <li class="io-pink-main">an Artist!</li>
                                <li class="io-purple-main">a Pianist!</li>
                                <li class="io-purple-main">a Polyglot!</li>
                                <li class="io-pink-main">a Singer!</li>
                                <li class="io-purple-main">a Guitarist!</li>
                            </ul>
                        </div>
                    </div>
                    <p class="pe-5">At the Montessori Center, you will learn to play musical instruments, sing, and dance. You'll become a polyglot and learn to paint. We'll also enhance your knowledge in school subjects. And all of this will happen online!</p>
                    <div class="pe-5">
                        <a href="<?php echo get_permalink(22); ?>" class="io-button__large">All courses</a>
                    </div>
                </div>
                <div class="io-homepage__hero-img">
                    <a href="<?php echo get_permalink(54); ?>" style="background-image: url(/wp-content/uploads/2024/04/Paint-1.webp);" data-title="link" width="500" height="500"></a>
                    <a href="<?php echo get_permalink(26); ?>" style="background-image: url(/wp-content/uploads/2024/04/Piano-1.webp);" data-title="link" width="500" height="500"></a>
                    <a href="<?php echo get_permalink(78); ?>" style="background-image: url(/wp-content/uploads/2024/04/Language-1.webp);" data-title="link" width="500" height="500"></a>
                    <a href="<?php echo get_permalink(28); ?>" style="background-image: url(/wp-content/uploads/2024/04/Sing-1.webp);" data-title="link" width="500" height="500"></a>
                    <a href="<?php echo get_permalink(30); ?>" style="background-image: url(/wp-content/uploads/2024/04/Guitar-1.webp);" data-title="link" width="500" height="500"></a>
                </div>
            </div>
            <div class="io-block io-block--orange io-homepage__hero-list">
                <div class="io-homepage__hero-list-item">
                    <img src="/wp-content/uploads/2024/04/online-study-1.svg">
                    <span>Занятия в прямом эфире</span>
                </div>
                <div class="io-homepage__hero-list-line"></div>
                <div class="io-homepage__hero-list-item">
                    <img src="/wp-content/uploads/2024/04/promotion-1.svg">
                    <span>Учителя мирового уровня</span>
                </div>
                <div class="io-homepage__hero-list-line"></div>
                <div class="io-homepage__hero-list-item">
                    <img src="/wp-content/uploads/2024/04/time-schedule-1.svg">
                    <span>Гибкий график</span>
                </div>
                <div class="io-homepage__hero-list-line"></div>
                <div class="io-homepage__hero-list-item">
                    <img src="/wp-content/uploads/2024/04/group-1-1.svg">
                    <span>От 5 до 99 лет</span>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <svg class="io-homedirection__wave io-section"><pattern id="curve-6b073590-9b2f-42cb-b5a7-c9b4a550959e" x="0" y="0" width="800" height="100%" patternUnits="userSpaceOnUse"><path fill="currentColor" d="M 0 0 L 0 20 Q 200 0, 400 20 Q 600 40, 800 20 L 800 0 L 0 0"></path><animate attributeName="x" values="0;800" dur="10s" repeatCount="indefinite"></animate></pattern><rect x="0" y="0" width="100%" height="100%" fill="url(#curve-6b073590-9b2f-42cb-b5a7-c9b4a550959e"></rect></svg>

    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
    <section class="io-homecourse io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-heading-2 io-homecourse__heading">Направления обучения</h2>
            <p class="io-subheading">Ваши дети могут заниматься по нескольким учебным направлениям</p>
            <div class="io-homecourse__grid">
                <div class="io-homecourse__list">
                    <a href="<?php echo get_permalink(52); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/palette-1.svg" alt="">
                        </div>
                        <h3 class="io-homecourse__element-title">Изобразительное<br>искусство</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(24); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/musical-note-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">Музыкальное<br>искусство</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(76); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/translator-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">Иностранные языки</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(90); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/stationery-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">Средняя школа</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(64); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/dancing-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">Хореография и танцы</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(74); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/talking-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">Логопед</h3>                        
                    </a>
                </div>
                <div class="io-homecourse__video">
                    <video autoplay="" muted="" loop="">
                        <source src="/wp-content/uploads/2024/05/3d1e-4df5-b4b7-226bfe8847e6.mp4" type="video/mp4">
                        Ваш браузер не поддерживает тег video.
                    </video>
                </div>
            </div>
        </div>
    </section>
    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
    <section class="io-homecourse io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-heading-2 io-homecourse__heading">Educational Programs</h2>
            <p class="io-subheading">Your children can engage in multiple educational tracks.</p>
            <div class="io-homecourse__grid">
                <div class="io-homecourse__list">
                    <a href="<?php echo get_permalink(52); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/palette-1.svg" alt="">
                        </div>
                        <h3 class="io-homecourse__element-title">Art</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(24); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/musical-note-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">Music</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(76); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/translator-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">Languages</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(90); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/stationery-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">School Subjects</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(64); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/dancing-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">Dance</h3>                        
                    </a>
                    <a href="<?php echo get_permalink(74); ?>" class="io-homecourse__element">
                        <div class="io-homecourse__element-img">
                            <img src="/wp-content/uploads/2024/04/talking-1.svg" alt="">                        
                        </div>
                        <h3 class="io-homecourse__element-title">Speech Therapy</h3>                        
                    </a>
                </div>
                <div class="io-homecourse__video">
                    <video autoplay="" muted="" loop="">
                        <source src="/wp-content/uploads/2024/05/3d1e-4df5-b4b7-226bfe8847e6.mp4" type="video/mp4">
                        Ваш браузер не поддерживает тег video.
                    </video>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <?php io_popular_courses(); ?>

    <section class="io-homereview io-section">
        <div class="container-xxl io-container-mw">
            <div class="io-homereview__slider-wrapper">
                <button class="io-reviews__prev io-pagination__prev" aria-label="Предыдущая страница"></button>
                <div id="slider-reviews" class="keen-slider io-homereview__slider">
                    <div class="keen-slider__slide io-homereview__slide">
                        <div class="io-feedback__item io-block">
                            <div class="io-feedback__item-fio">
                                <img src="/wp-content/themes/interschooltemplate/images/teach-maximova.webp" alt="">
                            </div>
                            <div class="w-100">
                                <div class="io-feedback__item-heading mb-2">
                                    <h3 class="io-feedback__item-name">Ulysses Nightingale</h3>
                                </div>
                                <div class="io-feedback__item-text-wrapper io-text-wrapper mb-2">
                                    <p>Fantastic piano lessons! My kid looks forward to them every week.</p>
                                </div>
                                <div class="io-rating__stars io-feedback__item-stars justify-content-start">
                                    <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                    <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                    <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                    <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                    <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="keen-slider__slide io-homereview__slide">
                        <div class="io-feedback__item io-block">
                            <div class="io-feedback__item-fio">
                                <img src="/wp-content/themes/interschooltemplate/images/teach-maximova.webp" alt="">
                            </div>
                            <div class="w-100">
                                <div class="io-feedback__item-heading mb-2">
                                    <h3 class="io-feedback__item-name">Ulysses Nightingale</h3>
                                </div>
                                <div class="io-feedback__item-text-wrapper io-text-wrapper mb-2">
                                    <p>Fantastic piano lessons! My kid looks forward to them every week.</p>
                                </div>
                                <div class="io-rating__stars io-feedback__item-stars justify-content-start">
                                    <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                    <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                    <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                    <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                    <img src="/wp-content/themes/interschooltemplate/images/i-r-star.svg" alt="">
                                </div>
                            </div>                            
                        </div>
                    </div>
                </div>
                <button class="io-reviews__next io-pagination__next" aria-label="следующая страница"></button>
            </div>
        </div>
    </section>

    <section class="io-hometeachers io-hometeachers--mb io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-heading-2 text-center mb-3">Звездные педагоги Монтессори центра</h2>
            <p class="text-center mb-5 io-subheading">Наши учителя имеют высшее образование, большой опыт и ангельское терпение</p>
            <div class="io-hometeachers__grid">
                <div class="io-hometeachers__item">
                    <img src="/wp-content/themes/interschooltemplate/images/teach-stupak.webp" alt="">
                    <div class="io-block">
                        <h3 class="name">Елена Ступак</h3>
                        <p class="skill">Педагог живописи, лепки и скульптуры, компьютерной графики</p>
                    </div>
                </div>
                <div class="io-hometeachers__item">
                    <img src="https://artstudio.kiev.ua/wp-content/themes/interschooltemplate/images/teach-soroka.webp" alt="">
                    <div class="io-block">
                        <h3 class="name">Владимир Сорока</h3>
                        <p class="skill">Педагог гитары</p>
                    </div>
                </div>
                <div class="io-hometeachers__item">
                    <img src="https://artstudio.kiev.ua/wp-content/themes/interschooltemplate/images/teach-dimitrova.webp" alt="">
                    <div class="io-block">
                        <h3 class="name">Татьяна Димитрова</h3>
                        <p class="skill">Педагог вокала</p>
                    </div>
                </div>
                <div class="io-hometeachers__item">
                    <img src="https://artstudio.kiev.ua/wp-content/themes/interschooltemplate/images/teach-mamchich.webp" alt="">
                    <div class="io-block">
                        <h3 class="name">Снежана Мамчич</h3>
                        <p class="skill">Педагог фортепиано</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-heading-2 text-center" style="margin-bottom: var(--io-size-300);">
                <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                    Все курсы
                <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                    All courses
                <?php } ?>
            </h2>
            <?php io_directions(); ?>
        </div>
    </section>

    <?php io_montessori_work(); ?>

    <section class="io-homecta io-section">
        <div class="container-xxl io-container-mw">
            <div class="io-homecta__block io-block io-block--purple">
                <div class="io-homecta__img">
                    <img alt="" src="/wp-content/uploads/2024/04/Piano_discount.png">
                </div>
                <div class="io-homecta__data">
                    <h1 class="io-heading-2">Скидка 20% на курс фортепиано онлайн</h1>
                    <p>Запишись на пробный урок до 1 мая 2024 года!</p>
                    <div>
                        <a href="<?php echo get_permalink(26); ?>#ceny-i-oplata" class="io-button__large ioCookieSingleCourseDemo">Записаться на пробный урок</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
    <section class="io-about-read io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-about-read__heading io-heading-2">Монтессори центр: образование онлайн</h2>
            <div class="io-sidebar io-legal__sidebar">
                <div class="io-sidebar__sticky">
                    <div class="io-sidebar__inner io-sidebar__inner--unset">
                        <div class="io-legal__sidebar-block io-block-shadow">
                            <h2 class="io-sidebar__title io-heading-2">Содержание</h2>
                            <ul class="io-sidebar__list">
                                <li><a class="io-click-open" href="#io-about-text-h3-1">О Монтессори центре</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-2">Музыкальная школа онлайн</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-3">Художественная школа онлайн</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-4">Школа танцев онлайн</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-5">Онлайн-школа иностранных языков</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="io-sidebar__content">
                    <div class="io-text-wrapper io-about-read__text-wrapper">
                        <h3 id="io-about-text-h3-1">О Монтессори центре</h3>
                        <p>Добро пожаловать в школу искусств Монтессори центр — ваш портал в мир искусства, где обучение оживает в каждом уроке. Наша онлайн-школа искусств предлагает богатый выбор программ для детей и взрослых, от музыки и изобразительного искусства до танцев и языков. Мы гордимся тем, что обеспечиваем персонализированный подход к каждому ученику, адаптируя программы обучения к индивидуальным потребностям и целям.</p>
                        <p>Наши преподаватели — это профессионалы своего дела, работающие по всему миру. Благодаря этому мы можем учитывать различия в часовых поясах и создавать гибкое расписание уроков, удобное для каждого студента. Мы предлагаем как индивидуальные, так и групповые занятия, что позволяет ученикам не только развивать личные навыки, но и взаимодействовать с другими учениками онлайн.</p>
                        <p>Обучение в Монтессори центре выходит за рамки традиционного: это не просто видеоуроки или текстовые лекции. Мы предлагаем живое, интерактивное и вовлекающее обучение. Вы сможете не только слушать учителя, но и участвовать в живых обсуждениях, прямых трансляциях, практических мастер-классах и концертах с использованием современных технологий и качественного оборудования.</p>
                        <div class="io-show-button io-show-button--desktop">
                            <a onclick="showHiddenBlock(this)" class="io-link io-link--purple ">
                                Читать далее
                            </a>
                        </div>
                        <div class="io-hidden io-hidden--desktop">
                            <p>Монтессори центр предлагает широкий спектр курсов: музыкальная онлайн-школа - вокал, изучение музыкальных инструментов, таких как фортепиано, гитара, скрипка и многое другое; языковые курсы, включая русский (РКИ), английский, немецкий и японский в онлайн-школе иностранных языков. Также наша художественная онлайн-школа предлагает курсы изобразительного искусства, компьютерной графики, анимации, лепки и многое другое. Мы помогаем ученикам не только осваивать новые умения, но и готовим их к успешным выступлениям на музыкальных фестивалях, конкурсах и выставках.</p>
                            <p>Ученики Монтессори центра могут также изучать школьные предметы, такие как математика и химия, в увлекательном и понятном формате. Мы стремимся сделать обучение эффективным, применяя интерактивные задания и эксперименты, которые пробуждают любознательность и желание учиться.</p>
                            <h3 id="io-about-text-h3-2">Музыкальная школа онлайн</h3>
                            <p>Наши уроки музыки онлайн разработаны таким образом, чтобы максимально эффективно использовать преимущества онлайн-формата, предлагая студентам живое взаимодействие с профессиональными музыкантами-педагогами. Благодаря индивидуальному подходу, каждый студент получает личное внимание и наставничество, которое помогает быстро приобретать навыки и развивать свои умения.</p>
                            <p>Наши преподаватели — активные исполнители и опытные учителя, которые не только передают знания, но и вдохновляют учеников на достижение новых высот. Мы обеспечиваем высокое качество аудио и видео связи, чтобы каждый аккорд и каждая нота звучали чисто и ясно, как в классическом музыкальном зале.</p>
                            <p><strong>Программы наших курсов включают в себя:</strong></p>
                            <p><strong>Вокал:</strong> от классики до современных жанров, мы поможем вам управлять своим голосом и научим техникам пения, которые позволят вам выступать с уверенностью.</p>
                            <p><strong>Гитара:</strong> классическая гитара или электрогитара, бас и укулеле - начинающие и продвинутые гитаристы найдут здесь все, чтобы овладеть игрой и расширить свой репертуар.</p>
                            <p><strong>Фортепиано:</strong> основы для начинающих и сложные композиции для опытных пианистов — наши уроки позволят вам мастерски владеть клавишами.</p>
                            <p><strong>Скрипка, виолончель и саксофон:</strong> от искусства игры на скрипке и виолончели до мелодичного звучания саксофона, мы обучаем техникам, которые превратят вас в виртуозного исполнителя.</p>
                            <p><strong>Ударные:</strong> научитесь ритму и динамике, которые необходимы для игры на ударных инструментах.</p>
                            <p><strong>Флейта и блокфлейта:</strong> от основ до продвинутых техник, вы научитесь исполнять красивые мелодии из этих духовых инструментах.</p>
                            <p>Мы предлагаем индивидуальные занятия, позволяя ученикам выбирать подходящий график обучения. Наши уроки музыки онлайн нацелены на то, чтобы каждый ученик мог наслаждаться музыкой и одновременно развивать свои навыки в уютной и поддерживающей атмосфере.</p>
                            <h3 id="io-about-text-h3-3">Художественная школа онлайн</h3>
                            <p>В нашей художественной онлайн-школе каждый может найти что-то для себя, будь то начинающий художник или опытный мастер. Мы предлагаем широкий спектр курсов, охватывающих все аспекты изобразительного искусства — от живописи и графики до академического рисунка, создания скетчей, лепки, скульптуры, а также мультипликации и компьютерной графики.</p>
                            <p>Наши курсы разработаны так, чтобы учащиеся могли изучать искусство в комфортной онлайн-среде, получая знания и навыки, необходимые для реализации своего творческого потенциала. Благодаря индивидуальному подходу и профессиональному наставничеству, каждый студент получит личное внимание и поддержку от наших опытных преподавателей.</p>
                            <p><strong>Программы наших курсов включают:</strong></p>
                            <p><strong>Живопись и графика:</strong> от классических техник масляной живописи до современных подходов в графике, учащиеся научатся выражать свои идеи через разнообразные художественные стили.</p>
                            <p><strong>Академический рисунок и скетчи:</strong> обучение основам рисунка, понимание перспективы, композиции и анатомии для создания точных и выразительных работ.</p>
                            <p><strong>Лепка и скульптура:</strong> разработка навыков моделирования и создания трехмерных форм, изучение различных материалов и техник.</p>
                            <p><strong>Мультипликация (анимация):</strong> студенты учатся создавать анимированные истории и персонажи с помощью современных цифровых технологий.</p>
                            <p><strong>Компьютерная графика:</strong> обучение использованию программного обеспечения для создания цифрового искусства, включая графический дизайн и веб-дизайн.</p>
                            <p>Мы предлагаем как групповые, так и индивидуальные занятия, чтобы учащиеся могли выбрать наиболее подходящий для себя формат обучения. Наши курсы нацелены на развитие творческих способностей учеников в дружелюбной и вдохновляющей атмосфере.</p>
                            <h3 id="io-about-text-h3-4">Школа танцев онлайн</h3>
                            <p>В нашей онлайн-школе танцев каждый может найти свой ритм и стиль! Наши курсы предлагают обучение в различных направлениях танцевального искусства, включая классический балет, современные танцы и общую физическую подготовку.</p>
                            <p>Наши онлайн-уроки хореографии разработаны таким образом, чтобы учащиеся всех возрастов и уровней подготовки могли изучать танцевальные движения, улучшать свою технику и физическую форму, находясь в любой точке мира. Мы используем последние технологии для трансляции высококачественного видео, что позволяет нашим преподавателям вести в индивидуальном формате.</p>
                            <p><strong>Наши курсы включают:</strong></p>
                            <p><strong>Классическая хореография, балет онлайн:</strong> обучение основам балета, включая позиции, шаги и па, а также развитие грации и выразительности жестов.</p>
                            <p><strong>Современные танцы онлайн:</strong> изучение современных танцевальных стилей, которые сочетают элементы различных танцевальных направлений для создания уникальных и инновационных композиций.</p>
                            <p><strong>Общая физическая подготовка:</strong> тренировки, направленные на укрепление мышц, повышение гибкости и выносливости, что является неотъемлемой частью подготовки танцора.</p>
                            <p>Наши преподаватели – профессионалы и мастера своего дела, имеющие богатый опыт работы в танцевальной индустрии и педагогической деятельности. Они нацелены на то, чтобы каждый ученик мог достичь своих личных целей, будь то улучшение физической формы, подготовка к профессиональной карьере танцора или просто желание научиться танцевать для собственного удовольствия.</p>
                            <h3 id="io-about-text-h3-5">Онлайн-школа иностранных языков</h3>
                            <p>В нашей онлайн-школе иностранных языков мы предлагаем индивидуальные уроки для учащихся всех возрастов. Независимо от того, начинаете ли вы изучать новый язык с нуля или стремитесь усовершенствовать свои навыки, наши курсы английского, русского (а также РКИ - русского как иностранного), украинского, японского, испанского и немецкого языков помогут вам достичь ваших целей.</p>
                            <p>Наши индивидуальные занятия разработаны так, чтобы максимально соответствовать вашим личным потребностям и обучающим целям. Мы предлагаем:</p>
                            <p><strong>Индивидуальный подход:</strong> каждый урок адаптирован к вашему уровню владения языком, стилю обучения и интересам.</p>
                            <p><strong>Гибкий график:</strong> занятия могут быть запланированы в удобное для вас время, что делает обучение доступным в любом месте мира.</p>
                            <p><strong>Опытные преподаватели:</strong> наши преподаватели – это квалифицированные специалисты, говорящие на целевом языке как на родном, с многолетним опытом преподавания и практической работы.</p>
                            <p>Наши курсы предназначены как для детей, так и для взрослых и включают:</p>
                            <p><strong>Основы языка:</strong> от алфавита и грамматики до словарного запаса и произношения.</p>
                            <p><strong>Разговорная практика:</strong> акцент на разговорных навыках для повышения уверенности и способности общаться на новом языке.</p>
                            <p><strong>Чтение и письмо:</strong> улучшение навыков чтения и письма для полного понимания и использования языка.</p>
                            <p><strong>Культурное погружение:</strong> знакомство с культурой и традициями страны изучаемого языка для глубокого понимания и аутентичного взаимодействия.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
    <section class="io-about-read io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-about-read__heading io-heading-2">Montessori Center: Online Education</h2>
            <div class="io-sidebar io-legal__sidebar">
                <div class="io-sidebar__sticky">
                    <div class="io-sidebar__inner io-sidebar__inner--unset">
                        <div class="io-legal__sidebar-block io-block-shadow">
                            <h2 class="io-sidebar__title io-heading-2">Content</h2>
                            <ul class="io-sidebar__list">
                                <li><a class="io-click-open" href="#io-about-text-h3-1">About the Montessori Center</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-2">Online Music School</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-3">Online Art School</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-4">Online Dance School</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-5">Online Foreign Language School</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="io-sidebar__content">
                    <div class="io-text-wrapper io-about-read__text-wrapper">
                        <h3 id="io-about-text-h3-1">About the Montessori Center</h3>
                        <p>Welcome to the Montessori Center - your gateway to a world where learning comes to life with every lesson. Our online arts school offers a rich array of programs for both children and adults, spanning music, visual arts, dance, and languages. We take pride in providing a personalized approach to each student, tailoring our educational programs to meet individual needs and goals.</p>
                        <p>Our teachers are professionals from around the globe. This international presence allows us to accommodate different time zones and create flexible class schedules that suit each student. We offer both individual and group sessions, enabling students to develop personal skills while also interacting with peers online.</p>
                        <p>Learning at the Montessori Center goes beyond traditional methods: it's not just about video lessons or text-based lectures. We offer live, interactive, and engaging education. You’ll be able to participate in real-time discussions, live streams, practical workshops, and concerts, all using modern technology and high-quality equipment.</p>
                        <div class="io-show-button io-show-button--desktop">
                            <a onclick="showHiddenBlock(this)" class="io-link io-link--purple ">
                                Read more
                            </a>
                        </div>
                        <div class="io-hidden io-hidden--desktop">
                            <p>The Montessori Center provides a wide range of courses: our online music school includes vocal lessons and instruction in musical instruments such as piano, guitar, violin, and more; our language courses feature Russian (as a foreign language), English, German, and Japanese at our online foreign languages school. Additionally, our online art school offers courses in fine arts, computer graphics, animation, sculpting, and more. We not only help students acquire new skills but also prepare them for successful performances at music festivals, competitions, and exhibitions.</p>
                            <p>Students at the Montessori Center can also study academic subjects like mathematics and chemistry in an engaging and understandable format. We strive to make learning effective by using interactive tasks and experiments that spark curiosity and the desire to learn.</p>
                            <h3 id="io-about-text-h3-2">Online Music School</h3>
                            <p>Our online music lessons are designed to maximize the benefits of the online format, offering students live interaction with professional musician educators. Through personalized attention and mentorship, each student receives individual guidance that helps them rapidly acquire skills and develop their talents.</p>
                            <p>Our teachers are active performers and experienced educators who not only impart knowledge but also inspire students to reach new heights. We ensure high-quality audio and video connections so that every chord and note sounds as clear and pure as in a traditional concert hall.</p>
                            <p><strong>Our course programs include:</strong></p>
                            <p><strong>Vocal:</strong> From classical to contemporary genres, we help you control your voice and teach singing techniques that enable you to perform confidently.</p>
                            <p><strong>Guitar:</strong> Whether it's classical guitar, electric guitar, bass, or ukulele, both beginners and advanced players will find everything they need to master their play and expand their repertoire.</p>
                            <p><strong>Piano:</strong> From basics for beginners to complex compositions for experienced pianists—our lessons enable you to masterfully command the keys.</p>
                            <p><strong>Violin, Cello, and Saxophone:</strong> From the art of playing the violin and cello to the melodious sounds of the saxophone, we teach techniques that will turn you into a virtuoso performer.</p>
                            <p><strong>Percussion:</strong> Learn the rhythm and dynamics necessary for playing percussion instruments.</p>
                            <p><strong>Flute and Recorder:</strong> From fundamentals to advanced techniques, you will learn to play beautiful melodies on these wind instruments.</p>
                            <p>We offer individual lessons, allowing students to choose a schedule that suits their learning pace. Our online music lessons aim to ensure every student can enjoy music while simultaneously developing their skills in a comfortable and supportive atmosphere.</p>
                            <h3 id="io-about-text-h3-3">Online Art School</h3>
                            <p>In our online art school, everyone, from beginners to experienced masters, can find something for themselves. We offer a wide range of courses that cover all aspects of visual arts - from painting and graphic design to academic drawing, sketch creation, sculpting, as well as animation and computer graphics.</p>
                            <p>Our courses are designed to allow students to study art in a comfortable online environment, gaining the knowledge and skills necessary to realize their creative potential. Thanks to personalized attention and professional mentorship, each student receives individual attention and support from our experienced instructors.</p>
                            <p><strong>Our course programs include:</strong></p>
                            <p><strong>Painting and Graphics:</strong> From classical oil painting techniques to modern graphic approaches, students will learn to express their ideas through various artistic styles.</p>
                            <p><strong>Academic Drawing and Sketches:</strong> Training in the basics of drawing, understanding perspective, composition, and anatomy to create accurate and expressive works.</p>
                            <p><strong>Sculpture and Modeling:</strong> Developing skills in modeling and creating three-dimensional forms, exploring different materials and techniques.</p>
                            <p><strong>Animation:</strong> Students learn to create animated stories and characters using modern digital technologies.</p>
                            <p><strong>Computer Graphics:</strong> Training in the use of software to create digital art, including graphic and web design.</p>
                            <p>We offer both group and individual classes, allowing students to choose the most suitable learning format for themselves. Our courses are aimed at developing students' creative abilities in a friendly and inspiring atmosphere.</p>
                            <h3 id="io-about-text-h3-4">Online Dance School</h3>
                            <p>In our online dance school, everyone can find their rhythm and style! Our courses offer training in various dance arts, including classical ballet, contemporary dance, and general physical conditioning.</p>
                            <p>Our online choreography lessons are designed so that students of all ages and levels can learn dance movements, improve their technique and physical condition from anywhere in the world. We use the latest technology to broadcast high-quality video, allowing our instructors to lead in a personalized format.</p>
                            <p><strong>Our courses include:</strong></p>
                            <p><strong>Classical Choreography, Online Ballet:</strong> Teaching the basics of ballet, including positions, steps, and pas, as well as developing grace and expressiveness of gestures.</p>
                            <p><strong>Contemporary Dance Online:</strong> Learning modern dance styles that combine elements of various dance directions to create unique and innovative compositions.</p>
                            <p><strong>General Physical Conditioning:</strong> Workouts aimed at strengthening muscles, increasing flexibility, and endurance, which are integral parts of a dancer's training.</p>
                            <p>Our instructors are professionals and masters in their fields with extensive experience in the dance industry and teaching. They are focused on helping each student achieve their personal goals, whether it's improving physical fitness, preparing for a professional dance career, or simply learning to dance for personal enjoyment.</p>
                            <h3 id="io-about-text-h3-5">Online Language School</h3>
                            <p>In our online language school, we offer personalized lessons for students of all ages. Whether you're starting to learn a new language from scratch or aiming to enhance your skills, our courses in English, Russian (Russian as a Foreign Language), Ukrainian, Japanese, Spanish, and German will help you achieve your goals.</p>
                            <p>Our individual lessons are designed to meet your personal needs and educational objectives. We offer:</p>
                            <p><strong>Personalized Approach:</strong> Each lesson is tailored to your language proficiency level, learning style, and interests.</p>
                            <p><strong>Flexible Schedule:</strong> Lessons can be scheduled at your convenience, making learning accessible from anywhere in the world.</p>
                            <p><strong>Experienced Instructors:</strong> Our teachers are qualified professionals who are native speakers of the target language, with years of teaching and practical experience.</p>
                            <p>Our courses are suitable for both children and adults and include:</p>
                            <p><strong>Language Fundamentals:</strong> From the alphabet and grammar to vocabulary and pronunciation.</p>
                            <p><strong>Conversational Practice:</strong> Focus on speaking skills to enhance confidence and the ability to communicate in the new language.</p>
                            <p><strong>Reading and Writing:</strong> Improving reading and writing skills for complete understanding and use of the language.</p>
                            <p><strong>Cultural Immersion:</strong> Familiarizing with the culture and traditions of the language's country for a deep understanding and authentic interaction.</p>
                            <p>Join us and start your journey into the world of foreign languages, where each lesson brings you closer to the freedom of communication and understanding of new cultures. Our online lessons will not only enrich your mind but also open new horizons in your personal and professional life.</p>
                            <p>Let the Montessori center open the doors to a world of knowledge and art for you. Join us to explore, learn, and create together, no matter where you are!</p>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>

    <section class="io-section io-course-blog">
        <div class="container-xxl io-container-mw">
            <div class="io-flex-between" style="margin-bottom: var(--io-size-300);">
                <h2 class="io-heading-2">Полезные статьи</h2>
                <div class="io-pagination">
                    <div class="io-ourse-blog__arrows io-pagination__arrows">
                        <button class="io-course-blog__prev io-pagination__prev" aria-label="Предыдущая страница"></button>
                        <button class="io-course-blog__next io-pagination__next" aria-label="следующая страница"></button>
                    </div>
                </div>
            </div>
            <div id="slider-blog" class="keen-slider pb-3">
                <div class="keen-slider__slide" style="overflow: unset;">
                    <a target="_blank" href="<?php echo get_permalink(123); ?>" class="io-blog__item">
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
                </div>
                <div class="keen-slider__slide" style="overflow: unset;">
                    <a target="_blank" href="<?php echo get_permalink(123); ?>" class="io-blog__item">
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
                </div>
                <div class="keen-slider__slide" style="overflow: unset;">
                    <a target="_blank" href="<?php echo get_permalink(123); ?>" class="io-blog__item">
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
<script>
    // Получаем все элементы img внутри блока с классом "io-homepage__hero-img"
    const images = document.querySelectorAll('.io-homepage__hero-img a');

    let currentIndex = 0;

    function changeOpacity() {
        // Устанавливаем свойство opacity для всех изображений в блоке
        images.forEach((img, index) => {
            if (index === currentIndex) {
                img.style.opacity = 1;
                img.style.zIndex = 1;
            } else {
                img.style.opacity = 0;
                img.style.zIndex = 0;
            }
        });

        // Увеличиваем индекс для следующего изображения
        currentIndex = (currentIndex + 1) % images.length;
    }

    // Присваиваем первому изображению значение opacity: 1
    images[0].style.opacity = 1;

    // Вызываем функцию изменения прозрачности сразу после загрузки страницы
    changeOpacity();

    // Вызываем функцию изменения прозрачности каждые 3 секунды
    setInterval(changeOpacity, 5000);
</script>
<script>
    const heroSkill = document.querySelector('.io-homepage__hero-skill');
    const listItems = heroSkill.querySelectorAll('li');
    const itemHeight = listItems[0].offsetHeight;
    let currentPosition = 0;
    let duplicateItemsAdded = false;

    function moveHeroSkill() {
        currentPosition -= itemHeight;
        heroSkill.style.transform = `translateY(${currentPosition}px)`;

        // Если достигнут конец списка
        if (Math.abs(currentPosition) >= (listItems.length * itemHeight)) {
            // Если дубликаты еще не добавлены
            if (!duplicateItemsAdded) {
                // Дублируем элементы
                const originalItems = [...listItems];
                originalItems.forEach(item => {
                    const clone = item.cloneNode(true);
                    heroSkill.appendChild(clone);
                });
                duplicateItemsAdded = true;
            }

            // Возвращаем translateY в исходное значение и начинаем анимацию заново
            currentPosition = 0;
            heroSkill.style.transform = `translateY(${currentPosition}px)`;
        }
    }

    // Вызываем функцию перемещения каждые 5 секунд
    setInterval(moveHeroSkill, 5000);
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
    document.addEventListener('DOMContentLoaded', function () {
        var ioHiddenElement = document.querySelector('.io-hidden');
        var ioShowButton = document.querySelector('.io-show-button');
        var ioLinks = document.querySelectorAll('.io-click-open');

        ioLinks.forEach(function (link) {
            link.addEventListener('click', function (event) {
                event.preventDefault();

                // Переключаем классы для анимации
                ioHiddenElement.style.height = 'auto';
                ioShowButton.style.display = 'none';

                // Задержка перед переходом по ссылке
                setTimeout(function () {
                    window.location.href = link.href;
                }, 100);
            });
        });
    });
</script>

<!-- Полезные статьи Слайдер -->
<script>
    var sliderBlog = new KeenSlider(
        "#slider-blog", {
            loop: true,
            slides: {
                perView: 1,
                spacing: 20
            },
            breakpoints: {
                "(min-width: 576px)": {
                    slides: {
                        perView: 1,
                        spacing: 20,
                    },
                },
                "(min-width: 992px)": {
                    slides: {
                        perView: 2,
                        spacing: 20,
                    },
                },
                "(min-width: 1200px)": {
                    slides: {
                        perView: 3,
                        spacing: 20,
                    },
                },
            },
        },
        [
            (sliderBlog) => {
                let timeout
                let mouseOver = false

                function clearNextTimeout() {
                    clearTimeout(timeout)
                }

                function nextTimeout() {
                    clearTimeout(timeout)
                    if (mouseOver) return
                    timeout = setTimeout(() => {
                        sliderBlog.next()
                    }, 6000)
                }
                sliderBlog.on("created", () => {
                    sliderBlog.container.addEventListener("mouseover", () => {
                        mouseOver = true
                        clearNextTimeout()
                    })
                    sliderBlog.container.addEventListener("mouseout", () => {
                        mouseOver = false
                        nextTimeout()
                    })
                    nextTimeout()
                })
                sliderBlog.on("dragStarted", clearNextTimeout)
                sliderBlog.on("animationEnded", nextTimeout)
                sliderBlog.on("updated", nextTimeout)
            },
        ]
    )

    // Добавляем обработчики событий для кнопок "Назад" и "Вперед"
    const prevButtonBlog = document.querySelector(".io-course-blog__prev");
    const nextButtonBlog = document.querySelector(".io-course-blog__next");

    prevButtonBlog.addEventListener("click", () => {
        sliderBlog.prev();
    });

    nextButtonBlog.addEventListener("click", () => {
        sliderBlog.next();
    });
</script>

<?php io_price(); ?>