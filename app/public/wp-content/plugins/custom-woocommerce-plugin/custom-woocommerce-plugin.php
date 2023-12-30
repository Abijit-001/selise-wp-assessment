<?php

/**
 * Plugin Name: Custom WooCommerce Plugin
 * Description: Adds dummy text under the price on the WooCommerce product single page.
 * Version: 1.0
 * Author: Abijit Barua
 */

// function activate_custom_woocommerce_plugin()
// {

// }
// register_activation_hook(__FILE__, 'activate_custom_woocommerce_plugin');

function add_dummy_text_under_price()
{
    echo '<div class="dummy-text">This is dummy text under the price for selise assesment.</div>';
}
add_action('woocommerce_single_product_summary', 'add_dummy_text_under_price', 20);
