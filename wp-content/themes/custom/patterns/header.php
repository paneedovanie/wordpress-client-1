<?php
/**
 * Title: Header
 * Slug: custom/header
 * Categories: header
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"20px","bottom":"20px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div
  class="wp-block-group alignwide has-base-background-color has-background header"
  style="padding-top: 20px; padding-bottom: 20px"
>
  <!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between",flexWrap":"wrap"}} -->
  <div class="wp-block-group header__logo">
    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","alignItems":"center"}} -->
    <div class="wp-block-group">
      <!-- wp:site-logo {"width":60 } /-->

      <!-- wp:group {"style":{"spacing":{"blockGap":"0px"}}} -->
      <div class="wp-block-group">
        <!-- wp:site-title {"level":0} /-->
      </div>
      <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:group -->

  <!-- wp:group -->
  <div class="wp-block-group header__search">
    <!-- wp:search {"label":"","placeholder":"Search products…","buttonText":"Search","query":{"post_type":"product"}} /-->
  </div>
  <!-- /wp:group -->

  <!-- wp:pattern {"slug":"custom/header-actions"} /-->

  <!-- wp:group -->
  <div class="wp-block-group header__navigation">
    <!-- wp:navigation {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"},"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fit","flexSize":null}}} /-->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
