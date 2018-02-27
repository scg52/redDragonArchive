<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="cf">

					<main id="main" class="arcHome m-all cf" role="main">

                        <?php get_sidebar(); ?>

						<div class="searchpage">
						<h1 class="archive-title"><span><?php _e( '', 'bonestheme' ); ?></span> <?php echo esc_attr(get_search_query()); ?></h1>
						<div class="searchResultsContainer">
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
						</div> <!-- searchResultsContainer -->
						</div> <!-- searchpage -->

						</main>

					</div>

			</div>
