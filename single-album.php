<?php
/**
 * The template for displaying all single posts.
 *
 * @package html5up-prologue-playlight-mokxter
 */

get_header(); ?>

	<div id="main">
		<section id="top" class="one dark cover" style="background-image: url(<?php echo get_featured_image_url($post); ?>);">
		</section>
		<?php while ( have_posts() ) : the_post(); ?>
			<section>
				<div class="container">
					<header>
						<h2 class="alt"><?php the_title(); ?></h2>
						<span class='posted-on'>Posted on <time class='entry-date published'><?php the_time('l, F j, Y')?></time></span>
					</header>
					<div class="row">
						<div class="12u">
							<?php the_content(); ?>
						</div>
					</div>
				</div>
			</section>
		<?php endwhile; // end of the loop. ?>
	</div><!-- #primary -->
<?php get_footer(); ?>
