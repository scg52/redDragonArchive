				<div id="sidebar" class="sidebar" role="complementary">

					<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
                         
                        <a id="thing" href="http://www.benrodia.com/red-dragon/alpha-v4/#toVoyage"><?php include 'reddragon_logo.php';?></a>
						<?php dynamic_sidebar( 'sidebar1' );?>
						<?php echo do_shortcode('[searchandfilter headings="Filter" types="checkbox" fields="category" order_dir="DESC" hierarchical="1" hide_empty="1" submit_label="Filter"]'); ?>

					<?php else : ?>

						<?php
							/*
							 * This content shows up if there are no widgets defined in the backend.
							*/
						?>

						<div class="no-widgets">
							<p><?php _e( 'This is a widget ready area. Add some and they will appear here.', 'bonestheme' );  ?></p>
						</div>

					<?php endif; ?>

				</div>
