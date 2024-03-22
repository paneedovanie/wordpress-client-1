<?php
/**
 * Title: Header Actions
 * Slug: custom/header-actions
 * Categories: header, call-to-action
 */
?>

<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"right","flexWrap":"wrap"}} -->
<div class="wp-block-group header__actions">
    <!-- wp:button -->
    <div class="wp-block-button">
        <a class="wp-block-button__link wp-element-button"
        href="my-account"
            ><?php echo esc_html_x( 'Login', 'Button text of the hero section', 'custom' ); ?></a
        >
    </div>
    <!-- /wp:button -->

    <!-- wp:woocommerce/mini-cart /-->
</div>
<!-- /wp:group -->