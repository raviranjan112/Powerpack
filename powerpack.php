<?php
/*
Plugin Name: Powerpack
Plugin URI:  http://wordpress.org/extend/plugins/powerpack/
Description: Adds a dozen of plugins in one go
Version:     1.0-alpha
Author:      Ramoonus
Author URI:  http://www.ramoonus.nl/wordpress/powerpack/
Text Domain: powerpack
Domain Path: /language
 */

/**
 * Detect if WordPress is above 4.3
 * 
 * @todo: msg, disable self
 * @version 4.6
 * @since 1.0
 */
 if ( version_compare( $GLOBALS['wp_version'], '4.6', '<' ) ) { 
 	// todo
 }

/**
 * D3.js
 *
 * @version 3.5.17
 * @todo toggle minify
 * @since 1.0
 * @return void
 */
function rw_pp_d3js() {
 wp_enqueue_script('d3.js', plugins_url( 'js/d3/d3.min.js', __FILE__ ), array(), '3.5.17' );
}
add_action('wp_enqueue_scripts', 'rw_pp_d3js');

/**
 * Selectivizr.js
 * 
 * @version 1.0
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_selectivizr() {
	wp_enqueue_script('selectivizr',plugins_url( '/js/selectivizr/selectivizr.min.js' , __FILE__ ), array(), '1.0.b3' );
}
add_action('wp_enqueue_scripts', 'rw_pp_selectivizr');
wp_script_add_data( 'selectivizr', 'conditional', 'lt IE 9' ); /** new */

/** Internet Explorer Compatibility
 * @since 1.0
 * @version 11
 * @todo toggle
 */
function rw_ie9() {
    echo '<meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=Edge" />';
}
add_action('wp_head', 'rw_ie9');

/**
 * Has.js
 *
 * @version 1.0
 * @todo toggle minify
 * @since 1.0
 * @return void
 */
function rw_pp_has() {
    wp_enqueue_script('has.js', plugins_url( 'js/has/has.js', __FILE__ ) );
}
add_action('wp_enqueue_scripts', 'rw_pp_has');

/**
 * Lettering.js
 *
 * @version 0.7
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_lettering() {
    wp_enqueue_script('lettering',plugins_url( '/js/lettering/jquery.lettering.js' , __FILE__ ), array('jquery'), '0.7.0' );
}
add_action('wp_enqueue_scripts', 'rw_pp_lettering');

/**
 * FitText.js
 *
 * @version 1.2
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_fittext() {
    wp_enqueue_script('fittext',plugins_url( '/js/fittext/jquery.fittext.js' , __FILE__ ), array('jquery'), '1.2' );
}
add_action('wp_enqueue_scripts', 'rw_pp_fittext');

/**
 * PEP.js
 *
 * @version 0.4
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_pep() {
    wp_enqueue_script('pep',plugins_url( '/js/pep/pep.min.js' , __FILE__ ), array(), '0.4' );
}
add_action('wp_enqueue_scripts', 'rw_pp_pep');

/**
 * matchMedia.js
 *
 * @version 0.2
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_matchmedia() {
    wp_enqueue_script('matchmedia',plugins_url( '/js/matchmedia/matchMedia.js' , __FILE__ ), array(), '0.2' );
}
add_action('wp_enqueue_scripts', 'rw_pp_matchmedia');

/**
 * Microformat Shiv
 *
 * @version 1.3.1
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_microformatshiv() {
    wp_enqueue_script('microformatshiv',plugins_url( '/js/microformatshiv/microformatshiv.min.js' , __FILE__ ), array(), '1.3.1' );
}
add_action('wp_enqueue_scripts', 'rw_pp_microformatshiv');

/**
 * FontAwesome
 *
 * @version 4.4.0
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_fontawesome() {
    wp_deregister_style('fontawesome');
    wp_enqueue_style('fontawesome',plugins_url( '/css/fontawesome/font-awesome.min.css' , __FILE__ ), '4.4.0' );
}
add_action('wp_enqueue_scripts', 'rw_pp_fontawesome');

/**
 * Respond.js
 *
 * @version 1.4.2
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_respond() {
    wp_enqueue_script('respondjs',plugins_url( '/js/respond/respond.min.js' , __FILE__ ), array(), '1.4.2' );
}
add_action('wp_enqueue_scripts', 'rw_pp_respond');

/**
 * Amplify
 *
 * @version 1.1.2
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_amplify() {
    wp_enqueue_script('amplify',plugins_url( '/js/amplify/amplify.min.js' , __FILE__ ), array(), '1.1.2' );
}
add_action('wp_enqueue_scripts', 'rw_pp_amplify');

/**
 * Enhance
 *
 * @version 1.1.0
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_enhance() {
    wp_enqueue_script('enhance',plugins_url( '/js/enhance/enhance.js' , __FILE__ ), array(), '1.1.0' );
}
add_action('wp_enqueue_scripts', 'rw_pp_enhance');

/**
 * Explorer Canvas
 * excanvas
 *
 * @version 1.0
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_excanvas() {
    wp_enqueue_script('excanvas',plugins_url( '/js/excanvas/excanvas.js' , __FILE__ ), array(), '1.0' );
}
add_action('wp_enqueue_scripts', 'rw_pp_excanvas');

/**
 * html5shiv
 *
 * @version 3.7.3
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_html5shiv() {
    wp_enqueue_script('html5shiv',plugins_url( '/js/html5shiv/html5shiv.min.js' , __FILE__ ), array(), '3.7.3' );
}
add_action('wp_enqueue_scripts', 'rw_pp_html5shiv');

/**
 * Respond.js
 *
 * @version 1.0.0
 * @since 1.0
 * @todo toggle minify
 * @return void
 */
function rw_pp_ramonjs() {
    wp_enqueue_script('ramonjs',plugins_url( '/js/ramon/ramon.js' , __FILE__ ), array(), '1.0.0' );
}
add_action('wp_enqueue_scripts', 'rw_pp_ramonjs');

/**
 * Regions.js
 *
 * @version 1.0.1
 * @since 1.0
 * @todo toggle minify
 * @todo toggle jquery
 * @return void
 * @author Adobe Systems Inc
 */
function rw_pp_regionjs() {
    wp_deregister_script('regions'); // deregister
    wp_enqueue_script('regions', plugins_url('/js/cssregions.min.js', __FILE__), array("jquery"), '1.0.1');

}
add_action('wp_enqueue_scripts', 'rw_pp_regionjs');

/** WooCommerce
 * Category Expander
 * @version 1.0.0
 * @since 1.0.0
 */
include("inc/woocommerce.php");

/** Integratie jQuery Updater
 * @since 1.0.0
 */
include("inc/jqu.php");


/** Integratie jQuery Updater
 * @since 1.0.0
 * @version 1.0.0
 */
include("inc/common-image-size.php.php");
