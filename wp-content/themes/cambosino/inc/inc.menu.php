<?php
/**
 * Global Menu Object
 *
 * @param $menu_name
 * @return mixed
 */
function cambosino_menu( $primary ) {

    $args = array(
        'theme_location'  => $primary,
        'menu'            => '',
        'container'       => false,
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'nav navbar-nav pull-right',
        'menu_id'         => '',
        'echo'            => false,
        'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 3,
        'walker'          => new wp_bootstrap_navwalker()
    );

    $menu = wp_nav_menu( $args );
    return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
}