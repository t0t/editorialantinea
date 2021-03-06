<?php
//Registra areas en los widgets
if ( function_exists('register_sidebar') ) {
    register_sidebar( array(
    	'name' => 'primary', 
    	'before_widget' => '', 
    	'after_widget' => '',
    	'before_title' => '<h2>', 
    	'after_title' => '</h2>'
    ));
    
}

//Registra los menus
    add_action( 'init', 'register_my_menus' );
     
    function register_my_menus() {
    
    register_nav_menus(array(
		'menu-principal' => __( 'Menu Principal' ),
    	'menu-footer' => __( 'Menu Footer' )
    ));
    
    }

// Add support for Featured Images
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
    add_image_size('index-categories', 150, 150, true);
    add_image_size('page-single', 350, 350, true);
    add_image_size('portada-revistas', 630, 9999, true);
    add_image_size('fotogran', 560, 9999, true);
    add_image_size('destacados', 100, 140, true);
}

// Leer mas... excerpt
function new_excerpt_length($length) {
return 50;
}
add_filter('excerpt_length', 'new_excerpt_length');

?>