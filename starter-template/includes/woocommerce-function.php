<?php
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
} 

//------------- Remove product tabs ---------------------//

add_filter( 'woocommerce_product_tabs', 'imaginet_remove_all_product_tabs', 98 );
 
function imaginet_remove_all_product_tabs( $tabs ) {
  unset( $tabs['description'] );  
  unset( $tabs['reviews'] );  
  unset( $tabs['additional_information'] ); 
  return $tabs;
}
