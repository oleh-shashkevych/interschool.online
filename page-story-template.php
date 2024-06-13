<?php
/**
 * Успешные истории - Одна story-template.html
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Успешные истории - Одна
 */

include 'templates/price.php';
get_header(); // подключаем header.php ?>
<main>
    <!-- <?php the_content(); // контент ?> -->
    <section class="io-story io-section-first">
        <div class="container-xxl io-container-mw">
            <div class="io-story__block io-block io-block--orange">
                <div class="io-story__block-title">
                    <h1 class="io-heading-1 io-story__block-heading">Успешная история <span class="io-purple-main">Ксении Воробей</span></h1>
                    <p class="io-story__block-text">Лауреат международного конкурса памяти В. Горовица</p>
                </div>
                <div class="io-story__block-data">
                    <div class="io-icon-with-desc io-story__block-icon-with-desc">
                        <div class="io-icon-with-desc__img">
                            <img src="/wp-content/themes/interschooltemplate/images/passport-cake.svg" alt="">
                        </div>
                        <div class="io-icon-with-desc__info">
                            <div class="io-icon-with-desc__info-name">
                                Возраст:
                            </div>
                            <div class="io-icon-with-desc__info-text">
                                8 лет
                            </div>
                        </div>
                    </div>
                    <div class="io-icon-with-desc io-story__block-icon-with-desc">
                        <div class="io-icon-with-desc__img">
                            <img src="/wp-content/themes/interschooltemplate/images/passport-education.svg" alt="">
                        </div>
                        <div class="io-icon-with-desc__info">
                            <div class="io-icon-with-desc__info-name">
                                Курс:
                            </div>
                            <div class="io-icon-with-desc__info-text">
                                Фортепиано, Математика
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="io-story__inner io-container-inner">
                <div id="ioStoryCarousel" class="io-story__carousel carousel slide" data-bs-ride="carousel">
                    <div class="io-story__carousel-inner carousel-inner">
                        <div class="io-story__carousel-item carousel-item active" data-bs-interval="5000">
                            <picture>
                                <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/img-story-1.webp" width="332" height="221">
                                <img src="/wp-content/themes/interschooltemplate/images/img-story-1.jpg" alt="" width="332" height="221">
                            </picture>
                        </div>
                        <div class="io-story__carousel-item carousel-item" data-bs-interval="5000">
                            <picture>
                                <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/img-story-2.webp" width="332"
                                    height="221">
                                <img src="/wp-content/themes/interschooltemplate/images/img-story-2.jpg" alt="" width="332" height="221"
                                    >
                            </picture>
                        </div>
                        <div class="io-story__carousel-item carousel-item" data-bs-interval="5000">
                            <picture>
                                <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/img-story-3.webp" width="332"
                                    height="221">
                                <img src="/wp-content/themes/interschooltemplate/images/img-story-3.jpg" alt="" width="332" height="221"
                                    >
                            </picture>
                        </div>
                        <div class="io-story__carousel-item carousel-item" data-bs-interval="5000">
                            <picture>
                                <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/img-story-4.webp" width="332"
                                    height="221">
                                <img src="/wp-content/themes/interschooltemplate/images/img-story-4.jpg" alt="" width="332" height="221"
                                    >
                            </picture>
                        </div>
                        <div class="io-story__carousel-item carousel-item" data-bs-interval="5000">
                            <picture>
                                <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/img-story-5.webp" width="332"
                                    height="221">
                                <img src="/wp-content/themes/interschooltemplate/images/img-story-5.jpg" alt="" width="332" height="221"
                                    >
                            </picture>
                        </div>
                    </div>
                    <div class="io-story__carousel-indicators carousel-indicators">
                        <button type="button" data-bs-target="#ioStoryCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#ioStoryCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#ioStoryCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#ioStoryCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#ioStoryCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                </div>
                <div class="io-article__text-wrapper io-text-wrapper">
                    <p>Ксения родилась 6 сентября 2010 года. Первое знакомство с фортепиано произошло в 2 года и 8 месяцев. С тех пор инструмент является неотъемлемой частью жизни. У него есть даже имя — Муноми. Ксюша мечтает принять участие в Международном конкурсе памяти В. Горовица, а также играть «Кампанеллу» так ловко, как и Валентина Лисица.</p>
                    <q><p>Между занятиями музыкой Ксения посещает школу “Логос”, танцует, решает математические задачи, а также входит в состав жюри, коротое выбирает ежегодного победителя “Лучшая детская книга” <b>— отметила педагог Ксении Воробей</b></p></q>
                    <p>С тех пор инструмент является неотъемлемой частью жизни. У него есть даже имя — Муноми. Ксюша мечтает принять участие в Международном конкурсе памяти В. Горовица, а также играть «Кампанеллу» так ловко, как и Валентина Лисица.</p>
                </div>
                <div class="io-story__author-wrapper">
                    <h3 class="io-heading-3">Автор статьи:</h3>
                    <div class="io-story__author">
                        <div class="io-story__author-header">
                            <div class="io-story__author-header-photo">
                                <img src="/wp-content/themes/interschooltemplate/images/teach-mamchich.jpg" alt="">
                            </div>
                            <div class="io-story__author-header-text">
                                <p class="io-story__author-header-text-name">Снежана Мамчич</p>
                                <p class="io-story__author-header-text-work">Педагог фортепиано</p>
                            </div>
                        </div>
                        <div class="io-article__social io-social">
                            <a href="#" target="_blank" class="d-none d-lg-block io-tooltip facebook-link">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M22 12C22 6.47714 17.5229 1.99999 12 1.99999C6.47715 1.99999 2 6.47714 2 12C2 16.9913 5.65686 21.1283 10.4375 21.8785V14.8906H7.89844V12H10.4375V9.79687C10.4375 7.29062 11.9304 5.90624 14.2146 5.90624C15.3087 5.90624 16.4531 6.10155 16.4531 6.10155V8.56249H15.1921C13.9499 8.56249 13.5625 9.33333 13.5625 10.1242V12H16.3359L15.8926 14.8906H13.5625V21.8785C18.3431 21.1283 22 16.9913 22 12Z" stroke="#000000" stroke-linejoin="round"></path> </g></svg>
                                <span class="io-tooltip__text">Facebook</span>
                            </a>
                            <a href="#" target="_blank" class="d-none d-lg-block io-tooltip">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3.06167 7.24464C3.10844 6.22264 3.26846 5.56351 3.48487 5.00402L3.48778 4.99629C3.70223 4.42695 4.03818 3.91119 4.47224 3.48489L4.47833 3.47891L4.48431 3.47282C4.91096 3.0382 5.42691 2.70258 5.99575 2.4887L6.00556 2.48495C6.56378 2.26786 7.22162 2.10843 8.24447 2.06167M3.06167 7.24464C3.0125 8.33659 2.99997 8.67508 2.99997 11.5063C2.99997 14.3381 3.01181 14.6758 3.06164 15.768M3.06167 7.24464L3.06167 7.52008M3.48867 18.0168C3.70255 18.5856 4.03817 19.1015 4.47279 19.5282L4.47887 19.5342L4.48484 19.5402C4.91116 19.9743 5.42694 20.3103 5.99628 20.5247L6.00478 20.5279C6.56351 20.7446 7.22167 20.9041 8.24447 20.9509M3.48867 18.0168L3.48492 18.0069C3.26783 17.4487 3.1084 16.7909 3.06164 15.768M3.48867 18.0168L3.47585 17.9492M3.06164 15.768L3.07839 15.8562M3.06164 15.768L3.06164 15.4919M3.47585 17.9492L3.07839 15.8562M3.47585 17.9492C3.30704 17.5033 3.13322 16.881 3.07839 15.8562M3.47585 17.9492C3.48177 17.9649 3.48768 17.9803 3.49359 17.9955C3.70766 18.5726 4.04685 19.0952 4.48679 19.5256C4.91708 19.9655 5.43944 20.3046 6.01636 20.5187C6.47934 20.699 7.13172 20.8875 8.24431 20.9385C9.3671 20.9896 9.71399 21 12.5062 21C15.2985 21 15.6457 20.9896 16.7685 20.9385C17.8824 20.8874 18.534 20.6979 18.9954 20.519C19.5726 20.305 20.0953 19.9657 20.5257 19.5256C20.9655 19.0953 21.3046 18.573 21.5187 17.9961C21.699 17.5331 21.8875 16.8808 21.9384 15.7682C21.9895 14.6454 22 14.2978 22 11.5063C22 8.71472 21.9895 8.36684 21.9384 7.24405C21.8871 6.12427 21.6959 5.47168 21.5161 5.00992C21.2811 4.40322 20.9831 3.94437 20.525 3.48627C20.0678 3.02999 19.6102 2.73179 19.003 2.49654C18.5396 2.31537 17.8866 2.12531 16.7685 2.07406C16.6712 2.06964 16.5798 2.06552 16.4921 2.06168M3.07839 15.8562C3.07684 15.8273 3.07539 15.7981 3.07403 15.7685C3.06961 15.6712 3.06548 15.5797 3.06164 15.4919M8.24447 2.06167C9.33668 2.01184 9.67505 2 12.5062 2C15.3374 2 15.6756 2.01252 16.7675 2.06168M8.24447 2.06167L8.52062 2.06167M16.7675 2.06168L16.4921 2.06168M16.7675 2.06168C17.7897 2.10844 18.4489 2.26844 19.0085 2.48487L19.0162 2.48781C19.5855 2.70226 20.1013 3.03821 20.5276 3.47227L20.5335 3.4783L20.5396 3.48422C20.9737 3.91055 21.3096 4.42646 21.5239 4.99596L21.5275 5.00559C21.7446 5.56381 21.9041 6.22165 21.9508 7.2445M8.52062 2.06167L16.4921 2.06168M8.52062 2.06167C9.44548 2.02123 9.95666 2.01253 12.5062 2.01253C15.056 2.01253 15.5671 2.02124 16.4921 2.06168M8.52062 2.06167C8.43284 2.06551 8.34134 2.06964 8.24402 2.07406C7.13004 2.12512 6.47843 2.31464 6.01708 2.49358C5.43767 2.70837 4.91328 3.04936 4.48192 3.49186C4.0281 3.94756 3.73105 4.40422 3.49655 5.0094C3.31536 5.4728 3.12527 6.12614 3.07402 7.24434C3.06961 7.34135 3.06549 7.43257 3.06167 7.52008M21.9508 15.768C21.9041 16.7908 21.7446 17.449 21.5279 18.0077L21.5247 18.0162C21.3102 18.5856 20.9743 19.1013 20.5402 19.5276L20.5341 19.5336L20.5282 19.5397C20.1015 19.9743 19.5856 20.3099 19.0167 20.5238L19.0069 20.5276C18.4487 20.7447 17.7908 20.9041 16.768 20.9509M3.06164 15.4919C3.0212 14.567 3.0125 14.0558 3.0125 11.5063C3.0125 8.95591 3.0212 8.44544 3.06167 7.52008M3.06164 15.4919L3.06167 7.52008M10.8155 15.5881C11.3515 15.8101 11.926 15.9244 12.5062 15.9244C13.678 15.9244 14.8018 15.4589 15.6304 14.6304C16.4589 13.8018 16.9244 12.678 16.9244 11.5063C16.9244 10.3345 16.4589 9.21072 15.6304 8.38215C14.8018 7.55359 13.678 7.0881 12.5062 7.0881C11.926 7.0881 11.3515 7.20238 10.8155 7.42442C10.2794 7.64645 9.79239 7.97189 9.38213 8.38215C8.97187 8.79242 8.64643 9.27947 8.42439 9.81551C8.20236 10.3515 8.08808 10.9261 8.08808 11.5063C8.08808 12.0865 8.20236 12.661 8.42439 13.197C8.64643 13.7331 8.97187 14.2201 9.38213 14.6304C9.79239 15.0406 10.2794 15.3661 10.8155 15.5881ZM9.37229 8.37231C10.2035 7.54113 11.3308 7.07418 12.5062 7.07418C13.6817 7.07418 14.809 7.54113 15.6402 8.37231C16.4714 9.20349 16.9383 10.3308 16.9383 11.5063C16.9383 12.6817 16.4714 13.809 15.6402 14.6402C14.809 15.4714 13.6817 15.9383 12.5062 15.9383C11.3308 15.9383 10.2035 15.4714 9.37229 14.6402C8.54111 13.809 8.07416 12.6817 8.07416 11.5063C8.07416 10.3308 8.54111 9.20349 9.37229 8.37231ZM19.434 6.04229C19.434 6.37873 19.3003 6.70139 19.0625 6.93929C18.8246 7.17719 18.5019 7.31084 18.1655 7.31084C17.829 7.31084 17.5064 7.17719 17.2685 6.93929C17.0306 6.70139 16.8969 6.37873 16.8969 6.04229C16.8969 5.70585 17.0306 5.38319 17.2685 5.1453C17.5064 4.9074 17.829 4.77375 18.1655 4.77375C18.5019 4.77375 18.8246 4.9074 19.0625 5.1453C19.3003 5.38319 19.434 5.70585 19.434 6.04229Z" stroke="#000000" stroke-linejoin="round"></path> </g></svg>
                                <span class="io-tooltip__text">Instagram</span>
                            </a>
                            <a href="#" target="_blank" class="d-none d-lg-block io-tooltip twitter-link">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M21.9999 5.9246C21.2644 6.25051 20.4744 6.47071 19.6437 6.57025C20.4911 6.06289 21.1411 5.25782 21.4477 4.29948C20.6549 4.76984 19.7767 5.1116 18.8422 5.29481C18.0935 4.49855 17.0277 4 15.8474 4C13.5819 4 11.7445 5.8374 11.7445 8.10464C11.7445 8.42526 11.7815 8.73707 11.8502 9.03832C8.43877 8.86656 5.41666 7.23263 3.39252 4.75046C3.04019 5.35823 2.8376 6.06289 2.8376 6.81335C2.8376 8.23677 3.56252 9.4937 4.66267 10.2292C3.98972 10.2072 3.35729 10.0231 2.80413 9.71567V9.76852C2.80413 11.7565 4.21786 13.4151 6.09577 13.7921C5.75049 13.8855 5.38847 13.9348 5.015 13.9348C4.75075 13.9348 4.49267 13.9102 4.24252 13.8626C4.76485 15.4921 6.27987 16.6795 8.07587 16.7112C6.67095 17.8122 4.90137 18.4684 2.97942 18.4684C2.64823 18.4684 2.32144 18.449 1.99994 18.4112C3.8162 19.5765 5.97246 20.2547 8.28903 20.2547C15.8377 20.2547 19.9644 14.0026 19.9644 8.58029C19.9644 8.40412 19.9599 8.2262 19.952 8.05003C20.7536 7.47045 21.4494 6.74905 21.9982 5.92724L21.9999 5.9246Z" stroke="#000000" stroke-linejoin="round"></path> </g></svg>
                                <span class="io-tooltip__text">Twitter</span>
                            </a>
                            <a href="#" target="_blank" class="d-none d-lg-block io-tooltip telegram-link">
                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M21.997 12C21.997 17.5228 17.5198 22 11.997 22C6.47415 22 1.99699 17.5228 1.99699 12C1.99699 6.47715 6.47415 2 11.997 2C17.5198 2 21.997 6.47715 21.997 12ZM12.3553 9.38244C11.3827 9.787 9.43876 10.6243 6.52356 11.8944C6.05018 12.0827 5.8022 12.2669 5.77962 12.4469C5.74147 12.7513 6.12258 12.8711 6.64155 13.0343C6.71214 13.0565 6.78528 13.0795 6.86026 13.1038C7.37085 13.2698 8.05767 13.464 8.41472 13.4717C8.7386 13.4787 9.10009 13.3452 9.49918 13.0711C12.2229 11.2325 13.629 10.3032 13.7172 10.2831C13.7795 10.269 13.8658 10.2512 13.9243 10.3032C13.9828 10.3552 13.977 10.4536 13.9708 10.48C13.9331 10.641 12.4371 12.0318 11.6629 12.7515C11.4216 12.9759 11.2504 13.135 11.2154 13.1714C11.137 13.2528 11.0571 13.3298 10.9803 13.4038C10.506 13.8611 10.1502 14.204 11 14.764C11.4083 15.0331 11.7351 15.2556 12.0611 15.4776C12.4171 15.7201 12.7722 15.9619 13.2317 16.2631C13.3487 16.3398 13.4605 16.4195 13.5694 16.4971C13.9837 16.7925 14.3559 17.0579 14.8158 17.0155C15.083 16.991 15.359 16.7397 15.4992 15.9903C15.8305 14.2193 16.4817 10.382 16.6322 8.80081C16.6454 8.66228 16.6288 8.48498 16.6154 8.40715C16.6021 8.32932 16.5743 8.21842 16.4731 8.13633C16.3533 8.03911 16.1683 8.01861 16.0856 8.02C15.7095 8.0267 15.1324 8.22735 12.3553 9.38244Z" stroke="#000000" stroke-linejoin="round"></path> </g></svg>
                                <span class="io-tooltip__text">Telegram</span>
                            </a>
                            <a href="#" target="_blank" class="io-social__copy">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="11.75" stroke="black" stroke-width="0.5"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.23031 11.9082C8.39329 11.7446 8.65896 11.7446 8.82194 11.9082C8.98547 12.0712 8.98547 12.3368 8.82194 12.4998L7.39199 13.9303C7.03646 14.2853 6.8372 14.7669 6.8372 15.2693C6.8372 15.771 7.03646 16.2527 7.39199 16.6077C7.74697 16.9632 8.22864 17.1625 8.7304 17.1625C9.23273 17.1625 9.7144 16.9632 10.0694 16.6077L12.9298 13.7472C13.6694 13.0077 13.6694 11.8088 12.9298 11.0699L12.317 10.4565C12.1535 10.2935 12.1535 10.0278 12.317 9.86484C12.4805 9.7013 12.7456 9.7013 12.9092 9.86484L13.522 10.4777C14.5886 11.5437 14.588 13.2728 13.522 14.3389L10.661 17.1999C10.1492 17.7122 9.45486 17.9997 8.7304 17.9997C8.0065 17.9997 7.31162 17.7122 6.79981 17.1999C6.28744 16.6881 6 15.9932 6 15.2693C6 14.5448 6.28744 13.8505 6.79981 13.3387L8.23031 11.9082Z" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7713 12.0916C15.6084 12.2551 15.3427 12.2551 15.1797 12.0916C15.0162 11.9286 15.0162 11.6629 15.1797 11.4999L16.6108 10.0683C17.3497 9.32935 17.3486 8.13103 16.6096 7.39206C15.8707 6.65309 14.6724 6.65197 13.9334 7.39095L11.0718 10.2525C10.3323 10.992 10.3323 12.1909 11.0718 12.9299L11.6847 13.5433C11.8482 13.7063 11.8482 13.9719 11.6847 14.1349C11.5211 14.2984 11.256 14.2984 11.0925 14.1349L10.4796 13.5221C9.41304 12.456 9.41304 10.7269 10.4796 9.66089L13.3412 6.79876C14.4072 5.73328 16.1358 5.73384 17.2018 6.79988C18.2679 7.86592 18.2684 9.59447 17.2029 10.6605L15.7713 12.0916Z" fill="black"/>
                                </svg>
                                <span>Поделиться</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); // подключаем footer.php ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var currentUrl = encodeURIComponent(window.location.href);

        document.querySelector('.facebook-link').href = 'https://www.facebook.com/sharer/sharer.php?u=' + currentUrl;
        document.querySelector('.twitter-link').href = 'https://twitter.com/share?url=' + currentUrl;
        document.querySelector('.telegram-link').href = 'https://telegram.me/share/url?url=' + currentUrl;
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var copyLinkButton = document.querySelector('.io-social__copy');
        var spanElement = document.querySelector('.io-social__copy span'); // Получаем элемент span

        copyLinkButton.addEventListener('click', function(event) {
            event.preventDefault();

            if (window.innerWidth >= 992) {
                // Получаем текущий URL страницы
                var currentPageLink = window.location.href;

                // Создаем временный элемент в DOM для копирования
                var tempInput = document.createElement('input');
                tempInput.value = currentPageLink;
                document.body.appendChild(tempInput);

                // Выделяем текст внутри элемента input
                tempInput.select();
                tempInput.setSelectionRange(0, 99999); // Для мобильных устройств

                // Копируем выделенный текст в буфер обмена
                document.execCommand('copy');

                // Удаляем временный элемент из DOM
                document.body.removeChild(tempInput);

                // Изменяем текст внутри span
                spanElement.textContent = 'Ссылка скопирована';
            } else {
                if (navigator.share) {
                    // Получаем заголовок и URL страницы
                    var pageTitle = document.title;
                    var pageUrl = window.location.href;

                    // Получаем мета-описание страницы
                    var pageDescription = '';
                    var metaTags = document.getElementsByTagName('meta');
                    for (var i = 0; i < metaTags.length; i++) {
                        if (metaTags[i].getAttribute('name') === 'description') {
                            pageDescription = metaTags[i].getAttribute('content');
                            break;
                        }
                    }

                    navigator.share({
                        title: pageTitle,
                        text: pageDescription,
                        url: pageUrl,
                    })
                    .then(() => console.log('Успешное действие'))
                    .catch((error) => console.log('Ошибка при попытке поделиться', error));
                } else {
                    console.log('Ваш браузер не поддерживает Web Share API');
                }
            }
        });
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
<?php io_price(); ?>