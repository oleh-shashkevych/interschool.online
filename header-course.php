<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Здесь ваше краткое описание страницы">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/libs/bootstrap_5_0_2.min.css">

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
    
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-main.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-standarts.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-grid.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-colors.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-text.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-form.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-select.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-phone.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-radio.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-checkbox.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-range.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-promo.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-buttons.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-pagination.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-lightbox.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-breadcrumbs.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-dropdown.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-modal.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-tabs.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-accordion.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-sidebar.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-header.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-rating.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-gallery.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-course.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-blog.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-passport.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-popular-video.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-check.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-icons.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-ask.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-video.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-steps.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-popular.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-contacts.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-social.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-feedback.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-stories.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-story.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-vacancy.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-article.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-news.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-montessori.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-filter.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/io-legal.css" async>
    <link rel="stylesheet" href="/wp-content/themes/interschooltemplate/css/style.css" async>
</head>
<body <?php body_class(); // все классы для body ?>>
    <div id="preloader">
        <div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>
    <header class="io-header">
        <div class="container-xxl io-container-mw">
            <nav class="io-header__nav">
                <div class="io-header__start">
                    <a class="io-header__logo" href="<?php echo esc_url(apply_filters('wpml_home_url', get_home_url())); ?>" aria-label="Montessori Center">
                        <img src="<?php bloginfo('template_url'); ?>/images/header-logo.svg" alt="Logo">
                    </a>
                </div>
                <div id="io-header-modal" class="io-header__end io-smart-back-modal">
                    <div class="io-header-modal__before"></div>
                    <div class="io-header__mobile-top">
                        <a href="#" class="io-header__mobile-chat">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#7A61FF" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"/></svg>
                            </div>
                            <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                                Чат
                            <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                                Chat
                            <?php } ?>
                        </a>
                        <div class="io-header__mobile-top--right">
                            <div class="io-dropdown-click io-header__dropdown-click">
                                <button type="button" onclick="dropdownByClick(this, this.nextElementSibling)" class="io-dropdown-click__link io-header__lang">
                                    <?php
                                    $current_language = ICL_LANGUAGE_CODE;
                                    $languages = icl_get_languages();
                                    foreach ($languages as $language) {
                                        if ($language['language_code'] === $current_language) {
                                            echo $language['translated_name'];
                                            break;
                                        }
                                    }
                                    ?>
                                </button>
                                <div class="io-dropdown-click__content right io-header__dropdown-menu io-header__lang-content">
                                    <?php
                                    foreach ($languages as $language) {
                                        if ($language['language_code'] !== $current_language) {
                                            echo '<a href="' . $language['url'] . '">' . $language['translated_name'] . '</a>';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <button class="io-header__close-menu-btn" aria-label="Закрыть меню">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <ul class="io-header__list">
                        <li class="io-header__item">
                            <div class="io-dropdown-click io-header__dropdown-click">
                                <span type="button" onclick="dropdownByClick(this, this.nextElementSibling)" class="io-dropdown-click__link io-header__link">
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                                        ИЗО
                                    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                                        Art
                                    <?php } ?>
                                </span>
                                <div class="io-dropdown-click__content left io-header__dropdown-menu io-header__mobile-submenu">
                                    <?php
                                        $args = array(
                                            'menu' => 'izo-ru',
                                            'items_wrap' => '%3$s',
                                            'echo' => '',
                                            'container' => false,
                                            'depth' => 0
                                        );
                                        echo strip_tags( wp_nav_menu( $args ), '<a>' );
                                    ?>
                                </div>
                            </div>
                        </li>
                        <li class="io-header__item">
                            <div class="io-dropdown-click io-header__dropdown-click">
                                <span type="button" onclick="dropdownByClick(this, this.nextElementSibling)" class="io-dropdown-click__link io-header__link">
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                                        Музыка
                                    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                                        Music
                                    <?php } ?>
                                </span>
                                <div class="io-dropdown-click__content left io-header__dropdown-menu io-header__mobile-submenu">
                                    <?php
                                        $args = array(
                                            'menu' => 'music-ru',
                                            'items_wrap' => '%3$s',
                                            'echo' => '',
                                            'container' => false,
                                            'depth' => 0
                                        );                         
                                        echo strip_tags( wp_nav_menu( $args ), '<a>' );
                                    ?>
                                </div>
                            </div>
                        </li>
                        <li class="io-header__item">
                            <div class="io-dropdown-click io-header__dropdown-click">
                                <span type="button" onclick="dropdownByClick(this, this.nextElementSibling)" class="io-dropdown-click__link io-header__link">
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                                        Языки
                                    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                                        Languages
                                    <?php } ?>
                                </span>
                                <div class="io-dropdown-click__content left io-header__dropdown-menu io-header__mobile-submenu">
                                    <?php
                                        $args = array(
                                            'menu' => 'language-ru',
                                            'items_wrap' => '%3$s',
                                            'echo' => '',
                                            'container' => false,
                                            'depth' => 0
                                        );                         
                                        echo strip_tags( wp_nav_menu( $args ), '<a>' );
                                    ?>
                                </div>
                            </div>
                        </li>
                        <li class="io-header__item">
                            <div class="io-dropdown-click io-header__dropdown-click">
                                <span type="button" onclick="dropdownByClick(this, this.nextElementSibling)" class="io-dropdown-click__link io-header__link">
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                                        Школа
                                    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                                        Middle School
                                    <?php } ?>
                                </span>
                                <div class="io-dropdown-click__content left io-header__dropdown-menu io-header__mobile-submenu">
                                    <?php
                                        $args = array(
                                            'menu' => 'school-ru',
                                            'items_wrap' => '%3$s',
                                            'echo' => '',
                                            'container' => false,
                                            'depth' => 0
                                        );                         
                                        echo strip_tags( wp_nav_menu( $args ), '<a>' );
                                    ?>
                                </div>
                            </div>
                        </li>
                        <li class="io-header__item">
                            <div class="io-dropdown-click io-header__dropdown-click">
                                <span type="button" onclick="dropdownByClick(this, this.nextElementSibling)" class="io-dropdown-click__link io-header__link">
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                                        Танцы
                                    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                                        Dance
                                    <?php } ?>
                                </span>
                                <div class="io-dropdown-click__content left io-header__dropdown-menu io-header__mobile-submenu">
                                    <?php
                                        $args = array(
                                            'menu' => 'dances-ru',
                                            'items_wrap' => '%3$s',
                                            'echo' => '',
                                            'container' => false,
                                            'depth' => 0
                                        );                         
                                        echo strip_tags( wp_nav_menu( $args ), '<a>' );
                                    ?>
                                </div>
                            </div>
                        </li>
                        <li class="io-header__item">
                            <div class="io-dropdown-click io-header__dropdown-click">
                                <span type="button" onclick="dropdownByClick(this, this.nextElementSibling)" class="io-dropdown-click__link io-header__link">
                                    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                                        Прочее
                                    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                                        Other
                                    <?php } ?>
                                </span>
                                <div class="io-dropdown-click__content left io-header__dropdown-menu io-header__mobile-submenu">
                                    <?php
                                        $args = array(
                                            'menu' => 'other-ru',
                                            'items_wrap' => '%3$s',
                                            'echo' => '',
                                            'container' => false,
                                            'depth' => 0
                                        );                         
                                        echo strip_tags( wp_nav_menu( $args ), '<a>' );
                                    ?>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="io-header__buttons">
                        <div class="io-dropdown-click io-header__dropdown-click">
                            <a type="button" onclick="dropdownByClick(this, this.nextElementSibling)" class="io-dropdown-click__link io-header__chat" aria-label="Menu">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#FC5588" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"></path></svg>
                                </div>
                                Чат
                            </a>
                            <div class="io-dropdown-click__content io-header__dropdown-menu io-header__bottom-dropdown-menu">
                                <a href="https://wa.me/+380507753353" target="_blank" class="io-header__with-icon">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#000000" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7 .9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg> -->
                                    <img src="/wp-content/themes/interschooltemplate/images/io-whatsapp.png" alt="">
                                    WhatsApp
                                </a>
                                <a href="https://www.messenger.com/t/montessori.ua" target="_blank" class="io-header__with-icon">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="#000000" d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg> -->
                                    <img src="/wp-content/themes/interschooltemplate/images/io-messenger.png" alt="">
                                    Facebook Messenger
                                </a>
                                <a href="https://telegram.me/+380507753353" target="_blank" class="io-header__with-icon">
                                    <!-- <svg viewBox="0 0 192 192" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="#000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path stroke="#000000" stroke-width="12" d="M23.073 88.132s65.458-26.782 88.16-36.212c8.702-3.772 38.215-15.843 38.215-15.843s13.621-5.28 12.486 7.544c-.379 5.281-3.406 23.764-6.433 43.756-4.54 28.291-9.459 59.221-9.459 59.221s-.756 8.676-7.188 10.185c-6.433 1.509-17.027-5.281-18.919-6.79-1.513-1.132-28.377-18.106-38.214-26.404-2.649-2.263-5.676-6.79.378-12.071 13.621-12.447 29.891-27.913 39.728-37.72 4.54-4.527 9.081-15.089-9.837-2.264-26.864 18.483-53.35 35.835-53.35 35.835s-6.053 3.772-17.404.377c-11.351-3.395-24.594-7.921-24.594-7.921s-9.08-5.659 6.433-11.693Z"></path></g></svg> -->
                                    <img src="/wp-content/themes/interschooltemplate/images/io-telegram.png" alt="">
                                    Telegram
                                </a>
                                <a href="viber://chat?number=%2B380507753337" target="_blank" class="io-header__with-icon">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="#000000" d="M444 49.9C431.3 38.2 379.9 .9 265.3 .4c0 0-135.1-8.1-200.9 52.3C27.8 89.3 14.9 143 13.5 209.5c-1.4 66.5-3.1 191.1 117 224.9h.1l-.1 51.6s-.8 20.9 13 25.1c16.6 5.2 26.4-10.7 42.3-27.8 8.7-9.4 20.7-23.2 29.8-33.7 82.2 6.9 145.3-8.9 152.5-11.2 16.6-5.4 110.5-17.4 125.7-142 15.8-128.6-7.6-209.8-49.8-246.5zM457.9 287c-12.9 104-89 110.6-103 115.1-6 1.9-61.5 15.7-131.2 11.2 0 0-52 62.7-68.2 79-5.3 5.3-11.1 4.8-11-5.7 0-6.9 .4-85.7 .4-85.7-.1 0-.1 0 0 0-101.8-28.2-95.8-134.3-94.7-189.8 1.1-55.5 11.6-101 42.6-131.6 55.7-50.5 170.4-43 170.4-43 96.9 .4 143.3 29.6 154.1 39.4 35.7 30.6 53.9 103.8 40.6 211.1zm-139-80.8c.4 8.6-12.5 9.2-12.9 .6-1.1-22-11.4-32.7-32.6-33.9-8.6-.5-7.8-13.4 .7-12.9 27.9 1.5 43.4 17.5 44.8 46.2zm20.3 11.3c1-42.4-25.5-75.6-75.8-79.3-8.5-.6-7.6-13.5 .9-12.9 58 4.2 88.9 44.1 87.8 92.5-.1 8.6-13.1 8.2-12.9-.3zm47 13.4c.1 8.6-12.9 8.7-12.9 .1-.6-81.5-54.9-125.9-120.8-126.4-8.5-.1-8.5-12.9 0-12.9 73.7 .5 133 51.4 133.7 139.2zM374.9 329v.2c-10.8 19-31 40-51.8 33.3l-.2-.3c-21.1-5.9-70.8-31.5-102.2-56.5-16.2-12.8-31-27.9-42.4-42.4-10.3-12.9-20.7-28.2-30.8-46.6-21.3-38.5-26-55.7-26-55.7-6.7-20.8 14.2-41 33.3-51.8h.2c9.2-4.8 18-3.2 23.9 3.9 0 0 12.4 14.8 17.7 22.1 5 6.8 11.7 17.7 15.2 23.8 6.1 10.9 2.3 22-3.7 26.6l-12 9.6c-6.1 4.9-5.3 14-5.3 14s17.8 67.3 84.3 84.3c0 0 9.1 .8 14-5.3l9.6-12c4.6-6 15.7-9.8 26.6-3.7 14.7 8.3 33.4 21.2 45.8 32.9 7 5.7 8.6 14.4 3.8 23.6z"/></svg> -->
                                    <img src="/wp-content/themes/interschooltemplate/images/io-viber.png" alt="">
                                    Viber
                                </a>
                                <a href="https://www.instagram.com/montessoriua/" target="_blank" class="io-header__with-icon">
                                    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="#000000" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg> -->
                                    <img src="/wp-content/themes/interschooltemplate/images/io-instagram.png" alt="">
                                    Instagram
                                </a>
                            </div>
                        </div>
                        <div class="io-dropdown-click io-header__dropdown-click">
                            <button type="button" onclick="dropdownByClick(this, this.nextElementSibling)" class="io-dropdown-click__link io-header__lang">
                                <?php
                                $current_language = ICL_LANGUAGE_CODE;
                                $languages = icl_get_languages();
                                foreach ($languages as $language) {
                                    if ($language['language_code'] === $current_language) {
                                        echo $language['translated_name'];
                                        break;
                                    }
                                }
                                ?>
                            </button>
                            <div class="io-dropdown-click__content right io-header__dropdown-menu io-header__lang-content">
                                <?php
                                foreach ($languages as $language) {
                                    if ($language['language_code'] !== $current_language) {
                                        echo '<a href="' . $language['url'] . '">' . $language['translated_name'] . '</a>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                        <div class="io-select-currency">
                            <span class="io-selected-currency" id="selectedCurrency">USD</span>
                            <ul class="io-currency-options" id="currencyOptions">
                                <li data-value="usd">USD</li>
                                <li data-value="eur">EUR</li>
                            </ul>
                        </div>
                        <div class="io-dropdown-click io-header__dropdown-click">
                            <button type="button" onclick="dropdownByClick(this, this.nextElementSibling)" class="io-dropdown-click__link io-header__burger" aria-label="Menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <!-- <div class="io-dropdown-click__content right io-header__dropdown-menu io-header__bottom-dropdown-menu ioMenuGift"> -->
                            <div class="io-dropdown-click__content right io-header__dropdown-menu io-header__bottom-dropdown-menu">
                                <?php
                                    $args = array(
                                        'menu' => 'burger-ru',
                                        'items_wrap' => '%3$s',
                                        'echo' => '',
                                        'container' => false,
                                        'depth' => 0
                                    );                         
                                    echo strip_tags( wp_nav_menu( $args ), '<a>' );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="io-header__open-menu-btn" aria-label="Открыть меню">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </nav>
        </div>
    </header>
    <?php if (!is_front_page()) : ?>
        <div class="io-breadcrumbs__wrapper">
            <div class="container-xxl io-container-mw">
                <div class="io-breadcrumbs">
                    <a href="<?php echo home_url(); ?>"><span><svg viewBox="0 0 576 512"><path d="M567.5 229.7C577.6 238.3 578.9 253.4 570.3 263.5C561.7 273.6 546.6 274.9 536.5 266.3L512 245.5V432C512 476.2 476.2 512 432 512H144C99.82 512 64 476.2 64 432V245.5L39.53 266.3C29.42 274.9 14.28 273.6 5.7 263.5C-2.875 253.4-1.634 238.3 8.473 229.7L272.5 5.7C281.4-1.9 294.6-1.9 303.5 5.7L567.5 229.7zM144 464H192V312C192 289.9 209.9 272 232 272H344C366.1 272 384 289.9 384 312V464H432C449.7 464 464 449.7 464 432V204.8L288 55.47L112 204.8V432C112 449.7 126.3 464 144 464V464zM240 464H336V320H240V464z"></path></svg></span></a>
                    <?php
                    if (is_category() || is_single()) {
                        $category = get_the_category();
                        if ($category) {
                            echo '<a href="' . get_category_link($category[0]->term_id) . '"><span>' . $category[0]->name . '</span></a>';
                        }
                    } elseif (is_page()) {
                        $ancestors = get_post_ancestors($post);
                        if ($ancestors) {
                            $ancestors = array_reverse($ancestors);
                            foreach ($ancestors as $ancestor) {
                                echo '<a href="' . get_permalink($ancestor) . '"><span>' . get_the_title($ancestor) . '</span></a>';
                            }
                        }
                    }
                    ?>
                    <a href="#"><span><?php the_title(); ?></span></a>
                </div>
            </div>
        </div>
    <?php endif; ?>