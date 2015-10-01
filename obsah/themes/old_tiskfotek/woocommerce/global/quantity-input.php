<?php
/**
 * Product quantity inputs
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>
<div class="col-md-1">
    
    <div class="left add-items"><a href="#"><i class="fa fa-plus"></i></a></div>
    
    <div class="left">
        <input type="text" class="items-num" name="<?php echo esc_attr( $input_name ); ?>[]" value="<?php echo esc_attr( $input_value ); ?>" title="<?php _ex( 'Qty', 'Product quantity input tooltip', 'woocommerce' ) ?>" size="4" />
    </div>
    
    <div class="left add-items"><a href="#"><i class="fa fa-minus"></i></a></div>
  
</div>
<div class="col-md-1">
    kokos
</div>
</div> <!-- Ukončení pole-blok -->