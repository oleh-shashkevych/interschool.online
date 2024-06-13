<?php
/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<footer class="io-footer">
    <div class="container-xxl io-container-mw">
        <div class="io-footer__inner">
            <div class="io-footer__item">
                <a class="io-footer__logo" href="<?php echo esc_url(apply_filters('wpml_home_url', get_home_url())); ?>" aria-label="Montessori Center"></a>
            </div>
            <div class="io-footer__item">
                <div class="io-footer__item-title">
                    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                    Монтессори центр
                    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                    Montessori Center
                    <?php } ?>
                </div>
                <nav class="io-footer__nav">
                    <?php
                        $args = array(
                            'menu' => 'mc-ru',
                            'items_wrap' => '%3$s',
                            'echo' => '',
                            'container' => false,
                            'depth' => 0
                        );                         
                        echo strip_tags( wp_nav_menu( $args ), '<a>' );
                    ?>
                </nav>
            </div>
            <div class="io-footer__item">
                <div class="io-footer__item-title">
                    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                    Студенту
                    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                    For the Student
                    <?php } ?>
                </div>
                <!-- <nav class="io-footer__nav ioMenuGift"> -->
                <nav class="io-footer__nav">
                    <?php
                        $args = array(
                            'menu' => 'student-ru',
                            'items_wrap' => '%3$s',
                            'echo' => '',
                            'container' => false,
                            'depth' => 0
                        );                         
                        echo strip_tags( wp_nav_menu( $args ), '<a>' );
                    ?>
                </nav>
            </div>
            <div class="io-footer__item">
                <div class="io-footer__item-title">
                    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                    Педагогу
                    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                    For the Teacher
                    <?php } ?>
                </div>
                <nav class="io-footer__nav">
                    <?php
                        $args = array(
                            'menu' => 'lector-ru',
                            'items_wrap' => '%3$s',
                            'echo' => '',
                            'container' => false,
                            'depth' => 0
                        );                         
                        echo strip_tags( wp_nav_menu( $args ), '<a>' );
                    ?>
                </nav>
            </div>
            <div class="io-footer__item">
                <div class="io-footer__item-title">
                    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                    Договоры
                    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                    Legal Agreement
                    <?php } ?>
                </div>
                <nav class="io-footer__nav">
                    <?php
                        $args = array(
                            'menu' => 'dogovor-ru',
                            'items_wrap' => '%3$s',
                            'echo' => '',
                            'container' => false,
                            'depth' => 0
                        );                         
                        echo strip_tags( wp_nav_menu( $args ), '<a>' );
                    ?>
                </nav>
            </div>
            <div class="io-footer__item">
                <div class="line"></div>
                <div class="io-copyright">
                    © 2011 - $$$$ <span class="d-none d-sm-inline">Montessori Center International Online School</span>
                </div>
                <div class="io-footer__social">
                    <a href="https://www.instagram.com/interschool.online" aria-label="insta" target="_blank" class="io-tooltip">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1098_2852)">
                                <path d="M12.6667 0.00439453C19.2915 0.00439453 24.6625 5.37533 24.6625 12.0002C24.6625 18.625 19.2915 23.996 12.6667 23.996C6.04184 23.996 0.670898 18.625 0.670898 12.0002C0.670898 5.37533 6.04184 0.00439453 12.6667 0.00439453ZM10.2268 6.36486C8.21168 6.45721 7.12324 7.54424 7.03184 9.56033C6.95777 11.1813 6.95777 12.8195 7.03184 14.44C7.12324 16.4561 8.21168 17.5436 10.2268 17.6355C11.8478 17.7091 13.4861 17.7091 15.107 17.6355C17.1231 17.5431 18.2096 16.4561 18.302 14.44C18.3756 12.8191 18.3751 11.1813 18.302 9.56033C18.2101 7.54752 17.1198 6.45674 15.107 6.36486C13.4861 6.29127 11.8478 6.29127 10.2268 6.36486ZM16.8306 8.82721C16.8306 9.3733 16.3876 9.81627 15.8411 9.81627C15.2954 9.81627 14.8506 9.37143 14.8506 8.8258C14.8787 8.27033 15.2692 7.83533 15.8411 7.83533C16.367 7.83533 16.8207 8.29142 16.8306 8.82721ZM16.2793 8.8258C16.2793 8.58393 16.0829 8.38893 15.8411 8.38893C15.5884 8.38893 15.4154 8.58111 15.4032 8.82674C15.4032 9.07002 15.5982 9.26268 15.8411 9.26268C16.0726 9.26268 16.2751 9.06486 16.2793 8.8258ZM12.6667 14.2591C11.4193 14.2591 10.4078 13.248 10.4078 12.0002C10.4078 10.7514 11.4179 9.74127 12.6667 9.74127C13.9145 9.74127 14.9261 10.7524 14.9261 12.0002C14.9261 13.2485 13.915 14.2591 12.6667 14.2591ZM12.6662 13.7069C13.6375 13.683 14.3725 12.9892 14.3725 12.0002C14.3725 11.0585 13.6089 10.2949 12.6667 10.2949C11.7254 10.2949 10.9604 11.0589 10.9604 12.0002C10.9895 12.9527 11.6978 13.7069 12.6662 13.7069ZM9.8898 12.0002C9.8898 13.5344 11.132 14.778 12.6667 14.778C14.2 14.778 15.4436 13.533 15.4436 12.0002C15.4436 10.4674 14.2 9.22236 12.6667 9.22236C11.1207 9.25283 9.8898 10.4388 9.8898 12.0002ZM12.6667 8.67064C14.5065 8.67064 15.9976 10.1599 15.9976 12.0002C15.9976 13.841 14.5075 15.3306 12.6667 15.3306C10.8278 15.3306 9.33621 13.8396 9.33621 12.0002C9.33621 10.1603 10.8273 8.67064 12.6667 8.67064ZM10.2034 5.81361C11.844 5.73908 13.4898 5.73908 15.1304 5.81361C17.4353 5.91861 18.7482 7.23158 18.8537 9.53643C18.9278 11.1775 18.9278 12.8228 18.8537 14.4639C18.7478 16.772 17.439 18.0813 15.1304 18.1867C13.4898 18.2613 11.844 18.2613 10.2034 18.1867C7.89621 18.0817 6.58512 16.7716 6.48059 14.4639C6.40559 12.8233 6.40559 11.1775 6.48059 9.53643C6.58512 7.22877 7.89621 5.91908 10.2034 5.81361ZM15.0817 6.88377C16.8296 6.96346 17.7039 7.83721 17.7831 9.58517C17.8567 11.1935 17.8567 12.8069 17.7831 14.4152C17.7039 16.1664 16.8292 17.0369 15.0817 17.1166C13.4734 17.1897 11.86 17.1897 10.2521 17.1166C8.50418 17.0369 7.63043 16.1664 7.55074 14.4152C7.47715 12.8069 7.47715 11.1935 7.55074 9.58517C7.62996 7.83721 8.5009 6.96393 10.2521 6.88377C11.86 6.81064 13.4734 6.81064 15.0817 6.88377ZM15.0578 7.43549C13.4696 7.36283 11.8642 7.36283 10.2756 7.43549C8.81496 7.50205 8.16855 8.15127 8.10199 9.60908C8.02934 11.1972 8.02934 12.8031 8.10199 14.3913C8.16855 15.8524 8.81777 16.4988 10.2756 16.5649C11.8642 16.6371 13.4696 16.6371 15.0578 16.5649C16.5156 16.4988 17.1657 15.8524 17.2314 14.3913C17.304 12.8031 17.3045 11.1972 17.2314 9.60908C17.1657 8.15361 16.5128 7.50158 15.0578 7.43549ZM12.6667 0.558457C6.34746 0.558457 1.22449 5.68096 1.22449 12.0002C1.22449 18.3194 6.34746 23.4419 12.6667 23.4419C18.9859 23.4419 24.1089 18.3194 24.1089 12.0002C24.1089 5.68096 18.9859 0.558457 12.6667 0.558457Z" fill="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1098_2852">
                                    <rect width="24" height="24" fill="white" transform="translate(0.666992)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="io-tooltip__text">Instagram</span>
                    </a>
                    <a href="https://www.youtube.com/@MontessoriCenter" aria-label="youtube" target="_blank" class="io-tooltip">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1108_2972)">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M18.0222 10.48V13.5203C18.0222 15.055 16.7786 16.2991 15.2439 16.2991H8.75547C7.22125 16.2991 5.97719 15.055 5.97719 13.5203V10.48C5.97719 8.94533 7.22125 7.70127 8.75547 7.70127H15.2439C16.7786 7.70127 18.0222 8.94533 18.0222 10.48ZM15.2439 8.25486C16.473 8.25486 17.4686 9.25096 17.4686 10.48V13.5203C17.4686 14.7494 16.473 15.7455 15.2439 15.7455H8.75547C7.52687 15.7455 6.53078 14.7494 6.53078 13.5203V10.48C6.53078 9.25096 7.52687 8.25486 8.75547 8.25486H15.2439Z" fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7852 12.3958L11.1948 13.8161C10.8939 13.9783 10.5737 13.7547 10.5737 13.4242V10.511C10.5737 10.1819 10.8981 9.95033 11.2037 10.1242L13.8105 11.6181C14.1156 11.7958 14.0861 12.2308 13.7852 12.3958ZM11.1273 13.2227L13.3609 11.9978L11.1273 10.7172V13.2227Z" fill="black" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9997 0.00439453C18.6245 0.00439453 23.9955 5.37533 23.9955 12.0002C23.9955 18.625 18.6245 23.996 11.9997 23.996C5.37484 23.996 0.00390625 18.625 0.00390625 12.0002C0.00390625 5.37533 5.37484 0.00439453 11.9997 0.00439453ZM0.5575 12.0002C0.5575 5.68096 5.68047 0.558457 11.9997 0.558457C18.3189 0.558457 23.4419 5.68096 23.4419 12.0002C23.4419 18.3194 18.3189 23.4419 11.9997 23.4419C5.68047 23.4419 0.5575 18.3194 0.5575 12.0002Z" fill="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1108_2972">
                                    <rect width="24" height="24" rx="12" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="io-tooltip__text">YouTube</span>
                    </a>
                    <a href="https://www.facebook.com/interschool.online/" aria-label="fb" target="_blank" class="io-tooltip">
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1098_2858)">
                                <path d="M12.667 0C19.2942 0 24.667 5.37281 24.667 12C24.667 18.6272 19.2942 24 12.667 24C6.0398 24 0.666992 18.6272 0.666992 12C0.666992 5.37281 6.0398 0 12.667 0ZM10.8721 17.6939V12.2311H10.1006C9.86621 12.2311 9.67637 12.0408 9.67637 11.8069V10.0772C9.67637 9.84422 9.86715 9.65344 10.1006 9.65344H10.8721V8.26266C10.8721 6.94781 11.9386 5.88188 13.2534 5.88188H15.2334C15.4678 5.88188 15.6576 6.07172 15.6576 6.30609V8.03531C15.6576 8.26969 15.4678 8.45953 15.2334 8.45953H14.0615C13.9279 8.45953 13.8178 8.56969 13.8178 8.70328V9.65438L15.2076 9.65344C15.442 9.66984 15.6318 9.82781 15.6318 10.0772C15.5906 10.6631 15.5334 11.2552 15.4837 11.842C15.4654 12.0609 15.2812 12.2311 15.0614 12.2311H13.8178V17.6939C13.8178 17.9269 13.6275 18.1177 13.394 18.1177L11.2964 18.1181C11.0625 18.1181 10.8721 17.9278 10.8721 17.6939ZM11.4262 17.565H13.2637V11.677H14.9423L15.0665 10.2061H13.2637V8.70328C13.2637 8.26266 13.6209 7.90547 14.0615 7.90547H15.1036V6.43594H13.2534C12.2442 6.43594 11.4262 7.25391 11.4262 8.26266V10.207H10.2304V11.677H11.4262V17.565ZM12.667 0.553594C6.34543 0.553594 1.22059 5.67844 1.22059 12C1.22059 18.3216 6.34543 23.4464 12.667 23.4464C18.9886 23.4464 24.1134 18.3216 24.1134 12C24.1134 5.67844 18.9886 0.553594 12.667 0.553594Z" fill="black" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1098_2858">
                                    <rect width="24" height="24" fill="white" transform="translate(0.666992)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="io-tooltip__text">Facebook</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

<!--ЛОГГЕР для запоминания открытия-закрытия модальных окон. Благодаря нему, закрыть мод. окна можно клавишей back на смартфоне (и на ПК) Привязан к скрипту JS-->
<div id="modal_log" class="panel-body" role="log"></div>

<!--Чат-->
<button type="button" class="io-chat-button" id="toOpenChat" title="" aria-label="Онлайн чат">
    <div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#FC5588" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"></path></svg>
        <svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#FC5588"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#FC5588" d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504 738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512 828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496 285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512 195.2 285.696a64 64 0 0 1 0-90.496z"></path></g></svg>
    </div>
    Чат
</button>
<div class="io-chat">
    <button class="io-chat__item io-chat__item--close">
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none"><g clip-path="url(#clip0_940_2854)"><path d="M9.42042 6.50003C9.42042 6.7151 9.3383 6.93013 9.17441 7.0941L4.01463 12.2538C3.6864 12.5821 3.15424 12.5821 2.82615 12.2538C2.49805 11.9257 2.49805 11.3937 2.82615 11.0654L7.39181 6.50003L2.82631 1.93461C2.49821 1.60639 2.49821 1.07438 2.82631 0.746316C3.1544 0.41793 3.68656 0.41793 4.01479 0.746316L9.17457 5.90596C9.33849 6.07001 9.42042 6.28505 9.42042 6.50003Z" fill="#218BF1"/></g><defs><clipPath id="clip0_940_2854"><rect width="12" height="12" fill="white" transform="translate(0 0.5)"/></clipPath></defs></svg>
    </button>
    <a href="https://wa.me/+380507753353" target="_blank" class="io-chat__item io-tooltip">
        <img src="/wp-content/uploads/2024/05/Ресурс-1.webp" alt="">
        <span class="io-tooltip__text left">WhatsApp</span>
    </a>
    <a href="https://www.messenger.com/t/montessori.ua" target="_blank" class="io-chat__item io-tooltip">
        <img src="/wp-content/themes/interschooltemplate/images/io-messenger.png" alt="">
        <span class="io-tooltip__text left">Messenger</span>
    </a>
    <a href="https://telegram.me/+380507753353" target="_blank" class="io-chat__item io-tooltip">
        <img src="/wp-content/uploads/2024/05/Ресурс-3.webp" alt="">
        <span class="io-tooltip__text left">Telegram</span>
    </a>
    <a href="viber://chat?number=%2B380507753337" target="_blank" class="io-chat__item io-tooltip">
        <img src="/wp-content/uploads/2024/05/Ресурс-4.webp" alt="">
        <span class="io-tooltip__text left">Viber</span>
    </a>
    <a href="https://www.instagram.com/montessoriua/" target="_blank" class="io-chat__item io-tooltip">
        <img src="/wp-content/uploads/2024/05/Ресурс-5.webp" alt="">
        <span class="io-tooltip__text left">Instagram</span>
    </a>
</div>
<!--Кнопка страницы вверх-->
<button type="button" class="io-top-button" onclick="topFunction()" id="toTopButton" title="" aria-label="Прокрутка страницы вверх"></button>

<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
<script>
    // Прокрутка вверх через 500 мс
    setTimeout(() => {
        window.scrollTo({
            top: 0,
            behavior: 'auto'
        });
    }, 300);
</script>

<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        var links = document.getElementsByClassName('io-social__facebook');
        for (var i = 0; i < links.length; i++) {
            if (links[i].getAttribute('href') === 'https://www.facebook.com/montessori.ua') {
                links[i].setAttribute('href', 'https://www.messenger.com/t/montessori.ua');
                var img = links[i].getElementsByTagName('img')[0];
                if (img && img.getAttribute('src') === '/wp-content/themes/interschooltemplate/images/io-facebook.png') {
                    img.setAttribute('src', '/wp-content/uploads/2024/05/Ресурс-2.webp');
                }
                var tooltip = links[i].getElementsByClassName('io-tooltip__text')[0];
                if (tooltip && tooltip.textContent === 'Facebook') {
                    tooltip.textContent = 'Facebook Messenger';
                }
            }
        }
    });
</script>

<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        // Находим блок на странице
        let block = document.querySelector('.io-demo-wrapper-all');

        if (block) {
            // Создаем крестик
            let cross = document.createElement('div');
            cross.innerHTML = '✖';
            cross.style.display = 'flex';
            cross.style.alignItems = 'center';
            cross.style.justifyContent = 'center';
            cross.style.position = 'absolute';
            cross.style.right = 'var(--io-size-150)';
            cross.style.top = '50%';
            cross.style.transform = 'translateY(-50%)';
            cross.style.cursor = 'pointer';
            cross.style.width = 'var(--io-size-250)';
            cross.style.height = 'var(--io-size-250)';
            // cross.style.backgroundColor = 'var(--io-purple-secondary)';
            cross.style.borderRadius = '50%';
            cross.style.fontSize = '28px';
            cross.style.color = 'var(--io-purple-main)';

            // Добавляем крестик в блок
            block.appendChild(cross);

            // Добавляем обработчик события клика на крестик
            cross.addEventListener('click', () => {
                block.classList.add("remove");
            });
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var bodyClasses = document.body.className.split(' ');
        for (var i = 0; i < bodyClasses.length; i++) {
            if (bodyClasses[i].startsWith('page-template-page-course-')) {
                document.body.classList.add('scrollable');
                break;
            }
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var gallery = document.getElementById('galereya') || document.getElementById('gallery');
        if (gallery) {
            var observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.attributeName === "class") {
                        var attributeValue = mutation.target.getAttribute(mutation.attributeName);
                        if (attributeValue && attributeValue.includes('active')) {
                            var items = gallery.getElementsByClassName('io-gallery__item');
                            for (var i = 0; i < items.length; i++) {
                                items[i].classList.add('show');
                            }
                        } else {
                            var items = gallery.getElementsByClassName('io-gallery__item');
                            for (var i = 0; i < items.length; i++) {
                                items[i].classList.remove('show');
                            }
                        }
                    }
                });
            });
            observer.observe(gallery, { attributes: true });
        }
    });
</script>

<script>
    // Отложенная загрузка через 500 мс
    setTimeout(() => {
        document.getElementById('preloader').style.display = 'none';
    }, 500);
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var button = document.getElementById('toOpenChat');
        var chat = document.querySelector('.io-chat');
        var close = document.querySelector('.io-chat__item--close');

        button.style.opacity = '0'; // Изначально кнопка невидима
        chat.style.opacity = '0';

        button.addEventListener('click', function(event) {
            event.stopPropagation(); // Добавлено для предотвращения срабатывания обработчика на document
            chat.classList.toggle('active');
            button.classList.toggle('active');
        });

        close.addEventListener('click', function(event) {
            event.stopPropagation(); // Добавлено для предотвращения срабатывания обработчика на document
            chat.classList.remove('active');
            button.classList.remove('active');
        });

        window.addEventListener('scroll', function() {
            if (window.scrollY >= 100) { // Если прокрутка больше или равна 100 пикселей
                button.style.opacity = '1'; // Делаем кнопку видимой
                chat.style.opacity = '1';
            } else {
                button.style.opacity = '0'; // Иначе делаем кнопку невидимой
                chat.style.opacity = '0';
                if (chat.classList.contains('active')) { // Если чат открыт
                    chat.classList.remove('active'); // Закрываем чат
                    button.classList.remove('active');
                }
            }
        });

        document.addEventListener('click', function(event) {
            if (!event.target.closest('.io-chat') && chat.classList.contains('active')) {
                chat.classList.remove('active');
                button.classList.remove('active');
            }
        });
    });
</script>

<script>
    //Скрипт для логирования открытий-закрытий модальных окон, чтобы их можно было бы закрыть кнопкой Back, особенно на мобильных устройствах (удобство пользователя). Иначе кнопка Back отправляет на пред. страницу или вовсе закрывает браузер.
    var $ = jQuery.noConflict();
    var $modal = $('.io-smart-back-modal');
    var $log = $("#modal_log");

    function log(msg) {
        $log.append("<p>" + msg + " / History.state=" + JSON.stringify(window.history.state) + ", size=" + window.history.length + "</p>");
    };

    function historyListener(event, modalw) {
        log("History pop");
        $modal.each(function(index, element) {
            element.dispatchEvent(modal_hidden_event)
        });
    }

    log("Ready!");

    $modal.each(function(index) {
        $(this).on('modal_shown', function(event) {
            log("Modal visible");

            $(this).attr('aria-hidden', false);
            window.history.pushState($(this).attr("id"), "Modal title", document.location);
            log("Pushed state");

            window.addEventListener('popstate', historyListener, false);

            setTimeout(function() {
                $(this).focus();
                $('#debug').text(document.activeElement.id);
                log("Focus on " + document.activeElement.id);
            }, 1);
        });
    });

    $modal.each(function(index) {
        $(this).on('modal_hidden', function(event) {
            log("Modal hidden");

            $(this).attr('aria-hidden', true);

            if (window.history.state === $(this).attr("id")) {
                history.go(-1);
                log("Poped state");
            }

            window.removeEventListener('popstate', historyListener);
        });
    });

</script>
<script>
    //Кнопка прокрутки страницы вверх
    let topbutton = document.getElementById("toTopButton");

    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700) {
            topbutton.style.opacity = "1";
            topbutton.style.visibility = "visible";
        } else {
            topbutton.style.opacity = "0";
            topbutton.style.visibility = "hidden";
        }

        // Если прокрутка достигла низа страницы
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            topbutton.classList.add('bottom'); // Изменяем положение кнопки
        } else {
            topbutton.classList.remove('bottom'); // Возвращаем положение кнопки в исходное состояние
        }
    }

    function topFunction() {
        document.body.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

        document.documentElement.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    }
</script>
<script>
    //Выставление актуального года в копирайтах)
    var copyrightElements = document.querySelectorAll(".io-copyright")
    copyrightElements.forEach(function(copyrightElement) {
        copyrightElement.innerHTML = copyrightElement.innerHTML.replace("$$$$", new Date().getFullYear());
    })

</script>
<script>
    function dropdownByClick(button, dropdownContent) {
        var dropdowns = document.getElementsByClassName("io-dropdown-click__content");
        var buttons = document.getElementsByClassName("io-dropdown-click__link");

        for (var i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            var openButton = buttons[i];

            if (openDropdown !== dropdownContent && openDropdown.classList.contains('show')) {
                if (window.innerWidth >= 360) {
                    openDropdown.classList.remove('show');
                    openButton.classList.remove('focused');
                    if (window.innerWidth < 992) {
                        var offsetTop = button.offsetTop;
                        dropdownContent.scrollTop = offsetTop;
                        openDropdown.style.height = '0';
                    }
                }
            }
        }

        var isContentShown = dropdownContent.classList.toggle("show");

        if (window.innerWidth < 992) {
            // Вычисляем высоту контента и устанавливаем ее при добавлении класса "show"
            if (isContentShown) {
                var contentHeight = dropdownContent.scrollHeight + 'px';
                dropdownContent.style.height = contentHeight;
            } else {
                // При удалении класса "show" устанавливаем высоту обратно в 0
                dropdownContent.style.height = '0';
            }
        }

        button.classList.toggle("focused");
    }

    window.onclick = function(event) {
        var dropdowns = document.getElementsByClassName("io-dropdown-click__content");
        var buttons = document.getElementsByClassName("io-dropdown-click__link");

        if (window.innerWidth >= 360) { // Изменено условие для экранов > 991.5px
            for (var i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                var openButton = buttons[i];

                if (!event.target.matches('.io-dropdown-click__link') && openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                    openButton.classList.remove('focused');
                }
            }
        }
    }
</script>
<script>
    var x, i, j, l, ll, selElmnt, a, b, c;
    /*look for any elements with the class "custom-select":*/
    x = document.getElementsByClassName("io-select");
    l = x.length;
    for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "io-select__selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /* Add the class to the selected item wrapper if the value is 0 */
        if (selElmnt.options[selElmnt.selectedIndex].value === "0") {
            a.classList.add("io-select__option--default");
        }
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "io-select__select-items select-hide");
        for (j = 0; j < ll; j++) {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.setAttribute("class", "io-select__option " + selElmnt.options[j].value); // Add the value as a class
            // Check if the option has value "heading" and add additional class
            if (selElmnt.options[j].value === "heading") {
                c.classList.add("heading");
            }
            c.addEventListener("click", function(e) {
                /*when an item is clicked, update the original select box,
                and the selected item:*/
                var y, k, s, h, sl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;
                for (k = 0; k < sl; k++) {
                    if (s.options[k].innerHTML === this.innerHTML) {
                        s.selectedIndex = k;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("io-select__option--selected");
                        for (var l = 0; l < y.length; l++) {
                            y[l].classList.remove("io-select__option--selected");
                        }
                        this.classList.add("io-select__option--selected");
                        if (s.options[k].value === "0") {
                            h.classList.add("io-select__option--default"); // Add the default class to the selected item wrapper if the value is 0
                        } else {
                            h.classList.remove("io-select__option--default"); // Remove the default class from the selected item wrapper for other values
                        }
                        break;
                    }
                }
                h.click();
            });
            b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");

            var customSelects211223 = document.querySelectorAll('.custom-select');
            customSelects211223.forEach(function(select211223) {
                select211223.classList.remove('open');
                
                // Скрываем все элементы .select-items
                var selectItems211223 = select211223.querySelectorAll('.select-items');
                selectItems211223.forEach(function(item211223) {
                    item211223.style.display = 'none';
                });
            });
        });
    }

    function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, xl, yl;
        x = document.getElementsByClassName("io-select__select-items");
        y = document.getElementsByClassName("io-select__selected");
        xl = x.length;
        yl = y.length;
        for (var i = 0; i < yl; i++) {
            if (elmnt == y[i]) {
                continue;
            }
            y[i].classList.remove("select-arrow-active");
        }
        for (var j = 0; j < xl; j++) {
            if (elmnt.nextSibling != x[j]) {
                x[j].classList.add("select-hide");
            }
        }
    }
    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
</script>
<script>
    function maskDateInput(input) {
        input.addEventListener('input', function(event) {
            const inputValue = event.target.value;
            let formattedValue = '';

            const numericValue = inputValue.replace(/\D/g, '');

            if (numericValue.length > 0) {
                const day = numericValue.slice(0, 2);
                formattedValue += day;

                if (numericValue.length > 2) {
                    const month = numericValue.slice(2, 4);
                    formattedValue += '/' + month;

                    if (numericValue.length > 4) {
                        const year = numericValue.slice(4, 8);
                        formattedValue += '/' + year;
                    }
                }
            }

            event.target.value = formattedValue;
        });
    }

</script>
<script>
    // Получаем все кнопки и области io-header__end
    const modal_shown_event = document.createEvent("Event");
    modal_shown_event.initEvent("modal_shown", true, true);
    const modal_hidden_event = document.createEvent("Event");
    modal_hidden_event.initEvent("modal_hidden", true, true);

    const openMenuBtns = document.querySelectorAll('.io-header__open-menu-btn');
    const closeMenuBtn = document.querySelector('.io-header__close-menu-btn');
    const ioHeaderModalBefore = document.querySelector('.io-header-modal__before');
    const closeSubmenuBtns = document.querySelectorAll('.io-header__close-submenu-btn');
    const backSubmenuBtns = document.querySelectorAll('.io-header__back-submenu-btn');
    const headerEnd = document.querySelector('.io-header__end');
    const headerMobileEnds = document.querySelectorAll('.io-header__mobile-submenu');

    headerEnd.addEventListener('modal_shown', function(e) {
        headerEnd.classList.add('show');
        document.body.style.overflowY = "hidden";
    });

    headerEnd.addEventListener('modal_hidden', function(e) {
        headerEnd.classList.remove('show');
        document.body.style.overflowY = "auto";
    });

    // Добавляем обработчик события на клик по каждой кнопке "Открыть меню"
    openMenuBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            //            headerEnd.classList.add('show');
            //            document.body.style.overflowY = "hidden";
            headerEnd.dispatchEvent(modal_shown_event)
        });
    });

    // Добавляем обработчик события на клик по кнопке "Закрыть меню"
    closeMenuBtn.addEventListener('click', () => {
        //        headerEnd.classList.remove('show');
        //        document.body.style.overflowY = "auto";
        headerEnd.dispatchEvent(modal_hidden_event)
    });

    ioHeaderModalBefore.addEventListener('click', () => {
        //        headerEnd.classList.remove('show');
        //        document.body.style.overflowY = "auto";
        headerEnd.dispatchEvent(modal_hidden_event)
    });

    // Добавляем обработчик события на клик по каждой кнопке "Закрыть меню"
    closeSubmenuBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            headerMobileEnds.forEach((submenu) => {
                submenu.classList.remove('show');
            });
            headerEnd.classList.remove('show');
            document.body.style.overflowY = "auto";
        });
    });

    // Добавляем обработчик события на клик по каждой кнопке "Назад"
    backSubmenuBtns.forEach((btn) => {
        btn.addEventListener('click', () => {
            headerMobileEnds.forEach((submenu) => {
                submenu.classList.remove('show');
            });
        });
    });

</script>

<!-- Slider Courses Courses -->
<script>
    var slides = document.querySelectorAll("#slider-reviews .keen-slider__slide");

    if (slides.length > 1) {
        var sliderReviews = new KeenSlider(
            "#slider-reviews", {
                loop: true,
                slides: {
                    perView: 1,
                    spacing: 0
                },
            },
            [
                (sliderReviews) => {
                    let timeout
                    let mouseOver = false

                    function clearNextTimeout() {
                        clearTimeout(timeout)
                    }

                    function nextTimeout() {
                        clearTimeout(timeout)
                        if (mouseOver) return
                        timeout = setTimeout(() => {
                            sliderReviews.next()
                        }, 6000)
                    }
                    sliderReviews.on("created", () => {
                        sliderReviews.container.addEventListener("mouseover", () => {
                            mouseOver = true
                            clearNextTimeout()
                        })
                        sliderReviews.container.addEventListener("mouseout", () => {
                            mouseOver = false
                            nextTimeout()
                        })
                        nextTimeout()
                    })
                    sliderReviews.on("dragStarted", clearNextTimeout)
                    sliderReviews.on("animationEnded", nextTimeout)
                    sliderReviews.on("updated", nextTimeout)
                },
            ]
        )

        // Добавляем обработчики событий для кнопок "Назад" и "Вперед"
        const prevButtonReviews = document.querySelector(".io-reviews__prev");
        const nextButtonReviews = document.querySelector(".io-reviews__next");

        prevButtonReviews.addEventListener("click", () => {
            sliderReviews.prev();
        });

        nextButtonReviews.addEventListener("click", () => {
            sliderReviews.next();
        });
    } else {
        // Если слайд только один, добавляем класс one-slide
        document.querySelector(".io-homereview__slider-wrapper").classList.add("one-slide");
    }
</script>

<!-- Slider Courses Courses -->
<script>
    var slidernews = new KeenSlider(
        "#slider-news", {
            loop: true,
            slides: {
                perView: 1,
                spacing: 0
            },
        }
    );

    // Добавляем обработчики событий для кнопок "Назад" и "Вперед"
    const prevButtonnews = document.querySelector(".io-news__prev");
    const nextButtonnews = document.querySelector(".io-news__next");

    prevButtonnews.addEventListener("click", () => {
        slidernews.prev();
    });

    nextButtonnews.addEventListener("click", () => {
        slidernews.next();
    });
</script>

<!-- Slider Teachers Teachers -->
<script>
    var slides = document.querySelectorAll("#slider-teachers .keen-slider__slide");

    if (slides.length > 1) {
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
        const prevButtonTeachers = document.querySelector(".io-teachers__prev");
        const nextButtonTeachers = document.querySelector(".io-teachers__next");

        prevButtonTeachers.addEventListener("click", () => {
            sliderTeachers.prev();
        });

        nextButtonTeachers.addEventListener("click", () => {
            sliderTeachers.next();
        });
    } else {
        // Если слайд только один, добавляем класс one-slide
        document.querySelector(".io-hometeachers__slider-wrapper").classList.add("one-slide");
    }
</script>

<!-- Slider Courses Courses -->
<script>
    var sliderCourses = new KeenSlider(
        "#slider-courses", {
            loop: true,
            slides: {
                perView: 1,
                spacing: 0
            },
            breakpoints: {
                "(min-width: 576px)": {
                    slides: {
                        perView: 2,
                        spacing: 0,
                    },
                },
                "(min-width: 992px)": {
                    slides: {
                        perView: 3,
                        spacing: 0,
                    },
                },
                "(min-width: 1200px)": {
                    slides: {
                        perView: 4,
                        spacing: 0,
                    },
                },
                "(min-width: 1400px)": {
                    slides: {
                        perView: 5,
                        spacing: 0,
                    },
                },
            },
        },
        [
            (sliderCourses) => {
                let timeout
                let mouseOver = false

                function clearNextTimeout() {
                    clearTimeout(timeout)
                }

                function nextTimeout() {
                    clearTimeout(timeout)
                    if (mouseOver) return
                    timeout = setTimeout(() => {
                        sliderCourses.next()
                    }, 6000)
                }
                sliderCourses.on("created", () => {
                    sliderCourses.container.addEventListener("mouseover", () => {
                        mouseOver = true
                        clearNextTimeout()
                    })
                    sliderCourses.container.addEventListener("mouseout", () => {
                        mouseOver = false
                        nextTimeout()
                    })
                    nextTimeout()
                })
                sliderCourses.on("dragStarted", clearNextTimeout)
                sliderCourses.on("animationEnded", nextTimeout)
                sliderCourses.on("updated", nextTimeout)
            },
        ]
    )

    // Добавляем обработчики событий для кнопок "Назад" и "Вперед"
    const prevButtonCourses = document.querySelector(".io-courses__prev");
    const nextButtonCourses = document.querySelector(".io-courses__next");

    prevButtonCourses.addEventListener("click", () => {
        sliderCourses.prev();
    });

    nextButtonCourses.addEventListener("click", () => {
        sliderCourses.next();
    });

</script>

<!-- Slider Popular Courses -->
<script>
    var sliderPopular = new KeenSlider(
        "#slider-popular", {
            loop: true,
            slides: {
                perView: 1,
                spacing: 0
            },
            breakpoints: {
                "(min-width: 576px)": {
                    slides: {
                        perView: 2,
                        spacing: 0,
                    },
                },
                "(min-width: 992px)": {
                    slides: {
                        perView: 3,
                        spacing: 0,
                    },
                },
                "(min-width: 1400px)": {
                    slides: {
                        perView: 4,
                        spacing: 0,
                    },
                },
            },
        },
        [
            (sliderPopular) => {
                let timeout
                let mouseOver = false

                function clearNextTimeout() {
                    clearTimeout(timeout)
                }

                function nextTimeout() {
                    clearTimeout(timeout)
                    if (mouseOver) return
                    timeout = setTimeout(() => {
                        sliderPopular.next()
                    }, 6000)
                }
                sliderPopular.on("created", () => {
                    sliderPopular.container.addEventListener("mouseover", () => {
                        mouseOver = true
                        clearNextTimeout()
                    })
                    sliderPopular.container.addEventListener("mouseout", () => {
                        mouseOver = false
                        nextTimeout()
                    })
                    nextTimeout()
                })
                sliderPopular.on("dragStarted", clearNextTimeout)
                sliderPopular.on("animationEnded", nextTimeout)
                sliderPopular.on("updated", nextTimeout)
            },
        ]
    )

    // Добавляем обработчики событий для кнопок "Назад" и "Вперед"
    const prevButton = document.querySelector(".io-popular__prev");
    const nextButton = document.querySelector(".io-popular__next");

    prevButton.addEventListener("click", () => {
        sliderPopular.prev();
    });

    nextButton.addEventListener("click", () => {
        sliderPopular.next();
    });

</script>

<!-- Куки нажатия на кнопку ioMenuGiftClicked -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ioMenuGiftBlocks = document.querySelectorAll('.ioMenuGift');

        ioMenuGiftBlocks.forEach(function(ioMenuGiftBlock) {
            var ioMenuGiftLinks = ioMenuGiftBlock.querySelectorAll('a');

            if (ioMenuGiftLinks.length >= 4) {
                var ioGiftCertificateLink = ioMenuGiftLinks[3];
                var ioPriceCertificateLink = ioMenuGiftLinks[2];
                var ioDemoCertificateLink = ioMenuGiftLinks[1];

                ioGiftCertificateLink.addEventListener('click', function() {
                    // Установка куки при клике на третью ссылку
                    document.cookie = "ioMenuGiftClicked=true; path=/";
                });

                ioPriceCertificateLink.addEventListener('click', function() {
                    // Установка куки при клике на вторую ссылку
                    document.cookie = "ioMenuGiftClicked=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/";
                });

                ioDemoCertificateLink.addEventListener('click', function() {
                    // Установка куки при клике на третью ссылку
                    document.cookie = "ioMenuGiftClicked=demo; path=/";
                });
            }
        });
    });
</script>

<!-- Фикс бага в аккордеонах -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var accordions = document.querySelectorAll('.accordion'); // Замените '.accordion' на селектор, который используется для ваших аккордеонов

        accordions.forEach(function(accordion) {
            accordion.addEventListener('click', function(event) {
                var button = event.target.closest('.accordion-button');
                if (!button) return;

                var collapsingElement = accordion.querySelector('.collapsing');

                if (collapsingElement) {
                    accordion.style.pointerEvents = 'none';

                    // Добавьте setTimeout, чтобы дать время для начала анимации перед установкой pointer-events
                    setTimeout(function() {
                        accordion.style.pointerEvents = 'auto';
                    }, 350); // Замените 350 на длительность анимации в миллисекундах
                }
            });
        });
    });

</script>

<script>
    document.addEventListener('touchstart', function() {}, true);
</script>

<script>
    // Функция для установки куки
    function set260324Cookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    // Функция для получения значения куки
    function get260324Cookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    // Функция для удаления куки
    function delete260324Cookie(name) {
        document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT; path=/;';
    }

    // Функция для проверки и установки состояния чекбокса
    function checkCheckbox260324() {
        var ioTypeRadioCheck260324 = document.getElementById("ioTypeRadioCheck");
        if (ioTypeRadioCheck260324) {
            var cookieValue260324 = get260324Cookie("io_cookie_single_course_demo");
            if (cookieValue260324) {
                var ioCourseType2260324 = document.querySelector("#ioTypeRadioCheck #ioCourseType2");
                if (ioCourseType2260324) {
                    ioCourseType2260324.checked = true;
                }
            } else {
                // Если куки не установлены, убедимся, что чекбокс снят
                var ioCourseType2260324 = document.querySelector("#ioTypeRadioCheck #ioCourseType2");
                if (ioCourseType2260324) {
                    ioCourseType2260324.checked = false;
                }
            }
        }
    }

    // Вызываем функцию проверки и установки состояния чекбокса при загрузке страницы
    checkCheckbox260324();

    // Обработчик события нажатия на все кнопки с классом ioCookieSingleCourseDemo
    document.addEventListener('DOMContentLoaded', function() {
        var buttons260324 = document.querySelectorAll('.ioCookieSingleCourseDemo');
        if (buttons260324) {
            buttons260324.forEach(function(button) {
                button.addEventListener('click', function() {
                    // Устанавливаем куки при нажатии на кнопку
                    set260324Cookie("io_cookie_single_course_demo", "io_cookie_single_course_demo_true", 1);
                    // Вызываем функцию проверки и установки состояния чекбокса после установки куки
                    checkCheckbox260324();
                });
            });
        }
    });

    // Удаление куки при загрузке страницы, если она была использована
    window.onload = function() {
        delete260324Cookie("io_cookie_single_course_demo");
    };
</script>

<!-- <script>
    document.addEventListener("click", function (e) {
        closeCustomSelect(e.target);
    });

    function closeCustomSelect(clickedElement) {
        var customSelects = document.querySelectorAll(".custom-select");
        customSelects.forEach(function (customSelect) {
            if (!customSelect.contains(clickedElement)) {
                var selectItems = customSelect.querySelector(".select-items");
                selectItems.style.display = "none";
                customSelect.classList.remove("open");
            }
        });
    }
</script> -->

<!-- Ваш скрипт для закрытия аккордиона при клике вне элементов -->
<!-- <script>
    $(document).ready(function () {
    // Добавляем обработчик клика для закрытия аккордеонов при клике вне них
    $(document).on('click', function (event) {
        // Закрываем только аккордеоны с указанными ID
        if (!$(event.target).closest('#faqAccordion, #courseAccordionMain').length) {
        closeAccordion('#faqAccordion');
        closeAccordion('#courseAccordionMain');
        }
    });

    // Добавляем обработчик клика для каждого аккордеона
    $('#faqAccordion, #courseAccordionMain').on('click', function (event) {
        // Проверяем, был ли клик внутри аккордеона, если нет - закрываем аккордион
        if (!$(event.target).closest('.accordion-item').length) {
        closeAccordion($(this));
        }
    });

    // Функция для закрытия аккордеона
    function closeAccordion(accordionID) {
        $(accordionID).find('.accordion-item .collapse.show').collapse('hide');
    }
    });
</script> -->
<!-- <script>
  $(document).ready(function() {

    // Ваш скрипт для закрытия аккордиона при клике вне элементов
    $(document).on('click', function(e) {
      // Проверка, был ли клик вне аккордеона
      if (!$(e.target).closest('.accordion').length) {
        // Закрываем только те развернутые элементы, которые не имеют класса 'initial-show'
        $('.accordion .accordion-collapse.show:not(.io-popular-video__accordion .accordion-collapse.show)').collapse('hide');
      }
    });

    // Обработка события после инициализации аккордеона
    $('.accordion').on('show.bs.collapse', function(e) {
      // Закрываем другие открытые элементы того же аккордеона
      $(this).find('.accordion-collapse.show').not(e.target).collapse('hide');
    });

    // Добавляем класс 'initial-show' к элементам аккордеона, которые должны быть открытыми изначально
    $('.accordion .accordion-collapse.show').addClass('initial-show');

  });
</script> -->
<!-- <script>
    $(document).ready(function () {

        // Обработка события после инициализации аккордеона
        $('.accordion').on('show.bs.collapse', function (e) {
            // Не закрываем другие открытые элементы того же аккордеона
            e.stopPropagation();
        });

        // Закрываем аккордион при клике вне его элементов
        $(document).on('click', function (e) {
            // Проверка, был ли клик вне аккордеона и не внутри io-popular-video__accordion и io-price__accordion
            if (!$(e.target).closest('.accordion').length && 
                !$(e.target).closest('.io-popular-video__accordion').length &&
                !$(e.target).closest('.io-price__accordion').length) {
                // Закрываем все развернутые элементы аккордеона
                $('.accordion .accordion-collapse.show:not(.io-popular-video__accordion .accordion-collapse.show, .io-price__accordion .accordion-collapse.show)').collapse('hide');
            }
        });

        // Добавляем класс 'initial-show' к элементам аккордеона, которые должны быть открытыми изначально
        $('.accordion .accordion-collapse.show').addClass('initial-show');

    });
</script> -->

<!-- Оставаться на табе при смене языка -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function setCookie(cname, cvalue) {
            document.cookie = cname + "=" + cvalue + ";path=/";
        }

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

        function getPageClass() {
            var classes = document.body.className.split(/\s+/);
            var pageClass = classes.find(function(cls) {
                return cls.startsWith('page-template-page-course-');
            });
            return pageClass || '';
        }

        function setTabCookie(tabId) {
            var pageClass = getPageClass();
            setCookie('currentTab' + pageClass, tabId);
        }

        function restoreActiveTab() {
            var pageClass = getPageClass();
            var currentTab = getCookie('currentTab' + pageClass);
            if (currentTab !== "") {
                var activeTab = document.querySelector('.io-tabs-wrapper .nav-link[data-tab-id="' + currentTab + '"]');
                if (activeTab) {
                    activeTab.click();
                    activeTab.classList.add('active');
                    if (currentTab === 'ioTab6' || currentTab === 'ioTab9' || currentTab === 'ioTab10') {
                        document.querySelector('.io-sidebar').style.gridTemplateColumns = '1fr';
                        document.querySelector('.io-sidebar__sticky').style.display = 'none';
                    } else {
                        document.querySelector('.io-sidebar').style.gridTemplateColumns = '';
                        document.querySelector('.io-sidebar__sticky').style.display = '';
                    }
                }
            }
        }

        var tabs = document.querySelectorAll('.io-tabs-wrapper .nav-link');
        tabs.forEach(function(tab) {
            tab.addEventListener('click', function() {
                var tabId = this.getAttribute('data-tab-id');
                setTabCookie(tabId);

                // Сбрасываем стили для io-sidebar и io-sidebar__sticky при каждом переключении вкладок
                document.querySelector('.io-sidebar').style.gridTemplateColumns = '';
                document.querySelector('.io-sidebar__sticky').style.display = '';

                if (tabId === 'ioTab6') {
                    // Если активной становится кнопка с data-tab-id="ioTab6", устанавливаем нужные стили
                    document.querySelector('.io-sidebar').style.gridTemplateColumns = '1fr';
                    document.querySelector('.io-sidebar__sticky').style.display = 'none';
                }
            });
        });

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

        function resetTabCookie() {
            setCookie('currentTab', '', -1);
        }

        var learnMoreButtons = document.querySelectorAll('.io-popular__item-button a.io-button');
        learnMoreButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                resetTabCookie();
            });
        });
    });
</script>
<script>
    window.onload = function() {
        var fileInputs = document.querySelectorAll('.custom-file-upload input[type=file]');
        fileInputs.forEach(function(input) {
            input.addEventListener('change', function(e) {
                var label = this.nextElementSibling;
                var fileName = this.value.split('\\').pop();
                label.textContent = fileName ? fileName : 'Выберите файл';
            });
        });
    }
</script>

<!-- Табы с выбором на странице направлений -->
<script>
    window.onload = function() {
        var chooses = document.querySelectorAll('.io-chooses');
        chooses.forEach(function(choose) {
            var chooseId = choose.dataset.choosesId;
            var correspondingChoose = document.querySelector(`[data-chooses="${chooseId}"]`);
            if (!correspondingChoose) return;

            var buttons = choose.querySelectorAll('.io-choose');
            buttons.forEach(function(button) {
                button.addEventListener('click', function() {
                    var chooseId = this.dataset.chooseId;
                    var items = correspondingChoose.querySelectorAll('.io-popular__item');

                    // Удалить класс 'active' со всех кнопок
                    buttons.forEach(function(btn) {
                        btn.classList.remove('active');
                    });

                    // Добавить класс 'active' для текущей кнопки
                    this.classList.add('active');

                    if (chooseId === 'all') {
                        items.forEach(function(item) {
                            item.classList.remove('d-none');
                        });
                    } else {
                        items.forEach(function(item) {
                            if (item.dataset.choose === chooseId) {
                                item.classList.remove('d-none');
                            } else {
                                item.classList.add('d-none');
                            }
                        });
                    }
                });
            });
        });
    }
</script>

</body>

</html>
