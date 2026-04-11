<?php
/**
 * WooCommerce compatibility template.
 *
 * @package SummerCoolOnepage
 */

if (! defined('ABSPATH')) {
    exit;
}

get_header();
?>
<main class="section" style="background:#f8fbff;min-height:60vh;">
    <div class="container woo-shell">
        <?php woocommerce_content(); ?>
    </div>
</main>
<?php
get_footer();
