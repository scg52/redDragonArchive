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

									    ?><div id="manuscript-picture" class="post-picture"> <?php
									    echo $manuscript[0];
									    ?></div> <!-- post-picture -->

                                        <div class="text-content">
                                          <div id="transcript-button" class="accordion">Transcription</div>
									      <div id="transcription-content" class="panel"> <?php
									      echo $manuscript[1];
									      ?> </div> <!-- translation-content -->
									    	 
									      <div id="translation-button" class="accordion">Translation</div>
									      <div id="translation-content" class="panel"> <?php
									      echo $manuscript[2];
									      ?> </div>  <!-- transcription-content --> 
									    </div>
									    
									</div> <!-- manuscript -->

									<?php if ( function_exists( 'pgntn_display_pagination' ) ) pgntn_display_pagination( 'multipage' ); 
									?>

                                    <script type="text/javascript">
                                        
                                        var acc = document.getElementsByClassName("accordion");

                                        for (var i = 0; i < acc.length; i++) {
                                          acc[i].addEventListener("click", function() {
                                            this.classList.toggle("active");
                                            var panel = this.nextElementSibling;
                                            if (panel.style.maxHeight){
                                              panel.style.maxHeight = null;
                                            } else {
                                              panel.style.maxHeight = panel.scrollHeight + "px";
                                            } 
                                            
                                            if (hasClass(panel, 'display')) {
                                              panel.classList.remove('display');
                                            } else{
                                            	panel.classList.add('display');
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