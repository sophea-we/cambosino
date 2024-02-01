<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CAMBO-SINO
 */

?>

<?php
    if ( have_rows( 'news_section' ) ) :

    while( have_rows( 'news_section' ) ) : the_row();
?>

    <section class="news-section section-wrapper">
        <div class="container">
            <div class="section-header section-header-center">
                <h3 class="section-heading"><?php the_sub_field( 'section_heading' ); ?></h3>
                <p class="section-tagline"><?php the_sub_field( 'section_tagline' ); ?></p>
            </div>

            <div class="section-content">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                    <?php
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => get_sub_field( 'number_of_post' ),
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
        </div>
    </section>

<?php endwhile; endif; ?>