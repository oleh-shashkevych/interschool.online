<?php
/**
 * Блог blog.html
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Блог
 */

include 'templates/price.php';
get_header(); // подключаем header.php ?>
<main>
    <!-- <?php the_content(); // контент ?> -->
    <section class="io-blog io-section-first">
        <div class="container-xxl io-container-mw">
            <div class="io-blog__heading-wrapper io-flex-between">
                <h1 class="io-blog__heading io-heading-2">Полезные статьи</h1>
            </div>
            <div class="io-blog__grid io-blog__grid--three-column">
                <a href="<?php echo get_permalink(123); ?>" class="io-blog__item">
                    <div class="io-blog__img">
                        <picture>
                            <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/blog-1.webp">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-1.png" alt="Музыка в школе искусств">
                        </picture>
                    </div>
                    <div class="io-blog__content">
                        <h2 class="io-blog__content-title">Польза уроков скрипки для детей: обогащение ума и души</h2>
                        <p class="io-blog__content-text">Музыкальное образование всегда было важным элементом гармоничного развития ребенка. Уроки игры на скрипке, в частности, влияют на интеллектуальное, эмоциональное и социальное развитие.</p>
                    </div>
                </a>
                <a href="<?php echo get_permalink(123); ?>" class="io-blog__item">
                    <div class="io-blog__img">
                        <picture>
                            <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/blog-2.webp">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-2.png" alt="Музыка в школе искусств">
                        </picture>
                    </div>
                    <div class="io-blog__content">
                        <h2 class="io-blog__content-title">Влияние уроков фортепиано на дисциплину ребенка младшего школьного возраста</h2>
                        <p class="io-blog__content-text">Уроки фортепиано могут иметь преобразующее влияние на дисциплину ребенка младшего школьного возраста. В этом возрасте начинают формироваться основы дисциплины и усидчивости.</p>
                    </div>
                </a>
                <a href="<?php echo get_permalink(123); ?>" class="io-blog__item">
                    <div class="io-blog__img">
                        <picture>
                            <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/blog-3.webp">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-3.png" alt="Музыка в школе искусств">
                        </picture>
                    </div>
                    <div class="io-blog__content">
                        <h2 class="io-blog__content-title">Влияние уроков вокала на процесс формирования личности ребёнка</h2>
                        <p class="io-blog__content-text">Здравствуйте, дорогие родители! Сегодня мы поговорим о теме, которая, безусловно, вас заинтересует – влияние уроков вокала на процесс формирования личности ребёнка. </p>
                    </div>
                </a>
                <a href="<?php echo get_permalink(123); ?>" class="io-blog__item">
                    <div class="io-blog__img">
                        <picture>
                            <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/blog-4.webp">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-4.png" alt="Музыка в школе искусств">
                        </picture>
                    </div>
                    <div class="io-blog__content">
                        <h2 class="io-blog__content-title">Десять шагов: как научиться играть на классической гитаре</h2>
                        <p class="io-blog__content-text">Благодаря своей универсальности и прекрасному звучанию, классическая гитара остается одним из самых популярных музыкальных инструментов. Мы представляем вам десять шагов, которые помогут вам освоить классическую гитару.</p>
                    </div>
                </a>
                <a href="<?php echo get_permalink(123); ?>" class="io-blog__item">
                    <div class="io-blog__img">
                        <picture>
                            <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/blog-5.webp">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-5.png" alt="Музыка в школе искусств">
                        </picture>
                    </div>
                    <div class="io-blog__content">
                        <h2 class="io-blog__content-title">Электрогитара - это мечта каждого ребёнка!</h2>
                        <p class="io-blog__content-text">Как только вы включаете радио или телевизор, ребенок начинает покачиваться под ритм музыки. Он притворяется, что играет на гитаре, делая воздушные рифы и проводя пальцами по воображаемым струнам.</p>
                    </div>
                </a>
                <a href="<?php echo get_permalink(123); ?>" class="io-blog__item">
                    <div class="io-blog__img">
                        <picture>
                            <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/blog-6.webp">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-6.png" alt="Музыка в школе искусств">
                        </picture>
                    </div>
                    <div class="io-blog__content">
                        <h2 class="io-blog__content-title">Бас-гитара: Доминируя на сцене своим звуком</h2>
                        <p class="io-blog__content-text">Сегодня мы погрузимся в мир музыки и обсудим такую уникальную и недооцененную вещь, как бас-гитара. Часто стоящие за кулисами, басисты играют ключевую роль в создании музыкального ландшафта любой песни.</p>
                    </div>
                </a>
                <a href="<?php echo get_permalink(123); ?>" class="io-blog__item">
                    <div class="io-blog__img">
                        <picture>
                            <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/blog-7.webp">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-7.png" alt="Музыка в школе искусств">
                        </picture>
                    </div>
                    <div class="io-blog__content">
                        <h2 class="io-blog__content-title">Укулеле – осуществление моей мечты!</h2>
                        <p class="io-blog__content-text">Музыка – это удивительный мир, где каждая нота может перенести нас в совершенно иной мир. И когда речь заходит о некоторых инструментах, сразу возникает желание попробовать себя в их обучении. И вот однажды я услышал звучание нежных струн укулеле...</p>
                    </div>
                </a>
                <a href="<?php echo get_permalink(123); ?>" class="io-blog__item">
                    <div class="io-blog__img">
                        <picture>
                            <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/blog-8.webp">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-8.png" alt="Музыка в школе искусств">
                        </picture>
                    </div>
                    <div class="io-blog__content">
                        <h2 class="io-blog__content-title">Ритм сердца: Первые шаги к мастерству игры на барабанах</h2>
                        <p class="io-blog__content-text">Барабаны — это не просто инструмент, это ритм, который движет музыкой, это сердцебиение каждой композиции. Барабаны — это мощь и энергия, заложенная в самых глубинах нашей души. И сегодня мы вместе отправимся в увлекательное путешествие по миру игры на барабанах.</p>
                    </div>
                </a>
                <a href="<?php echo get_permalink(123); ?>" class="io-blog__item">
                    <div class="io-blog__img">
                        <picture>
                            <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/blog-9.webp">
                            <img decoding="async" src="/wp-content/themes/interschooltemplate/images/blog-9.png" alt="Музыка в школе искусств">
                        </picture>
                    </div>
                    <div class="io-blog__content">
                        <h2 class="io-blog__content-title">Скрипка в руках малыша: волшебство музыки начинается здесь!</h2>
                        <p class="io-blog__content-text">Добро пожаловать в удивительный мир музыки, где каждый ребенок может стать виртуозом! Сегодня мы поговорим о том, как научить детей игре на таком великолепном и выразительном инструменте, как скрипка.</p>
                    </div>
                </a>
            </div>
            <div class="io-blog__bottom-wrapper io-flex-end">
                <div class="io-pagination">
                    <div class="io-pagination__count">
                        <span class="io-black-main-op-60">Страница</span>
                        <span>1/10</span>
                    </div>
                    <div class="io-pagination__arrows">
                        <button class="io-pagination__prev disabled"></button>
                        <button class="io-pagination__next"></button>
                    </div>
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
<?php io_price(); ?>