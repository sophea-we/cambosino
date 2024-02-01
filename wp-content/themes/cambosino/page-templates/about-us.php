<?php
/**
 * Template Name: About Us Template
 *
 */

get_header();
?>

    <main class="main-content">
        <?php get_template_part( 'template-parts/content', 'breadcrumbs' ); ?>
        <?php get_template_part( 'template-parts/content', 'company-section' ); ?>
        <?php get_template_part( 'template-parts/content', 'mission-vision-section' ); ?>
        <?php get_template_part( 'template-parts/content', 'value-section' ); ?>
    </main>

<?php
get_footer();