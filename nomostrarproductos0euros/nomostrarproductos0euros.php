<?php

/**
 * Plugin Name: No mostrar productos 0 euros 
 * Plugin URI: https://diseñowebensevilla.org
 * Description: Plugin que oculta los productos los cuales su valor esté vacío o tenga valor 0 euros / dolars
 * Version: 1.0
 * Author: José Luis íñigio Blasco
 *
 */

function auto_add_product_to_trash(){
    global $wpdb;

    $number_of_products_processed = $wpdb->query("
        UPDATE {$wpdb->prefix}posts as a
        JOIN {$wpdb->prefix}postmeta AS b ON a.ID = b.post_id
        JOIN {$wpdb->prefix}postmeta AS c ON a.ID = c.post_id
        SET a.post_status = 'trash'
        WHERE a.post_status LIKE 'publish' AND a.post_type LIKE 'product'
        AND b.meta_key LIKE '_price' AND c.meta_key LIKE '_sale_price'
        AND ( b.meta_value LIKE '' OR b.meta_value LIKE '0' )
        AND c.meta_value != '0'
    ");

    // Return the number of products added to trash
    return $number_of_products_processed;
}

// Execute the function - Run it just once and comment it
auto_add_product_to_trash();