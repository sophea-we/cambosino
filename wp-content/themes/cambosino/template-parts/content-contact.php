<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CAMBO-SINO
 */

?>

<section class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h5><?php pll_e('Visit Our Office'); ?></h5>
                <?php if ( get_theme_mod( 'address' ) != '' ) : ?>
                    <p><?php echo get_theme_mod( 'address' ); ?></p>
                <?php endif; ?>

                <h5><?php pll_e('Message Us'); ?></h5>
                <?php if ( get_theme_mod( 'email' ) != '' ) : ?>
                    <p><i class="text-primary bi bi-envelope mr-1"></i> <a href="mailto:<?php echo get_theme_mod( 'email' ); ?>"><?php echo get_theme_mod( 'email' ); ?></a></p>
                <?php endif; ?>

                <?php if ( get_theme_mod( 'phone_number' ) != '' ) : ?>
                    <p><i class="text-primary bi bi-phone mr-1"></i> <span><?php echo get_theme_mod( 'phone_number' ); ?></span></p>
                <?php endif; ?>
            </div>

            <div class="col-lg-6">
                <?php echo do_shortcode( get_field( 'contact_form' ) ); ?>
            </div>
        </div>
    </div>
</section>
