<?php

/**
 * Plugin Name: No mostrar productos 0 stock
 * Plugin URI: https://diseñowebensevilla.org
 * Description: Plugin que oculta los productos los cuales no tengan stock
 * Version: 1.0
 * Author: José Luis íñigo Blasco
 *
 */

add_action( 'pre_get_posts', 'ayudawp_ocultar_agotados' );

function ayudawp_ocultar_agotados( $q ) {

    if ( ! $q->is_main_query() || is_admin() ) {
        return;
    }

    if ( $outofstock_term = get_term_by( 'name', 'outofstock', 'product_visibility' ) ) {

        $tax_query = (array) $q->get('tax_query');

        $tax_query[] = array(
            'taxonomy' => 'product_visibility',
            'field' => 'term_taxonomy_id',
            'terms' => array( $outofstock_term->term_taxonomy_id ),
            'operator' => 'NOT IN'
        );

        $q->set( 'tax_query', $tax_query );

    }

    remove_action( 'pre_get_posts', 'ayudawp_ocultar_agotados' );

}