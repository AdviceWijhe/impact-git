<div class="search">
<i class="far fa-search openSearchForm"></i>

<form id="searchform" class="shadow" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="search-field" name="s" placeholder="Wat zoekt u?" value="<?php echo get_search_query(); ?>">
    <input type="submit" class="btn btn-primary ml-3" value="Zoeken">
</form>
</div>