<?php
/**
 * Template Name: Contact Us Template
 *
 */

get_header();
?>

    <main class="main-content">
        <?php get_template_part( 'template-parts/content', 'breadcrumbs' ); ?>

        <?php
            while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', 'page' );
            endwhile;
        ?>

        <?php get_template_part( 'template-parts/content', 'contact' ); ?>
    </main>

<?php
get_footer();