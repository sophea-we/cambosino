<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CAMBO-SINO
 */

?>

<?php $cats = get_the_category(); ?>

<div class="col mb-4">
    <div class="card">
        <?php echo cambosino_post_thumbnail(); ?>

        <div class="card-body">
            <h5 class="card-title"><?php the_title(); ?></h5>
            <ul class="nav mb-2">
                <li class="small mr-2"><a class="text-dark" href="<?php echo get_category_link( $cats[0]->term_id ); ?>"><i class="bi bi-tag"></i> <?php echo $cats[0]->name; ?></a></li>
                <li class="small"><?php echo cambosino_posted_on(); ?></li>
            </ul>
            <p class="card-text"><?php echo get_the_excerpt(); ?></p>
        </div>

        <div class="card-footer d-flex justify-content-between">
            <?php echo cambosino_posted_by(); ?>
            <a href="<?php the_permalink(); ?>"><?php pll_e('Read More'); ?> <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</div>
