


<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
        <input type="search" id="s" name="s" value="" />
        <button type="submit" id="searchsubmit" ><?php include 'search-icon.php'; ?></button>
</form>


<script>
	var searchField = document.getElementById('s');
	var searchBtn = document.getElementById('searchsubmit');

	searchBtn.onmouseover = function(event) {
	  if (this != event.currentTarget) { return false; }
	  // searchField.classlist.addClass
	}
	searchBtn.onmouseout = function(event) {
	  if (this != event.currentTarget) { return false; }
	  // mouse leave ...
	}
</script>