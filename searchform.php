<form action="<?php echo home_url(); ?>" method="get">
<label for="search">Search Anything</label>
<!--<input type="hidden" name="cat" value="2">-->
<input type="text" name="s" id="searchme" value="<?php get_search_query(); ?>" required>
<button type="submit" class="btn btn-outline-success">Search </button>
</form>