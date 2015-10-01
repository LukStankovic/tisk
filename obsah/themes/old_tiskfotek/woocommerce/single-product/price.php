<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<div class="product-specs price-block" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
    <?php if ( $price_html = $product->get_price_html() ) : ?>
       <div class="price-box">
            <span class="product-price">
                <?php echo $product->get_price_html(); ?>
                <meta itemprop="price" content="<?php echo $product->get_price(); ?>" />
                <meta itemprop="priceCurrency" content="<?php echo get_woocommerce_currency(); ?>" />
            </span>
        </div>
       <?php else: ?>
       <div class="box error-box">No Price Added.</div>
    <?php endif; ?>
</div>