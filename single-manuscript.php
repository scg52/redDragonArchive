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
									    $pageNum;
									    if (isset($_GET["page"])) {
									    	$pageNum = $_GET["page"];
									    }else{
									    	$pageNum = 1;
									    }

                                        $textContent = get_the_content();
                                        $textContent = str_replace("<-page" . $pageNum . "->","",$textContent);
                                        $textContent = str_replace(" Translation","",$textContent);
                                        $textContent = str_replace(" Transcription","",$textContent);
                                        $textContent = str_replace("<-b->","<br>",$textContent);
									    $manuscript = explode("<!--section-->", $textContent);

										// content

									    ?> <div id="manuscript-picture" class="post-picture"> <?php
									    echo $manuscript[0];
									    ?></div> <!-- post-picture -->

									    <div id="transcription-content" class="display-text"> <?php
									    echo $manuscript[1];
									    ?> </div> <!-- translation-content -->
									    	 
									    <div id="translation-content" class="display-text"> <?php
									    echo $manuscript[2];
									    ?> </div>  <!-- transcription-content --> 
									    
									</div> <!-- manuscript -->

									<?php if ( function_exists( 'pgntn_display_pagination' ) ) pgntn_display_pagination( 'multipage' ); 
									?>

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