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
    if ( have_rows( 'our_value_section' ) ) :

    while( have_rows( 'our_value_section' ) ) : the_row();
?>

<section class="value-section main-content-content-area">
    <div class="container">
        <h4 class="section-title"><?php the_sub_field( 'section_heading' ); ?></h4>

        <?php the_sub_field( 'section_content' ); ?>

        <div class="icon-box row">
            <?php
                if ( have_rows( 'values' ) ) :

                while ( have_rows( 'values' ) ) : the_row();
            ?>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch">
                    <div class="icon-box-item">
                        <img class="icon-box-icon" src="<?php the_sub_field( 'value_icon' ); ?>" height="36" />
                        <h5 class="icon-box-heading"><?php the_sub_field( 'value_heading' ); ?></h5>
                        <p><?php the_sub_field( 'value_description' ); ?></p>
                    </div>
                </div>

            <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<?php endwhile; endif; ?>