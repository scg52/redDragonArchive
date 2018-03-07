<?php
/*
 * MANUSCRIPT TEMPLATE
*/
?>
                          <?php get_sidebar(); ?>

						  <div class="post-page">

                <div id="archiveBG" class="imgBG"></div>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article">

								<header class="article-header">
<!-- 									<a href="http://www.benrodia.com/red-dragon/archive" class="returnToHome"><h3>Return to Archive Home</h3></a>
 -->
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
										<div id="pic-button">
											Picture
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
									    print_r($manuscript[0]);
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
                                        
                                        var transcriptButton = document.getElementById('transcript-button');
                                        var translationButton = document.getElementById('translation-button');
                                        var pictureButton = document.getElementById('pic-button');
                                        transcriptButton.style.backgroundColor = "#f23535";

                                        translationEl.classList.add('hidden');
                                        if (screen.width <= 500) {
                                          pictureEl.classList.add('hidden');
                                        }
                                        
                                        //show transcript
                                        transcriptButton.addEventListener("click", function(){
                                    	  var transcriptEl = document.getElementById('transcription-content');
                                    	  var translationEl = document.getElementById('translation-content');
                                    	  var pictureEl = document.getElementById('manuscript-picture');

                                    	  if(hasClass(translationEl, 'hidden')){
                                            pictureEl.classList.add('hidden');
                                            transcriptEl.classList.remove('hidden');
                                    	  }else{
                                            translationEl.classList.add('hidden');
                                            transcriptEl.classList.remove('hidden');
                                    	  }
                                        });

                                        //show translation
                                        translationButton.addEventListener("click", function(){
                                    	  var transcriptEl = document.getElementById('transcription-content');
                                    	  var translationEl = document.getElementById('translation-content');
                                    	  var pictureEl = document.getElementById('manuscript-picture');

                                    	  if(hasClass(transcriptionEl, 'hidden')){
                                            pictureEl.classList.add('hidden');
                                            translationEl.classList.remove('hidden');
                                    	  }else{
                                            translationEl.classList.add('hidden');
                                            translationEl.classList.remove('hidden');
                                    	  }
                                        });

                                        //show picture
                                        if (screen.width <= 500) {
                                          pictureButton.addEventListener("click", function(){
                                    	    var transcriptEl = document.getElementById('transcription-content');
                                    	    var translationEl = document.getElementById('translation-content');
                                    	    var pictureEl = document.getElementById('manuscript-picture');

                                    	    if(hasClass(translationEl, 'hidden')){
                                              transcriptEl.classList.add('hidden');
                                              pictureEl.classList.remove('hidden');
                                    	    }else{
                                              translationEl.classList.add('hidden');
                                              pictureEl.classList.remove('hidden');
                                    	    }
                                          });
                                        }


                                        function hasClass(element, cls) {
                                            return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
                                        }

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