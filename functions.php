<?php
/* ------------------------------------------------------------------------- *
 *  Functions
 *  ________________
 *
 *	For more info on Child Themes:
 *	http://codex.wordpress.org/Child_Themes
 *	________________
 *
/* ------------------------------------------------------------------------- */


// Get Parent Styles
function businessx_child_theme_enqueue_styles() {
	
	// CSS
    $parent_style = 'businessx-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'businessx-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
	
}
add_action( 'wp_enqueue_scripts', 'businessx_child_theme_enqueue_styles' );


// JS
function businessx_child_theme_enqueue_scripts() {
	wp_enqueue_script( 'businessx-child-scripts', get_stylesheet_directory_uri() . '/assets/js/child-scripts.js', array( 'jquery' ), '20160412', true );
}
add_action( 'wp_enqueue_scripts', 'businessx_child_theme_enqueue_scripts', 99 );



// Google Maps Api
function bx_google_maps_creds() {
	return 'YOUR API KEY GOES HERE';
}
// add_filter( 'jetpack_google_maps_api_key', 'bx_google_maps_creds' );