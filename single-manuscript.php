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

									<div class="manuscript">
										<div id="transcript-button">
											Transcript
										</div>
                                        <div id="translation-button">
											Translation
										</div>
										<div id="visible">
											<!-- uses dynamic content -->
										</div>
									<?php
										// content
									    if (!isset($_GET["page"])) {

									    	?> <div class="post-picture"> <?php
									    	echo get_post_meta($post->ID, 'Picture1', true);
									    	?></div> <!-- post-picture -->

									    	<div id="translation-content"> <?php
									    	echo get_post_meta($post->ID, 'Translation1', true);
									    	?> </div> <!-- translation-content -->
									    	 
									    	<div id="transcription-content"> <?php
									    	echo get_post_meta($post->ID, 'Transcription1', true);
									    	?> </div>  <!-- transcription-content --> <?php

									    }
									    else{

                                            ?> <div class="post-picture"> <?php
										    $picNum = 'Picture' . $_GET["page"];
										    echo get_post_meta($post->ID, $picNum, true);
                                            ?> </div> <!-- post-picture -->

                                            <div id="translation-content"> <?php
									    	$pageNum = 'Translation' . $_GET["page"];
										    echo get_post_meta($post->ID, $pageNum, true);
                                            ?> </div> <!-- translation-content -->

                                            <div id="transcription-content"> <?php
										    $tranNum = 'Transcription' . $_GET["page"];
										    echo get_post_meta($post->ID, $tranNum, true);
										    ?> </div> <!-- transcription-content --> <?php

									    }
										
									?>
									</div> <!-- manuscript -->

                                    <script type="text/javascript">
                                        
                                        var transcriptEl = document.getElementById('transcript-button');
                                        var translationEl = document.getElementById('translation-button');

                                        var transcriptCont = document.getElementById('transcription-content');
                                    	var visibleEl = document.getElementById('visible');
                                        visibleEl.innerHTML = transcriptCont.innerHTML;

                                        transcriptEl.style.backgroundColor = "#5B0F0F";
                                        
                                        //show transcript
                                        transcriptEl.addEventListener("click", function(){
                                    	  var transcriptCont = document.getElementById('transcription-content');
                                    	  var visibleEl = document.getElementById('visible');
                                          visibleEl.innerHTML = transcriptCont.innerHTML;

                                          this.style.backgroundColor = "#5B0F0F";
                                          var translationEl = document.getElementById('translation-button');
                                          translationEl.style.backgroundColor = "#9a0000";
                                        });

                                        //show translation
                                        translationEl.addEventListener("click", function(){
                                    	  var translationCont = document.getElementById('translation-content');
                                    	  var visibleEl = document.getElementById('visible');
                                          visibleEl.innerHTML = translationCont.innerHTML;

                                          this.style.backgroundColor = "#5B0F0F";
                                          var transcriptEl = document.getElementById('transcript-button');
                                          transcriptEl.style.backgroundColor = "#9a0000";
                                        });

                                    </script>

									<div class="buttons">
									<?php
                                        //pagination buttons
										the_content();
									?>
									</div> <!-- buttons -->

                                    <?php
										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages.
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