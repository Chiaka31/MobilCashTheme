<?php
/*  wp_enqueue_style( $handle, $src, $deps, $ver, $media); 
    handle is way wordpress can access the script via code, 
    src is location of the script, 
    dependancies are dependencies the script or sstyle sheet may have, version # changes the name of the file - tells the browser that it should reload the script
    https://developer.wordpress.org/reference/functions/wp_enqueue_style/ 
    https://developer.wordpress.org/reference/functions/wp_enqueue_script/
*/

function wpdocs_theme_name_scripts(){
    
    wp_enqueue_style( 'bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css", false, "5.02");
     wp_enqueue_style( 'hello-world', get_stylesheet_uri(), array("bootstrap"), "1.0" );
    
    
    wp_enqueue_script( 'bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array(), '5.02', false );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php'; //require once produces an error if it can't be found
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'hello-world' ),
) );
?>
