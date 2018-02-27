<?php
/*
 Template Name: Homepageposts Template
*/
?>
<!--

                                          `-.`'.-'
                                       `-.        .-'.
                                    `-.    -./\.-    .-'
                                        -.  /_|\  .-
                                    `-.   `/____\'   .-'.
                                 `-.    -./.-""-.\.-      '
                                    `-.  /< (()) >\  .-'
                                  -   .`/__`-..-'__\'   .-
                                ,...`-./___|____|___\.-'.,.
                                   ,-'   ,` . . ',   `-,
                                ,-'   ________________  `-,
                                   ,'/____|_____|_____\
                                  / /__|_____|_____|___\
                                 / /|_____|_____|_____|_\
                                ' /____|_____|_____|_____\
                              .' /__|_____|_____|_____|___\
                             ,' /|_____|_____|_____|_____|_\
,,---''--...___...--'''--.. /../____|_____|_____|_____|_____\ ..--```--...___...--``---,,
                           '../__|_____|_____|_____|_____|___\
      \    )              '.:/|_____|_____|_____|_____|_____|_\               (    /
      )\  / )           ,':./____|_____|_____|_____|_____|_____\             ( \  /(
     / / ( (           /:../__|_____|_____|_____|_____|_____|___\             ) ) \ \
    | |   \ \         /.../|_____|_____|_____|_____|_____|_____|_\           / /   | |
 .-.\ \    \ \       '..:/____|_____|_____|_____|_____|_____|_____\         / /    / /.-.
(=  )\ `._.' |       \:./ _  _ ___  ____ ____ _    _ _ _ _ _  _ ___\        | `._.' /(  =)
 \ (_)       )       \./  |\/| |__) |___ |___ |___ _X_ _X_  \/  _|_ \       (       (_) /
  \    `----'         """"""""""""""""""""""""""""""""""""""""""""""""       `----'    /
   \   ____\__          __ __    _  __ _     _  __ ________    _____        __/____   /
    \ (=\     \        (_ |_ |V||_)|_ |_)   |_|(_ /   |  |    |_  |        /     /-) /
     \_)_\     \       __)|__| ||  |__| \   | |__)\___|__|_   |  _|_      /     /_(_/
          \     \                                                        /     /
           )     )  _                                                _  (     (
          (     (,-' `-..__                                    __..-' `-,)     )
           \_.-''          ``-..____                  ____..-''          ``-._/
            `-._                    ``--...____...--''                    _.-'
                `-.._                                                _..-'
                     `-..__       All Hail Thomas Hood          __..-'
                           ``-..____                  ____..-''
                                    ``--...____...--'' -->

<?php get_header(); ?>

      <div id="content">

        <div id="inner-content" class="cf">

            <main id="main" class="arcHome m-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

                          <?php get_sidebar(); ?>

                          <div class="arDiv">

                            <div id="splash">
                              Splash Page
                            </div>
              
              
              <?php
              $allposts = get_posts();
 
               if ( $allposts ) {
                  foreach ( $allposts as $post ) :
                      setup_postdata( $post );
            ?>

              <article id="post-<?php the_ID(); ?>" <?php post_class( 'hidden' ); ?> role="article" style="background-image: url("");">

                <header class="entry-header article-header">

                  <h3 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                  

                </header>

                <figure class="entry-content cf">

                  <?php the_post_thumbnail(array(300, 212)); ?>

                  <figcaption></figcaption>

                </figure>

              </article>

              <?php
                  endforeach; 
                  wp_reset_postdata();
                } //end if statement
              ?>

              </div> <!-- arDiv -->

            </main>

        </div>

      </div>