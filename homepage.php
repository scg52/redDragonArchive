<?php
/*
 Template Name: Homepage Template
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="cf">

						<main id="main" class="arcHome m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog" style="background-image: url("<?php echo get_template_directory_uri();?>/library/images/paperTex.jpg");">

                    <?php get_sidebar(); ?>

                    <div class="icon-categories">

                          <div class="title">
                            <h1 id="arcTitle">Archive</h1>
                            <div id="swirl1">
                              <?php include 'swirl.php'; ?>
                            </div>
                            <h2 id="sbc">Search by Category</h2>
                            <div id="swirl2">
                              <?php include 'swirl.php'; ?>
                            </div>
                          </div>

                          <div class="location-category">
                            <a href="/Archive/?category_name=england/">
                              <div class="category-england catico">
                          	    <img src="<?php echo get_template_directory_uri();?>/library/images/england.png">
                          	    <p>England</p>
                              <!-- svg line -->
                              </div>
                            </a>
                            <a href="/Archive/?category_name=sierra-leone/">
                              <div class="category-sierraLeone catico">
                                <img src="<?php echo get_template_directory_uri();?>/library/images/sierraLeone.png">
                                <p>Sierra Leone</p>
                                <!-- svg line -->
                              </div>
                            </a>
                            <a href="/Archive/?category_name=rio-de-la-plata/">
                              <div class="category-rioDeLaPlata catico">
                                <img src="<?php echo get_template_directory_uri();?>/library/images/rioDeLaPlata.png">
                                <p>Rio De La Plata</p>
                              <!-- svg line -->
                              </div>
                            </a>
                            <a href="/Archive/?category_name=salvador/">
                              <div class="category-salvador catico">
                                <img src="<?php echo get_template_directory_uri();?>/library/images/salvador.png">
                                <p>Salvador</p>
                                <!-- svg line -->
                              </div>
                            </a>
                          </div> <!-- location category -->
                          <div class="content-category">
                            <a href="/Archive/?category_name=manuscript/">
                              <div class="category-manuscript catico">
                                <img src="<?php echo get_template_directory_uri();?>/library/images/manuscripts.png">
                                <p>Manuscripts</p>
                                <!-- svg line -->
                              </div>
                            </a>
                            <a href="/Archive/?category_name=map/">
                              <div class="category-map catico">
                                <img src="<?php echo get_template_directory_uri();?>/library/images/maps.png">
                                <p>Maps</p>
                                <!-- svg line -->
                              </div>
                            </a>
                          </div> <!-- content-category -->

                    </div> <!-- category-icons -->

						</main>

				</div>

			</div>