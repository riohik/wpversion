<?php
global $bsp_style_settings_form ;


function generate_style_css() {
	ob_start(); // Capture all output (output buffering)
	require (BSP_PLUGIN_DIR . '/css/styles.php');
	$css = ob_get_clean(); // Get generated CSS (output buffering)
	file_put_contents(BSP_PLUGIN_DIR . '/css/bspstyle.css', $css, LOCK_EX ); // Save it
	wp_enqueue_style( 'bsp');
	}

function bsp_enqueue_css() {
wp_register_style('bsp', plugins_url('css/bspstyle.css',dirname(__FILE__) ), array( 'bbp-default' ));
wp_enqueue_style( 'bsp');
}

add_action('wp_enqueue_scripts', 'bsp_enqueue_css');

add_action( 'admin_enqueue_scripts', 'bsp_enqueue_color_picker' );

function bsp_enqueue_color_picker( $hook_suffix ) {
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'bsp_enqueue_color_picker', plugins_url('js/bsp.js',dirname( __FILE__ )), array( 'wp-color-picker' ), false, true );
	}

	
if (!empty ( $bsp_style_settings_form['SubmittingActivate'])) add_action( 'wp_enqueue_scripts', 'bsp_enqueue_submit' );


function bsp_enqueue_submit() {
	wp_enqueue_script( 'bsp_enqueue', plugins_url('js/bsp_enqueue_submit.js',dirname( __FILE__ )), false, null, 'all' );
	}
	
