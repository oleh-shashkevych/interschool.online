<?php
function io_directions() {
    ob_start(); // Start output buffering to capture the HTML content
?>
    <div class="io-directions">
        <div class="io-direction">
            <div class="d-flex align-items-center mb-31">
                <img src="/wp-content/uploads/2024/04/palette-1.svg" alt="">
                <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                    <h3><a href="<?php echo get_permalink(52); ?>">Изобразительное искусство (ИЗО)</a></h3>
                <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                    <h3><a href="<?php echo get_permalink(52); ?>">Art</a></h3>
                <?php } ?>
            </div>
            <?php
            $args = array(
                'menu' => 'izo-ru',
                'items_wrap' => '<ul class="io-direction-list">%3$s</ul>',
                'container' => false,
                'depth' => 0
            );
            echo wp_nav_menu($args);
            ?>
        </div>

        <div class="io-direction">
            <div class="d-flex align-items-center mb-31">
                <img src="/wp-content/uploads/2024/04/musical-note-1.svg" alt="">
                <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                    <h3><a href="<?php echo get_permalink(24); ?>">Музыка</a></h3>
                <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                    <h3><a href="<?php echo get_permalink(24); ?>">Music</a></h3>
                <?php } ?>
            </div>
            <?php
            $args = array(
                'menu' => 'music-ru',
                'items_wrap' => '<ul class="io-direction-list">%3$s</ul>',
                'container' => false,
                'depth' => 0
            );
            echo wp_nav_menu($args);
            ?>
        </div>

        <div class="io-direction">
            <div class="d-flex align-items-center mb-31">
                <img src="/wp-content/uploads/2024/04/translator-1.svg" alt="">
                <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                    <h3><a href="<?php echo get_permalink(76); ?>">Иностранные языки</a></h3>
                <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                    <h3><a href="<?php echo get_permalink(76); ?>">Languages</a></h3>
                <?php } ?>
            </div>
            <?php
            $args = array(
                'menu' => 'language-ru',
                'items_wrap' => '<ul class="io-direction-list">%3$s</ul>',
                'container' => false,
                'depth' => 0
            );
            echo wp_nav_menu($args);
            ?>
        </div>

        <div class="io-direction">
            <div class="d-flex align-items-center mb-31">
                <img src="/wp-content/uploads/2024/04/stationery-1.svg" alt="">
                <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                    <h3><a href="<?php echo get_permalink(90); ?>">Предметы средней школы</a></h3>
                <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                    <h3><a href="<?php echo get_permalink(90); ?>">Middle & High school</a></h3>
                <?php } ?>
            </div>
            <?php
            $args = array(
                'menu' => 'school-ru',
                'items_wrap' => '<ul class="io-direction-list">%3$s</ul>',
                'container' => false,
                'depth' => 0
            );
            echo wp_nav_menu($args);
            ?>
        </div>

        <div class="io-direction">
            <div class="d-flex align-items-center mb-31">
                <img src="/wp-content/uploads/2024/04/dancing-1.svg" alt="">
                <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                    <h3><a href="<?php echo get_permalink(64); ?>">Хореография и йога</a></h3>
                <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                    <h3><a href="<?php echo get_permalink(64); ?>">Dance & Yoga</a></h3>
                <?php } ?>
            </div>
            <?php
            $args = array(
                'menu' => 'dances-ru',
                'items_wrap' => '<ul class="io-direction-list">%3$s</ul>',
                'container' => false,
                'depth' => 0
            );
            echo wp_nav_menu($args);
            ?>
        </div>

        <div class="io-direction">
            <div class="d-flex align-items-center mb-31">
                <img src="/wp-content/uploads/2024/04/talking-1.svg" alt="">
                <?php if (ICL_LANGUAGE_CODE === 'ru') { ?>
                    <h3>Прочее</h3>
                <?php } elseif (ICL_LANGUAGE_CODE === 'en') { ?>
                    <h3>Other</h3>
                <?php } ?>
            </div>
            <?php
            $args = array(
                'menu' => 'other-ru',
                'items_wrap' => '<ul class="io-direction-list">%3$s</ul>',
                'container' => false,
                'depth' => 0
            );
            echo wp_nav_menu($args);
            ?>
        </div>
    </div>
<?php
    $output = ob_get_clean(); // Get the captured HTML content and clean the output buffer
    echo $output; // Output the final HTML
}
?>