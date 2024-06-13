<?php
/**
 * Вакансии openings.html
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Вакансии
 */

include 'templates/price.php';
get_header(); // подключаем header.php ?>
<main>
    <!-- <?php the_content(); // контент ?> -->
    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
    <section class="io-vacancy io-section-first">
        <div class="container-xxl io-container-mw">
            <div class="io-vacancy__block io-block io-block--green">
                <div class="io-vacancy__data">
                    <h1 class="io-heading-2">Станьте частью нашей команды</h1>
                    <p>Станьте частью нашего коллектива и вместе мы вдохновим студентов к новым достижениям!</p>
                </div>
                <div class="io-vacancy__img">
                    <img src="/wp-content/themes/interschooltemplate/images/io-vacancy.svg" alt="">
                </div>
            </div>
            <div class="io-vacancy__heading-wrapper">
                <h2 class="io-vacancy__heading io-heading-2">Актуальные вакансии</h2>
            </div>
            <div class="io-vacancy__grid">
                <div class="io-vacancy__item">
                    <div class="io-vacancy__item-top-left">
                        <h2 class="io-vacancy__item-heading io-heading-2">Педагог фортепиано</h2>
                    </div>
                    <div class="io-vacancy__item-top-right">
                        <a href="<?php echo get_permalink(117); ?>" class="io-vacancy__button io-button">Стать членом команды</a>
                    </div>
                    <div class="io-vacancy__item-bottom">
                        <div class="io-vacancy__item-inner">
                            <p class="io-subheading io-fw-semibold">Пожелания к кандидатам</p>
                            <div class="io-grid io-grid-gap-100">
                                <div class="io-check">
                                    <span>Обязательно наличие высшего образования по специальности фортепиано. </span>
                                </div>
                                <div class="io-check">
                                    <span>Желательно владение разговорным английским и умение преподавать на этом языке.</span>
                                </div>
                                <div class="io-check">
                                    <span>Обязателен опыт преподавания в музыкальной школе, а также онлайн.</span>
                                </div>
                                <div class="io-check">
                                    <span>Опыт работы не менее 2 лет.</span>
                                </div>
                            </div>
                        </div>
                        <div class="io-vacancy__item-inner">
                            <p class="io-subheading io-fw-semibold">Мы предлагаем</p>
                            <div class="io-grid io-grid-gap-100">
                                <div class="io-check io-check--purple">
                                    <span>Техническая поддержка новых учителей.</span>
                                </div>
                                <div class="io-check io-check--purple">
                                    <span>Удобное индивидуальное расписание для каждого педагога.</span>
                                </div>
                                <div class="io-check io-check--purple">
                                    <span>Возможность предоставления аудитории со всем необходимым оборудованием и инструментами для онлайн-уроков.</span>
                                </div>
                                <div class="io-check io-check--purple">
                                    <span>Достойная оплата труда.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="io-vacancy__item">
                    <div class="io-vacancy__item-top-left">
                        <h2 class="io-vacancy__item-heading io-heading-2">Педагог гитары</h2>
                    </div>
                    <div class="io-vacancy__item-top-right">
                        <a href="<?php echo get_permalink(117); ?>" class="io-vacancy__button io-button">Стать членом команды</a>
                    </div>
                    <div class="io-vacancy__item-bottom">
                        <div class="io-vacancy__item-inner">
                            <p class="io-subheading io-fw-semibold">Пожелания к кандидатам</p>
                            <div class="io-grid io-grid-gap-100">
                                <div class="io-check">
                                    <span>Обязательно высшее образование по данной специальности.</span>
                                </div>
                                <div class="io-check">
                                    <span>Желательно владение всеми видами гитар: классическая, электрогитара, бас и укулеле.</span>
                                </div>
                                <div class="io-check">
                                    <span>Желательно владение разговорным английским и умение преподавать на этом языке.</span>
                                </div>
                                <div class="io-check">
                                    <span>Опыт работы не менее 2 лет.</span>
                                </div>
                            </div>
                        </div>
                        <div class="io-vacancy__item-inner">
                            <p class="io-subheading io-fw-semibold">Мы предлагаем</p>
                            <div class="io-grid io-grid-gap-100">
                                <div class="io-check io-check--purple">
                                    <span>Техническая поддержка новых учителей.</span>
                                </div>
                                <div class="io-check io-check--purple">
                                    <span>Удобное индивидуальное расписание для каждого педагога.</span>
                                </div>
                                <div class="io-check io-check--purple">
                                    <span>Возможность предоставления аудитории со всем необходимым оборудованием и инструментами для онлайн-уроков.</span>
                                </div>
                                <div class="io-check io-check--purple">
                                    <span>Достойная оплата труда.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="io-vacancy__item">
                    <div class="io-vacancy__item-top-left">
                        <h2 class="io-vacancy__item-heading io-heading-2">Педагог английского</h2>
                    </div>
                    <div class="io-vacancy__item-top-right">
                        <a href="<?php echo get_permalink(117); ?>" class="io-vacancy__button io-button">Стать членом команды</a>
                    </div>
                    <div class="io-vacancy__item-bottom">
                        <div class="io-vacancy__item-inner">
                            <p class="io-subheading io-fw-semibold">Пожелания к кандидатам</p>
                            <div class="io-grid io-grid-gap-100">
                                <div class="io-check">
                                    <span>Обязательно высшее образование по данной специальности.</span>
                                </div>
                                <div class="io-check">
                                    <span>Обязателен высокий уровень разговорного английского языка и наличие сертификатов.</span>
                                </div>
                                <div class="io-check">
                                    <span>Желательно знание нескольких языков и умение их преподавать.</span>
                                </div>
                                <div class="io-check">
                                    <span>Опыт работы не менее 2 лет.</span>
                                </div>
                            </div>
                        </div>
                        <div class="io-vacancy__item-inner">
                            <p class="io-subheading io-fw-semibold">Мы предлагаем</p>
                            <div class="io-grid io-grid-gap-100">
                                <div class="io-check io-check--purple">
                                    <span>Техническая поддержка новых учителей.</span>
                                </div>
                                <div class="io-check io-check--purple">
                                    <span>Удобное индивидуальное расписание для каждого педагога.</span>
                                </div>
                                <div class="io-check io-check--purple">
                                    <span>Возможность предоставления аудитории со всем необходимым оборудованием и инструментами для онлайн-уроков.</span>
                                </div>
                                <div class="io-check io-check--purple">
                                    <span>Достойная оплата труда.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
    <section class="io-vacancy io-section-first">
        <div class="container-xxl io-container-mw">
            <div class="io-vacancy__block io-block io-block--green">
                <div class="io-vacancy__data">
                    <h1 class="io-heading-2">Join Our Team</h1>
                    <p>Become part of our community and together we will inspire students to achieve new heights!</p>
                </div>
                <div class="io-vacancy__img">
                    <img src="/wp-content/themes/interschooltemplate/images/io-vacancy.svg" alt="">
                </div>
            </div>
            <div class="io-vacancy__heading-wrapper">
                <h2 class="io-vacancy__heading io-heading-2">Current Openings</h2>
            </div>
            <div class="io-vacancy__grid">
                <div class="io-vacancy__item">
                    <div class="io-vacancy__item-top-left">
                        <h2 class="io-vacancy__item-heading io-heading-2">Piano Teacher</h2>
                    </div>
                    <div class="io-vacancy__item-top-right">
                        <a href="<?php echo get_permalink(117); ?>" class="io-vacancy__button io-button">Join our team</a>
                    </div>
                    <div class="io-vacancy__item-bottom">
                        <div class="io-vacancy__item-inner">
                            <p class="io-subheading io-fw-semibold">Candidate Requirements</p>
                            <div class="io-grid io-grid-gap-100">
                                <div class="io-check"><span>A must: Higher education degree in piano specialization.</span></div>
                                <div class="io-check"><span>Preferably proficient in conversational English and able to teach in this language.</span></div>
                                <div class="io-check"><span>Must have experience teaching in a music school, including online.</span></div>
                                <div class="io-check"><span>Minimum of 2 years of experience.</span></div>
                            </div>
                        </div>
                        <div class="io-vacancy__item-inner">
                            <p class="io-subheading io-fw-semibold">What We Offer</p>
                            <div class="io-grid io-grid-gap-100">
                                <div class="io-check io-check--purple"><span>Technical support for new teachers.</span></div>
                                <div class="io-check io-check--purple"><span>Flexible individual scheduling for each educator.</span></div>
                                <div class="io-check io-check--purple"><span>Access to a fully equipped studio with all necessary instruments for online lessons.</span></div>
                                <div class="io-check io-check--purple"><span>Competitive remuneration.</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="io-vacancy__item">
                    <div class="io-vacancy__item-top-left">
                        <h2 class="io-vacancy__item-heading io-heading-2">Guitar Teacher</h2>
                    </div>
                    <div class="io-vacancy__item-top-right">
                        <a href="<?php echo get_permalink(117); ?>" class="io-vacancy__button io-button">Join our team</a>
                    </div>
                    <div class="io-vacancy__item-bottom">
                        <div class="io-vacancy__item-inner">
                            <p class="io-subheading io-fw-semibold">Candidate Requirements</p>
                            <div class="io-grid io-grid-gap-100">
                                <div class="io-check">
                                    <span>A must: Higher education degree in the field.</span>
                                </div>
                                <div class="io-check">
                                    <span>Preferably proficient in all types of guitars: classical, electric, bass, and ukulele.</span>
                                </div>
                                <div class="io-check">
                                    <span>Preferably proficient in conversational English and able to teach in English.</span>
                                </div>
                                <div class="io-check">
                                    <span>Minimum of 2 years of experience.</span>
                                </div>
                            </div>
                        </div>
                        <div class="io-vacancy__item-inner">
                            <p class="io-subheading io-fw-semibold">What We Offer</p>
                            <div class="io-grid io-grid-gap-100">
                                <div class="io-check io-check--purple"><span>Technical support for new teachers.</span></div>
                                <div class="io-check io-check--purple"><span>Flexible individual scheduling for each educator.</span></div>
                                <div class="io-check io-check--purple"><span>Access to a fully equipped studio with all necessary instruments for online lessons.</span></div>
                                <div class="io-check io-check--purple"><span>Competitive remuneration.</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="io-vacancy__item">
                    <div class="io-vacancy__item-top-left">
                        <h2 class="io-vacancy__item-heading io-heading-2">English Teacher</h2>
                    </div>
                    <div class="io-vacancy__item-top-right">
                        <a href="<?php echo get_permalink(117); ?>" class="io-vacancy__button io-button">Join our team</a>
                    </div>
                    <div class="io-vacancy__item-bottom">
                        <div class="io-vacancy__item-inner">
                            <p class="io-subheading io-fw-semibold">Candidate Requirements</p>
                            <div class="io-grid io-grid-gap-100">
                                <div class="io-check"><span>A must: Higher education degree in the field.</span></div>
                                <div class="io-check"><span>Must have a high level of spoken English and possess certifications.</span></div>
                                <div class="io-check"><span>Preferably knowledgeable in several languages and able to teach them.</span></div>
                                <div class="io-check"><span>Minimum of 2 years of experience.</span></div>
                            </div>
                        </div>
                        <div class="io-vacancy__item-inner">
                            <p class="io-subheading io-fw-semibold">What We Offer</p>
                            <div class="io-grid io-grid-gap-100">
                                <div class="io-check io-check--purple"><span>Technical support for new teachers.</span></div>
                                <div class="io-check io-check--purple"><span>Flexible individual scheduling for each educator.</span></div>
                                <div class="io-check io-check--purple"><span>Access to a fully equipped studio with all necessary instruments for online lessons.</span></div>
                                <div class="io-check io-check--purple"><span>Competitive remuneration.</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
</main>
<?php get_footer(); // подключаем footer.php ?>
<script>
    const items = document.querySelectorAll('.io-vacancy__item');

    items.forEach(item => {
        const topLeftElement = item.querySelector('.io-vacancy__item-top-left');
        const bottomElement = item.querySelector('.io-vacancy__item-bottom');

        if (window.innerWidth < 1200) {
            topLeftElement.addEventListener('click', () => {
                bottomElement.classList.toggle('active');
                topLeftElement.classList.toggle('open');
            });
        }
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