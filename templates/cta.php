<?php
function io_cta() {
    ob_start(); // Start output buffering to capture the HTML content
?>  
    <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
    <section class="io-section io-ask__wrapper">
        <div class="container-xxl io-container-mw">
            <div class="io-ask">
                <div class="io-ask__title">Остались вопросы к <span class="io-pink-main">Монтессори центру</span>?</div>
                <button type="button" class="io-ask__button io-button__large" data-bs-toggle="modal" data-bs-target="#askQuestionModal">
                    Задать вопрос
                </button>
                <img class="io-ask__img" src="/wp-content/themes/interschooltemplate/images/question-grass.svg" alt="">
            </div>
        </div>
    </section>
    <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
    <section class="io-section io-ask__wrapper">
        <div class="container-xxl io-container-mw">
            <div class="io-ask">
                <div class="io-ask__title">Do you have any questions for the <span class="io-pink-main">Montessori Center</span>?</div>
                <button type="button" class="io-ask__button io-button__large" data-bs-toggle="modal" data-bs-target="#askQuestionModal">
                    Ask a Question
                </button>
                <img class="io-ask__img" src="/wp-content/themes/interschooltemplate/images/question-grass.svg" alt="">
            </div>
        </div>
    </section>
    <?php } ?>
<?php
    $output = ob_get_clean(); // Get the captured HTML content and clean the output buffer
    echo $output; // Output the final HTML
}
?>