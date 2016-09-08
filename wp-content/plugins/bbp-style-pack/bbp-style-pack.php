<?php

/*
Plugin Name: bbp style pack
Plugin URI: http://www.rewweb.co.uk/bbp-style-pack/
Description: This plugin adds styling and features to bbPress
Version: 3.2.7
****and change version below******
Author: Robin Wilson
Text Domain: bbp-style-pack
Domain Path: /languages
Author URI: http://www.rewweb.co.uk

License: GPL2
*/
/*  Copyright 2016  PLUGIN_AUTHOR_NAME  (email : wilsonrobine@btinternet.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

	*/

/*******************************************
* global variables
*******************************************/

// load the plugin options
$bsp_style_settings_f = get_option( 'bsp_style_settings_f' );
$bsp_style_settings_ti = get_option( 'bsp_style_settings_ti' );
$bsp_style_settings_t = get_option( 'bsp_style_settings_t' );
$bsp_style_settings_la = get_option( 'bsp_style_settings_la' );
$bsp_style_settings_form = get_option( 'bsp_style_settings_form' );
$bsp_profile = get_option( 'bsp_profile' );
$bsp_forum_display = get_option( 'bsp_forum_display' );
$bsp_login = get_option( 'bsp_login' );
$bsp_breadcrumb = get_option( 'bsp_breadcrumb' );
$bsp_templates = get_option( 'bsp_templates' );
$bsp_css = get_option( 'bsp_css' );
$bsp_roles = get_option( 'bsp_roles' );
$bsp_style_settings_freshness = get_option( 'bsp_style_settings_freshness' );

if(!defined('BSP_PLUGIN_DIR'))
	define('BSP_PLUGIN_DIR', dirname(__FILE__));

function bbp_style_pack_init() {
  load_plugin_textdomain('bbp-style-pack', false, basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action('plugins_loaded', 'bbp_style_pack_init');



/*******************************************
* file includes 
*******************************************/

include(BSP_PLUGIN_DIR . '/includes/settings.php');
include(BSP_PLUGIN_DIR . '/includes/style_settingsf.php');
include(BSP_PLUGIN_DIR . '/includes/style_settingst.php');
include(BSP_PLUGIN_DIR . '/includes/style_settingsti.php');
include(BSP_PLUGIN_DIR . '/includes/style_settingsform.php');
include(BSP_PLUGIN_DIR . '/includes/style_settingsla.php');
include(BSP_PLUGIN_DIR . '/includes/forum_display.php');
include(BSP_PLUGIN_DIR . '/includes/functions.php');
include(BSP_PLUGIN_DIR . '/includes/generate_css.php');
include(BSP_PLUGIN_DIR . '/includes/login.php');
include(BSP_PLUGIN_DIR . '/includes/breadcrumb.php');
include(BSP_PLUGIN_DIR . '/includes/shortcode_display.php');
include(BSP_PLUGIN_DIR . '/includes/shortcodes.php');
include(BSP_PLUGIN_DIR . '/includes/help.php');
include(BSP_PLUGIN_DIR . '/includes/widgets.php');
include(BSP_PLUGIN_DIR . '/includes/widgets_settings.php');
include(BSP_PLUGIN_DIR . '/includes/style_settingsprofile.php');
include(BSP_PLUGIN_DIR . '/includes/forum_templates.php');
include(BSP_PLUGIN_DIR . '/includes/style_settings_css.php');
include(BSP_PLUGIN_DIR . '/includes/forum_roles.php');
include(BSP_PLUGIN_DIR . '/includes/style_settings_freshness.php');
include(BSP_PLUGIN_DIR . '/includes/plugins.php');
include(BSP_PLUGIN_DIR . '/includes/plugin-info.php');
include(BSP_PLUGIN_DIR . '/includes/whats_new.php');



/**************************************
*Versioning 
***************************************/

$new_version = '3.2.7';

if (!defined('BSP_VERSION_KEY'))
    define('BSP_VERSION_KEY', 'bsp_version');

if (!defined('BSP_VERSION_NUM'))
    define('BSP_VERSION_NUM', $new_version);

add_option(BSP_VERSION_KEY, BSP_VERSION_NUM);

$test = get_option(BSP_VERSION_KEY) ;
//amend how freshness works for early freshness versions

if ($test == '3.1.4' || $test == '3.1.3' || $test == '3.1.2'  || $test == '3.1.1' || $test == '3.1.0') {
	if (!empty ($bsp_style_settings_freshness) ) {
		//Get entire array
		$options = get_option('bsp_style_settings_freshness');
		//Alter the activate array appropriately
		$options['activate'] = '1';
		//Update entire array
		update_option('bsp_style_settings_freshness', $options);
	}
}

//amend how submit activate is saved for version 3.1.7
if ($test == '3.1.7' || $test == '3.2.0') {
	//Get entire array
	$options = get_option('bsp_style_settings_form');
		if (!empty($options['SubmitActivate'])) {
		$submit = __('Submit', 'bbpress') ;
		$options['SubmittingActivate'] = '1';
		$options['SubmittingSubmitting'] = $submit;
		$options['SubmittingSpinner'] = '1';
		}
		//Update entire array
		update_option('bsp_style_settings_form', $options);
}
		



if (get_option(BSP_VERSION_KEY) != $new_version) {
    // Execute the save to update the css file
	//************************************************************************************************************************************************************
	add_action( 'wp_enqueue_scripts', 'generate_style_css') ;
	
	
	// Then update the version value
    update_option(BSP_VERSION_KEY, $new_version);
}












	