<?php
/**
 * Условия предоставления услуг terms.html
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Условия предоставления услуг
 */

include 'templates/price.php';
get_header(); // подключаем header.php ?>
<main>
    <?php //the_content(); // контент ?>
    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
    <section class="io-legal io-section-first">
        <div class="container-xxl io-container-mw">
            <div class="io-legal__heading-wrapper io-flex-between">
                <h1 class="io-legal__heading io-heading-2">Условия предоставления услуг</h1>
            </div>
            <div class="io-sidebar io-legal__sidebar">
                <div class="io-sidebar__sticky">
                    <div class="io-sidebar__inner io-sidebar__inner--unset">
                        <div class="io-legal__sidebar-block io-block-shadow">
                            <h2 class="io-sidebar__title io-heading-2">Содержание</h2>
                            <ul class="io-sidebar__list">
                                <li><a href="#io-terms-text-1">1. Учетная запись студента</a></li>  
                                <li><a href="#io-terms-text-2">2. Аккаунт студента</a></li> 
                                <li><a href="#io-terms-text-3">3. Список неприемлемых материалов при предоставлении услуг</a></li> 
                                <li><a href="#io-terms-text-4">4. Рассылка спама</a></li>      
                            </ul>
                        </div>
                        <div class="io-sidebar__banner">
                            <picture>
                                <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/ads.webp" width="300" height="180">
                                <img decoding="async" src="/wp-content/themes/interschooltemplate/images/ads.jpg" alt="" width="300" height="180">
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
                        <p>Предоставление Услуг Исполнителем (далее — Школа) основывается на условиях, которые приведены ниже:</p>
                        <h2 id="io-terms-text-1">1. Учетная запись студента</h2>
                        <p>1.1.&emsp;Регистрируясь на сайте Школы, Студент обязан предоставить достоверную и конкретную информацию о себе, в том числе свои контактные данные. Студент отвечает за работоспособность адреса электронной почты и мобильного телефона, указанных при регистрации. Студент обязан при регистрации указать адрес электронной почты, который находится в домене, который не находится в собственности у Школы. Для связи со Студентом по предоставлению Услуг, Школа будет отправлять сообщения по электронной почте (Email) и через службы коротких сообщений (SMS, Viber, Telegram и другие) на номер мобильного телефона Студента.</p>
                        <h2 id="io-terms-text-2">2. Аккаунт студента</h2>
                        <p>2.1.&emsp;Студент несет полную ответственность за все действия, которые совершались на его Аккаунте, созданным и предоставленным Школой, в том числе, если логин и пароль к Аккаунту стал известен третьим лицам.</p>
                        <h2 id="io-terms-text-3">3. Список неприемлемых материалов при предоставлении услуг</h2>
                        <p>3.1.&emsp;Все Услуги, предоставляемые Школой, должны быть использованы Студентом только в легальных целях и не противоречить действующему законодательству Украины и международным законодательным актам.</p>
                        <p>3.2.&emsp;Студенту запрещается совершать действия по размещению электронной (цифровой) информации на своем Аккаунте с нарушением авторского права и (или) смежных прав, или других прав интеллектуальной собственности третьих лиц. Это включает, но не ограничивается нелегальным распространением музыки, книг, фотографий, журналов или любой другой работы, защищенной авторскими правами. Попытка продажи контрафактной продукции приведет к немедленной блокировке Аккаунта Студента. Любой Аккаунт, который замечен в нарушении авторских прав, будет полностью или частично заблокирован. Любой Аккаунт, замеченный в повторном нарушении авторских прав, будет удален.</p>
                        <p>3.3.&emsp;Использование Аккаунта Студента для хранения резервных копий или в качестве хранилища данных — запрещено.</p>
                        <p>3.4.&emsp;Перечень материалов, которые являются неприемлемыми в Аккаунтах Студентов:</p>
                        <p>3.4.1.&emsp;Warez, crack ресурсы.</p>
                        <p>3.4.2.&emsp;Пиратские архивы фильмов, музыки, книг, телевизионных и компьютерных программ.</p>
                        <p>3.5.&emsp;Студенты несут полную ответственность за все действия, которые совершались через их Панели управления Услугами. В том числе в случае, если логин и пароль к Панели управления Услугами стал известен третьим лицам. В случае обнаружения несанкционированного доступа к Аккаунту Студента Школа имеет право ограничить к нему доступ до тех пор, пока со стороны Студента не будут приняты соответствующие меры.</p>
                        <h2 id="io-terms-text-4">4. Рассылка спама</h2>
                        <p>4.1.&emsp;Любой Аккаунт Студента, с которого осуществляется массовая рассылка незапрашиваемых писем (СПАМ), будет немедленно заблокирован с уведомлением или без такового. Аккаунт Студента, действия которого привели к появлению IP адреса, находящегося в пространстве IP адресов нашей компании, в черном списке, будет немедленно заблокирован.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
    <section class="io-legal io-section-first">
        <div class="container-xxl io-container-mw">
            <div class="io-legal__heading-wrapper io-flex-between">
                <h1 class="io-legal__heading io-heading-2">Terms of Service</h1>
            </div>
            <div class="io-sidebar io-legal__sidebar">
                <div class="io-sidebar__sticky">
                    <div class="io-sidebar__inner io-sidebar__inner--unset">
                        <div class="io-legal__sidebar-block io-block-shadow">
                            <h2 class="io-sidebar__title io-heading-2">Content</h2>
                            <ul class="io-sidebar__list">
                                <li><a href="#io-terms-text-1">1. Student Account</a></li>  
                                <li><a href="#io-terms-text-2">2. Student Account</a></li> 
                                <li><a href="#io-terms-text-3">3. List of Unacceptable Materials in Service Provision</a></li> 
                                <li><a href="#io-terms-text-4">4. Sending Spam</a></li>    
                            </ul>
                        </div>
                        <div class="io-sidebar__banner">
                            <picture>
                                <source type="image/webp" srcset="/wp-content/themes/interschooltemplate/images/ads.webp" width="300" height="180">
                                <img decoding="async" src="/wp-content/themes/interschooltemplate/images/ads.jpg" alt="" width="300" height="180">
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
                        <p>Provision of Services by the School (hereinafter referred to as the "School") is based on the following conditions:</p>
                        <h2 id="io-terms-text-1">1. Student Account</h2>
                        <p>1.1.&emsp;By registering on the School's website, the Student is obligated to provide accurate and specific information about themselves, including their contact details. The Student is responsible for the functionality of the email address and mobile phone number provided during registration. The Student must provide an email address during registration that is not under the ownership of the School. To communicate with the Student regarding the provision of services, the School will send messages via email (Email) and through short message services (SMS, Viber, Telegram, and others) to the Student's mobile phone number.</p>
                        <h2 id="io-terms-text-2">2. Student Account</h2>
                        <p>2.1.&emsp;The Student is fully responsible for all actions taken on their Account, created and provided by the School, including in cases where the login and password to the Account become known to third parties.</p>
                        <h2 id="io-terms-text-3">3. List of Unacceptable Materials in Service Provision</h2>
                        <p>3.1.&emsp;All services provided by the School must be used by the Student for lawful purposes and comply with the current legislation of Ukraine and international legislative acts.</p>
                        <p>3.2.&emsp;The Student is prohibited from engaging in actions that involve the placement of electronic (digital) information on their Account that violates copyright and/or related rights, or other intellectual property rights of third parties. This includes, but is not limited to, the illegal distribution of music, books, photographs, magazines, or any other copyrighted work. Attempting to sell counterfeit products will result in immediate blocking of the Student's Account. Any Account found to be in violation of copyright will be partially or completely blocked. Any Account found to be in repeated violation of copyright will be deleted.</p>
                        <p>3.3.&emsp;Using the Student Account for backup storage or data warehousing is prohibited.</p>
                        <p>3.4.&emsp;The following materials are deemed unacceptable in Student Accounts:</p>
                        <p>3.4.1.&emsp;Warez, crack resources.</p>
                        <p>3.4.2.&emsp;Pirate archives of movies, music, books, television, and computer programs.</p>
                        <p>3.5.&emsp;Students are fully responsible for all actions taken through their Service Control Panels, including in cases where the login and password to the Service Control Panels become known to third parties. In the event of unauthorized access to the Student's Account, the School has the right to restrict access to it until appropriate measures are taken by the Student.</p>
                        <h2 id="io-terms-text-4">4. Sending Spam</h2>
                        <p>4.1.&emsp;Any Student Account used for mass unsolicited email (SPAM) will be immediately blocked with or without notification. An Account whose actions result in the appearance of an IP address within our company's IP address space in a blacklist will be immediately blocked.</p>
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