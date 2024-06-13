<?php
/**
 * Порядок обработки жалоб complaints.html
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Порядок обработки жалоб
 */

include 'templates/price.php';
get_header(); // подключаем header.php ?>
<main>
    <?php //the_content(); // контент ?>
    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
    <section class="io-legal io-section-first">
        <div class="container-xxl io-container-mw">
            <div class="io-legal__heading-wrapper io-flex-between">
                <h1 class="io-legal__heading io-heading-2">Порядок обработки жалоб</h1>
            </div>
            <div class="io-sidebar io-legal__sidebar">
                <div class="io-sidebar__sticky">
                    <div class="io-sidebar__inner io-sidebar__inner--unset">
                        <div class="io-sidebar__banner">
                            <picture>
                                <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/advord3.webp" width="300" height="180">
                                <img decoding="async" src="/wp-content/themes/interschooltemplate/images/advord3.jpg" alt="" width="300" height="180">
                            </picture>
                            <div>
                                <div>
                                    <span>НЕ ЗАРЫВАЙ</span>
                                </div>
                                <div>
                                    <span>ТАЛАНТ </span>
                                </div>
                                <div>
                                    <span>УЧИСЬ </span>
                                </div>
                                <div>
                                    <span>ОНЛАЙН!</span>
                                </div>
                            </div>
                            <a href="<?php echo get_permalink(22); ?>">Выбрать курс</a>
                        </div>
                    </div>
                </div>
                <div class="io-sidebar__content">
                    <div class="io-text-wrapper io-legal__text-wrapper">
                        <p>Все письма, которые приходят на почтовый адрес: <a class="io-link io-link--purple" href='mailto:info@interschool.online'>info@interschool.online</a> сохраняются в специальном программном обеспечении Монтессори центра для последующей обработки. Обработка полученной корреспонденции производится сотрудниками Монтессори центра в установленном порядке:</p>
                        <h2>Порядок подачи и оформления обращений о противоправных действиях</h2>
                        <ol>
                            <li>Подача производится путем отправки электронного письма на почтовый адрес компании <a class="io-link io-link--purple" href='mailto:info@interschool.online'>info@interschool.online</a>.</li>
                            <li>Обращение должно быть составлено на украинском, русском или английском языках.</li>
                            <li>Обращение должно содержать следующую информацию:
                                <ul>
                                    <li>Имя отправителя.</li>
                                    <li>Описание того, чьи права и каким образом были нарушены.</li>
                                    <li>Контактные данные отправителя обращения или уполномоченного лица.</li>
                                    <li>Документальное подтверждение нарушения (решение суда, подтверждение авторских прав и прочее).</li>
                                </ul>
                            </li>
                        </ol>
                        <h2>Сроки и порядок обработки обращений</h2>
                        <ol>
                            <li>Документально подтвержденные и обоснованные обращения рассматриваются в сроки, которые, как правило, не превышают 5 дней с момента поступления такого обращения на Email: <a class="io-link io-link--purple" href='mailto:info@interschool.online'>info@interschool.online</a>.</li>
                            <li>Ответы с результатами рассмотрения в обязательном порядке предоставляются только для обоснованных и документально подтвержденных обращений о противоправных действиях.</li>
                            <li>Монтессори центр не несет ответственности за невозможность рассмотрения жалоб, которые не были доставлены по техническим причинам.</li>
                            <li>Обработка обращений производится согласно публичной оферты, законодательства Украины и действующих в Украине норм международного права.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
    <section class="io-legal io-section-first">
        <div class="container-xxl io-container-mw">
            <div class="io-legal__heading-wrapper io-flex-between">
                <h1 class="io-legal__heading io-heading-2">Complaints Handling Procedure</h1>
            </div>
            <div class="io-sidebar io-legal__sidebar">
                <div class="io-sidebar__sticky">
                    <div class="io-sidebar__inner io-sidebar__inner--unset">
                        <div class="io-sidebar__banner">
                            <picture>
                                <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/advord3.webp" width="300" height="180">
                                <img decoding="async" src="/wp-content/themes/interschooltemplate/images/advord3.jpg" alt="" width="300" height="180">
                            </picture>
                            <div>
                                <div>
                                    <span>DON'T LOSE</span>
                                </div>
                                <div>
                                    <span>TALENT</span>
                                </div>
                                <div>
                                    <span>STUDY</span>
                                </div>
                                <div>
                                    <span>ONLINE!</span>
                                </div>
                            </div>
                            <a href="<?php echo get_permalink(22); ?>">Choose course</a>
                        </div>
                    </div>
                </div>
                <div class="io-sidebar__content">
                    <div class="io-text-wrapper io-legal__text-wrapper">
                        <p>All emails received at the email address <a class="io-link io-link--purple" href='mailto:info@interschool.online'>info@interschool.online</a> are stored in special software by Montessori Center for further processing. The processing of received correspondence is carried out by Montessori Center employees according to established procedures:</p>
                        <h2>Procedure for submitting and processing reports on unlawful actions:</h2>
                        <ol>
                            <li>Submission is done by sending an email to the company's email address <a class="io-link io-link--purple" href='mailto:info@interschool.online'>info@interschool.online</a>.</li>
                            <li>The report should be written in Ukrainian, Russian, or English.</li>
                            <li>The report should contain the following information:
                                <ul>
                                    <li>Sender's name.</li>
                                    <li>Description of whose rights were violated and how.</li>
                                    <li>Contact information of the sender or authorized representative.</li>
                                    <li>Documentary evidence of the violation (court decision, copyright confirmation, etc.)</li>
                                </ul>
                            </li>
                        </ol>
                        <h2>Timelines and procedure for processing reports:</h2>
                        <ol>
                            <li>Documentary confirmed and justified reports are reviewed within a period usually not exceeding 5 days from the receipt of such report at the email address <a class="io-link io-link--purple" href='mailto:info@interschool.online'>info@interschool.online</a>.</li>
                            <li>Responses with the results of the review are provided only for justified and documentary confirmed reports on unlawful actions.</li>
                            <li>Montessori Center is not responsible for the inability to consider complaints that were not delivered due to technical reasons.</li>
                            <li>The processing of reports is carried out in accordance with the public offer, Ukrainian legislation, and applicable norms of international law in Ukraine.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
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