<?php
/**
 * html5up-prologue-playlight-mokxter Theme Customizer
 *
 * @package html5up-prologue-playlight-mokxter
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function html5up_prologue_playlight_mokxter_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', 'html5up_prologue_playlight_mokxter_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function html5up_prologue_playlight_mokxter_customize_preview_js() {
	wp_enqueue_script( 'html5up_prologue_playlight_mokxter_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'html5up_prologue_playlight_mokxter_customize_preview_js' );
