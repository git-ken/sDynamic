<?php
/** Start the engine */
require_once( get_template_directory() . '/lib/init.php' );

/** Child theme (do not remove) */
define( 'CHILD_THEME_NAME', 'Jemma Theme' );
define( 'CHILD_THEME_URL', 'http://www.aaronhartland.com/themes/jemma' );

/** Add Viewport meta tag for mobile browsers */
add_action( 'genesis_meta', 'add_viewport_meta_tag' );
function add_viewport_meta_tag() {
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0"/>';
}

/** Create additional color style options */
add_theme_support( 'genesis-style-selector', array( 
	'theme-blue' => 'Blue',
	'theme-green' => 'Green', 
	'theme-orange' => 'Orange', 
	'theme-pink' => 'Pink',
	'theme-red' => 'Red', 
	'theme-teal' => 'Teal' 
) );

/** Add support for custom background */
// add_custom_background();

/** Add support for 3-column footer widgets */
add_theme_support( 'genesis-footer-widgets', 3 );

/** Unregister secondary navigation menu */
add_theme_support( 'genesis-menus', array( 
	'primary' => __( 'Primary Navigation Menu', 'genesis' ) 
) );

/** Add support for structural wraps */
add_theme_support( 'genesis-structural-wraps', array( 
	'header', 
	'nav', 
	'subnav', 
	'inner', 
	'footer-widgets', 
	'footer' 
) );

/** Filter the footer creds text */
add_filter('genesis_footer_creds_text', 'ah_custom_footer_creds_text');
function ah_custom_footer_creds_text($creds) {
 $creds = 'Copyright &copy; &nbsp;' . date('Y') . '&nbsp;' . get_bloginfo('name') . ' &middot; All Rights Reserved [footer_loginout]
 <div class="powered-by">Powered by <a href="http://www.studiopress.com/" target="_blank" title="Genesis Framework" rel="nofollow">Genesis </a>and the <a href="'. esc_url( CHILD_THEME_URL ) .'" title="'. esc_attr( CHILD_THEME_NAME ) .' by Aaron Hartland" target="_blank">'.esc_attr( CHILD_THEME_NAME ).'</a></div> ';
 return  $creds;
}

/* Add support for custom header
	add_theme_support( 'custom-header', array(
		'flex-width'      => true,
		'width'           => 400,
		'flex-height'     => true,
		'height'          => 150,
		'header-selector' => '.site-title a',
	) );*/


