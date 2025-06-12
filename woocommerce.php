<?php
get_header();

// get pagte title
if ( is_product_category() ) {
	$category            = get_queried_object();
	$breadcrumb_subtitle = esc_html( $category->name );
} elseif ( is_product_tag() ) {
	$tag                 = get_queried_object();
	$breadcrumb_subtitle = esc_html( $tag->name );
} elseif ( is_product() ) {
	$breadcrumb_subtitle = the_title( '', '', false );
} elseif ( is_shop() ) {
	$breadcrumb_subtitle = 'Shop';
} else {
	$breadcrumb_subtitle = esc_html( get_the_title() );
}

$featured_image = get_the_post_thumbnail_url( get_the_ID(), 'full' );
?>

<main id="primary" class="site-main">
	<section class="how-overlay2 bg-img1 mb-5"
		style="background-image: url(<?php echo esc_attr( $featured_image ); ?>);">
		<div class="container">
			<div class="txt-center p-t-160 p-b-165">
				<h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
					<?php echo esc_html( $breadcrumb_subtitle ); ?>
				</h2>

				<?php woocommerce_breadcrumb(); ?>
			</div>
		</div>
	</section>

	<?php
	/**
	 * Hook: woocommerce_before_main_content
	 */
	do_action( 'woocommerce_before_main_content' );

	woocommerce_content();

	/**
	 * Hook: woocommerce_after_main_content
	 */
	do_action( 'woocommerce_after_main_content' );
	?>
</main>

<?php
get_footer();
