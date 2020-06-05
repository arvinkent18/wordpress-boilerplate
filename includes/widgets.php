<?php

function akl_widgets() {
    register_sidebar([
        'name'          => __( 'Sidebar' ),
        'id'            => 'akl_sidebar',
        'description'   => __( 'Sidebar description' ),
        'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ]);
}