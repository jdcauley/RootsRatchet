<nav class="bar-standard bar-header-secondary">
    <form role="search" method="get" id="searchform" class="form-search" action="<?php echo home_url('/'); ?>">
      <input type="text" value="<?php if (is_search()) { echo get_search_query(); } ?>" name="s" id="s" class="search-query" placeholder="Search">
    </form>
  </nav>
