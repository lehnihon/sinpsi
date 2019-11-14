<!-- Start Search -->
<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
<div class="input-group search-group">
  <input type="text" name="s" class="form-control search-input" placeholder="Pesquisar no site" value="<?php echo get_search_query() ?>">
  <div class="input-group-append">
    <button class="search-btn" type="submit" id="button-addon1"><i class="fas fa-search"></i></button>
  </div>
</div>
</form>
<br>
<!-- End Search -->