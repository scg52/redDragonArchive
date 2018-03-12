<?php get_header(); ?>
<?php if (isset($_GET['category'])) {
    $selectedCategory = $_GET['category'];
  } else {
    $selectedCategory = "";
  }?>

      <div id="content">

        <div id="inner-content" class="cf">

            <main id="main" class="arcHome m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                          <?php include 'sidebar-home.php'; ?>

              <div class="arDiv">
                <h1 id="homeOrFilter" class="archiveBanner">Archive</h1>
                <div id="filterResults" class="slideHide">
                  <h3>Filters:</h3>
                </div>
                <div id="archiveBG" class="imgBG"></div>

                <div id="splash" class="splash">
                    <p class="textBox">Welcome to the Archive! This is your stop to dig deeper into the exploits of the Red Dragon crew and their most sordid ventures. To begin exploring, simply select the categories you are interested in on the menu there, or enter a search term. Enjoy!</p>
                </div>
                <div id="splashBG" class="imgBG"></div>
                  
                  
                <div id="postArea" class="hidden">
                  <?php
                  $allposts = get_posts();
     
                   if ( $allposts ) {
                      foreach ( $allposts as $post ) :
                          setup_postdata( $post );
                ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                  <header class="entry-header article-header">
                  <h3 class="h2 entry-title"><?php the_title(); ?></h3>
                </header>

                <section class="entry-content cf">

                  <?php 
                    //if there is no thumbnail picture then show a description of the article
                    if ( has_post_thumbnail() ) {
                      the_post_thumbnail(array(300, 300));
                    } else{
                      the_excerpt();
                    } 
                  ?>

                </section>
                </a>

              </article>


              <?php
                  endforeach; 
                  wp_reset_postdata();
                } //end if statement
              ?>

              <script type="text/javascript">
                if (screen.width >= 500) {
                  showResults();
                } else{
                  document.getElementById('splash').classList.add('hidden');
                  document.getElementById('splashBG').classList.add('hidden');
                  document.getElementById('filterResults').classList.add('hidden');
                }
              </script>

              </div> 
              </div><!-- arDiv -->
            </main>

        </div>

      </div>