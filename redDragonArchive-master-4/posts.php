<?php
/*
 Template Name: Posts Template
*/
?>

<?php get_header(); ?>

      <div id="content">

        <div id="inner-content" class="wrap cf">

            <main id="main" class="m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

              <?php get_sidebar(); ?>

              <div class="posts">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">

                </article><!-- post-id -->

                <?php endwhile; ?>

                  <?php bones_page_navi(); ?>

                <?php else : ?>

                  <article id="post-not-found" class="hentry cf">
                      <header class="article-header">
                        <h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
                    </header>
                      <section class="entry-content">
                        <p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
                    </section>
                    <footer class="article-footer">
                        <p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
                    </footer>
                  </article>

                <?php endif; ?>

              </div> <!-- posts -->

            </main>

        </div>

      </div>


<?php get_footer(); ?>
