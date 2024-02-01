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
    if ( have_rows( 'about_us_section' ) ) :

    while( have_rows( 'about_us_section' ) ) : the_row();
?>

    <section class="about-us-section section-wrapper">
        <div class="container">
            <div class="section-header section-header-center">
                <h3 class="section-heading"><?php the_sub_field( 'section_heading' ); ?></h3>
                <p class="section-tagline"><?php the_sub_field( 'section_tagline' ); ?></p>
            </div>

            <div class="section-content">
                <div class="row">
                    <div class="col-lg-6 mb-3 mb-lg-0">
                        <img class="img-fluid" src="<?php the_sub_field( 'section_photo' ); ?>" />
                    </div>

                    <div class="col-lg-6">
                        <p><?php the_sub_field( 'section_content' ); ?></p>

                        <div class="feature-list d-flex flex-column">
                            <?php
                                if ( have_rows( 'section_repeater' ) ) :

                                while ( have_rows( 'section_repeater' ) ) : the_row();
                            ?>

                                <div class="feature-list-item d-flex align-content-center">
                                    <div class="feature-list-icon">
                                        <img src="<?php the_sub_field( 'icon' ); ?>" width="36" />
                                    </div>

                                    <div class="feature-list-content">
                                        <h5><?php the_sub_field( 'heading' ); ?></h5>
                                        <?php echo get_sub_field( 'content' ); ?>
                                    </div>
                                </div>

                            <?php endwhile; endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; endif; ?>