<?php
/**
 * Тест (page-test.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 * Template Name: Тест
 */
get_header(); // подключаем header.php ?>
<?php the_content(); // контент ?>
<?php get_footer(); // подключаем footer.php ?>
<script type="text/javascript">
    var sidebar = new StickySidebar('#sidebar', {
        containerSelector: '#main-content',
        innerWrapperSelector: '.sidebar__inner',
        topSpacing: 100,
        bottomSpacing: 0
    });
</script>