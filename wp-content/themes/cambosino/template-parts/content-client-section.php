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
        'post_type' => 'client',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'orderby' => 'post_date',
        'order' => 'DESC'
    );

    $clients = new WP_Query( $args );

    if ( $clients->have_posts() ) :
?>

<section class="client-section section-wrapper section-highlight">
    <div class="container">
        <div class="client">
            <?php while ( $clients->have_posts() ) : $clients->the_post(); ?>
                <div class="client-item d-flex align-items-center">
                    <?php if ( get_field( 'website_url' ) ) : ?>
                        <a href="<?php the_field( 'website_url' ); ?>">
                    <?php endif; ?>
                        <img class="img-fluid" src="<?php the_field( 'logo' ); ?>" />
                    <?php if ( get_field( 'website_url' ) ) : ?>
                        </a>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php endif; wp_reset_query(); ?>