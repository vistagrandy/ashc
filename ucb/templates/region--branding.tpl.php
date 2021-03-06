<?php
  global $base_url;
  $color = isset($logo_color) ? $logo_color : 'black';
  $logo = $base_url . '/' . drupal_get_path('theme', 'ucb') . '/images/ashc-header' . '.svg';

?>
<div class="brand-bar brand-bar-color-<?php print $color; ?> no-underline">
  <div class="container">
    <div class="brand-bar-container">
      <div class="brand-logo">
        <a href="http://www.ashlandcityschools.org"><img src="<?php print $logo; ?>" alt="Ashland City Schools District" /></a>
      </div>
      <div class="brand-links">
      </div>
      <div class="search-toggle-wrapper">
        <a href="https://www.ashlandcityschools.org/search" id="search-toggle" class="search-toggle" aria-haspopup="true" aria-expanded="false" aria-controls="search" aria-label="Search"><i class="fa fa-search fa-fw"></i><span class="element-invisible">Search </span></a>
      </div>
    </div>
  </div>
</div>
