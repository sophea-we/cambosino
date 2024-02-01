<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CAMBO-SINO
 */

?>

<section class="mission-vision-section main-content-content-area">
    <div class="container">
        <div class="row">
            <?php
                if ( have_rows( 'our_mission_section' ) ) :

                while( have_rows( 'our_mission_section' ) ) : the_row();
            ?>

                <div class="col-lg-6">
                    <h4 class="section-title"><?php the_sub_field( 'section_heading' ); ?></h4>

                    <?php the_sub_field( 'section_content' ); ?>
                </div>

            <?php endwhile; endif; ?>

            <?php
                if ( have_rows( 'our_vision_section' ) ) :

                while( have_rows( 'our_vision_section' ) ) : the_row();
            ?>

                <div class="col-lg-6">
                    <h4 class="section-title"><?php the_sub_field( 'section_heading' ); ?></h4>

                    <?php the_sub_field( 'section_content' ); ?>
                </div>

            <?php endwhile; endif; ?>
        </div>
    </div>
</section>