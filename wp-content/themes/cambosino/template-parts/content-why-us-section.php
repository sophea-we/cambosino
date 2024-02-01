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
    if ( have_rows( 'why_choose_us_section' ) ) :

    while( have_rows( 'why_choose_us_section' ) ) : the_row();
?>

    <section class="why-us-section section-wrapper d-none">
        <div class="container">
            <div class="row">
                <div class="why-us col-lg-4 d-flex align-items-stretch my-2">
                    <div class="why-us-content">
                        <h3><?php the_sub_field( 'section_heading' ); ?></h3>
                        <p><?php the_sub_field( 'section_content' ); ?></p>
                        <a class="btn btn-light" href="<?php the_sub_field( 'read_more_url' ); ?>"><?php pll_e('Read More'); ?></a>
                    </div>
                </div>

                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="icon-box d-flex flex-column justify-content-center">
                        <div class="row">
                            <?php
                                if ( have_rows( 'section_repeater' ) ) :

                                while ( have_rows( 'section_repeater' ) ) : the_row();
                            ?>

                                <div class="col-md-4 col-lg-4 d-flex align-items-stretch my-2">
                                    <div class="icon-box-item">
                                        <img class="icon-box-icon" src="<?php the_sub_field( 'icon' ); ?>" width="36" />
                                        <h5 class="icon-box-heading"><?php the_sub_field( 'heading' ); ?></h5>
                                        <p><?php the_sub_field( 'content' ); ?></p>
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