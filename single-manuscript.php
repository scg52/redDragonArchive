<?php
/*
 * MANUSCRIPT TEMPLATE
*/
?>
                          <?php get_sidebar(); ?>

						  <div class="post-page">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

								<header class="article-header">

									<h1 class="single-title custom-post-type-title"><?php the_title(); ?></h1>

								</header>

								<section class="entry-content cf">

									<div class="transcript">
									<?php
										// get translation info
									    if (!isset($_GET["page"])) {
									    	echo get_post_meta($post->ID, 'TranslationPage1', true);
									    	echo get_post_meta($post->ID, 'Picture1', true);
									    }
									    else{
									    	$pageNum = 'TranslationPage' . $_GET["page"];
									    	$picNum = 'Picture' . $_GET["page"];
										    echo get_post_meta($post->ID, $pageNum, true);
										    echo get_post_meta($post->ID, $picNum, true);
									    }
										
									?>
									</div>
									<div class="translation">
									<?php
                                        //Transcription and pagination
										the_content();
									?>
									</div>

                                    <?php
										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section> <!-- end article section -->

							</article>

							<?php endwhile; ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single-custom_type.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						  </div> <!-- posts -->