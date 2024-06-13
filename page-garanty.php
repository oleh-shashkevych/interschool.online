<?php
/**
 * Гарантия возврата денег garanty.html
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Гарантия возврата денег
 */

include 'templates/price.php';
get_header(); // подключаем header.php ?>
<main>
    <?php //the_content(); // контент ?>
    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
    <section class="io-legal io-section-first">
        <div class="container-xxl io-container-mw">
            <div class="io-legal__heading-wrapper io-flex-between">
                <h1 class="io-legal__heading io-heading-2">Гарантия возврата денег</h1>
            </div>
            <div class="io-sidebar io-legal__sidebar">
                <div class="io-sidebar__sticky">
                    <div class="io-sidebar__inner io-sidebar__inner--unset">
                        <div class="io-sidebar__banner">
                            <picture>
                                <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/advo4.webp" width="300" height="180">
                                <img decoding="async" src="/wp-content/themes/interschooltemplate/images/advo4.jpg" alt="" width="300" height="180">
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
                        <p>В течение 30-ти дней с момента оплаты услуг в случае отказа от услуг, независимо от причины отказа, гарантируется полный возврат средств, за вычетом комиссий платежных систем, стоимости услуг, которые уже были получены и сумм налогообложения.</p>
                        <h2>Условия возврата денег:</h2>
                        <ol>
                            <li>Возврат денег осуществляется только за впервые заказанные услуги. Например: если вы заказали услугу, после чего получили возврат денег и заказали у нас подобную услугу второй раз, то вы не сможете получить обратно деньги за второй заказ.</li>
                            <li>Запросить возврат денег можно только на протяжении 30 дней с момента оплаты услуг.</li>
                            <li>Возврат средств производится за вычетом комиссии платежных систем и сумм налогообложения.</li>
                            <li>При платежах картой VISA и MasterCard деньги возвращаются на ту же карту, с которой был произведен платеж. После того, как мы вернем платеж деньги появятся на карте в течении 3-х банковских дней. Обратите внимание на то, что этот платеж не появится в выписках по карте, а просто увеличивается сумма на карте. Такой тип возврата доступен только в течении 30 дней после оплаты.</li>
                            <li>Деньги возвращаются по тем же реквизитам, с которых была произведена оплата услуг.</li>
                            <li>В случае, если оплата была произведена физлицом через отделение банка то деньги могут быть возвращены одним из следующих способов:
                                <ul>
                                    <li>На карту Приватбанка. Для получения денег на карту Приватбанка, необходимо написать запрос в администрацию и указать номер карты и ФИО получателя.</li>
                                    <li>На дебетную карту любого банка Украины. При этом пользователь должен предоставить все реквизиты для отправки денег на свою карту, а именно: наименование получателя, IBAN, назначение платежа, номер карты, ФИО держателя карты.</li>
                                    <li>Другим способом, который будет удобен для обеих сторон.</li>
                                </ul>
                            </li>
                            <li>Возврат оплаты производится в течение 10 дней с момента подачи заявки.</li>
                            <li>Возврат оплаты не производится при нарушении правил Монтессори центра.</li>
                            <li>При возврате вычитаются все бонусы и скидки.</li>
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
                <h1 class="io-legal__heading io-heading-2">Money Back Guarantee</h1>
            </div>
            <div class="io-sidebar io-legal__sidebar">
                <div class="io-sidebar__sticky">
                    <div class="io-sidebar__inner io-sidebar__inner--unset">
                        <div class="io-sidebar__banner">
                            <picture>
                                <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/advo4.webp" width="300" height="180">
                                <img decoding="async" src="/wp-content/themes/interschooltemplate/images/advo4.jpg" alt="" width="300" height="180">
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
                        <p>Within 30 days from the payment for services, a full refund is guaranteed in case of service cancellation, regardless of the reason, minus payment system fees, the cost of services already received, and tax amounts.</p>
                        <h2>Money refund conditions:</h2>
                        <ol>
                            <li>Money refund is only applicable for initially ordered services. For example, if you ordered a service, received a refund, and then placed a similar order with us again, you will not be able to receive a refund for the second order.</li>
                            <li>A request for a refund can only be made within 30 days from the payment for services.</li>
                            <li>Refunds are processed minus payment system fees and tax amounts.</li>
                            <li>For payments made by VISA and MasterCard, the money will be refunded to the same card used for the payment. After we initiate the refund, the funds will appear on the card within 3 business days. Please note that this refund will not appear as a separate transaction on the card statement, but the card balance will increase. This type of refund is available within 30 days from the payment.</li>
                            <li>Money will be refunded using the same payment details used for the initial payment.</li>
                            <li>If the payment was made by an individual through a bank branch, the money can be refunded using one of the following methods:
                                <ul>
                                    <li>To a PrivatBank card. To receive the refund on a PrivatBank card, you need to submit a request to the administration, providing the card number and recipient's full name.</li>
                                    <li>To a debit card of any Ukrainian bank. In this case, the user must provide all the necessary details for sending money to their card, including the recipient's name, IBAN, payment purpose, card number, and cardholder's full name.</li>
                                    <li>Through another method that is convenient for both parties.</li>
                                </ul>
                            </li>
                            <li>Payment refunds are processed within 10 days from the submission of the request.</li>
                            <li>Refunds are not provided in case of violations of Montessori Center rules.</li>
                            <li>All bonuses and discounts are deducted during the refund process.</li>
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