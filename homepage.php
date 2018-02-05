<?php
/*
 Template Name: Homepage Template
*/
?>

<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main arcHome" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                    <?php get_sidebar(); ?>

                    <div class="icon-categories">

                          <h1 class="title">Search by Category</h1>

                          <div class="location-category">
                            <a href="/Archive/category/england/">
                              <div class="category-england">
                          	    <img src="<?php echo get_template_directory_uri();?>/library/images/england.png">
                          	    <p>England</p>
                              <!-- svg line -->
                              </div>
                            </a>
                            <a href="/Archive/category/sierra-leone/">
                              <div class="category-sierraLeone">
                                <img src="<?php echo get_template_directory_uri();?>/library/images/sierraLeone.png">
                                <p>Sierra Leone</p>
                                <!-- svg line -->
                              </div>
                            </a>
                            <a href="/Archive/category/rio-de-la-plata/">
                              <div class="category-rioDeLaPlata">
                                <img src="<?php echo get_template_directory_uri();?>/library/images/rioDeLaPlata.png">
                                <p>Rio De La Plata</p>
                              <!-- svg line -->
                              </div>
                            </a>
                            <a href="/Archive/category/salvador/">
                              <div class="category-salvador">
                                <img src="<?php echo get_template_directory_uri();?>/library/images/salvador.png">
                                <p>Salvador</p>
                                <!-- svg line -->
                              </div>
                            </a>
                          </div> <!-- location category -->
                          <div class="content-category">
                            <a href="/Archive/category/manuscript/">
                              <div class="category-manuscript">
                                <img src="<?php echo get_template_directory_uri();?>/library/images/manuscripts.png">
                                <p>Manuscripts</p>
                                <!-- svg line -->
                              </div>
                            </a>
                            <a href="/Archive/category/map/">
                              <div class="category-map">
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


<?php get_footer(); ?>