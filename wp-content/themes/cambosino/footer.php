<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CAMBO-SINO
 */

?>

<footer class="footer">
    <div class="footer-main">
        <div class="container">
            <div class="row">
                <div class="footer-item col-lg-4">
                    <h3><?php bloginfo( 'name' ); ?></h3>

                    <p><strong><?php pll_e('Address'); ?>:</strong> <br /> <?php echo get_theme_mod('address'); ?></p>
                    <p><strong><?php pll_e('Phone'); ?>:</strong> <br /> <?php echo get_theme_mod('phone_number'); ?></p>
                    <p><strong><?php pll_e('Email'); ?>:</strong> <br /> <?php echo get_theme_mod('email'); ?></p>
                </div>

                <div class="footer-item col-lg-4">
                    <h3><?php pll_e('Our Services'); ?></h3>

                    <ul class="nav flex-column">
                        <?php echo cambosino_menu( 'service' ); ?>
                    </ul>
                </div>

                <div class="footer-item col-lg-4">
                    <h3><?php pll_e('Our Social Networks'); ?></h3>

                    <?php if ( get_theme_mod( 'facebook_url' ) != '' ) : ?>
                        <div class="fb-page" data-href="<?php echo get_theme_mod( 'facebook_url' ); ?>" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="<?php echo get_theme_mod( 'facebook_url' ); ?>" class="fb-xfbml-parse-ignore">
                                <a href="<?php echo get_theme_mod( 'facebook_url' ); ?>"><?php bloginfo( 'name' ); ?></a>
                            </blockquote>
                        </div>
                    <?php endif; ?>

                    <ul class="footer-social-links">
                        <?php if ( get_theme_mod( 'instagram_url' ) != '' ) : ?>
                            <li><a href="<?php echo get_theme_mod( 'instagram_url' ); ?>"><i class="bi bi-instagram"></i></a></li>
                        <?php endif; ?>

                        <?php if ( get_theme_mod( 'linkedin_url' ) != '' ) : ?>
                            <li><a href="<?php echo get_theme_mod( 'linkedin_url' ); ?>"><i class="bi bi-linkedin"></i></a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            <p class="m-0"><?php echo get_theme_mod( 'copyright' ); ?></p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
