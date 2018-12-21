<?php


// Language Support For Child Theme 
function twentynineteen_child_theme_setup() {
    load_child_theme_textdomain( 'my-child-theme', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'twentynineteen_child_theme_setup' );


// Enqueue Styles & Scripts
function twentynineteen_theme_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
    wp_enqueue_style( 'font-awesome', '//use.fontawesome.com/releases/v5.6.3/css/all.css' );
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_style( 'responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );
	
    wp_enqueue_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'twentynineteen_theme_enqueue_styles' );


// Custom Function to Include
function my_favicon_link() {
    echo '<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'my_favicon_link' );