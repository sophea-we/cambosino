<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package CAMBO-SINO
 */

get_header();
?>

	<main class="main-content">
        <?php get_template_part( 'template-parts/content', 'breadcrumbs' ); ?>

        <section class="main-content-content-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <?php
                            while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/content', get_post_type() );
                            endwhile;
                        ?>
                    </div>

                    <div class="col-lg-4">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </section>
	</main>

<?php
get_footer();
