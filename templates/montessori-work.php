<?php
    function io_montessori_work() {
    ob_start(); // Start output buffering to capture the HTML content

    if (ICL_LANGUAGE_CODE === 'ru') {

        $ioLookText = 'Смотреть видео';
        
        $ioPopularVideoTitle1 = 'Как проходят уроки';
        $ioPopularVideoText1 = 'Узнайте подробнее, как преподаватели Монтессори центра ведут занятия со своими студентами';
        $ioPopularVideoId1 = '3TiYGxOQDYw';
        $ioPopularVideoImg1 = '/wp-content/themes/interschooltemplate/images/io-gallery-1.webp';

        $ioPopularVideoTitle2 = 'Что говорят родители';
        $ioPopularVideoText2 = 'Родители высоко оценивают учебную программу, гибкость расписания, онлайн-мероприятия, а также профессионализм преподавателей';
        $ioPopularVideoId2 = 'v_ZnJCMQqwo';
        $ioPopularVideoImg2 = '/wp-content/themes/interschooltemplate/images/io-gallery-2.webp';

        $ioPopularVideoTitle3 = 'Познакомьтесь поближе';
        $ioPopularVideoText3 = 'Дети в Монтессори центре учатся с удовольствием и выбирают не один, а сразу несколько курсов для изучения';
        $ioPopularVideoId3 = 'ZiL0EnvXlP8';
        $ioPopularVideoImg3 = '/wp-content/themes/interschooltemplate/images/io-gallery-3.webp';
    
    } elseif (ICL_LANGUAGE_CODE === 'en') {

        $ioLookText = 'Watch Video';
        
        $ioPopularVideoTitle1 = 'How Lessons Are Conducted';
        $ioPopularVideoText1 = 'Learn more about how Montessori Center teachers conduct lessons with their students';
        $ioPopularVideoId1 = '3TiYGxOQDYw';
        $ioPopularVideoImg1 = '/wp-content/themes/interschooltemplate/images/io-gallery-1.webp';

        $ioPopularVideoTitle2 = 'What Parents Say';
        $ioPopularVideoText2 = 'Parents highly appreciate the educational program, schedule flexibility, online events, and the professionalism of the teachers';
        $ioPopularVideoId2 = 'v_ZnJCMQqwo';
        $ioPopularVideoImg2 = '/wp-content/themes/interschooltemplate/images/io-gallery-2.webp';

        $ioPopularVideoTitle3 = 'Get to know us better';
        $ioPopularVideoText3 = 'Children at the Montessori Center enjoy learning and choose multiple courses for study';
        $ioPopularVideoId3 = 'ZiL0EnvXlP8';
        $ioPopularVideoImg3 = '/wp-content/themes/interschooltemplate/images/io-gallery-3.webp';

    } 
?>
    <style>
        .io-popular-video__name-1::before {
            content: '<?php echo $ioPopularVideoTitle1; ?>';
        }

        .io-popular-video__name-2::before {
            content: '<?php echo $ioPopularVideoTitle2; ?>';
        }

        .io-popular-video__name-3::before {
            content: '<?php echo $ioPopularVideoTitle3; ?>';
        }
    </style>

    <section class="io-section io-popular-video">
        <div class="container-xxl io-container-mw">
            <h2 class="io-popular-video__heading io-heading-2"><?php if (ICL_LANGUAGE_CODE === 'ru') { echo 'Как работает Монтессори&nbsp;центр'; } elseif (ICL_LANGUAGE_CODE === 'en') { echo 'How does a Montessori Center&nbsp;work'; } ?></h2>
            <div class="io-popular-video__inner">
                <div class="io-popular-video__accordion accordion" id="accordionPopularVideo">
                    <div class="io-popular-video__accordion-item accordion-item io-active" data-video-style="url(<?php echo $ioPopularVideoImg1; ?>)" data-video-id="<?php echo $ioPopularVideoId1; ?>" data-new-class="io-popular-video__name-1">
                        <h2 class="io-popular-video__accordion-header accordion-header" id="accordionPopularHeadingOne">
                            <button class="io-popular-video__accordion-button accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#accodrionPopularCollapseOne" aria-expanded="true" aria-controls="accodrionPopularCollapseOne">
                                <?php echo $ioPopularVideoTitle1; ?>
                            </button>
                        </h2>
                        <div id="accodrionPopularCollapseOne" class="accordion-collapse collapse show" aria-labelledby="accordionPopularHeadingOne" data-bs-parent="#accordionPopularVideo">
                            <div class="io-popular-video__accordion-body accordion-body">
                                <span><?php echo $ioPopularVideoText1; ?></span>
                                <div class="io-video" style="background-image: url(<?php echo $ioPopularVideoImg1; ?>);">
                                    <p><?php echo $ioLookText; ?></p>
                                    <button class="io-video__lightbox io-video__button" aria-label="Видео" type="button" data-video-id="<?php echo $ioPopularVideoId1; ?>"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="io-popular-video__accordion-item accordion-item" data-video-style="url(<?php echo $ioPopularVideoImg2; ?>)" data-video-id="<?php echo $ioPopularVideoId2; ?>" data-new-class="io-popular-video__name-2">
                        <h2 class="io-popular-video__accordion-header accordion-header" id="accordionPopularHeadingTwo">
                            <button class="io-popular-video__accordion-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPopularCollapseTwo" aria-expanded="false" aria-controls="accordionPopularCollapseTwo">
                                <?php echo $ioPopularVideoTitle2; ?>
                            </button>
                        </h2>
                        <div id="accordionPopularCollapseTwo" class="accordion-collapse collapse" aria-labelledby="accordionPopularHeadingTwo" data-bs-parent="#accordionPopularVideo">
                            <div class="io-popular-video__accordion-body accordion-body">
                                <span><?php echo $ioPopularVideoText2; ?></span>
                                <div class="io-video" style="background-image: url(<?php echo $ioPopularVideoImg2; ?>);">
                                    <p><?php echo $ioLookText; ?></p>
                                    <button class="io-video__lightbox io-video__button" aria-label="Видео" type="button" data-video-id="<?php echo $ioPopularVideoId2; ?>"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="io-popular-video__accordion-item accordion-item" data-video-style="url(<?php echo $ioPopularVideoImg3; ?>)" data-video-id="<?php echo $ioPopularVideoId3; ?>" data-new-class="io-popular-video__name-3">
                        <h2 class="io-popular-video__accordion-header accordion-header" id="accordionPopularHeadingThree">
                            <button class="io-popular-video__accordion-button accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordionPopularCollapseThree" aria-expanded="false" aria-controls="accordionPopularCollapseThree">
                                <?php echo $ioPopularVideoTitle3; ?>
                            </button>
                        </h2>
                        <div id="accordionPopularCollapseThree" class="accordion-collapse collapse" aria-labelledby="accordionPopularHeadingThree" data-bs-parent="#accordionPopularVideo">
                            <div class="io-popular-video__accordion-body accordion-body">
                                <span><?php echo $ioPopularVideoText3; ?></span>
                                <div class="io-video" style="background-image: url(<?php echo $ioPopularVideoImg3; ?>);">
                                    <p><?php echo $ioLookText; ?></p>
                                    <button class="io-video__lightbox io-video__button" aria-label="Видео" type="button" data-video-id="<?php echo $ioPopularVideoId3; ?>"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="io-popular-video__video">
                    <div class="io-popular-video__button io-popular-video__name-1" onclick="showVideo(this)"></div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var wholeAccordionInner = document.querySelector('.io-popular-video .io-popular-video__inner')
        var allAccords = document.querySelectorAll('.io-popular-video__accordion .accordion-item')
        var changingVideoContainer = wholeAccordionInner.lastElementChild
        changingVideoContainer.firstElementChild.style.backgroundImage = allAccords[0].getAttribute("data-video-style")
        changingVideoContainer.firstElementChild.setAttribute("data-video-id", allAccords[0].getAttribute("data-video-id"))
        changingVideoContainer.firstElementChild.setAttribute("data-new-class", "io-popular-video__name"); // Задаем начальное значение нового класса
        allAccords.forEach(function(accord){
            accord.addEventListener("show.bs.collapse", function() {
                var newClass = accord.getAttribute("data-new-class");
                changingVideoContainer.innerHTML = '<div class="io-popular-video__button ' + newClass + '" onclick="showVideo(this, \'' + newClass + '\')"></div>';
                changingVideoContainer.firstElementChild.style.backgroundImage = accord.getAttribute("data-video-style")
                changingVideoContainer.firstElementChild.setAttribute("data-video-id", accord.getAttribute("data-video-id"))
                changingVideoContainer.firstElementChild.setAttribute("data-new-class", newClass); // Обновляем новый класс для выбранного элемента аккордеона
            })
        });
    </script>
    <script>
        // Get all the accordion items
        const accordionItems = document.querySelectorAll('.io-popular-video__accordion-item');

        // Add event listeners to all the buttons in accordion items
        accordionItems.forEach(item => {
            const button = item.querySelector('.io-popular-video__accordion-button');
            button.addEventListener('click', function() {
                // Remove 'io-active' class from all accordion items
                accordionItems.forEach(item => item.classList.remove('io-active'));

                // Add 'io-active' class to the currently clicked item
                item.classList.add('io-active');
            });
        });
    </script>

    <script>
        var lightboxElements = document.getElementsByClassName('io-video__lightbox');
        var popularVideoElement = document.querySelector('.io-popular-video__video');

        if (lightboxElements) {
            for (var i = 0; i < lightboxElements.length; i++) {
                lightboxElements[i].addEventListener('click', handleClick);
            }
        }

        // Функция-обработчик события клика
        function handleClick(event) {
            popularVideoElement.innerHTML = '<div class="io-popular-video__button io-popular-video__name-1" onclick="showVideo(this)" data-video-id="3TiYGxOQDYw" data-new-class="io-popular-video__name" style="background-image: url(&quot;/wp-content/themes/interschooltemplate/images/io-gallery-1.webp&quot;);"></div>';
        }
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

    <!-- Video after Image -->
    <script>
        function showVideo(button) {
            var videoId = button.getAttribute("data-video-id");
            if (videoId) {
                var videoContainer = button.parentNode;
                videoContainer.innerHTML = `<iframe src="https://www.youtube.com/embed/${videoId}?autoplay=1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>`;
            }
        }
    </script>

<?php
    $output = ob_get_clean(); // Get the captured HTML content and clean the output buffer
    echo $output; // Output the final HTML
}
?>

    