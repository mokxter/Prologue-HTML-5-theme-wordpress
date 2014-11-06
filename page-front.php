<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package html5up-prologue-playlight-mokxter
 */

get_header(); ?>

			<!-- Main -->
			<div id="main">
				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt"><?php bloginfo( 'name' ); ?></h2>
								<p><?php bloginfo( 'description' ); ?></p>
							</header>

						</div>
					</section>
					
				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">
					
							<header>
								<h2>Gallery</h2>
							</header>
						
							<!-- <div class="row">
								<div class="4u">
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
										<header>
											<h3>Ipsum Feugiat</h3>
										</header>
									</article>
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
										<header>
											<h3>Rhoncus Semper</h3>
										</header>
									</article>
								</div>
								<div class="4u">
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
										<header>
											<h3>Magna Nullam</h3>
										</header>
									</article>
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
										<header>
											<h3>Natoque Vitae</h3>
										</header>
									</article>
								</div>
								<div class="4u">
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a>
										<header>
											<h3>Dolor Penatibus</h3>
										</header>
									</article>
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
										<header>
											<h3>Orci Convallis</h3>
										</header>
									</article>
								</div>
							</div> -->
							<div class="row">
							<?php
								$count = 1;
								$my_secondary_loop = new WP_Query( array( 'post_type' => 'album'));
								// print_r($my_secondary_loop);
							    if( $my_secondary_loop->have_posts() ):
							    	while( $my_secondary_loop->have_posts() ): $my_secondary_loop->the_post();
							        //The secondary loop
							        $attachments = get_posts( array(
							            'post_type' => 'attachment',
							            'posts_per_page' => -1,
							            'post_parent' => $post->ID
							        ) );
							        if ( $attachments ) {
										foreach ( $attachments as $attachment ) {
											if ($count == 1 || $count == 3 || $count == 5) echo "<div class='4u'>";
											if ($count == 7) break;
											echo "<article class='item'";
												$class = "post-attachment mime-" . sanitize_title( $attachment->post_mime_type );
												$title = wp_get_attachment_link( $attachment->ID, 'front-thumb', true );
												echo "<a href='#' class='image fit'>";
												echo $title;
												echo "</a>";
												echo "<header><h3>" . $attachment->post_excerpt . "</h3></header>";
											echo "</article>"; // closing tag for article
											$count++;
											if ($count == 3 || $count == 5 || $count == 7) echo "</div><!-- closing tag for 4u -->";
										}
										
									}
							        endwhile; else:
							?>
                    			<p><?php _e( 'Sorry, no albums to be found.' ); ?></p>
							<?php
							    endif;
							    wp_reset_postdata();
							?>
							</div>
							<footer>
							    <a href="album" class="button scrolly">Gallery Page</a>
							</footer>

						</div>
					</section>

				<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>About Us</h2>
							</header>

							<p>Tincidunt eu elit diam magnis pretium accumsan etiam id urna. Ridiculus 
							ultricies curae quis et rhoncus velit. Lobortis elementum aliquet nec vitae 
							laoreet eget cubilia quam non etiam odio tincidunt montes. Elementum sem 
							parturient nulla quam placerat viverra mauris non cum elit tempus ullamcorper 
							dolor. Libero rutrum ut lacinia donec curae mus vel quisque sociis nec 
							ornare iaculis.</p>

						</div>
					</section>
			
				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">
							<header>
								<h2>Contact Us</h2>
							</header>
							<div class="row">
								<div class="6u">
									<ul class="icons">
										<li class="front"><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a>www.twitter.com/playlight</li>
										<li class="front"><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a>www.facebook.com/playlight</li>
									</ul>
								</div>
								<div class="6u">
									<ul class="icons">
										<li class="front"><a href="#" class="icon fa-phone-square"><span class="label">Github</span></a>+63917.5496469</li>
										<li class="front"><a href="#" class="icon fa-envelope"><span class="label">Email</span></a>someone@gmail.com</li>
									</ul>
								</div>
							</div>							

						</div>
					</section>
			</div>
<?php get_footer(); ?>