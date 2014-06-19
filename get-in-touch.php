<?php
/*
Plugin Name: Get In Touch
Plugin URI: http://developer.think201.com/plugins/get-in-touch-wordpress-contact-form-plugin
Description: Get In Touch plug-in allows you to generate form by adding input controls to it dynamically. This plug-in allows you to integrate map along with your form and have a track of mails received.
Author: Think201, Vivek Pandey
Version: 1.0.2
Author URI: http://www.think201.com
License: GPL v1

Contact Form Plugin
Copyright (C) 2014, Think201 - think201.com@gmail.com

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
/**
 * @package Main
 */

//strat session
if (session_id() == '') {
	session_start();
	//check
}

if ( !defined( 'DB_NAME' ) ) {
	header( 'HTTP/1.0 403 Forbidden' );
	die;
}

register_deactivation_hook( __FILE__, 'git_deactivation' );
register_uninstall_hook(    __FILE__, 'git_uninstall' );
add_action( 'plugins_loaded', array( 'GIT', 'init' ) );

if(version_compare(PHP_VERSION, '5.2', '<' )) 
{
	if (is_admin() && (!defined( 'DOING_AJAX' ) || !DOING_AJAX )) 
	{
		require_once(ABSPATH . 'wp-admin/includes/plugin.php');
		deactivate_plugins( __FILE__ );
		wp_die( sprintf( __( 'Get In Touch requires PHP 5.2 or higher, as does WordPress 3.2 and higher. The plugin has now disabled itself.', 'Get In Touch' ), '<a href="http://wordpress.org/">', '</a>' ));
	} 
	else 
	{
		return;
	}
}

class GIT
{
	public function __construct()
    {    	
    	if ( !defined( 'GIT_PATH' ) )
		define( 'GIT_PATH', plugin_dir_path( __FILE__ ) );

		if ( !defined( 'GIT_BASENAME' ) )
		define( 'GIT_BASENAME', plugin_basename( __FILE__ ) );

		if ( !defined( 'GIT_VERSION' ) )
		define('GIT_VERSION', '1.0.2' );

		if ( !defined( 'GITPLUGIN_DIR' ) )
		define('GITPLUGIN_DIR', dirname(__FILE__) );

		if ( ! defined( 'GIT_LOAD_JS' ) )
		define( 'GIT_LOAD_JS', true );

		if ( ! defined( 'GIT_LOAD_CSS' ) )
		define( 'GIT_LOAD_CSS', true );	

		if ( ! defined( 'GIT_CAPTCHA' ) )
		define( 'GIT_CAPTCHA', GITPLUGIN_DIR .'/includes/captcha.php');	

		register_activation_hook(__FILE__,'git_activate');		
    }

    public static function init()
    { 		
  		require_once GITPLUGIN_DIR .'/includes/install.php';
		// Calling Function to Setup Database Tables and initial setup for Plugin
		git_activate();	
    }
}

// Calling Function to Drop Database Tables
function git_deactivation()
{
	git_pause();
}

// Calling Function to Drop Database Tables
function git_uninstall()
{
	git_remove();
}

$init = new GIT();
$init->init();
?>