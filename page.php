<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
include 'templates/price.php';
get_header(); // подключаем header.php ?>
<main>
    <?php the_content(); // контент ?>
</main>
<?php get_footer(); // подключаем footer.php ?>
<?php io_price(); ?>