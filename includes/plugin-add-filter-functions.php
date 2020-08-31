<?php   
function woocommerce_shop_order_search_marketingplaces( $search_fields ) {

    $search_fields[] = 'marketing_place_originario'; //id do custom field
  
    return $search_fields;
  }
  add_filter( 'woocommerce_shop_order_search_fields', 'woocommerce_shop_order_search_marketingplaces' );

  
//



