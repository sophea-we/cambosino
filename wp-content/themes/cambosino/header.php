<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CAMBO-SINO
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Exo+2:300,400,500,600,700|Suwannaphum|Dangrek" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0&appId=1869991936643326&autoLogAppEvents=1" nonce="jqmFosOm"></script>

    <div class="slidein-menu-backdrop"></div>

    <div class="slidein-menu">
        <div class="slidein-menu-head">
            <?php the_custom_logo(); ?>
        </div>

        <div class="slidein-menu-body">
            <ul class="slidein-menu-nav">
                <?php echo cambosino_menu( 'mobile' ); ?>
            </ul>
        </div>

        <a href="#" class="slidein-menu-btn-close"><i class="bi bi-x"></i></a>
    </div>

    <header class="header">
        <div class="header-top d-flex align-items-center">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <ul class="header-contact-info d-md-flex">
                    <?php if ( get_theme_mod( 'email' ) != '' ) : ?>
                        <li class="d-flex justify-content-center align-items-center"><i class="text-white bi bi-envelope mr-1"></i> <a class="text-white" href="mailto:<?php echo get_theme_mod( 'email' ); ?>"><?php echo get_theme_mod( 'email' ); ?></a></li>
                    <?php endif; ?>

                    <?php if ( get_theme_mod( 'phone_number' ) != '' ) : ?>
                        <li class="d-flex justify-content-center align-items-center"><i class="text-white bi bi-phone mr-1"></i> <span class="text-white"><?php echo get_theme_mod( 'phone_number' ); ?></span></li>
                    <?php endif; ?>
                </ul>

                <ul class="header-social-links d-none d-md-flex align-items-center">
                    <?php if ( get_theme_mod( 'facebook_url' ) != '' ) : ?>
                        <li><a class="text-white" href="<?php echo get_theme_mod( 'facebook_url' ); ?>"><i class="bi bi-facebook"></i></a></li>
                    <?php endif; ?>

                    <?php if ( get_theme_mod( 'instagram_url' ) != '' ) : ?>
                        <li><a class="text-white" href="<?php echo get_theme_mod( 'instagram_url' ); ?>"><i class="bi bi-instagram"></i></a></li>
                    <?php endif; ?>

                    <?php if ( get_theme_mod( 'linkedin_url' ) != '' ) : ?>
                        <li><a class="text-white" href="<?php echo get_theme_mod( 'linkedin_url' ); ?>"><i class="bi bi-linkedin"></i></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>

        <div class="header-main">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-dark px-0">
                    <?php the_custom_logo(); ?>

                    <button class="navbar-toggler" type="button">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <?php echo cambosino_menu( 'primary' ); ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
