<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

$per_unit_price = 'N/A';

if ( $product->is_type( 'variable' ) ) {
	$available_variations = $product->get_available_variations();
	$variation_prices     = '';

	foreach ( $available_variations as $variation ) {
		$variation_obj = wc_get_product( $variation['variation_id'] );

		if ( ! $variation_obj || ! $variation_obj->is_purchasable() ) {
			continue;
		}

		$price_html = $variation_obj->get_price_html();
		$attributes = wc_get_formatted_variation( $variation_obj, true, false );

		$unit_label = '';
		$unit_value = 0;
		$unit_type  = 'N/A';

		foreach ( $variation['attributes'] as $attr_val ) {
			if ( preg_match( '/([\d\.]+)\-(kg|g|l|ml)/i', $attr_val, $matches ) ) {
				$val  = (float) $matches[1];
				$unit = strtolower( $matches[2] );

				if ( 'kg' === $unit ) {
					$unit_value = $val * 1000;
					$unit_type  = 'g';
				} elseif ( 'g' === $unit ) {
					$unit_value = $val;
					$unit_type  = 'g';
				} elseif ( 'l' === $unit ) {
					$unit_value = $val * 1000;
					$unit_type  = 'ml';
				} elseif ( 'ml' === $unit ) {
					$unit_value = $val;
					$unit_type  = 'ml';
				}

				$unit_label = "{$val} {$unit}";

				break;
			}
		}

		if ( $unit_value > 0 ) {
			$per_unit_price = round( (float) $variation_obj->get_price() / $unit_value, 2 );
		}

		$checked = in_array( $attributes, array( '1 kg', '1 l' ), true ) ? 'checked' : '';

		$variation_prices .= '<label class="variation-price">';
		$variation_prices .= '<span>' . $attributes . '</span>';
		$variation_prices .= '<span>' . $price_html . '</span>';
		$variation_prices .= '<span>(₹' . $per_unit_price . ' / ' . $unit_type . ')</span>';
		$variation_prices .= '<input type="radio" name="selected_variation" value="' . esc_attr( $variation_obj->get_id() ) . '" class="variation-radio" ' . $checked . '>';
		$variation_prices .= '</label>';
	}

	if ( ! empty( $variation_prices ) ) {
		echo '<div class="variation-price-list">';
		echo '<h5>' . esc_html__( 'Price List', 'woocommerce' ) . '</h5>';
		echo $variation_prices;
		echo '</div>';
	}
} else {
	$unit_value = 0;
	$unit_type  = 'N/A';
	$val        = $product->get_weight();
	$unit       = get_option( 'woocommerce_weight_unit' );

	if ( ! empty( $val ) && ! empty( $unit ) ) {
		if ( 'kg' === $unit ) {
			$unit_value = $val * 1000;
			$unit_type  = 'g';
		} elseif ( 'g' === $unit ) {
			$unit_value = $val;
			$unit_type  = 'g';
		} elseif ( 'l' === $unit ) {
			$unit_value = $val * 1000;
			$unit_type  = 'ml';
		} elseif ( 'ml' === $unit ) {
			$unit_value = $val;
			$unit_type  = 'ml';
		}

		$unit_label = "{$val} {$unit}";

		if ( $unit_value > 0 ) {
			$per_unit_price = round( (float) $product->get_price() / $unit_value, 2 );
		}
	}

	echo '<div class="non-variation-price-list">';
	echo '<h5>' . esc_html__( 'Price', 'woocommerce' ) . '</h5>';
	echo '<div class="non-variation-price">';
	echo '<span>' . esc_html( ! empty( $product->get_weight() ) ? $product->get_weight() : '1' ) . ' ' . esc_html( get_option( 'woocommerce_weight_unit' ) ) . '</span>';
	echo '<span>' . $product->get_price_html() . '</span>';
	echo '<span>(₹' . esc_html( $per_unit_price ) . ' / ' . esc_html( $unit_type ) . ')</span>';
	echo '</div>';
	echo '</div>';
}

custom_product_loop_display();
