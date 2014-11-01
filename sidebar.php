<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package html5up-prologue-playlight-mokxter
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
