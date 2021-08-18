<?php

/**
 * Plugin Name: Ocultar productos sin imágenes
 * Plugin URI: https://diseñowebensevilla.org
 * Description: Plugin para ocultar los productos los cuales no tengan imágenes
 * Version: 1.0
 * Author: José Luis íñigio Blasco
 *
 */

add_action( 'woocommerce_product_query', 'custom_pre_get_posts_query' );
function custom_pre_get_posts_query( $query ) {

    $query->set( 'meta_query', array( array(
       'key' => '_thumbnail_id',
       'value' => '0',
       'compare' => '>'
    )));

}