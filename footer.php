<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package html5up-prologue-playlight-mokxter
 */
?>
<!--
	</div><!-- #content -->
-->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'html5up-prologue-playlight-mokxter' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'html5up-prologue-playlight-mokxter' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'html5up-prologue-playlight-mokxter' ), 'html5up-prologue-playlight-mokxter', '<a href="http://mokxter.github.io" rel="designer">Mokxter</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
