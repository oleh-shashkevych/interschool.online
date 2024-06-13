<?php
/**
 * О нас about-us.html
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: О нас
 */

include 'templates/price.php';
get_header(); // подключаем header.php ?>
<main>
    <!-- <?php the_content(); // контент ?> -->

    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
    <section class="io-about-hero io-section-first">
        <div class="container-xxl io-container-mw">
            <h1 class="io-about-hero__heading io-heading-2">Международная <span class="io-ff-nunito io-green-main">online</span> школа Монтессори центр</h1>
            <div class="io-about-hero__img">
                <img src="/wp-content/themes/interschooltemplate/images/io-about.svg" alt="">
            </div>
        </div>
        <div class="io-about-hero__grid">
            <div class="container-xxl io-container-mw">
                <div class="io-about-hero__item">
                    <span class="io-about-hero__item-top" id="ioHowOld">12</span>
                    <span class="io-about-hero__item-bottom">лет Монтессори центру</span>
                </div>
                <div class="io-about-hero__item">
                    <span class="io-about-hero__item-top">9000+</span>
                    <span class="io-about-hero__item-bottom">студентов прошли обучение</span>
                </div>
                <div class="io-about-hero__item">
                    <span class="io-about-hero__item-top">17%</span>
                    <span class="io-about-hero__item-bottom">наших студентов — взрослые</span>
                </div>
            </div>
        </div>
    </section>

    <section class="io-about io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-about__heading io-heading-2">О нас</h2>
            <div class="io-about__grid">
                <div class="io-about__data io-text-wrapper">
                    <p>Мы создали Монтессори центр в <b class="io-fw-semibold">2011</b> году для онлайн обучения музыке, изобразительному искусству, танцам, иностранным языкам и предметам средней школы. У нас учатся дети от 3 лет и взрослые со всех континентов. В Монтессори центре прошли обучение более <b class="io-fw-semibold">9000</b> студентов.</p>
                    <p>Онлайн уроки проходят индивидуально или в группах, в зависимости от желания студентов. Небольшие онлайн группы — это прекрасный способ изучить иностранный язык или научиться рисовать, а индивидуальные онлайн уроки эффективны для занятий вокалом, игры на музыкальных инструментах и много другого.</p>
                    <p>Наши учителя — специалисты с высшим университетским или консерваторским образованием и обширным опытом работы.<br>Во время обучения студенты выполняют проверочные тесты и практические занятия, участвуя в наших вокальных и инструментальных конкурсах, олимпиадах и выставках.</p>
                    <p><b class="io-purple-main io-fs-18 io-fw-semibold">Учитесь в нашей онлайн школе в удобном графике из любой точки мира!</b></p>
                </div>
                <div class="io-about__img">
                    <img src="/wp-content/uploads/2024/04/school-life-219-1.webp" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="io-section io-about-gallery">
        <div class="container-xxl io-container-mw">
            <h2 class="io-heading-2 io-about-gallery__heading">Галерея</h2>
            <div class="io-about-gallery__pagination io-flex-between">
                <ul class="nav nav-pills io-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-photo-tab" data-bs-toggle="pill" data-bs-target="#pills-photo" type="button" role="tab" aria-controls="pills-photo" aria-selected="true"><span>Фото</span> <span class="io-fw-bold">36</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-video-tab" data-bs-toggle="pill" data-bs-target="#pills-video" type="button" role="tab" aria-controls="pills-video" aria-selected="false"><span>Видео</span> <span class="io-fw-bold">24</span></button>
                    </li>
                </ul>
                <div class="io-pagination d-none d-sm-flex">
                    <div class="io-pagination__count">
                        <span class="io-black-main-op-60">Страница</span>
                        <span>3/6</span>
                    </div>
                    <div class="io-pagination__arrows">
                        <button class="io-pagination__prev disabled"></button>
                        <button class="io-pagination__next"></button>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-photo" role="tabpanel" aria-labelledby="pills-photo-tab">
                    <div class="io-gallery">
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-1.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-1.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-1.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                Смотреть
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-2.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-2.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-2.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                Смотреть
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-3.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-3.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-3.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                Смотреть
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-4.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-4.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-4.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                Смотреть
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-5.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-5.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-5.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                Смотреть
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-6.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-6.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-6.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                Смотреть
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-7.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-7.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-7.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                Смотреть
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-8.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-8.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-8.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                Смотреть
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-9.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-9.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-9.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                Смотреть
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-10.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-10.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-10.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                Смотреть
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-11.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-11.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-11.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                Смотреть
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-12.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-12.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-12.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                Смотреть
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                    <div class="io-gallery io-gallery--video">
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="WdE-uakv4Og">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/WdE-uakv4Og.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/WdE-uakv4Og.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/WdE-uakv4Og.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="8WpGo5wR958">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/8WpGo5wR958.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/8WpGo5wR958.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/8WpGo5wR958.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="ULjFfwIDsEU">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/ULjFfwIDsEU.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/ULjFfwIDsEU.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/ULjFfwIDsEU.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="0OBHTBmw7XE">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/0OBHTBmw7XE.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/0OBHTBmw7XE.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/0OBHTBmw7XE.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="vaZbPJYEOAs">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/vaZbPJYEOAs.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/vaZbPJYEOAs.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/vaZbPJYEOAs.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="veVAq-1To3c">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/veVAq-1To3c.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/veVAq-1To3c.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/veVAq-1To3c.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="l3Ez6EKZr5M">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/l3Ez6EKZr5M.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/l3Ez6EKZr5M.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/l3Ez6EKZr5M.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="4-6LbFnVi3U">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/4-6LbFnVi3U.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/4-6LbFnVi3U.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/4-6LbFnVi3U.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="qS0q4RA7b2g">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/qS0q4RA7b2g.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/qS0q4RA7b2g.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/qS0q4RA7b2g.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="_9uLi5PpCpw">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/_9uLi5PpCpw.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/_9uLi5PpCpw.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/_9uLi5PpCpw.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="rJB5-EB2xco">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/rJB5-EB2xco.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/rJB5-EB2xco.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/rJB5-EB2xco.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="boYfnTNhEZs">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/boYfnTNhEZs.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/boYfnTNhEZs.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/boYfnTNhEZs.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex mt-4 d-sm-none justify-content-end">
                <div class="io-pagination">
                    <div class="io-pagination__count">
                        <span class="io-black-main-op-60">Страница</span>
                        <span>3/6</span>
                    </div>
                    <div class="io-pagination__arrows">
                        <button class="io-pagination__prev disabled"></button>
                        <button class="io-pagination__next"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="io-lectors io-section">
        <div class="container-xxl io-container-mw">
            <div class="io-lectors__heading io-flex-between">
                <h2 class="io-heading-2">Педагоги Монтессори центра</h2>
                <div class="io-pagination">
                    <div class="io-pagination__arrows">
                        <button class="io-pagination__prev io-lectors__slider-prev"></button>
                        <button class="io-pagination__next io-lectors__slider-next"></button>
                    </div>
                </div>
            </div>
            <div class="io-hometeachers__slider-wrapper">
                <div id="slider-teachers" class="keen-slider io-hometeachers__slider">
                    <div class="keen-slider__slide io-hometeachers__item">
                        <img src="/wp-content/themes/interschooltemplate/images/teach-stupak.webp" alt="">
                        <div class="io-block">
                            <h3 class="name">Елена Ступак</h3>
                            <p class="skill">Педагог живописи, лепки и скульптуры, компьютерной графики</p>
                        </div>
                    </div>
                    <div class="keen-slider__slide io-hometeachers__item">
                        <img src="https://artstudio.kiev.ua/wp-content/themes/interschooltemplate/images/teach-soroka.webp" alt="">
                        <div class="io-block">
                            <h3 class="name">Владимир Сорока</h3>
                            <p class="skill">Педагог гитары</p>
                        </div>
                    </div>
                    <div class="keen-slider__slide io-hometeachers__item">
                        <img src="https://artstudio.kiev.ua/wp-content/themes/interschooltemplate/images/teach-dimitrova.webp" alt="">
                        <div class="io-block">
                            <h3 class="name">Татьяна Димитрова</h3>
                            <p class="skill">Педагог вокала</p>
                        </div>
                    </div>
                    <div class="keen-slider__slide io-hometeachers__item">
                        <img src="https://artstudio.kiev.ua/wp-content/themes/interschooltemplate/images/teach-mamchich.webp" alt="">
                        <div class="io-block">
                            <h3 class="name">Снежана Мамчич</h3>
                            <p class="skill">Педагог фортепиано</p>
                        </div>
                    </div>
                    <div class="keen-slider__slide io-hometeachers__item">
                        <img src="https://artstudio.kiev.ua/wp-content/themes/interschooltemplate/images/teach-yarmolenko.webp" alt="">
                        <div class="io-block">
                            <h3 class="name">Лилия Ярмоленко</h3>
                            <p class="skill">Педагог английского, русского, украинского, испанского и японского языков</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="io-lectors__director">
                <div class="io-lectors__director-img">
                    <img src="/wp-content/themes/interschooltemplate/images/io-anna.png" alt="">
                </div>
                <div class="io-lectors__director-text">
                    <div class="io-montessori__quote">“</div>
                    <div class="io-text-wrapper">
                        <p>Вы часто слышали выражение “всё зависит от учителя”. Это истина. Композитор Йозеф Гайдн — учитель В. Моцарта, а философ Платон оказал сильное влияние на феномен Аристотеля.<br>
                        Выбор учителя важен настолько, что определяет будущий успех своего ученика. Учитель также формирует у ученика стремление превзойти мастерство своего педагога.<br>
                        Наш коллектив состоит из лучших специалистов, которые годами работают в команде Монтессори центра и искренне отдаются своему делу. Наши учителя — победители международных конкурсов, олимпиад, участники фестивалей, выставок и мастер-классов. Наши педагоги имеют дипломы о высшем образовании по своей специальности.<br>
                        Каждый наш педагог — это Гайдн или Платон для своего ученика. Всё самое лучшее, что мы получили в консерватории и университете — мы передаем нашим студентам.</p>
                        <p>Приходите учиться в Монтессори центр. Буду рада встретиться с Вами!</p>
                        <p class="io-fw-semibold mt-3 mt-sm-0">С уважением и любовью, директор, PhD,<br>
                        <span class="io-pink-main io-fw-semibold io-fs-20">Анна Росенко</span></p>
                    </div>
                </div>
            </div>
            <div class="io-lectors__list mt-5">
                <div class="io-lectors__list-item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2615_5042)">
                        <path d="M23.4682 4.04729L12.2722 0.0472893C12.0954 -0.0151121 11.9026 -0.0151121 11.7258 0.0472893L0.532626 4.04729C0.215377 4.16164 0.00390625 4.46266 0.00390625 4.79989C0.00390625 5.13712 0.215377 5.43813 0.532626 5.55249L6.00063 7.50609V10.0001C6.00063 11.5553 11.3866 11.6001 12.0006 11.6001C12.6146 11.6001 18.0006 11.5553 18.0006 10.0001V7.50609L19.2006 7.08009V8.00009C19.2006 8.44192 19.5588 8.80009 20.0006 8.80009H20.8006C21.2425 8.80009 21.6006 8.44192 21.6006 8.00009V6.80009C21.5994 6.61486 21.5548 6.4325 21.4702 6.26769L23.4702 5.55249C23.7875 5.43813 23.9989 5.13712 23.9989 4.79989C23.9989 4.46266 23.7875 4.16164 23.4702 4.04729H23.4682ZM17.2006 9.12009C15.677 8.42649 12.4666 8.40009 12.0006 8.40009C11.5346 8.40009 8.32423 8.42649 6.80063 9.12009V5.63529C7.04063 5.32729 8.92703 4.80009 12.0006 4.80009C15.0742 4.80009 16.9606 5.32729 17.2006 5.63529V9.12009ZM12.0006 10.8001C9.04063 10.8001 7.18183 10.3113 6.83423 10.0001C7.18183 9.68889 9.04143 9.20009 12.0006 9.20009C14.9598 9.20009 16.8194 9.68889 17.167 10.0001C16.8194 10.3113 14.9606 10.8001 12.0006 10.8001ZM19.3882 6.16209L18.0006 6.65689V5.60009C18.0006 4.04489 12.6146 4.00009 12.0006 4.00009C11.3866 4.00009 6.00063 4.04489 6.00063 5.60009V6.65649L0.800626 4.80009L12.0062 0.800089L20.0006 3.65689V5.67369C19.7477 5.76357 19.5321 5.9355 19.3882 6.16209ZM20.8006 8.00009H20.0006V6.80009C20.0006 6.57918 20.1797 6.40009 20.4006 6.40009C20.6215 6.40009 20.8006 6.57918 20.8006 6.80009V8.00009ZM20.8006 5.65769V3.94289L23.2006 4.80009L20.8006 5.65769Z" fill="black"/>
                        <path d="M22.8 12.3999C22.776 12.3998 22.752 12.402 22.7284 12.4063C19.1793 12.9581 15.5916 13.2235 12 13.1999C8.40837 13.2235 4.82067 12.9581 1.2716 12.4063C1.24794 12.4023 1.224 12.4001 1.2 12.3999C0.92 12.3999 0 12.7171 0 16.7999C0 20.8827 0.92 21.1999 1.2 21.1999C1.22402 21.1994 1.24796 21.197 1.2716 21.1927C3.99868 20.7607 6.75137 20.5098 9.5116 20.4415L8.7308 22.3143C8.61084 22.6142 8.68377 22.9568 8.91546 23.1818C9.14714 23.4069 9.49175 23.4698 9.788 23.3411L10.094 23.2103L10.2264 23.5147C10.3515 23.8099 10.6414 24.0011 10.962 23.9999H10.972C11.295 23.9974 11.5845 23.8003 11.7052 23.5007L12.4 21.8375L13.0924 23.4943C13.2121 23.7967 13.5028 23.9965 13.828 23.9999H13.84C14.1584 24.0012 14.4468 23.8123 14.5728 23.5199L14.7064 23.2131L15.0076 23.3423C15.3051 23.4736 15.6526 23.4111 15.8856 23.1842C16.1187 22.9573 16.1905 22.6116 16.0672 22.3107L15.3016 20.4747C17.7902 20.5628 20.2712 20.8033 22.7304 21.1947C22.7534 21.1985 22.7767 21.2002 22.8 21.1999C23.08 21.1999 24 20.8827 24 16.7999C24 12.7171 23.08 12.3999 22.8 12.3999ZM13.28 13.9879C13.4461 14.5987 13.5429 15.2262 13.5684 15.8587C12.6614 15.437 11.5977 15.5358 10.784 16.1175C10.7635 15.3992 10.6715 14.6847 10.5092 13.9847C10.9937 13.9948 11.4907 13.9999 12 13.9999C12.4372 13.9999 12.8616 13.9951 13.28 13.9879ZM12.4 20.3999C11.2954 20.3999 10.4 19.5045 10.4 18.3999C10.4 17.2953 11.2954 16.3999 12.4 16.3999C13.5046 16.3999 14.4 17.2953 14.4 18.3999C14.3987 19.5039 13.504 20.3986 12.4 20.3999ZM1.2 13.3999C1.50649 14.5061 1.64139 15.6528 1.6 16.7999C1.64139 17.947 1.50649 19.0937 1.2 20.1999C0.893514 19.0937 0.75861 17.947 0.8 16.7999C0.75861 15.6528 0.893514 14.5061 1.2 13.3999ZM2.008 20.2679C2.2268 19.6335 2.4 18.5719 2.4 16.7999C2.4 15.0279 2.2268 13.9663 2.0076 13.3311C4.54944 13.6822 7.10861 13.8935 9.6736 13.9643C9.91352 14.8898 10.0234 15.8441 10 16.7999C10 16.8579 10 16.9131 9.9976 16.9687C9.51759 17.7653 9.46922 18.7496 9.8688 19.5895L9.8512 19.6319C7.22689 19.6962 4.60831 19.9088 2.008 20.2687V20.2679ZM10.9628 23.1999L10.6708 22.5279C10.583 22.3261 10.3487 22.2332 10.1464 22.3199L9.4732 22.6175L10.4112 20.3687C10.7963 20.7589 11.2876 21.0274 11.824 21.1407L10.9628 23.1999ZM14.6536 22.3199C14.4513 22.2332 14.217 22.3261 14.1292 22.5279L13.8332 23.1931L12.9756 21.1399C13.5124 21.0265 14.0041 20.7579 14.3896 20.3675L15.3256 22.6075L14.6536 22.3199ZM22.72 20.3799C20.1501 19.9844 17.5588 19.744 14.96 19.6599L14.9316 19.5911C15.4346 18.5311 15.219 17.2694 14.3924 16.4367C14.3893 15.6072 14.2935 14.7806 14.1068 13.9723C16.9911 13.9077 19.8682 13.6563 22.72 13.2195C22.9056 13.5347 23.2 14.7815 23.2 16.7999C23.2 18.8183 22.9036 20.0647 22.72 20.3799Z" fill="black"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_2615_5042">
                        <rect width="24" height="24" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <p>Каждый наш педагог — специалист с высшим образованием и большим опытом работы с детьми и взрослыми.</p>
                </div>
                <div class="io-lectors__list-item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2615_5058)">
                        <path d="M17.4826 8.34961H8.52344C8.32928 8.34961 8.17188 8.50702 8.17188 8.70117C8.17188 8.89533 8.32928 9.05273 8.52344 9.05273H17.4826C17.6767 9.05273 17.8341 8.89533 17.8341 8.70117C17.8341 8.50702 17.6767 8.34961 17.4826 8.34961Z" fill="black"/>
                        <path d="M17.4826 9.85889H8.52344C8.32928 9.85889 8.17188 10.0163 8.17188 10.2104C8.17188 10.4046 8.32928 10.562 8.52344 10.562H17.4826C17.6767 10.562 17.8341 10.4046 17.8341 10.2104C17.8341 10.0163 17.6767 9.85889 17.4826 9.85889Z" fill="black"/>
                        <path d="M6.90714 5.28582C6.90714 5.47998 7.06455 5.63739 7.2587 5.63739H12.652C13.0392 5.63739 13.3543 5.32234 13.3543 4.93506V3.68031C13.3543 3.29307 13.0392 2.97803 12.652 2.97803H4.46791C4.08067 2.97803 3.76562 3.29307 3.76562 3.68031V4.93511C3.76562 5.32239 4.08067 5.63743 4.46791 5.63743H5.61405C5.8082 5.63743 5.96561 5.48003 5.96561 5.28587C5.96561 5.09171 5.8082 4.93431 5.61405 4.93431L4.46875 4.93511L4.46791 3.68111L12.6512 3.68026L12.652 4.93421H7.2587C7.06455 4.93426 6.90714 5.09167 6.90714 5.28582Z" fill="black"/>
                        <path d="M19.9696 15.612C19.7754 15.612 19.618 15.7695 19.618 15.9636V21.516C19.618 22.498 18.8191 23.2969 17.8372 23.2969H3.76134C2.77936 23.2969 1.98047 22.498 1.98047 21.516V2.484C1.98047 1.50202 2.77936 0.703125 3.76134 0.703125C15.0903 0.712734 14.4632 0.680016 14.6835 0.728672V4.1437C14.6835 4.96744 15.3537 5.63761 16.1775 5.63761H19.5925C19.6088 5.71163 19.618 5.7877 19.618 5.86533V8.87194C19.618 9.06609 19.7754 9.2235 19.9696 9.2235C20.1637 9.2235 20.3212 9.06609 20.3212 8.87194V5.86533C20.3212 5.39784 20.1391 4.95834 19.8086 4.62783L15.6933 0.512578C15.3628 0.182016 14.9233 0 14.4558 0H3.76134C2.39166 0 1.27734 1.11431 1.27734 2.484V21.516C1.27734 22.8857 2.39166 24 3.76134 24H17.8372C19.2069 24 20.3212 22.8857 20.3212 21.516V15.9636C20.3212 15.7695 20.1637 15.612 19.9696 15.612ZM19.1209 4.93448H16.1775C15.7414 4.93448 15.3867 4.57973 15.3867 4.1437V1.20028L19.1209 4.93448Z" fill="black"/>
                        <path d="M6.78794 8.59777C6.78794 8.23745 6.49483 7.94434 6.1345 7.94434H4.41906C4.05873 7.94434 3.76562 8.23745 3.76562 8.59777V10.3132C3.76562 10.6735 4.05873 10.9666 4.41906 10.9666H6.1345C6.49483 10.9666 6.78794 10.6735 6.78794 10.3132V8.59777ZM6.08481 10.2635H4.46875V8.64746H6.08481V10.2635Z" fill="black"/>
                        <path d="M6.78794 12.9728C6.78794 12.6124 6.49483 12.3193 6.1345 12.3193H4.41906C4.05873 12.3193 3.76562 12.6124 3.76562 12.9728V14.6882C3.76562 15.0485 4.05873 15.3416 4.41906 15.3416H6.1345C6.49483 15.3416 6.78794 15.0485 6.78794 14.6882V12.9728ZM6.08481 14.6385H4.46875V13.0225H6.08481V14.6385Z" fill="black"/>
                        <path d="M6.1345 16.6938H4.41906C4.05873 16.6938 3.76562 16.987 3.76562 17.3473V19.0627C3.76562 19.423 4.05873 19.7162 4.41906 19.7162H6.1345C6.49483 19.7162 6.78794 19.423 6.78794 19.0627V17.3473C6.78794 16.987 6.49483 16.6938 6.1345 16.6938ZM6.08481 19.013H4.46875V17.3969H6.08481V19.013Z" fill="black"/>
                        <path d="M22.2523 10.124C21.6273 9.49903 20.6104 9.49903 19.9855 10.124L17.3853 12.7242H8.52344C8.32928 12.7242 8.17188 12.8816 8.17188 13.0757C8.17188 13.2699 8.32928 13.4273 8.52344 13.4273H16.6822L15.876 14.2335H8.52344C8.32928 14.2335 8.17188 14.3909 8.17188 14.5851C8.17188 14.7792 8.32928 14.9366 8.52344 14.9366H15.1729L13.0107 17.0988H8.52344C8.32928 17.0988 8.17188 17.2562 8.17188 17.4504C8.17188 17.6445 8.32928 17.8019 8.52344 17.8019H12.3076L11.5014 18.6082H8.52348C8.32933 18.6082 8.17192 18.7656 8.17192 18.9597C8.17192 19.1539 8.32933 19.3113 8.52348 19.3113H10.8083C10.5916 19.5615 10.4232 19.836 10.3042 20.1449L9.56312 22.0682C9.48128 22.2806 9.53242 22.5219 9.69339 22.6829C9.8552 22.8447 10.0967 22.8946 10.3082 22.8132L12.2313 22.0721C12.6107 21.926 12.946 21.6971 13.2025 21.4405L15.3318 19.3112H17.4826C17.6767 19.3112 17.8341 19.1538 17.8341 18.9597C17.8341 18.7655 17.6767 18.6081 17.4826 18.6081H16.0349L16.8411 17.8019H17.4826C17.6767 17.8019 17.8341 17.6445 17.8341 17.4503C17.8341 17.2755 17.7064 17.1309 17.5393 17.1037L22.2523 12.3907C22.8773 11.7659 22.8773 10.749 22.2523 10.124ZM11.9785 21.4161L10.3219 22.0544L10.9602 20.3978C10.9852 20.333 11.0136 20.2693 11.0451 20.2072L12.1692 21.3313C12.107 21.3628 12.0434 21.3911 11.9785 21.4161ZM12.7405 20.9082L11.4681 19.6358L18.3884 12.7155L19.6608 13.9879L12.7405 20.9082ZM20.158 13.4908L18.8856 12.2183L19.4654 11.6385L20.7378 12.911L20.158 13.4908ZM21.7551 11.8936L21.235 12.4138L19.9625 11.1413L20.4827 10.6212C20.8335 10.2704 21.4043 10.2704 21.7551 10.6212C22.1059 10.972 22.1059 11.5428 21.7551 11.8936Z" fill="black"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_2615_5058">
                        <rect width="24" height="24" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <p>Студенты обучаются по утвержденной школьной программе.</p>
                </div>
                <div class="io-lectors__list-item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2615_5071)">
                        <path d="M22.9125 7.32246H22V6.78185C22 6.6543 21.926 6.53833 21.8105 6.48442C21.3951 6.29083 20.7874 6.17922 20.2824 6.11585C20.1648 5.76025 19.8783 5.48106 19.5182 5.37372V3.48325L19.6639 3.4442C19.9536 3.36653 20.1483 3.11285 20.1483 2.81289C20.1483 2.51294 19.9536 2.25921 19.6638 2.18153L12.4702 0.254033C12.1392 0.165346 11.831 0.165299 11.5 0.254033L4.30644 2.18158C4.0167 2.25925 3.82203 2.51294 3.82203 2.81294C3.82203 3.11294 4.0167 3.36663 4.30648 3.4443L6.84884 4.12553V6.0416C4.8898 5.92717 3.00828 6.10206 2.18802 6.48447C2.07242 6.53838 1.99855 6.65435 1.99855 6.78189V7.3225H1.08594C0.904719 7.3225 0.757812 7.46941 0.757812 7.65063V22.0212C0.757812 22.2024 0.904719 22.3493 1.08594 22.3493H9.19175C9.89412 22.3493 10.4895 22.6131 10.9614 23.1334L11.2942 23.5004C11.4796 23.7047 11.7233 23.8128 11.9992 23.8128C12.2751 23.8128 12.5189 23.7047 12.7042 23.5004L13.0371 23.1334C13.5089 22.6131 14.1043 22.3493 14.8067 22.3493H22.9125C23.0937 22.3493 23.2407 22.2024 23.2407 22.0212V7.65058C23.2407 7.46936 23.0937 7.32246 22.9125 7.32246ZM12.3274 8.97672C14.0007 8.92174 15.5965 8.46391 16.9622 7.64416C17.061 7.58481 17.1214 7.47808 17.1214 7.36281V6.70117C17.4328 6.68186 17.7449 6.66972 18.0554 6.66513C18.0961 6.91024 18.2143 7.12933 18.3842 7.2963L18.2876 7.50391C18.1579 7.78272 18.0974 8.05577 18.0974 8.36331V9.65336C18.0974 10.081 18.4453 10.429 18.873 10.429H19.5648C19.9925 10.429 20.3405 10.081 20.3405 9.65336V8.36331C20.3405 8.05577 20.28 7.78267 20.1503 7.50391L20.0349 7.25599C20.1582 7.12253 20.2502 6.95992 20.2995 6.77978C20.7248 6.83735 21.0828 6.91413 21.3437 7.00385V20.6872C19.2327 20.0953 15.8091 19.7943 12.3273 20.6995V8.97672H12.3274ZM19.4678 7.59264L19.5554 7.78085C19.6458 7.975 19.6843 8.14919 19.6843 8.36336V9.65341C19.6843 9.71814 19.6296 9.7728 19.5649 9.7728H18.8731C18.8084 9.7728 18.7537 9.7181 18.7537 9.65341V8.36336C18.7537 8.14919 18.7923 7.975 18.8826 7.7808L18.9647 7.60441C19.0376 7.61894 19.113 7.62672 19.1901 7.62672C19.2858 7.62672 19.3788 7.61477 19.4678 7.59264ZM19.6843 6.47627C19.6843 6.74875 19.4626 6.97047 19.1901 6.97047C18.9176 6.97047 18.6959 6.7488 18.6959 6.47627C18.6959 6.20374 18.9176 5.98206 19.1901 5.98206C19.4626 5.98206 19.6843 6.20374 19.6843 6.47627ZM18.862 5.37377C18.5391 5.47005 18.2755 5.70442 18.1396 6.00817C17.8012 6.01155 17.4611 6.02303 17.1215 6.04347V4.12553L18.862 3.65917V5.37377ZM11.6698 0.887877C11.8879 0.829471 12.0823 0.829471 12.3003 0.887877L19.4842 2.81294L19.1615 2.89942L12.2435 2.27402C12.0636 2.25827 11.9035 2.39078 11.8872 2.57125C11.8708 2.75177 12.0039 2.91128 12.1844 2.9276L17.3227 3.39208L12.3003 4.73781C12.0823 4.79622 11.8879 4.79622 11.6698 4.73781L4.48597 2.81285L11.6698 0.887877ZM11.5 5.37175C11.6655 5.4161 11.8253 5.43827 11.9851 5.43827C12.145 5.43827 12.3047 5.4161 12.4702 5.37175L16.4652 4.30131V7.17466C15.1431 7.9285 13.5984 8.3261 11.9851 8.3261C10.3719 8.3261 8.82711 7.9285 7.50509 7.17466V4.30131L11.5 5.37175ZM2.65475 7.00338C3.47412 6.71856 5.14517 6.59622 6.84884 6.69897V7.36281C6.84884 7.47803 6.90931 7.58481 7.00808 7.64416C8.38142 8.4685 9.98755 8.9268 11.6711 8.97752V20.6995C8.18933 19.7943 4.76577 20.0954 2.65475 20.6872V7.00338ZM22.5844 21.6931H14.8067C13.924 21.6931 13.144 22.0387 12.551 22.6925L12.2181 23.0595C12.1581 23.1257 12.0886 23.1565 11.9992 23.1565C11.9099 23.1565 11.8404 23.1257 11.7804 23.0595L11.4475 22.6925C10.8545 22.0387 10.0745 21.6931 9.1918 21.6931H1.41406V7.97871H1.9985V21.1294C1.9985 21.2346 2.04894 21.3334 2.13411 21.3951C2.21928 21.4568 2.32887 21.4741 2.42886 21.4412C4.42803 20.7859 8.02302 20.389 11.6711 21.3792V21.9535C11.6711 22.1347 11.818 22.2816 11.9992 22.2816C12.1805 22.2816 12.3274 22.1347 12.3274 21.9535V21.3792C15.9754 20.389 19.5704 20.7859 21.5697 21.4412C21.603 21.4521 21.6375 21.4575 21.6718 21.4575C21.7401 21.4575 21.8077 21.4362 21.8644 21.3951C21.9496 21.3334 22 21.2346 22 21.1294V7.97871H22.5844V21.6931H22.5844ZM13.9793 18.9467C13.9554 18.952 13.9315 18.9545 13.908 18.9545C13.7575 18.9545 13.6219 18.8503 13.5879 18.6974C13.5487 18.5205 13.6603 18.3452 13.8372 18.306C16.0027 17.8257 18.076 17.7756 19.833 18.1611C20.01 18.1999 20.1221 18.3749 20.0832 18.5519C20.0443 18.7288 19.8693 18.841 19.6924 18.802C18.0279 18.4369 16.0524 18.4869 13.9793 18.9467ZM13.5879 16.8632C13.5487 16.6863 13.6603 16.511 13.8372 16.4718C16.0027 15.9915 18.0761 15.9415 19.833 16.3269C20.01 16.3657 20.1221 16.5407 20.0832 16.7177C20.0444 16.8947 19.8693 17.0065 19.6924 16.9679C18.0279 16.6028 16.0524 16.6527 13.9793 17.1124C13.9554 17.1177 13.9315 17.1203 13.908 17.1203C13.7575 17.1203 13.6219 17.0161 13.588 16.8632H13.5879ZM13.5886 15.032C13.5477 14.8555 13.6577 14.6793 13.8342 14.6383C16.0286 14.1297 18.0459 14.0613 19.83 14.435C20.0074 14.4722 20.121 14.6461 20.0839 14.8234C20.0467 15.0008 19.8727 15.1145 19.6955 15.0774C18.0054 14.7234 16.0832 14.7908 13.9824 15.2776C13.9574 15.2834 13.9325 15.2862 13.908 15.2862C13.7588 15.2862 13.6237 15.1837 13.5886 15.032ZM13.5886 13.1396C13.5477 12.963 13.6577 12.7868 13.8342 12.7459C16.0287 12.2373 18.046 12.169 19.83 12.5426C20.0074 12.5798 20.121 12.7537 20.0839 12.931C20.0467 13.1084 19.8729 13.2221 19.6955 13.185C18.0055 12.831 16.0833 12.8984 13.9823 13.3852C13.9574 13.3909 13.9325 13.3938 13.908 13.3938C13.7587 13.3938 13.6237 13.2912 13.5886 13.1396ZM10.0191 18.9467C7.94609 18.4869 5.97055 18.437 4.30606 18.8021C4.12911 18.8411 3.95412 18.729 3.91527 18.5519C3.87641 18.3749 3.98844 18.1999 4.16544 18.1611C5.9225 17.7757 7.99578 17.8257 10.1613 18.306C10.3382 18.3453 10.4498 18.5205 10.4105 18.6974C10.3766 18.8504 10.241 18.9545 10.0905 18.9545C10.067 18.9545 10.0431 18.952 10.0192 18.9467H10.0191ZM10.4098 13.1396C10.3747 13.2912 10.2397 13.3938 10.0905 13.3938C10.066 13.3938 10.041 13.3909 10.0161 13.3852C7.91525 12.8984 5.99305 12.8309 4.30302 13.185C4.12564 13.2222 3.95173 13.1085 3.91456 12.931C3.87744 12.7537 3.99111 12.5798 4.16848 12.5426C5.95255 12.1689 7.96981 12.2373 10.1643 12.7459C10.3408 12.7868 10.4508 12.9631 10.4098 13.1396ZM3.91273 9.13685C3.88072 8.95849 3.99941 8.78796 4.17777 8.75594C4.95992 8.61555 5.80152 8.56169 6.67887 8.59586C6.85995 8.60289 7.00105 8.75542 6.99402 8.9365C6.98698 9.11763 6.83375 9.25942 6.65337 9.25164C5.82317 9.21939 5.02925 9.26988 4.29364 9.40192C4.27405 9.40544 4.25455 9.40713 4.23528 9.40713C4.07947 9.40713 3.94119 9.2957 3.91269 9.13689L3.91273 9.13685ZM3.91456 14.8233C3.87744 14.646 3.99111 14.4721 4.16848 14.4349C5.95264 14.0613 7.96986 14.1297 10.1643 14.6382C10.3408 14.6792 10.4508 14.8555 10.4098 15.0319C10.3747 15.1835 10.2397 15.2861 10.0905 15.2861C10.066 15.2861 10.041 15.2833 10.0161 15.2775C7.91525 14.7906 5.99305 14.7232 4.30302 15.0773C4.12545 15.1145 3.95173 15.0007 3.91456 14.8233ZM3.91456 11.0386C3.87744 10.8612 3.99106 10.6873 4.16848 10.6502C5.95241 10.2765 7.96977 10.3449 10.1643 10.8534C10.3408 10.8943 10.4508 11.0706 10.4098 11.2471C10.3747 11.3987 10.2397 11.5013 10.0905 11.5013C10.066 11.5013 10.041 11.4985 10.0161 11.4927C7.91516 11.0058 5.993 10.9384 4.30302 11.2925C4.12564 11.3298 3.95173 11.216 3.91456 11.0386ZM10.4105 16.8631C10.3766 17.0161 10.241 17.1203 10.0905 17.1203C10.067 17.1203 10.0431 17.1177 10.0192 17.1124C7.94614 16.6526 5.97059 16.6026 4.30611 16.9678C4.12916 17.0064 3.95412 16.8946 3.91531 16.7176C3.8765 16.5406 3.98853 16.3656 4.16548 16.3268C5.92245 15.9414 7.99578 15.9916 10.1613 16.4717C10.3382 16.5109 10.4498 16.6862 10.4105 16.8631Z" fill="black"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_2615_5071">
                        <rect width="24" height="24" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <p>Наши преподаватели работают по эффективным и проверенным методикам, в том числе методикам М. Монтессори, Ш. Сузуки, К. Орфа, С. Риггса, Реджио Эмилия.</p>
                </div>
                <div class="io-lectors__list-item">
                    <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.2727 6.27273H15.2727V2.72727C15.2719 2.00422 14.9842 1.31103 14.473 0.799756C13.9617 0.288481 13.2685 0.000866104 12.5455 0H2.72727C2.00422 0.000866104 1.31103 0.288481 0.799756 0.799756C0.288481 1.31103 0.000866104 2.00422 0 2.72727V9.27273C0.000866104 9.99578 0.288481 10.689 0.799756 11.2002C1.31103 11.7115 2.00422 11.9991 2.72727 12V13.14C2.72687 13.3552 2.7905 13.5656 2.91007 13.7446C3.02964 13.9235 3.19974 14.0628 3.39873 14.1447C3.59859 14.228 3.81869 14.2498 4.03103 14.2076C4.24336 14.1653 4.43832 14.0609 4.59109 13.9075C4.611 13.8883 4.62925 13.8675 4.64564 13.8453L6.00273 12H8.72727V15.5455C8.72814 16.2685 9.01575 16.9617 9.52703 17.473C10.0383 17.9842 10.7315 18.2719 11.4545 18.2727H17.5015L19.4105 20.1818C19.5631 20.3343 19.7575 20.4382 19.9691 20.4803C20.1806 20.5223 20.4 20.5007 20.5993 20.4182C20.7986 20.3356 20.9689 20.1959 21.0888 20.0165C21.2087 19.8371 21.2727 19.6263 21.2727 19.4105V18.2727C21.9958 18.2719 22.689 17.9842 23.2002 17.473C23.7115 16.9617 23.9991 16.2685 24 15.5455V9C23.9991 8.27695 23.7115 7.58376 23.2002 7.07248C22.689 6.56121 21.9958 6.27359 21.2727 6.27273ZM5.72727 10.9091C5.64227 10.9095 5.55855 10.9298 5.48278 10.9684C5.40702 11.0069 5.34132 11.0626 5.29091 11.1311L3.81818 13.1275V11.4545C3.81818 11.3099 3.76071 11.1711 3.65842 11.0689C3.55613 10.9666 3.41739 10.9091 3.27273 10.9091H2.72727C2.29328 10.9091 1.87707 10.7367 1.57019 10.4298C1.26331 10.1229 1.09091 9.70672 1.09091 9.27273V2.72727C1.09091 2.29328 1.26331 1.87707 1.57019 1.57019C1.87707 1.26331 2.29328 1.09091 2.72727 1.09091H12.5455C12.9794 1.09091 13.3957 1.26331 13.7025 1.57019C14.0094 1.87707 14.1818 2.29328 14.1818 2.72727V6.27273H11.4545C10.8742 6.27445 10.3099 6.46282 9.84491 6.81L8.13273 3.04636C8.08934 2.95113 8.01947 2.87039 7.93146 2.81378C7.84345 2.75716 7.74101 2.72706 7.63636 2.72706C7.53172 2.72706 7.42928 2.75716 7.34127 2.81378C7.25325 2.87039 7.18339 2.95113 7.14 3.04636L4.41273 9.04636C4.38316 9.11168 4.36676 9.18219 4.36447 9.25385C4.36218 9.32551 4.37403 9.39692 4.39936 9.464C4.4247 9.53107 4.463 9.5925 4.51209 9.64475C4.56118 9.69701 4.62009 9.73908 4.68545 9.76855C4.75555 9.80103 4.83184 9.81796 4.90909 9.81818C5.01378 9.81815 5.11624 9.788 5.20426 9.73132C5.29227 9.67465 5.36212 9.59384 5.40545 9.49855L6.252 7.63636H9.02182L9.06055 7.72091C8.84496 8.11298 8.73042 8.55258 8.72727 9V10.9091H5.72727ZM8.526 6.54545H6.74782L7.63636 4.59055L8.526 6.54545ZM22.9091 15.5455C22.9091 15.9794 22.7367 16.3957 22.4298 16.7025C22.1229 17.0094 21.7067 17.1818 21.2727 17.1818H20.7273C20.5826 17.1818 20.4439 17.2393 20.3416 17.3416C20.2393 17.4439 20.1818 17.5826 20.1818 17.7273V19.4105L18.1129 17.3416C18.0106 17.2393 17.8719 17.1819 17.7273 17.1818H11.4545C11.0206 17.1818 10.6043 17.0094 10.2975 16.7025C9.99058 16.3957 9.81818 15.9794 9.81818 15.5455V9C9.81818 8.56601 9.99058 8.14979 10.2975 7.84292C10.6043 7.53604 11.0206 7.36364 11.4545 7.36364H21.2727C21.7067 7.36364 22.1229 7.53604 22.4298 7.84292C22.7367 8.14979 22.9091 8.56601 22.9091 9V15.5455Z" fill="black"/>
                        <path d="M19.0898 10.3634H16.908V9.27251C16.908 9.12784 16.8506 8.9891 16.7483 8.88681C16.646 8.78452 16.5072 8.72705 16.3626 8.72705C16.2179 8.72705 16.0792 8.78452 15.9769 8.88681C15.8746 8.9891 15.8171 9.12784 15.8171 9.27251V10.3634H13.6353C13.4906 10.3634 13.3519 10.4209 13.2496 10.5232C13.1473 10.6255 13.0898 10.7642 13.0898 10.9089C13.0898 11.0535 13.1473 11.1923 13.2496 11.2946C13.3519 11.3969 13.4906 11.4543 13.6353 11.4543H17.6826C17.549 12.381 17.0777 13.2256 16.3593 13.826C15.9397 13.4755 15.6005 13.0386 15.3649 12.5452C15.3353 12.4788 15.2927 12.4191 15.2396 12.3694C15.1865 12.3197 15.124 12.2811 15.0558 12.256C14.9876 12.2308 14.915 12.2195 14.8424 12.2228C14.7698 12.226 14.6985 12.2438 14.6328 12.275C14.5672 12.3062 14.5084 12.3502 14.46 12.4045C14.4116 12.4587 14.3745 12.5221 14.3509 12.5908C14.3273 12.6596 14.3178 12.7324 14.3227 12.805C14.3277 12.8775 14.3471 12.9483 14.3798 13.0132C14.6333 13.5388 14.9798 14.0141 15.4026 14.4161C14.9178 14.6226 14.3962 14.7284 13.8693 14.7271C13.7986 14.7274 13.7288 14.7419 13.6638 14.7696C13.5989 14.7974 13.5401 14.8379 13.491 14.8887C13.442 14.9396 13.4036 14.9997 13.3782 15.0656C13.3527 15.1315 13.3407 15.2019 13.3429 15.2725C13.3473 15.4192 13.4089 15.5583 13.5145 15.6602C13.6201 15.7621 13.7613 15.8187 13.908 15.818C14.7749 15.8176 15.626 15.586 16.3735 15.1471C17.1279 15.5842 17.9839 15.8156 18.8558 15.818C18.9265 15.8176 18.9964 15.8032 19.0613 15.7754C19.1263 15.7476 19.185 15.7071 19.2341 15.6563C19.2832 15.6054 19.3215 15.5453 19.347 15.4794C19.3724 15.4135 19.3844 15.3431 19.3822 15.2725C19.3778 15.1258 19.3162 14.9867 19.2107 14.8848C19.1051 14.7829 18.9639 14.7263 18.8171 14.7271C18.3068 14.7251 17.8022 14.6201 17.3335 14.4183C18.146 13.6282 18.659 12.5806 18.7849 11.4543H19.0898C19.2345 11.4543 19.3732 11.3969 19.4755 11.2946C19.5778 11.1923 19.6353 11.0535 19.6353 10.9089C19.6353 10.7642 19.5778 10.6255 19.4755 10.5232C19.3732 10.4209 19.2345 10.3634 19.0898 10.3634Z" fill="#7A61FF"/>
                    </svg>
                    <p>Мы преподаем на нескольких языках, в том числе на английском, русском и украинском.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="io-contest io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-contest__heading io-heading-2">Наши конкурсы, выставки и музыкальная олимпиада</h2>
            <div class="io-contest__grid">
                <div class="io-contest__main-block io-block io-block--purple">
                    <img src="/wp-content/themes/interschooltemplate/images/io-contest.svg" alt="">
                    <div class="io-text-wrapper">
                        <p><b>Монтессори центр</b> — учредитель и организатор ряда международных онлайн конкурсов, выставок и музыкальной олимпиады, в которых соревнуются наши студенты и учащиеся других учебных заведений.</p>
                        <p>Для студентов Монтессори центра участие и победа в соревнованиях дает возможность продемонстрировать и закрепить свои успехи в учебе и двигаться к новым достижениям!</p>
                    </div>
                </div>
                <a href="https://vocal.ua/" target="_blank" class="io-contest__block io-block">
                    <img src="/wp-content/themes/interschooltemplate/images/cnr-vocal.webp" alt="">
                    <p>Вокальный конкурс “VOCAL.UA” предоставляет площадку для соревнования студентам вокальных специальностей музыкальных учебных заведений.</p>
                </a>
                <a href="https://piano.ua/" target="_blank" class="io-contest__block io-block">
                    <img src="/wp-content/themes/interschooltemplate/images/cnr-piano.webp" alt="">
                    <p>Международный конкурс имени С. С. Прокофьева учрежден Монтессори центром совместно с Национальной музыкальной академией Украины имени П.И. Чайковского. В конкурсе принимают участие талантливые пианисты и дирижеры из различных стран мира.</p>
                </a>
                <a href="https://childopenart.com/" target="_blank" class="io-contest__block io-block">
                    <img src="/wp-content/themes/interschooltemplate/images/cnr-chopart.webp" alt="">
                    <p>Конкурс изобразительного искусства “ChildOpenArt.com” проводится в Монтессори центре каждый месяц. Онлайн выставка конкурса уже насчитывает около более 15 тысяч картин, выполненных нашими учениками на протяжении десяти лет!</p>
                </a>
                <a href="https://holoskrainy.ua/" target="_blank" class="io-contest__block io-block">
                    <img src="/wp-content/themes/interschooltemplate/images/cnr-holos.webp" alt="">
                    <p>Музыкальная олимпиада — одно из крупнейших музыкальных соревнований, в рамках которого проходят: Инструментальный олимпийский конкурс, Вокальный олимпийский конкурс, Хоровая олимпиада, Олимпийский конкурс «С оркестром», Олимпийский конкурс композиторов, Олимпийский конкурс дирижеров и Музыкально-теоретическая олимпиада.</p>
                </a>
                <a href="https://mystetstvo.org/" target="_blank" class="io-contest__block io-block">
                    <img src="/wp-content/themes/interschooltemplate/images/cnr-mstz-lg.webp" alt="">
                    <p>Конкурс изобразительного искусства “МИСТЕЦТВО” стал престижной и крупнейшей выставкой работ молодых художников, дизайнеров и скульпторов, в которой соревнуются работы из более чем ста учебных заведений.</p>
                </a>
                <a href="https://petitpas.dance/" target="_blank" class="io-contest__block io-block">
                    <img src="/wp-content/themes/interschooltemplate/images/cnr-petipa.webp" alt="">
                    <p>Фестиваль танца “Пети-Па” объединяет наших учащихся хореографического отделения Монтессори центра.</p>
                </a>
            </div>
        </div>
    </section>

    <section class="io-about-read io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-about-read__heading io-heading-2">О Монтессори центре</h2>
            <div class="io-sidebar io-legal__sidebar">
                <div class="io-sidebar__sticky">
                    <div class="io-sidebar__inner io-sidebar__inner--unset">
                        <div class="io-legal__sidebar-block io-block-shadow">
                            <h2 class="io-sidebar__title io-heading-2">Содержание</h2>
                            <ul class="io-sidebar__list">
                                <li><a class="io-click-open" href="#io-about-text-h3-1">Живопись</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-10">Компьютерная графика</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-2">Фортепиано</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-4">Вокал</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-5">Классическая гитара</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-11">Флейта</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-13">Скрипка</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-14">Барабаны</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-15">Саксофон</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-3">Английский язык</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-6">Русский язык</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-7">Украинский язык</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-8">Испанский язык</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-12">Современные танцы</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-9">Математика</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-16">Уроки логопеда</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="io-sidebar__content">
                    <div class="io-text-wrapper io-about-read__text-wrapper">
                        <p>В Монтессори центре разработано более 30 учебных программ курсов, по которым идет онлайн обучение для детей и взрослых. Курсы предполагают индивидуальные или групповые дистанционные уроки. Расписание уроков согласовывается с каждым студентом. Наши студенты и педагоги учатся и работают в разных странах мира, поэтому при создании расписания мы учитываем часовые пояса учителя и ученика.</p>
                        <p>Очень важным положительным фактором при обучении в Монтессори центре является то, что наши педагоги обсуждают и впоследствии работают над индивидуальной задачей каждого ученика: не каждый студент мечтает стать выдающимся оперным певцом, но у каждого есть своя цель - научиться исполнять любимое музыкальное произведение, свободно общаться на иностранном языке или сдать сложный экзамен по математике.</p>
                        <p>Наши уроки - это не записи видео-курсов и не скучные лекции преподавателей. Мы предлагаем вам живое, динамичное и эмоциональное общение с учителем, которое увлечет вас в атмосферу живого обучения, даже если вы находитесь за тысячи километров от нашей школы. Современные технологии, высококачественные камеры и гаджеты, а также опыт и профессионализм наших преподавателей, делают обучение эффективным и увлекательным.</p>
                        <p>В Монтессори центре проходят онлайн уроки по таким курсам: живопись, лепка и скульптура, мультипликация, компьютерная графика, иностранные языки (в том числе английский, немецкий, испанский, русский, украинский, японский), фортепиано, вокал, классическая гитара, электрогитара, бас-гитара, укулеле, барабаны, флейта, блокфлейта, скрипка, саксофон, виолончель, раннее музыкальное развитие, курсы кроя и шитья, балет, современные танцы, йога, уроки логопеда и предметы средней школы, в том числе математика, алгебра, геометрия и химия.</p>                       
                        <h3 id="io-about-text-h3-1">Живопись</h3>
                        <p>Курс “Живопись” разработан для детей от 5 лет и старше, а также для взрослых без ограничений в возрасте Уроки рисования - одни из самых популярных курсов среди школьников. Уроки живописи онлайн ведут практикующие молодые художники. Наши педагоги сопровождают каждого ученика, как на индивидуальных, так и на групповых уроках. Групповые онлайн уроки рисования проходят в небольших группах по 4 - 5 человек. Здесь ученики приобретают новых друзей по интересам, наблюдают за творчеством и успехами друг друга, что также помогает эффективно овладевать навыками в изобразительном искусстве.</p>
                        <p>Индивидуальные уроки живописи также позволяют детям и взрослым глубже освоить различные техники: от графики до масляной и акварельной живописи. Такие занятия предоставляют уникальную возможность быстро и эффективно научиться создавать натюрморты, рисовать пейзажи и осваивать сложные навыки рисования портретов.</p>
                        <div class="io-show-button io-show-button--desktop">
                            <a onclick="showHiddenBlock(this)" class="io-link io-link--purple ">
                                Читать далее
                            </a>
                        </div>
                        <div class="io-hidden io-hidden--desktop"> 
                            <h3 id="io-about-text-h3-10">Компьютерная графика</h3>
                            <p>Курс “Компьютерная графика” стал популярным среди молодежи. Цифровая иллюстрация и анимация в настоящее время находятся в тренде, а умение создавать на графическом планшете свои авторские аниме и фантастических героев стало отличным творческим хобби среди школьников. Чтобы записаться на курсы компьютерной графики онлайн нужно иметь планшет (обычный или графический), а также стилус (специальный карандаш для рисования на планшете). </p>
                            <h3 id="io-about-text-h3-2">Фортепиано</h3>
                            <p>Курс “Фортепиано” создан нашими методистами с учётом возрастных категорий и уровней сложности музыкальных произведений. Наша методика обучения игры на фортепиано разработана для детей от 5 лет и для взрослых без возрастных ограничений. Уроки фортепиано онлайн являются одними из самых популярных в нашей школе. Уроки игры на фортепиано проходят только индивидуально. Наши учителя - молодые действующие пианисты, которые прекрасно играют на инструменте и могут вдохновить к занятиям любого, даже самого требовательного ученика. На первых уроках фортепиано с нуля вы познакомитесь с основами нотной грамоты, научитесь правильно держать руки, начнете играть простые мелодии. Всё, что вам нужно иметь дома - это, конечно же, инструмент - фортепиано, электропианино или синтезатор, всё подойдет!</p>
                            <h3 id="io-about-text-h3-4">Вокал</h3>
                            <p>Курс “Вокал” разработан нами для возрастных категорий 5 - 6 лет, 7 - 12 лет, 13 - 16 лет, 17 лет и старше. Онлайн уроки вокала для детей и взрослых проходят индивидуально. Если вы любите петь и мечтаете выучить любимые песни - поспешите записаться на пробный урок вокала онлайн. Уроки пения дают невероятный заряд энергии и хорошего настроения. Ведь не зря говорят, что когда всё хорошо, то “душа поёт”!</p>
                            <h3 id="io-about-text-h3-5">Классическая гитара</h3>
                            <p>Курс “Классическая гитара” предполагает индивидуальное обучение. Уроки игры на гитаре объединяют классическую гитару, электрогитару, бас-гитару и укулеле. Наши педагоги владеют методами преподавания на всех видах гитар. Многие годы одним из самых популярных музыкальных инструментов является классическая гитара, на ней мечтают научиться играть и мальчишки, и девчонки, а также взрослые люди. На уроках гитары онлайн вы в полной мере ощутите удовольствие от того, что уже на первых уроках будете извлекать звуки, заниматься постановкой рук и достигать результатов достаточно быстро!</p>
                            <h3 id="io-about-text-h3-11">Флейта</h3>
                            <p>Курс “Флейта” разработан для детей от 9 лет и старше. Для детей от 5 до 9 лет лучше всего подойдет курс “Блокфлейта”. Уроки флейты и блокфлейты проводит наш талантливый учитель, действующий музыкант и артист оркестра. Для детей дошкольного возраста мы рекомендуем уроки на блокфлейте - это небольшая дудочка с отверстиями, все вы ее когда-либо видели и многие даже пробовали на ней играть. Флейта, как инструмент, достаточно большая по размеру и играть на ней могут начинать учиться дети постарше - примерно от 9 - 10 лет, когда и размер рук, и сила в легких позволяют извлекать звуки и исполнять простые мелодии.</p>
                            <h3 id="io-about-text-h3-13">Скрипка</h3>
                            <p>Курс “Скрипка” создан в Монтессори центре с учетом возраста ученика и уровней сложности музыкального педагогического материала. Уроки скрипки онлайн проходят только индивидуально. Конечно, играть на скрипке непросто, но момент, когда вы выучите и исполните первое произведение - вы не забудете никогда, настолько он будет ярким! Как правильно держать скрипку и смычок, как извлекать звуки на скрипке - всё это покажет и расскажет учитель уже на ваших первых онлайн уроках скрипки!</p>
                            <h3 id="io-about-text-h3-14">Барабаны</h3>
                            <p>Курс “Барабаны” проходит только индивидуально. Уроки барабанов онлайн очень популярны среди подростков. Для уроков ударных онлайн вам необходимо дома иметь барабанную установку (акустическую или электронную) или просто тренировочный пэд и барабанные палочки. Выучить длительности, понять и разобраться с метроритмом поначалу может показаться сложной задачей, но для подростка потребуется всего месяц или два, чтобы начать правильно отбивать простые ритмы и исполнять под “минус” любимую композицию.</p>
                            <h3 id="io-about-text-h3-15">Саксофон</h3>
                            <p>Курс “Саксофон” разработан для детей от 9 лет и старше. Также на саксофоне никогда не поздно начинать учиться и взрослым, наш курс игры на саксофоне включает в себя музыкальный методический материал с учетом того, что могут учиться и взрослые, и дети. Уроки саксофона онлайн очень эффективны. Вы сможете заниматься саксофоном дома, между уроками выполнять советы, задания и рекомендации нашего педагога и прогресс будет достаточно быстрым: вы сначала научитесь играть отдельные ноты, а потом - и мелодии. Остается только лишь купить или взять в аренду саксофон!</p>
                            <h3 id="io-about-text-h3-3">Английский язык</h3>
                            <p>Курс “Английский язык” предназначен для детей от 5 лет, а также для взрослых. Уроки английского языка онлайн проходят индивидуально или в небольших группах по 2 - 3 человека одного возраста и уровня подготовки. На первом уроке педагог обязательно тестирует ученика, чтобы определить его уровень знаний. Если учится ребенок, то педагог вместе с родителями определяет главную и промежуточные цели процесса обучения. Методические и учебные материалы полностью предоставляет школа. Если ученику нужно подготовиться к собеседованию в посольстве, экзамену в школе, выучить язык для получения новой работы в какой-либо стране, то педагог адаптирует программу в соответствии с индивидуальными задачами ученика.</p>
                            <h3 id="io-about-text-h3-6">Русский язык</h3>
                            <p>Курс “Русский язык” рассчитан на студентов от 4 лет и старше. Уроки русского языка как иностранного пользуются популярностью во всём мире. Если ваш ребенок родился или растет в другой стране и вы хотите, чтобы он не забывал русский язык - то занятия русским языком онлайн, даже один раз в неделю, позволит ребенку оставаться в форме, правильно строить свою речь, обогащать словарный запас, учиться читать и писать. Кроме работы на уроке, учитель дает домашнее задание, что тоже мотивирует ученика заниматься и совершенствовать знания.</p>
                            <h3 id="io-about-text-h3-7">Украинский язык</h3>
                            <p>Курс “Украинский язык” преподают носители, профессиональные филологи с высшим образованием. Педагогический опыт наших учителей украинского языка - от 3 и более лет. Непрерывная практика преподавания детям и взрослым, отслеживание новейших учебников и методический материалов, всё это дает конкурентные преимущества нашим учителям. Уроки украинского языка дистанционно - это не только изучение правил и практика разговорного, но и знакомство с культурой и традициями страны.</p>
                            <h3 id="io-about-text-h3-8">Испанский язык</h3>
                            <p>Курс “Испанский язык” разработан для детей от 5 лет и старше, а также для взрослых без ограничений в возрасте. Уроки испанского по Zoom и Google Meet популярны среди студентов, проживающих в США. Наши уроки испанского онлайн проходят на русском, украинском или английском языке. Индивидуальные уроки испанского проходят для студентов разного уровня подготовки. Учебники и методические материалы подбираются индивидуально в зависимости от цели обучения: акцент на разговорный или грамматику, обучение с нуля или для продвинутых учеников - всё это учитывается при выборе учебного плана для каждого нашего студента.</p>
                            <h3 id="io-about-text-h3-12">Современные танцы</h3>
                            <p>Курс “Современные танцы” проходит онлайн с нашим замечательным тренером, участницей и победительницей хореографических конкурсов и фестивалей. Уроки хореографии онлайн проходят индивидуально или в небольших группах. Взрослые, как правило, предпочитают индивидуальные уроки балета и современных танцев, а детям интереснее заниматься в группах сверстников. Совместные тренировки - это интересно и увлекательно: вместе делать растяжки, разминки, учить танцевальные связки и потом танцевать - это такое удовольствие!</p>
                            <h3 id="io-about-text-h3-9">Математика</h3>
                            <p>Курс “Математика” предполагает индивидуальные уроки математики онлайн, которые проводит наш профессиональный педагог с высшим педагогическим образованием и опытом работы более 10 лет. Родители школьников часто обращаются к нашему учителю математики с такими просьбами, как подтянуть школьные оценки, улучшить и систематизировать знания предмета, подготовить к выпускному или вступительному экзамену. Всё это успешно достигается на уроках математики по Zoom с нашим педагогом.</p>
                            <h3 id="io-about-text-h3-16">Уроки логопеда</h3>
                            <p>Курс “Уроки логопеда” могут проходить как дети, так и взрослые. Уроки с логопедом онлайн в Монтессори центре - это отличный способ исправить дефекты речи, поправить произношение, не тратя время на дорогу и имея возможность гибкого индивидуального графика. Наш специалист быстро и профессионально определит цели, обсудит их с родителями и после каждого урока будет давать рекомендации для домашних упражнений. Наш логопед работает индивидуально с каждым по Zoom или Google Meet.</p>
                            <p>Онлайн уроки искусства, иностранных языков, хореографии, математики и многого другого стали сегодня обязательной частью образования большой части детей планеты. Стремительная скорость развития прогресса и бесконечные просторы информации требуют от детей широкого круга знаний и интересов.</p>
                            <p>В Монтессори центре предложен большой выбор курсов, что очень облегчает тайм-менеджмент родителей и детей, позволяя в одном учебном учреждении изучать целый комплекс дисциплин!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
    <section class="io-about-hero io-section-first">
        <div class="container-xxl io-container-mw">
            <h1 class="io-about-hero__heading io-heading-2">International <span class="io-ff-nunito io-green-main">online</span> school Montessori Center</h1>
            <div class="io-about-hero__img">
                <img src="/wp-content/themes/interschooltemplate/images/io-about.svg" alt="">
            </div>
        </div>
        <div class="io-about-hero__grid">
            <div class="container-xxl io-container-mw">
                <div class="io-about-hero__item">
                    <span class="io-about-hero__item-top" id="ioHowOld">12</span>
                    <span class="io-about-hero__item-bottom">years of our school</span>
                </div>
                <div class="io-about-hero__item">
                    <span class="io-about-hero__item-top">Over 9000</span>
                    <span class="io-about-hero__item-bottom">students we have educated</span>
                </div>
                <div class="io-about-hero__item">
                    <span class="io-about-hero__item-top">17%</span>
                    <span class="io-about-hero__item-bottom">of our students are adults</span>
                </div>
            </div>
        </div>
    </section>

    <section class="io-about io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-about__heading io-heading-2">About Us</h2>
            <div class="io-about__grid">
                <div class="io-about__data io-text-wrapper">
                    <p>We established the Montessori Center in <b class="io-fw-semibold">2011</b> for online learning in music, fine arts, dance, foreign languages, and middle school subjects. We educate children from the age of 3 and adults from all continents. Over <b class="io-fw-semibold">9000</b> students have been trained in the Montessori Center.</p>
                    <p>Online lessons take place individually or in groups, depending on the students' preferences. Small online groups are a great way to learn a foreign language or learn to draw, while individual online lessons are effective for vocal training, playing musical instruments, and much more.</p>
                    <p>Our teachers are specialists with higher university or conservatory education and extensive work experience.<br>During the training, students perform tests and practical exercises, participating in our vocal and instrumental competitions, olympiads, and exhibitions.</p>
                    <p><b class="io-purple-main io-fs-18 io-fw-semibold">Study at our online school on a convenient schedule from anywhere in the world!</b></p>
                </div>
                <div class="io-about__img">
                    <img src="/wp-content/uploads/2024/04/school-life-219-1.webp" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="io-section io-about-gallery">
        <div class="container-xxl io-container-mw">
            <h2 class="io-heading-2 io-about-gallery__heading">Gallery</h2>
            <div class="io-about-gallery__pagination io-flex-between">
                <ul class="nav nav-pills io-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-photo-tab" data-bs-toggle="pill" data-bs-target="#pills-photo" type="button" role="tab" aria-controls="pills-photo" aria-selected="true"><span>Photo</span> <span class="io-fw-bold">36</span></button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-video-tab" data-bs-toggle="pill" data-bs-target="#pills-video" type="button" role="tab" aria-controls="pills-video" aria-selected="false"><span>Video</span> <span class="io-fw-bold">24</span></button>
                    </li>
                </ul>
                <div class="io-pagination d-none d-sm-flex">
                    <div class="io-pagination__count">
                        <span class="io-black-main-op-60">Page</span>
                        <span>3/6</span>
                    </div>
                    <div class="io-pagination__arrows">
                        <button class="io-pagination__prev disabled"></button>
                        <button class="io-pagination__next"></button>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-photo" role="tabpanel" aria-labelledby="pills-photo-tab">
                    <div class="io-gallery">
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-1.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-1.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-1.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                View
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-2.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-2.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-2.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                View
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-3.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-3.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-3.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                View
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-4.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-4.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-4.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                View
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-5.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-5.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-5.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                View
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-6.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-6.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-6.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                View
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-7.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-7.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-7.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                View
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-8.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-8.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-8.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                View
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-9.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-9.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-9.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                View
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-10.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-10.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-10.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                View
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-11.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-11.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-11.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                View
                            </button>
                        </div>
                        <div class="io-gallery__item io-lb-gallery__item show">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-12.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/io-gallery-12.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/io-gallery-12.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-button__link io-rating__link">
                                View
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                    <div class="io-gallery io-gallery--video">
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="WdE-uakv4Og">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/WdE-uakv4Og.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/WdE-uakv4Og.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/WdE-uakv4Og.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="8WpGo5wR958">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/8WpGo5wR958.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/8WpGo5wR958.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/8WpGo5wR958.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="ULjFfwIDsEU">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/ULjFfwIDsEU.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/ULjFfwIDsEU.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/ULjFfwIDsEU.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="0OBHTBmw7XE">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/0OBHTBmw7XE.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/0OBHTBmw7XE.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/0OBHTBmw7XE.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="vaZbPJYEOAs">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/vaZbPJYEOAs.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/vaZbPJYEOAs.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/vaZbPJYEOAs.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="veVAq-1To3c">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/veVAq-1To3c.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/veVAq-1To3c.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/veVAq-1To3c.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="l3Ez6EKZr5M">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/l3Ez6EKZr5M.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/l3Ez6EKZr5M.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/l3Ez6EKZr5M.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="4-6LbFnVi3U">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/4-6LbFnVi3U.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/4-6LbFnVi3U.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/4-6LbFnVi3U.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="qS0q4RA7b2g">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/qS0q4RA7b2g.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/qS0q4RA7b2g.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/qS0q4RA7b2g.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="_9uLi5PpCpw">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/_9uLi5PpCpw.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/_9uLi5PpCpw.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/_9uLi5PpCpw.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="rJB5-EB2xco">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/rJB5-EB2xco.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/rJB5-EB2xco.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/rJB5-EB2xco.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="boYfnTNhEZs">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/boYfnTNhEZs.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/boYfnTNhEZs.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/boYfnTNhEZs.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="Ne5NaOGBkQc">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/Ne5NaOGBkQc.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/Ne5NaOGBkQc.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/Ne5NaOGBkQc.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="ajA3XagAeO0">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/ajA3XagAeO0.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/ajA3XagAeO0.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/ajA3XagAeO0.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="QtK6OfserOs">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/QtK6OfserOs.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/QtK6OfserOs.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/QtK6OfserOs.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="QyrXMSdIHuY">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/QyrXMSdIHuY.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/QyrXMSdIHuY.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/QyrXMSdIHuY.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="py67EJgbfmk">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/py67EJgbfmk.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/py67EJgbfmk.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/py67EJgbfmk.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="hAvQ9RleFP8">
                            
                            <picture>
                                <source srcset="/wp-content/themes/interschooltemplate/images/hAvQ9RleFP8.webp" type="image/webp">
                                <source srcset="/wp-content/themes/interschooltemplate/images/hAvQ9RleFP8.jpg" type="image/jpeg">
                                <img src="/wp-content/themes/interschooltemplate/images/hAvQ9RleFP8.jpg" alt="">
                            </picture>
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="L9W7lTn0HB8">
                            
                            <img src="/wp-content/themes/interschooltemplate/images/L9W7lTn0HB8.jpg" alt="">
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="DsLuEAmvJUg">
                            
                            <img src="/wp-content/themes/interschooltemplate/images/DsLuEAmvJUg.jpg" alt="">
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                        <div class="io-gallery__item io-video__lightbox show" type="button" data-video-id="CXvxC07YF2A">
                            
                            <img src="/wp-content/themes/interschooltemplate/images/CXvxC07YF2A.jpg" alt="">
                            <button class="io-gallery__item-button io-video__button"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex mt-4 d-sm-none">
                <div class="io-pagination">
                    <div class="io-pagination__count">
                        <span class="io-black-main-op-60">Page</span>
                        <span>3/6</span>
                    </div>
                    <div class="io-pagination__arrows">
                        <button class="io-pagination__prev disabled"></button>
                        <button class="io-pagination__next"></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="io-lectors io-section">
        <div class="container-xxl io-container-mw">
        <div class="io-lectors__heading io-flex-between">
                <h2 class="io-heading-2">Montessori Center Teachers</h2>
                <div class="io-pagination">
                    <div class="io-pagination__arrows">
                        <button class="io-pagination__prev io-lectors__slider-prev"></button>
                        <button class="io-pagination__next io-lectors__slider-next"></button>
                    </div>
                </div>
            </div>
            <div class="io-hometeachers__slider-wrapper">
                <div id="slider-teachers" class="keen-slider io-hometeachers__slider">
                    <div class="keen-slider__slide io-hometeachers__item">
                        <img src="/wp-content/themes/interschooltemplate/images/teach-stupak.webp" alt="">
                        <div class="io-block">
                            <h3 class="name">Elena Stupak</h3>
                            <p class="skill">Art, Sculpture, and Computer Graphics Teacher</p>
                        </div>
                    </div>
                    <div class="keen-slider__slide io-hometeachers__item">
                        <img src="https://artstudio.kiev.ua/wp-content/themes/interschooltemplate/images/teach-soroka.webp" alt="">
                        <div class="io-block">
                            <h3 class="name">Vladimir Soroka</h3>
                            <p class="skill">Guitar Teacher</p>
                        </div>
                    </div>
                    <div class="keen-slider__slide io-hometeachers__item">
                        <img src="https://artstudio.kiev.ua/wp-content/themes/interschooltemplate/images/teach-dimitrova.webp" alt="">
                        <div class="io-block">
                            <h3 class="name">Tatyana Dimitrova</h3>
                            <p class="skill">Vocal Coach</p>
                        </div>
                    </div>
                    <div class="keen-slider__slide io-hometeachers__item">
                        <img src="https://artstudio.kiev.ua/wp-content/themes/interschooltemplate/images/teach-mamchich.webp" alt="">
                        <div class="io-block">
                            <h3 class="name">Snezhana Mamchich</h3>
                            <p class="skill">Piano Teacher</p>
                        </div>
                    </div>
                    <div class="keen-slider__slide io-hometeachers__item">
                        <img src="https://artstudio.kiev.ua/wp-content/themes/interschooltemplate/images/teach-yarmolenko.webp" alt="">
                        <div class="io-block">
                            <h3 class="name">Lilia Yarmolenko</h3>
                            <p class="skill">English, Russian, Ukrainian, Spanish, and Japanese Languages Teacher</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="io-lectors__director">
                <div class="io-lectors__director-img">
                    <img src="/wp-content/themes/interschooltemplate/images/io-anna.png" alt="">
                </div>
                <div class="io-lectors__director-text">
                    <div class="io-montessori__quote">“</div>
                    <div class="io-text-wrapper">
                        <p>You have often heard the expression "everything depends on the teacher." It is true. Composer Joseph Haydn was a teacher to W. Mozart, and philosopher Plato had a strong influence on the phenomenon of Aristotle.<br>
                        The choice of a teacher is crucial as it determines the future success of their students. A teacher also instills in their students the aspiration to surpass the mastery of their educator.<br>
                        Our team consists of the best specialists who have been working together at the Montessori Center for years, wholeheartedly dedicated to their work. Our teachers are winners of international competitions and Olympiads, participants in festivals, exhibitions, and masterclasses. Our educators hold diplomas of higher education in their respective fields.<br>
                        Each of our educators is like a Haydn or Plato to their students. We pass on to our students the very best that we have received at the conservatory and university.</p>
                        <p>Come and study at the Montessori Center. I would be delighted to meet you!</p>
                        <p class="io-fw-semibold">With respect and love,<br>
                        <span class="io-pink-main io-fw-semibold io-fs-20">Director, PhD, Anna Rosenko</span></p>
                    </div>
                </div>
            </div>
            <div class="io-lectors__list mt-5">
                <div class="io-lectors__list-item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2615_5042)">
                        <path d="M23.4682 4.04729L12.2722 0.0472893C12.0954 -0.0151121 11.9026 -0.0151121 11.7258 0.0472893L0.532626 4.04729C0.215377 4.16164 0.00390625 4.46266 0.00390625 4.79989C0.00390625 5.13712 0.215377 5.43813 0.532626 5.55249L6.00063 7.50609V10.0001C6.00063 11.5553 11.3866 11.6001 12.0006 11.6001C12.6146 11.6001 18.0006 11.5553 18.0006 10.0001V7.50609L19.2006 7.08009V8.00009C19.2006 8.44192 19.5588 8.80009 20.0006 8.80009H20.8006C21.2425 8.80009 21.6006 8.44192 21.6006 8.00009V6.80009C21.5994 6.61486 21.5548 6.4325 21.4702 6.26769L23.4702 5.55249C23.7875 5.43813 23.9989 5.13712 23.9989 4.79989C23.9989 4.46266 23.7875 4.16164 23.4702 4.04729H23.4682ZM17.2006 9.12009C15.677 8.42649 12.4666 8.40009 12.0006 8.40009C11.5346 8.40009 8.32423 8.42649 6.80063 9.12009V5.63529C7.04063 5.32729 8.92703 4.80009 12.0006 4.80009C15.0742 4.80009 16.9606 5.32729 17.2006 5.63529V9.12009ZM12.0006 10.8001C9.04063 10.8001 7.18183 10.3113 6.83423 10.0001C7.18183 9.68889 9.04143 9.20009 12.0006 9.20009C14.9598 9.20009 16.8194 9.68889 17.167 10.0001C16.8194 10.3113 14.9606 10.8001 12.0006 10.8001ZM19.3882 6.16209L18.0006 6.65689V5.60009C18.0006 4.04489 12.6146 4.00009 12.0006 4.00009C11.3866 4.00009 6.00063 4.04489 6.00063 5.60009V6.65649L0.800626 4.80009L12.0062 0.800089L20.0006 3.65689V5.67369C19.7477 5.76357 19.5321 5.9355 19.3882 6.16209ZM20.8006 8.00009H20.0006V6.80009C20.0006 6.57918 20.1797 6.40009 20.4006 6.40009C20.6215 6.40009 20.8006 6.57918 20.8006 6.80009V8.00009ZM20.8006 5.65769V3.94289L23.2006 4.80009L20.8006 5.65769Z" fill="black"/>
                        <path d="M22.8 12.3999C22.776 12.3998 22.752 12.402 22.7284 12.4063C19.1793 12.9581 15.5916 13.2235 12 13.1999C8.40837 13.2235 4.82067 12.9581 1.2716 12.4063C1.24794 12.4023 1.224 12.4001 1.2 12.3999C0.92 12.3999 0 12.7171 0 16.7999C0 20.8827 0.92 21.1999 1.2 21.1999C1.22402 21.1994 1.24796 21.197 1.2716 21.1927C3.99868 20.7607 6.75137 20.5098 9.5116 20.4415L8.7308 22.3143C8.61084 22.6142 8.68377 22.9568 8.91546 23.1818C9.14714 23.4069 9.49175 23.4698 9.788 23.3411L10.094 23.2103L10.2264 23.5147C10.3515 23.8099 10.6414 24.0011 10.962 23.9999H10.972C11.295 23.9974 11.5845 23.8003 11.7052 23.5007L12.4 21.8375L13.0924 23.4943C13.2121 23.7967 13.5028 23.9965 13.828 23.9999H13.84C14.1584 24.0012 14.4468 23.8123 14.5728 23.5199L14.7064 23.2131L15.0076 23.3423C15.3051 23.4736 15.6526 23.4111 15.8856 23.1842C16.1187 22.9573 16.1905 22.6116 16.0672 22.3107L15.3016 20.4747C17.7902 20.5628 20.2712 20.8033 22.7304 21.1947C22.7534 21.1985 22.7767 21.2002 22.8 21.1999C23.08 21.1999 24 20.8827 24 16.7999C24 12.7171 23.08 12.3999 22.8 12.3999ZM13.28 13.9879C13.4461 14.5987 13.5429 15.2262 13.5684 15.8587C12.6614 15.437 11.5977 15.5358 10.784 16.1175C10.7635 15.3992 10.6715 14.6847 10.5092 13.9847C10.9937 13.9948 11.4907 13.9999 12 13.9999C12.4372 13.9999 12.8616 13.9951 13.28 13.9879ZM12.4 20.3999C11.2954 20.3999 10.4 19.5045 10.4 18.3999C10.4 17.2953 11.2954 16.3999 12.4 16.3999C13.5046 16.3999 14.4 17.2953 14.4 18.3999C14.3987 19.5039 13.504 20.3986 12.4 20.3999ZM1.2 13.3999C1.50649 14.5061 1.64139 15.6528 1.6 16.7999C1.64139 17.947 1.50649 19.0937 1.2 20.1999C0.893514 19.0937 0.75861 17.947 0.8 16.7999C0.75861 15.6528 0.893514 14.5061 1.2 13.3999ZM2.008 20.2679C2.2268 19.6335 2.4 18.5719 2.4 16.7999C2.4 15.0279 2.2268 13.9663 2.0076 13.3311C4.54944 13.6822 7.10861 13.8935 9.6736 13.9643C9.91352 14.8898 10.0234 15.8441 10 16.7999C10 16.8579 10 16.9131 9.9976 16.9687C9.51759 17.7653 9.46922 18.7496 9.8688 19.5895L9.8512 19.6319C7.22689 19.6962 4.60831 19.9088 2.008 20.2687V20.2679ZM10.9628 23.1999L10.6708 22.5279C10.583 22.3261 10.3487 22.2332 10.1464 22.3199L9.4732 22.6175L10.4112 20.3687C10.7963 20.7589 11.2876 21.0274 11.824 21.1407L10.9628 23.1999ZM14.6536 22.3199C14.4513 22.2332 14.217 22.3261 14.1292 22.5279L13.8332 23.1931L12.9756 21.1399C13.5124 21.0265 14.0041 20.7579 14.3896 20.3675L15.3256 22.6075L14.6536 22.3199ZM22.72 20.3799C20.1501 19.9844 17.5588 19.744 14.96 19.6599L14.9316 19.5911C15.4346 18.5311 15.219 17.2694 14.3924 16.4367C14.3893 15.6072 14.2935 14.7806 14.1068 13.9723C16.9911 13.9077 19.8682 13.6563 22.72 13.2195C22.9056 13.5347 23.2 14.7815 23.2 16.7999C23.2 18.8183 22.9036 20.0647 22.72 20.3799Z" fill="black"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_2615_5042">
                        <rect width="24" height="24" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <p>Every one of our teachers is a specialist with a higher education degree and extensive experience working with both children and adults.</p>
                </div>
                <div class="io-lectors__list-item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2615_5058)">
                        <path d="M17.4826 8.34961H8.52344C8.32928 8.34961 8.17188 8.50702 8.17188 8.70117C8.17188 8.89533 8.32928 9.05273 8.52344 9.05273H17.4826C17.6767 9.05273 17.8341 8.89533 17.8341 8.70117C17.8341 8.50702 17.6767 8.34961 17.4826 8.34961Z" fill="black"/>
                        <path d="M17.4826 9.85889H8.52344C8.32928 9.85889 8.17188 10.0163 8.17188 10.2104C8.17188 10.4046 8.32928 10.562 8.52344 10.562H17.4826C17.6767 10.562 17.8341 10.4046 17.8341 10.2104C17.8341 10.0163 17.6767 9.85889 17.4826 9.85889Z" fill="black"/>
                        <path d="M6.90714 5.28582C6.90714 5.47998 7.06455 5.63739 7.2587 5.63739H12.652C13.0392 5.63739 13.3543 5.32234 13.3543 4.93506V3.68031C13.3543 3.29307 13.0392 2.97803 12.652 2.97803H4.46791C4.08067 2.97803 3.76562 3.29307 3.76562 3.68031V4.93511C3.76562 5.32239 4.08067 5.63743 4.46791 5.63743H5.61405C5.8082 5.63743 5.96561 5.48003 5.96561 5.28587C5.96561 5.09171 5.8082 4.93431 5.61405 4.93431L4.46875 4.93511L4.46791 3.68111L12.6512 3.68026L12.652 4.93421H7.2587C7.06455 4.93426 6.90714 5.09167 6.90714 5.28582Z" fill="black"/>
                        <path d="M19.9696 15.612C19.7754 15.612 19.618 15.7695 19.618 15.9636V21.516C19.618 22.498 18.8191 23.2969 17.8372 23.2969H3.76134C2.77936 23.2969 1.98047 22.498 1.98047 21.516V2.484C1.98047 1.50202 2.77936 0.703125 3.76134 0.703125C15.0903 0.712734 14.4632 0.680016 14.6835 0.728672V4.1437C14.6835 4.96744 15.3537 5.63761 16.1775 5.63761H19.5925C19.6088 5.71163 19.618 5.7877 19.618 5.86533V8.87194C19.618 9.06609 19.7754 9.2235 19.9696 9.2235C20.1637 9.2235 20.3212 9.06609 20.3212 8.87194V5.86533C20.3212 5.39784 20.1391 4.95834 19.8086 4.62783L15.6933 0.512578C15.3628 0.182016 14.9233 0 14.4558 0H3.76134C2.39166 0 1.27734 1.11431 1.27734 2.484V21.516C1.27734 22.8857 2.39166 24 3.76134 24H17.8372C19.2069 24 20.3212 22.8857 20.3212 21.516V15.9636C20.3212 15.7695 20.1637 15.612 19.9696 15.612ZM19.1209 4.93448H16.1775C15.7414 4.93448 15.3867 4.57973 15.3867 4.1437V1.20028L19.1209 4.93448Z" fill="black"/>
                        <path d="M6.78794 8.59777C6.78794 8.23745 6.49483 7.94434 6.1345 7.94434H4.41906C4.05873 7.94434 3.76562 8.23745 3.76562 8.59777V10.3132C3.76562 10.6735 4.05873 10.9666 4.41906 10.9666H6.1345C6.49483 10.9666 6.78794 10.6735 6.78794 10.3132V8.59777ZM6.08481 10.2635H4.46875V8.64746H6.08481V10.2635Z" fill="black"/>
                        <path d="M6.78794 12.9728C6.78794 12.6124 6.49483 12.3193 6.1345 12.3193H4.41906C4.05873 12.3193 3.76562 12.6124 3.76562 12.9728V14.6882C3.76562 15.0485 4.05873 15.3416 4.41906 15.3416H6.1345C6.49483 15.3416 6.78794 15.0485 6.78794 14.6882V12.9728ZM6.08481 14.6385H4.46875V13.0225H6.08481V14.6385Z" fill="black"/>
                        <path d="M6.1345 16.6938H4.41906C4.05873 16.6938 3.76562 16.987 3.76562 17.3473V19.0627C3.76562 19.423 4.05873 19.7162 4.41906 19.7162H6.1345C6.49483 19.7162 6.78794 19.423 6.78794 19.0627V17.3473C6.78794 16.987 6.49483 16.6938 6.1345 16.6938ZM6.08481 19.013H4.46875V17.3969H6.08481V19.013Z" fill="black"/>
                        <path d="M22.2523 10.124C21.6273 9.49903 20.6104 9.49903 19.9855 10.124L17.3853 12.7242H8.52344C8.32928 12.7242 8.17188 12.8816 8.17188 13.0757C8.17188 13.2699 8.32928 13.4273 8.52344 13.4273H16.6822L15.876 14.2335H8.52344C8.32928 14.2335 8.17188 14.3909 8.17188 14.5851C8.17188 14.7792 8.32928 14.9366 8.52344 14.9366H15.1729L13.0107 17.0988H8.52344C8.32928 17.0988 8.17188 17.2562 8.17188 17.4504C8.17188 17.6445 8.32928 17.8019 8.52344 17.8019H12.3076L11.5014 18.6082H8.52348C8.32933 18.6082 8.17192 18.7656 8.17192 18.9597C8.17192 19.1539 8.32933 19.3113 8.52348 19.3113H10.8083C10.5916 19.5615 10.4232 19.836 10.3042 20.1449L9.56312 22.0682C9.48128 22.2806 9.53242 22.5219 9.69339 22.6829C9.8552 22.8447 10.0967 22.8946 10.3082 22.8132L12.2313 22.0721C12.6107 21.926 12.946 21.6971 13.2025 21.4405L15.3318 19.3112H17.4826C17.6767 19.3112 17.8341 19.1538 17.8341 18.9597C17.8341 18.7655 17.6767 18.6081 17.4826 18.6081H16.0349L16.8411 17.8019H17.4826C17.6767 17.8019 17.8341 17.6445 17.8341 17.4503C17.8341 17.2755 17.7064 17.1309 17.5393 17.1037L22.2523 12.3907C22.8773 11.7659 22.8773 10.749 22.2523 10.124ZM11.9785 21.4161L10.3219 22.0544L10.9602 20.3978C10.9852 20.333 11.0136 20.2693 11.0451 20.2072L12.1692 21.3313C12.107 21.3628 12.0434 21.3911 11.9785 21.4161ZM12.7405 20.9082L11.4681 19.6358L18.3884 12.7155L19.6608 13.9879L12.7405 20.9082ZM20.158 13.4908L18.8856 12.2183L19.4654 11.6385L20.7378 12.911L20.158 13.4908ZM21.7551 11.8936L21.235 12.4138L19.9625 11.1413L20.4827 10.6212C20.8335 10.2704 21.4043 10.2704 21.7551 10.6212C22.1059 10.972 22.1059 11.5428 21.7551 11.8936Z" fill="black"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_2615_5058">
                        <rect width="24" height="24" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <p>Students are taught according to an approved school program.</p>
                </div>
                <div class="io-lectors__list-item">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_2615_5071)">
                        <path d="M22.9125 7.32246H22V6.78185C22 6.6543 21.926 6.53833 21.8105 6.48442C21.3951 6.29083 20.7874 6.17922 20.2824 6.11585C20.1648 5.76025 19.8783 5.48106 19.5182 5.37372V3.48325L19.6639 3.4442C19.9536 3.36653 20.1483 3.11285 20.1483 2.81289C20.1483 2.51294 19.9536 2.25921 19.6638 2.18153L12.4702 0.254033C12.1392 0.165346 11.831 0.165299 11.5 0.254033L4.30644 2.18158C4.0167 2.25925 3.82203 2.51294 3.82203 2.81294C3.82203 3.11294 4.0167 3.36663 4.30648 3.4443L6.84884 4.12553V6.0416C4.8898 5.92717 3.00828 6.10206 2.18802 6.48447C2.07242 6.53838 1.99855 6.65435 1.99855 6.78189V7.3225H1.08594C0.904719 7.3225 0.757812 7.46941 0.757812 7.65063V22.0212C0.757812 22.2024 0.904719 22.3493 1.08594 22.3493H9.19175C9.89412 22.3493 10.4895 22.6131 10.9614 23.1334L11.2942 23.5004C11.4796 23.7047 11.7233 23.8128 11.9992 23.8128C12.2751 23.8128 12.5189 23.7047 12.7042 23.5004L13.0371 23.1334C13.5089 22.6131 14.1043 22.3493 14.8067 22.3493H22.9125C23.0937 22.3493 23.2407 22.2024 23.2407 22.0212V7.65058C23.2407 7.46936 23.0937 7.32246 22.9125 7.32246ZM12.3274 8.97672C14.0007 8.92174 15.5965 8.46391 16.9622 7.64416C17.061 7.58481 17.1214 7.47808 17.1214 7.36281V6.70117C17.4328 6.68186 17.7449 6.66972 18.0554 6.66513C18.0961 6.91024 18.2143 7.12933 18.3842 7.2963L18.2876 7.50391C18.1579 7.78272 18.0974 8.05577 18.0974 8.36331V9.65336C18.0974 10.081 18.4453 10.429 18.873 10.429H19.5648C19.9925 10.429 20.3405 10.081 20.3405 9.65336V8.36331C20.3405 8.05577 20.28 7.78267 20.1503 7.50391L20.0349 7.25599C20.1582 7.12253 20.2502 6.95992 20.2995 6.77978C20.7248 6.83735 21.0828 6.91413 21.3437 7.00385V20.6872C19.2327 20.0953 15.8091 19.7943 12.3273 20.6995V8.97672H12.3274ZM19.4678 7.59264L19.5554 7.78085C19.6458 7.975 19.6843 8.14919 19.6843 8.36336V9.65341C19.6843 9.71814 19.6296 9.7728 19.5649 9.7728H18.8731C18.8084 9.7728 18.7537 9.7181 18.7537 9.65341V8.36336C18.7537 8.14919 18.7923 7.975 18.8826 7.7808L18.9647 7.60441C19.0376 7.61894 19.113 7.62672 19.1901 7.62672C19.2858 7.62672 19.3788 7.61477 19.4678 7.59264ZM19.6843 6.47627C19.6843 6.74875 19.4626 6.97047 19.1901 6.97047C18.9176 6.97047 18.6959 6.7488 18.6959 6.47627C18.6959 6.20374 18.9176 5.98206 19.1901 5.98206C19.4626 5.98206 19.6843 6.20374 19.6843 6.47627ZM18.862 5.37377C18.5391 5.47005 18.2755 5.70442 18.1396 6.00817C17.8012 6.01155 17.4611 6.02303 17.1215 6.04347V4.12553L18.862 3.65917V5.37377ZM11.6698 0.887877C11.8879 0.829471 12.0823 0.829471 12.3003 0.887877L19.4842 2.81294L19.1615 2.89942L12.2435 2.27402C12.0636 2.25827 11.9035 2.39078 11.8872 2.57125C11.8708 2.75177 12.0039 2.91128 12.1844 2.9276L17.3227 3.39208L12.3003 4.73781C12.0823 4.79622 11.8879 4.79622 11.6698 4.73781L4.48597 2.81285L11.6698 0.887877ZM11.5 5.37175C11.6655 5.4161 11.8253 5.43827 11.9851 5.43827C12.145 5.43827 12.3047 5.4161 12.4702 5.37175L16.4652 4.30131V7.17466C15.1431 7.9285 13.5984 8.3261 11.9851 8.3261C10.3719 8.3261 8.82711 7.9285 7.50509 7.17466V4.30131L11.5 5.37175ZM2.65475 7.00338C3.47412 6.71856 5.14517 6.59622 6.84884 6.69897V7.36281C6.84884 7.47803 6.90931 7.58481 7.00808 7.64416C8.38142 8.4685 9.98755 8.9268 11.6711 8.97752V20.6995C8.18933 19.7943 4.76577 20.0954 2.65475 20.6872V7.00338ZM22.5844 21.6931H14.8067C13.924 21.6931 13.144 22.0387 12.551 22.6925L12.2181 23.0595C12.1581 23.1257 12.0886 23.1565 11.9992 23.1565C11.9099 23.1565 11.8404 23.1257 11.7804 23.0595L11.4475 22.6925C10.8545 22.0387 10.0745 21.6931 9.1918 21.6931H1.41406V7.97871H1.9985V21.1294C1.9985 21.2346 2.04894 21.3334 2.13411 21.3951C2.21928 21.4568 2.32887 21.4741 2.42886 21.4412C4.42803 20.7859 8.02302 20.389 11.6711 21.3792V21.9535C11.6711 22.1347 11.818 22.2816 11.9992 22.2816C12.1805 22.2816 12.3274 22.1347 12.3274 21.9535V21.3792C15.9754 20.389 19.5704 20.7859 21.5697 21.4412C21.603 21.4521 21.6375 21.4575 21.6718 21.4575C21.7401 21.4575 21.8077 21.4362 21.8644 21.3951C21.9496 21.3334 22 21.2346 22 21.1294V7.97871H22.5844V21.6931H22.5844ZM13.9793 18.9467C13.9554 18.952 13.9315 18.9545 13.908 18.9545C13.7575 18.9545 13.6219 18.8503 13.5879 18.6974C13.5487 18.5205 13.6603 18.3452 13.8372 18.306C16.0027 17.8257 18.076 17.7756 19.833 18.1611C20.01 18.1999 20.1221 18.3749 20.0832 18.5519C20.0443 18.7288 19.8693 18.841 19.6924 18.802C18.0279 18.4369 16.0524 18.4869 13.9793 18.9467ZM13.5879 16.8632C13.5487 16.6863 13.6603 16.511 13.8372 16.4718C16.0027 15.9915 18.0761 15.9415 19.833 16.3269C20.01 16.3657 20.1221 16.5407 20.0832 16.7177C20.0444 16.8947 19.8693 17.0065 19.6924 16.9679C18.0279 16.6028 16.0524 16.6527 13.9793 17.1124C13.9554 17.1177 13.9315 17.1203 13.908 17.1203C13.7575 17.1203 13.6219 17.0161 13.588 16.8632H13.5879ZM13.5886 15.032C13.5477 14.8555 13.6577 14.6793 13.8342 14.6383C16.0286 14.1297 18.0459 14.0613 19.83 14.435C20.0074 14.4722 20.121 14.6461 20.0839 14.8234C20.0467 15.0008 19.8727 15.1145 19.6955 15.0774C18.0054 14.7234 16.0832 14.7908 13.9824 15.2776C13.9574 15.2834 13.9325 15.2862 13.908 15.2862C13.7588 15.2862 13.6237 15.1837 13.5886 15.032ZM13.5886 13.1396C13.5477 12.963 13.6577 12.7868 13.8342 12.7459C16.0287 12.2373 18.046 12.169 19.83 12.5426C20.0074 12.5798 20.121 12.7537 20.0839 12.931C20.0467 13.1084 19.8729 13.2221 19.6955 13.185C18.0055 12.831 16.0833 12.8984 13.9823 13.3852C13.9574 13.3909 13.9325 13.3938 13.908 13.3938C13.7587 13.3938 13.6237 13.2912 13.5886 13.1396ZM10.0191 18.9467C7.94609 18.4869 5.97055 18.437 4.30606 18.8021C4.12911 18.8411 3.95412 18.729 3.91527 18.5519C3.87641 18.3749 3.98844 18.1999 4.16544 18.1611C5.9225 17.7757 7.99578 17.8257 10.1613 18.306C10.3382 18.3453 10.4498 18.5205 10.4105 18.6974C10.3766 18.8504 10.241 18.9545 10.0905 18.9545C10.067 18.9545 10.0431 18.952 10.0192 18.9467H10.0191ZM10.4098 13.1396C10.3747 13.2912 10.2397 13.3938 10.0905 13.3938C10.066 13.3938 10.041 13.3909 10.0161 13.3852C7.91525 12.8984 5.99305 12.8309 4.30302 13.185C4.12564 13.2222 3.95173 13.1085 3.91456 12.931C3.87744 12.7537 3.99111 12.5798 4.16848 12.5426C5.95255 12.1689 7.96981 12.2373 10.1643 12.7459C10.3408 12.7868 10.4508 12.9631 10.4098 13.1396ZM3.91273 9.13685C3.88072 8.95849 3.99941 8.78796 4.17777 8.75594C4.95992 8.61555 5.80152 8.56169 6.67887 8.59586C6.85995 8.60289 7.00105 8.75542 6.99402 8.9365C6.98698 9.11763 6.83375 9.25942 6.65337 9.25164C5.82317 9.21939 5.02925 9.26988 4.29364 9.40192C4.27405 9.40544 4.25455 9.40713 4.23528 9.40713C4.07947 9.40713 3.94119 9.2957 3.91269 9.13689L3.91273 9.13685ZM3.91456 14.8233C3.87744 14.646 3.99111 14.4721 4.16848 14.4349C5.95264 14.0613 7.96986 14.1297 10.1643 14.6382C10.3408 14.6792 10.4508 14.8555 10.4098 15.0319C10.3747 15.1835 10.2397 15.2861 10.0905 15.2861C10.066 15.2861 10.041 15.2833 10.0161 15.2775C7.91525 14.7906 5.99305 14.7232 4.30302 15.0773C4.12545 15.1145 3.95173 15.0007 3.91456 14.8233ZM3.91456 11.0386C3.87744 10.8612 3.99106 10.6873 4.16848 10.6502C5.95241 10.2765 7.96977 10.3449 10.1643 10.8534C10.3408 10.8943 10.4508 11.0706 10.4098 11.2471C10.3747 11.3987 10.2397 11.5013 10.0905 11.5013C10.066 11.5013 10.041 11.4985 10.0161 11.4927C7.91516 11.0058 5.993 10.9384 4.30302 11.2925C4.12564 11.3298 3.95173 11.216 3.91456 11.0386ZM10.4105 16.8631C10.3766 17.0161 10.241 17.1203 10.0905 17.1203C10.067 17.1203 10.0431 17.1177 10.0192 17.1124C7.94614 16.6526 5.97059 16.6026 4.30611 16.9678C4.12916 17.0064 3.95412 16.8946 3.91531 16.7176C3.8765 16.5406 3.98853 16.3656 4.16548 16.3268C5.92245 15.9414 7.99578 15.9916 10.1613 16.4717C10.3382 16.5109 10.4498 16.6862 10.4105 16.8631Z" fill="black"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_2615_5071">
                        <rect width="24" height="24" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <p>Our teachers work using effective and proven methodologies, including those of M. Montessori, S. Suzuki, C. Orff, S. Riggs, and Reggio Emilia.</p>
                </div>
                <div class="io-lectors__list-item">
                    <svg width="24" height="21" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.2727 6.27273H15.2727V2.72727C15.2719 2.00422 14.9842 1.31103 14.473 0.799756C13.9617 0.288481 13.2685 0.000866104 12.5455 0H2.72727C2.00422 0.000866104 1.31103 0.288481 0.799756 0.799756C0.288481 1.31103 0.000866104 2.00422 0 2.72727V9.27273C0.000866104 9.99578 0.288481 10.689 0.799756 11.2002C1.31103 11.7115 2.00422 11.9991 2.72727 12V13.14C2.72687 13.3552 2.7905 13.5656 2.91007 13.7446C3.02964 13.9235 3.19974 14.0628 3.39873 14.1447C3.59859 14.228 3.81869 14.2498 4.03103 14.2076C4.24336 14.1653 4.43832 14.0609 4.59109 13.9075C4.611 13.8883 4.62925 13.8675 4.64564 13.8453L6.00273 12H8.72727V15.5455C8.72814 16.2685 9.01575 16.9617 9.52703 17.473C10.0383 17.9842 10.7315 18.2719 11.4545 18.2727H17.5015L19.4105 20.1818C19.5631 20.3343 19.7575 20.4382 19.9691 20.4803C20.1806 20.5223 20.4 20.5007 20.5993 20.4182C20.7986 20.3356 20.9689 20.1959 21.0888 20.0165C21.2087 19.8371 21.2727 19.6263 21.2727 19.4105V18.2727C21.9958 18.2719 22.689 17.9842 23.2002 17.473C23.7115 16.9617 23.9991 16.2685 24 15.5455V9C23.9991 8.27695 23.7115 7.58376 23.2002 7.07248C22.689 6.56121 21.9958 6.27359 21.2727 6.27273ZM5.72727 10.9091C5.64227 10.9095 5.55855 10.9298 5.48278 10.9684C5.40702 11.0069 5.34132 11.0626 5.29091 11.1311L3.81818 13.1275V11.4545C3.81818 11.3099 3.76071 11.1711 3.65842 11.0689C3.55613 10.9666 3.41739 10.9091 3.27273 10.9091H2.72727C2.29328 10.9091 1.87707 10.7367 1.57019 10.4298C1.26331 10.1229 1.09091 9.70672 1.09091 9.27273V2.72727C1.09091 2.29328 1.26331 1.87707 1.57019 1.57019C1.87707 1.26331 2.29328 1.09091 2.72727 1.09091H12.5455C12.9794 1.09091 13.3957 1.26331 13.7025 1.57019C14.0094 1.87707 14.1818 2.29328 14.1818 2.72727V6.27273H11.4545C10.8742 6.27445 10.3099 6.46282 9.84491 6.81L8.13273 3.04636C8.08934 2.95113 8.01947 2.87039 7.93146 2.81378C7.84345 2.75716 7.74101 2.72706 7.63636 2.72706C7.53172 2.72706 7.42928 2.75716 7.34127 2.81378C7.25325 2.87039 7.18339 2.95113 7.14 3.04636L4.41273 9.04636C4.38316 9.11168 4.36676 9.18219 4.36447 9.25385C4.36218 9.32551 4.37403 9.39692 4.39936 9.464C4.4247 9.53107 4.463 9.5925 4.51209 9.64475C4.56118 9.69701 4.62009 9.73908 4.68545 9.76855C4.75555 9.80103 4.83184 9.81796 4.90909 9.81818C5.01378 9.81815 5.11624 9.788 5.20426 9.73132C5.29227 9.67465 5.36212 9.59384 5.40545 9.49855L6.252 7.63636H9.02182L9.06055 7.72091C8.84496 8.11298 8.73042 8.55258 8.72727 9V10.9091H5.72727ZM8.526 6.54545H6.74782L7.63636 4.59055L8.526 6.54545ZM22.9091 15.5455C22.9091 15.9794 22.7367 16.3957 22.4298 16.7025C22.1229 17.0094 21.7067 17.1818 21.2727 17.1818H20.7273C20.5826 17.1818 20.4439 17.2393 20.3416 17.3416C20.2393 17.4439 20.1818 17.5826 20.1818 17.7273V19.4105L18.1129 17.3416C18.0106 17.2393 17.8719 17.1819 17.7273 17.1818H11.4545C11.0206 17.1818 10.6043 17.0094 10.2975 16.7025C9.99058 16.3957 9.81818 15.9794 9.81818 15.5455V9C9.81818 8.56601 9.99058 8.14979 10.2975 7.84292C10.6043 7.53604 11.0206 7.36364 11.4545 7.36364H21.2727C21.7067 7.36364 22.1229 7.53604 22.4298 7.84292C22.7367 8.14979 22.9091 8.56601 22.9091 9V15.5455Z" fill="black"/>
                        <path d="M19.0898 10.3634H16.908V9.27251C16.908 9.12784 16.8506 8.9891 16.7483 8.88681C16.646 8.78452 16.5072 8.72705 16.3626 8.72705C16.2179 8.72705 16.0792 8.78452 15.9769 8.88681C15.8746 8.9891 15.8171 9.12784 15.8171 9.27251V10.3634H13.6353C13.4906 10.3634 13.3519 10.4209 13.2496 10.5232C13.1473 10.6255 13.0898 10.7642 13.0898 10.9089C13.0898 11.0535 13.1473 11.1923 13.2496 11.2946C13.3519 11.3969 13.4906 11.4543 13.6353 11.4543H17.6826C17.549 12.381 17.0777 13.2256 16.3593 13.826C15.9397 13.4755 15.6005 13.0386 15.3649 12.5452C15.3353 12.4788 15.2927 12.4191 15.2396 12.3694C15.1865 12.3197 15.124 12.2811 15.0558 12.256C14.9876 12.2308 14.915 12.2195 14.8424 12.2228C14.7698 12.226 14.6985 12.2438 14.6328 12.275C14.5672 12.3062 14.5084 12.3502 14.46 12.4045C14.4116 12.4587 14.3745 12.5221 14.3509 12.5908C14.3273 12.6596 14.3178 12.7324 14.3227 12.805C14.3277 12.8775 14.3471 12.9483 14.3798 13.0132C14.6333 13.5388 14.9798 14.0141 15.4026 14.4161C14.9178 14.6226 14.3962 14.7284 13.8693 14.7271C13.7986 14.7274 13.7288 14.7419 13.6638 14.7696C13.5989 14.7974 13.5401 14.8379 13.491 14.8887C13.442 14.9396 13.4036 14.9997 13.3782 15.0656C13.3527 15.1315 13.3407 15.2019 13.3429 15.2725C13.3473 15.4192 13.4089 15.5583 13.5145 15.6602C13.6201 15.7621 13.7613 15.8187 13.908 15.818C14.7749 15.8176 15.626 15.586 16.3735 15.1471C17.1279 15.5842 17.9839 15.8156 18.8558 15.818C18.9265 15.8176 18.9964 15.8032 19.0613 15.7754C19.1263 15.7476 19.185 15.7071 19.2341 15.6563C19.2832 15.6054 19.3215 15.5453 19.347 15.4794C19.3724 15.4135 19.3844 15.3431 19.3822 15.2725C19.3778 15.1258 19.3162 14.9867 19.2107 14.8848C19.1051 14.7829 18.9639 14.7263 18.8171 14.7271C18.3068 14.7251 17.8022 14.6201 17.3335 14.4183C18.146 13.6282 18.659 12.5806 18.7849 11.4543H19.0898C19.2345 11.4543 19.3732 11.3969 19.4755 11.2946C19.5778 11.1923 19.6353 11.0535 19.6353 10.9089C19.6353 10.7642 19.5778 10.6255 19.4755 10.5232C19.3732 10.4209 19.2345 10.3634 19.0898 10.3634Z" fill="#7A61FF"/>
                    </svg>
                    <p>We teach in several languages, including English, Russian, and Ukrainian.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="io-contest io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-contest__heading io-heading-2">Our Competitions, Exhibitions, and Music Olympiad</h2>
            <div class="io-contest__grid">
                <div class="io-contest__main-block io-block io-block--purple">
                    <img src="/wp-content/themes/interschooltemplate/images/io-contest.svg" alt="">
                    <div class="io-text-wrapper">
                        <p><b>Montessori Center</b> — is the founder and organizer of a series of international online competitions, exhibitions, and a music Olympiad in which our students and students from other educational institutions compete.</p>
                        <p>For the students of Montessori Center, participation and victory in these competitions provide an opportunity to showcase and reinforce their academic achievements and strive for new accomplishments!</p>
                    </div>
                </div>
                <a href="https://vocal.ua/" target="_blank" class="io-contest__block io-block">
                    <img src="/wp-content/themes/interschooltemplate/images/cnr-vocal.webp" alt="">
                    <p>The VOCAL.UA Vocal Competition provides a platform for students specializing in vocal disciplines in music educational institutions to compete.</p>
                </a>
                <a href="https://piano.ua/" target="_blank" class="io-contest__block io-block">
                    <img src="/wp-content/themes/interschooltemplate/images/cnr-piano.webp" alt="">
                    <p>The International S.S. Prokofiev Competition was established by Montessori Center in collaboration with the National Music Academy of Ukraine named after P.I. Tchaikovsky. Talented pianists and conductors from various countries participate in the competition.</p>
                </a>
                <a href="https://childopenart.com/" target="_blank" class="io-contest__block io-block">
                    <img src="/wp-content/themes/interschooltemplate/images/cnr-chopart.webp" alt="">
                    <p>The ChildOpenArt.com Visual Art Competition is held at Montessori Center every month. The online exhibition of the competition already showcases over 15,000 paintings created by our students over the course of ten years!</p>
                </a>
                <a href="https://holoskrainy.ua/" target="_blank" class="io-contest__block io-block">
                    <img src="/wp-content/themes/interschooltemplate/images/cnr-holos.webp" alt="">
                    <p>The Music Olympics is one of the largest music competitions, encompassing the following events: Instrumental Olympic Competition, Vocal Olympic Competition, Choir Olympics, Olympic Competition "With Orchestra," Olympic Composer Competition, Olympic Conductor Competition, and Music Theory Olympics.</p>
                </a>
                <a href="https://mystetstvo.org/" target="_blank" class="io-contest__block io-block">
                    <img src="/wp-content/themes/interschooltemplate/images/cnr-mstz-lg.webp" alt="">
                    <p>The ART Visual Art Competition has become a prestigious and major exhibition of works by young artists, designers, and sculptors, featuring submissions from over a hundred educational institutions.</p>
                </a>
                <a href="https://petitpas.dance/" target="_blank" class="io-contest__block io-block">
                    <img src="/wp-content/themes/interschooltemplate/images/cnr-petipa.webp" alt="">
                    <p>The Peti-Pa Dance Festival brings together our students from the choreography department of Montessori Center.</p>
                </a>
            </div>
        </div>
    </section>

    <section class="io-about-read io-section">
        <div class="container-xxl io-container-mw">
            <h2 class="io-about-read__heading io-heading-2">About the courses at the Montessori Center</h2>
            <div class="io-sidebar io-legal__sidebar">
                <div class="io-sidebar__sticky">
                    <div class="io-sidebar__inner io-sidebar__inner--unset">
                        <div class="io-legal__sidebar-block io-block-shadow">
                            <h2 class="io-sidebar__title io-heading-2">Content</h2>
                            <ul class="io-sidebar__list">
                                <li><a class="io-click-open" href="#io-about-text-h3-1">Painting</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-10">Computer Graphics</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-2">Piano</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-4">Vocal</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-5">Classical Guitar</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-11">Flute</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-13">Violin</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-14">Drums</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-15">Saxophone</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-3">English Language</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-6">Russian Language</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-7">Ukrainian Language</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-8">Spanish Language</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-12">Modern Dance</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-9">Mathematics</a></li>
                                <li><a class="io-click-open" href="#io-about-text-h3-16">Speech Therapist Lessons</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="io-sidebar__content">
                    <div class="io-text-wrapper io-about-read__text-wrapper">
                        <p>In the Montessori center, more than 30 educational program courses have been developed, which are used for online learning for children and adults. The courses provide individual or group distance learning lessons. The lesson schedule is agreed upon with each student. Our students and educators learn and work in different countries of the world, so when creating the schedule, we take into account the time zones of the teacher and the student.</p>
                        <p>A very important positive factor in studying at the Montessori center is that our educators discuss and subsequently work on the individual task of each student: not every student dreams of becoming a distinguished opera singer, but each one has their own goal - to learn to perform their favorite musical piece, communicate freely in a foreign language, or pass a difficult math exam.</p>
                        <p>Our lessons are not video course recordings or boring teacher lectures. We offer you a lively, dynamic and emotional communication with the teacher, which will immerse you in the atmosphere of live learning, even if you are thousands of kilometers away from our school. Modern technologies, high-quality cameras and gadgets, as well as the experience and professionalism of our teachers, make learning efficient and exciting</p>
                        <p>Online lessons are held at the Montessori center in such courses: painting, modeling and sculpture, animation, computer graphics, foreign languages ​​(including English, German, Spanish, Russian, Ukrainian, Japanese), piano, vocals, classical guitar, electric guitar, bass guitar, ukulele, drums, flute, recorder, violin, saxophone, cello, early music development, tailoring and sewing courses, ballet, contemporary dances, yoga, speech therapist lessons and middle school subjects, including mathematics, algebra, geometry, and chemistry.</p>                       
                        <h3 id="io-about-text-h3-1">Painting</h3>
                        <p>The "Painting" course is designed for children aged 5 and older, as well as for adults with no age restrictions. Drawing lessons are among the most popular courses among schoolchildren. Online painting lessons are led by practicing young artists. Our teachers accompany each student, both in individual and group lessons. Group online drawing lessons are held in small groups of 4-5 people. Here students make new friends with similar interests, observe each other's creativity and success, which also helps to effectively master skills in visual art.</p>
                        <p>Individual painting lessons also allow children and adults to delve deeper into various techniques: from graphics to oil and watercolor painting. Such classes provide a unique opportunity to quickly and efficiently learn how to create still lifes, draw landscapes, and master complex portrait drawing skills.</p>
                        <div class="io-show-button io-show-button--desktop">
                            <a onclick="showHiddenBlock(this)" class="io-link io-link--purple ">
                                Read more
                            </a>
                        </div>
                        <div class="io-hidden io-hidden--desktop"> 
                            <h3 id="io-about-text-h3-10">Computer Graphics</h3>
                            <p>The "Computer Graphics" course has become popular among young people. Digital illustration and animation are currently trending, and the ability to create your own anime and fantastic characters on a graphic tablet has become a great creative hobby among schoolchildren. To enroll in online computer graphics courses, you need to have a tablet (regular or graphic), as well as a stylus (a special pencil for drawing on a tablet). </p>
                            <h3 id="io-about-text-h3-2">Piano</h3>
                            <p>The "Piano" course is created by our methodologists taking into account age categories and levels of complexity of musical compositions. Our piano playing teaching methodology is designed for children from the age of 5 and for adults without age restrictions. Online piano lessons are among the most popular in our school. Piano lessons are held individually only. Our teachers are young practicing pianists who play the instrument beautifully and can inspire anyone, even the most demanding student. In the first piano lessons from scratch, you will get acquainted with the basics of music literacy, learn to hold your hands correctly, and start playing simple melodies. All you need to have at home is, of course, the instrument - a piano, an electric piano or a synthesizer, anything will do!</p>
                            <h3 id="io-about-text-h3-4">Vocal</h3>
                            <p>The "Vocal" course is designed by us for age categories 5 - 6 years, 7 - 12 years, 13 - 16 years, 17 years and older. Online vocal lessons for children and adults are individual. If you love to sing and dream of learning your favorite songs - hurry up to sign up for a trial online vocal lesson. Singing lessons give an incredible boost of energy and good mood. After all, it is not for nothing that they say that when everything is good, the "soul sings"!</p>
                            <h3 id="io-about-text-h3-5">Classical Guitar</h3>
                            <p>The "Classical Guitar" course involves individual learning. Guitar lessons combine classical guitar, electric guitar, bass guitar, and ukulele. Our teachers master teaching methods on all types of guitars. For many years, one of the most popular musical instruments has been the classical guitar, boys, girls, and adults all dream of learning to play it. In online guitar lessons, you will fully enjoy the fact that from the very first lessons you will be making sounds, working on hand placement, and achieving results quite quickly!</p>
                            <h3 id="io-about-text-h3-11">Flute</h3>
                            <p>The "Flute" course is designed for children aged 9 and older. For children from 5 to 9 years old, the "Recorder" course is best. Our talented teacher, a practicing musician and orchestra artist, gives flute and recorder lessons. For preschool children, we recommend recorder lessons - it's a small pipe with holes, everyone has seen it and many have even tried to play it. The flute, as an instrument, is quite large in size and children can start learning to play it from about 9 - 10 years old, when the size of their hands and the strength in their lungs allow them to produce sounds and perform simple melodies.</p>
                            <h3 id="io-about-text-h3-13">Violin</h3>
                            <p>The "Violin" course was created in a Montessori center, taking into account the age of the student and the complexity levels of the musical pedagogical material. Violin lessons online are conducted only individually. Of course, playing the violin is not easy, but the moment when you learn and perform your first piece - you will never forget, it will be so bright! How to hold the violin and bow correctly, how to produce sounds on the violin - all this will be shown and explained by the teacher in your first online violin lessons!</p>
                            <h3 id="io-about-text-h3-14">Drums</h3>
                            <p>The "Drums" course is held individually. Online drum lessons are very popular among teenagers. For online percussion lessons, you need to have a drum kit (acoustic or electronic) or just a practice pad and drumsticks at home. Learning durations, understanding and figuring out the meter rhythm may seem difficult at first, but it will only take a teenager a month or two to start properly beating simple rhythms and performing their favorite composition to a backing track.</p>
                            <h3 id="io-about-text-h3-15">Saxophone</h3>
                            <p>The "Saxophone" course is designed for children aged 9 and older. It is also never too late to start learning the saxophone for adults, our saxophone playing course includes musical methodological material taking into account that both adults and children can study. Online saxophone lessons are very effective. You will be able to practice the saxophone at home, perform the tips, tasks, and recommendations of our teacher between lessons, and progress will be quite fast: you will first learn to play individual notes, and then - melodies. All that remains is to buy or rent a saxophone!</p>
                            <h3 id="io-about-text-h3-3">English language</h3>
                            <p>The "English language" course is intended for children from the age of 5, as well as for adults. Online English lessons are held individually or in small groups of 2-3 people of the same age and level of preparation. In the first lesson, the teacher necessarily tests the student to determine his level of knowledge. If a child is studying, the teacher, together with the parents, determines the main and intermediate goals of the learning process. The school fully provides methodological and teaching materials. If the student needs to prepare for an embassy interview, a school exam, learn a language to get a new job in some country, the teacher adapts the program according to the individual tasks of the student.</p>
                            <h3 id="io-about-text-h3-6">Russian Language</h3>
                            <p>The "Russian Language" course is designed for students aged 4 and older. Lessons of Russian as a foreign language are popular all over the world. If your child was born or grows up in another country and you want him or her not to forget the Russian language - then online Russian language lessons, even once a week, will allow the child to stay in shape, properly build their speech, enrich vocabulary, learn to read and write. In addition to work in class, the teacher gives homework, which also motivates the student to practice and improve knowledge.</p>
                            <h3 id="io-about-text-h3-7">Ukrainian Language</h3>
                            <p>The "Ukrainian Language" course is taught by native speakers, professional philologists with higher education. The teaching experience of our Ukrainian language teachers is 3 or more years. Continuous practice of teaching children and adults, tracking the latest textbooks and methodological materials, all this gives our teachers a competitive advantage. Remote Ukrainian language lessons are not only about learning the rules and practicing conversational, but also about getting acquainted with the culture and traditions of the country.</p>
                            <h3 id="io-about-text-h3-8">Spanish Language</h3>
                            <p>The "Spanish Language" course is designed for children aged 5 and older, as well as for adults without age restrictions. Spanish lessons via Zoom and Google Meet are popular among students residing in the USA. Our online Spanish lessons are conducted in Russian, Ukrainian or English. Individual Spanish lessons are held for students of different levels of preparation. Textbooks and methodological materials are selected individually depending on the purpose of the study: focus on conversational or grammar, learning from scratch or for advanced students - all this is taken into account when choosing a curriculum for each of our students.</p>
                            <h3 id="io-about-text-h3-12">Contemporary Dance</h3>
                            <p>The "Contemporary Dance" course is conducted online by our wonderful trainer, a participant and winner of choreographic competitions and festivals. Choreography lessons online are conducted individually or in small groups. Adults usually prefer individual ballet and contemporary dance lessons, and children are more interested in group lessons with their peers. Joint training is interesting and exciting: doing stretches, warm-ups, learning dance combinations together, and then dancing - it's such a pleasure!</p>
                            <h3 id="io-about-text-h3-9">Mathematics</h3>
                            <p>The "Mathematics" course involves individual online mathematics lessons conducted by our professional teacher with a higher pedagogical education and over 10 years of experience. Parents of schoolchildren often come to our math teacher with requests such as improving school grades, enhancing and systematizing knowledge of the subject, preparing for graduation or entrance exams. All this is successfully achieved in math lessons via Zoom with our teacher.</p>
                            <h3 id="io-about-text-h3-16">Speech Therapist Lessons</h3>
                            <p>The "Speech Therapist Lessons" course can be attended by both children and adults. Online speech therapy lessons at the Montessori center are a great way to correct speech defects, improve pronunciation, without wasting time on the road and having the opportunity for a flexible individual schedule. Our specialist will quickly and professionally define goals, discuss them with parents and give recommendations for home exercises after each lesson. Our speech therapist works individually with everyone via Zoom or Google Meet.</p>
                            <p>Online lessons in art, foreign languages, choreography, mathematics, and much more have become an essential part of the education of a large part of the children of the planet today. The rapid pace of progress and the endless expanses of information require a wide range of knowledge and interests from children.</p>
                            <p>The Montessori center offers a wide range of courses, which greatly facilitates the time management of parents and children, allowing them to study a whole complex of disciplines in one educational institution!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
</main>

<?php get_footer(); // подключаем footer.php ?>


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
    }

    // Обработчик клика на кнопку закрытия
    function closeVideoLightbox() {
        videoLightboxContainer.style.display = 'none';
        videoLightboxContent.innerHTML = '';
        document.body.style.overflow = 'auto';
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

<!-- Lectors Slider -->
<script>
    var sliderTeachers = new KeenSlider(
        "#slider-teachers", {
            loop: true,
            slides: {
                perView: 1,
                spacing: 20
            },
            breakpoints: {
                "(min-width: 576px)": {
                    slides: {
                        perView: 2,
                        spacing: 20,
                    },
                },
                "(min-width: 992px)": {
                    slides: {
                        perView: 3,
                        spacing: 20,
                    },
                },
                "(min-width: 1200px)": {
                    slides: {
                        perView: 4,
                        spacing: 20,
                    },
                },
            },
        },
        [
            (sliderTeachers) => {
                let timeout
                let mouseOver = false

                function clearNextTimeout() {
                    clearTimeout(timeout)
                }

                function nextTimeout() {
                    clearTimeout(timeout)
                    if (mouseOver) return
                    timeout = setTimeout(() => {
                        sliderTeachers.next()
                    }, 6000)
                }
                sliderTeachers.on("created", () => {
                    sliderTeachers.container.addEventListener("mouseover", () => {
                        mouseOver = true
                        clearNextTimeout()
                    })
                    sliderTeachers.container.addEventListener("mouseout", () => {
                        mouseOver = false
                        nextTimeout()
                    })
                    nextTimeout()
                })
                sliderTeachers.on("dragStarted", clearNextTimeout)
                sliderTeachers.on("animationEnded", nextTimeout)
                sliderTeachers.on("updated", nextTimeout)
            },
        ]
    )

    // Добавляем обработчики событий для кнопок "Назад" и "Вперед"
    const prevButtonTeachers = document.querySelector(".io-lectors__slider-prev");
    const nextButtonTeachers = document.querySelector(".io-lectors__slider-next");

    prevButtonTeachers.addEventListener("click", () => {
        sliderTeachers.prev();
    });

    nextButtonTeachers.addEventListener("click", () => {
        sliderTeachers.next();
    });
</script>

<script>
    // Функция для удаления куки
    function deleteCookie(cname) {
        document.cookie = cname + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
    }

    // Вызов функции для удаления куки с именем 'currentTab'
    deleteCookie('currentTab');
</script>

<!-- Считать возраст центра вместо двух символов -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get today's date
        let today = new Date();

        // Set the start date
        let startDate = new Date("2011/08/01");

        // Calculate the difference in years
        let years = today.getFullYear() - startDate.getFullYear();

        // Adjust for cases where the current date is before the start date in the calendar year
        if (today.getMonth() < startDate.getMonth() || 
            (today.getMonth() == startDate.getMonth() && today.getDate() < startDate.getDate())) {
            years--;
        }

        // Get the element and update its content
        let element = document.getElementById("ioHowOld");
        element.textContent = years;
    });
</script>
<?php io_price(); ?>