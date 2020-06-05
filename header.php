<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

<!-- Stylesheets
    ======================================== -->
    <?php wp_head(); ?>
</head>
<body>
<div <?php body_class( 'stretched no-transition' ); ?>>
<!-- Header
    ======================================== -->
    <header id="header" class="sticky-style-2">
    
<!-- Primary Navigation
    ======================================== -->
    <?php
        if ( has_nav_menu( 'primary' ) ) {
            wp_nav_menu([
                'theme_location' => 'primary',                // menu location
                'container'      => false,                    // wrapper class
                'menu_class'     => 'class-1 class-2',        //
                'fallback_cb'    => false,                    // default menu
                'depth'          => 4,                        // number of sub-menus
                'walker'         => new AKL_Custom_Nav_Walker // walker class
            ]);
        }
    ?>
    </header><!-- #header end -->