<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style';
 
    	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'material_icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');
	wp_enqueue_style( 'bootstrap.min_css', get_stylesheet_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'material-kit_css', 'https://cdnjs.cloudflare.com/ajax/libs/material-kit/1.1.0/css/material-kit.min.css');
	wp_enqueue_style( 'material-bootstrap-wizard_css', get_stylesheet_directory_uri() . '/css/material-bootstrap-wizard.css');	
   	wp_enqueue_style( 'child-style',get_stylesheet_directory_uri() . '/css/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    	);
}
add_action( 'wp_enqueue_scripts', 'theme_js');
function theme_js() {

	global $wp_scripts;

	wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
	wp_enqueue_script( 'jquery.bootstrap_js', get_stylesheet_directory_uri() . '/js/jquery.bootstrap.js');
	wp_enqueue_script( 'jquery.validate.min_js', get_stylesheet_directory_uri() . '/js/jquery.validate.min.js');
	wp_enqueue_script( 'material-bootstrap-wizard_js', get_stylesheet_directory_uri() . '/js/material-bootstrap-wizard.js');
	wp_enqueue_script( 'material-kit_js', get_stylesheet_directory_uri() . '/js/material-kit.min.js');

}
?>







