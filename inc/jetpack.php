<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package html5up-prologue-playlight-mokxter
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function html5up_prologue_playlight_mokxter_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'html5up_prologue_playlight_mokxter_jetpack_setup' );
