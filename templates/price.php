<?php
function io_price() {
    ob_start(); // Start output buffering to capture the HTML content
?>  
<!-- Стили для скриптов этого файла -->
<style>
    .io-abonement.active,
    .io-demo.active,
    .io-gift.active {
        display: flex;
    }

    .io-abonement,
    .io-demo,
    .io-gift {
        display: none;
    }

    .io-abonement.hide,
    .io-demo.hide,
    .io-gift.hide {
        display: none;
    }
    
    #ioGiftLessonsList.empty {
        display: none;
    }

    #ioGiftLessonsList {
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        gap: var(--io-size-050);
        -webkit-transition: var(--io-transition);
        -o-transition: var(--io-transition);
        transition: var(--io-transition);
    }

    #ioGiftLessonsList>div {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        gap: var(--io-size-050);
    }

    #ioGiftLessonsList>div button {
        width: var(--io-size-125);
        height: var(--io-size-125);
        background-position: center;
        background-size: 12px 12px;
        background-repeat: no-repeat;
        background-color: transparent;
        background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M18.9999 8.99997H11V0.999936C11 0.448058 10.552 0 9.99991 0C9.44803 0 8.99997 0.448058 8.99997 0.999936V8.99997H0.999936C0.448058 8.99997 0 9.44803 0 9.99991C0 10.552 0.448058 11 0.999936 11H8.99997V18.9999C8.99997 19.5519 9.44803 20 9.99991 20C10.552 20 11 19.5519 11 18.9999V11H18.9999C19.5519 11 20 10.552 20 9.99991C20 9.44803 19.5519 8.99997 18.9999 8.99997Z' fill='%23ee292d'/%3E%3C/svg%3E%0A");
        border: 2px solid #ee292d;
        border-radius: 50%;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    #ioGiftLessonsList>div button::before {
        display: none;
    }

    #ioDemoLessonsList.empty {
        display: none;
    }

    #ioDemoLessonsList {
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        gap: var(--io-size-050);
        -webkit-transition: var(--io-transition);
        -o-transition: var(--io-transition);
        transition: var(--io-transition);
    }

    #ioDemoLessonsList>div {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        gap: var(--io-size-050);
    }

    #ioDemoLessonsList>div button {
        width: var(--io-size-125);
        height: var(--io-size-125);
        background-position: center;
        background-size: 12px 12px;
        background-repeat: no-repeat;
        background-color: transparent;
        background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M18.9999 8.99997H11V0.999936C11 0.448058 10.552 0 9.99991 0C9.44803 0 8.99997 0.448058 8.99997 0.999936V8.99997H0.999936C0.448058 8.99997 0 9.44803 0 9.99991C0 10.552 0.448058 11 0.999936 11H8.99997V18.9999C8.99997 19.5519 9.44803 20 9.99991 20C10.552 20 11 19.5519 11 18.9999V11H18.9999C19.5519 11 20 10.552 20 9.99991C20 9.44803 19.5519 8.99997 18.9999 8.99997Z' fill='%23ee292d'/%3E%3C/svg%3E%0A");
        border: 2px solid #ee292d;
        border-radius: 50%;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    #ioDemoLessonsList>div button::before {
        display: none;
    }
</style>

<!-- Закрыть аккордеон на таблетах -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (window.innerWidth < 1200) {
            // Добавляем класс collapsed к кнопке
            var button = document.getElementById('courseAccordion-headingOne').querySelector('button');
            button.classList.add('collapsed');

            // Убираем класс show у элемента
            var collapseOne = document.getElementById('courseAccordion-collapseOne');
            collapseOne.classList.remove('show');
        }
    });

</script>

<!-- Скрипт бегунка Input Range -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        function handleRangeInput(rangeInput, lessonElements, circleElements, activeIndex) {
            lessonElements.forEach((lesson, index) => {
                lesson.classList.toggle('active', index === activeIndex);
                lesson.classList.toggle('alt', activeIndex >= 6 && index === activeIndex);
            });

            circleElements.forEach((circle, index) => {
                circle.classList.toggle('active', index < activeIndex);
            });
        }

        const rangeInput = document.getElementById('ioAmountRange');
        const lessonElements = document.querySelectorAll('.io-range__lesson');
        const circleElements = document.querySelectorAll('.io-range__circle');

        if(rangeInput && lessonElements.length && circleElements.length) {
            rangeInput.addEventListener('input', () => {
                const activeIndex = parseInt(rangeInput.value) - 1;
                handleRangeInput(rangeInput, lessonElements, circleElements, activeIndex);
            });
        }

        const rangeInputGift = document.getElementById('ioAmountRangeGift');
        const lessonElementsGift = document.querySelectorAll('.io-range__lesson-gift');
        const circleElementsGift = document.querySelectorAll('.io-range__circle-gift');

        if(rangeInputGift && lessonElementsGift.length && circleElementsGift.length) {
            rangeInputGift.addEventListener('input', () => {
                const activeIndexGift = parseInt(rangeInputGift.value) - 1;
                handleRangeInput(rangeInputGift, lessonElementsGift, circleElementsGift, activeIndexGift);
            });
        }

        var ioAbonementOptions = document.getElementById('ioAbonementOptions');
        if(ioAbonementOptions) {
            ioAbonementOptions.addEventListener('click', function (event) {
                var selectedValue = event.target.dataset.value;
                if (selectedValue) {
                    var activeIndex = parseInt(selectedValue) - 1;
                    handleRangeInput(rangeInput, lessonElements, circleElements, activeIndex);
                }
            });
        }

        var ioGiftOptions = document.getElementById('ioGiftOptions');
        if(ioGiftOptions) {
            ioGiftOptions.addEventListener('click', function (event) {
                var selectedValue = event.target.dataset.value;
                if (selectedValue) {
                    var activeIndex = parseInt(selectedValue) - 1;
                    handleRangeInput(rangeInputGift, lessonElementsGift, circleElementsGift, activeIndex);
                }
            });
        }
    });
</script>

<!-- Скрипты для инпутов, селектов и т.п. -->
<script>
    // Функция для проверки и добавления класса
    function checkYearAndAddClass() {
        var ioCheckYearSelected = document.querySelector("#ioCheckYear .io-select__selected");
        var ioCheckParentsDiv = document.getElementById("ioCheckParents");

        // Получаем текущий год
        var currentYear = new Date().getFullYear();

        // Получаем выбранный год из элемента .io-select__selected
        var selectedYear = parseInt(ioCheckYearSelected.textContent);

        // Проверяем разницу между текущим годом и выбранным годом
        if (currentYear - selectedYear < 18) {
            ioCheckParentsDiv.classList.add("show");
        } else {
            ioCheckParentsDiv.classList.remove("show");
        }
    }

    // Вызываем функцию при загрузке страницы
    checkYearAndAddClass();

    // Добавляем обработчик события input для реагирования на изменение текстового содержимого
    var ioCheckYearSelected = document.querySelector("#ioCheckYear .io-select__selected");
    ioCheckYearSelected.addEventListener("input", checkYearAndAddClass);

    // Добавляем обработчик события click для реагирования на клик
    var ioSelectItems = document.querySelector("#ioCheckYear .io-select__select-items");
    ioSelectItems.addEventListener("click", checkYearAndAddClass);

</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Получаем все элементы с классом "io-select__label"
        var labelElements = document.querySelectorAll(".io-select__label");

        // Функция для проверки и обновления классов
        function checkAndToggleClass(labelElement, selectElement) {
            if (selectElement.classList.contains("io-select__option--default")) {
                labelElement.classList.remove("hide"); // Добавляем класс hide к label
            } else {
                labelElement.classList.add("hide"); // Удаляем класс hide у label
            }
        }

        // Проходим по всем элементам и настраиваем MutationObserver для каждой пары label-select
        labelElements.forEach(function(labelElement) {
            var selectElement = labelElement.nextElementSibling;

            // Начинаем следить за изменениями в классах selectElement
            var observer = new MutationObserver(function() {
                checkAndToggleClass(labelElement, selectElement);
            });

            observer.observe(selectElement, {
                attributes: true,
                attributeFilter: ['class']
            });

            // Вызываем функцию проверки и обновления классов при инициализации страницы
            checkAndToggleClass(labelElement, selectElement);
        });
    });

</script>
<script>
    function initializeCustomSelect(select) {
        const selectItems = select.querySelector('.select-items');
        const searchInput = select.querySelector('.country-search');
        const selectSelected = select.querySelector('.select-selected');
        const inputField = select.querySelector('.custom-input');

        let isSearching = false;
        const defaultCountryCode = "+1";
        selectSelected.innerText = defaultCountryCode;

        select.addEventListener('click', function(e) {
            if (e.target.classList.contains('select-selected')) {
                selectItems.style.display = selectItems.style.display === 'block' ? 'none' : 'block';

                if (selectItems.style.display === 'block') {
                    select.classList.add('open');
                } else {
                    select.classList.remove('open');
                }

                if (!isSearching) {
                    searchInput.value = '';
                    resetSearch();
                }
            }
        });

        selectItems.addEventListener('click', function(e) {
            if (e.target.getAttribute('data-value')) {
                const selectedValue = e.target.getAttribute('data-value');
                const selectedText = e.target.innerText;
                selectSelected.innerText = selectedValue;
                selectItems.style.display = 'none';
                select.classList.remove('open');

                searchInput.value = '';
                resetSearch();
            }
        });

        searchInput.addEventListener('input', function() {
            const searchTerm = searchInput.value.toLowerCase();
            const items = selectItems.querySelectorAll('div[data-value]');

            items.forEach(function(item) {
                const itemText = item.innerText.toLowerCase();
                if (itemText.includes(searchTerm)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });

            selectItems.style.display = 'block';

            if (selectItems.style.display === 'block') {
                select.classList.add('open');
                isSearching = searchTerm.length > 0;
            }
        });

        document.addEventListener('click', function(e) {
            if (!select.contains(e.target)) {
                selectItems.style.display = 'none';
                select.classList.remove('open');

                searchInput.value = '';
                resetSearch();
            }
        });

        inputField.addEventListener('focus', function() {
            selectItems.style.display = 'none'; // Скрыть select-items при фокусировке
            select.classList.remove('open');
        });

        function resetSearch() {
            const items = selectItems.querySelectorAll('div[data-value]');
            items.forEach(function(item) {
                item.style.display = 'flex';
            });
            isSearching = false;
        }
    }

    const customSelects = document.querySelectorAll('.custom-select');
    customSelects.forEach(initializeCustomSelect);
</script>

<script>
    // Получаем все элементы с классом .custom-select
    var customSelectsFocus = document.querySelectorAll('.custom-select');

    // Добавляем обработчик событий для каждого .custom-select
    customSelectsFocus.forEach(function(customSelect) {
        // Получаем элемент .custom-input внутри текущего .custom-select
        var customInput = customSelect.querySelector('.custom-input');

        // Добавляем обработчик события фокусировки
        customInput.addEventListener('focus', function() {
            // Добавляем класс "focus" к родительскому .custom-select
            customSelect.classList.add('focus');
        });

        // Добавляем обработчик события потери фокуса
        customInput.addEventListener('blur', function() {
            // Удаляем класс "focus" у родительского .custom-select
            customSelect.classList.remove('focus');
        });
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Обработчик выбора страны для нового скрипта
        const countrySelectItemsNew = document.querySelectorAll('.custom-select#ioDemoCountry .select-items [data-country]');
        countrySelectItemsNew.forEach(item => {
            item.addEventListener('click', function() {
                const countryCode = item.getAttribute('data-country');
                const ioDemoHour = document.getElementById('ioDemoHour');
                const ioSelectOptions = ioDemoHour.querySelectorAll('.io-select__option');
                
                // Проходим по всем элементам .io-select__option
                ioSelectOptions.forEach(option => {
                    // Проверяем, содержит ли элемент класс, соответствующий коду страны
                    if (option.classList.contains(countryCode)) {
                        // Если да, показываем его
                        option.style.display = 'block';
                    } else {
                        // Если нет, скрываем
                        option.style.display = 'none';
                    }
                });
                
                // Устанавливаем новое значение для дата-атрибута
                ioDemoHour.setAttribute('data-location', countryCode);

                // Проверяем, есть ли класс "io-select__option--default"
                const ioSelectSelected = ioDemoHour.querySelector('.io-select__selected');
                if (!ioSelectSelected.classList.contains('io-select__option--default')) {
                    // Если нет, добавляем его
                    ioSelectSelected.classList.add('io-select__option--default');
                }

                // Проверяем, есть ли только один элемент с классом, соответствующим коду страны
                const filteredOptions = Array.from(ioSelectOptions).filter(option => option.classList.contains(countryCode));
                if (filteredOptions.length === 1) {
                    // Если да, устанавливаем его значение в io-select__selected и убираем класс io-select__option--default
                    ioSelectSelected.textContent = filteredOptions[0].textContent;
                    ioSelectSelected.classList.remove('io-select__option--default');
                } else {
                    // Если нет, устанавливаем текст "Выберите часовой пояс"
                    ioSelectSelected.textContent = 'Выберите часовой пояс';
                }
            });
        });
    });
</script>

<!-- Проверка страны для выбора кода -->
<script>
    // Функция для получения информации о стране по IP-адресу с использованием бесплатного API
    function getCountryFromIP() {
        fetch('https://ipinfo.io/json?token=824ed7b94d266a')
            .then(response => response.json())
            .then(data => {
                // Извлекаем название страны из данных
                const country = data.country || 'Неизвестно';

                // Находим все элементы с атрибутом data-country
                const countrySelectItems = document.querySelectorAll('[data-country]');

                // Проходимся по всем элементам с атрибутом data-country
                countrySelectItems.forEach(item => {
                    const itemCountry = item.getAttribute('data-country');
                    if (itemCountry === country) {
                        // Выбираем эту страну
                        item.click();
                    }
                });
            })
            .catch(error => {
                console.error('Ошибка при получении данных о стране:', error);
            });
    }

    // Вызываем функцию для определения страны при загрузке страницы
    getCountryFromIP();

    // Обработчик выбора страны
    const countrySelectItems = document.querySelectorAll('[data-country]');
    countrySelectItems.forEach(item => {
        item.addEventListener('click', function() {
            const countryCode = item.getAttribute('data-value');
        });
    });

</script>

<!-- Очистка символов в инпутах -->
<script>
    function cleanInput(inputElement) {
        var inputValue = inputElement.value;

        // Очищаем введенные данные
        var cleanedValue = inputValue.replace(/[^a-zA-Zа-яА-ЯёЁ\s-]/g, '');

        // Записываем очищенное значение обратно в инпут
        inputElement.value = cleanedValue;
    }

    function cleanEmailInput(inputElement) {
        var inputValue = inputElement.value;

        // Очищаем введенные данные
        var cleanedValue = inputValue.replace(/[^a-zA-Z0-9@._-]/g, '');

        // Записываем очищенное значение обратно в инпут
        inputElement.value = cleanedValue;
    }

    function cleanPhoneInput(inputElement) {
        var inputValue = inputElement.value;

        // Очищаем введенные данные (оставляем только цифры)
        var cleanedValue = inputValue.replace(/\D/g, '');

        // Записываем очищенное значение обратно в инпут
        inputElement.value = cleanedValue;
    }

</script>

<!-- Проверка форм при клике на кнопки -->
<script>
    function validateForm() {
        var abonementNameValue = document.getElementById("ioAbonementName").value;
        var pocketphoneValue = document.getElementById("iopocketphone").value;
        var abonementEmailValue = document.getElementById("ioAbonementEmail").value;
        var emailPattern = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

        var abonementName = document.getElementById("ioAbonementName");
        var pocketphone = document.getElementById("iopocketphonelabel");
        var abonementEmail = document.getElementById("ioAbonementEmail");

        if (abonementNameValue === "") {
            abonementName.classList.add('error');
        } else {
            abonementName.classList.remove('error');
        }

        if (pocketphoneValue === "") {
            pocketphone.classList.add('error');
        } else {
            pocketphone.classList.remove('error');
        }

        if (abonementEmailValue === "" || !emailPattern.test(abonementEmailValue)) {
            abonementEmail.classList.add('error');
        } else {
            abonementEmail.classList.remove('error');
        }
    }
    
    function validateDemoForm() {
        // Определение элементов
        var demoNameValue = document.getElementById("ioDemoName").value;
        var demoSurnameValue = document.getElementById("ioDemoSurname").value;
        var demoPhoneValue = document.getElementById("iodemophone").value;
        var demoEmailValue = document.getElementById("ioDemoEmail").value;
        var emailPattern = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

        var demoName = document.getElementById("ioDemoName");
        var demoSurname = document.getElementById("ioDemoSurname");
        var demoPhoneLabel = document.getElementById("iodemophoneValue");
        var demoEmail = document.getElementById("ioDemoEmail");

        // Проверка для ioDemoParent
        var ioDemoParent = document.getElementById("ioDemoParent");
        var ioDemoParentValue = ioDemoParent.value;

        // Проверка каждого элемента отдельно
        if (demoNameValue === "") {
            demoName.classList.add('error');
        } else {
            demoName.classList.remove('error');
        }

        if (demoSurnameValue === "") {
            demoSurname.classList.add('error');
        } else {
            demoSurname.classList.remove('error');
        }

        if (demoPhoneValue === "") {
            demoPhoneLabel.classList.add('error');
        } else {
            demoPhoneLabel.classList.remove('error');
        }

        if (demoEmailValue === "" || !emailPattern.test(demoEmailValue)) {
            demoEmail.classList.add('error');
        } else {
            demoEmail.classList.remove('error');
        }

        var ioDemoDayBlock = document.getElementById("ioDemoDay");
        var ioDemoDaySelectedElement = ioDemoDayBlock.querySelector(".io-select__selected");
        var ioDemoDayHasDefaultOptionClass = ioDemoDaySelectedElement && ioDemoDaySelectedElement.classList.contains("io-select__option--default");

        if (ioDemoDayHasDefaultOptionClass) {
            ioDemoDaySelectedElement.classList.add("error");
        } else {
            ioDemoDaySelectedElement.classList.remove("error");
        }

        var ioDemoMonthBlock = document.getElementById("ioDemoMonth");
        var ioDemoMonthSelectedElement = ioDemoMonthBlock.querySelector(".io-select__selected");
        var ioDemoMonthHasDefaultOptionClass = ioDemoMonthSelectedElement && ioDemoMonthSelectedElement.classList.contains("io-select__option--default");

        if (ioDemoMonthHasDefaultOptionClass) {
            ioDemoMonthSelectedElement.classList.add("error");
        } else {
            ioDemoMonthSelectedElement.classList.remove("error");
        }

        var ioDemoYearBlock = document.getElementById("ioCheckYear");
        var ioDemoYearSelectedElement = ioDemoYearBlock.querySelector(".io-select__selected");
        var ioDemoYearHasDefaultOptionClass = ioDemoYearSelectedElement && ioDemoYearSelectedElement.classList.contains("io-select__option--default");

        if (ioDemoYearHasDefaultOptionClass) {
            ioDemoYearSelectedElement.classList.add("error");
        } else {
            ioDemoYearSelectedElement.classList.remove("error");
        }

        // Проверка для ioDemoParent
        if (ioDemoParentValue === "" && ioCheckParents.classList.contains("show")) {
            ioDemoParent.classList.add('error');
        } else {
            ioDemoParent.classList.remove('error');
        }

        var ioDemoHourBlock = document.getElementById("ioDemoHour");
        var ioDemoHourSelectedElement = ioDemoHourBlock.querySelector(".io-select__selected");
        var ioDemoHourHasDefaultOptionClass = ioDemoHourSelectedElement && ioDemoHourSelectedElement.classList.contains("io-select__option--default");

        if (ioDemoHourHasDefaultOptionClass) {
            ioDemoHourSelectedElement.classList.add("error");
        } else {
            ioDemoHourSelectedElement.classList.remove("error");
        }
    }

    function validateGiftForm() {
        var ioGiftNameValue = document.getElementById("ioGiftName").value;
        var ioGiftSurnameValue = document.getElementById("ioGiftSurname").value;
        var ioGiftPayerValue = document.getElementById("ioGiftPayer").value;
        var ioGiftPhoneValue = document.getElementById("ioGiftPhone").value;
        var ioGiftEmailValue = document.getElementById("ioGiftEmail").value;
        var emailPattern = /^[^\s()<>@,;:\/]+@\w[\w\.-]+\.[a-z]{2,}$/i;

        var ioGiftName = document.getElementById("ioGiftName");
        var ioGiftSurname = document.getElementById("ioGiftSurname");
        var ioGiftPayer = document.getElementById("ioGiftPayer");
        var ioGiftPhone = document.getElementById("ioGiftPhonelabel");
        var ioGiftEmail = document.getElementById("ioGiftEmail");

        if (ioGiftNameValue === "") {
            ioGiftName.classList.add('error');
        } else {
            ioGiftName.classList.remove('error');
        }

        if (ioGiftSurnameValue === "") {
            ioGiftSurname.classList.add('error');
        } else {
            ioGiftSurname.classList.remove('error');
        }

        if (ioGiftPayerValue === "") {
            ioGiftPayer.classList.add('error');
        } else {
            ioGiftPayer.classList.remove('error');
        }

        if (ioGiftPhoneValue === "") {
            ioGiftPhone.classList.add('error');
        } else {
            ioGiftPhone.classList.remove('error');
        }

        if (ioGiftEmailValue === "" || !emailPattern.test(ioGiftEmailValue)) {
            ioGiftEmail.classList.add('error');
        } else {
            ioGiftEmail.classList.remove('error');
        }
    }

    // Привязываем функцию к событию клика на кнопке
    var lessonButtonDisplay = document.getElementById("lessonButtonDisplay");
    lessonButtonDisplay.addEventListener("click", validateForm);
    lessonButtonDisplay.addEventListener("click", validateDemoForm);
    lessonButtonDisplay.addEventListener("click", validateGiftForm);

</script>

<!-- Радиокнопки из чекбокса -->
<script>
    // Находим все блоки с классом 'io-checkbox-group'
    const ioGiftCourseCheck = document.getElementById('ioGiftCourseCheck');
    const ioGiftCourseCheckboxes = ioGiftCourseCheck.querySelectorAll('.io-checkbox');

    ioGiftCourseCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
            if (checkbox.checked) {
                // Если выбран новый чекбокс, снимаем выбор с предыдущих в этой группе
                ioGiftCourseCheckboxes.forEach(otherCheckbox => {
                    if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                    }
                });
            }
        });
    });

</script>

<!-- Промокод -->
<script>
    function ioPromoInnerToggleClass(element) {
        var parentElement = element.closest('.io-promo');
        var inputElement = element.querySelector('input');

        // Проверяем наличие класса 'active' у родительского элемента
        if (parentElement.classList.contains('active')) {
            element.classList.remove('active', 'add', 'error');

            // Очистка проверок и заполнения инпута
            inputElement.value = '';

            // Восстановление оригинального placeholder
            if (inputElement.dataset.defaultPlaceholder) {
                inputElement.placeholder = inputElement.dataset.defaultPlaceholder;
                delete inputElement.dataset.defaultPlaceholder;
            }

            // Удаление класса 'active' у родительского элемента
            parentElement.classList.remove('active');
        } else {
            // Старый функционал для случая, когда нет класса 'active'
            element.classList.toggle('active');
            element.classList.remove('add');

            // Добавляем класс 'active' к родительскому элементу, если 'io-promo__inner' имеет класс 'active'
            if (element.classList.contains('active')) {
                parentElement.classList.add('active');

                // Устанавливаем фокус на инпут
                inputElement.focus();
            } else {
                parentElement.classList.remove('active');
            }
        }

        if (window.innerWidth < 1200) {
            inputElement.placeholder = '';
        }
    }


    function ioPromoInnerCheck(element) {
        var inputElement = element.querySelector('input');
        var inputValue = inputElement.value.trim();

        if (inputValue !== '') {
            element.classList.add('add');

            // Удаляем класс 'error', если он был добавлен ранее
            element.classList.remove('error');

            // Восстанавливаем оригинальный placeholder, если он был изменен
            if (inputElement.dataset.defaultPlaceholder) {
                inputElement.placeholder = inputElement.dataset.defaultPlaceholder;
                delete inputElement.dataset.defaultPlaceholder;
                if (window.innerWidth < 1200) {
                    inputElement.placeholder = '';
                }
            }

            // Добавляем класс 'active' к родительскому элементу
            var parentElement = element.closest('.io-promo');
            parentElement.classList.add('active');
        } else {
            // Если значение пустое, добавляем класс 'error'
            // element.classList.add('error');

            // Сохраняем текущий placeholder перед изменением
            // inputElement.dataset.defaultPlaceholder = inputElement.placeholder;

            // Устанавливаем новый placeholder
            // inputElement.placeholder = "<?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Неверный промокод'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'Invalid coupon code'; } ?>";

            // Удаляем класс 'add', если он был добавлен ранее
            element.classList.remove('add');

            // Добавляем класс 'active' к родительскому элементу (по вашему выбору)
            // var parentElement = element.closest('.io-promo');
            // parentElement.classList.add('active');
            element.classList.remove('active');
            var parentElement = element.closest('.io-promo');
            parentElement.classList.remove('active');
        }
    }

</script>

<!-- Фокус активной цены и оплаты -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ioPriceStepElements = document.querySelectorAll('.io-price__step');
        var ioRangeWrappers = document.querySelectorAll('.io-range__wrapper');

        // Функция для добавления класса focus и прокрутки к выбранному блоку
        function addFocusClassAndScroll(event) {
            var ioPriceStep = event.target.closest('.io-price__step');
            
            if (!ioPriceStep || ioPriceStep.classList.contains('focus')) {
                return;
            }

            // Убираем класс focus у всех элементов перед добавлением на текущий
            ioPriceStepElements.forEach(function(element) {
                element.classList.remove('focus');
            });

            // Добавляем класс focus
            ioPriceStep.classList.add('focus');

            // Проверяем, имеет ли блок io-price__first класс io-price__first
            if (!ioPriceStep.classList.contains('io-price__first')) {
                // Прокручиваем к выбранному блоку с отступом от верха на 160px
                if (window.innerWidth >= 1200) {
                    var scrollOffset = ioPriceStep.getBoundingClientRect().top + window.scrollY - 160;
                    window.scrollTo({
                        top: scrollOffset,
                        behavior: 'smooth'
                    });
                }
            }
        }

        // Функция для удаления класса focus
        function removeFocusClass() {
            this.classList.remove('focus');
        }

        // Обработчик события для элементов с классом io-price__step
        ioPriceStepElements.forEach(function(element) {
            if (window.innerWidth >= 1200) {
                element.addEventListener('mouseup', addFocusClassAndScroll);
            } else {
                element.addEventListener('touchstart', addFocusClassAndScroll);
            }
        });

        // Обработчик события для клика вне элементов
        document.addEventListener('click', function(event) {
            if (window.innerWidth < 1200) {
                closeFocus(event);
            }
        });

        // Добавлен обработчик для io-range__wrapper
        ioRangeWrappers.forEach(function(ioRangeWrapper) {
            ioRangeWrapper.addEventListener('touchstart', addFocusClassAndScroll);

            var ioRangeElements = ioRangeWrapper.querySelectorAll('*');
            ioRangeElements.forEach(function(element) {
                element.addEventListener('touchstart', addFocusClassAndScroll);
            });
        });

        document.addEventListener('touchend', function(event) {
            if (window.innerWidth < 1200) {
                closeFocus(event);
            }
        });

        // Обработчик события для касания вне элементов
        document.addEventListener('touchend', function(event) {
            // Проверяем, является ли цель касания элементом внутри формы данных блоков
            if (window.innerWidth < 1200 && !event.target.closest('.io-price__step')) {
                closeFocus(event);
            }
        });

        // Функция для закрытия фокуса при клике или касании вне элементов
        function closeFocus(event) {
            // var isClickInsideIoPriceStep = false;

            // // Проверяем, является ли цель клика элементом с классом io-price__step или его потомком
            // ioPriceStepElements.forEach(function(element) {
            //     if (element.contains(event.target)) {
            //         isClickInsideIoPriceStep = true;
            //     }
            // });

            // // Если клик или касание были вне элементов, убираем класс focus
            // if (!isClickInsideIoPriceStep) {
            //     ioPriceStepElements.forEach(function(element) {
            //         element.classList.remove('focus');
            //     });
            // }
        }

        // Проверка и добавление класса focus к блоку с классом io-price__first при загрузке страницы
        var ioPriceFirst = document.querySelector('.io-price__first');
        if (ioPriceFirst && !ioPriceFirst.classList.contains('focus')) {
            ioPriceFirst.classList.add('focus');
        }
    });
</script>

<!-- Убрать проверку -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Получаем все элементы input на странице
        var inputElements = document.querySelectorAll('input[type="text"]');

        // Устанавливаем атрибут spellcheck в значение false для каждого элемента
        inputElements.forEach(function(input) {
            input.setAttribute('spellcheck', 'false');
        });
    });

</script>

<!-- Смена placeholder -->
<script>
    function updatePlaceholder() {
        if (window.innerWidth < 576) {
            document.getElementById('iopocketphone').setAttribute('placeholder', '<?php echo (ICL_LANGUAGE_CODE === 'en') ? 'Enter number' : 'Введите номер'; ?>');
        } else {
            document.getElementById('iopocketphone').setAttribute('placeholder', '<?php echo (ICL_LANGUAGE_CODE === 'en') ? 'Enter phone number' : 'Введите номер телефона'; ?>');
        }
    }

    document.addEventListener('DOMContentLoaded', updatePlaceholder);
    window.addEventListener('resize', updatePlaceholder);

</script>
<!-- Скрытие меню при скролле -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var body = document.body;
        var lastScrollTop = 0;
        var isSecondScriptActive = false;

        window.addEventListener('scroll', function() {
            var currentScroll = window.pageYOffset || document.documentElement.scrollTop;

            if (!isSecondScriptActive) {
                if (currentScroll > lastScrollTop && window.innerWidth <= 576) {
                    // Скролл вниз
                    document.querySelector('.io-header').style.top = '-58px';
                    document.querySelector('.io-tabs-wrapper').style.top = '0';
                } else {
                    // Скролл вверх или стоит на месте
                    document.querySelector('.io-header').style.top = '0';
                    if (window.innerWidth <= 576) {
                        document.querySelector('.io-tabs-wrapper').style.top = '58px';
                    } else {
                        document.querySelector('.io-tabs-wrapper').style.top = '';
                    }
                }
            }

            lastScrollTop = currentScroll;
        });

        const accordionButtons = document.querySelectorAll('.io-accordion__button');

        accordionButtons.forEach(button => {
            button.addEventListener('click', () => {
                if (!button.classList.contains('collapsed')) {
                    const parentItem = button.closest('.io-accordion__item');

                    if (parentItem) {
                        parentItem.addEventListener('shown.bs.collapse', () => {
                            let itemOffsetTop;

                            if (window.innerWidth >= 1200) {
                                itemOffsetTop = parentItem.offsetTop - 110;
                            } else if (window.innerWidth >= 992 && window.innerWidth < 1200) {
                                itemOffsetTop = parentItem.offsetTop - 114;
                            } else if (window.innerWidth >= 576 && window.innerWidth < 992) {
                                itemOffsetTop = parentItem.offsetTop - 106;
                            } else {
                                itemOffsetTop = parentItem.offsetTop - 48;
                                lastScrollTop = 0;
                                isSecondScriptActive = true;

                                // Устанавливаем задержку перед сбросом флага
                                setTimeout(() => {
                                    isSecondScriptActive = false;
                                }, 1000); // 2 секунды задержки

                                document.querySelector('.io-header').style.top = '-58px';
                                document.querySelector('.io-tabs-wrapper').style.top = '0';
                            }

                            window.scrollTo({
                                top: itemOffsetTop,
                                behavior: 'smooth'
                            });
                        });
                    }
                }
            });
        });

        const accordionButtons3 = document.querySelectorAll('.io-accordion__price-button');

        accordionButtons3.forEach(button => {
            button.addEventListener('click', () => {
                if (!button.classList.contains('collapsed')) {
                    const parentItem = button.closest('.io-accordion__item');

                    if (parentItem) {
                        parentItem.addEventListener('shown.bs.collapse', () => {
                            let itemOffsetTop;
                            <?php if(is_page_template('page-demo.php') || is_page_template('page-subs.php') || is_page_template('page-gift.php')) { ?>
                                // Код для определенного шаблона страницы
                                if (window.innerWidth >= 1200) {
                                    itemOffsetTop = parentItem.offsetTop + 500;
                                } else if (window.innerWidth >= 992 && window.innerWidth < 1200) {
                                    itemOffsetTop = parentItem.offsetTop + 380;
                                } else if (window.innerWidth >= 576 && window.innerWidth < 992) {
                                    itemOffsetTop = parentItem.offsetTop + 455;
                                } else {
                                    if (window.innerWidth >= 391 && window.innerWidth < 576) {
                                        itemOffsetTop = parentItem.offsetTop + 455;
                                    } else {
                                        itemOffsetTop = parentItem.offsetTop + 455;
                                    }
                                }
                            <?php } else { ?>
                                // Код для страницы курсов
                                if (window.innerWidth >= 1200) {
                                    itemOffsetTop = parentItem.offsetTop + 370;
                                } else if (window.innerWidth >= 992 && window.innerWidth < 1200) {
                                    itemOffsetTop = parentItem.offsetTop + 360;
                                } else if (window.innerWidth >= 576 && window.innerWidth < 992) {
                                    itemOffsetTop = parentItem.offsetTop + 445;
                                } else {
                                    if (window.innerWidth >= 391 && window.innerWidth < 576) {
                                        itemOffsetTop = parentItem.offsetTop + 520;
                                    } else {
                                        itemOffsetTop = parentItem.offsetTop + 550;
                                    }
                                }
                            <?php } ?>

                            window.scrollTo({
                                top: itemOffsetTop,
                                behavior: 'smooth'
                            });
                        });
                    }
                }
            });
        });
    });
</script>
<script>
    // Получаем ссылки на все кнопки аккордиона
    const accordionButtons2 = document.querySelectorAll('.io-popular-video__accordion-button');

    // Добавляем обработчик события для каждой кнопки
    accordionButtons2.forEach(button => {
        button.addEventListener('click', () => {
            // Проверяем, является ли открываемый пункт активным
            if (!button.classList.contains('collapsed')) {
                // Находим родительский элемент io-accordion__item
                const parentItem = button.closest('.io-popular-video__accordion-item');

                // Проверяем, что у нас есть родительский элемент io-accordion__item
                if (parentItem) {
                    // Добавляем обработчик события shown.bs.collapse, чтобы прокрутить страницу после завершения анимации открытия/закрытия панели аккордиона
                    parentItem.addEventListener('shown.bs.collapse', () => {
                        // Устанавливаем значение отступа в зависимости от ширины экрана
                        let itemOffsetTop;
                        if (window.innerWidth >= 992) {
                            itemOffsetTop = parentItem.parentElement.offsetTop - 130;
                        } else if (window.innerWidth >= 576 && window.innerWidth < 992) {
                            itemOffsetTop = parentItem.offsetTop - 115;
                        } else {
                            itemOffsetTop = parentItem.offsetTop - 57;
                            isSecondScriptActive = true;

                            // Устанавливаем задержку перед сбросом флага
                            setTimeout(() => {
                                isSecondScriptActive = false;
                            }, 1000); // 2 секунды задержки

                            document.querySelector('.io-header').style.top = '-58px';
                            document.querySelector('.io-tabs-wrapper').style.top = '0';
                        }

                        window.scrollTo({
                            top: itemOffsetTop,
                            behavior: 'smooth'
                        });
                    });
                }
            }
        });
    });

</script>

<!-- ============================================ Работа скриптов связанных с валютой и ценами ============================================ -->
<script>
    // Функции для работы с куками
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    function eraseCookie(name) {
        document.cookie = name + '=; Max-Age=-99999999;';
    }
    
    // Глобальная переменная
    window.globalSelectedValue = 'usd';

    // Функция, которая выполняет скрипт абонемента
    function ioAbonementFunction() {
        var valuesArray;

        // Изменяем значения в valuesArray в зависимости от значения глобальной переменной
        if (window.globalSelectedValue === 'usd' || window.globalSelectedValue === 'USD') {
            valuesArray = [
                [4, 14, 0, 56, 56],
                [8, 14, 0, 112, 112],
                [12, 14, 0, 168, 168],
                [16, 14, 0, 224, 224],
                [24, 14, 0, 336, 336],
                [32, 14, 0, 448, 448],
                [80, 12.50, 120, 1000, 1120],
                [120, 11.50, 300, 1380, 1680],
                [160, 11, 480, 1760, 2240]
            ];
        } else {
            valuesArray = [
                [4, 13, 0, 52, 52],
                [8, 13, 0, 104, 104],
                [12, 13, 0, 156, 156],
                [16, 13, 0, 208, 208],
                [24, 13, 0, 312, 312],
                [32, 13, 0, 416, 416],
                [80, 11.50, 120, 800, 920],
                [120, 10.50, 300, 960, 1260],
                [160, 10, 480, 1120, 1600]
            ];
        }

        // Получаем элементы DOM для первого скрипта
        var ioAmountRange = document.getElementById("ioAmountRange");
        var ioAbonementCount = document.getElementById("ioAbonementCount");
        var ioAbonementLessonPrice = document.getElementById("ioAbonementLessonPrice");
        var ioAbonementLessonSaleWrapper = document.getElementById("ioAbonementLessonSaleWrapper");
        var ioAbonementLessonSale = document.getElementById("ioAbonementLessonSale");
        var ioAbonementAmount = document.getElementById("ioAbonementAmount");
        var ioAbonementAmountOld = document.getElementById("ioAbonementAmountOld");
        var ioAbonementAmountOldWrapper = document.getElementById("ioAbonementAmountOldWrapper");

        // Получаем элементы DOM для второго скрипта
        var ioAbonementSelect = document.getElementById("ioAbonementSelect");
        var ioAbonementOptions = document.getElementById("ioAbonementOptions");
        var ioAbonementDropdownLessonCount = document.getElementById("ioAbonementDropdownLessonCount");
        var ioAbonementDropdownLessonAmount = document.getElementById("ioAbonementDropdownLessonAmount");

        // Функция для форматирования числа с двумя знаками после запятой, если они есть
        function formatNumber(number) {
            return Number.isInteger(number) ? number : number.toFixed(2);
        }

        // Функция для обновления значений для первого скрипта
        function updateValues(index) {
            var selectedValues = valuesArray[index];
            ioAbonementCount.textContent = selectedValues[0];
            ioAbonementLessonPrice.textContent = formatNumber(selectedValues[1]);
            ioAbonementLessonSale.textContent = formatNumber(selectedValues[2]);
            // Проверяем, если третий элемент массива равен 0, скрываем элемент
            if (selectedValues[2] === 0) {
                ioAbonementLessonSaleWrapper.classList.add('hide');
            } else {
                ioAbonementLessonSaleWrapper.classList.remove('hide');
            }
            ioAbonementAmount.textContent = formatNumber(selectedValues[3]);
            // Сравниваем цену со скидкой и без
            if (selectedValues[3] == selectedValues[4]) {
                ioAbonementAmountOldWrapper.style.display = "none";
            } else {
                ioAbonementAmountOldWrapper.style.display = "inline";
            }
            ioAbonementAmountOld.textContent = formatNumber(selectedValues[4]);

            // Обновляем значения для второго скрипта
            updateValuesFromList(index + 1);
        }

        // Обработчик события изменения значения input range
        ioAmountRange.addEventListener("input", function () {
            var index = ioAmountRange.value - 1; // Индекс массива начинается с 0
            updateValues(index);
        });

        // Вызов функции для установки значений первого скрипта при загрузке страницы
        updateValues(ioAmountRange.value - 1);

        // Функция для обновления значений для второго скрипта
        function updateValuesFromList(selectedValue) {
            var selectedArray = valuesArray[selectedValue - 1];
            ioAbonementDropdownLessonCount.textContent = selectedArray[0];
            ioAbonementDropdownLessonAmount.textContent = formatNumber(selectedArray[3]);
        }

        // Обработчик клика по элементу списка для второго скрипта
        ioAbonementOptions.addEventListener("click", function (event) {
            var selectedValue = event.target.dataset.value;
            if (selectedValue) {
                updateValuesFromList(selectedValue);
                ioAmountRange.value = selectedValue;
                updateValues(selectedValue - 1);
            }
        });

        // Обработчик клика по основному элементу для второго скрипта
        ioAbonementSelect.addEventListener("click", function () {
            // Переключаем видимость списка
            ioAbonementOptions.style.display = ioAbonementOptions.style.display === "block" ? "none" : "block";
        });
    }

    // Функция, которая выполняет скрипт подарочного сертификата
    function ioGiftFunction() {
        var valuesArray;

        // Изменяем значения в valuesArray в зависимости от значения глобальной переменной
        if (window.globalSelectedValue === 'usd' || window.globalSelectedValue === 'USD') {
            valuesArray = [
                [4, 14, 0, 56, 56],
                [8, 14, 0, 112, 112],
                [12, 14, 0, 168, 168],
                [16, 14, 0, 224, 224],
                [24, 14, 0, 336, 336],
                [32, 14, 0, 448, 448],
                [80, 12.50, 120, 1000, 1120],
                [120, 11.50, 300, 1380, 1680],
                [160, 11, 480, 1760, 2240]
            ];
        } else {
            valuesArray = [
                [4, 13, 0, 52, 52],
                [8, 13, 0, 104, 104],
                [12, 13, 0, 156, 156],
                [16, 13, 0, 208, 208],
                [24, 13, 0, 312, 312],
                [32, 13, 0, 416, 416],
                [80, 11.50, 120, 800, 920],
                [120, 10.50, 300, 960, 1260],
                [160, 10, 480, 1120, 1600]
            ];
        }

        // Получаем элементы DOM
        var ioAmountRangeGift = document.getElementById("ioAmountRangeGift");
        var ioGiftCount = document.getElementById("ioGiftCount");
        var ioGiftLessonPrice = document.getElementById("ioGiftLessonPrice");
        var ioGiftLessonSaleWrapper = document.getElementById("ioGiftLessonSaleWrapper");
        var ioGiftLessonSale = document.getElementById("ioGiftLessonSale");
        var ioGiftAmount = document.getElementById("ioGiftAmount");
        var ioGiftAmountOld = document.getElementById("ioGiftAmountOld");
        var ioGiftAmountOldWrapper = document.getElementById("ioGiftAmountOldWrapper");
        var ioGiftLessonsList = document.getElementById('ioGiftLessonsList');

        // Получаем элементы DOM для второго скрипта
        var ioGiftSelect = document.getElementById("ioGiftSelect");
        var ioGiftOptions = document.getElementById("ioGiftOptions");
        var ioGiftDropdownLessonCount = document.getElementById("ioGiftDropdownLessonCount");
        var ioGiftDropdownLessonAmount = document.getElementById("ioGiftDropdownLessonAmount");
        var ioGiftCourseCheck = document.getElementById("ioGiftCourseCheck");
        var radioButtons = ioGiftCourseCheck.querySelectorAll('.io-radio');

        var checkedRadioButton = ioGiftCourseCheck.querySelector('.io-radio:checked');

        function updateEmptyClass() {
            if (ioGiftLessonsList.children.length === 0 && (!checkedRadioButton || checkedRadioButton && !checkedRadioButton.checked)) {
                ioGiftLessonsList.classList.add('empty');
            } else {
                ioGiftLessonsList.classList.remove('empty');
            }
        }

        function updateCountWrapperAndAmount() {
            var checkedRadioButton = ioGiftCourseCheck.querySelector('.io-radio:checked');
            var countWrapper = document.getElementById("ioGiftCountWrapper");

            if (checkedRadioButton) {
                countWrapper.classList.remove('hide');
                var index = ioAmountRangeGift.value - 1;
                var selectedValues = valuesArray[index];
                ioGiftAmount.textContent = formatNumber(selectedValues[3]);
                ioGiftAmountOldWrapper.style.display = "";
            } else {
                countWrapper.classList.add('hide');
                ioGiftAmount.textContent = "0";
                ioGiftAmountOldWrapper.style.display = "none";
            }
        }

        if (checkedRadioButton) {
            var labelContent = document.querySelector('label[for="' + checkedRadioButton.id + '"]').textContent;
            var labelContainer = document.createElement('div');
            labelContainer.className = 'io-check';
            var labelSpan = document.createElement('span');
            labelSpan.className = 'io-fw-semibold io-purple-main';
            labelSpan.textContent = labelContent;
            var button = document.createElement('button');
            labelContainer.appendChild(labelSpan);
            labelContainer.appendChild(button);
            ioGiftLessonsList.appendChild(labelContainer);

            button.addEventListener('click', function () {
                ioGiftLessonsList.innerHTML = '';
                checkedRadioButton.checked = false;
                updateEmptyClass();
                updateCountWrapperAndAmount();
            });
        }

        radioButtons.forEach(function (radioButton, index) {
            radioButton.addEventListener('change', function () {
                var labelContent = document.querySelector('label[for="' + radioButton.id + '"]').textContent;
                var labelContainer = document.createElement('div');
                labelContainer.className = 'io-check';
                var labelSpan = document.createElement('span');
                labelSpan.className = 'io-fw-semibold io-purple-main';
                labelSpan.textContent = labelContent;
                var button = document.createElement('button');
                labelContainer.appendChild(labelSpan);
                labelContainer.appendChild(button);
                ioGiftLessonsList.innerHTML = '';
                ioGiftLessonsList.appendChild(labelContainer);
                updateEmptyClass();
                button.addEventListener('click', function () {
                    ioGiftLessonsList.innerHTML = '';
                    radioButton.checked = false;
                    updateEmptyClass();
                    updateCountWrapperAndAmount();
                });
                updateCountWrapperAndAmount();
            });
        });

        function formatNumber(number) {
            return Number.isInteger(number) ? number : number.toFixed(2);
        }

        function updateValues(index) {
            var selectedValues = valuesArray[index];
            ioGiftCount.textContent = selectedValues[0];
            ioGiftLessonPrice.textContent = formatNumber(selectedValues[1]);
            ioGiftLessonSale.textContent = formatNumber(selectedValues[2]);
            if (selectedValues[2] === 0) {
                ioGiftLessonSaleWrapper.classList.add('hide');
            } else {
                ioGiftLessonSaleWrapper.classList.remove('hide');
            }
            ioGiftAmount.textContent = formatNumber(selectedValues[3]);
            if (selectedValues[3] == selectedValues[4]) {
                ioGiftAmountOldWrapper.style.display = "none";
            } else {
                ioGiftAmountOldWrapper.style.display = "inline";
            }
            ioGiftAmountOld.textContent = formatNumber(selectedValues[4]);
            updateValuesFromList(index + 1);
        }


        function updateValuesFromList(selectedValue) {
            var selectedArray = valuesArray[selectedValue - 1];
            ioGiftDropdownLessonCount.textContent = selectedArray[0];
            ioGiftDropdownLessonAmount.textContent = formatNumber(selectedArray[3]);
            ioAmountRangeGift.value = selectedValue;
        }

        ioAmountRangeGift.addEventListener("input", function () {
            var index = ioAmountRangeGift.value - 1;
            updateValues(index);
            updateCountWrapperAndAmount();
        });

        updateValues(ioAmountRangeGift.value - 1);

        ioGiftOptions.addEventListener("click", function (event) {
            var selectedValue = event.target.dataset.value;
            if (selectedValue) {
                updateValuesFromList(selectedValue);
                updateValues(selectedValue - 1);
                updateCountWrapperAndAmount();
            }
        });

        ioGiftSelect.addEventListener("click", function () {
            ioGiftOptions.style.display = ioGiftOptions.style.display === "block" ? "none" : "block";
        });

        updateEmptyClass();
        updateCountWrapperAndAmount();
    }

    function ioDemoFunction() {
        // Получаем элементы
        var ioDemoCourseCheck = document.getElementById('ioDemoCourseCheck');
        var ioDemoCountInner = document.getElementById('ioDemoCountInner');
        var ioDemoCount = document.getElementById('ioDemoCount');
        var ioDemoCountMobile = document.getElementById('ioDemoCountMobile');
        var ioDemoLessonPrice = document.getElementById('ioDemoLessonPrice');
        var ioDemoLessonSaleWrapper = document.getElementById('ioDemoLessonSaleWrapper');
        var ioDemoLessonSale = document.getElementById('ioDemoLessonSale');
        var ioDemoAmount = document.getElementById('ioDemoAmount');
        var ioDemoLessonsList = document.getElementById('ioDemoLessonsList');
        var ioDemoCourseCheck = document.getElementById('ioDemoCourseCheck');

        // Устанавливаем обработчик события для изменения состояния чекбоксов
        ioDemoCourseCheck.addEventListener('change', updateValues);
        ioDemoLessonSaleWrapper.classList.add('hide');

        // Вызываем функцию для установки начальных значений
        updateValues();

        function updateValues() {
            // Получаем отмеченные чекбоксы
            var checkedCheckboxes = ioDemoCourseCheck.querySelectorAll('.io-checkbox:checked');
            
            // Количество отмеченных чекбоксов
            var count = checkedCheckboxes.length;
            
            // Обновляем значения в соответствующих блоках
            ioDemoCountInner.textContent = count;
            ioDemoCount.textContent = count;
            ioDemoCountMobile.textContent = count;
            if (window.globalSelectedValue === 'usd' || window.globalSelectedValue === 'USD') {
                ioDemoLessonPrice.textContent = 6;
                ioDemoAmount.textContent = 6 * count;
            } else {
                ioDemoLessonPrice.textContent = 5;
                ioDemoAmount.textContent = 5 * count;
            }
            ioDemoLessonSale.textContent = 8 * count;

            // Получаем блок для вывода лейблов выбранных чекбоксов
            ioDemoLessonsList.innerHTML = ''; // Очищаем блок перед добавлением новых значений

            // Добавляем лейблы выбранных чекбоксов в блок
            checkedCheckboxes.forEach(function(checkbox) {
                var label = document.querySelector('label[for="' + checkbox.id + '"]');
                if (label) {
                    var lessonDiv = document.createElement('div');
                    lessonDiv.className = 'io-check';

                    var lessonLabel = document.createElement('span');
                    lessonLabel.className = 'io-fw-semibold io-purple-main';
                    lessonLabel.textContent = label.textContent;

                    var button = document.createElement('button');
                    button.addEventListener('click', function() {
                        // Обработчик события для клика по кнопке
                        lessonDiv.remove(); // Убираем div с лейблом из ioDemoLessonsList
                        checkbox.checked = false; // Снимаем соответствующий чекбокс
                        updateValues(); // Пересчитываем значения
                    });

                    lessonDiv.appendChild(lessonLabel);
                    lessonDiv.appendChild(button);

                    ioDemoLessonsList.appendChild(lessonDiv);
                }
            });

            // Добавляем проверку на пустоту блока
            if (ioDemoLessonsList.children.length === 0) {
                ioDemoLessonsList.classList.add('empty');
            } else {
                ioDemoLessonsList.classList.remove('empty');
            }
        }
    }

    function ioArrayToTextElements() {
        var valuesArray;

        // Изменяем значения в valuesArray в зависимости от значения глобальной переменной
        if (window.globalSelectedValue === 'usd' || window.globalSelectedValue === 'USD') {
            valuesArray = [
                [4, 14, 0, 56, 56],
                [8, 14, 0, 112, 112],
                [12, 14, 0, 168, 168],
                [16, 14, 0, 224, 224],
                [24, 14, 0, 336, 336],
                [32, 14, 0, 448, 448],
                [80, 12.50, 120, 1000, 1120],
                [120, 11.50, 300, 1380, 1680],
                [160, 11, 480, 1760, 2240]
            ];
            var ioCurrencySign = '$';
            var ioDemoValue = '6';
        } else {
            valuesArray = [
                [4, 13, 0, 52, 52],
                [8, 13, 0, 104, 104],
                [12, 13, 0, 156, 156],
                [16, 13, 0, 208, 208],
                [24, 13, 0, 312, 312],
                [32, 13, 0, 416, 416],
                [80, 11.50, 120, 800, 920],
                [120, 10.50, 300, 960, 1260],
                [160, 10, 480, 1120, 1600]
            ];
            var ioCurrencySign = '€';
            var ioDemoValue = '5';
        }

        var ioArrayToTextElements62 = document.querySelectorAll('.ioArrayToTextElements62');

        ioArrayToTextElements62.forEach(function (element, index) {
            var valueToSet = valuesArray[6][2];
            element.textContent = ioCurrencySign + valueToSet;
        });

        var ioArrayToTextElements81 = document.querySelectorAll('.ioArrayToTextElements81');

        ioArrayToTextElements81.forEach(function (element, index) {
            var valueToSet = valuesArray[8][1];
            element.textContent = ioCurrencySign + valueToSet;
        });

        var ioArrayToTextElements82 = document.querySelectorAll('.ioArrayToTextElements82');
        
        ioArrayToTextElements82.forEach(function (element, index) {
            var valueToSet = valuesArray[8][2];
            element.textContent = ioCurrencySign + valueToSet;
        });

        var ioArrayToTextElements01 = document.querySelectorAll('.ioArrayToTextElements01');

        ioArrayToTextElements01.forEach(function (element, index) {
            var valueToSet = valuesArray[0][1];
            element.textContent = ioCurrencySign + valueToSet;
        });

        var ioArrayToTextElements03 = document.querySelectorAll('.ioArrayToTextElements03');

        ioArrayToTextElements03.forEach(function (element, index) {
            var valueToSet = valuesArray[0][3];
            element.textContent = ioCurrencySign + valueToSet;
        });

        var ioArrayToTextElementsDemo = document.querySelectorAll('.ioArrayToTextElementsDemo');

        ioArrayToTextElementsDemo.forEach(function (element, index) {
            var valueToSet = ioDemoValue;
            element.textContent = ioCurrencySign + valueToSet;
        });
    }

    // Функция для установки и отслеживания изменений валюты
    document.addEventListener('DOMContentLoaded', function () {
        var selectedCurrency = document.getElementById('selectedCurrency');
        var currencyOptions = document.getElementById('currencyOptions');
        var currencyFromSelectList = document.querySelectorAll('.io-currency__from-select');

        function trackChanges(value) {
            if (window.globalSelectedValue !== value) {
                window.globalSelectedValue = value;
                setCookie('selectedCurrency', value, 365);
                console.log('selectedValue has changed to: ', value);
                try {
                    ioAbonementFunction();
                } catch (error) {
                    console.error('An error occurred:', error);
                }
                try {
                    ioGiftFunction();
                } catch (error) {
                    console.error('An error occurred:', error);
                }
                try {
                    ioDemoFunction();
                } catch (error) {
                    console.error('An error occurred:', error);
                }
                try {
                    ioArrayToTextElements();
                } catch (error) {
                    console.error('An error occurred:', error);
                }
            }
        }

        function hideSelectedListItem(selectedValue) {
            var listItems = currencyOptions.getElementsByTagName('LI');
            for (var i = 0; i < listItems.length; i++) {
                if (listItems[i].dataset.value === selectedValue) {
                    listItems[i].style.display = 'none';
                } else {
                    listItems[i].style.display = 'block';
                }
            }
        }

        var initialCurrency = getCookie('selectedCurrency');
        if (initialCurrency) {
            selectedCurrency.textContent = initialCurrency;
            currencyFromSelectList.forEach(function (currencyFromSelect) {
                currencyFromSelect.textContent = initialCurrency;
            });
            trackChanges(initialCurrency);
            hideSelectedListItem(initialCurrency);
        } else {
            hideSelectedListItem(currencyOptions.getElementsByTagName('LI')[0].dataset.value);
        }

        selectedCurrency.addEventListener('click', function () {
            if (currencyOptions.style.display === 'block') {
                currencyOptions.style.display = 'none';
                selectedCurrency.classList.remove('active');
            } else {
                currencyOptions.style.display = 'block';
                selectedCurrency.classList.add('active');
            }
        });

        currencyOptions.addEventListener('click', function (event) {
            if (event.target.tagName === 'LI') {
                var selectedValue = event.target.dataset.value;
                selectedCurrency.textContent = selectedValue;
                currencyOptions.style.display = 'none';
                selectedCurrency.classList.remove('active');

                currencyFromSelectList.forEach(function (currencyFromSelect) {
                    currencyFromSelect.textContent = selectedValue;
                });

                trackChanges(selectedValue);
                hideSelectedListItem(selectedValue);
            }
        });

        document.addEventListener('click', function (event) {
            if (!event.target.closest('.io-select-currency')) {
                currencyOptions.style.display = 'none';
                selectedCurrency.classList.remove('active');
            }
        });

        window.addEventListener('scroll', function() {
            if (window.pageYOffset >= 100) {
                if (currencyOptions.style.display === 'block') {
                    currencyOptions.style.display = 'none';
                    selectedCurrency.classList.remove('active');
                }

                var dropdowns = document.getElementsByClassName("io-dropdown-click__content");
                var buttons = document.getElementsByClassName("io-dropdown-click__link");

                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    var openButton = buttons[i];

                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                        openButton.classList.remove('focused');
                    }
                }
            }
        });
    });

    // Вызываем ваш скрипт при загрузке страницы
    
    try {
        ioAbonementFunction();
    } catch (error) {
        console.error('An error occurred:', error);
    }
    try {
        ioGiftFunction();
    } catch (error) {
        console.error('An error occurred:', error);
    }
    try {
        ioDemoFunction();
    } catch (error) {
        console.error('An error occurred:', error);
    }
    try {
        ioArrayToTextElements();
    } catch (error) {
        console.error('An error occurred:', error);
    }
</script>

<!-- ============================================ Переключение типа урока ============================================ -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Получаем форму
        var form = document.getElementById('ioTypeRadioCheck');

        // Получаем все радиокнопки внутри формы
        var radioButtons = form.querySelectorAll('.io-radio');

        // Получаем все блоки с классоми
        var abonementBlocks = document.querySelectorAll('.io-abonement');
        var demoBlocks = document.querySelectorAll('.io-demo');
        var giftBlocks = document.querySelectorAll('.io-gift');

        // Проверяем, если радиокнопка отмечена при загрузке страницы
        if (radioButtons[0].checked) {
            abonementBlocks.forEach(function(abonementBlock) {
                abonementBlock.classList.add('active');
            });
            demoBlocks.forEach(function(demoBlock) {
                demoBlock.classList.remove('active');
            });
            giftBlocks.forEach(function(giftBlock) {
                giftBlock.classList.remove('active');
            });
        } else if (radioButtons[1].checked) {
            abonementBlocks.forEach(function(abonementBlock) {
                abonementBlock.classList.remove('active');
            });
            demoBlocks.forEach(function(demoBlock) {
                demoBlock.classList.add('active');
            });
            giftBlocks.forEach(function(giftBlock) {
                giftBlock.classList.remove('active');
            });
        } else {
            abonementBlocks.forEach(function(abonementBlock) {
                abonementBlock.classList.remove('active');
            });
            demoBlocks.forEach(function(demoBlock) {
                demoBlock.classList.remove('active');
            });
            giftBlocks.forEach(function(giftBlock) {
                giftBlock.classList.add('active');
            });
        }

        // Добавляем обработчик события для изменения состояния формы
        form.addEventListener('change', function() {
            abonementBlocks.forEach(function(abonementBlock) {
                abonementBlock.classList.remove('active');
            });
            demoBlocks.forEach(function(demoBlock) {
                demoBlock.classList.remove('active');
            });
            demoBlocks.forEach(function(demoBlock) {
                demoBlock.classList.remove('active');
            });

            // Проверяем, если радиокнопка отмечена
            if (radioButtons[0].checked) {
                abonementBlocks.forEach(function(abonementBlock) {
                    abonementBlock.classList.add('active');
                });
                demoBlocks.forEach(function(demoBlock) {
                    demoBlock.classList.remove('active');
                });
                giftBlocks.forEach(function(giftBlock) {
                    giftBlock.classList.remove('active');
                });
            } else if (radioButtons[1].checked) {
                abonementBlocks.forEach(function(abonementBlock) {
                    abonementBlock.classList.remove('active');
                });
                demoBlocks.forEach(function(demoBlock) {
                    demoBlock.classList.add('active');
                });
                giftBlocks.forEach(function(giftBlock) {
                    giftBlock.classList.remove('active');
                });
            } else {
                abonementBlocks.forEach(function(abonementBlock) {
                    abonementBlock.classList.remove('active');
                });
                demoBlocks.forEach(function(demoBlock) {
                    demoBlock.classList.remove('active');
                });
                giftBlocks.forEach(function(giftBlock) {
                    giftBlock.classList.add('active');
                });
            }
        });
    });
</script>
<?php
    $output = ob_get_clean(); // Get the captured HTML content and clean the output buffer
    echo $output; // Output the final HTML
}
?>