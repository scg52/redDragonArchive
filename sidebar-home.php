


<div id="sidebar" class="sidebar" role="complementary">

	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>
         
        <a id="logo" href="http://www.benrodia.com/red-dragon/beta-v3/#toVoyage">
        	<img src="<?php echo get_template_directory_uri();?>/library/images/reddragon_white.png">
        </a>
        <a id="archiveLink"  href="http://www.scg52.com/Archive">
          <h1>Archive</h1>
        </a>
		<?php dynamic_sidebar( 'sidebar1' );?>
		<ul>
			<li>
				<h3>Author</h3>
				<ul>
				  <?php
                  foreach (get_categories('hide_empty=1&orderby=name&order=DESC&parent=2') as $category){
                    if($selectedCategory == $category->slug){
                      echo "<li id=\"select-" . $category->slug . "\" class=\"category-select checked\">";
                      echo $category->name;
                      echo "<div class='checkmark'></div>";
                      echo "</li>";
                    }else{
                      echo "<li id=\"select-" . $category->slug . "\" class=\"category-select\">";
                      echo $category->name;
                      echo "<div class='checkmark'></div>";
                      echo "</li>";
                    }
                  } ?>
                </ul>
			</li>
			<li>
				<h3>Location</h3>
				<ul>
				  <?php
                  foreach (get_categories('hide_empty=1&orderby=name&parent=3') as $category){
                    if($selectedCategory == $category->slug){
                      echo "<li id=\"select-" . $category->slug . "\" class=\"category-select checked\">";
                      echo $category->name;
                      echo "<div class='checkmark'></div>";
                      echo "</li>";
                    }else{
                      echo "<li id=\"select-" . $category->slug . "\" class=\"category-select\">";
                      echo $category->name;
                      echo "<div class='checkmark'></div>";
                      echo "</li>";
                    }
                  } ?>
                </ul>
			</li>
			<li>
				<h3>Media Type</h3>
				<ul>
				  <?php
                  foreach (get_categories('hide_empty=1&orderby=name&order=ASC&parent=4') as $category){
                    if($selectedCategory == $category->slug){
                      echo "<li id=\"select-" . $category->slug . "\" class=\"category-select checked\">";
                      echo $category->name;
                      echo "<div class='checkmark'></div>";
                      echo "</li>";
                    }else{
                      echo "<li id=\"select-" . $category->slug . "\" class=\"category-select\">";
                      echo $category->name;
                      echo "<div class='checkmark'></div>";
                      echo "</li>";
                    }
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




				<script type="text/javascript">

          var catEl = document.getElementsByClassName('category-select');

					for (var i = 0; i < catEl.length; i++) {
						catEl[i].addEventListener("click", function(){
                          
                          if (hasClass(this, 'checked')) {
                          	this.classList.remove('checked');
                          } else {
                          	this.classList.add('checked');
                          }

                          showResults();
                          
					    });
					}

					function showResults(){
						            var catEl = document.getElementsByClassName('category-select');
                        var checkedCats = document.getElementsByClassName('checked');
                        var splashEl = document.getElementById('splash');
                        var splashBGEl = document.getElementById('splashBG');
                        var postAreaEl = document.getElementById('postArea');
                        var filterResultsEl = document.getElementById('filterResults');
                        var homeOrFilterEl = document.getElementById('homeOrFilter');
                        var getID;
                        var switchlist;

                        //if any category is selected hide splash page
                        if (checkedCats.length > 0) {
                          splashEl.classList.add('hidden');
                          splashBGEl.classList.add('slideHide');
                          homeOrFilterEl.innerHTML = 'Filter';

                          postArea.classList.remove('hidden');
                          filterResultsEl.classList.remove('slideHide');
                        }else {
                          splashEl.classList.remove('hidden');
                          splashBGEl.classList.remove('slideHide');
                          homeOrFilterEl.innerHTML = 'Archive';

                          postArea.classList.add('hidden');
                          filterResultsEl.classList.add('slideHide');
                        }

                        //hide all posts then add them back in if they are checked
                        switchlist = document.getElementsByClassName('post');
                        console.log("switchlist add slideHide: " + switchlist);
                        for (var i = 0; i < switchlist.length; i++) {
                        	if(!hasClass(switchlist[i], 'slideHide')){
                            switchlist[i].classList.add('slideHide');
          						      switchlist[i].classList.add('hidden');
          						    }
                          filterResultsEl.innerHTML = '<h3>Filters:</h3>';
                        }

                        var holdingID;
                        var holdingContent;
                        //search all the categories for ones with the class of checked
                        for (var i = 0; i < checkedCats.length; i++) {
                          
                        	for (var j = 0; j < catEl.length; j++) {
                        		if (checkedCats[i] == catEl[j]) {
                              holdingID = checkedCats[i].id;
                              holdingID = holdingID.replace('select', 'label');
                              holdingContent = holdingID.replace(/-/g, ' ');
                              holdingContent = holdingContent.replace('label', '');
                              filterResultsEl.innerHTML += '<div id="' + holdingID + '"class="filter-label">' + holdingContent + ' <span>X</span></div>';
                              document.getElementById(holdingID).addEventListener("click", function(){
                                console.log('holla');
                                      var getNewID = this.id;
                                      getNewID = getNewID.replace('label', 'select');
                                      var catEl = document.getElementById(getNewID);
                                      catEl.classList.remove('checked');

                                      showResults();

                              });
                        			// if the box has div checked then remove class slideHide from all posts
                        			getID = catEl[i].id;
						                  getID = getID.replace('select', 'category');
						                  switchlist = document.getElementsByClassName(getID);

						                  for (var i = 0; i < switchlist.length; i++) {
						                    //don't remove a class from an object that has already had it removed
						                    if(hasClass(switchlist[i], 'slideHide')){
                                  switchlist[i].classList.remove('slideHide');
						              	      switchlist[i].classList.remove('hidden');
						                    }
                        		  }/*for switchlist*/
                        	  }/*if checkedCats = atEl*/
                          }/*for catEl*/
                        }/*for checkedCats*/
					} /*function*/

					function hasClass(element, cls) {
                        return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
                    }
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

				</style>