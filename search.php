<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="cf">

					<main id="main" class="arcHome m-all cf" role="main">

                        <?php get_sidebar(); ?>

						<div class="arDiv">
						<h1 class="archiveBanner">Search</h1>
		                <div id="filterResults" class="">
		                  <h3>Searching For:</h3>
		                  <div class="filter-label"><a href="<?php echo get_home_url(); ?>"><?php echo get_search_query() . ' <span>X</span>';?></a></div>
		                </div>

                		<div id="archiveBG" class="imgBG"></div>

                		<div id="postArea">
						

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
								<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
									<header class="entry-header article-header">
									<h3 class="h2 entry-title"><?php the_title(); ?></h3>
								</header>

								<section class="entry-content cf">

									<?php the_post_thumbnail(array(300, 212)); ?>

								</section>
								</a>

							</article>

							<?php endwhile; ?>

								<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Sorry, No Results.', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Try your search again.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the search.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>
						</div> <!-- postArea -->
						</div> <!-- searchpage -->

						</main>

					</div>

			</div>
