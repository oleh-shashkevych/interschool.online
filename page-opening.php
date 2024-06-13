<?php
/**
 * Стать членом команды
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Стать членом команды
 */

include 'templates/price.php';
get_header(); // подключаем header.php ?>
<main>
    <style>
        body,
        .io-header {
            background-color: var(--io-white-main);
        }

        .io-tabs {
            grid-column: span 3;
        }

        @media (max-width: 991.5px) {
            .io-tabs {
                grid-column: span 1;
            }
        }
    </style>
    <section class="io-become io-section-first">
        <div class="container-xxl io-container-mw">
            <div class="io-agreement__inner">
                <div class="io-agreement__img"><img decoding="async" src="/wp-content/uploads/2024/05/Montessori_team.png" alt=""></div>
            </div>
            <h1 class="io-heading-2 text-center mb-4">Анкета педагога</h1>
            <h2 class="io-heading-3 io-fs-20 mb-4">Персональные данные</h2>
            <form action="" class="io-form io-become__grid">
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Фамилия (на родном языке)</label>
                    </div>
                    <input type="text" required placeholder="Введите фамилию на родном языке">
                </div>
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Имя (на родном языке)</label>
                    </div>
                    <input type="text" required placeholder="Введите имя на родном языке">
                </div>
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Отчество (на родном языке)</label>
                    </div>
                    <input type="text" required placeholder="Введите отчество на родном языке">
                </div>
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Фамилия (латиницей)</label>
                    </div>
                    <input type="text" required placeholder="Введите фамилию латиницей">
                </div>
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Имя (латиницей)</label>
                    </div>
                    <input type="text" required placeholder="Введите имя латиницей">
                </div>
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Отчество (латиницей)</label>
                    </div>
                    <input type="text" required placeholder="Введите отчество латиницей">
                </div>
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Дата рождения</label>
                    </div>
                    <div class="io-form__item-col-3">
                        <div class="io-select io-thin" id="ioDemoDay">
                            <select aria-label="День">
                                <option value="0" selected>День</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                        <div class="io-select io-thin" id="ioDemoMonth">
                            <select aria-label="Месяц">
                                <option value="0" selected>Месяц</option>
                                <option value="1">Январь</option>
                                <option value="2">Февраль</option>
                                <option value="3">Март</option>
                                <option value="4">Апрель</option>
                                <option value="5">Май</option>
                                <option value="6">Июнь</option>
                                <option value="7">Июль</option>
                                <option value="8">Август</option>
                                <option value="9">Сентябрь</option>
                                <option value="10">Октябрь</option>
                                <option value="11">Ноябрь</option>
                                <option value="12">Декабрь</option>
                            </select>
                        </div>
                        <div class="io-select io-thin" id="ioCheckYear">
                            <select aria-label="Год">
                                <option value="0" selected="">Год</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                                <option value="1929">1929</option>
                                <option value="1928">1928</option>
                                <option value="1927">1927</option>
                                <option value="1926">1926</option>
                                <option value="1925">1925</option>
                                <option value="1924">1924</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="io-form__item io-grid-span-2 d-none d-lg-grid"></div>
                <div class="io-form__item io-grid-span-2">
                    <div class="io-form__item-header">
                        <label>Домашний адрес</label>
                    </div>
                    <input type="text" required placeholder="Введите домашний адрес">
                </div>
                <div class="io-form__item io-grid-span-2">
                    <div class="io-form__item-header">
                        <label>Адрес регистрации</label>
                    </div>
                    <input type="text" required placeholder="Введите адрес регистрации">
                </div>
                <div class="io-form__item d-none d-lg-grid"></div>
                <div class="io-grid io-grid-gap-050">
                    <div class="io-form__item-header">
                        <label>Номер телефона</label>
                    </div>
                    <div class="custom-select" id="iodemophoneValue">
                        <div class="select-selected">+0</div>
                        <input class="custom-input" id="iodemophone" onblur="cleanPhoneInput(this)" name="phone" type="phone" placeholder="Введите номер телефона">
                        <div class="select-items">
                            <input type="text" class="country-search" placeholder="Поиск...">
                            <div data-value="+1" data-country="US">США<span>+1</span></div>
                            <div data-value="+375" data-country="BY">Беларусь<span>+375</span></div>
                            <div data-value="+44" data-country="GB">Великобритания<span>+44</span></div>
                            <div data-value="+49" data-country="DE">Германия<span>+49</span></div>
                            <div data-value="+7" data-country="KZ">Казахстан<span>+7</span></div>
                            <div data-value="+7" data-country="RU">Россия<span>+7</span></div>
                            <div data-value="+380" data-country="UA">Украина<span>+380</span></div>
                            <div data-value="+33" data-country="FR">Франция<span>+33</span></div>
                        </div>
                    </div>
                </div>
                <div class="io-form__item io-grid-span-2 d-none d-lg-grid"></div>
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Email</label>
                    </div>
                    <input type="text" id="ioDemoEmail" class="io-email-input" onblur="cleanEmailInput(this)" required placeholder="Введите Email">
                </div>
                <div class="io-form__item io-grid-span-2 d-none d-lg-grid"></div>
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Страна вашего пребывания</label>
                    </div>
                    <div class="custom-select" id="ioDemoCountry">
                        <div class="select-selected">+0</div>
                        <div class="select-items">
                            <input type="text" class="country-search" placeholder="Поиск...">
                            <div data-value="США" data-country="US">США</div>
                            <div data-value="Беларусь" data-country="BY">Беларусь</div>
                            <div data-value="Великобритания" data-country="GB">Великобритания</div>
                            <div data-value="Германия" data-country="DE">Германия</div>
                            <div data-value="Казахстан" data-country="KZ">Казахстан</div>
                            <div data-value="Россия" data-country="RU">Россия</div>
                            <div data-value="Украина" data-country="UA">Украина</div>
                            <div data-value="Франция" data-country="FR">Франция</div>
                        </div>
                    </div>
                </div>
                <div class="io-form__item io-grid-span-2 d-none d-lg-grid"></div>
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Часовой пояс</label>
                    </div>
                    <div class="io-select io-thin" id="ioDemoHour">
                        <select>
                            <option value="0" selected>Выберите часовой пояс</option>
                            <option value="US">America/Indiana/Tell_City</option>
                            <option value="US">America/New_York</option>
                            <option value="US">Pacific/Honolulu</option>
                            <option value="US">America/Yakutat</option>
                            <option value="US">America/Sitka</option>
                            <option value="US">America/Phoenix</option>
                            <option value="US">America/North_Dakota/New_Salem</option>
                            <option value="US">America/North_Dakota/Center</option>
                            <option value="US">America/North_Dakota/Beulah</option>
                            <option value="US">America/Adak</option>
                            <option value="US">America/Anchorage</option>
                            <option value="US">America/Boise</option>
                            <option value="US">America/Chicago</option>
                            <option value="US">America/Denver</option>
                            <option value="US">America/Detroit</option>
                            <option value="US">America/Indiana/Indianapolis</option>
                            <option value="US">America/Indiana/Knox</option>
                            <option value="US">America/Indiana/Marengo</option>
                            <option value="US">America/Indiana/Petersburg</option>
                            <option value="US">America/Nome</option>
                            <option value="US">America/Indiana/Vevay</option>
                            <option value="US">America/Indiana/Vincennes</option>
                            <option value="US">America/Indiana/Winamac</option>
                            <option value="US">America/Juneau</option>
                            <option value="US">America/Kentucky/Louisville</option>
                            <option value="US">America/Kentucky/Monticello</option>
                            <option value="US">America/Los_Angeles</option>
                            <option value="US">America/Menominee</option>
                            <option value="US">America/Metlakatla</option>
                            <option value="BY">Europe/Minsk</option>
                            <option value="GB">Europe/London</option>
                            <option value="DE">Europe/Berlin</option>
                            <option value="DE">Europe/Busingen</option>
                            <option value="KZ">Asia/Almaty</option>
                            <option value="KZ">Asia/Aqtau</option>
                            <option value="KZ">Asia/Aqtobe</option>
                            <option value="KZ">Asia/Atyrau</option>
                            <option value="KZ">Asia/Oral</option>
                            <option value="KZ">Asia/Qostanay</option>
                            <option value="KZ">Asia/Qyzylorda</option>
                            <option value="RU">Asia/Anadyr</option>
                            <option value="RU">Asia/Barnaul</option>
                            <option value="RU">Asia/Chita</option>
                            <option value="RU">Asia/Irkutsk</option>
                            <option value="RU">Asia/Kamchatka</option>
                            <option value="RU">Asia/Khandyga</option>
                            <option value="RU">Asia/Krasnoyarsk</option>
                            <option value="RU">Asia/Magadan</option>
                            <option value="RU">Asia/Novokuznetsk</option>
                            <option value="RU">Asia/Novosibirsk</option>
                            <option value="RU">Asia/Omsk</option>
                            <option value="RU">Asia/Sakhalin</option>
                            <option value="RU">Asia/Srednekolymsk</option>
                            <option value="RU">Asia/Tomsk</option>
                            <option value="RU">Asia/Ust-Nera</option>
                            <option value="RU">Asia/Vladivostok</option>
                            <option value="RU">Asia/Yakutsk</option>
                            <option value="RU">Asia/Yekaterinburg</option>
                            <option value="RU">Europe/Astrakhan</option>
                            <option value="RU">Europe/Kaliningrad</option>
                            <option value="RU">Europe/Kirov</option>
                            <option value="RU">Europe/Moscow</option>
                            <option value="RU">Europe/Samara</option>
                            <option value="RU">Europe/Saratov</option>
                            <option value="RU">Europe/Ulyanovsk</option>
                            <option value="RU">Europe/Volgograd</option>
                            <option value="UA">Europe/Simferopol</option>
                            <option value="UA">Europe/Kyiv</option>
                            <option value="FR">Europe/Paris</option>
                        </select>
                    </div>
                </div>
                <div class="io-form__item io-grid-span-2 d-none d-lg-grid"></div>
                <div class="io-grid io-grid-gap-050">
                    <div class="io-form__item-header">
                        <label>Личное фото</label>
                    </div>
                    <div class="custom-file-upload">
                        <input type="file" id="photo1" name="photo1">
                        <label for="photo1">Выберите файл</label>
                    </div>
                </div>
            </form>
            <h2 class="io-heading-3 io-fs-20 mb-3 mt-5">Документы</h2>
            <form action="" class="io-form io-become__grid">
                <nav class="io-tabs" id="io-tabs">
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="io-fs-18 nav-link active" data-tab-id="ioTab1" id="ioTab1-tab" data-bs-toggle="tab" data-bs-target="#ioTab1" type="button" role="tab" aria-controls="ioTab1" aria-selected="true">Паспорт</button>
                        <button class="io-fs-18 nav-link" data-tab-id="ioTab2" id="ioTab2-tab" data-bs-toggle="tab" data-bs-target="#ioTab2" type="button" role="tab" aria-controls="ioTab2" aria-selected="false">ID карта</button>                        
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="ioTab1" role="tabpanel" aria-labelledby="ioTab1-tab">
                        <div class="io-grid io-grid-gap-050" style="margin-bottom: 30px;">
                            <div class="io-form__item-header">
                                <label>Копия паспорта (страница 1)</label>
                            </div>
                            <div class="custom-file-upload">
                                <input type="file" id="photo2" name="photo2">
                                <label for="photo2">Выберите файл</label>
                            </div>
                        </div>
                        <div class="io-grid io-grid-gap-050" style="margin-bottom: 30px;">
                            <div class="io-form__item-header">
                                <label>Копия паспорта (страница 2)</label>
                            </div>
                            <div class="custom-file-upload">
                                <input type="file" id="photo22" name="photo22">
                                <label for="photo22">Выберите файл</label>
                            </div>
                        </div>
                        <div class="io-grid io-grid-gap-050" style="margin-bottom: 30px;">
                            <div class="io-form__item-header">
                                <label>Копия паспорта (страница 10)</label>
                            </div>
                            <div class="custom-file-upload">
                                <input type="file" id="photo3" name="photo3">
                                <label for="photo3">Выберите файл</label>
                            </div>
                        </div>
                        <div class="io-grid io-grid-gap-050">
                            <div class="io-form__item-header">
                                <label>Копия паспорта (страница 11)</label>
                            </div>
                            <div class="custom-file-upload">
                                <input type="file" id="photo4" name="photo4">
                                <label for="photo4">Выберите файл</label>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="ioTab2" role="tabpanel" aria-labelledby="ioTab2-tab">
                        <div class="io-grid io-grid-gap-050" style="margin-bottom: 30px;">
                            <div class="io-form__item-header">
                                <label>Копия лицевой стороны ID карты</label>
                            </div>
                            <div class="custom-file-upload">
                                <input type="file" id="photo5" name="photo5">
                                <label for="photo5">Выберите файл</label>
                            </div>
                        </div>
                        <div class="io-grid io-grid-gap-050">
                            <div class="io-form__item-header">
                                <label>Копия обратной стороны ID карты</label>
                            </div>
                            <div class="custom-file-upload">
                                <input type="file" id="photo6" name="photo6">
                                <label for="photo6">Выберите файл</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="io-form__item io-grid-span-2 d-none d-lg-grid"></div>
                <div class="io-grid io-grid-gap-050">
                    <div class="io-form__item-header">
                        <label>Копия идентификационного кода</label>
                    </div>
                    <div class="custom-file-upload">
                        <input type="file" id="photo7" name="photo7">
                        <label for="photo7">Выберите файл</label>
                    </div>
                </div>
                <div class="io-form__item io-grid-span-2 d-none d-lg-grid"></div>
                <div class="io-grid io-grid-gap-050">
                    <div class="io-form__item-header">
                        <label>Копия диплома о высшем образовании</label>
                    </div>
                    <div class="custom-file-upload">
                        <input type="file" id="photo8" name="photo8">
                        <label for="photo8">Выберите файл</label>
                    </div>
                </div>
            </form>
            <h2 class="io-heading-3 io-fs-20 mb-4 mt-5">Данные о последнем месте работы</h2>
            <form action="" class="io-form io-become__grid">
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Населённый пункт, область</label>
                    </div>
                    <input type="text" required placeholder="Введите населённый пункт, область">
                </div>
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Полное название места работы</label>
                    </div>
                    <input type="text" required placeholder="Введите полное название места работы">
                </div>
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Должность</label>
                    </div>
                    <input type="text" required placeholder="Введите должность">
                </div>
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Дата с</label>
                    </div>
                    <div class="io-form__item-col-3">
                        <div class="io-select io-thin" id="ioDemoDay">
                            <select aria-label="День">
                                <option value="0" selected>День</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                        <div class="io-select io-thin" id="ioDemoMonth">
                            <select aria-label="Месяц">
                                <option value="0" selected>Месяц</option>
                                <option value="1">Январь</option>
                                <option value="2">Февраль</option>
                                <option value="3">Март</option>
                                <option value="4">Апрель</option>
                                <option value="5">Май</option>
                                <option value="6">Июнь</option>
                                <option value="7">Июль</option>
                                <option value="8">Август</option>
                                <option value="9">Сентябрь</option>
                                <option value="10">Октябрь</option>
                                <option value="11">Ноябрь</option>
                                <option value="12">Декабрь</option>
                            </select>
                        </div>
                        <div class="io-select io-thin" id="ioCheckYear">
                            <select aria-label="Год">
                                <option value="0" selected="">Год</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                                <option value="1929">1929</option>
                                <option value="1928">1928</option>
                                <option value="1927">1927</option>
                                <option value="1926">1926</option>
                                <option value="1925">1925</option>
                                <option value="1924">1924</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Дата по</label>
                    </div>
                    <div class="io-form__item-col-3">
                        <div class="io-select io-thin" id="ioDemoDay">
                            <select aria-label="День">
                                <option value="0" selected>День</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                        <div class="io-select io-thin" id="ioDemoMonth">
                            <select aria-label="Месяц">
                                <option value="0" selected>Месяц</option>
                                <option value="1">Январь</option>
                                <option value="2">Февраль</option>
                                <option value="3">Март</option>
                                <option value="4">Апрель</option>
                                <option value="5">Май</option>
                                <option value="6">Июнь</option>
                                <option value="7">Июль</option>
                                <option value="8">Август</option>
                                <option value="9">Сентябрь</option>
                                <option value="10">Октябрь</option>
                                <option value="11">Ноябрь</option>
                                <option value="12">Декабрь</option>
                            </select>
                        </div>
                        <div class="io-select io-thin" id="ioCheckYear">
                            <select aria-label="Год">
                                <option value="0" selected="">Год</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                                <option value="1929">1929</option>
                                <option value="1928">1928</option>
                                <option value="1927">1927</option>
                                <option value="1926">1926</option>
                                <option value="1925">1925</option>
                                <option value="1924">1924</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
            <h2 class="io-heading-3 io-fs-20 mb-4 mt-5">Данные о высшем образовании (законченном)</h2>
            <form action="" class="io-form io-become__grid">
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Населённый пункт, область</label>
                    </div>
                    <input type="text" required placeholder="Введите населённый пункт, область">
                </div>
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Полное название учебного заведения</label>
                    </div>
                    <input type="text" required placeholder="Введите полное название учебного заведения">
                </div>
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Специальность</label>
                    </div>
                    <input type="text" required placeholder="Введите специальность">
                </div>
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Дата с</label>
                    </div>
                    <div class="io-form__item-col-3">
                        <div class="io-select io-thin" id="ioDemoDay">
                            <select aria-label="День">
                                <option value="0" selected>День</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                        <div class="io-select io-thin" id="ioDemoMonth">
                            <select aria-label="Месяц">
                                <option value="0" selected>Месяц</option>
                                <option value="1">Январь</option>
                                <option value="2">Февраль</option>
                                <option value="3">Март</option>
                                <option value="4">Апрель</option>
                                <option value="5">Май</option>
                                <option value="6">Июнь</option>
                                <option value="7">Июль</option>
                                <option value="8">Август</option>
                                <option value="9">Сентябрь</option>
                                <option value="10">Октябрь</option>
                                <option value="11">Ноябрь</option>
                                <option value="12">Декабрь</option>
                            </select>
                        </div>
                        <div class="io-select io-thin" id="ioCheckYear">
                            <select aria-label="Год">
                                <option value="0" selected="">Год</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                                <option value="1929">1929</option>
                                <option value="1928">1928</option>
                                <option value="1927">1927</option>
                                <option value="1926">1926</option>
                                <option value="1925">1925</option>
                                <option value="1924">1924</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="io-form__item">
                    <div class="io-form__item-header">
                        <label>Дата по</label>
                    </div>
                    <div class="io-form__item-col-3">
                        <div class="io-select io-thin" id="ioDemoDay">
                            <select aria-label="День">
                                <option value="0" selected>День</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                        <div class="io-select io-thin" id="ioDemoMonth">
                            <select aria-label="Месяц">
                                <option value="0" selected>Месяц</option>
                                <option value="1">Январь</option>
                                <option value="2">Февраль</option>
                                <option value="3">Март</option>
                                <option value="4">Апрель</option>
                                <option value="5">Май</option>
                                <option value="6">Июнь</option>
                                <option value="7">Июль</option>
                                <option value="8">Август</option>
                                <option value="9">Сентябрь</option>
                                <option value="10">Октябрь</option>
                                <option value="11">Ноябрь</option>
                                <option value="12">Декабрь</option>
                            </select>
                        </div>
                        <div class="io-select io-thin" id="ioCheckYear">
                            <select aria-label="Год">
                                <option value="0" selected="">Год</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
                                <option value="2016">2016</option>
                                <option value="2015">2015</option>
                                <option value="2014">2014</option>
                                <option value="2013">2013</option>
                                <option value="2012">2012</option>
                                <option value="2011">2011</option>
                                <option value="2010">2010</option>
                                <option value="2009">2009</option>
                                <option value="2008">2008</option>
                                <option value="2007">2007</option>
                                <option value="2006">2006</option>
                                <option value="2005">2005</option>
                                <option value="2004">2004</option>
                                <option value="2003">2003</option>
                                <option value="2002">2002</option>
                                <option value="2001">2001</option>
                                <option value="2000">2000</option>
                                <option value="1999">1999</option>
                                <option value="1998">1998</option>
                                <option value="1997">1997</option>
                                <option value="1996">1996</option>
                                <option value="1995">1995</option>
                                <option value="1994">1994</option>
                                <option value="1993">1993</option>
                                <option value="1992">1992</option>
                                <option value="1991">1991</option>
                                <option value="1990">1990</option>
                                <option value="1989">1989</option>
                                <option value="1988">1988</option>
                                <option value="1987">1987</option>
                                <option value="1986">1986</option>
                                <option value="1985">1985</option>
                                <option value="1984">1984</option>
                                <option value="1983">1983</option>
                                <option value="1982">1982</option>
                                <option value="1981">1981</option>
                                <option value="1980">1980</option>
                                <option value="1979">1979</option>
                                <option value="1978">1978</option>
                                <option value="1977">1977</option>
                                <option value="1976">1976</option>
                                <option value="1975">1975</option>
                                <option value="1974">1974</option>
                                <option value="1973">1973</option>
                                <option value="1972">1972</option>
                                <option value="1971">1971</option>
                                <option value="1970">1970</option>
                                <option value="1969">1969</option>
                                <option value="1968">1968</option>
                                <option value="1967">1967</option>
                                <option value="1966">1966</option>
                                <option value="1965">1965</option>
                                <option value="1964">1964</option>
                                <option value="1963">1963</option>
                                <option value="1962">1962</option>
                                <option value="1961">1961</option>
                                <option value="1960">1960</option>
                                <option value="1959">1959</option>
                                <option value="1958">1958</option>
                                <option value="1957">1957</option>
                                <option value="1956">1956</option>
                                <option value="1955">1955</option>
                                <option value="1954">1954</option>
                                <option value="1953">1953</option>
                                <option value="1952">1952</option>
                                <option value="1951">1951</option>
                                <option value="1950">1950</option>
                                <option value="1949">1949</option>
                                <option value="1948">1948</option>
                                <option value="1947">1947</option>
                                <option value="1946">1946</option>
                                <option value="1945">1945</option>
                                <option value="1944">1944</option>
                                <option value="1943">1943</option>
                                <option value="1942">1942</option>
                                <option value="1941">1941</option>
                                <option value="1940">1940</option>
                                <option value="1939">1939</option>
                                <option value="1938">1938</option>
                                <option value="1937">1937</option>
                                <option value="1936">1936</option>
                                <option value="1935">1935</option>
                                <option value="1934">1934</option>
                                <option value="1933">1933</option>
                                <option value="1932">1932</option>
                                <option value="1931">1931</option>
                                <option value="1930">1930</option>
                                <option value="1929">1929</option>
                                <option value="1928">1928</option>
                                <option value="1927">1927</option>
                                <option value="1926">1926</option>
                                <option value="1925">1925</option>
                                <option value="1924">1924</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="io-form__item d-none d-lg-grid"></div>
                <div class="io-form__item mt-4">
                    <div class="io-form__item-header">
                        <label style="display: inline-flex; flex-direction: row-reverse; gap: var(--io-size-025);">Обязательные поля</label>
                    </div>
                </div>
            </form>
            <div class="d-flex justify-content-center mt-5">
                <button class="io-button" style="max-width: 300px;">Отправить</button>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); // подключаем footer.php ?>
<?php io_price(); ?>
<script>
    // Функция для удаления куки
    function deleteCookie(cname) {
        document.cookie = cname + '=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
    }

    // Вызов функции для удаления куки с именем 'currentTab'
    deleteCookie('currentTab');
</script>