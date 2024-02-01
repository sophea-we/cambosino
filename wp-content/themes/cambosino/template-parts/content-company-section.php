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
    if ( have_rows( 'our_company_section' ) ) :

    while( have_rows( 'our_company_section' ) ) : the_row();
?>

<section class="company-section main-content-content-area">
    <div class="container">
        <h4 class="section-title"><?php the_sub_field( 'section_heading' ); ?></h4>

        <?php the_sub_field( 'section_content' ); ?>
    </div>
</section>

<?php endwhile; endif; ?>