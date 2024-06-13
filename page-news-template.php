<?php
/**
 * Новости - Одна news-template.html
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Новости - Одна
 */

include 'templates/price.php';
get_header(); // подключаем header.php ?>
<main>
    <?php // the_content(); ?>
    <section class="io-news-article io-section-first">
        <div class="container-xxl io-container-mw">
            <div class="io-news-article__grid">
                <div class="io-news-article__single">
                    <h1 class="io-heading-2 mb-3">Летние скидки! -1000 грн на каждые 16 уроков!</h1>
                    <div class="d-flex align-items-center io-grid-gap-150">
                        <p class="io-black-main-op-60 io-fw-semibold">18 Октября 2022</p>
                        <div class="io-article__social io-social">
                            <a href="#">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1098_2852)">
                                        <path d="M12.6667 0.00439453C19.2915 0.00439453 24.6625 5.37533 24.6625 12.0002C24.6625 18.625 19.2915 23.996 12.6667 23.996C6.04184 23.996 0.670898 18.625 0.670898 12.0002C0.670898 5.37533 6.04184 0.00439453 12.6667 0.00439453ZM10.2268 6.36486C8.21168 6.45721 7.12324 7.54424 7.03184 9.56033C6.95777 11.1813 6.95777 12.8195 7.03184 14.44C7.12324 16.4561 8.21168 17.5436 10.2268 17.6355C11.8478 17.7091 13.4861 17.7091 15.107 17.6355C17.1231 17.5431 18.2096 16.4561 18.302 14.44C18.3756 12.8191 18.3751 11.1813 18.302 9.56033C18.2101 7.54752 17.1198 6.45674 15.107 6.36486C13.4861 6.29127 11.8478 6.29127 10.2268 6.36486ZM16.8306 8.82721C16.8306 9.3733 16.3876 9.81627 15.8411 9.81627C15.2954 9.81627 14.8506 9.37143 14.8506 8.8258C14.8787 8.27033 15.2692 7.83533 15.8411 7.83533C16.367 7.83533 16.8207 8.29142 16.8306 8.82721ZM16.2793 8.8258C16.2793 8.58393 16.0829 8.38893 15.8411 8.38893C15.5884 8.38893 15.4154 8.58111 15.4032 8.82674C15.4032 9.07002 15.5982 9.26268 15.8411 9.26268C16.0726 9.26268 16.2751 9.06486 16.2793 8.8258ZM12.6667 14.2591C11.4193 14.2591 10.4078 13.248 10.4078 12.0002C10.4078 10.7514 11.4179 9.74127 12.6667 9.74127C13.9145 9.74127 14.9261 10.7524 14.9261 12.0002C14.9261 13.2485 13.915 14.2591 12.6667 14.2591ZM12.6662 13.7069C13.6375 13.683 14.3725 12.9892 14.3725 12.0002C14.3725 11.0585 13.6089 10.2949 12.6667 10.2949C11.7254 10.2949 10.9604 11.0589 10.9604 12.0002C10.9895 12.9527 11.6978 13.7069 12.6662 13.7069ZM9.8898 12.0002C9.8898 13.5344 11.132 14.778 12.6667 14.778C14.2 14.778 15.4436 13.533 15.4436 12.0002C15.4436 10.4674 14.2 9.22236 12.6667 9.22236C11.1207 9.25283 9.8898 10.4388 9.8898 12.0002ZM12.6667 8.67064C14.5065 8.67064 15.9976 10.1599 15.9976 12.0002C15.9976 13.841 14.5075 15.3306 12.6667 15.3306C10.8278 15.3306 9.33621 13.8396 9.33621 12.0002C9.33621 10.1603 10.8273 8.67064 12.6667 8.67064ZM10.2034 5.81361C11.844 5.73908 13.4898 5.73908 15.1304 5.81361C17.4353 5.91861 18.7482 7.23158 18.8537 9.53643C18.9278 11.1775 18.9278 12.8228 18.8537 14.4639C18.7478 16.772 17.439 18.0813 15.1304 18.1867C13.4898 18.2613 11.844 18.2613 10.2034 18.1867C7.89621 18.0817 6.58512 16.7716 6.48059 14.4639C6.40559 12.8233 6.40559 11.1775 6.48059 9.53643C6.58512 7.22877 7.89621 5.91908 10.2034 5.81361ZM15.0817 6.88377C16.8296 6.96346 17.7039 7.83721 17.7831 9.58517C17.8567 11.1935 17.8567 12.8069 17.7831 14.4152C17.7039 16.1664 16.8292 17.0369 15.0817 17.1166C13.4734 17.1897 11.86 17.1897 10.2521 17.1166C8.50418 17.0369 7.63043 16.1664 7.55074 14.4152C7.47715 12.8069 7.47715 11.1935 7.55074 9.58517C7.62996 7.83721 8.5009 6.96393 10.2521 6.88377C11.86 6.81064 13.4734 6.81064 15.0817 6.88377ZM15.0578 7.43549C13.4696 7.36283 11.8642 7.36283 10.2756 7.43549C8.81496 7.50205 8.16855 8.15127 8.10199 9.60908C8.02934 11.1972 8.02934 12.8031 8.10199 14.3913C8.16855 15.8524 8.81777 16.4988 10.2756 16.5649C11.8642 16.6371 13.4696 16.6371 15.0578 16.5649C16.5156 16.4988 17.1657 15.8524 17.2314 14.3913C17.304 12.8031 17.3045 11.1972 17.2314 9.60908C17.1657 8.15361 16.5128 7.50158 15.0578 7.43549ZM12.6667 0.558457C6.34746 0.558457 1.22449 5.68096 1.22449 12.0002C1.22449 18.3194 6.34746 23.4419 12.6667 23.4419C18.9859 23.4419 24.1089 18.3194 24.1089 12.0002C24.1089 5.68096 18.9859 0.558457 12.6667 0.558457Z" fill="black"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1098_2852">
                                            <rect width="24" height="24" fill="white" transform="translate(0.666992)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_1098_2858)">
                                        <path d="M12.667 0C19.2942 0 24.667 5.37281 24.667 12C24.667 18.6272 19.2942 24 12.667 24C6.0398 24 0.666992 18.6272 0.666992 12C0.666992 5.37281 6.0398 0 12.667 0ZM10.8721 17.6939V12.2311H10.1006C9.86621 12.2311 9.67637 12.0408 9.67637 11.8069V10.0772C9.67637 9.84422 9.86715 9.65344 10.1006 9.65344H10.8721V8.26266C10.8721 6.94781 11.9386 5.88188 13.2534 5.88188H15.2334C15.4678 5.88188 15.6576 6.07172 15.6576 6.30609V8.03531C15.6576 8.26969 15.4678 8.45953 15.2334 8.45953H14.0615C13.9279 8.45953 13.8178 8.56969 13.8178 8.70328V9.65438L15.2076 9.65344C15.442 9.66984 15.6318 9.82781 15.6318 10.0772C15.5906 10.6631 15.5334 11.2552 15.4837 11.842C15.4654 12.0609 15.2812 12.2311 15.0614 12.2311H13.8178V17.6939C13.8178 17.9269 13.6275 18.1177 13.394 18.1177L11.2964 18.1181C11.0625 18.1181 10.8721 17.9278 10.8721 17.6939ZM11.4262 17.565H13.2637V11.677H14.9423L15.0665 10.2061H13.2637V8.70328C13.2637 8.26266 13.6209 7.90547 14.0615 7.90547H15.1036V6.43594H13.2534C12.2442 6.43594 11.4262 7.25391 11.4262 8.26266V10.207H10.2304V11.677H11.4262V17.565ZM12.667 0.553594C6.34543 0.553594 1.22059 5.67844 1.22059 12C1.22059 18.3216 6.34543 23.4464 12.667 23.4464C18.9886 23.4464 24.1134 18.3216 24.1134 12C24.1134 5.67844 18.9886 0.553594 12.667 0.553594Z" fill="black"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1098_2858">
                                            <rect width="24" height="24" fill="white" transform="translate(0.666992)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="#" class="io-social__copy">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="11.75" stroke="black" stroke-width="0.5"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.23031 11.9082C8.39329 11.7446 8.65896 11.7446 8.82194 11.9082C8.98547 12.0712 8.98547 12.3368 8.82194 12.4998L7.39199 13.9303C7.03646 14.2853 6.8372 14.7669 6.8372 15.2693C6.8372 15.771 7.03646 16.2527 7.39199 16.6077C7.74697 16.9632 8.22864 17.1625 8.7304 17.1625C9.23273 17.1625 9.7144 16.9632 10.0694 16.6077L12.9298 13.7472C13.6694 13.0077 13.6694 11.8088 12.9298 11.0699L12.317 10.4565C12.1535 10.2935 12.1535 10.0278 12.317 9.86484C12.4805 9.7013 12.7456 9.7013 12.9092 9.86484L13.522 10.4777C14.5886 11.5437 14.588 13.2728 13.522 14.3389L10.661 17.1999C10.1492 17.7122 9.45486 17.9997 8.7304 17.9997C8.0065 17.9997 7.31162 17.7122 6.79981 17.1999C6.28744 16.6881 6 15.9932 6 15.2693C6 14.5448 6.28744 13.8505 6.79981 13.3387L8.23031 11.9082Z" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M15.7713 12.0916C15.6084 12.2551 15.3427 12.2551 15.1797 12.0916C15.0162 11.9286 15.0162 11.6629 15.1797 11.4999L16.6108 10.0683C17.3497 9.32935 17.3486 8.13103 16.6096 7.39206C15.8707 6.65309 14.6724 6.65197 13.9334 7.39095L11.0718 10.2525C10.3323 10.992 10.3323 12.1909 11.0718 12.9299L11.6847 13.5433C11.8482 13.7063 11.8482 13.9719 11.6847 14.1349C11.5211 14.2984 11.256 14.2984 11.0925 14.1349L10.4796 13.5221C9.41304 12.456 9.41304 10.7269 10.4796 9.66089L13.3412 6.79876C14.4072 5.73328 16.1358 5.73384 17.2018 6.79988C18.2679 7.86592 18.2684 9.59447 17.2029 10.6605L15.7713 12.0916Z" fill="black"/>
                                </svg>
                                <span>Копировать</span>
                            </a>
                        </div>
                    </div>
                    <div class="io-news-article__img mt-4 mb-5">
                        <picture>
                            <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/1920x845_summer_rus.webp">
                            <img src="/wp-content/themes/interschooltemplate/images/1920x845_summer_rus.jpg" alt="test">
                        </picture>
                    </div>
                    <div class="io-article__text-wrapper io-text-wrapper">
                        <p>Дорогие студенты и родители! Мы преподаем онлайн и рады сообщить Вам, что мы добавили несколько новых предметов.</p>
                        <p>Кроме музыки, живописи, хореографии, у нас появились педагоги:</p>                            
                        <ul>
                            <li>Математики, испанского языка, японского языка, немецкого языка, украинского и русского языков.</li>
                            <li>Уроки также могут проходить на английском языке для иностранных студентов.</li>
                        </ul>
                        <p>Ждем Вас, присоединяйтесь на наши онлайн уроки для детей и взрослых.</p>
                    </div>
                </div>
                <div class="io-news-article__sidebar">
                    <div class="io-news-article__list io-block">
                        <h2 class="io-news-article__title">Новости</h2>
                        <div class="io-news__grid">
                            <a class="io-news-article__item" href="<?php echo get_permalink(127); ?>">                            
                                <div class="io-news__item-data">
                                    <div class="io-news__item-data-top">
                                        <span class="io-news__item-date">18 октября 2022</span>
                                        <h2 class="io-news__item-heading">Летние скидки! -1000 грн на каждые 16 уроков</h2>
                                    </div>
                                    <p class="io-news__item-text">Дорогие студенты и родители! Мы преподаем онлайн и рады сообщить Вам, что мы добавили несколько новых предметов.</p>
                                </div>
                            </a>
                            <a class="io-news-article__item" href="<?php echo get_permalink(127); ?>">                            
                                <div class="io-news__item-data">
                                    <div class="io-news__item-data-top">
                                        <span class="io-news__item-date">03 июня 2022</span>
                                        <h2 class="io-news__item-heading">Приведи друга и получи скидку 15%</h2>
                                    </div>
                                    <p class="io-news__item-text">Даем скидку за друзей! Приведи друга, пусть он скажет, что пришел по рекомендации от тебя и получи скидку 15%...</p>
                                </div>
                            </a>
                            <a class="io-news-article__item" href="<?php echo get_permalink(127); ?>">                            
                                <div class="io-news__item-data">
                                    <div class="io-news__item-data-top">
                                        <span class="io-news__item-date">02 июня 2022</span>
                                        <h2 class="io-news__item-heading">Мы преподаем онлайн</h2>
                                    </div>
                                    <p class="io-news__item-text">Дорогие студенты и родители! Мы преподаем онлайн и рады сообщить Вам, что мы добавили несколько новых предметов.</p>
                                </div>
                            </a>
                            <a class="io-news-article__item" href="<?php echo get_permalink(127); ?>">                            
                                <div class="io-news__item-data">
                                    <div class="io-news__item-data-top">
                                        <span class="io-news__item-date">01 июня 2022</span>
                                        <h2 class="io-news__item-heading">У нас появился логопед</h2>
                                    </div>
                                    <p class="io-news__item-text">Дорогие друзья, рады Вам сообщить, что у нас в штате появился логопед. Если Вы хотите исправить дикцию, развивать...</p>
                                </div>
                            </a>
                            <a class="io-news-article__item" href="<?php echo get_permalink(127); ?>">                            
                                <div class="io-news__item-data">
                                    <div class="io-news__item-data-top">
                                        <span class="io-news__item-date">23 января 2022</span>
                                        <h2 class="io-news__item-heading">Музыкальный конкурс MONTESSORI STARS ONLINE</h2>
                                    </div>
                                    <p class="io-news__item-text">Дорогие студенты, мы приглашаем вас к участию в онлайн конкурсе для учащихся музыкальных классов MONTESSORI STARS ONLINE.</p>
                                </div>
                            </a>
                            <a class="io-news-article__item" href="<?php echo get_permalink(127); ?>">                            
                                <div class="io-news__item-data">
                                    <div class="io-news__item-data-top">
                                        <span class="io-news__item-date">22 января 2022</span>
                                        <h2 class="io-news__item-heading">Концерт студентов и преподавателей состоится 30 января 2022!</h2>
                                    </div>
                                    <p class="io-news__item-text">Дорогие студенты и родители! 30 января мы встретимся на яркой сцене 32 Джаз клуб по адресу ул. Воздвиженская, 32.</p>
                                </div>
                            </a>
                            <a class="io-news-article__item" href="<?php echo get_permalink(127); ?>">                            
                                <div class="io-news__item-data">
                                    <div class="io-news__item-data-top">
                                        <span class="io-news__item-date">21 января 2022</span>
                                        <h2 class="io-news__item-heading">Бесплатный мастер-класс по крою и шитью!</h2>
                                    </div>
                                    <p class="io-news__item-text">Дорогие девушки и мамы! Приглашаем Вас на бесплатный мастер-класс по крою и шитью! Ограниченное предложение – всего 30 мест!</p>
                                </div>
                            </a>
                            <a class="io-news-article__item" href="<?php echo get_permalink(127); ?>">                            
                                <div class="io-news__item-data">
                                    <div class="io-news__item-data-top">
                                        <span class="io-news__item-date">09 января 2022</span>
                                        <h2 class="io-news__item-heading">Скидка 500 грн. на первый абонемент для новичков!</h2>
                                    </div>
                                    <p class="io-news__item-text">Чтобы полностью погрузиться в искусство – сначала нужно попробовать! И мы дарим 500 грн. каждому новому студенты на первый...</p>
                                </div>
                            </a>
                            <a class="io-news-article__item" href="<?php echo get_permalink(127); ?>">                            
                                <div class="io-news__item-data">
                                    <div class="io-news__item-data-top">
                                        <span class="io-news__item-date">01 января 2022</span>
                                        <h2 class="io-news__item-heading">Акция на абонементы продлена до 9 января 2022!</h2>
                                    </div>
                                    <p class="io-news__item-text">С Новым годом наших студентов и родителей! Желаем вашим семьям счастья, пусть каждый будет здоров!! Успехов в учебе нашим...</p>
                                </div>
                            </a>
                            <a class="io-news-article__item" href="<?php echo get_permalink(127); ?>">                            
                                <div class="io-news__item-data">
                                    <div class="io-news__item-data-top">
                                        <span class="io-news__item-date">26 декабря 2021</span>
                                        <h2 class="io-news__item-heading">Акция продлена до 31 декабря!!</h2>
                                    </div>
                                    <p class="io-news__item-text">Дорогие друзья! По Вашим многочисленным просьбам мы продлеваем Новогодние скидки до 31 декабря!!</p>
                                </div>
                            </a>
                        </div>
                        <div class="io-news__bottom-wrapper io-flex-end">
                            <div class="io-pagination">
                                <div class="io-pagination__count">
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
            </div>
        </div>
    </section>
</main>
<?php get_footer(); // подключаем footer.php ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var copyLinkButton = document.querySelector('.io-social__copy');

        copyLinkButton.addEventListener('click', function(event) {
            event.preventDefault();
            
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

            // Можете добавить какое-либо уведомление о том, что ссылка скопирована
            // alert('Ссылка скопирована: ' + currentPageLink);
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