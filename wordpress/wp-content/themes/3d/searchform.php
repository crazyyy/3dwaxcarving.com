<div class="searchform-block">
<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
	<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" />
	<button type="submit" id="searchsubmit"><img src="<?php echo get_template_directory_uri(); ?>/images/search.png" /></button>
</form>
</div>
