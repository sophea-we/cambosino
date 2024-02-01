<?php
/**
 * Template Name: Service Template
 *
 */

get_header();
?>

    <main class="main-content">
        <?php get_template_part( 'template-parts/content', 'breadcrumbs' ); ?>

        <section class="service-section main-content-content-area">
            <div class="container">
                <div class="icon-box row">
                    <?php
                        $args = array(
                            'post_type' => 'service',
                            'posts_per_page' => -1,
                            'post_status' => 'publish',
                            'orderby' => 'post_date',
                            'order' => 'DESC'
                        );

                        $news = new WP_Query( $args );

                        if ( $news->have_posts() ) :

                            while ( $news->have_posts() ) : $news->the_post();

                                get_template_part( 'template-parts/content', get_post_type() );

                            endwhile;

                        endif; wp_reset_query();
                    ?>
                </div>
            </div>
        </section>
    </main>

<?php
get_footer();