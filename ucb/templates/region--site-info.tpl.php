<?php
/**
 * @file
 * Returns the HTML for the footer region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728140
 */
?>

  <footer id="site-footer" class="row <?php print $classes; ?>">
    <?php if ($content): ?>
      <div id="site-footer-content" class="col-lg-8 col-md-8">
        <?php print $content; ?>
      </div>
    <?php endif; ?>
    <?php $class = $content ? 'col-lg-4 col-md-4' : 'col-lg-12 col-md-12'; ?>
    <div id="cu-footer" class="<?php print $class; ?>">
        <p><a href="//www.ashlandcityschools.org"><img src="<?php print $base_url . '/' . drupal_get_path('theme', 'ucb'); ?>/images/beboulder/arrow-pride-orange.png" alt="Ashland City Schools" class="beboulder"/></a></p>
                <p><strong><a href="https://www.ashlandcityschools.org" class="cu-boulder-homepage-link">Ashland City School District</a></strong><br />
        <span class="required-links"><a href="http://www.ashlandcityschools.org/district/accessibility">Accessibility</a> &bull; <a href="https://www.ashlandcityschools.org/district/legal">Legal</a> &bull; <a href="http://www.ashlandcityschools.org/district/privacy">Privacy</a></span></p>
    </div>
  </footer>
