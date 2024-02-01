<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CAMBO-SINO
 */

?>

<div class="col-sm-6 col-md-4 col-lg-4 my-2">
    <div class="icon-box-item">
        <img class="icon-box-icon" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />

        <h5 class="icon-box-heading"><?php the_title(); ?></h5>
        <?php the_excerpt(); ?>
    </div>
</div>