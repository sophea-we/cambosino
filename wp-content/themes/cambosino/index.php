<?php
/**
 * Template Name: Home Template
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CAMBO-SINO
 */

get_header();
?>

    <?php get_template_part( 'template-parts/content', 'hero-section' ); ?>
    <?php get_template_part( 'template-parts/content', 'why-us-section' ); ?>
    <?php get_template_part( 'template-parts/content', 'about-us-section' ); ?>
    <?php get_template_part( 'template-parts/content', 'client-section' ); ?>
    <?php get_template_part( 'template-parts/content', 'news-section' ); ?>

<?php
get_footer();
