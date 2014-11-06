<?php
/**
 * The template for displaying all single posts.
 *
 * @package html5up-prologue-playlight-mokxter
 */

get_header(); ?>
		<div id="main">
			<section class="three">
				<?php
				if ( have_posts() ) : while ( have_posts() ) : the_post();

				?>

				<div class="entry-attachment">
				<?php if ( wp_attachment_is_image( $post->id ) ) : $att_image = wp_get_attachment_image_src( $post->id, "full"); ?>
					<header>
						<?php
						?> 
						<h2><?php echo $post->post_excerpt ?></h2>
					</header>
					<a href="<?php echo wp_get_attachment_url($post->id); ?>" title="<?php the_title(); ?>" rel="attachment"><img src="<?php echo $att_image[0];?>" width="<?php echo $att_image[1];?>" height="<?php echo $att_image[2];?>"  class="attachment-medium" alt="<?php $post->post_excerpt; ?>" /></a>
				<?php else : ?>
					<a href="<?php echo wp_get_attachment_url($post->ID) ?>" title="<?php echo wp_specialchars( get_the_title($post->ID), 1 ) ?>" rel="attachment"><?php echo basename($post->guid) ?></a>
				<?php endif; ?>
				</div>
				<?php endwhile; ?>

				<?php endif; ?>

			</section>
		</div><!-- #main -->
<?php get_footer(); ?>
