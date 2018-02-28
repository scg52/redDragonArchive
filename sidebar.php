


<div id="sidebar" class="sidebar" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
         
        <a id="logo" href="http://www.benrodia.com/red-dragon/beta-v3/#toVoyage">
        	<img src="<?php echo get_template_directory_uri();?>/library/images/reddragon_white.png">
        </a>
        <a id="archiveLink"  href="http://www.benrodia.com/red-dragon/archive">
          <h1>Archive</h1>
        </a>
		<?php dynamic_sidebar( 'sidebar1' );?>
		<ul>
			<li>
				<h3>Author</h3>
				<ul>
          </a>
				  <?php
                  foreach (get_categories('hide_empty=1&orderby=name&order=DESC&parent=2') as $category){
                    echo "<li id=\"select-" . $category->slug . "\" class=\"category-select\">";
                    echo "<a href=\"" . get_home_url() . "?category=" . $category->slug . "\">";
                    echo $category->name;
                    echo "<div class='checkmark'></a></div>";
                    echo "</li>";
                  } ?>
                </ul>
			</li>
			<li>
				<h3>Location</h3>
				<ul>
				  <?php
                  foreach (get_categories('hide_empty=1&orderby=name&parent=3') as $category){
                    echo "<li id=\"select-" . $category->slug . "\" class=\"category-select\">";
                    echo "<a href=\"" . get_home_url() . "?category=" . $category->slug . "\">";
                    echo $category->name;
                    echo "<div class='checkmark'></a></div>";
                    echo "</li>";

                  } ?>
                </ul>
			</li>
			<li>
				<h3>Media Type</h3>
				<ul>
				  <?php
                  foreach (get_categories('hide_empty=1&orderby=name&order=ASC&parent=4') as $category){
                    echo "<li id=\"select-" . $category->slug . "\" class=\"category-select\">";
                    echo "<a href=\"" . get_home_url() . "?category=" . $category->slug . "\">";
                    echo $category->name;
                    echo "<div class='checkmark'></a></div>";
                    echo "</li>";
                  } ?>
                </ul>
			</li>
		</ul>

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

				<style>
					
.hidden{
 display: none;
}
.slideHide{
  opacity: 0 !important;
  transition: 1s;
  transform-origin: 50% 50%;
  transform: translateX(10rem); 
}

.checked{
 font-weight: bold;
}

.checked:hover .checkmark {
 background: #f23535;
 border-color: #f23535;
}

.checked .checkmark{
 background: #fffcfc;
}

				</style>