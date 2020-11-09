<?php
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/bootstrap_setup/wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

/**
 * Register Custom Menu
 */
register_nav_menu('menu_principale', 'Menu Principale');

/**
 * Add Custom Logo
 */
add_theme_support( 'custom-logo' );

function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 50,
 'width'       => 200,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

/**
 * Add Custom CSS
 */

 function custom_css(){
 	wp_enqueue_style( 'gstyle', get_template_directory_uri() . '/css/gstyle.css',false, null,'all');
 }

 add_action('wp_head', 'custom_css');


/**
 * Add Gutenberg
 */

require get_template_directory() . '/inc/gutenberg.php';


 ?>
