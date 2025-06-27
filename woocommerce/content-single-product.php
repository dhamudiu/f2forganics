<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

$benefits    = get_post_meta( $product->get_id(), '_health_benefits', true );
$description = $product->get_description();
?>
<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
	<div class="product-gallery-summary-wrapper">
		<?php
		/**
		 * Hook: woocommerce_before_single_product_summary.
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
		?>

		<div class="summary entry-summary">
			<div class="summary-wrapper">
				<?php
				/**
				 * Hook: woocommerce_single_product_summary.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 * @hooked WC_Structured_Data::generate_product_data() - 60
				 */
				do_action( 'woocommerce_single_product_summary' );
				?>
			</div>

			<div class="product-description-wrapper">
				<h2>Health Benefits</h2>

				<?php if ( ! empty( $benefits ) ) : ?>
					<?php echo wp_kses_post( wpautop( $benefits ) ); ?>
				<?php else : ?>
					<ul>
						<li>High in Protein</li>
						<li>Rich in Omega-3 Fatty Acids</li>
						<li>Supports Heart Health</li>
						<li>Boosts Immune System</li>
						<li>Contains Essential Vitamins and Minerals</li>
						<li>Promotes Healthy Skin and Coat</li>
					</ul>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="why-choose-f2f-organics">
		<h3>Why choose F2F Organics?</h3>

		<p>At F2F Organics, we are committed to providing the highest quality organic products. Our products are:</p>

		<ul>
			<li>Quality products<span>you can trust</span></li>
			<li>10 min delivery*<span>On selected locations</span></li>
			<li>On time <span>Guarantee</span></li>
			<li>Free delivery*<span>No extra cost</span></li>
			<li>Return Policy<span>No Question asked</span></li>
		</ul>
	</div>

	<?php if ( ! empty( $description ) ) : ?>
		<div class="product-description-wrapper">
			<h3>Product Description</h3>
			<div class="description-content"><?php echo wp_kses_post( $description ); ?></div>
		</div>
	<?php else : ?>
		<div class="product-description-wrapper">
			<h3>Product Description</h3>
			<div class="description-content">
				<p>Description</p>
				<p>about the product.</p>
			</div>
		</div>
	<?php endif; ?>

	<?php
	/**
	 * Hook: woocommerce_after_single_product_summary.
	 *
	 * @hooked woocommerce_output_product_data_tabs - 10
	 * @hooked woocommerce_upsell_display - 15
	 * @hooked woocommerce_output_related_products - 20
	 */
	do_action( 'woocommerce_after_single_product_summary' );
	?>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>
