<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 9.7.0
 */

defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'wp_get_attachment_image' ) ) {
	return;
}

global $product;

$attachment_ids = $product->get_gallery_image_ids();
$main_image_id  = $product->get_image_id();
?>

<div class="custom-gallery-wrapper">
	<div class="gallery-thumbnails">
		<div class="swiper swiper-thumbs">
			<div class="swiper-wrapper">
				<div class="swiper-slide thumb-item"
					data-large="<?php echo esc_url( wp_get_attachment_image_url( $main_image_id, 'full' ) ); ?>">
					<?php echo wp_get_attachment_image( $main_image_id, 'thumbnail' ); ?>
				</div>

				<?php foreach ( $attachment_ids as $image_id ) : ?>
					<div class="swiper-slide thumb-item"
						data-large="<?php echo esc_url( wp_get_attachment_image_url( $image_id, 'full' ) ); ?>">
						<?php echo wp_get_attachment_image( $image_id, 'thumbnail' ); ?>
					</div>
				<?php endforeach; ?>
			</div>

			<!-- Navigation buttons -->
			<div class="swiper-button-prev swiper-button-prev-thumb"></div>
			<div class="swiper-button-next swiper-button-next-thumb"></div>
		</div>
	</div>

	<div class="main-image-container">
		<div class="main-image">
			<img id="main-product-image" src="<?php echo esc_url( wp_get_attachment_url( $main_image_id ) ); ?>" alt="" />
		</div>

		<div class="zoom-frame">
			<img id="zoomed-image" src="<?php echo esc_url( wp_get_attachment_url( $main_image_id ) ); ?>" alt="" />
		</div>
	</div>
</div>