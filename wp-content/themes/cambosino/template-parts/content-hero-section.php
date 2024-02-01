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
    $args = array(
        'post_type' => 'hero',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'orderby' => 'post_date',
        'order' => 'DESC'
    );

    $heros = new WP_Query( $args );

    if ( $heros->have_posts() ) :
?>

<section class="hero">
    <?php while ( $heros->have_posts() ) : $heros->the_post(); ?>
        <div class="hero-item has-bg d-flex align-items-center" data-bg="<?php the_field( 'hero_thumbnail' ); ?>">
            <div class="container">
                <div class="hero-intro d-none d-md-block">
                    <h2 class="text-uppercase"><?php the_title(); ?></h2>
                    <p><?php the_field( 'hero_description' ); ?></p>
                    <a class="btn btn-primary" href="<?php the_field( 'hero_read_more_url' ); ?>"><?php pll_e('Read More'); ?></a>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
</section>

<?php endif; wp_reset_query(); ?>