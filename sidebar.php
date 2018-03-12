


<div id="sidebar" class="sidebar" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
         
    <div id="mobileHeader">
      <a id="logo" href="http://www.benrodia.com/red-dragon/beta-v3/#toVoyage">
        <h1></h1>
      </a>
      <!-- <a href="index.html" id="navA"></a> -->
      <a id="archiveLink"  href="http://www.scg52.com/Archive">
        <h1>Archive</h1>
      </a>
      <!-- <div id="compassButton"></div> -->
      <div id="menuButton">Filter</div>
    <?php dynamic_sidebar( 'sidebar1' );?>
    </div>
    <div id="filterContent">
		<ul>
      <li>
        <h3>Media Type</h3>
        <ul>
          <?php
                  foreach (get_categories('hide_empty=1&orderby=name&order=ASC&parent=4') as $category){
                    echo "<li id=\"select-" . $category->slug . "\" class=\"category-select\">";
                    echo "<a href=\"" . get_home_url() . "?category=" . $category->slug . "\" class=\"sidebar-links\">";
                    echo $category->name;
                    echo "<div class='checkmark'></div></a>";
                    echo "</li>";
                  } ?>
                </ul>
      </li>
			<li>
				<h3>Author</h3>
				<ul>
				  <?php
                  foreach (get_categories('hide_empty=1&orderby=name&order=DESC&parent=2') as $category){
                    echo "<li id=\"select-" . $category->slug . "\" class=\"category-select\">";
                    echo "<a href=\"" . get_home_url() . "?category=" . $category->slug . "\" class=\"sidebar-links\">";
                    echo $category->name;
                    echo "<div class='checkmark'></div></a>";
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
                    echo "<a href=\"" . get_home_url() . "?category=" . $category->slug . "\" class=\"sidebar-links\">";
                    echo $category->name;
                    echo "<div class='checkmark'></div></a>";
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
</div>

        <script>
          function hasClass(element, cls) {
              return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
          }

          var filterBtn = document.getElementById('menuButton');
          var filterContent = document.getElementById('filterContent');
          var sidebar = document.getElementById('sidebar');

              filterBtn.addEventListener("click", function(){
                    
                    if (hasClass(filterContent, 'openFilter')) {
                      filterContent.classList.remove('openFilter');
                      sidebar.classList.remove('openMenu');
                    } else {
                      filterContent.classList.add('openFilter');
                      sidebar.classList.add('openMenu');
                    }
              });

        </script>

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

.openFilter {
  opacity: 1 !important;
  pointer-events: all !important;
}

.openMenu {
  height: 100% !important;
}


				</style>