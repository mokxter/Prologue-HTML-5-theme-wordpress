<?php

/**
* This is my code!! Mokxter
*/
//define( 'WP_USE_THEMES', false);
get_header(); ?>
<div id="main">
    <section id="top" class="one dark cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/gallerybanner.jpg);">
        <div class="container">

        </div>
    </section>
    <section id="portfolio" class="two">
        <div class="container">
            <header>
                <h2 class="alt">Gallery</h2>
            </header>
            <div class="row">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


                <div class="4u">
                    <article class="item">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="image fit"><?php the_post_thumbnail('front-thumb'); ?></a>
                        <header>
                            <h3><?php the_title(); ?></h3>
                        </header>
                    </article>

                </div>
                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>
