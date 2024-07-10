<?php 
/**
 * Including acf free in the plugin
 */

if( !function_exists( 'is_plugin_active') ){
	include_once ABSPATH.'wp-admin/includes/plugin.php';
}

if ( is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) {
    return;
}

define( 'MY_ACF_PATH',plugin_dir_path( __FILE__ ).'/includes/acf/' );
define( 'MY_ACF_URL', plugin_dir_url( __FILE__ ).'includes/acf/' );

// if( defined( MY_ACF_PATH )){
// 	return;
//


include_once( MY_ACF_PATH.'acf.php' );

add_filter('acf/settings/url', 'ctabs_acf_seetings_url');

function ctabs_acf_seetings_url( $url ){
	return MY_ACF_URL;
}