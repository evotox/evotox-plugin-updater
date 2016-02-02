<?php
/*
Plugin Name: Evotox Plugin
Description: This is for updating your Wordpress plugin.
Version: 1.0.8
Author: Mubeen Khan
Author URI: http://www.evotox.com
*/
if( ! class_exists( 'Evotox_Updater' ) ){
	include_once( plugin_dir_path( __FILE__ ) . 'updater.php' );
}
if ( is_admin() ) {
 
    $config = array(
        'slug'                  => plugin_basename( __FILE__ ),
        'proper_folder_name'    => 'evotox-plugin-updater',
        'api_url'               => 'https://api.github.com/repos/evotox/evotox-plugin-updater',
        'raw_url'               => 'https://raw.github.com/evotox/evotox-plugin-updater/master',
        'github_url'            => 'https://github.com/evotox/evotox-plugin-updater',
        'zip_url'               => 'https://github.com/evotox/evotox-plugin-updater/zipball/master',
        'sslverify'             => true,
        'requires'              => '3.0',
        'tested'                => '3.3',
        'readme'                => 'README.md',
        'access_token'          => ''
    );
 
    new WP_GitHub_Updater( $config );
 
}


include_once( plugin_dir_path( __FILE__ ) . 'functions.php' );